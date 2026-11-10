
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
                     <div align="center">
						 <script>
						function validateForm() {
							var x = document.forms["contactform"]["name"].value;
							if (x == "") {
								alert("姓名必填");
								return false;
							}
							x = document.forms["contactform"]["email"].value;
							if (x == "") {
								alert("电子邮件必填");
								return false;
							}
							var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
							if(x.match(mailformat))
							{
							}
							else
							{
								alert("不正确的邮件地址!");
								return false;
							}
							x = document.forms["contactform"]["subject"].value;
							if (x == "") {
								alert("主题必填");
								return false;
							}
						   x = document.forms["contactform"]["comments"].value;
							if (x == "") {
								alert("内容必填");
								return false;
							}

						}

						</script>
									<form name="contactform" method="post" action="send_form_email_c.php" onsubmit="return validateForm()">
									<table cellpadding="5" cellspacing="5"  bgcolor="#f0f0f0">
									<tr>
									 <td valign="top" width="100">
									  <label for="name">姓&nbsp;&nbsp;名*</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="name" maxlength="50" size="50">
									 </td>
									</tr>
									<tr>
									 <td valign="top"">
									  <label for="company_name">公司名称</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="company_name" maxlength="100" size="50">
									 </td>
									</tr>
									<tr>
									 <td valign="top">
									  <label for="email">电子邮件*</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="email" maxlength="100" size="50">
									 </td>
									</tr>
									<tr>
									 <td valign="top">
									  <label for="telephone">电话号码</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="telephone" maxlength="40" size="50">
									 </td>
									</tr>
									<tr>
									 <td valign="top">
									  <label for="subject">主&nbsp;&nbsp;题*</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="subject" maxlength="100" size="50">
									 </td>
									</tr>
										<tr>
									 <td valign="top">
									  <label for="comments">内&nbsp;&nbsp;容*</label>
									 </td>
									 <td valign="top" >
									  <textarea  name="comments" maxlength="1000" cols="40" rows="6"></textarea><br>
									 </td>
									</tr>
									<tr>
									 <td colspan="2" style="text-align:center">
									  <input type="submit" value="提 交" ><br>
									(* 必填) <br> 
									  <br>
									 </td>
									</tr>
									</table></form><br>
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
 			
	