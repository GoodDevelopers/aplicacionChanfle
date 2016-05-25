<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6823a68e2bb68510661d9ee3d7bbdb4137f97d8fd681f89b0ed1f074127b7979 extends Twig_Template
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
        $__internal_717d76e8f7b34c3edc8d19447b1a4a3bd14ddc31e15f49c5bfe2f2d60be9ce4a = $this->env->getExtension("native_profiler");
        $__internal_717d76e8f7b34c3edc8d19447b1a4a3bd14ddc31e15f49c5bfe2f2d60be9ce4a->enter($__internal_717d76e8f7b34c3edc8d19447b1a4a3bd14ddc31e15f49c5bfe2f2d60be9ce4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_717d76e8f7b34c3edc8d19447b1a4a3bd14ddc31e15f49c5bfe2f2d60be9ce4a->leave($__internal_717d76e8f7b34c3edc8d19447b1a4a3bd14ddc31e15f49c5bfe2f2d60be9ce4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
