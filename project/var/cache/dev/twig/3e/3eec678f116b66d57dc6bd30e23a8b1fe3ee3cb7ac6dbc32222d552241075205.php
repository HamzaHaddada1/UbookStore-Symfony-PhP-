<?php

/* PanierBundle:Default:panier.html.twig */
class __TwigTemplate_8b345b21753d5b0af70ec43aea6bfe128ccb27079e81770a0b5fdf6ee6935c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "PanierBundle:Default:panier.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PanierBundle:Default:panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PanierBundle:Default:panier.html.twig"));

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
    <div class=\"ht__bradcaump__area bg-image--3\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"bradcaump__inner text-center\">
                        <h2 class=\"bradcaump-title\">Panier</h2>
                        <nav class=\"bradcaump-content\">
                            <a class=\"breadcrumb_item\" href=\"index.html\">Acceuil</a>
                            <span class=\"brd-separetor\">/</span>
                            <span class=\"breadcrumb_item active\">Panier</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class=\"cart-main-area section-padding--lg bg--white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 ol-lg-12\">
                    <form method=\"post\" action=";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_modifier");
        echo ">
                        <div class=\"table-content wnro__table table-responsive\">

                            <table>
                                <thead>
                                <tr class=\"title-top\">
                                    <th class=\"product-thumbnail\">Image</th>
                                    <th class=\"product-name\">Livre</th>
                                    <th class=\"product-price\">Prix</th>
                                    <th class=\"product-quantity\">Type</th>
                                    <th class=\"product-quantity\">Quantité</th>
                                    <th class=\"product-subtotal-title\">Total</th>
                                    <th class=\"product-remove\">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["p"] ?? $this->getContext($context, "p")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneCommande"]) {
            // line 43
            echo "                                    <tr>
                                        <td id=\"product-stock-";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\" hidden><span class=\"amount\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneCommande"], "bookId", array()), "stock", array()), "html", null, true);
            echo "</span></td>
                                        <td class=\"product-thumbnail\"><a href=\"#\"><img
                                                        src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneCommande"], "bookId", array()), "img", array()), "html", null, true);
            echo "\" alt=\"product image\"></a></td>
                                        <td class=\"product-name\"><a href=\"#\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneCommande"], "bookId", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                        <td id=\"prix-unitaire-";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\" class=\"product-price\"><span
                                                    class=\"amount\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneCommande"], "bookId", array()), "prix", array()), "html", null, true);
            echo "</span></td>
                                        ";
            // line 50
            if (($this->getAttribute($context["ligneCommande"], "bookType", array()) == 0)) {
                // line 51
                echo "                                                <td>Copie</td>
                                        ";
            }
            // line 53
            echo "                                        ";
            if (($this->getAttribute($context["ligneCommande"], "bookType", array()) == 1)) {
                // line 54
                echo "                                                <td>PDF</td>
                                        ";
            }
            // line 56
            echo "                                        ";
            if (($this->getAttribute($context["ligneCommande"], "bookType", array()) == 2)) {
                // line 57
                echo "                                                <td>Sonore</td>
                                        ";
            }
            // line 59
            echo "                                        <td class=\"product-quantity-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\">
                                            <input
                                                    id=\"quantite-ligne-commande-";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\"
                                                    name=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\"
                                                    type=\"number\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "quantite", array()), "html", null, true);
            echo "\" min=\"1\" max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneCommande"], "bookId", array()), "stock", array()), "html", null, true);
            echo "\"
                                                    onclick=\"changePrice(";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo ")\"></td>
                                        <td id=\"prix-ligne-commande-";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\"
                                           class=\"product-subtotal\">";
            // line 66
            echo twig_escape_filter($this->env, ($this->getAttribute($context["ligneCommande"], "quantite", array()) * $this->getAttribute($this->getAttribute($context["ligneCommande"], "bookId", array()), "prix", array())), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"product-remove\"><p style=\"cursor: pointer\" onclick=\"myAlert(";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo ", 1)\">X</p></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneCommande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                </tbody>
                            </table>
                        </div>

                        <div class=\"cartbox__btn\">
                            <ul class=\"cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between\">
                                <li ><a href=\"#\">Coupon Code</a></li>
                                <li><input class=\"submit-button\"id=\"submit-update\" type=\"submit\" value=\"Modifier Panier\" ></li>
                                <li><input class=\"submit-button\"id=\"submit-update\" type=\"submit\" value=\"Acheter\" formaction=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_achat");
        echo "\"></li>
                                <li><a href=\"#\">Apply Code</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-6\">
                    <div class=\"cartbox__total__area\">
                        <div class=\"cart__total__amount\">
                            <span>Total Panier</span>
                            <span id=\"total-panier\" onload=\"totalPanier()\"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
    <div class=\"blocking-background\" style=\"display: none\" onclick=\"hide()\"></div>
    <div class=\"popup\" tabindex=\"-1\" role=\"dialog\" style=\"display: none\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 id=\"modal-title-text\"class=\"modal-title\">Modal title</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" onclick=\"hide()\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p id=\"modal-body-text\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a id=\"confirmer\" type=\"button\" class=\"submit-button\" href=\"\" }}>Confirmer</a>
                    <a id=\"abort\" type=\"button\" class=\"submit-button\" data-dismiss=\"modal\"
                       onclick=\"hide()\">Fermer</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        var nbrClick = 1;
        document.addEventListener(\"DOMContentLoaded\", function() {
            var total = 0;
            \$(\".product-subtotal\").each(function(i, obj) {
                total = total + parseFloat(\$(obj).text());
            });
            \$(\"#total-panier\").html(total);
        });

        //Type 1 pour la confirmation de la suppression
        //Type 2 pour l'alerte concernant la qantité et le stock
        function myAlert(id, type) {

            \$(\".blocking-background\").attr(\"style\", \"display : block\");
            \$(\".popup\").attr(\"style\", \"display: block\");
            if(type == 1){
                \$(\"#confirmer\").attr(\"href\", \"";
        // line 138
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array(), "method"), "getBaseURL", array(), "method") . "/panier/supprimer/"), "html", null, true);
        echo "\" + id);
                \$(\"#modal-body-text\").text(\"Veuillez confirmer la suppression\");
                \$(\"#modal-title-text\").text(\"Suppression\");
            }else{
                \$(\"#confirmer\").attr(\"style\", \"display: none\");
                \$(\"#modal-title-text\").text(\"Stock Insuffisant\");
                \$(\"#modal-body-text\").text(\"Veuillez essayer ultérieurement\");
            }
        }

        function hide() {
            \$(\".blocking-background\").attr(\"style\", \"display: none\");
            \$(\".popup\").attr(\"style\", \"display: none\");
        }

        function changePrice(id) {
            var idOfStock = \"#product-stock-\".concat(id);
            var idOfQuantity = \"#quantite-ligne-commande-\".concat(id);
            var idOfSubTotal = \"#prix-ligne-commande-\".concat(id);
            var idOfUnitairyPrice = \"#prix-unitaire-\".concat(id);

            var theQuantity = \$(idOfQuantity).val();
            var thePrice = \$(idOfUnitairyPrice).text();
            var theStock = \$(idOfStock).text();
            \$(idOfSubTotal).text(thePrice * theQuantity);

            var total = 0;
            \$(\".product-subtotal\").each(function (i, obj) {
                total = total + parseFloat(\$(obj).text());
            });
            \$(\"#total-panier\").html(total);

            if(theQuantity == theStock) {
                if(nbrClick == 2){
                    myAlert(id, 2);
                    nbrClick = 0;
                }
                nbrClick = nbrClick + 1;
            }
        }



    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PanierBundle:Default:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 138,  195 => 79,  185 => 71,  176 => 68,  171 => 66,  167 => 65,  163 => 64,  157 => 63,  153 => 62,  149 => 61,  143 => 59,  139 => 57,  136 => 56,  132 => 54,  129 => 53,  125 => 51,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  100 => 44,  97 => 43,  93 => 42,  74 => 26,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"ht__bradcaump__area bg-image--3\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"bradcaump__inner text-center\">
                        <h2 class=\"bradcaump-title\">Panier</h2>
                        <nav class=\"bradcaump-content\">
                            <a class=\"breadcrumb_item\" href=\"index.html\">Acceuil</a>
                            <span class=\"brd-separetor\">/</span>
                            <span class=\"breadcrumb_item active\">Panier</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class=\"cart-main-area section-padding--lg bg--white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 ol-lg-12\">
                    <form method=\"post\" action={{ path('panier_modifier') }}>
                        <div class=\"table-content wnro__table table-responsive\">

                            <table>
                                <thead>
                                <tr class=\"title-top\">
                                    <th class=\"product-thumbnail\">Image</th>
                                    <th class=\"product-name\">Livre</th>
                                    <th class=\"product-price\">Prix</th>
                                    <th class=\"product-quantity\">Type</th>
                                    <th class=\"product-quantity\">Quantité</th>
                                    <th class=\"product-subtotal-title\">Total</th>
                                    <th class=\"product-remove\">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for ligneCommande in p %}
                                    <tr>
                                        <td id=\"product-stock-{{ ligneCommande.id }}\" hidden><span class=\"amount\">{{ ligneCommande.bookId.stock }}</span></td>
                                        <td class=\"product-thumbnail\"><a href=\"#\"><img
                                                        src=\"{{ ligneCommande.bookId.img }}\" alt=\"product image\"></a></td>
                                        <td class=\"product-name\"><a href=\"#\">{{ ligneCommande.bookId.nom }}</a></td>
                                        <td id=\"prix-unitaire-{{ ligneCommande.id }}\" class=\"product-price\"><span
                                                    class=\"amount\">{{ ligneCommande.bookId.prix }}</span></td>
                                        {% if ligneCommande.bookType == 0 %}
                                                <td>Copie</td>
                                        {% endif %}
                                        {% if ligneCommande.bookType == 1 %}
                                                <td>PDF</td>
                                        {% endif %}
                                        {% if ligneCommande.bookType == 2 %}
                                                <td>Sonore</td>
                                        {% endif %}
                                        <td class=\"product-quantity-{{ ligneCommande.id }}\">
                                            <input
                                                    id=\"quantite-ligne-commande-{{ ligneCommande.id }}\"
                                                    name=\"{{ ligneCommande.id }}\"
                                                    type=\"number\" value=\"{{ ligneCommande.quantite }}\" min=\"1\" max=\"{{ ligneCommande.bookId.stock }}\"
                                                    onclick=\"changePrice({{ ligneCommande.id }})\"></td>
                                        <td id=\"prix-ligne-commande-{{ ligneCommande.id }}\"
                                           class=\"product-subtotal\">{{ ligneCommande.quantite * ligneCommande.bookId.prix }}
                                        </td>
                                        <td class=\"product-remove\"><p style=\"cursor: pointer\" onclick=\"myAlert({{ ligneCommande.id }}, 1)\">X</p></td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>

                        <div class=\"cartbox__btn\">
                            <ul class=\"cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between\">
                                <li ><a href=\"#\">Coupon Code</a></li>
                                <li><input class=\"submit-button\"id=\"submit-update\" type=\"submit\" value=\"Modifier Panier\" ></li>
                                <li><input class=\"submit-button\"id=\"submit-update\" type=\"submit\" value=\"Acheter\" formaction=\"{{ path('panier_achat') }}\"></li>
                                <li><a href=\"#\">Apply Code</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-6\">
                    <div class=\"cartbox__total__area\">
                        <div class=\"cart__total__amount\">
                            <span>Total Panier</span>
                            <span id=\"total-panier\" onload=\"totalPanier()\"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
    <div class=\"blocking-background\" style=\"display: none\" onclick=\"hide()\"></div>
    <div class=\"popup\" tabindex=\"-1\" role=\"dialog\" style=\"display: none\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 id=\"modal-title-text\"class=\"modal-title\">Modal title</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" onclick=\"hide()\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p id=\"modal-body-text\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a id=\"confirmer\" type=\"button\" class=\"submit-button\" href=\"\" }}>Confirmer</a>
                    <a id=\"abort\" type=\"button\" class=\"submit-button\" data-dismiss=\"modal\"
                       onclick=\"hide()\">Fermer</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        var nbrClick = 1;
        document.addEventListener(\"DOMContentLoaded\", function() {
            var total = 0;
            \$(\".product-subtotal\").each(function(i, obj) {
                total = total + parseFloat(\$(obj).text());
            });
            \$(\"#total-panier\").html(total);
        });

        //Type 1 pour la confirmation de la suppression
        //Type 2 pour l'alerte concernant la qantité et le stock
        function myAlert(id, type) {

            \$(\".blocking-background\").attr(\"style\", \"display : block\");
            \$(\".popup\").attr(\"style\", \"display: block\");
            if(type == 1){
                \$(\"#confirmer\").attr(\"href\", \"{{ app.request().getBaseURL() ~ \"/panier/supprimer/\" }}\" + id);
                \$(\"#modal-body-text\").text(\"Veuillez confirmer la suppression\");
                \$(\"#modal-title-text\").text(\"Suppression\");
            }else{
                \$(\"#confirmer\").attr(\"style\", \"display: none\");
                \$(\"#modal-title-text\").text(\"Stock Insuffisant\");
                \$(\"#modal-body-text\").text(\"Veuillez essayer ultérieurement\");
            }
        }

        function hide() {
            \$(\".blocking-background\").attr(\"style\", \"display: none\");
            \$(\".popup\").attr(\"style\", \"display: none\");
        }

        function changePrice(id) {
            var idOfStock = \"#product-stock-\".concat(id);
            var idOfQuantity = \"#quantite-ligne-commande-\".concat(id);
            var idOfSubTotal = \"#prix-ligne-commande-\".concat(id);
            var idOfUnitairyPrice = \"#prix-unitaire-\".concat(id);

            var theQuantity = \$(idOfQuantity).val();
            var thePrice = \$(idOfUnitairyPrice).text();
            var theStock = \$(idOfStock).text();
            \$(idOfSubTotal).text(thePrice * theQuantity);

            var total = 0;
            \$(\".product-subtotal\").each(function (i, obj) {
                total = total + parseFloat(\$(obj).text());
            });
            \$(\"#total-panier\").html(total);

            if(theQuantity == theStock) {
                if(nbrClick == 2){
                    myAlert(id, 2);
                    nbrClick = 0;
                }
                nbrClick = nbrClick + 1;
            }
        }



    </script>
{% endblock %}", "PanierBundle:Default:panier.html.twig", "C:\\wamp64\\www\\project\\src\\PanierBundle/Resources/views/Default/panier.html.twig");
    }
}
