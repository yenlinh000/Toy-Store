<?php
/**
 * @package Joomla template Framework
 * @author enginetemplates https://www.enginetemplates.com
 * @copyright Copyright (c) enginetemplates
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die();
?>

<ul class="list-group">
	<?php foreach ($this->link_items as &$item) : ?>
		<li class="list-group-item">
			<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid, $item->language)); ?>">
				<?php echo $item->title; ?></a>
		</li>
	<?php endforeach; ?>
</ul>
