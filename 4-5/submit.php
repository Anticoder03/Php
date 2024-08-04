<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    // Validating name
    if (empty($_POST["name"])) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["name"])) {
        $errors[] = "Only letters and white space allowed in name.";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }
    
    // Validatining email
    if (empty($_POST["email"])) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }
    
    // Validating number
    if (empty($_POST["number"])) {
        $errors[] = "Number is required.";
    } elseif (!filter_var($_POST["number"], FILTER_VALIDATE_INT)) {
        $errors[] = "Invalid number format.";
    } else {
        $number = htmlspecialchars($_POST["number"]);
    }
    
    // Validating message (URL)
    if (empty($_POST["message"])) {
        $errors[] = "Message is required.";
    } elseif (!filter_var($_POST["message"], FILTER_VALIDATE_URL)) {
        $errors[] = "Invalid URL format in message.";
    } else {
        $message = htmlspecialchars($_POST["message"]);
    }
    
    // Check for errors
    if (empty($errors)) {
        ?>
        
         <h1> <?php echo "Form submitted successfully!<br>"; ?> </h1>
         <h1> <?php echo "Name: $name<br>"; ?> </h1>
         <h1> <?php echo "Email: $email<br>"; ?> </h1>
         <h1> <?php echo "Number: $number<br>"; ?> </h1>
         <h1> <?php echo "Message (Link): $message<br>"; ?> </h1>
        <?php
    } else {
        foreach ($errors as $error) {
            ?>
            <div class="container p-4 mt-5  ">
                <h1 class="text-danger text-center" > <?php echo $error;  ?></h1>
       <?php } ?>
        <a class="btn btn-outline-danger w-100 mt-5" href='index.html'><?php echo "Go back to the form"; ?></a>
            </div>
   
   <?php
    }
} else {
    header("Location: index.html");
    exit();
}
?>
