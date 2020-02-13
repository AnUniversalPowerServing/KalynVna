package kalynva.web.automation.core.constants;

import java.awt.Toolkit;
import java.awt.datatransfer.Clipboard;

public class ProjectBase {

	public static final String PROJECT_URL=System.getProperty("user.dir");
	
	public static final String RESOURCE_FOLDER = "src/main/resources";
	
	public static final String OPERA_DRIVER = "server/opera/operadriver.exe";
	
	public static final Clipboard clipboard = Toolkit.getDefaultToolkit().getSystemClipboard();
	
}
