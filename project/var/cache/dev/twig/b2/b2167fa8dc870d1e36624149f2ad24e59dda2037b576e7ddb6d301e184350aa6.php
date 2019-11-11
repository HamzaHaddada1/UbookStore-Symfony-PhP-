<?php

/* EvenementBundle:Default:update.html.twig */
class __TwigTemplate_33b7652bd008afd929b3c63aa96a25ed69b19ff6b3b0d6f88578e9a0d29b2bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "EvenementBundle:Default:update.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:update.html.twig"));

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
        echo "    <h1>Event Update</h1>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">

    <div class=\"card mb-4\">
        <div class=\"card-header bg-white font-weight-bold\">


        </div>
        <div class=\"card-body\">

            <form action=\"";
        // line 15
        echo "event_update";
        echo "\" class=\"needs-validation\" method=\"post\"  onSubmit=\"return verifDate(this)\" novalidate>

                <div class=\"form-row\">
                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom07\">Nom</label>
                        <select name=\"nom\" size=\"1\" class=\"form-control\"  id=\"validationCustom07\" required>
                            <option value=\"Echange\">  Echange</option>
                            <option value=\"Lecture\">Lecture</option>
                            <option value=\"Conférence\">Conférence</option>
                            <option value=\"Débat\">Débat</option>
                            <option value=\"Fête\">Fête</option>
                        </select>
                        <div class=\"invalid-feedback\">
                            Please provide a valid name.
                        </div>
                    </div>

                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom01\">Lieu</label>
                        <input type=\"text\" class=\"form-control\" name=\"lieu\" placeholder=\"Lieu\" id=\"validationCustom01\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Lieu '\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid venue .
                        </div>
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom02\">Date</label>
                        <input type=\"date\" class=\"form-control\" id=\"date\" name=\"date\"  id=\"validationCustom02\" placeholder=\"Date\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Date'\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid date.
                        </div>
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom03\">Heure</label>
                        <input type=\"time\" class=\"form-control\" id=\"heure\" name=\"heure\" id=\"validationCustom03\" placeholder=\"Heure\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Heure '\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid time.
                        </div>
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom04\">Déscription</label>
                        <input type=\"text\"class=\"form-control\" name=\"description\" placeholder=\"Déscription\" id=\"validationCustom04\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Déscription '\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid description.
                        </div>
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom05\">Capacité</label>
                        <input type=\"number\" class=\"form-control\" name=\"capacite\" id=\"validationCustom05\" placeholder=\"Capacité \" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Capacité '\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid number.
                        </div>
                    </div>
                    <input type=\"number\" class=\"form-control\" name=\"nbreParticipant\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" value=\"0\" hidden>

                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom06\">URL Image</label>
                        <input type=\"text\" class=\"form-control\" name=\"img\" id=\"validationCustom06\" placeholder=\"Image URL \" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Image URL'\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid URL.
                        </div>
                    </div>


                    <div class=\"col-md-3 mb-3\"> </div>
                    <center> <input type=\"submit\" class=\"btn btn-primarye mb-2\" value=\"Update\" ></center>
                </div>
            </form>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Back to the list</a>
        </li>
    </ul>




    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        function verifDate(champ) {
            var dateNow   =  new Date(),
                strSaisie    =  champ.date.value,
                dateJour,
                dateSaisie;

            dateJour = new Date(dateNow.getFullYear(), dateNow.getMonth(), dateNow.getDate());
            strSaisie = strSaisie.replace(/-/g,\"\");
            dateSaisie = new Date(strSaisie.substr(0,4), strSaisie.substr(4,2)-1, strSaisie.substr(6,2));

            if (dateSaisie < dateJour ) {
                alert('Please provide a valid date');
                surligne(champ, false);

            }
            else if (dateSaisie > dateJour) {
                surligne(champ, true);
            }

            else {
                alert('Please provide a valid date');
            }
        }


    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Default:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 87,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Event Update</h1>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">

    <div class=\"card mb-4\">
        <div class=\"card-header bg-white font-weight-bold\">


        </div>
        <div class=\"card-body\">

            <form action=\"{{ ('event_update') }}\" class=\"needs-validation\" method=\"post\"  onSubmit=\"return verifDate(this)\" novalidate>

                <div class=\"form-row\">
                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom07\">Nom</label>
                        <select name=\"nom\" size=\"1\" class=\"form-control\"  id=\"validationCustom07\" required>
                            <option value=\"Echange\">  Echange</option>
                            <option value=\"Lecture\">Lecture</option>
                            <option value=\"Conférence\">Conférence</option>
                            <option value=\"Débat\">Débat</option>
                            <option value=\"Fête\">Fête</option>
                        </select>
                        <div class=\"invalid-feedback\">
                            Please provide a valid name.
                        </div>
                    </div>

                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom01\">Lieu</label>
                        <input type=\"text\" class=\"form-control\" name=\"lieu\" placeholder=\"Lieu\" id=\"validationCustom01\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Lieu '\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid venue .
                        </div>
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom02\">Date</label>
                        <input type=\"date\" class=\"form-control\" id=\"date\" name=\"date\"  id=\"validationCustom02\" placeholder=\"Date\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Date'\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid date.
                        </div>
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom03\">Heure</label>
                        <input type=\"time\" class=\"form-control\" id=\"heure\" name=\"heure\" id=\"validationCustom03\" placeholder=\"Heure\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Heure '\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid time.
                        </div>
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom04\">Déscription</label>
                        <input type=\"text\"class=\"form-control\" name=\"description\" placeholder=\"Déscription\" id=\"validationCustom04\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Déscription '\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid description.
                        </div>
                    </div>
                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom05\">Capacité</label>
                        <input type=\"number\" class=\"form-control\" name=\"capacite\" id=\"validationCustom05\" placeholder=\"Capacité \" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Capacité '\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid number.
                        </div>
                    </div>
                    <input type=\"number\" class=\"form-control\" name=\"nbreParticipant\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" value=\"0\" hidden>

                    <div class=\"col-md-3 mb-3\">
                        <label for=\"validationCustom06\">URL Image</label>
                        <input type=\"text\" class=\"form-control\" name=\"img\" id=\"validationCustom06\" placeholder=\"Image URL \" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Image URL'\" required>
                        <div class=\"invalid-feedback\">
                            Please provide a valid URL.
                        </div>
                    </div>


                    <div class=\"col-md-3 mb-3\"> </div>
                    <center> <input type=\"submit\" class=\"btn btn-primarye mb-2\" value=\"Update\" ></center>
                </div>
            </form>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"{{ path('event_index') }}\">Back to the list</a>
        </li>
    </ul>




    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        function verifDate(champ) {
            var dateNow   =  new Date(),
                strSaisie    =  champ.date.value,
                dateJour,
                dateSaisie;

            dateJour = new Date(dateNow.getFullYear(), dateNow.getMonth(), dateNow.getDate());
            strSaisie = strSaisie.replace(/-/g,\"\");
            dateSaisie = new Date(strSaisie.substr(0,4), strSaisie.substr(4,2)-1, strSaisie.substr(6,2));

            if (dateSaisie < dateJour ) {
                alert('Please provide a valid date');
                surligne(champ, false);

            }
            else if (dateSaisie > dateJour) {
                surligne(champ, true);
            }

            else {
                alert('Please provide a valid date');
            }
        }


    </script>

{% endblock %}", "EvenementBundle:Default:update.html.twig", "C:\\wamp64\\www\\project\\src\\EvenementBundle/Resources/views/Default/update.html.twig");
    }
}
