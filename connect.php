<?php

		// CONNECT

$dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'testdb0';

mysql_connect("$dbhost","$username","$password");
// echo "Connected";

mysql_select_db($db);
echo "Connected to db ";

		// QUERY

$query="SELECT * FROM word";
	if($result=mysql_query($query))
	{
		echo "Query executed<br>";
		
		while ($query_execute=mysql_fetch_assoc($result)) {
			// echo "<table>
			// 			<tr>
			// 				<td>'$query_execute['word'].'</td>
			// 				<td>'$query_execute['definition'].'</td>
			// 			</tr>
			// 	  </table>";
			echo $query_execute['word'].'<br>';
			echo $query_execute['definition'].'<br>';
		}
	}
	else
	{
		echo "Query not executed";
	}

?>