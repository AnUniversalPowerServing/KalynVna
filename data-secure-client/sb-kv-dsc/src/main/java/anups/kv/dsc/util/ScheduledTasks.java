package anups.kv.dsc.util;

import java.awt.Toolkit;
import java.awt.datatransfer.Clipboard;
import java.text.SimpleDateFormat;
import java.util.Date;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.stereotype.Component;

@Component
public class ScheduledTasks {

    private static final Logger log = LoggerFactory.getLogger(ScheduledTasks.class);
    
    private static final SimpleDateFormat dateFormat = new SimpleDateFormat("HH:mm:ss");

    @Scheduled(fixedRate = 5000)
    public void reportCurrentTime() {
    	Toolkit toolkit = Toolkit.getDefaultToolkit();
    	toolkit.getSystemClipboard();
    	// Clipboard CLIPBOARD = Toolkit.getDefaultToolkit().getSystemClipboard();
        log.info("The time is now {}", dateFormat.format(new Date()));
    }
}
