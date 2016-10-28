/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;

// line 41 "../../../../../TrainTicket.ump"
// line 108 "../../../../../TrainTicket.ump"
public class CreditPayment
{

  //------------------------
  // STATIC VARIABLES
  //------------------------

  private static int nextAuthorizationCode = 1;

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CreditPayment Attributes
  private int creditNumber;
  private boolean cancel;

  //Autounique Attributes
  private int authorizationCode;

  //CreditPayment Associations
  private TransactionError transactionError;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public CreditPayment(int aCreditNumber, boolean aCancel, TransactionError aTransactionError)
  {
    creditNumber = aCreditNumber;
    cancel = aCancel;
    authorizationCode = nextAuthorizationCode++;
    if (!setTransactionError(aTransactionError))
    {
      throw new RuntimeException("Unable to create CreditPayment due to aTransactionError");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setCreditNumber(int aCreditNumber)
  {
    boolean wasSet = false;
    creditNumber = aCreditNumber;
    wasSet = true;
    return wasSet;
  }

  public boolean setCancel(boolean aCancel)
  {
    boolean wasSet = false;
    cancel = aCancel;
    wasSet = true;
    return wasSet;
  }

  public int getCreditNumber()
  {
    return creditNumber;
  }

  public boolean getCancel()
  {
    return cancel;
  }

  public int getAuthorizationCode()
  {
    return authorizationCode;
  }

  public boolean isCancel()
  {
    return cancel;
  }

  public TransactionError getTransactionError()
  {
    return transactionError;
  }

  public boolean setTransactionError(TransactionError aNewTransactionError)
  {
    boolean wasSet = false;
    if (aNewTransactionError != null)
    {
      transactionError = aNewTransactionError;
      wasSet = true;
    }
    return wasSet;
  }

  public void delete()
  {
    transactionError = null;
  }


  public String toString()
  {
	  String outputString = "";
    return super.toString() + "["+
            "authorizationCode" + ":" + getAuthorizationCode()+ "," +
            "creditNumber" + ":" + getCreditNumber()+ "," +
            "cancel" + ":" + getCancel()+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "transactionError = "+(getTransactionError()!=null?Integer.toHexString(System.identityHashCode(getTransactionError())):"null")
     + outputString;
  }
}