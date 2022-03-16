<?php
class Book extends AppModel {
    var $name = "Book";
    function validateBook(){
        $this->validate = array(
            "title" => array(
                "rule1" => array(
                    "rule" => "notBlank",
                    "message" => "Title khong duoc rong",
                )
            ),
            "Description" => array(
                "rule1" => array(
                    "rule" => "notBlank",
                    "message" => "Description khong duoc rong",
                )
            )
        );
        if($this->validates($this->validate))
            return true;
        else
            return false;
    }
}