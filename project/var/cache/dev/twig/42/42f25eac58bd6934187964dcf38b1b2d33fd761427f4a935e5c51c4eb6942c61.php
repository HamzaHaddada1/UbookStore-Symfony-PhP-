<?php

/* @Livre/Default/go.html.twig */
class __TwigTemplate_309470dd8e35857cd48e3a4bdf50a2f20e1d9d6873dfb27096228833b812852a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "@Livre/Default/go.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Livre/Default/go.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Livre/Default/go.html.twig"));

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
        echo "<br>
    <br>
    <br>
    <br>
    <br>
    <div  style=\"    text-align: center; \">
        <h1 style=\"color: #BD8D46 ;font-size:28px \" > Le Livre : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "nom", array()), "html", null, true);
        echo "  </h1>
<br>
        <br>
        <td class=\"img-fluid col-md-6\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "img", array()), "html", null, true);
        echo "\" style=\"margin-top-0: auto \"></td>
<div>
    <fieldset>
      <div>
        <table style=\"text-align: -webkit-match-parent\">
            <tbody>
           <tr>
               <td>
               </td>
               <td>

           </tr>
            <tr>
                <th>Nom:</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Auteur:</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "auteur", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Categorie:</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "categorie", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Maison de publication:</th>
                <td >";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "mPub", array()), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
                <th>Description:</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <br>
            <tr>
                <th>Prix:</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "prix", array()), "html", null, true);
        echo " DT </td>

            </tr>
            <tr>
                <th>Stock:</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "stock", array()), "html", null, true);
        echo "</td>


            </tr>
            <tr class=\"ratelivre\">
                <th>Rate:</th>
                <td>

                    <div class=\"stars-outer\">
                        <div class=\"stars-inner\"></div>
                    </div>

                </td>
            </tr>

            <tr>
                <th>Code qr a scanner:</th>
                <td class=\"img-fluid col-md-6\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "codeqr", array()), "html", null, true);
        echo "\" style=\"text-align: center \" align=\"center\"></td>
            </tr>
            <tr>
                <td></td>
                <td><div id=\"barchart_material\" style=\"width: 850px; height: 110px;\"></div></td>
            </tr>
            </tbody>
        </table>
      </div>
    </fieldset>
</div>
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
    <script>
        // Initial Ratings
        const ratings = {
            ratelivre: ";
        // line 119
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
        return "@Livre/Default/go.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 119,  148 => 73,  128 => 56,  120 => 51,  112 => 46,  104 => 41,  96 => 36,  88 => 31,  80 => 26,  63 => 12,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
<br>
    <br>
    <br>
    <br>
    <br>
    <div  style=\"    text-align: center; \">
        <h1 style=\"color: #BD8D46 ;font-size:28px \" > Le Livre : {{ livre.nom }}  </h1>
<br>
        <br>
        <td class=\"img-fluid col-md-6\"><img src=\"{{ livre.img }}\" style=\"margin-top-0: auto \"></td>
<div>
    <fieldset>
      <div>
        <table style=\"text-align: -webkit-match-parent\">
            <tbody>
           <tr>
               <td>
               </td>
               <td>

           </tr>
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
                <th>Maison de publication:</th>
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

                </td>
            </tr>

            <tr>
                <th>Code qr a scanner:</th>
                <td class=\"img-fluid col-md-6\"><img src=\"{{ livre.codeqr }}\" style=\"text-align: center \" align=\"center\"></td>
            </tr>
            <tr>
                <td></td>
                <td><div id=\"barchart_material\" style=\"width: 850px; height: 110px;\"></div></td>
            </tr>
            </tbody>
        </table>
      </div>
    </fieldset>
</div>
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

{% endblock %}", "@Livre/Default/go.html.twig", "C:\\wamp64\\www\\project\\src\\LivreBundle\\Resources\\views\\Default\\go.html.twig");
    }
}
