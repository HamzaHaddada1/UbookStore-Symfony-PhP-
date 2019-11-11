<?php

/* @Livre/Default/index.html.twig */
class __TwigTemplate_70dce67f0830337c5c53a6e9a7ffcbad33283df0abc506c66837d04dfaa6f59b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@Livre/Default/index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Livre/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Livre/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "<!--===============================================================================================-->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

    <body class=\"bg-light\">
    <div class=\"content p-4\">
        <div class=\"text-center mb-4\">
            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
            <!-- Responsive -->
            <ins class=\"adsbygoogle\"
                 style=\"display:block\"
                 data-ad-client=\"ca-pub-4097235499795154\"
                 data-ad-slot=\"5211442851\"
                 data-ad-format=\"auto\"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <h1 style=\"color: #00afea;text-align: center; \">Liste des Livres</h1>
        <ul>
            <li>
                <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_new");
        echo "\">Create a new livre</a>
            </li>
        </ul>
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Auteur</th>
                        <th>Categorie</th>
                        <th>Mpub</th>
                        <th>Rate</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody >
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livres"] ?? $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 48
            echo "
                                    <tr>
                                        <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_show", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "auteur", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "categorie", array()), "html", null, true);
            echo "</td>
                                        <td >";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "mPub", array()), "html", null, true);
            echo "</td>
                                        <td >";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "rate", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "description", array()), "html", null, true);
            echo "</td>
                                        <td >";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "prix", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "stock", array()), "html", null, true);
            echo "</td>


                                        <td>


                                                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_show", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-danger\" value=\"show\"> Afficher</a>

                                                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_edit", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-danger\"value=\"edit\">Modifier</a>


                                        </td>
                                    </tr>


                        <script>
                            // Initial Ratings
                            var ratings = {
                               ratelivre: ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "rate", array()), "html", null, true);
            echo ",

                            }

                            // Total Stars
                            const starsTotal = 5;

                            // Run getRatings when DOM loads
                            document.addEventListener('DOMContentLoaded', getRatings);

                            // Form Elements
                            const ratingControl = document.getElementById('rating-control');


                            // Rating control change
                            ratingControl.addEventListener('blur', (e) => {
                                var rating = e.target.value;

                                // Make sure 5 or under
                                if (rating > 5) {
                                    alert('Please rate 1 - 5');
                                    return;
                                }


                                getRatings();
                            });

                            // Get ratings
                            function getRatings() {
                                for (let rating in ratings) {
                                    // Get percentage
                                    const starPercentage = (ratings[rating] / starsTotal) * 100;

                                    // Round to nearest 10
                                    const starPercentageRounded = `\${Math.round(starPercentage / 10) * 10}%`;

                                    // Set width of stars-inner to percentage
                                    document.querySelector(`.\${rating} .stars-inner`).style.width = starPercentageRounded;

                                    // Add number rating
                                    document.querySelector(`.\${rating} .number-rating`).innerHTML = ratings[rating];
                                }
                            }
                        </script>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jsA/jquery.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jsA/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jsA/datatables.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jsA/moment.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jsA/fullcalendar.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jsA/bootadmin.min.js"), "html", null, true);
        echo "\"> </script>


    <script>
        \$(document).ready(function () {
            \$('#example').DataTable();
        });
    </script>

    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-118868344-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118868344-1');
    </script>

    <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: \"ca-pub-4097235499795154\",
            enable_page_level_ads: true
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Livre/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 136,  245 => 135,  241 => 134,  237 => 133,  233 => 132,  229 => 131,  218 => 122,  166 => 76,  153 => 66,  148 => 64,  139 => 58,  135 => 57,  131 => 56,  127 => 55,  123 => 54,  119 => 53,  115 => 52,  111 => 51,  105 => 50,  101 => 48,  97 => 47,  72 => 25,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}

