<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แนะนำตัว</title>
    <style>
        body {
            font-family: "Tahoma", sans-serif;
            background-color: #f0f8ff;
            margin: 30px;
        }
        .card {
            background: #ffffff;
            border: 2px solid #4682b4;
            border-radius: 10px;
            padding: 20px;
            width: 500px;
            margin: auto;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            text-align: center;
        }
        h1, h2 {
            color: #4682b4;
        }
        p {
            font-size: 18px;
        }
        .output {
            background: #fff8dc;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 15px auto;
            width: 400px;
            font-family: monospace;
            text-align: left;
        }
        .note {
            font-size: 14px;
            color: #555;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<?php
    // -------------------------------
    // ส่วนที่ 1: ข้อมูลนักศึกษา
    // -------------------------------
    $university = "";
    $faculty = "";
    $major = "";
    $studentName = "";
    $introduce = "";
?>
    <div class="card">
        <?php
$image_url = "data:image/jpeg;base64,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";
    ?>
    <img src="<?php echo $image_url; ?>" width="300">
        <p><strong>มหาวิทยาลัย: ราชภัฏอุดรธานี</strong> <?php echo $university; ?></p>
        <p><strong>คณะ: วิทยาศาสตร์</strong> <?php echo $faculty; ?></p>
        <p><strong>สาขา: เทคโนโลยีสารสนเทศ</strong> <?php echo $major; ?></p>
        <p><strong>แนะนำตัว</strong> <?php echo $introduce; ?></p>
        <h5>เป็นคนง่าย ๆ ง่วงก็หลับ หิวก็กิน ไม่งอแง (ยกเว้นตอนง่วงและหิวพร้อมกัน) 😆 อย่าลืมติดตามยูปกันนะ</h5>
        <a href="https://www.youtube.com/@amonkung555">กดปุ่มนี้เพื่อไปติดตาม</a>
        <a href="loop.php">กดเพื่อดูLoop</a>
    </div>
</body>
</html>
