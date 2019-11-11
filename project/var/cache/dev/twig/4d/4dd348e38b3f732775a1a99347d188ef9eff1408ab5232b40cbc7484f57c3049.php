<?php

/* @Participant\Default\index2.html.twig */
class __TwigTemplate_5e81972a9eabdbede37efdf3116c32a3b8a93fe535b8c714603903e96b507aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "@Participant\\Default\\index2.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Participant\\Default\\index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Participant\\Default\\index2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"";
        // line 4
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
                            <h2>Liste des événements</h2>
                        </div>
                        <!-- Start Single Post -->

                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participants"] ?? $this->getContext($context, "participants")));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 40
            echo "                            <article class=\"blog__post d-flex flex-wrap\">
                                <div class=\"thumb\">
                                    <a href=\"blog-details.html\">
                                        <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idEvent", array()), "img", array()), "html", null, true);
            echo "\" style=\"width: 200px\">
                                    </a>
                                </div>
                                <div class=\"content\">
                                    <h4><div>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idEvent", array()), "nom", array()), "html", null, true);
            echo "</div></h4>
                                    <ul class=\"post__meta\">
                                        <li>Date :  </li> <div>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idEvent", array()), "date", array()), "html", null, true);
            echo "</div>
                                        <li class=\"post_separator\">/</li>
                                        <li>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idEvent", array()), "heure", array()), "html", null, true);
            echo "</li>
                                    </ul>

                                    <form method=\"post\" action=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant_annuler", array("id" => $this->getAttribute($context["participant"], "id", array()))), "html", null, true);
            echo "\"  >
                                        <ul class=\"post__meta\">

                                            <li>Lieu : </li> <div>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idEvent", array()), "lieu", array()), "html", null, true);
            echo "</div>
                                        </ul>
                                        <input type=\"text\" name=\"date\" id=\"date\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idEvent", array()), "date", array()), "html", null, true);
            echo "\" hidden>
                                        <input type=\"text\" name=\"id\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idEvent", array()), "id", array()), "html", null, true);
            echo "\" hidden >
                                        <div>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "idEvent", array()), "description", array()), "html", null, true);
            echo "</div></p>
                                        <div class=\"blog__btn\">
                                            <input type=\"submit\" value=\"Annuler Participation\" class=\"btn btn-danger btn-rounded\">
                                        </div>
                                    </form>
                                </div>
                            </article>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
<br><br><br>
                    <div class=\"navigation\">
                        ";
        // line 73
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["participants"] ?? $this->getContext($context, "participants")));
        echo "
                    </div>




                                             <!-- End Single Post -->




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Participant\\Default\\index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 73,  162 => 70,  147 => 61,  143 => 60,  139 => 59,  134 => 57,  128 => 54,  122 => 51,  117 => 49,  112 => 47,  105 => 43,  100 => 40,  96 => 39,  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
                            <h2>Liste des événements</h2>
                        </div>
                        <!-- Start Single Post -->

                        {% for participant in participants %}
                            <article class=\"blog__post d-flex flex-wrap\">
                                <div class=\"thumb\">
                                    <a href=\"blog-details.html\">
                                        <img src=\"{{ participant.idEvent.img }}\" style=\"width: 200px\">
                                    </a>
                                </div>
                                <div class=\"content\">
                                    <h4><div>{{ participant.idEvent.nom }}</div></h4>
                                    <ul class=\"post__meta\">
                                        <li>Date :  </li> <div>{{ participant.idEvent.date }}</div>
                                        <li class=\"post_separator\">/</li>
                                        <li>{{ participant.idEvent.heure }}</li>
                                    </ul>

                                    <form method=\"post\" action=\"{{  path('participant_annuler', { 'id': participant.id})}}\"  >
                                        <ul class=\"post__meta\">

                                            <li>Lieu : </li> <div>{{ participant.idEvent.lieu }}</div>
                                        </ul>
                                        <input type=\"text\" name=\"date\" id=\"date\" value=\"{{ participant.idEvent.date }}\" hidden>
                                        <input type=\"text\" name=\"id\" value=\"{{ participant.idEvent.id }}\" hidden >
                                        <div>{{ participant.idEvent.description }}</div></p>
                                        <div class=\"blog__btn\">
                                            <input type=\"submit\" value=\"Annuler Participation\" class=\"btn btn-danger btn-rounded\">
                                        </div>
                                    </form>
                                </div>
                            </article>

                        {% endfor %}

<br><br><br>
                    <div class=\"navigation\">
                        {{ knp_pagination_render(participants) }}
                    </div>




                                             <!-- End Single Post -->




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

{% endblock %}
", "@Participant\\Default\\index2.html.twig", "C:\\wamp64\\www\\project\\src\\ParticipantBundle\\Resources\\views\\Default\\index2.html.twig");
    }
}
