<?php

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.24.0-d60c319 modeling language!*/

class Cost
{
	
	//------------------------
	// MEMBER VARIABLES
	//------------------------
	
	//Cost Attributes
	private $totalCost;
	
	//Cost Associations
	private $ticketPrice;
	private $numberTickets;
	
	//------------------------
	// CONSTRUCTOR
	//------------------------
	
	public function __construct($aTotalCost, $aTicketPrice, $aNumberTickets)
	{
		$this->totalCost = $aTotalCost;
		if (!$this->setTicketPrice($aTicketPrice))
			{
			throw new Exception("Unable to create Cost due to aTicketPrice");
			}
			if (!$this->setNumberTickets($aNumberTickets))
				{
				throw new Exception("Unable to create Cost due to aNumberTickets");
				}
				}
				
				//------------------------
				// INTERFACE
				//------------------------
				
				public function setTotalCost($aTotalCost)
				{
					$wasSet = false;
					$this->totalCost = $aTotalCost;
					$wasSet = true;
					return $wasSet;
					}
					
					public function getTotalCost()
					{
						return $this->totalCost;
						}
						
						public function getTicketPrice()
						{
							return $this->ticketPrice;
							}
							
							public function getNumberTickets()
							{
								return $this->numberTickets;
								}
								
								public function setTicketPrice($aNewTicketPrice)
								{
									$wasSet = false;
									if ($aNewTicketPrice != null)
										{
										$this->ticketPrice = $aNewTicketPrice;
										$wasSet = true;
										}
										return $wasSet;
										}
										
										public function setNumberTickets($aNewNumberTickets)
										{
											$wasSet = false;
											if ($aNewNumberTickets != null)
												{
												$this->numberTickets = $aNewNumberTickets;
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
														$this->ticketPrice = null;
														$this->numberTickets = null;
														}
														
}




?>