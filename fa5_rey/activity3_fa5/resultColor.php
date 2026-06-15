<?php
session_start();

$colors = $_SESSION['colors'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
<title>Favorite Colors</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #ffeef5;
}

.container {
    width: 400px;
    margin: auto;
    padding: 20px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.row {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    gap: 10px;
}

input {
    flex: 1;
    padding: 8px;
}

.color-box {
    width: 30px;
    height: 30px;
    border-radius: 6px;
    border: 1px solid #ccc;
    background: #eee;
}
</style>

</head>
<body>

<div class="container">

<h1>🎀 My Favorite Colors 🎀</h1>

<div class = "color-display">
<?php foreach ($colors as $color): ?>
    <div class="row">
        <div class="color-box" style="background-color: <?php echo htmlspecialchars($color); ?>;"></div>
        <span><?php echo htmlspecialchars($color); ?></span>
    </div>
<?php endforeach; ?>
</div>

</div>

</body>
</html>