<?php

/* empruntClient/show2.html.twig */
class __TwigTemplate_bb75d627fd11f814823e901d63841756417226435bfb04ebc4f540188f42082c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "empruntClient/show2.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empruntClient/show2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empruntClient/show2.html.twig"));

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
        echo "    <br><br><br><br>
    <h1>Emprunt</h1>

    <div class=\"list__view\">
        <div class=\"thumb\">
            <a class=\"first__img\" href=\"single-product.html\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "image", array()))), "html", null, true);
        echo "\" alt=\"product images\"></a>

        </div>
        <div class=\"content\">
            <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "nomlivre", array()), "html", null, true);
        echo "</h2>
            <ul class=\"rating d-flex\">
                <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                <li><i class=\"fa fa-star-o\"></i></li>
                <li><i class=\"fa fa-star-o\"></i></li>
            </ul>
            <ul class=\"prize__box\">
                <li>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "nomauteur", array()), "html", null, true);
        echo "</li>

            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
            <table>
                <tr>
                    <td><h6>Utilisateur:</h6></td>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "username", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><h6>Email :</h6></td>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "email", array()), "html", null, true);
        echo "</td>
                </tr>
            </table>

            <ul class=\"cart__action d-flex\">
                <li class=\"cart\"><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_Rendre", array("id" => $this->getAttribute(($context["emprunt"] ?? $this->getContext($context, "emprunt")), "id", array()))), "html", null, true);
        echo "\">Rendre</a></li>

                <li class=\"compare\"><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_indexClient");
        echo "\"></a></li>
            </ul>

        </div>

    </div>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "empruntClient/show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 41,  101 => 39,  93 => 34,  86 => 30,  76 => 23,  63 => 13,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <br><br><br><br>
    <h1>Emprunt</h1>

    <div class=\"list__view\">
        <div class=\"thumb\">
            <a class=\"first__img\" href=\"single-product.html\"><img src=\"{{ asset('uploads/images/' ~ emprunt.image) }}\" alt=\"product images\"></a>

        </div>
        <div class=\"content\">
            <h2>{{ emprunt.nomlivre }}</h2>
            <ul class=\"rating d-flex\">
                <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                <li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
                <li><i class=\"fa fa-star-o\"></i></li>
                <li><i class=\"fa fa-star-o\"></i></li>
            </ul>
            <ul class=\"prize__box\">
                <li>{{ emprunt.nomauteur }}</li>

            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
            <table>
                <tr>
                    <td><h6>Utilisateur:</h6></td>
                    <td>{{ emprunt.username }}</td>
                </tr>
                <tr>
                    <td><h6>Email :</h6></td>
                    <td>{{ emprunt.email }}</td>
                </tr>
            </table>

            <ul class=\"cart__action d-flex\">
                <li class=\"cart\"><a href=\"{{ path('emprunt_Rendre', { 'id': emprunt.id }) }}\">Rendre</a></li>

                <li class=\"compare\"><a href=\"{{ path('emprunt_indexClient') }}\"></a></li>
            </ul>

        </div>

    </div>


    {#<div class=\"card\" style=\"width: 18rem;\">
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
    </div>#}
{% endblock %}
", "empruntClient/show2.html.twig", "C:\\wamp64\\www\\project\\app\\Resources\\views\\empruntClient\\show2.html.twig");
    }
}
