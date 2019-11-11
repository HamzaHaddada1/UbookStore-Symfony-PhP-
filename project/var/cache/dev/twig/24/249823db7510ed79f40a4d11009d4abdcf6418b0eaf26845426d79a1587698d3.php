<?php

/* EchangeBundle:Default:new.html.twig */
class __TwigTemplate_0083b67576f111ee7fe2e7cca3ea18475d6163571873c56952c6c37b3d225721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "EchangeBundle:Default:new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EchangeBundle:Default:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EchangeBundle:Default:new.html.twig"));

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
        echo "<div class=\"card mb-4\">
    <div class=\"card-header bg-white font-weight-bold\">
    <h1>Echange creation</h1>
    </div>
    <div class=\"card-body\">

        <!--<form name=\"echangebundle_echange\" id=\"form1\" method=\"post\">
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_idprop\" class=\"required\">Livre Proposé</label><select id=\"echangebundle_echange_idprop\" name=\"echangebundle_echange[idprop]\" class=\"form-control\"><option value=\"22\">La médecine moderne</option><option value=\"10\">Esprit</option><option value=\"14\">Superman</option></select></div></div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_iddem\" class=\"required\">Livre demandé</label><select id=\"echangebundle_echange_iddem\" name=\"echangebundle_echange[iddem]\" class=\"form-control\"><option value=\"22\">La médecine moderne</option><option value=\"10\">Esprit</option><option value=\"14\">Superman</option></select></div></div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_stat\" class=\"required\">Etat des livre</label><input type=\"text\" id=\"echangebundle_echange_stat\" name=\"echangebundle_echange[stat]\" required=\"required\" class=\"form-control\" /></div></div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_descr\" class=\"required\">Descr</label><input type=\"text\" id=\"echangebundle_echange_descr\" name=\"echangebundle_echange[descr]\" required=\"required\" class=\"form-control\" /></div></div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_numcontact\" class=\"required\">Num contact</label><input type=\"text\" id=\"echangebundle_echange_numcontact\" name=\"echangebundle_echange[numcontact]\" required=\"required\" class=\"form-control\" /></div></div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_lieuech\" class=\"required\">Lieu de l'ech</label><select id=\"echangebundle_echange_lieuech\" name=\"echangebundle_echange[lieuech]\" class=\"form-control\"><option value=\"1\">Kef</option><option value=\"2\">ESPRIT</option><option value=\"3\">azret</option><option value=\"4\">zrretg</option><option value=\"5\">gfhgv</option><option value=\"6\">fdsg</option><option value=\"7\">dsqdgf</option><option value=\"8\">ESPRIT</option><option value=\"9\">mkljhjg</option></select></div></div>-->
    <form name=\"echangebundle_echange\" id=\"form1\" method=\"post\">
        <div class=\"form-group\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idprop", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"form-group\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "iddem", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"form-group\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stat", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
        <div class=\"form-group\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descr", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_numcontact\" class=\"required\">Numcontact</label><input type=\"Number\" id=\"echangebundle_echange_numcontact\" name=\"echangebundle_echange[numcontact]\" required=\"required\" class=\"form-control\" /></div></div>
        <div class=\"form-group\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieuech", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
                    <button  type=\"button\" class=\"btn btn-primary\" onclick=\"verif_formulaire()\">Valider</button>
        </form>

            <input type=\"hidden\" id=\"echangebundle_echange__token\" name=\"echangebundle_echange[_token]\" value=\"jbxA4lTNi7n-3Vp3aU7YWS9-EC9fk7LESIAlG-PUM08\" /></form>

    </div>   </div>
</div>
    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("echange_index");
        echo "\">Back to the list</a>
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
        return "EchangeBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  82 => 23,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"card mb-4\">
    <div class=\"card-header bg-white font-weight-bold\">
    <h1>Echange creation</h1>
    </div>
    <div class=\"card-body\">

        <!--<form name=\"echangebundle_echange\" id=\"form1\" method=\"post\">
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_idprop\" class=\"required\">Livre Proposé</label><select id=\"echangebundle_echange_idprop\" name=\"echangebundle_echange[idprop]\" class=\"form-control\"><option value=\"22\">La médecine moderne</option><option value=\"10\">Esprit</option><option value=\"14\">Superman</option></select></div></div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_iddem\" class=\"required\">Livre demandé</label><select id=\"echangebundle_echange_iddem\" name=\"echangebundle_echange[iddem]\" class=\"form-control\"><option value=\"22\">La médecine moderne</option><option value=\"10\">Esprit</option><option value=\"14\">Superman</option></select></div></div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_stat\" class=\"required\">Etat des livre</label><input type=\"text\" id=\"echangebundle_echange_stat\" name=\"echangebundle_echange[stat]\" required=\"required\" class=\"form-control\" /></div></div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_descr\" class=\"required\">Descr</label><input type=\"text\" id=\"echangebundle_echange_descr\" name=\"echangebundle_echange[descr]\" required=\"required\" class=\"form-control\" /></div></div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_numcontact\" class=\"required\">Num contact</label><input type=\"text\" id=\"echangebundle_echange_numcontact\" name=\"echangebundle_echange[numcontact]\" required=\"required\" class=\"form-control\" /></div></div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_lieuech\" class=\"required\">Lieu de l'ech</label><select id=\"echangebundle_echange_lieuech\" name=\"echangebundle_echange[lieuech]\" class=\"form-control\"><option value=\"1\">Kef</option><option value=\"2\">ESPRIT</option><option value=\"3\">azret</option><option value=\"4\">zrretg</option><option value=\"5\">gfhgv</option><option value=\"6\">fdsg</option><option value=\"7\">dsqdgf</option><option value=\"8\">ESPRIT</option><option value=\"9\">mkljhjg</option></select></div></div>-->
    <form name=\"echangebundle_echange\" id=\"form1\" method=\"post\">
        <div class=\"form-group\">{{ form_row(form.idprop, {'attr':{'class':'form-control'}}) }}</div>
        <div class=\"form-group\">{{ form_row(form.iddem, {'attr':{'class':'form-control'}}) }}</div>
        <div class=\"form-group\">{{ form_row(form.stat, {'attr':{'class':'form-control'}}) }}</div>
        <div class=\"form-group\">{{ form_row(form.descr, {'attr':{'class':'form-control'}}) }}</div>
            <div class=\"form-group\"><div><label for=\"echangebundle_echange_numcontact\" class=\"required\">Numcontact</label><input type=\"Number\" id=\"echangebundle_echange_numcontact\" name=\"echangebundle_echange[numcontact]\" required=\"required\" class=\"form-control\" /></div></div>
        <div class=\"form-group\">{{ form_row(form.lieuech, {'attr':{'class':'form-control'}}) }}</div>
                    <button  type=\"button\" class=\"btn btn-primary\" onclick=\"verif_formulaire()\">Valider</button>
        </form>

            <input type=\"hidden\" id=\"echangebundle_echange__token\" name=\"echangebundle_echange[_token]\" value=\"jbxA4lTNi7n-3Vp3aU7YWS9-EC9fk7LESIAlG-PUM08\" /></form>

    </div>   </div>
</div>
    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('echange_index') }}\">Back to the list</a>
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




", "EchangeBundle:Default:new.html.twig", "C:\\wamp64\\www\\project\\src\\EchangeBundle/Resources/views/Default/new.html.twig");
    }
}
