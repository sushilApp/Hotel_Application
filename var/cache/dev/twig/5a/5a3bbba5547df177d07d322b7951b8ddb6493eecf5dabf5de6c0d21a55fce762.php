<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_7ccd3715cfe113a1ed2f4fad89954452df48bbe7a61a11e3d248352df07addea extends Twig_Template
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
        $__internal_e92e6744c79c845e06aa470076493b20195f93058eb6b377f6f90706ce4f3749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92e6744c79c845e06aa470076493b20195f93058eb6b377f6f90706ce4f3749->enter($__internal_e92e6744c79c845e06aa470076493b20195f93058eb6b377f6f90706ce4f3749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_525943ef0c27fe3f4b29ce858ffbf0ecf20bcff7003a5a85ef9f35c6b71c6718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525943ef0c27fe3f4b29ce858ffbf0ecf20bcff7003a5a85ef9f35c6b71c6718->enter($__internal_525943ef0c27fe3f4b29ce858ffbf0ecf20bcff7003a5a85ef9f35c6b71c6718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e92e6744c79c845e06aa470076493b20195f93058eb6b377f6f90706ce4f3749->leave($__internal_e92e6744c79c845e06aa470076493b20195f93058eb6b377f6f90706ce4f3749_prof);

        
        $__internal_525943ef0c27fe3f4b29ce858ffbf0ecf20bcff7003a5a85ef9f35c6b71c6718->leave($__internal_525943ef0c27fe3f4b29ce858ffbf0ecf20bcff7003a5a85ef9f35c6b71c6718_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
