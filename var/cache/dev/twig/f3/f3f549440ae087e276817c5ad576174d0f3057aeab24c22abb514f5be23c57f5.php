<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_5e60bc764b2c9fd56ce762d71c844d488ed4468e51bcc05c3cd58845c882a4d4 extends Twig_Template
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
        $__internal_e91656e5ea018ac1c44e6939642904d8603b4a86023ac09c13abc6812682bd34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91656e5ea018ac1c44e6939642904d8603b4a86023ac09c13abc6812682bd34->enter($__internal_e91656e5ea018ac1c44e6939642904d8603b4a86023ac09c13abc6812682bd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_2674a96c1fe5eede71c5cecc0d4f6ed933fbd02afe20d7d5fe04b0ba2d472cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2674a96c1fe5eede71c5cecc0d4f6ed933fbd02afe20d7d5fe04b0ba2d472cbc->enter($__internal_2674a96c1fe5eede71c5cecc0d4f6ed933fbd02afe20d7d5fe04b0ba2d472cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_e91656e5ea018ac1c44e6939642904d8603b4a86023ac09c13abc6812682bd34->leave($__internal_e91656e5ea018ac1c44e6939642904d8603b4a86023ac09c13abc6812682bd34_prof);

        
        $__internal_2674a96c1fe5eede71c5cecc0d4f6ed933fbd02afe20d7d5fe04b0ba2d472cbc->leave($__internal_2674a96c1fe5eede71c5cecc0d4f6ed933fbd02afe20d7d5fe04b0ba2d472cbc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
