<?php
/**
 * AiryMVC Framework
 * 
 * @category AiryMVC
 * @license New BSD license - at this URL: http://opensource.org/licenses/BSD-3-Clause
 * @author: Hung-Fu Aaron Chang
 */

namespace airymvc\core;

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Framework.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Application.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Config.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Route.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'MvcValue.php';

use airymvc\core\Framework;
use airymvc\core\Application;
use airymvc\core\Config;
use airymvc\core\Route;
use airymvc\core\MvcValue;


/**
 * This class handles all the path variables that need to be initialized.
 *
 * @package airymvc\core\Bootstrap
 * @license New BSD license - at this URL: http://opensource.org/licenses/BSD-3-Clause
 */
class Bootstrap {
	
    /**
     * This initializes what framework needs.
     */
    public static function init() {
    	    	
    	//Get framework application names
    	//Throw out the error if the json cannot be decoded
    	$configArray = json_decode(file_get_contents(Framework::configFile()), TRUE);
    	
		$names = array();
		$apps = array();
		foreach ($configArray['%applications'] as $application) {
			$keys = array_keys($application);
			$names[] = $keys[0];
			$appSettings = $application[$keys[0]];
			//server name & document root & relative path
			$serverName = $appSettings[0];
			$docRoot = $appSettings[1];
			$pathName = "/";
			if (substr($appSettings[2], 0, 1) != "/") {
				$pathName .= $appSettings[2];
			}
			$app = new Application($keys[0], $serverName, $docRoot, $pathName);
			
			//Get the application config
			foreach ($configArray["%application_configs"] as $appConfigArray) {
				if ($appConfigArray["%name"] == $keys[0]) {
					$app->setConfig($appConfigArray);
				}
			}

			$apps[$keys[0]] = $app;
		}
		Framework::$appNames = $names;
		Framework::$apps = $apps;
		
		
		//process routing table here
		$table = array();
		foreach ($configArray['%routes'] as $routeUrl => $routeVar) {
			if (isset($apps[$routeVar[0]])) {
				$appObj = $apps[$routeVar[0]];
				$mvcValue = new MvcValue();
				$mvcValue->setNames($appObj->relativePath(), $routeVar[0], $routeVar[1], Route::fromHyphenToCamelCase($routeVar[2], TRUE), Route::fromHyphenToCamelCase($routeVar[3]));
				$table[$routeUrl] = $mvcValue;
			}
		}
		Route::$routingTable = $table;

		include "AutoLoader.php";

    }
    
   
}

?>
