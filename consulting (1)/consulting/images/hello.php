<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEYA Consulting LLP</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #acaaaa;
            padding-top: 19px;
            padding-bottom: -1px;
        }

        .navbar {
            background-color: #f7f6f5;
            display: flex;
            justify-content: center;
            margin-top: -19px;
        }

        .navbar-toggler {
            margin-right: auto;
            margin-left: auto;
        }

        .navbar-brand img {
            max-height: 50px;
            width: auto;
        }

        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 5.5rem;
                padding-left: 0.5rem;
                color: #6b6b6b;
            }

            .navbar-expand-lg .navbar-nav .nav-link:hover {
                color: #00008b;
            }
        }

        .navbar-nav .nav-link,
        .navbar-nav .btn {
            color: #07216e;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .btn:hover {
            color: #0a000048;
        }

        .navbar-nav .btn {
            background-color: #28a745;
            border-color: #28a745;
        }

        .navbar-nav .btn:hover {
            background-color: #b1bdb4;
            border-color: #28a745;
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
            max-width: 350px;
            margin-top: 93px;
            margin-right: auto;
            margin-left: -363px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            text-align: justify;
            margin-bottom: 30px;
        }

        .contact-card form {
            display: flex;
            flex-direction: column;
        }

        .contact-card label {
            margin-bottom: 10px;
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
        }

        .consultative_logo {
            width: 34px;
            margin-bottom: 1px;
            margin-top: 9px;
            margin-left: 4px;
            margin-right: 10px;
        }

        .additional-image {
            width: 63%;
            margin-top: 1rem;
            border-top-right-radius: 369px;
            border-bottom-right-radius: 369px;
            overflow: hidden;
            margin-left: -204px;
        }

        .img-fluid {
            max-width: 216%;
            margin-top: 1rem;
            border-top-left-radius: 235px;
            border-bottom-left-radius: 0px;
            overflow: hidden;
        }

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
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="hello.html">
                <img src="scllplogo2.png" alt="SEYA Consulting LLP Logo">
            </a>
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="hello.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services-container">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#CONTACTUS">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <button id="getInTouch" class="btn btn-success">GET IN TOUCH</button>
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
                    <a href="#services" class="btn btn-primary btn-lg">Get Started</a>
                </div>
                <div class="col-md-6">
                    <img src="C:\Users\DELL\Downloads\SEYALLP\seyaconsultingfolder\laptop.jpg" alt="Image Description" class="laptop-img">
                </div>
            </div>
        </div>
    </div>

    <main>
        <section id="about-section" class="about-section">
            <img src="aboutus.jpg" alt="About Us Image">
            <div class="about-text">
                <h2>About Us</h2>
                <p>At Seya Consulting LLP, we're here to help and welcome you with open arms. We're committed to understanding your needs and making sure we meet them every step of the way. Our goal is to support your success by offering smart and creative solutions that fit exactly what you're looking for.</p>
                <p>Seamlessly connecting talent with opportunity to drive organizational excellence and individual growth, establishing Seya Consulting LLP as the foremost choice for premier placement and corporate services.</p>
            </div>
        </section>
        <section id="services-container" class="services-container">
            <div class="services-title">
                <h2>Our Services</h2>
            </div>
            <div class="services-content">
                <p>Your Partner for Exceptional Solutions Specializing in recruitment, technology, and business services, we deliver tailored excellence. Our experienced team ensures seamless execution, making us your trusted partner for all needs.</p>
            </div>
        </section>

        <img class="additional-image" src="ourservices.jpg" alt="Additional Image">
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="consultative_container" id="container1">
                            <img src="logo1.png" alt="Logo 1" class="consultative_logo">
                            <h4 class="consultative_text">HR Recruitment</h4>
                            <p class="readable_text">Elevate your workforce with our HR Recruitment Services. We specialize in sourcing top-tier talent, ensuring your team is equipped for success.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="consultative_container" id="container2">
                            <img src="logo2.png" alt="Logo 2" class="consultative_logo">
                            <h4 class="consultative_text">Contract Staffing</h4>
                            <p class="readable_text">We specialize in providing flexible staffing solutions, ensuring your business has the right talent for short-term projects or extended engagements.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="consultative_container" id="container3">
                            <img src="logo3.png" alt="Logo 3" class="consultative_logo">
                            <h4 class="consultative_text">Corporate Training</h4>
                            <p class="readable_text">Enhance your workforce with our cutting-edge Corporate Training services. Tailored programs designed to empower your team, enhance skills, and drive corporate excellence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section id="CONTACTUS" class="CONTACTUS">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="end picture.jpg" alt="Big Picture" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <div class="contact-card">
                            <h2>Contact Us</h2>
                            <p>Connect with us today to unlock tailored solutions in recruitment, technology, and business services. Our team will get in touch with you soon.</p>
                            <form action="submit_contact.php" method="post">
                                <input type="text" id="full-name" name="full-name" placeholder="Full Name" required>
                                <input type="email" id="email-id" name="email-id" placeholder="Email ID" required>
                                <input type="tel" id="phone-number" name="phone-number" placeholder="Phone Number" required>
                                <input type="submit" value="Submit" class="btn btn-orange" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       
    
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <footer class="bg-dark text-light">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="logopic">
                                <img src="scllplogo.png" alt="SEYA Consulting LLP Logo" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-links">
                                <h5>Quick Links</h5>
                                <ul>
                                    <li><a href="hello.html">Home</a></li>
                                    <li><a href="#about-section">About Us</a></li>
                                    <li><a href="#services-container">Services</a></li>
                                    <li><a href="#CONTACTUS">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <h5>Contact Us</h5>
                        <p>SEYA CONSULTING LLP</p>
                        <p>&#128204; JP Tower, Flat 3rd floor, Third,<br>Dr.Thirumoorthy Nagar Main Rd,<br>Nungambakkam, Chennai, Tamil Nadu 600034</p>
                        <p>&#9742; Phone: 9345910713</p>
                        <p>&#x1F30E; <a href="www.seyaconsulting.com">www.seyaconsulting.com</a></p>
                        <p>&#9993; <a href="mailto:seyaconsultingllp@gmail.com">seyaconsultingllp@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </footer>
        
</body>
</html>
