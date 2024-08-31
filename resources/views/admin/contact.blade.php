<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Mango Market Integration System</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
            background-color: #f9f9f9;
            background-image: url(images/userbackground.PNG);
        }
        header {
            background: #3e8e41;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: 600;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .contact-section {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .contact-section h2 {
            color: #3e8e41;
            margin-top: 0;
            font-size: 2em;
            border-bottom: 2px solid #3e8e41;
            padding-bottom: 10px;
        }
        .contact-info {
            margin-top: 20px;
        }
        .contact-info h3 {
            color: #333;
            font-size: 1.5em;
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .contact-info p {
            margin: 10px 0;
            font-size: 1.1em;
        }
        .contact-info a {
            color: #3e8e41;
            text-decoration: none;
            font-weight: bold;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
        .contact-form {
            margin-top: 30px;
        }
        .contact-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .contact-form button {
            background: #3e8e41;
            color: #fff;
            border: none;
            padding: 15px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.1em;
        }
        .contact-form button:hover {
            background: #357a38;
        }
        .map {
            margin-top: 30px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }
        footer {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            font-size: 0.9em;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
        .social-media {
            margin-top: 30px;
            text-align: center;
        }
        .social-media a {
            color: #3e8e41;
            font-size: 1.5em;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s;
        }
        .social-media a:hover {
            color: #2b6e34;
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
    </style>
</head>
<body>
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
    @if(session()->has('message'))
    <div class="alert alert alert-success" id="alert" style="font-size: 20px; position: absolute; top: 10; left: 50%; transform: translateX(-50%);">
    
        {{session()->get('message')}}
    </div>
    @endif
    <div class="container">
        <section class="contact-section">
            <h2>Contact Us</h2>
            
            <div class="contact-info">
                <h3>Our Contact Information</h3>
                <p><strong>Email:</strong> <a href="mailto:contact@mango-market-integration.com">contact@mango-market-integration.com</a></p>
                <p><strong>Phone:</strong> (+254) 746906462</p>
                <p><strong>Address:</strong> Tom Mboya Street Tudor, Msa</p>
            </div>
            
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="{{url('/message')}}" method="POST">
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                    
                    <button type="submit">Send Message</button>
                </form>
            </div>
            
            <div class="map">
                <h3>Find Us On the Map</h3>
                <iframe src="https://maps.app.goo.gl/pW2nqhY9993R26nTA" 
                        width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="social-media">
                <h3>Follow Us</h3>
                <a href="https://facebook.com/yourprofile" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/yourprofile" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com/in/yourprofile" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://instagram.com/yourprofile" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </section>
    </div>
    <footer>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <p>&copy; 2024 Mango Market Integration System. All rights reserved.</p>
    </footer>
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

