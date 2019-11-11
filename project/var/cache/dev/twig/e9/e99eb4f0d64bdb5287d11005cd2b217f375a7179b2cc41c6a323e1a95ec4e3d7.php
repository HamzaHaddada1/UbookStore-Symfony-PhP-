<?php

/* :reclamation:index.html.twig */
class __TwigTemplate_71cd2d253daee4de00421e4ec6d89a1f44155355b5563edee25e127e8045d7b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":reclamation:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reclamation:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reclamation:index.html.twig"));

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
        echo "    <h1>Reclamations list</h1>
    <style>
        h1 { color: #c9d0d4; font-family: 'Helvetica Neue', sans-serif; font-size: 46px; font-weight: 100; line-height: 50px; letter-spacing: 1px; padding: 0 0 40px; border-bottom: double #555; }

    </style>
    <div class=\"col-md\">
        <div class=\"d-flex border\">
            <div class=\"bg-success text-light p-4\">
                <div class=\"d-flex align-items-center h-100\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/chat.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
            <div class=\"flex-grow-1 bg-white p-4\">
                <p class=\"text-uppercase text-secondary mb-0\">Reclamation</p>
                <h3 class=\"font-weight-bold mb-0\" id=\"compter\">";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["compte"] ?? $this->getContext($context, "compte")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "nb", array()), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h3>
            </div>
        </div>
    </div>
    <script>
        if(document.getElementById(\"compter\").innerHTML>='5'){
            alert(\"beaucoup de reclamation\");
        }
    </script>
    <style>
        h5 { color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0; }
        input[type=text] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url(\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/search.png"), "html", null, true);
        echo "\");
            background-position: 0.5px 0.5px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
            width: 100%;
        }
    </style>

<div class=\"card mb-4\">
    <div class=\"card-body\">
        <div id=\"example_wrapper\" class=\"dataTables_wrapper container-fluid dt-bootstrap4 no-footer\">
            <div class=\"row\"><div class=\"col-sm-12\"><table id=\"myTable\"  class=\"table table-hover dataTable no-footer dtr-inline\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example_info\" style=\"width: 100%;\">
                        <form methode=\"POST\" action=\"rechercher.php\" >
                            <div class=\"form-row\">
                                <div class=\"col-md-4 mb-3\">
                                    <input type=\"text\" name=\"id\" class=\"form-control is-valid\"  id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for names..\">
                                    <p id=\"cntl2\"></p>


                                </div>
                            </div>
                        </form>
                    <thead>
                    <tr role=\"row\"><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 103.5px;\" aria-label=\"Name: activate to sort column ascending\">Sujet</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 167.5px;\" aria-label=\"Position: activate to sort column ascending\">Date</th><th class=\"sorting_desc\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 71.5px;\" aria-sort=\"descending\" aria-label=\"Office: activate to sort column ascending\">Email</th><th class=\"actions sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 79px;\" aria-label=\"Actions\">Actions</th></tr>


        </thead>
        <tbody>
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reclamations"] ?? $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 70
            echo "            <tr>
            <tr role=\"row\" class=\"odd\"><td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "sujet", array()), "html", null, true);
            echo "</td><td>";
            if ($this->getAttribute($context["reclamation"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "email", array()), "html", null, true);
            echo "</td>



                <td>

                            <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_show", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\" style=\"width:80px\"class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Show\"><i>Show</i></a>

                            <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_delete1", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\"style=\"width:80px\" class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Delete\"><i >Delete</i></a>



                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </tbody>
    </table>
                </div>
            </div>
        </div>
                    </div>
                </div>



            <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_new");
        echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"New\">Repondre</a>



    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":reclamation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 96,  172 => 86,  159 => 79,  154 => 77,  139 => 71,  136 => 70,  132 => 69,  96 => 36,  68 => 18,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reclamations list</h1>
    <style>
        h1 { color: #c9d0d4; font-family: 'Helvetica Neue', sans-serif; font-size: 46px; font-weight: 100; line-height: 50px; letter-spacing: 1px; padding: 0 0 40px; border-bottom: double #555; }

    </style>
    <div class=\"col-md\">
        <div class=\"d-flex border\">
            <div class=\"bg-success text-light p-4\">
                <div class=\"d-flex align-items-center h-100\">
                    <img src=\"{{ asset('icons/chat.png') }}\" alt=\"\">
                </div>
            </div>
            <div class=\"flex-grow-1 bg-white p-4\">
                <p class=\"text-uppercase text-secondary mb-0\">Reclamation</p>
                <h3 class=\"font-weight-bold mb-0\" id=\"compter\">{% for com in compte %}{{ com.nb }}{% endfor %}</h3>
            </div>
        </div>
    </div>
    <script>
        if(document.getElementById(\"compter\").innerHTML>='5'){
            alert(\"beaucoup de reclamation\");
        }
    </script>
    <style>
        h5 { color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0; }
        input[type=text] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url(\"{{ asset('icons/search.png') }}\");
            background-position: 0.5px 0.5px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
            width: 100%;
        }
    </style>

<div class=\"card mb-4\">
    <div class=\"card-body\">
        <div id=\"example_wrapper\" class=\"dataTables_wrapper container-fluid dt-bootstrap4 no-footer\">
            <div class=\"row\"><div class=\"col-sm-12\"><table id=\"myTable\"  class=\"table table-hover dataTable no-footer dtr-inline\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example_info\" style=\"width: 100%;\">
                        <form methode=\"POST\" action=\"rechercher.php\" >
                            <div class=\"form-row\">
                                <div class=\"col-md-4 mb-3\">
                                    <input type=\"text\" name=\"id\" class=\"form-control is-valid\"  id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for names..\">
                                    <p id=\"cntl2\"></p>


                                </div>
                            </div>
                        </form>
                    <thead>
                    <tr role=\"row\"><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 103.5px;\" aria-label=\"Name: activate to sort column ascending\">Sujet</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 167.5px;\" aria-label=\"Position: activate to sort column ascending\">Date</th><th class=\"sorting_desc\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 71.5px;\" aria-sort=\"descending\" aria-label=\"Office: activate to sort column ascending\">Email</th><th class=\"actions sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 79px;\" aria-label=\"Actions\">Actions</th></tr>


        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>
            <tr role=\"row\" class=\"odd\"><td>{{ reclamation.sujet }}</td><td>{% if reclamation.date %}{{ reclamation.date|date('Y-m-d') }}{% endif %}</td><td>{{ reclamation.email}}</td>



                <td>

                            <a href=\"{{ path('reclamation_show', { 'id': reclamation.id }) }}\" style=\"width:80px\"class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Show\"><i>Show</i></a>

                            <a href=\"{{ path('reclamation_delete1', { 'id': reclamation.id }) }}\"style=\"width:80px\" class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Delete\"><i >Delete</i></a>



                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
                </div>
            </div>
        </div>
                    </div>
                </div>



            <a href=\"{{ path('reclamation_new') }}\" class=\"btn btn-success\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"New\">Repondre</a>



    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>


{% endblock %}
", ":reclamation:index.html.twig", "C:\\wamp64\\www\\project\\app/Resources\\views/reclamation/index.html.twig");
    }
}
