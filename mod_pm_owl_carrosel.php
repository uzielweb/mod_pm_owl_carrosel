<?php

/**

 * @copyright	Copyright © 2019 - All rights reserved.

 * @license		GNU General Public License v2.0

 * @generator	http://xdsoft/joomla-module-generator/

 */

defined('_JEXEC') or die;



$doc = JFactory::getDocument();

/* Available fields:"image","title","subtitle","description","link", */

// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_pm_owl_carrosel/assets/css/owl.carousel.min.css");
$doc->addStyleSheet(JURI::root()."modules/mod_pm_owl_carrosel/assets/css/owl.theme.default.min.css");
$doc->addScript(JURI::root()."modules/mod_pm_owl_carrosel/assets/js/owl.carousel.min.js");
$doc->addStyleSheet(JURI::root()."modules/mod_pm_owl_carrosel/assets/css/style.css");
$doc->addScript(JURI::root()."modules/mod_pm_owl_carrosel/assets/js/script.js");


$doc->addScriptDeclaration("
jQuery('document').ready(function($){

	

		$('#module".$module->id."').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			items: 1,
			navText: [\"<i class='icon-chevron-with-circle-left'></i>\",\"<i class='icon-chevron-with-circle-right'></i>\"],
			dots: false
		});
});

");

// $width 			= $params->get("width");

$images = $params->get("images");

/**

	$db = JFactory::getDBO();

	$db->setQuery("SELECT * FROM #__mod_pm_owl_carrosel where del=0 and module_id=".$module->id);

	$objects = $db->loadAssocList();

*/

require JModuleHelper::getLayoutPath('mod_pm_owl_carrosel', $params->get('layout', 'default'));