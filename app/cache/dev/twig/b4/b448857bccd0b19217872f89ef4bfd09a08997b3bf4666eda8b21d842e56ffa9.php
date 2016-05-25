<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6b1336f43ceeece18daeab1f7c10d03fd9d6bb4da6c3a4c652ce74e2bfc4f1d4 extends Twig_Template
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
        $__internal_2f8dde96c0e01abe3804bb5356a27732dc36d1fd9c9f9cfdc31080190d03e8c6 = $this->env->getExtension("native_profiler");
        $__internal_2f8dde96c0e01abe3804bb5356a27732dc36d1fd9c9f9cfdc31080190d03e8c6->enter($__internal_2f8dde96c0e01abe3804bb5356a27732dc36d1fd9c9f9cfdc31080190d03e8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2f8dde96c0e01abe3804bb5356a27732dc36d1fd9c9f9cfdc31080190d03e8c6->leave($__internal_2f8dde96c0e01abe3804bb5356a27732dc36d1fd9c9f9cfdc31080190d03e8c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
