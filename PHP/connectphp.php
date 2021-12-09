<?php
$dir = 'sqlite:BANCO.db';
$dbh  = new PDO($dir) or die("cannot open the database");
$query =  "SELECT * FROM student WHERE sex='male'";
foreach ($dbh->query($query) as $row)
{
  echo "$row[1] <br>";
}
?>