<?php

// src/Entity/juego.php

namespace App\Entity;

class juego
{
    private $juego;
    private $plataforma;
    private $precio;
    private $tipo;

    public function __construct()
    {
        $this->juego = "left4";
        $this->plataforma = ["windows", "xbox", "mac"];
        $this->precio = 10;
        $this->tipo = "shoter"; 
    }

    public function getjuego()
    {
        return $this->juego;
    }

    public function getplataforma()
    {
        return $this->plataforma;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function gettipo()
    {
        return $this->tipo;
    }
}