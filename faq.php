<?php
session_start();
include 'functions.php';
if(loggedin())
{
header('Location:userhome.php');
exit();
}

?>

<?php
//session_start();
session_start();


$con = mysql_connect("mysql6.000webhost.com","a5898214_tinku","kumar4671");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a5898214_website", $con);


$sql="insert into faq(email,question)

  values('".$_POST['email']."','".$_POST['question']."')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  ?>

<head>
  <title>FAQ</title>
  <meta name="description" content="free sofware" />
  <meta name="keywords" content="software,program,project,assignment" />
 
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66148592-1', 'auto');
  ga('send', 'pageview');

</script>
  <div id="main">
    <div id="header">
	  <div id="banner">
	    <div id="welcome">
	      <h1>STUD ORDINATEUR</h1>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h1>BY PB & PS</h1>
	    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="menu_container">
	  <div id="menubar">
        <ul id="menu">
           <li class="current"><a href="index.php">Home</a></li>
          
		   <li><a href="software.php">SOFTWARE</a></li>
		    <li><a href="books.php">BOOKS</a></li>
			<li><a href="register.php">ASSIGNMENT</a></li>
          <li><a href="register.php">REGISTER</a></li>
           <li><a href="contactus.php">CONTACT US</a></li>
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->	
    
	<div id="site_content" >		

	  <div class="sidebar_container" align="center">       
		<div class="sidebar" align="center">
          <div class="sidebar_item" align="center">
		  <h1><a href="faq.php">FAQ</a></h1>
		  </br></br></br></br></br></br></br></br></br></br></br>
		  </br></br></br></br></br></br>
		  <form method="post" action="login.php">
		  PLEASE LOGIN 
		  <form method="post" action="login.php">
		  <table border=".0002" align="center" width="80" height="150">
<tr><td align="center">
USER NAME:
</br>
<input type="text" name="username">
</td></tr>
</br></br>

<tr><td align="center">
PASSWORD
</br>
<input type="password" name="password">
</td></tr>

<tr><td>
<input type="submit" value="log in" name="login"></td></tr>
            
<tr><td align="center">
<input type="checkbox" name="rememberme">keep me logged in
</td></tr>
</table>
</form>
</BR>
<A HREF="register.php">SIGN UP</A>
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
      <ul class="slideshow">
        <li class="show"><img width="680" height="250" src="images/pp1.jpg" alt="&quot;LET THE WORK BEGIN &quot;" /></li>
        <li><img width="680" height="250" src="images/pp2.jpg" alt="&quot;LET THE WORK BEGIN&quot;" /></li>
      </ul>   	 
	 
	  <div id="content">
        <div class="content_item">
		
		  
<form method="post" action="faq.php">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
E-mail: <input type="text" name="email"></br>

&nbsp&nbspQUESTION: <textarea name="question" rows="5" cols="40"></textarea></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="submit" name='submit'>

  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	<div id="content_green">
	  <div class="content_green_container_box">
		<h4>Latest Blog Post</h4>
	    <p> </p>
		
	  </div><!--close content_green_container_box-->
      <div class="content_green_container_box">
       <h4>Latest News</h4>
	    <p> </p>
	   
	  </div><!--close content_green_container_box-->
      <div class="content_green_container_boxl">
		<h4>Latest Projects</h4>
	    <p> </p>
	    	  
	  </div><!--close content_green_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_green-->   
 
  </div><!--close main-->
  
  <div id="footer_container">
    <div id="footer">
	  COPYWRIGHT BY PB & PS
    </div><!--close footer-->  
  </div><!--close footer_container-->  
  
</body>
</html>
