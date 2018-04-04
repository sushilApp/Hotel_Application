<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_74f0ecdb3f1d5da959ea36d779ad92a9ace440982452b0ddbb8db1ee352b242f extends Twig_Template
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
        $__internal_3015f0da05abfb85c7b2fdcf9e91253bb46ef58c6c6e74125be64352de8c9b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3015f0da05abfb85c7b2fdcf9e91253bb46ef58c6c6e74125be64352de8c9b51->enter($__internal_3015f0da05abfb85c7b2fdcf9e91253bb46ef58c6c6e74125be64352de8c9b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_697eed3dc597f5c745bfb989f9bb7d8ca2ff6cf3e106b92546df1170b7ec94c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697eed3dc597f5c745bfb989f9bb7d8ca2ff6cf3e106b92546df1170b7ec94c4->enter($__internal_697eed3dc597f5c745bfb989f9bb7d8ca2ff6cf3e106b92546df1170b7ec94c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_3015f0da05abfb85c7b2fdcf9e91253bb46ef58c6c6e74125be64352de8c9b51->leave($__internal_3015f0da05abfb85c7b2fdcf9e91253bb46ef58c6c6e74125be64352de8c9b51_prof);

        
        $__internal_697eed3dc597f5c745bfb989f9bb7d8ca2ff6cf3e106b92546df1170b7ec94c4->leave($__internal_697eed3dc597f5c745bfb989f9bb7d8ca2ff6cf3e106b92546df1170b7ec94c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}