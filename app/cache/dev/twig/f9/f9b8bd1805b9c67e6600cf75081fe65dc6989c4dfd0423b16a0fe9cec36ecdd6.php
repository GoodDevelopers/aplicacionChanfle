<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_26a96fc41bf966159f54d7f1cccb552e5941f3407d1ac57f96738f72bb765401 extends Twig_Template
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
        $__internal_7fdc52930c396e49d19a0586371ee7805da6caf94a75390f2bdc866cf93e1897 = $this->env->getExtension("native_profiler");
        $__internal_7fdc52930c396e49d19a0586371ee7805da6caf94a75390f2bdc866cf93e1897->enter($__internal_7fdc52930c396e49d19a0586371ee7805da6caf94a75390f2bdc866cf93e1897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7fdc52930c396e49d19a0586371ee7805da6caf94a75390f2bdc866cf93e1897->leave($__internal_7fdc52930c396e49d19a0586371ee7805da6caf94a75390f2bdc866cf93e1897_prof);

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
