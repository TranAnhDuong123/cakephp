<?php
echo $this->form->create('Valid', array('action' => 'vidu1'));
echo $this->form->input('name');
echo $this->form->input('email');
echo $this->form->input('website');
echo $this->form->end('Check');
?>