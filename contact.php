<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Online Shoes</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .contact-container {
            background-color: #d4bae6;
            color: black;
            height: 100vh;
            width: 100vw;
            
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);

            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contact-container h1 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }
        .contact-container address {
            font-style: normal;
            line-height: 2.5;
            margin-bottom: 20px;
        }
        .contact-container .email,
        .contact-container .phone {
            font-size: 1.2em;
            margin-bottom: 50px;
        }
        .contact-container .email a,
        .contact-container .phone a {
            color: #031934;
            text-decoration: none;
        }
        .contact-container .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .contact-container .social-icons a {
            color: black;
            font-size: 1em;
            display: inline-block;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #6967b8;
            transition: background-color 0.3s;
            margin: 5px 0;
        }
        .contact-container .social-icons a:hover {
            background-color: #c1bfe8;
        }

        @media (max-width: 600px) {
            .contact-container {
                padding: 20px;
                margin: 20px;
            }
            .contact-container h1 {
                font-size: 1.3em;
            }
            .contact-container address,
            .contact-container .email,
            .contact-container .phone {
                font-size: 1em;
            }
            .contact-container .social-icons a {
                font-size: 0.9em;
                padding: 8px 12px;
            }
        }
        @media (max-width: 400px) {
            .contact-container {
                padding: 15px;
                margin: 15px;
            }
            .contact-container h1 {
                font-size: 1.1em;
            }
            .contact-container address,
            .contact-container .email,
            .contact-container .phone {
                font-size: 0.9em;
            }
            .contact-container .social-icons a {
                font-size: 0.8em;
                padding: 6px 10px;
            }
        }
    </style>
</head>
<body>

    <div class="contact-container">

        <h1 style="font-size:xx-large; font-weight:bold">The Shoe Rack</h1>
        <address>
            A-14, 3rd Floor, Taleju Market Tower,<br>
            Sector-8, Suryabinyak, Bhaktapur-6
        </address>
        <div class="email">
            <a href="mailto:contact@onlineshoes.com">contact@onlineshoes.com</a>
        </div>
        <div class="phone">
            <a href="tel:+911234567890">+91 123 456 7890</a>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/YOUR_FACEBOOK_USERNAME" target="_blank" aria-label="Facebook">Facebook</a>
            <a href="https://www.instagram.com/YOUR_INSTAGRAM_USERNAME" target="_blank" aria-label="Instagram">Instagram</a>
            <a href="https://www.linkedin.com/company/YOUR_LINKEDIN_USERNAME" target="_blank" aria-label="LinkedIn">LinkedIn</a>
            <a href="https://www.twitter.com/YOUR_TWITTER_USERNAME" target="_blank" aria-label="Twitter">Twitter</a>
        </div>
    </div>
</body>
</html>
