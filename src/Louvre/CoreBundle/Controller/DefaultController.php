<?php

namespace Louvre\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LouvreCoreBundle:Default:index.html.twig');
    }
}
