<?php

/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-3-2016
 * Time: 10:52
 */
class Cijfers
{

    private $vak;
    private $cijfer;
    private $leerlingnummer;

    private static $cijfers = [];
    /**
     * Cijfers constructor.
     * @param $vak
     * @param $cijfer
     */
    public function __construct($leerlingnummer, $vak, $cijfer)
    {
        $this->vak = $vak;
        $this->cijfer = $cijfer;
        $this->leerlingnummer = $leerlingnummer;
    }

    /**
     * @return mixed
     */
    public function getVak()
    {
        return $this->vak;
    }

    /**
     * @return mixed
     */
    public function getCijfer()
    {
        return $this->cijfer;
    }

    /**
     * @return mixed
     */
    public function getLeerlingnummer()
    {
        return $this->leerlingnummer;
    }




    public static function addCijfer($leerlingnummer,$vak, $cijfer)
    {
        $c = new Cijfers($leerlingnummer, $vak, $cijfer);
        self::$cijfers[] = $c;
        return $c;
    }
    public static function getCijfers($leerlingnummer)
    {
        $hoi = [];
        foreach(self::$cijfers as $c){
            if($c->getLeerlingnummer() == $leerlingnummer){
                $hoi[] = $c;
            }
        }
        return $hoi;
    }
}