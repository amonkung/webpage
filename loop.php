<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>การบ้าน PHP</title>
    <style>
        body { font-family: "Tahoma", sans-serif; background-color: #f0f8ff; margin: 30px; }
        .output { background: #fff8dc; border: 1px solid #ccc; padding: 10px; margin: 15px auto; width: 400px; font-family: monospace; text-align: left; }
        .note { font-size: 14px; color: #555; margin-top: 5px; }
        h2 { color: #4682b4; }
    </style>
</head>
<body>

<?php
$size = 4; // กำหนดขนาดเองได้

// -------------------------------
// 1) สามเหลี่ยมดาว
// -------------------------------
echo "<h2>สามเหลี่ยมดาว</h2>";

// for
echo "<div class='output'>";
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat("*", $i) . "<br>";
}
echo "</div><div class='note'>ใช้ for loop</div>";

// while
echo "<div class='output'>";
$i = 1;
while ($i <= $size) {
    echo str_repeat("*", $i) . "<br>";
    $i++;
}
echo "</div><div class='note'>ใช้ while loop</div>";

// do while
echo "<div class='output'>";
$i = 1;
do {
    echo str_repeat("*", $i) . "<br>";
    $i++;
} while ($i <= $size);
echo "</div><div class='note'>ใช้ do while loop</div>";


// -------------------------------
// 2) ตัวเลขซ้ำแนวนอน
// -------------------------------
echo "<h2>ตัวเลขซ้ำแนวนอน</h2>";

// for
echo "<div class='output'>";
for ($i = 1; $i <= 3; $i++) {
    echo str_repeat($i . " ", 4) . "<br>";
}
echo "</div><div class='note'>ใช้ for loop</div>";

// while
echo "<div class='output'>";
$i = 1;
while ($i <= 3) {
    echo str_repeat($i . " ", 4) . "<br>";
    $i++;
}
echo "</div><div class='note'>ใช้ while loop</div>";

// do while
echo "<div class='output'>";
$i = 1;
do {
    echo str_repeat($i . " ", 4) . "<br>";
    $i++;
} while ($i <= 3);
echo "</div><div class='note'>ใช้ do while loop</div>";


// -------------------------------
// 3) สามเหลี่ยมตัวเลข
// -------------------------------
echo "<h2>สามเหลี่ยมตัวเลข</h2>";

// for
echo "<div class='output'>";
for ($i = 1; $i <= 3; $i++) {
    echo str_repeat($i . " ", $i) . "<br>";
}
echo "</div><div class='note'>ใช้ for loop</div>";

// while
echo "<div class='output'>";
$i = 1;
while ($i <= 3) {
    echo str_repeat($i . " ", $i) . "<br>";
    $i++;
}
echo "</div><div class='note'>ใช้ while loop</div>";

// do while
echo "<div class='output'>";
$i = 1;
do {
    echo str_repeat($i . " ", $i) . "<br>";
    $i++;
} while ($i <= 3);
echo "</div><div class='note'>ใช้ do while loop</div>";


// -------------------------------
// 4) กรอบสี่เหลี่ยม
// -------------------------------
echo "<h2>กรอบสี่เหลี่ยม</h2>";
$rows = 5;

// for
echo "<div class='output'>";
for ($r = 1; $r <= $rows; $r++) {
    if ($r == 1 || $r == $rows) {
        echo str_repeat("* ", 6) . "<br>";
    } else {
        echo "* " . str_repeat(($r-1) . " ", 4) . "*<br>";
    }
}
echo "</div><div class='note'>ใช้ for loop</div>";

// while
echo "<div class='output'>";
$r = 1;
while ($r <= $rows) {
    if ($r == 1 || $r == $rows) {
        echo str_repeat("* ", 6) . "<br>";
    } else {
        echo "* " . str_repeat(($r-1) . " ", 4) . "*<br>";
    }
    $r++;
}
echo "</div><div class='note'>ใช้ while loop</div>";

// do while
echo "<div class='output'>";
$r = 1;
do {
    if ($r == 1 || $r == $rows) {
        echo str_repeat("* ", 6) . "<br>";
    } else {
        echo "* " . str_repeat(($r-1) . " ", 4) . "*<br>";
    }
    $r++;
} while ($r <= $rows);
echo "</div><div class='note'>ใช้ do while loop</div>";


// -------------------------------
// 5) ตัวเลขกลับด้าน
// -------------------------------
echo "<h2>ตัวเลขกลับด้าน</h2>";

// for
echo "<div class='output'>";
for ($i = 3; $i >= 1; $i--) {
    echo str_repeat($i . " ", $i) . "<br>";
}
echo "</div><div class='note'>ใช้ for loop</div>";

// while
echo "<div class='output'>";
$i = 3;
while ($i >= 1) {
    echo str_repeat($i . " ", $i) . "<br>";
    $i--;
}
echo "</div><div class='note'>ใช้ while loop</div>";

// do while
echo "<div class='output'>";
$i = 3;
do {
    echo str_repeat($i . " ", $i) . "<br>";
    $i--;
} while ($i >= 1);
echo "</div><div class='note'>ใช้ do while loop</div>";

?>

</body>
</html>
