&nbsp;
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-7aed471 modeling language!*/
&nbsp;
class Participant
{
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// MEMBER VARIABLES
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;//Participant Attributes
&nbsp;&nbsp;private $name;
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// CONSTRUCTOR
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;public function __construct($aName)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$this->name = $aName;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;//------------------------
&nbsp;&nbsp;// INTERFACE
&nbsp;&nbsp;//------------------------
&nbsp;
&nbsp;&nbsp;public function setName($aName)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;$wasSet = false;
&nbsp;&nbsp;&nbsp;&nbsp;$this->name = $aName;
&nbsp;&nbsp;&nbsp;&nbsp;$wasSet = true;
&nbsp;&nbsp;&nbsp;&nbsp;return $wasSet;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function getName()
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;return $this->name;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function equals($compareTo)
&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;return $this == $compareTo;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;public function delete()
&nbsp;&nbsp;{}
&nbsp;
}
&nbsp;
&nbsp;
&nbsp;
&nbsp;