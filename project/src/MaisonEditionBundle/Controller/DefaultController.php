<?php

namespace MaisonEditionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MaisonEdition\Default\index.html.twig');
    }


}
