<?php
include('db.php');

?>

<!DOCTYPE html>
<html>

<head>
	<title>Student  System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body{
		margin:0 auto;
	background-color:#;
	background-image:

	}
	.container{
	width:100%;
	height:350px;
	border:1px solid blue;
display:flex;
	padding:20px 20px 20px 20px ;
	padding-right:50px;
			background-color:rgb(105,143,255);
				color:white;
	}
	a{
	text-declaration:non;
		color:white;
	}
	.contint1{
		width:100px;
	height:50px;
	border:1px solid blue;
	margin-left:20px;
	background-color:rgb(105,143,255);
	}
	.contint2{
		width:100px;
	height:50px;
	border:1px solid blue;
	margin-left:20px;
		background-color:rgb(105,143,255);
	}
	.contint3{
		width:100px;
	height:50px;
	border:1px solid blue;
	margin-left:20px;
		background-color:rgb(105,143,255);
	}
	.contint4{
		width:100px;
	height:50px;
	border:1px solid blue;
	margin-left:20px;
		background-color:rgb(105,143,255);
	}
	</style>
</head>

<body dir="rtl">
 <center>
		<h2 class="text-center">نظام لادارة الطلاب </h2><br><br>
		</center>
	<div class="container">
	
		<br>
		<div class="contint1">
		<a href="add.php">
		<h4>
		ادراج طالب جديد
		</h4>
		</a>
		</div>
		
				<div class="contint2">
			<a href="delete.php">
		<h4>
		
		
	حذف طالب 
		</h4>
		</a>
				</div>
					<div class="contint3">
			<a href="selectstudent.php">
		<h4>
		
		
	تعديل بيانالت طالب 
		</h4>
		</a>
		</div>
		
			<div class="contint4">
				<a href="selectstudent.php">
		<h4>
		
		
	عرض كل الطلاب
		</h4>
		</a>
	</div>



				
</body>

</html>