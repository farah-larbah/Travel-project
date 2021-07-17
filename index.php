<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="strict-origin" />
   

    <link rel="stylesheet" href="\project\css\style.css">
    <!--to add the icons-->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--to add font-->
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Open+Sans:wght@700&display=swap" rel="stylesheet">


    <title>
        
        Explore the world
    </title>
  
  
</head>

<body id="top">
<button id="topbtn" onclick="topFunction()">Top</button>
    <div class="hero-image">
        <!--puting the nav bar over the image and making ir tranparent -->
        <!-- Navbar -->
        <nav class="navbar">

            <div class="topnav" id="myTopnav">
                <a href="#home" class="active"><b>Home</b></a>
                <a href="#discover"><b>Discover</b></a>
                <a href="/project/html/page3-map.html"><b>Map</b></a>
                <a href="/project/story.php"><b>Stories</b></a>
                <a href="/project/contact.php"><b>Contact</b></a>
               <!--class="icon" is used to open and close the topnav on small screens-->
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars" aria-hidden="true" style="font-size:24px"></i>
                </a>
            </div>
        </nav>
        <div class="hero-text " >
            <h1><span style=" letter-spacing: 10px;">Explore</span><br>

            <!--add the animation section for the main text-->
           <span class="ml9"><span style="font-family: 'Dancing Script';"class="letters">the world</span></span> </h1>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

            <a href="/project/html/page3-map.html" target="_blank">
             <button>explore  </button>
            </a> 
                      
        
        </div>
    </div>
    


    <!--section2-->
    <div class="about">
    <h2 class="section-title"><span>About</span> Us</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, et consectetur. Totam aliquid placeat est porro possimus. Repellat dolorum earum deleniti exercitationem placeat repudiandae natus, accusamus voluptas consectetur dolorem nostrum.</p>
    <br>
    <hr class="first-hr">
  </div>
    <div class="card-container">
        <div class="card">
            <img src="/project/images/airplane_take_off_64px.png" alt="airplane">
            <div class="card-body">
                <a href="https://www.wego.ae/en/flights" target="_blank">
                <h3 class="card-title">Flight Booking</h3>
            </a>
                <p>The starting point of any success story is knowing your </p>
            </div>
        </div>
                <!-- end of card -->
        <!-- Card -->
        <div class="card">
            <img src="/project/images/hotel_64px.png" alt="hotel">
            <div class="card-body">
                <a href="https://www.wego.ae/en/hotels" target="_blank">
                    <h3 class="card-title">Hotel Booking</h3>
                </a>
                <p>The starting point of any success story is knowing your </p>
            </div>
        </div>

       <!-- end of card -->
        <!-- Card -->
        
        <div class="card">
            <img src="/project/images/itinerary_64px.png" alt="">
            <div class="card-body">
                <a href="https://www.google.com/maps/@32.8829369,13.1883358,14z" target="_blank">
                <h3 class="card-title">Destination</h3>
            </a>
                <p>The starting point of any success story is knowing your </p>
            </div>
        </div>
        <!-- end of card -->
        <!-- Card -->
        <div class="card">
            <img src="/project/images/coronavirus_64px.png" alt="covid">
            <div class="card-body">
                <a href="https://www.who.int/" target="_blank">
                <h3 class="card-title">covid-19</h3>
            </a>
                <p>The starting point of any success story is knowing your </p>

            </div>
        </div>
        <!-- end of card -->
    </div>
    

    <!--end of Card Container -->
    <!--end of section2-->

    <!--section3-->
    <div class="slideshow-container" id="discover">

        <div class="mySlides">
            <video width="100%" autoplay loop preload muted>
                <source src="/project/video/asiaa.mp4" type="video/mp4">
               
              </video>
          <div class="text">
              <a href="/project/html/page2-aisa.html" target="_blank">ASIA</a>
              </div>
        </div>
        
        <div class="mySlides">
         
            <video width="100%" autoplay loop preload="auto" muted>
                <source src="/project/video/europe.mp4" type="video/mp4">
            </video>
          <div class="text">
              <a href="/project/html/page2.html" target="_blank">EUROPE</a>
              </div>
        </div>
        
        <div class="mySlides ">
            <video width="100%" autoplay loop preload="auto" muted>
                <source src="/project/video/africa.mp4" type="video/mp4">
               
              </video>
          <div class="text">
            <a href="/project/html/page2-africa.html" target="_blank">AFRICA</a>  
            </div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        </div>
        <br>
    <!--end of section3-->
    <!--section4-->

    <!-- tour section -->
    <section class="tour ">
        <div class="container">
            <h2 class="section-title">
                <span>Top</span> Tour Packages
            </h2>

            <div class="tour-wrapper">
                <!-- single tour card -->
                <div class="card-s4">
                    <img src="/project/images/place-1.jpeg" alt="tour places">
                    <div class="card-body">
                        <div class="tour-place">
                            <h2 class="normal-text">Maldives- Kandima</h2>
                            <h2 class="tour-price">$500</h2>
                        </div>
                        <div class="rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>

                        </div>
                        <h6 class="rating-text">Rating</h6>
                        <p class="normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                            incidunt quam consequuntur quia beatae minima quos non?</p>
                        <p class="normal-para">5 days 4 nights</p>
                        <hr>
                </div>
                    <div class="card-footer">
                        <span class="normal-para">
                            <i class="fas fa-map">   Maldives</i> 
                        </span>
                        <a href="https://travel.usnews.com/destinations/?int=top_nav_Travel_Guides" target="_blank">
                        <button>
                            Discover
                        </button>
                    </a>
                    </div>
                </div>
                <!-- end of single tour card -->
                <!-- single tour card -->
                <div class="card-s4">
                    <img src="/project/images/place-6.png" alt="tour places">
                    <div class="card-body">
                        <div class="tour-place">
                            <h2 class="normal-text">
                                Europe - France and Switzerland </h2>
                            <h2 class="tour-price">$600</h2>
                        </div>
                        <div class="rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                            
                        </div>
                        <h6 class="rating-text">Rating</h6>
                        <p class="normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                            incidunt quam consequuntur quia beatae minima quos non?</p>
                        <p class="normal-para">8 days 7 nights</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <span class="normal-para">
                            <i class="fas fa-map"></i> 
                               France-Switzerland 
                        </span>
                        <a href="https://travel.usnews.com/destinations/?int=top_nav_Travel_Guides" target="_blank">
                            <button>
                                Discover
                            </button>
                        </a>
                    </div>
                </div>
                <!-- end of single tour card -->

                <!-- single tour card -->
                <div class="card-s4">
                    <img src="/project/images/place-9.jpg" alt="tour places">
                    <div class="card-body">
                        <div class="tour-place">
                            <h2 class="normal-text">Roma, Italy</h2>
                            <h2 class="tour-price">$200</h2>
                        </div>
                        <div class="rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>

                        </div>
                        <h6 class="rating-text">Rating</h6>
                        <p class="normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                            incidunt quam consequuntur quia beatae minima quos non?</p>
                        <p class="normal-para">2 days 3 nights</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <span class="normal-para">
                            <i class="fas fa-map"></i> Italy
                        </span>
                        <a href="https://travel.usnews.com/destinations/?int=top_nav_Travel_Guides" target="_blank">
                            <button>
                                Discover
                            </button>
                        </a>
                    </div>
                </div>
                <!-- end of single tour card -->
                <!-- single tour card -->
                <div class="card-s4">
                    <img src="/project/images/place-8.jpg" alt="tour places">
                    <div class="card-body">
                        <div class="tour-place">
                            <h2 class="normal-text">Paris, France</h2>
                            <h2 class="tour-price">$1600</h2>
                        </div>
                        <div class="rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                            
                        </div>
                        <h6 class="rating-text">Rating</h6>
                        <p class="normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                            incidunt quam consequuntur quia beatae minima quos non?</p>
                        <p class="normal-para">9 days 8 nights</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <span class="normal-para">
                            <i class="fas fa-map"> France</i> 
                        </span>
                        <a href="https://travel.usnews.com/destinations/?int=top_nav_Travel_Guides" target="_blank">
                            <button>
                                Discover
                            </button>
                        </a>
                    </div>
                </div>
                <!-- end of single tour card -->
                <!-- single tour card -->
                <div class="card-s4">
                    <img src="/project/images/place-4.jpg" alt="tour places">
                    <div class="card-body">
                        <div class="tour-place">
                            <h2 class="normal-text">Santorini- Greece</h2>
                            <h2 class="tour-price">$280</h2>
                        </div>
                        <div class="rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>

                        </div>
                        <h6 class="rating-text">Rating</h6>
                        <p class="normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                            incidunt quam consequuntur quia beatae minima quos non?</p>
                        <p class="normal-para">4 days 3 nights</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <span class="normal-para">
                            <i class="fas fa-map"> Greece</i>
                        </span>
                        <a href="https://travel.usnews.com/destinations/?int=top_nav_Travel_Guides" target="_blank">
                            <button>
                                Discover
                            </button>
                        </a>
                    </div>
                </div>
                <!-- end of single tour card -->
                <!-- single tour card -->
                <div class="card-s4">
                    <img src="/project/images/place-10.jpg" alt="tour places">
                    <div class="card-body">
                        <div class="tour-place">
                            <h2 class="normal-text">Phi Phi Islands - Phuket</h2>
                            <h2 class="tour-price">$200</h2>
                        </div>
                        <div class="rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>

                        </div>
                        <h6 class="rating-text">Rating</h6>
                        <p class="normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                            incidunt quam consequuntur quia beatae minima quos non?</p>
                        <p class="normal-para">2 days 3 nights</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <span class="normal-para">
                            <i class="fas fa-map"> Phukete</i>
                        </span>
                        <a href="https://travel.usnews.com/destinations/?int=top_nav_Travel_Guides" target="_blank">
                            <button>
                                Discover
                            </button>
                        </a>
                    </div>
                </div>
                <!-- end of single tour card -->
                <div class="card-s4">
                    <img src="/project/images/place-2.jpg" alt="tour places">
                    <div class="card-body">
                        <div class="tour-place">
                            <h2 class="normal-text">Bali</h2>
                            <h2 class="tour-price">$400</h2>
                        </div>
                        <div class="rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                            
                        </div>
                        <h6 class="rating-text">Rating</h6>
                        <p class="normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                            incidunt quam consequuntur quia beatae minima quos non?</p>
                        <p class="normal-para">6 days 5 nights</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <span class="normal-para">
                            <i class="fas fa-map"> Bali</i>
                        </span>
                        <a href="https://travel.usnews.com/destinations/?int=top_nav_Travel_Guides" target="_blank">
                            <button>
                                Discover
                            </button>
                        </a>
                    </div>
                </div>
                <!-- end of single tour card -->
                <div class="card-s4">
                    <img src="/project/images/place-7.jpg" alt="tour places">
                    <div class="card-body">
                        <div class="tour-place">
                            <h2 class="normal-text">NYC,United States Of America</h2>
                            <h2 class="tour-price">$2500</h2>
                        </div>
                        <div class="rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                            
                        </div>
                        <h6 class="rating-text">Rating</h6>
                        <p class="normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                            incidunt quam consequuntur quia beatae minima quos non?</p>
                        <p class="normal-para">7 days 6 nights</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <span class="normal-para">
                            <i class="fas fa-map"> United States</i>  
                        </span>
                        <a href="https://travel.usnews.com/destinations/?int=top_nav_Travel_Guides" target="_blank">
                            <button>
                                Discover
                            </button>
                        </a>
                      </div>
                </div>
                <!-- end of single tour card -->
            </div> 
         </div>  
  </section>    
      <!-- end of section4-->
       <!--section5-- fact section-->
         
         <section class = "facts section-py">
            
                <h2>France is the most visited country in the world.</h2>
                <p class="normal-para">People love going to France. A staggering 89 million people visit this country to tour Paris, Cannes, and Bordeaux. </p>
               
        </section>
            
      <!--end of section5-->
        <!--section6-->
        <!--travel tips section-->
     <!--using the same code of tour card on travel tips card wuth small change on the structure-->
      <section class="tour">
        <div class="container">
           <h2 class="section-title"><span>Travel  Tips</span></h2>
           <div class="tour-wrapper">
                <!-- single tip card 1-->
                <div class="card-s4">
                    <img src="/project/images/tourTips1.jpeg" alt="tour places">
                    <div class="card-body">
                            <h2>Pack light</h2>
                          <p>It’s OK to wear the same t-shirt a few days in a row. Take half the clothes you think you will need…you won’t need as much as you think. Write down a list of essentials, cut it in half, and then only pack that! Plus, since you bought a small backpack like I said, you won’t have much room for extra stuff anyways!</p>
                     </div>
                   
                </div>
                <!-- end of single tip card -->
                <!-- single tip card 2 -->
                <div class="card-s4">
                    <img src="/project/images/tourTips2.jpeg" alt="tour places">
                    <div class="card-body">
                       
                            <h2>Travel by yourself once</h2>
                            <p>You’ll learn a lot about yourself and how to become independent. It’s a cliché, but it’s true. Traveling solo taught me how to fend for myself, talk to people, and handle unfamiliar situations with ease. It’s made me comfortable with myself, helped me learn about what I’m capable of.</p>
                          
                     </div>
                   
                </div>
                <!-- end of single tip card -->
                <!-- single tip card 3-->
                <div class="card-s4">
                    <img src="/project/images/tourTips3.jpeg" alt="tour places">
                    <div class="card-body">
                        
                            <h2>Be open to strangers</h2>
                            <p>Not everyone bites. Say hi to people on the road. Turn strangers into friends. Remember they are just like you! They want to live a happy, full life and have hopes and dreams too! You never know. You just might make some lifelong friends.</p>
                          
                     </div>
                   
                </div>
                <!-- end of single tip card -->
                 <!-- single tip card 4-->
                 <div class="card-s4">
                    <img src="/project/images/tourtips4.jpg" alt="tour places">
                    <div class="card-body">
                        
                            <h2>Don’t fly direct</h2>
                            <p>When booking flights, sometimes it is cheaper to fly into airports close to your final destination, and then take a train or bus to where you need to go. Be sure to shop around for your flight and know that direct isn’t always the cheapest route. My favorite flight search engines are</p>
                          
                     </div>
                   
                </div>
                <!-- end of single tip card -->
                
            </div> 
         </div>  
  </section>    
       <!--end of section6-->
       <!--section7 form database connection -->
       <!--having my js and php code here with the form-->
       
       <form class="contact-form" name="myform" action="/project/insert.php" method="post" >
        
          <h2 class="section-title  "><span>Tell</span> us Your Story</h2>
          <div class="input-box">
            <input type="text" name="userName" id="name" placeholder="Name" onblur="validateform()">
          </div>
          <div class="input-box">
            <input type="email" name="userEmail" id="email"  placeholder="Email" onblur="CheckEmail()">
          </div>
          <div class="input-box">
            <select id="country" name="country" >
                <option  disabled selected>Country</option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="France">France</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Maldives">Maldives</option>
                <option value="Portugal">Portugal</option>
                <option value="Switzerland<">Switzerland</option>
                <option value="Spain">Spain</option>
                <option value="usa">Usa</option>
              </select>
          </div>
          
          <div class="input-box">
            <textarea name="message" rows="8" cols="80" id="story" placeholder="Story" onblur="messagevalidattion()"></textarea>
          </div>
          <div class="input-box">
            <input type="submit" class="send-btn" name="submit" value="Send" onclick="submitForm()" >
          </div>
          <script>
            function submitForm() {
                document.getElementById('name').value='';
                document.getElementById('email').value='';
                document.getElementById('story').value='';            }
        </script>
      </form>
     
     <!--end of section7-->
  <!--footer-->
  
  
 
   <footer class = "footer ">
 
            <div class = "footer-wrapper">
            <div class = "footer-div ">
                <h2 class = "normal-title">Information</h2>
                <ul class = "footer-links">
                    <li><a href = "/project/html/page3-map.html">Map</a></li>
                    <li><a href = "#about">About</a></li>
                    <li><a href = "#">travellers stories</a></li>
                    <li><a href = "#">Privacy and Policy</a></li>
                </ul>
            </div>

            <div class = "footer-div">
                <h2 class = "normal-title">Continents</h2>
                <ul class = "footer-links">
                    <li><a href = "/project/html/page2-aisa.html">Asia</a></li>
                    <li><a href = "/project/html/page2.html">Europe</a></li>
                    <li><a href = "/project/html/page2-africa.html">africa</a></li>
                </ul>
            </div>
            <div class = "footer-div">
                <h2 class = "normal-title">important links</h2>
                <ul class = "footer-links">
                    <li><a href = "https://www.wego.ae/en/hotels">Hotel Booking</a></li>
                    <li><a href = "https://www.wego.ae/en/flights">flight booking</a></li>
                    <li><a href = "https://www.wego.ae/en/activities">activities</a></li>
                  
                </ul>
            </div>
           
          
        </div>
        
        <div class = "copyright-text" id="contact">
            <div class = "social-icons">
                <a href = "#">
                    <span><i class = "fab fa-twitter"></i></span>
                </a>
                <a href = "#">
                    <span><i class = "fab fa-facebook"></i></span>
                </a>
                <a href = "#">
                    <span><i class = "fab fa-instagram"></i></span>
                </a>
            </div>
            <p>Copyright &copy; 2021 All rights reserved | This template is made by Farah Larbah</p>
        </div>
    
</footer>
<!-- end of footer -->

    <script src="/project/js/script.js">
    </script>
</body>

</html>