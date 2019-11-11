<?php

/* @Echange/Default/index.html.twig */
class __TwigTemplate_7af2e3a384cb9c4d5877ad37d699a79b7412d207537fee53a06fc8279b34c971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@Echange/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Echange/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Echange/Default/index.html.twig"));

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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

    <!-- Cusom css -->
    <link rel=\"stylesheet\" href=\"css/custom.css\">
    <h1>Echanges list</h1>

    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("echange_new");
        echo "\">Create a new echange</a>
        </li>
    </ul>
    <ul>
        <li>
            <a class=\"btn btn-icon btn-pill btn-danger\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("locaux_new");
        echo "\">Create a new locaux</a>
        </li>
    </ul>
    <div class=\"d-flex\">

        <div class=\"content p-4\">
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"product-thumbnail\">Livre Proposé</th>
                            <th class=\"product-name\">Livre Demandé</th>
                            <th class=\"product-price\">Etat des Livres</th>
                            <th class=\"product-quantity\">Description</th>
                            <th class=\"product-remove\">Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["echanges"] ?? $this->getContext($context, "echanges")));
        foreach ($context['_seq'] as $context["_key"] => $context["echange"]) {
            // line 40
            echo "                            <tr>
                                <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("echange_show", array("idech" => $this->getAttribute($context["echange"], "idech", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["echange"], "idprop", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["echange"], "iddem", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["echange"], "stat", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["echange"], "descr", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("echange_edit", array("idech" => $this->getAttribute($context["echange"], "idech", array()))), "html", null, true);
            echo "\" class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"Edit\"><i class=\"fa fa-fw fa-edit\"></i></a>
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("echange_supp", array("idech" => $this->getAttribute($context["echange"], "idech", array()))), "html", null, true);
            echo "\" class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i class=\"fa fa-fw fa-trash\"></i></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['echange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://bootadmin.net/js/jquery.min.js\"></script>
    <script src=\"https://bootadmin.net/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://bootadmin.net/js/datatables.min.js\"></script>
    <script src=\"https://bootadmin.net/js/moment.min.js\"></script>
    <script src=\"https://bootadmin.net/js/fullcalendar.min.js\"></script>
    <script src=\"https://bootadmin.net/js/bootadmin.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#example').DataTable();
        });
    </script>

    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-118868344-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118868344-1');
    </script>

    <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
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
        return "@Echange/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 51,  130 => 47,  126 => 46,  121 => 44,  117 => 43,  113 => 42,  107 => 41,  104 => 40,  100 => 39,  77 => 19,  69 => 14,  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/plugins.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

    <!-- Cusom css -->
    <link rel=\"stylesheet\" href=\"css/custom.css\">
    <h1>Echanges list</h1>

    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('echange_new') }}\">Create a new echange</a>
        </li>
    </ul>
    <ul>
        <li>
            <a class=\"btn btn-icon btn-pill btn-danger\" href=\"{{ path('locaux_new') }}\">Create a new locaux</a>
        </li>
    </ul>
    <div class=\"d-flex\">

        <div class=\"content p-4\">
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"product-thumbnail\">Livre Proposé</th>
                            <th class=\"product-name\">Livre Demandé</th>
                            <th class=\"product-price\">Etat des Livres</th>
                            <th class=\"product-quantity\">Description</th>
                            <th class=\"product-remove\">Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for echange in echanges %}
                            <tr>
                                <td><a href=\"{{ path('echange_show', { 'idech': echange.idech }) }}\">{{ echange.idprop }}</a></td>
                                <td>{{ echange.iddem }}</td>
                                <td>{{ echange.stat }}</td>
                                <td>{{ echange.descr }}</td>
                                <td>
                                    <a href=\"{{ path('echange_edit', { 'idech': echange.idech }) }}\" class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"Edit\"><i class=\"fa fa-fw fa-edit\"></i></a>
                                    <a href=\"{{ path('echange_supp', { 'idech': echange.idech }) }}\" class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i class=\"fa fa-fw fa-trash\"></i></a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://bootadmin.net/js/jquery.min.js\"></script>
    <script src=\"https://bootadmin.net/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://bootadmin.net/js/datatables.min.js\"></script>
    <script src=\"https://bootadmin.net/js/moment.min.js\"></script>
    <script src=\"https://bootadmin.net/js/fullcalendar.min.js\"></script>
    <script src=\"https://bootadmin.net/js/bootadmin.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#example').DataTable();
        });
    </script>

    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-118868344-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118868344-1');
    </script>

    <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: \"ca-pub-4097235499795154\",
            enable_page_level_ads: true
        });
    </script>

{% endblock %}
", "@Echange/Default/index.html.twig", "C:\\wamp64\\www\\project\\src\\EchangeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
