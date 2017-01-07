<?php
/**
 * @copyright	Copyright (C) 2011 Simplify Your Web, Inc. All rights reserved.
 * @license		GNU General Public License version 3 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

class modBareHelper
{
	static function getParams($params)
	{		
		// get database
		$db = JFactory::getDbo();
		
		$query = $db->getQuery(true);
				
		$query->select($db->quoteName('cd.id'));
		$query->select($db->quoteName('cd.name'));
		$query->from($db->quoteName('#__contact_details', 'cd'));
		$query->where($db->quoteName('cd.published').' = 1');
		
		$db->setQuery($query, 0, $params->get('count'));
		
		// var_dump($query->__toString());
		
		try {
			$list = $db->loadObjectList();
		} catch (RuntimeException $e) {
			if ($db->getErrorNum()) {
				JFactory::getApplication()->enqueueMessage($db->getErrorMsg(), 'warning');
			} else {
				JFactory::getApplication()->enqueueMessage(JText::_('JERROR_AN_ERROR_HAS_OCCURRED'), 'error');
			}
			return null;
		}
		
		return $list;
	}

}
