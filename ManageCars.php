<?php
  $server = "localhost:3306";
  $user = "root";
  $pass = "";
  $db = "chetan";
  $conn = mysqli_connect($server, $user, $pass, $db);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    exit();
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['snoEdit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['tE']);
        $desc = mysqli_real_escape_string($conn, $_POST['descEdit']);
        $sno = mysqli_real_escape_string($conn, $_POST['snoEdit']);
      // echo"******************************************";
        $sql = "UPDATE `notes` SET `title` = '$name', `description` = '$desc' WHERE `no` = $sno";
        $result = mysqli_query($conn, $sql);

    } else {
        $name2 = mysqli_real_escape_string($conn, $_POST['title']);
        $desc2 = mysqli_real_escape_string($conn, $_POST['desc']);

        $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$name2', '$desc2')";
        $result = mysqli_query($conn, $sql);
    }
  } 

  if (isset($_GET['delete'])) {
    $sno = mysqli_real_escape_string($conn, $_GET['delete']);

    // Ensure sno is numeric and valid
    if (is_numeric($sno)) {
        $sql = "DELETE FROM `notes` WHERE `no` = '$sno'";
        
        if (mysqli_query($conn, $sql)) {
            header("Location: ManageCars.php"); // Redirect back to the index page after deletion
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid ID.";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.0/css/dataTables.dataTables.css" />

  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

  <!-- Include DataTables -->
  <script src="https://cdn.datatables.net/2.1.0/js/dataTables.js"></script>
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
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
            z-index: 1000;
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
        }

        .sidebar ul li a:hover {
            color: red;
            background-color: #e9ecef;
        }

        .toggle-btn {
            position: fixed;
            top: 10px;
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="update">cars Edit </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="ManageCars.php" method="POSt">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="staticEmail" class="col-lg-12 col-sm-2">Note Title</label>
              <input type="text" id="tE" name="tE" class="form-control" placeholder="Add a Note">

            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Add Description</label>
              <textarea class="form-control" id="descEdit" name="descEdit" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Add Note</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

    <div class="container">
        <h3 class="mb-4 text-center" style="border-bottom: 1px solid red; width: 50%; margin: auto;">Manage Cars</h3>
        <!-- <hr class="w-50 m-auto text-danger"> -->

        <!-- <br> -->
        

        <!-- <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Toyota</td>
                        <td>Yaris</td>
                        <td>2024</td>
                        <td>
                            <button class="action-btn  mark-complete-btn">Edit</button>
                            <button class="action-btn cancel-btn">Deletes</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Hyundai</td>
                        <td>Accent</td>
                        <td>2024</td>
                        <td>
                            <button class="action-btn  mark-complete-btn">Edit</button>
                            <button class="action-btn cancel-btn">Deletes</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Nissan</td>
                        <td>Versa</td>
                        <td>2024</td>
                        <td>
                            <button class="action-btn  mark-complete-btn">Edit</button>
                            <button class="action-btn cancel-btn">Deletes</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Honda</td>
                        <td>Fit</td>
                        <td>2024</td>
                        <td>
                            <button class="action-btn  mark-complete-btn">Edit</button>
                            <button class="action-btn cancel-btn">Deletes</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> -->

    <div class="container">
    <table class="table-responsive" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>

        <?php
      $sql = "SELECT * FROM `notes`";
      $r = mysqli_query($conn, $sql);
  
      // $num = mysqli_num_rows($r);
      $no=0;
          while($row = mysqli_fetch_assoc($r))
            {
              $no++;
              echo "<tr>
                <th scope='row'>".$no."</th>
                <td>".$row['title']."</td>
                <td>".$row['description']."</td>
                <td><button class='edit' data-bs-toggle='modal' data-bs-target='#exampleModal' id=".$row['no'].">Edit</button> 
                <button class='delete btn' type='button' id=".$row['no'].">Delete</button></td>
              </tr>";
              // echo $row['id'] ."is id of '" .$row['name']. "' shis password is '".$row['pass']. "'";
              // echo var_dump($row);z
            } 
              mysqli_close($conn);
      ?>
      </tbody>
    </table>

    <button type="button" class="btn btn-danger mb-3 d-block mx-auto px-3 py-3" data-bs-toggle="modal"
            data-bs-target="#addCarModal">
            Add New Car
        </button>
    <div class="modal fade" id="addCarModal" tabindex="-1" role="dialog" aria-labelledby="addCarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCarModalLabel">Add New Car</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="ManageCars.php" method="post"> 
                        <div class="form-group">
                            <label for="make">title</label>
                            <input type="text" id="title" name="title" placeholder="Enter make" required>
                        </div>
                        <div class="form-group">
                            <label for="model">Model info</label>
                            <input type="text" name="desc" id="model" placeholder="Enter model" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="year">Year</label>
                            <input type="number" class="form-control" id="year" placeholder="Enter year" required>
                        </div> -->
                        <button type="submit" name="submit" class="btn btn-dark btn-block">Add Car</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="toggle-btn" id="toggleSidebarBtn" onclick="toggleSidebar()">☰</div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-..."
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-..."
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        var addCarModal = new bootstrap.Modal(document.getElementById('addCarModal'));

        // Toggle sidebar function
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
                    alert('Car is Sent for modification!');
                });
            });

            var cancelButtons = document.querySelectorAll('.cancel-btn');
            cancelButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    var row = this.closest('tr');
                    row.remove();
                    alert('Car model is deleted succesfully!');
                });
            });
        });
    </script>
    <script>
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  edits = document.getElementsByClassName('edit');
  Array.from(edits).forEach((element) => {
    element.addEventListener("click", (e) => {
      tr = e.target.parentNode.parentNode;
      title = tr.getElementsByTagName("td")[0].innerText;
      descr = tr.getElementsByTagName("td")[1].innerText;
      title.value = title;
      // description.value = desc;
      snoEdit.value = e.target.id;
      console.log(e.target.id);
      $('#exampleModal').modal('toggle');
    })
  })
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        const sno = e.target.id; // This is where you get the `sno` value
        if (confirm("Are you sure you want to delete this record?")) {
          window.location.href = `ManageCars.php?delete=${sno}`; // Redirect to PHP script
        }
      });
    });
  });

</script>

</body>

</html>