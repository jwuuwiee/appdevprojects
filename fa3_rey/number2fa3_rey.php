<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];

$sum = 1;
$difference = 1;
$product = 1;
$quotient = $numbers[0];

foreach ($numbers as $number) {
    $sum += $number;
    $difference -= $number;
    $product *= $number;
}

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] != 0) {
        $quotient /= $numbers[$i];
    } else {
        $quotient = "Undefined (division by zero)";
        break;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Using Arrays</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }

        .container{
            display: grid;
            grid-template-columns: 1fr;
            justify-content: center;
        }

        .box{
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        h1{
            text-align: center;
            color: #333;
        }

        .array-list{
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        th, td{
            border: 1px solid #999;
            padding: 12px;
            text-align: center;
        }

        th{
            background: #d8f3dc;
        }

        td{
            background: #ffe5ec;
        }

    </style>

</head>
<body>

    <div class="container">

        <div class="box">

            <h1>Number Operations</h1>
            <div class="array-list">
                Array List:
                <?php echo implode(", ", $numbers); ?>
            </div>

            <table>

                <tr>
                    <th>Operation</th>
                    <th>Result</th>
                </tr>

                <tr>
                    <td>Addition</td>
                    <td><?php echo $sum; ?></td>
                </tr>

                <tr>
                    <td>Subtraction</td>
                    <td><?php echo $difference; ?></td>
                </tr>

                <tr>
                    <td>Multiplication</td>
                    <td><?php echo $product; ?></td>
                </tr>

                <tr>
                    <td>Division</td>
                    <td><?php echo $quotient; ?></td>
                </tr>

            </table>

        </div>

    </div>

</body>
</html>