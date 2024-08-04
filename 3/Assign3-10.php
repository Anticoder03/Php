<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
   <div class="container d-flex p-5 m-5">
    <form method="post">
        <label for="u_name">
            User Name: 
        </label>
        <input type="text" name="u_name" id="u_name" placeholder="Enter Your Name:">
        <input type="submit" class="btn btn-outline-primary" name="btn" value="Submit">
    </form>
   </div>
   <div class="container">
        <?php
            if(isset($_POST['btn'])){
                $name = $_POST['u_name'];
                echo "<h1 class='text-primary'>Name is: $name </h1>";
            }
        ?>
   </div>
</body>
</html>