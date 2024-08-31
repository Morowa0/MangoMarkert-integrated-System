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
    font-family: 'Arial', sans-serif;
    background: linear-gradient(to right, grey, #0056b3);
    color: #333;
    margin: 0;
    padding: 0;
    background-image:url(images/userbackground.PNG);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
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

        h2 {
    padding-top: 5px;
    text-align: center;
    margin-bottom: 5px;
    color: black;
    font-size: 28px;
    font-weight: bold;
    letter-spacing: 1px;
 
}

form {
    max-height:860px; 
    max-width: 500px;
    margin: 20px auto 50px;
    padding: 2px;
    background-color: #f9f9f9;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

form:hover {
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

form div {
    margin-bottom: 3px;
}

form label {
    display: block;
    margin-bottom: 2px;
    font-weight: bold;
    font-size: 16px;
    color: #004085;
}

form input[type="text"],
form input[type="file"],
form input[type="number"],
form select {
    width: 100%;
    padding: 2px;
    font-size: 14px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    background-color: #fff;
    transition: border-color 0.3s ease;
}

form input[type="text"]:focus,
form input[type="file"]:focus,
form input[type="number"]:focus,
form select:focus {
    border-color: #007bff;
    outline: none;
}

form input[type="file"] {
    padding: 2px;
}

form input[readonly] {
    background-color: #e9ecef;
    color: #495057;
    padding: 2px;
    font-size: 14px;
    border-radius: 5px;
}

form input[type="file"]::file-selector-button {
    background-color: #007bff;
    color: white;
    padding: 2px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form input[type="file"]::file-selector-button:hover {
    background-color: #0056b3;
}

form div.submit-container {
    text-align: center;
    padding: 10px 0;
}

form input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 5px 30px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

.alert {
    text-align: center;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    border-radius: 5px;
}

    </style>
</head>
<nav>  
    <ul>
        <li><a href="{{url('/farmershome')}}">Home</a></li>
        <li><a href="{{url('/requestorder')}}">Request Order</a></li>
        <li><a href="{{url('/pendingorder')}}">Pending Orders</a></li>
        <li><a href="{{url('/confirmedorder')}}">Approved Orders</a></li>
        <li><a href="/completion">Completed Orders</a></li>
        <li>
            <a href="{{ url('/farmer.dashboard') }}">
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
<div style="background-image:url(images/userbackground.PNG);">

@if(session()->has('message'))
<div class="alert alert alert-success" id="alert" style="font-size: 16px; position: absolute; top: 10; left: 50%; transform: translateX(-50%);">

	{{session()->get('message')}}
</div>
@endif
<form action="{{url('/request_order')}}" method="POST" enctype="multipart/form-data">
    <h2> Order Here</h2>
    @csrf
    <div style="padding:10px">
        <label>Farmer's Name:</label>
        
        <input type="text"  name="farmer_name" value="{{ auth()->user()->name }}" readonly>
    
        <!-- Hidden input to submit the user ID -->
        <input type="hidden" name="farmer_id" value="{{ auth()->user()->id }}">
    </div>
    <div style="padding:10px">
        <label>County:</label>
        <select name="county" class="form-control" type="">
            <option value="">---Select County---</option>
            <option value="Baringo">Baringo</option>
            <option value="Bomet">Bomet</option>
            <option value="Bungoma">Bungoma</option>
            <option value="Busia">Busia</option>
            <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
            <option value="Embu">Embu</option>
            <option value="Garissa">Garissa</option>
            <option value="Homa Bay">Homa Bay</option>
            <option value="Isiolo">Isiolo</option>
            <option value="Kajiado">Kajiado</option>
            <option value="Kakamega">Kakamega</option>
            <option value="Kericho">Kericho</option>
            <option value="Kiambu">Kiambu</option>
            <option value="Kilifi">Kilifi</option>
            <option value="Kirinyaga">Kirinyaga</option>
            <option value="Kisii">Kisii</option>
            <option value="Kisumu">Kisumu</option>
            <option value="Kitui">Kitui</option>
            <option value="Kwale">Kwale</option>
            <option value="Laikipia">Laikipia</option>
            <option value="Lamu">Lamu</option>
            <option value="Machakos">Machakos</option>
            <option value="Makueni">Makueni</option>
            <option value="Mandera">Mandera</option>
            <option value="Marsabit">Marsabit</option>
            <option value="Meru">Meru</option>
            <option value="Migori">Migori</option>
            <option value="Mombasa">Mombasa</option>
            <option value="Murang'a">Murang'a</option>
            <option value="Nairobi">Nairobi</option>
            <option value="Nakuru">Nakuru</option>
            <option value="Nandi">Nandi</option>
            <option value="Narok">Narok</option>
            <option value="Nyamira">Nyamira</option>
            <option value="Nyandarua">Nyandarua</option>
            <option value="Nyeri">Nyeri</option>
            <option value="Samburu">Samburu</option>
            <option value="Siaya">Siaya</option>
            <option value="Taita-Taveta">Taita-Taveta</option>
            <option value="Tana River">Tana River</option>
            <option value="Tharaka-Nithi">Tharaka-Nithi</option>
            <option value="Trans Nzoia">Trans Nzoia</option>
            <option value="Turkana">Turkana</option>
            <option value="Uasin Gishu">Uasin Gishu</option>
            <option value="Vihiga">Vihiga</option>
            <option value="Wajir">Wajir</option>
            <option value="West Pokot">West Pokot</option>
        </select>
        
    </div>
    <div style="padding: 10px;">
        <label for="quantity">Quantity (Tonnes)</label>
        <input type="number" name="quantity" id="quantity" placeholder="Enter the amount of mangoes in metric tonnes" step="0.01" min="1" required>
    </div>
    
    <div style="padding:10px">
        <label>Buyer:</label>
        <select name="buyer_id" id="buyer" class="form-control" onchange="updateBuyerName()">
            <option value="">---Select Buyer---</option>
            @foreach($appoint as $appoints)
                <option value="{{$appoints->id}}" data-name="{{$appoints->name}}">{{$appoints->name}}</option>
            @endforeach
        </select>
        <!-- Hidden input to store the buyer name -->
        <input type="hidden" name="buyer_name" id="buyer_name">
    </div>
    
    <div style="padding:10px">
        <label>Mango Type:</label>
        <select name="mango_type" id="mango-type" class="form-control">
            <option value="">---Select type of mango---</option>
        </select>
    </div>
    
<div style="padding:10px">
    <label>Price in Ksh/Kg:</label>
    <input type="text" id="price" name="price" class="form-control" readonly>
</div>
<div style="padding:10px">
    <label>Payment:</label>
    <input type="text" id="duration" name="duration" class="form-control" readonly>
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

<script>
    document.getElementById('buyer').addEventListener('change', function() {
    var buyerId = this.value;

    var mangoTypeSelect = document.getElementById('mango-type');
    mangoTypeSelect.innerHTML = '<option value="">---Select type of mango---</option>';

    if (buyerId) {
        fetch(`/get-mango-types/${buyerId}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(function(mangoType) {
                    var option = document.createElement('option');
                    option.value = mangoType.id;
                    option.text = mangoType.name;
                    option.dataset.price = mangoType.price;
                    option.dataset.duration = mangoType.duration;
                    mangoTypeSelect.add(option);
                });
            });
    }
});

document.getElementById('mango-type').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    var price = selectedOption.dataset.price;
    var duration = selectedOption.dataset.duration;

    document.getElementById('price').value = price || '';
    document.getElementById('duration').value = duration || '';
});
    </script>
    
<script>
    function updateBuyerName() {
        var select = document.getElementById('buyer');
        var selectedOption = select.options[select.selectedIndex];
        var buyerNameInput = document.getElementById('buyer_name');
        
        // Set the hidden input value to the name of the selected buyer
        buyerNameInput.value = selectedOption.getAttribute('data-name');
    }
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
