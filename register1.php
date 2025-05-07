<?php
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$num = $_POST['num'];
$no2 = $_POST['no2'];
$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($username) && !empty($firstname) && !($lastname) && !empty($num) && !empty($no2) && !empty($email) && !empty($password))
{
	$server = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "youtube";

	$conn = new mysqli($server,$dbusername,$dbpassword,$dbname);

	if(mysqli_connect_error())
	{
		die('Connected Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		$select = "SELECT email FROM register1 WHERE email = '$email' LIMIT 1";

		$result = $conn->query($select);

		if(mysqli_num_rows($result)>0)
		{
			echo "Email address already registered!";
		}
		else
		{
			$insert = "INSERT FROM register1(username,firstname,lastname,num,no2,email,password) values ('$username','$firstname','$lastname','$num','$no2','$email','$password')";

			$results = $conn->query($insert);

			if($results>0)
			{
				echo "Succesfully registered!";
			}
			else
			{
				echo "Something went wrong!";
			}
		}
	}
}
else
{
	echo "All the fields are required!";
}

?>
