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
  <title>CNAC</title>
  <meta name="description" content="free sofware" />
  <meta name="keywords" content="software,program,project,assignment" />
 
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66148592-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>

  <div id="main">
    <div id="header">
	  <div id="banner">
	    <div id="welcome">

	      <h1>STUD ORDINATEUR</h1>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h1>BY PB & PS</h1>
		   <div class="wel" >
				
<?php
echo "<div style ='font:20PX Arial,tahoma;color:white'>".$_SESSION["username"].$_COOKIE["username"]."</div>";
?>
<a href="logout.php"><img src="images/logout.png" height="25px" width="150px"></a>
</div>
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
		   <li><a href="books1.php">BOOKS	</a></li>
		    <li><a href="contactus1.php">CONTACT US</a></li>
		   
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->	
    
	<div id="site_content" >		
	
	 </br> </br>
            <font color="GREEN" size="5px">CNAC</font></BR> </br>
		   
		   <P><B>1.INTRODUCTION TO COMPUTER NETWORK</B></P>
		   TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/sh/u97z4cm7p4ab9f1/AACY4HHSmPDDmzJ0xQUV9TZka?dl=0" target="_blank">CLICK HERE</A></BR>
		   TO DOWNLOAD TORRENT FILE<A HREF="https://kat.cr/cnac-t11062285.html" target="_blank">CLICK HERE</A></BR> </BR>
	  
	  
	        </br> </br> </br> </br> </br> </br>
			 </br> </br> </br> </br> </br> </br>
	  
	  
	  
	  <div class="sidebar_container" align="center">       
		<div class="sidebar" align="center">
          <div class="sidebar_item" align="center">
		  		
         <!-- hitwebcounter Code START -->
					PAGE VIEWS</br>
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6136529&style=0006&nbdigits=2&type=page&initCount=0" title="" Alt=""   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Stats Of Hits"
                                        target="_blank" style="font-family: Geneva, Arial, Helvetica, sans-serif; 
                                        font-size: 10px; color: #848387; text-decoration: underline ;"<strong>                                       </strong>
                                        </a>   
										</br>
		  

            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	    
         	 
	 
	  <div id="content">
        <div class="content_item">
		
		  


  
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
