<?php
require_once '../includes/db.php'; // The mysql database connection script
$filter = '';
$where = '';
$table ='';

$section = $mysqli->real_escape_string($_GET['section']);

if(isset($section) ){
	$table = $section;
}
/*
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
*/
$query=$table;
if ($table == 'transactions')
	$query="SELECT t.id, t.fulltimestamp, t.msisdn, t.account, t.service,t.reference, t.amount, t.tstatus, t.lang, s.name from transactions t join savings_group s on s.groupid = t.groupid order by fulltimestamp desc";

$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;
	}
}

$jsonData['data']=$arr;
$cols = ['id','fulltimestamp', 'msisdn','account', 'service','references','amount','status','lang','name'];
$jsonData['columns']= $cols;
echo json_encode($jsonData);//.$query;
//echo $query ."<p>";
# JSON-encode the response
//echo $json_response = json_encode($arr);//.$query;
?>
