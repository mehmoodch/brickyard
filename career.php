<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brickyard Real Estate LLC.</title>
    <!-- Favicon Link -->
    <link rel="shortcut icon" href="images/Brickyard-logo.webp" type="image/x-icon" sizes="96x96">
    <!-- Css Link -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Fontawesome Link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Bootstrap Css link -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Animation Link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <style>
    .form-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    .form-row > div {
      flex: 1;
      margin-right: 10px;
    }
    .form-row > div:last-child {
      margin-right: 0;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="url"],
    input[type="file"],
    input[type="number"],
    input[type="date"],
    textarea,
    select {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }
  </style>
</head>
<body>

    <!-- preloader start -->
    <div id="preloader">
      <div id="loader"></div>
      <div id="company-name">Welcome to <span>Brickyard Real Estate LLC.</span><br><span>Please Wait....</span></div>
    </div>
    <!-- preloader End -->
    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="images/Brickyard-logo.png" alt="logo" class="img-fluid" style="width: 160px; height: 84px; border-radius: 1px;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mg-lg-0 mt-3">
              <li class="nav-item m-lg-2">
                <a class="nav-link" aria-current="page" href="#Services" id="ls">Our Services</a>
              </li>
              <li class="nav-item m-lg-2">
                <a class="nav-link" href='#Process'>Process</a>
              </li>
              <li class="nav-item m-lg-2">
                <a class="nav-link" href="#Strategies" id="ls">Strategies</a>
              </li>
              <li class="nav-item m-lg-2">
                <a class="nav-link" href="#Reviews" id="ls">Reviews</a>
              </li>
              <li class="nav-item m-lg-2">
                <a class="nav-link" href="#FAQS" id="ls">FAQ'S</a>
              </li>
              <li class="nav-item m-lg-2">
                <a class="nav-link" href="#contactus">Contact Us </a>
              </li>

              <li class="nav-item m-lg-2">
              <a class="button  whatsapp-button" href="https://api.whatsapp.com/send?phone=043373565" target="_blank"> whatsapp </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Navbar Section End -->
    <!-- Hero Section Start -->
    
    <!-- Hero Section End -->
    <div class="button_click"></div>
   
<!-- career page form data-->

