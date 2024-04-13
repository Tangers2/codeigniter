<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('library/css/bootstrap.css')?>">
</head>
<body>
<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
	<a href="<?php echo base_url('index.php/srms/new_rec')?>" class="btn btn-success">New Record</a>
	<table class="table table-bordered table-striped">
		<tr>
			<th>SEQ</th>
			<th>STUDENT ID</th>
			<th>LASTNAME</th>
			<th>FIRSTNAME</th>
			<th>MIDDLENAME</th>
			<th>ACTION</th>
		</tr>
	<?php
	 $counter = 1;
	 foreach ($students as $student){
		echo '<tr>';
		echo '<td>'.$counter.'</td>';
		echo '<td>'.$student['student_id'].'</td>';
		echo '<td>'.$student['lname'].'</td>';
		echo '<td>'.$student['fname'].'</td>';
		echo '<td>'.$student['mname'].'</td>';
		echo '</tr>';
		$counter++;
	 }

	?>
	</table>

</body>
</html>
