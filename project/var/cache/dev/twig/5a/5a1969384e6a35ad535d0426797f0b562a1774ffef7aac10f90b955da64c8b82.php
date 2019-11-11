<?php

/* @MaisonEdition\Default\index.html.twig */
class __TwigTemplate_aa04534e7462415bbb62d8e6b6f11b11f26918879be8f325e53ab4cdd3eb9b00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@MaisonEdition\\Default\\index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MaisonEdition\\Default\\index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MaisonEdition\\Default\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "
    <h1>Maison Editions</h1>

    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Nationalité</th>
                    <th>Groupe Editoriel</th>
                    <th>Propriétaire</th>
                    <th class=\"actions\">Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["maisoneditions"] ?? $this->getContext($context, "maisoneditions")));
        foreach ($context['_seq'] as $context["_key"] => $context["maisonedition"]) {
            // line 20
            echo "                <tr>
                    <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("maisonedition_show", array("id" => $this->getAttribute($context["maisonedition"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["maisonedition"], "nom", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["maisonedition"], "nationalite", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["maisonedition"], "groupeeditoriel", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["maisonedition"], "proprietaire", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("maisonedition_edit", array("id" => $this->getAttribute($context["maisonedition"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"Edit\"> Editer <i ></i></a>
                        ";
            // line 28
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("maisonedition_supprimer", array("id" => $this->getAttribute($context["maisonedition"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"Delete\">Supprimer<i ></i></a>
                        ";
            // line 30
            echo "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maisonedition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </tbody>
            </table>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("maisonedition_new");
        echo "\">Create a new maisonedition</a>
        </li>
    </ul>
    <script src=\"https://bootadmin.net/js/jquery.min.js\"></script>
    <script src=\"https://bootadmin.net/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://bootadmin.net/js/datatables.min.js\"></script>
    <script src=\"https://bootadmin.net/js/moment.min.js\"></script>
    <script src=\"https://bootadmin.net/js/fullcalendar.min.js\"></script>
    <script src=\"https://bootadmin.net/js/bootadmin.min.js\"></script>
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
        return "@MaisonEdition\\Default\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  110 => 33,  102 => 30,  97 => 28,  93 => 26,  88 => 24,  84 => 23,  80 => 22,  74 => 21,  71 => 20,  67 => 19,  49 => 3,  40 => 2,  11 => 1,);
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

    <h1>Maison Editions</h1>

    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Nationalité</th>
                    <th>Groupe Editoriel</th>
                    <th>Propriétaire</th>
                    <th class=\"actions\">Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for maisonedition in maisoneditions %}
                <tr>
                    <td><a href=\"{{ path('maisonedition_show', { 'id': maisonedition.id }) }}\">{{ maisonedition.nom }}</a></td>
                    <td>{{ maisonedition.nationalite }}</td>
                    <td>{{ maisonedition.groupeeditoriel }}</td>
                    <td>{{ maisonedition.proprietaire }}</td>
                    <td>
                        <a href=\"{{ path('maisonedition_edit', { 'id': maisonedition.id }) }}\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"Edit\"> Editer <i ></i></a>
                        {#{{ form_start(delete_form) }}#}
                        <a href=\"{{ path('maisonedition_supprimer', { 'id': maisonedition.id }) }}\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"Delete\">Supprimer<i ></i></a>
                        {#{{ form_end(delete_form) }}#}
                    </td>
                </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"{{ path('maisonedition_new') }}\">Create a new maisonedition</a>
        </li>
    </ul>
    <script src=\"https://bootadmin.net/js/jquery.min.js\"></script>
    <script src=\"https://bootadmin.net/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://bootadmin.net/js/datatables.min.js\"></script>
    <script src=\"https://bootadmin.net/js/moment.min.js\"></script>
    <script src=\"https://bootadmin.net/js/fullcalendar.min.js\"></script>
    <script src=\"https://bootadmin.net/js/bootadmin.min.js\"></script>
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



{% endblock %}", "@MaisonEdition\\Default\\index.html.twig", "C:\\wamp64\\www\\project\\src\\MaisonEditionBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
