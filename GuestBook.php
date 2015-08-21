<head>
<title>Adam and Lindsey - Guest Book</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="viewport" content="width=750, initial-scale=1,maximum-scale=1,user-scalable=1" />
<link href="GrayPink.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.0.min.js"></script>

	<script>
	
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50597051-1', 'adamandlindsey.co.uk');
  ga('send', 'pageview');

</script>
</head>
<body>

<?php

if(isset($_POST["Submit"]))
{

$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password="weasel"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="guestbook"; // Table name 

$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];

// Connect to server and select database.
 mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
 mysql_select_db("$db_name")or die("cannot select DB");

date_default_timezone_set("Europe/London");

$datetime=date("d/m/y h:i:s"); //date time

$comment = str_replace("'","''", $comment);

 $sql="INSERT INTO $tbl_name(name, email, comment, datetime)VALUES('$name', '$email', '$comment', '$datetime')";
 $result=mysql_query($sql);

//check if query successful 
 if($result){
}
 else {
 echo(error_get_last());
 }
mysql_close();

}?>

<div id="t-container">
<div id="t-header">
<h1><span></span></h1>
<h2><span></span></h2>
<div id="t-header-image"><img id="headerImage" src="header.png" alt="Adam and Lindsey" /></div>
</div>
<div id="t-center">
    <?php include("Menu.php"); ?>
<div id="t-content">
<a name="content"></a>
<div id="c-home-container" class="c-container">

<table border="0" cellspacing="0" cellpadding="0">

<tr><td><img src="frame1.png" /></td><td><img src="frame8.png" /></td><td><img src="frame7.png" /></td></tr>
<tr><td><img src="frame2.png" /></td>

<td>

<div id="guest" style="width:454px;height:355px;background-color:gainsboro;color:#656767;">




 <p style="color:#656767;padding:10px;">
 <strong>Please feel free to sign our Guestbook </strong>
 </p>

<form id="form1" name="form1" method="post" action="GuestBook.php">

 <table style="color:#656767;background-color:gainsboro;padding:10px;" width="400" border="0" cellpadding="3" cellspacing="1">
	 <tr>
	 <td width="117">Name</td>
	 <td width="14">:</td>
	 <td width="357"><input name="name" type="text" id="name" size="40" /></td>
	 </tr>
	 <tr>
	 <td>Email</td>
	 <td>:</td>
	 <td><input name="email" type="text" id="email" size="40" /></td>
	 </tr>
	 <tr>
	 <td valign="top">Comment</td>
	 <td valign="top">:</td>
	 <td><textarea name="comment" cols="40" rows="4" id="comment"></textarea></td>
	 </tr>
	 <tr>
	 <td>&nbsp;</td>
	 <td>&nbsp;</td>
	 <td style="padding-top:5px"><input style="padding:5px" type="submit" name="Submit" value="Add Comment" /></td>
	 </tr>
 </table>
</form>


 <br/>

</div>
</td>
<td><img src="frame6.png" /></td></tr>
<tr><td><img src="frame3.png" /></td><td><img src="frame4.png" /></td><td><img src="frame5.png" /></td></tr>

</table>

</div>

<div class="c-text">


<br/>

<b><center><h2>Guest Book Entries</h2></center></b>
<br/>
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


$sql="SELECT * FROM $tbl_name ORDER BY id desc";
 $result=mysql_query($sql);


while($rows=mysql_fetch_array($result)){
 ?>

 <table style="color: #f5f5f5;background-color: transparent" width="610px" border="0" cellpadding="4" cellspacing="1" >
 <tr>
 <td width="100px"><b>Name:</b></td>
 <td width="510px"><? echo $rows['name']; ?></td>
 </tr>
 <tr>
 <td width="100px"><b>Email:</b></td>
 <td width="510px"><? echo $rows['email']; ?></td>
 </tr>
 <tr>
 <td width="100px" valign="top"><b>Comment:</b></td>
 <td width="510px"><? echo $rows['comment']; ?></td>
 </tr>
 <tr>
 <td width="100px" valign="top"><b>Date/Time:</b></td>
 <td width="510px"><? echo $rows['datetime']; ?></td>
 </tr>
 </table>

 <br/>

<?php
 }
 mysql_close(); //close database
 ?>


</div>

</div>
</div>
<div id="t-footer">
<p>
<?php include("DaysLeft.php"); ?> </p>
</div>
</div>

<script>

$("#lnkGuestBook").css("font-weight","bold");

</script>
</body>
</html>
