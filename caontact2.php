<?php
  $server = "localhost:3306";
  $user = "root";
  $pass = "";
  $db = "chetan";
  $conn = mysqli_connect($server, $user, $pass, $db);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
//   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if (isset($_POST['snoEdit'])) {
//         $name = mysqli_real_escape_string($conn, $_POST['tE']);
//         $desc = mysqli_real_escape_string($conn, $_POST['descEdit']);
//         $sno = mysqli_real_escape_string($conn, $_POST['snoEdit']);

//         $sql = "UPDATE `notes` SET `title` = '$name', `description` = '$desc' WHERE `no` = $sno";
//         $result = mysqli_query($conn, $sql);

//         if (!$result) {
//             echo "Error updating record: " . mysqli_error($conn);
//         } else {
//             echo "Record updated successfully";
//         }

//     } else {
//         $name = mysqli_real_escape_string($conn, $_POST['name']);
//         $email = mysqli_real_escape_string($conn, $_POST['email']);
//         $message = mysqli_real_escape_string($conn, $_POST['meassage']);  // Corrected typo

//         $sql = "INSERT INTO `contact` (`Name`, `Email`, `Meassage`) VALUES ('$name', '$email', '$message')";
//         $result = mysqli_query($conn, $sql);

//         if (!$result) {
//             echo "Error inserting record: " . mysqli_error($conn);
//         } else {
//             echo "Record inserted successfully";
//         }
//     }
//   }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO `contact` (`Name`, `Email`, `Meassage`) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    } 
}
?>


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
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body id="body">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <!-- <li><button type="button" onclick="night()" class="btn">NIGHT</button>
                        <button type="button" onclick="day()" class="btn">DAY</button>
                    </li> -->

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

    <h3 class="text-center">Rent car the way you want it</h3>
    <hr class="m-auto w-50" style="color: red;"><br>
    <p class="text-center">If one of our regular holiday offerings is not what you are looking
        for,
        our expert
        staff can help you plan that special gateway for your unique tastes.</p><br><br>
    <div class="container-fluid">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 mb-4 col-mb-12">
                    <img style="margin-top: -8rem;" src="assets/3.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="container"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="text-center">Take your first step to a holiday you will never forget by
                                completing the form below.</p>

                            <h4 class="text-center">Get In Touch</h4>

                            <p class="text-center">Reasons why you should complete and submit this form</p>

                            <form action="caontact.php" method="POST">
                                <label for="name">Your Name:</label>
                                <input type="text" id="name" name="name" required>

                                <label for="email">Your Email:</label>
                                <input type="email" id="email" name="email" required>

                                <label for="message">Your Message:</label>
                                <textarea id="message" name="message" rows="4" required></textarea>

                                <button type="submit"
                                    class="d-block m-auto btn btn-outline-dark py-3 px-5 ">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
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

    <script>
        document.getElementById('loginButton').addEventListener('click', function () {
            document.getElementById('loginContainer').style.display = 'flex';
        });

        document.getElementById('close').addEventListener('click', function () {
            document.getElementById('loginContainer').style.display = 'none';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script>
        //  document.getElementById('contactForm').addEventListener('submit', function (event) {
        // event.preventDefault();
        // var formData = new FormData(this);
        // var userQuery = {
        //     name: formData.get('name'),
        //     email: formData.get('email'),
        //     message: formData.get('message')
        // };
        // console.log('User Query:', userQuery);
        // alert('Your query has been submitted successfully!');
        // this.reset();



        document.getElementById('login').addEventListener('submit', function (event) {
            event.preventDefault();
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('error-message');

            if (password === 'user') {
                window.location.href = 'about.php';
            } else if (password === 'admin') {
                window.location.href = 'Dashboard.php';
            } else {
                errorMessage.textContent = 'Invalid password.';
            }
        });

        function day() {
            body.className = 'day';
        }
        function night() {
            body.className = 'night';
        }

    </script>
</body>

</html>