<?php

namespace App\Entity;

use App\Repository\ClienteRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=ClienteRepository::class)
 *  *  @ApiResource(
 *  itemOperations={
 *      "get"     
 *  }
 * )
 */
class Cliente
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $puntaje;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $apellido;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dni;

    /**
     * @ORM\OneToMany(targetEntity=Alquilar::class, mappedBy="cliente")
     */
    private $alquileres;

    public function __construct()
    {
        $this->alquileres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPuntaje(): ?int
    {
        return $this->puntaje;
    }

    public function setPuntaje(int $puntaje): self
    {
        $this->puntaje = $puntaje;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getDni(): ?int
    {
        return $this->dni;
    }

    public function setDni(?int $dni): self
    {
        $this->dni = $dni;

        return $this;
    }
}
