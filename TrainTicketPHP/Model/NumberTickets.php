<?php

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class NumberTickets
{
	
	//------------------------
	// MEMBER VARIABLES
	//------------------------
	
	//NumberTickets Attributes
	private $economyNumber;
	private $businessNumber;
	private $firstClassNumber;
	
	//------------------------
	// CONSTRUCTOR
	//------------------------
	
	public function __construct($aEconomyNumber, $aBusinessNumber, $aFirstClassNumber)
	{
		$this->economyNumber = $aEconomyNumber;
		$this->businessNumber = $aBusinessNumber;
		$this->firstClassNumber = $aFirstClassNumber;
		}
		
		//------------------------
		// INTERFACE
		//------------------------
		
		public function setEconomyNumber($aEconomyNumber)
		{
			$wasSet = false;
			$this->economyNumber = $aEconomyNumber;
			$wasSet = true;
			return $wasSet;
			}
			
			public function setBusinessNumber($aBusinessNumber)
			{
				$wasSet = false;
				$this->businessNumber = $aBusinessNumber;
				$wasSet = true;
				return $wasSet;
				}
				
				public function setFirstClassNumber($aFirstClassNumber)
				{
					$wasSet = false;
					$this->firstClassNumber = $aFirstClassNumber;
					$wasSet = true;
					return $wasSet;
					}
					
					public function getEconomyNumber()
					{
						return $this->economyNumber;
						}
						
						public function getBusinessNumber()
						{
							return $this->businessNumber;
							}
							
							public function getFirstClassNumber()
							{
								return $this->firstClassNumber;
								}
								
								public function equals($compareTo)
								{
									return $this == $compareTo;
									}
									
									public function delete()
									{}
									
}
?>