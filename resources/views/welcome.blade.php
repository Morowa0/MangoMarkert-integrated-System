<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            background-position: center;
            color: #333;
        }
        nav {
    display: flex;
    justify-content: center; /* Center nav items */
    align-items: center;
    background-color: blue;
    padding: 1em;
    position: relative;
}

nav ul {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px; /* Adjust the spacing between nav items */
    list-style: none;
    padding: 0;
    margin: 0;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 0 1em;
    font-weight: bold;
    text-align: center;
}
.auth-buttons {
    display: flex;
    gap: 50px;
    margin-left: 250px;
}

.auth-buttons a {
    color: white;
    text-decoration: none;
    padding: 0.5em 1em;
    font-weight: bold;
}

.auth-buttons .btn {
    text-transform: uppercase;
}
nav a:hover {
    text-decoration: underline;
}

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        #footer {
            background-color: #333;
            color: #fff;
            padding: 5px 0;
        }
        .footer-widget-area {
            padding-top: 10px;
            padding-bottom: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .widget {
            margin-bottom: 30px;
            flex: 0 1 100%; /* Full width by default */
        }
        .widget-title {
            font-size: 18px;
            font-weight: 600;
            color: #D89837;
            margin-bottom: 15px;
        }
        .description {
            font-size: 14px;
            line-height: 1.8;
            color: #ccc;
        }
        .styled-icons {
            list-style: none;
            padding: 0;
            margin: 10px 0 0 0;
        }
        .styled-icons li {
            display: inline-block;
            margin-right: 10px;
        }
        .styled-icons a {
            color: #fff;
            font-size: 20px;
            transition: color 0.3s;
        }
        .styled-icons a:hover {
            color: #D89837;
        }
        .footer-bottom {
            background-color: #D89837;
            color: #fff;
            padding: 20px 0;
        }
        .footer-paragraph {
            font-size: 14px;
            line-height: 1.6;
            color: #fff;
            font-weight: 500;
        }
        .footer-paragraph.text-right {
            text-align: right;
        }
        /* Media query for responsiveness */
        @media (min-width: 768px) {
            .footer-widget-area {
                flex-wrap: nowrap; /* Ensure items do not wrap */
            }
            .widget {
                flex: 0 1 calc(33.33% - 20px); /* Adjust width for each column */
            }
        }


        .carousel-container {
            position: relative;
            height: 500px;
            width: 100%;
            overflow: hidden;
        }
        .carousel-caption {
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            width: 100%;
            color: white;
            z-index: 1;
        }
        .carousel-caption h2 {
            text-align: center;
            font-size: 2.5em;
            font-weight: bold;
            width: 28%;
        }
        .carousel-caption p {
            font-size: 1.5em;
            margin-top: 20px;
        }
        .carousel-inner img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }
        /* Media query for responsiveness */
        @media (max-width: 768px) {
            .carousel-caption {
                top: 30px;
            }
            .carousel-caption h2 {
                font-size: 2em;
            }
            .carousel-caption p {
                font-size: 1.2em;
            }
        }

        .services-section {
        
    padding: 4em 0;
    text-align: center;
    background-color: aqua;
}

.services-section h2 {
    font-size: 2.5em;
    font-weight: bold;
    margin-bottom: 1em;
}

.services-list {
    list-style-type: none;
    padding: 0;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    gap: 1em;
    flex-wrap: wrap;
    max-width: 100%;
}

.services-list li {
    position: relative;
    flex: 1 1 calc(25% - 1em); /* Each image will take up 10% of the container width minus the gap */
    height: 150px;
    margin: 1em 0;
    overflow: hidden;
    border-radius: 8px;
    box-sizing: border-box; /* Ensures padding and border are included in the element's width */
}

.services-list li img {
    width: 100%;
    height: 100%;
    border-radius: 8px;
    transition: transform 0.3s ease;
    object-fit: cover;
}

.services-list li:hover img {
    transform: scale(1.1);
}

.services-list li h3 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: yellow;
    font-size: 1.2em;
    font-weight: bold;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    z-index: 2;
}

/* Media query for responsiveness */
@media (max-width: 1200px) {
    .services-list li {
        flex: 1 1 calc(20% - 1em); /* Reduce to 5 columns on medium screens */
        height: 150px;
    }
}

@media (max-width: 768px) {
    .services-list {
        flex-direction: column;
        align-items: center;
    }
    .services-list li {
        flex: 1 1 100%; /* On small screens, each image takes up 100% of the width */
        max-width: 300px;
    }
}
    </style>
</head>



<nav>  
    <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="#our-services">Varieties of Mangoes</a></li>
        <li><a href="{{url('/contact')}}">Contact Us</a></li>
        <li><a href="/about">About Us</a></li>
        <div class="auth-buttons">
            <a class="btn btn-primary auth-btn" href="{{route('register')}}">Register</a>
            <a class="btn btn-primary auth-btn" href="{{route('login')}}">Login</a>
        </div>
    </ul>
</nav>

