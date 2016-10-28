<?php

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class Ticket
{
	
	//------------------------
	// MEMBER VARIABLES
	//------------------------
	
	//Ticket Attributes
	private $authorizationCode;
	private $todaysDate;
	private $transactionDate;
	private $transactionTime;
	private $last4CreditDigits;
	
	//Ticket Associations
	private $destination;
	private $cabinType;
	private $cost;
	
	//------------------------
	// CONSTRUCTOR
	//------------------------
	
	public function __construct($aAuthorizationCode, $aTodaysDate, $aTransactionDate, $aTransactionTime, $aLast4CreditDigits, $aDestination, $aCabinType, $aCost)
	{
		$this->authorizationCode = $aAuthorizationCode;
		$this->todaysDate = $aTodaysDate;
		$this->transactionDate = $aTransactionDate;
		$this->transactionTime = $aTransactionTime;
		$this->last4CreditDigits = $aLast4CreditDigits;
		if (!$this->setDestination($aDestination))
			{
			throw new Exception("Unable to create Ticket due to aDestination");
			}
			if (!$this->setCabinType($aCabinType))
				{
				throw new Exception("Unable to create Ticket due to aCabinType");
				}
				if (!$this->setCost($aCost))
					{
					throw new Exception("Unable to create Ticket due to aCost");
					}
					}
					
					//------------------------
					// INTERFACE
					//------------------------
					
					public function setAuthorizationCode($aAuthorizationCode)
					{
						$wasSet = false;
						$this->authorizationCode = $aAuthorizationCode;
						$wasSet = true;
						return $wasSet;
						}
						
						public function setTodaysDate($aTodaysDate)
						{
							$wasSet = false;
							$this->todaysDate = $aTodaysDate;
							$wasSet = true;
							return $wasSet;
							}
							
							public function setTransactionDate($aTransactionDate)
							{
								$wasSet = false;
								$this->transactionDate = $aTransactionDate;
								$wasSet = true;
								return $wasSet;
								}
								
								public function setTransactionTime($aTransactionTime)
								{
									$wasSet = false;
									$this->transactionTime = $aTransactionTime;
									$wasSet = true;
									return $wasSet;
									}
									
									public function setLast4CreditDigits($aLast4CreditDigits)
									{
										$wasSet = false;
										$this->last4CreditDigits = $aLast4CreditDigits;
										$wasSet = true;
										return $wasSet;
										}
										
										public function getAuthorizationCode()
										{
											return $this->authorizationCode;
											}
											
											public function getTodaysDate()
											{
												return $this->todaysDate;
												}
												
												public function getTransactionDate()
												{
													return $this->transactionDate;
													}
													
													public function getTransactionTime()
													{
														return $this->transactionTime;
														}
														
														public function getLast4CreditDigits()
														{
															return $this->last4CreditDigits;
															}
															
															public function getDestination()
															{
																return $this->destination;
																}
																
																public function getCabinType()
																{
																	return $this->cabinType;
																	}
																	
																	public function getCost()
																	{
																		return $this->cost;
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
																				
																				public function setCabinType($aNewCabinType)
																				{
																					$wasSet = false;
																					if ($aNewCabinType != null)
																						{
																						$this->cabinType = $aNewCabinType;
																						$wasSet = true;
																						}
																						return $wasSet;
																						}
																						
																						public function setCost($aNewCost)
																						{
																							$wasSet = false;
																							if ($aNewCost != null)
																								{
																								$this->cost = $aNewCost;
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
																										$this->cabinType = null;
																										$this->cost = null;
																										}
																										
}




?>