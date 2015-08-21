<?php
$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password="weasel"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="guestbook"; // Table name 

// Connect to server and select database.
 mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
 mysql_select_db("$db_name")or die("cannot select DB");

date_default_timezone_set("Europe/London");

$datetime=date("y-m-d h:i:s"); //date time

 $sql="INSERT INTO $tbl_name(name, email, comment, datetime)VALUES('$name', '$email', '$comment', '$datetime')";
 $result=mysql_query($sql);

//check if query successful 
 if($result){
 echo "Successful";
 echo "<BR>";

// link to view guestbook page
 echo "<a href='guestbook.php'>View guestbook</a>";
 }

 else {
 echo "ERROR";
 }

mysql_close();
 ?>
