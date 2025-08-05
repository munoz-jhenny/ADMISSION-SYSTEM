<?php
$file = __DIR__ . '/../../database/dbconnection.php';
if (!file_exists($file)) {
    die("DB connection file not found at: " . $file);
}
require_once $file;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 1. Create DB connection
    $db = new Database();
    $conn = $db->dbConnection();

    // 2. Upload files (reuse upload logic from earlier message)
    function uploadFile($file, $folder = "uploads")
    {
        $target_dir = $folder . "/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        $filename = uniqid() . "_" . basename($file["name"]);
        $target_file = $target_dir . $filename;

        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return null;
        }
    }

    function uploadMultipleFiles($files, $folder = "uploads")
    {
        $paths = [];
        foreach ($files["tmp_name"] as $index => $tmpName) {
            $name = $files["name"][$index];
            $file = [
                "name" => $name,
                "tmp_name" => $tmpName
            ];
            $path = uploadFile($file, $folder);
            if ($path) $paths[] = $path;
        }
        return json_encode($paths);
    }

    // 3. Get form data
    $full_name = $_POST["full_name"];
    $address = $_POST["address"];
    $barangay = $_POST["barangay"]; // ✅ right after address
    $birth_date = $_POST["birth_date"];
    $place_of_birth = $_POST["place_of_birth"];
    $phone_number = $_POST["phone_number"];
    $employment_status = $_POST["employment_status"];
    $income_level = $_POST["income_level"];
    $income_amount = $_POST["income_amount"];

    $valid_id_path = uploadFile($_FILES["valid_id"]);
    $certificate_path = uploadFile($_FILES["certificate_of_low_income"]);
    $signature_paths = uploadMultipleFiles($_FILES["specimen_signature"]);

    // 4. Insert into DB — match column order
    $stmt = $conn->prepare("INSERT INTO tupad_applications 
    (full_name, address, barangay, birth_date, place_of_birth, phone_number, employment_status, income_level, income_amount, valid_id_path, certificate_of_low_income_path, specimen_signature_paths, status)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'new')");

    $stmt->execute([
        $full_name,
        $address,
        $barangay,
        $birth_date,
        $place_of_birth,
        $phone_number,
        $employment_status,
        $income_level,
        $income_amount,
        $valid_id_path,
        $certificate_path,
        $signature_paths
    ]);


    echo "<script>alert('Application submitted successfully!'); window.location.href='../../admission.php';</script>";
}
