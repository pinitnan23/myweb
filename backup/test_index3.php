<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #3366CC;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 20%;
    height: 600px; /* only for demonstration, should be removed */
    background: #CCFFFF;
    padding: 20px;
	text-align: center;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
	text-align: center;
    float: left;
    padding: 20px;
    width: 80%;
    background-color: #f1f1f1;
    height: 600px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #003366;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#"><h1>สมัคร Run</h1></a></li>
      <li><a href="#"><h1>ตรวจสอบ BIB</h1></a></li>
      <li><a href="#"><h1>ดูแผนที่ เส้นทางวิ่ง</h1></a></li>
    </ul>
  </nav>
  
  <article>
    <h1>ฉันจะ Run For ตุ๊กตู่</h1>
	
    <?php
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
		echo "Firstname: ".$firstname;
		echo "<br>";
		echo "Lastname: ".$lastname;
		echo "<br>";
		echo "Nickname: ".$nickname;
		echo "<br>";
		echo "Nationality: ".$nationality;
		echo "<br>";
		echo "Gender: ".$gender;
		echo "<br>";
		echo "Date of Birth: ".$day;
		echo "<br>";
		echo "Address: ".$address;
		echo "<br>";
		echo "ตำบล: ".$tambon ;
		echo "<br>";
		echo "District: ".$district;
		echo "<br>";
		echo "Province: ".$province;
		echo "<br>";
		echo "Telephone number: ".$telephone;
		echo "<br>";
		echo "E-mail: ".$email;
		echo "<br>";
		echo "โรคประจำตัว: ".$disease;
		echo "<br>";
		echo "ขนาดของเสื้อ: ".$size;
		echo "<br>";
		echo "ประเภทของการวิ่ง: ".$typeR;
	?>
    <p>กขคง กขคงกขคงกขคงกขคงกขคงกขคงกขคงกขคงกขคง  กขคงกขคงกขคงกขคง  กขคงกขคงกขคงกขคง   </p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>