<?php 
require_once '../../includes/db.php'; // The mysql database connection script

$query="SELECT distinct t.groupid  from savings_group  ";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	echo  $result->num_rows;
}
else
	echo -1;

?>