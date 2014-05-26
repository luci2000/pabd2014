<?php

namespace web\LuciBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($action = 'Home')
    {
        return $this->render('webLuciBundle:Default:index.html.twig', array('action' => $action));
    }
}
