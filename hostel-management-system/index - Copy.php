<?php
error_reporting(1);
error_reporting(1);
$con = mysql_connect("localhost","root","toor","full");

mysql_select_db("full",$con);

//marquee display
$q = "SELECT marquee1 FROM admin WHERE id=1";
$q1 = mysql_query($q);
$disp = mysql_fetch_array($q1);
//echo $disp['marquee1'];

//change colg name
$q2 = "SELECT colgname FROM admin WHERE id=1";
$q21 = mysql_query($q2);
$colgdisp = mysql_fetch_array($q21);

//change intro content
$q3 = "SELECT colgintro FROM admin WHERE id=1";
$q31 = mysql_query($q3);
$introdisp = mysql_fetch_array($q31);
//echo $introdisp['colgintro'];

//change footer 
$q4 = "SELECT footerinfo FROM admin WHERE id=1";
$q41 = mysql_query($q4);
$footerdisp = mysql_fetch_array($q41);
//echo $footerdisp['footerinfo'];

?>
<html>
<head>
<title>Sample School Project</title>
<link rel="stylesheet" type="text/css" href="engine/css/slideshow.css" media="screen" />
	<style type="text/css">.slideshow a#vlb{display:none}</style>
	<script type="text/javascript" src="engine/js/mootools.js"></script>
	<script type="text/javascript" src="engine/js/visualslideshow.js"></script>
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
    
    <style type="text/css" media="screen">
#horizontalmenu ul 
{
padding:1; margin:1; list-style:none;
}
#horizontalmenu li
{
float:left;
 position:relative;
 padding-right:89;
 display:block;
border:0px solid #CC55FF; 
border-style:inset;
margin-left:20px;
}
#horizontalmenu li ul
 {
display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:block;
    background:#C4C4C4;
height:auto; width:8em; 
}
#horizontalmenu li ul li
{
    clear:both;
border-style:none;}
</style>	
</head>
<table width="1333" height="1100" border="1">
  <tbody>
    <tr>
      <th height="39" colspan="2" style="background-color:#4E4E4E"><div style="text-align:left;color:#FFFFFF"><b><font size="+3"><a href="index.php" style="text-decoration:none ; color:#FFFFFF">ABC Group Of Institutions</a></font></b><marquee direction="left" height="100%">
			This Message will be editable by Administrator After Login!</marquee></div></th>
    </tr>
    <tr>
      <th height="317" colspan="2">
      <!--Slider-->
      <div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/banner_01.jpg" alt="Multispeciality College Campus" title="Multispeciality College Campus" id="wows1_0"/></li>
<li><img src="data1/images/highlightnews.jpg" alt="International Accredition" title="International Accredition" id="wows1_1"/></li>
<li><img src="data1/images/img21644.jpg" alt="Best Overall Employement" title="Best Overall Employement" id="wows1_2"/></li>
<li><img src="data1/images/url.jpg" alt="Best Of Class Infrastructure" title="Best Of Class Infrastructure" id="wows1_3"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="Multispeciality College Campus"><img src="data1/tooltips/banner_01.jpg" alt="Multispeciality College Campus"/>1</a>
<a href="#" title="International Accredition"><img src="data1/tooltips/highlightnews.jpg" alt="International Accredition"/>2</a>
<a href="#" title="Best Overall Employement"><img src="data1/tooltips/img21644.jpg" alt="Best Overall Employement"/>3</a>
<a href="#" title="Best Of Class Infrastructure"><img src="data1/tooltips/url.jpg" alt="Best Of Class Infrastructure"/>4</a>
</div></div>
<span class="wsl"></span>
	<a href="#" class="ws_frame"></a>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
    <!--slider end-->
    
      </th>
    </tr>
    <tr>
      <td height="38" colspan="2" style="background-color:#6E68FF">
      	<div id="horizontalmenu">
        <ul>
		<li><a href="index.php" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;" ><b>HOME</b></a></li>
        <li><a href="index.php?option=about" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>ABOUT</b></a></li>
		<li><a href="index.php?option=contact" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>CONTACT</b></a></li>	
        <li><a href="index.php?option=gallery" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>GALLERY</b></a></li>
        <li><a href="index.php?option=course" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>COURSES</b></a></li>
		<li><a href="index.php?option=regs" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>REGISTRATION</b></a></li>
		<li><a href="#" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>HOSTEL</b></a>
        	<ul style="width:100%">
				 <li style="width:100%"><a href="index.php?option=login" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;">Hostel Login</a></li>
			 </ul>
              </li>
		 </ul>
                 
            </li>
            
        </ul>
