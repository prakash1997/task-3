<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<style>
body{ background-color:	#FF00FF;}
h1{ background-color:red;
font-family:courier;
text-align:center;}
#form_div
{
 height:100%;
width:70%;
margin-left:15%;
background-color:pink;
padding:10px 10px 10px 10px;
text-align:center;
border:1px solid black;
}
</style>

<h1> QUIZFALL</h1>
<div id="form_div">
<h2> LOGIN</h2>
<form action="" method="POST">
USERNAME:<input type="text" name="username" value=""><br>
PASSWORD:<input type="password" name="password" value=""><br>
SUBMIT:<button type="submit" class="btn btn-default" name="submit">submit</button><br>
</form>
<a href="register.php"><b>click the register option to become a user</b></a>
</div>
<?php
if(isset($_POST['submit']))
{$username=$_POST['username'];
 $password=$_POST['password'];
if(empty($username)||empty($password))
{ echo 'enter a username or password';}
else 
{$conn=new mysqli("localhost","root","","register") or die("could connect to server : ".mysqli_connect_error());
$result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' ");
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0 ){
if(!strcmp($_POST['password'],$row['password'])){

$_SESSION['username'] = $username;
$moveto = "login.php";
header("Location: ".$moveto);}}
else {echo 'enter valid password or username';}}}
						
?>
</body>
</html>
