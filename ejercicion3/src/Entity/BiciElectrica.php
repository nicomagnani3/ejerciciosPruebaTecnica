<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BiciElectricaRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Bici;
use JMS\Serializer\Annotation\AccessorOrder;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BiciElectricaRepository::class)
 */
class BiciElectrica extends Bici
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":"true"})
     */
    private $disponible;
    /**
     * @ORM\Column(type="integer", nullable=true, options={"default":2})
     */
    protected $puntaje;   


    public function getId(): ?int
    {
        return $this->id;
    }
    public function getDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(?bool $disponible): self
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function calcularPrecioAlquiler($cantDias, $esBase)
    {
        if ($esBase) {
            return $this->precioBase($cantDias);
        }
        return $this->precioPremium($cantDias);
    }
    private function precioBase($cantDias)
    {
        return $cantDias * $this->getPrecioBase();
    }
    private function precioPremium($cantDias)
    {
        return $cantDias * $this->getPrecioPremium();
    }
}
