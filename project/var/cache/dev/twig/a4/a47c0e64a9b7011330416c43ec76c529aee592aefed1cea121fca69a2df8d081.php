<?php

/* @jjalvarezlPDFjsViewer/viewer/custom.html.twig */
class __TwigTemplate_5c3c44e0374d31494f4e184d39b1a36f8c0fe4f8f3beb69daafdbeb87b7a3eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("jjalvarezlPDFjsViewerBundle:viewer:default.html.twig", "@jjalvarezlPDFjsViewer/viewer/custom.html.twig", 1);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "jjalvarezlPDFjsViewerBundle:viewer:default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@jjalvarezlPDFjsViewer/viewer/custom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@jjalvarezlPDFjsViewer/viewer/custom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {

            //Options for hiding right the entire toolbar
            ";
        // line 8
        if (( !(isset($context["showToolBar"]) || array_key_exists("showToolBar", $context)) || (($context["showToolBar"] ?? $this->getContext($context, "showToolBar")) != true))) {
            // line 9
            echo "                \$('#toolbarContainer').hide();
            ";
        }
        // line 11
        echo "
            //Options for hiding left section of the toolbar

            //Hiding leftbar button option
            ";
        // line 15
        if (( !(isset($context["showLeftToolbarButton"]) || array_key_exists("showLeftToolbarButton", $context)) || (($context["showLeftToolbarButton"] ?? $this->getContext($context, "showLeftToolbarButton")) != true))) {
            // line 16
            echo "                \$('#sidebarToggle').hide();
            ";
        }
        // line 18
        echo "
            //Hiding search in document button
            ";
        // line 20
        if (( !(isset($context["showSearchInDocumentButton"]) || array_key_exists("showSearchInDocumentButton", $context)) || (($context["showSearchInDocumentButton"] ?? $this->getContext($context, "showSearchInDocumentButton")) != true))) {
            // line 21
            echo "                \$('#viewFind').hide();
            ";
        }
        // line 23
        echo "
            //Hiding previous page button
            ";
        // line 25
        if (( !(isset($context["showPreviousPageButton"]) || array_key_exists("showPreviousPageButton", $context)) || (($context["showPreviousPageButton"] ?? $this->getContext($context, "showPreviousPageButton")) != true))) {
            // line 26
            echo "                \$('#previous').hide();
            ";
        }
        // line 28
        echo "
            //Hiding next page button
            ";
        // line 30
        if (( !(isset($context["showPreviousPageButton"]) || array_key_exists("showPreviousPageButton", $context)) || (($context["showPreviousPageButton"] ?? $this->getContext($context, "showPreviousPageButton")) != true))) {
            // line 31
            echo "                \$('#next').hide();
            ";
        }
        // line 33
        echo "
            //Hiding find page input text
            ";
        // line 35
        if (( !(isset($context["showFindPageInputText"]) || array_key_exists("showFindPageInputText", $context)) || (($context["showFindPageInputText"] ?? $this->getContext($context, "showFindPageInputText")) != true))) {
            // line 36
            echo "                \$('#pageNumber').hide();
            ";
        }
        // line 38
        echo "
            //Hiding number of pages label
            ";
        // line 40
        if (( !(isset($context["showNumberOfPagesLabel"]) || array_key_exists("showNumberOfPagesLabel", $context)) || (($context["showNumberOfPagesLabel"] ?? $this->getContext($context, "showNumberOfPagesLabel")) != true))) {
            // line 41
            echo "                \$('#numPages').hide();
            ";
        }
        // line 43
        echo "
            //Options for hiding the middle of the toolbar

            //Hiding zoom in button:
            ";
        // line 47
        if (( !(isset($context["showZoomInButton"]) || array_key_exists("showZoomInButton", $context)) || (($context["showZoomInButton"] ?? $this->getContext($context, "showZoomInButton")) != true))) {
            // line 48
            echo "                \$('#zoomIn').hide();
            ";
        }
        // line 50
        echo "
            //Hiding zoom out button:
            ";
        // line 52
        if (( !(isset($context["showZoomOutButton"]) || array_key_exists("showZoomOutButton", $context)) || (($context["showZoomOutButton"] ?? $this->getContext($context, "showZoomOutButton")) != true))) {
            // line 53
            echo "                \$('#zoomOut').hide();
            ";
        }
        // line 55
        echo "
            //Hiding scale select combobox:
            ";
        // line 57
        if (( !(isset($context["showScaleSelectComboBox"]) || array_key_exists("showScaleSelectComboBox", $context)) || (($context["showScaleSelectComboBox"] ?? $this->getContext($context, "showScaleSelectComboBox")) != true))) {
            // line 58
            echo "                \$('#scaleSelectContainer').addClass(\"hidden\");
            ";
        }
        // line 60
        echo "

            //Options for hiding right section of the toolbar

            //Hiding presentation mode button
            ";
        // line 65
        if (( !(isset($context["showPresentationModeButton"]) || array_key_exists("showPresentationModeButton", $context)) || (($context["showPresentationModeButton"] ?? $this->getContext($context, "showPresentationModeButton")) != true))) {
            // line 66
            echo "                \$('#presentationMode').hide();
            ";
        }
        // line 68
        echo "
            //Hiding open file button
            ";
        // line 70
        if (( !(isset($context["showOpenFileButton"]) || array_key_exists("showOpenFileButton", $context)) || (($context["showOpenFileButton"] ?? $this->getContext($context, "showOpenFileButton")) != true))) {
            // line 71
            echo "            \$('#openFile').hide();
            ";
        }
        // line 73
        echo "
            //Hiding print button
            ";
        // line 75
        if (( !(isset($context["showPrintButton"]) || array_key_exists("showPrintButton", $context)) || (($context["showPrintButton"] ?? $this->getContext($context, "showPrintButton")) != true))) {
            // line 76
            echo "                \$('#print').hide();
            ";
        }
        // line 78
        echo "
            //Hiding download button
            ";
        // line 80
        if (( !(isset($context["showDownloadButton"]) || array_key_exists("showDownloadButton", $context)) || (($context["showDownloadButton"] ?? $this->getContext($context, "showDownloadButton")) != true))) {
            // line 81
            echo "                \$('#download').hide();
            ";
        }
        // line 83
        echo "
            //Hiding view bookmark button
            ";
        // line 85
        if (( !(isset($context["showViewBookmarkButton"]) || array_key_exists("showViewBookmarkButton", $context)) || (($context["showViewBookmarkButton"] ?? $this->getContext($context, "showViewBookmarkButton")) != true))) {
            // line 86
            echo "                \$('#viewBookmark').hide();
            ";
        }
        // line 88
        echo "
            //Hiding view bookmark button
            ";
        // line 90
        if (( !(isset($context["showToolsButton"]) || array_key_exists("showToolsButton", $context)) || (($context["showToolsButton"] ?? $this->getContext($context, "showToolsButton")) != true))) {
            // line 91
            echo "                \$('#secondaryToolbarToggle').hide();
            ";
        }
        // line 93
        echo "        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@jjalvarezlPDFjsViewer/viewer/custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 93,  214 => 91,  212 => 90,  208 => 88,  204 => 86,  202 => 85,  198 => 83,  194 => 81,  192 => 80,  188 => 78,  184 => 76,  182 => 75,  178 => 73,  174 => 71,  172 => 70,  168 => 68,  164 => 66,  162 => 65,  155 => 60,  151 => 58,  149 => 57,  145 => 55,  141 => 53,  139 => 52,  135 => 50,  131 => 48,  129 => 47,  123 => 43,  119 => 41,  117 => 40,  113 => 38,  109 => 36,  107 => 35,  103 => 33,  99 => 31,  97 => 30,  93 => 28,  89 => 26,  87 => 25,  83 => 23,  79 => 21,  77 => 20,  73 => 18,  69 => 16,  67 => 15,  61 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"jjalvarezlPDFjsViewerBundle:viewer:default.html.twig\" %}

