<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>All Tasks</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<?php 
	$userID = $_SESSION['userID'];
?>
<div class="header">
	<h2>Welcome <?php echo $_SESSION["userFname"]; ?></h2>
</div>

	
		<h4><a href="index.php?page=accounts&action=logout">Logout</a></h4> <br>
		<h4><a href="index.php?page=accounts&action=edit&id=<?php echo $userID; ?>">Edit Your Profile</a></h4><br>
		<h4><a href="index.php?page=accounts&action=show&id=<?php echo $userID; ?>">View Your Profile</a></h4><br>



	<h4><a href="index.php?page=tasks&action=create">Create a Task</a></h4>


	

<?php
print utility\htmlTable::genarateTableFromMultiArray($data);
?>


<script src="js/scripts.js"></script>
</body>
</html>