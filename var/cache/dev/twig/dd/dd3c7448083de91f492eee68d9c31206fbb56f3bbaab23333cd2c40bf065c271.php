<?php

/* @Doctrine/Collector/explain.html.twig */
class __TwigTemplate_6876a3d12691b52f548b7a67b6a68bea8fc90b7eb18852f40e4494831eb7c5d6 extends Twig_Template
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
        $__internal_030a9c3c4e3259dc4f71d9d1cef63943016b7e9c391227eb2691941ff63c5297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030a9c3c4e3259dc4f71d9d1cef63943016b7e9c391227eb2691941ff63c5297->enter($__internal_030a9c3c4e3259dc4f71d9d1cef63943016b7e9c391227eb2691941ff63c5297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doctrine/Collector/explain.html.twig"));

        $__internal_8bb2b361c14ea4f3b5f85d0c23d8880457c71d02775b41f1ad7b5bfff653c3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb2b361c14ea4f3b5f85d0c23d8880457c71d02775b41f1ad7b5bfff653c3cf->enter($__internal_8bb2b361c14ea4f3b5f85d0c23d8880457c71d02775b41f1ad7b5bfff653c3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doctrine/Collector/explain.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), 0, array(), "array")) > 1)) {
            // line 2
            echo "    ";
            // line 3
            echo "    <table style=\"margin: 5px 0;\">
        <thead>
            <tr>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), 0, array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 7
                echo "                    <th>";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 13
                echo "            <tr>
                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 15
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_replace_filter($context["item"], array("," => ", ")), "html", null, true);
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </tbody>
    </table>
";
        } else {
            // line 22
            echo "    ";
            // line 23
            echo "    <pre style=\"margin: 5px 0;\">";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 25
                echo twig_escape_filter($this->env, twig_first($this->env, $context["row"]), "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "</pre>
";
        }
        
        $__internal_030a9c3c4e3259dc4f71d9d1cef63943016b7e9c391227eb2691941ff63c5297->leave($__internal_030a9c3c4e3259dc4f71d9d1cef63943016b7e9c391227eb2691941ff63c5297_prof);

        
        $__internal_8bb2b361c14ea4f3b5f85d0c23d8880457c71d02775b41f1ad7b5bfff653c3cf->leave($__internal_8bb2b361c14ea4f3b5f85d0c23d8880457c71d02775b41f1ad7b5bfff653c3cf_prof);

    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  92 => 25,  88 => 24,  86 => 23,  84 => 22,  79 => 19,  72 => 17,  63 => 15,  59 => 14,  56 => 13,  52 => 12,  47 => 9,  38 => 7,  34 => 6,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data[0]|length > 1 %}
    {# The platform returns a table for the explanation (e.g. MySQL), display all columns #}
    <table style=\"margin: 5px 0;\">
        <thead>
            <tr>
                {% for label in data[0]|keys %}
                    <th>{{ label }}</th>
                {% endfor %}
            </tr>
        </thead>
        <tbody>
            {% for row in data %}
            <tr>
                {% for key, item in row %}
                    <td>{{ item|replace({',': ', '}) }}</td>
                {% endfor %}
            </tr>
            {% endfor %}
        </tbody>
    </table>
{% else %}
    {# The Platform returns a single column for a textual explanation (e.g. PostgreSQL), display all lines #}
    <pre style=\"margin: 5px 0;\">
        {%- for row in data -%}
            {{ row|first }}{{ \"\\n\" }}
        {%- endfor -%}
    </pre>
{% endif %}
", "@Doctrine/Collector/explain.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\doctrine\\doctrine-bundle\\Resources\\views\\Collector\\explain.html.twig");
    }
}
