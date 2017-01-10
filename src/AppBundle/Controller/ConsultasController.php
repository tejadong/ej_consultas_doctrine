<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConsultasController extends Controller
{
    /**
     * @Route("/ej1", name="ejercicio1")
     */
    public function ej1Action()
    {
        $em = $this->getDoctrine()->getManager();
        $alumnado = $em->getRepository('AppBundle:Alumno')->findBy(['nombre' => 'María']);

        /** @var EntityManager $em */
        /*$em = $this->getDoctrine()->getManager();
        $alumnado = $em->createQueryBuilder()
            ->select('a')
            ->from('AppBundle:Alumno', 'a')
            ->where('a.nombre = :nombre')
            ->setParameter('nombre', 'María')
            ->getQuery()
            ->getResult();*/

        /*$alumnado = $em->createQuery('SELECT a FROM AppBundle:Alumno a WHERE a.nombre=:nombre ORDER BY a.apellidos DESC')
            ->setParameter('nombre', 'María')
            ->getResult();*/
        return $this->render('consultas/alumnado.html.twig', [
            'alumnado' => $alumnado
        ]);
    }
}
