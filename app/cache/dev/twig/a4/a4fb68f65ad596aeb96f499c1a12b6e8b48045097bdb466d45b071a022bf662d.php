<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d9efbe2e09b57e22ebb204c77e04151eac9935e9e2465422aeaa90732f04109f extends Twig_Template
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
        $__internal_d8caf2387f6996a3808711812d1ca3546c525ffa94d3ad7f0b93b9e5c90bb3f4 = $this->env->getExtension("native_profiler");
        $__internal_d8caf2387f6996a3808711812d1ca3546c525ffa94d3ad7f0b93b9e5c90bb3f4->enter($__internal_d8caf2387f6996a3808711812d1ca3546c525ffa94d3ad7f0b93b9e5c90bb3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d8caf2387f6996a3808711812d1ca3546c525ffa94d3ad7f0b93b9e5c90bb3f4->leave($__internal_d8caf2387f6996a3808711812d1ca3546c525ffa94d3ad7f0b93b9e5c90bb3f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
