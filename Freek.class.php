<?php

require_once('Vis.class.php');
require_once('Vogel.class.php');

class Freek
{
    public function __construct()
    {
        $this->vis = new Vis();
        $this->vogel = new Vogel();
    }

    public function geefEten($dier)
    {
        switch (strtolower($dier)) {
            case 'vis':
                $this->vis->eet();
                break;
            case 'vogel':
                $this->vogel->eet();
                break;
            default:
                echo '<b>Dier niet gevonden </b>';
        }
    }

    public function brengNaarBed($dier)
    {
        switch (strtolower($dier)) {
            case 'vis':
                $this->vis->slaap();
                break;
            case 'vogel':
                $this->vogel->slaap();
                break;
            default:
                echo '<b>Dier niet gevonden </b>';
        }
    }
}