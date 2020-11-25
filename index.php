<?php

if (!empty($_GET["url"]))
{
    $url = $_GET["url"];
    $url = "App/Controller/" . $url . "controller.php";
}
else 
{
    $url = "page1";    
}
require $url;

?>