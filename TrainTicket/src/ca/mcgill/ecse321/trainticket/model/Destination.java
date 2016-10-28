/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;
import java.sql.Time;

// line 10 "../../../../../TrainTicket.ump"
// line 83 "../../../../../TrainTicket.ump"
public class Destination
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Destination Attributes
  private String name;
  private boolean departureTimeWithin15Minutes;
  private Time departureTime;
  private Time tripDuration;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public Destination(String aName, boolean aDepartureTimeWithin15Minutes, Time aDepartureTime, Time aTripDuration)
  {
    name = aName;
    departureTimeWithin15Minutes = aDepartureTimeWithin15Minutes;
    departureTime = aDepartureTime;
    tripDuration = aTripDuration;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setName(String aName)
  {
    boolean wasSet = false;
    name = aName;
    wasSet = true;
    return wasSet;
  }

  public boolean setDepartureTimeWithin15Minutes(boolean aDepartureTimeWithin15Minutes)
  {
    boolean wasSet = false;
    departureTimeWithin15Minutes = aDepartureTimeWithin15Minutes;
    wasSet = true;
    return wasSet;
  }

  public boolean setDepartureTime(Time aDepartureTime)
  {
    boolean wasSet = false;
    departureTime = aDepartureTime;
    wasSet = true;
    return wasSet;
  }

  public boolean setTripDuration(Time aTripDuration)
  {
    boolean wasSet = false;
    tripDuration = aTripDuration;
    wasSet = true;
    return wasSet;
  }

  public String getName()
  {
    return name;
  }

  public boolean getDepartureTimeWithin15Minutes()
  {
    return departureTimeWithin15Minutes;
  }

  public Time getDepartureTime()
  {
    return departureTime;
  }

  public Time getTripDuration()
  {
    return tripDuration;
  }

  public boolean isDepartureTimeWithin15Minutes()
  {
    return departureTimeWithin15Minutes;
  }

  public void delete()
  {}


  public String toString()
  {
	  String outputString = "";
    return super.toString() + "["+
            "name" + ":" + getName()+ "," +
            "departureTimeWithin15Minutes" + ":" + getDepartureTimeWithin15Minutes()+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "departureTime" + "=" + (getDepartureTime() != null ? !getDepartureTime().equals(this)  ? getDepartureTime().toString().replaceAll("  ","    ") : "this" : "null") + System.getProperties().getProperty("line.separator") +
            "  " + "tripDuration" + "=" + (getTripDuration() != null ? !getTripDuration().equals(this)  ? getTripDuration().toString().replaceAll("  ","    ") : "this" : "null")
     + outputString;
  }
}