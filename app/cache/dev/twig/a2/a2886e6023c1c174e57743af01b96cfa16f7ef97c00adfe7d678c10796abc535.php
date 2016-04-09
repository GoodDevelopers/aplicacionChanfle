<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a0af8cce8c1d49df32281120447a9b7100117c1e3b626e3bd5bce239bb1b1f62 extends Twig_Template
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
        $__internal_3fad8cf609cc95bc30656dd017a7579443edea1046a66c5f29f910cc12abfb23 = $this->env->getExtension("native_profiler");
        $__internal_3fad8cf609cc95bc30656dd017a7579443edea1046a66c5f29f910cc12abfb23->enter($__internal_3fad8cf609cc95bc30656dd017a7579443edea1046a66c5f29f910cc12abfb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3fad8cf609cc95bc30656dd017a7579443edea1046a66c5f29f910cc12abfb23->leave($__internal_3fad8cf609cc95bc30656dd017a7579443edea1046a66c5f29f910cc12abfb23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
