<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3b971fe13b62b89548f5e28ac4d815979bfdb6b5ff28e93beb0a745af2d0d989 extends Twig_Template
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
        $__internal_6295c3660ed6509ae18a6b8e47b3e483ec2fb2b0abd802b1318c0d2abb9301ad = $this->env->getExtension("native_profiler");
        $__internal_6295c3660ed6509ae18a6b8e47b3e483ec2fb2b0abd802b1318c0d2abb9301ad->enter($__internal_6295c3660ed6509ae18a6b8e47b3e483ec2fb2b0abd802b1318c0d2abb9301ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6295c3660ed6509ae18a6b8e47b3e483ec2fb2b0abd802b1318c0d2abb9301ad->leave($__internal_6295c3660ed6509ae18a6b8e47b3e483ec2fb2b0abd802b1318c0d2abb9301ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
