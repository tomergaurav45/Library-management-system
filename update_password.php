<?php
	session_start();
	$conn = mysqli_connect("localhost:3307", "root", "gaurav01", "lms");
	$db = mysqli_select_db($conn,"lms");
	$password = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($conn,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['new_password']){
		$query = "update users set password = '$_POST[new_password]' where email = '$_SESSION[email]'";
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Updated successfully...");
			window.location.href = "user_dashboard.php";
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert("Wrong User Password...");
			window.location.href = "change_password.php";
		</script>
		<?php
	}
?>