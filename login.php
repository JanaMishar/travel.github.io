<?php
    session_start();
    ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4a5f59fc5b.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="style.css">
    <title>TRAVEL WEBSITE</title>
</head>

<body>

    <div class="in container">

        <div class="Sign-in">

            <div class="Sign">
                
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    
                    <h1 class="lg-heading text-black head_change">Sign In</h1>
                    
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email Or Phone-No" id="Email" class="big_box" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie'];  } ?>">
                        <i class="fas fa-envelope seen"></i><br>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" id="Paswrd" class="big_box" value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie'];  } ?>">
                        <i class="fas fa-eye-slash pws seen" onclick="show()"></i>
                    </div>
                    <br><br>
                    
                    <button type="submit" name="submit" class="btn btn-primary form-group" >Sign In</button>
                    <br><br>
                    
                    <div class="form-group">
                        <a href="recover_mail.php" name="forgetpassword">Forgot Password?</a>
                    </div>
                    
                    <div class="form-group">
                        <a href="register.php" class="btn btn-primary" >Create a New Page</a>
                    </div>

                    <input type="checkbox" name="rememberme">Remember Me
                
                </form>
            
            </div>
        
        </div>
       
    </div>

    <script>

        function show(){
            var Paswrd = document.getElementById('Paswrd');
            var icon = document.querySelector('.pws');
            if (Paswrd.type === "password") {
                Paswrd.type = "text";
            }else{
                Paswrd.type = "password";
            }
        }

    </script>

    <?php
        include 'connection.php';
        if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];

            $pass=password_hash($password,PASSWORD_BCRYPT);
            
            $query="select * from finaltour where email='$email' and status='active'";
            $processquery=mysqli_query($con,$query);
            $check=mysqli_num_rows($processquery);

            if($processquery){
                $data_according_mail=mysqli_fetch_assoc($processquery);
                $db_pass=$data_according_mail['password'];

                $check_pass=password_verify($password, $db_pass);

                $_SESSION['name']=$data_according_mail['name'];

                $_SESSION['mail']=$data_according_mail['email'];

                $_SESSION['phone']=$data_according_mail['phone'];

                if($check_pass){

                    if(isset($_POST['rememberme'])){
                        setcookie('emailcookie',$email,time()+8400);
                        setcookie('passwordcookie',$password,time()+8400);
                        header('location:booktour.php');

                    }else{
                        header('location:booktour.php');
                    }


                    echo "password matched";
                    header('location:booktour.php');
                }else{
                    echo "password not matched";
                    header('location:login.php');
                }


                


            }
        }


    ?>

</body>

</html>