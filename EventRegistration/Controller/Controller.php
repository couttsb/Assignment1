<?php
require_once 'C:\Users\Brent\ECSE-Assignment1\Online\EventRegistration\Controller\InputValidator.php';
require_once 'C:\Users\Brent\ECSE-Assignment1\Online\EventRegistration\Persistence\PersistenceEventRegistration.php';
require_once 'C:\Users\Brent\ECSE-Assignment1\Online\EventRegistration\Model\Event.php';
require_once 'C:\Users\Brent\ECSE-Assignment1\Online\EventRegistration\Model\Participant.php';
require_once 'C:\Users\Brent\ECSE-Assignment1\Online\EventRegistration\Model\Registration.php';
require_once 'C:\Users\Brent\ECSE-Assignment1\Online\EventRegistration\Model\RegistrationManager.php';

class Controller {
	public function __construct(){
	}
	
	public function createParticipant($participant_name) {
		// 1. Validate input
		$name = InputValidator::validate_input($participant_name);
			if ($name == null || strlen($name) == 0) {
				throw new Exception("Participant name cannot be empty!");
			} else {
				// 2. Load all of the data
				$pm = new PersistenceEventRegistration();
				$rm = $pm->loadDataFromStore();
				
				// 3. Add the new participant
				$participant = new Participant($name);
				$rm->addParticipant($participant);
				
				// 4. Write all of the data
				$pm->writeDataToStore($rm);
			}
	}
	
	public function createEvent($aName, $aEventDate, $aStartTime, $aEndTime) {
		// 1. Validate the event name, date, starttime, and endtime received
		$event = new Event($aName, $aEventDate, $aStartTime, $aEndTime);
		
		// 2. Load all of the data
		$pm = new PersistenceEventRegistration();
		$rm = $pm->loadDataFromStore();
		
		$myname = NULL;
		if (strcmp($event->getName(), $aName) == 0) {
			$myname = InputValidator::validate_input($aName);
		}
		$myeventdate = NULL;
		if (strcmp($event->getEventDate(), $aEventDate) == 0) {
			$myeventdate = date('Y-m-d', strtotime($event->getEventDate()));
		}
		$mystarttime = NULL;
		if (strcmp($event->getStartTime(), $aStartTime) == 0) {
			$mystarttime = date('H:i', strtotime($event->getStartTime()));
		}
		$myendtime = NULL;
		if (strcmp($event->getEndTime(), $aEndTime) == 0) {
			$myendtime = date('H:i', strtotime($event->getEndTime()));
		}		
		
		// 3. Add the new event
		if ($myname != NULL && $myeventdate != NULL && $mystarttime != NULL && $myendtime != NULL) { 
			$myevent = new Event($myname, $myeventdate, $mystarttime, $myendtime);
			$rm->addEvent($myevent);
			
			// 4. Write all of the data
			$pm->writeDataToStore($rm);
		} else {
			$error = "";
			if ($myname == null || strlen($myname) == 0) {
				$error .= "@1Event name cannot be empty! ";
			} if (strtotime($myeventdate) == false || trim($myeventdate) == "") {
				$error .= "@2Event date must be specified correctly (YYYY-MM-DD)! ";
			} if (strtotime($mystarttime) == false || trim($mystarttime) == "") {
				$error .= "@3Event start time must be specified correctly (HH:MM)! ";
			} if (strtotime($myendtime) == false || trim($myendtime) == "") {
				$error .= "@4Event end time must be specified correctly (HH:MM)! ";
			} if ($myendtime != null && $mystarttime != null && date('H:i', strtotime($mystarttime)) > date('H:i', strtotime($myendtime))) {
				$error .= "@5Event end time cannot be before event start time!";
			}
			throw new Exception(trim($error));			
			}
	}
	
	public function register($aParticipant, $aEvent) {
		// 1. Load all of the data
		$pm = new PersistenceEventRegistration();
		$rm = $pm->loadDataFromStore();
		
		// 2. Find the participant
		$myparticipant = NULL; 
		foreach ($rm->getParticipants() as $participant) {
			if (strcmp($participant->getName(), $aParticipant) == 0) {
				$myparticipant = $participant;
				break;
			}
		}
		
		// 3. Find the event
		$myevent = NULL;
		foreach ($rm->getEvents() as $event) {
			if (strcmp($event->getName(), $aEvent) == 0) {
				$myevent = $event;
				break;
			}
		}
		
		// 4. Register for the event
		$error = "";
		if ($myparticipant != NULL && $myevent != NULL) {
			$myregistration = new Registration($myparticipant, $myevent);
			$rm->addRegistration($myregistration);
			$pm->writeDataToStore($rm);
		} else {
			if ($myparticipant == NULL) {
				$error .= "@1Participant ";
				if ($aParticipant != NULL) {
					$error .= $aParticipant;
				}
				$error .= " not found! ";
			}
			if ($myevent == NULL) {
				$error .= "@2Event ";
				if ($aEvent != NULL) {
					$error .= $aEvent;
				}
				$error .= " not found!";
			}
			throw new Exception(trim($error));
		}
	}
}
?>