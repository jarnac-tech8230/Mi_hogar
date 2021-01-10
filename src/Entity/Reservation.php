<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="rut_usuario", columns={"rut_usuario"}), @ORM\Index(name="rut_empresa", columns={"rut_empresa"})})
 * @ORM\Entity
 */
class Reservation
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
     * @var string
     *
     * @ORM\Column(name="rut_empresa", type="string", length=13, nullable=false)
     */
    private $rutEmpresa;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRutEmpresa(): ?string
    {
        return $this->rutEmpresa;
    }

    public function setRutEmpresa(string $rutEmpresa): self
    {
        $this->rutEmpresa = $rutEmpresa;

        return $this;
    }


}
