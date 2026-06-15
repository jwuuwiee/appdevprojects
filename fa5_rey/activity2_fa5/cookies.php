<?php
// Set cookies only if they are not already set (prevents resetting every refresh)
if (!isset($_COOKIE["firstname"])) {
    setcookie("firstname", "Juliana Simone", time() + 10);
}
if (!isset($_COOKIE["middlename"])) {
    setcookie("middlename", "Buena", time() + 20);
}
if (!isset($_COOKIE["lastname"])) {
    setcookie("lastname", "Rey", time() + 30);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Cookie Activity</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #ffe6f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    text-align: center;
}

.cookie {
    margin: 15px 0;
    padding: 10px;
    background: #fff0f5;
    border-radius: 10px;
}
</style>

</head>
<body>

<div class="container">

<h1>🍓 Cookie Activity 🍓</h1>

<div class="cookie">
<?php
echo isset($_COOKIE["firstname"])
    ? "First Name: " . $_COOKIE["firstname"]
    : "⏳ First Name will appear after 10 seconds";
?>
</div>

<div class="cookie">
<?php
echo isset($_COOKIE["middlename"])
    ? "Middle Name: " . $_COOKIE["middlename"]
    : "⏳ Middle Name will appear after 20 seconds";
?>
</div>

<div class="cookie">
<?php
echo isset($_COOKIE["lastname"])
    ? "Last Name: " . $_COOKIE["lastname"]
    : "⏳ Last Name will appear after 30 seconds";
?>
</div>

</div>

</body>
</html>