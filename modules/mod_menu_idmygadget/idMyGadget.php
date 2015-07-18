<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu_idmygadget
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomoo Websites LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

global $jmwsIdMyGadget;
$createJmwsIdMyGadgetObject = FALSE;
// print '$jmwsIdMyGadget: ' . $jmwsIdMyGadget;

if ( isset($jmwsIdMyGadget) )
{
	$jmwsIdMyGadgetClass = get_class( $jmwsIdMyGadget );
	if ( $jmwsIdMyGadgetClass !== 'JmwsIdMyGadgetJoomla' )
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

