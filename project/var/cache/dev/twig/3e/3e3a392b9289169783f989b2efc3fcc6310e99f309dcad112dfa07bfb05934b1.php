<?php

/* EvenementBundle:Default:recherche.html.twig */
class __TwigTemplate_1b3b8c2641ede515aaea3c68d9dfe6916511e8280a3bdf47fb7590f89e8c3aa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "EvenementBundle:Default:recherche.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:recherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:recherche.html.twig"));

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
        echo "    <form method=\"post\">
        <table>
            <tr><td>Recherche</td><td><input type=\"text\" name=\"nom\" id=\"name\"/></td></tr><br>
        </table>

    </form>
    <br>
    <br>

    <br>
    <h1>Events list</h1>

    <div id=\"res\"></div>
    <div id=\"affichage\">
        <table border=\"1\" >
            <tr><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td> <td>f</td><td>g</td></tr>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "lieu", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "heure", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "capacite", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </table>
    </div>


    <script>
        \$(\"#name\").keyup(
            function(){
                var nom = \$(\"#name\").val();
                var DATA = 'nom='+ nom;

                \$.ajax({
                    type: \"POST\",
                    url:   \"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_recherche");
        echo "\",
                    data: DATA,
                    success: function (data) {
                        console.log(data);
                       \$(\"#affichage\").hide();
                        \$(\"#res\").html(\"<table border = '1'>\"+
                            \"<td>a</td> <td>b</td>\" +
                            \"<td>c</td><td>d</td>\"+
                            \"<td>e</td><td>f</td><td>g</td></table>\");
                        \$.each(data,function (k,el) {
                            //    console.log(el);
                            \$('#res').append(
                                \"<tr>\"+
                                \"<td>\"+el.id+\"</td>\"+
                                \"<td>\"+el.nom+\"</td>\"+
                                \"<td>\"+el.lieu+\"</td>\"+
                                \"<td>\"+el.date+\"</td>\"+
                                \"<td>\"+el.heure+\"</td>\"+
                                \"<td>\"+el.description+\"</td>\"+
                                \"<td>\"+el.capacite+\"</td>\"
                                +\"</tr>\"


                            );

                        })
                        \$('#res').append(\"</table>\");

                    }
                })
            }
        )
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Default:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  107 => 32,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  71 => 22,  67 => 21,  49 => 5,  40 => 4,  11 => 1,);
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
    <form method=\"post\">
        <table>
            <tr><td>Recherche</td><td><input type=\"text\" name=\"nom\" id=\"name\"/></td></tr><br>
        </table>

    </form>
    <br>
    <br>

    <br>
    <h1>Events list</h1>

    <div id=\"res\"></div>
    <div id=\"affichage\">
        <table border=\"1\" >
            <tr><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td> <td>f</td><td>g</td></tr>
            {% for i in events %}
                <tr>
                    <td>{{ i.id }}</td>
                    <td>{{ i.nom }}</td>
                    <td>{{ i.lieu }}</td>
                    <td>{{ i.date }}</td>
                    <td>{{ i.heure}}</td>
                    <td>{{ i.description}}</td>
                    <td>{{ i.capacite }}</td>
                </tr>
            {% endfor %}
        </table>
    </div>


    <script>
        \$(\"#name\").keyup(
            function(){
                var nom = \$(\"#name\").val();
                var DATA = 'nom='+ nom;

                \$.ajax({
                    type: \"POST\",
                    url:   \"{{ path('event_recherche') }}\",
                    data: DATA,
                    success: function (data) {
                        console.log(data);
                       \$(\"#affichage\").hide();
                        \$(\"#res\").html(\"<table border = '1'>\"+
                            \"<td>a</td> <td>b</td>\" +
                            \"<td>c</td><td>d</td>\"+
                            \"<td>e</td><td>f</td><td>g</td></table>\");
                        \$.each(data,function (k,el) {
                            //    console.log(el);
                            \$('#res').append(
                                \"<tr>\"+
                                \"<td>\"+el.id+\"</td>\"+
                                \"<td>\"+el.nom+\"</td>\"+
                                \"<td>\"+el.lieu+\"</td>\"+
                                \"<td>\"+el.date+\"</td>\"+
                                \"<td>\"+el.heure+\"</td>\"+
                                \"<td>\"+el.description+\"</td>\"+
                                \"<td>\"+el.capacite+\"</td>\"
                                +\"</tr>\"


                            );

                        })
                        \$('#res').append(\"</table>\");

                    }
                })
            }
        )
    </script>
{% endblock %}
", "EvenementBundle:Default:recherche.html.twig", "C:\\wamp64\\www\\project\\src\\EvenementBundle/Resources/views/Default/recherche.html.twig");
    }
}
