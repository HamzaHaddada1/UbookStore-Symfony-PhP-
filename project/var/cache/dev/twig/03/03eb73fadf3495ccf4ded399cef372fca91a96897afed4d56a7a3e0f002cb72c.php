<?php

/* emprunt/new.html.twig */
class __TwigTemplate_f38256857850f383c02654ed3a0bd6d7f53af82694c9cb64b76f9166d23b9608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "emprunt/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emprunt/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emprunt/new.html.twig"));

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
        echo "    <h1>Nouveau Emprunt</h1>

     ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"form-row\">
    <div class=\"col-md-4 mb-3\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<p id=\"cntr\" style=\"color: red\"></p>
        <p id=\"cntr1\" style=\"color: red\"></p>
    <button class=\"btn btn-success\" onclick=\"fonct()\">New</button>
    </div></div>
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <style>
        .required{
            font-family: verdana;
            font-size: 20px;
            font-family: \"Times New Roman\", Times, serif;
        }
        h1 { color: #c9d0d4; font-family: 'Helvetica Neue', sans-serif; font-size: 46px; font-weight: 100; line-height: 50px; letter-spacing: 1px; padding: 0 0 40px; border-bottom: double #555; }

    </style>
    <script>

var x = document.getElementsByClassName(\"required\");
x[0].innerHTML = \"Livre :\";
x[1].innerHTML= \"Auteur :\";
document.getElementById(\"empruntbundle_emprunt_email\").className = \"form-control is-valid\";
document.getElementById(\"empruntbundle_emprunt_nomauteur\").className = \"form-control is-valid\";
document.getElementById(\"empruntbundle_emprunt_username\").className = \"form-control is-valid\";
document.getElementById(\"empruntbundle_emprunt_nomlivre\").className = \"form-control is-valid\";
//document.getElementById(\"empruntbundle_emprunt_email\").style.color= \"red\";


    </script>
  <script>
        function fonct(){

            document.getElementById(\"empruntbundle_emprunt_email\").className = \"form-control is-valid\";
            document.getElementById(\"empruntbundle_emprunt_nomauteur\").className = \"form-control is-valid\";
            document.getElementById(\"empruntbundle_emprunt_username\").className = \"form-control is-valid\";
            document.getElementById(\"empruntbundle_emprunt_nomlivre\").className = \"form-control is-valid\";

            \$day=document.getElementById(\"empruntbundle_emprunt_date_day\").value;
            \$month=document.getElementById(\"empruntbundle_emprunt_date_month\").value;
            \$year=document.getElementById(\"empruntbundle_emprunt_date_year\").value;

            document.getElementById(\"cntr\").innerHTML = \"\";
            document.getElementById(\"cntr1\").innerHTML = \"\";

            if(document.getElementById(\"empruntbundle_emprunt_nomauteur\").value==\"\"){
                document.getElementById(\"empruntbundle_emprunt_nomauteur\").className = \"form-control is-invalid\";
            }

            if(document.getElementById(\"empruntbundle_emprunt_username\").value==\"\"){
                document.getElementById(\"empruntbundle_emprunt_username\").className = \"form-control is-invalid\";
            }

            if(document.getElementById(\"empruntbundle_emprunt_nomlivre\").value==\"\"){
                document.getElementById(\"empruntbundle_emprunt_nomlivre\").className = \"form-control is-invalid\";
            }


            var \$date=new Date();
            \$dd=\$date.getDate();
            \$mm=\$date.getMonth();
            \$yy=\$date.getFullYear();
                a=0;
            if(\$year<\$yy) {
                document.getElementById(\"cntr\").innerHTML = \"Date erronée!!\";
                a=1;
            }
            if (\$mm > \$month) {
                if(\$year<=\$yy) {
                    document.getElementById(\"cntr\").innerHTML = \"Date erronée!!\";
                    a=1;
                }
            }
            if(\$day<\$dd) {

                if (\$mm >= \$month) {

                    if(\$year<=\$yy) {
                        document.getElementById(\"cntr\").innerHTML = \"Date erronée!!\";
                        a=1;
                    }
                }
            }
            var expressionReguliere = /^(([^<>()[]\\.,;:s@]+(.[^<>()[]\\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))\$/;
            //document.getElementById(resultat).innerHTML = ;

            if (!expressionReguliere.test(document.getElementById(\"empruntbundle_emprunt_email\").value)) {
                document.getElementById(\"empruntbundle_emprunt_email\").className = \"form-control is-invalid\";
                document.getElementById(\"cntr1\").innerHTML = \" L'adresse mail n'est pas valide\";
                document.getElementById(\"cntr1\").style.color = \"red\";
                    a=1;

            }
            if(a==1){
                return false;
            }
        }

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "emprunt/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Nouveau Emprunt</h1>

     {{ form_start(form) }}
<div class=\"form-row\">
    <div class=\"col-md-4 mb-3\">
        {{ form_widget(form) }}
<p id=\"cntr\" style=\"color: red\"></p>
        <p id=\"cntr1\" style=\"color: red\"></p>
    <button class=\"btn btn-success\" onclick=\"fonct()\">New</button>
    </div></div>
        {{ form_end(form) }}
    <style>
        .required{
            font-family: verdana;
            font-size: 20px;
            font-family: \"Times New Roman\", Times, serif;
        }
        h1 { color: #c9d0d4; font-family: 'Helvetica Neue', sans-serif; font-size: 46px; font-weight: 100; line-height: 50px; letter-spacing: 1px; padding: 0 0 40px; border-bottom: double #555; }

    </style>
    <script>

var x = document.getElementsByClassName(\"required\");
x[0].innerHTML = \"Livre :\";
x[1].innerHTML= \"Auteur :\";
document.getElementById(\"empruntbundle_emprunt_email\").className = \"form-control is-valid\";
document.getElementById(\"empruntbundle_emprunt_nomauteur\").className = \"form-control is-valid\";
document.getElementById(\"empruntbundle_emprunt_username\").className = \"form-control is-valid\";
document.getElementById(\"empruntbundle_emprunt_nomlivre\").className = \"form-control is-valid\";
//document.getElementById(\"empruntbundle_emprunt_email\").style.color= \"red\";


    </script>
  <script>
        function fonct(){

            document.getElementById(\"empruntbundle_emprunt_email\").className = \"form-control is-valid\";
            document.getElementById(\"empruntbundle_emprunt_nomauteur\").className = \"form-control is-valid\";
            document.getElementById(\"empruntbundle_emprunt_username\").className = \"form-control is-valid\";
            document.getElementById(\"empruntbundle_emprunt_nomlivre\").className = \"form-control is-valid\";

            \$day=document.getElementById(\"empruntbundle_emprunt_date_day\").value;
            \$month=document.getElementById(\"empruntbundle_emprunt_date_month\").value;
            \$year=document.getElementById(\"empruntbundle_emprunt_date_year\").value;

            document.getElementById(\"cntr\").innerHTML = \"\";
            document.getElementById(\"cntr1\").innerHTML = \"\";

            if(document.getElementById(\"empruntbundle_emprunt_nomauteur\").value==\"\"){
                document.getElementById(\"empruntbundle_emprunt_nomauteur\").className = \"form-control is-invalid\";
            }

            if(document.getElementById(\"empruntbundle_emprunt_username\").value==\"\"){
                document.getElementById(\"empruntbundle_emprunt_username\").className = \"form-control is-invalid\";
            }

            if(document.getElementById(\"empruntbundle_emprunt_nomlivre\").value==\"\"){
                document.getElementById(\"empruntbundle_emprunt_nomlivre\").className = \"form-control is-invalid\";
            }


            var \$date=new Date();
            \$dd=\$date.getDate();
            \$mm=\$date.getMonth();
            \$yy=\$date.getFullYear();
                a=0;
            if(\$year<\$yy) {
                document.getElementById(\"cntr\").innerHTML = \"Date erronée!!\";
                a=1;
            }
            if (\$mm > \$month) {
                if(\$year<=\$yy) {
                    document.getElementById(\"cntr\").innerHTML = \"Date erronée!!\";
                    a=1;
                }
            }
            if(\$day<\$dd) {

                if (\$mm >= \$month) {

                    if(\$year<=\$yy) {
                        document.getElementById(\"cntr\").innerHTML = \"Date erronée!!\";
                        a=1;
                    }
                }
            }
            var expressionReguliere = /^(([^<>()[]\\.,;:s@]+(.[^<>()[]\\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))\$/;
            //document.getElementById(resultat).innerHTML = ;

            if (!expressionReguliere.test(document.getElementById(\"empruntbundle_emprunt_email\").value)) {
                document.getElementById(\"empruntbundle_emprunt_email\").className = \"form-control is-invalid\";
                document.getElementById(\"cntr1\").innerHTML = \" L'adresse mail n'est pas valide\";
                document.getElementById(\"cntr1\").style.color = \"red\";
                    a=1;

            }
            if(a==1){
                return false;
            }
        }

    </script>

{% endblock %}
", "emprunt/new.html.twig", "C:\\wamp64\\www\\project\\app\\Resources\\views\\emprunt\\new.html.twig");
    }
}
