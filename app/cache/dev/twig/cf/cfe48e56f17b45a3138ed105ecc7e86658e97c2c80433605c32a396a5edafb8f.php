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
        $__internal_4443ac9749f9b2f84fe9fa4188ac6c18334217439126f54bd5d3aaa87835d370 = $this->env->getExtension("native_profiler");
        $__internal_4443ac9749f9b2f84fe9fa4188ac6c18334217439126f54bd5d3aaa87835d370->enter($__internal_4443ac9749f9b2f84fe9fa4188ac6c18334217439126f54bd5d3aaa87835d370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4443ac9749f9b2f84fe9fa4188ac6c18334217439126f54bd5d3aaa87835d370->leave($__internal_4443ac9749f9b2f84fe9fa4188ac6c18334217439126f54bd5d3aaa87835d370_prof);

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
