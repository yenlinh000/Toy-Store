<?php
/**
 * @package Joomla template Framework
 * @author enginetemplates https://www.enginetemplates.com
 * @copyright Copyright (c) enginetemplates
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die();

?>
<?php if ($this->error) : ?>
	<div class="error">
		<?php echo $this->escape($this->error); ?>
	</div>
<?php endif; ?>
