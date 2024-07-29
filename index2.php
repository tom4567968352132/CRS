<?php
$conn = mysqli_connect("localhost:3306", "root", "", "chetan");

if(!$conn){
	echo"database rejected";
	exit();
}

if($_SERVER['REQUEST_METHOD']=='POST')
{	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$days = $_POST['days'];
		$from = $_POST['from'];
		$to = $_POST['to'];
		$message = $_POST['message'];	
		$licence = $_FILES['licence']['name'];
		$tempname= $_FILES['licence']['tmp_licence'];
		$folder = 'image/'.$licence;
		$identity = $_POST['identity'];
		// $photo = $_POST['photo'];


		$sql="INSERT INTO `rental`(`name`, `email`, `date`, `days`, `from`, `to`, `message`, `licence`, `identity`) VALUES ('$name','$email','$date','$days','$from','$to','$message','$licence','$identity');";

		$result = mysqli_query($conn, $sql);
		if($result){
			echo"***********************";	
		}
}
?>

<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
	<title>Booking</title>

	<style>
		.input {
			height: 200px;
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
					<!-- <li class="nav-item btn" id="loginButton"><a class="nav-link" href="#">Sign-in</a></li> -->
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
				<a style="text-decoration: none;" href="Home.html"
					class="btn btn-outline-danger p-3 px-5 fs-4 me-5">Google</a>
				<a style="text-decoration:none;" href="Home.html"
					class="btn btn-outline-danger p-3 px-5 fs-4">Facebook</a>
			</div><br>
			<p>Don't have an account? <a style="text-decoration: none; color: red;" href="register.html">Create one</a>
			</p>
		</form>
	</div>

	<div class="container-fluid py-5 booking">
		<div class="container">
			<h3 class="text-center">Online Booking</h3>
			<hr style="border-top: 2px solid red;" class="w-50 m-auto">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="text-center">
						<img src="undraw_order_a_car_-3-tww.svg" alt="Car Image" class="img-fluid" height="100%"
							width="90%">
					</div>
				</div>

				<div class="col-md-6">
					<div class="text-center">
						<h4 class="mb-5">Take A Car Right Now</h4>
					</div>
					<form id="contactForm" action="index2.php" method="post">
						<div class="row g-3">
							<div class="col-md-6">
								<label for="name">Enter Your Name</label>
								<input class="w-100" type="text" id="name" name="name" required>
							</div>
							<div class="col-md-6">
								<label for="email">Enter Your Email:</label>
								<input class="w-100" type="email" id="email" name="email" required>
							</div>
							<div class="col-md-6">
								<label for="date" class="form-label">Enter the Date for Car Pickup</label>
								<input class="w-100" type="date" id="date" name="date" required>
							</div>
							<div class="col-md-6">
								<label for="days" class="form-label">Number of Days</label>
								<input class="w-100" type="number" id="days" name="days" required>
							</div>
							<div class="col-md-6">
								<label for="from" class="form-label">Destination (From)</label>
								<input class="w-100" type="text" id="from" name="from" required>
							</div>
							<div class="col-md-6">
								<label for="to" class="form-label">Destination (To)</label>
								<input class="w-100" type="text" id="to" name="to" required>
							</div>
							<div class="col-12">
								<label for="message" class="form-label">Your Message</label><br>
								<textarea class="w-100" id="message" name="message" rows="4" required></textarea>
							</div>
							<div class="col-6">
								<label for="license" class="form-label">Upload Driving Licence.</label><br>
								<input type="file" id="license" name="licence" required>
							</div>
							<div class="col-6">
								<label for="license" class="form-label">Any Other Identity
									Proof</label><br>
								<input type="file" id="identity" name="identity" required>
							</div>

							<div class="col-12" id="photoCapture">
								<h2>Capture Your Photo</h2>
								<video id="video" autoplay
									style="max-width: 50%; display: block; margin: 0 auto;"></video><br><button
									id="Capture" class="btn btn-outline-dark btn-lg d-block m-auto">
									<p style="margin-bottom: -3px;">Capture photo and submit</p>
							</div>
							<!-- <div class="col-12">
								<br><button type="submit" class="btn btn-outline-dark btn-lg d-block m-auto">
									<p style="margin-bottom: -3px;">Rent Now</p>
								</button>
							</div> -->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid py-5">
		<div class="container">
			<div class="text-center pb-4">
				<h3 class="mb-5">3 Easy Steps</h3>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-sm-6 text-center pt-4">
					<div class="position-relative border border-primary pt-5 pb-4 px-4">
						<div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle"
							style="width: 100px; height: 100px;">
							<i class="fa fa-globe fa-3x text-white"></i>
						</div>
						<h5 class="mt-4">Choose A Destination</h5>
						<hr class="w-25 mx-auto bg-primary mb-1">
						<hr class="w-50 mx-auto bg-primary mt-0">
						<p class="mb-0">What kind of trip do you want? Are you looking for a romantic destination to
							enjoy with your significant other?</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 text-center pt-4">
					<div class="position-relative border border-primary pt-5 pb-4 px-4">
						<div class="d-inline-flex align-items-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle"
							style="width: 100px; height: 100px;">
							<i class="fa fa-dollar-sign fa-3x text-white ms-5 ps-2"></i>
						</div>
						<h5 class="mt-4">Pay Online</h5>
						<hr class="w-25 mx-auto bg-primary mb-1">
						<hr class="w-50 mx-auto bg-primary mt-0">
						<p class="mb-0">When it comes to knowing online payment meaning, in essence it is an
							exchange of
							currency, electronically through the internet. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 text-center pt-4">
					<div class="position-relative border border-primary pt-5 pb-4 px-4">
						<div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle"
							style="width: 100px; height: 100px;">
							<i class="fa fa-plane fa-3x text-white"></i>
						</div>
						<h5 class="mt-4">Fly Today</h5>
						<hr class="w-25 mx-auto bg-primary mb-1">
						<hr class="w-50 mx-auto bg-primary mt-0">
						<p class="mb-0">I’m willing to travel. It allowed me to go to special conferences and
							trainings
							that have expanded my knowledge of our industry.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<h3 class="text-center">If you want to cancel booking</h3>
		<!-- <p class="text-center fw-bold"></p> -->
		<form id="contactForm">
			<label>
				<h2 class="my-auto">Any Reason for cancellation: </h2>
			</label>
			<textarea class="w-100" style="height:100px"></textarea>
			<br><button type="submit" id="rentNowButton"
				class="d-block m-auto btn btn-outline-dark border-2 pt-4 px-5 fs-5">
				<p>Cancel
					Booking</p>
			</button>
		</form>
	</div>

	<br>
	<div class="container-fluid text-light footer">
		<div class="container">
			<br>
			<div class="row g-3">
				<div class="col-lg-4 col-md-12 ps-5">
					<h4>Fleet</h4>
					<ul>
						<li><a href="17.html">Mahindra Scorpio</a></li>
						<li><a href="18.html">Hyundai Exter</a></li>
						<li><a href="16.html">Nissan 350Z</a></li>
						<li><a href="15.html">Maruti Suzuki</a></li>
						<li><a href="14.html">Lamborgini</a></li>
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
	<script>
		document.getElementById('contactForm').addEventListener('submit', function (event) {
			// event.preventDefault();
			// var formData = new FormData(this);
			// var userQuery = {
			// 	name: formData.get('name'),
			// 	email: formData.get('email'),
			// 	message: formData.get('message')
			// };
			// console.log('User Query:', userQuery);
			alert('photo captured');
			alert('Your Booking has been submitted successfully!');
			// this.reset();
		});
	</script>

	<script>
		document.getElementById('rentNowButton').addEventListener('click', function () {
			console.log('Rent Now button clicked!');
			alert(' Your booking request has been cancelled successfully!');
		});
	</script>

	<script>document.addEventListener('DOMContentLoaded', function () {
			const video = document.getElementById('video');
			const canvas = document.getElementById('canvas');
			const captureButton = document.getElementById('capture');
			const photoInput = document.getElementById('photo');
			const photoCaptureSection = document.getElementById('photoCapture');
			const captureMessage = document.getElementById('captureMessage');
			let mediaStream = null;

			function initializeCamera() {
				navigator.mediaDevices.getUserMedia({
					video: true

				}).then(stream => {
					video.srcObject = stream;
					// mediaStream = stream;
				})
			}
			initializeCamera();
			captureButton.addEventListener('click', () => {
				canvas.width = video.videoWidth;
				canvas.height = video.videoHeight;
				captureMessage.style.display = 'block';
				stopCamera();
				captureButton.style.display = 'none';
				canvas.style.display = 'none';
			});;
		});
	</script>
</body>

</html>