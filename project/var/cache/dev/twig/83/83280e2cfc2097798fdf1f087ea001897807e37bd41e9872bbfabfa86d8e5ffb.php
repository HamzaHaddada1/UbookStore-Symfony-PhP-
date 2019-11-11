<?php

/* LivreBundle:Default:show.html.twig */
class __TwigTemplate_257e6a47be46e96ab5f042bbc69d34f20324c8e996fb0dee1bf7fc9a2479ad7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "LivreBundle:Default:show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LivreBundle:Default:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LivreBundle:Default:show.html.twig"));

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
        echo "
    <div  style=\"    text-align: center; font-size:18px \">
    <h1 style=\"color: #00afea\" >Livre : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "nom", array()), "html", null, true);
        echo "  </h1>

    <td class=\"img-fluid col-md-6\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "img", array()), "html", null, true);
        echo "\" style=\"margin-top-0: auto \"></td>
        <fieldset>
    <table style=\"text-align: -webkit-match-parent\">
        <tbody>

            <tr>
                <th>Nom:</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Auteur:</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "auteur", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Categorie:</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "categorie", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Mpub:</th>
                <td >";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "mPub", array()), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
                <th>Description:</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
                <th>Prix:</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "prix", array()), "html", null, true);
        echo " DT </td>

            </tr>
            <tr>
                <th>Stock:</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "stock", array()), "html", null, true);
        echo "</td>


           </tr>
            <tr class=\"ratelivre\">
                <th>Rate:</th>
                <td>
                    <div class=\"stars-outer\">
                        <div class=\"stars-inner\"></div>
                    </div>
                    <span class=\"number-rating\"></span>
                </td>
            </tr>

            <tr>
                <th>Codeqr:</th>
                <td class=\"img-fluid col-md-6\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "codeqr", array()), "html", null, true);
        echo "\" style=\"text-align: center \" align=\"center\"></td>
            </tr>
        <tr>
            <td></td>
            <td><div id=\"barchart_material\" style=\"width: 850px; height: 110px;\"></div></td>
        </tr>
      </tbody>
    </table>
        </fieldset>

   <br>
            <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_index");
        echo "\"class=\"btn btn-danger\">Back to the list</a>

            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_edit", array("id" => $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "id", array()))), "html", null, true);
        echo "\"class=\"btn btn-danger\">Edit</a>

            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <br>

        <input type=\"submit\" value=\"Delete\"class=\"btn btn-danger\">
            ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

</div>

    <style>
        .stars-outer {
            position: relative;
            display: inline-block;
        }

        .stars-inner {
            position: absolute;
            top: 0;
            left: 0;
            white-space: nowrap;
            overflow: hidden;
            width: 0;
        }

        .stars-outer::before {
            content: \"\\f005 \\f005 \\f005 \\f005 \\f005\";
            font-family: \"Font Awesome 5 Free\";
            font-weight: 900;
            color: #ccc;
        }

        .stars-inner::before {
            content: \"\\f005 \\f005 \\f005 \\f005 \\f005\";
            font-family: \"Font Awesome 5 Free\";
            font-weight: 900;
            color: #f8ce0b;
        }

    </style>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Livre', 'Stock totale', 'Livres restants'],

                ['";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "nom", array()), "html", null, true);
        echo "', 100, ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "stock", array()), "html", null, true);
        echo "]
            ]);

            var options = {
                chart: {
                    title: 'Gestion du stock des livres',
                    subtitle: '',
                },
                bars: 'horizontal' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
    <script>
        // Initial Ratings
        const ratings = {
            ratelivre: ";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "rate", array()), "html", null, true);
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
            const rating = e.target.value;

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "LivreBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 144,  214 => 125,  166 => 80,  159 => 76,  154 => 74,  149 => 72,  135 => 61,  116 => 45,  108 => 40,  100 => 35,  92 => 30,  84 => 25,  76 => 20,  68 => 15,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

    <div  style=\"    text-align: center; font-size:18px \">
    <h1 style=\"color: #00afea\" >Livre : {{ livre.nom }}  </h1>

    <td class=\"img-fluid col-md-6\"><img src=\"{{ livre.img }}\" style=\"margin-top-0: auto \"></td>
        <fieldset>
    <table style=\"text-align: -webkit-match-parent\">
        <tbody>

            <tr>
                <th>Nom:</th>
                <td>{{ livre.nom }}</td>
            </tr>

            <tr>
                <th>Auteur:</th>
                <td>{{ livre.auteur }}</td>
            </tr>

            <tr>
                <th>Categorie:</th>
                <td>{{ livre.categorie }}</td>
            </tr>

            <tr>
                <th>Mpub:</th>
                <td >{{ livre.mPub }}</td>
            </tr>
            <br>
            <tr>
                <th>Description:</th>
                <td>{{ livre.description }}</td>
            </tr>
            <br>
            <tr>
                <th>Prix:</th>
                <td>{{ livre.prix }} DT </td>

            </tr>
            <tr>
                <th>Stock:</th>
                <td>{{ livre.stock }}</td>


           </tr>
            <tr class=\"ratelivre\">
                <th>Rate:</th>
                <td>
                    <div class=\"stars-outer\">
                        <div class=\"stars-inner\"></div>
                    </div>
                    <span class=\"number-rating\"></span>
                </td>
            </tr>

            <tr>
                <th>Codeqr:</th>
                <td class=\"img-fluid col-md-6\"><img src=\"{{ livre.codeqr }}\" style=\"text-align: center \" align=\"center\"></td>
            </tr>
        <tr>
            <td></td>
            <td><div id=\"barchart_material\" style=\"width: 850px; height: 110px;\"></div></td>
        </tr>
      </tbody>
    </table>
        </fieldset>

   <br>
            <a href=\"{{ path('livres_index') }}\"class=\"btn btn-danger\">Back to the list</a>

            <a href=\"{{ path('livres_edit', { 'id': livre.id }) }}\"class=\"btn btn-danger\">Edit</a>

            {{ form_start(delete_form) }}
        <br>

        <input type=\"submit\" value=\"Delete\"class=\"btn btn-danger\">
            {{ form_end(delete_form) }}

</div>

    <style>
        .stars-outer {
            position: relative;
            display: inline-block;
        }

        .stars-inner {
            position: absolute;
            top: 0;
            left: 0;
            white-space: nowrap;
            overflow: hidden;
            width: 0;
        }

        .stars-outer::before {
            content: \"\\f005 \\f005 \\f005 \\f005 \\f005\";
            font-family: \"Font Awesome 5 Free\";
            font-weight: 900;
            color: #ccc;
        }

        .stars-inner::before {
            content: \"\\f005 \\f005 \\f005 \\f005 \\f005\";
            font-family: \"Font Awesome 5 Free\";
            font-weight: 900;
            color: #f8ce0b;
        }

    </style>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Livre', 'Stock totale', 'Livres restants'],

                ['{{ livre.nom }}', 100, {{ livre.stock }}]
            ]);

            var options = {
                chart: {
                    title: 'Gestion du stock des livres',
                    subtitle: '',
                },
                bars: 'horizontal' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
    <script>
        // Initial Ratings
        const ratings = {
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
            const rating = e.target.value;

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
{% endblock %}
", "LivreBundle:Default:show.html.twig", "C:\\wamp64\\www\\project\\src\\LivreBundle/Resources/views/Default/show.html.twig");
    }
}
