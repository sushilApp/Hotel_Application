<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_580b23fd12a4ae8f5fd484cc9637f8c4c094ae36c636cb21557395922afeecd3 extends Twig_Template
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
        $__internal_75a72efcb2ac06d244c10735c031981cb25bb480bbaccb54fc16b59b62b49d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a72efcb2ac06d244c10735c031981cb25bb480bbaccb54fc16b59b62b49d44->enter($__internal_75a72efcb2ac06d244c10735c031981cb25bb480bbaccb54fc16b59b62b49d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_bc5a68c67b1b957540f0ff470c08d0196be1d571b15ac26e5f422020f12aeac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5a68c67b1b957540f0ff470c08d0196be1d571b15ac26e5f422020f12aeac9->enter($__internal_bc5a68c67b1b957540f0ff470c08d0196be1d571b15ac26e5f422020f12aeac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_75a72efcb2ac06d244c10735c031981cb25bb480bbaccb54fc16b59b62b49d44->leave($__internal_75a72efcb2ac06d244c10735c031981cb25bb480bbaccb54fc16b59b62b49d44_prof);

        
        $__internal_bc5a68c67b1b957540f0ff470c08d0196be1d571b15ac26e5f422020f12aeac9->leave($__internal_bc5a68c67b1b957540f0ff470c08d0196be1d571b15ac26e5f422020f12aeac9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
