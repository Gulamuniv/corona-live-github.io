<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Muli:wght@200&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

</body onload="fetch();">
</html>
<?php 
if (isset($_POST['Submit'])) {
	$username =['username'];
$email =$_POST['email'];
$symptoms =$_POST['symptoms'];
$message =$_POST['message'];
$mobile =$_POST['mobile'];
 $link =mysqli_connect("localhost","root","","ajaxtest") or die("Could not connect".mysqli_connect_error());
$query ="INSERT INTO covid19(username,email,symtop,message,mobile) VALUES('{$username}','{$email}','{$symptoms}','{$message}','{$mobile}')";
$result = mysqli_query($link, $query);
if($result) {
?>
<script type="text/javascript">
	alert("Insert data Successfully!");
</script>
<?php } else 
  {
?>
<script type="text/javascript">
	alert("Something wet to wrong!");
</script>
<?php }
}?>
