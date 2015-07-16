<?php
session_start();?>
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
body{ background-color:violet;}
h1{ background-color:blue;
   font-family:arial;}
#answer
{ height:100%;
width:90%;
margin-left:5%;
background-color:pink;
padding:10px 10px 10px 10px;
text-align:center;
border:1px solid black;}</style>
<center><h1>ANSWER THE QUESTIONS BELOW</h1></center>
<div id="answer">
<?php $conn=new mysqli("localhost","root","","register");
$username=$_SESSION['username'];

$result = mysqli_query($conn,"SELECT * FROM question WHERE username!='$username' ");
$row = mysqli_fetch_assoc($result);
if((mysqli_num_rows($result) > 0 )){	
echo '<form action="" method="POST">
<input type="hidden" name="question" value='.$row["question"].' >
<input type="disabled"  value='.$row["question"].' >
OPTION1:<input type="text" name="opt1" disabled value='.$row["option1"].' ><br>	
OPTION2:<input type="text" name="opt2" disabled value='.$row["option2"].'><br>
OPTION3:<input type="text" name="opt3"disabled value='.$row["option3"].' ><br>
OPTION4:<input type="text" name="opt4" disabled value='.$row["option4"].'><br>
<select id="correct" name="answer">
<center>
<option value="1">option1</option>
<option value="2">option2</option>
<option value="3">option3</option>
<option value="4">option4</option>
</select>
</center>
<br>
submit:<button type="submit" class="btn btn-default" name="submit">submit</button>
</form>
</div>
<a href="logout.php"> click here to logout</a>';
}
?>
<?php
if(isset($_POST['submit']))
{
$conn=new mysqli("localhost","root","","register");
$question=$_POST['question'];
$answer=$_POST['answer'];
$sql="SELECT * FROM question WHERE question=$question";
 $result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if((mysqli_num_rows($result) > 0) ){
if($row['correct']==$answer)
{ echo 'correct';$username=$_SESSION['username'];
$conn=new mysqli("localhost","root","","register");
$sql = "UPDATE user SET points=points+1 WHERE username='$username'";
$conn->query($sql);
} else { echo 'wrong ans';$username=$_SESSION['username'];
$conn=new mysqli("localhost","root","","register");
$sql = "UPDATE user SET points=points-1 WHERE username='$username'";
$conn->query($sql);
}}




}
?>
</body>
</html>





