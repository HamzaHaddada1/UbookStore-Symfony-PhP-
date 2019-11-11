<?php

/* @Auteur/Default/show.html.twig */
class __TwigTemplate_154d2ec036b68d8a3d2f3562d88138bf4d4c951bc27f26679929402b6a026a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@Auteur/Default/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Auteur/Default/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Auteur/Default/show.html.twig"));

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
        echo "    <h1> Informations Auteur</h1>

    <table id=\"example\" class=\"table table-hover dataTable no-footer dtr-inline\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example_info\" style=\"width: 100%;\">
        <tbody>
            <tr>
                <th>Idautr</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["auteur"] ?? $this->getContext($context, "auteur")), "idautr", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Authorname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["auteur"] ?? $this->getContext($context, "auteur")), "authorname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["auteur"] ?? $this->getContext($context, "auteur")), "birthdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["auteur"] ?? $this->getContext($context, "auteur")), "birthdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deathdate</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["auteur"] ?? $this->getContext($context, "auteur")), "deathdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["auteur"] ?? $this->getContext($context, "auteur")), "deathdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Contact</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["auteur"] ?? $this->getContext($context, "auteur")), "contact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrip</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["auteur"] ?? $this->getContext($context, "auteur")), "descrip", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auteur_index");
        echo "\"class=\"btn btn-icon btn-pill btn-info\" data-toggle=\"tooltip\" title=\"nouveau\"><i >Back to list</i></a>
        </li>
        <li>
            <a  href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auteur_edit", array("idautr" => $this->getAttribute(($context["auteur"] ?? $this->getContext($context, "auteur")), "idautr", array()))), "html", null, true);
        echo "\"
                class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"Edit\"><i>Edit</i></a>
        </li>

    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Auteur/Default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  106 => 37,  96 => 30,  89 => 26,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1> Informations Auteur</h1>

    <table id=\"example\" class=\"table table-hover dataTable no-footer dtr-inline\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example_info\" style=\"width: 100%;\">
        <tbody>
            <tr>
                <th>Idautr</th>
                <td>{{ auteur.idautr }}</td>
            </tr>
            <tr>
                <th>Authorname</th>
                <td>{{ auteur.authorname }}</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>{% if auteur.birthdate %}{{ auteur.birthdate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Deathdate</th>
                <td>{% if auteur.deathdate %}{{ auteur.deathdate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Contact</th>
                <td>{{ auteur.contact }}</td>
            </tr>
            <tr>
                <th>Descrip</th>
                <td>{{ auteur.descrip }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('auteur_index') }}\"class=\"btn btn-icon btn-pill btn-info\" data-toggle=\"tooltip\" title=\"nouveau\"><i >Back to list</i></a>
        </li>
        <li>
            <a  href=\"{{ path('auteur_edit', { 'idautr': auteur.idautr }) }}\"
                class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"Edit\"><i>Edit</i></a>
        </li>

    </ul>
{% endblock %}
", "@Auteur/Default/show.html.twig", "C:\\wamp64\\www\\project\\src\\AuteurBundle\\Resources\\views\\Default\\show.html.twig");
    }
}
