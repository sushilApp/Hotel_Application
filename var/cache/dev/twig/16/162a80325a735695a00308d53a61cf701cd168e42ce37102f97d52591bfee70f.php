<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9a56e17b914b6eedf3ca6497a2002c87c9b512e911c6167a478f735b17a28cd4 extends Twig_Template
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
        $__internal_ccc540a8278cf658a386023af9b50385fea640a844e0eeea35c070b2edbc9b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc540a8278cf658a386023af9b50385fea640a844e0eeea35c070b2edbc9b5f->enter($__internal_ccc540a8278cf658a386023af9b50385fea640a844e0eeea35c070b2edbc9b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_dd45f1f172bf67532216785f18e21aa8d32358387ddf003c8a2ac11a3706cdf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd45f1f172bf67532216785f18e21aa8d32358387ddf003c8a2ac11a3706cdf2->enter($__internal_dd45f1f172bf67532216785f18e21aa8d32358387ddf003c8a2ac11a3706cdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ccc540a8278cf658a386023af9b50385fea640a844e0eeea35c070b2edbc9b5f->leave($__internal_ccc540a8278cf658a386023af9b50385fea640a844e0eeea35c070b2edbc9b5f_prof);

        
        $__internal_dd45f1f172bf67532216785f18e21aa8d32358387ddf003c8a2ac11a3706cdf2->leave($__internal_dd45f1f172bf67532216785f18e21aa8d32358387ddf003c8a2ac11a3706cdf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\symf-proj\\Hotel_Application\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
