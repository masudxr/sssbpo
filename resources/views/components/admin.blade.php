<!doctype html>

<title>ADMIN SMOKE IT</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="./css/vendors/flatpickr.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@3.10.3/dist/alpine.min.js" defer></script>
<script>
    if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
        document.querySelector('html').classList.remove('dark');
        document.querySelector('html').style.colorScheme = 'light';
    } else {
        document.querySelector('html').classList.add('dark');
        document.querySelector('html').style.colorScheme = 'dark';
    }
</script>

<style>
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
        /* border: 1px solid #ddd; */
        padding: 8px;
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
        background-image: url("/images/banner.webp");
        background-color: #cccccc;
        margin-bottom: 20px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 1550px 650px;
        border: 1px solid black;
        padding: 25px;

    }

    .container h2 {
        color: black;
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
        background-color: #f7f7f7;
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
        color: #ffffff;
        text-decoration: none;
        font-weight: 300;
        color: #bbbbbb;
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

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
        }
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                <!-- <a href="dashboard/team" class="ml-6 text-xs font-bold uppercase">Add New Member</a>
                <a href="dashboard/index" class="ml-6 text-xs font-bold uppercase">All Members</a> -->
                <!-- <a href="#about" class="ml-6 text-xs font-bold uppercase"></a> -->
                <span class="ml-6 text-xs font-bold uppercase">{{auth()->user()->name}}</span>
                <form method="POST" action="logout" class="text-xs fonr-semibold text-blue-500 ml-6">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
                @else
                <!-- <a href="#about" class="ml-6 text-xs font-bold uppercase">About Us</a> -->
                @endauth
            </div>
        </nav>
        {{ $slot }}
    </section>
</body>