{% block javascript %}
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            //Options for hiding right the entire toolbar
            {% if showToolBar is not defined or showToolBar != true %}
                \$('#toolbarContainer').hide();
            {% endif %}

            //Options for hiding left section of the toolbar

            //Hiding leftbar button option
            {% if showLeftToolbarButton is not defined or showLeftToolbarButton != true %}
                \$('#sidebarToggle').hide();
            {% endif %}

            //Hiding search in document button
            {% if showSearchInDocumentButton is not defined or showSearchInDocumentButton != true %}
                \$('#viewFind').hide();
            {% endif %}

            //Hiding previous page button
            {% if showPreviousPageButton is not defined or showPreviousPageButton != true %}
                \$('#previous').hide();
            {% endif %}

            //Hiding next page button
            {% if showPreviousPageButton is not defined or showPreviousPageButton != true %}
                \$('#next').hide();
            {% endif %}

            //Hiding find page input text
            {% if showFindPageInputText is not defined or showFindPageInputText != true %}
                \$('#pageNumber').hide();
            {% endif %}

            //Hiding number of pages label
            {% if showNumberOfPagesLabel is not defined or showNumberOfPagesLabel != true %}
                \$('#numPages').hide();
            {% endif %}

            //Options for hiding the middle of the toolbar

            //Hiding zoom in button:
            {% if showZoomInButton is not defined or showZoomInButton != true %}
                \$('#zoomIn').hide();
            {% endif %}

            //Hiding zoom out button:
            {% if showZoomOutButton is not defined or showZoomOutButton != true %}
                \$('#zoomOut').hide();
            {% endif %}

            //Hiding scale select combobox:
            {% if showScaleSelectComboBox is not defined or showScaleSelectComboBox != true %}
                \$('#scaleSelectContainer').addClass(\"hidden\");
            {% endif %}


            //Options for hiding right section of the toolbar

            //Hiding presentation mode button
            {% if showPresentationModeButton is not defined or showPresentationModeButton != true %}
                \$('#presentationMode').hide();
            {% endif %}

            //Hiding open file button
            {% if showOpenFileButton is not defined or showOpenFileButton != true %}
            \$('#openFile').hide();
            {% endif %}

            //Hiding print button
            {% if showPrintButton is not defined or showPrintButton != true %}
                \$('#print').hide();
            {% endif %}

            //Hiding download button
            {% if showDownloadButton is not defined or showDownloadButton != true %}
                \$('#download').hide();
            {% endif %}

            //Hiding view bookmark button
            {% if showViewBookmarkButton is not defined or showViewBookmarkButton != true %}
                \$('#viewBookmark').hide();
            {% endif %}

            //Hiding view bookmark button
            {% if showToolsButton is not defined or showToolsButton != true %}
                \$('#secondaryToolbarToggle').hide();
            {% endif %}
        });

    </script>
{% endblock %}", "@jjalvarezlPDFjsViewer/viewer/custom.html.twig", "C:\\wamp64\\www\\project\\vendor\\jjalvarezl\\pdfjs-viewer-bundle\\jjalvarezl\\PDFjsViewerBundle\\Resources\\views\\viewer\\custom.html.twig");
    }
}
