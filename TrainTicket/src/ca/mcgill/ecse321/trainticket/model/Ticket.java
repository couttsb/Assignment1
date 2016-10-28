/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;
import java.sql.Date;
import java.sql.Time;

// line 48 "../../../../../TrainTicket.ump"
// line 113 "../../../../../TrainTicket.ump"
public class Ticket
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Ticket Attributes
  private int authorizationCode;
  private Date todaysDate;
  private Date transactionDate;
  private Time transactionTime;
  private int last4CreditDigits;

  //Ticket Associations
  private Destination destination;
  private CabinType cabinType;
  private Cost cost;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public Ticket(int aAuthorizationCode, Date aTodaysDate, Date aTransactionDate, Time aTransactionTime, int aLast4CreditDigits, Destination aDestination, CabinType aCabinType, Cost aCost)
  {
    authorizationCode = aAuthorizationCode;
    todaysDate = aTodaysDate;
    transactionDate = aTransactionDate;
    transactionTime = aTransactionTime;
    last4CreditDigits = aLast4CreditDigits;
    if (!setDestination(aDestination))
    {
      throw new RuntimeException("Unable to create Ticket due to aDestination");
    }
    if (!setCabinType(aCabinType))
    {
      throw new RuntimeException("Unable to create Ticket due to aCabinType");
    }
    if (!setCost(aCost))
    {
      throw new RuntimeException("Unable to create Ticket due to aCost");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setAuthorizationCode(int aAuthorizationCode)
  {
    boolean wasSet = false;
    authorizationCode = aAuthorizationCode;
    wasSet = true;
    return wasSet;
  }

  public boolean setTodaysDate(Date aTodaysDate)
  {
    boolean wasSet = false;
    todaysDate = aTodaysDate;
    wasSet = true;
    return wasSet;
  }

  public boolean setTransactionDate(Date aTransactionDate)
  {
    boolean wasSet = false;
    transactionDate = aTransactionDate;
    wasSet = true;
    return wasSet;
  }

  public boolean setTransactionTime(Time aTransactionTime)
  {
    boolean wasSet = false;
    transactionTime = aTransactionTime;
    wasSet = true;
    return wasSet;
  }

  public boolean setLast4CreditDigits(int aLast4CreditDigits)
  {
    boolean wasSet = false;
    last4CreditDigits = aLast4CreditDigits;
    wasSet = true;
    return wasSet;
  }

  public int getAuthorizationCode()
  {
    return authorizationCode;
  }

  public Date getTodaysDate()
  {
    return todaysDate;
  }

  public Date getTransactionDate()
  {
    return transactionDate;
  }

  public Time getTransactionTime()
  {
    return transactionTime;
  }

  public int getLast4CreditDigits()
  {
    return last4CreditDigits;
  }

  public Destination getDestination()
  {
    return destination;
  }

  public CabinType getCabinType()
  {
    return cabinType;
  }

  public Cost getCost()
  {
    return cost;
  }

  public boolean setDestination(Destination aNewDestination)
  {
    boolean wasSet = false;
    if (aNewDestination != null)
    {
      destination = aNewDestination;
      wasSet = true;
    }
    return wasSet;
  }

  public boolean setCabinType(CabinType aNewCabinType)
  {
    boolean wasSet = false;
    if (aNewCabinType != null)
    {
      cabinType = aNewCabinType;
      wasSet = true;
    }
    return wasSet;
  }

  public boolean setCost(Cost aNewCost)
  {
    boolean wasSet = false;
    if (aNewCost != null)
    {
      cost = aNewCost;
      wasSet = true;
    }
    return wasSet;
  }

  public void delete()
  {
    destination = null;
    cabinType = null;
    cost = null;
  }


  public String toString()
  {
	  String outputString = "";
    return super.toString() + "["+
            "authorizationCode" + ":" + getAuthorizationCode()+ "," +
            "last4CreditDigits" + ":" + getLast4CreditDigits()+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "todaysDate" + "=" + (getTodaysDate() != null ? !getTodaysDate().equals(this)  ? getTodaysDate().toString().replaceAll("  ","    ") : "this" : "null") + System.getProperties().getProperty("line.separator") +
            "  " + "transactionDate" + "=" + (getTransactionDate() != null ? !getTransactionDate().equals(this)  ? getTransactionDate().toString().replaceAll("  ","    ") : "this" : "null") + System.getProperties().getProperty("line.separator") +
            "  " + "transactionTime" + "=" + (getTransactionTime() != null ? !getTransactionTime().equals(this)  ? getTransactionTime().toString().replaceAll("  ","    ") : "this" : "null") + System.getProperties().getProperty("line.separator") +
            "  " + "destination = "+(getDestination()!=null?Integer.toHexString(System.identityHashCode(getDestination())):"null") + System.getProperties().getProperty("line.separator") +
            "  " + "cabinType = "+(getCabinType()!=null?Integer.toHexString(System.identityHashCode(getCabinType())):"null") + System.getProperties().getProperty("line.separator") +
            "  " + "cost = "+(getCost()!=null?Integer.toHexString(System.identityHashCode(getCost())):"null")
     + outputString;
  }
}