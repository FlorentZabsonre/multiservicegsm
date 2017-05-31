<?php

namespace MultiServiceGsm\FrontBundle\Controller;
use MultiServiceGsm\FrontBundle\Entity\Modele;
use MultiServiceGsm\FrontBundle\Entity\Marque;
use MultiServiceGsm\FrontBundle\Entity\Reparation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DevisController extends Controller
{
	public function marqueAjaxAction(Request $request)
	{
		 $em = $this->getDoctrine()->getManager();

        $marques = $em->getRepository('MultiServiceGsmFrontBundle:Marque')->findAll();
        $marque=array();
        if($marques)
        {
        	foreach ($marques as $marq) {
        		$marque[]=$marq->getSlug();
        	}
        }else
        {
        	$marques=null;
        }
        $response= new JsonResponse();

        return $response->setData(array('marque' =>$marque
        ));
	}


	public function modeleAjaxAction(Request $request,$slug)
	{
		 $em = $this->getDoctrine()->getManager();

        $marques = $em->getRepository('MultiServiceGsmFrontBundle:Marque')->findOneBy(array('slug'=>$slug));
        $modeles=   $em->getRepository('MultiServiceGsmFrontBundle:Modele')->findByMarque($marques);
        $model=array();
        if($modeles)
        {
        	foreach ($modeles as $modele) {
        		$model[]=$modele->getSlug();
        	}
        }else
        {
        	$model=null;
        }
        $response= new JsonResponse();

        return $response->setData(array('modele' =>$model
        ));
	}
	//slug represente le modele
	public function reparationAjaxAction(Request $request, $slug)
	{
		$em = $this->getDoctrine()->getManager();
		$modeles = $em->getRepository('MultiServiceGsmFrontBundle:Modele')->findOneBy(array('slug'=>$slug));
		$reparations=  $em->getRepository('MultiServiceGsmFrontBundle:Tarif')->findByModel($modeles);

		$reparation=array();
        if($reparations)
        {
        	foreach ($reparations as $reparationne) {
        		$reparation[]=$reparationne->getReparation()->getSlug();
        	}
        }else
        {
        	$reparation=null;
        }
        $response= new JsonResponse();

        return $response->setData(array('reparation' =>$reparation
        ));



	}

}