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

        <div class="reg-main">

            <div class="register">
            
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    
                    <h1 class="lg-heading text-black head_change">Sign Up</h1>
                    
                    <div class="reg-group">
                        <label for="FName">Full Name:</label><br>
                        <input type="text" name="name" id="name" placeholder="Enter Your Full Name" class="big_box" required><br>
                    </div><br>
                    
                    <div class="reg-group">
                        <label for="Email">Email:</label><br>
                        <input type="text" name="email" id="email" placeholder="Enter A Valid Email ID" class="big_box" required><br>
                       </div><br>
                    
                       <div class="reg-group">
                        <label for="Phone">Phone:</label><br>
                        <input type="" name="phone" id="phone" placeholder="Enter Your Phone Number" class="big_box" required><br>
                    </div><br>
                    
                    
                    
                   
    
                    <div class="reg-group">
                        <label for="Password">Password:</label><br>
                        <input type="Password" name="password" id="password" placeholder="Enter Your Password" class="big_box" required><br>
                    </div><br>
                    
                    <div class="reg-group">
                        <label for="Password">Confirm Password:</label><br>
                        <input type="Password" name="cpassword" id="password" placeholder="Confirm Your Password" class="big_box" required><br>
                    </div><br>
                    
                    <div class="button-mid">
                        <button type="submit" name="submit" class="btn btn-primary">Sign Up</button><br><br>
                    </div>
                
                </form>
            
            </div>
        
        </div>

    </div>


</body>

</html>



<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        echo 'hi';
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        $pass=password_hash($password, PASSWORD_BCRYPT);
        $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

        $token=bin2hex(random_bytes(15));

        



        $selectquery="select * from finaltour where email='$email'";
        $processquery=mysqli_query($con,$selectquery);
        $countmail=mysqli_num_rows($processquery);

        $fetchdata_db=mysqli_fetch_assoc($processquery);

       


        if($countmail>0){
            echo "mail already exisist";

        }else{
            if($password===$cpassword){


            $insertquery="insert into finaltour(name,email,phone,password,cpassword,token,status) values('$name','$email','$phone','$pass','$cpass','$token','inactive')";
            $query=mysqli_query($con,$insertquery);
            if($query){
                $subject="acount activation";
                $body="hi . $name . please click on the link to activate your account . http://localhost/final%20tour/activation.php?token=$token";
                $sender="Form:admon3472@gmail.com";
                if(mail($email, $subject, $body,$sender)){
                    echo "mail send at $email";
                    header('location:login.php');
                }else{
                    echo "mail send failed";
                }
            }else{
                echo "data not inserted";
            }
        }
        }
    }



    


?>