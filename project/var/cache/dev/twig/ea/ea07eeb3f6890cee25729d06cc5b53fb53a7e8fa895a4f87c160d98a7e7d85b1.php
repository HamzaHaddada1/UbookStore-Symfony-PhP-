<?php

/* EchangeBundle:Default:edit1.html.twig */
class __TwigTemplate_05bbec9e6da9bb078eb68527b4431240192705c40f0af3dba369f033b91b071d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "EchangeBundle:Default:edit1.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EchangeBundle:Default:edit1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EchangeBundle:Default:edit1.html.twig"));

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
        echo "<div class=\"card mb-4\">
    <div class=\"card-header bg-white font-weight-bold\">
    <h1>..</h1>
    </div>
    <div class=\"card-body\">
        <form name=\"echangebundle_echange\" id=\"form1\" method=\"post\">
        <div class=\"form-group\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "idprop", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"form-group\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "iddem", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"form-group\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "stat", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"form-group\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "descr", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_numcontact\" class=\"required\">Numcontact</label><input type=\"Number\" id=\"echangebundle_echange_numcontact\" name=\"echangebundle_echange[numcontact]\" required=\"required\" class=\"form-control\" /></div></div>
        <div class=\"form-group\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lieuech", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>


            <button  type=\"button\" class=\"btn btn-primary\" onclick=\"verif_formulaire()\">Modifier</button>
        </form>

    </div>
</div>
    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("echange_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-primary\" type=\"submit\" value=\"Delete\">
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
    <script type=\"text/javascript\" language=\"javascript\">
        function verif_formulaire() {
            var a=document.getElementById(\"echangebundle_echange_numcontact\").value;

            if (a.length != 8) {
                alert(\"le num de contact n'est pas valide\");
                return true;
            }
            else {
                document.getElementById(\"form1\").submit();
                return true;
            }
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EchangeBundle:Default:edit1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  93 => 28,  87 => 25,  74 => 15,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"card mb-4\">
    <div class=\"card-header bg-white font-weight-bold\">
    <h1>..</h1>
    </div>
    <div class=\"card-body\">
        <form name=\"echangebundle_echange\" id=\"form1\" method=\"post\">
        <div class=\"form-group\">{{ form_row(edit_form.idprop, {'attr':{'class':'form-control'}}) }}</div>
        <div class=\"form-group\">{{ form_row(edit_form.iddem, {'attr':{'class':'form-control'}}) }}</div>
        <div class=\"form-group\">{{ form_row(edit_form.stat, {'attr':{'class':'form-control'}}) }}</div>
        <div class=\"form-group\">{{ form_row(edit_form.descr, {'attr':{'class':'form-control'}}) }}</div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_numcontact\" class=\"required\">Numcontact</label><input type=\"Number\" id=\"echangebundle_echange_numcontact\" name=\"echangebundle_echange[numcontact]\" required=\"required\" class=\"form-control\" /></div></div>
        <div class=\"form-group\">{{ form_row(edit_form.lieuech, {'attr':{'class':'form-control'}}) }}</div>


            <button  type=\"button\" class=\"btn btn-primary\" onclick=\"verif_formulaire()\">Modifier</button>
        </form>

    </div>
</div>
    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('echange_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class=\"btn btn-primary\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
    <script type=\"text/javascript\" language=\"javascript\">
        function verif_formulaire() {
            var a=document.getElementById(\"echangebundle_echange_numcontact\").value;

            if (a.length != 8) {
                alert(\"le num de contact n'est pas valide\");
                return true;
            }
            else {
                document.getElementById(\"form1\").submit();
                return true;
            }
        }

    </script>
{% endblock %}
", "EchangeBundle:Default:edit1.html.twig", "C:\\wamp64\\www\\project\\src\\EchangeBundle/Resources/views/Default/edit1.html.twig");
    }
}
