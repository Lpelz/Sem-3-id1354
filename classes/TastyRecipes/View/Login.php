<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class Login extends AbstractRequestHandler{
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
           
        $loginResult = $controller->login($this->username, $this->password);
        
        if($loginResult){
            $this->session->set(Constants::USER_LOGGED_IN,$this->username);
            return 'index';
        }
        else{
            $this->session->set(Constants::INVALID_LOGIN_MESSAGE,'invalid username or password');
            return 'loginpage';
        }
    }

}

