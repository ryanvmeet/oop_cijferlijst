<?php

/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-3-2016
 * Time: 10:51
 */
class Vestiging
{

    private $schoolnaam;
    private $straatnaam;
    private $huisnummer;
    private $leraren = [];
    private $leerlingen = [];

    private static $vestiging = [];

    /**
     * Vestiging constructor.
     * @param $schoolnaam
     * @param $straatnaam
     * @param $huisnummer
     * @param array $leraren
     * @param array $leerlingen
     */
    public function __construct($schoolnaam, $straatnaam, $huisnummer, array $leraren, array $leerlingen)
    {
        $this->schoolnaam = $schoolnaam;
        $this->straatnaam = $straatnaam;
        $this->huisnummer = $huisnummer;
        $this->leraren = $leraren;
        $this->leerlingen = $leerlingen;
    }

    public function setLeraar($leraren){
        $this->leraren[] = $leraren;
    }

    /**
     * @return mixed
     */
    public function getSchoolnaam()
    {
        return $this->schoolnaam;
    }

    /**
     * @return mixed
     */
    public function getStraatnaam()
    {
        return $this->straatnaam;
    }

    /**
     * @return mixed
     */
    public function getHuisnummer()
    {
        return $this->huisnummer;
    }

    /**
     * @return array
     */
    public function getLeraren()
    {
        return $this->leraren;
    }

    /**
     * @return array
     */
    public function getLeerlingen()
    {
        return $this->leerlingen;
    }

    public static function addVestiging($schoolnaam, $straatnaam, $huisnummer, array $leraren, array $leerlingen)
    {
        $vest = new Vestiging($schoolnaam, $straatnaam, $huisnummer, $leraren, $leerlingen);
        self::$vestiging[] = $vest;
        return $vest;
    }
    public static function getVestiging()
    {
        return self::$vestiging;
    }
    /**
     * Vestiging constructor.
     * @param $schoolnaam
     * @param $straatnaam
     * @param $huisnummer
     */



}