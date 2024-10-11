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
                <!-- <li><a href="newupdates.php">New Updates</a></li> -->
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
                  <!-- <li><a href="newupdates.php">New Updates</a></li> -->
                  <li><a href="membership.php">Membership</a></li>
                  <li><a href="executives.php">Executive Comittee</a></li>
                </ul>
                <div class="nav_btns">
                  <a href="reachout.php">
                    <button>Contact Us</button>  
                  </a>
                  <a href="form.php">
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

      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-10 maradona">
          <div class="form-top">
            <div class="personal-info position-fixed">
              <div class="infos">
                      <a href="form.php">
                        <div class="person">
                          <p class="pchange">Personal Information</p>
                        </div>
                      </a>
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
    


    <div data-aos="fade-down"
         data-aos-duration="2500">
         <div class="habor">
          <div class="row habor">
            <div class="col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-sm-12 col-md-12 col-lg-10 justify-content-center">
              <div class="formular">
                    <h1>Personal Information</h1>
                        <form action="verify_payment.php" class="form-main" method="POST">
                              <div class="solve">
                                  <div class="left-form">
                                    <div class="row">
                                      <div class="col-sm-12 col-sm-12 col-lg-6">
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
                                            <input type="text" placeholder="Enter fullname" name="full_name" required />
                                      </label>
                                      <label>
                                            <h6>
                                              Amount
                                              <span
                                                style="
                                                  color: red !important;
                                                  margin-left: 5px;
                                                  display: inline;
                                                "
                                                >*</span
                                              >
                                            </h6>
                                            <input type="number" placeholder="Enter amount" name="amount" required />
                                      </label>
                                      </div>

                                      <div class="col-sm-12 col-sm-12 col-lg-6">
                                          <label style="">
                                              <h6>
                                                Email
                                                <span
                                                  style="
                                                    color: red !important;
                                                    margin-left: 5px;
                                                    display: inline;
                                                  "
                                                  >*</span
                                                >
                                              </h6>
                                              <input type="text" placeholder="Email" name="email" required />
                                            </label>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-sm-12 col-md-12 col-lg-6">
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
                                              <input type="number" placeholder="Enter Phone Number" name="phone" required />
                                            </label>
                                      </div>
                                      <div class="col-sm-12 col-md-12 col-lg-6">
                                          <label class="hmmmmm-1">
                                              <h6>
                                                Date Of Birth
                                                <span
                                                  style="
                                                    color: red !important;
                                                    margin-left: 5px;
                                                    display: inline;
                                                    padding-top: 13px;
                                                  "
                                                  >*</span
                                                >
                                              </h6>
                                              <div>
                                                <input type="date" placeholder="DD/MM/YY" name="date_of_birth">
                                             </div>
                                            </label>
                                      </div>
                                    </div>
                          
                                        
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                              <div class="hmmmmm">
                                                <label style="padding-top: 6px">
                                                  <h6>
                                                    Gender
                                                    <span
                                                      style="
                                                        color: red !important;
                                                        margin-left: 5px;
                                                        display: inline;
                                                      "
                                                      >*</span
                                                    >
                                                  </h6>
                                                  <select name="gender">
                                                    <option value="" disabled selected>
                                                      Select your Gender
                                                    </option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                  </select>
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                              <div class="marital">
                                                <label for="country">Marital Status
                                                <span
                                                      style="
                                                        color: red !important;
                                                        margin-left: 5px;
                                                        display: inline;
                                                      "
                                                      >*</span
                                                    >
                                                </label>
                                                <!-- <span
                                                  style="
                                                    color: red !important;
                                                    margin-left: 5px;
                                                    display: inline;">*</span
                                                > -->
                                                <select name="marital" class="form-control">
                                                  <option value="default" disabled selected>
                                                    Select your Marital Status
                                                  </option>
                                                  <option value="single">Single</option>
                                                  <option value="married">Married</option>
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                         

                                      <div class="row">
                                              <div class="col-sm-12 col-md-12 col-lg-6">
                                                <label>Select Country 
                                                       <span style="color: red; margin-left: 5px; display: inline;">*</span>
                                                </label>
                                                <select id="country-select" onchange="getCountryState(event)" name="country">
                                                </select>
                                              </div>
                                              <div class="col-sm-12 col-md-12 col-lg-6 gm">
                                                      <label class="" style="padding-top: 5px;">
                                                        <h6>
                                                          State<span
                                                            style="
                                                              color: red !important;
                                                              margin-left: 5px;
                                                              display: inline;
                                                            "
                                                            >*</span
                                                          >
                                                        </h6>
                                                        <select name="state" id="state-select">
                                                          
                                                        </select>
                                                      </label>
                                              </div>
                                              <div class="row m-auto" style="width: 102%;">
                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                    <label style="padding-top: 12px;">
                                                      <h6>
                                                        City
                                                        <span
                                                          style="
                                                            color: red !important;
                                                            margin-left: 5px;
                                                            display: inline;
                                                          "
                                                          >*</span
                                                        >
                                                      </h6>
                                                      <input
                                                        type="text"
                                                        placeholder="Enter your city"
                                                        required
                                                        name="city"
                                                      />
                                                    </label>
                                                </div>

                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                    <label style="padding-top: 12px;">
                                                      <h6>
                                                        House Address
                                                        <span
                                                          style="
                                                            color: red !important;
                                                            margin-left: 5px;
                                                            display: inline;
                                                          "
                                                          >*</span
                                                        >
                                                      </h6>
                                                    <input type="text" placeholder="House Address" required name="house_address"/>
                                                    </label>
                                                </div>
                                              </div>

                                              
                                          </div>
                                      </div>
                                  
                                  <div class="right-form">
                                    <div class="row">
                                      <div class="col-sm-12 col-md-12 col-lg-6">
                                      <div class="">
                                            <label for="Faculty">Faculty/School
                                                   <span style="color: red !important; margin-left: 5px; display: inline;">*</span>
                                            </label>
                                            <select name="faculty" class="form-control">
                                              <option disabled selected>select faculty/school</option>
                                              <option value="School_of_Community_Health_Extension_Workers">School of Community Health Extension Workers</option>
                                              <option value="School_of_Medical_Laboratory_Technician">School of Medical Laboratory Technician</option>
                                              <option value="⁠School_of_Complimentary_Health_Science">⁠School of Complimentary Health Science</option>
                                              <option value="⁠School_of_Environmental_Health_Technology">⁠School of Environmental Health Technology</option>
                                              <option value="School_of_Pharmacy_Technician">⁠School of Pharmacy Technician</option>
                                              <option value="School_of_Health_Information_Management ">School of Health Information Management</option>
                                              <option value="⁠School_of_Morbid_Science">⁠School of Morbid Science</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col-md-12 col-lg-6">  
                                      <label style="padding-top: 6px;">
                                                  <h6>
                                                      Degree/Diploma/Certificate Obtained
                                                    <span
                                                      style="
                                                        color: red !important;
                                                        margin-left: 5px;
                                                        display: inline;
                                                      "
                                                      >*</span
                                                    >
                                                  </h6>
                                                  <input type="text" placeholder="Enter Degree/Diploma/Certificate Obtained" required name="degree"/>
                                            </label>
                                      </div>
                                    </div>
                                          

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                          <div style="padding-top: 10px;">
                                            <label for="Department">Department
                                                 <span style="color: red !important; margin-left: 5px; display: inline;">*</span>
                                            </label>
                                                  <select class="form-control bycountry" name="department">
                                                    <option disabled selected>
                                                      Select your Department
                                                    </option>

                                                    <option value="Community_Health_Extension_Workers">
                                                      Community Health Extension Workers
                                                    </option>

                                                    <option value="Junior_Community_Health_Extension_Workers">
                                                      Junior Community Health Extension Workers
                                                    </option>

                                                    <option value="Medical_Laboratory_Technician">
                                                      Medical Laboratory Technician
                                                    </option>

                                                    <option value="Phlebotomy">
                                                      Phlebotomy
                                                    </option>

                                                    <option value="Environmental_Health">
                                                      Environmental Health
                                                    </option>

                                                    <option value="Biomedical">
                                                      Biomedical
                                                    </option>

                                                    <option value="Health_Information_Technology">
                                                      Health Information Technology
                                                    </option>

                                                    <option value="Pharmacy_Technician">
                                                      Pharmacy Technician
                                                    </option>

                                                    <option value="Complimentary_Health_Science">
                                                      Complimentary Health Science
                                                    </option>

                                                    <option value="Public_Health_Technician">
                                                      Public Health Technician
                                                    </option>

                                                    <option value="Morbid_Science">
                                                      Morbid Science
                                                    </option>
                                                  </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <label style="padding-top: 16px;">
                                            <h6>
                                              Matric No.
                                              <span
                                                style="
                                                  color: red !important;
                                                  margin-left: 5px;
                                                  display: inline;
                                                "
                                                >*</span
                                              >
                                            </h6>
                                            <input type="text" placeholder="Enter Matric Number" required name="matric"/>
                                          </label>
                                        </div>
                                    </div>
                                          
                                          
                                      <div class="row">
                                        <!-- <div class="col-sm-12 col-md-12 col-lg-6">
                                          <label style="padding-top: 5px;">
                                                <h6>
                                                    Present Employer (If any)
                                                  <span
                                                    style="
                                                      color: red !important;
                                                      margin-left: 5px;
                                                      display: inline;
                                                    "
                                                    ></span
                                                  >
                                                </h6>
                                                <input type="text" placeholder="Enter Present Employer"  name="employer"/>
                                          </label>
                                        </div> -->
                                        <!-- <div class="col-sm-12 col-md-12 col-lg-6">
                                            <label style="padding-top: 5px">
                                                <h6>
                                                    Address of Employer (If any)
                                                  <span
                                                    style="
                                                      color: red !important;
                                                      margin-left: 5px;
                                                      display: inline;
                                                    "
                                                    ></span
                                                  >
                                                </h6>
                                                <input type="text" placeholder="Enter Address of Employer" name="employer_address"/>
                                          </label>
                                        </div> -->

                                      </div>
                                         
                            
                                          
                            
                            
                                          <!-- <label style="padding-top: 2px;">
                                            <h6 style="padding-top: 9px;">
                                                Present Post/Rank (If any)
                                              <span
                                                style="
                                                  color: red !important;
                                                  margin-left: 5px;
                                                  display: inline;
                                                "
                                                ></span
                                              >
                                            </h6>
                                            <input type="text" placeholder="Enter Present Post/Rank" name="rank"/>
                                          </label> -->
                                        </div> 
                                      <div class="sharpiru-button">
                                          <button id="submitButton">
                                              <span class="" role="status" aria-hidden="true"></span>
                                               <span id="buttonText">Proceed</span>
                                          </button>
                                      </div>
                                    </div> 
                        </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-1"></div>
          </div>
        </div>
    </div>
    

    
    <section class="color-change">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-10">
          <div class="footer">
            <div class="footer-contents">
              <div class="logo">
                <img src="/assets/Logo2.png" alt="" class="w-75 pt-2" />
              </div>
              <p class="website">
                This is the official website of the Lagos State College of
                Health Technology Alumni,
              </p>
            </div>

            <div class="contact pt-3">
              <h5>Contact us</h5>
              <p>
                      <a style="color: black;" href="tel:+2348162767345" class="numberrr">
                        08162767345
                      </a>
                    </p>
                    <p>
                      <a style="color: black;" class="mail" href="https://mail.google.com/mail/?view=cm&fs=1&to=Support@thelascohetalumni.com&su=Support%20Inquiry&body=Hello%2C%20I%20need%20assistance%20with..." target="_blank">
                        Support@thelascohetalumni.com
                      </a>
                    </p>
              <p>info@thelascohetalumni.org</p>
            </div>

            <div class="links pt-3">
              <h5>Useful links</h5>
              <p>Lascohet website</p>
              <p>
                      <a href="https://portal.lascohet.edu.ng/student_login.php" target="_blank">Lascohet Portal</a>                      
                    </p>
              <p>E-clearance</p>
            </div>
            <!-- <div class="navigate pt-3">
                      <h5>Building a Legacy: College of Health Technology Alumni Network</h5>
                      <p>Create Alumni Account</p>
                      <p>My Account</p>
                      <p>Pay Alumni fee</p>
                  </div> -->

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