<section class="process_section" id="Process" style="padding-top: 100px">
                      <div class="text-center d-flex justify-content-center">
                        <h1 class="heading">
                        <i class="fa-solid fa-house"></i><strong><h2 class="text-dark">Apply here</h2></strong><i class="fa-solid fa-city"></i>
                        </h1>
                      </div>
                      <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-lg-6 mb-3 mt-3 text-center d-flex justify-content-center">
                          <h6 class="lh-lg" style="color: #000;" id="lpl">At Brickyard Real Estate we are hiring Frequently. Apply for better career oppurtunities.</h6>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="innertable">
                            <form action="submit_application.php" method="post" enctype="multipart/form-data" onSubmit="alert('Data Submitted Successfully!');">
                                        <fieldset>
                                        <legend>Personal Information</legend>
                                        <div class="form-row">
                                            <div>
                                            <label for="name">Full Name:</label>
                                            <input type="text" id="name" name="name" required>
                                            </div>
                                            <div>
                                            <label for="email">Email Address:</label>
                                            <input type="email" id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div>
                                            <label for="phone">Phone Number:</label>
                                            <input type="tel" id="phone" name="phone" required>
                                            </div>
                                            <div>
                                            <label for="address">Address:</label>
                                            <input type="text" id="address" name="address">
                                            </div>
                                        </div>
                                        </fieldset>

                                        <fieldset>
                                        <legend>Position Information</legend>
                                        <div class="form-row">
                                            <div>
                                            <label for="position">Position Applied For:</label>
                                            <input type="text" id="position" name="position" required>
                                            </div>
                                            <div>
                                            <label for="location">Preferred Location:</label>
                                            <input type="text" id="location" name="location">
                                            </div>
                                        </div>
                                        </fieldset>

                                        <fieldset>
                                        <legend>Professional Information</legend>
                                        <div class="form-row">
                                            <div>
                                            <label for="resume">Resume/CV (.pdf Only):</label>
                                            <input type="file" id="resume" name="resume" required>
                                            </div>
                                            <div>
                                            <label for="linkedin">LinkedIn Profile:</label>
                                            <input type="url" id="linkedin" name="linkedin">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div>
                                            <label for="cover_letter">Cover Letter:</label>
                                            <textarea id="cover_letter" name="cover_letter" rows="4" cols="50"></textarea>
                                            </div>
                                        </div>
                                        </fieldset>

                                        <fieldset>
                                        <legend>Education and Experience</legend>
                                        <div class="form-row">
                                            <div>
                                            <label for="education">Highest Level of Education:</label>
                                            <input type="text" id="education" name="education" required>
                                            </div>
                                            <div>
                                            <label for="experience">Years of Relevant Experience:</label>
                                            <input type="number" id="experience" name="experience" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div>
                                            <label for="employers">Previous Employers:</label>
                                            <textarea id="employers" name="employers" rows="4" cols="50"></textarea>
                                            </div>
                                        </div>
                                        </fieldset>

                                        <fieldset>
                                        <legend>Skills and Qualifications</legend>
                                        <div class="form-row">
                                            <div>
                                            <label for="skills">Key Skills:</label>
                                            <input type="text" id="skills" name="skills" required>
                                            </div>
                                            <div>
                                            <label for="certifications">Certifications:</label>
                                            <input type="text" id="certifications" name="certifications">
                                            </div>
                                        </div>
                                        </fieldset>

                                        <fieldset>
                                        <legend>Availability</legend>
                                        <div class="form-row">
                                            <div>
                                            <label for="start_date">Earliest Start Date:</label>
                                            <input type="date" id="start_date" name="start_date" required>
                                            </div>
                                            <div>
                                            <label for="employment_type">Employment Type:</label>
                                            <select id="employment_type" name="employment_type" required>
                                                <option value="full_time">Full-time</option>
                                                <option value="part_time">Part-time</option>
                                                <option value="contract">Contract</option>
                                            </select>
                                            </div>
                                        </div>
                                        </fieldset>

                                        <fieldset>
                                        <legend>Additional Information</legend>
                                        <div class="form-row">
                                            <div>
                                            <label for="referencesname">References:</label>
                                            <textarea id="referencesname" name="referencesname" rows="4" cols="50"></textarea>
                                            </div>
                                            <div>
                                            <label for="portfolio">Portfolio Link:</label>
                                            <input type="url" id="portfolio" name="portfolio">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div>
                                            <label for="referral">How Did You Hear About Us?</label>
                                            <input type="text" id="referral" name="referral">
                                            </div>
                                        </div>
                                        </fieldset>

                                       
                                        <div class="col-lg-12 mt-5 d-flex justify-content-center align-items-center" id="porject_button_div">
                                        <input type="submit" value="Submit Application" class="button">
                                            
                                        </div>
                                    </form>
                                    </div>
                                    </div>

                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </section>
   
                    <footer>
      <div class="content">
        <div class="top">
          <div class="logo-details">
            <span class="logo_name"><img src="images/Brickyard-logo.png" alt="footer-logo" class="img-fluid footer-logo"></span>
          </div>
          <div class="media-icons">
            <a href="https://www.facebook.com/profile.php?id=61562999425109"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.tiktok.com/@brickyardrealestate?is_from_webapp=1&sender_device=pc"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.instagram.com/brickyardrealestatellc/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/brickyard-real-estate-4180b0321/"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="link-boxes">
          <ul class="box">
            <li class="link_name">Our Companies</li>
            <li><a href="https://brickyard.ae/">Brickyard Real Estate LLC.</a></li>
            <li><a href="https://ewansquare.ae/">Ewan Square Technical Services.</a></li>
            <li><a href="https://skybluesdeveloper.ae/">Sky Blues Developer LLC. </a></li>
            <li><a href="https://skycrest.ae/">Sky Crest Building Contracting LLC.</a></li>
            <li><a href="#">Hamarain Real Estate LLC.</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Useful Links</li>
            <li><a href="https://brickyard.ae/">Home</a></li>
            <li><a href="https://brickyard.ae/">About Us</a></li>
            <li><a href="https://brickyard.ae/#Strategies">Projects</a></li>
            <li><a href="https://brickyard.ae/#Services">Services</a></li>
            <li><a href="https://brickyard.ae/#FAQS">FAQ'S</a></li>
            <li><a href="https://brickyard.ae/#contactus">Contact Us</a></li>
            <li><a href="https://brickyard.ae/career.php">Apply Now</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Recent Projects</li>
            <li><a href="#">Reem One</a></li>
            <li><a href="#">Asteco Project - RAK </a></li>
            <li><a href="#">Linden Residences </a></li>
            <li><a href="#">Oaks Deira</a></li>
            <li><a href="#">Jabal Ali Downtown Plot</a></li>
            <li><a href="#">Ras Al Khor - WareHouse</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Our Services</li>
            <li><a href="#">Residential Property Management</a></li>
            <li><a href="#">Commercial Property Management</a></li>
            <li><a href="#">Luxury Property Management</a></li>
            <li><a href="#">Property Investment Consultation</a></li>
            <li><a href="#">Vacation Rental Management</a></li>
            <li><a href="#">Brokrage Services</a></li>
          </ul>
          <ul class="box input-box">
            <li class="link_name">Subscribe</li>
            <form action="subscription.php" method="post" onSubmit="alert('Data Submitted Successfully!');">
            <li><input type="email" id="email" name="email" placeholder="Enter your email..." required ></li>
            <li><input type="submit" value="Subscribe"></li>
            <p id="subscribe-message"></p>
              </form>
          </ul>
        </div>
      </div>
      <div class="bottom-details">
        <div class="bottom_text">
          <center><span class="copyright_text text-white opacity-100">Copyright © 2023 <a href="#"> Brickyard Real Estate LLC.</a> All rights reserved</span></center>
          <span class="policy_terms">
            <a href="#">Privacy policy</a>
            <a href="#" style="margin-left: 10px;">Terms & condition</a>
          </span>
        </div>
      </div>
    </footer>

    <div id="progress">
      <span id="progress-value">&#x1F815;</span>
    </div>
    <!-- Footer Section End -->
     <!-- jquery popup -->
    		
    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Perform AJAX form submission
            var formData = new FormData(this);
            var xhr = new XMLHttpRequest();

            xhr.open("POST", "process_form.php", true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Reset the form after successful submission
                    document.getElementById("contactForm").reset();
                    alert("Thank you for your submission!");
                    
                }
            };

            xhr.send(formData);
        });
    </script>
    
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- javascript link -->
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
      const phoneInputField = document.querySelector("#phone");
       const phoneInput = window.intlTelInput(phoneInputField, {
         utilsScript:
           "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
           initialCountry: 'ae',
           separateDialCode: true,
       });
    </script>
    <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    autoplaySpeed: 800,
    responsiveClass:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:8
        }
    }
  });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            adaptiveHeight: true,
        });

        // Testimonial data
        //var testimonials = [
          //  { name: 'John Doe', text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' },
            //{ name: 'Jane Smith', text: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' },
            // Add more testimonials as needed
        //];

        // Dynamically populate testimonials
        var testimonialSlider = $('.testimonial-slider');
        testimonials.forEach(function(testimonial) {
            var testimonialItem = $('<div class="testimonial-item">');
            testimonialItem.append('<p class="testimonial-text">' + testimonial.text + '</p>');
            testimonialItem.append('<p class="testimonial-author">' + testimonial.name + '</p>');
            testimonialSlider.append(testimonialItem);
        });
    });
</script>

</body>
</html>