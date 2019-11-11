<?php

/* ::baseClient.html.twig */
class __TwigTemplate_dd49131790cbfca59c5bf0199c8c00ded5a5aa7456a784ee3ccf727507aad5c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseClient.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Home | Bookshop Responsive Bootstrap4 Template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "</head>
<body>

<!--[if lte IE 9]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Main wrapper -->
<div class=\"wrapper\" id=\"wrapper\">
    <!-- Header -->
    ";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 163
        echo "
    ";
        // line 164
        $this->displayBlock('content', $context, $blocks);
        // line 167
        echo "

    <!-- Footer Area -->
    ";
        // line 170
        $this->displayBlock('footer', $context, $blocks);
        // line 225
        echo "    <!-- //Footer Area -->
</div>
<!-- //Main wrapper -->

<!-- JS Files -->
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/active.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <!-- Favicons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon.png"), "html", null, true);
        echo "\">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900\" rel=\"stylesheet\">

    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

    <!-- Cusom css -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">

    <!-- Modernizer js -->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 41
        echo "    <header id=\"wn__header\" class=\"header__area header__absolute sticky__header\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-6 col-lg-2\">
                    <div class=\"logo\">
                        <a href=";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil_homepage");
        echo ">
                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo/logo.png"), "html", null, true);
        echo "\" alt=\"logo images\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-8 d-none d-lg-block\">
                    <nav class=\"mainmenu__nav\">
                        <ul class=\"meninmenu d-flex justify-content-start\">
                            <li class=\"drop with--one--item\"><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil_homepage");
        echo "\">Accueil</a></li>
                            <li class=\"drop with--one--item\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promotions_client_homepage");
        echo "\">Promotions</a></li>
                            <li class=\"drop\"><a href=\"#\">Acquisition</a>
                                <div class=\"megamenu mega03\">
                                    <ul class=\"item item03\">
                                        <li class=\"title\">Achat</li>
                                        <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("achat_homepage");
        echo "\">Livres Proposés</a></li>
                                        <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_achete");
        echo "\">Mes Achats</a></li>
                                    </ul>
                                    <ul class=\"item item03\">
                                        <li class=\"title\">Echange</li>
                                        <li><a href=\"my-account.html\">Echanges Proposés</a></li>
                                        <li><a href=\"cart.html\">Gérer Mes Echanges</a></li>
                                    </ul>
                                    <ul class=\"item item03\">
                                        <li class=\"title\">Emprunt</li>
                                        <li><a href=";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_indexClient");
        echo ">Emprunts Proposés</a></li>
                                        <li><a href=";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_indexClient2");
        echo ">Gérer Mes Emprunts</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"drop\"><a href=\"http://localhost/project/web/app_dev.php/participant\">Evenement</a></li>
                            <li class=\"drop\"><a href=\"\">Locaux</a></li>
                            <li><a href=\"\">Forum</a></li>
                            <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_indexClient");
        echo "\">Reclamation</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-md-6 col-sm-6 col-6 col-lg-2\">
                    <ul class=\"header__sidebar__right d-flex justify-content-end align-items-center\">
                        <li class=\"wishlist\"><a href=\"#\"></a></li>
                        <li class=\"shopcart\"><a href=";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_homepage");
        echo "></a></li>
                        <li class=\"setting__bar__icon\"><a class=\"setting__active\" href=\"#\"></a>
                            <div class=\"searchbar__content setting__block\">
                                <div class=\"content-inner\">
                                    <div class=\"switcher-currency\">
                                        <strong class=\"label switcher-label\">
                                            <span>My Account</span>
                                        </strong>
                                        <div class=\"switcher-options\">
                                            <div class=\"switcher-currency-trigger\">
                                                <div class=\"setting__menu\">
                                                    <span><a href=\"#\">Compare Product</a></span>
                                                    <span><a href=\"#\">My Account</a></span>
                                                    <span><a href=\"#\">My Wishlist</a></span>
                                                    <span><a href=\"#\">Sign In</a></span>
                                                    <span><a href=";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo ">Déconnexion</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start Mobile Menu -->
            <div class=\"row d-none\">
                <div class=\"col-lg-12 d-none\">
                    <nav class=\"mobilemenu__nav\">
                        <ul class=\"meninmenu\">
                            <li><a href=\"\">Accueil</a></li>
                            <li><a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promotions_client_homepage");
        echo "\">Promotions</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul>
                                    <li><a href=\"about.html\">About Page</a></li>
                                    <li><a href=\"portfolio.html\">Portfolio</a>
                                        <ul>
                                            <li><a href=\"portfolio.html\">Portfolio</a></li>
                                            <li><a href=\"portfolio-details.html\">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"my-account.html\">My Account</a></li>
                                    <li><a href=\"cart.html\">Cart Page</a></li>
                                    <li><a href=\"checkout.html\">Checkout Page</a></li>
                                    <li><a href=\"wishlist.html\">Wishlist Page</a></li>
                                    <li><a href=\"error404.html\">404 Page</a></li>
                                    <li><a href=\"faq.html\">Faq Page</a></li>
                                    <li><a href=\"team.html\">Team Page</a></li>
                                </ul>
                            </li>
                            <li><a href=\"shop-grid.html\">Shop</a>
                                <ul>
                                    <li><a href=\"shop-grid.html\">Shop Grid</a></li>
                                    <li><a href=\"single-product.html\">Single Product</a></li>
                                </ul>
                            </li>
                            <li><a href=\"blog.html\">Blog</a>
                                <ul>
                                    <li><a href=\"blog.html\">Blog Page</a></li>
                                    <li><a href=\"blog-details.html\">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_client_homepage");
        echo "\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Mobile Menu -->
            <div class=\"mobile-menu d-block d-lg-none\">
            </div>
            <!-- Mobile Menu -->
        </div>
    </header>


    <!-- End Search Popup -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 165
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 171
        echo "    <footer id=\"wn__footer\" class=\"footer__area bg__cat--8 brown--color\">
        <div class=\"footer-static-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"footer__widget footer__menu\">
                            <div class=\"ft__logo\">
                                <a href=\"index.html\">
                                    <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo/3.png"), "html", null, true);
        echo "\" alt=\"logo\">
                                </a>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
                            </div>
                            <div class=\"footer__content\">
                                <ul class=\"social__net social__net--2 d-flex justify-content-center\">
                                    <li><a href=\"#\"><i class=\"bi bi-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"bi bi-google\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"bi bi-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"bi bi-linkedin\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"bi bi-youtube\"></i></a></li>
                                </ul>
                                <ul class=\"mainmenu d-flex justify-content-center\">
                                    <li><a href=\"index.html\">Trending</a></li>
                                    <li><a href=\"index.html\">Best Seller</a></li>
                                    <li><a href=\"index.html\">All Product</a></li>
                                    <li><a href=\"index.html\">Wishlist</a></li>
                                    <li><a href=\"index.html\">Blog</a></li>
                                    <li><a href=\"index.html\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright__wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"copyright\">
                            <div class=\"copy__right__inner text-left\">
                                <p>Copyright <i class=\"fa fa-copyright\"></i> <a href=\"https://freethemescloud.com/\">Free themes Cloud.</a> All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"payment text-right\">
                            <img src=\"images/icons/payment.png\" alt=\"\" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::baseClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 179,  371 => 171,  362 => 170,  351 => 165,  342 => 164,  317 => 148,  283 => 117,  263 => 100,  245 => 85,  235 => 78,  225 => 71,  221 => 70,  209 => 61,  205 => 60,  197 => 55,  193 => 54,  183 => 47,  179 => 46,  172 => 41,  163 => 40,  151 => 28,  145 => 25,  139 => 22,  135 => 21,  131 => 20,  120 => 12,  116 => 11,  113 => 10,  104 => 9,  90 => 234,  86 => 233,  82 => 232,  78 => 231,  74 => 230,  67 => 225,  65 => 170,  60 => 167,  58 => 164,  55 => 163,  53 => 40,  41 => 30,  39 => 9,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Home | Bookshop Responsive Bootstrap4 Template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
    <!-- Favicons -->
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.ico') }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('images/icon.png') }}\">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900\" rel=\"stylesheet\">

    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/plugins.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

    <!-- Cusom css -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\">

    <!-- Modernizer js -->
    <script src=\"{{ asset('js/vendor/modernizr-3.5.0.min.js') }}\"></script>
    {% endblock %}
