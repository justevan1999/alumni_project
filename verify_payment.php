<?php

$sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$full_name = $sanitizer['full_name'];
$amount = $sanitizer['amount'];
$email = $sanitizer['email'];
$phone = $sanitizer['phone'];
$date_of_birth = $sanitizer['date_of_birth'];
$gender = $sanitizer['gender'];
$marital = $sanitizer['marital'];
$country = $sanitizer['country'];
$state = $sanitizer['state'];
$city = $sanitizer['city'];
$house_address = $sanitizer['house_address'];
$faculty = $sanitizer['faculty'];
$degree = $sanitizer['degree'];
$department = $sanitizer['department'];
$matric = $sanitizer['matric'];
$employer = $sanitizer['employer'];
$employer_address = $sanitizer['employer_address'];
$rank = $sanitizer['rank'];

if (empty($full_name) || empty($amount) || empty($email) || empty($phone) || empty($date_of_birth) || empty($gender) || empty($marital) || empty($country) || empty($state) || empty($city) || empty($house_address) || empty($faculty) || empty($degree) || empty($department) || empty($matric) || empty($employer) || empty($employer_address) || empty($rank)) {
    header("Location: form.php");
}
else {
    session_start();
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

}
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
<h2 class="theformtext" style="color: #111E25; font-size: 30px; font-weight: 400;">Hi, <?php echo $email; ?></h2>
<form action="" method="POST">
<script src="https://js.paystack.co/v1/inline.js"></script>
<button style="color: #fff; background-color: #950000; outline: none; border: none; padding: 8px 40px; border-radius: 4px; cursor: pointer; font-weight: 600; margin-bottom: 20px" name="sub" type="button" onclick="payPageWithPaystack()"> Proceed </button> 
</form>
</div>

 
<script> 
  function payPageWithPaystack(){
const api = "pk_test_e02d0a860334dac233aba58e1e68f038edc8ab30";
    var handler = PaystackPop.setup({
      key: api,
      email: "<?php echo $email; ?>",
      amount: <?php echo $amount*100; ?>,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), 
      fullname: "<?php echo". $full_name."; ?>",
      phone: "<?php echo $phone; ?>",
      dateOfBirth: "<?php echo $date_of_birth; ?>",
      gender: "<?php echo $gender; ?>",
      marital: "<?php echo $marital; ?>",
      country: "<?php echo $country; ?>",
      state: "<?php echo $state; ?>",
      city: "<?php echo $city; ?>",
      houseAddress: "<?php echo $house_address; ?>",
      faculty: "<?php echo $faculty; ?>",
      degree: "<?php echo $degree; ?>",
      department: "<?php echo $department; ?>",
      matric: "<?php echo $matric; ?>",
      employer: "<?php echo $employer; ?>",
      employerAddress: "<?php echo $employer_address; ?>",
      rank: "<?php echo $rank; ?>",


      // label: "Optional string that replaces customer email"
      metadata: {
         custom_fields: [
            {
                display_name: "Full Name:",
                variable_name: "full_name",
                value: "<?php echo $full_name; ?>"
            },
             {
                display_name: "Phone:",
                variable_name: "phone",
                value: "<?php echo $phone; ?>"
            },
             {
                display_name: "Date Of Birth:",
                variable_name: "date_of_birth",
                value: "<?php echo $date_of_birth; ?>"
            },
             {
                display_name: "Gender",
                variable_name: "gender",
                value: "<?php echo $gender; ?>"
            },
            {
                display_name: "Marital",
                variable_name: "marital",
                value: "<?php echo $marital; ?>"
            },
            {
                display_name: "Country",
                variable_name: "country",
                value: "<?php echo $country; ?>"
            },
            {
                display_name: "State",
                variable_name: "state",
                value: "<?php echo $state; ?>"
            },
            {
                display_name: "City",
                variable_name: "city",
                value: "<?php echo $city; ?>"
            },
            {
                display_name: "House Address",
                variable_name: "house_address",
                value: "<?php echo $house_address; ?>"
            },
            {
                display_name: "Faculty",
                variable_name: "faculty",
                value: "<?php echo $faculty; ?>"
            },
            {
                display_name: "Degree",
                variable_name: "degree",
                value: "<?php echo $degree; ?>"
            },
            {
                display_name: "Department",
                variable_name: "department",
                value: "<?php echo $department; ?>"
            },
            {
                display_name: "Matric",
                variable_name: "matric",
                value: "<?php echo $matric; ?>"
            },
            {
                display_name: "Employer",
                variable_name: "employer",
                value: "<?php echo $employer; ?>"
            },
            {
                display_name: "Employer Address",
                variable_name: "employer_address",
                value: "<?php echo $employer_address; ?>"
            },
            {
                display_name: "Rank",
                variable_name: "rank",
                value: "<?php echo $rank; ?>"
            }
         ]
      },
      callback: function(response){
           const referenced = response.reference;
		  window.location.href='success.php?successfullypaid='+ referenced;
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>
</body>
</html>