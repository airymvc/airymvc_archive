<?php




/**
 * Test class for LangService.
 * Generated by PHPUnit on 2012-05-02 at 21:54:26.
 */
class PaginatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Language
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Paginator();
        $this->object->setDatabaseId(0);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * 
     * Testing getting the pagination
     */
    public function testPage1() {
    	$sql = "SELECT * FROM activity";
    	$this->object->setNumberOfItems(1);
    	$this->object->setNumberOfPages(10);
    	$result = $this->object->getPageHtmlBySQL($sql);
		$compare = "<div id='paginator' class='paginator'><a id='first_page'  href='?page=1&items_per_page=1' class='first_page'><span class='paginator first_page page_number'>&nbsp;first&nbsp;</span></a><a id='previous_page'  href='?page=1&items_per_page=1' class='previous_page'><span class='paginator previous_page page_number'>&nbsp;previous&nbsp;</span></a><a id='page_link page_link_item_1' href='?page=1&items_per_page=1' class='page_link page_link_item_1'><span class='paginator current_page page_number'>&nbsp;1&nbsp;</span></a><a href='?page=2&items_per_page=1' class='page_link page_link_item_2'><span class='page_number'>&nbsp;2&nbsp;</span></a><a href='?page=3&items_per_page=1' class='page_link page_link_item_3'><span class='page_number'>&nbsp;3&nbsp;</span></a><a id='next_page' href='?page=2&items_per_page=1' class='next_page'><span class='paginator next_page page_number'>&nbsp;next&nbsp;</span></a><a id='last_page' href='?page=3&items_per_page=1' class='last_page'><span class='paginator last_page page_number'>&nbsp;last&nbsp;</span></a></div>";
    	$this->assertEquals($compare, $result);	
    }

    /**
     * 
     * Testing getting the pagination
     */
    public function testPage2() {
    	$sql = "SELECT * FROM activity";
    	$this->object->setNumberOfItems(1);
    	$this->object->setNumberOfPages(2);
    	$result = $this->object->getPageHtmlBySQL($sql);
		$compare = "<div id='paginator' class='paginator'><a id='first_page'  href='?page=1&items_per_page=1' class='first_page'><span class='paginator first_page page_number'>&nbsp;first&nbsp;</span></a><a id='previous_page'  href='?page=1&items_per_page=1' class='previous_page'><span class='paginator previous_page page_number'>&nbsp;previous&nbsp;</span></a><a id='page_link page_link_item_1' href='?page=1&items_per_page=1' class='page_link page_link_item_1'><span class='paginator current_page page_number'>&nbsp;1&nbsp;</span></a><a href='?page=2&items_per_page=1' class='page_link page_link_item_2'><span class='page_number'>&nbsp;2&nbsp;</span></a><a id='next_page' href='?page=2&items_per_page=1' class='next_page'><span class='paginator next_page page_number'>&nbsp;next&nbsp;</span></a><a id='last_page' href='?page=3&items_per_page=1' class='last_page'><span class='paginator last_page page_number'>&nbsp;last&nbsp;</span></a></div>";
    	$this->assertEquals($compare, $result);	
    }    

    /**
     * 
     * Testing getting the pagination
     */
    public function testPageUsingCurrentPage() {
    	$sql = "SELECT * FROM activity";
    	$this->object->setNumberOfItems(1);
    	$this->object->setNumberOfPages(10);
    	$this->object->setCurrentPage(2);
    	$result = $this->object->getPageHtmlBySQL($sql);
		$compare = "<div id='paginator' class='paginator'><a id='first_page'  href='?page=1&items_per_page=1' class='first_page'><span class='paginator first_page page_number'>&nbsp;first&nbsp;</span></a><a id='previous_page'  href='?page=1&items_per_page=1' class='previous_page'><span class='paginator previous_page page_number'>&nbsp;previous&nbsp;</span></a><a href='?page=1&items_per_page=1' class='page_link page_link_item_1'><span class='page_number'>&nbsp;1&nbsp;</span></a><a id='page_link page_link_item_2' href='?page=2&items_per_page=1' class='page_link page_link_item_2'><span class='paginator current_page page_number'>&nbsp;2&nbsp;</span></a><a href='?page=3&items_per_page=1' class='page_link page_link_item_3'><span class='page_number'>&nbsp;3&nbsp;</span></a><a id='next_page' href='?page=3&items_per_page=1' class='next_page'><span class='paginator next_page page_number'>&nbsp;next&nbsp;</span></a><a id='last_page' href='?page=3&items_per_page=1' class='last_page'><span class='paginator last_page page_number'>&nbsp;last&nbsp;</span></a></div>";
    	$this->assertEquals($compare, $result);	
    }     


}

?>
