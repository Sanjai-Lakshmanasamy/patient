<!DOCTYPE html>
<html>
<head>
	<title>View Details</title>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "patient details";
	$conn = new mysqli($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);

	if(isset($_POST["login"])) {
		$regid=$_POST["regid"];
		$mobile=$_POST["mobile"];
		$sql="SELECT * FROM details WHERE regid=".$regid." AND mobile=".$mobile.";";
		echo "<table>
			 <tr>
        		<th class='head'>regid</th>
        		<th class='head'>name</th>
        		<th class='head'>mobile</th>
        	 </tr>";
        if($result=$conn->query($sql)) {
           if($result->num_rows)
            while($row=$result->fetch_object())
            {
            	$pid=$row->regid;
 				$name=$row->name;
 				$mobile=$row->mobile;
                
                echo "<tr>
                      <td class='data'>{$regid}</td>
                      <td class='data'><b>{$name}<b></td>
                      <td class='data'>{$mobile}</td>
                    </tr>";
            }
          }
          else 
          {
              echo "<tr><td class='data'> No Database selected</td></tr>";
          }
        echo "</table>";
    }
?>
</body>
</html>