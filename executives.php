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
                  <li><a href="/">Home</a></li>
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
            <div class="executive-hero">
                
            </div> 
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-10">
          <div class="details">
            <div class="executive-members mt-5">
                <div class="memberrr">
                    
                    
                   
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
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
<script src="index.js"></script>

  </body>
</html>
