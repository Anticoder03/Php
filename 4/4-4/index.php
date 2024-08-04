<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 shadow">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-uppercase text-center">Login</h2>
                    </div>
                    <div class="card-body">
                        <form  method="POST">
                            <div class="form-group my-3">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" class="form-control" required>
                            </div>
                            <button type="submit" name="btn" class="btn btn-outline-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['btn'])) {
    $username = htmlspecialchars($_POST['username']);
    setcookie("username", $username, time() + (86400 * 30), "/"); 
    header("Location: welcome.php");
    exit();
} 
?>
