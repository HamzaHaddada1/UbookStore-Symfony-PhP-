<?php

/* baseClient.html.twig */
class __TwigTemplate_1cd9eca0a9208e035fec9a7aeef291e5ca4490db8f042335cdf82d31f8befa1d extends Twig_Template
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
        // line 245
        echo "
    ";
        // line 246
        $this->displayBlock('content', $context, $blocks);
        // line 249
        echo "

    <!-- Footer Area -->
    ";
        // line 252
        $this->displayBlock('footer', $context, $blocks);
        // line 307
        echo "    <!-- //Footer Area -->
</div>
<!-- //Main wrapper -->

<!-- JS Files -->
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/active.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
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
                                        <li><a href=\"shop-grid.html\">Shop Grid</a></li>
                                        <li><a href=\"single-product.html\">Single Product</a></li>
                                    </ul>
                                    <ul class=\"item item03\">
                                        <li class=\"title\">Echange</li>
                                        <li><a href=\"my-account.html\">My Account</a></li>
                                        <li><a href=\"cart.html\">Cart Page</a></li>
                                        <li><a href=\"checkout.html\">Checkout Page</a></li>
                                        <li><a href=\"wishlist.html\">Wishlist Page</a></li>
                                        <li><a href=\"error404.html\">404 Page</a></li>
                                        <li><a href=\"faq.html\">Faq Page</a></li>
                                    </ul>
                                    <ul class=\"item item03\">
                                        <li class=\"title\">Emprunt</li>
                                        <li><a href=\"shop-grid.html\">Bargain Bestsellers</a></li>
                                        <li><a href=\"shop-grid.html\">Activity Kits</a></li>
                                        <li><a href=\"shop-grid.html\">B&N Classics</a></li>
                                        <li><a href=\"shop-grid.html\">Books Under \$5</a></li>
                                        <li><a href=\"shop-grid.html\">Bargain Books</a></li>
                                    </ul>
                                </div>
                            </li>



                            <li class=\"drop\"><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_client_homepage");
        echo "\">Evenement</a></li>
                            <li class=\"drop\"><a href=\"\">Locaux</a></li>
                            <li><a href=\"\">Forum</a></li>
                            <li><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_client_homepage");
        echo "\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-md-6 col-sm-6 col-6 col-lg-2\">
                    <ul class=\"header__sidebar__right d-flex justify-content-end align-items-center\">
                        <li class=\"wishlist\"><a href=\"#\"></a></li>
                        <li class=\"shopcart\"><a class=\"cartbox_active\" href=\"#\"><span class=\"product_qun\">3</span></a>
                            <!-- Start Shopping Cart -->
                            <div class=\"block-minicart minicart__active\">
                                <div class=\"minicart-content-wrapper\">
                                    <div class=\"micart__close\">
                                        <span>close</span>
                                    </div>
                                    <div class=\"items-total d-flex justify-content-between\">
                                        <span>3 items</span>
                                        <span>Cart Subtotal</span>
                                    </div>
                                    <div class=\"total_amount text-right\">
                                        <span>\$66.00</span>
                                    </div>
                                    <div class=\"single__items\">
                                        <div class=\"miniproduct\">
                                            <div class=\"item01 d-flex\">
                                                <div class=\"thumb\">
                                                    <a href=\"product-details.html\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/sm-img/1.jpg"), "html", null, true);
        echo "\" alt=\"product images\"></a>
                                                </div>
                                                <div class=\"content\">
                                                    <h6><a href=\"product-details.html\">Voyage Yoga Bag</a></h6>
                                                    <span class=\"prize\">\$30.00</span>
                                                    <div class=\"product_prize d-flex justify-content-between\">
                                                        <span class=\"qun\">Qty: 01</span>
                                                        <ul class=\"d-flex justify-content-end\">
                                                            <li><a href=\"#\"><i class=\"zmdi zmdi-settings\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"zmdi zmdi-delete\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"item01 d-flex mt--20\">
                                                <div class=\"thumb\">
                                                    <a href=\"product-details.html\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/sm-img/3.jpg"), "html", null, true);
        echo "\" alt=\"product images\"></a>
                                                </div>
                                                <div class=\"content\">
                                                    <h6><a href=\"product-details.html\">Impulse Duffle</a></h6>
                                                    <span class=\"prize\">\$40.00</span>
                                                    <div class=\"product_prize d-flex justify-content-between\">
                                                        <span class=\"qun\">Qty: 03</span>
                                                        <ul class=\"d-flex justify-content-end\">
                                                            <li><a href=\"#\"><i class=\"zmdi zmdi-settings\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"zmdi zmdi-delete\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"item01 d-flex mt--20\">
                                                <div class=\"thumb\">
                                                    <a href=\"product-details.html\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/sm-img/2.jpg"), "html", null, true);
        echo "\" alt=\"product images\"></a>
                                                </div>
                                                <div class=\"content\">
                                                    <h6><a href=\"product-details.html\">Compete Track Tote</a></h6>
                                                    <span class=\"prize\">\$40.00</span>
                                                    <div class=\"product_prize d-flex justify-content-between\">
                                                        <span class=\"qun\">Qty: 03</span>
                                                        <ul class=\"d-flex justify-content-end\">
                                                            <li><a href=\"#\"><i class=\"zmdi zmdi-settings\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"zmdi zmdi-delete\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mini_action cart\">
                                        <a class=\"cart__btn\" href=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_homepage");
        echo "\">Afficher le panier</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Shopping Cart -->
                        </li>
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
                                                    <span><a href=\"#\">Create An Account</a></span>
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
        // line 199
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
        // line 230
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
    }

    // line 246
    public function block_content($context, array $blocks = array())
    {
        // line 247
        echo "
    ";
    }

    // line 252
    public function block_footer($context, array $blocks = array())
    {
        // line 253
        echo "    <footer id=\"wn__footer\" class=\"footer__area bg__cat--8 brown--color\">
        <div class=\"footer-static-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"footer__widget footer__menu\">
                            <div class=\"ft__logo\">
                                <a href=\"index.html\">
                                    <img src=\"";
        // line 261
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
    }

    public function getTemplateName()
    {
        return "baseClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 261,  396 => 253,  393 => 252,  388 => 247,  385 => 246,  366 => 230,  332 => 199,  292 => 162,  272 => 145,  253 => 129,  234 => 113,  206 => 88,  200 => 85,  167 => 55,  163 => 54,  153 => 47,  149 => 46,  142 => 41,  139 => 40,  133 => 28,  127 => 25,  121 => 22,  117 => 21,  113 => 20,  102 => 12,  98 => 11,  95 => 10,  92 => 9,  84 => 316,  80 => 315,  76 => 314,  72 => 313,  68 => 312,  61 => 307,  59 => 252,  54 => 249,  52 => 246,  49 => 245,  47 => 40,  35 => 30,  33 => 9,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "baseClient.html.twig", "C:\\wamp64\\www\\project\\app\\Resources\\views\\baseClient.html.twig");
    }
}
