<?php

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class TicketKioskManager
{
	
	//------------------------
	// STATIC VARIABLES
	//------------------------
	
	private static $theInstance = null;
	
	//------------------------
	// MEMBER VARIABLES
	//------------------------
	
	//TicketKioskManager Associations
	private $registrations;
	private $tickets;
	private $creditPayments;
	
	//------------------------
	// CONSTRUCTOR
	//------------------------
	
	private function __construct()
	{
		$this->registrations = array();
		$this->tickets = array();
		$this->creditPayments = array();
		}
		
		public static function getInstance()
		{
			if(self::$theInstance == null)
				{
				self::$theInstance = new TicketKioskManager();
				}
				return self::$theInstance;
				}
				
				//------------------------
				// INTERFACE
				//------------------------
				
				public function getRegistration_index($index)
				{
					$aRegistration = $this->registrations[$index];
					return $aRegistration;
					}
					
					public function getRegistrations()
					{
						$newRegistrations = $this->registrations;
						return $newRegistrations;
						}
						
						public function numberOfRegistrations()
						{
							$number = count($this->registrations);
							return $number;
							}
							
							public function hasRegistrations()
							{
								$has = $this->numberOfRegistrations() > 0;
								return $has;
								}
								
								public function indexOfRegistration($aRegistration)
								{
									$wasFound = false;
									$index = 0;
									foreach($this->registrations as $registration)
										{
										if ($registration->equals($aRegistration))
											{
											$wasFound = true;
											break;
											}
											$index += 1;
											}
											$index = $wasFound ? $index : -1;
											return $index;
											}
											
											public function getTicket_index($index)
											{
												$aTicket = $this->tickets[$index];
												return $aTicket;
												}
												
												public function getTickets()
												{
													$newTickets = $this->tickets;
													return $newTickets;
													}
													
													public function numberOfTickets()
													{
														$number = count($this->tickets);
														return $number;
														}
														
														public function hasTickets()
														{
															$has = $this->numberOfTickets() > 0;
															return $has;
															}
															
															public function indexOfTicket($aTicket)
															{
																$wasFound = false;
																$index = 0;
																foreach($this->tickets as $ticket)
																	{
																	if ($ticket->equals($aTicket))
																		{
																		$wasFound = true;
																		break;
																		}
																		$index += 1;
																		}
																		$index = $wasFound ? $index : -1;
																		return $index;
																		}
																		
																		public function getCreditPayment_index($index)
																		{
																			$aCreditPayment = $this->creditPayments[$index];
																			return $aCreditPayment;
																			}
																			
																			public function getCreditPayments()
																			{
																				$newCreditPayments = $this->creditPayments;
																				return $newCreditPayments;
																				}
																				
																				public function numberOfCreditPayments()
																				{
																					$number = count($this->creditPayments);
																					return $number;
																					}
																					
																					public function hasCreditPayments()
																					{
																						$has = $this->numberOfCreditPayments() > 0;
																						return $has;
																						}
																						
																						public function indexOfCreditPayment($aCreditPayment)
																						{
																							$wasFound = false;
																							$index = 0;
																							foreach($this->creditPayments as $creditPayment)
																								{
																								if ($creditPayment->equals($aCreditPayment))
																									{
																									$wasFound = true;
																									break;
																									}
																									$index += 1;
																									}
																									$index = $wasFound ? $index : -1;
																									return $index;
																									}
																									
																									public static function minimumNumberOfRegistrations()
																									{
																										return 0;
																										}
																										
																										public function addRegistration($aRegistration)
																										{
																											$wasAdded = false;
																											if ($this->indexOfRegistration($aRegistration) !== -1) { return false; }
																											$this->registrations[] = $aRegistration;
																											$wasAdded = true;
																											return $wasAdded;
																											}
																											
																											public function removeRegistration($aRegistration)
																											{
																												$wasRemoved = false;
																												if ($this->indexOfRegistration($aRegistration) != -1)
																													{
																													unset($this->registrations[$this->indexOfRegistration($aRegistration)]);
																													$this->registrations = array_values($this->registrations);
																													$wasRemoved = true;
																													}
																													return $wasRemoved;
																													}
																													
																													public function addRegistrationAt($aRegistration, $index)
																													{
																													$wasAdded = false;
																													if($this->addRegistration($aRegistration))
																														{
																														if($index < 0 ) { $index = 0; }
																														if($index > $this->numberOfRegistrations()) { $index = $this->numberOfRegistrations() - 1; }
																														array_splice($this->registrations, $this->indexOfRegistration($aRegistration), 1);
																														array_splice($this->registrations, $index, 0, array($aRegistration));
																														$wasAdded = true;
																														}
																														return $wasAdded;
																														}
																														
																														public function addOrMoveRegistrationAt($aRegistration, $index)
																														{
																															$wasAdded = false;
																															if($this->indexOfRegistration($aRegistration) !== -1)
																																{
																																if($index < 0 ) { $index = 0; }
																																if($index > $this->numberOfRegistrations()) { $index = $this->numberOfRegistrations() - 1; }
																																array_splice($this->registrations, $this->indexOfRegistration($aRegistration), 1);
																																array_splice($this->registrations, $index, 0, array($aRegistration));
																																$wasAdded = true;
																																}
																																else
																																	{
																																	$wasAdded = $this->addRegistrationAt($aRegistration, $index);
																																	}
																																	return $wasAdded;
																																	}
																																	
																																	public static function minimumNumberOfTickets()
																																	{
																																		return 0;
																																		}
																																		
																																		public function addTicket($aTicket)
																																		{
																																			$wasAdded = false;
																																			if ($this->indexOfTicket($aTicket) !== -1) { return false; }
																																			$this->tickets[] = $aTicket;
																																			$wasAdded = true;
																																			return $wasAdded;
																																			}
																																			
																																			public function removeTicket($aTicket)
																																			{
																																				$wasRemoved = false;
																																				if ($this->indexOfTicket($aTicket) != -1)
																																					{
																																					unset($this->tickets[$this->indexOfTicket($aTicket)]);
																																					$this->tickets = array_values($this->tickets);
																																					$wasRemoved = true;
																																					}
																																					return $wasRemoved;
																																					}
																																					
																																					public function addTicketAt($aTicket, $index)
																																					{
																																					$wasAdded = false;
																																					if($this->addTicket($aTicket))
																																						{
																																						if($index < 0 ) { $index = 0; }
																																						if($index > $this->numberOfTickets()) { $index = $this->numberOfTickets() - 1; }
																																						array_splice($this->tickets, $this->indexOfTicket($aTicket), 1);
																																						array_splice($this->tickets, $index, 0, array($aTicket));
																																						$wasAdded = true;
																																						}
																																						return $wasAdded;
																																						}
																																						
																																						public function addOrMoveTicketAt($aTicket, $index)
																																						{
																																							$wasAdded = false;
																																							if($this->indexOfTicket($aTicket) !== -1)
																																								{
																																								if($index < 0 ) { $index = 0; }
																																								if($index > $this->numberOfTickets()) { $index = $this->numberOfTickets() - 1; }
																																								array_splice($this->tickets, $this->indexOfTicket($aTicket), 1);
																																								array_splice($this->tickets, $index, 0, array($aTicket));
																																								$wasAdded = true;
																																								}
																																								else
																																									{
																																									$wasAdded = $this->addTicketAt($aTicket, $index);
																																									}
																																									return $wasAdded;
																																									}
																																									
																																									public static function minimumNumberOfCreditPayments()
																																									{
																																										return 0;
																																										}
																																										
																																										public function addCreditPayment($aCreditPayment)
																																										{
																																											$wasAdded = false;
																																											if ($this->indexOfCreditPayment($aCreditPayment) !== -1) { return false; }
																																											$this->creditPayments[] = $aCreditPayment;
																																											$wasAdded = true;
																																											return $wasAdded;
																																											}
																																											
																																											public function removeCreditPayment($aCreditPayment)
																																											{
																																												$wasRemoved = false;
																																												if ($this->indexOfCreditPayment($aCreditPayment) != -1)
																																													{
																																													unset($this->creditPayments[$this->indexOfCreditPayment($aCreditPayment)]);
																																													$this->creditPayments = array_values($this->creditPayments);
																																													$wasRemoved = true;
																																													}
																																													return $wasRemoved;
																																													}
																																													
																																													public function addCreditPaymentAt($aCreditPayment, $index)
																																													{
																																													$wasAdded = false;
																																													if($this->addCreditPayment($aCreditPayment))
																																														{
																																														if($index < 0 ) { $index = 0; }
																																														if($index > $this->numberOfCreditPayments()) { $index = $this->numberOfCreditPayments() - 1; }
																																														array_splice($this->creditPayments, $this->indexOfCreditPayment($aCreditPayment), 1);
																																														array_splice($this->creditPayments, $index, 0, array($aCreditPayment));
																																														$wasAdded = true;
																																														}
																																														return $wasAdded;
																																														}
																																														
																																														public function addOrMoveCreditPaymentAt($aCreditPayment, $index)
																																														{
																																															$wasAdded = false;
																																															if($this->indexOfCreditPayment($aCreditPayment) !== -1)
																																																{
																																																if($index < 0 ) { $index = 0; }
																																																if($index > $this->numberOfCreditPayments()) { $index = $this->numberOfCreditPayments() - 1; }
																																																array_splice($this->creditPayments, $this->indexOfCreditPayment($aCreditPayment), 1);
																																																array_splice($this->creditPayments, $index, 0, array($aCreditPayment));
																																																$wasAdded = true;
																																																}
																																																else
																																																	{
																																																	$wasAdded = $this->addCreditPaymentAt($aCreditPayment, $index);
																																																	}
																																																	return $wasAdded;
																																																	}
																																																	
																																																	public function equals($compareTo)
																																																	{
																																																		return $this == $compareTo;
																																																		}
																																																		
																																																		public function delete()
																																																		{
																																																			$this->registrations = array();
																																																			$this->tickets = array();
																																																			$this->creditPayments = array();
																																																			}
																																																			
}



?>
