<?php

/* @Locaux/Default/Gmap.html.twig */
class __TwigTemplate_4d37ccd3bd30df81a909eb9da35c845deb0cf2f1cd12d5a3a37bde6c0bac2276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@Locaux/Default/Gmap.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Locaux/Default/Gmap.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Locaux/Default/Gmap.html.twig"));

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
        echo "
    <head>
        <title>Simple Map</title>

        <meta name=\"viewport\" content=\"initial-scale=1.0\">
        <meta charset=\"utf-8\">
        <style>
            /* Always set the map height explicitly to define the size of the div
             * element that contains the map. */
            #map {
                height: 100%;
            }
            /* Optional: Makes the sample page fill the window. */
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
    <tr>
    <div id=\"map\"></div>
    </tr>
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat:";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locaux"] ?? $this->getContext($context, "locaux")), "xs", array()), "html", null, true);
        echo ", lng:";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locaux"] ?? $this->getContext($context, "locaux")), "ys", array()), "html", null, true);
        echo "},
                zoom: 5
            });

            var marker = new google.maps.Marker({
                position: {lat:";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locaux"] ?? $this->getContext($context, "locaux")), "xs", array()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locaux"] ?? $this->getContext($context, "locaux")), "ys", array()), "html", null, true);
        echo "},
                map: map,
                animation: google.maps.Animation.BOUNCE,
            });
        }

    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBS90c1RBEe4Ukcu-hy63NFUg8WJdpm-EM&callback=initMap\"
            async defer></script>
    </body>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Locaux/Default/Gmap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 37,  79 => 32,  49 => 4,  40 => 3,  11 => 1,);
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

    <head>
        <title>Simple Map</title>

        <meta name=\"viewport\" content=\"initial-scale=1.0\">
        <meta charset=\"utf-8\">
        <style>
            /* Always set the map height explicitly to define the size of the div
             * element that contains the map. */
            #map {
                height: 100%;
            }
            /* Optional: Makes the sample page fill the window. */
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
    <tr>
    <div id=\"map\"></div>
    </tr>
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat:{{ locaux.xs }}, lng:{{ locaux.ys }}},
                zoom: 5
            });

            var marker = new google.maps.Marker({
                position: {lat:{{ locaux.xs }}, lng: {{ locaux.ys }}},
                map: map,
                animation: google.maps.Animation.BOUNCE,
            });
        }

    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBS90c1RBEe4Ukcu-hy63NFUg8WJdpm-EM&callback=initMap\"
            async defer></script>
    </body>



{% endblock %}
", "@Locaux/Default/Gmap.html.twig", "C:\\wamp64\\www\\project\\src\\LocauxBundle\\Resources\\views\\Default\\Gmap.html.twig");
    }
}
