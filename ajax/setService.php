<?php 
require_once '../includes/db.php'; // The mysql database connection script
//if insert key is pressed then do insertion

if($_POST['submit'] == 'save'){

	$id  = mysql_real_escape_string($_POST['id']);
	$service = mysql_real_escape_string($_POST['service']);
	$description = mysql_real_escape_string($_POST['description']);
	$errorcode = mysql_real_escape_string($_POST['errorcode']);
	$recipient = mysql_real_escape_string($_POST['recipient']);
	$en_msg = mysql_real_escape_string($_POST['en_msg']);
	$sw_msg = mysql_real_escape_string($_POST['sw_msg']);


	$query   = "update service_message set description = $description, service=$service, errorcode=$errorcode,recipient=$recipient,en_msg=$en_msg,sw_msg=$sw_msg where id = " .$id;
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($result)
		echo true;
	else
		echo $mysqli->error.__LINE__);

}
else
	echo "Error, not pressed saved button";
?>