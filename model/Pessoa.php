<?php
/**
 * Created by PhpStorm.
 * User: Edson
 * Date: 19/08/2017
 * Time: 20:05
 */

class Pessoa
{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}