<!DOCTYPE html>
<html lang="en" class="header">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEYA Consulting LLP</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #acaaaa;
           
        }
.header{
overflow-x:hidden;
}
        .navbar {
               background-color: #fff;
    display: flex;
    justify-content: center;
   
        }

       
.navbar-dark .navbar-toggler-icon {
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e);
    background-color: #ed6d00;
}
        .navbar-brand img {
                max-height: 80px;
    width: auto;
        }

        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-nav .nav-link {
                 padding-right: 2rem;
    padding-left: 2rem;
    color: #6b6b6b;
            }
             .laptop-img {
    width: 100%;
    /* height: auto; */
    /* margin-left: 234px; */
    /* margin-right: 0px; */
    margin-top: -64px;
    border-bottom-left-radius: 343px;
    overflow: hidden;
}

            .navbar-expand-lg .navbar-nav .nav-link:hover {
                  color: #212529;
            }
        }

        .navbar-nav .nav-link,
        .navbar-nav .btn {
            color: #07216e;
        }
.navbar-dark .navbar-nav .nav-link{
        color: #000;
}
.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover{
     color: #000;
}
        .navbar-nav .nav-link:hover,
        .navbar-nav .btn:hover {
             color: #fff;
    background-color: rgba(0,0,0,.125);
    border-color: #245891;
    border-radius: 10px;
        }

        .navbar-nav .btn {
         
    color: #fff;
    background-color: #245891;
    border-color: #245891;
    border-radius: 10px;
        }

        .navbar-nav .btn:hover {
            color: #fff;
    background-color: #245891;
    border-color: #245891;
    border-radius: 10px;
        }

        .hero-content {
            text-align: left;
            max-width: 800px;
            margin: auto;
        }

        .hero img {
            width: 100px;
            margin-left: 20px;
        }

        .align1 {
            max-width: 100%;
            display: block;
            margin-left: 30px;
            margin-right: auto;
            border-bottom-left-radius: 50%;
            overflow: hidden;
        }

        .contact-card {
            background-color: #003976;
            color: #f0f0f0;
            margin-bottom: 10%;
            margin-top: 93px;
          
            padding: 10%;
           
    border-radius: 3%;
        }

        .contact-card form {
            display: flex;
            flex-direction: column;
        }

        .contact-card label {
            margin-bottom: 10px;
        }
