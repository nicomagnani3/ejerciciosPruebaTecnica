<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BiciAntiguaRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Bici;
use JMS\Serializer\Annotation\AccessorOrder;
/**
 * @ApiResource()
 * @ORM\Entity()
 */
class BiciAntigua extends Bici
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default":5})
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
