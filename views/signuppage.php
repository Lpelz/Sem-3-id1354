<?php
use TastyRecipes\Util\Constants;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/stylesheet.css">
        <title>Signup page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id = "home">
        <div class ="navbar">
        <ul>      
            <li><a href="FirstPage"><img alt="Home" src="../../resources/images/homeicon.png"><p>Home page</p></a></li>
            <li><a href="ShowMeatballs"><img  alt="Meatballs" src="../../resources/images/meatballsicon.png"><p>Meatballs recipe</p></a></li>
            <li><a href="ShowPancakes"><img  alt="Pancakes" src="../../resources/images/pancakeicon.png"><p>Pancakes recipe</p></a></li>
            <li><a href="ShowCalendar"><img  alt="Calendar" src="../../resources/images/calendaricon.png"><p>Calendar</p></a></li>
            <li><a href="ShowLogin"><img  alt="Login" src="../../resources/images/loginicon.png"><p>Login page</p></a></li>
            <li><a class= "current" href="ShowSignup"><img  alt="Signup" src="../../resources/images/signupicon.png"><p>Signup page</p></a></li>
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
            <form class ="loginpage" action="Signup" method="post">
                <label>Enter Username:</label><br>
                <input name ="username" placeholder ="username" type = "text"><br>
                <label>Enter Password:</label><br>
                <input name = "password" placeholder="password" type = "text"> <br>
                <input type="submit" value="Sign Up">
                <br>
            </form>          
        </div>
    </body>
</html>



