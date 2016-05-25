<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ea16a0161178f619cdecf60b80c24978ac1cb123559a0ffb21bdd021ddaf6669 extends Twig_Template
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
        $__internal_4ccec7cc635b25d5dcbcaf54c01f7f97a5bf38d6ed79c58aae22d174ec00b1c9 = $this->env->getExtension("native_profiler");
        $__internal_4ccec7cc635b25d5dcbcaf54c01f7f97a5bf38d6ed79c58aae22d174ec00b1c9->enter($__internal_4ccec7cc635b25d5dcbcaf54c01f7f97a5bf38d6ed79c58aae22d174ec00b1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4ccec7cc635b25d5dcbcaf54c01f7f97a5bf38d6ed79c58aae22d174ec00b1c9->leave($__internal_4ccec7cc635b25d5dcbcaf54c01f7f97a5bf38d6ed79c58aae22d174ec00b1c9_prof);

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
