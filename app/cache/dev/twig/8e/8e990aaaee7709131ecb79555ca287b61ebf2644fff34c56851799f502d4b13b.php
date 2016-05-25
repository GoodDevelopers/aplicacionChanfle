<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_049257af7e35335b552cb6dfb3bb158224b15a32de8b82ae984d4f10f1520bfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e287bea51953693b719a80d9528434222106dced909fa655a3da4549c2bc6508 = $this->env->getExtension("native_profiler");
        $__internal_e287bea51953693b719a80d9528434222106dced909fa655a3da4549c2bc6508->enter($__internal_e287bea51953693b719a80d9528434222106dced909fa655a3da4549c2bc6508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e287bea51953693b719a80d9528434222106dced909fa655a3da4549c2bc6508->leave($__internal_e287bea51953693b719a80d9528434222106dced909fa655a3da4549c2bc6508_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50ce428981ccae119b73edd6e412aa00012098346cc3ebd0e5db83a2f05eb61f = $this->env->getExtension("native_profiler");
        $__internal_50ce428981ccae119b73edd6e412aa00012098346cc3ebd0e5db83a2f05eb61f->enter($__internal_50ce428981ccae119b73edd6e412aa00012098346cc3ebd0e5db83a2f05eb61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_50ce428981ccae119b73edd6e412aa00012098346cc3ebd0e5db83a2f05eb61f->leave($__internal_50ce428981ccae119b73edd6e412aa00012098346cc3ebd0e5db83a2f05eb61f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
