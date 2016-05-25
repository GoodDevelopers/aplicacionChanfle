<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7d9303ef021cf1c8bebba1087f8c48dba7c2351c17f030a0767bfd3daca53c9d extends Twig_Template
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
        $__internal_0e1b3a99ebf95bafc3706389cffbe090ec62d0f91d10f50fb823863981af4061 = $this->env->getExtension("native_profiler");
        $__internal_0e1b3a99ebf95bafc3706389cffbe090ec62d0f91d10f50fb823863981af4061->enter($__internal_0e1b3a99ebf95bafc3706389cffbe090ec62d0f91d10f50fb823863981af4061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0e1b3a99ebf95bafc3706389cffbe090ec62d0f91d10f50fb823863981af4061->leave($__internal_0e1b3a99ebf95bafc3706389cffbe090ec62d0f91d10f50fb823863981af4061_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
