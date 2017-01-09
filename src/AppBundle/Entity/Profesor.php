<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Profesor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     * @var string
     */
    private $dni;

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
     * @ORM\OneToMany(targetEntity="Parte", mappedBy="profesor")
     */
    private $partes;

    /**
     * @ORM\OneToOne(targetEntity="Grupo", mappedBy="tutor")
     */
    private $tutoria;

    /**
     * @ORM\ManyToMany(targetEntity="Grupo", inversedBy="profesorado")
     */
    private $grupos;
}
