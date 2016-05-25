<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_33f5bdf43e10fb6d4348e10b4a6c732062ea35a4d841c22da91f2a793742f9e2 extends Twig_Template
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
        $__internal_a5c17896bdfff52686c0ed909194cfb22db523d92df47ffb59848e4f16cdd77f = $this->env->getExtension("native_profiler");
        $__internal_a5c17896bdfff52686c0ed909194cfb22db523d92df47ffb59848e4f16cdd77f->enter($__internal_a5c17896bdfff52686c0ed909194cfb22db523d92df47ffb59848e4f16cdd77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a5c17896bdfff52686c0ed909194cfb22db523d92df47ffb59848e4f16cdd77f->leave($__internal_a5c17896bdfff52686c0ed909194cfb22db523d92df47ffb59848e4f16cdd77f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
