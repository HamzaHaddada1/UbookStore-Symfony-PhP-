<?php

/* @Panier\Default\panier.html.twig */
class __TwigTemplate_e7f5ad59e9c1a144d509bef69f4253b2cbe902e48d89632e4b82bb217ed2d04e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseClient.html.twig", "@Panier\\Default\\panier.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Panier\\Default\\panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Panier\\Default\\panier.html.twig"));

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
        echo "    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area bg-image--3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"bradcaump__inner text-center\">
                        <h2 class=\"bradcaump-title\">Shopping Cart</h2>
                        <nav class=\"bradcaump-content\">
                            <a class=\"breadcrumb_item\" href=\"index.html\">Home</a>
                            <span class=\"brd-separetor\">/</span>
                            <span class=\"breadcrumb_item active\">Shopping Cart</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class=\"cart-main-area section-padding--lg bg--white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 ol-lg-12\">
                    <form action=\"#\">
                        <div class=\"table-content wnro__table table-responsive\">
                            <table>
                                <thead>
                                <tr class=\"title-top\">
                                    <th class=\"product-thumbnail\">Image</th>
                                    <th class=\"product-name\">Livre</th>
                                    <th class=\"product-price\">Prix</th>
                                    <th class=\"product-quantity\">Quantité</th>
                                    <th class=\"product-subtotal\">Total</th>
                                    <th class=\"product-remove\">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"product-thumbnail\"><a href=\"#\"><img src=\"images/product/sm-3/1.jpg\" alt=\"product img\"></a></td>
                                    <td class=\"product-name\"><a href=\"#\">Natoque penatibus</a></td>
                                    <td class=\"product-price\"><span class=\"amount\">\$165.00</span></td>
                                    <td class=\"product-quantity\"><input type=\"number\" value=\"1\" min=\"1\"></td>
                                    <td class=\"product-subtotal\">\$165.00</td>
                                    <td class=\"product-remove\"><a href=\"#\">X</a></td>
                                </tr>
                                <tr>
                                    <td class=\"product-thumbnail\"><a href=\"#\"><img src=\"images/product/sm-3/2.jpg\" alt=\"product img\"></a></td>
                                    <td class=\"product-name\"><a href=\"#\">Quisque fringilla</a></td>
                                    <td class=\"product-price\"><span class=\"amount\">\$50.00</span></td>
                                    <td class=\"product-quantity\"><input type=\"number\" value=\"1\" min=\"1\"></td>
                                    <td class=\"product-subtotal\">\$50.00</td>
                                    <td class=\"product-remove\"><a href=\"#\">X</a></td>
                                </tr>
                                <tr>
                                    <td class=\"product-thumbnail\"><a href=\"#\"><img src=\"images/product/sm-3/3.jpg\" alt=\"product img\"></a></td>
                                    <td class=\"product-name\"><a href=\"#\">Vestibulum suscipit</a></td>
                                    <td class=\"product-price\"><span class=\"amount\">\$50.00</span></td>
                                    <td class=\"product-quantity\"><input type=\"number\" value=\"1\" min=\"1\"></td>
                                    <td class=\"product-subtotal\">\$50.00</td>
                                    <td class=\"product-remove\"><a href=\"#\">X</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class=\"cartbox__btn\">
                        <ul class=\"cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between\">
                            <li><a href=\"#\">Coupon Code</a></li>
                            <li><a href=\"#\">Apply Code</a></li>
                            <li><a href=\"#\">Update Cart</a></li>
                            <li><a href=\"#\">Check Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-6\">
                    <div class=\"cartbox__total__area\">
                        <div class=\"cartbox-total d-flex justify-content-between\">
                            <ul class=\"cart__total__list\">
                                <li>Cart total</li>
                                <li>Sub Total</li>
                            </ul>
                            <ul class=\"cart__total__tk\">
                                <li>\$70</li>
                                <li>\$70</li>
                            </ul>
                        </div>
                        <div class=\"cart__total__amount\">
                            <span>Grand Total</span>
                            <span>\$140</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Panier\\Default\\panier.html.twig";
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
    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area bg-image--3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"bradcaump__inner text-center\">
                        <h2 class=\"bradcaump-title\">Shopping Cart</h2>
                        <nav class=\"bradcaump-content\">
                            <a class=\"breadcrumb_item\" href=\"index.html\">Home</a>
                            <span class=\"brd-separetor\">/</span>
                            <span class=\"breadcrumb_item active\">Shopping Cart</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class=\"cart-main-area section-padding--lg bg--white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 ol-lg-12\">
                    <form action=\"#\">
                        <div class=\"table-content wnro__table table-responsive\">
                            <table>
                                <thead>
                                <tr class=\"title-top\">
                                    <th class=\"product-thumbnail\">Image</th>
                                    <th class=\"product-name\">Livre</th>
                                    <th class=\"product-price\">Prix</th>
                                    <th class=\"product-quantity\">Quantité</th>
                                    <th class=\"product-subtotal\">Total</th>
                                    <th class=\"product-remove\">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"product-thumbnail\"><a href=\"#\"><img src=\"images/product/sm-3/1.jpg\" alt=\"product img\"></a></td>
                                    <td class=\"product-name\"><a href=\"#\">Natoque penatibus</a></td>
                                    <td class=\"product-price\"><span class=\"amount\">\$165.00</span></td>
                                    <td class=\"product-quantity\"><input type=\"number\" value=\"1\" min=\"1\"></td>
                                    <td class=\"product-subtotal\">\$165.00</td>
                                    <td class=\"product-remove\"><a href=\"#\">X</a></td>
                                </tr>
                                <tr>
                                    <td class=\"product-thumbnail\"><a href=\"#\"><img src=\"images/product/sm-3/2.jpg\" alt=\"product img\"></a></td>
                                    <td class=\"product-name\"><a href=\"#\">Quisque fringilla</a></td>
                                    <td class=\"product-price\"><span class=\"amount\">\$50.00</span></td>
                                    <td class=\"product-quantity\"><input type=\"number\" value=\"1\" min=\"1\"></td>
                                    <td class=\"product-subtotal\">\$50.00</td>
                                    <td class=\"product-remove\"><a href=\"#\">X</a></td>
                                </tr>
                                <tr>
                                    <td class=\"product-thumbnail\"><a href=\"#\"><img src=\"images/product/sm-3/3.jpg\" alt=\"product img\"></a></td>
                                    <td class=\"product-name\"><a href=\"#\">Vestibulum suscipit</a></td>
                                    <td class=\"product-price\"><span class=\"amount\">\$50.00</span></td>
                                    <td class=\"product-quantity\"><input type=\"number\" value=\"1\" min=\"1\"></td>
                                    <td class=\"product-subtotal\">\$50.00</td>
                                    <td class=\"product-remove\"><a href=\"#\">X</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class=\"cartbox__btn\">
                        <ul class=\"cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between\">
                            <li><a href=\"#\">Coupon Code</a></li>
                            <li><a href=\"#\">Apply Code</a></li>
                            <li><a href=\"#\">Update Cart</a></li>
                            <li><a href=\"#\">Check Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-6\">
                    <div class=\"cartbox__total__area\">
                        <div class=\"cartbox-total d-flex justify-content-between\">
                            <ul class=\"cart__total__list\">
                                <li>Cart total</li>
                                <li>Sub Total</li>
                            </ul>
                            <ul class=\"cart__total__tk\">
                                <li>\$70</li>
                                <li>\$70</li>
                            </ul>
                        </div>
                        <div class=\"cart__total__amount\">
                            <span>Grand Total</span>
                            <span>\$140</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->

{% endblock %}", "@Panier\\Default\\panier.html.twig", "C:\\wamp64\\www\\project\\src\\PanierBundle\\Resources\\views\\Default\\panier.html.twig");
    }
}
