package anups.jfx.kv.dsc.app;

import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.Slider;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.paint.Color;
import javafx.scene.shape.Rectangle;
import javafx.stage.Stage;
import javafx.stage.Window;

import java.net.URL;
import java.util.ResourceBundle;
import java.util.Timer;

import anups.jfx.kv.dsc.utils.CustomHttpServer;
import anups.jfx.kv.dsc.utils.ScheduleTask;

public class Controller implements Initializable {

	private static final String PROJECT_PATH = System.getProperty("user.dir");
	
	@FXML private void handleOnMouseClicked(MouseEvent event) {
	 Object e = event.getSource();
	 if("class javafx.scene.image.ImageView".equalsIgnoreCase(e.getClass().toString())) {
		 ImageView  imageview = (ImageView) e;
		 String imageId = imageview.getId();
		 if("kv_screen_minimize".equalsIgnoreCase(imageId)) {
			 Stage stage = (Stage) imageview.getScene().getWindow();
			 stage.setIconified(true); 
		 } else if("kv_screen_close".equalsIgnoreCase(imageId)) {
			 Stage stage = (Stage) imageview.getScene().getWindow();
			 stage.close();
		 }
	 }
      //  System.out.println("You clicked rectangle: " + ((Image)event.getSource()).getId());
    }
	
	@FXML
	private Slider appDataSwitch;

	@FXML
	private Label appDataStatus;
	
	@FXML
	private Label appDataInfo;
	
	private Timer timer = new Timer();
	@FXML
	public void onSliderChanged() {
	    int sliderValue = (int) appDataSwitch.getValue();
	    if(sliderValue>40) {
	      appDataSwitch.setValue(100);
	      
	      /* ON State */
	      appDataStatus.setText("Data Secured System is TURNED ON");
	     // appDataStatus.setText(PROJECT_PATH);
	      appDataStatus.setTextFill(Color.web("#45a163", 1));
	      
	      StringBuilder sb = new StringBuilder("");
	      sb.append("You are able to see the data and images in the Kalyanaveena.com. ");
	      sb.append("Now, no copy-paste, screenshoting an image and screen recording is not allowed.");
	      appDataInfo.setText(sb.toString());
	      appDataInfo.setTextFill(Color.web("#45a163", 1));
	      System.out.println("timer: "+timer);
	      try {
		      timer.schedule(new ScheduleTask(), 0, 100);
	      } catch(Exception e) {
	    	  timer = new Timer();
	    	  timer.schedule(new ScheduleTask(), 0, 100);
	      }
		  
	      Thread serverThread = new Thread(new CustomHttpServer());
	 	  serverThread.start();
	 	 
	    } else {
	      appDataSwitch.setValue(0);
	      /* OFF Status */
	      appDataStatus.setText("Data Secured System is TURNED OFF");
	     // appDataStatus.setText(PROJECT_PATH);
	      appDataStatus.setTextFill(Color.web("#e04d09", 1));
	      
	      StringBuilder sb = new StringBuilder("");
	      sb.append("You are not able to see the data and images of our Customers in the Kalyanaveena.com.");
	      appDataInfo.setText(sb.toString());
	      appDataInfo.setTextFill(Color.web("#e04d09", 1));
	      
	      timer.cancel();
	      System.out.println("timer: "+timer);
	      try {
	      CustomHttpServer.serverSocket.close();
	      } catch(Exception e) { e.printStackTrace(); }
	    }
	    System.out.println(sliderValue);
	}
	
	
	@Override
	public void initialize(URL arg0, ResourceBundle arg1) {
		// TODO Auto-generated method stub
		
	}
}
