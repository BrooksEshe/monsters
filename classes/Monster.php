<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/6/2019
 * Time: 11:18 AM
 */

class Monster
{
    private $_name;

    function __construct($name = 'None')
    {
        $this->_name = $name;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function getName()
    {
        return $this->_name;
    }

    function attack()
    {
        echo $this->_name . " is attacking.";
    }


}