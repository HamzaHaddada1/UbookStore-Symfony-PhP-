<?php

/* emprunt/show.html.twig */
class __TwigTemplate_79405605ac97c1e202ef87e615e1dadb5768e749cf76ea1582f61efb71a8e091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "emprunt/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emprunt/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emprunt/show.html.twig"));

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
        echo "    <h1>Emprunt</h1>

";
        // line 54
        echo "    <style>
        h1 { color: #c9d0d4; font-family: 'Helvetica Neue', sans-serif; font-size: 46px; font-weight: 100; line-height: 50px; letter-spacing: 1px; padding: 0 0 40px; border-bottom: double #555; }

    </style>
    <div class=\"card\" style=\"width: 18rem;\">
        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "image", array()))), "html", null, true);
        echo "\" height=\"250px\" width=\"250px\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">A Propos</h5>
            <p class=\"card-text\">Ce Livre est mis pour emprunter le ";
        // line 62
        if ($this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo " par ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "username", array()), "html", null, true);
        echo ".</p>
        </div>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\"><i style=\"font-family:Helvetica Neue, Helvetica, Arial, sans-serif\">Livre :</i>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "nomlivre", array()), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><i style=\"font-family:Helvetica Neue, Helvetica, Arial, sans-serif\">Auteur :</i>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "nomauteur", array()), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><i style=\"font-family:Helvetica Neue, Helvetica, Arial, sans-serif\">Utilisateur :</i>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "username", array()), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><i style=\"font-family:Helvetica Neue, Helvetica, Arial, sans-serif\">Email :</i>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "username", array()), "html", null, true);
        echo "</li>
        </ul>
        <div class=\"card-body\">
            <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_index");
        echo "\" class=\"card-link\">Back to the list</a>
            <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_edit", array("id" => $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "id", array()))), "html", null, true);
        echo "\" class=\"card-link\">Edit</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "emprunt/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 72,  94 => 71,  88 => 68,  84 => 67,  80 => 66,  76 => 65,  66 => 62,  60 => 59,  53 => 54,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Emprunt</h1>

{#    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ emprunt.id }}</td>
            </tr>
            <tr>
                <th>Nomlivre</th>
                <td>{{ emprunt.nomlivre }}</td>
            </tr>
            <tr>
                <th>Nomauteur</th>
                <td>{{ emprunt.nomauteur }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if emprunt.date %}{{ emprunt.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ emprunt.username }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ emprunt.email }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td></td>


            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('emprunt_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('emprunt_edit', { 'id': emprunt.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>#}
    <style>
        h1 { color: #c9d0d4; font-family: 'Helvetica Neue', sans-serif; font-size: 46px; font-weight: 100; line-height: 50px; letter-spacing: 1px; padding: 0 0 40px; border-bottom: double #555; }

    </style>
    <div class=\"card\" style=\"width: 18rem;\">
        <img src=\"{{ asset('uploads/images/' ~ emprunt.image) }}\" height=\"250px\" width=\"250px\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">A Propos</h5>
            <p class=\"card-text\">Ce Livre est mis pour emprunter le {% if emprunt.date %}{{ emprunt.date|date('Y-m-d') }}{% endif %} par {{ emprunt.username }}.</p>
        </div>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\"><i style=\"font-family:Helvetica Neue, Helvetica, Arial, sans-serif\">Livre :</i>{{ emprunt.nomlivre }}</li>
            <li class=\"list-group-item\"><i style=\"font-family:Helvetica Neue, Helvetica, Arial, sans-serif\">Auteur :</i>{{ emprunt.nomauteur }}</li>
            <li class=\"list-group-item\"><i style=\"font-family:Helvetica Neue, Helvetica, Arial, sans-serif\">Utilisateur :</i>{{ emprunt.username }}</li>
            <li class=\"list-group-item\"><i style=\"font-family:Helvetica Neue, Helvetica, Arial, sans-serif\">Email :</i>{{ emprunt.username }}</li>
        </ul>
        <div class=\"card-body\">
            <a href=\"{{ path('emprunt_index') }}\" class=\"card-link\">Back to the list</a>
            <a href=\"{{ path('emprunt_edit', { 'id': emprunt.id }) }}\" class=\"card-link\">Edit</a>
        </div>
    </div>
{% endblock %}
", "emprunt/show.html.twig", "C:\\wamp64\\www\\project\\app\\Resources\\views\\emprunt\\show.html.twig");
    }
}
