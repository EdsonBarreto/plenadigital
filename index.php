<?php
    require_once("config/autoloader.php");

    $obj = new Pessoa();

    $obj->setName("Edson");

    echo($obj->getName());

