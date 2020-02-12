package kalynvna.web.automation.core;

import java.awt.AWTException;
import java.awt.Robot;
import java.awt.Toolkit;
import java.awt.datatransfer.Clipboard;
import java.awt.datatransfer.StringSelection;
import java.awt.event.KeyEvent;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.opera.OperaDriver;



/**
 * Hello world!
 *
 */
public abstract class AutomationBase {
	
	public static final String PROJECT_URL=System.getProperty("user.dir");
	
	public static final String RESOURCE_FOLDER = "src/main/resources";
	
	public static final String OPERA_DRIVER = "server/opera/operadriver.exe";
	
	public static final Clipboard clipboard = Toolkit.getDefaultToolkit().getSystemClipboard();
	
	WebDriver driver;
	
	public AutomationBase() {
		System.setProperty("webdriver.opera.driver", PROJECT_URL+"/"+RESOURCE_FOLDER+"/"+OPERA_DRIVER);
		 driver = new OperaDriver();
	}
	
	public void quit() throws InterruptedException, AWTException {
		Thread.sleep(10000);
		driver.quit();
	}
	
	public void pageWithAuthentication(String url, String user, String pwd)  throws InterruptedException, AWTException {
		
		Robot robot = new Robot();
		
		driver.get(url);
		
        StringSelection username = new StringSelection(user);
        clipboard.setContents(username, username);
        robot.keyPress(KeyEvent.VK_CONTROL);
        robot.keyPress(KeyEvent.VK_V);
        Thread.sleep(200);  
        robot.keyRelease(KeyEvent.VK_V);
        robot.keyRelease(KeyEvent.VK_CONTROL);
        Thread.sleep(200);  
        robot.keyPress(KeyEvent.VK_DOWN);
        Thread.sleep(200);  
        robot.keyPress(KeyEvent.VK_TAB);	
        Thread.sleep(200);	
        
        StringSelection password = new StringSelection(pwd);
        clipboard.setContents(password, password);
        robot.keyPress(KeyEvent.VK_CONTROL);
        robot.keyPress(KeyEvent.VK_V);
        Thread.sleep(200);  
        robot.keyRelease(KeyEvent.VK_V);
        robot.keyRelease(KeyEvent.VK_CONTROL);
        Thread.sleep(200); 
        
        robot.keyPress(KeyEvent.VK_ENTER);
	}
	
    
}
