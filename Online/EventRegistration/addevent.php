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
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0; url=/EventRegistration/" />
	</head>
</html>


CODE SNIPPETS THAT MUST BE INCORPORATED

<input type="date" name="event_date" value="<?php echo date('Y-m-d'); ?>" />
<input type="time" name="starttime" value="<?php echo date('H:i'); ?>" />

strtotime($date) == false // cannot be converted

date('Y-m-d', strtotime($date))
date('H:i', strtotime($start))