<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b6bcde4800185f5aa8eac0efb59faf97234446c8731430c8dcf82b120f103349 extends Twig_Template
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
        $__internal_c70164b843d343762e3828a36811ae938597fbaef2c0b8e791ea4e678baa4a49 = $this->env->getExtension("native_profiler");
        $__internal_c70164b843d343762e3828a36811ae938597fbaef2c0b8e791ea4e678baa4a49->enter($__internal_c70164b843d343762e3828a36811ae938597fbaef2c0b8e791ea4e678baa4a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c70164b843d343762e3828a36811ae938597fbaef2c0b8e791ea4e678baa4a49->leave($__internal_c70164b843d343762e3828a36811ae938597fbaef2c0b8e791ea4e678baa4a49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
