<?php

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class Destination
{
	
	//------------------------
	// MEMBER VARIABLES
	//------------------------
	
	//Destination Attributes
	private $name;
	private $departureTimeWithin15Minutes;
	private $departureTime;
	private $tripDuration;
	
	//------------------------
	// CONSTRUCTOR
	//------------------------
	
	public function __construct($aName, $aDepartureTimeWithin15Minutes, $aDepartureTime, $aTripDuration)
	{
		$this->name = $aName;
		$this->departureTimeWithin15Minutes = $aDepartureTimeWithin15Minutes;
		$this->departureTime = $aDepartureTime;
		$this->tripDuration = $aTripDuration;
		}
		
		//------------------------
		// INTERFACE
		//------------------------
		
		public function setName($aName)
		{
			$wasSet = false;
			$this->name = $aName;
			$wasSet = true;
			return $wasSet;
			}
			
			public function setDepartureTimeWithin15Minutes($aDepartureTimeWithin15Minutes)
			{
				$wasSet = false;
				$this->departureTimeWithin15Minutes = $aDepartureTimeWithin15Minutes;
				$wasSet = true;
				return $wasSet;
				}
				
				public function setDepartureTime($aDepartureTime)
				{
					$wasSet = false;
					$this->departureTime = $aDepartureTime;
					$wasSet = true;
					return $wasSet;
					}
					
					public function setTripDuration($aTripDuration)
					{
						$wasSet = false;
						$this->tripDuration = $aTripDuration;
						$wasSet = true;
						return $wasSet;
						}
						
						public function getName()
						{
							return $this->name;
							}
							
							public function getDepartureTimeWithin15Minutes()
							{
								return $this->departureTimeWithin15Minutes;
								}
								
								public function getDepartureTime()
								{
									return $this->departureTime;
									}
									
									public function getTripDuration()
									{
										return $this->tripDuration;
										}
										
										public function isDepartureTimeWithin15Minutes()
										{
											return $this->departureTimeWithin15Minutes;
											}
											
											public function equals($compareTo)
											{
												return $this == $compareTo;
												}
												
												public function delete()
												{}
												
}
?>



