<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>การบ้าน PHP</title>
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
    // ส่วนที่ 2: การใช้ Loop
    // -------------------------------

    echo "<h2>ใช้ Loop for</h2>";
    echo "<div class='output'>";
    for ($i = 1; $i <= 4; $i++) {
        echo str_repeat("*", $i) . "<br>";
    }
    echo "</div>";
    echo "<div class='note'>นี่คือการใช้ for loop เพื่อสร้างรูปแบบดาวเพิ่มขึ้นทีละบรรทัด</div>";

    echo "<h2>ใช้ Loop while</h2>";
    echo "<div class='output'>";
    $num = 1;
    while ($num <= 3) {
        echo str_repeat($num . " ", 4) . "<br>";
        $num++;
    }
    echo "</div>";
    echo "<div class='note'>นี่คือการใช้ while loop เพื่อสร้างตัวเลขซ้ำกัน 4 ครั้งในแต่ละบรรทัด</div>";

    echo "<h2>ใช้ Loop do while</h2>";
    echo "<div class='output'>";
    $j = 1;
    do {
        echo str_repeat($j . " ", $j) . "<br>";
        $j++;
    } while ($j <= 3);
    echo "</div>";
    echo "<div class='note'>นี่คือการใช้ do while loop เพื่อสร้างสามเหลี่ยมตัวเลข</div>";

    echo "<h2>ใช้ Loop for สร้างกรอบ</h2>";
    echo "<div class='output'>";
    $rows = 5;
    for ($r = 1; $r <= $rows; $r++) {
        if ($r == 1 || $r == $rows) {
            echo str_repeat("* ", 6) . "<br>";
        } else {
            echo "* " . str_repeat(($r-1) . " ", 4) . "*<br>";
        }
    }
    echo "</div>";
    echo "<div class='note'>นี่คือการใช้ for loop เพื่อสร้างกรอบล้อมด้วยเครื่องหมาย * และตัวเลขอยู่ด้านใน</div>";

    echo "<h2>ใช้ Loop while ตัวเลขกลับด้าน</h2>";
    echo "<div class='output'>";
    $k = 3;
    while ($k >= 1) {
        echo str_repeat($k . " ", $k) . "<br>";
        $k--;
    }
    echo "</div>";
    echo "<div class='note'>นี่คือการใช้ while loop เพื่อสร้างตัวเลขเรียงจากมากไปน้อย</div>";
    ?>
</body>
</html>