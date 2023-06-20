<x-contentLayout>
    <section>
        <div class="callCover">
        </div>
    </section>
    <section class="mb-6">
        <h1 class="mt-35 mb-6 text-4xl tracking-tight text-center text-green-400 dark:text-white">
            Call Center Services !
        </h1>
        <h2 class="mt-35 mb-6 text-2xl tracking-tight text-center text-green-400 dark:text-white">
            We are Offering Two Types Of Call Center Services
        </h2>
        <div class="row flex">
            <div class="column3 rounded-lg bg-gray-100">
                <h2 class="mb-3 mt-3 font-bold uppercase text-4xl">
                    Inbound
                </h2>
                <p class="mb-2">
                    An inbound call center service focuses on receiving incoming calls from customers for your business. The main objective is to assist customers and solve their problems related to any product or service.
                </p>
                <p class="mb-2">
                    For example, a customer service representative from an internet service provider takes inbound calls about internet connection issues.
                </p>
                <p class="mb-3">
                    Some of the common inbound call center services include:
                </p>
                <ul class="text-left">
                    <li>
                        1. Chat support.
                    </li>
                    <li>
                        2. Answering service.
                    </li>
                    <li>
                        3. 24/7 hotlines.
                    </li>
                    <li>
                        4. Emergency services dispatch.
                    </li>
                </ul>
            </div>
            <div class="column3 rounded-lg bg-gray-100">
                <h2 class="mb-3 mt-3 font-bold uppercase text-4xl">Outbound</h2>
                <p class="mb-2">
                    In outbound call centers, dedicated agents make outgoing phone calls to potential or existing customers.
                </p>
                <p class="mb-2">
                    Usually, outbound services are used for telesales, customer surveys, etc.
                </p>
                <p class="mb-3">
                    You can also hire outbound call centers for services, such as:
                </p>
                <ul class="text-left">
                    <li>
                        1. Market research.
                    </li>
                    <li>
                        2. Telemarketing.
                    </li>
                    <li>
                        3. Event registration.
                    </li>
                    <li>
                        4. Promotions.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="/service/call-cover.png" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="/service/property.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="/service/community.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
    </section>
</x-contentLayout>