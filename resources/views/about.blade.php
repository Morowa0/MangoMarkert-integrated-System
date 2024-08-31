<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Mango Market Integration System</title>
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
        .about-us {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .about-us h2 {
            color: #3e8e41;
            margin-top: 0;
            font-size: 2em;
            border-bottom: 2px solid #3e8e41;
            padding-bottom: 10px;
        }
        .about-us h3 {
            color: #333;
            font-size: 1.5em;
            margin-top: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .about-us p {
            margin: 0 0 15px;
            font-size: 1.1em;
        }
        .about-us ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .about-us ul li {
            background: #e8f5e9;
            border: 1px solid #c8e6c9;
            border-radius: 5px;
            margin: 10px 0;
            padding: 15px;
            font-size: 1.1em;
            transition: background 0.3s;
        }
        .about-us ul li:hover {
            background: #dcedc8;
        }
        .contact-info {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .contact-info h3 {
            color: #3e8e41;
            margin-top: 0;
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
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/about">About Us</a></li>
            <div class="auth-buttons">
                <a class="btn btn-primary auth-btn" href="{{route('register')}}">Register</a>
                <a class="btn btn-primary auth-btn" href="{{route('login')}}">Login</a>
            </div>
        </ul>
    </nav>

    <div class="container">
        <section class="about-us">
            <h2>About Us</h2>
            <p>Welcome to <strong>Mango Market Integration System</strong> – where innovation meets seamless market integration!</p>
            
            <h3>Who We Are</h3>
            <p>At Mango Market Integration System, we are a passionate team dedicated to revolutionizing the way businesses connect with their markets. Our company specializes in providing cutting-edge solutions that streamline and enhance market integration processes. With a blend of advanced technology and strategic insights, we empower businesses to operate more efficiently, make data-driven decisions, and achieve their market goals.</p>
            
            <h3>Our Mission</h3>
            <p>Our mission is to simplify market integration for businesses of all sizes. We strive to deliver robust, scalable, and user-friendly solutions that bridge the gap between technology and market needs. Our commitment is to help you unlock new opportunities, improve operational efficiency, and drive sustainable growth through effective market integration.</p>
            
            <h3>What We Do</h3>
            <ul>
                <li><strong>Advanced Integration Platforms:</strong> Our platforms seamlessly connect various market data sources, CRM systems, and business applications, ensuring that your organization operates with a unified view of market dynamics.</li>
                <li><strong>Custom Solutions:</strong> We understand that each business is unique. Our team works closely with you to develop tailored integration solutions that align with your specific requirements and objectives.</li>
                <li><strong>Data Analytics & Reporting:</strong> Gain valuable insights with our sophisticated analytics tools. Our solutions provide actionable data and reports that help you make informed decisions and stay ahead of market trends.</li>
                <li><strong>Support & Maintenance:</strong> We offer ongoing support and maintenance to ensure that your integration systems run smoothly and adapt to evolving market conditions.</li>
            </ul>
            
            <h3>Our Values</h3>
            <ul>
                <li><strong>Innovation:</strong> We are committed to staying at the forefront of technology and continuously improving our solutions to meet the ever-changing demands of the market.</li>
                <li><strong>Integrity:</strong> We conduct our business with the highest level of honesty and transparency. Our clients’ success is our success, and we build relationships based on trust and reliability.</li>
                <li><strong>Customer-Centricity:</strong> Our clients are at the heart of everything we do. We listen to your needs, understand your challenges, and provide solutions that deliver real value and results.</li>
                <li><strong>Excellence:</strong> We strive for excellence in every project and interaction. Our dedicated team of experts works tirelessly to ensure that we exceed your expectations and deliver outstanding results.</li>
            </ul>
            
            <h3>Why Choose Us?</h3>
            <p>Choosing Mango Market Integration System means partnering with a team that is as invested in your success as you are. Our blend of technological expertise, industry experience, and commitment to customer satisfaction sets us apart in the market. We are not just a service provider; we are your strategic partner in navigating and thriving in the complex landscape of market integration.</p>
            
            <h3>Join Us on Our Journey</h3>
            <p>We invite you to explore how Mango Market Integration System can transform your market integration processes and drive your business forward. Connect with us today to learn more about our solutions and discover how we can help you achieve your market goals.</p>
        </section>
        
        <section class="contact-info">
            <h3>Contact Us:</h3>
            <p><strong>Email:</strong> <a href="mailto:contact@mango-market-integration.com">contact@mango-market-integration.com</a></p>
            <p><strong>Phone:</strong> (+254) 746906462</p>
            <p><strong>Address:</strong>Tom Mboya Street Tudor, Msa</p>
            <p><strong>Website:</strong> <a href="http://www.mango-market-integration.com" target="_blank">www.mango-market-integration.com</a></p>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Mango Market Integration System. All rights reserved.</p>
    </footer>
</body>
</html>
