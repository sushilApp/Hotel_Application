<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_eb6d8ba9d4503f5263a8e414502f52dc84d57cfa131d6273f7393a79a8c620a3 extends Twig_Template
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
        $__internal_8474d956431feddc84d84ad8aa25140c747b389573d2baa3bb22a50b38686aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8474d956431feddc84d84ad8aa25140c747b389573d2baa3bb22a50b38686aaa->enter($__internal_8474d956431feddc84d84ad8aa25140c747b389573d2baa3bb22a50b38686aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9837b8b94eae51c37e45ccd3d3ec3345873b38ffb836478d3fe73c33059a717e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9837b8b94eae51c37e45ccd3d3ec3345873b38ffb836478d3fe73c33059a717e->enter($__internal_9837b8b94eae51c37e45ccd3d3ec3345873b38ffb836478d3fe73c33059a717e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8474d956431feddc84d84ad8aa25140c747b389573d2baa3bb22a50b38686aaa->leave($__internal_8474d956431feddc84d84ad8aa25140c747b389573d2baa3bb22a50b38686aaa_prof);

        
        $__internal_9837b8b94eae51c37e45ccd3d3ec3345873b38ffb836478d3fe73c33059a717e->leave($__internal_9837b8b94eae51c37e45ccd3d3ec3345873b38ffb836478d3fe73c33059a717e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
