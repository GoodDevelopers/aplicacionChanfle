<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_40c403b5b68322e8da9a46407b86acc2a352a7a8882d0c76b7ab7e2258cba270 extends Twig_Template
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
        $__internal_4a01a4a2e56f71836ff75b4843b1527701bd51b27fb6781fb2d7a33103d1e40c = $this->env->getExtension("native_profiler");
        $__internal_4a01a4a2e56f71836ff75b4843b1527701bd51b27fb6781fb2d7a33103d1e40c->enter($__internal_4a01a4a2e56f71836ff75b4843b1527701bd51b27fb6781fb2d7a33103d1e40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4a01a4a2e56f71836ff75b4843b1527701bd51b27fb6781fb2d7a33103d1e40c->leave($__internal_4a01a4a2e56f71836ff75b4843b1527701bd51b27fb6781fb2d7a33103d1e40c_prof);

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
