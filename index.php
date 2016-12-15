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
 	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Homepagelearning</title>
</head>

<body>
	<header>
	
	</header> 

	<div class="wrapper">
		
										 						<!-- WORD -->

		<div class='item item__word'>
			
				
			<div class="banner"><?php echo $word;?></div>

			<div class="info ans1">		
				<p><?php echo $definition;?></p>
			</div>

			<div class="info ans2">				
				<p><?php echo $definitionB;?></p>
			</div>

		</div>

										 						<!-- DATE -->

		<div class='item item__date'>
				
			
				<div class="banner"><?php echo $date;?></div>

				<div class="info ans1">
					<p><?php echo $event;?></p>
				</div>

				<div class="info ans2">
					<p><?php echo $eventB;?></p>
				</div>
		</div>

										 						<!-- PERSON -->

		<div class='item item__person'>
				
			
				<div class="banner trueFalse"><?php echo $person;?></div>

				<div class="info ans1">
					<p><?php echo $description;?></p>
				</div>

				<div class="info ans2">
					<p><?php echo $descriptionB;?></p>
				</div>

		</div>

	</div>
	

	<footer></footer>

	<script type="text/javascript" src="jquery-3.1.1.js"></script>
	<script type="text/javascript" src="application.js"></script>
</body>
</html>