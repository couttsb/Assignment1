/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;

// line 17 "../../../../../TrainTicket.ump"
// line 88 "../../../../../TrainTicket.ump"
public class CabinType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CabinType Attributes
  private String economy;
  private String business;
  private String firstClass;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public CabinType(String aEconomy, String aBusiness, String aFirstClass)
  {
    economy = aEconomy;
    business = aBusiness;
    firstClass = aFirstClass;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setEconomy(String aEconomy)
  {
    boolean wasSet = false;
    economy = aEconomy;
    wasSet = true;
    return wasSet;
  }

  public boolean setBusiness(String aBusiness)
  {
    boolean wasSet = false;
    business = aBusiness;
    wasSet = true;
    return wasSet;
  }

  public boolean setFirstClass(String aFirstClass)
  {
    boolean wasSet = false;
    firstClass = aFirstClass;
    wasSet = true;
    return wasSet;
  }

  public String getEconomy()
  {
    return economy;
  }

  public String getBusiness()
  {
    return business;
  }

  public String getFirstClass()
  {
    return firstClass;
  }

  public void delete()
  {}


  public String toString()
  {
	  String outputString = "";
    return super.toString() + "["+
            "economy" + ":" + getEconomy()+ "," +
            "business" + ":" + getBusiness()+ "," +
            "firstClass" + ":" + getFirstClass()+ "]"
     + outputString;
  }
}