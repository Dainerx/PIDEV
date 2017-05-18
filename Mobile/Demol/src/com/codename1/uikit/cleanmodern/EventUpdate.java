/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.codename1.uikit.cleanmodern;

import FeedbackEntity.Evenement;
import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;

/**
 *
 * @author slim
 */
public class EventUpdate {
    Form f;

    public EventUpdate(Resources theme, Evenement d) {
         f = new Form("Modifier event", new BoxLayout(BoxLayout.Y_AXIS));
         TextField libelle=new TextField(d.getLibelle());
         TextField description=new TextField(d.getDescription());
         TextField date=new TextField(d.getDate());
         TextField lieu=new TextField(d.getLieu());
         Button mod=new Button("modifier");
         f.add(libelle);
         f.add(description);
         f.add(date);
         f.add(lieu);
         f.add(mod);
        
        
    }
    public Form getF()
    {
        return f;
    }
    
    
}
