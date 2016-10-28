/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;

// line 59 "../../../../../TrainTicket.ump"
// line 118 "../../../../../TrainTicket.ump"
public class TransactionError
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //TransactionError Attributes
  private boolean retry;
  private boolean quit;

  //TransactionError Associations
  private UnsuccessfulTransactionLog unsuccessfulTransactionLog;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public TransactionError(boolean aRetry, boolean aQuit, UnsuccessfulTransactionLog aUnsuccessfulTransactionLog)
  {
    retry = aRetry;
    quit = aQuit;
    if (!setUnsuccessfulTransactionLog(aUnsuccessfulTransactionLog))
    {
      throw new RuntimeException("Unable to create TransactionError due to aUnsuccessfulTransactionLog");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setRetry(boolean aRetry)
  {
    boolean wasSet = false;
    retry = aRetry;
    wasSet = true;
    return wasSet;
  }

  public boolean setQuit(boolean aQuit)
  {
    boolean wasSet = false;
    quit = aQuit;
    wasSet = true;
    return wasSet;
  }

  public boolean getRetry()
  {
    return retry;
  }

  public boolean getQuit()
  {
    return quit;
  }

  public boolean isRetry()
  {
    return retry;
  }

  public boolean isQuit()
  {
    return quit;
  }

  public UnsuccessfulTransactionLog getUnsuccessfulTransactionLog()
  {
    return unsuccessfulTransactionLog;
  }

  public boolean setUnsuccessfulTransactionLog(UnsuccessfulTransactionLog aNewUnsuccessfulTransactionLog)
  {
    boolean wasSet = false;
    if (aNewUnsuccessfulTransactionLog != null)
    {
      unsuccessfulTransactionLog = aNewUnsuccessfulTransactionLog;
      wasSet = true;
    }
    return wasSet;
  }

  public void delete()
  {
    unsuccessfulTransactionLog = null;
  }


  public String toString()
  {
	  String outputString = "";
    return super.toString() + "["+
            "retry" + ":" + getRetry()+ "," +
            "quit" + ":" + getQuit()+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "unsuccessfulTransactionLog = "+(getUnsuccessfulTransactionLog()!=null?Integer.toHexString(System.identityHashCode(getUnsuccessfulTransactionLog())):"null")
     + outputString;
  }
}