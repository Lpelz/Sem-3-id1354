<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

 class DeleteComment extends AbstractRequestHandler{
   private $timestamp;
     
    public function setTimestamp($timestamp){
        if(ctype_print($timestamp) && !empty($timestamp)){
        $this->timestamp = htmlentities($timestamp,ENT_QUOTES);
        }
    }
    
     protected function doExecute(){
         
        $controller = $this->session->get(Constants::CONTROLLER_KEY_NAME);
        $recipe = $this->session->get(Constants::RECIPE);
         
        $controller->deleteComment($this->timestamp);
      
        $this->addVariable('comments', $controller->getComments($recipe));
           
        return $recipe;
     }    
 }

