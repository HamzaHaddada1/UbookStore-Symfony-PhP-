<?php

/* @Locaux/Default/index.html.twig */
class __TwigTemplate_f93164c70e4ac25973feae32cde7e46e05ea5518f105c77f10f0215dfc537c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@Locaux/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Locaux/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Locaux/Default/index.html.twig"));

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
        echo "    <h1>Locauxes list</h1>

    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("locaux_new");
        echo "\">Create a new locaux</a>
        </li>
    </ul>
    <div class=\"d-flex\">

        <div class=\"content p-4\">
            <div class=\"text-center mb-4\">
                <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
                <!-- Responsive -->
                <ins class=\"adsbygoogle\"
                     style=\"display:block\"
                     data-ad-client=\"ca-pub-4097235499795154\"
                     data-ad-slot=\"5211442851\"
                     data-ad-format=\"auto\"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

            <h2 class=\"mb-4\">Datatables</h2>

            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Longitude</th>
                            <th>Latitude</th>
                            <th class=\"actions\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locauxes"] ?? $this->getContext($context, "locauxes")));
        foreach ($context['_seq'] as $context["_key"] => $context["locaux"]) {
            // line 42
            echo "                        <tr>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["locaux"], "adrs", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["locaux"], "xs", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["locaux"], "ys", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("locaux_edit", array("idloc" => $this->getAttribute($context["locaux"], "idloc", array()))), "html", null, true);
            echo "\" class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"Edit\"><i class=\"fa fa-fw fa-edit\"></i></a>
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("locaux_show", array("idloc" => $this->getAttribute($context["locaux"], "idloc", array()))), "html", null, true);
            echo "\" class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i class=\"fa fa-fw fa-trash\"></i></a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locaux'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        return "@Locaux/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 52,  115 => 48,  111 => 47,  106 => 45,  102 => 44,  98 => 43,  95 => 42,  91 => 41,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Locauxes list</h1>

    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('locaux_new') }}\">Create a new locaux</a>
        </li>
    </ul>
    <div class=\"d-flex\">

        <div class=\"content p-4\">
            <div class=\"text-center mb-4\">
                <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
                <!-- Responsive -->
                <ins class=\"adsbygoogle\"
                     style=\"display:block\"
                     data-ad-client=\"ca-pub-4097235499795154\"
                     data-ad-slot=\"5211442851\"
                     data-ad-format=\"auto\"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

            <h2 class=\"mb-4\">Datatables</h2>

            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <table id=\"example\" class=\"table table-hover\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Longitude</th>
                            <th>Latitude</th>
                            <th class=\"actions\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for locaux in locauxes %}
                        <tr>
                            <td>{{ locaux.adrs }}</td>
                            <td>{{ locaux.xs }}</td>
                            <td>{{ locaux.ys }}</td>
                            <td>
                                <a href=\"{{ path('locaux_edit', { 'idloc': locaux.idloc }) }}\" class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"Edit\"><i class=\"fa fa-fw fa-edit\"></i></a>
                                <a href=\"{{ path('locaux_show', { 'idloc': locaux.idloc }) }}\" class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i class=\"fa fa-fw fa-trash\"></i></a>
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
", "@Locaux/Default/index.html.twig", "C:\\wamp64\\www\\project\\src\\LocauxBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
