<?php
session_start();
include('dbconnection.php');


if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="table-data">
        <div class="sidebar">
           <div class="side-icon">
            <img src="assets/Ellipse 1.png" alt="">
           </div> 
           <div>
            <div class="paragraph">
            <div style="parag">
                <?php 
                echo "<p>Welcome, " . $_SESSION['admin'] . "</p>";?>
            </div>
            </div>
            
            <div class="signout">
                <?php
                echo "<a href='logout.php'><i class='bx bx-log-out'></i>Logout</a>";?>
            </div>
           </div>
        </div>
        <div class="content scroller">
            <table class="table table-light">
            <thead>
                <tr>
                <th scope="col">User Id</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Amount</th>
                <th scope="col">Reference</th>
                </tr>
            </thead>
            <tbody>
            <?php
                 // Database configuration
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "alumnidb";

                 // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Your query and result processing code
                $sql = "SELECT user_id, full_name, email, phone, amount, reference FROM users";
                $result = $conn->query($sql);

                if ($result) {
                    // Check if there are results
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . htmlspecialchars($row["user_id"], ENT_QUOTES, 'UTF-8') . "</td>
                                        <td>" . htmlspecialchars($row["full_name"], ENT_QUOTES, 'UTF-8') . "</td>
                                        <td>" . htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8') . "</td>
                                        <td>" . htmlspecialchars($row["phone"], ENT_QUOTES, 'UTF-8') . "</td>
                                        <td>" . htmlspecialchars($row["amount"], ENT_QUOTES, 'UTF-8') . "</td>
                                        <td>" . htmlspecialchars($row["reference"], ENT_QUOTES, 'UTF-8') . "</td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>0 results</td></tr>";
                        }
                    } else {
                        // Output SQL error
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    // Close the connection
                    $conn->close();
                    ?>
            </tbody>
            </table>
        </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"></script> 
</body>
</html>