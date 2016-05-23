<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_57393ef801ae55172dcccb9cff1575ba9e03e497457c75d07cdd653b5afb476d extends Twig_Template
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
        $__internal_ecd72443e750c9429211176d852575929c4f4c17f7e691a43d0703252ef66e0c = $this->env->getExtension("native_profiler");
        $__internal_ecd72443e750c9429211176d852575929c4f4c17f7e691a43d0703252ef66e0c->enter($__internal_ecd72443e750c9429211176d852575929c4f4c17f7e691a43d0703252ef66e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ecd72443e750c9429211176d852575929c4f4c17f7e691a43d0703252ef66e0c->leave($__internal_ecd72443e750c9429211176d852575929c4f4c17f7e691a43d0703252ef66e0c_prof);

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
