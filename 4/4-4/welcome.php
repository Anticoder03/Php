<?php
if (isset($_COOKIE["username"])) {
    $username = htmlspecialchars($_COOKIE["username"]);

    ?>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   <div class="container mt-5  border border-3 p-5 rounded border-primary">
   <h2 class="text-center "> <?php  echo "Welcome, $username!"; ?></h2>
   <a href="index.php" class="btn btn-outline-danger w-100 mt-5"> <?php echo "Logout"; ?> </a>

   </div>
    <?php
} 
?>
