<?php
class TestcomponentsController extends AppController{
    public $components = array('Data');

    public function test1(){
        die('123');
        $data = $this->Data->randd(6);
        $this->set("data", $data);
    }
}
?>