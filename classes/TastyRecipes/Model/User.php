<?php

namespace TastyRecipes\Model;

use TastyRecipes\Integration\UserDAO;

class User{
    private $userDAO;
    private $username;
    private $password;
    
   public function __construct($username,$password){
    $this->userDAO = new UserDAO();
    $this->username = $username;
    $this->password = $password;
   }
   public function checkLogin($password){
       
           if (password_verify($password, $this->password)) {
                   return true;
           }
           else{
                   return false;
           }        
   }
   public function signup(){
        $hashPassword = password_hash($this->password, PASSWORD_DEFAULT);    
      
        $this->userDAO->createUser($this->username, $hashPassword);
    }
}