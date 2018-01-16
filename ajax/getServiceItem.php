<?php 
require_once '../includes/db.php'; // The mysql database connection script
if (isset ($_GET['id']))
	$myid = $mysqli->real_escape_string($_GET['id']);

$query="SELECT id, service, description, errorcode,recipient,en_msg, sw_msg from service_message where id = " . $myid;

$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}

# JSON-encode the response
echo $json_response = json_encode($arr);
?>