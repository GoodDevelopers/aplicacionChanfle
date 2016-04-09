<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f2d6a37f8ebcf5940bb92707be221bb57c888bd553ac7e736fb37797dbfd9e3b extends Twig_Template
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
        $__internal_53a8f8c015cc5b908275bb85affcd9f0984f73b195bcd06a7e337377ee7a85c2 = $this->env->getExtension("native_profiler");
        $__internal_53a8f8c015cc5b908275bb85affcd9f0984f73b195bcd06a7e337377ee7a85c2->enter($__internal_53a8f8c015cc5b908275bb85affcd9f0984f73b195bcd06a7e337377ee7a85c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_53a8f8c015cc5b908275bb85affcd9f0984f73b195bcd06a7e337377ee7a85c2->leave($__internal_53a8f8c015cc5b908275bb85affcd9f0984f73b195bcd06a7e337377ee7a85c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
