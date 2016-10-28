<?php

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class CabinType
{
	
	//------------------------
	// MEMBER VARIABLES
	//------------------------
	
	//CabinType Attributes
	private $economy;
	private $business;
	private $firstClass;
	
	//------------------------
	// CONSTRUCTOR
	//------------------------
	
	public function __construct($aEconomy, $aBusiness, $aFirstClass)
	{
		$this->economy = $aEconomy;
		$this->business = $aBusiness;
		$this->firstClass = $aFirstClass;
		}
		
		//------------------------
		// INTERFACE
		//------------------------
		
		public function setEconomy($aEconomy)
		{
			$wasSet = false;
			$this->economy = $aEconomy;
			$wasSet = true;
			return $wasSet;
			}
			
			public function setBusiness($aBusiness)
			{
				$wasSet = false;
				$this->business = $aBusiness;
				$wasSet = true;
				return $wasSet;
				}
				
				public function setFirstClass($aFirstClass)
				{
					$wasSet = false;
					$this->firstClass = $aFirstClass;
					$wasSet = true;
					return $wasSet;
					}
					
					public function getEconomy()
					{
						return $this->economy;
						}
						
						public function getBusiness()
						{
							return $this->business;
							}
							
							public function getFirstClass()
							{
								return $this->firstClass;
								}
								
								public function equals($compareTo)
								{
									return $this == $compareTo;
									}
									
									public function delete()
									{}
									
}




?>