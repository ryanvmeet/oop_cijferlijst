<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-3-2016
 * Time: 11:12
 */

require "Cijfers.php";
require "Persoon.php";
require "Leerlingen.php";
require "Leraren.php";
require "Vestiging.php";

$cijfer = Cijfers::addCijfer("3494730","rekenen", 7);
$cijfer2 = Cijfers::addCijfer("3594730","nederlands", 3);
$vestiging = Vestiging::addVestiging("hoi", "Posthumalaan", 20, Leraren::getLeraar(), Leerlingen::getLeerling());
$leerling = Leerlingen::addLeerling("joost", 3/7/1994, Vestiging::getVestiging(), "3594730", Cijfers::getCijfers("3594730") );

$leraar =  Leraren::addLeraar("Kees", "een keer", Vestiging::getVestiging(), Leerlingen::getLeerling(), "rekenen");

$leraar->setCijfer("3594730","Engels", 8);
$leraar->setCijfer("3594730","rekenen", 8);

var_dump($leerling);

//var_dump($leraar->getInformation());
