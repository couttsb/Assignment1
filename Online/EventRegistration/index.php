<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Event Registration</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>
		<?php 
		require_once "Model/Participant.php";
		
		session_start();
		
		?>
		<form action="addparticipant.php" method="post">
			<p>Name? <input type="text" name="participant_name" />
			<span class="error">
			<?php  
			if (isset($_SESSION['errorParticipantName'])&& !empty($_SESSION['errorParticipantName'])) {
				echo " * " . $_SESSION["errorParticipantName"];
			}
			?>
			</span></p>
			<p><input type="submit" value="Add Participant"/></p>
		</form>
		
		<?php 
		require_once "Model/Event.php";
		
		session_start();
		
		?>
		<form action="addevent.php" method="post">
			<p>Event? <input type="text" name="event_name" />
			<span class="error">
			<?php  
			if (isset($_SESSION['errorEventName'])&& !empty($_SESSION['errorEventName'])) {
				echo " * " . $_SESSION["errorEventName"];
			}
			?>
			</span></p>
			<p><input type="submit" value="Add Event"/></p>
		</form>
	</body>
</html>