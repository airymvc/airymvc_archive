<?php

/**
 * This is a tab that requires support of Jquery Tool library
 */
class JqtTab extends Tab {
    
    protected $_tabs;
    protected $_attributes = array();
    protected $_elements = array();
    protected $_tabText;
    
    public function __construct($id, $class = null) {
        $this->_id = $id;
        $this->setAttribute('id', $id);
        if (!is_null($class)) {
            $this->setAttribute('class', $class);
        }
    }

    public function render()
    {

        $tabText = $this->appendTabHtml(); 
        /**
         * Add Javascript support, follow the Jquery Tool Tabs
         */
        $tabText = $tabText . $this->appendTabJs($this->_id);
        
        $this->_tabText = $tabText;
        
        return $this->_tabText;
    }
    
    protected function appendTabHtml() 
    {
        $tabText = "<div ";
      
        return $tabText;
    }
    
    protected function appendTabJs($tabId) 
    {
        $tabText = "<div ";
        return $tabText;
    }
    
}
?>