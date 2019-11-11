<?php

/* AuteurBundle:Default:index.html.twig */
class __TwigTemplate_9ffc091d9d51b5f87041b1a0a9f0426cdd20ed25984567b838b8fc98260d1ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "AuteurBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AuteurBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AuteurBundle:Default:index.html.twig"));

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
        echo "    <h1>liste des Auteurs </h1>


<div class=\"card mb-4\">
    <div class=\"card-body\">
        <div id=\"example_wrapper\" class=\"dataTables_wrapper container-fluid dt-bootstrap4 no-footer\">
    <div class=\"row\"><div class=\"col-sm-12 col-md-6\"></div><div class=\"col-sm-12 col-md-6\">
            </div></div>

<div class=\"col-sm-12\">
    ";
        // line 15
        echo "        ";
        // line 16
        echo "    ";
        // line 17
        echo "    <table id=\"example\" class=\"table table-hover dataTable no-footer dtr-inline\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example_info\" style=\"width: 100%;\">
        <thead>
            <tr role=\"row\">
               <!-- <th>Idautr</th>  -->
                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 63.5px;\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\">nom de l'auteur</th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 101.5px;\" aria-label=\"Position: activate to sort column ascending\">
                    date de naissance</th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 101.5px;\" aria-label=\"Position: activate to sort column ascending\">
                    date de deces</th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 46.5px;\" aria-label=\"Office: activate to sort column ascending\">
                    Contact</th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 47.5px;\" aria-label=\"Salary: activate to sort column ascending\">
                    Description</th>
                <th class=\"actions sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 71px;\" aria-label=\"Actions\">
                    Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["auteurs"] ?? $this->getContext($context, "auteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 36
            echo "            <tr role=\"row\" class=\"odd\">
              <!--  <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auteur_show", array("idautr" => $this->getAttribute($context["auteur"], "idautr", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["auteur"], "idautr", array()), "html", null, true);
            echo "</a></td> -->
                <td tabindex=\"0\" class=\"sorting_1\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["auteur"], "authorname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["auteur"], "birthdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["auteur"], "birthdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($context["auteur"], "deathdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["auteur"], "deathdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["auteur"], "contact", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["auteur"], "descrip", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>

                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auteur_show", array("idautr" => $this->getAttribute($context["auteur"], "idautr", array()))), "html", null, true);
            echo "\"
                               class=\"btn btn-icon btn-pill btn-info\" data-toggle=\"tooltip\" title=\"Show\"><i>Show</i></a>


                            <a  href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auteur_edit", array("idautr" => $this->getAttribute($context["auteur"], "idautr", array()))), "html", null, true);
            echo "\"
                                class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"Edit\"><i>Edit</i></a>




                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auteur_delete_index", array("idautr" => $this->getAttribute($context["auteur"], "idautr", array()))), "html", null, true);
            echo "\"
                               class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i >Delete</i></a>


                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
    <div class=\"navigation\">
        ";
        // line 67
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["auteurs"] ?? $this->getContext($context, "auteurs")));
        echo "
    </div>
</div>
        </div></div></div>
    <ul>
        <li>
            <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auteur_new");
        echo "\"class=\"btn btn-icon btn-pill btn-info\" data-toggle=\"tooltip\" title=\"nouveau\"><i >New Auteur</i></a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    <script>

        \$(document).ready(function () {


            \$(\"#example tbody tr\").click(function () {
                var tableData=  \$(this).children(\"td\").map(function () {
                    return \$(this).text();
                }).get() ;
                var  td=\"nom de l'auteur: \"+tableData[0]+\"   contact:   \"+tableData[3];
                alert(td);
            });});


    </script>





    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/moment.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/bootadmin.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(document).ready(function () {
            \$('#example').DataTable();
        });
    </script>

    <script async=\"\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://www.googletagmanager.com/gtag/js?id=UA-118868344-1"), "html", null, true);
        echo "\"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118868344-1');
    </script>
    <script async=\"\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"), "html", null, true);
        echo "\"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: \"ca-pub-4097235499795154\",
            enable_page_level_ads: true
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AuteurBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 123,  249 => 114,  238 => 106,  232 => 103,  227 => 101,  223 => 100,  219 => 99,  215 => 98,  193 => 78,  184 => 77,  170 => 73,  161 => 67,  156 => 64,  142 => 56,  133 => 50,  126 => 46,  119 => 42,  115 => 41,  109 => 40,  103 => 39,  99 => 38,  93 => 37,  90 => 36,  86 => 35,  66 => 17,  64 => 16,  62 => 15,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>liste des Auteurs </h1>


