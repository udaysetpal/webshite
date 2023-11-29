<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TJ HOTEL</title>
    <link rel="stylesheet" href="style.css">
    <?php require('inc/links.php'); ?>
    <style>
        
    </style>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg bg-white navbar-light px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">TJ HOTAL</a>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="rooms.php">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="facilities.php">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="contact-us.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="about.php">About</a>
                        </li>
                    </ul>
                    <div class="d-flex" role="search">
                        <!-- Button trigger modal For Login -->
                        <button type="button" class="btn btn-outline-dark me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Login
                        </button>
                        <!-- Button trigger modal For Register -->
                        <button type="button" class="btn btn-outline-dark me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Modal For Login -->
        <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" metod="post">
                        <div class="modal-header">
                            <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-3"></i> User Login</h5>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none" />
                            </div>
                            <div class="mb-2 form-check">
                                <input type="checkbox" class="form-check-input shadow-none" />
                                <label class="form-check-label">Check me out</label>
                            </div>
                        </div>
                        <div class="m-3 d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal For Register -->
        <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="" metod="post">
                        <div class="modal-header">
                            <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-3"></i> User Login</h5>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base"> Note: Your details must with your ID (Aadhaar Card, Passport, Driving Lincense, etc.) that will be required during check-in.</span>
                            <div class="countainer-fluid">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control shadow-none" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control shadow-none" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" class="form-control shadow-none" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Picture</label>
                                        <input type="file" class="form-control shadow-none" />
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Adress</label>
                                        <textarea class="form-control shadow-none" name="adress" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Pincode</label>
                                        <input type="number" class="form-control shadow-none" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label cass="form-label">Date of Birth</label>
                                        <input type="date" class="form-control shadow-none" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control shadow-none" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Conform Password</label>
                                        <input type="password" class="form-control shadow-none" />
                                    </div>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-dark shadow-none">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>