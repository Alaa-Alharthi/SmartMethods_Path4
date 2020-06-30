
<html>

<head>
	<title>Control Panel</title>
	<link rel="shortcut icon" href="favicon.ico" />
	  <meta charset="utf-8">
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="myCss.css">
</head>


<body>
<div class="center">
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "controlpanel";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

	
	if(isset($_POST['F'])){
		print('<div style="font-size:50px;color:#0e3c68;font-weight:bold;">F');
		$sql = "INSERT INTO moves (ForwardB)
		VALUES (true)";}
		if(isset($_POST['B'])){
		print('<div style="font-size:50px;color:#0e3c68;font-weight:bold;">B');
		$sql = "INSERT INTO moves (BackwardB)
		VALUES (true)";}
		if(isset($_POST['L'])){
		print('<div style="font-size:50px;color:#0e3c68;font-weight:bold;">L');
		$sql = "INSERT INTO moves (LeftB)
		VALUES (true)";}
		if(isset($_POST['R'])){
		print('<div style="font-size:50px;color:#0e3c68;font-weight:bold;">R');
		$sql = "INSERT INTO moves (RightB)
		VALUES (true)";}
		if(isset($_POST['S'])){
		$sql = "INSERT INTO moves (StopB)
		VALUES (true)";
		print('<div style="font-size:50px;color:#0e3c68;font-weight:bold;">S');}
	
$conn->query($sql); 
		

 $conn -> close();

		?>
		 </div>
	<br/>
	<br/>
	
	<div class="row mx-auto nav justify-content-center">
	<br/>
	<br/>
	<input type="button" class="btn btn-outline-secondary mx-2" onclick="history.back()" value="Back" />	
	</div>
</body>

</html>