<?php
/**
 * @package Joomla template Framework
 * @author enginetemplates https://www.enginetemplates.com
 * @copyright Copyright (c) enginetemplates
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die();

$cookieLogin = $this->user->get('cookieLogin');

if (!empty($cookieLogin) || $this->user->get('guest'))
{
	// The user is not logged in or needs to provide a password.
	echo $this->loadTemplate('login');
}
else
{
	// The user is already logged in.
	echo $this->loadTemplate('logout');
}