<div class=\"card mb-4\">
    <div class=\"card-body\">
        <div id=\"example_wrapper\" class=\"dataTables_wrapper container-fluid dt-bootstrap4 no-footer\">
    <div class=\"row\"><div class=\"col-sm-12 col-md-6\"></div><div class=\"col-sm-12 col-md-6\">
            </div></div>

<div class=\"col-sm-12\">
    {#<div class=\"count\">#}
        {#{{ auteurs.getTotalItemCount }}#}
    {#</div>#}
    <table id=\"example\" class=\"table table-hover dataTable no-footer dtr-inline\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example_info\" style=\"width: 100%;\">
        <thead>
            <tr role=\"row\">
               <!-- <th>Idautr</th>  -->
                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 63.5px;\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\">nom de l'auteur</th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 101.5px;\" aria-label=\"Position: activate to sort column ascending\">
                    date de naissance</th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 101.5px;\" aria-label=\"Position: activate to sort column ascending\">
                    date de deces</th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 46.5px;\" aria-label=\"Office: activate to sort column ascending\">
                    Contact</th>
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example\" rowspan=\"1\" colspan=\"1\" style=\"width: 47.5px;\" aria-label=\"Salary: activate to sort column ascending\">
                    Description</th>
                <th class=\"actions sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 71px;\" aria-label=\"Actions\">
                    Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for auteur in auteurs %}
            <tr role=\"row\" class=\"odd\">
              <!--  <td><a href=\"{{ path('auteur_show', { 'idautr': auteur.idautr }) }}\">{{ auteur.idautr }}</a></td> -->
                <td tabindex=\"0\" class=\"sorting_1\">{{ auteur.authorname }}</td>
                <td>{% if auteur.birthdate %}{{ auteur.birthdate|date('Y-m-d') }}{% endif %}</td>
                <td>{% if auteur.deathdate %}{{ auteur.deathdate|date('Y-m-d') }}{% endif %}</td>
                <td>{{ auteur.contact }}</td>
                <td>{{ auteur.descrip }}</td>
                <td>
                    <ul>

                            <a href=\"{{ path('auteur_show', { 'idautr': auteur.idautr }) }}\"
                               class=\"btn btn-icon btn-pill btn-info\" data-toggle=\"tooltip\" title=\"Show\"><i>Show</i></a>


                            <a  href=\"{{ path('auteur_edit', { 'idautr': auteur.idautr }) }}\"
                                class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"Edit\"><i>Edit</i></a>




                            <a href=\"{{ path('auteur_delete_index',{'idautr': auteur.idautr}) }}\"
                               class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i >Delete</i></a>


                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"navigation\">
        {{ knp_pagination_render(auteurs) }}
    </div>
</div>
        </div></div></div>
    <ul>
        <li>
            <a href=\"{{ path('auteur_new') }}\"class=\"btn btn-icon btn-pill btn-info\" data-toggle=\"tooltip\" title=\"nouveau\"><i >New Auteur</i></a>
        </li>
    </ul>
{% endblock %}
{% block javascripts %}
    <script>

        \$(document).ready(function () {


            \$(\"#example tbody tr\").click(function () {
                var tableData=  \$(this).children(\"td\").map(function () {
                    return \$(this).text();
                }).get() ;
                var  td=\"nom de l'auteur: \"+tableData[0]+\"   contact:   \"+tableData[3];
                alert(td);
            });});


    </script>





    <script src=\"{{ asset('https://bootadmin.net/js/jquery.min.js')}}\"></script>
    <script src=\"{{ asset('https://bootadmin.net/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{ asset('https://bootadmin.net/js/datatables.min.js')}}\"></script>
    <script src=\"{{ asset('https://bootadmin.net/js/moment.min.js')}}\"></script>

    <script src=\"{{ asset('https://bootadmin.net/js/fullcalendar.min.js')}}\"></script>


    <script src=\"{{ asset('https://bootadmin.net/js/bootadmin.min.js')}}\"></script>

    <script>
        \$(document).ready(function () {
            \$('#example').DataTable();
        });
    </script>

    <script async=\"\" src=\"{{ asset('https://www.googletagmanager.com/gtag/js?id=UA-118868344-1')}}\"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118868344-1');
    </script>
    <script async=\"\" src=\"{{ asset('//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js')}}\"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: \"ca-pub-4097235499795154\",
            enable_page_level_ads: true
        });
    </script>

{% endblock %}", "AuteurBundle:Default:index.html.twig", "C:\\wamp64\\www\\project\\src\\AuteurBundle/Resources/views/Default/index.html.twig");
    }
}
