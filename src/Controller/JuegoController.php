<?php

// src/Controller/juegoController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\juego;

class juegoController
{
    /**
     * @Route("/lucky/juego", name="lucky_juego")
     */
    public function juego(): Response
    {
        $juego = new juego();

        // HTML para mostrar la información del plato
        $html = '<html><body>';
        $html .= '<h1>juego: ' . $juego->getjuego() . '</h1>';
        $html .= '<p>plataforma:</p>';
        $html .= '<ul>';
        foreach ($juego->getplataforma() as $plataforma) {
            $html .= '<li>' . $plataforma . '</li>';
        }
        $html .= '</ul>';
        $html .= '<p>Precio: $' . $juego->getPrecio() . '</p>';
        $html .= '</body></html>';

        return new Response($html);
    }
}

