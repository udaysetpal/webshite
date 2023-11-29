 <!-- Footer -->
 <div class="container-fluid bg-white mt-5">
            <div class="row">
                <div class="col-lg-4 p-4">
                    <h3 class="h-font fw-bold fs-3 mb-2">TJ HOTEL</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, facere consequatur. Fugiat saepe mollitia commodi sint facere, quia voluptatibus impedit.</p>
                </div>
                <div class="col-lg-4 p-4">
                    <h5 class="mb-3">Links</h5>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Home</a><br />
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Rooms</a><br />
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Facilites</a><br />
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Contact Us</a><br />
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">About</a>
                </div>
                <div class="col-lg-4 p-4">
                    <h5 class="mb-3">Follow Us</h5>
                    <a href="#" class="d-inline-block text-decoration-none mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i>
                            Twitter
                        </span>
                    </a>
                    <br />
                    <a href="#" class="d-inline-block text-decoration-none mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>
                            Facebook
                        </span>
                    </a>
                    <br />
                    <a href="#" class="d-inline-block text-decoration-none">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>
                            Instragram
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <h6 class="text-center bg-dark text-white p-3 m-0">&#169; All Right Reserved</h6>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <script>
            //   <!-- index Initialize Swiper -->
            var swiper = new Swiper(".swiper-container", {
                spaceBetween: 30,
                effect: "fade",
                loop: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
            });

            //    <!-- index Testimonials Swiper -->
            var swiper = new Swiper(".swiper-testimonials", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                slidesPerView: "3",
                loop: true,
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });

            // <!-- About Initialize Swiper -->
            var swiper = new Swiper(".mySwiper", {
                slidesPerView : 4,
                spaceBetween: 40,
                pagination: {
                el: ".swiper-pagination",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 1,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });

        </script>
            
    </body>
</html>