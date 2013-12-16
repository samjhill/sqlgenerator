/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.File;
import java.io.BufferedReader;
import java.io.FileReader;
import junit.framework.TestCase;

/**
 *
 * @author student
 */
public class EdgeConvertFileParserTest extends TestCase {
    
    public EdgeConvertFileParserTest(String testName) {
        super(testName);
    }
    
    @Override
    protected void setUp() throws Exception {
        super.setUp();
    }
    
    @Override
    protected void tearDown() throws Exception {
        super.tearDown();
    }

    /**
     * Test of parseEdgeFile method, of class EdgeConvertFileParser.
     */
    public void testParseEdgeFile() throws Exception {
        System.out.println("parseEdgeFile");
        EdgeConvertFileParser instance = new EdgeConvertFileParser(new File("C:\\Users\\Mike\\Desktop\\final project\\alternative_diagrammer_file.xml"));
        
        File testFile = new File("C:\\Users\\Mike\\Desktop\\final project\\testXML.txt");
        BufferedReader testBr = new BufferedReader(new FileReader(testFile));
        StringBuilder testSb = new StringBuilder();
        String testLine;
        while((testLine = testBr.readLine()) != null){
            testSb.append(testLine);
        }
        String testFileContents = testSb.toString();
        
        File generatedFile = new File("C:\\Users\\Mike\\Desktop\\final project\\alternative_diagrammer_file.sql");
        BufferedReader generatedBr = new BufferedReader(new FileReader(generatedFile));
        StringBuilder generatedSb = new StringBuilder();
        String generatedLine;
        while((generatedLine = generatedBr.readLine()) != null){
            generatedSb.append(generatedLine);
        }
        String generatedFileContents = generatedSb.toString();
        assertEquals(testFileContents,generatedFileContents);
    }
}
