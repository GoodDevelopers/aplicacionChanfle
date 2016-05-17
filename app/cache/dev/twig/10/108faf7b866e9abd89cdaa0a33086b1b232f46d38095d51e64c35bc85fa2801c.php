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
        $__internal_efdc94d5f1553a1145e9a28d476d55ab8214943afa5e1ba157b195f9f3aa020b = $this->env->getExtension("native_profiler");
        $__internal_efdc94d5f1553a1145e9a28d476d55ab8214943afa5e1ba157b195f9f3aa020b->enter($__internal_efdc94d5f1553a1145e9a28d476d55ab8214943afa5e1ba157b195f9f3aa020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_efdc94d5f1553a1145e9a28d476d55ab8214943afa5e1ba157b195f9f3aa020b->leave($__internal_efdc94d5f1553a1145e9a28d476d55ab8214943afa5e1ba157b195f9f3aa020b_prof);

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
