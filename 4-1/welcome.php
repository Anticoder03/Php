<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<body class="container p-5 m-5">
    <h2 class="text-center mb-5">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <a href="logout.php" class="btn btn-outline-danger w-100 border border-4 border-danger mt-5 mx-5">Logout</a>
</body>
</html>