</div>
        
      </td>
    </tr>
    <tr>
      <td width="974" height="647" bgcolor="#D9D9D9" style="vertical-align:text-top">
      	<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>
	<center>
	  <h2><b><font size="+3">ABC Group of Institutions
	    </font></b></h2>
	</center>
    <center><img src="images/university.png" width="352" height="332"></center>
    <p><center>
      <p>&nbsp;</p>
      <p><strong><font size="+2">ABC Group of Institutions</font></strong> <b>-</b> <font size="+1">a pioneer educational Institute of Northern India, has been striving to provide quality higher education since 2000. Approved by AICTE and UGC, ABC has a sprawling multi-discipline campus, world class facilities and competent faculty, with prime focus on research and quality education. Creating a benchmark in the field of education, ABC aims to create proficient technocrats and future leaders with emphasis on overall development of personality imbibing core human values among students.</font></p>
    </center></p>
	<?php
    error_reporting(1);
	}
	else{
	switch($opt)
	{
		case 'regs':
		include('registration.php')	;
		break;
		case 'login':
		include('login.php');
		break;
        case 'about':
		include('about.php');
		break;
		case 'contact':
		include('contact.php');
		break;
		case 'gallery':
		include('gallery.php');
		break;
		case 'course':
		include ('course.php');
		break;
		case 'cdrive':
		include('cdrive.php');
		break;
		case 'news':
		include('news.php');
		break;
		case 'sports':
		include('sports.php');
		break;
		case 'admission':
		include ('admission.php');
		break;
		case 'sdp':
		include('sdp.php');
		break;
		case 'wevents':
		include('wevents.php');
		break;
		case 'notice':
		include('notice.php');
		break;
		
	}}

	?>
	
      
      </td>
      <td width="343" style="background-color:#468EFF">
      <center><font size="+2"><b style="color:#191B7E"><div style="background-color:#969BFB">College Updates</div><br></b></font></center>
      	<marquee direction="up" height="100%" onMouseOver="this.stop();" onMouseOut="this.start();">
			<center><a href="index.php?option=cdrive" style="text-decoration:none"><font size="+1"><b>Campus Drive</b></font></a></center><br>
            <center><a href="index.php?option=news" style="text-decoration:none"><font size="+1"><b>News</b></font></a></center><br>
            <center><a href="index.php?option=sports" style="text-decoration:none"><font size="+1"><b>Sports Fest</b></font></a></center><br>
            <!--<center><a href="" style="text-decoration:none"><font size="+1"><b>Quiz Competition</b></font></a></center><br>-->
            <center><a href="index.php?option=admission" style="text-decoration:none"><font size="+1"><b>Admission 2014</b></font></a></center><br>
            <center><a href="index.php?option=sdp" style="text-decoration:none"><font size="+1"><b>Student Development Programme</b></font></a></center><br>
            <center><a href="index.php?option=wevents" style="text-decoration:none"><font size="+1"><b>Weekend Events</b></font></a></center><br>
            <center><a href="index.php?option=notice" style="text-decoration:none"><font size="+1"><b>Notice Board</b></font></a></center><br>
            <!--<center><a href="" style="text-decoration:none"><font size="+1"><b>Summer Vacation</b></font></a></center><br>-->
            <!--<center><a href="index.php?option=course" style="text-decoration:none"><font size="+1"><b>Courses Offered</b></font></a></center><br>
            <center><a href="index.php?option=gallery" style="text-decoration:none"><font size="+1"><b>Gallery</b></font></a></center><br>-->
		</marquee>
      </td>
    </tr>
    <tr>
      <td height="25" colspan="2" style="background-color:#B8AFFF"><center><b>&copy; 2014 ABC Group of Institutions</b></center></td>
    </tr>
  </tbody>
</table>
</html>