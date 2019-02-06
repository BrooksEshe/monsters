<?php
/**
 * Created by PhpStorm.
 * User: brook
 * Date: 2/6/2019
 * Time: 11:23 AM
 */

class Vampire extends Monster
{
    private $_victims;

    function __construct($name = 'None')
    {
        parent::__construct($name);
        $this->_victims = 0;
    }

    function attack()
    {
        echo $this->getName() . " has attacked " . $this->getVictims() . " victims";
        $this->_victims++;
    }

    function getVictims()
    {
        return $this->_victims;
    }
}