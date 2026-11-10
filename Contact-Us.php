
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
                    <div align="center">
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
									<table cellpadding="5" cellspacing="5" bgcolor="#f0f0f0" >
									<tr>
									 <td valign="top">
									  <label for="first_name">First Name*</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="first_name" maxlength="50" size="50">
									 </td>
									</tr>
									<tr>
									 <td valign="top"">
									  <label for="last_name">Last Name*</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="last_name" maxlength="50" size="50">
									 </td>
									</tr>
									<tr>
									 <td valign="top"">
									  <label for="company_name">Company</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="company_name" maxlength="100" size="50">
									 </td>
									</tr>
									<tr>
									 <td valign="top">
									  <label for="email">Email*</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="email" maxlength="100" size="50">
									 </td>
									</tr>
									<tr>
									 <td valign="top">
									  <label for="telephone">Tel Number</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="telephone" maxlength="40" size="50">
									 </td>
									</tr>
									<tr>
									 <td valign="top">
									  <label for="subject">Subject*</label>
									 </td>
									 <td valign="top">
									  <input  type="text" name="subject" maxlength="100" size="50">
									 </td>
									</tr>
										<tr>
									 <td valign="top">
									  <label for="comments">Comments*</label>
									 </td>
									 <td valign="top" >
									  <textarea  name="comments" maxlength="1000" cols="40" rows="6"></textarea><br>
									 </td>
									</tr>
									<tr>
									 <td colspan="2" style="text-align:center">
									  <input type="submit" value="Submit" ><br>
									(* Required Fields) <br> <br>
									 
									 </td>
									</tr>
									</table></form> <br> 
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