<?php
use TastyRecipes\Util\Constants; 
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/stylesheet.css">
        <title>Home page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id = "home">
        <div class ="navbar">
        <ul>     
            <li><a class= "current" href="FirstPage"><img alt="Home" src="../../resources/images/homeicon.png"><p>Home page</p></a></li>
            <li><a href="ShowMeatballs"><img  alt="Meatballs" src="../../resources/images/meatballsicon.png"><p>Meatballs recipe</p></a></li>
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
        <br><br>
        <div class ="homepage">
            <h1>Welcome to Tasty Recipes site</h1> <br>
            <p>
                Here we have high class recipes for all kinds of tastes, right now
                we have two recipes to view. The recipes we have so far are a meatballs recipe 
                and a pancakes recipe, navigate to them with the menu at the top of the screen. We 
                have a calendar with days for specific meals that you should check out via the menu! 
            </p>
        </div>
    </body>
</html>


