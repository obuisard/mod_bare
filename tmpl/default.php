<?php
/**
 * @copyright	Copyright (C) 2011 Simplify Your Web, Inc. All rights reserved.
 * @license		GNU General Public License version 3 or later; see LICENSE.txt
 */
 
// no direct access
defined('_JEXEC') or die;

$urlPath = JURI::base()."modules/mod_bare/";

$document = JFactory::getDocument();
$document->addStyleSheet($urlPath."style.css");

?>
<ul class="personlist<?php echo $params->get('moduleclass_sfx'); ?>">
<?php foreach ($list as $item) : ?>				
	<li class="person">
		<span><?php echo $item->name; ?></span>
	</li>
<?php endforeach; ?>
</ul>
