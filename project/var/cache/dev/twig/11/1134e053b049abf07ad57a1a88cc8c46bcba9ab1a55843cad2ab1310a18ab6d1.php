<?php

/* @Achat/Default/index.html.twig */
class __TwigTemplate_bead7cf673ada9990a9572dce6d1f2dcb3f2c9c3205a5560dfeaeb7c06f15608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "@Achat/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Achat/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Achat/Default/index.html.twig"));

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
                        <h2 class=\"bradcaump-title\">Achat</h2>
                        <nav class=\"bradcaump-content\">
                            <a class=\"breadcrumb_item\" href=\"index.html\">Acceuil</a>
                            <span class=\"brd-separetor\">/</span>
                            <span class=\"breadcrumb_item active\">Achat</span>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_achete");
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
                                    <th class=\"\">Ouvrir Fichier</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["b"] ?? $this->getContext($context, "b")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneCommande"]) {
            // line 43
            echo "                                    <tr>
                                        <td class=\"product-thumbnail\"><a href=\"#\"><img
                                                        src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneCommande"], "bId", array()), "img", array()), "html", null, true);
            echo "\" alt=\"product img\"></a></td>
                                        <td class=\"product-name\"><a href=\"#\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneCommande"], "bId", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                        <td id=\"prix-unitaire-";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\" class=\"product-price\"><span
                                                    class=\"amount\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "price", array()), "html", null, true);
            echo "</span></td>
                                        ";
            // line 49
            if (($this->getAttribute($context["ligneCommande"], "type", array()) == 0)) {
                // line 50
                echo "                                            <td>Copie</td>
                                        ";
            }
            // line 52
            echo "                                        ";
            if (($this->getAttribute($context["ligneCommande"], "type", array()) == 1)) {
                // line 53
                echo "                                            <td>PDF</td>
                                        ";
            }
            // line 55
            echo "                                        ";
            if (($this->getAttribute($context["ligneCommande"], "type", array()) == 2)) {
                // line 56
                echo "                                            <td>Sonore</td>
                                        ";
            }
            // line 58
            echo "                                        <td class=\"product-quantity-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\">
                                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "quantite", array()), "html", null, true);
            echo "</td>
                                        <td id=\"prix-ligne-commande-";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\"
                                            class=\"product-subtotal\">";
            // line 61
            echo twig_escape_filter($this->env, ($this->getAttribute($context["ligneCommande"], "quantite", array()) * $this->getAttribute($context["ligneCommande"], "price", array())), "html", null, true);
            echo "
                                        </td>
                                        <td id=\"ouvrir-fichier-";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\">
                                            ";
            // line 64
            if (($this->getAttribute($context["ligneCommande"], "type", array()) == 0)) {
                // line 65
                echo "                                                <a>Copie</a>
                                            ";
            }
            // line 67
            echo "                                            ";
            if (($this->getAttribute($context["ligneCommande"], "type", array()) == 1)) {
                // line 68
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_pdf", array("slug" => $this->getAttribute($this->getAttribute($context["ligneCommande"], "bId", array()), "pdfPath", array()))), "html", null, true);
                echo "\" target=\"_blank\">PDF</a>
                                            ";
            }
            // line 70
            echo "                                            ";
            if (($this->getAttribute($context["ligneCommande"], "type", array()) == 2)) {
                // line 71
                echo "                                                <a href=\"#\">Sonore</a>
                                            ";
            }
            // line 73
            echo "
                                        </td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneCommande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                </tbody>
                            </table>

                        </div>
                        <br>
                        <br>
                        <br>
                        <!--<div class=\"navigation\">
                            ";
        // line 87
        echo "                        </div>-->

                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-6\">
                    <div class=\"cartbox__total__area\">
                        <div class=\"cart__total__amount\">
                            <span>Total Achat</span>
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
        document.addEventListener(\"DOMContentLoaded\", function() {
            var total = 0;
            \$(\".product-subtotal\").each(function(i, obj) {
                total = total + parseFloat(\$(obj).text());
                console.log(total);
            });
            \$(\"#total-panier\").html(total);
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Achat/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 87,  191 => 78,  181 => 73,  177 => 71,  174 => 70,  168 => 68,  165 => 67,  161 => 65,  159 => 64,  155 => 63,  150 => 61,  146 => 60,  142 => 59,  137 => 58,  133 => 56,  130 => 55,  126 => 53,  123 => 52,  119 => 50,  117 => 49,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  97 => 43,  93 => 42,  74 => 26,  49 => 3,  40 => 2,  11 => 1,);
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
                        <h2 class=\"bradcaump-title\">Achat</h2>
                        <nav class=\"bradcaump-content\">
                            <a class=\"breadcrumb_item\" href=\"index.html\">Acceuil</a>
                            <span class=\"brd-separetor\">/</span>
                            <span class=\"breadcrumb_item active\">Achat</span>
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
                    <form method=\"post\" action={{ path('afficher_achete') }}>
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
                                    <th class=\"\">Ouvrir Fichier</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for ligneCommande in b %}
                                    <tr>
                                        <td class=\"product-thumbnail\"><a href=\"#\"><img
                                                        src=\"{{ ligneCommande.bId.img }}\" alt=\"product img\"></a></td>
                                        <td class=\"product-name\"><a href=\"#\">{{ ligneCommande.bId.nom }}</a></td>
                                        <td id=\"prix-unitaire-{{ ligneCommande.id }}\" class=\"product-price\"><span
                                                    class=\"amount\">{{ ligneCommande.price }}</span></td>
                                        {% if ligneCommande.type == 0 %}
                                            <td>Copie</td>
                                        {% endif %}
                                        {% if ligneCommande.type == 1 %}
                                            <td>PDF</td>
                                        {% endif %}
                                        {% if ligneCommande.type == 2 %}
                                            <td>Sonore</td>
                                        {% endif %}
                                        <td class=\"product-quantity-{{ ligneCommande.id }}\">
                                            {{ ligneCommande.quantite }}</td>
                                        <td id=\"prix-ligne-commande-{{ ligneCommande.id }}\"
                                            class=\"product-subtotal\">{{ ligneCommande.quantite * ligneCommande.price }}
                                        </td>
                                        <td id=\"ouvrir-fichier-{{ ligneCommande.id}}\">
                                            {% if ligneCommande.type == 0 %}
                                                <a>Copie</a>
                                            {% endif %}
                                            {% if ligneCommande.type == 1 %}
                                                <a href=\"{{ path('afficher_pdf', { 'slug': ligneCommande.bId.pdfPath }) }}\" target=\"_blank\">PDF</a>
                                            {% endif %}
                                            {% if ligneCommande.type == 2 %}
                                                <a href=\"#\">Sonore</a>
                                            {% endif %}

                                        </td>

                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                        </div>
                        <br>
                        <br>
                        <br>
                        <!--<div class=\"navigation\">
                            {#{{ knp_pagination_render(b) }}#}
                        </div>-->

                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-6\">
                    <div class=\"cartbox__total__area\">
                        <div class=\"cart__total__amount\">
                            <span>Total Achat</span>
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
        document.addEventListener(\"DOMContentLoaded\", function() {
            var total = 0;
            \$(\".product-subtotal\").each(function(i, obj) {
                total = total + parseFloat(\$(obj).text());
                console.log(total);
            });
            \$(\"#total-panier\").html(total);
        });
    </script>
{% endblock %}
", "@Achat/Default/index.html.twig", "C:\\wamp64\\www\\project\\src\\AchatBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
