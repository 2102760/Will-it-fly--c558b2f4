<?php


abstract class Dier
{
    abstract protected function praat();

    public function eet()
    {
        if (!$this->sleeping) {
            $this->timesEat++;
            echo "Ik heb al {$this->timesEat} keer gegeten<br>";
        } else {
            echo "Ik kan niet slapen tijdens het eten.<br>";
        }
    }

    public function slaap()
    {
        $this->sleeping = true;
        echo 'zZz zZz<br>';
    }

    function wakker()
    {
        $this->sleeping = false;
        echo 'Goedenmorgen!<br>';
    }
}