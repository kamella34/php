<?php

class Arme
{
    private $id;
    private static $tab = [];
    private $nom;
    private $nombresDegats;

    public function __construct($nom,$nombresDegats)
    {
        $this->id = count(self::$tab) + 1;
        self::$tab[] = $this;
        $this->nom = $nom;
        $this->nombresDegats = $nombresDegats;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getNombresDegats()
    {
        return $this->nombresDegats;
    }
    public static function getTab($id)
    {
        return self::$tab[$id-1];
    }
}