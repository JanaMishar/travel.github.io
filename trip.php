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

    <div class="trip">
        <div class="trip-box">
            <header class='header'>
        
                <nav class='navbar'>
                        
                    <div class="container">
                        
                        <ul class='nav-items'>
                            <li class="nav-item"><a href="./index.html">Home</a></li>
                            <li class="nav-item"><a href="#about">About</a></li>
                            <li class="nav-item"><a href="" onclick="alert('You are in Trip page.')">Your Trip</a></li>
                            <li class="nav-item">
                                    
                                    <a href="#Helpline" onclick="togglepopup()">Helpline</a>
                                    
                                    <div class="popup" id="popup-1">
                                        
                                        <div class="overlay"></div>
                                        
                                        <div class="content">
                                        
                                        <div class="close-btn" onclick="togglepopup()">&times;</div>
                                        <br>
            
                                        <ul class='help'>
                                            <li class="help-item">
                                                <a href="">+919875347473</a>
                                            </li>
                                            <li class="help-item">
                                                <a href="">+917001190778</a>
                                            </li>
                                            <li class="help-item">
                                                <a href="">greentravel21@gmail.com</a>
                                            </li>
                                        </ul>
                                    
                                    </div>
                                
                                </div>
                            
                            </li>
                            
                            <li class="nav-item"><a href="./login.html">Sign up/in</a></li>
            
                            <li class="nav-item"><a href="./Admin_login.html">Admin</a></li>
                        
                        </ul>
                        
                    </div>
                    
                </nav>
            </header>

<div class="trip-button">
    <a href="Indian.php" class="trip-btn">COUNTRY TRIP</a>
    <a href="International.php" class="trip-btn">FOREIGN TRIP</a>
</div>

        </div>
    </div>

    <script>
        $(document).ready(function(){
        
          $("a").on('click', function(event) {
        
            if (this.hash !== "") {
            
              event.preventDefault();
            
              var hash = this.hash;
        
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
        
                window.location.hash = hash;
              });
            }
          });
        });
        
        
        function togglepopup(){
            document.getElementById("popup-1").classList.toggle("active");
        }
        
        
        
        </script>

</body>

</html>