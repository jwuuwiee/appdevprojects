<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {

    $_SESSION['colors'] = [
        trim($_POST['color1'] ?? ''),
        trim($_POST['color2'] ?? ''),
        trim($_POST['color3'] ?? ''),
        trim($_POST['color4'] ?? ''),
        trim($_POST['color5'] ?? '')
    ];

    // optional: block empty submissions
    if (in_array('', $_SESSION['colors'], true)) {
        $_SESSION['error'] = "Please fill in all color fields!";
    } else {
        $_SESSION['error'] = null;
        header("Location: resultColor.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Favorite Colors</title>

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
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    width: 300px;
    text-align: center;
}

h1 {
    color: #ff69b4;
}

input {
    width: 90%;
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ffb6c1;
    border-radius: 8px;
}

button {
    margin-top: 10px;
    padding: 10px;
    width: 100%;
    border: none;
    border-radius: 8px;
    background: #ff69b4;
    color: white;
    cursor: pointer;
}

button:hover {
    background: #ff85c1;
}

.error {
    color: red;
    font-size: 12px;
}
</style>

</head>
<body>

<div class="container">

<h1>🎀 My Favorite Colors 🎀</h1>

<?php if (!empty($_SESSION['error'])): ?>
    <p class="error"><?php echo $_SESSION['error']; ?></p>
<?php endif; ?>

<form method="post">

<input type="text" name="color1" placeholder="Color 1">
<input type="text" name="color2" placeholder="Color 2">
<input type="text" name="color3" placeholder="Color 3">
<input type="text" name="color4" placeholder="Color 4">
<input type="text" name="color5" placeholder="Color 5">

<button type="submit" name="submit">
Send Colors
</button>

</form>

</div>

</body>
</html>