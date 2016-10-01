<?php
require_once 'Controller/Controller.php';

session_start();

$c = new Controller();
try {
	$c->createEvent($_POST['event_name']);
	$_SESSION["errorEventName"] = "";
	$c->createEvent($_POST['event_date']);
	$_SESSION["errorEventDate"] = "";
	$c->createEvent($_POST['starttime']);
	$_SESSION["errorStartTime"] = "";
	$c->createEvent($_POST['endtime']);
	$_SESSION["errorEndTime"] = "";
} catch (Exception $e) {
	$_SESSION["errorEventName"] = $e->getMessage();
	$_SESSION["errorEventDate"] = $e->getMessage();
	$_SESSION["errorStartTime"] = $e->getMessage();
	$_SESSION["errorEndTime"] = $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0; url=/EventRegistration/" />
	</head>
</html>