<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_2DA1797777040BC9", columns={"correo"})}, indexes={@ORM\Index(name="estado", columns={"estado"})})
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
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
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nombre = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $apellido = 'NULL';



    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $telefono = 'NULL';


    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_creado", type="datetime", nullable=true)
     */
    private $fechaCreado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $correo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $password = 'NULL';


    /**
     * @var int
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado= 'NULL';


    public function getId(): ?int
{
    return $this->id;
}


    public function getNombre(): ?string
{
    return $this->nombre;
}

    public function setNombre(?string $nombre): self
{
    $this->nombre = $nombre;

    return $this;
}

    public function getApellido(): ?string
{
    return $this->apellido;
}

    public function setApellido(?string $apellido): self
{
    $this->apellido = $apellido;

    return $this;
}



    public function getTelefono(): ?string
{
    return $this->telefono;
}

    public function setTelefono(?string $telefono): self
{
    $this->telefono = $telefono;

    return $this;
}


    public function getFechaCreado(\Symfony\Component\Validator\Constraints\Date $param): ?\DateTimeInterface
{
    return $this->fechaCreado;
}

    public function setFechaCreado(?\DateTimeInterface $fechaCreado): self
{
    $this->fechaCreado = $fechaCreado;

    return $this;
}

    public function getCorreo(): ?string
{
    return $this->correo;
}

    public function setCorreo(?string $correo): self
{
    $this->correo = $correo;

    return $this;
}

    public function setPassword(?string $password): self
{
    $this->password = $password;

    return $this;
}


    public function getEstado():?int
{

    return $this->estado;
}

    public function setEstado(?int $estado): self
{
    $this->estado = $estado;

    return $this;
}


    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    // ...
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }
    /**
     * @see UserInterface
     */
    public function getPassword(): string
{
    return (string) $this->password;
}

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
{
    return (string) $this->correo;
}

    /**
     * @see UserInterface
     */
    public function getSalt()
{
    // not needed when using the "bcrypt" algorithm in security.yaml
}

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
{
    // If you store any temporary, sensitive data on the user, clear it here
    // $this->plainPassword = null;
}

}
