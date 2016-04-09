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
        $__internal_f0092fd0f308b30d367bc5edd3203c0ee1690d41e9c87e0de1d68869ca3b04f9 = $this->env->getExtension("native_profiler");
        $__internal_f0092fd0f308b30d367bc5edd3203c0ee1690d41e9c87e0de1d68869ca3b04f9->enter($__internal_f0092fd0f308b30d367bc5edd3203c0ee1690d41e9c87e0de1d68869ca3b04f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_f0092fd0f308b30d367bc5edd3203c0ee1690d41e9c87e0de1d68869ca3b04f9->leave($__internal_f0092fd0f308b30d367bc5edd3203c0ee1690d41e9c87e0de1d68869ca3b04f9_prof);

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
