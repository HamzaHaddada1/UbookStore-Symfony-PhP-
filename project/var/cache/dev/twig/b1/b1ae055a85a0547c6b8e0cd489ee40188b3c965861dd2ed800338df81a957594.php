<?php

/* @Auteur/Default/new.html.twig */
class __TwigTemplate_f460bffff0d1053260a153a507a826facd6ed418b89808b209f9751e51316249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@Auteur/Default/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Auteur/Default/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Auteur/Default/new.html.twig"));

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
<div class=\"card-header bg-white font-weight-bold\">
    <h1>creation d'Auteur </h1> </div>
    <div class=\"card mb-4\">
<div class=\"card-body\">
    <form name=\"auteurbundle_auteur\" method=\"post\" >
        <div id=\"auteurbundle_auteur\" >
            <div class=\"col-md-4 mb-3\">
                <label for=\"auteurbundle_auteur_authorname\" >nom de l'auteur</label>
                <input type=\"text\" id=\"auteurbundle_auteur_authorname\" name=\"auteurbundle_auteur[authorname]\" maxlength=\"30\" class=\"form-control is-valid\"  placeholder=\"nom auteur\"  required=\"required\">
            </div>

            <div class=\"col-md-4 mb-3\">

                <label class=\"required\">Birthdate</label>
                <div id=\"auteurbundle_auteur_birthdate\">


                    <select id=\"auteurbundle_auteur_birthdate_month\" name=\"auteurbundle_auteur[birthdate][month]\"
                    ><option value=\"1\">Jan</option><option value=\"2\">Feb</option><option value=\"3\">
                            Mar</option><option value=\"4\">Apr</option><option value=\"5\">May</option><option value=\"6\">
                            Jun</option><option value=\"7\">Jul</option><option value=\"8\">Aug</option><option value=\"9\">Sep</option><option value=\"10\">Oct</option><option value=\"11\">Nov</option><option value=\"12\">Dec</option></select><select id=\"auteurbundle_auteur_birthdate_day\" name=\"auteurbundle_auteur[birthdate][day]\"><option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option><option value=\"21\">21</option><option value=\"22\">22</option><option value=\"23\">23</option><option value=\"24\">24</option><option value=\"25\">25</option><option value=\"26\">26</option><option value=\"27\">27</option><option value=\"28\">28</option><option value=\"29\">29</option><option value=\"30\">30</option><option value=\"31\">31</option></select>



                    <select id=\"auteurbundle_auteur_birthdate_year\" name=\"auteurbundle_auteur[birthdate][year]\"><option value=\"2013\">2013</option><option value=\"2014\">2014</option><option value=\"2015\">2015</option><option value=\"2016\">2016</option><option value=\"2017\">2017</option><option value=\"2018\">2018</option><option value=\"2019\">2019</option><option value=\"2020\">2020</option><option value=\"2021\">2021</option><option value=\"2022\">2022</option><option value=\"2023\">2023</option></select>
                </div></div>

            <div class=\"col-md-4 mb-3\"><label class=\"required\">Deathdate</label><div id=\"auteurbundle_auteur_deathdate\"><select id=\"auteurbundle_auteur_deathdate_month\" name=\"auteurbundle_auteur[deathdate][month]\"><option value=\"1\">Jan</option><option value=\"2\">Feb</option><option value=\"3\">Mar</option><option value=\"4\">Apr</option><option value=\"5\">May</option><option value=\"6\">Jun</option><option value=\"7\">Jul</option><option value=\"8\">Aug</option><option value=\"9\">Sep</option><option value=\"10\">Oct</option><option value=\"11\">Nov</option><option value=\"12\">Dec</option></select><select id=\"auteurbundle_auteur_deathdate_day\" name=\"auteurbundle_auteur[deathdate][day]\"><option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option><option value=\"21\">21</option><option value=\"22\">22</option><option value=\"23\">23</option><option value=\"24\">24</option><option value=\"25\">25</option><option value=\"26\">26</option><option value=\"27\">27</option><option value=\"28\">28</option><option value=\"29\">29</option><option value=\"30\">30</option><option value=\"31\">31</option></select>
                    <select id=\"auteurbundle_auteur_deathdate_year\" name=\"auteurbundle_auteur[deathdate][year]\"><option value=\"2013\">2013</option><option value=\"2014\">2014</option><option value=\"2015\">2015</option><option value=\"2016\">2016</option><option value=\"2017\">2017</option><option value=\"2018\">2018</option><option value=\"2019\">2019</option><option value=\"2020\">2020</option><option value=\"2021\">2021</option><option value=\"2022\">2022</option><option value=\"2023\">2023</option></select></div></div><div>



                <div class=\"col-md-4 mb-3\">
                <label for=\"auteurbundle_auteur_contact\" class=\"required\">
                    Contact</label>
                <input type=\"text\" id=\"auteurbundle_auteur_contact\" name=\"auteurbundle_auteur[contact]\" class=\"form-control is-valid\"  placeholder=\"Contact\"  required=\"required\" maxlength=\"30\"></div><div>
                </div>
                <div class=\"col-md-4 mb-3\">
                <label for=\"auteurbundle_auteur_descrip\">Descrip</label>
                <input type=\"text\" id=\"auteurbundle_auteur_descrip\" name=\"auteurbundle_auteur[descrip]\" maxlength=\"30\" class=\"form-control is-valid\"  placeholder=\"Contact\"  required=\"required\" ></div><input type=\"hidden\" id=\"auteurbundle_auteur__token\" name=\"auteurbundle_auteur[_token]\" value=\"HLN0ACNY9PPo0MNt0Ycc0F3GOU24p9en-VyaFDJdBwQ\"></div>
        </div>
        <div class=\"card-footer bg-white\">
        <input type=\"submit\" value=\"Create\" class=\"btn btn-primary\">  </div>
    </form>
