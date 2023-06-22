<!doctype html>

<title>SMOKE IT</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="../../css/app.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@3.10.3/dist/alpine.min.js" defer></script>

<style>
    body {
        background-color: rgb(231 229 228);
        margin: 0px 259px;
    }

    /* blog 1 CSS Start */
    .blog1 {
        padding: 10px 10px;
        border-radius: 10px;
    }

    /* blog 1 CSS End */


    html {
        scroll-behavior: smooth;
    }

    .develop {
        margin: 20px 0px;
        padding: 15px 15px;
        border-radius: 10px;
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
        width: 25%;
        padding: 10px;
        height: 300px;
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
        background-image: url("/images/banner.webp");
        background-color: #cccccc;
        margin-bottom: 20px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 1550px 650px;
        border: 1px solid black;
        padding: 25px;

    }

    .boss {
        text-align: center;
        border: #04AA6D;
    }

    .boss img {
        width: 250px;
        height: 242px;
        margin-left: 44%;
        border-radius: 485px;
    }

    .content {
        text-align: center;
        margin: 15px 31px;
    }

    .junior {
        text-align: center;
        margin: 15px 31px;
    }

    .junior img {
        width: 250px;
        height: 242px;
        /* margin-left: 44%; */
        border-radius: 485px;
    }

    .leader {
        margin: 20px 20px;
        margin-left: 27%;
    }

    .co-leader {
        margin: 20px 20px;
        margin-left: 13%;
    }

    .leader img {
        width: 250px;
        height: 242px;
        border-radius: 485px;
    }

    .co-leader img {
        width: 250px;
        height: 242px;
        /* margin-left: 42%; */
        border-radius: 485px;
    }

    .serviceCover {
        background-image: url(/images/service.jpg);
        margin-bottom: 73px;
        margin-top: 50px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        /* border: 1px solid red; */
        border-radius: 10px;
        padding-top: 450px;
    }

    .design {
        color: black;
        text-align: center;
        padding: 25px 25px;
        border-radius: 10px;
    }

    .design p {
        padding-left: 250px;
        padding-right: 250px;
    }

    .galleryFirst {
        margin-left: 30px;
    }

    .photo {
        margin: 16px 25px;
    }

    .photo img {
        border-radius: 10%;
    }

    .picBack {
        background-color: #f2f2f2;
        border-radius: 5%;
    }

    .teamRow {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        padding: 0 10px;
    }

    .team-one {
        width: 325px;
        height: 325px;
        margin: 10px 20px;
        margin-left: 120px;
        text-align: center;
        /* border: 1px solid black; */
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
        border-radius: 50%;
        border: 1px solid black;

    }

    .team-two img {
        border: 1px solid black;
        border-radius: 50%;
    }

    .team-three img {
        border: 1px solid black;
        border-radius: 50%;
    }

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

    ul {
        list-style: none;
    }

    .footer {
        padding: 70px 0;
        margin: 0px 2px;
        border-radius: 10px;
        margin-top: 8px;
        color: black;
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

    /*responsive*/
    @media(max-width: 767px) {
        .footer-col {
            width: 50%;
            margin-bottom: 30px;
        }
    }

    @media(max-width: 574px) {
        .footer-col {
            width: 100%;
        }
    }

    /* footer end */

    #gallery {
        border: #04AA6D;
        margin-left: 145px;
        margin-top: 20px;
        margin-bottom: 5px;

    }

    .gallery-one {
        width: 16%;
        height: auto;
        margin: 14px 0px;
        margin-left: 80px;

    }

    .gallery-two {
        width: 16%;

        height: auto;
        margin: 14px 0px;
        margin-left: 80px;

    }

    .gallery-three {
        width: 16%;

        height: auto;
        margin: 14px 0px;
        margin-left: 80px;
    }

    .gallery-four {
        width: 16%;

        height: auto;
        margin: 14px 0px;
        margin-left: 80px;
    }

    .propertyCover {
        background-image: url(/service/property.jpg);
        margin-bottom: 73px;
        margin-top: 48px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        padding-top: 629px;
    }

    .property {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

    .property-one {
        width: 26%;
        height: max-content;
        margin: 19px 16px;
        border: 1px solid black;
    }

    .mx-12 {
        margin-left: 49rem;
        margin-right: 49rem;
    }

    /* property service End */
    /* Call service Start */
    .callCover {
        background-image: url(/service/call-cover.png);
        margin-bottom: 73px;
        margin-top: 48px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border-radius: 10px;
        padding-top: 672px;
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

    .column3 {
        float: left;
        width: 48%;
        padding: 7px 7px;
        height: 350px;
        margin: 0px 8px;
        margin-left: 18px;
        margin-top: 65px;
        text-align: center;
        color: black;
        padding-top: 0px;
        border: 1px solid whitesmoke;
        filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));
    }

    /* Call service End */



    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
        }
    }

    /* slider call services */
    body {
        font-family: Verdana, sans-serif;
        margin: 0
    }

    .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

        .prev,
        .next,
        .text {
            font-size: 11px
        }
    }

    /* web Header */
    .webHeader p {
        padding-left: 410px;
        padding-right: 410px;

    }

    .col-1 {
        padding-left: 250px;
        padding-top: 163px;
        padding-right: 82px;
    }

    .col-2 img {
        border-radius: 20px;
        border: 1px solid black;
    }

    .col-2 {
        padding-right: 250px;
        padding-top: 25px;

    }

    .col-1 img {
        border-radius: 20px;
        border: 1px solid black;
    }

    .col-3 {
        padding-left: 250px;
        padding-top: 163px;
        padding-right: 82px;
    }

    /* virtual start*/
    .virtual {
        background-image: url(/service/virtual.webp);
        margin-bottom: 73px;
        margin-top: 50px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border-radius: 10px;
        height: 721px;
    }

    .virtual h2 {
        font-weight: bold;
    }

    .vir-content {
        padding: 18px 18px;
        font-size: 18px;
        border-radius: 10px;
    }

    .vir {
        border-radius: 10px;
    }

    .vir img {
        width: 250px;
        height: 242px;
        border-radius: 10px;
    }

    .virtu {
        text-align: center;
        margin: 15px 31px;
    }

    .virtual-Main {
        display: flex;
        margin-right: 261px;
        margin-left: 256px;
    }

    .virtual-Main .child {
        border: 1px solid whitesmoke;
        padding: 37px 19px;
        margin: 10px 10px;
        filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));

    }

    .vHeader {
        margin-bottom: 15px;
        padding: 0px 256px;
    }

    .main {
        background-color: #f9fafb;
        margin: 0px 259px;
    }

    .mother {
        padding-left: 310px;
        padding-right: 125px;
    }

    .baby {
        border: 1px solid whitesmoke;
        padding: 37px 98px;
        margin: 10px 10px;
        filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));
    }

    /* Virtual End */
    /* property service Start */

    .pfather {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        margin-bottom: 40px;
    }

    .pbaby {
        border: 1px solid whitesmoke;
        filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));
        padding: 20px 20px;
    }

    .pbaby li {
        color: black;
    }

    .lastPart {
        margin: 10px 10px;
    }

    .lastPart h3 {
        padding-left: 250px;
        padding-right: 250px;
    }

    .update h2 {
        padding-left: 250px;
        padding-right: 250px;
    }

    /* property service End */
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
                <a href="/" class="ml-6 text-xl font-bold uppercase">Home</a>
                <span class="ml-6 text-xs font-bold uppercase">{{auth()->user()->name}}</span>
                <form method="POST" action="logout" class="text-xs fonr-semibold text-blue-500 ml-6">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
                @else
                <a href="/" class="ml-6 text-xl font-bold uppercase">Home</a>
                @endauth
            </div>
        </nav>
        {{ $slot }}
        <footer class="footer">
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
                            <li><a href="#">payment options</a></li>
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
    </section>
</body>