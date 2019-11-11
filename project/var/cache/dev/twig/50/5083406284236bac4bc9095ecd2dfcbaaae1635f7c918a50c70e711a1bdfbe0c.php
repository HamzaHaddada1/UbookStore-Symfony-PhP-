<?php

/* :emprunt:index.html.twig */
class __TwigTemplate_f6a7d0f66f8dcdb583a917699285ef1551ad036bf12f55f2743c23215d9b66f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":emprunt:index.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":emprunt:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":emprunt:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 5
        echo "

    <div class=\"d-flex border\">
        <div class=\"bg-info text-light p-4\">
            <div class=\"d-flex align-items-center h-100\">
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/users (2).png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
        <div class=\"flex-grow-1 bg-white p-4\">
            <p class=\"text-uppercase text-secondary mb-0\">Livre</p>
            <h3 class=\"font-weight-bold mb-0\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["compter"] ?? $this->getContext($context, "compter")), "html", null, true);
        echo "</h3>
        </div>
    </div>

    <div id=\"div_chart\"></div>

    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 23
        echo $this->env->getExtension('CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension')->gcDraw(($context["piechart"] ?? $this->getContext($context, "piechart")), "div_chart");
        echo "
    </script>
    <style>
        input[type=text] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url(\"";
        // line 33
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
                <div class=\"row\"><div class=\"col-sm-12\"><table id=\"myTable\" class=\"table table-hover dataTable no-footer dtr-inline\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example_info\" style=\"width: 100%;\">
                            <form action=\"\">
                            <select name=\"select\">
                                <option value=\"Tout\">Tout</option>
                                <option value=\"emprunter\">emprunter</option>
                                <option value=\"non emprunter\">non emprunter</option>
                            </select>
                                <button type=\"submit\" class=\"btn btn-link btn-sm btn-icon ml-2 mb-1\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Search\">
                                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/search.png"), "html", null, true);
        echo "\" height=\"20px\" width=\"20px\"></button>
                            </form>
                            <form methode=\"POST\" action=\"rechercher.php\" >
                                <div class=\"form-row\">
                                    <div class=\"col-md-4 mb-3\">
                                        <input type=\"text\" name=\"id\" class=\"form-control is-valid\"  id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for names..\">
                                        <p id=\"cntl2\"></p>


                                    </div>
                                </div>
                            </form>
                            <thead>
                            <tr role=\"row\"><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 103.5px;\" aria-label=\"Name: activate to sort column ascending\">Nom Livre</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 167.5px;\" aria-label=\"Position: activate to sort column ascending\">Nom Auteur</th><th class=\"sorting_desc\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 71.5px;\" aria-sort=\"descending\" aria-label=\"Office: activate to sort column ascending\">date</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 53.5px;\" aria-label=\"Salary: activate to sort column ascending\">User Name</th><th class=\"actions sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 79px;\" aria-label=\"Actions\">Actions</th></tr>

                            </thead>
                            <tbody>
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emprunts"] ?? $this->getContext($context, "emprunts")));
        foreach ($context['_seq'] as $context["_key"] => $context["emprunt"]) {
            // line 74
            echo "                                <tr role=\"row\" class=\"odd\"><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "nomlivre", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "nomauteur", array()), "html", null, true);
            echo "</td><td>";
            if ($this->getAttribute($context["emprunt"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emprunt"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "username", array()), "html", null, true);
            echo "</td>
                                    <td><ul>

                                            <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_show", array("id" => $this->getAttribute($context["emprunt"], "id", array()))), "html", null, true);
            echo "\" style=\"width:80px\"class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Show\"><i >Show</i></a>




                                            <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_delete1", array("id" => $this->getAttribute($context["emprunt"], "id", array()))), "html", null, true);
            echo "\" style=\"width:80px\" class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Delete\" onclick=\"delete1()\"><i >Delete</i></a>




                                            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_edit", array("id" => $this->getAttribute($context["emprunt"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\"  style=\"width:80px\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Edit\"><i >Edit</i></a>



                                        </ul></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emprunt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "</tbody>
                        </table><div id=\"example_processing\" class=\"dataTables_processing card\" style=\"display: none;\">Processing...</div></div></div>
                <a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emprunt_new");
        echo "\" class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"New\"><i >New</i></a>
                <br>
                <br>


            </div>
        </div>

        ";
        // line 103
        $context["myVal"] = 0;
        // line 104
        echo "        <script>
            function delete1(){
                if(confirm(\"Etes vous sur de supprimer cet Liver\")){





                }else{
                    return false;
                }


            }
        </script>
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



    </div>
    <table class=\"table table-dark mb-0\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Livre</th>

            <th scope=\"col\">Auteur</th>
            <th scope=\"col\">Nombre</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["compter11"] ?? $this->getContext($context, "compter11")));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 155
            echo "            ";
            $context["myVal"] = (($context["myVal"] ?? $this->getContext($context, "myVal")) + 1);
            // line 156
            echo "            <tr>
                <td>";
            // line 157
            echo twig_escape_filter($this->env, ($context["myVal"] ?? $this->getContext($context, "myVal")), "html", null, true);
            echo "</td>
            <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nomlivre", array()), "html", null, true);
            echo "</td>

            <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nomauteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nb", array()), "html", null, true);
            echo "</td>
        </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":emprunt:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 164,  274 => 161,  270 => 160,  265 => 158,  261 => 157,  258 => 156,  255 => 155,  251 => 154,  199 => 104,  197 => 103,  186 => 95,  182 => 93,  169 => 87,  161 => 82,  153 => 77,  138 => 74,  134 => 73,  114 => 56,  88 => 33,  75 => 23,  64 => 15,  56 => 10,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'baseAdmin.html.twig' %}

{% block container %}


    <div class=\"d-flex border\">
        <div class=\"bg-info text-light p-4\">
            <div class=\"d-flex align-items-center h-100\">
                <img src=\"{{asset('icons/users (2).png')}}\" alt=\"\">
            </div>
        </div>
        <div class=\"flex-grow-1 bg-white p-4\">
            <p class=\"text-uppercase text-secondary mb-0\">Livre</p>
            <h3 class=\"font-weight-bold mb-0\">{{ compter }}</h3>
        </div>
    </div>

    <div id=\"div_chart\"></div>

    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        {{ gc_draw(piechart, 'div_chart') }}
    </script>
    <style>
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
                <div class=\"row\"><div class=\"col-sm-12\"><table id=\"myTable\" class=\"table table-hover dataTable no-footer dtr-inline\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example_info\" style=\"width: 100%;\">
                            <form action=\"\">
                            <select name=\"select\">
                                <option value=\"Tout\">Tout</option>
                                <option value=\"emprunter\">emprunter</option>
                                <option value=\"non emprunter\">non emprunter</option>
                            </select>
                                <button type=\"submit\" class=\"btn btn-link btn-sm btn-icon ml-2 mb-1\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Search\">
                                    <img src=\"{{ asset('icons/search.png') }}\" height=\"20px\" width=\"20px\"></button>
                            </form>
                            <form methode=\"POST\" action=\"rechercher.php\" >
                                <div class=\"form-row\">
                                    <div class=\"col-md-4 mb-3\">
                                        <input type=\"text\" name=\"id\" class=\"form-control is-valid\"  id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for names..\">
                                        <p id=\"cntl2\"></p>


                                    </div>
                                </div>
                            </form>
                            <thead>
                            <tr role=\"row\"><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 103.5px;\" aria-label=\"Name: activate to sort column ascending\">Nom Livre</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 167.5px;\" aria-label=\"Position: activate to sort column ascending\">Nom Auteur</th><th class=\"sorting_desc\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 71.5px;\" aria-sort=\"descending\" aria-label=\"Office: activate to sort column ascending\">date</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 53.5px;\" aria-label=\"Salary: activate to sort column ascending\">User Name</th><th class=\"actions sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 79px;\" aria-label=\"Actions\">Actions</th></tr>

                            </thead>
                            <tbody>
                            {% for emprunt in emprunts %}
                                <tr role=\"row\" class=\"odd\"><td>{{ emprunt.nomlivre }}</td><td>{{ emprunt.nomauteur }}</td><td>{% if emprunt.date %}{{ emprunt.date|date('Y-m-d') }}{% endif %}</td><td>{{ emprunt.username }}</td>
                                    <td><ul>

                                            <a href=\"{{ path('emprunt_show', { 'id': emprunt.id }) }}\" style=\"width:80px\"class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Show\"><i >Show</i></a>




                                            <a href=\"{{ path('emprunt_delete1', { 'id': emprunt.id }) }}\" style=\"width:80px\" class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Delete\" onclick=\"delete1()\"><i >Delete</i></a>




                                            <a href=\"{{ path('emprunt_edit', { 'id': emprunt.id }) }}\" class=\"btn btn-warning\"  style=\"width:80px\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Edit\"><i >Edit</i></a>



                                        </ul></td>
                                </tr>
                            {% endfor %}</tbody>
                        </table><div id=\"example_processing\" class=\"dataTables_processing card\" style=\"display: none;\">Processing...</div></div></div>
                <a href=\"{{ path('emprunt_new')}}\" class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"New\"><i >New</i></a>
                <br>
                <br>


            </div>
        </div>

        {% set myVal = 0 %}
        <script>
            function delete1(){
                if(confirm(\"Etes vous sur de supprimer cet Liver\")){





                }else{
                    return false;
                }


            }
        </script>
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



    </div>
    <table class=\"table table-dark mb-0\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Livre</th>

            <th scope=\"col\">Auteur</th>
            <th scope=\"col\">Nombre</th>
        </tr>
        </thead>
        <tbody>
        {% for compte in compter11 %}
            {% set myVal = myVal + 1 %}
            <tr>
                <td>{{ myVal }}</td>
            <td>{{ compte.nomlivre }}</td>

            <td>{{ compte.nomauteur }}</td>
                <td>{{ compte.nb }}</td>
        </tr>
       {% endfor %}
        </tbody>
    </table>
{% endblock %}
", ":emprunt:index.html.twig", "C:\\wamp64\\www\\project\\app/Resources\\views/emprunt/index.html.twig");
    }
}
