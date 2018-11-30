<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;
use TastyRecipes\Controller\Controller;
  
  class Logout extends AbstractRequestHandler{
      
      protected function doExecute(){
        $this->session->invalidate();
        $this->session->restart();
        $this->session->set(Constants::CONTROLLER_KEY_NAME,new Controller());
        $this->session->set(Constants::USER_LOGGED_IN,null);
        return 'index';
    }

}
