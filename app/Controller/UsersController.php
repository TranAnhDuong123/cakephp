<?php
class UsersController extends AppController{
    var $uses = array('User');
    public $name = "Users"; 

    public function index(){
        $data = $this->User->find("all");
        $this->set("data",$data);
    }
}