<html lang="en">
<head>
<title>Russian Presidents</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Presidents of the Russian Federation</h1>
<table>
	<tr><th>surname</th><th>name</th><th>second_name</th><th>year_of_birth</th></tr>
<?php
$db_host = getenv('DB_URL');
$db_user = getenv('USER_NAME');
$db_pass = getenv('USER_PASSWORD');
$db_name = getenv('DB');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
$result = $mysqli->query("SELECT * FROM presidents");
foreach ($result as $row){
	echo "<tr><td>{$row['surname']}</td><td>{$row['name']}</td><td>{$row['second_name']}</td><td>{$row['year_of_birth']}</td></tr>";
}
?>
</table>
<?php
phpinfo();
?>
</body>
</html>
