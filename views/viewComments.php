<?php
 use TastyRecipes\Util\Constants;
       
    foreach($comments as $comment){   
    if($this->session->get(Constants::USER_LOGGED_IN)!= null && $comment->getUsername() == $this->session->get(Constants::USER_LOGGED_IN)){    
          echo '<li>' . $comment->getComment() .
          '<form class="delete" action="DeleteComment" method="post"><button type="submit">
           <img src="../../resources/images/deletionicon.png"></button>
           <input type="hidden" name="timestamp" value="'
          .$comment->getTimestamp().'"></form><hr><p>'. 
          ' Written by <b>' .$comment->getUsername() . '</b></p></li>';
    }
    else{
           echo '<li>' . $comment->getComment() . '<hr><p>'. 
            ' Written by <b>' . $comment->getUsername() . '</b></p></li>';
        }

    }
