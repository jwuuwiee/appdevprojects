<?php
    $students = [
        [
            "name" => "Ramos, Sebastian Zephyr August",
            "image" => "http://localhost/formatives_rey/appdevprojects/fa3_rey/profile%20pics/zephyr.jpeg",
            "age" => 21,
            "birthday" => "January 2, 2005",
            "contact" => "09123456789",
        ],
        [
            "name" => "Delos Santos, Tristan Zenith Ezekiel",
            "image" => "http://localhost/formatives_rey/appdevprojects/fa3_rey/profile%20pics/zenith.jpeg",
            "age" => 22,
            "birthday" => "February 23, 2004",
            "contact" => "09123467895",
        ],
        [
            "name" => "Tachibana, Tatsuo Kenji",
            "image" => "http://localhost/formatives_rey/appdevprojects/fa3_rey/profile%20pics/kenji.jpeg",
            "age" => 20,
            "birthday" => "July 27, 2005",
            "contact" => "09124563789",
        ],
        [
            "name" => "Del Valle, Kaiden Mercury",
            "image" => "http://localhost/formatives_rey/appdevprojects/fa3_rey/profile%20pics/mercury.jpeg",
            "age" => 20,
            "birthday" => "October 30, 2005",
            "contact" => "09127890535",
        ],
        [
            "name" => "Salazar, Jaden Marcus Alistair",
            "image" => "http://localhost/formatives_rey/appdevprojects/fa3_rey/profile%20pics/marcus.jpeg",
            "age" => 20,
            "birthday" => "April 20, 2006",
            "contact" => "09123676789",
        ],
        [
            "name" => "Nakayama, Ren",
            "image" => "http://localhost/formatives_rey/appdevprojects/fa3_rey/profile%20pics/ren.jpeg",
            "age" => 20,
            "birthday" => "May 19, 2005",
            "contact" => "09123477789",
        ],
        [
            "name" => "Ramos, Zacharius Yuan",
            "image" => "http://localhost/formatives_rey/appdevprojects/fa3_rey/profile%20pics/yuan.jpeg",
            "age" => 20,
            "birthday" => "February 22, 2006",
            "contact" => "09134456789",
        ],
        [
            "name" => "De Dios, Iris Nakeisha Elizabeth",
            "image" => "http://localhost/formatives_rey/appdevprojects/fa3_rey/profile%20pics/keisha.jpeg",
            "age" => 21,
            "birthday" => "March 16, 2005",
            "contact" => "09133456799",
        ],
        [
            "name" => "Santiago, Venus Annalise",
            "image" => "http://localhost/formatives_rey/appdevprojects/fa3_rey/profile%20pics/venus.jpeg",
            "age" => 21,
            "birthday" => "December 31, 2004",
            "contact" => "09123678789",
        ],
        [
            "name" => "Zablan, Kloe Xyrainne",
            "image" => "http://localhost/formatives_rey/appdevprojects/fa3_rey/profile%20pics/xyra.jpeg",
            "age" => 20,
            "birthday" => "August 9, 2005",
            "contact" => "09169456789",
        ]

    ];
    

    usort($students, function($a,$b) {
        return strcmp($a['name'], $b['name']);
    });
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Directory</title>

    <meta name="viewport" content="width=1000">

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #0b1f3a;
            padding: 20px;
            margin: 0;
        }

        .container {
            width: 1000px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        table {
            width: 1000px;
            border-collapse: collapse;
            background-color: white;
            table-layout: auto;
        }

        th {
            background-color: #26236b;
            color: white;
            padding: 12px;
            border: 1px solid #ddd;
        }

        td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 10px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            vertical-align: middle;
        }

        img {
            width: 90px;
            height: 110px;
            object-fit: cover;
            border-radius: 5px;
            display: block;
            margin: auto;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

    </style>
</head>

<body>

<div class="container">

    <h1>Zielle International University - Student Directory</h1>

    <table>

        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
        </tr>

        <?php
        $no = 1;

        foreach ($students as $student) {
            echo "<tr>";

            echo "<td>" . $no++ . "</td>";

            echo "<td>" . $student['name'] . "</td>";

            echo "<td>
                    <img src='" . $student['image'] . "'>
                  </td>";

            echo "<td>" . $student['age'] . "</td>";

            echo "<td>" . $student['birthday'] . "</td>";

            echo "<td>" . $student['contact'] . "</td>";

            echo "</tr>";
        }
        ?>

    </table>

</div>

</body>
</html>