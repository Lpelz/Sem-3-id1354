<?php
 use TastyRecipes\Util\Constants;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/stylesheet.css">
        <title>Meatballs recipe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class ="navbar">
        <ul>      
            <li><a href="FirstPage"><img alt="Home" src="../../resources/images/homeicon.png"><p>Home page</p></a></li>
            <li><a class= "current" href="ShowMeatballs"><img  alt="Meatballs" src="../../resources/images/meatballsicon.png"><p>Meatballs recipe</p></a></li>
            <li><a href="ShowPancakes"><img  alt="Pancakes" src="../../resources/images/pancakeicon.png"><p>Pancakes recipe</p></a></li>
            <li><a href="ShowCalendar"><img  alt="Calendar" src="../../resources/images/calendaricon.png"><p>Calendar</p></a></li>
            <li><a href="ShowLogin"><img  alt="Login" src="../../resources/images/loginicon.png"><p>Login page</p></a></li>
            <li><a href="ShowSignup"><img  alt="Signup" src="../../resources/images/signupicon.png"><p>Signup page</p></a></li>

      <?php
        if(($this->session->get(Constants::USER_LOGGED_IN)!= null))
        {
              include('loggedin.php');
        }
        ?>
        </ul>
        </div>
        <div class ="recipe">
        <h1>Meatballs recipe</h1>
        <img src ="../../resources/images/meatballspicture.jpg"
                 alt ="Meatballs image">
            <h2>Prep: 15 min | Total: 40 min | Portions: 4</h2>   
            <h3>Ingredients</h3>
            <ul>
            <li>1 lb lean ground beef</li>
            <li>1/2 cup Progresso Italian-style breadcrumbs </li>
            <li>1/4 cup milk </li>
            <li>1/2 teaspoon salt</li>
            <li>1/4 teaspoon pepper</li>
            <li>1 small onion</li>
            <li>1 egg</li>
            </ul>
            <h3>Directions</h3>
            <ol>
                <li> Heat oven to 400°F. Line 13x9-inch pan with foil; spray with cooking spray.</li>
                <li> In large bowl, mix all ingredients. 
                    Shape mixture into 24 (1 1/2-inch) meatballs.<br> Place 1 inch apart in pan. <br>
                </li>
                <li> Bake uncovered 18 to 22 minutes or until temperature reaches 160°F and no longer pink in center.
                </li>
            </ol>
             </div>
        <br><br> <hr>
            <div class ="comments">
                    <h3> Comments </h3> <hr>

                 <?php include('viewComments.php') ?>           
                 <?php 
                 if(($this->session->get(Constants::USER_LOGGED_IN)!= null))
                {
                include('writeComment.php');
                } 
                ?>
            </div>   
    </body>
</html>

