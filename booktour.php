<?php
  session_start();

  if(!isset($_SESSION['name'])){
    echo 'you are logged out';
    header('location:login.php');

  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PROJECT</title>
  </head>
  <body>
  <div class="container mt-3">
        <div class="alert alert-danger" role="alert">
  Book Detils
        </div>
        <br>
<!--        form starts from here-->
<a href="logout.php">LOG OUT</a>
      <form action="" method="POST"> 
  <div class="form-group">


  
    <div class="form-group">
    <label >NAME</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value=" <?php echo $_SESSION['name']; ?> ">
    </div>

       <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Semister" value="<?php echo $_SESSION['mail']; ?>">
  </div>

        <div class="form-group">
    <label >PHONE</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" value="<?php echo $_SESSION['phone']; ?>">
  </div>


     <div class="form-group">
    <label >Persons</label>
    <input type="text" class="form-control" id="persons" name="persons" placeholder="Enter no op person">
  </div>

  <div class="form-group">
    <label >Days</label>
    <input type="text" class="form-control" id="days" name="days" placeholder="Enter no op person">
  </div>



<!--        <div class="form-group">-->
    

  <button type="submit" name="submit" class="btn btn-danger">Submit</button>

    </form>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  include 'connection.php';
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $persons=$_POST['persons'];
    $days=$_POST['days'];

    $query="select * from finaltour where email='$email'";
    $processquery=mysqli_query($con,$query);

    if($processquery){
      
      $subject="Details of booking";
      $body="mr  - .$name.
      email - .$email .
      phone - .$phone .
      persons - .$persons .
      days - .$days ";
      $sender="Form:admon3472@gmail.com";
      if(mail($email,$subject,$body,$sender)){
        echo "mail send at . $email";
        header('location:booktour.php');
      }else{
        echo "mail not found";
      }
    }else{
      echo "mail not exist";
    }
  }
  

?>