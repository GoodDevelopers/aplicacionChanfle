<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c37c89f2ee728c1364a8149e31cda47a0d0486aa098750bb53026c64896404db extends Twig_Template
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
        $__internal_fe6d7f8751aae27c979536cbb7f9046f56fc9aac1dc34c613deac003ec7036ca = $this->env->getExtension("native_profiler");
        $__internal_fe6d7f8751aae27c979536cbb7f9046f56fc9aac1dc34c613deac003ec7036ca->enter($__internal_fe6d7f8751aae27c979536cbb7f9046f56fc9aac1dc34c613deac003ec7036ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fe6d7f8751aae27c979536cbb7f9046f56fc9aac1dc34c613deac003ec7036ca->leave($__internal_fe6d7f8751aae27c979536cbb7f9046f56fc9aac1dc34c613deac003ec7036ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
