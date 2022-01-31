<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 *  * @ApiResource(
 *  itemOperations={  
 *     "get", "put",   
 *     "alquilar_bicicleta"={"route_name"="alquilar_bicicleta"},
 *      "devolver_bicicleta"={"route_name"="devolver_bicicleta" ,"methods"={"PUT"}}
 *  })
 */
class Alquilar
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="Fecha desde no puede estar vacio") 
     */
    private $desde;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="Fecha hasta no puede estar vacio") 
     */
    private $hasta;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Assert\NotBlank(message="Debe decidir si es base ") 
     */
    private $esBase;

    /**
     * @ORM\ManyToOne(targetEntity=Cliente::class, cascade={"persist", "remove"},inversedBy="cliente")
     * @Assert\NotBlank(message="Cliente no puede estar vacio") 
     */
    private $cliente;

    /**
     * @ORM\ManyToOne(targetEntity=BiciElectrica::class, cascade={"persist", "remove"},inversedBy="biciElectrica")
     */
    private $biciElectrica;

    /**
     * @ORM\ManyToOne(targetEntity=BiciNormal::class, cascade={"persist", "remove"},inversedBy="biciNormal")
     */
    private $biciNormal;

    /**
     * @ORM\ManyToOne(targetEntity=BiciAntigua::class, cascade={"persist", "remove"},inversedBy="biciAntigua")
     */
    private $biciAntigua;

   



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesde(): ?\DateTimeInterface
    {
        return $this->desde;
    }

    public function setDesde(\DateTimeInterface $desde): self
    {
        $this->desde = $desde;

        return $this;
    }

    public function getHasta(): ?\DateTimeInterface
    {
        return $this->hasta;
    }

    public function setHasta(\DateTimeInterface $hasta): self
    {
        $this->hasta = $hasta;

        return $this;
    }

    public function getEsBase(): ?bool
    {
        return $this->esBase;
    }

    public function setEsBase(?bool $esBase): self
    {
        $this->esBase = $esBase;

        return $this;
    } 

    public function getCliente(): ?Cliente
    {
        return $this->cliente;
    }

    public function setCliente(?Cliente $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }


    public function getBiciElectrica(): ?BiciElectrica
    {
        return $this->biciElectrica;
    }

    public function setBiciElectrica(?BiciElectrica $biciElectrica): self
    {
        $this->biciElectrica = $biciElectrica;

        return $this;
    }

    public function getBiciNormal(): ?BiciNormal
    {
        return $this->biciNormal;
    }

    public function setBiciNormal(?BiciNormal $biciNormal): self
    {
        $this->biciNormal = $biciNormal;

        return $this;
    }

    public function getBiciAntigua(): ?BiciAntigua
    {
        return $this->biciAntigua;
    }

    public function setBiciAntigua(?BiciAntigua $biciAntigua): self
    {
        $this->biciAntigua = $biciAntigua;

        return $this;
    }

  
}
