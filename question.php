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
body{ background-color:	#00FFFF;}
h1{ background-color:red;
  font-family:arial;
    text-align:center;}
#question
{ height:100%;
width:90%;
margin-left:5%;
background-color:green;
padding:10px 10px 10px 10px;
text-align:center;
border:1px solid black;}
</style>
<h1> QUESTIONS</h1>
<div id="question">
<form action="" method="POST">
QUESTION:
<br><input type="text" name="question" value="" style="width:1000px;"><br>
OPTION1:<input type="text" name="opt1" value=""><br>	
OPTION2:<input type="text" name="opt2" value=""><br>
OPTION3:<input type="text" name="opt3" value=""><br>
OPTION4:<input type="text" name="opt4" value=""><br>
<select id="correct" name="correct">
<center>
<option value="1">option1</option>
<option value="2">option2</option>
<option value="3">option3</option>
<option value="4">option4</option>
</select>
<br>
<center>
<button type= "submit" class="btn btn-default" name="submit">submit</button><br>
</center>
</form>
</div>
<?php
require'login.php';
if(isset($_POST['submit'])){
$question=$_POST['question'];
$opt1=$_POST['opt1'];
$opt2=$_POST['opt2'];
$opt3=$_POST['opt3'];
$opt4=$_POST['opt4'];
$correct=$_POST['correct'];
 $conn=new mysqli("localhost","root","","register");
if(!empty($opt1)&&!empty($opt2)&&!empty($opt3)&&!empty($opt4)&&!empty($correct))
{if($conn->connect_error)
{die("connection failed:".$conn->connect_error);}
$username=$_SESSION['username'];

 $sql1="INSERT INTO question(question,option1,option2,option3,option4,correct,username) VALUES('$question','$opt1','$opt2','$opt3','$opt4','$correct','$username')";
if($conn->query($sql1)==TRUE)
{echo 'success';}}}
else
{ echo 'failure';
}?>
</body>
</html>
