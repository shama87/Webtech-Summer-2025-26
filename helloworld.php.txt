<?php
// Initialize variables and error trackers
$name = $id = $email = $department = $semester = $gender = $blood_group = "";
$nameErr = $idErr = $emailErr = $deptErr = $genderErr = "";
$isSubmitted = false;

// Process form on POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // 1. Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Full name is required";
    } else {
        $name = sanitize_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z\s.]+$/", $name)) {
            $nameErr = "Only letters, dots, and white space allowed";
        }
    }

    // 2. Validate AIUB Student ID (Pattern: 20-43210-1 or similar YY-NNNNN-S)
    if (empty($_POST["id"])) {
        $idErr = "Student ID is required";
    } else {
        $id = sanitize_input($_POST["id"]);
        if (!preg_match("/^[0-9]{2}-[0-9]{5}-[1-3]{1}$/", $id)) {
            $idErr = "Invalid AIUB ID format. Use format: XX-XXXXX-X (e.g., 21-44556-1)";
        }
    }

    // 3. Validate AIUB Student Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // 4. Validate Department
    if (empty($_POST["department"])) {
        $deptErr = "Please select a department";
    } else {
        $department = sanitize_input($_POST["department"]);
    }

    // 5. Validate Gender
    if (empty($_POST["gender"])) {
        $genderErr = "Please select your gender";
    } else {
        $gender = sanitize_input($_POST["gender"]);
    }

    // Optional fields
    $semester = sanitize_input($_POST["semester"] ?? "");
    $blood_group = sanitize_input($_POST["blood_group"] ?? "");

    // If no errors, mark as successfully submitted
    if (empty($nameErr) && empty($idErr) && empty($emailErr) && empty($deptErr) && empty($genderErr)) {
        $isSubmitted = true;
    }
}

// Input sanitization helper
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIUB Student Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 30px;
        }
        .container {
            max-width: 600px;
            background: #ffffff;
            margin: auto;
            padding: 25px 35px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #0d47a1;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 16px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .radio-group {
            display: flex;
            gap: 15px;
            margin-top: 5px;
        }
        .error {
            color: #d32f2f;
            font-size: 0.85rem;
            margin-top: 4px;
            display: block;
        }
        button {
            width: 100%;
            background-color: #0d47a1;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #0b3c8a;
        }
        .success-box {
            background-color: #e8f5e9;
            border: 1px solid #a5d6a7;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>AIUB Student Form</h2>

    <?php if ($isSubmitted): ?>
        <div class="success-box">
            <h3 style="color: #2e7d32; margin-top: 0;">Submission Successful!</h3>
            <p><strong>Name:</strong> <?= $name ?></p>
            <p><strong>Student ID:</strong> <?= $id ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Department:</strong> <?= $department ?></p>
            <p><strong>Semester:</strong> <?= $semester ?></p>
            <p><strong>Gender:</strong> <?= $gender ?></p>
            <p><strong>Blood Group:</strong> <?= $blood_group ?></p>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- Student Name -->
        <div class="form-group">
            <label for="name">Full Name *</label>
            <input type="text" id="name" name="name" value="<?= $name ?>">
            <span class="error"><?= $nameErr ?></span>
        </div>

        <!-- Student ID -->
        <div class="form-group">
            <label for="id">AIUB Student ID (XX-XXXXX-X) *</label>
            <input type="text" id="id" name="id" placeholder="e.g., 21-44556-1" value="<?= $id ?>">
            <span class="error"><?= $idErr ?></span>
        </div>

        <!-- AIUB Email -->
        <div class="form-group">
            <label for="email">Student Email *</label>
            <input type="email" id="email" name="email" placeholder="e.g., 21-44556-1@student.aiub.edu" value="<?= $email ?>">
            <span class="error"><?= $emailErr ?></span>
        </div>

        <!-- Department -->
        <div class="form-group">
            <label for="department">Department / Program *</label>
            <select id="department" name="department">
                <option value="">-- Select Department --</option>
                <option value="CSE" <?= ($department == "CSE") ? "selected" : "" ?>>B.Sc. in CSE</option>
                <option value="EEE" <?= ($department == "EEE") ? "selected" : "" ?>>B.Sc. in EEE</option>
                <option value="BBA" <?= ($department == "BBA") ? "selected" : "" ?>>BBA</option>
                <option value="Architecture" <?= ($department == "Architecture") ? "selected" : "" ?>>B.Arch</option>
                <option value="Economics" <?= ($department == "Economics") ? "selected" : "" ?>>B.S.S. Economics</option>
                <option value="English" <?= ($department == "English") ? "selected" : "" ?>>B.A. in English</option>
            </select>
            <span class="error"><?= $deptErr ?></span>
        </div>

        <!-- Semester -->
        <div class="form-group">
            <label for="semester">Current Semester</label>
            <select id="semester" name="semester">
                <option value="">-- Select Semester --</option>
                <option value="Fall 2025-2026" <?= ($semester == "Fall 2025-2026") ? "selected" : "" ?>>Fall</option>
                <option value="Spring 2025-2026" <?= ($semester == "Spring 2025-2026") ? "selected" : "" ?>>Spring</option>
                <option value="Summer 2025-2026" <?= ($semester == "Summer 2025-2026") ? "selected" : "" ?>>Summer</option>
            </select>
        </div>

        <!-- Gender -->
        <div class="form-group">
            <label>Gender *</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="Male" <?= ($gender == "Male") ? "checked" : "" ?>> Male</label>
                <label><input type="radio" name="gender" value="Female" <?= ($gender == "Female") ? "checked" : "" ?>> Female</label>
                <label><input type="radio" name="gender" value="Other" <?= ($gender == "Other") ? "checked" : "" ?>> Other</label>
            </div>
            <span class="error"><?= $genderErr ?></span>
        </div>

        <!-- Blood Group -->
        <div class="form-group">
            <label for="blood_group">Blood Group</label>
            <select id="blood_group" name="blood_group">
                <option value="">-- Select Blood Group --</option>
                <option value="A+" <?= ($blood_group == "A+") ? "selected" : "" ?>>A+</option>
                <option value="A-" <?= ($blood_group == "A-") ? "selected" : "" ?>>A-</option>
                <option value="B+" <?= ($blood_group == "B+") ? "selected" : "" ?>>B+</option>
                <option value="B-" <?= ($blood_group == "B-") ? "selected" : "" ?>>B-</option>
                <option value="O+" <?= ($blood_group == "O+") ? "selected" : "" ?>>O+</option>
                <option value="O-" <?= ($blood_group == "O-") ? "selected" : "" ?>>O-</option>
                <option value="AB+" <?= ($blood_group == "AB+") ? "selected" : "" ?>>AB+</option>
                <option value="AB-" <?= ($blood_group == "AB-") ? "selected" : "" ?>>AB-</option>
            </select>
        </div>

        <button type="submit">Submit Form</button>
    </form>
</div>

</body>
</html>