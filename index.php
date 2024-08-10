<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GadgetKu</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar container navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="assets/GadgetKu.png" width="150" alt=""></a>
            <div class="justify-content-end">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link fs-4" aria-current="page" href="#"><i class='bx bx-search'></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="#"><i class='bx bx-cart'></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-4" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class='bx bx-user'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sign in</a></li>
                            <li><a class="dropdown-item" href="#">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/carousell1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/carousell2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/carousell3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <h1 class="mt-5 text-center">Featured Products</h1>
        <div class="mt-3 d-flex justify-content-evenly">
            <div class="card" style="width: 18rem;">
                <img src="assets/smartphones.png" class="mx-auto" style="max-width:170px" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Smartphones</h5>
                    <a href="#" class="d-flex justify-content-center btn btn-primary">Check it Out!</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="assets/laptops.png" class="mx-auto" style="max-height:170px" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Laptops</h5>
                    <a href="#" class="d-flex justify-content-center btn btn-primary">Check it Out!</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="assets/wearables.png" class="mx-auto" style="max-height:170px" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Wearables</h5>
                    <a href="#" class="d-flex justify-content-center btn btn-primary">Check it Out!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
            <div class="col-md-6 p-lg-5 mx-auto my-5">
                <h1 class="display-3 fw-bold">"Smart Choices for Smarter Living"
                </h1>
                <h3 class="fw-normal text-muted mb-3">Gadget Terbaik untuk Setiap Kebutuhan Anda</h3>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                </div>
            </div>
            <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                </div>
            </div>
            <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="mt-5 text-center">GadgetKu Support</h2>
        <div class="mt-4 card-group">
            <div class="card border-light">
                <img src="assets/support.png" class="mx-auto" width="100" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Customer Support</h5>
                    <p class="card-text text-center">Contact us via live-chat, email, and phone call.</p>
                </div>
            </div>
            <div class="card border-light">
                <img src="assets/warranty.png" class="mx-auto" width="100" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Warranty</h5>
                    <p class="card-text text-center">Local warranty policy protection is provided.</p>
                </div>
            </div>
            <div class="card border-light">
                <img src="assets/guides.png" class="mx-auto" width="100" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">User Guides</h5>
                    <p class="card-text text-center">Find and download your product user guide.</p>
                </div>
            </div>
            <div class="card border-light">
                <img src="assets/faq.png" class="mx-auto" width="100" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">FAQ</h5>
                    <p class="card-text text-center">Search for help about Us.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="#" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="assets/GadgetKu.png" alt="">
                </a>
                <p class="text-body-secondary">&copy; 2024</p>
            </div>

            <div class="col mb-3">

            </div>
            <div class="col mb-3">
                <h5>Learn More</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Advertise</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Terms of Service</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Privacy Policy</a>
                    </li>
                </ul>
            </div>

            <div class="col mb-3">
                <ul class="nav flex-column">
                    <h5>Social Media</h5>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Instagram</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Facebook</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Tiktok</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Youtube</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Get In Touch</h5>
                <p>Jl. Slamet Riyadi, Surakarta, Jawa Tengah, Indonesia</p>
                <br>
                (+62)812-xxxx-xxxx-xxxx <br>
                gadgetku.tech@gmail.com
            </div>
        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>