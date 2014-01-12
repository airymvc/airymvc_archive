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
 * @author Hung-Fu Aaron Chang
 */


interface ValidatorInterface {
    
    public function setRequireValid($errorMsg = null);
    
    public function setCustomValid($methodName, $object, $errorMsg = null);
    
    public function validate($value);
    
}

?>