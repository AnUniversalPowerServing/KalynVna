package kalynvna_tools.panchang.app;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.opera.OperaDriver;
import org.openqa.selenium.support.ui.Select;

public class SeleniumStart {

	public static final String PROJECT_PATH = System.getProperty("user.dir");
	public static void main(String args[]) throws InterruptedException{
		System.out.println(PROJECT_PATH);
		 /*System.setProperty("webdriver.opera.driver", PROJECT_PATH+"\\operadriver.exe");
		 WebDriver  fd1 = new OperaDriver();
		 
         // fd1.get("https://www.drikpanchang.com/telugu/panchanga/telugu-month-panchanga.html?date=01/09/2019"); // Same Tab
		 fd1.get("http://www.astrojyoti.com/dailypanchangadarshini");
         System.out.println("Title: "+fd1.getTitle());
         
         Thread.sleep(3000);
         
         fd1.findElement(By.xpath("//input[@id='datepicker']")).sendKeys("15-08-1991");
         fd1.findElement(By.xpath("//input[@id='getpanchang']")).click();;
         
         //    birthday_year
      /*   WebElement webElement = fd1.findElement(By.id("datepicker"));
         new Input(webElement);
         new Select(webElement).selectByVisibleText("3");
         		
         webElement = fd1.findElement(By.name("birthday_month"));
         new Select(webElement).selectByVisibleText("Mar");
         
         webElement = fd1.findElement(By.name("birthday_year"));
         new Select(webElement).selectByVisibleText("1991"); */
	}
}
