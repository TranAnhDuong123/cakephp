<?php
class ValidsController extends AppController{
    public $name = "Valids";
    public $helpers = array('Html','Form');
    public $components = array('Session');

    public function vidu1(){
        $this->Valid->set($this->data);
        if($this->data){
            if($this->Valid->valid1() == true){
                $this->Sesion->setFlash("Du lieu hop le!");
            }
            else{
                $this->Session->setFlash("Du lieu khong hop le");
            }
        }
    }

    public function vidu4(){
        $this->Valid->set($this->data);
        if($this->data){
            if($this->Valid->valid4() == true){
                $this->Session->setFlash("Du lieu hop le");
            }
            else{
                $this->Session->setFlash("Du lieu khong hop le");
            }
        }
    }
 
}