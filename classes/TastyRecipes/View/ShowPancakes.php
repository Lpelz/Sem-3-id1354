<?php

namespace TastyRecipes\View;
use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class ShowPancakes extends AbstractRequestHandler{
     
     protected function doExecute(){
     
      $controller = $this->session->get(Constants::CONTROLLER_KEY_NAME);
      $recipe = 'pancakes';
      
      $this->session->set(Constants::RECIPE,$recipe);
      $comments = $controller->getComments($recipe);
      $this->addVariable("comments", $comments); 

       return 'pancakes';
     }

}