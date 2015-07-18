<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu_idmygadget
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomoo Websites LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

global $jmwsIdMyGadget;
$createJmwsIdMyGadgetObject = FALSE;
// print '$jmwsIdMyGadget: ' . $jmwsIdMyGadget;

if ( isset($jmwsIdMyGadget) )
{
	$jmwsIdMyGadgetClass = get_class( $jmwsIdMyGadget );
	if ( $jmwsIdMyGadgetClass == 'JmwsIdMyGadgetJoomla' )
	{
		$createJmwsIdMyGadgetObject = TRUE;
	}
}
else
{
	$createJmwsIdMyGadgetObject = TRUE;
}
if ( $createJmwsIdMyGadgetObject )
{
	print 'Creating a JmwsIdMyGadget object with JmwsIdMyGadgetNoDetection!';
	require_once __DIR__ . '/JmwsIdMyGadgetNoDetection.php';
	$jmwsIdMyGadget = new JmwsIdMyGadgetNoDetection();
}

$list		= ModMenuIdMyGadgetHelper::getList($params);
$base		= ModMenuIdMyGadgetHelper::getBase($params);
$active		= ModMenuIdMyGadgetHelper::getActive($params);
$active_id 	= $active->id;
$path		= $base->tree;

$showAll	= $params->get('showAllChildren');
$class_sfx	= htmlspecialchars($params->get('class_sfx'));

if (count($list))
{
	require JModuleHelper::getLayoutPath('mod_menu_idmygadget', $params->get('layout', 'default'));
}
