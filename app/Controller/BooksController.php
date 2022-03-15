<?php
class BooksController extends AppController{
    public $name = "Books";
    var $helpers = array('Form','Paginator','Html');

    public function index(){
        //$data = $this->Book->find("all");
        $this->paginate = array(
            'limit' => 4,
            'order' => array('id' => 'desc')
        );
        $data = $this->paginate("Book");
        $this->set("data",$data);
    }

    public function view(){
        $conditions = array();
        $data = array();
        if(!empty($this->passedArgs)){
            if(isset($this->passedArgs['Book.title'])){
                $title = $this->passedArgs['Book.title'];
                $conditions[] = array('Book.title like' => "%$title%");
                $data['Book']['title'] = $title;
            }
            if(isset($this->passedArgs['Book.description'])){
                $description = $this->passedArgs['Book.description'];
                $conditions[] = array("OR" => array('Book.description like' => "%$description%"));
                $data['Book']['description'] = $description;
            }
            $this->paginate = array(
                'linit' => 2,
                'order' => array('id' => 'desc')
            );
            $this->data = $data ;
            $post = $this->paginate("Book",$conditions);
            $this->set("posts",$post);
        }
    }

    public function search(){
        $url['action'] = 'view';
        foreach($this->data as $key=>$value){
            foreach($value as $key2=>$value2){
                $url[$key.'.'.$key2] = $value2;
            }
        }
        $this->redirect($url, null, true);
    }
}