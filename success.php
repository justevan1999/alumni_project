<?php
include_once('dbconnection.php');
session_start();

if (!isset($_GET["successfullypaid"])) {
    header("Location: form.php");
    exit;
} else {
    $reference = $_GET["successfullypaid"];
}

$full_name = $_SESSION['full_name'];
$amount = $_SESSION['amount'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$date_of_birth = $_SESSION['date_of_birth'];
$gender = $_SESSION['gender'];
$marital = $_SESSION['marital'];
$country = $_SESSION['country'];
$state = $_SESSION['state'];
$city = $_SESSION['city'];
$house_address = $_SESSION['house_address'];
$faculty = $_SESSION['faculty'];
$degree = $_SESSION['degree'];
$department = $_SESSION['department'];
$matric = $_SESSION['matric'];
$employer = $_SESSION['employer'];
$employer_address = $_SESSION['employer_address'];
$rank = $_SESSION['rank'];

$sql = "INSERT INTO users (full_name, amount, email, phone, date_of_birth, gender, marital, country, state, city, house_address, faculty, degree, department, matric, employer, employer_address, rank, reference) 
        VALUES (:full_name, :amount, :email, :phone, :date_of_birth, :gender, :marital, :country, :state, :city, :house_address, :faculty, :degree, :department, :matric, :employer, :employer_address, :rank, :reference)";

if ($stmt = $pdo->prepare($sql)) {
    // Bind parameters
    $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
    $stmt->bindParam(':amount', $amount, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':date_of_birth', $date_of_birth, PDO::PARAM_STR);
    $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
    $stmt->bindParam(':marital', $marital, PDO::PARAM_STR);
    $stmt->bindParam(':country', $country, PDO::PARAM_STR);
    $stmt->bindParam(':state', $state, PDO::PARAM_STR);
    $stmt->bindParam(':city', $city, PDO::PARAM_STR);
    $stmt->bindParam(':house_address', $house_address, PDO::PARAM_STR);
    $stmt->bindParam(':faculty', $faculty, PDO::PARAM_STR);
    $stmt->bindParam(':degree', $degree, PDO::PARAM_STR);
    $stmt->bindParam(':department', $department, PDO::PARAM_STR);
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
    $stmt->bindParam(':employer', $employer, PDO::PARAM_STR);
    $stmt->bindParam(':employer_address', $employer_address, PDO::PARAM_STR);
    $stmt->bindParam(':rank', $rank, PDO::PARAM_STR);
    $stmt->bindParam(':reference', $reference, PDO::PARAM_STR);

    // Attempt to execute
    if ($stmt->execute()) {
        echo "<script>alert('Your payment went through!')</script>";
        $last_id = $pdo->lastInsertId();
        echo $last_id;
        // Prevent resubmission
        session_unset();
        session_destroy();
    } else {
        die("Sorry, something went wrong!");
    }
    unset($stmt);
}

// Close connection
unset($pdo);
?>
