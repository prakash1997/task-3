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
body {background-color:#FF00FF;}
h1{ background-color:red;
font-family:courier;
text-align:center;}
#registrants
{
width:70%;
margin-left:15%;
background-color:pink;
padding:10px 10px 10px 10px;
text-align:center;
border:1px solid black;
}

</style>
<h1>Register</h1>
<div id="registrants">
<form action="" method="POST">
USERNAME:<input type="text" name="username" value=" "><br>
PASSWORD:<input type="password" name="password" value=""><br>
SUBMIT:<button type="submit" class="btn btn-success" name="submit">submit</button><br>
<a href="date.php"> if u have account go to homepage</a>
</form>
</div>
<?php
if(isset($_POST['submit']))
{ $username=$_POST['username'];
  $password=$_POST['password'];
if(!empty($username)&&!empty($password))
{$conn=new mysqli("localhost","root","","register");
$result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' ");
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) == 0)
{$sql="INSERT INTO user(username,password) VALUES ('$username','$password')";
if($conn->query($sql)==true)
{echo 'registered successfully
<a href="date.php"> click to login</a>';
}
else
echo $conn->error;
}
 else if(mysqli_num_rows($result)> 0)
{ echo ' already a same username or password is present';

}else { echo 'username or password not present';}
}}?>
</body>
</html>

