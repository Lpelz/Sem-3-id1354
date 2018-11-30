<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

 class AddComment extends AbstractRequestHandler{
   private $comment;
     
    public function setComment($comment){
        if(ctype_print($comment) && !empty($comment)){
        $this->comment = htmlentities($comment,ENT_QUOTES);
        }
    }
 
     protected function doExecute(){
       
        $controller = $this->session->get(Constants::CONTROLLER_KEY_NAME);
        $username = $this->session->get(Constants::USER_LOGGED_IN);
        $recipe = $this->session->get(Constants::RECIPE);
       
        $controller->addComment($username,$recipe,$this->comment);
        
        $this->addVariable('comments', $controller->getComments($recipe));
        
        return $recipe;           
                       
     }

 }
