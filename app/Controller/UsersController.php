<?php
class UsersController extends AppController{
    var $name = "Users";
    var $helpers = array("Html","Session");
    var $components = array("Session");
    
    function beforeFilter(){
        parent::beforeFilter();
    }
    //DANG NHAP DUNG SESSION
    public function index(){
        $data = $this->User->find("all");
        $this->set("data",$data);
    }
    // public function login(){
    //     $error="";
    //     if(isset($_POST['ok'])){
    //         $username = $_POST['username'];
    //         $password = md5($_POST['password']);
    //         if($this->User->checkLogin($username,$password)){
    //             $this->Session->write("session",$username); 
    //             $this->redirect("info");
    //         }else{
    //             $error = "Tên đăng nhập và mật khẩu không đúng";
    //         }
    //     }    
    //     $this->set("error",$error);
    // }
    // public function info(){
    //     if($this->Session->check("session")){
    //        $username = $this->Session->read('session');
    //        $this->set("name", $username);
    //     }else{
    //        $this->render("login");
    //     }
    // } 
    // public function logout(){
    //     $this->Session->delete('session'); 
    //     $this->redirect("login"); 
    // }

    //DANG NHAP DUNG AUTH
    public function admin_index(){
        $data = $this->User->find("all");
        $this->set("data",$data);
    }

    public function login(){
        if($this->request->is('post')){
            if($this->Auth->login()){
                if($this->Auth->user('level') == 1){
                    $this->redirect("admin/user/index");
                }
                else{
                    $this->redirect("/users/index");
                }
            }
            else{
                $this->Session->setFlash('Usename or pass fail','default',array('class' => "alert alert-success"));
            }
        }
    }

    public function logout(){
        $this->redirect($this->Auth->logout());
    }
}