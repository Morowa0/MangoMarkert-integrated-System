<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image:url(images/Mango.PNG); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            background-position: center;
            color: #333;
        }
        nav {
    display: flex;
    justify-content: space-between; /* Distribute space between items */
    align-items: center;
    background-color: blue;
    padding: 1em;
    position: relative;
    flex-wrap: nowrap; /* Prevent wrapping */
}

nav ul {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 3px; /* Adjust the spacing between nav items */
    list-style: none;
    padding: 0;
    margin: 0;
    flex-wrap: nowrap; /* Ensure items stay in a single line */
}

nav a {
    color: white;
    text-decoration: none;
    padding: 0 1em;
    font-weight: bold;
    text-align: center;
    white-space: nowrap; /* Prevent text from breaking into multiple lines */
}

.auth-buttons {
    display: flex;
    gap: 30px;
    margin-left: 50px;
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
            width: 100%;
            margin-top: auto; 
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
     
    
       
        .notifications {
            border-collapse: collapse;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            margin: 20px auto; /* Center the notification div */
        }

        .notifications h4 {
            margin: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .notification {
            padding: 10px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .notification:last-child {
            border-bottom: none;
        }

        .notification p {
            margin: 0;
            font-size: 16px;
            flex: 1;
        }

        .notification small {
            color: #888;
            font-size: 12px;
        }

        .notification button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 12px;
        }

        .notification button:disabled {
            background-color: #aaa;
            cursor: not-allowed;
        }

    </style>
        </style>
    <script type="text/javascript">
        function printPage() {
            window.print();
        }
    </script>
    </style>
</head>
<nav>  
    <ul>
        <li><a href="{{url('/buyershome')}}">Home</a></li>
        <li style="float: left; margin-right: 20px;">
            <form action="{{ url('/search') }}" method="GET" style="display: flex; align-items: center;">
                <input type="text" name="query" placeholder="Search..." style="padding: 6px; font-size: 14px; border-radius: 4px; border: 1px solid #ccc; width: 150px;">
                <button type="submit" style="background: none; border: none; padding: 6px 10px;">
                    <i class="fas fa-search" style="color: white;"></i>
                </button>
            </form>
        </li>
        <li><a href="{{url('/addmango')}}">Add Variety</a></li>
        <li><a href="{{url('/waitingorder')}}">Pending Orders</a></li>
        <li><a href="{{url('/confirmed')}}">Approved Orders</a></li>
        <li><a href="/showvariety">Variety</a></li>
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


<div class="notifications">
    <h4 style="text-align: center;">Notifications</h4>
    @foreach($notifications as $notification)
        <div class="notification">
            <p>{{ $notification->message }}</p>
            <small>{{ $notification->created_at->diffForHumans() }}</small>
            <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST">
                @csrf
                <button type="submit" {{ $notification->read_at ? 'disabled' : '' }}>Mark as Read</button>
            </form>
        </div>
    @endforeach
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
<script type="text/javascript">
    $("document").ready(function()
    {
       setTimeout(function()
       {
           $("div.alert").remove();
       },3000);

    } );
    </script>
</body>
</html>
