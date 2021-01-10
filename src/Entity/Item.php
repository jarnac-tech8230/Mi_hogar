<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item", indexes={@ORM\Index(name="imagen3d", columns={"imagen3d"}), @ORM\Index(name="rut_empresa", columns={"rut_empresa"}), @ORM\Index(name="categoria", columns={"categoria"}), @ORM\Index(name="imagen", columns={"imagen"})})
 * @ORM\Entity
 */
class Item
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
     * @var int
     *
     * @ORM\Column(name="categoria", type="integer", nullable=false)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=50, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=0, nullable=false)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="area", type="integer", nullable=false)
     */
    private $area;

    /**
     * @var int
     *
     * @ORM\Column(name="banio", type="integer", nullable=false)
     */
    private $banio;

    /**
     * @var int
     *
     * @ORM\Column(name="dormitorio", type="integer", nullable=false)
     */
    private $dormitorio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anio_construido", type="date", nullable=false)
     */
    private $anioConstruido;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bien_estar", type="integer", nullable=true)
     */
    private $bienEstar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orientacion", type="string", length=20, nullable=true)
     */
    private $orientacion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cocina", type="integer", nullable=true)
     */
    private $cocina;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parking", type="integer", nullable=true)
     */
    private $parking;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=250, nullable=false)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="visto", type="string", length=250, nullable=false)
     */
    private $visto;

    /**
     * @var int
     *
     * @ORM\Column(name="imagen", type="integer", nullable=false)
     */
    private $imagen;

    /**
     * @var int
     *
     * @ORM\Column(name="imagen3d", type="integer", nullable=false)
     */
    private $imagen3d;

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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCategoria(): ?int
    {
        return $this->categoria;
    }

    public function setCategoria(int $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getArea(): ?int
    {
        return $this->area;
    }

    public function setArea(int $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getBanio(): ?int
    {
        return $this->banio;
    }

    public function setBanio(int $banio): self
    {
        $this->banio = $banio;

        return $this;
    }

    public function getDormitorio(): ?int
    {
        return $this->dormitorio;
    }

    public function setDormitorio(int $dormitorio): self
    {
        $this->dormitorio = $dormitorio;

        return $this;
    }

    public function getAnioConstruido(): ?\DateTimeInterface
    {
        return $this->anioConstruido;
    }

    public function setAnioConstruido(\DateTimeInterface $anioConstruido): self
    {
        $this->anioConstruido = $anioConstruido;

        return $this;
    }

    public function getBienEstar(): ?int
    {
        return $this->bienEstar;
    }

    public function setBienEstar(?int $bienEstar): self
    {
        $this->bienEstar = $bienEstar;

        return $this;
    }

    public function getOrientacion(): ?string
    {
        return $this->orientacion;
    }

    public function setOrientacion(?string $orientacion): self
    {
        $this->orientacion = $orientacion;

        return $this;
    }

    public function getCocina(): ?int
    {
        return $this->cocina;
    }

    public function setCocina(?int $cocina): self
    {
        $this->cocina = $cocina;

        return $this;
    }

    public function getParking(): ?int
    {
        return $this->parking;
    }

    public function setParking(?int $parking): self
    {
        $this->parking = $parking;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getVisto(): ?string
    {
        return $this->visto;
    }

    public function setVisto(string $visto): self
    {
        $this->visto = $visto;

        return $this;
    }

    public function getImagen(): ?int
    {
        return $this->imagen;
    }

    public function setImagen(int $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getImagen3d(): ?int
    {
        return $this->imagen3d;
    }

    public function setImagen3d(int $imagen3d): self
    {
        $this->imagen3d = $imagen3d;

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
