<?php

/* @Panier/Default/404.html.twig */
class __TwigTemplate_d6790a956ec468485037cc6d9c7d8e2096c5ebc24834a0e63bad6723a8f7da68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "@Panier/Default/404.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div style=\"height: 100px\">

    </div>
    <!-- Start Error Area -->
    <section class=\"page_error section-padding--lg bg--white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"error__inner text-center\">
                        <div class=\"error__logo\">
                            <a href=\"#\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/others/404.jpg"), "html", null, true);
        echo "\" alt=\"error images\"></a>
                        </div>
                        <div class=\"error__content\">
                            <h2>Erreur - 404</h2>
                            <p>Veullier essayer de vous connecter</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Error Area -->
";
    }

    public function getTemplateName()
    {
        return "@Panier/Default/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Panier/Default/404.html.twig", "C:\\wamp64\\www\\project\\src\\PanierBundle\\Resources\\views\\Default\\404.html.twig");
    }
}
