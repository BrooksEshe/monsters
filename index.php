<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//include classes
require ('classes/Monster.php');
require ('classes/Vampire.php');
require ('classes/Warewolf.php');

//define a default route
$f3->route('GET /', function(){
    $monster = new Monster("Fred");
    $vampire = new Vampire("Doug");
    $werewolf = new Warewolf("Chuck");

    //$firstAttack = $vampire->attack();
    //$f3->set('vampire',$firstAttack);

    echo $monster->attack(). "<br>";
    echo $vampire ->attack(). "<br>";
    echo $vampire->attack(). "<br>";
    echo $werewolf->attack(). "<br>";

    $template = new Template();
    echo $template->render('views/home.html');
});

$f3->run();