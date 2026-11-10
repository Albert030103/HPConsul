<?php if (class_exists('SGL_Fsbb'))
{$rvblockerOF = &SGL_Fsbb::singleton();}
else {include('scripts/fsbb/fsbb.php');
$rvblockerOF=new formSpamBotBlocker();} ?>
<?php $rvblockerOF->setTimeWindow(2,14400);
$rvblockerOF->setTrap(true,"spambot"); ?>
<?php  $makeTags = $rvblockerOF->makeTags(); ?>
<?php
 /**
 * validateManageComponent($input = component name)
 */
 if ( is_file( dirname(__FILE__) . "/scripts/rvslib/component/rvsManageComponent.php") ) {
     include( dirname(__FILE__) . "/scripts/rvslib/component/rvsManageComponent.php");
     rvsManageComponent::validateManageComponent('Online_Form');
 } elseif ( is_file( dirname(dirname(__FILE__)) . "/.rvsitebuilder/rvsManageComponent.php") ) {
     include( dirname(dirname(__FILE__)) . "/.rvsitebuilder/rvsManageComponent.php");
     rvsManageComponent::validateManageComponent('Online_Form');
 }
?>

<?php echo '<?xml version="1.0" encoding="iso-8859-15" ?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Welcome to HingePoint Consulting</title>

<meta http-equiv="Content-Type" content="text/html; charset =iso-8859-15" />
<meta name="keywords" content="" />
<meta name="description" content="" />


<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="Verdana.css" type="text/css" />
<link rel="stylesheet" href="2d3f7d1edb3cc1774328c04dfe8010e4.css" type="text/css" />
<link rel="stylesheet" href="pathway.css" type="text/css" />


<script language="JavaScript" type="text/javascript" src="rvsincludefile/rvsnavigator.js"></script>


<script language="JavaScript" type="text/javascript" src="js/layersmenu-library.js"></script>
<script language="JavaScript" type="text/javascript" src="js/layersmenu.js"></script>

<script language="JavaScript" type="text/javascript" src="rvsincludefile/rvscustomopenwindow.js"></script>

</head>

