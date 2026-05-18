<!DOCTYPE html>
<html>
<head>
    <title>My Activities Menu</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffd6e8, #ffc2d1, #ffe6f0);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.6);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            backdrop-filter: blur(10px);
            width: 300px;
        }

        h1 {
            color: #ff4d88;
            margin-bottom: 30px;
        }

        .menu-btn {
            display: block;
            margin: 12px 0;
            padding: 12px;
            background: linear-gradient(135deg, #ff66a3, #ff3385);
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-size: 16px;
            transition: 0.3s;
            box-shadow: 0 5px 10px rgba(255, 102, 163, 0.3);
        }

        .menu-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(255, 102, 163, 0.5);
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #b30059;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Formative 3 Activities</h1>

    <a href="number1fa3_rey.php" class="menu-btn">✨ Student Directory</a>
    <a href="number2fa3_rey.php" class="menu-btn">💗 Using Arrays</a>
    <a href="number3fa3_rey.php" class="menu-btn">🎀 Using User Defined Function</a>

    
</div>

</body>
</html>