<?php

/* LivreBundle:Default:edit.html.twig */
class __TwigTemplate_0c381bea4435afbb0bafa7ad6a1815bfdba20757bd56a4d149ff003c61acc0bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "LivreBundle:Default:edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LivreBundle:Default:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LivreBundle:Default:edit.html.twig"));

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
        echo "    <h1 style=\"color: #00afea;text-align: center; \"> Modification du Livre</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <div class=\"form-group\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nom", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "auteur", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "categorie", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mPub", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "img", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prix", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "stock", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rate", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <input href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_index");
        echo "\" type=\"submit\"  value=\"Modifier\"  class=\"form-control submit\" style=\" background: #c0c0c8;
    border-color: transparent;
    color: #ffffff;
    font-size:17px;
    font-weight: bold;

    \" />
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
<table>
<tr>
    <td>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_index");
        echo "\" class=\"form-control submit\" style=\"background:#ec6d5e;
    color: #ffffff;
    font-size:17px;
    font-weight: bold;\">Back to the list</a>
    </td>
    <td>
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Delete\" class=\"form-control submit\" style=\"background:#ec6d5e;
    color: #ffffff;
    font-size:17px;
    font-weight: bold;\">
        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </td>
</tr>
</table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "LivreBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  119 => 33,  110 => 27,  103 => 23,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 style=\"color: #00afea;text-align: center; \"> Modification du Livre</h1>

    {{ form_start(edit_form) }}
    <div class=\"form-group\">{{ form_row(edit_form.nom,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(edit_form.auteur,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(edit_form.categorie,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(edit_form.mPub,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(edit_form.img,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(edit_form.description,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(edit_form.prix,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(edit_form.stock,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(edit_form.rate,{'attr':{'class':'form-control'}}) }}</div>
    <input href=\"{{ path('livres_index') }}\" type=\"submit\"  value=\"Modifier\"  class=\"form-control submit\" style=\" background: #c0c0c8;
    border-color: transparent;
    color: #ffffff;
    font-size:17px;
    font-weight: bold;

    \" />
    {{ form_end(edit_form) }}
<table>
<tr>
    <td>
        <a href=\"{{ path('livres_index') }}\" class=\"form-control submit\" style=\"background:#ec6d5e;
    color: #ffffff;
    font-size:17px;
    font-weight: bold;\">Back to the list</a>
    </td>
    <td>
        {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Delete\" class=\"form-control submit\" style=\"background:#ec6d5e;
    color: #ffffff;
    font-size:17px;
    font-weight: bold;\">
        {{ form_end(delete_form) }}
    </td>
</tr>
</table>


{% endblock %}
", "LivreBundle:Default:edit.html.twig", "C:\\wamp64\\www\\project\\src\\LivreBundle/Resources/views/Default/edit.html.twig");
    }
}
