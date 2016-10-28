/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;

// line 35 "../../../../../TrainTicket.ump"
// line 103 "../../../../../TrainTicket.ump"
public class Cost
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Cost Attributes
  private double totalCost;

  //Cost Associations
  private TicketPrice ticketPrice;
  private NumberTickets numberTickets;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public Cost(double aTotalCost, TicketPrice aTicketPrice, NumberTickets aNumberTickets)
  {
    totalCost = aTotalCost;
    if (!setTicketPrice(aTicketPrice))
    {
      throw new RuntimeException("Unable to create Cost due to aTicketPrice");
    }
    if (!setNumberTickets(aNumberTickets))
    {
      throw new RuntimeException("Unable to create Cost due to aNumberTickets");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setTotalCost(double aTotalCost)
  {
    boolean wasSet = false;
    totalCost = aTotalCost;
    wasSet = true;
    return wasSet;
  }

  public double getTotalCost()
  {
    return totalCost;
  }

  public TicketPrice getTicketPrice()
  {
    return ticketPrice;
  }

  public NumberTickets getNumberTickets()
  {
    return numberTickets;
  }

  public boolean setTicketPrice(TicketPrice aNewTicketPrice)
  {
    boolean wasSet = false;
    if (aNewTicketPrice != null)
    {
      ticketPrice = aNewTicketPrice;
      wasSet = true;
    }
    return wasSet;
  }

  public boolean setNumberTickets(NumberTickets aNewNumberTickets)
  {
    boolean wasSet = false;
    if (aNewNumberTickets != null)
    {
      numberTickets = aNewNumberTickets;
      wasSet = true;
    }
    return wasSet;
  }

  public void delete()
  {
    ticketPrice = null;
    numberTickets = null;
  }


  public String toString()
  {
	  String outputString = "";
    return super.toString() + "["+
            "totalCost" + ":" + getTotalCost()+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "ticketPrice = "+(getTicketPrice()!=null?Integer.toHexString(System.identityHashCode(getTicketPrice())):"null") + System.getProperties().getProperty("line.separator") +
            "  " + "numberTickets = "+(getNumberTickets()!=null?Integer.toHexString(System.identityHashCode(getNumberTickets())):"null")
     + outputString;
  }
}