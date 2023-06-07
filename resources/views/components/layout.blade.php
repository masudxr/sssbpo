<!doctype html>
<title>SSS</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="resources/css/app.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@3.10.3/dist/alpine.min.js" defer></script>

<style>
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
        background-image: url(/images/banner.webp);
        background-color: #cccccc;
        margin-bottom: 20px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border: 1px solid #e0dfda;
        padding: 25px;
        width: 2000px;
        height: 386px;
        margin-left: 168px;
        border-radius: 10px;
    }

    .container h2 {
        padding-top: 140px;
        color: #e0dfda;
    }

    .gallery-one {
        width: 436px;
        height: auto;
        margin: 10px 10px;
        margin-left: 80px;
        border: 1px solid #e0dfda;

    }

    .gallery-two {
        width: 455px;
        height: 285px;
        margin: 10px 10px;
        margin-left: 80px;
        border: 1px solid #e0dfda;

    }

    .gallery-three {
        width: 543px;
        height: 286px;
        margin: 10px 10px;
        margin-left: 80px;
        border: 1px solid #e0dfda;
    }

    .about {
        text-align: center;
        width: 1200px;
        margin-left: 279px;
        padding: 10px 10px;
    }
    .teamrow
    {
        border: 3px solid blue;
    }

    .team-one {
        width: 325px;
        height: 325px;
        margin: 10px 20px;
        margin-left: 120px;
        text-align: center;
        border: 1px solid red;
    }

    .team-two {
        width: 325px;
        height: 325px;
        margin: 10px 20px;
        margin-left: 80px;
        text-align: center;
        border: 1px solid red;

    }

    .team-three {
        width: 325px;
        height: 325px;
        margin: 10px 10px;
        margin-left: 80px;
        border: 1px solid red;
        text-align: center;

    }
    .morebutton
    {
        margin-top: 180px;
        margin-left: 20px;
    }

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
        }
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <!-- Topbar Start -->
    <!-- Topbar End -->
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/images.png" alt="SSS Logo" width="20%" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                <a href="/" class="ml-6 text-xs font-bold uppercase">Home</a>
                <a href="#services" class="ml-6 text-xs font-bold uppercase">Services</a>
                <a href="#about" class="ml-6 text-xs font-bold uppercase">About Us</a>
                <a href="#gallery" class="ml-6 text-xs font-bold uppercase">Gallery</a>
                <a href="#blog" class="ml-6 text-xs font-bold uppercase">Blog</a>
                <a href="#team" class="ml-6 text-xs font-bold uppercase">Team</a>
                <a href="#contact" class="ml-6 text-xs font-bold uppercase">Contact Us</a>
                <span class="ml-6 text-xs font-bold uppercase">{{auth()->user()->name}}</span>
                <form method="POST" action="logout" class="text-xs fonr-semibold text-blue-500 ml-6">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
                @else
                <a href="#home" class="ml-6 text-xs font-bold uppercase">Home</a>
                <a href="#services" class="ml-6 text-xs font-bold uppercase">Services</a>
                <a href="#about" class="ml-6 text-xs font-bold uppercase">About Us</a>
                <a href="#gallery" class="ml-6 text-xs font-bold uppercase">Gallery</a>
                <a href="#blog" class="ml-6 text-xs font-bold uppercase">Blog</a>
                <a href="#team" class="ml-6 text-xs font-bold uppercase">Team</a>
                <a href="#contact" class="ml-6 text-xs font-bold uppercase">Contact Us</a>
                @endauth

                <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>
        {{ $slot }}
        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest Update</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>