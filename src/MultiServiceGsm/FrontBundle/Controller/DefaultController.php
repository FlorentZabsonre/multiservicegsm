<?php

namespace MultiServiceGsm\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MultiServiceGsmFrontBundle:Default:index.html.twig');
    }
}