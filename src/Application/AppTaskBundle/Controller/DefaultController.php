<?php

namespace Application\AppTaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationAppTaskBundle:Default:index.html.twig');
    }
}
