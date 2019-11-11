<?php

/* @Accueil\Default\index.html.twig */
class __TwigTemplate_c1ba653af6b9a211b965b52b3b3b5f526eafc7492f9859dcc1871031e73ab63e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "@Accueil\\Default\\index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseClient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Accueil\\Default\\index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Accueil\\Default\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Start Slider area -->
    <div class=\"slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme\" >
        <img src=\"\\Images\\aa.jpg\">
        <!-- Start Single Slide -->
        <div class=\"slide animation__style10  fullscreen align__center--left\">

            <div class=\"container\" >

                <div class=\"row\"  >
                    <div class=\"col-lg-12\">
                        <div class=\"slider__content\">
                            <div class=\"contentbox\">
                                <h2>La<span> lumiere est  </span></h2>
                                <h2>Dans <span> le livre </span></h2>
                                <h2>Laissez<span>-le rayonner </span></h2>
                                <br>
                                <h2>Victor <span> Hugo </span></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->

    </div>
    <!-- End Slider area -->
    <!-- Start Best Seller Area -->
    <section class=\"wn__bestseller__area bg--white pt--80  pb--30\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section__title text-center\">
                        <h2 class=\"title__be--2\">All <span class=\"color--theme\">Books</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class=\"row mt--50\">
                <div class=\"col-md-12 col-lg-12 col-sm-12\">
                    <div class=\"product__nav nav justify-content-center\" role=\"tablist\">


                    </div>
                </div>
            </div>
            <div class=\"tab__container mt--60\">
                <!-- Start Single Tab Content -->
                <div class=\"row single__tab tab-pane fade show active\" id=\"nav-all\" role=\"tabpanel\">

                    <!-- Start Single Product -->
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livres"] ?? $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 56
            echo "
                        <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                            <div class=\"product product__style--3\">
                                <div class=\"product__thumb\">
                                    <a class=\"first__img\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_shou", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "img", array()), "html", null, true);
            echo "\" alt=\"product image\"></a>
                                    <a class=\"second__img animation1\"href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_shou", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                    <div class=\"hot__box\">
                                        <span class=\"hot-label\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "auteur", array()), "html", null, true);
            echo "</span>
                                    </div>
                                </div>
                                <div class=\"product__content content--center content--center\">
                                    <h4><a href=\"single-product.html\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "nom", array()), "html", null, true);
            echo "</a></h4>
                                    <ul class=\"prize d-flex\">
                                        <li>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "prix", array()), "html", null, true);
            echo " Dinars</li>
                                        ";
            // line 70
            if (($this->getAttribute($this->getAttribute($context["livre"], "promo", array()), "valeur", array()) != 0)) {
                // line 71
                echo "                                            <li class=\"old_prize\">";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["livre"], "prix", array()) + (($this->getAttribute($context["livre"], "prix", array()) * $this->getAttribute($this->getAttribute($context["livre"], "promo", array()), "valeur", array())) / 100)), "html", null, true);
                echo " Dinar</li>
                                        ";
            }
            // line 73
            echo "                                    </ul>
                                    <ul>

                                    </ul>
                                    <ul>
                                        <li class=\"ratelivre\">
                                            Exemplaire restant : ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "stock", array()), "html", null, true);
            echo "
                                        </li>
                                    </ul>
                                    <div class=\"action\">
                                        <div class=\"actions_inner\">
                                            <ul class=\"add_to_links\">
                                                <li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
                                                <li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
                                                <li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
                                                <li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"product__hover--content\">
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
                    <div class=\"navigation\">
                    </div>

                </div>
            </div>
        </div>
        <!-- End Single Tab Content -->
        <!-- Start Single Tab Content -->
        <div class=\"row single__tab tab-pane fade\" id=\"nav-biographic\" role=\"tabpanel\">
            <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\">
                <div class=\"single__product\">
                    <!-- Start Single Product -->
                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                        <div class=\"product product__style--3\">
                            <div class=\"product__thumb\">
                                <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/1.jpg\" alt=\"product image\"></a>
                                <div class=\"hot__box\">
                                    <span class=\"hot-label\">BEST SALLER</span>
                                </div>
                            </div>
                            <div class=\"product__content content--center\">
                                <h4><a href=\"single-product.html\">Bowen Greenwood</a></h4>
                                <ul class=\"prize d-flex\">
                                    <li>\$40.00</li>
                                    <li class=\"old_prize\">\$35.00</li>
                                </ul>
                                <div class=\"action\">
                                    <div class=\"actions_inner\">
                                        <ul class=\"add_to_links\">
                                            <li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
                                            <li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
                                            <li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
                                            <li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"product__hover--content\">
                                    <ul class=\"rating d-flex\">
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Product -->


                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                        <div class=\"product product__style--3\">
                            <div class=\"product__thumb\">
                                <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                <div class=\"hot__box\">
                                    <span class=\"hot-label\">BEST SALLER</span>
                                </div>
                            </div>
                            <div class=\"product__content content--center\">
                                <h4><a href=\"single-product.html\">Bowen Greenwood</a></h4>
                                <ul class=\"prize d-flex\">
                                    <li>\$40.00</li>
                                    <li class=\"old_prize\">\$35.00</li>
                                </ul>
                                <div class=\"action\">
                                    <div class=\"actions_inner\">
                                        <ul class=\"add_to_links\">
                                            <li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
                                            <li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
                                            <li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
                                            <li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"product__hover--content\">
                                    <ul class=\"rating d-flex\">
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Product -->
                    <!-- Start Single Product -->
                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                        <div class=\"product product__style--3\">
                            <div class=\"product__thumb\">
                                <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                <div class=\"hot__box\">
                                    <span class=\"hot-label\">BEST SALLER</span>
                                </div>
                            </div>
                            <div class=\"product__content content--center\">
                                <h4><a href=\"single-product.html\">Bowen Greenwood</a></h4>
                                <ul class=\"prize d-flex\">
                                    <li>\$40.00</li>
                                    <li class=\"old_prize\">\$35.00</li>
                                </ul>
                                <div class=\"action\">
                                    <div class=\"actions_inner\">
                                        <ul class=\"add_to_links\">
                                            <li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
                                            <li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
                                            <li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
                                            <li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"product__hover--content\">
                                    <ul class=\"rating d-flex\">
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Product -->
                </div>
            </div>
        </div>
        <!-- End Single Tab Content -->
        </div>
        </div>
    </section>
    <!-- Start BEst Seller Area -->
    <!-- Start Recent Post Area -->
    <section class=\"wn__recent__post bg--gray ptb--80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section__title text-center\">
                        <h2 class=\"title__be--2\">Nos <span class=\"color--theme\">Evènements</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class=\"row mt--50\">
                <div class=\"col-md-6 col-lg-4 col-sm-12\">
                    <div class=\"post__itam\">
                        <div class=\"content\">
                            <h3><a href=\"blog-details.html\">International activities of the Frankfurt Book </a></h3>
                            <p>We are proud to announce the very first the edition of the frankfurt news.We are proud to announce the very first of  edition of the fault frankfurt news for us.</p>
                            <div class=\"post__time\">
                                <span class=\"day\">Dec 06, 18</span>
                                <div class=\"post-meta\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"bi bi-love\"></i>72</a></li>
                                        <li><a href=\"#\"><i class=\"bi bi-chat-bubble\"></i>27</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 col-sm-12\">
                    <div class=\"post__itam\">
                        <div class=\"content\">
                            <h3><a href=\"blog-details.html\">Reading has a signficant info  number of benefits</a></h3>
                            <p>Find all the information you need to ensure your experience.Find all the information you need to ensure your experience . Find all the information you of.</p>
                            <div class=\"post__time\">
                                <span class=\"day\">Mar 08, 18</span>
                                <div class=\"post-meta\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"bi bi-love\"></i>72</a></li>
                                        <li><a href=\"#\"><i class=\"bi bi-chat-bubble\"></i>27</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 col-sm-12\">
                    <div class=\"post__itam\">
                        <div class=\"content\">
                            <h3><a href=\"blog-details.html\">The London Book Fair is to be packed with exciting </a></h3>
                            <p>The London Book Fair is the global area inon marketplace for rights negotiation.The year  London Book Fair is the global area inon forg marketplace for rights.</p>
                            <div class=\"post__time\">
                                <span class=\"day\">Nov 11, 18</span>
                                <div class=\"post-meta\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"bi bi-love\"></i>72</a></li>
                                        <li><a href=\"#\"><i class=\"bi bi-chat-bubble\"></i>27</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Recent Post Area -->
    <!-- Best Sale Area -->
    <section class=\"best-seel-area pt--80 pb--60\">

        <div class=\"slider center\">
            <!-- Single product start -->
            ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livres"] ?? $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 318
            echo "
                ";
            // line 319
            if (($this->getAttribute($context["livre"], "stock", array()) < 36)) {
                // line 320
                echo "                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                        <div class=\"product product__style--3\">
                            <div class=\"product__thumb\">
                                <a class=\"first__img\" href=\"";
                // line 323
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_shou", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "img", array()), "html", null, true);
                echo "\" alt=\"product image\"></a>
                                <a class=\"second__img animation1\"href=\"";
                // line 324
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_shou", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
                echo "\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                <div class=\"hot__box\">
                                    <span class=\"hot-label\">BEST SALER</span>
                                </div>
                            </div>
                            <div class=\"product__content content--center content--center\">
                                <h4><a href=\"single-product.html\">";
                // line 330
                echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "nom", array()), "html", null, true);
                echo "</a></h4>
                                <ul class=\"prize d-flex\">
                                    <li>";
                // line 332
                echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "prix", array()), "html", null, true);
                echo " Dinars</li>
                                    ";
                // line 333
                if (($this->getAttribute($this->getAttribute($context["livre"], "promo", array()), "valeur", array()) != 0)) {
                    // line 334
                    echo "                                        <li class=\"old_prize\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["livre"], "prix", array()) + (($this->getAttribute($context["livre"], "prix", array()) * $this->getAttribute($this->getAttribute($context["livre"], "promo", array()), "valeur", array())) / 100)), "html", null, true);
                    echo " Dinar</li>
                                    ";
                }
                // line 336
                echo "                                </ul>
                                <ul>

                                </ul>
                                <ul>
                                    <li class=\"ratelivre\">
                                        Exemplaire restant : ";
                // line 342
                echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "stock", array()), "html", null, true);
                echo "
                                    </li>
                                </ul>
                                <div class=\"action\">
                                    <div class=\"actions_inner\">
                                        <ul class=\"add_to_links\">
                                            <li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
                                            <li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
                                            <li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
                                            <li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"product__hover--content\">
                                    <ul class=\"rating d-flex\">
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 368
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        echo "
        </div>

        </div>

        </div>

    </section>
    <!-- Single product end -->

    <!-- Best Sale Area Area -->






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Accueil\\Default\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 369,  485 => 368,  456 => 342,  448 => 336,  442 => 334,  440 => 333,  436 => 332,  431 => 330,  422 => 324,  416 => 323,  411 => 320,  409 => 319,  406 => 318,  402 => 317,  190 => 107,  156 => 79,  148 => 73,  142 => 71,  140 => 70,  136 => 69,  131 => 67,  124 => 63,  119 => 61,  113 => 60,  107 => 56,  103 => 55,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseClient.html.twig' %}
{% block content %}
    <!-- Start Slider area -->
    <div class=\"slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme\" >
        <img src=\"\\Images\\aa.jpg\">
        <!-- Start Single Slide -->
        <div class=\"slide animation__style10  fullscreen align__center--left\">

            <div class=\"container\" >

                <div class=\"row\"  >
                    <div class=\"col-lg-12\">
                        <div class=\"slider__content\">
                            <div class=\"contentbox\">
                                <h2>La<span> lumiere est  </span></h2>
                                <h2>Dans <span> le livre </span></h2>
                                <h2>Laissez<span>-le rayonner </span></h2>
                                <br>
                                <h2>Victor <span> Hugo </span></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->

    </div>
    <!-- End Slider area -->
    <!-- Start Best Seller Area -->
    <section class=\"wn__bestseller__area bg--white pt--80  pb--30\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section__title text-center\">
                        <h2 class=\"title__be--2\">All <span class=\"color--theme\">Books</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class=\"row mt--50\">
                <div class=\"col-md-12 col-lg-12 col-sm-12\">
                    <div class=\"product__nav nav justify-content-center\" role=\"tablist\">


                    </div>
                </div>
            </div>
            <div class=\"tab__container mt--60\">
                <!-- Start Single Tab Content -->
                <div class=\"row single__tab tab-pane fade show active\" id=\"nav-all\" role=\"tabpanel\">

                    <!-- Start Single Product -->
                    {% for livre in livres %}

                        <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                            <div class=\"product product__style--3\">
                                <div class=\"product__thumb\">
                                    <a class=\"first__img\" href=\"{{ path('livres_shou', { 'id': livre.id }) }}\"><img src=\"{{ livre.img }}\" alt=\"product image\"></a>
                                    <a class=\"second__img animation1\"href=\"{{ path('livres_shou', { 'id': livre.id }) }}\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                    <div class=\"hot__box\">
                                        <span class=\"hot-label\">{{ livre.auteur }}</span>
                                    </div>
                                </div>
                                <div class=\"product__content content--center content--center\">
                                    <h4><a href=\"single-product.html\">{{ livre.nom }}</a></h4>
                                    <ul class=\"prize d-flex\">
                                        <li>{{ livre.prix }} Dinars</li>
                                        {%  if  livre.promo.valeur !=0 %}
                                            <li class=\"old_prize\">{{ livre.prix + livre.prix* livre.promo.valeur/100}} Dinar</li>
                                        {%  endif %}
                                    </ul>
                                    <ul>

                                    </ul>
                                    <ul>
                                        <li class=\"ratelivre\">
                                            Exemplaire restant : {{ livre.stock}}
                                        </li>
                                    </ul>
                                    <div class=\"action\">
                                        <div class=\"actions_inner\">
                                            <ul class=\"add_to_links\">
                                                <li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
                                                <li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
                                                <li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
                                                <li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"product__hover--content\">
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    {% endfor %}

                    <div class=\"navigation\">
                    </div>

                </div>
            </div>
        </div>
        <!-- End Single Tab Content -->
        <!-- Start Single Tab Content -->
        <div class=\"row single__tab tab-pane fade\" id=\"nav-biographic\" role=\"tabpanel\">
            <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\">
                <div class=\"single__product\">
                    <!-- Start Single Product -->
                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                        <div class=\"product product__style--3\">
                            <div class=\"product__thumb\">
                                <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/1.jpg\" alt=\"product image\"></a>
                                <div class=\"hot__box\">
                                    <span class=\"hot-label\">BEST SALLER</span>
                                </div>
                            </div>
                            <div class=\"product__content content--center\">
                                <h4><a href=\"single-product.html\">Bowen Greenwood</a></h4>
                                <ul class=\"prize d-flex\">
                                    <li>\$40.00</li>
                                    <li class=\"old_prize\">\$35.00</li>
                                </ul>
                                <div class=\"action\">
                                    <div class=\"actions_inner\">
                                        <ul class=\"add_to_links\">
                                            <li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
                                            <li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
                                            <li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
                                            <li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"product__hover--content\">
                                    <ul class=\"rating d-flex\">
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Product -->


                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                        <div class=\"product product__style--3\">
                            <div class=\"product__thumb\">
                                <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                <div class=\"hot__box\">
                                    <span class=\"hot-label\">BEST SALLER</span>
                                </div>
                            </div>
                            <div class=\"product__content content--center\">
                                <h4><a href=\"single-product.html\">Bowen Greenwood</a></h4>
                                <ul class=\"prize d-flex\">
                                    <li>\$40.00</li>
                                    <li class=\"old_prize\">\$35.00</li>
                                </ul>
                                <div class=\"action\">
                                    <div class=\"actions_inner\">
                                        <ul class=\"add_to_links\">
                                            <li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
                                            <li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
                                            <li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
                                            <li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"product__hover--content\">
                                    <ul class=\"rating d-flex\">
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Product -->
                    <!-- Start Single Product -->
                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                        <div class=\"product product__style--3\">
                            <div class=\"product__thumb\">
                                <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                <div class=\"hot__box\">
                                    <span class=\"hot-label\">BEST SALLER</span>
                                </div>
                            </div>
                            <div class=\"product__content content--center\">
                                <h4><a href=\"single-product.html\">Bowen Greenwood</a></h4>
                                <ul class=\"prize d-flex\">
                                    <li>\$40.00</li>
                                    <li class=\"old_prize\">\$35.00</li>
                                </ul>
                                <div class=\"action\">
                                    <div class=\"actions_inner\">
                                        <ul class=\"add_to_links\">
                                            <li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
                                            <li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
                                            <li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
                                            <li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"product__hover--content\">
                                    <ul class=\"rating d-flex\">
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Product -->
                </div>
            </div>
        </div>
        <!-- End Single Tab Content -->
        </div>
        </div>
    </section>
    <!-- Start BEst Seller Area -->
    <!-- Start Recent Post Area -->
    <section class=\"wn__recent__post bg--gray ptb--80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section__title text-center\">
                        <h2 class=\"title__be--2\">Nos <span class=\"color--theme\">Evènements</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class=\"row mt--50\">
                <div class=\"col-md-6 col-lg-4 col-sm-12\">
                    <div class=\"post__itam\">
                        <div class=\"content\">
                            <h3><a href=\"blog-details.html\">International activities of the Frankfurt Book </a></h3>
                            <p>We are proud to announce the very first the edition of the frankfurt news.We are proud to announce the very first of  edition of the fault frankfurt news for us.</p>
                            <div class=\"post__time\">
                                <span class=\"day\">Dec 06, 18</span>
                                <div class=\"post-meta\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"bi bi-love\"></i>72</a></li>
                                        <li><a href=\"#\"><i class=\"bi bi-chat-bubble\"></i>27</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 col-sm-12\">
                    <div class=\"post__itam\">
                        <div class=\"content\">
                            <h3><a href=\"blog-details.html\">Reading has a signficant info  number of benefits</a></h3>
                            <p>Find all the information you need to ensure your experience.Find all the information you need to ensure your experience . Find all the information you of.</p>
                            <div class=\"post__time\">
                                <span class=\"day\">Mar 08, 18</span>
                                <div class=\"post-meta\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"bi bi-love\"></i>72</a></li>
                                        <li><a href=\"#\"><i class=\"bi bi-chat-bubble\"></i>27</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 col-sm-12\">
                    <div class=\"post__itam\">
                        <div class=\"content\">
                            <h3><a href=\"blog-details.html\">The London Book Fair is to be packed with exciting </a></h3>
                            <p>The London Book Fair is the global area inon marketplace for rights negotiation.The year  London Book Fair is the global area inon forg marketplace for rights.</p>
                            <div class=\"post__time\">
                                <span class=\"day\">Nov 11, 18</span>
                                <div class=\"post-meta\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"bi bi-love\"></i>72</a></li>
                                        <li><a href=\"#\"><i class=\"bi bi-chat-bubble\"></i>27</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Recent Post Area -->
    <!-- Best Sale Area -->
    <section class=\"best-seel-area pt--80 pb--60\">

        <div class=\"slider center\">
            <!-- Single product start -->
            {% for livre in livres %}

                {% if livre.stock < 36 %}
                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                        <div class=\"product product__style--3\">
                            <div class=\"product__thumb\">
                                <a class=\"first__img\" href=\"{{ path('livres_shou', { 'id': livre.id }) }}\"><img src=\"{{ livre.img }}\" alt=\"product image\"></a>
                                <a class=\"second__img animation1\"href=\"{{ path('livres_shou', { 'id': livre.id }) }}\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                <div class=\"hot__box\">
                                    <span class=\"hot-label\">BEST SALER</span>
                                </div>
                            </div>
                            <div class=\"product__content content--center content--center\">
                                <h4><a href=\"single-product.html\">{{ livre.nom }}</a></h4>
                                <ul class=\"prize d-flex\">
                                    <li>{{ livre.prix }} Dinars</li>
                                    {%  if  livre.promo.valeur !=0 %}
                                        <li class=\"old_prize\">{{ livre.prix + livre.prix* livre.promo.valeur/100}} Dinar</li>
                                    {%  endif %}
                                </ul>
                                <ul>

                                </ul>
                                <ul>
                                    <li class=\"ratelivre\">
                                        Exemplaire restant : {{ livre.stock}}
                                    </li>
                                </ul>
                                <div class=\"action\">
                                    <div class=\"actions_inner\">
                                        <ul class=\"add_to_links\">
                                            <li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
                                            <li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
                                            <li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
                                            <li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"product__hover--content\">
                                    <ul class=\"rating d-flex\">
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                        <li><i class=\"fa fa-star-o\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}

        </div>

        </div>

        </div>

    </section>
    <!-- Single product end -->

    <!-- Best Sale Area Area -->






{% endblock %}", "@Accueil\\Default\\index.html.twig", "C:\\wamp64\\www\\project\\src\\AccueilBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
