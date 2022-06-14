<?php

abstract class Animal
{

    public $age, $nom;

    public function __construct()
    {
        echo "un animal vient detre cree";
        $this->age = 10;
    }

    public function manger()
    {
        echo "je mange";
    }

    abstract public function cri();

}

class Chien extends Animal
{

    public $nombre_ecailles;

    public function __construct()
    {
        parent::__construct();
        $this->nombre_ecailles = 1000;
    }

    public function cri()
    {
        echo "moi j'aboie";
    }

}

$chien = new Chien();
$chien->manger();
$chien->cri();

?>