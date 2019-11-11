<?php

/* EvenementBundle:Default:index.html.twig */
class __TwigTemplate_dae34a8545785d3b65650dda1223fc80457556c2c438e6b255dfb7d2e84086cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "EvenementBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:index.html.twig"));

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
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link rel=\"stylesheet\" href=\"https://bootadmin.net/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://bootadmin.net/css/fontawesome-all.min.css\">
        <link rel=\"stylesheet\" href=\"https://bootadmin.net/css/datatables.min.css\">
        <link rel=\"stylesheet\" href=\"https://bootadmin.net/css/fullcalendar.min.css\">
        <link rel=\"stylesheet\" href=\"https://bootadmin.net/css/bootadmin.min.css\">





    <h1>Events list</h1>
<div class=\"card mb-4\">
    <div class=\"card-body\">
        <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Lieu</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Description</th>
                <th>Capacite</th>
                <th>Nbreparticipant</th>

                <th class=\"actions\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 38
            echo "            ";
            if ((twig_date_converter($this->env, $this->getAttribute($context["event"], "date", array())) < twig_date_converter($this->env, "now"))) {
                // line 39
                echo "            <tr style=\"background-color: #96a1af\" >
                <td><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-icon btn-pill btn-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "</a></td>
                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nom", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "lieu", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "date", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "heure", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "capacite", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nbreParticipant", array()), "html", null, true);
                echo "</td>

                <td>

                    <a> </a>
                   <a></a>
                </td>
            </tr>
                ";
            } else {
                // line 56
                echo "                    <tr >
                        <td><a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-icon btn-pill btn-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "lieu", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "date", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "heure", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "capacite", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nbreParticipant", array()), "html", null, true);
                echo "</td>

                        <td>

                            <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_edit", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-icon btn-pill btn-success\"  data-toggle=\"tooltip\" title=\"Edit\" >  Edit  </a>
                            <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_supprimer", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"Delete\">Delete</a>

        ";
            }
            // line 72
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>
    </div>
</div>


            <a  href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_ajout");
        echo "\" class=\"btn btn-icon btn-pill btn-primary\">Create a new Event </a>
            <a style=\"alignment: left\" href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_stat");
        echo "\" class=\"btn btn-icon btn-pill btn-warning\">Show Events Statistics </a>

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



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 80,  200 => 79,  192 => 73,  186 => 72,  180 => 69,  176 => 68,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  139 => 57,  136 => 56,  124 => 47,  120 => 46,  116 => 45,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  94 => 40,  91 => 39,  88 => 38,  84 => 37,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BaseAdmin.html.twig' %}

{% block container %}

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link rel=\"stylesheet\" href=\"https://bootadmin.net/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://bootadmin.net/css/fontawesome-all.min.css\">
        <link rel=\"stylesheet\" href=\"https://bootadmin.net/css/datatables.min.css\">
        <link rel=\"stylesheet\" href=\"https://bootadmin.net/css/fullcalendar.min.css\">
        <link rel=\"stylesheet\" href=\"https://bootadmin.net/css/bootadmin.min.css\">





    <h1>Events list</h1>
<div class=\"card mb-4\">
    <div class=\"card-body\">
        <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Lieu</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Description</th>
                <th>Capacite</th>
                <th>Nbreparticipant</th>

                <th class=\"actions\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for event in events %}
            {% if  date(event.date)<date(\"now\")%}
            <tr style=\"background-color: #96a1af\" >
                <td><a href=\"{{ path('event_show', { 'id': event.id }) }}\" class=\"btn btn-icon btn-pill btn-primary\">{{ event.id }}</a></td>
                <td>{{ event.nom }}</td>
                <td>{{ event.lieu }}</td>
                <td>{{ event.date }}</td>
                <td>{{ event.heure }}</td>
                <td>{{ event.description }}</td>
                <td>{{ event.capacite }}</td>
                <td>{{ event.nbreParticipant }}</td>

                <td>

                    <a> </a>
                   <a></a>
                </td>
            </tr>
                {% else %}
                    <tr >
                        <td><a href=\"{{ path('event_show', { 'id': event.id }) }}\" class=\"btn btn-icon btn-pill btn-primary\">{{ event.id }}</a></td>
                        <td>{{ event.nom }}</td>
                        <td>{{ event.lieu }}</td>
                        <td>{{ event.date }}</td>
                        <td>{{ event.heure }}</td>
                        <td>{{ event.description }}</td>
                        <td>{{ event.capacite }}</td>
                        <td>{{ event.nbreParticipant }}</td>

                        <td>

                            <a href=\"{{ path('event_edit', { 'id': event.id }) }}\" class=\"btn btn-icon btn-pill btn-success\"  data-toggle=\"tooltip\" title=\"Edit\" >  Edit  </a>
                            <a href=\"{{ path('event_supprimer', { 'id': event.id }    ) }}\" class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"Delete\">Delete</a>

        {% endif %}
        {% endfor %}
        </tbody>
    </table>
    </div>
</div>


            <a  href=\"{{ path('event_ajout') }}\" class=\"btn btn-icon btn-pill btn-primary\">Create a new Event </a>
            <a style=\"alignment: left\" href=\"{{ path('event_stat') }}\" class=\"btn btn-icon btn-pill btn-warning\">Show Events Statistics </a>

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



{% endblock %}", "EvenementBundle:Default:index.html.twig", "C:\\wamp64\\www\\project\\src\\EvenementBundle/Resources/views/Default/index.html.twig");
    }
}
