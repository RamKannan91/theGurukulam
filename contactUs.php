<?PHP
require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

$formproc->AddRecipient('ramkannan1991@gmail.com'); //<<---Put your email address here

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>The Gurukulam</title>

<!-- SET: FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<!-- END: FAVICON -->

<!-- SET: STYLESHEET -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
 <link rel="STYLESHEET" type="text/css" href="contact.css" />
<!-- END: STYLESHEET -->

<!-- SET: SCRIPTS -->
	<script type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
		<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
<!-- END: SCRIPTS -->
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
</head>

<body>

<!-- wrapper starts -->
<div class="wrapper">
	
    
        	
            <!-- Header Starts -->
            <div id="header">
            	<div class="header">
                	<div id="logo">
                    	<a href="#"> The Gurukulam </a>
                    </div>
                    <div id="nav">
                    	<?php include("menu.php");?>
						<?php menuPane(); ?>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    
                </div>                	
            </div>	
            <!-- Header ends -->
            <!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>

<legend>Contact us</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>

    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>


    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>


    <label for='phone' >Phone Number:</label><br/>
    <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15" /><br/>
    <span id='contactus_phone_errorloc' class='error'></span>


    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>

    <div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
    <label for='scaptcha' >Enter the code above here:</label>
    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
    <span id='contactus_scaptcha_errorloc' class='error'></span>
    <div class='short_explanation'>Can't read the image?
    <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>



<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");


    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>

 
               
         </div>
      </section>
   </div>
</div>

       
            
			
            
            <!-- footer starts -->
            <div id="footer">
            	<div class="footer">
                	<div class="foot-inner">
                    	<div class="social flt_Lt">
                        	<ul>
                                <li> <p> Connect with us </p> </li>
                                <li> <a class="ico2" href="http://www.twitter.com" target="_blank"> Twitter </a> </li>
                                <li> <a class="ico3" href="http://www.facebook.com" target="_blank"> Facebook </a> </li>
                            </ul>
                        </div>
                        
                        <div class="foot-nav flt_Rt">
                        	<ul>
                        	<li> <a href="index.php"> Home </a> </li>
                            <li> <a href="about.php"> About  </a> </li>
                            <li> <a href="gallery.php"> Gallery </a> </li>
                            <li> <a href="career.php"> Career </a> </li>
							<li class="no_bg"> <a href="#"> Contact us </a></li>
                        </ul>
                        <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        
                    </div>
                    </div>
                    
                    <div class="copy">
                    	<p> Copyright � 2013 The Gurukulam. All rights reserved. Design by <a href="http://www.elearnocean.com" target="_blank" rel="nofollow">E-learnocean Team</a> </p>
              </div>
                
            </div>
            <!-- footer ends -->
            
    
    
</div>
<!-- wrapper ends -->

</body>
</html>
