<?php require_once 'dbconfig.php'; ?>
<?php require_once 'models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Welcome To DIWATA! BARBERSHOP OVERLOAD!</h1>
    <h2>For barbers please register, for customer pick your barber from the records.</h2>
	<form action="handleforms.php" method="POST">
		<p>
			<label for="fname">First Name</label> 
			<input type="text" name="fname">
		</p>
		<p>
			<label for="lname">Last Name</label> 
			<input type="text" name="lname">
		</p>
		<p>
			<label for="duty">Duty</label> 
			<input type="date" name="duty">
		</p>
		<p>
			<label for="contact_number">Contact Number</label> 
			<input type="text" name="contact_number">
			<input type="submit" name="insertBarberBtn">
		</p>
	</form>
	<?php $getAllBarbers = getAllBarbers($pdo); ?>
	<?php foreach ($getAllBarbers as $row) { ?>
	<div class="container" style="border-style: solid; width: 50%; height: 300px; margin-top: 20px;">
		<h3>FirstName: <?php echo $row['fname']; ?></h3>
		<h3>LastName: <?php echo $row['last_name']; ?></h3>
		<h3>Date Of Birth: <?php echo $row['duty']; ?></h3>
		<h3>Specialization: <?php echo $row['contact_number']; ?></h3>


		<div class="editAndDelete" style="float: right; margin-right: 20px;">
			<a href="viewprojects.php?web_dev_id=<?php echo $row['web_dev_id']; ?>">View Projects</a>
			<a href="editwebdev.php?web_dev_id=<?php echo $row['web_dev_id']; ?>">Edit</a>
			<a href="deletewebdev.php?web_dev_id=<?php echo $row['web_dev_id']; ?>">Delete</a>
		</div>


	</div> 
	<?php } ?>
</body>
</html>