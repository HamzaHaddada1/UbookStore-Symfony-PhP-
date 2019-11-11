<?php

/* @Evenement\Default\show.html.twig */
class __TwigTemplate_366fa4ba31577d67c30ef85a06f5411997791cca387f859bc2fe7f87fb9fd624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "@Evenement\\Default\\show.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement\\Default\\show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement\\Default\\show.html.twig"));

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


        <link rel=\"stylesheet\"  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.rateyo.min.css"), "html", null, true);
        echo "\" />

    <h1>Event</h1>


<fieldset>
    <table>
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "nom", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lieu</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "lieu", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "date", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Heure</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "heure", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Capacite</th>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "capacite", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nbreparticipant</th>
            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "nbreParticipant", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>

            <td><div ><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "img", array()), "html", null, true);
        echo "\" style=\"width:300px\"> </div></td>
        </tr>
        </tbody>
    </table>
</fieldset>

    <button class=\"btn  btn-pill btn-outline-success\" data-target=\"#Modal\" data-toggle=\"modal\">Evaluation</button>
    <div class=\"modal fade\" tabindex=\"-1\" id=\"Modal\"
         data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                        &times;
                    </button>
                    <h4 class=\"modal-title\">Evaluation</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 67
        if (($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "nbreParticipant", array()) > ($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "capacite", array()) / 2))) {
            // line 68
            echo "                    <p> l'évenement a réussi avec un nombre de participant ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "nbreParticipant", array()), "html", null, true);
            echo ".</p>
                    ";
        } else {
            // line 70
            echo "                    <p>l'évenement n'a pas bien réussi avec un nombre de participant ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "nbreParticipant", array()), "html", null, true);
            echo ".</p>
                </div>

                ";
        }
        // line 74
        echo "





                <div class=\"rateyo\"></div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\"
                            data-dismiss=\"modal\">Close</button>
                </div>









            </div>
        </div>



        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.rateyo.js"), "html", null, true);
        echo "\"></script>
    <script>

        \$(function () {
            \$(\".rateyo\").rateYo();
        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Evenement\\Default\\show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 101,  188 => 100,  160 => 74,  152 => 70,  146 => 68,  144 => 67,  123 => 49,  116 => 45,  109 => 41,  102 => 37,  95 => 33,  88 => 29,  81 => 25,  74 => 21,  67 => 17,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BaseAdmin.html.twig' %}

{% block container %}



        <link rel=\"stylesheet\"  href=\"{{ asset('css/jquery.rateyo.min.css')}}\" />

    <h1>Event</h1>


<fieldset>
    <table>
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ event.id }}</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>{{ event.nom }}</td>
        </tr>
        <tr>
            <th>Lieu</th>
            <td>{{ event.lieu }}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{ event.date }}</td>
        </tr>
        <tr>
            <th>Heure</th>
            <td>{{ event.heure }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ event.description }}</td>
        </tr>
        <tr>
            <th>Capacite</th>
            <td>{{ event.capacite }}</td>
        </tr>
        <tr>
            <th>Nbreparticipant</th>
            <td>{{ event.nbreParticipant }}</td>
        </tr>
        <tr>

            <td><div ><img src=\"{{ event.img }}\" style=\"width:300px\"> </div></td>
        </tr>
        </tbody>
    </table>
</fieldset>

    <button class=\"btn  btn-pill btn-outline-success\" data-target=\"#Modal\" data-toggle=\"modal\">Evaluation</button>
    <div class=\"modal fade\" tabindex=\"-1\" id=\"Modal\"
         data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                        &times;
                    </button>
                    <h4 class=\"modal-title\">Evaluation</h4>
                </div>
                <div class=\"modal-body\">
                    {% if event.nbreParticipant> (event.capacite)/2  %}
                    <p> l'évenement a réussi avec un nombre de participant {{ event.nbreParticipant }}.</p>
                    {% else %}
                    <p>l'évenement n'a pas bien réussi avec un nombre de participant {{ event.nbreParticipant }}.</p>
                </div>

                {% endif %}






                <div class=\"rateyo\"></div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\"
                            data-dismiss=\"modal\">Close</button>
                </div>









            </div>
        </div>



        <script src=\"{{ asset('js/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('js/jquery.rateyo.js')}}\"></script>
    <script>

        \$(function () {
            \$(\".rateyo\").rateYo();
        });

    </script>

{% endblock %}
", "@Evenement\\Default\\show.html.twig", "C:\\wamp64\\www\\project\\src\\EvenementBundle\\Resources\\views\\Default\\show.html.twig");
    }
}
