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
  <title>HOMEPAGE</title>
  <meta name="description" content="free sofware,studordinateur" />
  <meta name="keywords" content="software,program,project,assignment" />
 
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
 
                    <!-- hitwebcounter Code START -->
					PAGE VIEWS
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6136529&style=0006&nbdigits=2&type=page&initCount=0" title="" Alt=""   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Stats Of Hits"
                                        target="_blank" style="font-family: Geneva, Arial, Helvetica, sans-serif; 
                                        font-size: 10px; color: #848387; text-decoration: underline ;"<strong>                                       </strong>
                                        </a>   
                            
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="tall" data-annotation="inline" data-width="300"></div>

<!-- Place this tag where you want the widget to render. -->
<div class="g-follow" data-annotation="bubble" data-height="24" data-href="//plus.google.com/u/0/118036558733975204193" data-rel="author"></div>
        

		  <h1><a href="faq.php">FAQ</a></h1>
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
<A HREF="register.php">SIGN UP</A></br>
<a href="forgot.php">FORGOT PASSWORD</a>
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
			 
     
	 <ul class="slideshow">
        <li class="show"><img width="680" height="250" src="images/pp1.jpg" alt="&quot;LET THE WORK BEGIN &quot;" /></li>
        <li><img width="680" height="250" src="images/pp2.jpg" alt="&quot;LET THE WORK BEGIN&quot;" /></li>
      </ul>  
	   
	 
	  <div id="content">
        <div class="content_item">
		
		  <h1><font color="red" size="24px"> WELCOME</font></h1></BR>
		  <font size="5px">
TO REDIRECT OUR BLOG<a href="http://pl2pracs.blogspot.in/p/home-page.html" target="_blank">CLICK HERE</a></BR>
TO GO TO OUR USERHOME PLEASE <a href="register.php">CLICK HERE</a>AND REGISTER	
</font>
</br></br>
<font size="3px">

</font>
  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	<div id="content_green">
	  <div class="content_green_container_box">
		<h4>Latest Blog Post</h4>
	    <p> </p>
		
	  </div><!--close content_green_container_box-->
      <div class="content_green_container_box">
       <h4>Latest Assignment</h4>
	    <p> Assignment of CO,PL3,CNAC is uploaded</p>
	   
	  </div><!--close content_green_container_box-->
      <div class="content_green_container_boxl">
		<h4>Latest SOFTWARE </h4>
	    <p> Software of vb is uploaded </p>
	    	  
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
