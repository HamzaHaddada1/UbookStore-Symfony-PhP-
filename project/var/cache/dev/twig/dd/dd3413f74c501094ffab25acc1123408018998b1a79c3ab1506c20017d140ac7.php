<?php

/* :reclamation:indexClient.html.twig */
class __TwigTemplate_7c90c84cd864feb2cddf7a11f38bb70f29251c180e640bc6207a76e35ecd367b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", ":reclamation:indexClient.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reclamation:indexClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reclamation:indexClient.html.twig"));

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
<centre>
<i style=\"text-align: center\"><h5>Envoyer Reclamation</h5>
</i>
</centre>
        <style>
            * {
                box-sizing: border-box;
            }

            input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
            }

            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: \"\";
                display: table;
                clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }
            h5 { color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0; }
        </style>
        </head>
        <body>

                <div class=\"container\">
            <form method=\"get\" action=\"ajouter.php\">
                <div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"fname\">Votre Nom</label>
                    </div>
                    <div class=\"col-75\">
                        <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Your name..\" required>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"country\">Email</label>
                    </div>
                    <div class=\"col-75\">
                        <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"country\">Sujet</label>
                    </div>
                    <div class=\"col-75\">
                        <input type=\"text\" name=\"sujet\" id=\"sujet\" placeholder=\"Sujet*\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"subject\">Description</label>
                    </div>
                    <div class=\"col-75\">
                        <textarea id=\"subject\" name=\"description\" placeholder=\"Write something..\" style=\"height:200px\"></textarea>
                    </div>
                </div>
                <div class=\"row\">
                    <input type=\"submit\" value=\"Envoyer\" onclick=\"fonct()\">
                </div>
            </form>
        </div>

<style>
input[type=text] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border: 3px solid #ccc;
-webkit-transition: 0.5s;
transition: 0.5s;
outline: none;
}

input[type=text]:focus {
border: 3px solid #555;
}
</style>
                <script>
                    function fonct() {

                        document.getElementById(\"email\").className = \"\";
                        document.getElementById(\"sujet\").className = \"\";
                        document.getElementById(\"subject\").className = \"\";




                        if (document.getElementById(\"email\").value == \"\") {
                            document.getElementById(\"email\").className = \"form-control is-invalid\";
                        }

                        if (document.getElementById(\"sujet\").value == \"\") {
                            document.getElementById(\"sujet\").className = \"form-control is-invalid\";
                        }

                        if (document.getElementById(\"subject\").value == \"\") {
                            document.getElementById(\"subject\").className = \"form-control is-invalid\";
                        }
                        var expressionReguliere = /^(([^<>()[]\\.,;:s@]+(.[^<>()[]\\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))\$/;
                        //document.getElementById(resultat).innerHTML = ;

                        if (!expressionReguliere.test(document.getElementById(\"email\").value)) {
                            document.getElementById(\"email\").className = \"form-control is-invalid\";
                        }
                        return false;
                    }

</script>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":reclamation:indexClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
<centre>
<i style=\"text-align: center\"><h5>Envoyer Reclamation</h5>
</i>
</centre>
        <style>
            * {
                box-sizing: border-box;
            }

            input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
            }

            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: \"\";
                display: table;
                clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }
            h5 { color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0; }
        </style>
        </head>
        <body>

                <div class=\"container\">
            <form method=\"get\" action=\"ajouter.php\">
                <div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"fname\">Votre Nom</label>
                    </div>
                    <div class=\"col-75\">
                        <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Your name..\" required>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"country\">Email</label>
                    </div>
                    <div class=\"col-75\">
                        <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"country\">Sujet</label>
                    </div>
                    <div class=\"col-75\">
                        <input type=\"text\" name=\"sujet\" id=\"sujet\" placeholder=\"Sujet*\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"subject\">Description</label>
                    </div>
                    <div class=\"col-75\">
                        <textarea id=\"subject\" name=\"description\" placeholder=\"Write something..\" style=\"height:200px\"></textarea>
                    </div>
                </div>
                <div class=\"row\">
                    <input type=\"submit\" value=\"Envoyer\" onclick=\"fonct()\">
                </div>
            </form>
        </div>

<style>
input[type=text] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border: 3px solid #ccc;
-webkit-transition: 0.5s;
transition: 0.5s;
outline: none;
}

input[type=text]:focus {
border: 3px solid #555;
}
</style>
                <script>
                    function fonct() {

                        document.getElementById(\"email\").className = \"\";
                        document.getElementById(\"sujet\").className = \"\";
                        document.getElementById(\"subject\").className = \"\";




                        if (document.getElementById(\"email\").value == \"\") {
                            document.getElementById(\"email\").className = \"form-control is-invalid\";
                        }

                        if (document.getElementById(\"sujet\").value == \"\") {
                            document.getElementById(\"sujet\").className = \"form-control is-invalid\";
                        }

                        if (document.getElementById(\"subject\").value == \"\") {
                            document.getElementById(\"subject\").className = \"form-control is-invalid\";
                        }
                        var expressionReguliere = /^(([^<>()[]\\.,;:s@]+(.[^<>()[]\\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))\$/;
                        //document.getElementById(resultat).innerHTML = ;

                        if (!expressionReguliere.test(document.getElementById(\"email\").value)) {
                            document.getElementById(\"email\").className = \"form-control is-invalid\";
                        }
                        return false;
                    }

</script>
                    {% endblock %}
", ":reclamation:indexClient.html.twig", "C:\\wamp64\\www\\project\\app/Resources\\views/reclamation/indexClient.html.twig");
    }
}
