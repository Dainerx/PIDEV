/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import java.io.*;
import java.net.*;
import java.util.ArrayList;
import java.util.StringTokenizer;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Ghassen
 */
public class ChatServer {
    static ArrayList ClientSockets;
    static ArrayList LoginNames;
    
    public ChatServer () throws IOException{
        ServerSocket server = new ServerSocket(5217);
        ClientSockets = new ArrayList<>();
        LoginNames = new ArrayList<>();
        
        while(true){
            Socket client = server.accept();
            AcceptClient acceptClient = new AcceptClient(client);
        }
    }
    public static void main(String[] args) throws IOException {
        ChatServer server = new ChatServer();
    }
    
    public class AcceptClient extends Thread{
        Socket ClientSocket;
        DataInputStream din;
        DataOutputStream dout;

        public AcceptClient(Socket client) throws IOException {
            ClientSocket = client;

            din = new DataInputStream(ClientSocket.getInputStream());
            dout = new DataOutputStream(ClientSocket.getOutputStream());

            String loginName = din.readUTF();

            LoginNames.add(loginName);
            ClientSockets.add(ClientSocket);

            start();
        }  
        
        @Override
        public void run(){
            while(true){
                try {
                    String msgFromClient = din.readUTF();
                    StringTokenizer st = new StringTokenizer(msgFromClient);
                    String LoginName =st.nextToken();
                    String MsgType = st.nextToken();
                    int io = -1;
                    String msg="";
                    
                    while(st.hasMoreTokens()){
                        msg = msg+" "+st.nextToken();
                    }
                    
                    if(MsgType.equals("LOGIN")){
                        for(int i= 0;i<LoginNames.size();i++){
                            Socket pSocket = (Socket) ClientSockets.get(i);
                            DataOutputStream pOut = new DataOutputStream(pSocket.getOutputStream());
                            pOut.writeUTF(LoginName +" s'est connecté.");
                        }
                    }
                    
                    else if (MsgType.equals("LOGOUT")){
                        for(int i= 0;i<LoginNames.size();i++){
                            if(LoginName.equals(LoginNames.get(i))){
                                io = i;
                            }
                            Socket pSocket = (Socket) ClientSockets.get(i);
                            DataOutputStream pOut = new DataOutputStream(pSocket.getOutputStream());
                            pOut.writeUTF(LoginName +" s'est Déconnecté.");
                        }
                        if(io >= 0){
                            LoginNames.remove(io);
                            ClientSockets.remove(io);
                        }
                    }
                    else {
                        for(int i= 0;i<LoginNames.size();i++){
                            Socket pSocket = (Socket) ClientSockets.get(i);
                            DataOutputStream pOut = new DataOutputStream(pSocket.getOutputStream());
                            pOut.writeUTF(LoginName +" : "+msg);
                        }
                    }
                    if (MsgType.equals("LOGOUT")){
                        break;
                    }
                    
                } catch (IOException ex) {
                    Logger.getLogger(ChatServer.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        }
    }
}
