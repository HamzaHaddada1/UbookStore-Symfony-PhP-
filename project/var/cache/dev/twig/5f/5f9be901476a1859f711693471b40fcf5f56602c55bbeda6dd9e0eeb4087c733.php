<?php

/* :empruntClient:edit.html.twig */
class __TwigTemplate_2e030927229551ae024944bab681466f825d7a1972981832cb90e3abafb2d4cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", ":empruntClient:edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empruntClient:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empruntClient:edit.html.twig"));

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
    <h1>Emprunt edit</h1>



    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
   <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
                <p id=\"cntr\" style=\"color: red\"></p>
                <p id=\"cntr1\" style=\"color: red\"></p>
            </div>
   </div>
        <button class=\"btn btn-icon btn-pill btn-primary\" onclick=\"fonct()\" style=\"width: 150px \">Editer</button>
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    <br>
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-icon btn-pill btn-danger\" style=\"width: 150px \">
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_index");
        echo "\"> <i style=\"color: #003399\" >Back to the list</i> </a>
    </li>
    <style>
        .required{
            font-family: verdana;
            font-size: 20px;
            font-family: \"Times New Roman\", Times, serif;
        }
    </style>
    <script>
        /*
                        document.getElementById(\"empruntbundle_emprunt_email\").classList.add(\"form-control is-valid\");
        */
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
            //document.location.replace(\"http://stackoverflow.com\");
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
            \$yy=\$date.getFullYear()
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
            }else{

               r= confirm(\"vous vouler vraiment modifier \");
               if(r==true){

                   document.location.replace(\"http://localhost/project/web/app_dev.php/emprunt/emprunt/\");
                   return true;
               }else{
                   return false;
               }
            }
            return true;
        }

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":empruntClient:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  81 => 22,  76 => 20,  71 => 18,  62 => 12,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Emprunt edit</h1>



    {{ form_start(edit_form) }}
   <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">
    {{ form_widget(edit_form) }}
                <p id=\"cntr\" style=\"color: red\"></p>
                <p id=\"cntr1\" style=\"color: red\"></p>
            </div>
   </div>
        <button class=\"btn btn-icon btn-pill btn-primary\" onclick=\"fonct()\" style=\"width: 150px \">Editer</button>
    {{ form_end(edit_form) }}
    <br>
    {{ form_start(delete_form) }}
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-icon btn-pill btn-danger\" style=\"width: 150px \">
    {{ form_end(delete_form) }}

    <li>
        <a href=\"{{ path('emprunt_index') }}\"> <i style=\"color: #003399\" >Back to the list</i> </a>
    </li>
    <style>
        .required{
            font-family: verdana;
            font-size: 20px;
            font-family: \"Times New Roman\", Times, serif;
        }
    </style>
    <script>
        /*
                        document.getElementById(\"empruntbundle_emprunt_email\").classList.add(\"form-control is-valid\");
        */
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
            //document.location.replace(\"http://stackoverflow.com\");
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
            \$yy=\$date.getFullYear()
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
            }else{

               r= confirm(\"vous vouler vraiment modifier \");
               if(r==true){

                   document.location.replace(\"http://localhost/project/web/app_dev.php/emprunt/emprunt/\");
                   return true;
               }else{
                   return false;
               }
            }
            return true;
        }

    </script>

{% endblock %}
", ":empruntClient:edit.html.twig", "C:\\wamp64\\www\\project\\app/Resources\\views/empruntClient/edit.html.twig");
    }
}
