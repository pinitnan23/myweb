<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// define variables and set to empty values
$firstname = $lastname = $nickname = $nationality = $gender = $day = $address = $tambon = $district = $province = $telephone = $email = $disease = $size = $typeR = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  $firstname = test_input($_POST["firstname"]);
		  $lastname = test_input($_POST["lastname"]);
		  $nickname = test_input($_POST["nickname"]);
		  $Nationality = test_input($_POST["nationality"]);
		  $gender = test_input($_POST["gender"]);
		  $day = test_input($_POST["day"]);
		  $address = test_input($_POST["address"]);
		  $tambon = test_input($_POST["tambon"]);
		  $district = test_input($_POST["district"]);
		  $province = test_input($_POST["province"]);
		  $telephone = test_input($_POST["telephone"]);
		  $email = test_input($_POST["email"]);
		  $disease = test_input($_POST["disease"]);
		  $size = test_input($_POST["size"]);
		  $typeR = test_input($_POST["typeR"]);
		}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
//insert data
$sql = "INSERT INTO pyok (firstname,lastname,nickname,nationality,gender,day,address,tambon,district,province,telephone,email,disease,size,typeR) 
VALUES ('$firstname','$lastname','$nickname','$nationality','$gender','$day','$address','$tambon','$district','$province','$telephone','$email','$disease','$size','$typeR')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>