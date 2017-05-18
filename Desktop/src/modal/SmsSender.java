/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

;
import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import com.twilio.type.PhoneNumber;
import java.net.URISyntaxException;

/**
 *
 * @author User
 */


public class SmsSender {

    // Find your Account Sid and Auth Token at twilio.com/console
    public static final String ACCOUNT_SID = "AC398eeb599fad6ecbc4fb9f3eac20c49e";
    public static final String AUTH_TOKEN = "62dbc4db62d83849e60d163294268646";

    public static void send() throws URISyntaxException {
        Twilio.init(ACCOUNT_SID, AUTH_TOKEN);

        Message message = Message
                .creator(new PhoneNumber("+21652299370"), // to
                        new PhoneNumber("+12107022254"), // from
                        " Un membre vous a commenté")
                .create();
        System.out.println(message.getSid());
        System.out.println("notif");
    }
}
