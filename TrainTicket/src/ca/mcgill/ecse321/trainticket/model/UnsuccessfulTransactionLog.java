/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;

// line 65 "../../../../../TrainTicket.ump"
// line 123 "../../../../../TrainTicket.ump"
public class UnsuccessfulTransactionLog
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UnsuccessfulTransactionLog Attributes
  private String unsucessfulTransactions;
  private int numberUnsuccessfulTransactions;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public UnsuccessfulTransactionLog(String aUnsucessfulTransactions, int aNumberUnsuccessfulTransactions)
  {
    unsucessfulTransactions = aUnsucessfulTransactions;
    numberUnsuccessfulTransactions = aNumberUnsuccessfulTransactions;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setUnsucessfulTransactions(String aUnsucessfulTransactions)
  {
    boolean wasSet = false;
    unsucessfulTransactions = aUnsucessfulTransactions;
    wasSet = true;
    return wasSet;
  }

  public boolean setNumberUnsuccessfulTransactions(int aNumberUnsuccessfulTransactions)
  {
    boolean wasSet = false;
    numberUnsuccessfulTransactions = aNumberUnsuccessfulTransactions;
    wasSet = true;
    return wasSet;
  }

  public String getUnsucessfulTransactions()
  {
    return unsucessfulTransactions;
  }

  public int getNumberUnsuccessfulTransactions()
  {
    return numberUnsuccessfulTransactions;
  }

  public void delete()
  {}


  public String toString()
  {
	  String outputString = "";
    return super.toString() + "["+
            "unsucessfulTransactions" + ":" + getUnsucessfulTransactions()+ "," +
            "numberUnsuccessfulTransactions" + ":" + getNumberUnsuccessfulTransactions()+ "]"
     + outputString;
  }
}