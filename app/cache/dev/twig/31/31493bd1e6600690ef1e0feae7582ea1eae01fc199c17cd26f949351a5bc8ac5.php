<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d3166e1cf1ce38a09243b26769ad0ce57090bf4ddeddb0123444007aa1f627cd extends Twig_Template
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
        $__internal_f72fb974fb33c6b54e96e93ff525802ea4cfa5373535881ed5f765986f57dc49 = $this->env->getExtension("native_profiler");
        $__internal_f72fb974fb33c6b54e96e93ff525802ea4cfa5373535881ed5f765986f57dc49->enter($__internal_f72fb974fb33c6b54e96e93ff525802ea4cfa5373535881ed5f765986f57dc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f72fb974fb33c6b54e96e93ff525802ea4cfa5373535881ed5f765986f57dc49->leave($__internal_f72fb974fb33c6b54e96e93ff525802ea4cfa5373535881ed5f765986f57dc49_prof);

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
