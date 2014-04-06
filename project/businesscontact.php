<!-- Design by Navdeep Kaur 
File Name: businesscontacthtml 
Author's Name: Navdeep Kaur 
File Description: This HTML page consists code for login form in order to fetch data from database -->
<?php
session_start();
    include 'connect.php';
$_SESSION["error"]= "";


 if(isset($_POST['submit']))
    {
        
       $username = $_POST["username"];
    $password1 = $_POST["password"];
       
      
    




   
$query = "SELECT * FROM `business_contacts` WHERE `username` = '".$username."'";


$records = $db->query($query);
$userfound = false;
foreach($records as $row)
{
	

	$password = $row['password']; 
	$userfound = true;

}





if($userfound){
	if($password1 == $password)
	{
		$_SESSION["isloggedin"] = true;
		$_SESSION["username"] = $username;
                header('location:page.php');
	}
	else{
		$_SESSION["isloggedin"] = false;
		$_SESSION["username"] = "guest";
		$_SESSION["error"]= "Incorrect Password";
                 
	}
}
else{
	
	
        $_SESSION["error"]= "Username not recognized";
}
}
else{
    
}



   ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="jss/javascript.js"></script>
<title>
My Project
</title>
</head>
<body background="images/wood.jpg">

<div id="container">

<div id="header">

<a href="file:///C:/wamp/www/project/Home.html"><img src="images/nk.jpg" id="logopic"></a>
<h1 id="personalsite"><center>Personal Site</center></h1>
<ul id="menu">
                	
                    <li><a  href="Home.html">Home</a></li>
					<li><a href="Aboutme.html"  >About Me</a></li>
					<li><a href="Projects.html"  >Projects</a></li>
                    <li><a href="Services.html"  >Services</a></li>
                    <li><a href="https://github.com/navigill/webproject/tree/master/project"  >GitHub</a></li>
                    <li><a href="Contactme.html" >Contact Me</a></li>
					<li><a class="current" href="businesscontact.php">Business</a></li>
                </ul>
				
</div>
<div id="contentarea">
<div id="featuredwork">

   <div id="message" style="margin-left: 38%; margin-top: 11%;" >
                <?php
                if(isset($_SESSION["error"]))
                {echo $_SESSION["error"];
                }
                ?>
            </div>
            <form method="post" action="" name="loginform1" style="margin-left: 38%; margin-top: 5%;">
                <h2 id="login">LOGIN FORM</h2><br>
                <table id="table">
                    <tr><td><b>Username: </b></td><td><input type="text" name="username" id="username" /><br />
                        </td>
                    </tr>
                    <tr><td> <b>Password:</b> </td><td><input type="password" name="password" id="password" /><br />
                        </td>
                    </tr>
                    
                   
                    
                    <tr><td></td><td><input type="submit" name="submit" value="Login" id="submit"/></td>
                   
                    </tr>
                </table>    
            </form>

</div>
<div id="welcome">

</div>

</div>
<div id="footer3">
Copyrights: All rights reserved, Navdeep Kaur(300772906), Centennial College, Winter 2014
</div>
</div>

</body>





</html>