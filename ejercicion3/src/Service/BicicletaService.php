<?php

namespace App\Service;
class BicicletaService
{
 
    public function getMensajeBicisDisponibles(Array $antigua,Array $normal,Array $electrica)
    {
        $cantidadAntigua= count($antigua);
        $cantidadNormal= count($normal);
        $cantidadElectrica= count($electrica);
        $message = 
            ' Antiguas: '.$cantidadAntigua.
            ' Normales: '.$cantidadNormal.
            ' Electricas: '.$cantidadElectrica;

        return $message;
    }
}