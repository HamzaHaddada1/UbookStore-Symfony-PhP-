<?php

/* @Livre/Default/new.html.twig */
class __TwigTemplate_a0b1690d765983d88727c14ddc05018b7f377fd518e5dc8cdc0d4c404f9a0332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@Livre/Default/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Livre/Default/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Livre/Default/new.html.twig"));

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
        echo "<h1 style=\"color: #00afea; text-align: center; \"> Ajout d'un Livre</h1>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("nvalidate" => "novalidate")));
        echo "


    <div class=\"form-group\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "auteur", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mPub", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "img", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rate", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
    <div class=\"form-group\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>


    <input type=\"submit\"  value=\"Create\"  class=\"form-control submit\" style=\" background: #00afea;
    border-color: transparent;
    color: #ffffff;
    font-size:17px;
    font-weight: bold;

    \" />

<ul>
    <li>
        <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livres_index");
        echo "\">Back to the list</a>
    </li>
</ul>

    <div class=\"alert alert-danger\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "</div>
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Livre/Default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  117 => 34,  110 => 30,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1 style=\"color: #00afea; text-align: center; \"> Ajout d'un Livre</h1>
{{ form_start(form,{'attr':{'nvalidate':'novalidate'}}) }}


    <div class=\"form-group\">{{ form_row(form.nom,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(form.auteur,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(form.categorie,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(form.mPub,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(form.img,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(form.description,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(form.prix,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(form.stock,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(form.rate,{'attr':{'class':'form-control'}}) }}</div>
    <div class=\"form-group\">{{ form_row(form.promo,{'attr':{'class':'form-control'}}) }}</div>


    <input type=\"submit\"  value=\"Create\"  class=\"form-control submit\" style=\" background: #00afea;
    border-color: transparent;
    color: #ffffff;
    font-size:17px;
    font-weight: bold;

    \" />

<ul>
    <li>
        <a href=\"{{ path('livres_index') }}\">Back to the list</a>
    </li>
</ul>

    <div class=\"alert alert-danger\">{{ form_rest(form) }}</div>
    {{ form_end(form) }}

</div>

{% endblock %}

















", "@Livre/Default/new.html.twig", "C:\\wamp64\\www\\project\\src\\LivreBundle\\Resources\\views\\Default\\new.html.twig");
    }
}
