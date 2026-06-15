<?php
$firstname = $middlename = $lastname = $dob = $address = "";
$submitted = false;
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit'])) {
    $firstname = trim((string)($_GET['firstname'] ?? ''));
    $middlename = trim((string)($_GET['middlename'] ?? ''));
    $lastname = trim((string)($_GET['lastname'] ?? ''));
    $dob = trim((string)($_GET['dob'] ?? ''));
    $address = trim((string)($_GET['address'] ?? ''));

    // Validation rules
    $namePattern = "/^[a-zA-Z\s'\-]+$/";

    if ($firstname === '') {
        $errors['firstname'] = 'First name is required.';
    } elseif (!preg_match($namePattern, $firstname)) {
        $errors['firstname'] = 'First name may contain only letters, spaces, hyphens and apostrophes.';
    }

    if ($middlename === '') {
        $errors['middlename'] = 'Middle name is required.';
    } elseif (!preg_match($namePattern, $middlename)) {
        $errors['middlename'] = 'Middle name may contain only letters, spaces, hyphens and apostrophes.';
    }

    if ($lastname === '') {
        $errors['lastname'] = 'Last name is required.';
    } elseif (!preg_match($namePattern, $lastname)) {
        $errors['lastname'] = 'Last name may contain only letters, spaces, hyphens and apostrophes.';
    }

    if ($dob === '') {
        $errors['dob'] = 'Date of birth is required.';
    } else {
        $timestamp = strtotime($dob);
        if ($timestamp === false) {
            $errors['dob'] = 'Date of birth is not a valid date. Try YYYY-MM-DD or a readable date.';
        } else {
            // normalize format for display
            $dob = date('F j, Y', $timestamp);
        }
    }

    if ($address === '') {
        $errors['address'] = 'Address is required.';
    } elseif (strlen($address) < 5) {
        $errors['address'] = 'Address must be at least 5 characters.';
    } elseif (!preg_match("/^[a-zA-Z0-9\s\.,#'\/-]+$/", $address)) {
        $errors['address'] = 'Address contains invalid characters.';
    }

    if (empty($errors)) {
        $submitted = true;
    }
}

$sanitized_input = '';
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['text_input'])) {
    $input = trim((string)($_GET['text_input'] ?? ''));
    if (preg_match("/^[a-zA-Z0-9\s]+$/", $input)) {
        $sanitized_input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    } else {
        $sanitized_input = "Invalid input: Only letters, numbers, and spaces are allowed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info - GET Method</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 10px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            box-sizing: border-box;
        }
        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #1f2937;
            font-size: 1.5rem;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 10px;
        }
        .form-group {
            margin-bottom: 16px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #4b5563;
            font-size: 0.9rem;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 0.95rem;
            box-sizing: border-box;
            transition: all 0.2s ease;
            background-color: #f9fafb;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #3b82f6;
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }
        input[type="submit"] {
            width: 100%;
            background-color: #3b82f6;
            color: white;
            border: none;
            padding: 12px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s ease;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #2563eb;
        }
        .output-box {
            margin-top: 25px;
            background-color: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 8px;
            padding: 20px;
        }
        .output-box h3 {
            margin-top: 0;
            color: #166534;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }
        .output-line {
            padding: 6px 0;
            border-bottom: 1px dashed #dcfce7;
            font-size: 0.95rem;
        }
        .output-line:last-child {
            border-bottom: none;
        }
        .label-text {
            font-weight: bold;
            color: #14532d;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Personal Information (GET)</h2>

        <?php if (!empty($errors)): ?>
            <div class="output-box" style="background-color:#fff7ed;border-color:#fed7aa;color:#7c2d12;">
                <h3>There were errors with your submission:</h3>
                <?php foreach ($errors as $err): ?>
                    <div class="output-line"><?php echo htmlspecialchars($err); ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" required>
            </div>
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name="middlename" value="<?php echo htmlspecialchars($middlename); ?>" required>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" required>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="text" name="dob" value="<?php echo htmlspecialchars($dob); ?>" placeholder="e.g., May 1 1985" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" value="<?php echo htmlspecialchars($address); ?>" required>
            </div>
            <input type="submit" name="submit" value="Submit Data">
        </form>

        <?php if ($submitted): ?>
            <div class="output-box">
                <h3>Submitted Information:</h3>
                <div class="output-line"><span class="label-text">First Name:</span> <?php echo htmlspecialchars($firstname); ?></div>
                <div class="output-line"><span class="label-text">Middle Name:</span> <?php echo htmlspecialchars($middlename); ?></div>
                <div class="output-line"><span class="label-text">Last Name:</span> <?php echo htmlspecialchars($lastname); ?></div>
                <div class="output-line"><span class="label-text">Date of Birth:</span> <?php echo htmlspecialchars($dob); ?></div>
                <div class="output-line"><span class="label-text">Address:</span> <?php echo htmlspecialchars($address); ?></div>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>