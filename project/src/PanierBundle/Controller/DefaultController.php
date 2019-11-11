<?php

namespace PanierBundle\Controller;

use AchatBundle\Entity\Bought;
use LivreBundle\Entity\Livres;
use PanierBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if($this->getUser() == null){
            return $this->render('@Panier/Default/404.html.twig');
        }else {
            $em = $this->getDoctrine()->getManager();
            $panier = $em->getRepository("PanierBundle:Panier")->findBy( ['userId' => $this->getUser()->getId()]);
            //$panier2 = $em->createQuery('SELECT * FROM PanierBundle:Panier p WHERE p.created_at >= :date')->setParameter('date', DATE_SUB(new \DateTime('now'), date_interval_create_from_date_string('2 days')))->getResult();
            //$panier2 = $em->getRepository("Panier")->findBy( ['createdAt >= DATE_SUB(NOW(), INTERVAL 1 DAY)']);
            /*foreach ($panier as $lignecommande){
                dump($lignecommande->getCreatedAt());
                dump($now->getTimestamp());
            }*/
            $date = new \DateTime();
            $date->modify('-2 days');
            $resultat = $em
                ->createQueryBuilder()
                ->select('p')
                ->from('PanierBundle:Panier','p')
                ->Where('p.createdAt < :date')
                ->setParameter(':date', $date)
                ->getQuery()
                ->execute();

            foreach ($resultat as $key=>$value){
                if($value != null){
                $em->remove($value);
                $em->flush();
                }
            }



            return $this->render('@Panier/Default/panier.html.twig', array("p" => $panier));
        }
    }

    public function ajouterAction(Request $request){
        $i = 0;
        $id = "";
        $quantite = "";
        $type = "";

        if($this->getUser() == null){
            return $this->render('@Panier/Default/404.html.twig');
        }else {
            if($request->isMethod("POST")) {
            $data = $request->request->all();
            dump($data);
            foreach ($data as $key=>$value){
                if($i == 0){
                    $id = $value;
                }
                else if($i == 1){
                    $type = $value;
                }
                else{
                    $quantite = $value;
                }
                $i = $i + 1;
            }

            if($quantite == 0){
                $quantite = 1;
            }

            if($type== 1 || $type==2){
                $quantite = 1;
            }

            $em = $this->getDoctrine()->getManager();
            //Ajouter La Ligne De Commande
            $book = $em->getRepository("LivreBundle:Livres")->find($id);
            $ligneCommande = new Panier();
            $ligneCommande->setUserId($this->getUser());
            $ligneCommande->setBookId($book);
            $ligneCommande->setBookType($type);
            $ligneCommande->setQuantite($quantite);
            $ligneCommande->setCreatedAt(new \DateTime());
            $ligneCommande->setModifiedAt(new \DateTime());
            $em->persist($ligneCommande);
            $em->flush();



        }


            }
            /*
            return $this->redirectToRoute('panier_homepage');


            $panier = $em->getRepository("PanierBundle:Panier")->findBy( ['userId' => $this->getUser()->getId()]);

            $date = new \DateTime();
            $date->modify('-2 days');
            $resultat = $em
                ->createQueryBuilder()
                ->select('p')
                ->from('PanierBundle:Panier','p')
                ->Where('p.createdAt < :date')
                ->setParameter(':date', $date)
                ->getQuery()
                ->execute();
            dump($resultat);*/
        return $this->redirectToRoute('panier_homepage');


    }

    public function supprimerAction($id){
        $entityManager = $this->getDoctrine()->getManager();
        $ligneCommande = $entityManager->getRepository("PanierBundle:Panier")->find($id);
        $entityManager->remove($ligneCommande);
        $entityManager->flush();
        return $this->redirectToRoute('panier_homepage');
    }

    public function modifierAction(Request $request){
        if($request->isMethod("POST")){
            $products = $request->request->all();
            foreach($products as $id=>$quantity){
                $entityManager = $this->getDoctrine()->getManager();
                $ligneCommande = $entityManager->getRepository("PanierBundle:Panier")->find($id);
                $ligneCommande->setQuantite($quantity);
                $entityManager->flush();
            }

        }
        return $this->redirectToRoute('panier_homepage');
    }

    public function achatAction(Request $request){
        $products = $request->request->all();
        foreach($products as $id=>$quantity){
            $entityManager = $this->getDoctrine()->getManager();
            $ligneCommande = $entityManager->getRepository("PanierBundle:Panier")->find($id);

            if($ligneCommande->getBookType() == 0){
                $book = $ligneCommande->getBookId();
                $stock = $book->getStock();
                $qtt = $ligneCommande->getQuantite();
                $book->setStock($stock - $qtt);
            }

            $livresAchetes = $entityManager->getRepository("AchatBundle:Bought")->findAll();
            foreach ($livresAchetes as $key=>$achat){

            }

            $achat = new Bought();
            $achat->setType($ligneCommande->getBookType());
            $achat->setQuantite($ligneCommande->getQuantite());
            $achat->setBId($ligneCommande->getBookId());
            $achat->setUId($this->getUser());
            $achat->setBookId($ligneCommande->getBookId()->getId());
            $achat->setUserId($this->getUser()->getId());
            $achat->setPrice($ligneCommande->getBookId()->getPrix());
            $achat->setPurchaseDate(new \DateTime());
            $entityManager->persist($achat);
            $entityManager->remove($ligneCommande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('afficher_achete');
    }

    public function allAction(){
        $panier = $this->getDoctrine()->getManager()->getRepository("PanierBundle:Panier")->findAll();
        $serialize = new Serializer([new ObjectNormalizer()]);
        $formatted = $serialize->normalize($panier);
        return new JsonResponse($formatted);
    }

    public function allBooksAction(){
        $books = $this->getDoctrine()->getManager()->getRepository("LivreBundle:Livres")->findAll();
        $serialize = new Serializer([new ObjectNormalizer()]);
        $formatted = $serialize->normalize($books);
        return new JsonResponse($formatted);
    }

    public function allBooksImagesAction(){
        $books = $this->getDoctrine()->getManager()->getRepository("LivreBundle:Livres")->findAll();
        $book = new Livres();
        $images = array();
        foreach ($books as $key=>$book){
            $images[$key] = $book->getImg();
        }

        $serialize = new Serializer([new ObjectNormalizer()]);
        $formatted = $serialize->normalize($images);
        return new JsonResponse($formatted);
    }

    public function addLigneCommandeAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $ligneCommande = new Panier();

        $bookId = $request->get("bid");
        $userId = $request->get("uid");
        $user = $em->getRepository("userBundle:User")->find($userId);

        $book = $em->getRepository("LivreBundle:Livres")->find($bookId);
        $ligneCommande->setBookId($book);
        $ligneCommande->setUserId($user);
        $ligneCommande->setQuantite($request->get("qtt"));
        $ligneCommande->setBookType($request->get("type"));
        $ligneCommande->setCreatedAt(new \DateTime());
        $ligneCommande->setModifiedAt(new \DateTime());
        $em->persist($ligneCommande);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ligneCommande);

        return new JsonResponse($formatted);
    }


    public function findBookAction($id){
        $book = $this->getDoctrine()->getManager()->getRepository("LivreBundle:Livres")->find($id);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($book);

        return new JsonResponse($formatted);
    }

    public function deleteLigneCommandeAction($id){
        $em = $this->getDoctrine()->getManager();
        $ligneCommande = $em->getRepository("PanierBundle:Panier")->find($id);
        $em->remove($ligneCommande);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ligneCommande);

        return new JsonResponse($formatted);
    }

    public function modifierLigneCommandeAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $ligneCommandeId = $request->get("lid");
        $ligneCommande = $em->getRepository("PanierBundle:Panier")->find($ligneCommandeId);
        $ligneCommande->setQuantite($request->get("qtt"));
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ligneCommande);
        return new JsonResponse($formatted);

    }

    public function supprimerLigneCommandePlusDeDeuxJoursAction(){
        $em = $this->getDoctrine()->getManager();
        $date = new \DateTime();
        $date->modify('-2 days');
        $resultat = $em
            ->createQueryBuilder()
            ->select('p')
            ->from('PanierBundle:Panier','p')
            ->Where('p.createdAt < :date')
            ->setParameter(':date', $date)
            ->getQuery()
            ->execute();

        foreach ($resultat as $key=>$value){
            if($value != null){
                $em->remove($value);
                $em->flush();
            }
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($date);
        return new JsonResponse($formatted);

    }

}
