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
        $__internal_86d4f04a23ac36209499514b9c94d205f9672b3a81bcea53515bc6e11a1388f8 = $this->env->getExtension("native_profiler");
        $__internal_86d4f04a23ac36209499514b9c94d205f9672b3a81bcea53515bc6e11a1388f8->enter($__internal_86d4f04a23ac36209499514b9c94d205f9672b3a81bcea53515bc6e11a1388f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_86d4f04a23ac36209499514b9c94d205f9672b3a81bcea53515bc6e11a1388f8->leave($__internal_86d4f04a23ac36209499514b9c94d205f9672b3a81bcea53515bc6e11a1388f8_prof);

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
