<?php

require_once('Vliegbrevet.class.php');

class Kraai extends Vogel implements Vliegbrevet
{
    public function vlieg()
    {
        echo 'Liftoff... Flap Flap <br>';
    }
}