<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form method="post" action="result3.php">  
	First name: <input type="text" name="firstname"> &emsp; 
	Last name: <input type="text" name="lastname"> &emsp;&emsp;&ensp; 
	Nickname: &emsp;<input type="text" name="nickname"> <br><br>
	Nationality: <input type="text" name="nationality" > &emsp; 
	Sex: &emsp; 
		<input type="radio" name="gender" value="male" checked> Male
		<input type="radio" name="gender" value="female"> Female
		<input type="radio" name="gender" value="other"> Other &emsp;&emsp;
	Date of Birth: 
		<input type="date" name="day">
		<input type="submit"> <br><br>
	Portal Address<br> 
	บ้านเลขที่:  <input type="text" name="address"> &emsp;&ensp;  
	ตำบล: &emsp; <input type="text" name="tambon"> &emsp;&emsp;&ensp; 
	อำเภอ:  &emsp; &emsp; <input type="text" name="district"> <br><br>
	Province: &ensp; <input type="text" name="province"> &emsp;
	Tel: &emsp;&emsp;&ensp; <input type="text" name="telephone"> &emsp;&emsp;&ensp;
	E-mail: &emsp;&emsp; <input type="text" name="email" >  &emsp;&emsp;&emsp;  <br><br>
	โรคประจำตัว:  <input type="text" name="disease" > <br><br>
	ขนาดเสื้อ (Size): 
		<input type="radio" name="size" value="ss" checked> SS
		<input type="radio" name="size" value="s"> S
		<input type="radio" name="size" value="m"> M
		<input type="radio" name="size" value="l"> L
		<input type="radio" name="size" value="xl"> XL
		<input type="radio" name="size" value="xl2"> 2XL
		<input type="radio" name="size" value="other"> Other <br><br>
	ประเภทการวิ่งมาราธอน : <br>
		<input type="radio" name="typeR" value="km5" checked> Walk (5 km)
		<input type="radio" name="typeR" value="km11"> Mini Marathon(11 km)
		<input type="radio" name="typeR" value="km21"> Half Marathon(21 km) 
		<input type="radio" name="typeR" value="km42"> Marathon(42 km) <br><br>
	<input type="submit" name="ยืนยันการสมัคร" value="Submit">  
	<p>If you click the "ยืนยันการสมัคร" button, the form-data will be sent to a page called "/test_index2.php".</p>
  
</form>
</body>
</html>
