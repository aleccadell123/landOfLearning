<?php

																// CONNECT

$dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'testdb0';

mysql_connect("$dbhost","$username","$password");
// echo "Connected";

mysql_select_db($db);
// echo "Connected to db ";

																// QUERY WORD


$query="SELECT * FROM word WHERE day = current_date() LIMIT 1";
	if($result=mysql_query($query))
	{
		// echo "Query executed";
		
		while ($query_execute=mysql_fetch_assoc($result)) {
			$word = $query_execute['word'];
			$definition = $query_execute['definition'];
			$definitionB = $query_execute['definitionB'];
		}
	}
	else
	{
		echo "Query not executed";
	}

																// QUERY DATE


$query="SELECT * FROM date WHERE day = current_date() LIMIT 1";
	if($result=mysql_query($query))
	{
		// echo "Query executed";
		
		while ($query_execute=mysql_fetch_assoc($result)) {
			$date = $query_execute['date'].'<br>';
			$event = $query_execute['event'].'<br>';
			$eventB = $query_execute['eventB'].'<br>';
		}
	}
	else
	{
		echo "Query not executed";
	}

																// QUERY PERSON


$query="SELECT * FROM person WHERE day = current_date() LIMIT 1";
	if($result=mysql_query($query))
	{
		// echo "Query executed";
		
		while ($query_execute=mysql_fetch_assoc($result)) {
			$person = $query_execute['person'].'<br>';
			$description = $query_execute['description'].'<br>';
			$descriptionB = $query_execute['descriptionB'].'<br>';
		}
	}
	else
	{
		echo "Query not executed";
	}


?>

																<!-- HTML -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="normalize.css">
 	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Something New</title>
</head>

<body>
	<header>
		<div class='banner'>	
			<h1>Something new everyday...</h1>
		</div>
		<div class='hero'></div>
	</header>
	<content>
										 						<!-- WORD -->
		<div class='item word'>
			<div class="markJar"></div>
				
			<h2>Word:</h2>

			<span><?php echo $word;?></span>

				<div class="array">
					
					<div class="info ans1">		
						<p><?php echo $definition;?></p>
					</div>

					<div class="info ans2">				
						<p><?php echo $definitionB;?></p>
					</div>
					
				</div>

		</div>
										 						<!-- DATE -->
		<div class='item date'>
				<div class="markJar"></div>
			
					<h2>Date:</h2>
					<span><?php echo $date;?></span>

				<div class="info ans1">
					<p><?php echo $event;?></p>
				</div>

				<div class="info ans2">
					<p><?php echo $eventB;?></p>
				</div>

		</div>
										 						<!-- PERSON -->
		<div class='item person'>
				<div class="markJar"></div>
			
					<h2>Person:</h2>
					<span><?php echo $person;?></span>

				<div class="info ans1">
					<p><?php echo $description;?></p>
				</div>

				<div class="info ans2">
					<p><?php echo $descriptionB;?></p>
				</div>

		</div>
	</content>

	<footer>
		
	</footer>
	<script type="text/javascript" src="jquery-3.1.1.js"></script>
	<script type="text/javascript" src="application.js"></script>
</body>
</html>