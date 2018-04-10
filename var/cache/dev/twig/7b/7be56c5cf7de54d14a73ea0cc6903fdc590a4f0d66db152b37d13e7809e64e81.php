<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_b37754af2825a15d3c3a3c7ec4a6f3478412c758e4062ebc9eb3aecc5c7cb076 extends Twig_Template
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
        $__internal_b7f092a799b27a677a2f5d56e9b8d18cc7ef21b43a466d45e36f52a5de4de15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f092a799b27a677a2f5d56e9b8d18cc7ef21b43a466d45e36f52a5de4de15f->enter($__internal_b7f092a799b27a677a2f5d56e9b8d18cc7ef21b43a466d45e36f52a5de4de15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Router:panel.html.twig"));

        $__internal_1e81cf39f823b5f200d0dcef73fd9fe76a29a065a8237d7b7352a01b6b61a4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e81cf39f823b5f200d0dcef73fd9fe76a29a065a8237d7b7352a01b6b61a4b5->enter($__internal_1e81cf39f823b5f200d0dcef73fd9fe76a29a065a8237d7b7352a01b6b61a4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Router:panel.html.twig"));

        // line 1
        echo "<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "route", array())) ? ($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "route", array())) : ("(none)")), "html", null, true);
        echo "</span>
        <span class=\"label\">Matched route</span>
    </div>

    ";
        // line 9
        if ($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "route", array())) {
            // line 10
            echo "        <div class=\"metric\">
            <span class=\"value\">";
            // line 11
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["traces"] ?? $this->getContext($context, "traces"))), "html", null, true);
            echo "</span>
            <span class=\"label\">Tested routes before match</span>
        </div>
    ";
        }
        // line 15
        echo "</div>

";
        // line 17
        if ($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "route", array())) {
            // line 18
            echo "    <h3>Route Parameters</h3>

    ";
            // line 20
            if (twig_test_empty($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "routeParams", array()))) {
                // line 21
                echo "        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    ";
            } else {
                // line 25
                echo "        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "routeParams", array()), "labels" => array(0 => "Name", 1 => "Value")), false);
                echo "
    ";
            }
        }
        // line 28
        echo "
";
        // line 29
        if ($this->getAttribute(($context["router"] ?? $this->getContext($context, "router")), "redirect", array())) {
            // line 30
            echo "    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["router"] ?? $this->getContext($context, "router")), "targetUrl", array()), "html", null, true);
            echo "
        ";
            // line 35
            if ($this->getAttribute(($context["router"] ?? $this->getContext($context, "router")), "targetRoute", array())) {
                echo "<span class=\"text-muted\">(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["router"] ?? $this->getContext($context, "router")), "targetRoute", array()), "html", null, true);
                echo "\")</span>";
            }
            // line 36
            echo "    </div>
";
        }
        // line 38
        echo "
<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "pathinfo", array()), "html", null, true);
        echo "</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["traces"] ?? $this->getContext($context, "traces")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 56
            echo "        <tr class=\"";
            echo ((($this->getAttribute($context["trace"], "level", array()) == 1)) ? ("status-warning") : (((($this->getAttribute($context["trace"], "level", array()) == 2)) ? ("status-success") : (""))));
            echo "\">
            <td class=\"font-normal text-muted\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "path", array()), "html", null, true);
            echo "</td>
            <td class=\"font-normal\">
                ";
            // line 61
            if (($this->getAttribute($context["trace"], "level", array()) == 1)) {
                // line 62
                echo "                    Path almost matches, but
                    <span class=\"newline\">";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "log", array()), "html", null, true);
                echo "</span>
                ";
            } elseif (($this->getAttribute(            // line 64
$context["trace"], "level", array()) == 2)) {
                // line 65
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "log", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 67
                echo "                    Path does not match
                ";
            }
            // line 69
            echo "            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
";
        
        $__internal_b7f092a799b27a677a2f5d56e9b8d18cc7ef21b43a466d45e36f52a5de4de15f->leave($__internal_b7f092a799b27a677a2f5d56e9b8d18cc7ef21b43a466d45e36f52a5de4de15f_prof);

        
        $__internal_1e81cf39f823b5f200d0dcef73fd9fe76a29a065a8237d7b7352a01b6b61a4b5->leave($__internal_1e81cf39f823b5f200d0dcef73fd9fe76a29a065a8237d7b7352a01b6b61a4b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 72,  178 => 69,  174 => 67,  168 => 65,  166 => 64,  162 => 63,  159 => 62,  157 => 61,  152 => 59,  148 => 58,  144 => 57,  139 => 56,  122 => 55,  106 => 42,  100 => 38,  96 => 36,  90 => 35,  86 => 34,  80 => 30,  78 => 29,  75 => 28,  68 => 25,  62 => 21,  60 => 20,  56 => 18,  54 => 17,  50 => 15,  43 => 11,  40 => 10,  38 => 9,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">{{ request.route ?: '(none)' }}</span>
        <span class=\"label\">Matched route</span>
    </div>

    {% if request.route %}
        <div class=\"metric\">
            <span class=\"value\">{{ traces|length }}</span>
            <span class=\"label\">Tested routes before match</span>
        </div>
    {% endif %}
</div>

{% if request.route %}
    <h3>Route Parameters</h3>

    {% if request.routeParams is empty %}
        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: request.routeParams, labels: ['Name', 'Value'] }, with_context = false) }}
    {% endif %}
{% endif %}

{% if router.redirect %}
    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        {{ router.targetUrl }}
        {% if router.targetRoute %}<span class=\"text-muted\">(route: \"{{ router.targetRoute }}\")</span>{% endif %}
    </div>
{% endif %}

<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>{{ request.pathinfo }}</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    {% for trace in traces %}
        <tr class=\"{{ trace.level == 1 ? 'status-warning' : trace.level == 2 ? 'status-success' }}\">
            <td class=\"font-normal text-muted\">{{ loop.index }}</td>
            <td>{{ trace.name }}</td>
            <td>{{ trace.path }}</td>
            <td class=\"font-normal\">
                {% if trace.level == 1 %}
                    Path almost matches, but
                    <span class=\"newline\">{{ trace.log }}</span>
                {% elseif trace.level == 2 %}
                    {{ trace.log }}
                {% else %}
                    Path does not match
                {% endif %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
", "WebProfilerBundle:Router:panel.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Router/panel.html.twig");
    }
}
