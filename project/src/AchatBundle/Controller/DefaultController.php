<?php

namespace AchatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $livres = $em->getRepository("LivreBundle:Livres")->findAll();
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $livres, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/
        );
        //return $this->render('@Achat/Default/index.html.twig', array("b"=>$pagination));


        return $this->render('@Achat/Default/shopGrid.html.twig', array("l" => $pagination));
    }



    public function afficherpdfAction($slug){
        $parameters = array(
            //Tell to the bundle that the pdf is outside the webroot
            'isPdfOutsideWebroot' => true,

            //Tell to the bundle where is the pdf. (absolute path for outside temporal folder pdf, just the <name>.pdf for inside temporal folder)
            'pdf' => $slug,

            //Tell to the bundle that its necessary to delete pdf after render.
            'deletePdfInTmpAfterRenderized' => false,

        );

        return $this->get('jjalvarezl_pdfjs_viewer.viewer_controller')->renderDefaultViewer($parameters);

    }

    public function afficherAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $bought = $em->getRepository("AchatBundle:Bought")->findBy( ['uId' => $this->getUser()->getId()]);

        //$paginator  = $this->get('knp_paginator');
        //$pagination = $paginator->paginate(
        //    $bought, /* query NOT result */
        //    $request->query->getInt('page', 1)/*page number*/,
        //    3/*limit per page*/
        //);
        //return $this->render('@Achat/Default/index.html.twig', array("b"=>$pagination));
        return $this->render('@Achat/Default/index.html.twig', array("b"=>$bought));

    }
}
