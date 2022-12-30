


<!-- php code  -->







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
<form action="insert.php" method="post">    
    <h2>Registration Form</h3>

        <table align="center" cellpadding="10">
            <!--------------------- Enquiry ID ------------------------------------------>
            <tr>
                <td>Enquiry ID</td>
                <td><input type="text" name="f_enquiry_id" maxlength="50"placeholder="Enquiry ID" require />
                </td>
            </tr>
            <!--------------------- Registration ID ------------------------------------------>
            <tr>
                <td>Registration ID</td>
                <td><input type="text" name="f_registration_id" maxlength="50"placeholder="Registration ID" require />
                </td>
            </tr>
            <!--------------------- First Name ------------------------------------------>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="f_first_name" maxlength="50"placeholder="First Name" require />
                </td>
            </tr>
            <!--------------------- Middle Name ------------------------------------------>
            <tr>
                <td>Middle Name</td>
                <td><input type="text" name="f_middle_name" maxlength="50"placeholder="Middle Name" require />
                </td>
            </tr>
            <!------------------------ Last Name --------------------------------------->
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="f_last_name" maxlength="50" placeholder="Last Name" require />
                </td>
            </tr>
            <!-------------------------- Email ID ------------------------------------->
            <tr>
                <td>Email ID</td>
                <td><input type="email" name="f_email_id" maxlength="100" placeholder="Email ID" require /></td>
            </tr>
            <!-------------------------- Mobile Number ------------------------------------->
            <tr>
                <td>Mobile Number</td>
                <td>
                    <input type="text" name="f_mobile_number" maxlength="15" placeholder="1234567890" require />
                </td>
            </tr>
             <!-------------------------- Alternate Number ------------------------------------->
             <tr>
                <td>Alternate Number</td>
                <td>
                    <input type="text" name="f_alternate_number" maxlength="15" placeholder="1234567890" require />
                </td>
            </tr>
            <!---------------------- Gender ------------------------------------->
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="f_gender" value="Male" require />
                    Male
                    <input type="radio" name="f_gender" value="Female" require />
                    Female
                </td>
            </tr>
            <!--------------------------Date Of Birth----------------------------------->
            <tr>
                <td>Date of Birth</td>
                <td>
                    <input type="date" name="f_date_of_birth" require />
                    </td>
            </tr>
            <!------------------------- Address ---------------------------------->
            <tr>
                <td>Address<br /><br /><br /></td>
                <td><textarea name="f_address" rows="6" cols="50" require ></textarea></td>
            </tr>
            <!-------------------------- City ------------------------------------->
            <tr>
                <td>City</td>
                <td><input type="text" name="f_city" maxlength="50" require />
                </td>
            </tr>
            <!----- -------------------- Pin Code-------------------------------------->
            <tr>
                <td>Pin Code</td>
                <td><input type="text" name="f_pinCode" maxlength="6" require />
                </td>
            </tr>
            <!---------------------------- State ----------------------------------->
            <tr>
                <td>State</td>
                <td><input type="text" name="f_state" maxlength="50" require />
                </td>
            </tr>
            <!------------------------------ Country --------------------------------->
            <tr>
                <td>Country</td>
                <td><input type="text" name="f_country" require/></td>
            </tr>
            <!-----------------------Qualification---------------------------------------->
            <tr>
                <td>Qualification</td>
                <td>    
                    <select class="form-select" aria-label="Default select example" name="f_qualification" require >
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
            <td><input type="text" name="f_qualification_specialization" maxlength="100" require />
            <!---------------------------- Courses ----------------------------------->
            <tr>
                <td>Courses</td>
                <td>
                    <select class="form-select" aria-label="Default select example" name="f_courses" require >
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
            <td><input type="text" name="f_courses_applied" maxlength="100" require />
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