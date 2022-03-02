<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form class="form1" method="post" action="">
            <div class="reg-text">
                Registration Page
            </div>
            <input class="input1" type="text" placeholder="Fullname" name="Full_name" />
            <input class="input1" type="text" placeholder="Username" name="Username" />
            <input class="input1" type="password" placeholder="Password" name="Password" />
            <input class="input1" type="password" placeholder="Confirm Password" />
            <input class="input1" type="text" placeholder="Email" name="Email" />
            <input class="input1" type="text" placeholder="Phone" name="Phone" />
            <input class="input1" type="date" placeholder="Date of Birth" name="Date" />
            <input class="input1" type="number" placeholder="Social Security Number" name="SSN" />
            <input class="input1" type="submit" name="submitButton" />
        </form>
        <form class="form2">
            <div class="login-text">
                Login Page
            </div>
            <input type="text" required placeholder="Username" class="input2" />
            <input type="password" required placeholder="Password" class="input2" />
            <input class="input2" type="submit" name="submit2" />
        </form>
    </div>
</body>

</html>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "batata";


// // Create connection
$conn = new mysqli($host, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo 'the database is working<br>';
}

// $_GET["Full_Name"]

if (isset($_POST['submitButton'])) {
    $username = $_POST['Username'];
    $fullName = $_POST['Full_name'];
    $password = $_POST['Password'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $birth_date = $_POST['Date'];
    $ssn = $_POST['SSN'];



    $sql = "INSERT INTO `Registration` (Full_name, Username, Password,Email,Phone,Birth_Date,SSN)
VALUES ($fullName, $username, $password, $email, $phone, $birth_date,$ssn)";
    echo $sql;
    // $result = $conn -> query($sql);
    // $result = mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
// if ($conn->query($sql)) {
//     printf("Record inserted successfully.<br />");
//  }

// if($result){
//     echo 'the query worked';
// } else {
//     echo 'the query did not work';
// }

// echo $result;
// if ($result) {
//     while ($row = $result -> fetch_row()) {
//       printf ("%s (%s)\n", $row[0], $row[1]);
//     }
//     $result -> free_result();
//   }




// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();



// 

// mysqli_connect($host,$user,$password);
// mysqli_select_db($db);

// if(isset($_POST['username'])){

//     $uname=$_POST['username'];
//     $password=$_POST['password'];

//     $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";

//     $result=mysqli_query($sql);

//     if(mysqli_num_rows($result)==1){
//         echo " You Have Successfully Logged in";
//         exit();
//     }
//     else{
//         echo " You Have Entered Incorrect Password";
//         exit();
//     }


?>