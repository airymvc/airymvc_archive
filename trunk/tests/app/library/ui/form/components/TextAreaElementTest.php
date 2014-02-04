<?php

/**
 * Test class for UIComponent.
 * Generated by PHPUnit on 2012-05-02 at 13:43:55.
 */
class TextAreaElementTest extends AiryUnitTest {

    /**
     * @var UIComponent
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function testSetUp() {
        $this->object = new TextAreaElement(1);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    /**
     * Generated from @assert (1, 1) == 2.
     */
    public function testId()
    {
        $id = 1;
        $this->assertEquals($id, $this->object->getId());
    }

    public function testRender()
    {
        $id = 1;
        $name = "test";
        $this->object->setLabel("textarea", "textarea", "css");
        $this->object->setName($name);
        $output = "<div id='textarea' class='css'>textarea</div><textarea  id='1' name='test'></textarea>";
        $this->assertEquals($output, $this->object->render());
    }
}

?>
