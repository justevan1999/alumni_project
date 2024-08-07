<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"crossorigin="anonymous"/>
    <title>ALUMNI</title>
  </head>
  <body>

    <header>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-10">
          <nav class="d-flex align-items-center">
            <div id="home-img" class="logos">
              <a href="index.php">
                <img
                src="assets/loscohet_logo.png"
                alt="Company Brand"
                class="logo_lg"
              />
              </a>
             
              <img
                src="assets/logo_rounded.png"
                alt="Company Brand"
                class="logo_sm"
              />
            </div>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="newupdates.php">New Updates</a></li>
              <li><a href="membership.php">Membership</a></li>
              <li><a href="executives.php">Executive Comittee</a></li>
            </ul>
            <div class="nav_btns">
              <button id="goToContact">Contact Us</button>
              <button id="goToCheckOut">Pay Alunmi Fee</button>
            </div>
      
            <div class="sm_ul" id="sm_ul">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="newupdates.php">New Updates</a></li>
                <li><a href="membership.php">Membership</a></li>
                <li><a href="executives.php">Executive Comittee</a></li>
              </ul>
              <div class="nav_btns">
                <a href="reachout.php">
                  <button>Contact Us</button>  
                </a>
                <a href="checkout.php">
                  <button class="btn-pay">Pay Alunmi Fee</button>                     
                </a>
              </div>
            </div>
            <i class="bx bx-menu-alt-left" id="menu_toggle"></i>
          </nav>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
    
      </div>
    </header>
    <!-- <header>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-10">
          <nav class="navbar navbar-expand-lg navbar-light" id="navbar_top">
            <a class="navbar-brand" href="#">
                <span class="nav-item-logo">
                    <a href="Home.html">
                    <img src="/assets/Logo.png" alt="" />
                    </a>
                  </span>
            </a>
            <button
            class="navbar-toggler"
           type="button"
           data-toggle="collapse"
           data-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent"
           aria-expanded="false"
           aria-label="Toggle navigation"
         >
         <img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAiElEQVR4nO3YwRGAIAxEUcrTsQdCH5oGSJdqH3qyADEjKP/NcGdP2dkQAABAg0RtSpr3pHbUfLLYFtXG+wEW22p/Pl0hNK/9BYhqYwshRPMqcx5uBwAA9E0cu1Bxn3nC+woX1YGuA0THLkSfAQD8fhcS775UY5EQz7rx+QDx5V1I2H8AAAjfcwI8FTi/DCbpogAAAABJRU5ErkJggg==">
        
         </button> 
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <div class="nav-top">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="Home.html">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="About.html">About</a>
                      </li>
        
                      <li class="nav-item">
                        <a class="nav-link" href="Newupdates.html">Newupdates</a>
                      </li>
        
                      <li class="nav-item">
                        <a class="nav-link" href="membership.html">Membership</a>
                      </li>
                    </ul>
                  </div>
              <div class="main-buttons pt-2">
                <button class="contact-btn">Contact Us</button>
                <button class="hero-btn">Get Involved</button>

              </div>
            </div>
          </nav>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
      </div>
    </header> -->

    
<div data-aos="zoom-out"
      data-aos-duration="2000">
      <a href="newsupdates2.php" >
        <section>
          <div class="row mt-2 karma">
              <div class="col-sm-12 col-md-12 col-lg-1"></div>
              <div class="col-sm-12 col-md-12 col-lg-10">       
          <div class="article mt-3">
              <div class="article-text">
                  <h6>FEATURED ARTICLE</h6>
              </div>
              <div class="article-image">
                  <img src="assets/Group 20646.png" alt="">
              </div>
          </div>
              </div>
              <div class="col sm-12 col-md-12 col-lg-1"></div>
          </div>
      </section>
      </a>
