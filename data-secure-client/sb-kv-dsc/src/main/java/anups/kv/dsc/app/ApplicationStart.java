package anups.kv.dsc.app;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.scheduling.annotation.EnableScheduling;

import anups.kv.dsc.util.OperClipBoard;

import java.util.Timer;

import org.springframework.boot.Banner;
import org.springframework.boot.CommandLineRunner;

@ComponentScan({"anups.kv"})
@SpringBootApplication
@EnableScheduling
public class ApplicationStart implements CommandLineRunner {

	public static void main(String[] args) {
		 SpringApplication app = new SpringApplication(ApplicationStart.class);
	        app.setBannerMode(Banner.Mode.OFF);
	        app.run(args);
	}

	@Override
	public void run(String... args) throws Exception {
		System.out.println("Try..It..");
		//new OperClipBoard();
	/*  Timer t=new Timer();
	  System.out.println("Timer: "+t);
	  t.scheduleAtFixedRate(new ClipBoard(), 0,100); */
	}

}
