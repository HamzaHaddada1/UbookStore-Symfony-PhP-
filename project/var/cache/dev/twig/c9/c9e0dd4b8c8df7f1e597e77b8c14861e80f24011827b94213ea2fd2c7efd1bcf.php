<?php

/* EvenementBundle:Default:mailform.html.twig */
class __TwigTemplate_5eda6a97c840476e601eb60ce2061991f58483a28d1bad87249cdabacf40c40d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:mailform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:mailform.html.twig"));

        // line 1
        echo "<body>
<h2> <strong> Formulaire De Contact</strong> </h2>
<hr>
<h3><p> Contacter nous </p></h3>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<table>
    <tr>
        <td> Nom </td>
        <td> ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget');
        echo " </td>
    </tr>
    <tr>
        <td> Prenom </td>
        <td> ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo " </td>
    </tr>
    <tr>
        <td> Téléphone </td>
        <td> ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'widget');
        echo " </td>
    </tr>
    <tr>
        <td> Email </td>
        <td> ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo " </td>
    </tr>
    <tr>
        <td> Text </td>
        <td> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "text", array()), 'widget');
        echo " </td>
    </tr>
</table>
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Default:mailform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  66 => 25,  59 => 21,  52 => 17,  45 => 13,  38 => 9,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
<h2> <strong> Formulaire De Contact</strong> </h2>
<hr>
<h3><p> Contacter nous </p></h3>
{{ form_start (form) }}
<table>
    <tr>
        <td> Nom </td>
        <td> {{ form_widget (form.nom) }} </td>
    </tr>
    <tr>
        <td> Prenom </td>
        <td> {{ form_widget (form.prenom) }} </td>
    </tr>
    <tr>
        <td> Téléphone </td>
        <td> {{ form_widget (form.tel) }} </td>
    </tr>
    <tr>
        <td> Email </td>
        <td> {{ form_widget (form.email) }} </td>
    </tr>
    <tr>
        <td> Text </td>
        <td> {{ form_widget (form.text) }} </td>
    </tr>
</table>
{{ form_end (form) }}
</body>", "EvenementBundle:Default:mailform.html.twig", "C:\\wamp64\\www\\project\\src\\EvenementBundle/Resources/views/Default/mailform.html.twig");
    }
}
