<?php
session_start();

// Use FILTER_SANITIZE_FULL_SPECIAL_CHARS to sanitize input
$sanitizer = filter_var_array($_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// Check for required fields and set variables
$full_name = $sanitizer['full_name'] ?? '';
$amount = $sanitizer['amount'] ?? '';
$email = $sanitizer['email'] ?? '';
$phone = $sanitizer['phone'] ?? '';
$date_of_birth = $sanitizer['date_of_birth'] ?? '';
$gender = $sanitizer['gender'] ?? '';
$marital = $sanitizer['marital'] ?? '';
$country = $sanitizer['country'] ?? '';
$state = $sanitizer['state'] ?? '';
$city = $sanitizer['city'] ?? '';
$house_address = $sanitizer['house_address'] ?? '';
$faculty = $sanitizer['faculty'] ?? '';
$degree = $sanitizer['degree'] ?? '';
$department = $sanitizer['department'] ?? '';
$matric = $sanitizer['matric'] ?? '';
$employer = $sanitizer['employer'] ?? '';
$employer_address = $sanitizer['employer_address'] ?? '';
$rank = $sanitizer['rank'] ?? '';

// Check for empty fields
if (empty($full_name) || empty($amount) || empty($email) || empty($phone) || empty($date_of_birth) || empty($gender) || empty($marital) || empty($country) || empty($state) || empty($city) || empty($house_address) || empty($faculty) || empty($degree) || empty($department) || empty($matric) || empty($employer) || empty($employer_address) || empty($rank)) {
    // Redirect to form.php with a query string to indicate the error
    header("Location: form.php?error=missing_fields");
    exit(); // Ensure no further code is executed
}

// Store sanitized values in session
$_SESSION['full_name'] = $full_name;
$_SESSION['amount'] = $amount;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;
$_SESSION['date_of_birth'] = $date_of_birth;
$_SESSION['gender'] = $gender;
$_SESSION['marital'] = $marital;
$_SESSION['country'] = $country;
$_SESSION['state'] = $state;
$_SESSION['city'] = $city;
$_SESSION['house_address'] = $house_address;
$_SESSION['faculty'] = $faculty;
$_SESSION['degree'] = $degree;
$_SESSION['department'] = $department;
$_SESSION['matric'] = $matric;
$_SESSION['employer'] = $employer;
$_SESSION['employer_address'] = $employer_address;
$_SESSION['rank'] = $rank;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paystack pay page</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="mainbody" style="background: #111E25; overflow-x: hidden;">
<div class="theform" style="background: #f3f3f3; width: 40%; text-align: center; margin: auto; border-radius: 5px; margin-top: 230px; padding: 20px">
<h2 class="theformtext" style="color: #111E25; font-size: 30px; font-weight: 400;">Hi, <?php echo htmlspecialchars($email); ?></h2>
<form action="" method="POST">
<script src="https://js.paystack.co/v1/inline.js"></script>
<button style="color: #fff; background-color: #950000; outline: none; border: none; padding: 8px 40px; border-radius: 4px; cursor: pointer; font-weight: 600; margin-bottom: 20px" name="sub" type="button" onclick="payPageWithPaystack()"> Proceed </button> 
</form>
</div>

<script> 
function payPageWithPaystack() {
    const api = "pk_test_e02d0a860334dac233aba58e1e68f038edc8ab30";
    var handler = PaystackPop.setup({
        key: api,
        email: "<?php echo htmlspecialchars($email); ?>",
        amount: <?php echo $amount * 100; ?>,
        currency: "NGN",
        ref: '' + Math.floor((Math.random() * 1000000000) + 1), 
        fullname: "<?php echo htmlspecialchars($full_name); ?>",
        phone: "<?php echo htmlspecialchars($phone); ?>",
        dateOfBirth: "<?php echo htmlspecialchars($date_of_birth); ?>",
        gender: "<?php echo htmlspecialchars($gender); ?>",
        marital: "<?php echo htmlspecialchars($marital); ?>",
        country: "<?php echo htmlspecialchars($country); ?>",
        state: "<?php echo htmlspecialchars($state); ?>",
        city: "<?php echo htmlspecialchars($city); ?>",
        houseAddress: "<?php echo htmlspecialchars($house_address); ?>",
        faculty: "<?php echo htmlspecialchars($faculty); ?>",
        degree: "<?php echo htmlspecialchars($degree); ?>",
        department: "<?php echo htmlspecialchars($department); ?>",
        matric: "<?php echo htmlspecialchars($matric); ?>",
        employer: "<?php echo htmlspecialchars($employer); ?>",
        employerAddress: "<?php echo htmlspecialchars($employer_address); ?>",
        rank: "<?php echo htmlspecialchars($rank); ?>",

        metadata: {
            custom_fields: [
                {
                    display_name: "Full Name:",
                    variable_name: "full_name",
                    value: "<?php echo htmlspecialchars($full_name); ?>"
                },
                {
                    display_name: "Phone:",
                    variable_name: "phone",
                    value: "<?php echo htmlspecialchars($phone); ?>"
                },
                {
                    display_name: "Date Of Birth:",
                    variable_name: "date_of_birth",
                    value: "<?php echo htmlspecialchars($date_of_birth); ?>"
                },
                {
                    display_name: "Gender",
                    variable_name: "gender",
                    value: "<?php echo htmlspecialchars($gender); ?>"
                },
                {
                    display_name: "Marital",
                    variable_name: "marital",
                    value: "<?php echo htmlspecialchars($marital); ?>"
                },
                {
                    display_name: "Country",
                    variable_name: "country",
                    value: "<?php echo htmlspecialchars($country); ?>"
                },
                {
                    display_name: "State",
                    variable_name: "state",
                    value: "<?php echo htmlspecialchars($state); ?>"
                },
                {
                    display_name: "City",
                    variable_name: "city",
                    value: "<?php echo htmlspecialchars($city); ?>"
                },
                {
                    display_name: "House Address",
                    variable_name: "house_address",
                    value: "<?php echo htmlspecialchars($house_address); ?>"
                },
                {
                    display_name: "Faculty",
                    variable_name: "faculty",
                    value: "<?php echo htmlspecialchars($faculty); ?>"
                },
                {
                    display_name: "Degree",
                    variable_name: "degree",
                    value: "<?php echo htmlspecialchars($degree); ?>"
                },
                {
                    display_name: "Department",
                    variable_name: "department",
                    value: "<?php echo htmlspecialchars($department); ?>"
                },
                {
                    display_name: "Matric",
                    variable_name: "matric",
                    value: "<?php echo htmlspecialchars($matric); ?>"
                },
                {
                    display_name: "Employer",
                    variable_name: "employer",
                    value: "<?php echo htmlspecialchars($employer); ?>"
                },
                {
                    display_name: "Employer Address",
                    variable_name: "employer_address",
                    value: "<?php echo htmlspecialchars($employer_address); ?>"
                },
                {
                    display_name: "Rank",
                    variable_name: "rank",
                    value: "<?php echo htmlspecialchars($rank); ?>"
                }
            ]
        },
        callback: function(response) {
            const referenced = response.reference;
            window.location.href = 'success.php?successfullypaid=' + referenced;
        },
        onClose: function() {
            alert('window closed');
        }
    });
    handler.openIframe();
}
</script>
</body>
</html>
