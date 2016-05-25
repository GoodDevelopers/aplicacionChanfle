<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e9d047297bfb7ae6669eda61e3efdb3a8f6069bd379d2b1503bd78664e01992a extends Twig_Template
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
        $__internal_f958e1c70b528f437560676b85220e7a4f550d9182730e295562058c33644f53 = $this->env->getExtension("native_profiler");
        $__internal_f958e1c70b528f437560676b85220e7a4f550d9182730e295562058c33644f53->enter($__internal_f958e1c70b528f437560676b85220e7a4f550d9182730e295562058c33644f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f958e1c70b528f437560676b85220e7a4f550d9182730e295562058c33644f53->leave($__internal_f958e1c70b528f437560676b85220e7a4f550d9182730e295562058c33644f53_prof);

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
