<?php

/* @Participant\Default\search1.html.twig */
class __TwigTemplate_e577704d7131d35d1205b0c2e534de6af4738ee6695d3720964d400bb99e2413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "@Participant\\Default\\search1.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Participant\\Default\\search1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Participant\\Default\\search1.html.twig"));

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

    <div class=\"container\">

        <img src=\"https://cdn-images-1.medium.com/max/800/1*Nna8XsI6E69GoPQCdv-n1g.jpeg\" style=\"width:1600px\" height=\"400px\">

        <div class=\"row\">
            <div class=\"col-lg-9 col-12\">
                <div class=\"blog-page\">
                    <div class=\"page__header\">
                        <br><br>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant_participer");
        echo "\" class=\"btn  btn-pill btn-outline-success\">Afficher Les Participations</a>
                        <br><br>
                    </div>
                    <!-- Start Single Post -->

                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 50
            echo "                        <article class=\"blog__post d-flex flex-wrap\">
                            <div class=\"thumb\">
                                <a href=\"blog-details.html\">
                                    <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "img", array()), "html", null, true);
            echo "\" style=\"width: 200px\">
                                </a>
                            </div>
                            <div class=\"content\">
                                <h4><div>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nom", array()), "html", null, true);
            echo "</div></h4>
                                <ul class=\"post__meta\">
                                    <li>Date :  </li> <div>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "date", array()), "html", null, true);
            echo "</div>
                                    <li class=\"post_separator\">/</li>
                                    <li>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "heure", array()), "html", null, true);
            echo "</li>
                                </ul>
                                <form id=\"f\" method=\"post\" action=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant_participer");
            echo "\"  >
                                    <ul class=\"post__meta\">

                                        <li>Lieu : </li> <div>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "lieu", array()), "html", null, true);
            echo "</div>
                                    </ul>

                                    <input name=\"id\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" hidden >
                                    <div>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "</div>
                                    <div class=\"blog__btn\">
                                        <input type=\"number\" name=\"capacite\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "capacite", array()), "html", null, true);
            echo "\" hidden >
                                        <input type=\"number\" name=\"nbre\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nbreParticipant", array()), "html", null, true);
            echo "\" hidden >
                                        <input type=\"text\" name=\"date1\" id=\"date1\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "date", array()), "html", null, true);
            echo " \" hidden>
                                        <input type=\"submit\" value=\"Participer\" id=\"butt\" class=\"btn btn-info btn-rounded\" onclick=\"participer(this);return false;\">
                                    </div>
                                </form>
                            </div>

                        </article>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
                    <br><br><br>


                    <!-- End Single Post -->








                </div>
            </div>
        </div>
    </div>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Participant\\Default\\search1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 83,  174 => 74,  170 => 73,  166 => 72,  161 => 70,  157 => 69,  151 => 66,  145 => 63,  140 => 61,  135 => 59,  130 => 57,  123 => 53,  118 => 50,  114 => 49,  106 => 44,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"container\">

        <img src=\"https://cdn-images-1.medium.com/max/800/1*Nna8XsI6E69GoPQCdv-n1g.jpeg\" style=\"width:1600px\" height=\"400px\">

        <div class=\"row\">
            <div class=\"col-lg-9 col-12\">
                <div class=\"blog-page\">
                    <div class=\"page__header\">
                        <br><br>
                        <a href=\"{{ path('participant_participer') }}\" class=\"btn  btn-pill btn-outline-success\">Afficher Les Participations</a>
                        <br><br>
                    </div>
                    <!-- Start Single Post -->

                    {% for event in events %}
                        <article class=\"blog__post d-flex flex-wrap\">
                            <div class=\"thumb\">
                                <a href=\"blog-details.html\">
                                    <img src=\"{{ event.img }}\" style=\"width: 200px\">
                                </a>
                            </div>
                            <div class=\"content\">
                                <h4><div>{{ event.nom }}</div></h4>
                                <ul class=\"post__meta\">
                                    <li>Date :  </li> <div>{{ event.date }}</div>
                                    <li class=\"post_separator\">/</li>
                                    <li>{{ event.heure }}</li>
                                </ul>
                                <form id=\"f\" method=\"post\" action=\"{{  path('participant_participer')}}\"  >
                                    <ul class=\"post__meta\">

                                        <li>Lieu : </li> <div>{{ event.lieu }}</div>
                                    </ul>

                                    <input name=\"id\" value=\"{{ event.id }}\" hidden >
                                    <div>{{ event.description }}</div>
                                    <div class=\"blog__btn\">
                                        <input type=\"number\" name=\"capacite\" value=\"{{ event.capacite }}\" hidden >
                                        <input type=\"number\" name=\"nbre\" value=\"{{ event.nbreParticipant }}\" hidden >
                                        <input type=\"text\" name=\"date1\" id=\"date1\" value=\"{{ event.date }} \" hidden>
                                        <input type=\"submit\" value=\"Participer\" id=\"butt\" class=\"btn btn-info btn-rounded\" onclick=\"participer(this);return false;\">
                                    </div>
                                </form>
                            </div>

                        </article>

                    {% endfor %}

                    <br><br><br>


                    <!-- End Single Post -->








                </div>
            </div>
        </div>
    </div>






{% endblock %}", "@Participant\\Default\\search1.html.twig", "C:\\wamp64\\www\\project\\src\\ParticipantBundle\\Resources\\views\\Default\\search1.html.twig");
    }
}
