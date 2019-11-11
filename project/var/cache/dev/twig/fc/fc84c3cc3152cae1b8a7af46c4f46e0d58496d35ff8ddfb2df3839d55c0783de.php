<?php

/* ::baseAdmin.html.twig */
class __TwigTemplate_ad283bcac176d4101172545449c6ff81c3224dea8f480b1758237a23baf1d340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 82
        echo "
</head>
<body class=\"bg-light\">
";
        // line 85
        $this->displayBlock('header', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('javascripts', $context, $blocks);
        // line 231
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fullcalendar.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootadmin.min.css"), "html", null, true);
        echo "\">


        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootadmin.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
        <script type=\"text/javascript\">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart3);
            google.charts.setOnLoadCallback(drawChart4);

            function drawChart3() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Sales', 'Expenses'],
                    ['2013', 1000, 400],
                    ['2014', 1170, 460],
                    ['2015', 660, 1120],
                    ['2016', 1030, 540]
                ]);

                var options = {
                    title: 'Company Performance',
                    hAxis: {title: 'Year', titleTextStyle: {color: '#333'}},
                    vAxis: {minValue: 0}
                };

                var chart = new google.visualization.AreaChart(document.getElementById('chart_div_3'));
                chart.draw(data, options);
            }

            function drawChart4() {
                var data = google.visualization.arrayToDataTable([
                    ['Country', 'Popularity'],
                    ['Germany', 200],
                    ['United States', 300],
                    ['Brazil', 400],
                    ['Canada', 500],
                    ['France', 600],
                    ['RU', 700]
                ]);

                var options = {};

                var chart = new google.visualization.GeoChart(document.getElementById('chart_div_4'));

                chart.draw(data, options);
            }
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

    // line 85
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 86
        echo "
    <nav class=\"navbar navbar-expand navbar-dark bg-primary\">
        <a class=\"sidebar-toggle mr-3\" href=\"#\"></a>
        <a class=\"navbar-brand\" href=\"https://bootadmin.net\"><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/ubook.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">U_Book Store</a>

        <div class=\"navbar-collapse collapse\">
            <ul class=\"navbar-nav ml-auto\">


                <li class=\"nav-item dropdown\">
                    <a href=\"#\" id=\"dd_user\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/zeus.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\"> Equipe Zeus</a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dd_user\">
                        <a href=\"#\" class=\"dropdown-item\">Profile</a>
                        <a href=\"#\" class=\"dropdown-item\">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class=\"d-flex\">
        <div class=\"sidebar sidebar-dark bg-dark\">
            <ul class=\"list-unstyled\">

                <li>
                    <a href=\"#sm_base\" data-toggle=\"collapse\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/users.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Membre
                    </a>
                    <ul id=\"sm_base\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/addAuteur.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/delete.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>

                <li>
                    <a href=\"#sm_evenement\" data-toggle=\"collapse\"><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/event.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Evenement
                    </a>
                    <ul id=\"sm_evenement\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/addAuteur.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/delete.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>

                <li><a href=\"\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/forum.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\"> Gestion Forum</a></li>

                <li>
                    <a href=\"#sm_maison\" data-toggle=\"collapse\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/maison.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Maison Edition
                    </a>
                    <ul id=\"sm_maison\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/addAuteur.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">Ajouter Maison Edition</a></li>
                        <li><a href=\"\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/delete.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Maison Edition</a></li>


                    </ul>
                </li>

                <li>
                    <a href=\"#sm_rec\" data-toggle=\"collapse\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/recla.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Reclamation
                    </a>
                    <ul id=\"sm_rec\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/addAuteur.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/maison.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>


                <!--<li><a href=\"\"><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/recla.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\"> Reclamation</a></li> -->
                <li>
                    <a href=\"#sm_book\" data-toggle=\"collapse\"><img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/books.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Des Livres
                    </a>
                    <ul id=\"sm_book\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/addAuteur.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/maison.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>

                <li>
                    <a href=\"#sm_echange\" data-toggle=\"collapse\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/echange.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Des Echanges
                    </a>
                    <ul id=\"sm_echange\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/addAuteur.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/maison.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>

                <li>
                    <a href=\"#sm_locaux\" data-toggle=\"collapse\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/local.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Des Locaux
                    </a>
                    <ul id=\"sm_locaux\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/addAuteur.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/maison.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>
                <li>
                    <a href=\"#sm_auteurs\" data-toggle=\"collapse\"><img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/author.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Des Auteurs
                    </a>
                    <ul id=\"sm_auteurs\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/addAuteur.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/delete.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>
                <li>
                    <a href=\"#sm_emprunt\" data-toggle=\"collapse\"><img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/emprunt.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Des Emprunts
                    </a>
                    <ul id=\"sm_emprunt\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/addAuteur.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icons/delete.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>
            </ul>
        </div>

        <div class=\"content p-4\">
            ";
        // line 223
        $this->displayBlock('container', $context, $blocks);
        // line 224
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 223
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::baseAdmin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  483 => 229,  466 => 223,  453 => 224,  451 => 223,  439 => 214,  435 => 213,  428 => 209,  419 => 203,  415 => 202,  408 => 198,  399 => 192,  395 => 191,  388 => 187,  378 => 180,  374 => 179,  367 => 175,  357 => 168,  353 => 167,  346 => 163,  341 => 161,  331 => 154,  327 => 153,  320 => 149,  310 => 142,  306 => 141,  299 => 137,  293 => 134,  284 => 128,  280 => 127,  273 => 123,  263 => 116,  259 => 115,  252 => 111,  234 => 96,  224 => 89,  219 => 86,  210 => 85,  138 => 20,  134 => 19,  130 => 18,  126 => 17,  122 => 16,  118 => 15,  112 => 12,  108 => 11,  104 => 10,  100 => 9,  96 => 8,  93 => 7,  84 => 6,  66 => 5,  54 => 231,  52 => 229,  49 => 228,  47 => 85,  42 => 82,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}

        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/fontawesome-all.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/fullcalendar.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootadmin.min.css')}}\">


        <script src=\"{{ asset('js/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('js/bootstrap.bundle.min.js')}}\"></script>
        <script src=\"{{ asset('js/datatables.min.js')}}\"></script>
        <script src=\"{{ asset('js/moment.min.js')}}\"></script>
        <script src=\"{{ asset('js/fullcalendar.min.js')}}\"></script>
        <script src=\"{{ asset('js/bootadmin.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
        <script type=\"text/javascript\">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart3);
            google.charts.setOnLoadCallback(drawChart4);

            function drawChart3() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Sales', 'Expenses'],
                    ['2013', 1000, 400],
                    ['2014', 1170, 460],
                    ['2015', 660, 1120],
                    ['2016', 1030, 540]
                ]);

                var options = {
                    title: 'Company Performance',
                    hAxis: {title: 'Year', titleTextStyle: {color: '#333'}},
                    vAxis: {minValue: 0}
                };

                var chart = new google.visualization.AreaChart(document.getElementById('chart_div_3'));
                chart.draw(data, options);
            }

            function drawChart4() {
                var data = google.visualization.arrayToDataTable([
                    ['Country', 'Popularity'],
                    ['Germany', 200],
                    ['United States', 300],
                    ['Brazil', 400],
                    ['Canada', 500],
                    ['France', 600],
                    ['RU', 700]
                ]);

                var options = {};

                var chart = new google.visualization.GeoChart(document.getElementById('chart_div_4'));

                chart.draw(data, options);
            }
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

