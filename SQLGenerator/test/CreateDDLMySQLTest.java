/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author student
 */
public class CreateDDLMySQLTest {
    
    public CreateDDLMySQLTest() {
    }
    
    @BeforeClass
    public static void setUpClass() {
    }
    
    @AfterClass
    public static void tearDownClass() {
    }
    
    @Before
    public void setUp() {
    }
    
    @After
    public void tearDown() {
    }

    /**
     * Test of createDDL method, of class CreateDDLMySQL.
     */
    @Test
    public void testCreateDDL() {
        System.out.println("createDDL");
        CreateDDLMySQL instance = new CreateDDLMySQL();
        instance.createDDL();
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of convertStrBooleanToInt method, of class CreateDDLMySQL.
     */
    @Test
    public void testConvertStrBooleanToInt() {
        System.out.println("convertStrBooleanToInt");
        String input = "";
        CreateDDLMySQL instance = new CreateDDLMySQL();
        int expResult = 0;
        int result = instance.convertStrBooleanToInt(input);
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of generateDatabaseName method, of class CreateDDLMySQL.
     */
    @Test
    public void testGenerateDatabaseName() {
        System.out.println("generateDatabaseName");
        CreateDDLMySQL instance = new CreateDDLMySQL();
        String expResult = "";
        String result = instance.generateDatabaseName();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getDatabaseName method, of class CreateDDLMySQL.
     */
    @Test
    public void testGetDatabaseName() {
        System.out.println("getDatabaseName");
        CreateDDLMySQL instance = new CreateDDLMySQL();
        String expResult = "";
        String result = instance.getDatabaseName();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getProductName method, of class CreateDDLMySQL.
     */
    @Test
    public void testGetProductName() {
        System.out.println("getProductName");
        CreateDDLMySQL instance = new CreateDDLMySQL();
        String expResult = "";
        String result = instance.getProductName();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getSQLString method, of class CreateDDLMySQL.
     */
    @Test
    public void testGetSQLString() {
        System.out.println("getSQLString");
        CreateDDLMySQL instance = new CreateDDLMySQL();
        String expResult = "";
        String result = instance.getSQLString();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
