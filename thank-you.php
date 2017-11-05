<!DOCTYPE html>
<html lang="en">
<head>
<title>Thank you!</title>
<link rel="shortcut icon" href="images/favicon.ico" >
<meta charset="utf-8">
<meta name="description" content="e-learning website">
<meta name="keywords" content="e-learning, online tutorial, ontology website">
<meta name="author" content="ram">

<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="STYLESHEET" type="text/css" href="contact.css" />

<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>

<!--[if lt IE 7]>
     <link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
        ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img, .articles li img');
     </script>
<![endif]-->

<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->

</head>

<body id="page5">

<script type="text/javascript">
disableSelection(document.body) //disable text selection on entire body of page
</script>

<script language=JavaScript>
/**Disable Right Click**/
var message="";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
</script>

<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
function showResult(str)
{
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","livesearch.php?q="+str,true);
xmlhttp.send();
}
</script>

<script>
//Document title scroller
var repeat=0 //enter 0 to not repeat scrolling after 1 run, othersise, enter 1
var title=document.title
var leng=title.length
var start=1
function titlemove() {
  titl=title.substring(start, leng) + title.substring(0, start)
  document.title=titl
  start++
  if (start==leng+1) {
    start=0
    if (repeat==0)
    return
  }
  setTimeout("titlemove()",140)
}
if (document.title)
titlemove()
</script>

<div class="wrap">
   <!-- header -->
   <header>
      <div class="container">
         <h1><a href="index.php">Student's site</a></h1>
         <nav>
            <ul>
               <li><a href="index.php" class="m1">Home</a></li>
               <li><a href="aboutus.php" class="m2">About Us</a></li>
               <li><a href="subjects.php" class="m3">Subjects</a></li>
               <li class="current"><a href="contactus.php" class="m4">Contact Us</a></li>
               <li class="last"><a href="spotlight.php" class="m5">Spot-Light</a></li>
            </ul>
         </nav>
        <form action="" id="search-form">
            <fieldset>
            <div class="rowElem">
<a href="registerform.php">Register <a href="signin.php">Sign in</a>                
            </fieldset>
         </form>
      </div>
   </header>

   <div class="container">
      <!-- aside -->
      <aside>
         <h3>Categories</h3>
         <ul class="categories">
            <li><span><a href="syllabus.php">Syllabus</a></span></li>
            <li><span><a href="events.php">Events</a></span></li>
            <li><span><a href="calender.php">Calender</a></span></li>
            <li><span><a href="faq.php">FAQ</a></span></li>
            <li class="last"><span><a href="feedback.php">Feedback</a></span></li>
         </ul>
         <form action="" id="newsletter-form">
            <fieldset>
            <div class="rowElem">
               <h2>Newsletter</h2>
               <input type="email" value="Enter Your Email Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
               <div class="clear"><a href="#" class="fleft">Unsubscribe</a><a href="#" class="fright" onClick="document.getElementById('newsletter-form').submit()">Submit</a></div>
            </div>
            </fieldset>
         </form>
 
 <h2>Fresh <span>News</span></h2>
    <ul class="news"><br>
<div style="position:relative;width:220px;height:320px;border:1px solid black;overflow:hidden">
<div id="container" style="position:absolute;width:300px;left:0;top:0">

<!--INSERT CONTENT HERE-->
<ul> 

<li><strong>April 15, 2013</strong>
               <h4><a href="http://localhost/a/b/ds.html" target="_blank">Data Structure</a></h4>
              Complete Notes Updated :<br>
<a href="http://localhost/a/b/notes_ds.html" target="_blank">LINK</a></li>

<li><strong>April 17, 2013</strong>
               <h4><a href="http://localhost/a/b/ai.html" target="_blank">Artificial Intelligence</a></h4>
              Complete Notes Updated :<br>
<a href="http://localhost/a/b/notes_ai.html" target="_blank">LINK</a></li>

