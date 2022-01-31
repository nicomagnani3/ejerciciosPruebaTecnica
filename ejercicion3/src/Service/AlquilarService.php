<?php

namespace App\Service;

use App\Entity\Alquilar;
use Exception;
use DateTime;
use InvalidArgumentException;

class AlquilarService
{
    public function alquilarBicicleta($tipoBicicleta, $bicicleta, $cliente, $desde, $hasta, $esBase, $connection)
    {
        try {
            if ($cliente == NULL) {
                throw new InvalidArgumentException('No se selecciono un cliente un valido', 500);
            }
            $precio= $this->calcularPrecio($bicicleta, $desde, $hasta,$esBase);
            $alquilar = $this->setAlquilarBicicleta($tipoBicicleta, $bicicleta, $cliente, $desde, $hasta, $esBase, $connection);
            $connection->persist($alquilar);
            $connection->flush();
            $bicicleta->setDisponible(0);
            $this->setPuntajeCliente($cliente,$bicicleta->getPuntaje(),$connection);   
            $connection->persist($bicicleta);
            $connection->flush();           
            $mensaje = "Se alquilo con exito la bicicleta, el precio de la misma es : ".$precio;
            return  $mensaje;
        } catch (Exception $ex) {
            return "Ocurrio un error - Error: {$ex->getMessage()}";
        }
    }
    private function setPuntajeCliente($cliente,$puntaje,$connection){
        try {
            $cliente->setPuntaje($cliente->getPuntaje()+$puntaje);
            $connection->persist($cliente);
            $connection->flush();
        } catch (\Throwable $th) {
            return "Ocurrio un error - Error: {$th->getMessage()}";
        }
    }
    private function setAlquilarBicicleta($tipoBicicleta, $bicicleta, $cliente, $desde, $hasta, $esBase, $connection)
    {
        try {
            $desde = new DateTime($desde);
            $hasta = new DateTime($hasta);
            $alquilar = new Alquilar();
            $alquilar->setDesde($desde);
            $alquilar->setHasta($hasta);
            $alquilar->setEsBase($esBase);
            $alquilar->setCliente($cliente);
            if ($tipoBicicleta == 'bici_normal') {
                $alquilar->setBiciNormal($bicicleta);
            } else if ($tipoBicicleta == 'bici_antigua') {
                $alquilar->setBiciAntigua($bicicleta);
            } else {
                $alquilar->setBiciElectrica($bicicleta);
            }
            return $alquilar;
        } catch (Exception $ex) {
            return "Ocurrio un error - Error: {$ex->getMessage()}";
        }
    }

    public function diasAdicionales($alquiler, $fecha_devolucion)
    {
        try {           
            $dias_extra = $this->calcularDias($alquiler->getHasta(),$fecha_devolucion);          
            return $dias_extra;

        } catch (\Throwable $ex) {
            return "Ocurrio un error - Error: {$ex->getMessage()}";
        }
    }  
    private function calcularDias($hasta, $devolucion)
    {
        try {                 
            $devolucion =  $devolucion == NULL ? new DateTime() : new DateTime($devolucion);   
            $dias = $hasta->diff($devolucion);
            return $dias->days;
        } catch (\Throwable $th) {           
            return "Ocurrio un error - Error: {$th->getMessage()}";
        }
    }
    private function calcularPrecio($bicicleta, $desde, $hasta,$esBase)
    {
        try {
            $cantDias = $this->calcularDias(new Datetime($hasta), $desde);           
            return $bicicleta->calcularPrecioAlquiler($cantDias,$esBase);
        } catch (\Throwable $th) {
            return "Ocurrio un error - Error: {$th->getMessage()}";
        }
    }

    public function calcularExtraAndResponse($bicicleta,$dias,$esBase,$connection){
        try {            
            $bicicleta->setDisponible(1);
            $connection->persist($bicicleta);
            $connection->flush();
            if ($esBase){
                return 'Se devolvio la bicicleta, el aidicional es de :'.$bicicleta->getAdicionalBase($dias); 
            }
            return 'Se devolvio la bicicleta, el aidicional es de :'.$bicicleta->getAdicionalPremium($dias); 
        } catch (\Throwable $th) {
            return "Ocurrio un error - Error: {$th->getMessage()}";
        }
    }
}
