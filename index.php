<?php

require_once "inc/config.php";

if(isset($_SESSION['user_name'])) {
    require_once "app/dashboard.php";
} else { 
    require_once "app/index.php";
}

?>