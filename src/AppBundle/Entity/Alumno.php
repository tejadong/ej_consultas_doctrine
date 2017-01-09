<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Alumno
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $nombre;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $apellidos;

    /**
     * @ORM\Column(type="date")
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $observaciones;

    /**
     * @ORM\ManyToOne(targetEntity="Grupo", inversedBy="alumnado")
     */
    private $grupo;

    /**
     * @ORM\OneToMany(targetEntity="Parte", mappedBy="alumno")
     */
    private $partes;

}