</div>

    

    <container id="feel">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-10">
          <div class="recommend">
            <div class="rec-text ">
              <h4>Recommended for you</h4>
            </div>
            <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="endss-3">
                  <div class="initial-3">
                    <div class="initial-1">

                      <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="">
                          <img src="assets/image 66 (1).png" alt="">
                      </div>
                      </div>

                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="fonts">
                          <h4>
                            Samuel Oguche Basketball Tournament 2022 (Competition Summary)
                          </h4>
                              <div class="small-letters">
                                <div>
                                    <p>Samuel</p>
                                </div>
    
                                <div>
                                    <p>.  April 25, 2012 (6 mins read)</p>
                                </div>
                              </div>
                          <p class="fonts-p">
                            The first Bullet Basketball Tournament has come to an end with the Kwara Falcons of Ilorin defeating
                            the Warlords Basketball Club of Abeokuta to emerge as champion. In a similar vein, First Bank of Lagos also won their final match against the MFM Basketball Club in the female category.
                          </p>
                      </div>
                      </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="endss-3">
                  <div class="initial-3">
                    <div class="initial-1">
                      <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="">
                          <img src="assets/image 66 (2).png" alt="">
                      </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="fonts">
                          <h4>
                            Samuel Oguche Basketball Tournament 2022 (Competition Summary)
                          </h4>
                              <div class="small-letters">
                                <div>
                                    <p>Samuel</p>
                                </div>
    
                                <div>
                                    <p>.  April 25, 2012 (6 mins read)</p>
                                </div>
                              </div>
                          <p class="fonts-p">
                            The first Bullet Basketball Tournament has come to an end with the Kwara Falcons of Ilorin defeating
                            the Warlords Basketball Club of Abeokuta to emerge as champion. In a similar vein, First Bank of Lagos also won their final match against the MFM Basketball Club in the female category.
                          </p>
                      </div>
                      </div>
                      </div>                
                    </div> 
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="endss-3">
                  <div class="initial-3">
                    <div class="initial-1">
                      <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="">
                          <img src="assets/image 65 (2).png" alt="">
                      </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="fonts">
                          <h4>
                            Samuel Oguche Basketball Tournament 2022 (Competition Summary)
                          </h4>
                              <div class="small-letters">
                                <div>
                                    <p>Samuel</p>
                                </div>
    
                                <div>
                                    <p>.  April 25, 2012 (6 mins read)</p>
                                </div>
                              </div>
                          <p class="fonts-p">
                            The first Bullet Basketball Tournament has come to an end with the Kwara Falcons of Ilorin defeating
                            the Warlords Basketball Club of Abeokuta to emerge as champion. In a similar vein, First Bank of Lagos also won their final match against the MFM Basketball Club in the female category.
                          </p>
                      </div>
                      </div>


                      </div>
                    </div> 
                  </div>
                </div>
              </div>


                <div class="item">
                <div class="endss-3">
                  <div class="initial-3">
                    <div class="initial-1">

                      <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="">
                          <img src="assets/image 66 (1).png" alt="">
                      </div>
                      </div>

                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="fonts">
                          <h4>
                            Samuel Oguche Basketball Tournament 2022 (Competition Summary)
                          </h4>
                              <div class="small-letters">
                                <div>
                                    <p>Samuel</p>
                                </div>
    
                                <div>
                                    <p>.  April 25, 2012 (6 mins read)</p>
                                </div>
                              </div>
                          <p class="fonts-p">
                            The first Bullet Basketball Tournament has come to an end with the Kwara Falcons of Ilorin defeating
                            the Warlords Basketball Club of Abeokuta to emerge as champion. In a similar vein, First Bank of Lagos also won their final match against the MFM Basketball Club in the female category.
                          </p>
                      </div>
                      </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="endss-3">
                  <div class="initial-3">
                    <div class="initial-1">
                      <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="">
                          <img src="assets/image 66 (2).png" alt="">
                      </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="fonts">
                          <h4>
                            Samuel Oguche Basketball Tournament 2022 (Competition Summary)
                          </h4>
                              <div class="small-letters">
                                <div>
                                    <p>Samuel</p>
                                </div>
    
                                <div>
                                    <p>.  April 25, 2012 (6 mins read)</p>
                                </div>
                              </div>
                          <p class="fonts-p">
                            The first Bullet Basketball Tournament has come to an end with the Kwara Falcons of Ilorin defeating
                            the Warlords Basketball Club of Abeokuta to emerge as champion. In a similar vein, First Bank of Lagos also won their final match against the MFM Basketball Club in the female category.
                          </p>
                      </div>
                      </div>
                      </div>                
                    </div> 
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="endss-3">
                  <div class="initial-3">
                    <div class="initial-1">
                      <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="">
                          <img src="assets/image 65 (2).png" alt="">
                      </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="fonts">
                          <h4>
                            Samuel Oguche Basketball Tournament 2022 (Competition Summary)
                          </h4>
                              <div class="small-letters">
                                <div>
                                    <p>Samuel</p>
                                </div>
    
                                <div>
                                    <p>.  April 25, 2012 (6 mins read)</p>
                                </div>
                              </div>
                          <p class="fonts-p">
                            The first Bullet Basketball Tournament has come to an end with the Kwara Falcons of Ilorin defeating
                            the Warlords Basketball Club of Abeokuta to emerge as champion. In a similar vein, First Bank of Lagos also won their final match against the MFM Basketball Club in the female category.
                          </p>
                      </div>
                      </div>


                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
                 
        </div>
        <div class="col sm-12 col-md-12 col-lg-1"></div>
      </div>
    </div>
    </container>


    <div data-aos="zoom-out-up"
          data-aos-duration="1500">
          <section class="merch">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-1"></div>
              <div class="col-sm-12 col-md-12 col-lg-10">
                <div class="merch-mage">
                <img src="assets/Desktop - 22.png" alt="">
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-1"></div>
            </div>
            </section>
    </div>
   


     <section class="gradss">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-1"></div>
          <div class="col-sm-12 col-md-12 col-lg-10">

            <div data-aos="fade-right"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine"
                 data-aos-duration="1500">
            <div class="graduation">
              <div class="grad-boy">
                <img src="assets/image 67.png" alt="">
              </div>
              <div class="grad-text">
                  <div class="text-grap">
                    <div class="eclisps-image">
                      <img src="assets/Ellipse 5.png" alt="">
                    </div>
                    <div class="eclips-text">
                      <h5>This title doesn’t make any sense but still, i’ve to write something.</h5>
                      <p>By Manish Yadav <span class="color-add">Comment on</span> Instagram</p>
                    </div>
                  </div>
                  <div class="text-grap">
                    <div class="eclisps-image">
                      <img src="assets/Ellipse 6.png" alt="">
                    </div>
                    <div class="eclips-text">
                      <h5>This title doesn’t make any sense but still, i’ve to write something.</h5>
                      <p>By Manish Yadav <span class="color-add">Comment on</span> Instagram</p>
                      
  
                    </div>
                  </div>
                  <div class="text-grap">
                    <div class="eclisps-image">
                      <img src="assets/Ellipse 6 (1).png" alt="">
                    </div>
                    <div class="eclips-text">
                      <h5>This title doesn’t make any sense but still, i’ve to write something.</h5>
                      <p>By Manish Yadav <span class="color-add">Comment on</span> Instagram</p>

  
                    </div>
                  </div>
                  <div class="text-grap">
                    <div class="eclisps-image">
                      <img src="assets/Ellipse 6 (2).png" alt="">
                    </div>
                    <div class="eclips-text">
                      <h5>This title doesn’t make any sense but still, i’ve to write something.</h5>
                      <p>By Manish Yadav <span class="color-add">Comment on</span> Instagram</p>

  
                    </div>
                  </div>
                  <div class="text-grap">
                    <div class="eclisps-image">
                      <img src="assets/Ellipse 3.png" alt="">
                    </div>
                    <div class="eclips-text">
                      <h5>This title doesn’t make any sense but still, i’ve to write something.</h5>
                      <p>By Manish Yadav <span class="color-add">Comment on</span> Instagram</p>

  
                    </div>
                  </div>
              </div>
            </div>
            <div class="numbers">
              <div class="number-5">
                <button>Back</button>
              </div>
              <div class="number-4">
                <button>01</button>
              </div>
              <div class="number-5">
                <button>02</button>
              </div>
              <div class="number-4">
                <button>03</button>
              </div>
              <div class="number-4">
                <button>80</button>
              </div>

              <div class="number-5">
                <button>Next</button>
              </div>

            </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-1"></div>
        </div>  
      </section>

      
    <div data-aos="zoom-in"
      data-aos-duration="2000">
      <section>
        <div class="form">
          <div class="form-text">
            <h1>Make sure you dont miss a thing...</h1>
            <p class="form-p">Get informed for new updates</p>
          </div>
          <form> 
            <input style="width: 30% !important; " type="text" placeholder="Enter Your Email Address">
            <button type="submit uppp">Add Me Up</button>
          </form>
        </div>

      </section>
    </div>

     

    

    <div class="row whole">
      <div class="col-sm-12 col-md-12 col-lg-1"></div>
      <div class="col-sm-12 col-md-12 col-lg-10">
      <div class="footer">
        <div class="footer-contents">
          <div class="logo">
            <img src="assets/Logo2.png" alt="" class="w-75 pt-2" />
          </div>
          <p class="website">
            This is the official website of the Lagos State College of Health
            Technology Alumni,
          </p>
        </div>

        <div class="contact pt-3">
          <h5>Contact us</h5>
          <p>Phone Number</p>
          <p>Support@thelascohetalumni.org</p>
          <p>info@thelascohetalumni.org</p>
        </div>

        <div class="links pt-3">
          <h5>Useful links</h5>
          <p>Lascohet website</p>
          <p>Lascohet Portal</p>
          <p>E-clearance</p>
        </div>

        <div class="navigate pt-3">
          <h5>Quick Navigation</h5>
          <p>Create Alumni Account</p>
          <p>My Account</p>
          <p>Pay Alumni fee</p>
        </div>

        <div class="address pt-3">
          <h5>Address</h5>
          <p>8, Harvey Road, Yaba, Lagos.</p>
        </div>
      </div>
      <div class="row mt-5 relay just-content-space-between">
        <div class="col-sm-12 col-md-12 col-lg-10">
      <p>Follow us on all social media platforms</p>

            <div class="socials-icons">
                    <div>
                      <a href="https://instagram.com/thelascohetalumni" target="_blank">
                      <img src="assets/bi_instagram.png"  alt="" class="mr-2"/>
                      </a>
                    </div>
                    <div>

                    <a href="https://facebook.com" target="_blank">
                      <img src="assets/Group.png" alt="" class="mr-2" />
                    </a>
                    </div>

                    <div>
                      <a href="https://twitter.com/helascohet_tla" target="_blank">
                      <img src="assets/Group (1).png" alt=""  class="mr-2"/>
                      </a>
                    </div>
                  </div>
                </div>
           </div>
    
    </div>
    <div class="col-sm-12 col-md-12 col-lg-1"></div>
    </div>

    


   




    <script src="index.js"></script>


    <script>
      document.getElementById('home-img').onclick = function(){
        window.location.href = 'index.php';
      }
    </script>


    <script>
      document.getElementById('goToCheckOut').onclick = function() {
          window.location.href = 'form.php'; // Change 'about.html' to your desired URL
      };
  </script>

  <script>
    document.getElementById('goToContact').onclick = function(){
      window.location.href = 'reachout.php'
    }
  </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
