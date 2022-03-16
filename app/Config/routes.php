<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

	Router::connect('/user-index', array('controller' => 'users', 'action' => 'index'));

	Router::connect('/login', array('controller' => 'users', 'action' => 'login', 'method' => 'POST'));
	Router::connect('/info', array('controller' => 'users', 'action' => 'info', 'method' => 'GET'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout', 'method' => 'GET'));

	Router::connect('/admin-login', array('controller' => 'users', 'action' => 'admin_login', 'method' => 'POST'));

	Router::connect('/index-book', array('controller' => 'books', 'action' => 'index'));
	Router::connect('/view-book', array('controller' => 'books', 'action' => 'view'));

	Router::connect('/vidu1-valid', array('controller' => 'valids', 'action' => 'vidu1'));
	Router::connect('/vidu4-valid', array('controller' => 'valids', 'action' => 'vidu4'));

	Router::connect('/test-component', array('controler' => 'testcomponents', 'action' => 'test1'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
