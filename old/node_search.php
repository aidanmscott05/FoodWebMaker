<?
function error ( $msg ) {
	$response['error'] = $msg;
	echo json_encode( $response );	
	exit();
} 
// init will check our session and log us in
include_once("init.php");

// send out the header first to tell the client to expect json data
//header("Content-Type: application/json");

$srchKey='';

if ( !empty( $_GET['term']) ) {
	$srchKey = $_GET['term'];
} else {
	error("No search terms.");
	exit();
}

$sql = "SELECT id, itis_id, working_name FROM nodes WHERE working_name LIKE " . $db->quote( '%'. $srchKey . '%');
$sql .= " ORDER BY working_name"; 
$results = $db->getAll($sql);
if(DB::IsError($results)) { error($results->getMessage(  )); }
$first=true;
echo "[ ";
foreach( $results as $k => $v ) {
	if (!$first) {
		echo ",";
	} else {
		$first = false;
	}
	echo "{\"id\": \"". $v['id']. "\", \"value\": \"" . $v['working_name'] ."\", \"label\": \"". $v['working_name'] ."\"}";
}
echo " ]";

?>
