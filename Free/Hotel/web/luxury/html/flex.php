<?php 


mysql_connect("localhost","root","") or die (mysql_error());

mysql_select_db("home");
if(isset($_GET['delete']))
	{
		$sql = "DELETE FROM blog  WHERE id=".$_GET['delete'].";";
		mysql_query($sql) or die(mysql_error());
	}
?>
<?php
$query = "";
$message = "";

	if(isset($_POST['Submit']))
	 {
	if(!($_POST['name']))
		$message = "field is required";
		if(!($_POST['date']))
		$message = "field is required";
    if(!($_POST['email']))
		$message = "field is required";
        if(!($_POST['message']))
		$message = "field is required";
	
	else {
		$query=" INSERT INTO blog (name, date, email, message) VALUES('"
	 	    .$_POST['name']."','" 
		    .$_POST['date']."','"
        .$_POST['email']."','"
        .$_POST['message']."'
		);";
		mysql_query($query) or die("Error in Registration<hr>".mysql_error());
		$message="Sent Successfully";
		header("Refresh: 0; URL=flex.php");	
		}}
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="flex.css">
<title>Order Help</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
  
}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #990000;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
-->
</style>
<link href="stye.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.style10 {color: #FFFFFF; font-weight: bold; }
.style12 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
</style>
</head>


<body>

<!------HEADER---->




<form id="form1" name="form1" method="post" action="">
  <table width="100%" height="100%" border="0" align="center">
    <tr>
      <td height="508" align="center" valign="middle"><?php //include ('head1.php') ?>
        <table width="763" height="130" border="0" cellpadding="0" cellspacing="0" bordercolor="#D0B8E7">
        <tr>
          <td width="763" height="27" align="center" bgcolor="#464646">&nbsp;</td>
        </tr>
        <tr>
          <td height="68" align="center" bgcolor="#CCCCCC"><table width="794">
            <tr>
              <td width="197" height="135" align="center" valign="middle"><?php //include ('l.php') ?>&nbsp;</td>
              <td width="550" align="center" valign="top"><table width="550" border="0" align="center" cellpadding="3" cellspacing="5">
                <tr>
                  <td colspan="2" align="center" valign="middle"><blink><span class="style1">
                    <hr />
                  
                  <?php echo $message ?></span></blink></td>
                </tr>
                <tr>
                  <td colspan="2" align="left" bgcolor="#3F3F3F"><span class="style12">Blog Information /::</span></td>
                </tr>

                <tr bordercolor="#FFFFFF" bgcolor="#C5A8E1">
                  <td width="200" align="right" bgcolor="#999999">Name</td>
                  <td width="323" align="left" bgcolor="#3F3F3F"><span id="sprytextfield2">
                  <input name="name" type="name"  id="name" size="45" />
                  <span class="textfieldRequiredMsg"> required.</span></span></td>
                </tr>
               
                <tr bordercolor="#FFFFFF" bgcolor="#C5A8E1">
                  <td align="right" bgcolor="#999999">Date</td>
                  <td align="left" bgcolor="#3F3F3F">
                    <input type="date" type="date" id="date" size="45" name="date"></td>
                </tr>

                <tr bordercolor="#FFFFFF" bgcolor="#C5A8E1">
                  <td align="right" bgcolor="#999999">Email</td>
                  <td align="left" bgcolor="#3F3F3F">
                    <input type="email" type="email" id="email" size="45" name="email"></td>
                </tr>
                
              
                </tr>

                <tr bordercolor="#FFFFFF" bgcolor="#C5A8E1">
                  <td align="right" bgcolor="#999999">Message</td>
                  <td align="left" bgcolor="#3F3F3F"><textarea name="message" id="message" type="message" cols="30" rows="10"></textarea></td>
                </tr>

              
                <tr bgcolor="#3F3F3F">
                  <td colspan="2" align="center"><span id="sprytextfield5"><span class="textfieldRequiredMsg">required.</span>
                    <input name="Submit" type="submit" id="Submit" value="       Submit        " />
                    </span></td>
                </tr>
                <tr>
                  
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>



</body>
</html>
