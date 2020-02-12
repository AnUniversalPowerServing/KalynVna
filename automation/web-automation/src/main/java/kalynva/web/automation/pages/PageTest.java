package kalynva.web.automation.pages;

import java.awt.AWTException;

import kalynvna.web.automation.core.AutomationBase;

public class PageTest extends AutomationBase {

  public static void main(String[] args) throws InterruptedException, AWTException{
    PageTest app = new PageTest();
    app.pageWithAuthentication("http://localhost/tmpl/php_authentication/auth.php", "root", "root");        
    app.quit();
  }
}
