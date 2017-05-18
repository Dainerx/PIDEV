/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package iservices;

import java.util.List;

/**
 *
 * @author sahar ghorch
 */
public interface iService<T> {
     void add(T t);
    void update(T t,int id);
    void delete(int id);
    List<T> displayAll();
    T findById(int id);
}
