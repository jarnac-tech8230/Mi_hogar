<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Freemuin
 *
 * @ORM\Table(name="freemuin", indexes={@ORM\Index(name="rut_usuario", columns={"rut_usuario"}), @ORM\Index(name="estado", columns={"estado"})})
 * @ORM\Entity
 */
class Freemuin
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
     * @ORM\Column(name="nombre", type="string", length=30, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="rut_usuario", type="string", length=13, nullable=false)
     */
    private $rutUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getRutUsuario(): ?string
    {
        return $this->rutUsuario;
    }

    public function setRutUsuario(string $rutUsuario): self
    {
        $this->rutUsuario = $rutUsuario;

        return $this;
    }

    public function getEstado(): ?int
    {
        return $this->estado;
    }

    public function setEstado(int $estado): self
    {
        $this->estado = $estado;

        return $this;
    }


}
