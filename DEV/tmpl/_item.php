<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$images = json_decode($item->images);
$item_heading = $params->get('item_heading', 'h4');
?>
<div class="item">
<?php
	if ($params->get('item_title')):
		echo '<'.$item_heading.'>';
		if ($params->get('link_titles') && $item->link != ''):
			echo '<a href="'.$item->link.'">'.$item->title.'</a>';
		else:
			echo $item->title;
		endif;
		echo '</'.$item_heading.'>';
	endif;

	if (!$params->get('intro_only')) :
		echo $item->afterDisplayTitle;
	endif;
	echo $item->beforeDisplayContent;
	//echo $images->images_fulltext;
	if (isset($images->image_fulltext) and !empty($images->image_fulltext)){
		echo '<img src="'.$images->image_fulltext.'" class="slick-image-fulltext img-responsive">';
	}
	echo '<div class="slick-caption-wrap">'.$item->introtext.'</div>';
	if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')):
		echo '<p><a class="readmore" href="'.$item->link.'">'.JTEXT::_('COM_CONTENT_READ_MORE_TITLE').'</a></p>';
	endif;
?>
</div>
