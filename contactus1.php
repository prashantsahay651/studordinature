<?php
session_start();
include 'functions.php';
if(!loggedin())
{
header('Location:index.php');
exit();
}
?>

<head>
  <title>CONTACT US</title>
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
          <li class="current"><a href="userhome.php">Home</a></li>
          <li><a href="assignment.php">ASSINGMENT</a></li>
          <li><a href="software1.php">SOFTWARE</a></li>
           <li><a href="notes.php">NOTES</a></li>
		   <li><a href="books.php">BOOKS	</a></li>
		    <li><a href="contactus1.php">CONTACT US</a></li>
		   
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->	
    
	<div id="site_content" >		

	  <div class="sidebar_container" align="center">       
		<div class="sidebar" align="center">
          <div class="sidebar_item" align="center">
		  		<div class="wel">
<?php
echo "<div style ='font:15px;color:#ff0000'>WELCOME:</div>"."<div style ='font:20PX Arial,tahoma;color:GREEN'>".$_SESSION["username"].$_COOKIE["username"]."</div>";
?>

<a href="logout.php"><FONT SIZE="3PX">LOGOUT</FONT></a>
</div>
 </br></br></br></br></br></br></br></br></br></br></br>
		  </br></br></br></br></br></br>
		  
----------------------------------------------
</BR></BR>
           <font color="red" size="5px">MENU</font></BR>
          <a href="userhome.php">HOME</a></br></br>
          <a href="assignment.php">ASSINGMENT</a></br></br>
          <a href="software1.php">SOFTWARE</a></br></br>
           <a href="notes.php">NOTES</a></br></br>
		   <a href="books1.php">BOOKS</a></br></br>
		    <a href="contactus1.php">CONTACT US</a></br></br>
		    <a href="http://pl2pracs.blogspot.in/p/home-page.html" target="_blank">BLOG</a></br></br>
			<a href="faq1.php">FAQ</a></br></br>
---------------------------------------------- 
		  
		  

            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	    
      <ul class="slideshow">
        <li class="show"><img width="680" height="250" src="images/pp1.jpg" alt="&quot;LET THE WORK BEGIN &quot;" /></li>
        <li><img width="680" height="250" src="images/pp2.jpg" alt="&quot;LET THE WORK BEGIN&quot;" /></li>
      </ul>   	 
	 
	  <div id="content">
        <div class="content_item">
		
		   <div class="style7" bgcolor="grey">
		   <h2>STUD ORDINATEUR</h2>
EMAIL ID:-studordinateur@gmail.com</br></br>
<h2>PRASHANT KUMAR SAHAY</h2>
CONTACT NO-7387183063</br>
EMAIL ID-prashantsahay651@gmail.com</br></br>

<h2>PRANAV BHATIA</h2>
CONTACT NO-8446020044</br>
EMAIL ID-coolpranav11@gmail.com</br>
</div>


  
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
