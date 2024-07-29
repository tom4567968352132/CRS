<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <title>Booking</title>
    <style>
        html {
            height: 100vh;
        }

        body {
            min-height: 100vh;
            width: 100%;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 200px;
            background-color: #333;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            transition: transform 0.3s ease;
            z-index: 1;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
            color: black;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: black;
            display: block;
            padding: 10px;
            border-radius: 4px;
        }

        .sidebar ul li a:hover {
            background-color: #555;
        }

        .sidebar.collapsed {
            transform: translateX(-200px);
        }

        .content {
            margin-left: 200px;
            transition: margin-left 0.3s ease;
        }

        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-200px);
            }

            .sidebar.collapsed {
                transform: translateX(0);
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-12">
                <div class="sidebar bg-body-tertiary" id="sidebar">
                    <img class="d-block m-auto" src="images/logo2.jpg" alt="logo" height="10%" width="70%"><br>
                    <ul>
            <li><a href="Dashboard.php">Dashboard</a></li>
            <li><a href="rentals.php">Manage Rentals</a></li>
            <li><a href="queries.php">Manage Queries</a></li>
            <li><a href="ManageCars.php">Manage Cars</a></li>
            <li><a href="Home.php">Sign Out</a></li>
        </ul>
                </div>
                <button class=" btn btn-primary d-block d-lg-none mt-3" id="sidebarCollapse">
                    <i class="fas fa-bars"></i> Toggle Sidebar
                </button>
            </div>
            <div class="col-lg-10 col-sm-12 content">
                <h3 class="text-center my-5" style="border-bottom: 2px solid red; width: 50%; margin: auto; ">Car Rent
                    Dashboard</h3>
                <div class="row">

                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Revenue</h5>
                                <p class="card-text">1,00,000Rs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Most Popular Vehicle</h5>
                                <p class="card-text">Hero Honda</p>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Customers</h5>
                                <p class="card-text">180</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Bookings</h5>
                                <p class="card-text">100</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Cars on Rent</h5>
                                <p class="card-text">35</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Cars Remaining</h5>
                                <p class="card-text">116</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            crossorigin="anonymous"></script>
        <script>
            document.getElementById('sidebarCollapse').addEventListener('click', function () {
                document.getElementById('sidebar').classList.toggle('collapsed');
            });
        </script>
</body>

</html>