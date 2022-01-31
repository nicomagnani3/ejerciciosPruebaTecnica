<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/**
 * @ORM\MappedSuperclass
 *  @ApiResource(
 *  itemOperations={
 *      "get",
 *      "get_list"={"route_name"="listado_bicicletas"}
 *  }
 * )
 */
/**
 * @ORM\InheritanceType("JOINED"),
 * 
 * @DiscriminatorMap(typeProperty="type", mapping={
 *    "bici_normal"= "BiciNormal",
 *    "bici_antigua"="BiciAntigua",
 *     "bici_electrica"="BiciElectrica"
 * })
 */
abstract class Bici
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default":1})
     */
    protected $puntaje;   

    /**
     * @ORM\Column(type="decimal", precision=19, scale=4, nullable=true, options={"default":10})
     */
    protected $precioBase;

    /**
     * @ORM\Column(type="decimal", precision=19, scale=4, options={"default":30})
     */
    protected $precioPremium;
    /**
     * @ORM\Column(type="integer", nullable=true, options={"default":0})
     */
    protected $packDias;   

    public function getPackDias(): ?int
    {
        return $this->packDias;
    }

    public function setPackDias(?int $packDias): self
    {
        $this->packDias = $packDias;

        return $this;
    }
   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPuntaje(): ?int
    {
        return $this->puntaje;
    }

    public function setPuntaje(?int $puntaje): self
    {
        $this->puntaje = $puntaje;

        return $this;
    }

   

    public function getPrecioBase(): ?string
    {
        return $this->precioBase;
    }

    public function setPrecioBase(?string $precioBase): self
    {
        $this->precioBase = $precioBase;

        return $this;
    }

    public function getPrecioPremium(): ?string
    {
        return $this->precioPremium;
    }

    public function setPrecioPremium(string $precioPremium): self
    {
        $this->precioPremium = $precioPremium;

        return $this;
    }
    public function calcularPrecioAlquiler($cantDias,$esBase)
    {
        if ($esBase){
            return $this->precioBase($cantDias);
        }
        return $this->precioPremium($cantDias);
    }
    private function precioBase($cantDias){
        if ($cantDias <= $this->getPackDias()){
            return $this->getPrecioBase();
        }else{
            $extra = $cantDias -  $this->getPackDias();
            return $this->getPrecioBase() + ($this->getPrecioBase() * $extra);
        }
    }
    private function precioPremium($cantDias){
        if ($cantDias < $this->getPackDias()){
            return $this->getPrecioPremium();
        }else{
            $extra = $cantDias -  $this->getPackDias();
            return $this->getPrecioPremium() + ($this->getPrecioPremium() * $extra);
        }
    }

    public function getAdicionalPremium($dias){
        return $this->getPrecioPremium() * $dias;
    }
    public function getAdicionalBase($dias){
            return $this->getPrecioBase() * $dias;
    }
}
