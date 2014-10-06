<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://dev.joomla.org/component/option,com_jd-wiki/Itemid,31/id,tutorials:modules/
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class modHelloWorldHelper
{
    /**
     * Retrieves the hello message
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public function getHello($params)
    {
		//Obtain a database connection
		$db = JFactory::getDbo();
		//Retrieve the shout
		$query = $db->getQuery(true)
					->select($db->quoteName('hello'))
					->from($db->quoteName('#__helloworld'))
					->where('lang = '. $db->Quote('en-GB'));
		//Prepare the query
		$db->setQuery($query);
		// Load the row.
		$result = $db->loadResult();
		//Return the Hello
		return $result;
	}
}
