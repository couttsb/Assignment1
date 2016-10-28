<?php
require_once 'Controller/Controller.php';

session_start();

$_SESSION["errorEventName"] = "";
$_SESSION["errorEventDate"] = "";
$_SESSION["errorStartTime"] = "";
$_SESSION["errorEndTime"] = "";
$_SESSION["errorStartTimeBeforeEndTime"] = "";
$c = new Controller();

try {
	$event_name = NULL;
	if (isset($_POST['event_name'])) {
		$event_name = InputValidator::validate_input($_POST['event_name']);
	}
	$event_date = NULL;
	if (isset($_POST['event_date'])) {
		$event_date = date('Y-m-d', strtotime($_POST['event_date']));
	}
	$starttime = NULL;
	if (isset($_POST['starttime'])) {
		$starttime = date('H:i', strtotime($_POST['starttime']));
	}
	$endtime = NULL;
	if (isset($_POST['endtime'])) {
		$endtime = date('H:i', strtotime($_POST['endtime']));
	}
	$c->createEvent($event_name, $event_date, $starttime, $endtime);
	
} catch (Exception $e) {
	$errors = explode("@", $e->getMessage());
	foreach ($errors as $error) {
		if (substr($error, 0 , 1) == "1") {
			$_SESSION["errorEventName"] = substr($error, 1);
		}
		if (substr($error, 0, 1) == "2") {
			$_SESSION["errorEventDate"] = substr($error, 1);
		}
		if (substr($error, 0, 1) == "3") {
			$_SESSION["errorStartTime"] = substr($error, 1);
		}
		if (substr($error, 0, 1) == "4") {
			$_SESSION["errorEndTime"] = substr($error, 1);
		}
		if (substr($error, 0, 1) == "5") {
			$_SESSION["errorStartTimeBeforeEndTime"] = substr($error, 1);
		}
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0; url=/EventRegistration/" />
	</head>
</html>