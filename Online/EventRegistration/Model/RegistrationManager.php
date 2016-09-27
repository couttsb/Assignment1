&nbsp;
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-7aed471 modeling language!*/
&nbsp;
class RegistrationManager
{
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// STATIC VARIABLES
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;private static $theInstance = null;
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// MEMBER VARIABLES
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;//RegistrationManager Associations
&nbsp;&nbsp;private $registrations;
&nbsp;&nbsp;private $participants;
&nbsp;&nbsp;private $events;
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// CONSTRUCTOR
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;private function __construct()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$this->registrations = array();
&nbsp;&nbsp;&nbsp;&nbsp;$this->participants = array();
&nbsp;&nbsp;&nbsp;&nbsp;$this->events = array();
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public static function getInstance()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;if(self::$theInstance == null)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;self::$theInstance = new RegistrationManager();
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return self::$theInstance;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// INTERFACE
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;public function getRegistration_index($index)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$aRegistration = $this->registrations[$index];
&nbsp;&nbsp;&nbsp;&nbsp;return $aRegistration;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function getRegistrations()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$newRegistrations = $this->registrations;
&nbsp;&nbsp;&nbsp;&nbsp;return $newRegistrations;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function numberOfRegistrations()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$number = count($this->registrations);
&nbsp;&nbsp;&nbsp;&nbsp;return $number;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function hasRegistrations()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$has = $this->numberOfRegistrations() > 0;
&nbsp;&nbsp;&nbsp;&nbsp;return $has;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function indexOfRegistration($aRegistration)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasFound = false;
&nbsp;&nbsp;&nbsp;&nbsp;$index = 0;
&nbsp;&nbsp;&nbsp;&nbsp;foreach($this->registrations as $registration)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($registration->equals($aRegistration))
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasFound = true;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$index += 1;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;$index = $wasFound ? $index : -1;
&nbsp;&nbsp;&nbsp;&nbsp;return $index;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function getParticipant_index($index)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$aParticipant = $this->participants[$index];
&nbsp;&nbsp;&nbsp;&nbsp;return $aParticipant;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function getParticipants()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$newParticipants = $this->participants;
&nbsp;&nbsp;&nbsp;&nbsp;return $newParticipants;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function numberOfParticipants()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$number = count($this->participants);
&nbsp;&nbsp;&nbsp;&nbsp;return $number;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function hasParticipants()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$has = $this->numberOfParticipants() > 0;
&nbsp;&nbsp;&nbsp;&nbsp;return $has;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function indexOfParticipant($aParticipant)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasFound = false;
&nbsp;&nbsp;&nbsp;&nbsp;$index = 0;
&nbsp;&nbsp;&nbsp;&nbsp;foreach($this->participants as $participant)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($participant->equals($aParticipant))
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasFound = true;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$index += 1;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;$index = $wasFound ? $index : -1;
&nbsp;&nbsp;&nbsp;&nbsp;return $index;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function getEvent_index($index)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$aEvent = $this->events[$index];
&nbsp;&nbsp;&nbsp;&nbsp;return $aEvent;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function getEvents()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$newEvents = $this->events;
&nbsp;&nbsp;&nbsp;&nbsp;return $newEvents;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function numberOfEvents()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$number = count($this->events);
&nbsp;&nbsp;&nbsp;&nbsp;return $number;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function hasEvents()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$has = $this->numberOfEvents() > 0;
&nbsp;&nbsp;&nbsp;&nbsp;return $has;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function indexOfEvent($aEvent)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasFound = false;
&nbsp;&nbsp;&nbsp;&nbsp;$index = 0;
&nbsp;&nbsp;&nbsp;&nbsp;foreach($this->events as $event)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($event->equals($aEvent))
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasFound = true;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$index += 1;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;$index = $wasFound ? $index : -1;
&nbsp;&nbsp;&nbsp;&nbsp;return $index;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public static function minimumNumberOfRegistrations()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function addRegistration($aRegistration)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = false;
&nbsp;&nbsp;&nbsp;&nbsp;if ($this->indexOfRegistration($aRegistration) !== -1) { return false; }
&nbsp;&nbsp;&nbsp;&nbsp;$this->registrations[] = $aRegistration;
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = true;
&nbsp;&nbsp;&nbsp;&nbsp;return $wasAdded;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function removeRegistration($aRegistration)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasRemoved = false;
&nbsp;&nbsp;&nbsp;&nbsp;if ($this->indexOfRegistration($aRegistration) != -1)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset($this->registrations[$this->indexOfRegistration($aRegistration)]);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->registrations = array_values($this->registrations);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasRemoved = true;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasRemoved;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function addRegistrationAt($aRegistration, $index)
&nbsp;&nbsp;{&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = false;
&nbsp;&nbsp;&nbsp;&nbsp;if($this->addRegistration($aRegistration))
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index < 0 ) { $index = 0; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index > $this->numberOfRegistrations()) { $index = $this->numberOfRegistrations() - 1; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->registrations, $this->indexOfRegistration($aRegistration), 1);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->registrations, $index, 0, array($aRegistration));
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = true;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasAdded;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function addOrMoveRegistrationAt($aRegistration, $index)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = false;
&nbsp;&nbsp;&nbsp;&nbsp;if($this->indexOfRegistration($aRegistration) !== -1)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index < 0 ) { $index = 0; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index > $this->numberOfRegistrations()) { $index = $this->numberOfRegistrations() - 1; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->registrations, $this->indexOfRegistration($aRegistration), 1);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->registrations, $index, 0, array($aRegistration));
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = true;
&nbsp;&nbsp;&nbsp;&nbsp;} 
&nbsp;&nbsp;&nbsp;&nbsp;else
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = $this->addRegistrationAt($aRegistration, $index);
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasAdded;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public static function minimumNumberOfParticipants()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function addParticipant($aParticipant)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = false;
&nbsp;&nbsp;&nbsp;&nbsp;if ($this->indexOfParticipant($aParticipant) !== -1) { return false; }
&nbsp;&nbsp;&nbsp;&nbsp;$this->participants[] = $aParticipant;
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = true;
&nbsp;&nbsp;&nbsp;&nbsp;return $wasAdded;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function removeParticipant($aParticipant)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasRemoved = false;
&nbsp;&nbsp;&nbsp;&nbsp;if ($this->indexOfParticipant($aParticipant) != -1)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset($this->participants[$this->indexOfParticipant($aParticipant)]);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->participants = array_values($this->participants);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasRemoved = true;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasRemoved;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function addParticipantAt($aParticipant, $index)
&nbsp;&nbsp;{&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = false;
&nbsp;&nbsp;&nbsp;&nbsp;if($this->addParticipant($aParticipant))
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index < 0 ) { $index = 0; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index > $this->numberOfParticipants()) { $index = $this->numberOfParticipants() - 1; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->participants, $this->indexOfParticipant($aParticipant), 1);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->participants, $index, 0, array($aParticipant));
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = true;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasAdded;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function addOrMoveParticipantAt($aParticipant, $index)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = false;
&nbsp;&nbsp;&nbsp;&nbsp;if($this->indexOfParticipant($aParticipant) !== -1)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index < 0 ) { $index = 0; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index > $this->numberOfParticipants()) { $index = $this->numberOfParticipants() - 1; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->participants, $this->indexOfParticipant($aParticipant), 1);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->participants, $index, 0, array($aParticipant));
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = true;
&nbsp;&nbsp;&nbsp;&nbsp;} 
&nbsp;&nbsp;&nbsp;&nbsp;else
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = $this->addParticipantAt($aParticipant, $index);
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasAdded;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public static function minimumNumberOfEvents()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function addEvent($aEvent)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = false;
&nbsp;&nbsp;&nbsp;&nbsp;if ($this->indexOfEvent($aEvent) !== -1) { return false; }
&nbsp;&nbsp;&nbsp;&nbsp;$this->events[] = $aEvent;
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = true;
&nbsp;&nbsp;&nbsp;&nbsp;return $wasAdded;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function removeEvent($aEvent)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasRemoved = false;
&nbsp;&nbsp;&nbsp;&nbsp;if ($this->indexOfEvent($aEvent) != -1)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset($this->events[$this->indexOfEvent($aEvent)]);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->events = array_values($this->events);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasRemoved = true;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasRemoved;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function addEventAt($aEvent, $index)
&nbsp;&nbsp;{&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = false;
&nbsp;&nbsp;&nbsp;&nbsp;if($this->addEvent($aEvent))
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index < 0 ) { $index = 0; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index > $this->numberOfEvents()) { $index = $this->numberOfEvents() - 1; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->events, $this->indexOfEvent($aEvent), 1);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->events, $index, 0, array($aEvent));
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = true;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasAdded;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function addOrMoveEventAt($aEvent, $index)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = false;
&nbsp;&nbsp;&nbsp;&nbsp;if($this->indexOfEvent($aEvent) !== -1)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index < 0 ) { $index = 0; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($index > $this->numberOfEvents()) { $index = $this->numberOfEvents() - 1; }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->events, $this->indexOfEvent($aEvent), 1);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_splice($this->events, $index, 0, array($aEvent));
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = true;
&nbsp;&nbsp;&nbsp;&nbsp;} 
&nbsp;&nbsp;&nbsp;&nbsp;else
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasAdded = $this->addEventAt($aEvent, $index);
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasAdded;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function equals($compareTo)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;return $this == $compareTo;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function delete()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$this->registrations = array();
&nbsp;&nbsp;&nbsp;&nbsp;$this->participants = array();
&nbsp;&nbsp;&nbsp;&nbsp;$this->events = array();
&nbsp;&nbsp;}
&nbsp;
}
&nbsp;
&nbsp;
&nbsp;
&nbsp;