.mx-auto {
    
    margin: 0px !important;
}
        .contact-card input[type="text"],
        .contact-card input[type="email"],
        .contact-card input[type="tel"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }

        .btn-orange {
            background-color: orange;
            border-radius: 10px;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
        }

        .logopic {
            overflow: hidden;
            border-radius: 30px;
        }

        .logopic img {
            margin-top: 30px;
            width: 50%;
            height: 50%;
        }

        footer {
            margin-top: 30px;
            width: auto;
        }

        .footer-links {
            margin-top: 30px;
        }

        .footer-links ul {
            list-style-type: none;
            padding-left: 0;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .contact-info {
            margin-top: 30px;
        }

        .contact-info p {
            margin-bottom: 5px;
        }

        .hero-text h1,
        .hero-text p {
            color: #333;
            line-height: 1.5;
        }

        .words {
            margin-top: 10px;
        }

        main {
            padding: -12rem;
            display: flex;
            justify-content: flex-end;
            flex-direction: column;
        }

        .about-section {
               display: flex;
    align-items: center;
    padding-bottom: 5%;
   
        }
.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
    background-color: #f6f6f6;
}
        .about-section h2 {
            color: #007bff;
            margin-bottom: 1rem;
        }

        .about-section img {
            width: 45%;
            margin-right: 2rem;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 232px;
            overflow: hidden;
        }

        .about-text {
            flex: 1;
        }

        .services-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 2rem;
        }

        .services-title {
            flex: 1;
            margin-right: 2rem;
        }

        .services-content {
            flex: 1.13;
        }

        .consultative_container {
               width: 100%;
    position: relative;
    z-index: 1;
    padding: 10px;
    background-color: #faf8f8;
    border: 1px solid #f0f0f0;
    margin-bottom: 20px;
    border-radius: 10px;
    text-align: center;
    height: 300px;
        }

        .consultative_logo {
            width:50px;
           
        }

        .additional-image {
            width: 63%;
            margin-top: 1rem;
            border-top-right-radius: 369px;
            border-bottom-right-radius: 369px;
            overflow: hidden;
            margin-left: -204px;
        }

        /*.img-fluid {*/
        /*    max-width: 216%;*/
        /*    margin-top: 1rem;*/
        /*    border-top-left-radius: 235px;*/
        /*    border-bottom-left-radius: 0px;*/
        /*    overflow: hidden;*/
        /*}*/

        img {
            max-width: 100%;
            height: auto;
        }

        /* Adjustments for different screen sizes */
        .laptop-img {
            width: 78%;
            height: auto;
            margin-left: 234px;
            margin-right: 0px;
            margin-top: -64px;
            border-bottom-left-radius: 343px;
            overflow: hidden;
        }

        @media (max-width: 768px) {
            .contact-card {
                margin-left: auto;
                margin-right: auto;
            }
             .laptop-img {
    width: 100%;
     height: auto; 
     margin-left: 0%!important; 
     margin-right: 0px!important; 
    margin-top: -64px;
    border-bottom-left-radius: 343px;
    overflow: hidden;
}
.form-field{
    margin:0px!important;
}
.about-section{
         display: inline-block; 
    align-items: center;
    padding-bottom: 5%;
}
.about-section h2 {
    color: #007bff;
    margin-bottom: 1rem;
    margin-top: 5%;
}
.service {
    margin: 150px auto!important;
}
.about-section img{
    width:100%!important;
}
.img-fluid {
    
    height: auto;
    width: 150px!important;
    padding-bottom: 5%!important;
}
.navbar-dark .navbar-nav .nav-link {
    color: rgb(0 0 0 / 55%);
    font-size: 16px;
    padding-top: 2%;
    padding-bottom: 5%;
}
.navbar-brand img {
    max-height: 100px;
    width: auto;
}
.hero-text p {
    color: #333;
    line-height: 1.5;
    padding-bottom: 5%;
}
.btn {
    width:100%!important;
}
        }
  
         .image{
               background-image: url('images/bcvhnhfg.png');
    width: 100%;
    background-repeat: no-repeat;
        }
  
        .image1{
      background-image: url('images/qwer-min.png');
    width: 100%;
    background-repeat: no-repeat;
    padding-bottom: 5%;
  
}
        .bg-dark{
             background-image: url('images/4 (1).png');
        }
        body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f6f6f6;
  
}
.btn-primary {
    color: #fff;
    background-color: #245891;
    border-color: #245891;
    border-radius: 10px;
}
.btn-primary:hover{
 color: #fff;
    background-color: #245891;
    border-color: #245891;
    border-radius: 10px;
}
@media (min-width: 1200px){
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1200px;
}}
.service{
        margin: 250px auto;
}





* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

a,
a:hover,
a.focus,
a.active {
    text-decoration: none;
    outline: none;
}

ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

li a{
  text-decoration:none;
}


.footer_section h4,
.social_media h4 {
    color: #fff;
    margin-top: 0;
    margin-bottom: 25px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 20px;
}
p .text {
    margin-top: 0;
    margin-bottom: 1rem;
    color: #fff;
}
.footer_section h4::after,
.social_media h4::after {
    content: "";
    display: block;
    height: 2px;
    width: 40px;
    background: #fff;
    margin-top: 20px;
}


.footer_section ul {
    margin: 0;
    padding: 0;
    list-style: none;
}


