<?php

/* @Accueil\Default\index.html.twig */
class __TwigTemplate_45c7954fa609127d051645412845943e9925cf764db3d409c03d4632b91a3762 extends Twig_Template
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
    <div class=\"slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme\">
        <!-- Start Single Slide -->
        <div class=\"slide animation__style10 bg-image--1 fullscreen align__center--left\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"slider__content\">
                            <div class=\"contentbox\">
                                <h2>Buy <span>your </span></h2>
                                <h2>favourite <span>Book </span></h2>
                                <h2>from <span>Here </span></h2>
                                <a class=\"shopbtn\" href=\"#\">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class=\"slide animation__style10 bg-image--7 fullscreen align__center--left\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"slider__content\">
                            <div class=\"contentbox\">
                                <h2>Buy <span>your </span></h2>
                                <h2>favourite <span>Book </span></h2>
                                <h2>from <span>Here </span></h2>
                                <a class=\"shopbtn\" href=\"#\">shop now</a>
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
                        <h2 class=\"title__be--2\">All <span class=\"color--theme\">Products</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class=\"row mt--50\">
                <div class=\"col-md-12 col-lg-12 col-sm-12\">
                    <div class=\"product__nav nav justify-content-center\" role=\"tablist\">
                        <a class=\"nav-item nav-link active\" data-toggle=\"tab\" href=\"#nav-all\" role=\"tab\">ALL</a>
                        <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-biographic\" role=\"tab\">BIOGRAPHIC</a>
                        <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-adventure\" role=\"tab\">ADVENTURE</a>
                        <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-children\" role=\"tab\">CHILDREN</a>
                        <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-cook\" role=\"tab\">COOK</a>
                    </div>
                </div>
            </div>
            <div class=\"tab__container mt--60\">
                <!-- Start Single Tab Content -->
                <div class=\"row single__tab tab-pane fade show active\" id=\"nav-all\" role=\"tabpanel\">
                    <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\">
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/1.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">BEST SALER</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center content--center\">
                                        <h4><a href=\"single-product.html\">Ghost</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$50.00</li>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">BEST SALER</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center content--center\">
                                        <h4><a href=\"single-product.html\">Ghost</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$50.00</li>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">HOT</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center\">
                                        <h4><a href=\"single-product.html\">Doctor Wldo</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$35.00</li>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">HOT</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center\">
                                        <h4><a href=\"single-product.html\">Doctor Wldo</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$35.00</li>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">HOT</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center\">
                                        <h4><a href=\"single-product.html\">Lando</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$35.00</li>
                                            <li class=\"old_prize\">\$50.00</li>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/11.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">HOT</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center\">
                                        <h4><a href=\"single-product.html\">Lando</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$35.00</li>
                                            <li class=\"old_prize\">\$50.00</li>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/12.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/10.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/1.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/11.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/12.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
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
                <!-- Start Single Tab Content -->
                <div class=\"row single__tab tab-pane fade\" id=\"nav-adventure\" role=\"tabpanel\">
                    <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\">
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/12.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/11.jpg\" alt=\"product image\"></a>
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
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/11.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/10.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
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
                        </div>
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                        </div>
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/10.jpg\" alt=\"product image\"></a>
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
                <!-- Start Single Tab Content -->
                <div class=\"row single__tab tab-pane fade\" id=\"nav-children\" role=\"tabpanel\">
                    <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\">
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
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
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/10.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/12.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/12.jpg\" alt=\"product image\"></a>
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
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/1.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                <!-- Start Single Tab Content -->
                <div class=\"row single__tab tab-pane fade\" id=\"nav-cook\" role=\"tabpanel\">
                    <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\">
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/10.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
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
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
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
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section__title text-center pb--50\">
                        <h2 class=\"title__be--2\">Best <span class=\"color--theme\">Seller </span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"slider center\">
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/1.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/2.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/3.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/4.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/5.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/6.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/7.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/8.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
        </div>
    </section>
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
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme\">
        <!-- Start Single Slide -->
        <div class=\"slide animation__style10 bg-image--1 fullscreen align__center--left\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"slider__content\">
                            <div class=\"contentbox\">
                                <h2>Buy <span>your </span></h2>
                                <h2>favourite <span>Book </span></h2>
                                <h2>from <span>Here </span></h2>
                                <a class=\"shopbtn\" href=\"#\">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class=\"slide animation__style10 bg-image--7 fullscreen align__center--left\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"slider__content\">
                            <div class=\"contentbox\">
                                <h2>Buy <span>your </span></h2>
                                <h2>favourite <span>Book </span></h2>
                                <h2>from <span>Here </span></h2>
                                <a class=\"shopbtn\" href=\"#\">shop now</a>
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
                        <h2 class=\"title__be--2\">All <span class=\"color--theme\">Products</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class=\"row mt--50\">
                <div class=\"col-md-12 col-lg-12 col-sm-12\">
                    <div class=\"product__nav nav justify-content-center\" role=\"tablist\">
                        <a class=\"nav-item nav-link active\" data-toggle=\"tab\" href=\"#nav-all\" role=\"tab\">ALL</a>
                        <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-biographic\" role=\"tab\">BIOGRAPHIC</a>
                        <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-adventure\" role=\"tab\">ADVENTURE</a>
                        <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-children\" role=\"tab\">CHILDREN</a>
                        <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-cook\" role=\"tab\">COOK</a>
                    </div>
                </div>
            </div>
            <div class=\"tab__container mt--60\">
                <!-- Start Single Tab Content -->
                <div class=\"row single__tab tab-pane fade show active\" id=\"nav-all\" role=\"tabpanel\">
                    <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\">
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/1.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">BEST SALER</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center content--center\">
                                        <h4><a href=\"single-product.html\">Ghost</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$50.00</li>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">BEST SALER</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center content--center\">
                                        <h4><a href=\"single-product.html\">Ghost</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$50.00</li>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">HOT</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center\">
                                        <h4><a href=\"single-product.html\">Doctor Wldo</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$35.00</li>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">HOT</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center\">
                                        <h4><a href=\"single-product.html\">Doctor Wldo</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$35.00</li>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">HOT</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center\">
                                        <h4><a href=\"single-product.html\">Lando</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$35.00</li>
                                            <li class=\"old_prize\">\$50.00</li>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/11.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
                                        <div class=\"hot__box\">
                                            <span class=\"hot-label\">HOT</span>
                                        </div>
                                    </div>
                                    <div class=\"product__content content--center\">
                                        <h4><a href=\"single-product.html\">Lando</a></h4>
                                        <ul class=\"prize d-flex\">
                                            <li>\$35.00</li>
                                            <li class=\"old_prize\">\$50.00</li>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/12.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/10.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/1.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/11.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/12.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
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
                <!-- Start Single Tab Content -->
                <div class=\"row single__tab tab-pane fade\" id=\"nav-adventure\" role=\"tabpanel\">
                    <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\">
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/12.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/11.jpg\" alt=\"product image\"></a>
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
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/11.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/10.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
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
                        </div>
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                        </div>
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/10.jpg\" alt=\"product image\"></a>
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
                <!-- Start Single Tab Content -->
                <div class=\"row single__tab tab-pane fade\" id=\"nav-children\" role=\"tabpanel\">
                    <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\">
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
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
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/10.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/12.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/5.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/12.jpg\" alt=\"product image\"></a>
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
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/1.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                <!-- Start Single Tab Content -->
                <div class=\"row single__tab tab-pane fade\" id=\"nav-cook\" role=\"tabpanel\">
                    <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\">
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/10.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
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
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/8.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/3.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/9.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
                            <!-- Start Single Product -->
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                                <div class=\"product product__style--3\">
                                    <div class=\"product__thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/2.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/7.jpg\" alt=\"product image\"></a>
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
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/6.jpg\" alt=\"product image\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img src=\"images/books/4.jpg\" alt=\"product image\"></a>
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
                        <div class=\"single__product\">
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
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section__title text-center pb--50\">
                        <h2 class=\"title__be--2\">Best <span class=\"color--theme\">Seller </span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"slider center\">
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/1.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/2.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/3.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/4.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/5.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/6.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/7.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
            <!-- Single product start -->
            <div class=\"product product__style--3\">
                <div class=\"product__thumb\">
                    <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/8.jpg\" alt=\"product image\"></a>
                </div>
                <div class=\"product__content content--center\">
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
            <!-- Single product end -->
        </div>
    </section>
    <!-- Best Sale Area Area -->


{% endblock %}", "@Accueil\\Default\\index.html.twig", "C:\\wamp64\\www\\project\\src\\AccueilBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
