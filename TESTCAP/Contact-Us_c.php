
<?php echo '<?xml version="1.0" encoding="iso-8859-15" ?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<title>恒基资本</title>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />

<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<?php include("header_c.php"); ?>
            <!--begin body content-->
  <table cellpadding="0" cellspacing="5" width="100%" align="Center" bgcolor="#2B547E" >
    <tr>
	<td width="100"> </td>
 	 <td align="left" valign="top"> 
	  <p><br>首页&nbsp;&nbsp;>&nbsp;&nbsp;>联系我们 </p>
	  <!--begin body content-->
  <div class="mycontent_c">
  <br><br>
		<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse">
		<tr>
		  <td width="50%" valign="top"><br>
			<p>&nbsp;&nbsp;有问题，或想与我们联系？</p>
			<p>&nbsp;&nbsp;电子邮件：<a href="mailto:info@hingepointcapital.com">info@hingepointcapital.com</a></p>
			<br>
			<p>&nbsp;&nbsp;或填写右边的表格：</p>
		  </td>
		  <td>
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
			<table cellpadding="5" cellspacing="5"  >
			<tr>
			 <td valign="top">
			  <label for="name">姓&nbsp;&nbsp;名*</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="name" maxlength="50" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top"">
			  <label for="company_name">公司名称</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="company_name" maxlength="100" size="60">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="email">电子邮件*</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="email" maxlength="100" size="60">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="telephone">电话号码</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="telephone" maxlength="40" size="40">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="subject">主&nbsp;&nbsp;题*</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="subject" maxlength="100" size="70">
			 </td>
			</tr>
				<tr>
			 <td valign="top">
			  <label for="comments">内&nbsp;&nbsp;容*</label>
			 </td>
			 <td valign="top" >
			  <textarea  name="comments" maxlength="1000" cols="80" rows="6"></textarea><br>
			 </td>
			</tr>
			<tr>
			 <td colspan="2" style="text-align:center">
			  <input type="submit" value="提 交" ><br>
			<font size="3">(* 必填) </font><br> 
			  <br><br>
			 </td>
			</tr>
			</table></form>
		</div>
		</td></tr>
	</table>
              <!--end body content-->
 </td>
	<td width="100"> </td>
	</tr>
  </table>
  <!--end body content-->
  <?php include("footer_c.php"); ?>

</body>
</html>
