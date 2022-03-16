<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    // public $components = array(
    //     'Auth'=>array(
    //         'userModel' => 'User',
    //         'fields' => array('username' => 'username', 'password' => 'password'),
    //         'loginAction' => array('admin'=>false, 'controller'=>'users', 'action'=>'login'),
    //         'loginRedirect' => array('admin'=>true, 'controller'=>'users', 'action'=>'index'),
    //         'authError' => 'Không thể truy cập',
    //         'authorize' => array('Controller'),
    //     )
    // );
    // function beforeFilter(){
    //     Security::setHash("md5");//mã hóa password là md5
    //     $this->set('current_user', $this->Auth->user());//sau khi đăng nhập thành công biến current_user là thông tin user đăng nhập
    // }
    // function isAuthorized(){
    //     return true;
    // }
}
