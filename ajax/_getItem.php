<?php
require_once '../includes/db.php'; // The mysql database connection script
$filter = '';
$where = '';



if(isset($groupid) ){
	$where ='where ';
	$groupid = $mysqli->real_escape_string($_GET['groupid']);
	$filter = "groupid like '%".$groupid."%'";
}
if(isset($phone)){
	$where ='where ';
	$phone = $mysqli->real_escape_string($_GET['phone']);
	$filter .= " and msisdn like '%".$phone."%'";
}
if(isset($ref)){
	$where ='where ';
	$ref = $mysqli->real_escape_string($_GET['ref']);
	$filter .= " and reference like '%".$ref;
}

if(isset($startDate) && $startDate != ''){
	$startDate = $mysqli->real_escape_string($_GET['startDate']);
	$filter .= " and fulltimestamp >= '".$startDate;
}
if(isset($endDate) && $endDate != ''){
	$endDate = $mysqli->real_escape_string($_GET['startDate']);
	$filter .= " and fulltimestamp <= '".$$endDate;
}
if (!isset($startDate) && !isset($endDate)  )
	$query="SELECT id, fulltimestamp,msisdn, account,service,reference, amount,tstatus,lang, groupid from transactions order by fulltimestamp desc";
else
	$query="SELECT id, fulltimestamp,msisdn, account,service,reference, amount,tstatus,lang, groupid from transactions $where $filter  order by fulltimestamp desc";

$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;
	}
}

$jsonData['data']=$arr;
$cols = ['id','fulltimestamp', 'msisdn','account', 'service','references','amount','status','lang','groupid'];
$jsonData['columns']= $cols;
echo json_encode($jsonData);//.$query;
//echo $query ."<p>";
# JSON-encode the response
//echo $json_response = json_encode($arr);//.$query;
?>
