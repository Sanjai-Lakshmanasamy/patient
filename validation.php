<?php
if($_POST)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient details";

    $name=$_POST['name'];
    $regid=$_POST['regid'];
    $co=$_POST['co'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $bloodgroup=$_POST['bloodgroup'];
    $weight=$_POST['weight'];
    $address=$_POST['address'];
    $reason=$_POST['reason'];
    $doctor=$_POST['doctor'];
    $admit=$_POST['admission'];
    $discharge=$_POST['discharge'];
    $prescription=$_POST['prescription'];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO details (name, regid, co, age, gender, mobile, blood_group, weight, address, reason, doctor, admit, discharge, prescription)
    VALUES ('$name' , '$regid', '$co' , '$age' , '$gender', '$mobile', '$bloodgroup', '$weight', '$address', '$reason', '$doctor', '$admit', '$discharge', '$prescription' )";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>Details are sucessfully registered</h1>";
        echo "<a href='form.html'>Enter new patient?</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<html>
    <head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
            </script>
        <script src="form2.js" ></script>
<style>
h1 {text-align: center;}
h2 {text-align: center;}
.center {
  margin: auto;
  width: 30%;
  border: 3px solid green;
  padding: 30px;
}

</style>
<style>
body {
  background-image: url('https://img.freepik.com/free-vector/hospital-building-ambulance-car_107791-2699.jpg?size=626&ext=jpg&ga=GA1.2.1311593656.1600410366'), url('https://www.skfin.in/img/go-green.png'),url('https://www.clipartkey.com/mpngs/m/5-56347_welcome-to-our-website-blue-stethoscope-heart-clipart.png');
  background-repeat: no-repeat,no-repeat,no-repeat;
  background-position: left bottom ,left top,right bottom;
  margin-right: 140px;
  padding: 20px;
}
</style>   
    </head>
    <body style="background-color:#f7f3f2;">

	<div class="center">
    <action="validation.php"  onsubmit="return validate()" method="POST">
    <table>
            
      <tr>
	<h1>AA Hospitals (Care & Cure)</h1> 
	
    <h2>  Patient Registration Details</h2>
    <hr>
          <td>Name :</td>
          <td>
              <input type="text" id="name" name="name" >
        </td>
      </tr> 
	<tr>
          <td>Reg.Id :</td>
          <td>
              <input type="text" id="regid" name="regid">
        </td>
      </tr>  
      <tr>
          <td>C/O :</td>
          <td>
              <input type="text" id="co" name="co">
        </td>
      </tr> 
      <tr>

	  <td>Age :</td>
          <td>
              <input type="text" id="age" name="age">
            
        </td>
      </tr>
	<tr>
	<td>Gender :</td>
          <td>
              <input type="text" id="gender"  name="gender">
        </td>
      </tr>
      <tr>

	  <td>Mobile No :</td>
          <td>
              <input type="text" id="mobile" onkeyup="vmobile()">
            <p id="mobile-warn"></p>
        </td>
      </tr>
      <tr>
	<td>Blood Group :</td>
          <td>
              <input type="text" id="bloodgroup" name="bloodgroup">
        </td>
      </tr>
	<tr>
	<td>Weight (in kgs) :</td>
          <td>
              <input type="text" id="weight" name="weight">
        </td>
      </tr>
      <tr>
	 <td>Address :</td>
          <td>
              <input type="text" id="address" name="address" style="height:80px;font-size:15pt;">
        </td>
      </tr>
	<tr>
	<td>Reason :</td>
          <td>
              <input type="text" id="reason" name="reason" >
        </td>
      </tr>
	<tr>
	<td>Doctor Name :</td>
          <td>
              <input type="text" id="doctor" name="doctor" >
        </td>
      </tr>
	<tr>
	<td>Admit Date :</td>
          <td>
              <input type="text" id="admit" name="admit" >
        </td>
      </tr>
	<tr>
	<td>Discharge Date :</td>
          <td>
              <input type="text" id="discharge" name="discharge" >
        </td>
      </tr>
	<tr>
	<td>Prescription :</td>
          <td>
              <input type="text" id="prescription" name="prescription" >
        </td>
      </tr>
	<br>
      <tr style="text-align: center;">
          <td  colspan="2"><input type="submit" value="Submit"></td>
      </tr> 
        </table>
</form>
</div>
    </body>
</html>