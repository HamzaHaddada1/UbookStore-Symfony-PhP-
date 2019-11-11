<?php

/* @Echange/Default/test.html.twig */
class __TwigTemplate_075a5dfb13aa104a12e0871a63655f5c92ba6d2d94e915fde60722c5d45de52f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Echange/Default/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Echange/Default/test.html.twig"));

        // line 1
        echo "<table>
    <tr>
        <td> Livre Propose </td>
        <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "idprop", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td> Livre demande </td>
        <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "iddem", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td> Etat des livre </td>
        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "stat", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td> description </td>
        <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "descr", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td> Num de contact </td>
        <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "numcontact", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td> Num de contact </td>
        <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["echange"] ?? $this->getContext($context, "echange")), "lieuech", array()), "html", null, true);
        echo "</td>
    </tr>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Echange/Default/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  58 => 20,  51 => 16,  44 => 12,  37 => 8,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table>
    <tr>
        <td> Livre Propose </td>
        <td>{{ echange.idprop }}</td>
    </tr>
    <tr>
        <td> Livre demande </td>
        <td>{{ echange.iddem }}</td>
    </tr>
    <tr>
        <td> Etat des livre </td>
        <td>{{ echange.stat }}</td>
    </tr>
    <tr>
        <td> description </td>
        <td>{{ echange.descr }}</td>
    </tr>
    <tr>
        <td> Num de contact </td>
        <td>{{ echange.numcontact }}</td>
    </tr>
    <tr>
        <td> Num de contact </td>
        <td>{{ echange.lieuech }}</td>
    </tr>
</table>", "@Echange/Default/test.html.twig", "C:\\wamp64\\www\\project\\src\\EchangeBundle\\Resources\\views\\Default\\test.html.twig");
    }
}
