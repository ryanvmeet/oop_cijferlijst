<?php

/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-3-2016
 * Time: 10:51
 */
abstract class Persoon
{
    private $naam;
    private $geboortedatum;
    private $vestiging;

    /**
     * Persoon constructor.
     * @param $naam
     * @param $geboortedatum
     * @param $vestiging
     */
    public function __construct($naam, $geboortedatum, $vestiging)
    {
        $this->naam = $naam;
        $this->geboortedatum = $geboortedatum;
        $this->vestiging = $vestiging;
    }

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @return mixed
     */
    public function getGeboortedatum()
    {
        return $this->geboortedatum;
    }

    /**
     * @return mixed
     */
    public function getVestiging()
    {
        return $this->vestiging;
    }


    abstract function getInformation();
}