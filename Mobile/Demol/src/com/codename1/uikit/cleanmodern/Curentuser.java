/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.ui.Label;

/**
 *
 * @author Mounq
 */
public class Curentuser {
    public static String current;
    public static int currentId;
    public static int idpub;
    public static int idrez;

    public static int getIdrez() {
        return idrez;
    }

    public static void setIdrez(int idrez) {
        Curentuser.idrez = idrez;
    }

    

    
    public static void setCurrent(String curr,int currId)
    {
        current=curr;
        currentId=currId;
 
    }

    public static int getIdpubs() {
        return idpub;
    }

    public static void setIdpub(int idresto) {
        Curentuser.idpub = idresto;
    }

    public static String getCurrent() {
        return current;
    }

    public static void setCurrent(String current) {
        Curentuser.current = current;
    }

    public static int getCurrentId() {
        return currentId;
    }

    public static void setCurrentId(int currentId) {
        Curentuser.currentId = currentId;
    }

    static void setIdresto(Label idreseravation) {
       // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
   
    
}
