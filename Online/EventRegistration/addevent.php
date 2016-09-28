<?php
require_once 'Controller/Controller.php';

session_start();

$c = new Controller();
try {
	$c->createEvent($_POST['event_name']);
	$_SESSION["errorEventName"] = "";
} catch (Exception $e) {
	$_SESSION["errorEventName"] = $e->getMessage();
}

try { 
	$c->createEvent($_POST['event_date']) = "";
	$_SESSION["errorEventDate"] = "";
} catch (Exception $e) {
	$_SESSION["errorEventName"] = $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0; url=/EventRegistration/" />
	</head>
</html>




// strtotime($date) == false // cannot be converted

// date('Y-m-d', strtotime($date))
// date('H:i', strtotime($start))