<?php
session_start();
include 'functions.php';
if(loggedin())
{
header('Location:userhome.php');
exit();
}

?>

<head>
  <title>SOFTWARE</title>
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
		  		
 </br></br></br></br></br></br></br></br></br></br></br>
		  </br></br></br></br></br></br>
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
		
		  <h2>SOFTWARE</H2>
<a href="https://www.dropbox.com/sh/7hjxwezcq48a0z5/AAA_mfuIQlF5vkwyvJXDIHoea?dl=0"target="_blank">JAVA</a></br>
<a href="https://www.dropbox.com/sh/f63g58tx73k8h8w/AAB7PgU-H6rqs900qfe95UKea?dl=0"target="_blank">TASM</a></br>
<a href="https://www.dropbox.com/sh/30fmyxojam2xaek/AAATzfRZAz2FN2ooyBi6ypRIa?dl=0"target="_blank">TURBO C</a></br>
<a href="https://www.dropbox.com/sh/ohqkgkyid09xobc/AACwkMrxnvtFOmUlv5tcsg78a?dl=0"target="_blank">VB</a></br>
<a href="https://kat.cr/jdk-8u45-nb-8-0-2-windows-x64-with-netbeans-exe-t11073687.html"target="_blank">NETBEANS</a></br>
<a href="https://kat.cr/oraclexe112-win32-t11062071.html"target="_blank">ORACLE DATABASE</a></br>
  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	 
 
  </div><!--close main-->
  
  <div id="footer_container">
    <div id="footer">
	  COPYWRIGHT BY PB & PS
    </div><!--close footer-->  
  </div><!--close footer_container-->  
  
</body>
</html>
