<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_680f7d9467c4edf68d06a378109faf9695f7f4dda2876cdbf620c4165f90ee19 extends Twig_Template
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
        $__internal_1201762c2bbd4e6e6b6e31643f60de1b8a3f9fa0069d722e360618bde12c5395 = $this->env->getExtension("native_profiler");
        $__internal_1201762c2bbd4e6e6b6e31643f60de1b8a3f9fa0069d722e360618bde12c5395->enter($__internal_1201762c2bbd4e6e6b6e31643f60de1b8a3f9fa0069d722e360618bde12c5395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1201762c2bbd4e6e6b6e31643f60de1b8a3f9fa0069d722e360618bde12c5395->leave($__internal_1201762c2bbd4e6e6b6e31643f60de1b8a3f9fa0069d722e360618bde12c5395_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
