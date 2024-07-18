<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            background: linear-gradient(120deg, #3a1c71, #d76d77, #ffaf7b);
            background-size: 600% 600%;
            animation: gradient 15s ease infinite;
            color: #fff;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        .result {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #fff;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1);
        }

        .valid {
            color: #4CAF50;
        }

        .invalid {
            color: #F44336;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            color: #d76d77;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            color: #ffaf7b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Validation Results</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ip = $_POST['ip'];
            $url = $_POST['url'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $string = $_POST['string'];

            // Validate IP address
            if (filter_var($ip, FILTER_VALIDATE_IP) === false) {
                echo '<div class="result invalid">Invalid IP address.</div>';
            } else {
                echo '<div class="result valid">IP address is valid.</div>';
            }

            // Validate URL
            if (filter_var($url, FILTER_VALIDATE_URL) === false) {
                echo '<div class="result invalid">Invalid URL.</div>';
            } else {
                echo '<div class="result valid">URL is valid.</div>';
            }

            // Validate email
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo '<div class="result invalid">Invalid email address.</div>';
            } else {
                echo '<div class="result valid">Email address is valid.</div>';
            }

            // Validate age (integer validation)
            if (filter_var($age, FILTER_VALIDATE_INT) === false) {
                echo '<div class="result invalid">Invalid age. Please enter a valid number.</div>';
            } else {
                echo '<div class="result valid">Age is valid.</div>';
            }

            // Custom string validation (example: alphanumeric)
            if (filter_var($string, FILTER_VALIDATE_DOMAIN) === false) {
                echo '<div class="result invalid">Invalid custom Domain.</div>';
            } else {
                echo '<div class="result valid">Domain is valid.</div>';
            }
        }
        ?>
        <a class="back-link" href="index.html">Go Back</a>
    </div>
</body>
</html>
