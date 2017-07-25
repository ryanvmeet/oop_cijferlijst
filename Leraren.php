<?php

/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-3-2016
 * Time: 10:51
 */
class Leraren extends Persoon
{

    private $leerlingen = [];
    private $vak;

    private static $leraren = [];
    /**
     * Leraren constructor.
     * @param $naam
     * @param $geboortedatum
     * @param $vestiging
     * @param array $leerlingen
     * @param $vak
     */
    public function __construct($naam, $geboortedatum, $vestiging, array $leerlingen, $vak)
    {


        $this->leerlingen = $leerlingen;
        $this->vak = $vak;
        parent::__construct($naam, $geboortedatum, $vestiging);
}

    /**
     * @return array
     */
    public function getLeerlingen()
    {
        return $this->leerlingen;
    }

    /**
     * @return mixed
     */
    public function getVak()
    {
        return $this->vak;
    }

    public static function addLeraar($naam, $geboortedatum, $vestiging, array $leerlingen, $vak)
    {
        $leraar = new Leraren($naam, $geboortedatum, $vestiging, $leerlingen, $vak);

        self::$leraren[] = $leraar;
        return $leraar;
    }
    public static function getLeraar()
    {
        return self::$leraren;
    }

    public function setCijfer($leerlingnummer, $vak, $cijfer) {
        if($this->getVak() == $vak) {
            Cijfers::addCijfer($leerlingnummer, $vak, $cijfer);
        }
        else{
            var_dump("Dit is niet jouw vak");
        }
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