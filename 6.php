<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="responsive.css"> <!-- Custom CSS for responsiveness -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
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
                    <li class="nav-item"><a class="nav-link" href="Home.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pricing
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="pricing.html">Regional pricing</a>
                            <a class="dropdown-item" href="pricing2.html">Non-local pricing</a>
                            <a class="dropdown-item" href="tour.html">According To Requirement</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="caontact.html">Contact Us</a></li>
                    <li class="nav-item btn"><a class="nav-link" href="CRS/Home.html">Sign-out</a></li>
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
                <a style="text-decoration: none;" href="Home.html"
                    class="btn btn-outline-danger p-3 px-5 fs-4 me-5">Google</a>
                <a style="text-decoration:none;" href="Home.html"
                    class="btn btn-outline-danger p-3 px-5 fs-4">Facebook</a>
            </div><br>
            <p>Don't have an account? <a style="text-decoration: none; color: red;" href="register.html">Create one</a>
            </p>
        </form>
    </div>

    <main>
        <div style="padding: 0 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="CRS/images/6.jpg" alt="Car 1" class="img-fluid"
                            style="border: 4px solid red; border-radius: 20px;">
                    </div>
                    <div class="col-md-6 my-auto">
                        <div class="details">
                            <h3 class="text-center">Hyundai</h3>
                            <hr class="text-danger w-50 m-auto">
                            <p> An automobile is a usually four-wheeled vehicle designed primarily for passenger
                                transportation and commonly propelled by an internal-combustion engine using a volatile
                                fuel.</p>
                            <ul>
                                <li><strong>Engine:</strong> 2.0L Inline-4</li>
                                <li><strong>Horsepower:</strong> 200 hp</li>
                                <li><strong>Transmission:</strong> 6-Speed Automatic</li>
                                <li><strong>Top Speed:</strong> 150 mph</li>
                                <li><strong>Price per Day:</strong>1500</li>
                            </ul><br><br>
                            <h4>Key Features</h4>
                            <ul>
                                <li><strong>Fuel Efficiency</strong>: High fuel efficiency reduces costs and attracts
                                    budget-conscious
                                    renters, ideal for long trips</li>
                                <li><strong>Safety Features</strong>: Advanced safety tech like automatic braking and
                                    multiple airbags
                                    ensures peace of mind for families and business travelers.</li>
                                <li><strong>Connectivity and Infotainment</strong>: Seamless Bluetooth, USB ports, and
                                    smartphone
                                    integration satisfy modern connectivity needs for navigation and entertainment.</li>
                                <li><strong>Luggage Capacity and Versatility</strong>: Spacious trunk and flexible
                                    seating
                                    accommodate
                                    varied passenger and luggage needs, perfect for road trips and bulky items.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">

            <br>
            <section class="specs">
                <h4>Specifications</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Engine</td>
                            <td>2.0L Inline-4</td>
                        </tr>
                        <tr>
                            <td>Horsepower</td>
                            <td>200 hp</td>
                        </tr>
                        <tr>
                            <td>Transmission</td>
                            <td>6-Speed Automatic</td>
                        </tr>
                        <tr>
                            <td>Top Speed</td>
                            <td>150 mph</td>
                        </tr>
                        <tr>
                            <td>Fuel Efficiency</td>
                            <td>City: 25 mpg, Highway: 30 mpg</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <br>
            <section class="rental-info">
                <h4>Rental Information</h4>
                <p>Rent this car starting at 1500rs per day. <a class="text-dark" href="caontact.html">Contact us</a>
                    for more details.
                </p>
                <button type="submit" class="btn btn-outline-danger btn-lg d-block m-auto"
                    onclick="location.href='index2.html'">
                    <p style="margin-bottom: -3px;">Rent Now</p>
                </button>
            </section>
        </div>
    </main>
    <br><br>
    <div class="container-fluid text-light footer">
        <div class="container">
            <br>
            <div class="row g-3">
                <div class="col-lg-4 col-md-12 ps-5">
                    <h4>Fleet</h4>
                    <ul>
                        <li><a href="17.html">Mahindra Scorpio</a></li>
                        <li><a href="18.html">Hyundai Exter</a></li>
                        <li><a href="16.html">Mahindra Thar</a></li>
                        <li><a href="15.html">Maruti Suzuki</a></li>
                        <li><a href="14.html">MacLaren</a></li>
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
    <!-- <script src="JS.js"></script> -->
</body>

</html>