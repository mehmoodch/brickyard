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
                <a class="nav-link" href="brickyard.ae/career.php">Apply Now </a>
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
    <section class="hero_section" id="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
             <div class="hero_left_content">
                <h4>Property management that you can trust in UAE. </h4>
                <h2>A Better Way to Manage Property.</h2>
                <ul>
                  <li style="list-style: none;"> <i class="fa-solid fa-paper-plane " style="color: #c94b9c;"></i> Hassle-free property management</li>
                  <li style="list-style: none;"> <i class="fa-solid fa-paper-plane " style="color: #c94b9c;"></i> Turnkey building management</li>
                  <li style="list-style: none;"> <i class="fa-solid fa-paper-plane " style="color: #c94b9c;"></i> Securing a substantial rental revenue</li>
                </ul>
                <p > <u style="text-decoration-color: #c94b9c; text-decoration-thickness: 4px;">Our mission</u>  is to increase the value and reduce the total cost of ownership of luxury homes in UAE.</p>
             </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="hero_right_content">
              <p>Looking for an expert advice for your property! Leave your message here.</p>
             
              <form method="POST" action="process_form.php" class="form" onSubmit="alert('Data Submitted Successfully!');" > 

              <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Full Name" name="name" id="name" required>
                    </div>
                  
                    <div class="col-md-2">
                                <select id="countryCode" name="countryCode" class="form-control w-30" style="width: 80px; padding: 10px 3px 10px 3px;">
                                                        <option value="1">USA +1 </option>
                                                        <option value="44">UK +44 </option>
                                                        <option value="213">Algeria (+213)</option>
                                                        <option value="376">Andorra (+376)</option>
                                                        <option value="244">Angola (+244)</option>
                                                        <option value="1264">Anguilla (+1264)</option>
                                                        <option value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                        <option value="54">Argentina (+54)</option>
                                                        <option value="374">Armenia (+374)</option>
                                                        <option value="297">Aruba (+297)</option>
                                                        <option value="61">Australia (+61)</option>
                                                        <option value="43">Austria (+43)</option>
                                                        <option value="994">Azerbaijan (+994)</option>
                                                        <option value="1242">Bahamas (+1242)</option>
                                                        <option value="973">Bahrain (+973)</option>
                                                        <option value="880">Bangladesh (+880)</option>
                                                        <option value="1246">Barbados (+1246)</option>
                                                        <option value="375">Belarus (+375)</option>
                                                        <option value="32">Belgium (+32)</option>
                                                        <option value="501">Belize (+501)</option>
                                                        <option value="229">Benin (+229)</option>
                                                        <option value="1441">Bermuda (+1441)</option>
                                                        <option value="975">Bhutan (+975)</option>
                                                        <option value="591">Bolivia (+591)</option>
                                                        <option value="387">Bosnia Herzegovina (+387)</option>
                                                        <option value="267">Botswana (+267)</option>
                                                        <option value="55">Brazil (+55)</option>
                                                        <option value="673">Brunei (+673)</option>
                                                        <option value="359">Bulgaria (+359)</option>
                                                        <option value="226">Burkina Faso (+226)</option>
                                                        <option value="257">Burundi (+257)</option>
                                                        <option value="855">Cambodia (+855)</option>
                                                        <option value="237">Cameroon (+237)</option>
                                                        <option value="1">Canada (+1)</option>
                                                        <option value="238">Cape Verde Islands (+238)</option>
                                                        <option value="1345">Cayman Islands (+1345)</option>
                                                        <option value="236">Central African Republic (+236)</option>
                                                        <option value="56">Chile (+56)</option>
                                                        <option value="86">China (+86)</option>
                                                        <option value="57">Colombia (+57)</option>
                                                        <option value="269">Comoros (+269)</option>
                                                        <option value="242">Congo (+242)</option>
                                                        <option value="682">Cook Islands (+682)</option>
                                                        <option value="506">Costa Rica (+506)</option>
                                                        <option value="385">Croatia (+385)</option>
                                                        <option value="53">Cuba (+53)</option>
                                                        <option value="90392">Cyprus North (+90392)</option>
                                                        <option value="357">Cyprus South (+357)</option>
                                                        <option value="42">Czech Republic (+42)</option>
                                                        <option value="45">Denmark (+45)</option>
                                                        <option value="253">Djibouti (+253)</option>
                                                        <option value="1809">Dominica (+1809)</option>
                                                        <option value="1809">Dominican Republic (+1809)</option>
                                                        <option value="593">Ecuador (+593)</option>
                                                        <option value="20">Egypt (+20)</option>
                                                        <option value="503">El Salvador (+503)</option>
                                                        <option value="240">Equatorial Guinea (+240)</option>
                                                        <option value="291">Eritrea (+291)</option>
                                                        <option value="372">Estonia (+372)</option>
                                                        <option value="251">Ethiopia (+251)</option>
                                                        <option value="500">Falkland Islands (+500)</option>
                                                        <option value="298">Faroe Islands (+298)</option>
                                                        <option value="679">Fiji (+679)</option>
                                                        <option value="358">Finland (+358)</option>
                                                        <option value="33">France (+33)</option>
                                                        <option value="594">French Guiana (+594)</option>
                                                        <option value="689">French Polynesia (+689)</option>
                                                        <option value="241">Gabon (+241)</option>
                                                        <option value="220">Gambia (+220)</option>
                                                        <option value="7880">Georgia (+7880)</option>
                                                        <option value="49">Germany (+49)</option>
                                                        <option value="233">Ghana (+233)</option>
                                                        <option value="350">Gibraltar (+350)</option>
                                                        <option value="30">Greece (+30)</option>
                                                        <option value="299">Greenland (+299)</option>
                                                        <option value="1473">Grenada (+1473)</option>
                                                        <option value="590">Guadeloupe (+590)</option>
                                                        <option value="671">Guam (+671)</option>
                                                        <option value="502">Guatemala (+502)</option>
                                                        <option value="224">Guinea (+224)</option>
                                                        <option value="245">Guinea - Bissau (+245)</option>
                                                        <option value="592">Guyana (+592)</option>
                                                        <option value="509">Haiti (+509)</option>
                                                        <option value="504">Honduras (+504)</option>
                                                        <option value="852">Hong Kong (+852)</option>
                                                        <option value="36">Hungary (+36)</option>
                                                        <option value="354">Iceland (+354)</option>
                                                        <option value="91">India (+91)</option>
                                                        <option value="62">Indonesia (+62)</option>
                                                        <option value="98">Iran (+98)</option>
                                                        <option value="964">Iraq (+964)</option>
                                                        <option value="353">Ireland (+353)</option>
                                                        <option value="972">Israel (+972)</option>
                                                        <option value="39">Italy (+39)</option>
                                                        <option value="1876">Jamaica (+1876)</option>
                                                        <option value="81">Japan (+81)</option>
                                                        <option value="962">Jordan (+962)</option>
                                                        <option value="7">Kazakhstan (+7)</option>
                                                        <option value="254">Kenya (+254)</option>
                                                        <option value="686">Kiribati (+686)</option>
                                                        <option value="850">Korea North (+850)</option>
                                                        <option value="82">Korea South (+82)</option>
                                                        <option value="965">Kuwait (+965)</option>
                                                        <option value="996">Kyrgyzstan (+996)</option>
                                                        <option value="856">Laos (+856)</option>
                                                        <option value="371">Latvia (+371)</option>
                                                        <option value="961">Lebanon (+961)</option>
                                                        <option value="266">Lesotho (+266)</option>
                                                        <option value="231">Liberia (+231)</option>
                                                        <option value="218">Libya (+218)</option>
                                                        <option value="417">Liechtenstein (+417)</option>
                                                        <option value="370">Lithuania (+370)</option>
                                                        <option value="352">Luxembourg (+352)</option>
                                                        <option value="853">Macao (+853)</option>
                                                        <option value="389">Macedonia (+389)</option>
                                                        <option value="261">Madagascar (+261)</option>
                                                        <option value="265">Malawi (+265)</option>
                                                        <option value="60">Malaysia (+60)</option>
                                                        <option value="960">Maldives (+960)</option>
                                                        <option value="223">Mali (+223)</option>
                                                        <option value="356">Malta (+356)</option>
                                                        <option value="692">Marshall Islands (+692)</option>
                                                        <option value="596">Martinique (+596)</option>
                                                        <option value="222">Mauritania (+222)</option>
                                                        <option value="269">Mayotte (+269)</option>
                                                        <option value="52">Mexico (+52)</option>
                                                        <option value="691">Micronesia (+691)</option>
                                                        <option value="373">Moldova (+373)</option>
                                                        <option value="377">Monaco (+377)</option>
                                                        <option value="976">Mongolia (+976)</option>
                                                        <option value="1664">Montserrat (+1664)</option>
                                                        <option value="212">Morocco (+212)</option>
                                                        <option value="258">Mozambique (+258)</option>
                                                        <option value="95">Myanmar (+95)</option>
                                                        <option value="264">Namibia (+264)</option>
                                                        <option value="674">Nauru (+674)</option>
                                                        <option value="977">Nepal (+977)</option>
                                                        <option value="31">Netherlands (+31)</option>
                                                        <option value="687">New Caledonia (+687)</option>
                                                        <option value="64">New Zealand (+64)</option>
                                                        <option value="505">Nicaragua (+505)</option>
                                                        <option value="227">Niger (+227)</option>
                                                        <option value="234">Nigeria (+234)</option>
                                                        <option value="683">Niue (+683)</option>
                                                        <option value="672">Norfolk Islands (+672)</option>
                                                        <option value="670">Northern Marianas (+670)</option>
                                                        <option value="47">Norway (+47)</option>
                                                        <option value="968">Oman (+968)</option>
                                                        <option value="680">Palau (+680)</option>
                                                        <option value="92">Pakistan (+92)</option>
                                                        <option value="507">Panama (+507)</option>
                                                        <option value="675">Papua New Guinea (+675)</option>
                                                        <option value="595">Paraguay (+595)</option>
                                                        <option value="51">Peru (+51)</option>
                                                        <option value="63">Philippines (+63)</option>
                                                        <option value="48">Poland (+48)</option>
                                                        <option value="351">Portugal (+351)</option>
                                                        <option value="1787">Puerto Rico (+1787)</option>
                                                        <option value="974">Qatar (+974)</option>
                                                        <option value="262">Reunion (+262)</option>
                                                        <option value="40">Romania (+40)</option>
                                                        <option value="7">Russia (+7)</option>
                                                        <option value="250">Rwanda (+250)</option>
                                                        <option value="378">San Marino (+378)</option>
                                                        <option value="239">Sao Tome &amp; Principe (+239)</option>
                                                        <option value="966">Saudi Arabia (+966)</option>
                                                        <option value="221">Senegal (+221)</option>
                                                        <option value="381">Serbia (+381)</option>
                                                        <option value="248">Seychelles (+248)</option>
                                                        <option value="232">Sierra Leone (+232)</option>
                                                        <option value="65">Singapore (+65)</option>
                                                        <option value="421">Slovak Republic (+421)</option>
                                                        <option value="386">Slovenia (+386)</option>
                                                        <option value="677">Solomon Islands (+677)</option>
                                                        <option value="252">Somalia (+252)</option>
                                                        <option value="27">South Africa (+27)</option>
                                                        <option value="34">Spain (+34)</option>
                                                        <option value="94">Sri Lanka (+94)</option>
                                                        <option value="290">St. Helena (+290)</option>
                                                        <option value="1869">St. Kitts (+1869)</option>
                                                        <option value="1758">St. Lucia (+1758)</option>
                                                        <option value="249">Sudan (+249)</option>
                                                        <option value="597">Suriname (+597)</option>
                                                        <option value="268">Swaziland (+268)</option>
                                                        <option value="46">Sweden (+46)</option>
                                                        <option value="41">Switzerland (+41)</option>
                                                        <option value="963">Syria (+963)</option>
                                                        <option value="886">Taiwan (+886)</option>
                                                        <option value="7">Tajikstan (+7)</option>
                                                        <option value="66">Thailand (+66)</option>
                                                        <option value="228">Togo (+228)</option>
                                                        <option value="676">Tonga (+676)</option>
                                                        <option value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                        <option value="216">Tunisia (+216)</option>
                                                        <option value="90">Turkey (+90)</option>
                                                        <option value="7">Turkmenistan (+7)</option>
                                                        <option value="993">Turkmenistan (+993)</option>
                                                        <option value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                        <option value="688">Tuvalu (+688)</option>
                                                        <option value="256">Uganda (+256)</option>
                                                        <option value="380">Ukraine (+380)</option>
                                                        <option value="971">United Arab Emirates (+971)</option>
                                                        <option value="598">Uruguay (+598)</option>
                                                        <option value="7">Uzbekistan (+7)</option>
                                                        <option value="678">Vanuatu (+678)</option>
                                                        <option value="379">Vatican City (+379)</option>
                                                        <option value="58">Venezuela (+58)</option>
                                                        <option value="84">Vietnam (+84)</option>
                                                        <option value="84">Virgin Islands - British (+1284)</option>
                                                        <option value="84">Virgin Islands - US (+1340)</option>
                                                        <option value="681">Wallis &amp; Futuna (+681)</option>
                                                        <option value="969">Yemen (North)(+969)</option>
                                                        <option value="967">Yemen (South)(+967)</option>
                                                        <option value="260">Zambia (+260)</option>
                                                        <option value="263">Zimbabwe (+263)</option>
                                            </select>
                    </div> 
                    <div class="col-md-4"><input  type="tel" class="form-control w-70" name="phone" placeholder="56 458 5648" id=""  required>
                    </div>
                    <div class="col-md-12">
                      <textarea id="fmessage" name="fmessage" rows="5" cols="50" placeholder="Enter your message here..." class="form-control mt-3" required></textarea>
                    </div>
                    <div class="col-md-12">
                      <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" value="Yes" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault" id="form-check-label">
                          I consent to the processing of personal data in accordance with the privacy Policy.
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-lg rounded-0 text-white mt-3 w-100" style="background-color: #c94b9c;"  id="contactForm" name="submit">Submit</button>
                    </div>
                  </div>
                </div>
             
              </form>
              
            </div>
          </div>
        </div>
      </div>
      <div class="scroll-indicator" onclick="scrollToContent()">&#8595;</div>
      
      <!-- <div class="overlay"></div> -->
    </section>
    <!-- Hero Section End -->
    <div class="button_click"></div>
    <!-- ======================================== 
          Our work counter Section Start  
    ========================================  -->

    
 <!-- ======================================== 
          Our work counter Section Start  
    ========================================  -->
    <!-- Our Services Section Start -->
    <section class="about section-padding" id="Services" style="margin-top: 0px; padding-top:40px; background-color: #f7f7f7;">
      <div class="text-center">
        <h1 class="heading">
        <i class="fa-solid fa-house"></i><strong><h2 class="text-dark">Welcome to Brickyard Property Management</h2></strong><i class="fa-solid fa-city"></i>
      </h1>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-lg-6 mb-3 mt-3 text-center d-flex justify-content-center">
          <h6 class="lh-lg" style="color: #000;" id="lpl">At Brickyard Property Management, we take pride in providing comprehensive and professional property management services that exceed expectations.
           Whether you're a property owner looking for reliable management solutions or a tenant seeking a comfortable living experience, we have you covered.</h6>
          </div>
      </div>
      <div class="text-center">
        <h1 class="heading">
          <strong><h2 class="text-dark"><u>Our Valuable Services</u></h2></strong>
      </h1>
      </div>
      <div class="container main-cantainer">
        <div class="row inner-cantainer">
          <div class="column">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fas fa-hammer"></i>
              </div>
              <h3>Residential Property Management</h3>
              <p>Brickyard Property Management specializes in the seamless management of residential properties. 
                From tenant acquisition and lease management to property maintenance and financial reporting, our dedicated team ensures your investment is in expert hands.</p>
            </div>
          </div>
          <div class="column">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fas fa-brush"></i>
              </div>
              <h3>Commercial Property Management</h3>
              <p>Elevate the performance of your commercial properties with Brickyard's strategic management services. Our team handles lease negotiations, facility maintenance,
                 and strategic planning to optimize the value of your commercial real estate.</p>
            </div>
          </div>
          <div class="column">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fas fa-wrench"></i>
              </div>
              <h3> Luxury Property Management</h3>
              <p>For owners of luxury properties, our bespoke property management services provide an unparalleled level of attention and care. 
                From high-end tenant selection to exquisite property maintenance, we understand the unique needs of luxury real estate.</p>
            </div>
          </div>
          <div class="column">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fas fa-truck-pickup"></i>
              </div>
              <h3>Property Investment Consultation</h3>
              <p>Thinking about expanding your real estate portfolio? Our property investment consultation service provides expert advice on identifying lucrative investment opportunities,
                 analyzing market trends, and making informed decisions to maximize your returns.</p>
            </div>
          </div>
          <div class="column">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fas fa-broom"></i>
              </div>
              <h3>Vacation Rental Management</h3>
              <p>Brickyard Property Management offers specialized services for vacation rental properties. 
                From marketing and guest screening to property maintenance and cleaning services, we ensure a seamless and 
                profitable experience for property owners in the booming vacation rental market.</p>
            </div>
          </div>
          <div class="column">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fas fa-plug"></i>
              </div>
              <h3>Brokrage Services</h3>
              <p>Our Brokerage services involve the facilitation of transactions between buyers and sellers in real estate industry.
                 We ensure the transactions are conducted smoothly and efficiently according to local laws. We assist clients with secure financing.</p>
            </div>
          </div>
          <div class="col-lg-12 mt-5 d-flex justify-content-center align-items-center" id="porject_button_div">
            <a class="button" href="#contactus" id="">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Contact Now &rarr;
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Services Section End -->
    <!-- How it works section start -->
    <section class="howitworks_section">
      <div class="text-center d-flex justify-content-center">
        <h1 class="heading">
        <i class="fa-solid fa-house"></i><strong><h2 class="text-white">How It Works</h2></strong><i class="fa-solid fa-city"></i>
        </h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="first">
              <p class="number">1</p>
              <p class="message-text">Initial Consultation</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="first">
              <p class="number">2</p>
              <p class="message-text">Property Evaluation</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="first">
              <p class="number">3</p>
              <p class="message-text">Tailored Management & Marketing Plan</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="first">
              <!-- <i class="fa-regular fa-crown" style="color: #ffdd00;"></i> -->
              <p class="number">4</p>
              <p class="message-text"> Tenant Acquisition and you will start getting maximum income from your property. </p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- How it works section end -->
            <!-- Our Projects Section Start -->
            <section class="container" style="margin-top: 50px;" id="Strategies">
              <div class="d-flex justify-content-center">
                <h1 class="heading">
                <i class="fa-solid fa-house"></i><strong><h2 class="text-dark">Rental Strategies</h2></strong><i class="fa-solid fa-city"></i>
                </h1>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-lg-8 mb-3 mt-3 text-center d-flex justify-content-center">
                  <h6 class="lh-lg" style="color: #000;" id="lpl">Maximizing the ROI (return on your investment) property requires strategic planning, market knowledge, and a commitment to excellence. 
                  At Brickyard Property Management, we specialize in implementing rental strategies that ensure your property is not only occupied but thriving in the competitive real estate market.</h6>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1"></div>
                  <div class="col-md-5">
                      <div class="card border-0 rounded-0" id="card-style">
                          <img src="images/villa1.webp" class="card-img-top rounded-1 " alt="image1">
                          <div class="card-body projects_card">
                              <h5>Long-Term Rental Plan:</h5>
                              <p class="card-text text-muted">
                                <ul>
                                  <li>Typically 12 Months agreement</li>
                                  <li>Stable Tenancy</li>
                                  <li>Consistent Income</li>
                                  <li>Reduced Turnover Costs</li>
                                </ul>
                              </p>
                              <div class="center">
                                <button class="btn btn-lg rounded-0 px-4 text-white" style="background-color: #c94b9c;">Book Now</button>
                                <div class="side">
                                  <p>Your Net rental revenue <br> <span>98,000 AED</span></p>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-5">
                    <div class="card border-0 rounded-0" id="card-style">
                      <img src="images/villa5.webp" class="card-img-top rounded-1 " alt="image1">
                      <div class="card-body projects_card">
                          <h5>Short-Term Rental Plan:</h5>
                          <p class="card-text text-muted">
                            <ul>
                              <li> Some Weeks or few Months</li>
                              <li>Travelers or Business Professionals Tenents</li>
                              <li>Higher Rental Rates maximize your income</li>
                              <li>High Seasonal Demand</li>
                            </ul>
                          </p>
                          <div class="center">
                            <button class="btn btn-lg rounded-0 px-4 text-white" style="background-color: #c94b9c;">Book Now</button>
                            <div class="side">
                              <p>Your Net rental revenue <br> <span>130,000 AED</span></p>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
          </section>
          <!-- Our Projects Section End -->
                <!-- Dark Background And Logo Qoutes Section Start -->
    <section class="weworkwith_section">
      <div class="text-center d-flex justify-content-center">
        <h1 class="heading">
        <i class="fa-solid fa-house"></i><strong><h2 class="text-white">We Work With</h2></strong><i class="fa-solid fa-city"></i>
        </h1>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-lg-6 mb-3 mt-3 text-center d-flex justify-content-center">
          <h6 class="lh-lg" style="color: #fff;" id="lpl">At Brickyard Real Estate LLC, we take pride in cultivating strong and lasting partnerships. We work collaboratively with.</h6>
        </div>
      </div>
      <div class="owl-carousel owl-theme">
        <div class="item"><img src="./images/brandlogos/logo1.webp" alt="logo1" class="img-fluid"></div>
        <div class="item"><img src="./images/brandlogos/logo2.webp" alt="logo2" class="img-fluid"></div>
        <div class="item"><img src="./images/brandlogos/logo3.webp" alt="logo3" class="img-fluid"></div>
        <div class="item"><img src="./images/brandlogos/logo4.webp" alt="logo4" class="img-fluid"></div>
        <div class="item"><img src="./images/brandlogos/logo5.webp" alt="logo5" class="img-fluid"></div>
        <div class="item"><img src="./images/brandlogos/logo6.webp" alt="logo6" class="img-fluid"></div>
        <div class="item"><img src="./images/brandlogos/logo7.webp" alt="logo7" class="img-fluid"></div>
        <div class="item"><img src="./images/brandlogos/logo8.webp" alt="logo8" class="img-fluid"></div>
        <div class="item"><img src="./images/brandlogos/logo9.webp" alt="logo9" class="img-fluid"></div>
        <div class="item"><img src="./images/brandlogos/logo10.webp" alt="logo10" class="img-fluid"></div>
    </div>
    </section>
    <!-- Dark Background And Logo Qoutes Section End -->
                    <!-- Process section -->
                    <section class="process_section" id="Process">
                      <div class="text-center d-flex justify-content-center">
                        <h1 class="heading">
                        <i class="fa-solid fa-house"></i><strong><h2 class="text-dark">Compare the process</h2></strong><i class="fa-solid fa-city"></i>
                        </h1>
                      </div>
                      <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-lg-6 mb-3 mt-3 text-center d-flex justify-content-center">
                          <h6 class="lh-lg" style="color: #000;" id="lpl">Discover the distinctive advantages of choosing Brickyard Property Management for your real estate investment. Our transparent and streamlined processes set us apart, ensuring a hassle-free experience for property owners and tenants alike.</h6>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="innertable">
                              <div class="table-responsive">
                                <table class="table table-hover ">
                                  <thead>
                                    <tr>
                                      
                                      <th></th>
                                      <th>Traditional Property Management</th>
                                      <th style="font-size: 22px;">Brickyard Property Management Services</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr style="border-bottom: 10px solid transparent;">
                                      
                                      <td>Onboarding Process</td>
                                      <td><i class="fa-solid fa-ban" style="color: red;"></i> Traditional property managers may delay getting your property on the market due to lengthy onboarding processes. </td>
                                      <td style="background-color: #f8f8f8;"> <i class="fa-solid fa-circle-check" style="color: green; height:26px; width: 26px;"></i> Our efficient onboarding swiftly incorporates your property into our management portfolio. </td>
                                    </tr>
                                    <tr>
                                      
                                      <td>Communication</td>
                                      <td><i class="fa-solid fa-ban" style="color: red;"></i> Restricted communication channels may cause delays and lack real-time updates on your property's performance. </td>
                                      <td style="background-color: #f8f8f8;"><i class="fa-solid fa-circle-check" style="color: green;"></i> We prioritize real-time communication, offering responsive support to property owners and tenants. </td>
                                    </tr>
                                    <tr>
                                      
                                      <td>Paperwork</td>
                                      <td><i class="fa-solid fa-ban" style="color: red;"></i> Manual processes and paperwork are time-consuming for property owners and tenants alike. </td>
                                      <td style="background-color: #f8f8f8;"><i class="fa-solid fa-circle-check" style="color: green;"></i> Experience hassle-free, eco-friendly leasing with our paperless transactions. </td>
                                    </tr>
                                    <tr>
                                      
                                      <td>Household issues</td>
                                      <td><i class="fa-solid fa-ban" style="color: red;"></i> Immediate replacement is always required with your personal involvement when something breaks. </td>
                                      <td style="background-color: #f8f8f8;"><i class="fa-solid fa-circle-check" style="color: green;"></i> Our maintenance team ensures swift repairs for seamless rental service. </td>
                                    </tr>
                                    <tr>
                                      
                                      <td>Financial Reporting</td>
                                      <td><i class="fa-solid fa-ban" style="color: red;"></i> Opaque financial reporting may leave property owners uninformed about their investment's performance. </td>
                                      <td style="background-color: #f8f8f8;" ><i class="fa-solid fa-circle-check" style="color: green;"></i> Our secure online portal provides transparent financial reporting, keeping property owners informed. </td>
                                    </tr>
                                    <tr>
                                      
                                      <td>Solutions</td>
                                      <td><i class="fa-solid fa-ban" style="color: red;"></i> Generic solutions may miss your property's unique needs, limiting optimization opportunities. </td>
                                      <td style="background-color: #f8f8f8;"><i class="fa-solid fa-circle-check" style="color: green;"></i> We acknowledge each property's uniqueness, tailoring solutions for optimal performance. </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12 mt-5 d-flex justify-content-center align-items-center" id="porject_button_div">
                            <a class="button" href="#contactus" id="">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                              Contact Now &rarr;
                            </a>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- Dark Background And Logo Qoutes Section End -->

      <section class="section section-work-data" style="margin-top: 20px;">
      <div class="container counter_section">
        <div>
          <h2 class="counter-numbers" data-number="7">0+</h2>
          <p>Years Of Experience In UAE Market</p>
        </div>
        <div>
          <h2 class="counter-numbers" data-number="350">0+</h2>
          <p>Properties Under Our Management</p>
        </div>
        <div>
          <h2 class="counter-numbers" data-number="250">0+</h2>
          <p>Investors In Our Pool</p>
        </div>
        <div>
          <h2 class="counter-numbers" data-number="250">0+</h2>
          <p>Million Dirhams Pool Worth</p>
        </div>
        <div>
          <h2 class="counter-numbers" data-number="230">0+</h2>
          <p>Employees In The Company</p>
        </div>
      </div>
      </section>
          <!-- testimonials section -->
          <div class="section__container" id="Reviews">
            <div class="headerss">
              <!--<p>TESTIMONIALS</p>-->
              <h1>What our clients say about us.</h1>
            </div>
            <div class="testimonials__grid testimonial-slider">
              <div class="carda">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                  I've been working with these guys for a long time and I can say that
                  my house is in the perfect hands.
                </p>
                <hr />
                <img src="./images/pic-1.webp" alt="user" />
                <p class="name">Allan Collins</p>
              </div>
              <div class="carda">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                  Working with <b>Brickyard</b> is just great, every problem in my house is
                  solved in a matter of days.
                </p>
                <hr />
                <img src="./images/pic-2.webp" alt="user" />
                <p class="name">Clay Washington</p>
              </div>
              <div class="carda">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                  Once a pipe burst in my kitchen and an hour later it was already
                  repaired, thanks to Sentry Oak.
                </p>
                <hr />
                <img src="./images/pic-3.webp" alt="user" />
                <p class="name">Tanya Grant</p>
              </div>
              <div class="carda">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                I've been working with <b>Brickyard</b> for several years, and they just maximize the value of my real estate investments.
                
                </p>
                <hr />
                <img src="./images/pic-4.webp" alt="user" />
                <p class="name">John S.</p>
              </div>
              <div class="carda">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                 As a property owner choosing <b>Brickyard</b> for property management was my best decision. 
                I love their professional and proactive approach. 

                </p>
                <hr />
                <img src="./images/pic-5.webp" alt="user" />
                <p class="name">Sarah Mayer</p>
              </div>
              <div class="carda">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                I've experienced exceptional service from <b>Brickyard</b> as a tenant. 
                They are prompt in addressing property maintenance. 
                
                </p>
                <hr />
                <img src="./images/pic-6.webp" alt="user" />
                <p class="name">Anil G.</p>
              </div>
            </div>
            <div class="footerss">
             <!-- <h4>No two homes are alike!</h4>
              <p>
                Our Elite network, combined with your personal needs, allows us to
                create a home plan specifically tailored to you.
              </p>-->
              <a class="button" href="#contactus" id="">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Get A Quote &rarr;
              </a>
            </div>
          </div>
          <!-- testimonials section -->
          <!-- contact us section -->
          <div class="containerss" id="contactus">
            <div class="rowss">
              
              <!--  *******   Left Section (Column) Starts   *******  -->
        
              <section class="col left">
                
                <!--  *******   Title Starts   *******  -->
        
                <div class="contactTitle">
                  <h2>Get In Touch</h2>
                  <p>Reach out for inquiries or collaboration—we're ready to connect and help you achieve your goals.</p>
                </div>
        
                <!--  *******   Title Ends   *******  -->
        
                <!--  *******   Contact Info Starts   *******  -->
        
                <div class="contactInfo">
                  
                  <div class="iconGroup">
                    <div class="icon">
                      <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="details">
                      <span>Phone</span>
                      <span>(+971) 043373565</span>
                    </div>
                  </div>
        
                  <div class="iconGroup">
                    <div class="icon">
                      <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="details">
                      <span>Email</span>
                      <span>info@brickyard.ae</span>
                    </div>
                  </div>
        
                  <div class="iconGroup">
                    <div class="icon">
                      <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="details">
                      <span>Address</span>
                      <span> PO Box: 232972, The Village Community,<br> Dubai Investment Park, Phase 1, Dubai, United Arab Emirates</span>
                    </div>
                  </div>
        
                </div>
        
                <!--  *******   Contact Info Ends   *******  -->
        
                <!--  *******   Social Media Starts   *******  -->
        
                <div class="socialMedia">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
        
                <!--  *******   Social Media Ends   *******  -->
        
              </section>
        
              <!--  *******   Left Section (Column) Ends   *******  -->
        
              <!--  *******   Right Section (Column) Starts   *******  -->
        
              <section class="col right">
                
                <!--  *******   Form Starts   *******  -->
        
                <form action="contact_form.php" method="post" class="messageForm" onSubmit="alert('Data Submitted Successfully!');">
                  
                  <div class="inputGroup halfWidth">
                    <input type="text" name="cname" id="cname" required="required">
                    <label>Your Name</label>
                  </div>
        
                  <div class="inputGroup halfWidth">
                    <input type="email" name="cemail" id="cemail" required="required">
                    <label>Email</label>
                  </div>
        
                  <div class="inputGroup fullWidth">
                    <input type="text" name="csubject" id="csubject" required="required">
                    <label>Subject</label>
                  </div>
        
                  <div class="inputGroup fullWidth">
                    <textarea name="cmessage" id="cmessage" required="required"></textarea>
                    <label>Say Something</label>
                  </div>
        
                  <div class="inputGroup fullWidth">
                    <button input type="submit" id="contactForm" name="submit">Send Message</button>
                  </div>
        
                </form>
        
                <!--  *******   Form Ends   *******  -->
              </section>
        
              <!--  *******   Right Section (Column) Ends   *******  -->
        
            </div>
          </div>
          <!-- contact us section -->
    <!-- FAQ'S Section Start -->
    <section class="faq_section" id="FAQS">
      <div class="container">
        <div class="row">
          <div class="text-center d-flex justify-content-center">
            <h1 class="heading">
            <i class="fa-solid fa-house"></i><strong><h2 class="text-dark">Frequently Asked Questions</h2></strong><i class="fa-solid fa-city"></i>
            </h1>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  What does a property management company do?
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"> Property management companies oversee the day-to-day operations of rental properties on behalf of property owners.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  How can a property owner benefit from hiring a property management company?
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"> Property owners benefit from professional management by saving time, ensuring consistent rental income, minimizing vacancies, and having experts handle property maintenance and tenant relations.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  How are tenant issues and requests handled?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Tenant issues and requests are addressed promptly through our dedicated customer service. We have an online portal for tenants to submit requests, and our team ensures a timely and efficient resolution.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                  How are tenants screened during the leasing process?
                  </button>
                </h2>
                <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">We conduct thorough tenant screening, including credit checks, rental history verification, and employment checks, to ensure that tenants are reliable and meet our leasing criteria.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                  How is rent collection managed?
                  </button>
                </h2>
                <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Rent collection is streamlined through various payment methods, including online portals. We enforce lease agreements to ensure timely payments, and we handle any necessary follow-ups.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                  How are property-related expenses handled?
                  </button>
                </h2>
                <div id="flush-collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Property-related expenses are managed transparently. Property owners receive detailed financial reports, and we handle the payment of property-related bills, such as maintenance and repairs, on their behalf.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                  How is property maintenance handled?
                  </button>
                </h2>
                <div id="flush-collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">We conduct regular property inspections, addressing maintenance needs promptly. Emergency repairs are handled urgently, and routine maintenance is scheduled to ensure the property's optimal condition.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                  How are property improvements and upgrades managed?
                  </button>
                </h2>
                <div id="flush-collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">We consult with property owners on potential improvements and upgrades, ensuring that any enhancements align with their goals and budget. We coordinate and oversee improvement projects from start to finish.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                  What is the duration of the property management agreement?
                  </button>
                </h2>
                <div id="flush-collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">The duration of the property management agreement is typically outlined in the contract. It can vary, but common terms range from one to three years, with options for renewal.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                  Can I terminate the property management agreement early?
                  </button>
                </h2>
                <div id="flush-collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">The terms for early termination are specified in the agreement. Typically, there are provisions for termination with notice, and any associated fees or penalties are outlined in the contract.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ'S Section End -->
    <!-- Footer Section Start -->
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
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">FAQ'S</a></li>
            <li><a href="#">Contact Us</a></li>
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