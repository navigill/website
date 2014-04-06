<!-- Design by Navdeep Kaur 
File Name: pagehtml 
Author's Name: Navdeep Kaur 
File Description: This HTML page consists code for displaying data fetch from database-->
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
                	
                    <li><a   href="Home.html">Home</a></li>
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
			<div id="contacts">
			<h3 ><b><u>Business Contact List:</u></b></h3>
				
					
						
							<h4 id="contact"><a href="page.php?prop_id=1 ">1.Mukesh Ambani</a></h4>
					
							<h4 id="contact"><a href="page.php?prop_id=2">2.Samir Jain</a></h4>
						
							<h4 id="contact"><a href="page.php?prop_id=3">3.Ratan Jain</a></h4>
						
							<h4 id="contact"><a href="page.php?prop_id=4">4.Kumar Birla</a></h4>
							<form method="post" action="" name="loginform1" style="margin-left: 38%; margin-top: 5%;">
                <a href="businesscontact.php?login=false">
				<input type="button" value="logout" id="logout"></a>
                		
            </form>
			</div>
				
            <div id="fetch">
			<?php
							$dsn= 'mysql:host=localhost;dbname=project';
							$username = 'root';
							$password= '';
							try{
							$db= new PDO($dsn, $username, $password);
							}
							catch(PDOException $exception){
								echo "failed to connect";
							} 
				
                             
							if(isset($_GET["prop_id"]))
							{
							
	
							$id = $_GET['prop_id']  ;
							  
                            $query="select * from contacts where id='$id'";
                            $result=$db->query($query);
                            $row = $result->fetch();
							$image=$row["image"];
								$path="images/";
								$imageurl=$path.$image;
								
							echo $row['Name']."</br>";
								echo $row['Contact_no']."</br>";
								echo $row['Address']."</br>";
								?>
								<img id="photo1" src="<?php  echo $imageurl?>">
				
					<?php
								
							}	
								?>
								
							
						</div>
				
					
						
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