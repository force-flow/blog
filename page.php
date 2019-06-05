<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
</head>
<body>
<?php 
	include 'database.php'
 ?>
 <?php $index = $_GET['index'] ?>
 	<h1>БЛОГ</h1>
 	<hr>
	<div class="box2">
		<h1><?php echo $database[$index]['title']; ?></h1>
		<div class="box3">
		<p><?php echo $database[$index]['long'];?></p>			
		</div>

		<img src='<?php echo $database[$index]['img'] ?>'>
	</div>
</body>
</html>