/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;

// line 23 "../../../../../TrainTicket.ump"
// line 93 "../../../../../TrainTicket.ump"
public class TicketPrice
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //TicketPrice Attributes
  private double economyPrice;
  private double businessPrice;
  private double firstClassPrice;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public TicketPrice(double aEconomyPrice, double aBusinessPrice, double aFirstClassPrice)
  {
    economyPrice = aEconomyPrice;
    businessPrice = aBusinessPrice;
    firstClassPrice = aFirstClassPrice;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setEconomyPrice(double aEconomyPrice)
  {
    boolean wasSet = false;
    economyPrice = aEconomyPrice;
    wasSet = true;
    return wasSet;
  }

  public boolean setBusinessPrice(double aBusinessPrice)
  {
    boolean wasSet = false;
    businessPrice = aBusinessPrice;
    wasSet = true;
    return wasSet;
  }

  public boolean setFirstClassPrice(double aFirstClassPrice)
  {
    boolean wasSet = false;
    firstClassPrice = aFirstClassPrice;
    wasSet = true;
    return wasSet;
  }

  public double getEconomyPrice()
  {
    return economyPrice;
  }

  public double getBusinessPrice()
  {
    return businessPrice;
  }

  public double getFirstClassPrice()
  {
    return firstClassPrice;
  }

  public void delete()
  {}


  public String toString()
  {
	  String outputString = "";
    return super.toString() + "["+
            "economyPrice" + ":" + getEconomyPrice()+ "," +
            "businessPrice" + ":" + getBusinessPrice()+ "," +
            "firstClassPrice" + ":" + getFirstClassPrice()+ "]"
     + outputString;
  }
}