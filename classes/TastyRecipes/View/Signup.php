<?php
namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class Signup extends AbstractRequestHandler {
    private $username;
    private $password;
    
    public function setUsername($username){
        if(ctype_print($username) && !empty($username)){
        $this->username = htmlentities($username, ENT_QUOTES);
        }
    }
    
    public function setPassword($password){
         if(ctype_print($password) && !empty($password)){
         $this->password = htmlentities($password, ENT_QUOTES);
         }
    }
    
    protected function doExecute(){
        $controller = $this->session->get(Constants::CONTROLLER_KEY_NAME);
        $controller->signup($this->username, $this->password);
  
            return 'index';         
    }
}
