<?php

/* empruntClient/index2.html.twig */
class __TwigTemplate_cf708bdd62267a004d9d7f4547c83ea43f3a19a604ac3950bd170d8a34e48745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "empruntClient/index2.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empruntClient/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empruntClient/index2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <br><br><br><br><br>
    <h4>Emprunt List</h4>
    <br><br>


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 ol-lg-12\">

                <div class=\"table-content wnro__table table-responsive\">
    <table name=\"table\">
        <thead>
        <tr>
        <tr class=\"title-top\">
            <th class=\"product-thumbnail\">Image</th>
            <th class=\"product-name\">Livre</th>
            <th class=\"product-price\">Auteur</th>
            <th class=\"product-quantity\">Date</th>
            <th class=\"product-subtotal\">Utilisateur</th>
            <th class=\"product-remove\">Action</th>
        </tr>
        </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emprunts"] ?? $this->getContext($context, "emprunts")));
        foreach ($context['_seq'] as $context["_key"] => $context["emprunt"]) {
            // line 29
            echo "            <tr>
                <td class=\"product-thumbnail\"><a href=\"#\"><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["emprunt"], "image", array()))), "html", null, true);
            echo "\"  alt=\"product img\"></a></td>
                <td class=\"product-name\"><a href=\"#\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "nomlivre", array()), "html", null, true);
            echo "</a></td>
                <td class=\"product-price\"><span class=\"amount\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "nomauteur", array()), "html", null, true);
            echo "</span></td>
                <td class=\"product-subtotal\">";
            // line 33
            if ($this->getAttribute($context["emprunt"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emprunt"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td class=\"product-subtotal\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "username", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_showClient2", array("id" => $this->getAttribute($context["emprunt"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_editClient", array("id" => $this->getAttribute($context["emprunt"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emprunt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
                </div>
        </div></div></div>
    <script>

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "empruntClient/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  113 => 41,  107 => 38,  100 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  79 => 29,  75 => 28,  49 => 4,  40 => 3,  11 => 1,);
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
    <br><br><br><br><br>
    <h4>Emprunt List</h4>
    <br><br>


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 ol-lg-12\">

                <div class=\"table-content wnro__table table-responsive\">
    <table name=\"table\">
        <thead>
        <tr>
        <tr class=\"title-top\">
            <th class=\"product-thumbnail\">Image</th>
            <th class=\"product-name\">Livre</th>
            <th class=\"product-price\">Auteur</th>
            <th class=\"product-quantity\">Date</th>
            <th class=\"product-subtotal\">Utilisateur</th>
            <th class=\"product-remove\">Action</th>
        </tr>
        </tr>
        </thead>
        <tbody>
        {% for emprunt in emprunts %}
            <tr>
                <td class=\"product-thumbnail\"><a href=\"#\"><img src=\"{{ asset('uploads/images/' ~ emprunt.image) }}\"  alt=\"product img\"></a></td>
                <td class=\"product-name\"><a href=\"#\">{{ emprunt.nomlivre }}</a></td>
                <td class=\"product-price\"><span class=\"amount\">{{ emprunt.nomauteur }}</span></td>
                <td class=\"product-subtotal\">{% if emprunt.date %}{{ emprunt.date|date('Y-m-d') }}{% endif %}</td>
                <td class=\"product-subtotal\">{{ emprunt.username }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('emprunt_showClient2', { 'id': emprunt.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('emprunt_editClient', { 'id': emprunt.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
                </div>
        </div></div></div>
    <script>

    </script>

{% endblock %}
", "empruntClient/index2.html.twig", "C:\\wamp64\\www\\project\\app\\Resources\\views\\empruntClient\\index2.html.twig");
    }
}
