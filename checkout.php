<?php

  session_start();

  if (isset($_SESSION['full_name']) && isset($_SESSION['email']) && isset($_SESSION['state']) && isset($_SESSION['phone'])) {
    $full_name = $_SESSION['full_name'];
    $email = $_SESSION['email'];
    $state = $_SESSION['state'];
    $phone = $_SESSION['phone'];
  }
  else {
    echo "Session is empty";
  }
?>
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Get involved</title>
  </head>

  <body onload="getCountries()">
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
                  <ul class="navbar-nav header" id="myHeader">
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
              </ul>
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

    <div class="">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-10 maradona">
          <div class="form-top">
            <div class="personal-info position-fixed">
              <div class="infos">
                <!-- <a href="form.php">
                    <div class="person">
                        <p>Personal Information</p>
                      </div>
                </a>  -->
                <!-- <a href="additional.php">
                    <div class="additional">
                        <p>Additional Details</p>
                      </div>
                </a> -->

                <!-- <a href="checkout.php">
                    <div class="checkout">
                        <p>Check Out</p>
                      </div>
                </a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-1"></div>
    </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-sm-12 col-md-12 col-lg-10">
              <div data-aos="fade-down"
                  data-aos-duration="2500">
                  <div class="japa">
                    <div class="check-out">
                      <!-- <div class="check">
                          <h1>Checkout</h1>
                          <h4>Billings Information</h4>
                      </div> -->

                      <!-- <form action="" method="POST">
                        <label>
                            <h6>
                              Full Name
                              <span
                                style="
                                  color: red !important;
                                  margin-left: 5px;
                                  display: inline;
                                "
                                >*</span
                              >
                            </h6>
                            <input type="text" placeholder="Enter fullname" name="full_name" required value="<?php echo isset($_SESSION['full_name']) ? htmlspecialchars($_SESSION['full_name']) : ''; ?>" disabled/>
                          </label>
      
                          <label>
                            <h6>
                              Email Address
                              <span
                                style="
                                  color: red !important;
                                  margin-left: 5px;
                                  display: inline;
                                "
                                >*</span
                              >
                            </h6>
                            <input type="text" placeholder="Enter Email Address" name="email" required value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>" disabled/>
                          </label>
      
    
                          <label>
                            <h6>
                              State
                              <span
                                style="
                                  color: red !important;
                                  margin-left: 5px;
                                  display: inline;
                                "
                                >*</span
                              >
                            </h6>
                            <input type="text" placeholder="Enter State" name="state" required value="<?php echo isset($_SESSION['state']) ? htmlspecialchars($_SESSION['state']) : ''; ?>" disabled/>
                          </label>
                          

                          <label>
                            <h6>
                              Phone Number
                              <span
                                style="
                                  color: red !important;
                                  margin-left: 5px;
                                  display: inline;
                                "
                                >*</span
                              >
                            </h6>
                            <input type="text" placeholder="Enter Phone Number" name="phone" required value="<?php echo isset($_SESSION['phone']) ? htmlspecialchars($_SESSION['phone']) : ''; ?>" disabled/>
                        </label>
                      </form> -->

                       
    
                        <!-- <div class="notice">
                          <span> <span class="down">Note:</span> Ensure the your Information matches the previous form you fill.</span>
                        </div> -->
                    </div>
                      <!-- <div class="pay-section">
                       
                        <div class="summary mt-5">
                          <h4>Summary</h4>
    
                          <div class="pricesss mt-3">
                            <div>
                              <p>Original Price:</p>
                            </div>
    
                            <div>
                              <p>N13,500</p>
                            </div>
                          </div>
    
    
                          <div class="total mt-3">
                            <div>
                              <p>Total:</p>
                            </div>
    
                            <div>
                              <p>N13,500</p>
                            </div>
                          </div>
                        </div>
    
                        <div class="text-center mylast">
                          <button id="submitButton" type="submit" name="submit">Pay now</button>
                        </div>
                    </div> -->
    
                    
                  </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    


    <section class="color-change">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-10">
          <div class="footer">
            <div class="footer-contents">
              <div class="logo">
                <img src="assets/Logo2.png" alt="" class="w-75 pt-2" />
              </div>
              <p class="website">
                This is the official website of the Lagos State College of
                Health Technology Alumni,
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
          <div class="row mt-5 relay ">
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
            <div class="col-sm-12 col-md-12 col-lg-1"></div> 
          </div>
        
        </div>
        <div class="col-sm-12 col-md-12 colg-1"></div>
      </div>
    </section>


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
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="index.js"></script>
  </body>
</html>
 