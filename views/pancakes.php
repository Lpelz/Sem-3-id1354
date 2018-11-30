<?php
 use TastyRecipes\Util\Constants;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/stylesheet.css">
        <title>Pancakes recipe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class ="navbar">
        <ul>      
            <li><a href="FirstPage"><img alt="Home" src="../../resources/images/homeicon.png"><p>Home page</p></a></li>
            <li><a href="ShowMeatballs"><img  alt="Meatballs" src="../../resources/images/meatballsicon.png"><p>Meatballs recipe</p></a></li>
            <li><a class= "current" href="ShowPancakes"><img  alt="Pancakes" src="../../resources/images/pancakeicon.png"><p>Pancakes recipe</p></a></li>
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
        <h1>Pancakes recipe</h1>
        <img src ="../../resources/images/pancakesimage.jpg"
                 alt ="Pancakes image">
            <h2>Prep: 5 min | Total: 13 min | Portions: 2</h2>   
            <h3>Ingredients</h3>
            <ul>
            <li>2 cups flour</li>
            <li>2 tablespoons baking powder </li>
            <li>1 teaspoon kosher salt </li>
            <li>3 tablespoons dark brown sugar</li>
            <li>2 cups milk</li> 
            <li>5 tablespoons butter, melted</li>
            <li>2 eggs</li>
            </ul>
            <h3>Directions</h3>
            <ol>
                <li>In a large bowl whisk the flour, baking powder, salt and brown sugar together.</li>
                <li> In separate bowl whisk the eggs, vanilla and milk together. 
                </li>
                <li>Add the wet ingredients into the dry and mix until just combined. 
                    Lastly mix in the melted butter and stir until combined, the batter will be slightly lumpy.
                    Set the batter aside while you heat your griddle to medium-low heat.<br>
                    Melt a small pat of butter on the griddle and then scoop out 1/2 cup of pancake batter onto the hot griddle.
                </li>
               <li>Cook until the edges are set and bubbles form on top of the pancake. Flip and cook until browned.
               </li>
            </ol>
             </div>
        <br><br><hr> 
            <div class ="comments">
                   <h3> Comments </h3> <hr>

                 <?php include('viewComments.php') ?>
               <?php  if(($this->session->get(Constants::USER_LOGGED_IN)!= null))
                {
                include('writeComment.php');
                } 
                ?>
            </div>   
    </body>
</html>

