<?php
class Valid extends AppModel {
    public $useTable = false;
    public $validate = array();
    
    public function valid1(){
        $this->validate = array(
            "name" => array(
                "dk1" => array(
                    "rule" => "notBlank",
                    "message" => "Name không rỗng !",
                ),
                "dk2" => array(
                    "rule"=> array('lengthBetween', 6, 10),
                    "message" => "Name trong khoảng 6 đến 10 kí tự"
                ), 
      
            ),
            "email" => array(
                "dk1" => array(
                    "rule" => "notBlank",
                    "message" => "Email không rỗng !",
                ),
                "dk2" => array(
                    'rule' => array('email', true),
                    "message" =>"Vui lòng nhập đúng định dạng",
                    ),
            ),
            "website" => array(
                "dk1" => array(
                    "rule" => "notBlank",
                    "message" => "Website không rỗng !",
                ),
                "dk2" =>array(
                    "rule" =>"url",
                    "message" => "Vui lòng nhập đúng định dạng website",
                )
            ),
        );
        if($this->validates($this->validate))
            return true;
        else    
            return false;
    }

    public function valid4(){
        $this->validate = array(
            "username" => array(
                "rule" => 'checkUsername',
                "message" => "Username khong chinh xac",
            ),
        );
        if($this->validates($this->validate))
            return true;
        else
            return false;
    }

    public function checkUsername(){
        if($this->data['Valid']['username'] == "nongdanit"){
            return true;
        }
        else{
            return false;
        }
    }
}