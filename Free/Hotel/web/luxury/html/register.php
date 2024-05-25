<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index-slider.php");
}
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $username = $_POST["username"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $course = $_POST["course"];
        $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo
            "<script> alert('Username or Email Has Already Taken'); </script>";
        }
        else{

            if($password == $confirmpassword){
                $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$password', '$course')";
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
                <p>Ensuring you provide a precise entry of name, username, course and  password is crucial to protect accounts from 
                    authorized access.Inaccuraices may lead to login failures, inconveninces, or even compromised the security of personal information.</p>
                     

                    
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

                

                <select name="course" id="course" type="course" placeholder="Course" required value="">
                
                <option value="Program of Interest">Program of Interest</option>
                <option value="Cloud computing">Cloud Computing</option>
                <option value="Networking">Networking</option>
                <option value="Introduction to Testing & Security">Introduction to Testing & Security</option>
                <option value="Introduction to Cybercrime">Introduction to Cybercrime</option>
                <option value="Introduction to Cyber Security">Introduction to Cyber Security</option>
                <option value="Introduction to IoT">Introduction to IoT</option>
                <option value="Mobile App Builder">Mobile App Builder</option>
                <option value="Blockchain Developer">Blockchain Developer</option>
                <option value="Game development">Game Development</option>
                <option value="Data Science">Data Science</option>
                <option value="Data Science with Python">Data Science with Python</option>
                <option value="Big Data Science">Big Data Science</option>
                <option value="Web Development">Web Development</option>
                <option value="Artifical Intelligence">Artifical Intelligence</option>
                <option value="Machine Learning">Machine Learning</option>
                </select>
                <br>
                <br>
                
                <input type="password" name="password" id = "password" placeholder="Password" required value=""> 
                <br>
                <br>
                
                <input type="password" name="confirmpassword" id = "confirmpassword" placeholder="confirmpassword" required value=""> 

                <br>
                <br>
                
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                
                <a href="login.php">Alreday Have An Account / Login Here</a>
                
            </form>
        </div>
    </section>

</body>
</html>
