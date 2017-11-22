<?php
session_start();
include 'functions.php';
if(loggedin())
{
header('Location:userhome.php');
exit();
}

?>
<html>
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
		  <div class= "log">
		  
		 </div>
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
                            

        

		
  <br/>
  
<span>

   <label for="our-popup" class="overlay"></label>
   
   <!-- the popup starts here -->
   
  
  </span>

  
  
  
  
		 
		  
</BR>

            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
			 
     
	  
	   
	 
	  <div id="content">
        <div class="content_item">
		   <form method="post" name="form1" action="forgot.php">


<font color="blue">
EMAIL:<input type="text" name="email" >*</br>
MOBILE NUMBER:</font><input type="text" name="number" >*</br>
<input type='submit' name='submit' value='Submit'/>
</form>
</br></br></br>
<?php


		  if(isset($_POST['submit']))
{ 

 mysql_connect("mysql6.000webhost.com","a5898214_tinku","kumar4671") or die(mysql_error());
 mysql_select_db("a5898214_website") or die(mysql_error());
 $mail=$_POST["email"];
 $number=$_POST["number"];
 $q=mysql_query("select * from register where email='".$mail."'&& mobilenumber='".$number."' ") or die(mysql_error());
 $p=mysql_affected_rows();
 if($p!=0) 
 {
  $res=mysql_fetch_array($q);
  $to=$res['email'];
  $name=$res['name'];
  $subject='Remind password';
  $password=$res['password']; 
  $username=$res['username']; 

if(isset($_POST['submit'])){
$to      = "prashantsahay651@gmail.com";
$subject = 'the subject';
$message = 'hello';
$from="prashantsahay@studordinateur.com";
$headers = "this message is from:$from";
   
    

 mail($to, $subject, $message, $headers);
}

   
  if($mail)
  {
	 
	 echo "</br>";
	 echo "NAME";
     echo "<p style='color:red;'>".$name."</p>";
	 echo "</br>";
	 
	 echo "</br>";
	 echo "USERNAME";
	echo "<p style='color:red;'>".$username."</p>";
	echo "</br>";
	echo "PASSWORD";
	echo "</br>";
	echo "<p style='color:red;'>".$password."</p>";
	 echo "</br>";

	
  }
  else
  {
   echo'mail is not send';
  }
 }
 else
 {
  echo'You entered mail id is not present';
 }
}
?>

<div class="banner">
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="tall" data-annotation="inline" data-width="300"></div>

<!-- Place this tag where you want the widget to render. -->
<div class="g-follow" data-annotation="bubble" data-height="24" data-href="//plus.google.com/u/0/118036558733975204193" data-rel="author"></div>
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
