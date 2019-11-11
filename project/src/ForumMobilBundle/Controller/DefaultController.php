<?php

namespace ForumMobilBundle\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ForumMobil\Default\index.html.twig');
    }

}
