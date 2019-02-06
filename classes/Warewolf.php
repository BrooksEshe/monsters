<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/6/2019
 * Time: 11:28 AM
 */

class Warewolf extends Monster
{
    private $_transform;

    function __construct($name = 'None')
    {
        parent::__construct($name);
        $this->_transform = false;
    }

    function attack()
    {
        echo $this->getName() . " has attacked!";
        $this->_transform = true;
    }

    function getTransform()
    {
        return $this->_victims;
    }
}