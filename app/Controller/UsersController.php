<?php
class UsersController extends AppController{
    var $name = "Users";
    var $helpers = array("Html");
    var $component = array("Session");

    public function index(){
        $data = $this->User->find("all");
        $this->set("data",$data);
    }

    function login(){
        $error="";
        if(isset($_POST['ok'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            if($this->User->checkLogin($username,$password)){
                $this->Session->write("session",$username); //ghi session
                $this->redirect("info");//đăng nhập thành công chuyển trang thông tin
            }else{
                
            }
        }    
        $this->set("error",$error);
    }
    function info(){
        if($this->Session->check("session")){//kiểm tra có session hay không
           $username = $this->Session->read('session');
           $this->set("name", $username);
        }else{
           $this->render("login");
        }
    }
       
    function logout(){
        $this->Session->delete('session'); //xóa session
        $this->redirect("login"); //chuyển trang login
    }
}