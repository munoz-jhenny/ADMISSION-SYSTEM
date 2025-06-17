<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barangay Clearance</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background: rgb(233, 230, 247);
            padding: 30px;
        }

        .clearance-container {
            width: 8.5in;
            height: 11in;
            padding: 40px;
            background: #dbe7ff;
            border: 1px solid #000;
            position: relative;
            margin: auto;
            background-image: url('bg_watermark.png'); /* Optional watermark */
            background-size: cover;
            background-position: center;
        }

        .header, .footer {
            text-align: center;
        }

        .header h2, .header h4 {
            margin: 0;
        }

        .seal {
            position: absolute;
            top: 30px;
            right: 50px;
            width: 80px;
        }

        .title {
            text-align: center;
            margin: 30px 0;
            font-size: 30px;
        }

        .content {
            margin: 30px 0;
            font-size: 18px;
            line-height: 1.6;
            text-align: justify;
        }

        .signature-section {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }

        .signature-section div {
            width: 45%;
            text-align: center;
        }

        .details {
            margin-top: 30px;
            font-size: 16px;
        }

        .ref-section {
            text-align: right;
            font-size: 14px;
            margin-top: 20px;
        }

        .barcode {
            width: 100px;
            margin-top: 10px;
        }

        .button-container {
            display: flex;
            justify-content: flex-start;
            gap: 10px;
            position: absolute;
            top: 30px;
            left: 30px;
            z-index: 100;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:disabled {
            background-color: #cccccc;
        }

        .extra-boxes {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            width: 220px;
        }

        .extra-boxes div {
            border: 1px solid #000;
            width: 100px;
            height: 50px;
        }
    </style>
</head>
<body>

<div class="button-container">
    <a href="javascript:history.back()" style="
        text-decoration: none;
        background-color:rgb(214, 31, 31);
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-family: Arial, sans-serif;
    ">← Back</a>

    <form id="clearanceForm" onsubmit="submitForm(event)">
        <button type="submit" class="submit-btn" id="submitBtn">Submit</button>
    </form>
</div>

<div class="clearance-container">
<img src="src/img/logo.png" class="seal">

    <div class="header">
        <h4>Republic of the Philippines</h4>
        <h4>Province of Pampanga</h4>
        <h4>Municipality of Lubao</h4>
        <h4><strong>Barangay CALANGAIN</h4>
    </div>

    <div class="title"><strong>Barangay Clearance</strong></div>

    <div class="content">
        To Whom It May Concern:<br><br>
        This is to Clarify that <strong>________________________</strong>, y/o <strong>____</strong>, whose postal address at Block _____, Lot _____, Sector _____, is presently residing at Barangay Calangain, Lubao Pampanga.
        <br><br>
        Further certifies that herein grantee has no derogatory record and has a good moral character as per our Barangay Record is Concerned.
        <br><br>
        This BARANGAY CERTIFICATION has been issued upon request of the above-mentioned person, for whatever legal purposes it may serve.
        <br><br>
        Given this “<strong>_____</strong>” day of “<strong>_________  ______</strong>”.
    </div>

    <div class="signature-section">
        <div>
            _______________________<br>
            Bearer Signature
        </div>
        <div>
            <strong>Approved:</strong><br>
            <u>Hon. Mario O. Manalili</u><br>
            Punong Barangay
        </div>
    </div>

    <div class="signature-section" style="margin-top: 30px;">
        <div class="details">
            CTCT No: ________________<br>
            ISSUED at: ________________<br>
            ISSUED on: ________________
        </div>
        <div>
            <strong>Issued By:</strong><br>
            <u>Sec. Kimberly B. Laxa</u><br>
            Barangay Secretary
        </div>
    </div>

    <div class="ref-section">
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=AW43SD09SD&size=100x100" class="barcode"><br>
        REF#: AW43SD09SD
    </div>

    <div class="extra-boxes">
        <div></div>
        <div></div>
    </div>

</div>

<script>
    function submitForm(event) {
        event.preventDefault();
        const submitBtn = document.getElementById('submitBtn');
        submitBtn.textContent = 'Already Submitted';
        submitBtn.disabled = true;
    }
</script>

</body>
</html>
