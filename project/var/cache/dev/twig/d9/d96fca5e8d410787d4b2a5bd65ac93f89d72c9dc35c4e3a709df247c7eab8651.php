<?php

/* :reclamation:show.html.twig */
class __TwigTemplate_40aa30baaa28e6daa10dd8afece7b528aea046fb9c889d0a8723dc928a0464b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":reclamation:show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reclamation:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reclamation:show.html.twig"));

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
        echo "    <head>

        <!-- main CSS
            ============================================ -->
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">

    </head>
    <div class=\"hpanel email-compose mailbox-view mg-b-15\">
        <div class=\"panel-heading hbuilt\">

            <div class=\"p-xs h4\">
                <small class=\"pull-right\">
                    ";
        // line 16
        if ($this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "date", array()), "Y-m-d"), "html", null, true);
        }
        // line 17
        echo "                </small>

            </div>
        </div>
        <div class=\"border-top border-left border-right bg-light\">
            <div class=\"p-m custom-address-mailbox\">

                <div>
                    <span class=\"font-extra-bold\">Subject: </span> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "sujet", array()), "html", null, true);
        echo "
                </div>
                <div>
                    <span class=\"font-extra-bold\">From: </span>
                    <a href=\"#\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "email", array()), "html", null, true);
        echo "</a>
                </div>
                <div>
                    <span class=\"font-extra-bold\">Date: </span> ";
        // line 32
        if ($this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "date", array()), "Y-m-d"), "html", null, true);
        }
        // line 33
        echo "                </div>
            </div>
        </div>
        <div class=\"panel-body panel-csm\">
            <div>
                <h4>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "sujet", array()), "html", null, true);
        echo "</h4>

                <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "desctription", array()), "html", null, true);
        echo "</p>

                <p>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "email", array()), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <br>
    <button  class=\"btn btn-icon btn-pill btn-primary\"><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_index");
        echo "\">Back to the list</a></button>
        <br>
        ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <br>

    <button class=\"btn btn-icon btn-pill btn-danger\" style=\"width:100px\"> Delete</button>
    ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

    ";
        // line 97
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":reclamation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 97,  135 => 54,  128 => 50,  123 => 48,  114 => 42,  109 => 40,  104 => 38,  97 => 33,  93 => 32,  87 => 29,  80 => 25,  70 => 17,  66 => 16,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <head>

        <!-- main CSS
            ============================================ -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">

    </head>
    <div class=\"hpanel email-compose mailbox-view mg-b-15\">
        <div class=\"panel-heading hbuilt\">

            <div class=\"p-xs h4\">
                <small class=\"pull-right\">
                    {% if reclamation.date %}{{ reclamation.date|date('Y-m-d') }}{% endif %}
                </small>

            </div>
        </div>
        <div class=\"border-top border-left border-right bg-light\">
            <div class=\"p-m custom-address-mailbox\">

                <div>
                    <span class=\"font-extra-bold\">Subject: </span> {{ reclamation.sujet }}
                </div>
                <div>
                    <span class=\"font-extra-bold\">From: </span>
                    <a href=\"#\">{{ reclamation.email }}</a>
                </div>
                <div>
                    <span class=\"font-extra-bold\">Date: </span> {% if reclamation.date %}{{ reclamation.date|date('Y-m-d') }}{% endif %}
                </div>
            </div>
        </div>
        <div class=\"panel-body panel-csm\">
            <div>
                <h4>{{ reclamation.sujet }}</h4>

                <p>{{ reclamation.desctription }}</p>

                <p>{{ reclamation.email }}
                </p>
            </div>
        </div>

        <br>
    <button  class=\"btn btn-icon btn-pill btn-primary\"><a href=\"{{ path('reclamation_index') }}\">Back to the list</a></button>
        <br>
        {{ form_start(delete_form) }}
        <br>

    <button class=\"btn btn-icon btn-pill btn-danger\" style=\"width:100px\"> Delete</button>
    {{ form_end(delete_form) }}

    {#
    <h1>Reclamation</h1>

    <table border=\"1px\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reclamation.id }}</td>
            </tr>
            <tr>
                <th>Sujet</th>
                <td>{{ reclamation.sujet }}</td>
            </tr>
            <tr>
                <th>Desctription</th>
                <td>{{ reclamation.desctription }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if reclamation.date %}{{ reclamation.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ reclamation.nom }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reclamation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reclamation_edit', { 'id': reclamation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>#}
    </div>
{% endblock %}
", ":reclamation:show.html.twig", "C:\\wamp64\\www\\project\\app/Resources\\views/reclamation/show.html.twig");
    }
}
