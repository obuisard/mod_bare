<?php
/**
 * @copyright	Copyright (C) 2011 Simplify Your Web, Inc. All rights reserved.
 * @license		GNU General Public License version 3 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once (dirname(__FILE__).'/helper.php');

$params->def('count', 1); // sets default value to 1 if not alreay assigned

// get the list of elements to display, if any
$list = modBareHelper::getParams($params);

if (empty($list)) {
	return;
}

require(JModuleHelper::getLayoutPath('mod_bare', $params->get('layout', 'default')));
?>
