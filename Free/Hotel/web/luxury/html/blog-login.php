<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: blog-post.php");
}
if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM  post WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
     if($password == $row["password"]){
       $_SESSION["login"] = true;
       $_SESSION["id"] = $row["id"];
       header("Location: blog-post.php");
     }
     else{
        echo
        "<script> alert('Wrong Password'); </script>";
     }
    }
    else{
        echo
        "<script> alert('User Not Registered'); </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en" dir="Itr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
                <h2>Login Form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Molestias consequuntur, ipsum facilis nostrum adipisci vel.</p>
                    

                    
            </aside>

            <!-----------CONTACT SECTION END------------->


            <!-----------FORM SECTION------------->

            <form  class="" action="" method="post" autocomplete="off">
                <div class="form_name">
                    
                <input type="text" name="usernameemail" id="usernameemail" placeholder="Username / Email" required value="">
               
                
                </div>
                <br>
                <br>

                <input type="password" name="password" id="password" placeholder="Password" required value="">
               
                <br>
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                <br>
                <br>
                <a href="blog-reg.php">Don't Have An Account / Register Here</a>
            </form>
        </div>
    </section>

    
</body>
</html>

    