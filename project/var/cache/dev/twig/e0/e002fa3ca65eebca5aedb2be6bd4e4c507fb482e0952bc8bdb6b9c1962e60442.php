<?php

/* ParticipantBundle:Default:index.html.twig */
class __TwigTemplate_1f3749bb97f044f2ceafb7ae371d0a9bb85ce66c72243b52567aa6056c799ae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "ParticipantBundle:Default:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParticipantBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParticipantBundle:Default:index.html.twig"));

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
    <section class=\"banner-area relative \" style=\"background-image: url(https://cdn-images-1.medium.com/max/1600/1*Nna8XsI6E69GoPQCdv-n1g.jpeg);></section>

    <div class=\"overlay overlay-bg\"></div>
    <div class=\"container\">

        <img src=\"https://cdn-images-1.medium.com/max/800/1*Nna8XsI6E69GoPQCdv-n1g.jpeg\" style=\"width:1600px\" height=\"400px\">
            <div class=\"col-lg-6 col-md-6 banner-left\">

                <br><br>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant_participer");
        echo "\" class=\"btn  btn-pill btn-outline-success\">Afficher Les Participations</a>
<br><br>
            </div>
            <div class=\"col-lg-4 col-md-6 banner-right\">
                <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                    <li class=\"nav-item\">

                    </li>


                </ul>
                <div class=\"col-lg-12\">

                <div class=\"tab-content\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"searchEvent\" role=\"tabpane\" aria-labelledby=\"searchTab\">
                        <form action=\"";
        // line 53
        echo "search";
        echo "\" class=\"form-wrap\" method=\"POST\"  enctype=\"multipart/form-data\">

                         <br>
                            <select name=\"nom\" id=\"nom\" size=\"1\" class=\"form-control\"  id=\"validationCustom07\" required>
                                <option value=\"Echange\">  Echange</option>
                                <option value=\"Lecture\">Lecture</option>
                                <option value=\"Conférence\">Conférence</option>
                                <option value=\"Débat\">Débat</option>
                                <option value=\"Fête\">Fête</option>
                            </select>

                            <br>


                            <input type=\"text\" class=\"form-control\" name=\"lieu\" placeholder=\"Lieu\"  onblur=\"this.placeholder = 'Lieu '\" required>
                            <br>
                            <input type=\"submit\" value=\"Rechercher\" id=\"butt\" class=\"btn btn-info btn-rounded\" >
                        <br><br>
                        </form>

                    </div></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>

    </section>




    <!-- End Bradcaump area -->
    <!-- Start Blog Area -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9 col-12\">
                    <div class=\"blog-page\">
                        <div class=\"page__header\">

                        </div>
                        <!-- Start Single Post -->

                        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 97
            echo "                        <article class=\"blog__post d-flex flex-wrap\">
                            <div class=\"thumb\">
                                <a href=\"blog-details.html\">
                                    <img src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "img", array()), "html", null, true);
            echo "\" style=\"width: 200px\">
                                </a>
                            </div>
                            <div class=\"content\">
                                <h4><div>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nom", array()), "html", null, true);
            echo "</div></h4>
                                <ul class=\"post__meta\">
                                    <li>Date :  </li> <div>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "date", array()), "html", null, true);
            echo "</div>
                                    <li class=\"post_separator\">/</li>
                                    <li>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "heure", array()), "html", null, true);
            echo "</li>
                                </ul>
                                <form id=\"f\" method=\"post\" action=\"";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant_participer");
            echo "\"  >
                                <ul class=\"post__meta\">

                                    <li>Lieu : </li> <div>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "lieu", array()), "html", null, true);
            echo "</div>
                                </ul>

                                <input name=\"id\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" hidden >
                                    <div>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "</div>
                                <div class=\"blog__btn\">
                                    <input type=\"number\" name=\"capacite\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "capacite", array()), "html", null, true);
            echo "\" hidden >
                                    <input type=\"number\" name=\"nbre\" value=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nbreParticipant", array()), "html", null, true);
            echo "\" hidden >
                                    <input type=\"text\" name=\"date1\" id=\"date1\" value=\"";
            // line 121
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
        // line 130
        echo "


<br><br><br>
                        <div class=\"navigation\">
                            ";
        // line 135
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["events"] ?? $this->getContext($context, "events")));
        echo "
                        </div>


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
        return "ParticipantBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 135,  239 => 130,  224 => 121,  220 => 120,  216 => 119,  211 => 117,  207 => 116,  201 => 113,  195 => 110,  190 => 108,  185 => 106,  180 => 104,  173 => 100,  168 => 97,  164 => 96,  118 => 53,  100 => 38,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <section class=\"banner-area relative \" style=\"background-image: url(https://cdn-images-1.medium.com/max/1600/1*Nna8XsI6E69GoPQCdv-n1g.jpeg);></section>

    <div class=\"overlay overlay-bg\"></div>
    <div class=\"container\">

        <img src=\"https://cdn-images-1.medium.com/max/800/1*Nna8XsI6E69GoPQCdv-n1g.jpeg\" style=\"width:1600px\" height=\"400px\">
            <div class=\"col-lg-6 col-md-6 banner-left\">

                <br><br>
                <a href=\"{{ path('participant_participer') }}\" class=\"btn  btn-pill btn-outline-success\">Afficher Les Participations</a>
<br><br>
            </div>
            <div class=\"col-lg-4 col-md-6 banner-right\">
                <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                    <li class=\"nav-item\">

                    </li>


                </ul>
                <div class=\"col-lg-12\">

                <div class=\"tab-content\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"searchEvent\" role=\"tabpane\" aria-labelledby=\"searchTab\">
                        <form action=\"{{ 'search' }}\" class=\"form-wrap\" method=\"POST\"  enctype=\"multipart/form-data\">

                         <br>
                            <select name=\"nom\" id=\"nom\" size=\"1\" class=\"form-control\"  id=\"validationCustom07\" required>
                                <option value=\"Echange\">  Echange</option>
                                <option value=\"Lecture\">Lecture</option>
                                <option value=\"Conférence\">Conférence</option>
                                <option value=\"Débat\">Débat</option>
                                <option value=\"Fête\">Fête</option>
                            </select>

                            <br>


                            <input type=\"text\" class=\"form-control\" name=\"lieu\" placeholder=\"Lieu\"  onblur=\"this.placeholder = 'Lieu '\" required>
                            <br>
                            <input type=\"submit\" value=\"Rechercher\" id=\"butt\" class=\"btn btn-info btn-rounded\" >
                        <br><br>
                        </form>

                    </div></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>

    </section>




    <!-- End Bradcaump area -->
    <!-- Start Blog Area -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9 col-12\">
                    <div class=\"blog-page\">
                        <div class=\"page__header\">

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
                        <div class=\"navigation\">
                            {{ knp_pagination_render(events) }}
                        </div>


                        <!-- End Single Post -->








                    </div>
                </div>
            </div>
        </div>






{% endblock %}", "ParticipantBundle:Default:index.html.twig", "C:\\wamp64\\www\\project\\src\\ParticipantBundle/Resources/views/Default/index.html.twig");
    }
}