{% block container %}
<!--===============================================================================================-->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

    <body class=\"bg-light\">
    <div class=\"content p-4\">
        <div class=\"text-center mb-4\">
            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
            <!-- Responsive -->
            <ins class=\"adsbygoogle\"
                 style=\"display:block\"
                 data-ad-client=\"ca-pub-4097235499795154\"
                 data-ad-slot=\"5211442851\"
                 data-ad-format=\"auto\"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <h1 style=\"color: #00afea;text-align: center; \">Liste des Livres</h1>
        <ul>
            <li>
                <a href=\"{{ path('livres_new') }}\">Create a new livre</a>
            </li>
        </ul>
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Auteur</th>
                        <th>Categorie</th>
                        <th>Mpub</th>
                        <th>Rate</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody >
                    {% for livre in livres %}

                                    <tr>
                                        <td><a href=\"{{ path('livres_show', { 'id': livre.id }) }}\">{{ livre.id }}</a></td>
                                        <td>{{ livre.nom }}</td>
                                        <td>{{ livre.auteur }}</td>
                                        <td>{{ livre.categorie }}</td>
                                        <td >{{ livre.mPub }}</td>
                                        <td >{{ livre.rate }}</td>
                                        <td>{{ livre.description }}</td>
                                        <td >{{ livre.prix }}</td>
                                        <td>{{ livre.stock }}</td>


                                        <td>


                                                    <a href=\"{{ path('livres_show', { 'id': livre.id }) }}\"class=\"btn btn-danger\" value=\"show\"> Afficher</a>

                                                    <a href=\"{{ path('livres_edit', { 'id': livre.id }) }}\"class=\"btn btn-danger\"value=\"edit\">Modifier</a>


                                        </td>
                                    </tr>


                        <script>
                            // Initial Ratings
                            var ratings = {
                               ratelivre: {{ livre.rate }},

                            }

                            // Total Stars
                            const starsTotal = 5;

                            // Run getRatings when DOM loads
                            document.addEventListener('DOMContentLoaded', getRatings);

                            // Form Elements
                            const ratingControl = document.getElementById('rating-control');


                            // Rating control change
                            ratingControl.addEventListener('blur', (e) => {
                                var rating = e.target.value;

                                // Make sure 5 or under
                                if (rating > 5) {
                                    alert('Please rate 1 - 5');
                                    return;
                                }


                                getRatings();
                            });

                            // Get ratings
                            function getRatings() {
                                for (let rating in ratings) {
                                    // Get percentage
                                    const starPercentage = (ratings[rating] / starsTotal) * 100;

                                    // Round to nearest 10
                                    const starPercentageRounded = `\${Math.round(starPercentage / 10) * 10}%`;

                                    // Set width of stars-inner to percentage
                                    document.querySelector(`.\${rating} .stars-inner`).style.width = starPercentageRounded;

                                    // Add number rating
                                    document.querySelector(`.\${rating} .number-rating`).innerHTML = ratings[rating];
                                }
                            }
                        </script>
                    {% endfor %}

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src=\"{{ asset('jsA/jquery.min.js') }}\"> </script>
    <script src=\"{{ asset('jsA/bootstrap.bundle.min.js') }}\"> </script>
    <script src=\"{{ asset('jsA/datatables.min.js') }}\"> </script>
    <script src=\"{{ asset('jsA/moment.min.js') }}\"> </script>
    <script src=\"{{ asset('jsA/fullcalendar.min.js') }}\"> </script>
    <script src=\"{{ asset('jsA/bootadmin.min.js') }}\"> </script>


    <script>
        \$(document).ready(function () {
            \$('#example').DataTable();
        });
    </script>

    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-118868344-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118868344-1');
    </script>

    <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: \"ca-pub-4097235499795154\",
            enable_page_level_ads: true
        });
    </script>

{% endblock %}
", "@Livre/Default/index.html.twig", "C:\\wamp64\\www\\project\\src\\LivreBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
