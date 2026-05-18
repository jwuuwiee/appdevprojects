<!DOCTYPE html>
<html>
<head>
    <title>Grade Ranking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff0f5;
             display: flex;
            justify-content: center;
            align-items: center;
        }
        table {
            border-collapse: collapse;
            width: 700px; 
            text-align: center;
            border: 3px solid pink;
            background-color: white;
        }
        td {
            padding: 20px;
            border: 1px solid pink;
            font-size: 18px; 
        }
        .header {
            background-color: pink;
            font-weight: bold;
            font-size: 22px;
        }
        img {
            width: 130px;
            height: 130px;
        }
         
        
       
    </style>
</head>
<body>

<?php
$name = "Juliana Simone B. Rey";
$grade = 77;


if ($grade >= 93 && $grade <= 100) {
    $rank = "A";
} elseif ($grade >= 90) {
    $rank = "A-";
} elseif ($grade >= 87) {
    $rank = "B+";
} elseif ($grade >= 83) {
    $rank = "B";
} elseif ($grade >= 80) {
    $rank = "B-";
} elseif ($grade >= 77) {
    $rank = "C+";
} elseif ($grade >= 73) {
    $rank = "C";
} elseif ($grade >= 70) {
    $rank = "C-";
} elseif ($grade >= 67) {
    $rank = "D+";
} elseif ($grade >= 63) {
    $rank = "D";
} elseif ($grade >= 60) {
    $rank = "D-";
} else {
    $rank = "F";
}


if ($rank == "A") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/A.png.jpg";
elseif ($rank == "A-") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/A-.png.jpg";
elseif ($rank == "B+") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/B+.png.jpg";
elseif ($rank == "B") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/B.png.jpg";
elseif ($rank == "B-") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/B-.png.jpg";
elseif ($rank == "C+") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/C+.png.jpg";
elseif ($rank == "C") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/C.png.jpg";
elseif ($rank == "C-") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/C-.png.jpg";
elseif ($rank == "D+") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/D+.png.jpg";
elseif ($rank == "D") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/D.png.jpg";
elseif ($rank == "D-") $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/D-.png.jpg";
else $image = "http://localhost/formatives_rey/appdevprojects/fa2_rey/images/F.png.jpg";
?>

<table>
    <tr class="header">
        <td colspan="3">Student Information</td>
    </tr>
    <tr>
        <td colspan="3">Name: <?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Rank: <?php echo $rank; ?></td>
        <td>Grade: <?php echo $grade; ?></td>
        <td>
            <img src="<?php echo $image; ?>" alt="Grade Image">
        </td>
    </tr>
</table>

</body>
</html>