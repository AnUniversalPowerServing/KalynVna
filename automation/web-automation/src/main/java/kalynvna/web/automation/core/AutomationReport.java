package kalynvna.web.automation.core;

import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import kalynva.web.automation.core.constants.ProjectBase;
import kalynva.web.automation.core.pojos.SimpleTestCase;
import kalynva.web.automation.core.pojos.TestCase;
import kalynva.web.automation.core.pojos.TestSteps;

public class AutomationReport extends ProjectBase {
  
	public void buildReport(String testCaseTitle, TestCase testCase) {
		AutomationReport automationReport = new AutomationReport();
		StringBuilder sb = new StringBuilder();
		sb.append(automationReport.reportHeader());
		sb.append(automationReport.buildTestCase(testCase));
		sb.append(automationReport.reportFooter());
	 try {
	   FileWriter myWriter = new FileWriter(PROJECT_URL+"//"+RESOURCE_FOLDER+"//"+testCaseTitle+".html");
	      myWriter.write(sb.toString());
	      myWriter.close();
	  } catch (IOException e) {
		  e.printStackTrace();
	  }	
	}
	
	
	public static void main(String args[]) {
		
	}
	
	public String reportHeader() {
	  StringBuilder sb = new StringBuilder("<!DOCTYPE html>");
		sb.append("<html><head>");
		sb.append("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">");
		sb.append("<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">");
		sb.append("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>");
		sb.append("<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>");
		sb.append("<style>");
		sb.append(".table-responsive>.table>thead{background-color:purple;color:#fff;border-bottom:0px;}");
		sb.append(".table-responsive>.table{border:1px solid purple;}");
		sb.append("</style>");
		sb.append("</head><body>");
	  return sb.toString();
	}
	
	public String reportFooter() {
		return new StringBuilder("</body></html>").toString();
	}
	
	public String buildTestCase(TestCase testCase) {
		
		
	  StringBuilder sb = new StringBuilder("<div class=\"table-responsive\">");          
	  sb.append("<table class=\"table\">");
	  sb.append("<thead>");
	  sb.append("<tr>");
	  sb.append("<th><b>#</b></th>");
	  sb.append("<th><b>Test Case</b></th>");
	  sb.append("<th><b>Test Description</b></th>");
	  sb.append("<th><b>Test Steps</b></th>"); 
	  sb.append("</tr>");
	  sb.append("</thead>");
	  sb.append("<tbody>");
	  sb.append("<tr>");
	  sb.append("<td>1</td>");
	  sb.append("<td>").append(testCase.getTestCase()).append("</td>");
	  sb.append("<td>").append(testCase.getTestDesc()).append("</td>");
	  sb.append("<td><div class=\"table-responsive\">");  
	  sb.append("<table class=\"table\">");
	  sb.append("<thead>");
	  sb.append("<tr>");
	  sb.append("<th><b>#</b></th>");
	  sb.append("<th><b>Test Step</b></th>");
	  sb.append("<th><b>Description</b></th>");
	  sb.append("<th><b>Test Data</b></th>");
	  sb.append("<th><b>Status</b></th>");
      sb.append("<th><b>Comment</b></th>");
	  sb.append("</tr>");
	  sb.append("</thead>");
	  sb.append("<tbody>");
	  for(TestSteps testSteps : testCase.getTestSteps()) {
	  sb.append("<tr>");
	  sb.append("<td>1</td>");
	  sb.append("<td>").append(testSteps.getTestStep()).append("</td>");
	  sb.append("<td>").append(testSteps.getTestDesc()).append("</td>");
	  sb.append("<td>").append(testSteps.getTestData()).append("</td>");
	  sb.append("<td>").append(testSteps.getStatus()).append("</td>");
	  sb.append("<td>").append(testSteps.getComment()).append("</td>");
	  sb.append("</tr>");
	  }
	  sb.append("</tbody>");
	  sb.append("</table>");
      sb.append("</div></td>");
	  sb.append("</tr>");
	  sb.append("</tbody>");
	  sb.append("</table>");
	  sb.append("</div>");
	  return sb.toString();
	}
	
	public String simpleTestCaseData(SimpleTestCase testCase) {
		  StringBuilder sb = new StringBuilder("<div class=\"table-responsive\">");          
		  sb.append("<table class=\"table\">");
		  sb.append("<thead>");
		  sb.append("<tr>");
		  sb.append("<th><b>#</b></th>");
		  sb.append("<th><b>Test Case</b></th>");
		  sb.append("<th><b>Test Description</b></th>");
		  sb.append("<th><b>Test Data</b></th>");
		  sb.append("<th><b>Status</b></th>");
		  sb.append("<th><b>Comment</b></th>");
		  sb.append("</tr>");
		  sb.append("</thead>");
		  sb.append("<tbody>");
		  sb.append("<tr>");
		  sb.append("<td>1</td>");
		  sb.append("<td>").append(testCase.getTestCase()).append("</td>");
		  sb.append("<td>").append(testCase.getTestDesc()).append("</td>");
		  sb.append("<td>").append(testCase.getTestData()).append("</td>");
		  sb.append("<td>").append(testCase.getStatus()).append("</td>");
	      sb.append("<td>").append(testCase.getComment()).append("</td>"); 
	      sb.append("</tr>");
		  sb.append("</tbody>");
		  sb.append("</table>");
		  sb.append("</div>");
		  return sb.toString();
		}
}
