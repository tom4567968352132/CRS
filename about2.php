<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

    <style>
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 30px 0;
        }

        .footer ul {
            list-style-type: none;
            padding-left: 0;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer ul li a:hover {
            text-decoration: underline;
        }

        .footer svg {
            margin-right: 5px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/logo2.jpg" alt="logo" height="100%" width="50%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about2.php">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="tour2.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Pricing
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="pricing_.php">Regional pricing</a>
                            <a class="dropdown-item" href="pricing22.php">Non-local pricing</a>
                            <a class="dropdown-item" href="tour2.php">According To Requirement</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="caontact2.php">Contact Us</a></li>
                    <li class="nav-item btn" id="loginButton"><a class="nav-link" href="#">Sign-in</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="login-container" id="loginContainer">
        <form class="login-form" id="login">
            <span style="font-size: 8rem;" class="close" id="close">&times;</span>
            <h3>Login</h3>
            <input type="email" placeholder="Email" class="box">
            <input type="password" placeholder="Password" class="box" id="password">
            <!-- <p><a href="#" style="text-decoration: none; color:red;">Forgot password</a></p> -->
            <button type="submit" class="btn fs-2">Login Now</button>
            <p>or login with</p>
            <div class="button">
                <a style="text-decoration: none;" href="Home.php"
                    class="btn btn-outline-danger p-3 px-5 fs-4 me-5">Google</a>
                <a style="text-decoration:none;" href="Home.php"
                    class="btn btn-outline-danger p-3 px-5 fs-4">Facebook</a>
            </div><br>
            <p>Don't have an account? <a style="text-decoration: none; color: red;" href="register.php">Create one</a>
            </p>
        </form>
    </div>

    <main>

        <div class="container">
            <h3 class="text-center mb-0">Welcome to Car Rental</h3>
            <hr class="m-auto w-50" style="color: red;"><br>
            <div class=" row">

                <div class="col-lg-6">
                    <p>At Car Rent, we specialize in providing premium car rental services that prioritize convenience
                        and
                        affordability. Whether you're traveling for business or leisure, our fleet of meticulously
                        maintained
                        vehicles ensures that you find the perfect ride to suit your needs.</p>

                    <h4>Our Commitment</h4>
                    <p>Since 2024, we have been committed to exceeding our customers' expectations with exceptional
                        service and
                        a wide range of vehicles to choose from. Our goal is to make your car rental experience seamless
                        and
                        stress-free, allowing you to focus on enjoying the journey.</p>

                    <div class="container text-start">
                        <h4>Cars IBE</h4>
                        <p>Turn Key Online Car Booking System With Worldwide Inventory</p>
                        <ul>
                            <li><strong>Partnered with 18+ car brands</strong></li>
                            <li><strong>Rental cars in 190+ countries</strong></li>
                            <li><strong>Over 28,100 pick-up and drop-off locations</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img style="margin-top: -2rem;" src="assets/5.png" alt="" height="100%" width="100%">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img style="margin-top: -8rem;" src="assets/4.png" alt="" height="100%" width="100%">
                </div>
                <div class="col-lg-6">
                    <h4>features</h4>
                    <ul>
                        <li><strong>Variety and Quality:</strong> From compact cars to spacious SUVs, we offer a diverse
                            selection of vehicles equipped with the latest features.</li>
                        <li><strong>Convenience:</strong> With multiple locations conveniently located in India, picking
                            up and
                            returning your rental is always straightforward.</li>
                        <li><strong>Customer Satisfaction:</strong> Our dedicated team is here to assist you every step
                            of the
                            way, ensuring that your rental experience is nothing short of exceptional.</li>
                    </ul>

                    <h4>Our Mission</h4>
                    <p>To redefine the car rental industry by providing unmatched customer service, a diverse fleet of
                        vehicles,
                        and competitive pricing, making us the preferred choice for travelers worldwide.</p>
                    <h4>Get in Touch</h4>
                    <p>Ready to explore the world with CarRental? Browse our fleet online, or <a class="text-bg-danger"
                            href="caontact2.php">contact
                            us</a> today to speak with one of our friendly representatives. We look forward to helping
                        you
                        embark on your next adventure!</p>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <h3 style="margin-top: -1rem;" class="text-center pb-3">My Cars For Rent</h3>
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="1_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/celerio vxi.webp"
                        alt="Hero image - explore">
                </a>
                <p class="text-center">celerio</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="2_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/Hyundai Grand i10 Nios.jpg"
                        alt="Papeete cityscape">
                </a>
                <p class="text-center">Hyundai Grand i10 Nios</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="3_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/maruti alto k10.webp"
                        alt="Tevaitoa beach">
                </a>
                <p class="text-center">maruti alto k10</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="4_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/maruti suzuki alto 800.webp"
                        alt="Maharepa resort">
                </a>
                <p class="text-center">maruti suzuki alto 800</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="5_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/Maruti Suzuki Ertiga.jpg"
                        alt="Pihaena beach view">
                </a>
                <p class="text-center">Maruti Suzuki Ertiga</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="6_.pphp">
                    <img class="img-fluid border-rounded img-equal-height" src="images/Maruti Suzuki S-Presso.jpg"
                    alt="Punaauia seaside">
                </a>
                <p class="text-center">Maruti Suzuki S-Presso</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="7_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/maruti wagon.jpg"
                        alt="Hero image - explore">
                </a>
                <p class="text-center">maruti wagon </p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="8_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/renault kwid.webp"
                        alt="Papeete cityscape">
                </a>
                <p class="text-center">renault kwid

                </p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="9_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/tata tigon.webp"
                        alt="Tevaitoa beach">
                </a>
                <p class="text-center">tata tigon</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="10_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/Toyota Camry.jpg"
                        alt="Maharepa resort">
                </a>
                <p class="text-center">Toyota Camry</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="11_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/11.jpg" alt="Pihaena beach view">
                </a>
                <p class="text-center">MG</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="12_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/6.jpg" alt="Punaauia seaside">
                </a>
                <p class="text-center">2016 Volkswagen Beetle

                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="13_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/7.jpg"
                        alt="Hero image - explore">
                </a>
                <p class="text-center">Mitsubishi Pajero </p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="14_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/8.jpg" alt="Papeete cityscape">
                </a>
                <p class="text-center">Lamborgini</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="15_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/9.jpg" alt="Tevaitoa beach">
                </a>
                <p class="text-center">Mazda</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="16_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/10.jpg" alt="Maharepa resort">
                </a>
                <p class="text-center">Smart</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="17_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/11.jpg" alt="Pihaena beach view">
                </a>
                <p class="text-center">Mahindra Scorpio</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="18_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/12.jpg" alt="Punaauia seaside">
                </a>
                <p class="text-center">Geely</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-sm-6">

            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="1_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/19.jpg" alt="Papeete cityscape">
                </a>
                <p class="text-center">Van</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="2_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/10.jpg" alt="Tevaitoa beach">
                </a>
                <p class="text-center">Dacia Sandero</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="2_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/12.jpg" alt="Maharepa resort">
                </a>
                <p class="text-center">Smart Fortwo</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="4_.php">
                    <img class="img-fluid border rounded img-equal-height" src="images/7.jpg" alt="Pihaena beach view">
                </a>
                <p class="text-center">Hyundai Sonata</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">

            </div>
        </div>
    </div>

    <div class="container-fluid text-light footer">
        <div class="container">
            <br>
            <div class="row g-3">
                <div class="col-lg-4 col-md-12 ps-5">
                    <h4>Fleet</h4>
                    <ul>
                        <li><a href="17_.php">Mahindra Scorpio</a></li>
                        <li><a href="18_.php">Hyundai Exter</a></li>
                        <li><a href="16_.php">NIssan 350Z</a></li>
                        <li><a href="15_.php">Maruti Suzuki</a></li>
                        <li><a href="14_.php">Lamborgini</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 ps-5 me-5">
                    <h4>Contact</h4>
                    <p class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>Dalwi Wasti Ward no.7, Near jethar Hospital, Shrirampur</p>
                    <p class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>91+8080762949</p>
                    <p class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>91+7666381236</p>
                    <p class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                            class="bi bi-envelope-paper" viewBox="0 0 16 16">
                            <path
                                d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267zm13 .566v5.734l-4.778-2.867zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083zM1 13.116V7.383l4.778 2.867L1 13.117Z" />
                        </svg>chetandhamgunde@gmail.com</p>
                </div>

                <div class="col-lg-3 col-md-12 ps-5">
                    <h2 class="section__title">Contact Us</h2>
                    <div class="social__icons">
                        <a href="https://www.facebook.com/login/"><i class="ri-facebook-fill"></i></a>
                        <a href="Home.html"><i class="ri-twitter-fill"></i></a>
                        <a
                            href="https://www.instagram.com/accounts/login/?next=%2Fproud.mp%2Ffeed%2F&source=profile_feed_tab"><i
                                class="ri-instagram-line"></i></a>
                        <a href="https://www.linkedin.com/in/chetandhamgunde/"><i class="ri-linkedin-fill"></i></a>
                    </div>
                </div>
            </div>

            <p class=" text-center text-light">&copy All Right Reserved By Car Rent</p>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="JS.js"></script>
</body>

</html>