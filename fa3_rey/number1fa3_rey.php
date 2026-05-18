<?php
    $students = [
        [
            "name" => "Ramos, Sebastian Zephyr August",
            "image" => "fa3_rey\profile pics\zephyr.jpg",
            "age" => 21,
            "birthday" => "January 2, 2005",
            "contact" => "09123456789",
        ],
        [
            "name" => "Delos Santos, Tristan Zenith Ezekiel",
            "image" => "fa3_rey\profile pics\zenith.jpg",
            "age" => 22,
            "birthday" => "February 23, 2004",
            "contact" => "09123467895",
        ],
        [
            "name" => "Tachibana, Tatsuo Kenji",
            "image" => "fa3_rey\profile pics\kenji.jpg",
            "age" => 20,
            "birthday" => "July 27, 2005",
            "contact" => "09124563789",
        ],
        [
            "name" => "Del Valle, Kaiden Mercury",
            "image" => "fa3_rey\profile pics\mercury.jpg",
            "age" => 20,
            "birthday" => "October 30, 2005",
            "contact" => "09127890535",
        ],
        [
            "name" => "Salazar, Jaden Marcus Alistair",
            "image" => "fa3_rey\profile pics\marcus.jpg",
            "age" => 20,
            "birthday" => "April 20, 2006",
            "contact" => "09123676789",
        ],
        [
            "name" => "Nakayama, Ren",
            "image" => "fa3_rey\profile pics\ren.jpg",
            "age" => 20,
            "birthday" => "May 19, 2005",
            "contact" => "09123477789",
        ],
        [
            "name" => "Ramos, Zacharius Yuan",
            "image" => "fa3_rey\profile pics\yuan.jpg",
            "age" => 20,
            "birthday" => "February 22, 2006",
            "contact" => "09134456789",
        ],
        [
            "name" => "De Dios, Iris Nakeisha Elizabeth",
            "image" => "appdevprojects\profile pics\keisha.jpg",
            "age" => 21,
            "birthday" => "March 16, 2005",
            "contact" => "09133456799",
        ],
        [
            "name" => "Santiago, Venus Annalise",
            "image" => "fa3_rey\profile pics\venus.jpg",
            "age" => 21,
            "birthday" => "December 31, 2004",
            "contact" => "09123678789",
        ],
        [
            "name" => "Zablan, Kloe Xyrainne",
            "image" => "fa3_rey\profile pics\xyra.jpg",
            "age" => 20,
            "birthday" => "August 9, 2005",
            "contact" => "09169456789",
        ]

    ];
    

    usort($students, function($a,$b) {
        return strcmp($a['name'], $b['name']);
    });
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title> Student Directory </title>
        <link rel ="stylesheet" href = "style.css">


<style>

body {
    font-family: Arial;
    background-color: #0b1f3a;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #fff;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
}

th {
    background-color: #0f64d3;
    color: black;
    padding: 12px;
}

td {
    border: 1px solid #ddd;
    text-align: center;
    padding: 10px;
}

img{
    border-radius: 50%;
}

</style>
</head>

<body>
    <div class="container"> 
    <h1> Zielle International University - Student Directory </h1>

    <table>
        <tr>
            <th> No. </th>
            <th> Name </th>
            <th> Image </th>
            <th> Age </th>
            <th> Birthday </th>
            <th> Contact Number </th>
        </tr>

        <?php
        $no = 1;
        
        foreach($students as $index => $student): ?>
            <tr>
                <td> <?php echo $index + 1; ?> </td>
                <td> <?php echo $student['name']; ?> </td>
                <td> <img src="<?php echo $student['image']; ?>" alt="Profile Picture" width="100" height="100"> </td>
                <td> <?php echo $student['age']; ?> </td>
                <td> <?php echo $student['birthday']; ?> </td>
            <td> <?php echo $student['contact']; ?> </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>