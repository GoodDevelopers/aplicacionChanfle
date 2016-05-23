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
        $__internal_63e3f37b58903cab8dee446ca7b9812b4f860b0c269e6c59f6cf9c8a330ff5e3 = $this->env->getExtension("native_profiler");
        $__internal_63e3f37b58903cab8dee446ca7b9812b4f860b0c269e6c59f6cf9c8a330ff5e3->enter($__internal_63e3f37b58903cab8dee446ca7b9812b4f860b0c269e6c59f6cf9c8a330ff5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_63e3f37b58903cab8dee446ca7b9812b4f860b0c269e6c59f6cf9c8a330ff5e3->leave($__internal_63e3f37b58903cab8dee446ca7b9812b4f860b0c269e6c59f6cf9c8a330ff5e3_prof);

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
