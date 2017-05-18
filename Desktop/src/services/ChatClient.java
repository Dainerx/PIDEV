/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services ;

import services.Login;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyEvent;
import java.awt.event.KeyListener;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;
import java.io.*;
import java.net.*;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.*;

/**
 *
 * @author Ghassen
 */
public class ChatClient extends JFrame implements Runnable{
    
    Socket socket;
    JTextArea ta;
    Thread thread;
    DataInputStream din;
    DataOutputStream dout;
    String LoginName;    
    
    JButton send,logout;
    JTextField tf;
   
    public ChatClient(String login) throws IOException{
        super(login);
        LoginName=login;
        
        addWindowListener(new WindowAdapter()
        {
            @Override
            public void windowClosing(WindowEvent e)
            {
                try {
                    dout.writeUTF(LoginName+" "+"LOGOUT");
                    System.exit(1);
                } catch (IOException ex) {
                    Logger.getLogger(ChatClient.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        });
        
        ta = new JTextArea(18,50);
        tf = new JTextField(50);
        send = new JButton("send");
        logout = new JButton("logout");
        
        tf.addKeyListener(new KeyListener() {
            @Override
            public void keyTyped(KeyEvent e) {
                
            }

            @Override
            public void keyPressed(KeyEvent e) {
                if (e.getKeyCode() == KeyEvent.VK_ENTER){
                    try {
                        if(tf.getText().length() > 0){
                            dout.writeUTF(LoginName+" "+"DATA "+tf.getText().toString());
                            tf.setText("");
                        }
                    } catch (IOException ex) {
                        Logger.getLogger(Login.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
            }

            @Override
            public void keyReleased(KeyEvent e) {
                
            }
        });       
        
        send.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                try {
                    if(tf.getText().length() > 0){
                        dout.writeUTF(LoginName+" "+"DATA "+tf.getText().toString());
                        tf.setText("");
                    }
                } catch (IOException ex) {
                    Logger.getLogger(ChatClient.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        });
        
        logout.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                try {
                    dout.writeUTF(LoginName+" "+"LOGOUT");
                    System.exit(1);
                } catch (IOException ex) {
                    Logger.getLogger(ChatClient.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        });
        
        socket = new Socket("localhost",5217);
        din = new DataInputStream(socket.getInputStream());
        dout = new DataOutputStream(socket.getOutputStream());
        dout.writeUTF(LoginName);
        dout.writeUTF(LoginName +" "+"LOGIN");
        
        thread = new Thread(this);
        thread.start();
        setup();
    }
    
    @Override
    public void run() {
        while(true){
            try {
                ta.append("\n"+din.readUTF());
            } catch (IOException ex) {
                Logger.getLogger(ChatClient.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    private void setup() {
        setSize(700,400);
        JPanel panel = new JPanel();
        panel.add(new JScrollPane(ta));
        panel.add(tf);
        panel.add(send);
        panel.add(logout);
        add(panel);
        setVisible(true);
    }
    
}
