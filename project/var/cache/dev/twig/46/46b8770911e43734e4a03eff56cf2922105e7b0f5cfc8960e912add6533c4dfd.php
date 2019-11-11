<?php

/* EvenementBundle:Default:edit.html.twig */
class __TwigTemplate_8894fe6500f918deedd910d7f76c3113266cafef03b9716a1c69f4826a8d6e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "EvenementBundle:Default:edit.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:edit.html.twig"));

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
        echo "      <h1>Event edit</h1>



      <div class=\"card mb-4\">
          <div class=\"card-header bg-white font-weight-bold\">


          </div>
          <div class=\"card-body\">
              ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
              <div class=\"form-group\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nom", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
              <div class=\"form-group\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lieu", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
              <div class=\"form-group\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "date", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
              <div class=\"form-group\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "heure", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
              <div class=\"form-group\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
              <div class=\"form-group\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "capacite", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>
              <div class=\"form-group\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nbreParticipant", array()), 'row', array("attr" => array("class" => "form-control", "disabled" => "true")));
        echo "</div>
              <div class=\"form-group\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "img", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "</div>

              <button  class=\"btn btn-primary\" onclick=\"validateDate(this);return false;\">Modifier</button>

              ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

          </div>
      </div>

      <ul>
          ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
          <input type=\"submit\" value=\"Delete\">
          ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
      </ul>
      <li>
          <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Back to the list</a>
      </li>

      <script>
          function validateDate() {
              var dateNow   =  new Date(),
                  strSaisie    =  document.getElementById(\"evenementbundle_event_date\").value,
                  dateJour,
                  dateSaisie;

              dateJour = new Date(dateNow.getFullYear(), dateNow.getMonth(), dateNow.getDate());
              strSaisie = strSaisie.replace(/-/g,\"\");
              dateSaisie = new Date(strSaisie.substr(0,4), strSaisie.substr(4,2)-1, strSaisie.substr(6,2));

              if (dateSaisie < dateJour ) {
                  alert('Please provide a valid date');
                  return false;




              }
              else if (dateSaisie > dateJour ) {
                  document.getElementsByName(\"evenementbundle_event\").submit();
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
        return "EvenementBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  114 => 33,  109 => 31,  100 => 25,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BaseAdmin.html.twig' %}
  {% block container %}
      <h1>Event edit</h1>



      <div class=\"card mb-4\">
          <div class=\"card-header bg-white font-weight-bold\">


          </div>
          <div class=\"card-body\">
              {{ form_start(edit_form ) }}
              <div class=\"form-group\">{{ form_row(edit_form.nom, {'attr':{'class':'form-control'}}) }}</div>
              <div class=\"form-group\">{{ form_row(edit_form.lieu, {'attr':{'class':'form-control'}}) }}</div>
              <div class=\"form-group\">{{ form_row(edit_form.date, {'attr':{'class':'form-control'}}) }}</div>
              <div class=\"form-group\">{{ form_row(edit_form.heure, {'attr':{'class':'form-control'}}) }}</div>
              <div class=\"form-group\">{{ form_row(edit_form.description, {'attr':{'class':'form-control'}}) }}</div>
              <div class=\"form-group\">{{ form_row(edit_form.capacite, {'attr':{'class':'form-control'}}) }}</div>
              <div class=\"form-group\">{{ form_row(edit_form.nbreParticipant, {'attr':{'class':'form-control', 'disabled': 'true'}}) }}</div>
              <div class=\"form-group\">{{ form_row(edit_form.img, {'attr':{'class':'form-control'}}) }}</div>

              <button  class=\"btn btn-primary\" onclick=\"validateDate(this);return false;\">Modifier</button>

              {{ form_end(edit_form) }}

          </div>
      </div>

      <ul>
          {{ form_start(delete_form) }}
          <input type=\"submit\" value=\"Delete\">
          {{ form_end(delete_form) }}
      </ul>
      <li>
          <a href=\"{{ path('event_index') }}\">Back to the list</a>
      </li>

      <script>
          function validateDate() {
              var dateNow   =  new Date(),
                  strSaisie    =  document.getElementById(\"evenementbundle_event_date\").value,
                  dateJour,
                  dateSaisie;

              dateJour = new Date(dateNow.getFullYear(), dateNow.getMonth(), dateNow.getDate());
              strSaisie = strSaisie.replace(/-/g,\"\");
              dateSaisie = new Date(strSaisie.substr(0,4), strSaisie.substr(4,2)-1, strSaisie.substr(6,2));

              if (dateSaisie < dateJour ) {
                  alert('Please provide a valid date');
                  return false;




              }
              else if (dateSaisie > dateJour ) {
                  document.getElementsByName(\"evenementbundle_event\").submit();
                  return true;


              }


          }


      </script>
  {% endblock %}

", "EvenementBundle:Default:edit.html.twig", "C:\\wamp64\\www\\project\\src\\EvenementBundle/Resources/views/Default/edit.html.twig");
    }
}
