package anups.jfx.kv.dsc.utils;

import java.awt.Toolkit;
import java.awt.datatransfer.Clipboard;
import java.awt.datatransfer.StringSelection;
import java.util.TimerTask;

public class ScheduleTask extends TimerTask {
	
  private static final Clipboard CLIPBOARD = Toolkit.getDefaultToolkit().getSystemClipboard();

  @Override
  public void run() {
	try {
	  CLIPBOARD.setContents(new StringSelection(""),null); 
	  Thread.sleep(100); 
	} catch(Exception e) { e.printStackTrace(); }
  }
    
}
