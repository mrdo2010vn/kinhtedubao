<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $page_title;?></title>
	<link rel="stylesheet" href="./css/bootstrap.min.css" />
	<link rel="stylesheet" href="./css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="./css/style.css" />
	<script src="./js/bootstrap.min.js"></script>
</head>
<?php 
	if (isset($_POST['submit'])){
		$message = null;
		// check user
		if (empty($_POST['user'])){
			$message .= '<div class="alert alert-danger">User field is required.</div>';
			$user = false;
		} else $user = $_POST['user'];
		// check pass
		if (empty($_POST['pass'])){
			$message .= '<div class="alert alert-danger">Pass field is required.</div>';
			$pass = false;
		} else $pass = $_POST['pass'];
		//check user and pass in database
		if ($user && $pass){
			require_once 'connection.php';
			$query = "SELECT id FROM account WHERE user='$user' AND pass=PASSWORD('$pass')";
			$result = mysql_query($query);
			if (mysql_num_rows($result) != 0) {
				$row = mysql_fetch_array($result,MYSQL_NUM);
				session_start();
				$_SESSION['userid'] = $row[0];
				header('LOCATION: post.php');
				exit();
			} else {
				$message = '<div class="alert alert-danger">User and password is
					not correct.</div>';
			}
		}
	}
?>
<body>
	<div class="login col-md-5">
<?php 
	//display message
	if (isset($message)){
		echo '<div class="row col-md-11 col-md-offset-1">'.$message.'</div>';
	}
?>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="form-horizontal" method="post">
			<div class="form-group">
				<label for="user" class="col-md-3 control-label">User name</label>
				<div class="col-md-9"><input type="text" name="user" id="user" 
					class="form-control" /></div>
			</div>

			<div class="form-group">
				<label for="pass" class="col-md-3 control-label">Password</label>
				<div class="col-md-9"><input type="password" name="pass" id="pass" 
					class="form-control" /></div>
			</div>

			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<button type="submit" name="submit" class="btn btn-primary">OK</button>
					<button type="reset" name="reset" class="btn btn-default">Cancel</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>