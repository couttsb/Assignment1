/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;

// line 29 "../../../../../TrainTicket.ump"
// line 98 "../../../../../TrainTicket.ump"
public class NumberTickets
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //NumberTickets Attributes
  private int economyNumber;
  private int businessNumber;
  private int firstClassNumber;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public NumberTickets(int aEconomyNumber, int aBusinessNumber, int aFirstClassNumber)
  {
    economyNumber = aEconomyNumber;
    businessNumber = aBusinessNumber;
    firstClassNumber = aFirstClassNumber;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setEconomyNumber(int aEconomyNumber)
  {
    boolean wasSet = false;
    economyNumber = aEconomyNumber;
    wasSet = true;
    return wasSet;
  }

  public boolean setBusinessNumber(int aBusinessNumber)
  {
    boolean wasSet = false;
    businessNumber = aBusinessNumber;
    wasSet = true;
    return wasSet;
  }

  public boolean setFirstClassNumber(int aFirstClassNumber)
  {
    boolean wasSet = false;
    firstClassNumber = aFirstClassNumber;
    wasSet = true;
    return wasSet;
  }

  public int getEconomyNumber()
  {
    return economyNumber;
  }

  public int getBusinessNumber()
  {
    return businessNumber;
  }

  public int getFirstClassNumber()
  {
    return firstClassNumber;
  }

  public void delete()
  {}


  public String toString()
  {
	  String outputString = "";
    return super.toString() + "["+
            "economyNumber" + ":" + getEconomyNumber()+ "," +
            "businessNumber" + ":" + getBusinessNumber()+ "," +
            "firstClassNumber" + ":" + getFirstClassNumber()+ "]"
     + outputString;
  }
}