<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Cliente;
use App\Entity\BiciAntigua;
use App\Entity\BiciNormal;
use App\Entity\BiciElectrica;
use App\Entity\Alquilar;
use Exception;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\AlquilarService;
/**
 * Class AlquilarController
 *
 * @Route("/api/alquilars")
 */
class AlquilarController  extends AbstractController
{
    private $alquilarService;
    public function __construct(AlquilarService $alquilarService)
    {
        $this->alquilarService = $alquilarService;
    }
    /**
     * Alquilar una bici determinada
     * se calcula el precio de alquiler de la misma
     * se marca la bici como no disponible
     * se suman los puntos de bonificacion al cliente
     * 
     * @Route("", name="alquilar_bicicleta", methods={"POST"})
     *
     *    
     */
    public function alquilar_bicicleta(EntityManagerInterface $em, Request $request)
    {
        try {
           
            $code = 200;
            $error = false;
            $arrayRequest =  $request->toArray();
            if ($arrayRequest["bicicleta"]["type"] == 'bici_normal') {
                $bicicleta = $em->getRepository(BiciNormal::class)->findOneBy(['disponible' => 1]);
            } else if ($arrayRequest["bicicleta"]["type"] == 'bici_antigua') {
                $bicicleta = $em->getRepository(BiciAntigua::class)->findOneBy(['disponible' => 1]);
            } else {
                $bicicleta = $em->getRepository(BiciElectrica::class)->findOneBy(['disponible' => 1]);            
            }
            
            if ($bicicleta == NULL) {
                $response = 'No hay bicicletas disponibles ';
            } else {
                $cliente = $em->getRepository(Cliente::class)->find($arrayRequest["cliente"]);               
                $response = $this->alquilarService->alquilarBicicleta(
                    $arrayRequest["bicicleta"]["type"],
                    $bicicleta,
                    $cliente,
                    $arrayRequest["desde"],
                    $arrayRequest["hasta"],
                    $arrayRequest["esBase"],
                    $em
                );
                  
            }
        } catch (Exception $ex) {
            $code = Response::HTTP_INTERNAL_SERVER_ERROR;
            $error = true;
            $mensaje = "Ocurrio un error - Error: {$ex->getMessage()}";
        }
        $response = [
            'code' => $code,
            'error' => $error,
            'data' => $code == 200 ? $response : $mensaje,
        ];
        return new JsonResponse(
            $response
        );
    }
       /**
     * Devolver una bicicleta, se pasa por parametro el id del alquiler y la fecha de devolucion
     * Si no se obtiene la fecha de devolucion se toma como el dia de hoy
     * Se vuvelve a marcar la bici como disponible
     * En caso de excesos de dias se calcula la sobrecarga
     * se retorna el monto que tiene que pagar el cliente en caso de exceso
     * 
     * @Route("/{id}", name="devolver_bicicleta", methods={"PUT"})
     *    
     */
    public function devolver_bicicleta(EntityManagerInterface $em, Request $request,string $id)
    {
        try {
            $code = 200;
            $error = false;
           
            $alquilerObj = $em->getRepository(Alquilar::class)->find($id); 
            $arrayRequest =  $request->toArray();
            $fecha_devolucion= $arrayRequest["fecha_devolucion"];
           
            if ($alquilerObj == null){
                $response = 'No existe el alquiler pasado por parametro ';                
            }
            $cantDiasAdicionales=$this->alquilarService->diasAdicionales($alquilerObj, $fecha_devolucion);
            if ($alquilerObj->getBiciNormal() != NULL) {
                $bicicleta = $em->getRepository(BiciNormal::class)->find($alquilerObj->getBiciNormal()->getId() );
                
            } else if ($alquilerObj->getBiciAntigua() != NULL) {
                $bicicleta = $em->getRepository(BiciAntigua::class)->find($alquilerObj->getBiciAntigua()->getId() );
            } else {
                $bicicleta = $em->getRepository(BiciElectrica::class)->find($alquilerObj->getBiciElectrica()->getId() );        
            }
            $response=$this->alquilarService->calcularExtraAndResponse($bicicleta, $cantDiasAdicionales,$alquilerObj->getEsBase(),$em);           
        } catch (Exception $ex) {
            $code = Response::HTTP_INTERNAL_SERVER_ERROR;
            $error = true;
            $mensaje = "Ocurrio un error - Error: {$ex->getMessage()}";
        }
        $response = [
            'code' => $code,
            'error' => $error,
            'data' => $code == 200 ? $response : $mensaje,
        ];
        return new JsonResponse(
            $response
        );
    }
    
}
