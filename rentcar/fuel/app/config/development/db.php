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

/**
 * -----------------------------------------------------------------------------
 *  Database settings for development environment
 * -----------------------------------------------------------------------------
 *
 *  These settings get merged with the global settings.
 *
 */

return array(
    'default' => array(
        'type'        => 'pdo',
        'connection'  => array(
            'dsn'        => 'mysql:host=db;port=3306;dbname=rentcar',
            'username'   => 'root',         // docker-compose.yml で設定した root または別ユーザー
            'password'   => 'rootpassword', // docker-compose.yml のパスワード
        ),
        'charset'     => 'utf8',
        'profiling'   => true,
    ),
);
