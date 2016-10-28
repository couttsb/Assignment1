<?php 
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class Registration
{

//------------------------
// STATIC VARIABLES
//------------------------

private static $nextId = 1;

//------------------------
// MEMBER VARIABLES
//------------------------

//Autounique Attributes
private $id;

//Registration Associations
private $destination;
private $cabin;

//------------------------
// CONSTRUCTOR
//------------------------

public function __construct($aDestination, $aCabin)
{
$this->id = self::$nextId++;
if (!$this->setDestination($aDestination))
{
throw new Exception("Unable to create Registration due to aDestination");
}
if (!$this->setCabin($aCabin))
{
throw new Exception("Unable to create Registration due to aCabin");
}
}

//------------------------
// INTERFACE
//------------------------

public function getId()
{
return $this->id;
}

public function getDestination()
{
return $this->destination;
}

public function getCabin()
{
return $this->cabin;
}

public function setDestination($aNewDestination)
{
$wasSet = false;
if ($aNewDestination != null)
{
$this->destination = $aNewDestination;
$wasSet = true;
}
return $wasSet;
}

public function setCabin($aNewCabin)
{
$wasSet = false;
if ($aNewCabin != null)
{
$this->cabin = $aNewCabin;
$wasSet = true;
}
return $wasSet;
}

public function equals($compareTo)
{
return $this == $compareTo;
}

public function delete()
{
$this->destination = null;
$this->cabin = null;
}

}




?>