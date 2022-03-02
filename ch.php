<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css" />

    <title>Document</title>
</head>
<style>
    
  #pro input{
    -moz-appearance: none;
		-webkit-appearance: none;
		-o-appearance: none;
		-ms-appearance: none;
		appearance: none;
		/* background: rgba(144, 144, 144, 0.075); */
		border-radius: 4px;
        border-color: yellow;
		border: none;
		/* border: solid 1px rgba(144, 144, 144, 0.25); */
		/* color: inherit; */
		display: block;
        border: solid 2px white;
		outline: 0;
        /* background-color: white; */
		/* padding: 0.2em; */
		text-decoration: none;
		width: 30%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        /* padding: 2px  37px; */
        
	
 }
 h3{
     align-items: center;
     display: flex;
     justify-content: center;
     font-size: 3rem;
     font: bold;
     color: white;

 }
 form {
		margin: 0 0 2em 0;
       
	}
    .container{
        margin-left: 40%;
        margin-top: 5%
    }

    body{
        background-color: #3ba666;
    }

    .chp ul{
     display: flex;
     flex-direction: row;
     margin-top: 10px;
     margin-left: 2%;
     
 }
  .chp ul li{
    list-style: none;
    border: 2px solid whitesmoke;
    align-items: center;
    justify-content: center;
    padding: 5px  37px;
    border-radius: 4px;
    background-color: #3ba655;
     /* padding-right: 10px; */
     
 }
 .chp ul li a{
     
     font-size: 30px;
     color: black;
     text-decoration: none;
     font-weight: bolder;
     

 }

</style>
<body>

     <div  id="pro"
     class="chp">
    
    <h3> Change Password</h3>
    <!-- <div><?php if (isset($message)) { echo $message; } ?></div> -->
    
    <form  method="post" action="" >
        <div class="container">
        
    Current Password:<br>
    <input type="password" name="currentPassword">  <span id="currentPassword" class="required" ></span>
    <br>
    New Password: <br>
    <input type="password" name="newPassword"><span id="newPassword" class="required"></span>
    <br>
    Confirm Password:<br>
    
    <input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
    <br><br>
    
  <ul>
      <li><a href="profileView2.php">Submit</a></li>
      <!-- <li> <a href="" >Home</a></li> -->
  </ul> 

    </form>
</div>

    
</div>
</body>
</html>