<?php

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class TicketPrice
{
	
	//------------------------
	// MEMBER VARIABLES
	//------------------------
	
	//TicketPrice Attributes
	private $economyPrice;
	private $businessPrice;
	private $firstClassPrice;
	
	//------------------------
	// CONSTRUCTOR
	//------------------------
	
	public function __construct($aEconomyPrice, $aBusinessPrice, $aFirstClassPrice)
	{
		$this->economyPrice = $aEconomyPrice;
		$this->businessPrice = $aBusinessPrice;
		$this->firstClassPrice = $aFirstClassPrice;
		}
		
		//------------------------
		// INTERFACE
		//------------------------
		
		public function setEconomyPrice($aEconomyPrice)
		{
			$wasSet = false;
			$this->economyPrice = $aEconomyPrice;
			$wasSet = true;
			return $wasSet;
			}
			
			public function setBusinessPrice($aBusinessPrice)
			{
				$wasSet = false;
				$this->businessPrice = $aBusinessPrice;
				$wasSet = true;
				return $wasSet;
				}
				
				public function setFirstClassPrice($aFirstClassPrice)
				{
					$wasSet = false;
					$this->firstClassPrice = $aFirstClassPrice;
					$wasSet = true;
					return $wasSet;
					}
					
					public function getEconomyPrice()
					{
						return $this->economyPrice;
						}
						
						public function getBusinessPrice()
						{
							return $this->businessPrice;
							}
							
							public function getFirstClassPrice()
							{
								return $this->firstClassPrice;
								}
								
								public function equals($compareTo)
								{
									return $this == $compareTo;
									}
									
									public function delete()
									{}
									
}
?>