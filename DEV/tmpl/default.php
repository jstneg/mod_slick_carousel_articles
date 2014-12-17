<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

//$doc->addScript($doc->baseurl.'/modules/mod_slick_cararousel_articles/js/jquery-1.11.1.min.js', 'text/javascript', false);
$doc->addScript($doc->baseurl.'/modules/mod_slick_carousel_articles/js/slick.js', 'text/javascript', false);

$doc->addStyleSheet($doc->baseurl.'/modules/mod_slick_carousel_articles/css/slick_1.css');


$doc->addScriptDeclaration('
jQuery(document).ready(function() {
	jQuery("#slick-'.$module->id.'").slick({'."\n".
		(($autoplay)?("autoplay:true,\n\t\t"):('')).
		'autoplaySpeed: '.$interval.",\n\t\t".
		((!$loopslides)?("infinite:false,\n\t\t"):('')).
		((!$showarrows)?("arrows:false,\n\t\t"):('')).
		(($showpagination)?("dots:true,\n\t\t"):('')).
		'speed: '.$speed.'
	});
});
');

?>
<div id="slick-<?php echo $module->id; ?>" class="slick-carousel<?php echo (($showarrows)?(" has-arrows"):('')); ?>" >
<?php /*
<?php if($showcontrols){ ?>
<ol class="carousel-indicators">
<?php
foreach ($list as $key=>$value) :
	echo '<li data-target="#carousel-articles-'.$module->id.'" data-slide-to="'.$key.'"';
	echo ($key==0)?(' class="active"'):('');
	echo '></li>';
endforeach;
?>
</ol>
<?php } ?>
*/ ?>

<?php
$firstItem = true;
foreach ($list as $item) :
	require JModuleHelper::getLayoutPath('mod_slick_carousel_articles', '_item');
	$firstItem = false;
endforeach;
?>

<?php /*
<?php if($showprev){ ?>
<a class="left carousel-control" href="#carousel-articles-<?php echo $module->id; ?>" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<?php } 
if($shownext){?>
<a class="right carousel-control" href="#carousel-articles-<?php echo $module->id; ?>" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
<?php } ?>
*/ ?>

</div>