<body>
  <?php include("header.php"); ?>

  <table cellpadding="0" cellspacing="0" width="1000" align="Center" bgcolor="#ffffff" >
    <tr>
 			<td align="left" valign="top"><img src="images/img_05.jpg" alt="" width="14" height="100%" /></td>
      <td align="left" valign="top"><?php include("menu.php"); ?></td>
 			<td width="30"></td>
	    <td valign="top">
        <table cellpadding="0" cellspacing="0" border=0>
          <tr>
            <td align="left">
              <p><br>
                <a href="index.php">Home</a>&nbsp;&nbsp;<img class="pathway" alt="" src="images/spacer.gif" />&nbsp;&nbsp;
                <a href="Services.php">Services</a>&nbsp;&nbsp;<img class="pathway" alt="" src="images/spacer.gif" />&nbsp;&nbsp;
                <b>Contact Us</b>
              </p>
 					 </td>
          </tr>
        </table>
        <table cellpadding="0" cellspacing="0"  border=0>
          <tr>
            <td>
              <!--begin body content-->
              <br><br>
             	<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
                <tr>
                  <td width="95%" valign="top">
                    <div><span><font size="2">Have questions or interested in contacting us?</font></span></div>
                    <div><span><font size="2">&nbsp;</font></span></div>
                    <div><span><font size="2">E-mail:&nbsp;&nbsp;</font><a href="mailto:info@hingepointconsulting.com"><font size="2">info@hingepointconsulting.com</font></a></span></div>
                    <div><span></span><font size="2"></font>&nbsp;</div>
                    <div><font size="2">&nbsp;</font></div>
                    <div><font size="2">Or simply fill out the following form:<br><br></font></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <script language="JavaScript" type="text/javascript" src="scripts/form/CheckValidate.js"></script>
                    <div align="center">
                      <form action="scripts/form/rvform.php" method="post" name="formId13fbf54ecac119df2f43b310e7efc585" id = "formId13fbf54ecac119df2f43b310e7efc585" onsubmit="return  CheckValidate('13fbf54ecac119df2f43b310e7efc585' , '6','yourname','compname','email','phone','subject','comment','Your name','Company name','E-mail','Phone','Subject','Comment','Character','NotValid','Email','NumericCharacter','NotValid','NotValid')" >
                        <?php  print $makeTags; ?>
                        <input type="hidden" name="redirect" value="http://www.hingepointconsulting.com/rvthankform_13fbf54ecac119df2f43b310e7efc585.php" />
                        <input type="hidden" name="missing_field_redirect" value="http://www.hingepointconsulting.com/rvthankform_13fbf54ecac119df2f43b310e7efc585.php" />
                        <input type="hidden" name="rvformid" value="13fbf54ecac119df2f43b310e7efc585" />
                        <input type="hidden" name="charset" value="iso-8859-15" />
                        <table width="500" bgcolor="#f0f0f0" align="left" cellspacing="1" cellpadding="3"  style="color:#000000;color:#000000;text-align:left;border:1px solid #e2e2e2;"|#e2e2e2|#b8b8b8  id="onlineFormTable">
                          <tr valign="top" bgcolor="#e2e2e2"><td width="110">Your name*:</td>
                            <td class="textinside"><input name="yourname" id="yourname" type="text" value="" size="30" maxlength="50" ></td>
                          </tr>
                          <tr valign="top" bgcolor="#b8b8b8"><td width="110">Company name:</td>
                            <td class="textinside"><input name="compname" id="compname" type="text" value="" size="30" maxlength="50" ></td>
                          </tr><tr valign="top" bgcolor="#e2e2e2"><td width="110">E-mail*:</td>
                            <td class="textinside"><input name="email" id="email" type="text" value="" size="40" ></td>
                          </tr><tr valign="top" bgcolor="#b8b8b8"><td width="110">Phone:</td>
                            <td class="textinside"><input name="phone" id="phone" type="text" value="" size="30" ></td>
                          </tr><tr valign="top" bgcolor="#e2e2e2"><td width="110">Subject*:</td>
                            <td class="textinside"><input name="subject" id="subject" type="text" value="" size="40" ></td>
                          </tr><tr valign="top" bgcolor="#b8b8b8"><td width="110">Comment:</td>
                            <td class="textinside"><textarea name="comment" id="comment" cols="40" rows="6" wrap="Default" id="comment"></textarea></td>
                          </tr><tr valign="top" bgcolor="#e2e2e2"><td></td>
                          <input type="hidden" name="validated" value="yourname?Character,email?Email,phone?NumericCharacter">
                          <input type="hidden" name="required" value="yourname,email,subject"><td>
                          <input type="submit" name="submit" value="Submit">&nbsp;
                          <input type="reset" name="reset" value="Reset"></td></tr>
                          <tr align="center" rvComm="reqField" ><td colspan="2" nowrap > (* Required Fields) </ td></tr>
                        </table>
                      </form>
                    </div>
                  </td>
                </tr>
              </table><br />
              <!--end body content-->
            </td>
          </tr>
        </table>
      </td>
  		<td width="40"></td>
      <td width="205" valign="top">
       <?php include("right.php"); ?>
      </td>
 			<td align="right" valign="top" class="ex_l"><img src="images/img_10.jpg" alt="" width="24" height="30" /></td>
    </tr>
    <tr>
      <td colspan="7" align="left" valign="top" class="bgbottom">
        <table cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td align="right" valign="top"><img src="images/img_11.jpg" alt="" width="24" height="10" /></td>
          </tr>
        </table>
      </td>
		</tr>
  </table>

  <?php include("footer.php"); ?>

</body>
</html>