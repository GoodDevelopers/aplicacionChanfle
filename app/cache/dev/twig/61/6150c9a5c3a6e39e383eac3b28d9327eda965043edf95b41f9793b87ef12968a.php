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
        $__internal_d730bf9cf08d7df57e480e845fef3e3267d4e0d848428515a717a55082e41eed = $this->env->getExtension("native_profiler");
        $__internal_d730bf9cf08d7df57e480e845fef3e3267d4e0d848428515a717a55082e41eed->enter($__internal_d730bf9cf08d7df57e480e845fef3e3267d4e0d848428515a717a55082e41eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d730bf9cf08d7df57e480e845fef3e3267d4e0d848428515a717a55082e41eed->leave($__internal_d730bf9cf08d7df57e480e845fef3e3267d4e0d848428515a717a55082e41eed_prof);

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
