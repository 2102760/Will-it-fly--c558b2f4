<?php

require_once('Vogel.class.php');
require_once('Vis.class.php');
require_once('Freek.class.php');
require_once('Struisvogel.class.php');
require_once('Kraai.class.php');

echo '<hr>';
echo 'Vogel.class';
echo '<hr>';

$vogel = new Vogel();
$vogel->eet();
$vogel->eet();
$vogel->slaap();
$vogel->eet();
$vogel->wakker();
$vogel->praat();

echo '<br>';
echo '<hr>';
echo 'Vis.class';
echo '<hr>';

$vis = new Vis();
$vis->eet();
$vis->eet();
$vis->slaap();
$vis->eet();
$vis->wakker();
$vis->praat();

echo '<br>';
echo '<hr>';
echo 'Freek.class';
echo '<hr>';

$freek = new Freek();
$freek->geefEten('Vis.class');
$freek->geefEten('vogel');
$freek->geefEten('Kat');
$freek->brengNaarBed('Vis.class');
$freek->brengNaarBed('vogel');
$freek->brengNaarBed('Kat');

echo '<br>';
echo '<hr>';
echo 'Struisvogel.class';
echo '<hr>';

$struisvogel = new Struisvogel();
$struisvogel->eet();
$struisvogel->eet();
$struisvogel->slaap();
$struisvogel->eet();
$struisvogel->wakker();
$struisvogel->praat();


echo '<br>';
echo '<hr>';
echo 'Kraai.class';
echo '<hr>';

$struisvogel = new Kraai();
$struisvogel->eet();
$struisvogel->eet();
$struisvogel->slaap();
$struisvogel->eet();
$struisvogel->wakker();
$struisvogel->praat();
$struisvogel->vlieg();
