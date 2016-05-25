<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3af5adee24766060596543c3d88ae27cf266119f319e2294783840faf987beb8 extends Twig_Template
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
        $__internal_fa2ed0dccb4631d99889c4ecad40101e140f22144cd00596e810a0907ed93d52 = $this->env->getExtension("native_profiler");
        $__internal_fa2ed0dccb4631d99889c4ecad40101e140f22144cd00596e810a0907ed93d52->enter($__internal_fa2ed0dccb4631d99889c4ecad40101e140f22144cd00596e810a0907ed93d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fa2ed0dccb4631d99889c4ecad40101e140f22144cd00596e810a0907ed93d52->leave($__internal_fa2ed0dccb4631d99889c4ecad40101e140f22144cd00596e810a0907ed93d52_prof);

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
