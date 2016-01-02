<?php 
session_start();
include ('dbc.php'); 

if (!isset($_REQUEST['usr']) && !isset($_REQUEST['code']) )
{
$msg = "ERROR: Invalid code...";
exit();
}

$rsCode = mysql_query("SELECT activation_code from users where user_email='$_REQUEST[usr]'") or die(mysql_error());

list($acode) = mysql_fetch_array($rsCode);

if ($_REQUEST['code'] == $acode)
{
mysql_query("update users set user_activated=1 where user_email='$_REQUEST[usr]'") or die(mysql_error());
echo "<h3>Thank you </h3>Email confirmed and account activated. You can <a href=\"login.php\">login</a> now..";
} else
{ echo "ERROR: Incorrect activation code...not valid"; }

?>

