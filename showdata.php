<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="table table-bordered text-center border-dark border-1 text-dark">
                    <thead class="bg-danger text-white border-1 border-black">
                    <tr>
                        <th>id</th>
                        <th>Enquiry ID</th>
                        <th>Rgistration ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email ID</th>
                        <th>Mobile Number</th>
                        <th>Alternate Number</th>
                        <th>Gender</th>
                        <th>Date Of Birth</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Pincode</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Qualification</th>
                        <th>Qualification Specialization</th>
                        <th>Courses</th>
                        <th>Courses Applied</th>
                    </tr>
                    </thead>
                 
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sketo");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM registrationform";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        // echo "<table border border-dark>";
        //     echo "<tr>";
        //         echo "<th>id</th>";
        //         echo "<th>Enquiry ID</th>";
        //         echo "<th>Rgistration ID</th>";
        //         echo "<th>First Name</th>";
        //         echo "<th>Middle Name</th>";
        //         echo "<th>Last Name</th>";
        //         echo "<th>Email ID</th>";
        //         echo "<th>Mobile Number</th>";
        //         echo "<th>Alternate Number</th>";
        //         echo "<th>Gender</th>";
        //         echo "<th>Date Of Birth</th>";
        //         echo "<th>Address</th>";
        //         echo "<th>City</th>";
        //         echo "<th>Pincode</th>";
        //         echo "<th>State</th>";
        //         echo "<th>Country</th>";
        //         echo "<th>Qualification</th>";
        //         echo "<th>Qualification_Specialization</th>";
        //         echo "<th>Courses</th>";
        //         echo "<th>Courses_Applied</th>";
        //     echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['d_enquiry_id'] . "</td>";
                echo "<td>" . $row['d_registration_id'] . "</td>";
                echo "<td>" . $row['d_first_name'] . "</td>";
                echo "<td>" . $row['d_middle_name'] . "</td>";
                echo "<td>" . $row['d_last_name'] . "</td>";
                echo "<td>" . $row['d_email_id'] . "</td>";
                echo "<td>" . $row['d_mobile_number'] . "</td>";
                echo "<td>" . $row['d_alternate_number'] . "</td>";
                echo "<td>" . $row['d_gender'] . "</td>";
                echo "<td>" . $row['d_date_of_birth'] . "</td>";
                echo "<td>" . $row['d_address'] . "</td>";
                echo "<td>" . $row['d_city'] . "</td>";
                echo "<td>" . $row['d_pincode'] . "</td>";
                echo "<td>" . $row['d_state'] . "</td>";
                echo "<td>" . $row['d_country'] . "</td>";
                echo "<td>" . $row['d_qualification'] . "</td>";
                echo "<td>" . $row['d_qualification_specialization'] . "</td>";
                echo "<td>" . $row['d_courses'] . "</td>";
                echo "<td>" . $row['d_courses_applied'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

   
</table>
            </div>
        </div>    
    </div>
</body>
</html>