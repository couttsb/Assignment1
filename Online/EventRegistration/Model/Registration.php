&nbsp;
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-7aed471 modeling language!*/
&nbsp;
class Registration
{
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// STATIC VARIABLES
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;private static $nextId = 1;
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// MEMBER VARIABLES
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;//Autounique Attributes
&nbsp;&nbsp;private $id;
&nbsp;
&nbsp;&nbsp;//Registration Associations
&nbsp;&nbsp;private $participant;
&nbsp;&nbsp;private $event;
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// CONSTRUCTOR
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;public function __construct($aParticipant, $aEvent)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$this->id = self::$nextId++;
&nbsp;&nbsp;&nbsp;&nbsp;if (!$this->setParticipant($aParticipant))
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw new Exception("Unable to create Registration due to aParticipant");
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;if (!$this->setEvent($aEvent))
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw new Exception("Unable to create Registration due to aEvent");
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// INTERFACE
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;public function getId()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;return $this->id;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function getParticipant()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;return $this->participant;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function getEvent()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;return $this->event;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function setParticipant($aNewParticipant)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasSet = false;
&nbsp;&nbsp;&nbsp;&nbsp;if ($aNewParticipant != null)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->participant = $aNewParticipant;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasSet = true;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasSet;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function setEvent($aNewEvent)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasSet = false;
&nbsp;&nbsp;&nbsp;&nbsp;if ($aNewEvent != null)
&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->event = $aNewEvent;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$wasSet = true;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;return $wasSet;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function equals($compareTo)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;return $this == $compareTo;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function delete()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$this->participant = null;
&nbsp;&nbsp;&nbsp;&nbsp;$this->event = null;
&nbsp;&nbsp;}
&nbsp;
}
&nbsp;
&nbsp;
&nbsp;
&nbsp;