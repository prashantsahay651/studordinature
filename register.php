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
  <title>register</title>
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
		
		  <h1><font color="red" size="24px">REGISTER HERE</font></h1></BR>
           <?php
session_start();
$nameErr = $emailErr =$captchaErr =$unameErr =
$passErr =$mobilenumberErr=$collegeErr=$depatmentErr="";
$name = $email =$comment=$captcha=$mobilenumber=$college=$department ="";

function test_input($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
{
    $name = test_input($_POST["name"]);
 if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
    {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } else 
   {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  
if (empty($_POST["mobilenumber"])) 
  {
    $mobilenumberErr = "Number is required";
  } 
  else 
{
    $mobilenumber =test_input($_POST["mobilenumber"]);
    if((preg_match("/[^0-9]/",$mobilenumber)) || strlen($mobilenumber)!=10)
    {  
     $mobilenumberErr= "Invalid phone number";
    }
 }
 
 if (empty($_POST["college"])) 
  {
    $collegeErr = "college is required";
  } 
  
  
  if (empty($_POST["department"])) 
  {
    $departmentErr = "Depratment is required";
  } 
 

if (empty($_POST["uname"]))
  {
    $unameErr = "Username required";
  } 
   


if (empty($_POST["pass"]))
  {
    $passErr = "Password required";
  } 



 if (empty($_POST["6_letters_code"]))
  {
    $captchaErr = "captcha required";
  } 
   else if (strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
  {
  $captchaErr = "captcha does not match";
    }

  
$form1=$_POST["form1"];
{
if(empty($nameErr)&&empty($emailErr)&&
empty($unameErr)&&empty($passErr)&&empty($mobilenumberErr)&&empty($collegeErr)&&empty($departmentErr))
{
$con = mysql_connect("mysql6.000webhost.com","a5898214_tinku","kumar4671");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a5898214_website", $con);

$sql="INSERT INTO register(name,email,mobilenumber,college,department,username,password,comment)

  VALUES(' ".$_POST['name']." ','".$_POST['email']."','".$_POST['mobilenumber']."','".$_POST['college']."','".$_POST['department']."','".$_POST['uname']."',
  '".$_POST['pass']."','".$_POST['comment']."')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);
 echo "<div style ='font:18px/21px Arial,tahoma,sans-serif;color:#ff0000'>SUCESSFUL REGISTER</div>","</br>";
 echo "<div style ='font:18px/21px Arial,tahoma,sans-serif;color:#ff0000'>PLEASE LOGIN</div>","</br>";



}
}
}
?>
<table border="2" align="center" width="500" height="400">
<tr><td>

<form method="post" name="form1" value="form1" action="<?php echo 
htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name" >
<span class="error">* <?php echo $nameErr;?></span></td></tr>

<tr><td>
E-mail: <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span></td></tr>


<tr><td>
MOBILE NUMBER: <input type="text" name="mobilenumber">
<span class="error">*<?php echo $mobilenumberErr;?></span>
</td></tr>


<tr><td>
COLLEGE:<select name="college" onchange="showUser(this.value)"/>

  <option value="">COLLEGE</option>
  <option value="bvpcoe">Bharti Vidyapeeth College OF Enginnering</option>
  <option value="pict">PICT</option>
  </select>
  <span class="error">*<?php echo $collegeErr;?></span>
  </td></tr>
  
  
 <tr><td> 
DEPARTMENT:<select name="department" onchange="showUser(this.value)"/>

  <option value="">Department</option>
  <option value="computer">Computer </option>
  <option value="it">IT</option>  
   

  </select>
  <span class="error">*<?php echo $departmentErr;?></span>
  </td></tr>


<tr><td>
Username: <input type="text" name="uname">
<span class="error">* <?php echo $unameErr;?></span></td></tr>



<tr><td>
Password: <input type="password" name="pass"><span class="error">*
 <?php echo $passErr;?></span></td></tr>




<tr><td>
COMMENT: <textarea name="comment" rows="5" cols="40"></textarea>
</td></tr>

<tr><td>

<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text">
<span class="error">*<?php echo $captchaErr;?></span>
<br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>
here</a> to refresh</small>

</td></tr>
<tr><td>
<input type="submit" value="REGISTER" name='submit'></td></tr></table>
</form>
</td></tr></table>

<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
  
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
