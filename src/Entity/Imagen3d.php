<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagen3d
 *
 * @ORM\Table(name="imagen3d")
 * @ORM\Entity
 */
class Imagen3d
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=250, nullable=false)
     */
    private $ruta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRuta(): ?string
    {
        return $this->ruta;
    }

    public function setRuta(string $ruta): self
    {
        $this->ruta = $ruta;

        return $this;
    }


}
