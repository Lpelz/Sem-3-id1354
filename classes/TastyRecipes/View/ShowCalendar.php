<?php

namespace TastyRecipes\View;
use Id1354fw\View\AbstractRequestHandler;

 class ShowCalendar extends AbstractRequestHandler{
     
    protected function doExecute(){      
       return 'calendar';
    }

}
