<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
use App\Entity\Bicicleta;
use App\Entity\BiciAntigua;
use App\Entity\BiciNormal;
use App\Entity\BiciElectrica;
use Doctrine\ORM\EntityNotFoundException;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\BicicletaService;
/**
 * Class BiciController
 *
 * @Route("/api/bici")
 */
class BiciController  extends AbstractController
{
    private $bicicletaService;
    public function __construct(BicicletaService $bicicletaService)
    {
        $this->bicicletaService = $bicicletaService;
    }

     /**
      * Get listado de bicicletas
     * @Route("/get_listado_bicis", name="listado_bicicletas")
    */
    public function get_list_bicicleta(EntityManagerInterface $em)
    {
        try {     
            $code=200;
            $error=false;        
            $antiguasDisponibles = $em->getRepository(BiciAntigua::class)->findBy(['disponible' => 1]);
            $normalesDisponibles = $em->getRepository(BiciNormal::class)->findBy(['disponible' => 1]);   
            $electricasDisponibles = $em->getRepository(BiciElectrica::class)->findBy(['disponible' => 1]); 
            $mensaje=$this->bicicletaService->getMensajeBicisDisponibles($antiguasDisponibles,$normalesDisponibles,$electricasDisponibles);
           
        } catch (Exception $ex) {
            $code = Response::HTTP_INTERNAL_SERVER_ERROR;
            $error = true;
            $mensaje = "Ocurrio un error - Error: {$ex->getMessage()}";
        }
        $response = [
            'code' => $code,
            'error' => $error,
            'data' => $mensaje,
        ];
        return new JsonResponse(
            $response
        );
    }
}
