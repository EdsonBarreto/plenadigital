<?php
    require_once("config/autoloader.php");

    $obj = new Pessoa();

    $obj->setName("Edson Silva Barreto");

    echo($obj->getName());