</head>
<body>

<!--[if lte IE 9]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Main wrapper -->
<div class=\"wrapper\" id=\"wrapper\">
    <!-- Header -->
    {% block header %}
    <header id=\"wn__header\" class=\"header__area header__absolute sticky__header\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-6 col-lg-2\">
                    <div class=\"logo\">
                        <a href={{ path('accueil_homepage') }}>
                            <img src=\"{{ asset('images/logo/logo.png') }}\" alt=\"logo images\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-8 d-none d-lg-block\">
                    <nav class=\"mainmenu__nav\">
                        <ul class=\"meninmenu d-flex justify-content-start\">
                            <li class=\"drop with--one--item\"><a href=\"{{ path('accueil_homepage') }}\">Accueil</a></li>
                            <li class=\"drop with--one--item\"><a href=\"{{ path('promotions_client_homepage') }}\">Promotions</a></li>
                            <li class=\"drop\"><a href=\"#\">Acquisition</a>
                                <div class=\"megamenu mega03\">
                                    <ul class=\"item item03\">
                                        <li class=\"title\">Achat</li>
                                        <li><a href=\"{{ path('achat_homepage') }}\">Livres Proposés</a></li>
                                        <li><a href=\"{{ path('afficher_achete') }}\">Mes Achats</a></li>
                                    </ul>
                                    <ul class=\"item item03\">
                                        <li class=\"title\">Echange</li>
                                        <li><a href=\"my-account.html\">Echanges Proposés</a></li>
                                        <li><a href=\"cart.html\">Gérer Mes Echanges</a></li>
                                    </ul>
                                    <ul class=\"item item03\">
                                        <li class=\"title\">Emprunt</li>
                                        <li><a href={{ path('emprunt_indexClient') }}>Emprunts Proposés</a></li>
                                        <li><a href={{ path('emprunt_indexClient2') }}>Gérer Mes Emprunts</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"drop\"><a href=\"http://localhost/project/web/app_dev.php/participant\">Evenement</a></li>
                            <li class=\"drop\"><a href=\"\">Locaux</a></li>
                            <li><a href=\"\">Forum</a></li>
                            <li><a href=\"{{ path('reclamation_indexClient') }}\">Reclamation</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-md-6 col-sm-6 col-6 col-lg-2\">
                    <ul class=\"header__sidebar__right d-flex justify-content-end align-items-center\">
                        <li class=\"wishlist\"><a href=\"#\"></a></li>
                        <li class=\"shopcart\"><a href={{ path('panier_homepage') }}></a></li>
                        <li class=\"setting__bar__icon\"><a class=\"setting__active\" href=\"#\"></a>
                            <div class=\"searchbar__content setting__block\">
                                <div class=\"content-inner\">
                                    <div class=\"switcher-currency\">
                                        <strong class=\"label switcher-label\">
                                            <span>My Account</span>
                                        </strong>
                                        <div class=\"switcher-options\">
                                            <div class=\"switcher-currency-trigger\">
                                                <div class=\"setting__menu\">
                                                    <span><a href=\"#\">Compare Product</a></span>
                                                    <span><a href=\"#\">My Account</a></span>
                                                    <span><a href=\"#\">My Wishlist</a></span>
                                                    <span><a href=\"#\">Sign In</a></span>
                                                    <span><a href={{ path('fos_user_security_logout') }}>Déconnexion</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start Mobile Menu -->
            <div class=\"row d-none\">
                <div class=\"col-lg-12 d-none\">
                    <nav class=\"mobilemenu__nav\">
                        <ul class=\"meninmenu\">
                            <li><a href=\"\">Accueil</a></li>
                            <li><a href=\"{{ path('promotions_client_homepage') }}\">Promotions</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul>
                                    <li><a href=\"about.html\">About Page</a></li>
                                    <li><a href=\"portfolio.html\">Portfolio</a>
                                        <ul>
                                            <li><a href=\"portfolio.html\">Portfolio</a></li>
                                            <li><a href=\"portfolio-details.html\">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"my-account.html\">My Account</a></li>
                                    <li><a href=\"cart.html\">Cart Page</a></li>
                                    <li><a href=\"checkout.html\">Checkout Page</a></li>
                                    <li><a href=\"wishlist.html\">Wishlist Page</a></li>
                                    <li><a href=\"error404.html\">404 Page</a></li>
                                    <li><a href=\"faq.html\">Faq Page</a></li>
                                    <li><a href=\"team.html\">Team Page</a></li>
                                </ul>
                            </li>
                            <li><a href=\"shop-grid.html\">Shop</a>
                                <ul>
                                    <li><a href=\"shop-grid.html\">Shop Grid</a></li>
                                    <li><a href=\"single-product.html\">Single Product</a></li>
                                </ul>
                            </li>
                            <li><a href=\"blog.html\">Blog</a>
                                <ul>
                                    <li><a href=\"blog.html\">Blog Page</a></li>
                                    <li><a href=\"blog-details.html\">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href=\"{{ path('contact_client_homepage') }}\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Mobile Menu -->
            <div class=\"mobile-menu d-block d-lg-none\">
            </div>
            <!-- Mobile Menu -->
        </div>
    </header>


    <!-- End Search Popup -->
    {% endblock %}

    {% block content %}

    {% endblock %}


    <!-- Footer Area -->
    {% block footer %}
    <footer id=\"wn__footer\" class=\"footer__area bg__cat--8 brown--color\">
        <div class=\"footer-static-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"footer__widget footer__menu\">
                            <div class=\"ft__logo\">
                                <a href=\"index.html\">
                                    <img src=\"{{ asset('images/logo/3.png') }}\" alt=\"logo\">
                                </a>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
                            </div>
                            <div class=\"footer__content\">
                                <ul class=\"social__net social__net--2 d-flex justify-content-center\">
                                    <li><a href=\"#\"><i class=\"bi bi-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"bi bi-google\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"bi bi-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"bi bi-linkedin\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"bi bi-youtube\"></i></a></li>
                                </ul>
                                <ul class=\"mainmenu d-flex justify-content-center\">
                                    <li><a href=\"index.html\">Trending</a></li>
                                    <li><a href=\"index.html\">Best Seller</a></li>
                                    <li><a href=\"index.html\">All Product</a></li>
                                    <li><a href=\"index.html\">Wishlist</a></li>
                                    <li><a href=\"index.html\">Blog</a></li>
                                    <li><a href=\"index.html\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright__wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"copyright\">
                            <div class=\"copy__right__inner text-left\">
                                <p>Copyright <i class=\"fa fa-copyright\"></i> <a href=\"https://freethemescloud.com/\">Free themes Cloud.</a> All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"payment text-right\">
                            <img src=\"images/icons/payment.png\" alt=\"\" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {% endblock %}
    <!-- //Footer Area -->
</div>
<!-- //Main wrapper -->

<!-- JS Files -->
<script src=\"{{ asset('js/vendor/jquery-3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('js/popper.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/plugins.js') }}\"></script>
<script src=\"{{ asset('js/active.js') }}\"></script>

</body>
</html>", "::baseClient.html.twig", "C:\\wamp64\\www\\project\\app/Resources\\views/baseClient.html.twig");
    }
}
