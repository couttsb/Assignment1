<?php

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class CreditPayment
{
	
	//------------------------
	// STATIC VARIABLES
	//------------------------
	
	private static $nextAuthorizationCode = 1;
	
	//------------------------
	// MEMBER VARIABLES
	//------------------------
	
	//CreditPayment Attributes
	private $creditNumber;
	private $cancel;
	
	//Autounique Attributes
	private $authorizationCode;
	
	//CreditPayment Associations
	private $transactionError;
	
	//------------------------
	// CONSTRUCTOR
	//------------------------
	
	public function __construct($aCreditNumber, $aCancel, $aTransactionError)
	{
		$this->creditNumber = $aCreditNumber;
		$this->cancel = $aCancel;
		$this->authorizationCode = self::$nextAuthorizationCode++;
		if (!$this->setTransactionError($aTransactionError))
			{
			throw new Exception("Unable to create CreditPayment due to aTransactionError");
			}
			}
			
			//------------------------
			// INTERFACE
			//------------------------
			
			public function setCreditNumber($aCreditNumber)
			{
				$wasSet = false;
				$this->creditNumber = $aCreditNumber;
				$wasSet = true;
				return $wasSet;
				}
				
				public function setCancel($aCancel)
				{
					$wasSet = false;
					$this->cancel = $aCancel;
					$wasSet = true;
					return $wasSet;
					}
					
					public function getCreditNumber()
					{
						return $this->creditNumber;
						}
						
						public function getCancel()
						{
							return $this->cancel;
							}
							
							public function getAuthorizationCode()
							{
								return $this->authorizationCode;
								}
								
								public function isCancel()
								{
									return $this->cancel;
									}
									
									public function getTransactionError()
									{
										return $this->transactionError;
										}
										
										public function setTransactionError($aNewTransactionError)
										{
											$wasSet = false;
											if ($aNewTransactionError != null)
												{
												$this->transactionError = $aNewTransactionError;
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
														$this->transactionError = null;
														}
														
}




?>