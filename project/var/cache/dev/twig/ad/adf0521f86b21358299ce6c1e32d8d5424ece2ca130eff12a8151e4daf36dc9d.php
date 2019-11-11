<?php

/* EchangeBundle:Default:show.html.twig */
class __TwigTemplate_0c6be62553c0cc353f6ee3816c9a72ca15a8134302b62397d92c344d4958404a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "EchangeBundle:Default:show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EchangeBundle:Default:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EchangeBundle:Default:show.html.twig"));

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
        echo "    <h1>Echange</h1>

    <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th class=\"product-thumbnail\">Livre Proposé</th>
            <th class=\"product-name\">Livre Demandé</th>
            <th class=\"product-price\">Etat des Livres</th>
            <th class=\"product-quantity\">Description</th>
            <th class=\"product-remove\">Actions</th>

        </tr>
        </thead>
        <tbody>
        <form>
            <tr>

                <td><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("echange_show", array("idech" => $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "idech", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "idprop", array()), "html", null, true);
        echo "</a></td>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "iddem", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "stat", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "descr", array()), "html", null, true);
        echo "</td>
                <td>
                    ";
        // line 25
        echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getTwitterButton();
        echo "
                </td>
                <input type=\"submit\" id=\"pdf\" name=\"pdf\" value=\"pdf\" class=\"btn btn-primary\" />
            </tr>
        </form>
        </tbody>
    </table>
    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("echange_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("echange_edit", array("idech" => $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "idech", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-primary\" type=\"submit\" value=\"Delete\">
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EchangeBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  111 => 40,  105 => 37,  99 => 34,  87 => 25,  82 => 23,  78 => 22,  74 => 21,  68 => 20,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1>Echange</h1>

    <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th class=\"product-thumbnail\">Livre Proposé</th>
            <th class=\"product-name\">Livre Demandé</th>
            <th class=\"product-price\">Etat des Livres</th>
            <th class=\"product-quantity\">Description</th>
            <th class=\"product-remove\">Actions</th>

        </tr>
        </thead>
        <tbody>
        <form>
            <tr>

                <td><a href=\"{{ path('echange_show', { 'idech': echange.idech }) }}\">{{ echange.idprop }}</a></td>
                <td>{{ echange.iddem }}</td>
                <td>{{ echange.stat }}</td>
                <td>{{ echange.descr }}</td>
                <td>
                    {{ twitterButton() }}
                </td>
                <input type=\"submit\" id=\"pdf\" name=\"pdf\" value=\"pdf\" class=\"btn btn-primary\" />
            </tr>
        </form>
        </tbody>
    </table>
    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('echange_index') }}\">Back to the list</a>
        </li>
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('echange_edit', { 'idech': echange.idech }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class=\"btn btn-primary\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EchangeBundle:Default:show.html.twig", "C:\\wamp64\\www\\project\\src\\EchangeBundle/Resources/views/Default/show.html.twig");
    }
}
