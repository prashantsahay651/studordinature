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
  <title>ASSIGNMENT</title>
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
		   <li><a href="books1.php">BOOKS	</a></li>
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
		
		   <font color="red" size="5px">ASSIGNMENTS</font></BR>
		                    </BR>
		   <font color="GREEN" size="5px">CO</font></BR>
		   
		  <P><B>1.WAP T DISPLAY TEXT IN DEVNAGRI TEXT</B></P>
		  TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/sh/gpua14gi35yap6f/AAB7I9P9JbClH2Y9-8Tb2urwa?dl=0" target="_blank">CLICK HERE</A></BR>
		   TO DOWNLOAD TORRENT FILE<A HREF="https://kat.cr/co-t11073066.html"target="_blank">>CLICK HERE</A></BR> </BR>
		  
		  <P><B>2.WAP FOR TSR FOR SCREEN SAVER</B></P>
		 TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/sh/bfu10khwzzrb101/AADgU3A-Hnvda1mIAo7Lb5y-a?dl=0" target="_blank">CLICK HERE</A></BR>
		   TO DOWNLOAD TORRENT FILE<A HREF="https://kat.cr/co-t11073066.html" target="_blank">CLICK HERE</A></BR>
		  TO DOWNLOAD PROGRAM<A HREF="https://www.dropbox.com/sh/xglpnewr8q3tldv/AADob9f2FQhZpul2YOl59_jLa?dl=0" target="_blank">CLICK HERE</A></BR></BR>	
		  
		  <P><B>3.WAP TO PERFORM MULTIPLICATION USING BOOTHS ALGORITHM</B></P>
		 TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/sh/4l9xntgljru0t9o/AADJq_sD48goPo-kMedsVoSia?dl=0" target="_blank">CLICK HERE</A></BR>
		   TO DOWNLOAD TORRENT FILE<A HREF="https://kat.cr/co-t11073066.html" target="_blank">CLICK HERE</A></BR> </BR>
		                  
			<P><B>4.WAP TO IMPLEMENT RESTORING AND NON-RESTORING DIVISION TECHNIQUES</B></P>
		 TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/sh/yll0m4z6qtvpwac/AABJeLu5519-FYUAITNPru2Ia?dl=0" target="_blank">CLICK HERE</A></BR>
		   TO DOWNLOAD TORRENT FILE<A HREF="https://kat.cr/co-t11073066.html" target="_blank">CLICK HERE</A></BR> </BR>			  
						  
			<P><B>5.WAP TO SIMULATE MOUSE INTERFACE</B></P>
		 TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/s/kw2pbox0gv5t3h6/Mouse%20interface.pdf?dl=0" target="_blank">CLICK HERE</A></BR>
		 		 TO DOWNLOAD PROGRAM<A HREF="https://www.dropbox.com/sh/gkykv1yxvdhv3wl/AAD2433I9bmu7AEESUKZSJ1Aa?dl=0" target="_blank">CLICK HERE</A></BR>				  
		   					  </BR>
			<P><B>6.WAP FOR TSR FOR REAL TIME CLOCK</B></P>
		 TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/s/dnq2r4f2v3xf6vb/timer.pdf?dl=0" target="_blank">CLICK HERE</A></BR>			  
		 TO DOWNLOAD PROGRAM<A HREF="https://www.dropbox.com/sh/nt45q28et7v6mn8/AAANdEkpZf640yhK8GYkLYkAa?dl=0" target="_blank">CLICK HERE</A></BR>					  
						  </BR>
					<P><B>7.WAP FOR SIMULATION OF DOS COMMANDS</B></P>
		 TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/sh/6xs30rvhpsys94o/AABiN8zMczIV4LAGzkqAR27ra?dl=0" target="_blank">CLICK HERE</A></BR>				  
		 TO DOWNLOAD PROGRAM<A HREF="https://www.dropbox.com/sh/5tjiyw02ukiqtm0/AABKs3u1ysFee_VaCsXwzVbqa?dl=0" target="_blank">CLICK HERE</A></BR>				  
						  </br>
		   <font color="GREEN" size="5px">CNAC</font></BR>
		   
		   <P><B>1.INTRODUCTION TO COMPUTER NETWORK</B></P>
		   TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/sh/u97z4cm7p4ab9f1/AACY4HHSmPDDmzJ0xQUV9TZka?dl=0" target="_blank">CLICK HERE</A></BR>
		   TO DOWNLOAD TORRENT FILE<A HREF="https://kat.cr/cnac-t11062285.html" target="_blank">CLICK HERE</A></BR> </BR>
		                      </BR>
		   <font color="GREEN" size="5px">PL3</font></BR>
		  <p><B>1.DESIGN AND BUILD SCIENTIFIC CALCULATOR AND TIC TAC GAME USING VB 6.0</B></P>
		 TO DOWNLOAD FROM DROPBOX <A HREF=" https://www.dropbox.com/sh/6e9rx82r0oqe5yo/AAAJoirleAZVdxx-fk6YDS1Sa?dl=0" target="_blank">CLICK HERE</A></BR>
		   TO DOWNLOAD TORRENT FILE<A HREF="https://kat.cr/pl3-t11062314.html" target="_blank">CLICK HERE</A></BR>
		   TO DOWNLOAD PROGRAM<A HREF="https://www.dropbox.com/sh/76dz2ymaxctwg8l/AAD8DSf6I8O5IeNBVAzJaRT-a?dl=0" target="_blank">CLICK HERE</A></BR> </BR>
	
          <P><B>2.WAP USING TIMER CONTROL FOR MOVING IMAGE USING V.B</B></P>
		 TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/sh/qo3rv0puia7fokb/AADOBjQwnwwKZoD9HTv76pyca?dl=0" target="_blank">CLICK HERE</A></BR>
		   TO DOWNLOAD TORRENT FILE<A HREF="https://kat.cr/pl3-t11062314.html" target="_blank">CLICK HERE</A></BR> </BR>
	    
		                         </BR>
		  <P><B>3.WAP TO CREATE A NOTEPAD USING COMMAND  BOX AND MENU EDITOR</B></P>
		 TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/sh/7992pbmbv1kti9w/AABRrjggY6vnTjhpSk-9x-z7a?dl=0" target="_blank">CLICK HERE</A></BR>	
                                   </br>		 
		   <font color="GREEN" size="5px">DBMS</font></BR>

              <P><B>1.TO DISCUSS IN DETAILS THE DATABASE MANAGEMENT SYSTEM ARCHITECTURE AND HOW IT IS DIFFERENT FROM FILE SYSTEM</B></P>
		      TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/s/jpx0aofnvhutj91/DBMS%201.pdf?dl=0" target="_blank">CLICK HERE</A></BR>
  </BR>
                <P><B>2.TO STUDY AND DISCUSS ON SQL</B></P>
		 TO DOWNLOAD FROM DROPBOX <A HREF="https://www.dropbox.com/s/rvcokorhsqsvfy9/DBMS%202.pdf?dl=0" target="_blank">CLICK HERE</A></BR>
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
