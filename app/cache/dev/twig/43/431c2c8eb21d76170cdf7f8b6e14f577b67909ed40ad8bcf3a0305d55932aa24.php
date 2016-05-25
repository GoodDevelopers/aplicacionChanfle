<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c3b97d58450f642ddd66fa404e467623eeb36b4ed69220c6d534e901d27a2915 extends Twig_Template
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
        $__internal_03ebce713f270276dfc44822520aa7a544bc307e54bce591b87635ea3ef325e0 = $this->env->getExtension("native_profiler");
        $__internal_03ebce713f270276dfc44822520aa7a544bc307e54bce591b87635ea3ef325e0->enter($__internal_03ebce713f270276dfc44822520aa7a544bc307e54bce591b87635ea3ef325e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_03ebce713f270276dfc44822520aa7a544bc307e54bce591b87635ea3ef325e0->leave($__internal_03ebce713f270276dfc44822520aa7a544bc307e54bce591b87635ea3ef325e0_prof);

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
