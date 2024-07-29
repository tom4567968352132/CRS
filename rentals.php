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
        .sidebar {
            width: 200px;
            height: 100vh;
            /* background: red; */
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            transition: transform 0.3s ease;
            /* transform: translateX(0); */
            position: fixed;
            left: 0;
            top: 0;
            /* overflow-y: auto; */
        }

        .sidebar.hidden {
            transform: translateX(-100%);
        }

        .sidebar h3 {
            margin-top: 0;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: black;
            display: block;
            padding: 10px;
            border-radius: 4px;
            /* transition: background-color 0.3s ease; */
        }

        .sidebar ul li a:hover {
            color: red;
        }

        .toggle-btn {
            position: fixed;
            top: 0px;
            left: 190px;
            background-color: red;
            /* color: #fff; */
            padding: 10px 15px;
            /* border: none; */
            border-radius: 4px;
            cursor: pointer;
            z-index: 1;
            transition: left 0.3s ease;
            color: #fff;
        }

        .toggle-btn:hover {
            background-color: grey;
        }

        .toggle-btn.active {
            left: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .action-btn:hover {
            background-color: #45a049;
        }

        .cancel-btn:hover {
            background-color: #da190b;
        }
    </style>
</head>

<body>

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
    <div class="container">
        <h3 class="text-center pt-5" style="border-bottom: 1px solid red; width: 50%; margin: auto;">Manage Bookings
        </h3><br><br><br>
        <div class="table-responsive">
            <table id="bookingsTable">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>date</th>
                        <th>days</th>
                        <th>from</th>
                        <th>to</th>
                        <th>message</th>
                        <th>licence</th>
                        <th>identity</th>
                    </tr>
                </thead>
                <tbody>
<?php 
        $conn = mysqli_connect("localhost", "root", "", "chetan");
        $sql= "select * from `rental`";
        $result=mysqli_query($conn, $sql);
        $id=0;
        // $row = mysqli_nums_rows();
        while($row = mysqli_fetch_assoc($result)){
            $id++;
        echo"
                    <tr>
                        <td>".$id."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['date']."</td>
                        <td>".$row['days']."</td>
                        <td>".$row['from']."</td>
                        <td>".$row['to']."</td>.
                        <td>".$row['message']."</td>
                        <td><img src =".$row['licence']." ></td>
                        <td>".$row['identity']."</td>   
                        <td>
                            <button class='action-btn  mark-complete-btn'>Mark Complete</button>
                            <button class='action-btn cancel-btn'>Cancel Booking</button>
                        </td>
                    </tr>";
        }
?>
                </tbody>
            </table>
        </div>
    </div>
    <br><br><br>

    <div class="toggle-btn" id="toggleSidebarBtn" onclick="toggleSidebar()">☰</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="JS.js"></script>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var toggleBtn = document.getElementById('toggleSidebarBtn');
            sidebar.classList.toggle('hidden');
            toggleBtn.classList.toggle('active');
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var markCompleteButtons = document.querySelectorAll('.mark-complete-btn');
            markCompleteButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    var row = this.closest('tr');
                    row.style.backgroundColor = '#dff0d8';
                    alert('Booking marked as complete!');
                });
            });


            var cancelButtons = document.querySelectorAll('.cancel-btn');
            cancelButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    var row = this.closest('tr');
                    row.remove();
                    alert('Booking canceled successfully!');
                });
            });
        });
    </script>
</body>

</html>