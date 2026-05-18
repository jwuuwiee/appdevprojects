<!DOCTYPE html>
<html>
<head>
    <title>Length Conversion Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            margin: 30px auto;
            width: 70%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 30px;
            text-align: center;
        }
        th {
            background-color: #ffb6c1; 
        }
        .section {
            background-color: #ffc0cb; 
            font-weight: bold;
        }
     .header-content {
    position: relative;
    display: flex;
    justify-content: center; 
    align-items: center;
        }

    .title {
    text-align: center;
    font-weight: bold;
    }

    .header-content img {
    width: 120px;
    height: 120px;
    position: absolute;
    right: 10px;   
    }
    </style>
</head>
<body>

<table>
    <tr>
    <th colspan="3" class="header">
        <div class="header-content">
            <div class="title">MEASURE CONVERSION CHART - LENGTH</div>
        <img src ="http://localhost/formatives_rey/appdevprojects/fa2_rey/ermm.jpg" alt="icon">
        </div>
</th>
    </tr>
    <!-- METRIC -->
    <tr class="section">
        <td colspan="3">METRIC CONVERSIONS</td>
    </tr>

    <?php
    $metric = [
        ["1 centimeter", 10, "millimeters"],
        ["1 decimeter", 10, "centimeters"],
        ["1 meter", 100, "centimeters"],
        ["1 kilometer", 1000, "meters"]
    ];

    foreach ($metric as $row) {
        echo "<tr>";
        echo "<td>{$row[0]}</td>";
        echo "<td>=</td>";
        echo "<td>" . ($row[1] * 1) . " {$row[2]}</td>"; // operator used
        echo "</tr>";
    }
    ?>

    <!-- IMPERIAL -->
    <tr class="section">
        <td colspan="3">IMPERIAL CONVERSIONS</td>
    </tr>

    <?php
    $imperial = [
        ["1 foot", 12, "inches"],
        ["1 yard", 3, "feet"],
        ["1 chain", 22, "yards"],
        ["1 furlong", 220, "yards"],
        ["1 mile", 1760, "yards"],
       
    ];

    for ($i = 0; $i < count($imperial); $i++) {
        echo "<tr>";
        echo "<td>{$imperial[$i][0]}</td>";
        echo "<td>=</td>";
        echo "<td>" . ($imperial[$i][1] * 1) . " {$imperial[$i][2]}</td>";
        echo "</tr>";
    }
    ?>

    <!-- METRIC TO IMPERIAL -->
    <tr class="section">
        <td colspan="3">METRIC → IMPERIAL</td>
    </tr>

    <?php
    $m_to_i = [
        ["1 millimetre", 0.03937, "inches"],
        ["1 centimeter", 0.393701, "inches"],
        ["1 meter", 39.37008, "inches"],
        ["1 meter", 3.28084, "feet"],
        ["1 meter", 1.09361, "yards"],
        ["1 kilometer", 3.28084, "yards"],
        ["1 kilometer", 0.621371, "miles"]
    ];

    foreach ($m_to_i as $row) {
        echo "<tr>";
        echo "<td>{$row[0]}</td>";
        echo "<td>=</td>";
        echo "<td>" . ($row[1] * 1) . " {$row[2]}</td>";
        echo "</tr>";
    }
    ?>

    <!-- IMPERIAL TO METRIC -->
    <tr class="section">
        <td colspan="3">IMPERIAL → METRIC</td>
    </tr>

    <?php
    $i_to_m = [
        ["1 inch", 2.54, "centimeters"],
        ["1 foot", 30.48, "centimeters"],
        ["1 yard", 0.9144, "meters"],
        ["1 yard", 91.44, "centimeters"],
        ["1 mile", 1.60934, "kilometers"],
        ["1 mile", 1609.34, "meters"],
    ];

    foreach ($i_to_m as $row) {
        if ($row[1] > 0) { // control structure (if)
            echo "<tr>";
            echo "<td>{$row[0]}</td>";
            echo "<td>=</td>";
            echo "<td>" . ($row[1] * 1) . " {$row[2]}</td>";
            echo "</tr>";
        }
    }
    ?>

</table>

</body>
</html>