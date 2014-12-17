<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_slick_carousel_articles
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once __DIR__.'/helper.php';

$list = modSlickCarouselArticles::getList($params);

$interval		 = $params->get( 'interval', 5000 );
$speed			 = $params->get( 'speed', 300 );
$loopslides		 = $params->get( 'loopslides', 1 );
$autoplay		 = $params->get( 'autoplay', 1 );
$showarrows		 = $params->get( 'showarrows', 1 );
$showpagination	 = $params->get( 'showpagination', 1 );
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_slick_carousel_articles', $params->get('layout', 'default'));
?>
