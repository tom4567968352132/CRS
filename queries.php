<?php
  $server = "localhost:3306";
  $user = "root";
  $pass = "";
  $db = "chetan";
  $conn = mysqli_connect($server, $user, $pass, $db);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Customers Queries</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.0/css/dataTables.dataTables.css" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        .sidebar {
            width: 200px;
            height: 100vh;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            transition: transform 0.3s ease;
            transform: translateX(0);
            position: fixed;
            left: 0;
            top: 0;
        }

        .sidebar.hidden {
            transform: translateX(-100%);
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
        }

        .sidebar ul li a:hover {
            color: red;
        }

        .toggle-btn {
            position: fixed;
            top: 0px;
            left: 190px;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            z-index: 1;
            transition: left 0.3s ease;
            background-color: red;
            color: #fff;
        }

        .toggle-btn:hover {
            background-color: grey;
        }

        .toggle-btn.active {
            left: 0;
        }

        .answer-form {
            margin-top: 10px;
        }

        .answer-form textarea {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .answer-form button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .answer-form button:hover {
            background-color: gray;
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
        <h3 class="text-center pt-5" style="border-bottom: 1px solid red; width: 50%; margin: auto;">Manage Customers Queries</h3>

        <h2>Received Queries</h2>

        <?php
        $sql = "SELECT * FROM `contact`";
        $r = mysqli_query($conn, $sql);
        $no = 0;
        while ($row = mysqli_fetch_assoc($r)) {
            $no++;
            echo "
            <div class='query-container' id='query{$row['no']}'>
                <strong>{$no}</strong>
                <strong>Name:</strong> {$row['Name']}<br>
                <strong>Email:</strong> {$row['Email']}<br>
                <strong>Message:</strong> {$row['Meassage']}<br>
                Where should I return a car?
                <div class='answer-form'>
                    <textarea id='answer{$row['no']}' placeholder='Enter your answer...' rows='3'></textarea><br>
                    <button onclick='submitAnswer({$row['no']})'>Submit Answer</button>
                </div>
            </div>";
        }
        mysqli_close($conn);
        ?>
    </div>

    <div class="toggle-btn" id="toggleSidebarBtn" onclick="toggleSidebar()">☰</div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.1.0/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var toggleBtn = document.getElementById('toggleSidebarBtn');
            sidebar.classList.toggle('hidden');
            toggleBtn.classList.toggle('active');
        }

        function submitAnswer(queryId) {
            var queryContainer = document.getElementById('query' + queryId);
            var answerTextarea = document.getElementById('answer' + queryId);
            var answer = answerTextarea.value.trim();

            if (answer !== '') {
                $.ajax({
                    url: 'delete_query.php',
                    type: 'POST',
                    data: { id: queryId },
                    success: function(response) {
                        if (response === 'success') {
                            queryContainer.remove(); // Remove the specific query container
                            alert('Answer submitted and query deleted successfully!');
                        } else {
                            alert('Failed to delete query. Please try again.');
                        }
                    },
                    error: function() {
                        alert('An error occurred. Please try again.');
                    }
                });
            } else {
                alert('Please enter an answer.');
            }
        }
    </script>
</body>

</html>
