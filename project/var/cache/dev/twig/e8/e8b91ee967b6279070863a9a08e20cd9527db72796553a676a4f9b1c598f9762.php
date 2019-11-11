<?php

/* AchatBundle:Default:shopGrid.html.twig */
class __TwigTemplate_f32e2a9f2bbde65f23794b7fec60fc672c68eb043734e49524bfa8fcf4ac2972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "AchatBundle:Default:shopGrid.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AchatBundle:Default:shopGrid.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AchatBundle:Default:shopGrid.html.twig"));

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
        echo "    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area bg-image--6\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"bradcaump__inner text-center\">
                        <h2 class=\"bradcaump-title\">Shop Grid</h2>
                        <nav class=\"bradcaump-content\">
                            <a class=\"breadcrumb_item\" href=\"index.html\">Home</a>
                            <span class=\"brd-separetor\">/</span>
                            <span class=\"breadcrumb_item active\">Shop Grid</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <div class=\"page-shop-sidebar left--sidebar bg--white section-padding--lg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40\">
                    <div class=\"shop__sidebar\">
                        <aside class=\"wedget__categories poroduct--cat\">
                            <h3 class=\"wedget__title\">Product Categories</h3>
                            <ul>
                                <li><a href=\"#\">Biography <span>(3)</span></a></li>
                                <li><a href=\"#\">Business <span>(4)</span></a></li>
                                <li><a href=\"#\">Cookbooks <span>(6)</span></a></li>
                                <li><a href=\"#\">Health & Fitness <span>(7)</span></a></li>
                                <li><a href=\"#\">History <span>(8)</span></a></li>
                                <li><a href=\"#\">Mystery <span>(9)</span></a></li>
                                <li><a href=\"#\">Inspiration <span>(13)</span></a></li>
                                <li><a href=\"#\">Romance <span>(20)</span></a></li>
                                <li><a href=\"#\">Fiction/Fantasy <span>(22)</span></a></li>
                                <li><a href=\"#\">Self-Improvement <span>(13)</span></a></li>
                                <li><a href=\"#\">Humor Books <span>(17)</span></a></li>
                                <li><a href=\"#\">Harry Potter <span>(20)</span></a></li>
                                <li><a href=\"#\">Land of Stories <span>(34)</span></a></li>
                                <li><a href=\"#\">Kids' Music <span>(60)</span></a></li>
                                <li><a href=\"#\">Toys & Games <span>(3)</span></a></li>
                                <li><a href=\"#\">hoodies <span>(3)</span></a></li>
                            </ul>
                        </aside>
                        <aside class=\"wedget__categories pro--range\">
                            <h3 class=\"wedget__title\">Filter by price</h3>
                            <div class=\"content-shopby\">
                                <div class=\"price_filter s-filter clear\">
                                    <form action=\"#\" method=\"GET\">
                                        <div id=\"slider-range\"></div>
                                        <div class=\"slider__range--output\">
                                            <div class=\"price__output--wrap\">
                                                <div class=\"price--output\">
                                                    <span>Price :</span><input type=\"text\" id=\"amount\" readonly=\"\">
                                                </div>
                                                <div class=\"price--filter\">
                                                    <a href=\"#\">Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </aside>
                        <aside class=\"wedget__categories poroduct--tag\">
                            <h3 class=\"wedget__title\">Product Tags</h3>
                            <ul>
                                <li><a href=\"#\">Biography</a></li>
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Cookbooks</a></li>
                                <li><a href=\"#\">Health & Fitness</a></li>
                                <li><a href=\"#\">History</a></li>
                                <li><a href=\"#\">Mystery</a></li>
                                <li><a href=\"#\">Inspiration</a></li>
                                <li><a href=\"#\">Religion</a></li>
                                <li><a href=\"#\">Fiction</a></li>
                                <li><a href=\"#\">Fantasy</a></li>
                                <li><a href=\"#\">Music</a></li>
                                <li><a href=\"#\">Toys</a></li>
                                <li><a href=\"#\">Hoodies</a></li>
                            </ul>
                        </aside>
                        <aside class=\"wedget__categories sidebar--banner\">
                            <img src=\"images/others/banner_left.jpg\" alt=\"banner images\">
                            <div class=\"text\">
                                <h2>new products</h2>
                                <h6>save up to <br> <strong>40%</strong>off</h6>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class=\"col-lg-9 col-12 order-1 order-lg-2\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between\">
                                <div class=\"shop__list nav justify-content-center\" role=\"tablist\">
                                    <a class=\"nav-item nav-link active\" data-toggle=\"tab\" href=\"#nav-grid\" role=\"tab\"><i
                                                class=\"fa fa-th\"></i></a>
                                    <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-list\" role=\"tab\"><i
                                                class=\"fa fa-list\"></i></a>
                                </div>
                                <p>Showing 1–12 of 40 results</p>

                            </div>
                        </div>
                    </div>
                    <div class=\"tab__container\">
                        <div class=\"shop-grid tab-pane fade show active\" id=\"nav-grid\" role=\"tabpanel\">
                            <div class=\"row\">
                                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["l"] ?? $this->getContext($context, "l")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 114
            echo "                                    <!-- Start Single Product -->
                                    <div class=\"product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12\">
                                        <div class=\"product__thumb\">
                                            <a class=\"first__img\" href=\"single-product.html\"><img
                                                        src=\"images/books/1.jpg\" alt=\"product image\" ></a>
                                            <a href=\"single-product.html\"><img
                                                        src=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "img", array()), "html", null, true);
            echo "\" alt=\"product image\"></a>
                                            <div class=\"hot__box\">
                                                <span class=\"hot-label\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "auteur", array()), "html", null, true);
            echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"product__content content--center\">
                                            <h4><a href=\"single-product.html\">";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "nom", array()), "html", null, true);
            echo "</a></h4>
                                            <ul class=\"prize d-flex\">
                                                <li>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "prix", array()), "html", null, true);
            echo "</li>
                                                ";
            // line 129
            if (($this->getAttribute($this->getAttribute($context["livre"], "promo", array()), "valeur", array()) != 0)) {
                // line 130
                echo "                                                <li class=\"old_prize\">";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["livre"], "prix", array()) + (($this->getAttribute($context["livre"], "prix", array()) * $this->getAttribute($this->getAttribute($context["livre"], "promo", array()), "valeur", array())) / 100)), "html", null, true);
                echo "</li>
                                                ";
            }
            // line 132
            echo "                                            </ul>
                                            <div class=\"action\">
                                                <div class=\"actions_inner\">
                                                    <ul class=\"add_to_links\">
                                                        <li><a class=\"wishlist\" onclick=\"myAlert(";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "id", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "stock", array()), "html", null, true);
            echo ")\"
                                                            ><i
                                                                        class=\"bi bi-shopping-cart-full\"></i></a></li>
                                                        <li><a data-toggle=\"modal\" title=\"Quick View\"
                                                               class=\"quickview modal-view detail-link\"
                                                               href=\"#productmodal\"><i class=\"bi bi-search\"></i></a>
                                                        </li>
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
                                    <!-- End Single Product -->
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                            </div>
                            <ul class=\"wn__pagination\">
                                <li class=\"active\"><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i></a></li>
                            </ul>
                        </div>
                        <div class=\"shop-grid tab-pane fade\" id=\"nav-list\" role=\"tabpanel\">
                            <div class=\"list__view__wrapper\">
                                <!-- Start Single Product -->
                                <div class=\"list__view\">
                                    <div class=\"thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/product/1.jpg\"
                                                                                              alt=\"product images\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img
                                                    src=\"images/product/2.jpg\" alt=\"product images\"></a>
                                    </div>
                                    <div class=\"content\">
                                        <h2><a href=\"single-product.html\">Ali Smith</a></h2>
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                        <ul class=\"prize__box\">
                                            <li>\$111.00</li>
                                            <li class=\"old__prize\">\$220.00</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <ul class=\"cart__action d-flex\">
                                            <li class=\"cart\"><a href=\"cart.html\">Add to cart</a></li>
                                            <li class=\"wishlist\"><a href=\"cart.html\"></a></li>
                                            <li class=\"compare\"><a href=\"cart.html\"></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <!-- Start Single Product -->
                                <div class=\"list__view mt--40\">
                                    <div class=\"thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/product/2.jpg\"
                                                                                              alt=\"product images\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img
                                                    src=\"images/product/4.jpg\" alt=\"product images\"></a>
                                    </div>
                                    <div class=\"content\">
                                        <h2><a href=\"single-product.html\">Blood In Water</a></h2>
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                        <ul class=\"prize__box\">
                                            <li>\$111.00</li>
                                            <li class=\"old__prize\">\$220.00</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <ul class=\"cart__action d-flex\">
                                            <li class=\"cart\"><a href=\"cart.html\">Add to cart</a></li>
                                            <li class=\"wishlist\"><a href=\"cart.html\"></a></li>
                                            <li class=\"compare\"><a href=\"cart.html\"></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <!-- Start Single Product -->
                                <div class=\"list__view mt--40\">
                                    <div class=\"thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/product/3.jpg\"
                                                                                              alt=\"product images\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img
                                                    src=\"images/product/6.jpg\" alt=\"product images\"></a>
                                    </div>
                                    <div class=\"content\">
                                        <h2><a href=\"single-product.html\">Madeness Overated</a></h2>
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                        <ul class=\"prize__box\">
                                            <li>\$111.00</li>
                                            <li class=\"old__prize\">\$220.00</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <ul class=\"cart__action d-flex\">
                                            <li class=\"cart\"><a href=\"cart.html\">Add to cart</a></li>
                                            <li class=\"wishlist\"><a href=\"cart.html\"></a></li>
                                            <li class=\"compare\"><a href=\"cart.html\"></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <!-- Start Single Product -->
                                <div class=\"list__view mt--40\">
                                    <div class=\"thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/product/4.jpg\"
                                                                                              alt=\"product images\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img
                                                    src=\"images/product/6.jpg\" alt=\"product images\"></a>
                                    </div>
                                    <div class=\"content\">
                                        <h2><a href=\"single-product.html\">Watching You</a></h2>
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                        <ul class=\"prize__box\">
                                            <li>\$111.00</li>
                                            <li class=\"old__prize\">\$220.00</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <ul class=\"cart__action d-flex\">
                                            <li class=\"cart\"><a href=\"cart.html\">Add to cart</a></li>
                                            <li class=\"wishlist\"><a href=\"cart.html\"></a></li>
                                            <li class=\"compare\"><a href=\"cart.html\"></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <!-- Start Single Product -->
                                <div class=\"list__view mt--40\">
                                    <div class=\"thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/product/5.jpg\"
                                                                                              alt=\"product images\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img
                                                    src=\"images/product/9.jpg\" alt=\"product images\"></a>
                                    </div>
                                    <div class=\"content\">
                                        <h2><a href=\"single-product.html\">Court Wings Run</a></h2>
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                        <ul class=\"prize__box\">
                                            <li>\$111.00</li>
                                            <li class=\"old__prize\">\$220.00</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <ul class=\"cart__action d-flex\">
                                            <li class=\"cart\"><a href=\"cart.html\">Add to cart</a></li>
                                            <li class=\"wishlist\"><a href=\"cart.html\"></a></li>
                                            <li class=\"compare\"><a href=\"cart.html\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"blocking-background\" style=\"display: none \" onclick=\"hide()\"></div>
    <div class=\"popup\" tabindex=\"-1\" role=\"dialog\" style=\"display: none\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 id=\"modal-title-text\" class=\"modal-title\">Modal title</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" onclick=\"hide()\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form name=\"form\" method=\"post\" action=";
        // line 362
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_ajouter");
        echo ">
                    <div class=\"modal-body\">
                            <input id=\"id-ajout\" name=\"id\" hidden value=\"\" >
                            <label for=\"exampleInputEmail1\" >Type: </label>
                            <select id=\"type-choisi\" name=\"type\" class=\"form-control\" onchange=\"test()\">
                                <option value=\"0\">Copie</option>
                                <option value=\"1\">PDF</option>
                                <option value=\"2\">Sonore</option>
                            </select>
                            <label for=\"exampleInputEmail1\">Quantité: </label>
                            <input name=\"quantite\" min=\"1\" type=\"number\" class=\"form-control\" id=\"quantite-choisie\"
                                   placeholder=\"Choisir la quantité\">
                    </div>
                    <div class=\"modal-footer\">

                        <input id=\"confirmer\" type=\"submit\" class=\"submit-button\" href=\"\" value=\"Ajouter\">
                        <a id=\"abort\" type=\"button\" class=\"submit-button\" data-dismiss=\"modal\"
                           onclick=\"hide()\">Fermer</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
        var stock;
        function myAlert(id, st) {
            stock = st;
            //\$(\"#confirmer\").attr(\"disabled\", \"false\");
            \$(\".blocking-background\").attr(\"style\", \"display : block\");
            \$(\".popup\").attr(\"style\", \"display: block\");
            \$(\"#modal-body-text\").text(\"\");
            \$(\"#modal-title-text\").text(\"Ajouter Au panier\");

            \$(\"#id-ajout\").attr(\"value\", id);
            \$(\"#quantite-choisie\").attr(\"max\", st);
            if(st == 0){
                if( \$(\"#type-choisi option:selected\").text() == \"Copie\"){
                    \$(\"#confirmer\").attr(\"disabled\", \"true\");
                }
            }

        }

        function hide() {
            \$(\".blocking-background\").attr(\"style\", \"display: none\");
            \$(\".popup\").attr(\"style\", \"display: none\");
        }

        function test() {
            value = \$(\"#type-choisi option:selected\").text();
            if(value == \"Copie\") {
                \$(\"#quantite-choisie\").removeAttr('disabled');
                if(stock == 0) {
                    \$(\"#confirmer\").attr(\"disabled\", \"true\");
                }

            }else{
                \$(\"#quantite-choisie\").val(1);
                \$(\"#quantite-choisie\").attr(\"disabled\", \"true\");
                \$(\"#confirmer\").removeAttr('disabled');
            }

        }

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AchatBundle:Default:shopGrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 362,  239 => 159,  208 => 136,  202 => 132,  196 => 130,  194 => 129,  190 => 128,  185 => 126,  178 => 122,  173 => 120,  165 => 114,  161 => 113,  49 => 3,  40 => 2,  11 => 1,);
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
    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area bg-image--6\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"bradcaump__inner text-center\">
                        <h2 class=\"bradcaump-title\">Shop Grid</h2>
                        <nav class=\"bradcaump-content\">
                            <a class=\"breadcrumb_item\" href=\"index.html\">Home</a>
                            <span class=\"brd-separetor\">/</span>
                            <span class=\"breadcrumb_item active\">Shop Grid</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <div class=\"page-shop-sidebar left--sidebar bg--white section-padding--lg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40\">
                    <div class=\"shop__sidebar\">
                        <aside class=\"wedget__categories poroduct--cat\">
                            <h3 class=\"wedget__title\">Product Categories</h3>
                            <ul>
                                <li><a href=\"#\">Biography <span>(3)</span></a></li>
                                <li><a href=\"#\">Business <span>(4)</span></a></li>
                                <li><a href=\"#\">Cookbooks <span>(6)</span></a></li>
                                <li><a href=\"#\">Health & Fitness <span>(7)</span></a></li>
                                <li><a href=\"#\">History <span>(8)</span></a></li>
                                <li><a href=\"#\">Mystery <span>(9)</span></a></li>
                                <li><a href=\"#\">Inspiration <span>(13)</span></a></li>
                                <li><a href=\"#\">Romance <span>(20)</span></a></li>
                                <li><a href=\"#\">Fiction/Fantasy <span>(22)</span></a></li>
                                <li><a href=\"#\">Self-Improvement <span>(13)</span></a></li>
                                <li><a href=\"#\">Humor Books <span>(17)</span></a></li>
                                <li><a href=\"#\">Harry Potter <span>(20)</span></a></li>
                                <li><a href=\"#\">Land of Stories <span>(34)</span></a></li>
                                <li><a href=\"#\">Kids' Music <span>(60)</span></a></li>
                                <li><a href=\"#\">Toys & Games <span>(3)</span></a></li>
                                <li><a href=\"#\">hoodies <span>(3)</span></a></li>
                            </ul>
                        </aside>
                        <aside class=\"wedget__categories pro--range\">
                            <h3 class=\"wedget__title\">Filter by price</h3>
                            <div class=\"content-shopby\">
                                <div class=\"price_filter s-filter clear\">
                                    <form action=\"#\" method=\"GET\">
                                        <div id=\"slider-range\"></div>
                                        <div class=\"slider__range--output\">
                                            <div class=\"price__output--wrap\">
                                                <div class=\"price--output\">
                                                    <span>Price :</span><input type=\"text\" id=\"amount\" readonly=\"\">
                                                </div>
                                                <div class=\"price--filter\">
                                                    <a href=\"#\">Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </aside>
                        <aside class=\"wedget__categories poroduct--tag\">
                            <h3 class=\"wedget__title\">Product Tags</h3>
                            <ul>
                                <li><a href=\"#\">Biography</a></li>
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Cookbooks</a></li>
                                <li><a href=\"#\">Health & Fitness</a></li>
                                <li><a href=\"#\">History</a></li>
                                <li><a href=\"#\">Mystery</a></li>
                                <li><a href=\"#\">Inspiration</a></li>
                                <li><a href=\"#\">Religion</a></li>
                                <li><a href=\"#\">Fiction</a></li>
                                <li><a href=\"#\">Fantasy</a></li>
                                <li><a href=\"#\">Music</a></li>
                                <li><a href=\"#\">Toys</a></li>
                                <li><a href=\"#\">Hoodies</a></li>
                            </ul>
                        </aside>
                        <aside class=\"wedget__categories sidebar--banner\">
                            <img src=\"images/others/banner_left.jpg\" alt=\"banner images\">
                            <div class=\"text\">
                                <h2>new products</h2>
                                <h6>save up to <br> <strong>40%</strong>off</h6>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class=\"col-lg-9 col-12 order-1 order-lg-2\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between\">
                                <div class=\"shop__list nav justify-content-center\" role=\"tablist\">
                                    <a class=\"nav-item nav-link active\" data-toggle=\"tab\" href=\"#nav-grid\" role=\"tab\"><i
                                                class=\"fa fa-th\"></i></a>
                                    <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-list\" role=\"tab\"><i
                                                class=\"fa fa-list\"></i></a>
                                </div>
                                <p>Showing 1–12 of 40 results</p>

                            </div>
                        </div>
                    </div>
                    <div class=\"tab__container\">
                        <div class=\"shop-grid tab-pane fade show active\" id=\"nav-grid\" role=\"tabpanel\">
                            <div class=\"row\">
                                {% for livre in l %}
                                    <!-- Start Single Product -->
                                    <div class=\"product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12\">
                                        <div class=\"product__thumb\">
                                            <a class=\"first__img\" href=\"single-product.html\"><img
                                                        src=\"images/books/1.jpg\" alt=\"product image\" ></a>
                                            <a href=\"single-product.html\"><img
                                                        src=\"{{ livre.img }}\" alt=\"product image\"></a>
                                            <div class=\"hot__box\">
                                                <span class=\"hot-label\">{{ livre.auteur }}</span>
                                            </div>
                                        </div>
                                        <div class=\"product__content content--center\">
                                            <h4><a href=\"single-product.html\">{{ livre.nom }}</a></h4>
                                            <ul class=\"prize d-flex\">
                                                <li>{{ livre.prix }}</li>
                                                {% if livre.promo.valeur != 0 %}
                                                <li class=\"old_prize\">{{ livre.prix + livre.prix * livre.promo.valeur/100 }}</li>
                                                {% endif %}
                                            </ul>
                                            <div class=\"action\">
                                                <div class=\"actions_inner\">
                                                    <ul class=\"add_to_links\">
                                                        <li><a class=\"wishlist\" onclick=\"myAlert({{ livre.id }}, {{ livre.stock }})\"
                                                            ><i
                                                                        class=\"bi bi-shopping-cart-full\"></i></a></li>
                                                        <li><a data-toggle=\"modal\" title=\"Quick View\"
                                                               class=\"quickview modal-view detail-link\"
                                                               href=\"#productmodal\"><i class=\"bi bi-search\"></i></a>
                                                        </li>
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
                                    <!-- End Single Product -->
                                {% endfor %}
                            </div>
                            <ul class=\"wn__pagination\">
                                <li class=\"active\"><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i></a></li>
                            </ul>
                        </div>
                        <div class=\"shop-grid tab-pane fade\" id=\"nav-list\" role=\"tabpanel\">
                            <div class=\"list__view__wrapper\">
                                <!-- Start Single Product -->
                                <div class=\"list__view\">
                                    <div class=\"thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/product/1.jpg\"
                                                                                              alt=\"product images\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img
                                                    src=\"images/product/2.jpg\" alt=\"product images\"></a>
                                    </div>
                                    <div class=\"content\">
                                        <h2><a href=\"single-product.html\">Ali Smith</a></h2>
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                        <ul class=\"prize__box\">
                                            <li>\$111.00</li>
                                            <li class=\"old__prize\">\$220.00</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <ul class=\"cart__action d-flex\">
                                            <li class=\"cart\"><a href=\"cart.html\">Add to cart</a></li>
                                            <li class=\"wishlist\"><a href=\"cart.html\"></a></li>
                                            <li class=\"compare\"><a href=\"cart.html\"></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <!-- Start Single Product -->
                                <div class=\"list__view mt--40\">
                                    <div class=\"thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/product/2.jpg\"
                                                                                              alt=\"product images\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img
                                                    src=\"images/product/4.jpg\" alt=\"product images\"></a>
                                    </div>
                                    <div class=\"content\">
                                        <h2><a href=\"single-product.html\">Blood In Water</a></h2>
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                        <ul class=\"prize__box\">
                                            <li>\$111.00</li>
                                            <li class=\"old__prize\">\$220.00</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <ul class=\"cart__action d-flex\">
                                            <li class=\"cart\"><a href=\"cart.html\">Add to cart</a></li>
                                            <li class=\"wishlist\"><a href=\"cart.html\"></a></li>
                                            <li class=\"compare\"><a href=\"cart.html\"></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <!-- Start Single Product -->
                                <div class=\"list__view mt--40\">
                                    <div class=\"thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/product/3.jpg\"
                                                                                              alt=\"product images\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img
                                                    src=\"images/product/6.jpg\" alt=\"product images\"></a>
                                    </div>
                                    <div class=\"content\">
                                        <h2><a href=\"single-product.html\">Madeness Overated</a></h2>
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                        <ul class=\"prize__box\">
                                            <li>\$111.00</li>
                                            <li class=\"old__prize\">\$220.00</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <ul class=\"cart__action d-flex\">
                                            <li class=\"cart\"><a href=\"cart.html\">Add to cart</a></li>
                                            <li class=\"wishlist\"><a href=\"cart.html\"></a></li>
                                            <li class=\"compare\"><a href=\"cart.html\"></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <!-- Start Single Product -->
                                <div class=\"list__view mt--40\">
                                    <div class=\"thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/product/4.jpg\"
                                                                                              alt=\"product images\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img
                                                    src=\"images/product/6.jpg\" alt=\"product images\"></a>
                                    </div>
                                    <div class=\"content\">
                                        <h2><a href=\"single-product.html\">Watching You</a></h2>
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                        <ul class=\"prize__box\">
                                            <li>\$111.00</li>
                                            <li class=\"old__prize\">\$220.00</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <ul class=\"cart__action d-flex\">
                                            <li class=\"cart\"><a href=\"cart.html\">Add to cart</a></li>
                                            <li class=\"wishlist\"><a href=\"cart.html\"></a></li>
                                            <li class=\"compare\"><a href=\"cart.html\"></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <!-- Start Single Product -->
                                <div class=\"list__view mt--40\">
                                    <div class=\"thumb\">
                                        <a class=\"first__img\" href=\"single-product.html\"><img src=\"images/product/5.jpg\"
                                                                                              alt=\"product images\"></a>
                                        <a class=\"second__img animation1\" href=\"single-product.html\"><img
                                                    src=\"images/product/9.jpg\" alt=\"product images\"></a>
                                    </div>
                                    <div class=\"content\">
                                        <h2><a href=\"single-product.html\">Court Wings Run</a></h2>
                                        <ul class=\"rating d-flex\">
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                        </ul>
                                        <ul class=\"prize__box\">
                                            <li>\$111.00</li>
                                            <li class=\"old__prize\">\$220.00</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <ul class=\"cart__action d-flex\">
                                            <li class=\"cart\"><a href=\"cart.html\">Add to cart</a></li>
                                            <li class=\"wishlist\"><a href=\"cart.html\"></a></li>
                                            <li class=\"compare\"><a href=\"cart.html\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"blocking-background\" style=\"display: none \" onclick=\"hide()\"></div>
    <div class=\"popup\" tabindex=\"-1\" role=\"dialog\" style=\"display: none\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 id=\"modal-title-text\" class=\"modal-title\">Modal title</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" onclick=\"hide()\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form name=\"form\" method=\"post\" action={{ path('panier_ajouter') }}>
                    <div class=\"modal-body\">
                            <input id=\"id-ajout\" name=\"id\" hidden value=\"\" >
                            <label for=\"exampleInputEmail1\" >Type: </label>
                            <select id=\"type-choisi\" name=\"type\" class=\"form-control\" onchange=\"test()\">
                                <option value=\"0\">Copie</option>
                                <option value=\"1\">PDF</option>
                                <option value=\"2\">Sonore</option>
                            </select>
                            <label for=\"exampleInputEmail1\">Quantité: </label>
                            <input name=\"quantite\" min=\"1\" type=\"number\" class=\"form-control\" id=\"quantite-choisie\"
                                   placeholder=\"Choisir la quantité\">
                    </div>
                    <div class=\"modal-footer\">

                        <input id=\"confirmer\" type=\"submit\" class=\"submit-button\" href=\"\" value=\"Ajouter\">
                        <a id=\"abort\" type=\"button\" class=\"submit-button\" data-dismiss=\"modal\"
                           onclick=\"hide()\">Fermer</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
        var stock;
        function myAlert(id, st) {
            stock = st;
            //\$(\"#confirmer\").attr(\"disabled\", \"false\");
            \$(\".blocking-background\").attr(\"style\", \"display : block\");
            \$(\".popup\").attr(\"style\", \"display: block\");
            \$(\"#modal-body-text\").text(\"\");
            \$(\"#modal-title-text\").text(\"Ajouter Au panier\");

            \$(\"#id-ajout\").attr(\"value\", id);
            \$(\"#quantite-choisie\").attr(\"max\", st);
            if(st == 0){
                if( \$(\"#type-choisi option:selected\").text() == \"Copie\"){
                    \$(\"#confirmer\").attr(\"disabled\", \"true\");
                }
            }

        }

        function hide() {
            \$(\".blocking-background\").attr(\"style\", \"display: none\");
            \$(\".popup\").attr(\"style\", \"display: none\");
        }

        function test() {
            value = \$(\"#type-choisi option:selected\").text();
            if(value == \"Copie\") {
                \$(\"#quantite-choisie\").removeAttr('disabled');
                if(stock == 0) {
                    \$(\"#confirmer\").attr(\"disabled\", \"true\");
                }

            }else{
                \$(\"#quantite-choisie\").val(1);
                \$(\"#quantite-choisie\").attr(\"disabled\", \"true\");
                \$(\"#confirmer\").removeAttr('disabled');
            }

        }

    </script>

{% endblock %}
", "AchatBundle:Default:shopGrid.html.twig", "C:\\wamp64\\www\\project\\src\\AchatBundle/Resources/views/Default/shopGrid.html.twig");
    }
}