<section  style="background-color:aqua">
    <center>
    <h2 style="color: black; padding-top:10px; font-size:3em ">Welcome to Mango Market Integrated System</h2>
    <p style="color: red; font-size:1.8em "><b>The space you easily find a market for your mango fruits.</b></p>
    <marquee>
        <h1 style="color: blue;">Welcome to our Mango Order Management System, a dedicated platform designed to serve both mango farmers and buyers. We are committed to fostering a thriving mango community, where both farmers and buyers can grow and succeed together.</h1>
    </marquee>
    </center>
</section>

<div id="mangoCarousel" class="carousel slide" data-ride="carousel" style="height:500px;">
    <ol class="carousel-indicators">
      <li data-target="#mangoCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#mangoCarousel" data-slide-to="1"></li>
      <li data-target="#mangoCarousel" data-slide-to="2"></li>
      <li data-target="#mangoCarousel" data-slide-to="3"></li>
      <li data-target="#mangoCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/VARIETY.PNG" class="d-block w-100" alt="variety of Mango">
        <div class="carousel-caption d-none d-md-block">
          <h5>Varieties of Mangoes</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/2ND.PNG" class="d-block w-100" alt="Swahilipot hub has signed MoU with TUM">
        <div class="carousel-caption d-none d-md-block">
          <h5>Embe Pituka</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Embe Nyuzi.PNG"  class="d-block w-100" alt="Pakistan Commercial Counsellor Visits TUM">
        <div class="carousel-caption d-none d-md-block">
          <h5>Embe Ngowe</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/kidha.PNG"  class="d-block w-100" alt="President Ruto holds meeting with VCs">
        <div class="carousel-caption d-none d-md-block">
          <h5>Embe Kiadha</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Mango.PNG" class="d-block w-100" alt="CS Salim Mvurya visits TUM">
        <div class="carousel-caption d-none d-md-block">
          <h5>Embe Dodi</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#mangoCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#mangoCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  

<section id="our-services" class="services-section">
    <div class="container">
        <h2>Variety of Mangoes</h2>
        <ul class="services-list">
            <li>
                <img src="images/2ND.PNG" alt="Mango Variety 1">
                <h3>Ngowe</h3>
                
            </li>
            <li>
                <img src="images/kidha.PNG" alt="Mango Variety 2">
                <h3>Kiadha</h3>
                
            </li>
            <li>
                <img src="images/pituka.PNG" alt="Mango Variety 4">
                <h3>Embe Nyuzi</h3>
               
            </li>
            <li>
                <img src="images/Embe Nyuzi.PNG" alt="Mango Variety 3">
                <h3>Pituka</h3>
            </li>
           
    </div>
</section>



<footer id="footer" class="footer layer-overlay overlay-dark-9">
    <div class="footer-widget-area">
        <div class="container pt-10 pb-10">
            <div class="widget widget_nav_menu">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Contact Us</h4>
                <div class="description">
                    Hilary maasai Street Tana, HOLA<br>
                    P.O Box 90420-80103 HOLA <br>
                    Tel : +254733955377<br>
                    +254208095368 / +254208095365<br>
                    Email: <a href="mailto:info@tum.ac.ke" style="color: white; text-decoration: none;">info@gramber.ac.ke</a>
                </div>
                <ul class="styled-icons">
                    <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="container pt-10 pb-10">
            <div class="widget widget_nav_menu">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Famers option</h4>
                <ul>
                    <li><a href="https://elearning.tum.ac.ke/" style="color: white; text-decoration: none;">Acess resorce</a></li>
                    <li><a href="https://eregistrar.tum.ac.ke/Campuscura/?TenantID=tum#login;TenantID=tum;Apply=false" style="color: white; text-decoration: none;">company details</a></li>
                    <li><a href="https://mail.google.com/a/students.tum.ac.ke" style="color: white; text-decoration: none;">Famers details</a></li>
                </ul>
            </div>
        </div>
        <div class="container pt-10 pb-10">
            <div class="widget widget_nav_menu">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Resources</h4>
                <ul>
                    <li><a href="https://conference.ke" style="color: white; text-decoration: none;"> Web Conference</a></li>
                    <li><a href="https://mail.google.com/a/tum.ac.ke" style="color: white; text-decoration: none;"> Mail</a></li>
                    <li><a href="https://hr.tum.ac.ke/" style="color: white; text-decoration: none;"> Portal</a></li>
                    <li><a href="/profiles" style="color: white; text-decoration: none;"> Profiles</a></li>
                </ul>
            </div>
        </div>
        <div class="container pt-10 pb-10">
            <div class="widget widget_nav_menu">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Important Links</h4>
                <ul>
                    <li><a href="https://jobs.tum.ac.ke/" style="color: white; text-decoration: none;">Opportunities</a></li>
                    <li><a href="https://hr.tum.ac.ke/contracts" style="color: white; text-decoration: none;">Contracts Awarded</a></li>
                    <li><a href="https://suppliers.tum.ac.ke/" style="color: white; text-decoration: none;">Suppliers</a></li>
                    <li><a href="/tenders" style="color: white; text-decoration: none;">Tenders</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom" data-tm-bg-color="#D89837">
        <div class="container">
            <div style="color: white; font-weight:500" class="row pt-20 pb-20">
                <div class="col-sm-6">
                    <div class="footer-paragraph">
                        Copyright © 2024 Mohamed Morowa Hiribae. All Rights Reserved.
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="footer-paragraph text-right">
                        <i>"Jiddu Tajidu"</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
