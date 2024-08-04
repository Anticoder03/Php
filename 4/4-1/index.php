<?php
session_start();

$users = [
    "Ashish" => "123",
    "Admin" => "admin"
];

$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $errorMessage = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<body>
    <div class="container p-5 mt-5 border border-4 border-success form-control form-control">
        <h2 class="text-center mb-5">Login</h2>
    <?php if ($errorMessage): ?>
        <p style="color:red;"><?php echo $errorMessage; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        
        <div class="text-center">
            <label for="username">Username:</label>
        <input class="mb-4" type="text" name="username" required>
        </div>
        <div class="text-center">
            <label for="password">Password:</label>
        <input class="mb-4" type="password" name="password" required>
        </div>
        <input type="submit" class="btn btn-outline-primary w-100 text-center border border-4 border-primary" value="Login">
    </form>
    </div>

</body>
</html>
