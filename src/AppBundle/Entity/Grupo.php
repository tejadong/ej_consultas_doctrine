<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Grupo
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
    private $descripcion;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $aula;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $planta;

    /**
     * @ORM\OneToMany(targetEntity="Alumno", mappedBy="grupo")
     */
    private $alumnado;

    /**
     * @ORM\OneToOne(targetEntity="Profesor", inversedBy="tutoria")
     */
    private $tutor;

    /**
     * @ORM\ManyToMany(targetEntity="Profesor", mappedBy="grupos")
     */
    private $profesorado;
}
