<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<div class="d-flex justify-content-center align-items-center vh-100">

		
		<div class="shadow w-450 p-3 text-center">
           <h3 class="display-6 "><b><i>Hello, <?=$_SESSION['fname']?></i></b></h3>
           <br>
           <h3><i>Welcome To <span style="color:grey;">ReadVibe</span></i></h3><br><br><a href="index.html" class="btn btn-warning">Visit Now</a>
           &nbsp
           <a href="logout.php" class="btn btn-warning">Log Out</a>
		</div> 
	</div>
</body>
</html>
<?php }else {
	header("Location: login.php");
	exit;
} ?>