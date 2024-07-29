<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />


</head>

<body id="body">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="CRS/images/logo2.jpg" alt="logo" height="100%" width="50%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="tour.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Pricing
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="pricing.php">Regional pricing</a>
                            <a class="dropdown-item" href="pricing2.php">Non-local pricing</a>
                            <a class="dropdown-item" href="tour.php">According To Requirement</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="caontact.php">Contact Us</a></li>
                    <li class="nav-item btn"><a class="nav-link" href="index.php">Sign-out</a></li>
                    <li><button type="button" onclick="night()" class="btn">NIGHT</button>
                        <button type="button" onclick="day()" class="btn">DAY</button>
                    </li>
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

    <main class="container-fluid hero">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="CRS/images/10.jpg" class="img-fluid" alt="Image 1">
                    <div class="overlay">
                        <h2>Luxury Cars</h2>
                        <p>Explore our fleet of luxurious cars for your comfort and style.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="CRS/images/16.jpg" class="img-fluid" alt="Image 2">
                    <div class="overlay">
                        <h2>Family SUVs</h2>
                        <p>Discover spacious SUVs designed to accommodate your family adventures.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="CRS/images/19.jpg" class="img-fluid" alt="Image 3">
                    <div class="overlay">
                        <h2>City Commuters</h2>
                        <p>Efficient and compact cars perfect for navigating city streets.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <br><br>
    <section>
        <div class="container-fluid py-2 freelancing">
            <div class="container-fluid overlay2">
                <div class="text-center">
                    <h3 class="mb-4 fw-bold text-light">Our Services</h3>
                </div>
                <div class="row g-4 py-0">
                    <div class="col-lg-3 col-sm-6">
                        <div class="pt-3">
                            <div class="p-4 service">
                                <i
                                    class="fas fa-car-battery d-flex justify-content-center align-items-center fa-6x"></i>
                                <h4 class="text-center">Battery Backup</h4>
                                <p class="text-center"> long journey including the visiting of a number of places in
                                    sequence, especially
                                    with
                                    an organized group led by a guide. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pt-3 ">
                            <div class="p-4 service">
                                <i class="fas fa-car d-flex justify-content-center align-items-center fa-6x"></i>
                                <h4 class="text-center">car Insurance</h4>
                                <p class="text-center">Hotel reservation systems make business easier; they allow
                                    hoteliers to work more
                                    smartly, accurately and efficiently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pt-3">
                            <div class="p-4 service">
                                <i class="fas fa-tools d-flex justify-content-center align-items-center fa-6x"></i>
                                <h4 class="text-center">Parts Repair</h4>
                                <p class="text-center">A travel guide can include information on the various sites,
                                    hotels, restaurants,
                                    transportation, and easiest activities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pt-3">
                            <div class="p-4 service">
                                <i class="fas fa-gas-pump d-flex justify-content-center align-items-center fa-6x"></i>
                                <h4 class="text-center">Event Management</h4>
                                <p class="text-center">Develops and recommend the budget, marketing plans, and
                                    objectives and manages within
                                    those approved plans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pt-3">
                            <div class="p-4 service">
                                <i class="fas fa-headset d-flex justify-content-center align-items-center fa-6x"></i>
                                <h4 class="text-center">24/7 Support</h4>
                                <p class="text-center">Gives scheduled flight information, including origin,
                                    destination, departure time,
                                    arrival time, flight time, travel time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pt-3">
                            <div class="p-4 service">
                                <i class="fas fa-wrench d-flex justify-content-center align-items-center fa-6x"></i>
                                <h4 class="text-center">Car Repair</h4>
                                <p class="text-center">A travel insurance policy covers various kinds of financial
                                    losses that one might
                                    encounter during their travel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pt-3">
                            <div class="p-4 service">
                                <i class="fas fa-warehouse d-flex justify-content-center align-items-center fa-6x"></i>
                                <h4 class="text-center">Car Selling</h4>
                                <p class="text-center">It rents automobiles for short periods of time to the
                                    public, generally ranging from a few hours to a few weeks. It is beter one</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pt-3">
                            <div class="p-4 service">
                                <i
                                    class="fas fa-truck-monster d-flex justify-content-center align-items-center fa-6x"></i>
                                <h4 class="text-center">Online Booking</h4>
                                <p class="text-center">Online booking is a company that can book their favourate
                                    destination with departure
                                    time and the best time of year!.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>

        <section class="vehicle"><br>
            <h3 class="text-center">Our Best Vehicles</h3><br>
            <div class="vehicle-slider swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide d-flex flex-column">
                        <div>
                            <img src="CRS/images/12.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4 class="text-center">Volkwagen Beetle</h4>
                            <div class="price">Price: 620/1hr</div>
                            <p>
                                New 2024 Automatic Petrol 183mph
                            </p>
                            <a href="index2.php">Check Out</a>
                        </div>
                    </div>
                    <div class="swiper-slide d-flex flex-column">
                        <div>
                            <img src="CRS/images/13.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4>Mltsubishi Pajero</h4>
                            <div class="price">Price: 520/1hr</div>
                            <p>
                                New 2024 Automatic Petrol 283mph
                            </p>
                            <a href="index2.php">Check Out</a>
                        </div>
                    </div>
                    <div class="swiper-slide d-flex flex-column">
                        <div>
                            <img src="CRS/images/14.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4>McLaren 650S</h4>
                            <div class="price">Price: 420/1hr</div>
                            <p>
                                New 2024 Automatic Petrol 153mph
                            </p>
                            <a href="index2.php">Check Out</a>
                        </div>
                    </div>
                    <div class="swiper-slide d-flex d-flex flex-column">
                        <div>
                            <img src="CRS/images/17.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4>Mahindra Scorpio-N</h4>
                            <div class="price">Price: 820/1hr</div>
                            <p>
                                New 2024 Automatic Petrol 193mph
                            </p>
                            <a href="index2.php">Check Out</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <br><br>
        <section class="container-fluid">
            <h3 class="text-center mb-5">Why Choose Us?</h3>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class="ms-5 mt-5" style="box-shadow: 2rem 2rem 0 0 var(--helper);" src="CRS/images/11.jpg"
                        alt="" width="80%" height="80%">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="reasons">
                        <h4><span style="font-size: 3rem;">&rarr;</span> Variety of Vehicles</h4>
                        <p>Offering a wide range of vehicles to suit different needs and preferences, from economy cars
                            to
                            luxury vehicles, SUVs, and vans.</p>
                    </div>

                    <div class="reasons">
                        <h4><span style="font-size: 3rem;">&rarr;</span>Competitive Pricing</h4>
                        <p>Providing competitive rates and transparent pricing without hidden fees, ensuring customers
                            get
                            value
                            for their money.</p>
                    </div>

                    <div class="reasons">
                        <h4><span style="font-size: 3rem;">&rarr;</span>Convenience</h4>
                        <p>Making the rental process convenient with online booking options, flexible pick-up and
                            drop-off
                            locations, and efficient customer service.</p>
                    </div>

                    <div class="reasons">
                        <h4><span style="font-size: 3rem;">&rarr;</span>Quality of Service</h4>
                        <p>Ensuring excellent customer service with responsive support, well-maintained vehicles, and
                            clear
                            communication throughout the rental period.</p>
                    </div>

                    <div class="reasons">
                        <h4><span style="font-size: 3rem;">&rarr;</span>Trustworthiness</h4>
                        <p>Building trust through a reliable reputation, positive customer reviews, and adherence to
                            industry
                            standards and regulations.</p>
                    </div>

                    <div class="reasons">
                        <h4><span style="font-size: 3rem;">&rarr;</span>Accessibility</h4>
                        <p>Providing accessible services for international travelers, including multilingual support and
                            options
                            for international driver permits.</p>
                    </div>

                    <div class="reasons">
                        <h4><span style="font-size: 3rem;">&rarr;</span>Flexibility</h4>
                        <p>Allowing flexibility with rental durations, mileage allowances, and options for insurance
                            coverage to
                            meet diverse customer needs.</p>
                    </div>
                </div>
        </section>
        <br>
        <div class="container-fluid text-light footer">
            <div class="container">
                <br>
                <div class="row g-3">
                    <div class="col-lg-4 col-md-12 ps-5">
                        <h4>Fleet</h4>
                        <ul>
                            <li><a href="17.php">Mahindra Scorpio</a></li>
                            <li><a href="18.php">Hyundai Exter</a></li>
                            <li><a href="16.php">Nissan 350Z</a></li>
                            <li><a href="15.php">Maruti Suzuki</a></li>
                            <li><a href="14.php">Lamborgini</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12 ps-5 me-5">
                        <h4>Contact</h4>
                        <p class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="white" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg>Dalwi Wasti Ward no.7, Near jethar Hospital, Shrirampur</p>
                        <p class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="white" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>91+8080762949</p>
                        <p class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="white" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>91+7666381236</p>
                        <p class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="white" class="bi bi-envelope-paper" viewBox="0 0 16 16">
                                <path
                                    d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267zm13 .566v5.734l-4.778-2.867zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083zM1 13.116V7.383l4.778 2.867L1 13.117Z" />
                            </svg>chetandhamgunde@gmail.com</p>
                    </div>

                    <div class="col-lg-3 col-md-12 ps-5">
                        <h2 class="section__title">Contact Us</h2>
                        <div class="social__icons">
                            <a href="https://www.facebook.com/login/"><i class="ri-facebook-fill"></i></a>
                            <a href="Home.php"><i class="ri-twitter-fill"></i></a>
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
        <script>
            function day() {
                body.className = 'day';
            }
            function night() {
                body.className = 'night';
            }
        </script>

</body>

</html>