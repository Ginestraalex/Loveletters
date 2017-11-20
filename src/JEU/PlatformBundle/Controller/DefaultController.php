<?php

namespace JEU\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JEUPlatformBundle:Default:index.html.twig');
    }
}
