<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TJ HOTEL - Contact</title>
    <?php require('inc/links.php'); ?>
    
</head>

<body class="bg-light">
    <!-- Header -->
    <?php require ('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="mt-3 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero rem, fuga eaque ut
            temporibus earum laborum, blanditiis beatae ratione id necessitatibus qui, non ipsum asperiores.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe
                        class="rounded mb-4"
                        width="100%"
                        height="320"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118147.80351149273!2d70.82129635!3d22.27348695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1667021331752!5m2!1sen!2sin"
                        style="border: 0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>

                    <!-- Adress -->
                    <h5>Address</h5>
                    <a href="#https://goo.gl/maps/Dx9a9TDtpewAy6FbA" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i> Our Address click
                    </a>

                    <!-- Call Us -->
                    <h5 class="mt-4">Call Us</h5>
                    <a href="tel:+91125478951" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+91125478951</a>
                    <br />
                    <a href="tel:+91125478951" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+91125478951</a>
                    <h5 class="mt-4"><a href="#mailto:ourhotal@gmail.com" class="d-inline-block text-decoration-none text-dark mb-2"><i class="bi bi-envelope"></i> ourhotal@gmail.com</a></h5>

                    <!-- Follow us -->
                    <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block text-decoration-none mb-3 fs-5 me-2">
                            <i class="bi bi-twitter text-dark"></i>
                    </a>
                    <a href="#" class="d-inline-block text-decoration-none mb-3 fs-5 me-2">
                            <i class="bi bi-facebook text-dark"></i>
                    </a>
                    <a href="#" class="d-inline-block text-decoration-none mb-3 fs-5">
                            <i class="bi bi-instagram text-dark"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                <form action="" metod="post">
                    <h5>Send a Message</h5>
                    <div class="mt-4">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control shadow-none" />
                    </div>
                    <div class="mt-4">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control shadow-none" />
                    </div>
                    <div class="mt-4">
                        <label class="form-label">Subject</label>
                        <input type="text" class="form-control shadow-none" />
                    </div>
                    <div class="mt-4">
                        <label class="form-label">Message</label>
                        <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                    </div>
                        <button type="submit" class="btn custom-bg text-white mt-4 shadow-none">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require('inc/footer.php'); ?>