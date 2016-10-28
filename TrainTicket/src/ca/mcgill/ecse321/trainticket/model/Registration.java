/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;

// line 70 "../../../../../TrainTicket.ump"
// line 128 "../../../../../TrainTicket.ump"
public class Registration
{

  //------------------------
  // STATIC VARIABLES
  //------------------------

  private static int nextId = 1;

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Autounique Attributes
  private int id;

  //Registration Associations
  private Destination destination;
  private CabinType cabin;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public Registration(Destination aDestination, CabinType aCabin)
  {
    id = nextId++;
    if (!setDestination(aDestination))
    {
      throw new RuntimeException("Unable to create Registration due to aDestination");
    }
    if (!setCabin(aCabin))
    {
      throw new RuntimeException("Unable to create Registration due to aCabin");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public int getId()
  {
    return id;
  }

  public Destination getDestination()
  {
    return destination;
  }

  public CabinType getCabin()
  {
    return cabin;
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

  public boolean setCabin(CabinType aNewCabin)
  {
    boolean wasSet = false;
    if (aNewCabin != null)
    {
      cabin = aNewCabin;
      wasSet = true;
    }
    return wasSet;
  }

  public void delete()
  {
    destination = null;
    cabin = null;
  }


  public String toString()
  {
	  String outputString = "";
    return super.toString() + "["+
            "id" + ":" + getId()+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "destination = "+(getDestination()!=null?Integer.toHexString(System.identityHashCode(getDestination())):"null") + System.getProperties().getProperty("line.separator") +
            "  " + "cabin = "+(getCabin()!=null?Integer.toHexString(System.identityHashCode(getCabin())):"null")
     + outputString;
  }
}