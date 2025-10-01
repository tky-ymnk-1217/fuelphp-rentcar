<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

return array(
	/**
	 * -------------------------------------------------------------------------
	 *  Default route
	 * -------------------------------------------------------------------------
	 *
	 */

	'_root_' => 'welcome/index',

	/**
	 * -------------------------------------------------------------------------
	 *  Page not found
	 * -------------------------------------------------------------------------
	 *
	 */

	'_404_' => 'welcome/404',

	/**
	 * -------------------------------------------------------------------------
	 *  Example for Presenter
	 * -------------------------------------------------------------------------
	 *
	 *  A route for showing page using Presenter
	 *
	 */

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),

	// 管理画面ログイン
	'admin/login' => 'admin/login/index',
	'admin/logout' => 'admin/login/logout',

	// 管理画面ダッシュボード
	'admin/dashboard' => 'admin/dashboard/index',

	// 管理者管理
	'admin/admins' => 'admin/admins/index',
	'admin/admins/create' => 'admin/admins/create',
	'admin/admins/delete/(:num)' => 'admin/admins/delete/$1',
);
