<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2f5cf5cf2ab95d657779e4aedb41769b60c193c68690d3a3ff97c4fc3cee4b1f extends Twig_Template
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
        $__internal_6aea2208fa703d9d760e10d38ccb636968921a9f6fc4e94788334ecea34f4591 = $this->env->getExtension("native_profiler");
        $__internal_6aea2208fa703d9d760e10d38ccb636968921a9f6fc4e94788334ecea34f4591->enter($__internal_6aea2208fa703d9d760e10d38ccb636968921a9f6fc4e94788334ecea34f4591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6aea2208fa703d9d760e10d38ccb636968921a9f6fc4e94788334ecea34f4591->leave($__internal_6aea2208fa703d9d760e10d38ccb636968921a9f6fc4e94788334ecea34f4591_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
