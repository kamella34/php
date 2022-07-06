<?php

class Player
{
    private $nom;
    private $force;
    private $pv;
    private $armeId;

    public function __construct($nom,$force,$pv,$armeId)
    {
        $this->nom = $nom;
        $this->force = $force;
        $this->pv = $pv;
        $this->armeId = $armeId;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getForce()
    {
        return $this->force;
    }

    public function getPv()
    {
        return $this->pv;
    }

    public function getArmeId()
    {
        return $this->armeId;
    }
}