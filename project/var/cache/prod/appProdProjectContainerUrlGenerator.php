<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'promotions_client_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PromotionsBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/promotions/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'emprunt_client_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmpruntBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/emprunt/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'locaux_client_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LocauxBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/locaux/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact_client_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContactBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'echange_client_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EchangeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/echange/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evenement_client_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EvenementBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'accueil_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AccueilBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panier_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PanierBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
