<?php
/*
if( isset($_GET['name'])) { 

// The isset function is used to check whether the variable is set or submitted so as to proceed with the if statement. If you do not use this function there will be an 'Undefined index name error'. This is because we have not submitted the value of the variable.

	echo htmlentities ($_GET['name']); This htmlentities is used to offer security from script attacks.
	echo $_GET['email'];
	print_r($_GET);// Will output the values in array format. Index and the value.
	}
if( isset($_POST['name'])) {

	echo $_POST['name'];
	echo $_POST['email'];
	print_r($_POST);
	}

if( isset($_REQUEST['name'])) { 

// It will output no matter the method used in submiting the form, whether get or post.

	echo $_REQUEST['name'];
	echo $_REQUEST['email'];
	print_r($_REQUEST);
}
echo $_SERVER['QUERY_STRING'];
*/
include 'Gym.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Get and Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="gym">
		<form class="form1" method="POST" action="get_exercise.php">
			<div>
				<label>Name</label><br>
				<input type="text" name="name">
			</div>
			<br>
			<div>
				<label>Email</label><br>
				<input type="email" name="email">
			</div>
			<br>
			<div>
				<p>Click the submit button to check todays workout</p>
			</div>
			<div>
				<input type="submit" value="Submit">
			</div>
		</form>
		<div>
			<?php if (isset($_POST['email'])): ?>
				<?php if ($date == 'Monday'): ?>
					<ul>
						<?php foreach($Workout_A as $key=>$values): ?>
							<li>
							<strong><?php echo $key; ?></strong>
								<?php echo $values; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php elseif( $date == 'Wednesday'): ?>
					<ul>
						<?php foreach($Workout_B as $key => $values): ?>
							<li>
								<strong><?php echo $key; ?></strong>
								<?php echo $values; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php elseif ($date == 'Friday'): ?>
					<ul>
						<?php foreach($Workout_A as $key => $values): ?>
							<li>
								<strong><?php echo $key; ?></strong>
								<?php echo $values; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php else: ?>
					<ul>
						<li>
							<p><strong>Resting day</strong></p>
						</li>
					</ul>
				<?php endif; ?>		
			<?php endif; ?>		
		</div>
	</div>
</body>
</html>