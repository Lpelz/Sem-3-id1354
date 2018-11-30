<?php use TastyRecipes\Util\Constants; ?>

<li class="loggedin"><p><b><?php echo 'Logged in as: '.$this->session->get(Constants::USER_LOGGED_IN); ?></b></p>
<a href="Logout"><img src = ../../resources/images/logouticon.png> <p>Log out</p></a></li>

