<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: blog-post.php");
}
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn, "SELECT * FROM post WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo
            "<script> alert('Username or Email Has Already Taken'); </script>";
        }
        else{

            if($password == $confirmpassword){
                $query = "INSERT INTO post VALUES('', '$name', '$username', '$email', '$password')";
                mysqli_query($conn,$query);
                echo
                "<script> alert('Registration Successful'); </script>";
            }
            else{
                echo
                "<script> alert('Password Does Not Match'); </script>";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en" dir="Itr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
   
</head>
<body>
    
<section class="contact">
        <div class="container contact_container">
            <aside class="contact_aside">
                <div class="aside_image">
                    <img src="images/svg/icon-compatible.svg" alt="">
                </div>
                <h2>Registation</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Molestias consequuntur, ipsum facilis nostrum adipisci vel.</p>
                     

                    
            </aside>

            <!-----------CONTACT SECTION END------------->


            <!-----------FORM SECTION------------->

            <form class="" action="" method="post" autocomplete="off">
                <div class="form_name">

                 
                  <input type="text" name="name" id = "name" placeholder="Name"  required value="">
                  

                  <input type="text" name="username" id = "username" placeholder="Username" required value=""> 
                </div>
                <br>
                
                <input type="email" name="email" id = "email" placeholder="Email" required value=""> 
                <br>
                <br>
                
                <input type="password" name="password" id = "password" placeholder="Password" required value=""> 
                <br>
                <br>
                
                <input type="password" name="confirmpassword" id = "confirmpassword" placeholder="confirmpassword" required value=""> 

                <br>
                <br>
                
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                
                <a href="blog-login.php">Alreday Have An Account / Login Here</a>
                
            </form>
        </div>
    </section>

</body>
</html>
