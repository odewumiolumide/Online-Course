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
		$query=" INSERT INTO blog (name, date, email,  message) VALUES('"
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

<style>
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	  background-image: url();
    background-position: center;
    background-size: cover;
    object-fit: cover;
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

</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.style10 {color: #FFFFFF; font-weight: bold; }
.style12 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
</style>
<center>
  <h2>Output Details</h2>
<td height="42" colspan="2" align="center" valign="middle"><hr />
                    &nbsp;
                    <table width="418" border="1" cellpadding="1" cellspacing="1">
                      <tr bgcolor="#000000">
                        <th width="170" align="center" valign="middle" scope="col"><span class="style10">Name</span></th>
                        <th width="170" align="center" valign="middle" class="style10" scope="col">Date</th>
                        <th width="341" align="center" valign="middle" class="style10" scope="col">Message</th>
                        
                        <th width="9" align="center" valign="middle" scope="col">&nbsp;</th>
                        
                      </tr>
                      <?php $c=0;
			  $sql = "SELECT *FROM blog order by id asc;";
			    $query=mysql_query($sql) or die(mysql_error());
  
  while(($rows=mysql_fetch_array($query)))
  {
  $c++;
  extract($rows);
  ?>
                      <tr bgcolor="#E2E2E2">
                        <th height="23" align="center" valign="middle" scope="col"><?php echo $name; ?></th>
                        <th height="23" align="center" valign="middle" scope="col"><?php echo $date; ?></th>
                        <th height="23" align="center" valign="middle" scope="col"><?php echo $message; ?></th>
                        <th align="center" valign="middle" bgcolor="#990000" scope="col"><a href="order help table.php?delete=<?php echo $id; ?>">d</a></th>
                      </tr>
                      <?php } ?>
                    </table></td>
                </tr>
                </table></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="19" align="center" bgcolor="#464646">&nbsp;</td>
        </tr>
      </table></td>
</center>

<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>