/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.components.SpanButton;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.util.Resources;
import com.codename1.ui.util.UIBuilder;

/**
 *
 * @author dainer
 */
public class home {

    private Container ct;
    private Form current,f;
    private Resources theme;
    private SpanButton trajetsLink,addTrajetLink;

    public home(Resources theme) {
        UIBuilder.registerCustomComponent("SpanButton", SpanButton.class);
        UIBuilder uib = new UIBuilder();
        f= uib.createContainer(theme, "home").getComponentForm();
        trajetsLink = (SpanButton) uib.findByName("allLink", f);
        addTrajetLink = (SpanButton) uib.findByName("addLink", f);
        addTrajetLink.addActionListener((ActionListener) (ActionEvent evt) -> {
            addTrajetUI ui = new addTrajetUI(theme);
            ui.getForm().show();
        });
        trajetsLink.addActionListener((ActionListener) (ActionEvent evt) -> {
            trajetsUI ui = new trajetsUI(theme);
        });
    }

    public Form getForm() {
        return f;
    }
}
