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
                    <li class="nav-item"><a href="./index.html">Home</a></li>
                    <li class="nav-item"><a href="#about">About</a></li>
                    <li class="nav-item"><a href="./trip.html">Your Trip</a></li>
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
    
    <div class="place">
        
        <div class="place-img">
            <img src="./IMG/sri_lanka.jpg">
        </div>
        
        <div class="p-text">

            <h2 class="h">Sri Lanka</h2>
        
        <p class="design">9days,8 nights</p>
        
        <p class="design">Colombo, Dambulla, Sigriya, Kandy, Beruwala, World's End Nuwara Eliya, Yala National Park, Galle Face Green.</p>
        
        <p class="design">Rs. 98,999</p>
        
        <div class="b">
            <a href="booktour.php"><button type="submit" class="btn btn-primary">Book Trip</button></a>
        </div>
    
        </div>
        
    </div>
    
    <div class="place">
        
        <div class="place-img">
            <img src="./IMG/malaysia.jpg">
        </div>
        
        <div class="p-text">

            <h2 class="h">Malaysia</h2>
        
        <p class="design">11 days,10 nights</p>
        
        <p class="design">Kuala Lumpur, Putrajaya, Genting Highlands, Explore Petronas Twin Towers, Langkawi Cable Car, Explore Langkawi Sky Bridge, Aquaria KLCC.</p>
        
        <p class="design">Rs. 1,08,749</p>
        
        <div class="b">
            <a href="login.php"><button type="submit" class="btn btn-primary">Book Trip</button></a>
        </div>
    
        </div>
        
    </div>
    
    <div class="place">
        
        <div class="place-img">
            <img src="./IMG/singapore.jpg">
        </div>
        
        <div class="p-text">

            <h2 class="h">Singapore</h2>
        
        <p class="design">7 days,8 nights</p>
        
        <p class="design">Langkawi, Sentosa Island, Singapore Flyer, Night Safari Nocturnal Wildlife Park, Marina Bay, S.E.A. Aquarium, River Safari Singapore.</p>
        
        <p class="design">Rs. 1,20,118</p>
        
        <div class="b">
            <a href="login.php"><button type="submit" class="btn btn-primary">Book Trip</button></a>
        </div>
    
        </div>
        
    </div>
    
    <div class="place">
        
        <div class="place-img">
            <img src="./IMG/dubai.jpg">
        </div>
        
        <div class="p-text">

            <h2 class="h">United Arab Emirates</h2>
        
        <p class="design">8 days,7 nights</p>
        
        <p class="design">Abu Dhabi, Yas Island, Take a Beach Break, Burj Khalifa, Jebel Jais, Louvre Abu Dhabi, UAE's Desert.</p>
        
        <p class="design">Rs. 1,70,450</p>
        
        <div class="b">
            <a href="login.php"><button type="submit" class="btn btn-primary">Book Trip</button></a>
        </div>
    
        </div>
        
    </div>
    
    <div class="place">
        
        <div class="place-img">
            <img src="./IMG/bhutan.jpg">
        </div>
        
        <div class="p-text">

            <h2 class="h">Bhutan</h2>
        
        <p class="design">7 days,6 nights</p>
        
        <p class="design">Thimphu, Paro, Jakar, Punakha Dzong, Punakha Suspension Bridge, Jigme Dorji National Park.</p>
        
        <p class="design">Rs. 81,325</p>
        
        <div class="b">
            <a href="login.php"><button type="submit" class="btn btn-primary">Book Trip</button></a>
        </div>
    
        </div>
        
    </div>
    
    <div class="place">
        
        <div class="place-img">
            <img src="./IMG/nepal.jpg">
        </div>
        
        <div class="p-text">

            <h2 class="h">Nepal</h2>
        
        <p class="design">6 days,5 nights</p>
        
        <p class="design">Kathmandu, Chitwan, Pokhara, Nagarkot, Bhaktapur, Boudhanath Stupa, Trekking in the Annapurna Region, Langtang.</p>
        
        <p class="design">Rs. 75,640</p>
        
        <div class="b">
            <a href="login.php"><button type="submit" class="btn btn-primary">Book Trip</button></a>
        </div>
    
        </div>
        
    </div>
    
    <div class="place">
        
        <div class="place-img">
            <img src="./IMG/south_africa.jpg">
        </div>
        
        <div class="p-text">

            <h2 class="h">South Africa</h2>
        
        <p class="design">8 days,9 nights</p>
        
        <p class="design">Cape Town, Pretoria, Johannesburg, Durban, Port Elizabeth, Kruger National Park, Garden Route, Northern Cape, Western Cape.</p>
        
        <p class="design">Rs. 2,40,000</p>
        
        <div class="b">
            <a href="login.php"><button type="submit" class="btn btn-primary">Book Trip</button></a>
        </div>
    
        </div>
        
    </div>
    
    <div class="place">
        
        <div class="place-img">
            <img src="./IMG/australia.jpg">
        </div>
        
        <div class="p-text">

            <h2 class="h">Australia</h2>
        
        <p class="design">10 days,9 nights</p>
        
        <p class="design">Perth, Adelaide, Sydney, Melbourne, Gold Coast, Great Barrier Reef Marine Park, Uluru-Kata Tjuta National Park.</p>
        
        <p class="design">Rs. 2,45,550</p>
        
        <div class="b">
            <a href="login.php"><button type="submit" class="btn btn-primary">Book Trip</button></a>
        </div>
    
        </div>
        
    </div>
    
    <div class="place">
        
        <div class="place-img">
            <img src="./IMG/mauritius.jpg">
        </div>
        
        <div class="p-text">

            <h2 class="h">Mauritius</h2>
        
        <p class="design">9 days,8 nights</p>
        
        <p class="design">Port Louis, Ile Aux Cerfs Beach, Belle Mare, Chamarel, Tamarin Beach, Underwater Waterfall.</p>
        
        <p class="design">Rs. 1,91,330</p>
        
        <div class="b">
            <a href="login.php"><button type="submit" class="btn btn-primary">Book Trip</button></a>
        </div>
    
        </div>
        
    </div>
    
    <div class="place">
        
        <div class="place-img">
            <img src="./IMG/maldives.jpg">
        </div>
        
        <div class="p-text">

            <h2 class="h">Maldives</h2>
        
        <p class="design">9 days,8 nights</p>
        
        <p class="design">Maldives, Male, COMO Cocoa Island, Addu Atoll, Maafushi, Artificial Beach, Fulhadhoo Island.</p>
        
        <p class="design">Rs. 2,05,175</p>
        
        <div class="b">
            <a href="login.php"><button type="submit" class="btn btn-primary">Book Trip</button></a>
        </div>

        </div>
    
    </div>

    <footer id="footer">
   
        <div class="social-media-links">
            
            <i class="fab fa-facebook-square fa-2x"></i>
            
            <i class="fab fa-instagram-square fa-2x"></i>
            
            <i class="fab fa-twitter-square fa-2x"></i>
        
        </div>
        
        <p>Restraunt Website &copy; all rights reserved</p>
    
    </footer>


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