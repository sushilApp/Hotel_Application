<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5ba5cc483ed4a4c2d0fca33b5408499bb0b53e1f9fe0f89e18e7746ffef2baf1 extends Twig_Template
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
        $__internal_59dfebe3cdeee893fe77f1e92462856d8ae8a886eefe3dd0dcf0f46e1f64b5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59dfebe3cdeee893fe77f1e92462856d8ae8a886eefe3dd0dcf0f46e1f64b5e2->enter($__internal_59dfebe3cdeee893fe77f1e92462856d8ae8a886eefe3dd0dcf0f46e1f64b5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4700036404c44da68ee84eb3f7078f7246ad7e1e4e9bff72a37ee49002340522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4700036404c44da68ee84eb3f7078f7246ad7e1e4e9bff72a37ee49002340522->enter($__internal_4700036404c44da68ee84eb3f7078f7246ad7e1e4e9bff72a37ee49002340522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_59dfebe3cdeee893fe77f1e92462856d8ae8a886eefe3dd0dcf0f46e1f64b5e2->leave($__internal_59dfebe3cdeee893fe77f1e92462856d8ae8a886eefe3dd0dcf0f46e1f64b5e2_prof);

        
        $__internal_4700036404c44da68ee84eb3f7078f7246ad7e1e4e9bff72a37ee49002340522->leave($__internal_4700036404c44da68ee84eb3f7078f7246ad7e1e4e9bff72a37ee49002340522_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
