<!DOCTYPE html>
<html>
<head>
    <title>Recive Data</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<body>
    <div class="container p-5 mt-5 border border-4 border-success form-control form-control">
        <h2 class="text-center mb-5 shadow">Login</h2>
    
    <form method="get" action="">
        
        <div class="text-center">
            <label for="username">Username:</label>
        <input class="mb-4" type="text" name="username" required>
        </div>
        <div class="text-center">
            <label for="password">Password:</label>
        <input class="mb-4" type="password" name="password" required>
        </div>
        <input type="submit" class="btn btn-outline-primary w-100 text-center border border-4 border-primary" name="btn" value="Submit">

    </form>
    </div>

        <div class="container mt-5 p-3 border border-4 border-info">
            <?php
        if(isset($_GET['btn'])){
            $name = $_GET['username'];
            $pass = $_GET['password'];
?>
        <h1 class="text-center ">
            <?php echo "Name is: " . $name; ?>
        </h1>
            <h1 class="text-center ">
                <?php echo "Password is:  " . $pass; ?>
            </h1>
        
    <?php } ?>
        </div>
</body>
</html>
