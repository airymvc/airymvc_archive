<?php

require_once dirname(__FILE__) . '/../../../../../../app/library/ui/form/validation/StringValidator.php';
require_once dirname(__FILE__) . '/../../../../../../app/library/ui/form/validation/StrMaxLengthRule.php';
require_once dirname(__FILE__) . '/../../../../../../app/library/ui/form/validation/StrMinLengthRule.php';
require_once dirname(__FILE__) . '/../../../../../../app/library/ui/form/validation/RuleInterface.php';

/**
 * Test class for StringValidator.
 * Generated by PHPUnit on 2012-05-29 at 16:12:07.
 */
class StringValidatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var StringValidator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new StringValidator;
        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers StringValidator::setMaxLengthValid
     * @todo Implement testSetMaxLengthValid().
     */
    public function testSetMaxLengthValid() {
        $errorMsg = "The string length is large";
        $this->object->setMaxLengthValid(10, $errorMsg);
        $testValue = "Test0123456789";
        $result = $this->object->validate($testValue);
        $this->assertEquals($result[0], $errorMsg);
    }

    /**
     * @covers StringValidator::setMinLengthValid
     * @todo Implement testSetMinLengthValid().
     */
    public function testSetMinLengthValid() {
        $errorMsg = "The string length is small";
        $this->object->setMinLengthValid(5, $errorMsg);
        $testValue = "Test";
        $result = $this->object->validate($testValue);
        $this->assertEquals($result[0], $errorMsg);
    }

    /**
     * @covers StringValidator::setPatternValid
     * @todo Implement testSetPatternValid().
     */
    public function testSetRequiredValid() {
        $errorMsg = "The input is required";
        $this->object->setRequireValid($errorMsg);
        $testValue = "";
        $result = $this->object->validate($testValue);
        $this->assertEquals($result[0], $errorMsg);
        $this->object->setRequireValid();
        $testValue = "";
        $errorMsg = "ERROR!";
        $result = $this->object->validate($testValue);
        $this->assertEquals($result[0], $errorMsg);
    }

}

?>