<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
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
            flex: 1;
        }
        #footer {
            background-color: #333;
            color: #fff;
            padding: 5px 0;
            width: 100%;
            
            bottom: 0;
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

        form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

form div {
    margin-bottom: 5px;
}

form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    font-size: 14px;
    color: #333;
}

form input[type="text"],
form input[type="file"] {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

form input[type="text"]:focus,
form input[type="file"]:focus {
    border-color: #007bff;
    outline: none;
}

form input[type="file"] {
    padding: 5px;
}

form input[readonly] {
    background-color: #e9ecef;
    color: #495057;
}

form input[type="file"]::file-selector-button {
    background-color: #007bff;
    color: white;
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form input[type="file"]::file-selector-button:hover {
    background-color: #0056b3;
}

form div.submit-container {
    text-align: center;
    padding: 5px;
}

form input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 5px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

        
    </style>
</head>

<body style="background-color:#D89837">

<nav>  
    <ul>
        <li><a href="{{url('/buyershome')}}">Home</a></li>
        <li><a href="{{url('/addmango')}}">Add Variety</a></li>
        <li><a href="{{url('/waitingorder')}}">Pending Orders</a></li>
        <li><a href="{{url('/confirmed')}}">Approved Orders</a></li>
        <li><a href="/showvariety">Show Variety</a></li>
        <li><a href="/escalated">Escalated Orders</a></li>
        <li><a href="/commit">Completed Orders</a></li>
        <li>
            <a href="{{ url('/buyer.dashboard') }}">
                <i class="fas fa-bell"></i> 
                <span class="badge" id="notification-badge" style="color:red;">0</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white;"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>

<div style="background-color:#D89837">

@if(session()->has('message'))
<div class="alert alert alert-success" id="alert" style="font-size: 16px; position: absolute; top: 10; left: 50%; transform: translateX(-50%);">

	{{session()->get('message')}}
</div>
@endif
<form action="{{url('editprice',$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 style="margin: 5px auto; text-align:center;">UPDATE</h1>
    <div style="padding:5px">
        <label>Buyer's ID:</label>
   
        <input type="text" value="{{ auth()->user()->name }}" disabled>
    
        <!-- Hidden input to submit the user ID -->
        <input type="hidden" name="buyer_id" value="{{ auth()->user()->id }}">
    </div>
    <div style="padding:5px">
        <label>Type Name:</label>
        <input type="text" name="typename" value="{{$data->name}}" readonly>
    </div>
    <div style="padding:5px">
        <label>Price in Ksh/Kg:</label>
        <input type="text" name="price"  value="{{$data->price}}">
    </div>
    <div style="padding:5px">
        <label>Payment processing:</label>
        <input type="text" name="duration"  value="{{$data->duration}}">
    </div>
   
    <div class="submit-container">
        <input type="submit" name="btn btn-success" value="Submit">
    </div>
</form>
</div>

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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $("document").ready(function()
    {
       setTimeout(function()
       {
           $("div.alert").remove();
       },3000);

    } );
    </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                function updateNotificationBadge() {
                    fetch('/notifications/unread-count')
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('notification-badge').textContent = data.unread_count;
                        });
                }
    
                // Update badge on page load
                updateNotificationBadge();
    
                // Optionally, update badge periodically (e.g., every 30 seconds)
                setInterval(updateNotificationBadge, 30000);
            });
        </script>
</body>
</html>
