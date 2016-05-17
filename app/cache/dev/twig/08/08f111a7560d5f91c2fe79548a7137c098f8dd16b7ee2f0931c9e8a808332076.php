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
        $__internal_b48951ae7e436b3d5baaf640d2095f17b8192d05bffe02e0fedd1ba0a0bafc6f = $this->env->getExtension("native_profiler");
        $__internal_b48951ae7e436b3d5baaf640d2095f17b8192d05bffe02e0fedd1ba0a0bafc6f->enter($__internal_b48951ae7e436b3d5baaf640d2095f17b8192d05bffe02e0fedd1ba0a0bafc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b48951ae7e436b3d5baaf640d2095f17b8192d05bffe02e0fedd1ba0a0bafc6f->leave($__internal_b48951ae7e436b3d5baaf640d2095f17b8192d05bffe02e0fedd1ba0a0bafc6f_prof);

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
