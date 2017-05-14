package services;
        
import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import com.twilio.type.PhoneNumber;

public class ServiceSMS
{

   public void sendSMS(String phone, String messagetoSend) {
    String accountSid = "ACfef81828dc8c64a7517d0e7126acab3f"; // Your Account SID from www.twilio.com/user/account
    String authToken = "fd1b8f43a66a33b480d208dea4f1a362"; // Your Auth Token from www.twilio.com/user/account

    Twilio.init(accountSid, authToken);

    Message message = Message.creator(
    new PhoneNumber("+216"+phone),  // To number
    new PhoneNumber("+16572422389"),  // From number
    messagetoSend                    // SMS body
    ).create();

    System.out.println(message.getSid());

   }
   
 
}