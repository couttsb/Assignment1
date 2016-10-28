<?php

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class TransactionError
{
	
	//------------------------
	// MEMBER VARIABLES
	//------------------------
	
	//TransactionError Attributes
	private $retry;
	private $quit;
	
	//TransactionError Associations
	private $unsuccessfulTransactionLog;
	
	//------------------------
	// CONSTRUCTOR
	//------------------------
	
	public function __construct($aRetry, $aQuit, $aUnsuccessfulTransactionLog)
	{
		$this->retry = $aRetry;
		$this->quit = $aQuit;
		if (!$this->setUnsuccessfulTransactionLog($aUnsuccessfulTransactionLog))
			{
			throw new Exception("Unable to create TransactionError due to aUnsuccessfulTransactionLog");
			}
			}
			
			//------------------------
			// INTERFACE
			//------------------------
			
			public function setRetry($aRetry)
			{
				$wasSet = false;
				$this->retry = $aRetry;
				$wasSet = true;
				return $wasSet;
				}
				
				public function setQuit($aQuit)
				{
					$wasSet = false;
					$this->quit = $aQuit;
					$wasSet = true;
					return $wasSet;
					}
					
					public function getRetry()
					{
						return $this->retry;
						}
						
						public function getQuit()
						{
							return $this->quit;
							}
							
							public function isRetry()
							{
								return $this->retry;
								}
								
								public function isQuit()
								{
									return $this->quit;
									}
									
									public function getUnsuccessfulTransactionLog()
									{
										return $this->unsuccessfulTransactionLog;
										}
										
										public function setUnsuccessfulTransactionLog($aNewUnsuccessfulTransactionLog)
										{
											$wasSet = false;
											if ($aNewUnsuccessfulTransactionLog != null)
												{
												$this->unsuccessfulTransactionLog = $aNewUnsuccessfulTransactionLog;
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
														$this->unsuccessfulTransactionLog = null;
														}
														
}




?>