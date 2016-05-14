<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_628dd91df6047c85f6d98fc648d787562c190ab0b6d0c66ce3c8ac9e5d7faad3 extends Twig_Template
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
        $__internal_05f65ad5fd69ff00aaec76999d028c1d05d6a47405e25bd050e0499f863aa764 = $this->env->getExtension("native_profiler");
        $__internal_05f65ad5fd69ff00aaec76999d028c1d05d6a47405e25bd050e0499f863aa764->enter($__internal_05f65ad5fd69ff00aaec76999d028c1d05d6a47405e25bd050e0499f863aa764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_05f65ad5fd69ff00aaec76999d028c1d05d6a47405e25bd050e0499f863aa764->leave($__internal_05f65ad5fd69ff00aaec76999d028c1d05d6a47405e25bd050e0499f863aa764_prof);

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
