/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package services;

import java.awt.image.BufferedImage;
import java.awt.image.RenderedImage;
import java.io.ByteArrayInputStream;
import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.IOException;
import java.io.InputStream;
import java.util.ArrayList;
import java.util.List;
import javafx.embed.swing.SwingFXUtils;
import javafx.scene.image.Image;
import javafx.stage.FileChooser;
import javax.imageio.ImageIO;

/**
 * Class designed to work with images
 * @author Daniel 
 */
public class ImageTools {
    private List<String> imageFormats;
    
    public ImageTools(){
        this.imageFormats = new ArrayList<>();
        imageFormats.add("*.jpg");
        imageFormats.add("*.jpeg");
        imageFormats.add("*.png");
    }
    
    /**
     * Load image from disk
     * @param imageBytes
     * @return javafx.scene.image.Image
     * @throws IOException 
     */
    public Image LoadImage() throws IOException{
        BufferedImage bufferedImage;
        File selectedImage;
        byte[] imageBytes;
        FileChooser fileChooser = new FileChooser();
        
        FileChooser.ExtensionFilter jpgFilter = new FileChooser.ExtensionFilter("Image Files",imageFormats );
        fileChooser.getExtensionFilters().addAll(jpgFilter);
        selectedImage = fileChooser.showOpenDialog(null);
        
        //imageBytes = Files.readAllBytes(selectedImage.toPath());
        bufferedImage = ImageIO.read(selectedImage);
        Image img = SwingFXUtils.toFXImage(bufferedImage, null); 
       
        return img ;
    }
    
     public String LoadImagePath() throws IOException{
        BufferedImage bufferedImage;
        File selectedImage;
        byte[] imageBytes;
        FileChooser fileChooser = new FileChooser();
        
        FileChooser.ExtensionFilter jpgFilter = new FileChooser.ExtensionFilter("Image Files",imageFormats );
        fileChooser.getExtensionFilters().addAll(jpgFilter);
        selectedImage = fileChooser.showOpenDialog(null);
        
        //imageBytes = Files.readAllBytes(selectedImage.toPath());
        bufferedImage = ImageIO.read(selectedImage);
        Image img = SwingFXUtils.toFXImage(bufferedImage, null); 
       
        return selectedImage.getPath() ;
    }
    
    /**
     * Convert image bytes[] into JavaFX image
     * @param imageBytes
     * @return javafx.scene.image.Image
     * @throws IOException 
     */
    public Image showImage(byte[] imageBytes) throws IOException{
        InputStream in = new ByteArrayInputStream(imageBytes);
        BufferedImage bImageFromConvert = ImageIO.read(in);
        return SwingFXUtils.toFXImage(bImageFromConvert, null);
    }
    
    /**
     *Class designed to convert javafx.scene.image.Image into byte[]
     * @param image
     * @return image Bytes[]
     * @throws IOException 
     */
    public byte[] wrapImage(Image image ) throws IOException{
        BufferedImage bImage = SwingFXUtils.fromFXImage(image, null);
        ByteArrayOutputStream s = new ByteArrayOutputStream();
        ImageIO.write(bImage, "png", s);
        return s.toByteArray();
    }
    
    public String SaveAsFile(Image img,String filename) throws IOException
    {
        
 BufferedImage bImage = SwingFXUtils.fromFXImage(img, null);
        File outputfile = new File(filename);
        ImageIO.write(bImage, "jpg", outputfile);

            return outputfile.getPath() ; 
    }
}
