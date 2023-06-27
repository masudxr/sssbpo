<!doctype html>
<title>SMOKE IT</title>
<!-- <meta name="viewport" content="width=device-width, initial-seale=1.0"> -->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@3.10.3/dist/alpine.min.js" defer></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<style>
    body {
        background-color: rgb(231 229 228);
        margin: 0px 259px;
    }

    .main {
        background-color: #f9fafb;
    }

    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }

    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }

    * {
        box-sizing: border-box;
    }

    /* Create three equal columns that floats next to each other */
    .column {
        float: left;
        width: 24%;
        padding: 7px;
        height: 300px;
        border: 1px solid #e0dfda;
        margin: 2px 2px;
        margin-left: 15px;
        background-color: white;
        border-radius: 10px;
    }

    .media {
        float: left;
        width: 33.33%;
        padding: 7px;
        height: 300px;
        border: 1px solid #e0dfda;
        /* margin: 1px; */
        /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .column2 {
        float: left;
        width: 50%;
        padding: 10px;
        height: 300px;
        /* Should be removed. Only for demonstration */
    }

    .container {
        background-image: url(/banner/banner1.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 515px;
        padding: 62px;
        margin-left: 231px;
    }

    .container h2 {
        color: black;
    }

    #gallery {
        border: #04AA6D;
    }

    .gallery-one {
        width: 22%;
        height: auto;
        margin: 10px 10px;
        border: 1px solid #e0dfda;
    }

    .gallery-two {
        width: 22%;
        height: auto;
        margin: 10px 10px;
        border: 1px solid #e0dfda;

    }

    .gallery-three {
        width: 22%;
        height: auto;
        margin: 10px 10px;
        border: 1px solid #e0dfda;
    }

    .about {
        text-align: center;
        width: 100%;
        padding: 10px 10px;
        background-image: url(/images/contact.jpg);
        background-color: #cccccc;
        margin-bottom: 20px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        padding-right: 125px;
        padding-top: 154px;
        border-radius: 10px;
    }

    .about p {
        color: whitesmoke;
    }

    .teamrow {
        border: 3px solid blue;
    }

    .team-one {
        width: 325px;
        height: 325px;
        margin: 10px 20px;
        margin-left: 120px;
        text-align: center;
    }

    .team-two {
        width: 325px;
        height: 325px;
        margin: 10px 20px;
        margin-left: 80px;
        text-align: center;
    }

    .team-three {
        width: 325px;
        height: 325px;
        margin: 10px 10px;
        margin-left: 80px;
        text-align: center;
    }

    .team-one img {
        border: 1px solid black;
        border-radius: 50%;
    }

    .team-two img {
        border: 1px solid black;
        border-radius: 50%;
    }

    .team-three img {
        border: 1px solid black;
        border-radius: 50%;
    }

    .morebutton {
        margin-top: 180px;
        margin-left: 20px;
    }

    /* service */
    .service {
        margin-bottom: 73px;
        margin-top: 50px;
        color: white;
        /* background-color: blue; */

    }

    .column3 {
        float: left;
        width: 22%;
        padding: 0px;
        margin: 0px 13px;
        margin-left: 12px;
        margin-top: 17px;
        text-align: center;
        color: black;
        padding-top: 0px;
        background-color: #f9fafb;
        filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));
    }

    .column3 img {
        border-radius: 75%;
    }

    .text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem;
        padding: 0px 55px;
    }

    .text-4xl {
        color: black;
    }

    /* slider banner show start */
    .slider {
        overflow: hidden;
        width: 100vw;
        height: 31vh;
        position: relative;
        margin-top: 20px;
        border-radius: 10px;
    }

    .slider .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 500px;
        background-size: cover;
        background-position: center;
        animation: slide 10s infinite;
    }

    @keyframes slide {

        0%,
        15%,
        100% {
            transform: translateX(0);
            animation-timing-function: ease;
        }

        20% {
            transform: translateX(-100%);
            animation-timing-function: step-end;
        }

        95% {
            transform: translateX(100%);
            animation-timing-function: ease;
        }
    }

    .slider .slide:nth-child(1) {
        background-image: url(/banner/banner.jpg);
        animation-delay: 0;
    }

    .slider .slide:nth-child(2) {
        background-image: url(/banner/banner1.jpg);
        animation-delay: -12s;
    }

    .slider .slide:nth-child(3) {
        background-image: url(/banner/banner2.jpg);
        animation-delay: -14s;
    }

    .slider .slide:nth-child(4) {
        background-image: url(/banner/banner3.jpg);
        animation-delay: -16s;
    }

    .slider .slide:nth-child(5) {
        background-image: url(/banner/banner2.jpg);
        animation-delay: -18s;
    }

    /* slider banner show End */
    /* footer Start */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    .fo-container {
        max-width: 1170px;
        margin: auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .serviceRow {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        padding: 0 10px;
    }

    .serviceRow h2 {
        padding: 13px 22px;
        margin: -7px -80px;
    }

    .teamRow {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        padding: 0 10px;
    }

    .galleryRow {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }

    ul {
        list-style: none;
    }

    .footer {
        padding: 70px 0;
        margin: 0px 2px;
        border-radius: 10px;
        margin-top: 8px;
    }

    .footer-col {
        width: 25%;
        padding: 0 15px;
    }

    .footer-col h4 {
        font-size: 18px;
        color: black;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }

    .footer-col h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }

    .footer-col ul li:not(:last-child) {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        font-size: 16px;
        text-transform: capitalize;
        color: black;
        text-decoration: none;
        font-weight: 300;
        color: black;
        display: block;
        transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: #ffffff;
        padding-left: 8px;
    }

    .footer-col .social-links a {
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(174, 200, 90, 46.2);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: black;
        transition: all 0.5s ease;
    }

    .footer-col .social-links a:hover {
        color: black;
        background-color: #ffffff;
    }

    /* footer end */

    /* Review section Start */

    .reviewContainer {
        border-radius: 10px;
        margin-bottom: 10px;
    }

    /* Review section End */

    /* partner Section Start */
    .partner {
        /* display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        padding: 0 10px; */
        border-radius: 10px;
        padding: 10px 10px;
    }

    .colm {
        float: left;
        width: 48%;
        padding: 0px;
        height: 319px;
        margin: 0px 13px;
        margin-left: 12px;
        margin-top: 65px;
        text-align: center;
        color: black;
        padding-top: 0px;
    }

    .colm img {
        width: 250px;
        height: 242px;
        border-radius: 10px;
    }

    /* partner Section End */
    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
        }

        .footer-col {
            width: 50%;
            margin-bottom: 30px;
        }

        .galleryRow {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-evenly;
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
            padding: 0px 55px;
        }

        .brand h2 {
            padding-top: 3px;
        }
    }

    .main-logo {
        justify-content: space-evenly;
    }

    .logo {
        width: 100px;
        height: 100px;
    }

    .logo img {
        border: 1px solid black;
        border-radius: 11%;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="main">
        <nav class="md:flex md:justify-between md:items-center px-6 py-8">
            <div class="brand flex">
                <a href="/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">SMOKE IT</span>
                </a>
            </div>
            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                <a href="#services" class="ml-6 text-xs font-bold uppercase">Services</a>
                <a href="#about" class="ml-6 text-xs font-bold uppercase">About Us</a>
                <a href="#gallery" class="ml-6 text-xs font-bold uppercase">Gallery</a>
                <a href="#blog" class="ml-6 text-xs font-bold uppercase">Blog</a>
                <a href="#team" class="ml-6 text-xs font-bold uppercase">Team</a>
                <a href="#contact" class="ml-6 text-xs font-bold uppercase">Contact Us</a>
                <a href="#review" class="ml-6 text-xs font-bold uppercase">Review</a>
                <span class="ml-6 text-xs font-bold uppercase">{{auth()->user()->name}}</span>
                <form method="POST" action="logout" class="text-xs fonr-semibold text-blue-500 ml-6">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
                @else
                <a href="#services" class="ml-6 text-xs font-bold uppercase">Services</a>
                <a href="#about" class="ml-6 text-xs font-bold uppercase">About Us</a>
                <a href="#gallery" class="ml-6 text-xs font-bold uppercase">Gallery</a>
                <a href="#blog" class="ml-6 text-xs font-bold uppercase">Blog</a>
                <a href="#team" class="ml-6 text-xs font-bold uppercase">Team</a>
                <a href="#contact" class="ml-6 text-xs font-bold uppercase">Contact Us</a>
                <a href="#review" class="ml-6 text-xs font-bold uppercase">Review</a>
                @endauth
            </div>
        </nav>
        {{ $slot }}
        <footer class="footer mt-8">
            <div class="fo-container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#about">about us</a></li>
                            <li><a href="#services">our services</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="payment">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Office Address</h4>
                        <ul>
                            <li><a href="#">Kashinathpur, Pabna</a></li>
                            <li><a href="#">Rajshahi</a></li>
                            <li><a href="#">Bangladesh</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://bd.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>