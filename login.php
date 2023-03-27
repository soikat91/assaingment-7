<?php
include_once "./nav.php";
 include_once 'func.php';

 session_start();
 if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if( empty($email) || empty($password)){
        echo "Both fields are required and must not be empty";
    }else{
        
			$users = file("data/info.txt");

			foreach ($users as $user) {

               list($firstName,$lastName,$saved_email,$saved_password)=explode(",", $user);
				$user_data = explode(",", $user);

                
              
				if ($email == $saved_email && $password == rtrim($saved_password)) {              
                  
                    $_SESSION['firstName'] = $firstName;
                    $_SESSION['lastName'] = $lastName;
                    header("Location: index.php");
                    exit();
                } else {
                    //Login failed
                    echo "Invalid email or password.";
			}
           
    }
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>   
 



     <h1>Login</h1>
 
    <form action="login.php" method="post">
        <div class="container">               
            
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter Your Email">
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Your Password">
            
    
            <button class="registerbtn" type="submit" name="login" value="lofin">Login</button>
        </div>

    </form>
</body>
</html>