<?php
include_once 'func.php';

$errorMessage='';
if(isset($_POST['save'])){
    
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
    
    // if($firstName !='' && $lastName !='' && $email !='' && $password !='' && $confirmPassword !='')
    if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword))
    {       
        
        $errorMessage="All fields are required and must not be empty";   
        header("location:registration.php");
       
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMessage= "The email address must be in a valid format";
    }else if ($password != $confirmPassword){
        $errorMessage= "The password and confirm password fields must match";
    }else{

        addUser($firstName,$lastName,$email,$password);

        header("location:index.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
      
       include_once "./nav.php";
     ?>


      <?php

       session_start();
       if(isset($_SESSION['firstName'])) { ?>

       <h1>"Welcome, "<?php echo $_SESSION['firstName']. " ". $_SESSION['lastName'] ; ?></h1>
           
      <?php }?>


    <?php  session_destroy();?>
 
</body>
</html>