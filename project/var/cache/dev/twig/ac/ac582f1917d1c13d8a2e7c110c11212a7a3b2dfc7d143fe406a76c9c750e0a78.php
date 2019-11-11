<?php

/* @Participant/Default/search.html.twig */
class __TwigTemplate_98b8b06d12ceefdf448903e029cd5c7c8f0579ad1ecd36a475ac76153ffc5d63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "@Participant/Default/search.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Participant/Default/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Participant/Default/search.html.twig"));

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
        echo "    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.rateyo.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.rateyo.css"), "html", null, true);
        echo "\">




    <!-- Start Bradcaump area -->


    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <img src=\"https://p4.storage.canalblog.com/42/03/1322167/115196355.png\" style=\"width:1200px\" height=\"400px\">
                <div class=\"bradcaump__inner text-center\">
                    <h2 class=\"bradcaump-title\">Les événements</h2>
                    <nav class=\"bradcaump-content\">
                        <span class=\"brd-separetor\">/</span>

                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- End Bradcaump area -->
    <!-- Start Blog Area -->

    <div class=\"overlay overlay-bg\"></div>
    <div class=\"container\">
        <div class=\"row fullscreen align-items-center justify-content-between\">
            <div class=\"col-lg-6 col-md-6 banner-left\">

                <h1 class=\"text-white\">Welcome to Holidays Now Restaurant </h1>
                <a href=\"http://localhost/Resto/web/app_dev.php/clientOffre\" class=\"primary-btn text-uppercase\">Consulter nos Offres </a>
            </div>
            <div class=\"col-lg-4 col-md-6 banner-right\">
                <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"searchTab\" data-toggle=\"tab\" href=\"#searchEvent\" role=\"tab\" aria-controls=\"searchEvent\" aria-selected=\"true\">Evénements</a>
                    </li>


                </ul>
                <div class=\"tab-content\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"searchEvent\" role=\"tabpane\" aria-labelledby=\"searchTab\">
                        <form action=\"";
        // line 54
        echo "search";
        echo "\" class=\"form-wrap\" method=\"POST\"  enctype=\"multipart/form-data\">

                            <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"nom\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Nom'\">
                            <input type=\"text\" class=\"form-control\" name=\"lieu\" placeholder=\"lieu\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Lieu '\">
                            <input type=\"submit\" class=\"primary-btn text-uppercase\" value=\"Rechercher\">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


                    <!-- End Single Post -->











";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Participant/Default/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 54,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{%  block content%}
    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/plugins.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.rateyo.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.rateyo.css') }}\">




    <!-- Start Bradcaump area -->


    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <img src=\"https://p4.storage.canalblog.com/42/03/1322167/115196355.png\" style=\"width:1200px\" height=\"400px\">
                <div class=\"bradcaump__inner text-center\">
                    <h2 class=\"bradcaump-title\">Les événements</h2>
                    <nav class=\"bradcaump-content\">
                        <span class=\"brd-separetor\">/</span>

                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- End Bradcaump area -->
    <!-- Start Blog Area -->

    <div class=\"overlay overlay-bg\"></div>
    <div class=\"container\">
        <div class=\"row fullscreen align-items-center justify-content-between\">
            <div class=\"col-lg-6 col-md-6 banner-left\">

                <h1 class=\"text-white\">Welcome to Holidays Now Restaurant </h1>
                <a href=\"http://localhost/Resto/web/app_dev.php/clientOffre\" class=\"primary-btn text-uppercase\">Consulter nos Offres </a>
            </div>
            <div class=\"col-lg-4 col-md-6 banner-right\">
                <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"searchTab\" data-toggle=\"tab\" href=\"#searchEvent\" role=\"tab\" aria-controls=\"searchEvent\" aria-selected=\"true\">Evénements</a>
                    </li>


                </ul>
                <div class=\"tab-content\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"searchEvent\" role=\"tabpane\" aria-labelledby=\"searchTab\">
                        <form action=\"{{ 'search' }}\" class=\"form-wrap\" method=\"POST\"  enctype=\"multipart/form-data\">

                            <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"nom\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Nom'\">
                            <input type=\"text\" class=\"form-control\" name=\"lieu\" placeholder=\"lieu\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Lieu '\">
                            <input type=\"submit\" class=\"primary-btn text-uppercase\" value=\"Rechercher\">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


                    <!-- End Single Post -->











{% endblock %}", "@Participant/Default/search.html.twig", "C:\\wamp64\\www\\project\\src\\ParticipantBundle\\Resources\\views\\Default\\search.html.twig");
    }
}
