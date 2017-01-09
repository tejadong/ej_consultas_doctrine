<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Parte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Alumno", inversedBy="partes")
     */
    private $alumno;

    /**
     * @ORM\ManyToOne(targetEntity="Profesor", inversedBy="partes")
     */
    private $profesor;

    /**
     * @ORM\Column(type="date")
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $avisado;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @var string
     */
    private $observaciones;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Parte
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set avisado
     *
     * @param boolean $avisado
     *
     * @return Parte
     */
    public function setAvisado($avisado)
    {
        $this->avisado = $avisado;

        return $this;
    }

    /**
     * Get avisado
     *
     * @return boolean
     */
    public function getAvisado()
    {
        return $this->avisado;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Parte
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set alumno
     *
     * @param \AppBundle\Entity\Alumno $alumno
     *
     * @return Parte
     */
    public function setAlumno(\AppBundle\Entity\Alumno $alumno = null)
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * Get alumno
     *
     * @return \AppBundle\Entity\Alumno
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Set profesor
     *
     * @param \AppBundle\Entity\Profesor $profesor
     *
     * @return Parte
     */
    public function setProfesor(\AppBundle\Entity\Profesor $profesor = null)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return \AppBundle\Entity\Profesor
     */
    public function getProfesor()
    {
        return $this->profesor;
    }
}
