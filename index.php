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

<header class='header'>
        
    <nav class='navbar'>
            
        <div class="container">
                
            <div class="logo">
                <img src="./IMG/logo.png">
            </div>
                
            <ul class='nav-items'>
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item"><a href="#about">About</a></li>
                <li class="nav-item"><a href="trip.php">Your Trip</a></li>
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
                
                
                <li class="nav-item"><a href="./Admin_login.php">Admin</a></li>
            
            </ul>
            
        </div>
        
    </nav>

</header>

<div class="slider_back">
    <div class="maindiv"></div>
</div>

<section id="about">

    <div class="about_div">
        
        <div class="about-wrapper container">
        
            <div class="about-text">
                
                <h1 class="lg-heading text-black a_h_size">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h1>
                
                <p class="add-com">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore in voluptates officiis eum, nihil suscipit ullam, repudiandae molestiae excepturi dicta sit similique obcaecati explicabo rerum eos at quos quod! Eligendi assumenda porro quo voluptatibus adipisci repellat sed nemo soluta!</p>
            
            </div>
            
            <div class="about-img">
            
                <img src="./img/travel-image1.jpg" alt="About Us">
           
            </div>
        
        </div>
    
    </div>

</section>

<section id="place_one">

    <h2 class="place_head">FOREIGN TOURIST PLACES</h2>

    <br><br>

    <div class="place_two container">
        
        <div class="place_type">
            
            <div class="img-container">
                
                <img src="./img/singapore_two.jpg" alt="">
                
                <div class="img-content">
                    
                    <h3>SINGAPORE</h3>
                    
                    <a href="./International.php" class="btn btn-primary" target="_blank">Learn More</a>
                
                </div>
            
            </div>
        
        </div>

        <div class="place_type">
            
            <div class="img-container">
                
                <img src="./img/mauritius_two.jpg" alt="">
                
                <div class="img-content">
                    
                    <h3>MAURITIUS</h3>
                    
                    <a href="./International.php" class="btn btn-primary" target="_blank">Learn More</a>
                
                </div>
            
            </div>
        
        </div>

        <div class="place_type">
            
            <div class="img-container">
                
                <img src="./img/Bhutan_two.jpg" alt="">
                
                <div class="img-content">
                    
                    <h3>BHUTAN</h3>
                    
                    <a href="./International.php" class="btn btn-primary" target="_blank">Learn More</a>
                
                </div>
            
            </div>
        
        </div>
        
    </div>

</section>

<br><br>

<section id="place_one">

    <h2 class="place_head">INDIAN TOURIST PLACES</h2>

    <br><br>

    <div class="place_two container">
        
        <div class="place_type">
            
            <div class="img-container">
                
                <img src="./img/sikkim_two.jpg" alt="">
                
                <div class="img-content">
                    
                    <h3>SIKKIM</h3>
                    
                    <a href="./Indian.php" class="btn btn-primary" target="_blank">Learn More</a>
                
                </div>
            
            </div>
        
        </div>

        <div class="place_type">
            
            <div class="img-container">
                
                <img src="./img/kerala_two.jpg" alt="">
                
                <div class="img-content">
                    
                    <h3>KERALA</h3>
                    
                    <a href="./Indian.php" class="btn btn-primary" target="_blank">Learn More</a>
                
                </div>
            
            </div>
        
        </div>

        <div class="place_type">
            
            <div class="img-container">
                
                <img src="./img/rajasthan_two.jpg" alt="">
                
                <div class="img-content">
                    
                    <h3>RAJASTHAN</h3>
                    
                    <a href="./Indian.php" class="btn btn-primary" target="_blank">Learn More</a>
                
                </div>
            
            </div>
        
        </div>
        
    </div>

</section>

<br><br>

<section id="contact">
    
    <div class="contact-container container">
        
        <div class="contact-image">
            <img src="./img/office.jpg" alt="">
        </div>
        
        <div class="form-container">
            
            <h2>Contact US</h2>
            
            <input type="text" name="" id="" placeholder="Name">
            
            <input type="Email" name="" id="" placeholder="E-Mail">
            
            <textarea name="" id="" cols="30" rows="10" placeholder="Type Your Message Here"></textarea>
            
            <a href="#" class="btn btn-primary">Submit</a>
        
        </div>
    
    </div>

</section>

<footer id="footer">
   
    <div class="social-media-links">
        
        <i class="fab fa-facebook-square fa-2x"></i>
        
        <i class="fab fa-instagram-square fa-2x"></i>
        
        <i class="fab fa-twitter-square fa-2x"></i>
    
    </div>
    
    <p>Restraunt Website &copy; all rights reserved</p>

</footer>

<!-- ################### Java Script ###################### -->

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