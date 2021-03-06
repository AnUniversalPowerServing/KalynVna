package panchang.app;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.opera.OperaDriver;

public class FormBuilder {

	public static final String PROJECT_PATH = System.getProperty("user.dir");
	
	public static final String  URL = "https://www.prokerala.com/astrology/nakshatra-finder/";
	
	public static void main(String args[]) {
		
	  System.setProperty("webdriver.opera.driver", PROJECT_PATH+"\\operadriver.exe");
	  
	  WebDriver  webDriver = new OperaDriver();
	  webDriver.get(URL); 
	  
	  try {
		Thread.sleep(3000);
	  } catch (InterruptedException e) {
		  e.printStackTrace();
	  }
	  
	}
}
