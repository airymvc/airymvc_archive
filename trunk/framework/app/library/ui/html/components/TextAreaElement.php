
<?php

/**
 * AiryMVC Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license.
 *
 * It is also available at this URL: http://opensource.org/licenses/BSD-3-Clause
 * The project website URL: https://code.google.com/p/airymvc/
 *
 * @author: Hung-Fu Aaron Chang
 */

require_once 'FieldElement.php';
require_once 'InputType.php';

class TextAreaElement extends FieldElement{
    //put your code here
    protected $_type  = InputType::TEXTAREA;
    
    public function __construct($id) {
        $this->setId($id);
    }
    
    protected function renderElements() {
        $insert = "";
        foreach ($this->_attributes as $key => $value)
        {   
            if ($key != "value"){
                $insert .= sprintf(" %s='%s'", $key, $value);
            }
        }
        $textValue = isset($this->_attributes['value'])? $this->_attributes['value'] : "";
        
        $inputText = "<div id='{$this->_label_id}' class='{$this->_label_css}'>{$this->_label}</div><textarea {$insert}>{$textValue}</textarea>";
        $this->_elementText = $inputText;     
    }
    
}

?>
