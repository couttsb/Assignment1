/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

package ca.mcgill.ecse321.trainticket.model;
import java.util.*;
import java.sql.Date;
import java.sql.Time;

// line 3 "../../../../../TrainTicket.ump"
// line 76 "../../../../../TrainTicket.ump"
public class TicketKioskManager
{

  //------------------------
  // STATIC VARIABLES
  //------------------------

  private static TicketKioskManager theInstance = null;

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //TicketKioskManager Associations
  private List<Registration> registrations;
  private List<Ticket> tickets;
  private List<CreditPayment> creditPayments;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  private TicketKioskManager()
  {
    registrations = new ArrayList<Registration>();
    tickets = new ArrayList<Ticket>();
    creditPayments = new ArrayList<CreditPayment>();
  }

  public static TicketKioskManager getInstance()
  {
    if(theInstance == null)
    {
      theInstance = new TicketKioskManager();
    }
    return theInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public Registration getRegistration(int index)
  {
    Registration aRegistration = registrations.get(index);
    return aRegistration;
  }

  public List<Registration> getRegistrations()
  {
    List<Registration> newRegistrations = Collections.unmodifiableList(registrations);
    return newRegistrations;
  }

  public int numberOfRegistrations()
  {
    int number = registrations.size();
    return number;
  }

  public boolean hasRegistrations()
  {
    boolean has = registrations.size() > 0;
    return has;
  }

  public int indexOfRegistration(Registration aRegistration)
  {
    int index = registrations.indexOf(aRegistration);
    return index;
  }

  public Ticket getTicket(int index)
  {
    Ticket aTicket = tickets.get(index);
    return aTicket;
  }

  public List<Ticket> getTickets()
  {
    List<Ticket> newTickets = Collections.unmodifiableList(tickets);
    return newTickets;
  }

  public int numberOfTickets()
  {
    int number = tickets.size();
    return number;
  }

  public boolean hasTickets()
  {
    boolean has = tickets.size() > 0;
    return has;
  }

  public int indexOfTicket(Ticket aTicket)
  {
    int index = tickets.indexOf(aTicket);
    return index;
  }

  public CreditPayment getCreditPayment(int index)
  {
    CreditPayment aCreditPayment = creditPayments.get(index);
    return aCreditPayment;
  }

  public List<CreditPayment> getCreditPayments()
  {
    List<CreditPayment> newCreditPayments = Collections.unmodifiableList(creditPayments);
    return newCreditPayments;
  }

  public int numberOfCreditPayments()
  {
    int number = creditPayments.size();
    return number;
  }

  public boolean hasCreditPayments()
  {
    boolean has = creditPayments.size() > 0;
    return has;
  }

  public int indexOfCreditPayment(CreditPayment aCreditPayment)
  {
    int index = creditPayments.indexOf(aCreditPayment);
    return index;
  }

  public static int minimumNumberOfRegistrations()
  {
    return 0;
  }

  public boolean addRegistration(Registration aRegistration)
  {
    boolean wasAdded = false;
    if (registrations.contains(aRegistration)) { return false; }
    registrations.add(aRegistration);
    wasAdded = true;
    return wasAdded;
  }

  public boolean removeRegistration(Registration aRegistration)
  {
    boolean wasRemoved = false;
    if (registrations.contains(aRegistration))
    {
      registrations.remove(aRegistration);
      wasRemoved = true;
    }
    return wasRemoved;
  }

  public boolean addRegistrationAt(Registration aRegistration, int index)
  {  
    boolean wasAdded = false;
    if(addRegistration(aRegistration))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfRegistrations()) { index = numberOfRegistrations() - 1; }
      registrations.remove(aRegistration);
      registrations.add(index, aRegistration);
      wasAdded = true;
    }
    return wasAdded;
  }

  public boolean addOrMoveRegistrationAt(Registration aRegistration, int index)
  {
    boolean wasAdded = false;
    if(registrations.contains(aRegistration))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfRegistrations()) { index = numberOfRegistrations() - 1; }
      registrations.remove(aRegistration);
      registrations.add(index, aRegistration);
      wasAdded = true;
    } 
    else 
    {
      wasAdded = addRegistrationAt(aRegistration, index);
    }
    return wasAdded;
  }

  public static int minimumNumberOfTickets()
  {
    return 0;
  }

  public boolean addTicket(Ticket aTicket)
  {
    boolean wasAdded = false;
    if (tickets.contains(aTicket)) { return false; }
    tickets.add(aTicket);
    wasAdded = true;
    return wasAdded;
  }

  public boolean removeTicket(Ticket aTicket)
  {
    boolean wasRemoved = false;
    if (tickets.contains(aTicket))
    {
      tickets.remove(aTicket);
      wasRemoved = true;
    }
    return wasRemoved;
  }

  public boolean addTicketAt(Ticket aTicket, int index)
  {  
    boolean wasAdded = false;
    if(addTicket(aTicket))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfTickets()) { index = numberOfTickets() - 1; }
      tickets.remove(aTicket);
      tickets.add(index, aTicket);
      wasAdded = true;
    }
    return wasAdded;
  }

  public boolean addOrMoveTicketAt(Ticket aTicket, int index)
  {
    boolean wasAdded = false;
    if(tickets.contains(aTicket))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfTickets()) { index = numberOfTickets() - 1; }
      tickets.remove(aTicket);
      tickets.add(index, aTicket);
      wasAdded = true;
    } 
    else 
    {
      wasAdded = addTicketAt(aTicket, index);
    }
    return wasAdded;
  }

  public static int minimumNumberOfCreditPayments()
  {
    return 0;
  }

  public boolean addCreditPayment(CreditPayment aCreditPayment)
  {
    boolean wasAdded = false;
    if (creditPayments.contains(aCreditPayment)) { return false; }
    creditPayments.add(aCreditPayment);
    wasAdded = true;
    return wasAdded;
  }

  public boolean removeCreditPayment(CreditPayment aCreditPayment)
  {
    boolean wasRemoved = false;
    if (creditPayments.contains(aCreditPayment))
    {
      creditPayments.remove(aCreditPayment);
      wasRemoved = true;
    }
    return wasRemoved;
  }

  public boolean addCreditPaymentAt(CreditPayment aCreditPayment, int index)
  {  
    boolean wasAdded = false;
    if(addCreditPayment(aCreditPayment))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfCreditPayments()) { index = numberOfCreditPayments() - 1; }
      creditPayments.remove(aCreditPayment);
      creditPayments.add(index, aCreditPayment);
      wasAdded = true;
    }
    return wasAdded;
  }

  public boolean addOrMoveCreditPaymentAt(CreditPayment aCreditPayment, int index)
  {
    boolean wasAdded = false;
    if(creditPayments.contains(aCreditPayment))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfCreditPayments()) { index = numberOfCreditPayments() - 1; }
      creditPayments.remove(aCreditPayment);
      creditPayments.add(index, aCreditPayment);
      wasAdded = true;
    } 
    else 
    {
      wasAdded = addCreditPaymentAt(aCreditPayment, index);
    }
    return wasAdded;
  }

  public void delete()
  {
    registrations.clear();
    tickets.clear();
    creditPayments.clear();
  }

}