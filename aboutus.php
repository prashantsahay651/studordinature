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
  <title>ABOUT US</title>
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
          <li><a href="aboutus.php">ABOUT US</a></li>
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
		  PLEASE LOGIN IN
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
<A HREF="register.php">SINGN UP</A>
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
      <ul class="slideshow">
        <li class="show"><img width="680" height="250" src="images/pp1.jpg" alt="&quot;LET THE WORK BEGIN &quot;" /></li>
        <li><img width="680" height="250" src="images/pp2.jpg" alt="&quot;LET THE WORK BEIGN&quot;" /></li>
      </ul>   	 
	 
	  <div id="content">
        <div class="content_item">
		
		  <h1><font color="red" size="24px">THANKS FOR VISITING </font></h1></BR>
		  <div class="styleab">
<font size="5px" color="#32D6FF">
This website is made by Pranav Bhatia and Prashant Kumar Sahay.</br> 
Our aim is to help our friends by sharing whatever study material that is available to us,</br>
it may be write-ups, programs, e-books, software, etc.</br> 
We will also upload previous year sem papers. Hope our website helped you a little. :)
</font>
</div>
<div class="stylecom">
<h1>COMMENTS</h1>

<h1>COMMENT:</h1>
<table border="1">
<tr><td>

<form method="post" action="" id="com">

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span></td></tr>

<tr><td>
COMMENT: <textarea name="comment" rows="5" cols="40"></textarea>
</td></tr>




<tr><td>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="post" name="post"></td></tr></table>
</form></div>

<?php
$name=$_POST["name"];
$text=$_POST["comment"];
$post=$_POST["post"];

if($post)
{
	$write=fopen("com.txt","a+");
	fwrite($write,"<u><b>$name</b></u><br>$text<br>");
	fclose($write);
	
	$read=fopen("com.txt","r+t");
	echo "ALL COMMENT";
	
	while(!feof($read))
	{
		echo fread($read,1024);
	}
	fclose($read);
	
}

else
{
	$read=fopen("com.txt","r+t");
	echo "ALL COMMENT";
	
	while(!feof($read))
	{
		echo fread($read,1024);
	}
	fclose($read);
}


?>


  
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
	  COPYWRITE BY PB & PS
    </div><!--close footer-->  
  </div><!--close footer_container-->  
  
</body>
</html>
