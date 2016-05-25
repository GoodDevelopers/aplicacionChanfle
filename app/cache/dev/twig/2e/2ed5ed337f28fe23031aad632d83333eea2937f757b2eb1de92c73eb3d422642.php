<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_59f2a0aa4dd0a791e84e4e1f9f861d3f5e789e4a7f2ac053e630e48869541859 extends Twig_Template
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
        $__internal_67016eaef7dc7d57fce641e8396849cd11829cbffce352b5671288010c86461b = $this->env->getExtension("native_profiler");
        $__internal_67016eaef7dc7d57fce641e8396849cd11829cbffce352b5671288010c86461b->enter($__internal_67016eaef7dc7d57fce641e8396849cd11829cbffce352b5671288010c86461b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_67016eaef7dc7d57fce641e8396849cd11829cbffce352b5671288010c86461b->leave($__internal_67016eaef7dc7d57fce641e8396849cd11829cbffce352b5671288010c86461b_prof);

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
