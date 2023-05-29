<?php
//database connection
include('db.php');

//adding data to the database
if(isset($_POST['submit'])){
	$u_card = $_POST['card_no'];
	$u_f_name = $_POST['user_first_name'];
	$u_l_name = $_POST['user_last_name'];
	$u_father = $_POST['user_father'];
	
	$u_birthday = $_POST['user_dob'];
	$u_gender = $_POST['user_gender'];
	$u_email = $_POST['user_email'];
	$u_phone = $_POST['user_phone'];
	// $u_state = $_POST['state'];




	$u_mother = $_POST['user_mother'];


	
	//image upload
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

	$current_date = date("Y-m-d H:i:s");

  	$insert_data = "INSERT INTO card_activation (u_card, u_f_name, u_l_name, u_father, u_aadhar, u_birthday, u_gender, u_email, u_phone, u_mother,image,uploaded) VALUES ('$u_card','$u_f_name','$u_l_name','$u_father','$u_birthday','$u_gender','$u_email','$u_phone','$u_mother','$image', '$current_date')";
  	$run_data = mysqli_query($con, $insert_data);

  	if($run_data)
	{
  	 	header('location:index.php');}
		
  	else{
  		echo "Data not insert";
  	}



}

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
	

	}
	.container{
	width:100%;
	height:600px;
	border:1px solid blue;
display:flex;
	padding:20px 20px 20px 20px ;
	padding-right:50px;
			//background-color:rgb(105,143,255);
				//color:white;
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
	.contents{

    display: flex;
    align-items: center;
   justify-content: center;
    background: #f7f7f7;
    padding: 0 10px;


  }

 table{
	font-weight:blold;
	font-size: 20px;
	 margin-top:10px;
	 margin-left:120px;
	}
	 table caption{
	color: blue;
	font-weight:blold;
	font-size: 30px;
	padding-top:2px;
	padding-bottom:2px;
	}
	 table th{
	background: blue;
	color: #FFFFFF;
	font-weight:blold;
	}
	 table tr {
	height:40px;
	
	}
	 table tr  td{
	
	text-decoration: none ;
	padding: 7px 7px 7px 7px;
	border-radius: 5px 5px 5px 5px;
	
	}



form{
	 font-weight:bold; 
	 font-size: 16pt;
	 color: black;
	 
}

form. fieldset{ 
 font-weight:bold; 
border: blue solid 1px;

} 
.form-control{
height:35px;
width:200px;
pading:5px 5px 5p x5px;
border: blue solid 1px;
	border-radius: 15px 15px 15px 15px;




}
.btton{
  height:3.5rem;
  width: 12rem;
  background:blue;
  color:#fff;
  font-size: 1.7rem;
  text-transform: capitalize;
  border-radius: .5rem;
  cursor: pointer;
  position: relative;
  z-index: 0;
  overflow: hidden;
  margin:1rem 0;
}

.btton::before{
  content: '';
  position: absolute;
  top: -100%; 
  left: 0;
  height:100%;
  width: 100%;
  background:rgb(166, 166, 214);
  z-index: -1;
  transition: .2s linear;
}

.btton:hover:before{
  top: 0%;
}

.btton:hover{
  box-shadow: .1rem .5rem var(--blue),
              0 .3rem .5rem rgba(0,0,0,.3);
}



a:hover
{
border:2px solid red;
background: rgb(5, 68, 104);
color:white;
}
  .logo{
   height:150px;
  width: 100%;
  padding-top:50px;
  background-color:rgb(105,143,255);
				color:white;
					font-weight:blold;
	font-size: 30px;
  }
  h4{
  
  
  
  }
	</style>
</head>

<body>
<div class="logo">
<center>
					<h4>Add New Card</h4>
				
			</center>
			</div>
<div class="container">

					<form action="add.php" method="POST" enctype="multipart/form-data">

					<table alighn="center" border="1">
			
				
					<tr>
						<td>
								
									<label for="inputEmail4">Student Id.</label>
							
						
						
						
						</td>
						<td>
							<input type="text" class="form-control" name="card_no" placeholder="Enter 12-digit Student Id." maxlength="12" required>
				
						</td>
						
							<td>
							<label for="inputPassword4">Mobile No.</label>
						
						</td>
							<td>
								<input type="phone" class="form-control" name="user_phone" placeholder="Enter 10-digit Mobile no." maxlength="10" required>
					
						
						</td>
						</tr>
						
						
							<tr>
						<td>
						
						
								<label for="firstname">First Name</label>
							
						</td>
						<td>
							<input type="text" class="form-control" name="user_first_name" placeholder="Enter First Name">
						
						</td>
						
							<td>
								<label for="lastname">Last Name</label>
								
						
						</td>
						<td><input type="text" class="form-control" name="user_last_name" placeholder="Enter Last Name">
						</td>
						</tr>
						
					
						
						
				
				
							
						


				
		<tr>
		<td>
								<label for="fathername">Father's Name</label>
								</td>
								<td>
								<input type="text" class="form-control" name="user_father" placeholder="Enter First Name">
					</td>
			<td>
								<label for="mothername">Mother's Name</label>
								</td>
								<td>
								<input type="text" class="form-control" name="user_mother" placeholder="Enter Last Name">
						</td>
</tr>
<tr>
<td>
		
					
								<label for="email">Email Id</label>
								</td>
								<td>
								
								<input type="email" class="form-control" name="user_email" placeholder="Enter Email id">
					</td>
					<td>
			
							<label>Image</label>
							</td>
							<td>
							<input type="file" name="image" class="form-control">
					</td>
					
					</tr>
					<tr>
					<td>
					
					

		

								<label for="inputState">Gender</label>
								</td>
								<td>
								<select id="inputState" name="user_gender" class="form-control">
									<option selected>Choose...</option>
									<option>Male</option>
									<option>Female</option>
									<option>Other</option>
								</select>
				</td>
				
					<td>
								<label for="inputPassword4">Date of Birth</label>
								</td>
								<td>
								<input type="date" class="form-control" name="user_dob" placeholder="Date of Birth">
				
					</td>

</tr>



					

					
					<tr colspan="2">
					
					<td>
					
					<td></td><td>
						<input type="submit" name="submit" class="btton" value="Submit">
</td>




</tr>
</table>

					</form>
			
	
	
		
		</div>


		<a class="btton" href="index.php">رجوع</a>

</body>
</html>