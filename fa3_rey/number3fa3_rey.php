<!DOCTYPE html>
<html>
<head>
    <title>User Defined Functions</title>

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

        .values{
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

            <h1>User Defined Function</h1>

            <?php

                function calculate($a, $b, $c){

                    $add = $a + $b + $c;
                    $subtract = $a - $b - $c;
                    $multiply = $a * $b * $c;
                    $divide = $a / $b / $c;

                    echo "

                    <div class='values'>
                        Parameter Values: $a, $b, $c
                    </div>

                    <table>

                        <tr>
                            <th>Operation</th>
                            <th>Result</th>
                        </tr>

                        <tr>
                            <td>Addition</td>
                            <td>$add</td>
                        </tr>

                        <tr>
                            <td>Subtraction</td>
                            <td>$subtract</td>
                        </tr>

                        <tr>
                            <td>Multiplication</td>
                            <td>$multiply</td>
                        </tr>

                        <tr>
                            <td>Division</td>
                            <td>$divide</td>
                        </tr>

                    </table>

                    ";
                }

                calculate(25, 13, 6);

            ?>

        </div>

    </div>

</body>
</html>