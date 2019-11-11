<?php

/* NomayaSocialBundle:Links:socialLinks.html.twig */
class __TwigTemplate_32e27ebf32624470660850fe11b4757e70ea428835823a824cc1344b5faa9e82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Links:socialLinks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Links:socialLinks.html.twig"));

        // line 1
        echo "  
";
        // line 2
        if ( !(($context["facebook"] ?? $this->getContext($context, "facebook")) === false)) {
            // line 3
            echo "    <span class=\"link facebookLink\">
      ";
            // line 4
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("facebook", ($context["facebook"] ?? $this->getContext($context, "facebook")));
            echo "
    </span>
";
        }
        // line 7
        echo "
";
        // line 8
        if ( !(($context["googleplus"] ?? $this->getContext($context, "googleplus")) === false)) {
            // line 9
            echo "    <span class=\"link googleplusLink\">
      ";
            // line 10
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("googleplus", ($context["googleplus"] ?? $this->getContext($context, "googleplus")));
            echo "
    </span>
";
        }
        // line 13
        echo "
";
        // line 14
        if ( !(($context["twitter"] ?? $this->getContext($context, "twitter")) === false)) {
            // line 15
            echo "    <span class=\"link twitterLink\">
      ";
            // line 16
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("twitter", ($context["twitter"] ?? $this->getContext($context, "twitter")));
            echo "
    </span>
";
        }
        // line 19
        echo "
";
        // line 20
        if ( !(($context["linkedin"] ?? $this->getContext($context, "linkedin")) === false)) {
            // line 21
            echo "    <span class=\"link linkedinLink\">
      ";
            // line 22
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("linkedin", ($context["linkedin"] ?? $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 25
        echo "
";
        // line 26
        if ( !(($context["tumblr"] ?? $this->getContext($context, "tumblr")) === false)) {
            // line 27
            echo "    <span class=\"link tumblrLink\">
      ";
            // line 28
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("tumblr", ($context["linkedin"] ?? $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 31
        echo "
";
        // line 32
        if ( !(($context["pinterest"] ?? $this->getContext($context, "pinterest")) === false)) {
            // line 33
            echo "    <span class=\"link pinterestLink\">
      ";
            // line 34
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("pinterest", ($context["linkedin"] ?? $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 37
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Links:socialLinks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  103 => 34,  100 => 33,  98 => 32,  95 => 31,  89 => 28,  86 => 27,  84 => 26,  81 => 25,  75 => 22,  72 => 21,  70 => 20,  67 => 19,  61 => 16,  58 => 15,  56 => 14,  53 => 13,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  33 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  
{% if facebook is not sameas(false) %}
    <span class=\"link facebookLink\">
      {{ socialLink('facebook',facebook) }}
    </span>
{% endif %}

{% if googleplus is not sameas(false) %}
    <span class=\"link googleplusLink\">
      {{ socialLink('googleplus',googleplus) }}
    </span>
{% endif %}

{% if twitter is not sameas(false) %}
    <span class=\"link twitterLink\">
      {{ socialLink('twitter',twitter) }}
    </span>
{% endif %}

{% if linkedin is not sameas(false) %}
    <span class=\"link linkedinLink\">
      {{ socialLink('linkedin',linkedin) }}
    </span>
{% endif %}

{% if tumblr is not sameas(false) %}
    <span class=\"link tumblrLink\">
      {{ socialLink('tumblr',linkedin) }}
    </span>
{% endif %}

{% if pinterest is not sameas(false) %}
    <span class=\"link pinterestLink\">
      {{ socialLink('pinterest',linkedin) }}
    </span>
{% endif %}

", "NomayaSocialBundle:Links:socialLinks.html.twig", "C:\\wamp64\\www\\project\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/views/Links/socialLinks.html.twig");
    }
}
