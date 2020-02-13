package kalynva.web.automation.core.pojos;

import java.util.List;
import lombok.Data;

@Data
public class TestCase {
 private String testCase;
 private String testDesc;
 private List<TestSteps> testSteps;
}

