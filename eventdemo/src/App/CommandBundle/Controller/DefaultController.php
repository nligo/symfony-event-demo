<?php

namespace App\CommandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppCommandBundle:Default:index.html.twig');
    }
}
