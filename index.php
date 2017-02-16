<?php
	include 'database.php';

	$query = "select * from shouts order by id desc";
	$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shoutbox</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
	<header>
		<h1>SHOUT IT! ShoutBox</h1>
	</header>
	<div id="shouts">
		<ul>
		<?php while ($row = mysqli_fetch_assoc($shouts)) {?>
	
			<li class="shout"><span><?php echo $row['time'];?>PM - </span><strong> <?php echo $row['user'];?>:</strong> <?php echo $row['message'];?></li>

		<?php		}	 ?>
			
		</ul>
	</div>
	<div id="input">
		<?php if (isset($_GET['error'])) {	?>
			<div class="error"><?php echo $_GET['error'];?></div>
		<?php 	}	 ?>
		<form method="POST" action="process.php">
			<input type="text" name="user" placeholder="Enter your Name">
			<input type="text" name="message" placeholder="Enter your Message">
			<br />
			<input class="shout-btn" type="submit" name="submit" value="Shout it Out">
		</form>
	</div>
	</div>

</body>
</html>