</div>
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auteur_index");
        echo "\"class=\"btn btn-icon btn-pill btn-info\" data-toggle=\"tooltip\" title=\"nouveau\"><i >Back to list</i></a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Auteur/Default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 53,  49 => 4,  40 => 3,  11 => 1,);
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

<div class=\"card-header bg-white font-weight-bold\">
    <h1>creation d'Auteur </h1> </div>
    <div class=\"card mb-4\">
<div class=\"card-body\">
    <form name=\"auteurbundle_auteur\" method=\"post\" >
        <div id=\"auteurbundle_auteur\" >
            <div class=\"col-md-4 mb-3\">
                <label for=\"auteurbundle_auteur_authorname\" >nom de l'auteur</label>
                <input type=\"text\" id=\"auteurbundle_auteur_authorname\" name=\"auteurbundle_auteur[authorname]\" maxlength=\"30\" class=\"form-control is-valid\"  placeholder=\"nom auteur\"  required=\"required\">
            </div>

            <div class=\"col-md-4 mb-3\">

                <label class=\"required\">Birthdate</label>
                <div id=\"auteurbundle_auteur_birthdate\">


                    <select id=\"auteurbundle_auteur_birthdate_month\" name=\"auteurbundle_auteur[birthdate][month]\"
                    ><option value=\"1\">Jan</option><option value=\"2\">Feb</option><option value=\"3\">
                            Mar</option><option value=\"4\">Apr</option><option value=\"5\">May</option><option value=\"6\">
                            Jun</option><option value=\"7\">Jul</option><option value=\"8\">Aug</option><option value=\"9\">Sep</option><option value=\"10\">Oct</option><option value=\"11\">Nov</option><option value=\"12\">Dec</option></select><select id=\"auteurbundle_auteur_birthdate_day\" name=\"auteurbundle_auteur[birthdate][day]\"><option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option><option value=\"21\">21</option><option value=\"22\">22</option><option value=\"23\">23</option><option value=\"24\">24</option><option value=\"25\">25</option><option value=\"26\">26</option><option value=\"27\">27</option><option value=\"28\">28</option><option value=\"29\">29</option><option value=\"30\">30</option><option value=\"31\">31</option></select>



                    <select id=\"auteurbundle_auteur_birthdate_year\" name=\"auteurbundle_auteur[birthdate][year]\"><option value=\"2013\">2013</option><option value=\"2014\">2014</option><option value=\"2015\">2015</option><option value=\"2016\">2016</option><option value=\"2017\">2017</option><option value=\"2018\">2018</option><option value=\"2019\">2019</option><option value=\"2020\">2020</option><option value=\"2021\">2021</option><option value=\"2022\">2022</option><option value=\"2023\">2023</option></select>
                </div></div>

            <div class=\"col-md-4 mb-3\"><label class=\"required\">Deathdate</label><div id=\"auteurbundle_auteur_deathdate\"><select id=\"auteurbundle_auteur_deathdate_month\" name=\"auteurbundle_auteur[deathdate][month]\"><option value=\"1\">Jan</option><option value=\"2\">Feb</option><option value=\"3\">Mar</option><option value=\"4\">Apr</option><option value=\"5\">May</option><option value=\"6\">Jun</option><option value=\"7\">Jul</option><option value=\"8\">Aug</option><option value=\"9\">Sep</option><option value=\"10\">Oct</option><option value=\"11\">Nov</option><option value=\"12\">Dec</option></select><select id=\"auteurbundle_auteur_deathdate_day\" name=\"auteurbundle_auteur[deathdate][day]\"><option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option><option value=\"21\">21</option><option value=\"22\">22</option><option value=\"23\">23</option><option value=\"24\">24</option><option value=\"25\">25</option><option value=\"26\">26</option><option value=\"27\">27</option><option value=\"28\">28</option><option value=\"29\">29</option><option value=\"30\">30</option><option value=\"31\">31</option></select>
                    <select id=\"auteurbundle_auteur_deathdate_year\" name=\"auteurbundle_auteur[deathdate][year]\"><option value=\"2013\">2013</option><option value=\"2014\">2014</option><option value=\"2015\">2015</option><option value=\"2016\">2016</option><option value=\"2017\">2017</option><option value=\"2018\">2018</option><option value=\"2019\">2019</option><option value=\"2020\">2020</option><option value=\"2021\">2021</option><option value=\"2022\">2022</option><option value=\"2023\">2023</option></select></div></div><div>



                <div class=\"col-md-4 mb-3\">
                <label for=\"auteurbundle_auteur_contact\" class=\"required\">
                    Contact</label>
                <input type=\"text\" id=\"auteurbundle_auteur_contact\" name=\"auteurbundle_auteur[contact]\" class=\"form-control is-valid\"  placeholder=\"Contact\"  required=\"required\" maxlength=\"30\"></div><div>
                </div>
                <div class=\"col-md-4 mb-3\">
                <label for=\"auteurbundle_auteur_descrip\">Descrip</label>
                <input type=\"text\" id=\"auteurbundle_auteur_descrip\" name=\"auteurbundle_auteur[descrip]\" maxlength=\"30\" class=\"form-control is-valid\"  placeholder=\"Contact\"  required=\"required\" ></div><input type=\"hidden\" id=\"auteurbundle_auteur__token\" name=\"auteurbundle_auteur[_token]\" value=\"HLN0ACNY9PPo0MNt0Ycc0F3GOU24p9en-VyaFDJdBwQ\"></div>
        </div>
        <div class=\"card-footer bg-white\">
        <input type=\"submit\" value=\"Create\" class=\"btn btn-primary\">  </div>
    </form>
</div>
    </div>
    <ul>
        <li>
            <a href=\"{{ path('auteur_index') }}\"class=\"btn btn-icon btn-pill btn-info\" data-toggle=\"tooltip\" title=\"nouveau\"><i >Back to list</i></a>
        </li>
    </ul>
{% endblock %}
", "@Auteur/Default/new.html.twig", "C:\\wamp64\\www\\project\\src\\AuteurBundle\\Resources\\views\\Default\\new.html.twig");
    }
}
