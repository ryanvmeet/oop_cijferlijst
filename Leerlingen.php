<?php

/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-3-2016
 * Time: 10:51
 */
class Leerlingen extends Persoon
{

    private $leerlingnummer;
    private $cijferlijst = [];


    private static $leerlingen = [];
    /**
     * Leerlingen constructor.
     * @param $naam
     * @param $geboortedatum
     * @param $vestiging
     * @param $leerlingnummer
     * @param array $cijferlijst
     */
    public function __construct($naam, $geboortedatum, $vestiging, $leerlingnummer, array $cijferlijst)
    {

        $this->leerlingnummer = $leerlingnummer;
        $this->cijferlijst = $cijferlijst;
        parent::__construct($naam, $geboortedatum, $vestiging);
    }

    /**
     * @return mixed
     */
    public function getLeerlingnummer()
    {
        return $this->leerlingnummer;
    }

    /**
     * @return array
     */
    public function getCijferlijst()
    {
        return $this->cijferlijst;
    }

    /**
     * @return array
     */

    public static function getExistingLeerling($leerlingnummer)
    {
        foreach(self::$leerlingen as $leerling) {
            if($leerling->getLeerlingnummer() == $leerlingnummer) {
                return $leerling;
            }
        }
        return false;
    }

    public static function getLeerlingen()
    {
        return self::$leerlingen;
    }

    public static function addLeerling($naam, $geboortedatum, $vestiging, $leerlingnummer, array $cijferlijst)
    {
        $leerling = self::getExistingLeerling($leerlingnummer);
        if(!$leerling) {
            $leerling = new Leerlingen($naam, $geboortedatum, $vestiging, $leerlingnummer, $cijferlijst);
            self::$leerlingen[] = $leerling;

        }
        return $leerling;
    }
    public static function getLeerling()
    {
        return self::$leerlingen;
    }

    public function getInformation()
    {
        $array = [
            parent::getNaam(),
            parent::getGeboortedatum(),
            parent::getVestiging()];
        return $array;
    }
}