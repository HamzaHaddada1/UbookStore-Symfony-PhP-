<?php

/* @AdminForum/Default/index.html.twig */
class __TwigTemplate_ec64511cc3d1d19fba2bc06267a8ab9fd44f4e1cec6bcff5d94bcc064eef14cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@AdminForum/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminForum/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminForum/Default/index.html.twig"));

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
        echo "    <h1>Commentaires Signales</h1>
    <form method=\"POST\">
        <input type=\"search\" name=\"searchAuth\" id=\"searchAuth\" placeholder=\"search\" class=\"form-control is-valid\" onkeyup=\"myFunction()\">

    </form>

    <div id=\"result\">
    <table id=\"example\" class=\"table table-hover dataTable no-footer dtr-inline\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example_info\" style=\"width: 100%;\">
        <thead>
            <tr>
            <!--  <th>Idcmmt</th> -->
                <th>Iduser</th>
                <th>Cmmt</th>
               <th>Timecmmt</th>
                <!--  <th>Nblikes</th> -->
                <th>Nbsignal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 25
            echo "            <tr role=\"row\" class=\"odd\">
                <!--  <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "idcmmt", array()), "html", null, true);
            echo "</td>   <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comments_show", array("idcmmt" => $this->getAttribute($context["comment"], "idcmmt", array()))), "html", null, true);
            echo "\">   </a> -->
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "iduser", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "cmmt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["comment"], "timecmmt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "timecmmt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <!--   <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "nblikes", array()), "html", null, true);
            echo "</td> -->
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "nbsignal", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>

                      <!--  <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signal_delete_index", array("idcmmt" => $this->getAttribute($context["comment"], "idcmmt", array()))), "html", null, true);
            echo "\"
                               class=\"btn btn-icon btn-pill btn-danger deleteBtn \" data-toggle=\"tooltip\" title=\"Delete\" data-playgroup-id=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "idcmmt", array()), "html", null, true);
            echo "\">
                               <i class=\"btn\">Delete</i></a>-->
                        <button type=\"button\" class=\"btn btn-block btn-danger deleteBtn\" id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "idcmmt", array()), "html", null, true);
            echo "\" ><i class=\"btn\">Delete</i></button>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    //////////////////////////////////////jquery select a row

    /////////////////////////////////////////////////////////
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"searchAuth\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"example\");
            tr = table.getElementsByTagName(\"tr\");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }

    </script>

////////////////////////////////////////////////////////////suppresion ajax
    <script>
        \$(\".deleteBtn\").click(function(){
            if(confirm('Etes-vous sur de la supression')){
                var  itemId = \$(this).attr('id');
                var el = this;
                \$.ajax({
                    url:'";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signal_delete_index");
        echo "',
                    type: 'post',
                    data: {'input':itemId},
                    success: function() {
                        \$(el).closest('tr').fadeOut(190, function(){
                            \$(this).remove();
                        });
                    }
                });
            }

        });

    </script>



    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/moment.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://bootadmin.net/js/bootadmin.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(document).ready(function () {
            \$('#example').DataTable();
        });
    </script>

    <script async=\"\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://www.googletagmanager.com/gtag/js?id=UA-118868344-1"), "html", null, true);
        echo "\"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118868344-1');
    </script>
    <script async=\"\" src=\"";
        // line 126
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
        return "@AdminForum/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 126,  244 => 117,  233 => 109,  227 => 106,  222 => 104,  218 => 103,  214 => 102,  210 => 101,  190 => 84,  156 => 52,  147 => 51,  131 => 44,  119 => 38,  114 => 36,  110 => 35,  103 => 31,  99 => 30,  93 => 29,  89 => 28,  85 => 27,  79 => 26,  76 => 25,  72 => 24,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>Commentaires Signales</h1>
    <form method=\"POST\">
        <input type=\"search\" name=\"searchAuth\" id=\"searchAuth\" placeholder=\"search\" class=\"form-control is-valid\" onkeyup=\"myFunction()\">

    </form>

    <div id=\"result\">
    <table id=\"example\" class=\"table table-hover dataTable no-footer dtr-inline\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example_info\" style=\"width: 100%;\">
        <thead>
            <tr>
            <!--  <th>Idcmmt</th> -->
                <th>Iduser</th>
                <th>Cmmt</th>
               <th>Timecmmt</th>
                <!--  <th>Nblikes</th> -->
                <th>Nbsignal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for comment in comments %}
            <tr role=\"row\" class=\"odd\">
                <!--  <td>{{ comment.idcmmt }}</td>   <a href=\"{{ path('comments_show', { 'idcmmt': comment.idcmmt }) }}\">   </a> -->
                <td>{{ comment.iduser }}</td>
                <td>{{ comment.cmmt }}</td>
                <td>{% if comment.timecmmt %}{{ comment.timecmmt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <!--   <td>{{ comment.nblikes }}</td> -->
                <td>{{ comment.nbsignal }}</td>
                <td>
                    <ul>

                      <!--  <a href=\"{{ path('signal_delete_index', { 'idcmmt': comment.idcmmt }) }}\"
                               class=\"btn btn-icon btn-pill btn-danger deleteBtn \" data-toggle=\"tooltip\" title=\"Delete\" data-playgroup-id=\"{{ comment.idcmmt }}\">
                               <i class=\"btn\">Delete</i></a>-->
                        <button type=\"button\" class=\"btn btn-block btn-danger deleteBtn\" id=\"{{ comment.idcmmt }}\" ><i class=\"btn\">Delete</i></button>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>



{% endblock %}
{% block javascripts %}
    //////////////////////////////////////jquery select a row

    /////////////////////////////////////////////////////////
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"searchAuth\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"example\");
            tr = table.getElementsByTagName(\"tr\");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }

    </script>

////////////////////////////////////////////////////////////suppresion ajax
    <script>
        \$(\".deleteBtn\").click(function(){
            if(confirm('Etes-vous sur de la supression')){
                var  itemId = \$(this).attr('id');
                var el = this;
                \$.ajax({
                    url:'{{ path('signal_delete_index')}}',
                    type: 'post',
                    data: {'input':itemId},
                    success: function() {
                        \$(el).closest('tr').fadeOut(190, function(){
                            \$(this).remove();
                        });
                    }
                });
            }

        });

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

{% endblock %}", "@AdminForum/Default/index.html.twig", "C:\\wamp64\\www\\project\\src\\AdminForumBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
