<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c827c0e8932a25c216699e451649a18a5bb0c415566f67821e38868994bcc180 extends Twig_Template
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
        $__internal_135f3becb8d70c58970b56b71e0d8f53f82e97c8dca0499713c6105350efcced = $this->env->getExtension("native_profiler");
        $__internal_135f3becb8d70c58970b56b71e0d8f53f82e97c8dca0499713c6105350efcced->enter($__internal_135f3becb8d70c58970b56b71e0d8f53f82e97c8dca0499713c6105350efcced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_135f3becb8d70c58970b56b71e0d8f53f82e97c8dca0499713c6105350efcced->leave($__internal_135f3becb8d70c58970b56b71e0d8f53f82e97c8dca0499713c6105350efcced_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
