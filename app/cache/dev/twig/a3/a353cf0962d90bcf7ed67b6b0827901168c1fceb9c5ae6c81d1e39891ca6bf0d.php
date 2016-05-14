<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dad87b769bdc32ba3c572b726f38a4dabf9e0220799fa51f4eef5783a5a62776 extends Twig_Template
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
        $__internal_9e3d8c672f812002f54e1579ce8d9ae2ac92b61bd14bdd7278b827c496e37dc0 = $this->env->getExtension("native_profiler");
        $__internal_9e3d8c672f812002f54e1579ce8d9ae2ac92b61bd14bdd7278b827c496e37dc0->enter($__internal_9e3d8c672f812002f54e1579ce8d9ae2ac92b61bd14bdd7278b827c496e37dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_9e3d8c672f812002f54e1579ce8d9ae2ac92b61bd14bdd7278b827c496e37dc0->leave($__internal_9e3d8c672f812002f54e1579ce8d9ae2ac92b61bd14bdd7278b827c496e37dc0_prof);

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
