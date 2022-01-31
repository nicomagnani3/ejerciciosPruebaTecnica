<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BiciNormalRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Bici;
/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BiciNormalRepository::class)
 */
class BiciNormal extends Bici
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default":3})
     */
    protected $packDias;   

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":"true"})
     */
    private $disponible;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPackDias(): ?int
    {
        return $this->packDias;
    }

    public function setPackDias(?int $packDias): self
    {
        $this->packDias = $packDias;

        return $this;
    }
    public function getAlquilada(): ?bool
    {
        return $this->alquilada;
    }

    public function setAlquilada(?bool $alquilada): self
    {
        $this->alquilada = $alquilada;

        return $this;
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
    

}
