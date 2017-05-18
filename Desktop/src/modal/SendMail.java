/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.util.Properties;
//import javax.mail.Session;
//import javax.mail.internet.MimeMessage;
import javax.mail.*;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

/**
 *
 * @author sahar ghorch
 */
public class SendMail {

    private String user = "sahar.ghorch@esprit.tn";
    private String password = "daliti<3";

    public SendMail(String to, String sub, String msg) {
        Properties prop = new Properties();
        prop.put("mail.smtp.ssl.trust", "smtp.gmail.com");
        prop.put("mail.smtp.auth", true);
        prop.put("mail.smtp.starttls.enable", true);
        prop.put("mail.smtp.host", "smtp.gmail.com");
        prop.put("mail.smtp.port", "587");

        Session session = Session.getInstance(prop, new javax.mail.Authenticator() {
            @Override
            protected javax.mail.PasswordAuthentication getPasswordAuthentication() {

                return new javax.mail.PasswordAuthentication(user, password);
            }
        });

        try {
            MimeMessage msgg = new MimeMessage(session);
            msgg.setFrom(new InternetAddress("daallyy.22@gmail.com"));
            msgg.setRecipients(javax.mail.Message.RecipientType.TO, InternetAddress.parse(to));
            msgg.setSubject(sub);
            msgg.setText(msg);

            Transport.send(msgg);
            System.out.println("Mail sent");
        } catch (Exception e) {

            System.out.println(e);
        }
    }
}
