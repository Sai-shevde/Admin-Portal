<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'registrationform';
    //for connection of database
    $conn = mysqli_connect($server, $user, $password, $database);

    if($conn){
        $enquiry = $_POST['f_enquiry_id'];
        $registration = $_POST['f_registration_id'];
        $first = $_POST['f_first_name'];
        $middle = $_POST['f_middle_name'];
        $last = $_POST['f_last_name'];
        $email = $_POST['f_email_id'];
        $mobile = $_POST['f_mobile_number'];
        $alternate = $_POST['f_alternate_number'];
        $gender = $_POST['f_gender_id'];
        $date = $_POST['f_date_of_birth'];
        $address = $_POST['f_address'];
        $city = $_POST['f_city'];
        $pincode = $_POST['f_pincode'];
        $state = $_POST['f_state'];
        $country = $_POST['f_country'];
        $qualification = $_POST['f_qualification'];
        $qualificationspe = $_POST['f_qualification_specialization'];
        $courses = $_POST['f_courses'];
        $coursesapp = $_POST['f_courses_applied'];
        

    //iserting the quiery in database
        $sql = "inster into registrationform (d_enquiry_id, d_registration_id, d_first_name, d_middle_name, d_last_name, d_email_id, d_mobile_number, d_alternate_number, d_gender_id, d_date_of_birth, d_address, d_city, d_pincode, d_state, d_country, d_qualification, d_qualification_specialization, d_courses, d_courses_applied) values('$enquiry','$registration','$first','$middle','$last','$email','$mobile','$alternate','$gender','$date','$address','$city','$pincode','$state','$country','$qualification','$qualificationsep','$courses','$coursesapp')";
    //for result of the queary
    $res = mysqli_query($conn, $sql);        
    }
    else{
        echo 'not found';
    }


?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        h2 {
            font-family: Sans-serif;
            font-size: 24px;
            font-style: normal;
            font-weight: bold;
            color: blue;
            text-align: center;
            text-decoration: underline
        }
        table {
            font-family: helvetica;
            color: white;
            font-size: 16px;
            font-style: normal;
            font-weight: bold;
            /* background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%); */
            background: #1EBBF0;
            border-collapse: collapse;
            border: 4px solid #000000;
            border-style: dashed;
        }
        table.inner {
            border: 10px
        }
        input[type=text],
        input[type=email],
        input[type=number] {
            width: 50%;
            padding: 6px 12px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type=submit],
        input[type=reset] {
            width: 15%;
            padding: 8px 12px;
            margin: 5px 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<form action="index.php" method="post">    
    <h2>Registration Form</h3>

        <table align="center" cellpadding="10">
            <!--------------------- Enquiry ID ------------------------------------------>
            <tr>
                <td>Enquiry ID</td>
                <td><input type="text" name="f_enquiry_id" maxlength="50"placeholder="Enquiry ID" />
                </td>
            </tr>
            <!--------------------- Registration ID ------------------------------------------>
            <tr>
                <td>Registration ID</td>
                <td><input type="text" name="f_registration_id" maxlength="50"placeholder="Registration ID" />
                </td>
            </tr>
            <!--------------------- First Name ------------------------------------------>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="f_first_name" maxlength="50"placeholder="First Name" />
                </td>
            </tr>
            <!--------------------- Middle Name ------------------------------------------>
            <tr>
                <td>Middle Name</td>
                <td><input type="text" name="f_middle_name" maxlength="50"placeholder="Middle Name" />
                </td>
            </tr>
            <!------------------------ Last Name --------------------------------------->
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="f_last_name" maxlength="50" placeholder="Last Name" />
                </td>
            </tr>
            <!-------------------------- Email ID ------------------------------------->
            <tr>
                <td>Email ID</td>
                <td><input type="email" name="f_email_id" maxlength="100" placeholder="Email ID" /></td>
            </tr>
            <!-------------------------- Mobile Number ------------------------------------->
            <tr>
                <td>Mobile Number</td>
                <td>
                    <input type="text" name="f_mobile_number" maxlength="15" placeholder="1234567890" />
                </td>
            </tr>
             <!-------------------------- Alternate Number ------------------------------------->
             <tr>
                <td>Alternate Number</td>
                <td>
                    <input type="text" name="f_alternate_number" maxlength="15" placeholder="1234567890" />
                </td>
            </tr>
            <!---------------------- Gender ------------------------------------->
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="f_gender" value="Male" />
                    Male
                    <input type="radio" name="f_gender" value="Female" />
                    Female
                </td>
            </tr>
            <!--------------------------Date Of Birth----------------------------------->
            <tr>
                <td>Date of Birth</td>
                <td>
                    <input type="date" name="f_date_of_birth"/>
                    </td>
            </tr>
            <!------------------------- Address ---------------------------------->
            <tr>
                <td>Address<br /><br /><br /></td>
                <td><textarea name="f_address" rows="6" cols="50"></textarea></td>
            </tr>
            <!-------------------------- City ------------------------------------->
            <tr>
                <td>City</td>
                <td><input type="text" name="f_city" maxlength="50" />
                </td>
            </tr>
            <!----- -------------------- Pin Code-------------------------------------->
            <tr>
                <td>Pin Code</td>
                <td><input type="text" name="f_pinCode" maxlength="6" />
                </td>
            </tr>
            <!---------------------------- State ----------------------------------->
            <tr>
                <td>State</td>
                <td><input type="text" name="f_state" maxlength="50" />
                </td>
            </tr>
            <!------------------------------ Country --------------------------------->
            <tr>
                <td>Country</td>
                <td><input type="text" name="f_country" /></td>
            </tr>
            <!-----------------------Qualification---------------------------------------->
            <tr>
                <td>Qualification</td>
                <td>    
                    <select class="form-select" aria-label="Default select example" name="f_qualification">
                        <option selected>---select---</option>
                        <option value="1">SSC</option>
                        <option value="2">HSC</option>
                        <option value="3">Graduation</option>
                        <option value="4">Post Graduation</option>
                        <option value="5">PHD</option>
                        <option value="5">Diploma</option>

                    </select>
                </td>
            </tr>
            <td>Qualification Specialization</td>
            <td><input type="text" name="f_qualification_specialization" maxlength="100" />
            <!---------------------------- Courses ----------------------------------->
            <tr>
                <td>Courses</td>
                <td>
                    <select class="form-select" aria-label="Default select example" name="f_courses">
                        <option selected>---select---</option>
                        <option value="1">Data Science</option>
                        <option value="2">Programing Language</option>
                        <option value="3">Fullstack</option>
                        <option value="4">Digital Marketing</option>
                        <option value="5">Database</option>
                        <option value="5">Framework</option>
                        <option value="5">Business Productive Tools</option>
                        <option value="5">Mobile App Development</option>
                        <option value="5">Ethical Hacking</option>
                        <option value="5">Software Testing</option>
                        <option value="5">Excel</option>
                        <option value="5">Tally</option>
                    </select>
                </td>
            </tr>
            <td>Courses Applied For</td>
            <td><input type="text" name="f_courses_applied" maxlength="100" />
            <!----------------------- Submit and Reset ------------------------------->
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
</form>  
</body>
</html>