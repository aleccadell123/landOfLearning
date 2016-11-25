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

		// QUERY

$query="SELECT * FROM word";
	if($result=mysql_query($query))
	{
		// echo "Query executed<br>";
		
		while ($query_execute=mysql_fetch_assoc($result)) {
			$word = $query_execute['word'].'<br>';
			$definition = $query_execute['definition'].'<br>';
		}
	}
	else
	{
		echo "Query not executed";
	}

$query="SELECT * FROM date";
	if($result=mysql_query($query))
	{
		// echo "Query executed<br>";
		
		while ($query_execute=mysql_fetch_assoc($result)) {
			$date = $query_execute['date'].'<br>';
			$event = $query_execute['event'].'<br>';
		}
	}
	else
	{
		echo "Query not executed";
	}

$query="SELECT * FROM person";
	if($result=mysql_query($query))
	{
		// echo "Query executed<br>";
		
		while ($query_execute=mysql_fetch_assoc($result)) {
			$person = $query_execute['person'].'<br>';
			$description = $query_execute['description'].'<br>';
		}
	}
	else
	{
		echo "Query not executed";
	}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="normalize.css">
 	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Land Of Learning</title>
</head>

<body>
	<header>
		<div class='banner'>	
			<h1>Something new for today...</h1>
		</div>
		<div class='hero'></div>
	</header>
	<content>
		<div class='item word'>
				<h2>Word:</h2>
				<span><?php echo $word;?></span>
			<div class="info">				
				<p><?php echo $definition;?></p>
			</div>
		</div>
		<div class='item date'>
				<h2>Date:</h2>
				<span><?php echo $date;?></span>
			<div class="info">
				<p><?php echo $event;?></p>
			</div>
		</div>
		<div class='item person'>
				<h2>Person:</h2>
				<span><?php echo $person;?></span>
			<div class="info">
				<p><?php echo $description;?></p>
			</div>
		</div>
		<div class='item colour'>
			<h2>Colour:</h2>
			<span>Carmine</span>
			<div class="color-sample"></div>
		</div>
		<div class='item quote'>
				<h2>Quote:</h2>
			<div class="info">
				<span id="italics">"All the failures that have taken place have arisen from one cause: the practice of foreign intervention in domestic quarrels. There is no practice which the experience of nations more uniformly condemns, and none which governments more consistently pursue" <br><br> - Lord Salisbury, 1862 </span>
			</div>
		</div>
		<div class='item art'>
			<h2>Art:</h2>
			<span id="artist">Edvard Munch</span>
			<img src="art.jpg" class="picture">
			<span id="italics"> - Melancholy</span>
		</div>
	</content>
	<footer>
		
	</footer>
</body>
</html>