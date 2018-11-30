<?php
use TastyRecipes\Util\Constants; 
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/stylesheet.css">
        <title>Calendar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class ="navbar">
        <ul>      
            <li><a href="FirstPage"><img alt="Home" src="../../resources/images/homeicon.png"><p>Home page</p></a></li>
            <li><a href="ShowMeatballs"><img  alt="Meatballs" src="../../resources/images/meatballsicon.png"><p>Meatballs recipe</p></a></li>
            <li><a href="ShowPancakes"><img  alt="Pancakes" src="../../resources/images/pancakeicon.png"><p>Pancakes recipe</p></a></li>
            <li><a class= "current" href="ShowCalendar"><img  alt="Calendar" src="../../resources/images/calendaricon.png"><p>Calendar</p></a></li>
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
           <ul class="weekdays">
              <li>Monday</li>
              <li>Tuesday</li>
              <li>Wednesday</li>
              <li>Thursday</li>
              <li>Friday</li>
              <li>Saturday</li>
              <li>Sunday</li>
            </ul>
          <ul class="days"> 
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li><div>7</div>
              <div><a href="ShowPancakes"><img alt = "Pancakes" src ="../../resources/images/pancakesimage.jpg"></a>
            </div> 
            </li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li><div>16</div>
              <div><a href="ShowMeatballs"><img alt = "Meatballs" src ="../../resources/images/meatballspicture.jpg"></a>
            </div> 
            </li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>
          </ul>       
    </body>
</html>


