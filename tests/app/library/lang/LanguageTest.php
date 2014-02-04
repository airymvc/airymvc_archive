<?php

require_once dirname(__FILE__) . '/../../../../app/library/lang/Language.php';
require_once dirname(__FILE__) . '/../../../../config/lib/Config.php';
require_once dirname(__FILE__) . '/../../../../core/PathService.php';

/**
 * Test class for LangService.
 * Generated by PHPUnit on 2012-05-02 at 21:54:26.
 */
class LanguageTest extends AiryUnitTest {

    /**
     * @var Language
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function testSetUp() {
        $this->object = Language::getInstance('../../../testfiles/test_config.ini');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Language::getInstance
     * @todo Implement testGetInstance().
     */
    public function testGetInstance() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Language::getLangaugeWord
     * @todo Implement testGetLangaugeWord().
     */
    public function testGetLangaugeWord() {
        // Remove the following lines when you implement this test.
        $x = $this->object->getLangaugeWord();
        $this->assertEquals('Account ID', $x['en-US']['AccountID']);
    }

    /**
     * @covers Language::getWord
     * @todo Implement testGetWord().
     */
    public function testGetWord() {
        // Remove the following lines when you implement this test.
        $x = $this->object->getWord('AccountID', 'en-US');
        $this->assertEquals('Account ID', $x);
    }

    /**
     * @covers Language::getTranslation
     * @todo Implement testGetTranslation().
     */
    public function testGetTranslation() {
        // Remove the following lines when you implement this test.
        $x = $this->object->getTranslation('帳號', 'zh-TW', 'en-US');
        $this->assertEquals('Account ID', $x);
    }

}

?>
