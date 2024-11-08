<?php

	$id = $_GET['id'];

	$cache_duration = 12 * 60 * 60; // 12 hours in seconds
	header('Cache-Control: public, max-age=' . $cache_duration);
	header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $cache_duration) . ' GMT');

	$dbFile = 'songs.db';

			try {
			    // Create a PDO instance for SQLite
			    $pdo = new PDO("sqlite:$dbFile");

			    // Set the PDO error mode to exception
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			    // If the database is connected successfully
			    //echo "Connected to the SQLite database!";
			} catch (PDOException $e) {
			    // Handle connection errors
			    echo "Connection failed: " . $e->getMessage();
}

			$sql = "SELECT * FROM songs WHERE id=" . $id . ";";

			$stmt = $pdo->prepare($sql);
    
    // Execute the query
    $stmt->execute();
    
    // Fetch all the rows from the result
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Loop through the results and print each user
    //header('Content-Type: application/json');
	//echo json_encode($users);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A brief description of your website">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Your Name">
    <title>Music Blog</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <script defer src="script.js"></script> <!-- Link to your JavaScript file -->
</head>
<body>


	<h2><?php
    echo $users[0]['nombre'];
	?></h2>
    
	<p><?php echo $users[0]['descripcion']; ?></p>
    
	<?php
    echo $users[0]['link'];

    ?>

    


</body>
</html>
