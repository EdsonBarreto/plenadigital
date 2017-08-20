<?php
    require_once("config/autoloader.php");

    $obj = new Pessoa();

    $obj->setName("Aplicação Plena Digital");

    echo($obj->getName());

