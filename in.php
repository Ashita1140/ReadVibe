<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<div class="d-flex justify-content-center align-items-center vh-100">

		
		<form class="shadow w-450 p-3" 
		      action="php/signup.php" 
		      method="post">
			<h4 class="display-4 text-center fs-1">Create Account</h4>
			<br>
			<?php if(isset($_GET['error'])){ ?>
			<div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
            </div>
        <?php } ?>
             <?php if(isset($_GET['success'])){ ?>
			<div class="alert alert-success" role="alert">
            <?php echo $_GET['success']; ?>
            </div>
        <?php } ?>
			<div class="mb-3">
				<label class="form-label">Full Name</label>
				<input type="text" 
				       class="form-control"
				       name="fname"
				       value="<?php echo (isset($_GET['fname']))?$_GET['fname']: "" ?>">
			</div>
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
			<button type="submit" style="background-color:black" class="btn btn-primary">Sign Up</button>
			<button><a href="login.php" class="link-secondary">Login</a></button>
		</form>

	</div>
</body>
</html>