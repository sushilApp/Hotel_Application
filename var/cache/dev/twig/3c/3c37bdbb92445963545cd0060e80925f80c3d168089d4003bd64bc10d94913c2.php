<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_ad2759c5f65b482a3c21f2fe1820b99ce2c0f7c59aabb669ebe7a6b6948792d7 extends Twig_Template
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
        $__internal_98e3fa64e81bf334be39948be69e096b2d8c06c4c9d47f87dfccd019465aa864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e3fa64e81bf334be39948be69e096b2d8c06c4c9d47f87dfccd019465aa864->enter($__internal_98e3fa64e81bf334be39948be69e096b2d8c06c4c9d47f87dfccd019465aa864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c6edbb3f127b9089ab6f36f441543f47a40e0c71bfd7aa2130afef9b361d012f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6edbb3f127b9089ab6f36f441543f47a40e0c71bfd7aa2130afef9b361d012f->enter($__internal_c6edbb3f127b9089ab6f36f441543f47a40e0c71bfd7aa2130afef9b361d012f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_98e3fa64e81bf334be39948be69e096b2d8c06c4c9d47f87dfccd019465aa864->leave($__internal_98e3fa64e81bf334be39948be69e096b2d8c06c4c9d47f87dfccd019465aa864_prof);

        
        $__internal_c6edbb3f127b9089ab6f36f441543f47a40e0c71bfd7aa2130afef9b361d012f->leave($__internal_c6edbb3f127b9089ab6f36f441543f47a40e0c71bfd7aa2130afef9b361d012f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
