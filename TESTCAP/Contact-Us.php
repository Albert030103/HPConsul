
<?php echo '<?xml version="1.0" encoding="iso-8859-15" ?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<title>HingePoint Capital</title>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />

<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<?php include("header.php"); ?>
            <!--begin body content-->
  <table cellpadding="0" cellspacing="5" width="100%" align="Center" bgcolor="#2B547E" >
    <tr>
	<td width="100"> </td>
 	 <td align="left" valign="top"> 
	  <p><br>Home&nbsp;&nbsp;>&nbsp;&nbsp;Contact </p>
	  <!--begin body content-->
  <div class="mycontent">
  <br><br>
		<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse">
		<tr>
		  <td width="50%" valign="top"><br><br>
			<p>Have questions or interested in contacting us?</p>
			<p>E-mail:&nbsp;&nbsp;<a href="mailto:info@hingepointcapital.com">info@hingepointcapital.com</a></p>
			<br>
			<p>Or simply fill out the form on the right:</p>
		  </td>
		  <td>
<script>
function validateForm() {
    var x = document.forms["contactform"]["first_name"].value;
    if (x == "") {
        alert("First Name must be filled out");
        return false;
    }
    x = document.forms["contactform"]["last_name"].value;
    if (x == "") {
        alert("Last Name must be filled out");
        return false;
    }
    x = document.forms["contactform"]["email"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(x.match(mailformat))
	{
	}
	else
	{
		alert("You have entered an invalid email address!");
		return false;
	}
	
	x = document.forms["contactform"]["subject"].value;
    if (x == "") {
        alert("Subject must be filled out");
        return false;
    }
   x = document.forms["contactform"]["comments"].value;
    if (x == "") {
        alert("Comments must be filled out");
        return false;
    }

}

</script>
			<form name="contactform" method="post" action="send_form_email.php" onsubmit="return validateForm()">
			<table cellpadding="5" cellspacing="5"  >
			<tr>
			 <td valign="top">
			  <label for="first_name">First Name*</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="first_name" maxlength="50" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top"">
			  <label for="last_name">Last Name*</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="last_name" maxlength="50" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top"">
			  <label for="company_name">Company</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="company_name" maxlength="100" size="60">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="email">Email*</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="email" maxlength="100" size="60">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="telephone">Tel Number</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="telephone" maxlength="40" size="40">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="subject">Subject*</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="subject" maxlength="100" size="70">
			 </td>
			</tr>
				<tr>
			 <td valign="top">
			  <label for="comments">Comments*</label>
			 </td>
			 <td valign="top" >
			  <textarea  name="comments" maxlength="2000" cols="80" rows="6"></textarea><br>
			 </td>
			</tr>
			<tr>
			 <td colspan="2" style="text-align:center">
			  <input type="submit" value="Submit" ><br>
			<font size="3">(* Required Fields) </font><br> 
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
  <?php include("footer.php"); ?>

</body>
</html>
