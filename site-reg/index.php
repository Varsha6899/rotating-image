<!DOCTYPE html>
<html>
<head> 
	<title>Sign Up</title>
</head>
<center>
	<body>
	<h2>Register Here!</h2>
	<form action="home.php" method="post">
		<table border="1" width="300" height="150">
			<tr> <td>Email Id:</td>
				<td><input type="text" name="Email Id"></td>
			</tr>
			<tr> <td>Password:</td>
				<td><input type="text" name="Password"></td>
			</tr>
			<tr> <td colspan="5" align="center"> <input type="submit" name="signup" value="signup">
			</td>
		    </tr>
	    </table>
    </form>
    </body>
		<style type="text/css">
		        body
		        {
		   	      text-align: center;
				  padding: 50px 0 0 0;
				  color: #fff;
				  background: #1d1f20;
			    }
			    h1
			    {
			      font-size: 30px;
				  padding: 0 0 50px;
				}
				#loading
				{
				    animation: rotation 2s infinite linear;
				}
				
				@keyframes rotation
				{
				    from
					{
					    transform: rotate(0deg);
					}
					to
					{
					    transform:rotate(359deg);
					}
		</style>
		<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  animation: rotation 2s infinite linear;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
	<body>
		<img id="myImg" src="assets/banner.jpg" width="100" height="300" class="center">
		<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

    </body>	
</center>
</html>

<?php
mysqli_connect("localhost","root","","sitereg") or die (mysqli_error());

if(isset($_POST['signup']))
{
	 $emailid = $_POST['Email Id'];
	 $pass = $_POST['Password'];
     
     if($emailid=='')
     {
     	echo "<script>alert('Please enter the email)</script>";
     	exit();
     }
     if($pass=='')
     {
     	echo "<script>alert('please enter the password')</script>";
     	exit();
     }
     else{
     $query ="insert into user (Email Id,Password) values ('$emailid','$pass')";
     if(mysqli_query($query))
     {
     	echo "<h3>You have logined in successfully..!!</h3>";
     }
 }

}
?>