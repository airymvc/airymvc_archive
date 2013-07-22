<?php

require_once dirname(__FILE__) . '/../../../../app/library/cypher/Base64UrlCode.php';

/**
 * Test class for Base64UrlCode.
 * Generated by PHPUnit on 2012-05-02 at 21:48:07.
 */
class Base64UrlCodeTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Base64UrlCode
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Base64UrlCode::encrypt
     * @todo Implement testEncrypt().
     */
    public function testEncryptDecrypt() {
        // Remove the following lines when you implement this test.
        $text = "this is a test";
        $x = Base64UrlCode::encrypt($text);
        $this->assertEquals($text, Base64UrlCode::decrypt($x));
    }


}

?>