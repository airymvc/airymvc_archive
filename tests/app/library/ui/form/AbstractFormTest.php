<?php

/**
 * Test class for UIComponent.
 * Generated by PHPUnit on 2012-05-02 at 13:43:55.
 */
class AbstractFormTest extends AiryUnitTest {

    /**
     * @var UIComponent
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new AbstractForm();

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    /**
     * Generated from @assert
     */
    public function testRender()
    {
    	$e = new TextElement("xy");
        $e->setAttribute("name", "dddddddd");
        $e->setLabel('ddd', 'sdfdsfdsfs', 'css');
        $this->object->setAttribute("id", "test");
        $this->object->setAttribute("target", "_blank");
        $this->object->setElement($e);
        $e1 = new HtmlScript();
        $e1->setScript("<a herf='aa.html' target='_blank'>");
        $this->object->setElement($e1);
        $e2 = new TextElement("xy1");
        $e2->setAttribute("name", "dddddddd11");
        $e2->setLabel('ddd', 'sdfdsfdsfs1', 'css1');
        $this->object->setElement($e2);
        $e3 = new HtmlScript();
        $e3->setScript("</a>");
        $this->object->setElement($e3);
        
        $output = "<form id='test' target='_blank'><div id='ddd' class='css'>sdfdsfdsfs</div><input id='xy' type='text' name='dddddddd'><a herf='aa.html' target='_blank'><div id='ddd' class='css1'>sdfdsfdsfs1</div><input id='xy1' type='text' name='dddddddd11'></a></form>";
        $this->assertEquals($output, $this->object->render());
    }
}

?>
