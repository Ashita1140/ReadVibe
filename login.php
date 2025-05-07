<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<div class="d-flex justify-content-center align-items-center vh-100">

		
		<form class="shadow w-450 p-3" 
		      action="php/login.php" 
		      method="post">
			<h4 class="display-4 text-center fs-1">LOGIN</h4>
			<br>
			<?php if(isset($_GET['error'])){ ?>
			<div class="alert alert-danger" role="alert">
               <?php echo $_GET['error']; ?>
            </div>
        <?php } ?>
           
			<div class="mb-3">
				<label class="form-label">User Name</label>
				<input type="text" 
				       class="form-control"
				       name="uname"
				       value="<?php echo (isset($_GET['uname']))?$_GET['uname']: "" ?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Password</label>
				<input type="password" 
				       class="form-control"
				       name="pass">
			</div>
			<button  style="background-color:black" type="submit" class="btn btn-primary">Login</button>
			<button><a href="in.php" class="link-secondary">Sign Up</a></button>
		</form>

	</div>
</body>
</html>