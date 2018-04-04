<?php

/* :reservations:book.html.twig */
class __TwigTemplate_a604af87614d5c0a99f939cf4957e876a39be131612d1702449d423178d1c3d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservations:book.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_539ed224c0e0034dadf8aa91558e507f42d4ac2bb358897d3bdbea99cd54b3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539ed224c0e0034dadf8aa91558e507f42d4ac2bb358897d3bdbea99cd54b3bb->enter($__internal_539ed224c0e0034dadf8aa91558e507f42d4ac2bb358897d3bdbea99cd54b3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:book.html.twig"));

        $__internal_3b19d596d7e38078277aa8c358375ac7e4c5bb89bf3fe246a9887a6cd63741f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b19d596d7e38078277aa8c358375ac7e4c5bb89bf3fe246a9887a6cd63741f1->enter($__internal_3b19d596d7e38078277aa8c358375ac7e4c5bb89bf3fe246a9887a6cd63741f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_539ed224c0e0034dadf8aa91558e507f42d4ac2bb358897d3bdbea99cd54b3bb->leave($__internal_539ed224c0e0034dadf8aa91558e507f42d4ac2bb358897d3bdbea99cd54b3bb_prof);

        
        $__internal_3b19d596d7e38078277aa8c358375ac7e4c5bb89bf3fe246a9887a6cd63741f1->leave($__internal_3b19d596d7e38078277aa8c358375ac7e4c5bb89bf3fe246a9887a6cd63741f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b93c6b31e66235894033e94a640c28f8f65d142e60a0521caedbed60db7da5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b93c6b31e66235894033e94a640c28f8f65d142e60a0521caedbed60db7da5f->enter($__internal_6b93c6b31e66235894033e94a640c28f8f65d142e60a0521caedbed60db7da5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0eadd0ea3a34f377d0da5d75d8d5326d06c87a0efa18ab389303e9b948962a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eadd0ea3a34f377d0da5d75d8d5326d06c87a0efa18ab389303e9b948962a64->enter($__internal_0eadd0ea3a34f377d0da5d75d8d5326d06c87a0efa18ab389303e9b948962a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: ";
        // line 8
        echo twig_escape_filter($this->env, ($context["id_client"] ?? $this->getContext($context, "id_client")), "html", null, true);
        echo "</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_0eadd0ea3a34f377d0da5d75d8d5326d06c87a0efa18ab389303e9b948962a64->leave($__internal_0eadd0ea3a34f377d0da5d75d8d5326d06c87a0efa18ab389303e9b948962a64_prof);

        
        $__internal_6b93c6b31e66235894033e94a640c28f8f65d142e60a0521caedbed60db7da5f->leave($__internal_6b93c6b31e66235894033e94a640c28f8f65d142e60a0521caedbed60db7da5f_prof);

    }

    public function getTemplateName()
    {
        return ":reservations:book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: {{id_client}}</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", ":reservations:book.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\app/Resources\\views/reservations/book.html.twig");
    }
}
