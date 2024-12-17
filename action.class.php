<?php

class Action{
public $db,$session,$custom,$view,$helper;
public function onlyForAuthUser() {
    if (!isset($_SESSION['Auth']) || $_SESSION['Auth']['status'] !== true) {
        error_log("Unauthorized access attempt, redirecting to login");
        $this->helper->redirect('login');
    }
}
function onlyForUnauthUser(){
    if($this->session->get('Auth')) $this->helper->redirect('home');
}
function user_id(){
    return $_SESSION['Auth']['data']['id']??'';
}
function __construct(){
    $this->db=new Database;
    $this->custom=new Custom;
    $this->session=new Session;
    $this->view=new View;  
    $this->helper=new Helper;
}
}

