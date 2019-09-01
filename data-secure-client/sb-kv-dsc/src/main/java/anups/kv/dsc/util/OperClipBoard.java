package anups.kv.dsc.util;

import java.awt.Toolkit;
import java.awt.datatransfer.Clipboard;
import java.awt.datatransfer.StringSelection;
import java.util.TimerTask;

import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.stereotype.Component;

public class OperClipBoard {

 private static final Clipboard CLIPBOARD = Toolkit.getDefaultToolkit().getSystemClipboard();
 
 // @Scheduled(initialDelay = 1000, fixedRate = 10000)
 public void run() {
	 System.out.println("Clip");
	 /*
	 try {
		 CLIPBOARD.setContents(new StringSelection(""),null); 
		 Thread.sleep(100);
		 
	 } catch(Exception e) { e.printStackTrace(); }
	 */
 }
 
}
