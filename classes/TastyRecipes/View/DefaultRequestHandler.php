<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;
use TastyRecipes\Controller\Controller;

class DefaultRequestHandler extends AbstractRequestHandler{
    
    protected function doExecute(){
        $this->session->restart();
        $this->session->set(Constants:: CONTROLLER_KEY_NAME,new Controller());
        \Header('Location: /Sem3/TastyRecipes/View/FirstPage');
    }

}