<li><strong>May 4,2013</strong>
               <h4><a href="http://www.facebook.com/groups/Crescita2013/"  target="_blank">PRA International Campus</a></h4>
Branch: IT/CSE/ECE/EEE/MCA<br>
Eligibility: 70 % & above in Mathematics ( 10th,12th) - 70% & above in UG/PG ( 3 Standing arrears allowed) with gud knowledge in C Programming<br>

CTC: 2.5 - 3.5 LPA<br>

Interview Rounds:<br>

-> Technical Online Test ( C Programming)<br>
-> Technical & General HR<br>

Venue: Auditorium<br>
Time: 8.15 a.m<br>
</li>
   
<li><strong>May 5,2013</strong>
               <h4><a href="http://www.facebook.com/groups/Crescita2013/"  target="_blank">CSS Corp recruitment</a></h4>
Branch: IT/CSE/ECE/EEE/MCA<br>
Eligibilty: 55% & above in UG/PG <br>

Designation:Support Engineer (Not an BPO)<br>

Tech Skills : Fundamentals of Networking, Computer Hardware & Operating Systems<br>

Soft Skills: Excellent communication skills <br>

CTC: 1.9 LPA<br>
</li>

<li><strong>April 25,2013</strong>
               <h4><a href="http://www.facebook.com/groups/Crescita2013/"  target="_blank">Nihon Technology</a></h4>

Branch: IT/CSE/MCA<br>
Eligibility: 60% & above in UG/PG ( 2 Standing arrears allowed)<br>
Interview Rounds:<br>
-> General Aptitude<br>
-> GD<br>
-> Technical & General HR<br>

Terms & Conditions:<br>
->Shortlisted Candidates has to Pay 1 Lakh as Security Deposit. <br>
->Need to Sign a bond For three Years. <br>

Time: 8.30 a.m<br>
Venue: Audiorium <br>             
</li>

<li><strong>May 2,2013</strong>
               <h4>E-Books</h4>
Required E-Books to be added<br> to the Website<br>           
</li>
         </ul>
<!--END CONTENT-->
</div></div>

<table width="200px"><td><p align="right">
<a href="#" onMouseover="move('container',3)" onMouseout="clearTimeout(move.to)"><img src="up.gif" border=0></a>  <a href="#" onMouseover="move('container',-3)" onMouseout="clearTimeout(move.to)"><img src="down.gif" border=0></a></p></td>
</table>

<script type="text/javascript">
function move(id,spd){
 var obj=document.getElementById(id),max=-obj.offsetHeight+obj.parentNode.offsetHeight,top=parseInt(obj.style.top);
 if ((spd>0&&top<=0)||(spd<0&&top>=max)){
  obj.style.top=top+spd+"px";
  move.to=setTimeout(function(){ move(id,spd); },20);
 }
 else {
  obj.style.top=(spd>0?0:max)+"px";
 }
}
</script>
</aside>

      <!-- content -->
      <section id="content">
        
         <div class="inside">
            <h2><span>Thanks for contacting us!</span></h2>
                          <h3> We will get back to you !!</h3> 
         </div>
      </section>
   </div>
</div>

<!-- footer -->
<footer>
   <div class="container">
      <div class="inside">
        <div class="wrapper">
            <div class="fleft"><span>Website Designed by</span>Ram, Sahana, Saravanan<br>
</div>
<div class="aligncenter"><a rel="nofollow" href="#" class="new_window"> <td align="right">

<div id="google_translate_element"></div>
<h2><?php 
$today = date("F j, Y,  g:i a");
echo $today;
?>
&nbsp&nbsp&nbsp&nbsp
<span>Follow us :</span>&nbsp
<a href="http://www.facebook.com/pages/elearn-ocean/220523844738898?skip_nax_wizard=true" target="_blank"><img src="images/fb.png" alt="Facebook" width="25" height="25"></a>&nbsp
<a href="https://www.twitter.com/" target="_blank"><img src="images/t.png" alt="Twitter" width="25" height="25"></a>  
</h2>
      </div>
   </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
