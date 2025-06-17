<?php 
require_once 'authentication/admin-class.php';

$admin = new ADMIN();
if(!$admin->isUserLoggedIn())
{
    $admin->redirect('../../');
}

$stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
$stmt->execute(array(":id" => $_SESSION['adminSession']));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="index.php.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">


</head>
<body>

<div class="main">
    <h1>WELCOME TO THE ADMIN PAGE! <br><?php echo $user_data['email']?></h1>
    <button><a href="authentication/admin-class.php?admin_signout">SIGN OUT</a></button>

</body>
</html>
</div>