</head>
<body class=\"bg-light\">
{% block header %}

    <nav class=\"navbar navbar-expand navbar-dark bg-primary\">
        <a class=\"sidebar-toggle mr-3\" href=\"#\"></a>
        <a class=\"navbar-brand\" href=\"https://bootadmin.net\"><img src=\"{{ asset('icons/ubook.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">U_Book Store</a>

        <div class=\"navbar-collapse collapse\">
            <ul class=\"navbar-nav ml-auto\">


                <li class=\"nav-item dropdown\">
                    <a href=\"#\" id=\"dd_user\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"{{ asset('icons/zeus.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\"> Equipe Zeus</a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dd_user\">
                        <a href=\"#\" class=\"dropdown-item\">Profile</a>
                        <a href=\"#\" class=\"dropdown-item\">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class=\"d-flex\">
        <div class=\"sidebar sidebar-dark bg-dark\">
            <ul class=\"list-unstyled\">

                <li>
                    <a href=\"#sm_base\" data-toggle=\"collapse\"><img src=\"{{ asset('icons/users.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Membre
                    </a>
                    <ul id=\"sm_base\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"{{ asset('icons/addAuteur.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"{{ asset('icons/delete.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>

                <li>
                    <a href=\"#sm_evenement\" data-toggle=\"collapse\"><img src=\"{{ asset('icons/event.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Evenement
                    </a>
                    <ul id=\"sm_evenement\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"{{ asset('icons/addAuteur.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"{{ asset('icons/delete.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>

                <li><a href=\"\"><img src=\"{{ asset('icons/forum.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\"> Gestion Forum</a></li>

                <li>
                    <a href=\"#sm_maison\" data-toggle=\"collapse\"><img src=\"{{ asset('icons/maison.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Maison Edition
                    </a>
                    <ul id=\"sm_maison\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"{{ asset('icons/addAuteur.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">Ajouter Maison Edition</a></li>
                        <li><a href=\"\"><img src=\"{{ asset('icons/delete.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Maison Edition</a></li>


                    </ul>
                </li>

                <li>
                    <a href=\"#sm_rec\" data-toggle=\"collapse\"><img src=\"{{ asset('icons/recla.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Reclamation
                    </a>
                    <ul id=\"sm_rec\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"{{ asset('icons/addAuteur.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"{{ asset('icons/maison.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>


                <!--<li><a href=\"\"><img src=\"{{ asset('icons/recla.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\"> Reclamation</a></li> -->
                <li>
                    <a href=\"#sm_book\" data-toggle=\"collapse\"><img src=\"{{ asset('icons/books.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Des Livres
                    </a>
                    <ul id=\"sm_book\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"{{ asset('icons/addAuteur.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"{{ asset('icons/maison.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>

                <li>
                    <a href=\"#sm_echange\" data-toggle=\"collapse\"><img src=\"{{ asset('icons/echange.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Des Echanges
                    </a>
                    <ul id=\"sm_echange\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"{{ asset('icons/addAuteur.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"{{ asset('icons/maison.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>

                <li>
                    <a href=\"#sm_locaux\" data-toggle=\"collapse\"><img src=\"{{ asset('icons/local.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Des Locaux
                    </a>
                    <ul id=\"sm_locaux\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"{{ asset('icons/addAuteur.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"{{ asset('icons/maison.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>
                <li>
                    <a href=\"#sm_auteurs\" data-toggle=\"collapse\"><img src=\"{{ asset('icons/author.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Des Auteurs
                    </a>
                    <ul id=\"sm_auteurs\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"{{ asset('icons/addAuteur.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"{{ asset('icons/delete.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>
                <li>
                    <a href=\"#sm_emprunt\" data-toggle=\"collapse\"><img src=\"{{ asset('icons/emprunt.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">
                        Gestion Des Emprunts
                    </a>
                    <ul id=\"sm_emprunt\" class=\"list-unstyled collapse\">
                        <li><a href=\"http://localhost/phpmyadmin/index.php\"><img src=\"{{ asset('icons/addAuteur.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">  Ajouter Membre</a></li>
                        <li><a href=\"\"><img src=\"{{ asset('icons/delete.png') }}\" alt=\"logo\" width=\"20px\" height=\"20px\">Supprimer Membre</a></li>


                    </ul>
                </li>
            </ul>
        </div>

        <div class=\"content p-4\">
            {% block container %}{% endblock %}
        </div>
    </div>

{% endblock %}

{% block javascripts %}
{% endblock %}
</body>
</html>
", "::baseAdmin.html.twig", "C:\\wamp64\\www\\project\\app/Resources\\views/baseAdmin.html.twig");
    }
}
