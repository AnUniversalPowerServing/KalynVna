package kalynvna.web.automation.core;

import java.awt.AWTException;
import java.awt.Robot;
import java.awt.Toolkit;
import java.awt.datatransfer.Clipboard;
import java.awt.datatransfer.StringSelection;
import java.awt.event.KeyEvent;
import java.util.ArrayList;
import java.util.List;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.opera.OperaDriver;

import kalynva.web.automation.core.constants.ProjectBase;
import kalynva.web.automation.core.pojos.TestCase;
import kalynva.web.automation.core.pojos.TestSteps;



/**
 * Hello world!
 *
 */
public abstract class AutomationBase extends ProjectBase {
	
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
        
        TestCase testCase = new TestCase();
		testCase.setTestCase("Authentication");
		testCase.setTestDesc("Login with Username and Password");
		List<TestSteps> testStepsList = new ArrayList<TestSteps>();
		TestSteps testStep1 = new TestSteps();
		testStep1.setTestStep("Login Credentials");
		testStep1.setTestDesc("Login Credential Description");
		testStep1.setTestData("Username=root, Password=root");
		testStep1.setStatus("Success");
		testStep1.setComment("-");
		testStepsList.add(testStep1);
		testCase.setTestSteps(testStepsList);
		AutomationReport automationReport = new AutomationReport();
		automationReport.buildReport("authenticationLogin", testCase);
	}
	
    
}
