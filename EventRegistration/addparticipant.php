<?php
require_once 'Controller/Controller.php';

session_start();

$_SESSION["errorParticipantName"] = "";
$c = new Controller();

try {
	$c->createParticipant($_POST['participant_name']);
	
} catch (Exception $e) {
	$_SESSION["errorParticipantName"] = $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0; url=/EventRegistration/" />
	</head>
</html>