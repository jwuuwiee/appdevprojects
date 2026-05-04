<!DOCTYPE html>
<html>
<head>
    <title>Two-Digit Grid</title>
    <style>
        .box {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border: 1px solid black;
            margin: 2px;
            font-size: 18px;
        }
        body {
            text-align: center;
            font-family: Arial;
        }
    </style>
</head>
<body>

<h2>Two-Digit Numbers</h2>

<?php
for ($i = 0; $i <= 99; $i++) {
    echo "<div class='box'>" . str_pad($i, 2, "0", STR_PAD_LEFT) . "</div>";
}
?>

</body>
</html>