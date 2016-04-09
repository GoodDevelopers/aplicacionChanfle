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
        $__internal_66756dedd9a31afc32793a653178fa819793c72b3f2d78bf77181791d89599cb = $this->env->getExtension("native_profiler");
        $__internal_66756dedd9a31afc32793a653178fa819793c72b3f2d78bf77181791d89599cb->enter($__internal_66756dedd9a31afc32793a653178fa819793c72b3f2d78bf77181791d89599cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_66756dedd9a31afc32793a653178fa819793c72b3f2d78bf77181791d89599cb->leave($__internal_66756dedd9a31afc32793a653178fa819793c72b3f2d78bf77181791d89599cb_prof);

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
