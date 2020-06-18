<?php

require_once('Dier.class.php');

class Vogel extends Dier
{
    public $sleeping = false;
    public $timesEat = 0;

    public function praat()
    {
        echo 'Tjilp Tjilp!';
    }
}