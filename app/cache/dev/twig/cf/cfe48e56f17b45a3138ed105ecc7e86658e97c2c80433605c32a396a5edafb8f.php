<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2758326cd19e8d1ef9826f3c76b9440cda06cb321020db449cd6dc2bed0e1f50 extends Twig_Template
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
        $__internal_4e96d3fac952177eded709c84c951c0ea8e14205b23183e41ff89952a13db3fb = $this->env->getExtension("native_profiler");
        $__internal_4e96d3fac952177eded709c84c951c0ea8e14205b23183e41ff89952a13db3fb->enter($__internal_4e96d3fac952177eded709c84c951c0ea8e14205b23183e41ff89952a13db3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4e96d3fac952177eded709c84c951c0ea8e14205b23183e41ff89952a13db3fb->leave($__internal_4e96d3fac952177eded709c84c951c0ea8e14205b23183e41ff89952a13db3fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