.footer_section ul li a {
    color: #fff;
    transition: all .3s ease 0s;
    line-height: 36px;
    font-size: 15px;
    text-transform: capitalize;
}

.footer_section ul li a:hover {
    color: #f1f1f1;
}

.footer_section_contact ul li {
    color: #fff;
}

.search form {
    width: 100%;
    position: relative;
    display: flex;
    margin-bottom: 10px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.contact_input {
    width: 100%;
    border: none;
    padding: 0 0 0 15px;
    height: 60px;
    border-radius: 5px 0 0 5px;
    outline: none;
    color: #999;
    font-size: 16px;
}


.submit_button {
    width: 70px;
    height: 60px;
    font-size: 20px;
    border: none;
    background: #fff;
    text-align: center;
    color: #a129a5;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}

.social_media ul{
    display: flex;
    justify-content: space-between;
}

.social_media ul li {
       text-align: center;
    line-height: 50px;
    font-size: 16px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 1px solid #f89c22;
    background-color: #f89c22;
    transition: all .5s ease;
}
a:hover {
    color: #f89c22;
}
::placeholder {
  color: red;
  opacity: 1; /* Firefox */
}
::-ms-input-placeholder { /* Edge 12-18 */
  color: red;
}
.social_media ul li:hover {
       border: 1px solid #f89d22;
    background-color: transparent;
}

.social_media ul li a {
    font-weight: 100;
    color: #fff;
}

@media screen and(max-width:400px) {
    .footer {
        padding: 0 10px;
    }
    .laptop-img {
    width: 100%;
    /* height: auto; */
    /* margin-left: 234px; */
    /* margin-right: 0px; */
    margin-top: -64px;
    border-bottom-left-radius: 343px;
    overflow: hidden;
}
}
a{
    color:#fff;
}
.footer{
    padding-top:5%;
}
.py-3 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
}
.img-fluid {
       max-width: 100%;
    height: auto;
    width: 150px!important;
    border-radius: 5%;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
    text-align: justify;
}
::-ms-input-placeholder { /* Edge 12-18 */
  color: #F58C23!important;
}

::placeholder {
  color: #F58C23!important;
}
.consultative_text{
        text-align: left;
        padding-top:5%;
        padding-bottom:5%;
}
.arrow{
        font-size: 21px;
    float: right;
    background-color: #ffff;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    /* padding: 2%; */
    width: 30px;
    text-align: center;
}
/*.btn {*/
/*    width:80%!important;*/
/*}*/
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images\SCLLP.png" alt="SEYA Consulting LLP Logo">
            </a>
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services-container">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#CONTACTUS">Contact Us</a>
                    </li>
                    <li class="nav-item">
                       <a href="https://docs.google.com/forms/d/e/1FAIpQLScziXE1FuE5kcJIS-nOm-hqq2NUPJwbqdwfGDihT0AkFvL-vg/viewform" target="_blank"> <button id="getInTouch" class="btn btn-success">Register</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hero-content hero-text">
                    <div class="words">
                        <h1 class="display-4">Revolutionizing<br>Recruitment,<br>Transforming<br>Business.</h1>
                        <p class="lead">Elevate Your Business through Expert Recruitment<br>and Technology Services</p>
                    </div>
                    <a href="#services" class="btn btn-primary btn-lg" >Get Started &nbsp; <span style='font-size: 23px;'>&#8599;</span></a>
                </div>
                <div class="col-md-6">
                    <img src="images/1.png" alt="Image Description" class="laptop-img">
                </div>
            </div>
        </div>
    </div>

        <div class="container">
        <section id="about-section" class="about-section">
            <img src="images\aboutus.jpg" alt="About Us Image">
            <div class="about-text">
                <h2>About Us</h2>
                <p>At Seya Consulting LLP, we're here to help and welcome you with open arms. We're committed to understanding your needs and making sure we meet them every step of the way. Our goal is to support your success by offering smart and creative solutions that fit exactly what you're looking for.</p>
                <p>Seamlessly connecting talent with opportunity to drive organizational excellence and individual growth, establishing Seya Consulting LLP as the foremost choice for premier placement and corporate services.</p>
            </div>
        </section>
        </div>
        <div class="container" id="services-container">
            <div class="row">
             
            <div class="col-lg-6">
         
                <h2>Our Services</h2>
            </div>
         
            <div class="col-lg-6">
         
                <p>Your Partner for Exceptional Solutions Specializing in recruitment, technology, and business services, we deliver tailored excellence. Our experienced team ensures seamless execution, making us your trusted partner for all needs.</p>
          
            </div>
      </div>
      
      </div>
            <div class="container-fluid" >
                <div class="row ">
                    <div class="image">
                    <div class="row service">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3">
                        <div class="consultative_container">
                            <img src="images\logo1.png" alt="Logo 1" class="consultative_logo consultative_text">
                            <h4 class="consultative_text">HR Recruitment</h4>
                            <p class="readable_text">Elevate your workforce with our HR Recruitment Services. We specialize in sourcing top-tier talent, ensuring your team is equipped for success. <span class="arrow">&#8599;</span></p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="consultative_container">
                            <img src="images\logo2.png" alt="Logo 2" class="consultative_logo consultative_text">
                            <h4 class="consultative_text">Contract Staffing</h4>
                            <p class="readable_text">We specialize in providing flexible staffing solutions, ensuring your business has the right talent for short-term projects or extended engagements. <span class="arrow">&#8599;</span></p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="consultative_container">
                            <img src="images\logo3.png" alt="Logo 3" class="consultative_logo consultative_text">
                            <h4 class="consultative_text">Corporate Training</h4>
                            <p class="readable_text">Enhance your workforce with our cutting-edge Corporate Training services. Tailored programs designed to empower your team, enhance skills, and drive corporate excellence. <span class="arrow">&#8599;</span></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
       

    <div class="image1" id="CONTACTUS">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-6 form-field" style="margin: 10px 56px;">
                  <div class="contact-card">
                            <h2>Contact Us</h2>
                            <p>Connect with us today to unlock tailored solutions in recruitment, technology, and business services. Our team will get in touch with you soon.</p>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
<form method="post" name="emailContact">
                        <div class="row g-3">
                            <div class="col-lg-12">
                               <div class="input-row form-floating">
                               <!--<label for="name">Your Name</label>-->
                                <input type="text" class="form-control"  name="userName" placeholder="Your Name" required />
                            </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-row form-floating" class="form-control">
                                <!--<label for="email">Your Email</label>-->
                                 <input type="email" class="form-control"  id="emailId" name="userEmail" placeholder="Your Email" required />
                             
                            
                            </div>
                            </div>
                              <div class="col-lg-12">
                               <div class="input-row form-floating" class="form-control">
                               <!--<label for="phone">Mobile Number</label>-->
                                <input type="tel" id="mobile" class="form-control"  name="userPhone" placeholder="Your phone number" name="phone" required />
                            
                            
                            </div>
                            </div>
                         <!--   <div class="col-lg-12">-->
                         <!--        <div class="input-row form-floating"  class="form-control">-->
                         <!--        <label for="message">Message</label>-->
                         <!--    <textarea class="form-control"   name="userMessage" placeholder="Leave a message here" id="message" style="height: 150px" required /></textarea>-->
                         <!--</div>-->
                         <!--   </div>-->
                         
                            <div class="col-12">
                                <div class="input-row form-floating btn">
                            
                            <button class="btn btn-primary w-100 py-3" type="submit"  onclick="processMail()"  name="send" value="submit" style="background-color: #F58C23;"> Submit &nbsp; <span style='font-size: 23px;background-color: #F58C23;'>&#8599;</span></button>
                            <?php if(!empty($message)){?>
                            <div class="success">
                            <strong><?php echo $message; ?></strong>
                            </div> 
                            <?php }?>
                            </div>
                            
                            </div>
                            </div>
                        </div>
                    </form>
                        
                        </div>
                </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6">
            </div>
</div>
</div>
</div>
            
            
             <div class="footer pt-5 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="footer_section">
              <a href="#"><img src="images\scllplogo2.png" alt="SEYA Consulting LLP Logo" class="img-fluid"></a>
               <p class="text" style="color:#fff;padding-top:5%">Where Excellence meets <br><span style="text-align:center">Expertise!</span></p>
            
            </div>
          </div>
          <div class="col-lg-3">
            <div class="footer_section">
              <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="hello.php">Home</a></li>
                                    <li><a href="#about-section">About Us</a></li>
                                    <li><a href="#services-container">Services</a></li>
                                    <li><a href="#CONTACTUS">Contact Us</a></li>
                                </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="footer_section">
             
             <h4>Address</h4>
                        <p class="text" style="color:#fff">SEYA CONSULTING LLP</p>
                        <p class="text" style="color:#fff">&#128204; JP Tower, Flat 3rd floor, Third,<br>Dr.Thirumoorthy Nagar Main Rd,<br>Nungambakkam,<br> Chennai, Tamil Nadu 600034.</p>
                       
            </div>
          </div>
          <div class="col-lg-3">
            <div class="row">
              <div
                class="col-sm-12 col-md-6 col-lg-12 footer_section footer_section_contact"
              >
                <h4>Contact Us</h4>
                 <p class="text" style="color:#fff">&#9742; Phone: 9345910713</p>
                        <!--<p class="text" style="color:#fff" >&#x1F30E; <a href="www.seyaconsulting.com">www.seyaconsulting.com</a></p>-->
                        <p class="text" style="color:#fff">&#9993; <a href="mailto:seyaconsultingllp@gmail.com">seyaconsultingllp@gmail.com</a></p>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-12 social_media">
                <h4>Follow Up</h4>
                <ul>
                  <!--<li>-->
                  <!--  <a href=""><i class="fab fa-facebook-f"></i></a>-->
                  <!--</li>-->
                  <!--<li>-->
                  <!--  <a href=""><i class="fab fa-twitter"></i></a>-->
                  <!--</li>-->
                  <!--<li>-->
                  <!--  <a href=""><i class="fab fa-google-plus-g"></i></a>-->
                  <!--</li>-->
                  <li>
                    <a href="https://www.instagram.com/seya_consulting_llp/"><i class="fab fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <p style="color:#fff">Copyrights@2024 designed by <a href="https://seyasoftech.com/">Seyasoft</a></p>
        </div>
      </div>
    </div>
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
if (!empty($_POST["send"])) {
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPhone = $_POST["userPhone"];
    $userMessage = $_POST["userMessage"];
    $toEmail = "seyaconsultingllp@gmail.com";
    $subject = "Message from $userName"; // Subject line

    $mailHeaders = "From: " . $_POST["userEmail"] . "\r\n" .
        "Name: " . $userName . "\r\n" .
        "Email: " . $userEmail . "\r\n" .
        "Phone: " . $userPhone . "\r\n" .
        "Message: " . $userMessage . "\r\n";

    // Add the subject in the additional mail headers
    $mailHeaders .= "Subject: $subject\r\n";

    if (mail($toEmail, $subject, $mailHeaders)) {
        $message = "Your information has been received successfully.";
    }
}
?>
<script>

function processMail(){
    var xhr = new XMLHttpRequest();
    var emailId = document.getElementById("emailId").value;
     console.log(emailId);
    var requestForm = "mail.php?email="+emailId;
    console.log(requestForm);
    xhr.open("GET", requestForm, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Successful response
        console.log(xhr.responseText);
      }
    };
    xhr.send();
    
}


</script>
</body>
</html>
