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

<?php echo '<?xml version="1.0" encoding="UTF-8" ?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">

<head>
<title>欢迎访问恒基咨询</title>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />


<link rel="stylesheet" href="style_c.css" type="text/css" />
<link rel="stylesheet" href="Verdana.css" type="text/css" />
<link rel="stylesheet" href="2d3f7d1edb3cc1774328c04dfe8010e4.css" type="text/css" />
<link rel="stylesheet" href="pathway.css" type="text/css" />


<script language="JavaScript" type="text/javascript" src="rvsincludefile/rvsnavigator.js"></script>

<script language="JavaScript" type="text/javascript" src="js/layersmenu-library.js"></script>
<script language="JavaScript" type="text/javascript" src="js/layersmenu.js"></script>

<script language="JavaScript" type="text/javascript" src="rvsincludefile/rvscustomopenwindow.js"></script>


</head>

<body>
  <?php include("header_c.php"); ?>

  <table cellpadding="0" cellspacing="0" width="1000" align="Center" bgcolor="#ffffff">
    <tr>
 			<td align="left" valign="top"><img src="images/img_05.jpg" alt="" width="14" height="100%" /></td>
      <td align="left" valign="top"><?php include("menu_c.php"); ?></td>
 			<td width="30"></td>
      <td valign="top">
        <table cellpadding="0" cellspacing="0" border=0>
          <tr>
            <td align="left">
              <p><br>
                <a href="index_c.php">主页</a>&nbsp;&nbsp;<img class="pathway" alt="" src="images/spacer.gif" />&nbsp;&nbsp;
                <b>联系我们</b>
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
                    <div><span><font size="2">有问题，或想与我们联系？</font></span></div>
                    <div><span><font size="2">&nbsp;</font></span></div>
                    <div><span><font size="2">电子邮件:&nbsp;&nbsp;</font><a href="mailto:info@hingepointconsulting.com"><font size="2"> info@hingepointconsulting.com</font></a></span></div>
                    <div><span></span><font size="2"></font>&nbsp;</div>
                    <div><font size="2">&nbsp;</font></div>
                    <div><font size="2">或填写下表：<br><br></font></div>
                  </td>
                  </tr>
                  <tr>
                  <td>
                    <script language="JavaScript" type="text/javascript" src="scripts/form/CheckValidate.js"></script>
                    <div align="center">
                      <form action="scripts/form/rvform.php" method="post" name="formId13fbf54ecac119df2f43b310e7efc585" id = "formId13fbf54ecac119df2f43b310e7efc585" onsubmit="return  CheckValidate('13fbf54ecac119df2f43b310e7efc585' , '6','yourname','compname','email','phone','subject','comment','Your name','Company name','E-mail','Phone','Subject','Comment','Character','NotValid','Email','NumericCharacter','NotValid','NotValid')" >
                        <?php  print $makeTags; ?>
                        <input type="hidden" name="redirect" value="http://www.hingepointconsulting.com/rvthankform_13fbf54ecac119df2f43b310e7efc585_c.php" />
                        <input type="hidden" name="missing_field_redirect" value="http://www.hingepointconsulting.com/rvthankform_13fbf54ecac119df2f43b310e7efc585_c.php" />
                        <input type="hidden" name="rvformid" value="13fbf54ecac119df2f43b310e7efc585" />
                        <input type="hidden" name="charset" value="iso-8859-15" />
                        <table width="500" bgcolor="#f0f0f0" align="left" cellspacing="1" cellpadding="3"  style="color:#000000;color:#000000;text-align:left;border:1px solid #e2e2e2;"|#e2e2e2|#b8b8b8  id="onlineFormTable">
                          <tr valign="top" bgcolor="#e2e2e2"><td width="80">姓　　名*:</td>
                            <td class="textinside"><input name="yourname" id="yourname" type="text" value="" size="20" maxlength="50" ></td>
                          </tr>
                          <tr valign="top" bgcolor="#b8b8b8"><td width="80">公　　司:</td>
                            <td class="textinside"><input name="compname" id="compname" type="text" value="" size="20" maxlength="50" ></td>
                          </tr><tr valign="top" bgcolor="#e2e2e2"><td width="80">电子邮件*:</td>
                            <td class="textinside"><input name="email" id="email" type="text" value="" size="40" ></td>
                          </tr><tr valign="top" bgcolor="#b8b8b8"><td width="80">电　　话:</td>
                            <td class="textinside"><input name="phone" id="phone" type="text" value="" size="20" ></td>
                          </tr><tr valign="top" bgcolor="#e2e2e2"><td width="80">主　　题*:</td>
                            <td class="textinside"><input name="subject" id="subject" type="text" value="" size="40" ></td>
                          </tr><tr valign="top" bgcolor="#b8b8b8"><td width="80">内　　容:</td>
                            <td class="textinside"><textarea name="comment" id="comment" cols="45" rows="6" wrap="Default" id="comment"></textarea></td>
                          </tr><tr valign="top" bgcolor="#e2e2e2"><td></td>
                          <input type="hidden" name="validated" value="yourname?Character,email?Email,phone?NumericCharacter">
                          <input type="hidden" name="required" value="yourname,email,subject"><td>
                          <input type="submit" name="submit" value="提交">&nbsp;
                          <input type="reset" name="reset" value="重置"></td></tr>
                          <tr align="center" rvComm="reqField" ><td colspan="2" nowrap > (* 为必填内容) </ td></tr>
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
       <?php include("right_c.php"); ?>
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

  <?php include("footer_c.php"); ?>

</body>
</html>
 			
	