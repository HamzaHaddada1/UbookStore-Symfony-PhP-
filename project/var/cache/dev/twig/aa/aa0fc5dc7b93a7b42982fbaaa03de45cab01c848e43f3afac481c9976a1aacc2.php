<?php

/* ContactBundle:Default:index.html.twig */
class __TwigTemplate_653736d43473427f8ece55f60fe4c771022c08cc77fa90045d1976f46268fe2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "ContactBundle:Default:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactBundle:Default:index.html.twig"));

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
        echo "    <div class=\"ht__bradcaump__area bg-image--6\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"bradcaump__inner text-center\">
                        <h2 class=\"bradcaump-title\">Contact Us</h2>
                        <nav class=\"bradcaump-content\">
                            <a class=\"breadcrumb_item\" href=\"index.html\">Home</a>
                            <span class=\"brd-separetor\">/</span>
                            <span class=\"breadcrumb_item active\">Contact Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Contact Area -->
    <section class=\"wn_contact_area bg--white pt--80 pb--80\">
        <div class=\"google__map pb--80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div id=\"googleMap\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-12\">
                    <div class=\"contact-form-wrap\">
                        <h2 class=\"contact__title\">Get in touch</h2>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
                        <form id=\"contact-form\" action=\"#\" method=\"post\">
                            <div class=\"single-contact-form space-between\">
                                <input type=\"text\" name=\"firstname\" placeholder=\"First Name*\">
                                <input type=\"text\" name=\"lastname\" placeholder=\"Last Name*\">
                            </div>
                            <div class=\"single-contact-form space-between\">
                                <input type=\"email\" name=\"email\" placeholder=\"Email*\">
                                <input type=\"text\" name=\"website\" placeholder=\"Website*\">
                            </div>
                            <div class=\"single-contact-form\">
                                <input type=\"text\" name=\"subject\" placeholder=\"Subject*\">
                            </div>
                            <div class=\"single-contact-form message\">
                                <textarea name=\"message\" placeholder=\"Type your message here..\"></textarea>
                            </div>
                            <div class=\"contact-btn\">
                                <button type=\"submit\">Send Email</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"form-output\">
                        <p class=\"form-messege\">
                    </div>
                </div>
                <div class=\"col-lg-4 col-12 md-mt-40 sm-mt-40\">
                    <div class=\"wn__address\">
                        <h2 class=\"contact__title\">Get office info.</h2>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
                        <div class=\"wn__addres__wreapper\">

                            <div class=\"single__address\">
                                <i class=\"icon-location-pin icons\"></i>
                                <div class=\"content\">
                                    <span>address:</span>
                                    <p>666 5th Ave New York, NY, United</p>
                                </div>
                            </div>

                            <div class=\"single__address\">
                                <i class=\"icon-phone icons\"></i>
                                <div class=\"content\">
                                    <span>Phone Number:</span>
                                    <p>716-298-1822</p>
                                </div>
                            </div>

                            <div class=\"single__address\">
                                <i class=\"icon-envelope icons\"></i>
                                <div class=\"content\">
                                    <span>Email address:</span>
                                    <p>716-298-1822</p>
                                </div>
                            </div>

                            <div class=\"single__address\">
                                <i class=\"icon-globe icons\"></i>
                                <div class=\"content\">
                                    <span>website address:</span>
                                    <p>716-298-1822</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ContactBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
{% block content %}
    <div class=\"ht__bradcaump__area bg-image--6\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"bradcaump__inner text-center\">
                        <h2 class=\"bradcaump-title\">Contact Us</h2>
                        <nav class=\"bradcaump-content\">
                            <a class=\"breadcrumb_item\" href=\"index.html\">Home</a>
                            <span class=\"brd-separetor\">/</span>
                            <span class=\"breadcrumb_item active\">Contact Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Contact Area -->
    <section class=\"wn_contact_area bg--white pt--80 pb--80\">
        <div class=\"google__map pb--80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div id=\"googleMap\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-12\">
                    <div class=\"contact-form-wrap\">
                        <h2 class=\"contact__title\">Get in touch</h2>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
                        <form id=\"contact-form\" action=\"#\" method=\"post\">
                            <div class=\"single-contact-form space-between\">
                                <input type=\"text\" name=\"firstname\" placeholder=\"First Name*\">
                                <input type=\"text\" name=\"lastname\" placeholder=\"Last Name*\">
                            </div>
                            <div class=\"single-contact-form space-between\">
                                <input type=\"email\" name=\"email\" placeholder=\"Email*\">
                                <input type=\"text\" name=\"website\" placeholder=\"Website*\">
                            </div>
                            <div class=\"single-contact-form\">
                                <input type=\"text\" name=\"subject\" placeholder=\"Subject*\">
                            </div>
                            <div class=\"single-contact-form message\">
                                <textarea name=\"message\" placeholder=\"Type your message here..\"></textarea>
                            </div>
                            <div class=\"contact-btn\">
                                <button type=\"submit\">Send Email</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"form-output\">
                        <p class=\"form-messege\">
                    </div>
                </div>
                <div class=\"col-lg-4 col-12 md-mt-40 sm-mt-40\">
                    <div class=\"wn__address\">
                        <h2 class=\"contact__title\">Get office info.</h2>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
                        <div class=\"wn__addres__wreapper\">

                            <div class=\"single__address\">
                                <i class=\"icon-location-pin icons\"></i>
                                <div class=\"content\">
                                    <span>address:</span>
                                    <p>666 5th Ave New York, NY, United</p>
                                </div>
                            </div>

                            <div class=\"single__address\">
                                <i class=\"icon-phone icons\"></i>
                                <div class=\"content\">
                                    <span>Phone Number:</span>
                                    <p>716-298-1822</p>
                                </div>
                            </div>

                            <div class=\"single__address\">
                                <i class=\"icon-envelope icons\"></i>
                                <div class=\"content\">
                                    <span>Email address:</span>
                                    <p>716-298-1822</p>
                                </div>
                            </div>

                            <div class=\"single__address\">
                                <i class=\"icon-globe icons\"></i>
                                <div class=\"content\">
                                    <span>website address:</span>
                                    <p>716-298-1822</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

{% endblock %}", "ContactBundle:Default:index.html.twig", "C:\\wamp64\\www\\project\\src\\ContactBundle/Resources/views/Default/index.html.twig");
    }
}