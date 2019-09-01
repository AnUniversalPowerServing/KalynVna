package anups.jfx.kv.dsc.app;
	
import javafx.application.Application;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import javafx.scene.Scene;
import javafx.scene.input.MouseEvent;
import javafx.scene.Cursor;
import javafx.scene.Parent;

public class Main extends Application {
	
	private static double xOffset = 0;
    private static double yOffset = 0;

	@Override
	public void start(Stage primaryStage) {
		try {
			primaryStage.initStyle(StageStyle.UNDECORATED);
			primaryStage.initStyle(StageStyle.TRANSPARENT);
			
			Parent root = FXMLLoader.load(getClass().getResource("Scene.fxml"));
	        
			    root.setOnMousePressed(new EventHandler<MouseEvent>() {
			      @Override public void handle(MouseEvent mouseEvent) {
			        // record a delta distance for the drag and drop operation.
			    	  xOffset = primaryStage.getX() - mouseEvent.getScreenX();
			    	  yOffset = primaryStage.getY() - mouseEvent.getScreenY();
			        root.setCursor(Cursor.HAND);
			      }
			    });
			
			    root.setOnMouseReleased(new EventHandler<MouseEvent>() {
			      @Override public void handle(MouseEvent mouseEvent) {
			    	  root.setCursor(Cursor.HAND);
			      }
			    });
			    
			    root.setOnMouseDragged(new EventHandler<MouseEvent>() {
			        @Override public void handle(MouseEvent mouseEvent) {
			        	primaryStage.setX(mouseEvent.getScreenX() + xOffset);
			        	primaryStage.setY(mouseEvent.getScreenY() + yOffset);
			        }
			      });
			
			    root.setOnMouseEntered(new EventHandler<MouseEvent>() {
			        @Override public void handle(MouseEvent mouseEvent) {
			          if (!mouseEvent.isPrimaryButtonDown()) {
			        	  root.setCursor(Cursor.HAND);
			          }
			        }
			     });
			
			   root.setOnMouseExited(new EventHandler<MouseEvent>() {
			        @Override public void handle(MouseEvent mouseEvent) {
			          if (!mouseEvent.isPrimaryButtonDown()) {
			        	  root.setCursor(Cursor.HAND);
			          }
			        }
			    });
	
	        Scene scene = new Scene(root);
			primaryStage.setScene(scene);
			primaryStage.show();
		} catch(Exception e) {  e.printStackTrace();  }
	}
	
	public static void main(String[] args) {
		launch(args);
	}
}
