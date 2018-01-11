<?php
require_once '../includes/db.php'; // The mysql database connection script
$filter = '';
$where = '';
$table ='';

$section = $mysqli->real_escape_string($_GET['section']);

if(isset($section) ){
	$table = $section;
}

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


//$jsonData['data']=$arr;
$cols = ['id','fulltimestamp', 'msisdn','account', 'service','references','amount','status','lang','name'];
//$jsonData['columns']= $cols;
//$json =  json_encode($jsonData);//.$query;
//echo $json;
//$d_json = json_decode($json);

$my_results=array();
foreach($arr as $d){
	foreach ($d as $key => $value) {
		if ($key == 'msisdn') {

			$val = '+' . preg_replace('/\d{3}/', '$0 ', str_replace('.', null, trim($value)), 3);
			$d['msisdn'] = $val;

			//echo $value;
		}
		if ($key == 'tstatus' && $value == 'SUCCESS'){
			$val='<span class="label label-success">' .$value.'</span>';
			$d['tstatus'] = $val;
		}
		if ($key == 'tstatus' && $value == 'FAILED'){
			$val='<span class="label label-danager">' .$value.'</span>';
			$d['tstatus'] = $val;
		}
		if ($key == 'lang' && $value == 'SW'){
			$val='Swhaili';
			$d['lang'] = $val;
		}
		if ($key == 'amount' ){
			$val=number_format($value);
			$d['amount'] = $val;
		}




	}
//var_dump($d);
	$my_results[]=$d;
}
//$jsonData['data']=$arr;
$jsonData['data']=$my_results;
$jsonData['columns']=$cols;
$json = json_encode($jsonData);
echo $json;





//echo $query ."<p>";
# JSON-encode the response
//echo $json_response = json_encode($arr);//.$query;
?>
