<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sketo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$enquiry_id = mysqli_real_escape_string($link, $_REQUEST['f_enquiry_id']);
$registration_id = mysqli_real_escape_string($link, $_REQUEST['f_registration_id']);
$first_name = mysqli_real_escape_string($link, $_REQUEST['f_first_name']);
$middle_name = mysqli_real_escape_string($link, $_REQUEST['f_middle_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['f_last_name']);
$email_id = mysqli_real_escape_string($link, $_REQUEST['f_email_id']);
$mobile_number = mysqli_real_escape_string($link, $_REQUEST['f_mobile_number']);
$alternate_number = mysqli_real_escape_string($link, $_REQUEST['f_alternate_number']);
$gender = mysqli_real_escape_string($link, $_REQUEST['f_gender']);
$date_of_birth = mysqli_real_escape_string($link, $_REQUEST['f_date_of_birth']);
$address = mysqli_real_escape_string($link, $_REQUEST['f_address']);
$city = mysqli_real_escape_string($link, $_REQUEST['f_city']);
$pinCode = mysqli_real_escape_string($link, $_REQUEST['f_pinCode']);
$state = mysqli_real_escape_string($link, $_REQUEST['f_state']);
$country = mysqli_real_escape_string($link, $_REQUEST['f_country']);
$qualification = mysqli_real_escape_string($link, $_REQUEST['f_qualification']);
$qualification_specialization = mysqli_real_escape_string($link, $_REQUEST['f_qualification_specialization']);
$courses = mysqli_real_escape_string($link, $_REQUEST['f_courses']);
$courses_applied = mysqli_real_escape_string($link, $_REQUEST['f_courses_applied']);

// attempt insert query execution
$sql = "INSERT INTO registrationform (d_enquiry_id, d_registration_id, d_first_name, d_middle_name, d_last_name, d_email_id, d_mobile_number, d_alternate_number, d_gender, d_date_of_birth, d_address, d_city, d_pinCode, d_state, d_country, d_qualification, d_qualification_specialization, d_courses, d_courses_applied) VALUES ('$enquiry_id', '$registration_id', '$first_name', '$middle_name', '$last_name', '$email_id', '$mobile_number', '$alternate_number', '$gender', '$date_of_birth', '$address', '$city', '$pinCode', '$state', '$country', '$qualification', '$qualification_specialization', '$courses', '$courses_applied')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>