<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9e164a231760e665c8a3e462647b66206698428513e1fcc6bff5969211429f70 extends Twig_Template
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
        $__internal_6fa58e178e20e7c00e6360a3aa9d02615b9ddb022116441db9d1354bfd8658c5 = $this->env->getExtension("native_profiler");
        $__internal_6fa58e178e20e7c00e6360a3aa9d02615b9ddb022116441db9d1354bfd8658c5->enter($__internal_6fa58e178e20e7c00e6360a3aa9d02615b9ddb022116441db9d1354bfd8658c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6fa58e178e20e7c00e6360a3aa9d02615b9ddb022116441db9d1354bfd8658c5->leave($__internal_6fa58e178e20e7c00e6360a3aa9d02615b9ddb022116441db9d1354bfd8658c5_prof);

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
