<?php

namespace App\Entity;

use App\Repository\TipoProveedorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TipoProveedorRepository::class)
 */
class TipoProveedor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Proveedores", mappedBy="tipoProveedor")
     */
    private $proveedores;

    /**
     * @param $nombre
     */
    public function __construct($nombre=null)
    {
        $this->nombre = $nombre;
        $this->proveedores = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombree): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function AgregarProveedor(Proveedores $proveedores) {
        $this->proveedores[]=$proveedores;
    }
}
