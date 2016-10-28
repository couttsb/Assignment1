<?php

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class UnsuccessfulTransactionLog
{
	
	//------------------------
	// MEMBER VARIABLES
	//------------------------
	
	//UnsuccessfulTransactionLog Attributes
	private $unsucessfulTransactions;
	private $numberUnsuccessfulTransactions;
	
	//------------------------
	// CONSTRUCTOR
	//------------------------
	
	public function __construct($aUnsucessfulTransactions, $aNumberUnsuccessfulTransactions)
	{
		$this->unsucessfulTransactions = $aUnsucessfulTransactions;
		$this->numberUnsuccessfulTransactions = $aNumberUnsuccessfulTransactions;
		}
		
		//------------------------
		// INTERFACE
		//------------------------
		
		public function setUnsucessfulTransactions($aUnsucessfulTransactions)
		{
			$wasSet = false;
			$this->unsucessfulTransactions = $aUnsucessfulTransactions;
			$wasSet = true;
			return $wasSet;
			}
			
			public function setNumberUnsuccessfulTransactions($aNumberUnsuccessfulTransactions)
			{
				$wasSet = false;
				$this->numberUnsuccessfulTransactions = $aNumberUnsuccessfulTransactions;
				$wasSet = true;
				return $wasSet;
				}
				
				public function getUnsucessfulTransactions()
				{
					return $this->unsucessfulTransactions;
					}
					
					public function getNumberUnsuccessfulTransactions()
					{
						return $this->numberUnsuccessfulTransactions;
						}
						
						public function equals($compareTo)
						{
							return $this == $compareTo;
							}
							
							public function delete()
							{}
							
}




?>