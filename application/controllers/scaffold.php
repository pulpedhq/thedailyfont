<?php
class Scaffold extends Controller {

       function Scaffold()
       {
            parent::Controller();

            $this->load->scaffolding('posts');
       }
}
