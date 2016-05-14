<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ae58fb79cac732bb36c1f0e5952dcbb0e0e725ddc4835e9f5ef7024afd1b84bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c7dc0c3316a4dc0590f004c1b9d6e24a03a201669196e49e5b1be7ea610830d = $this->env->getExtension("native_profiler");
        $__internal_2c7dc0c3316a4dc0590f004c1b9d6e24a03a201669196e49e5b1be7ea610830d->enter($__internal_2c7dc0c3316a4dc0590f004c1b9d6e24a03a201669196e49e5b1be7ea610830d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2c7dc0c3316a4dc0590f004c1b9d6e24a03a201669196e49e5b1be7ea610830d->leave($__internal_2c7dc0c3316a4dc0590f004c1b9d6e24a03a201669196e49e5b1be7ea610830d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1a2654cd4b2d5d5e2435a8b9b73ddf624caed6d24c3b33e6b7cfa52795d402a6 = $this->env->getExtension("native_profiler");
        $__internal_1a2654cd4b2d5d5e2435a8b9b73ddf624caed6d24c3b33e6b7cfa52795d402a6->enter($__internal_1a2654cd4b2d5d5e2435a8b9b73ddf624caed6d24c3b33e6b7cfa52795d402a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1a2654cd4b2d5d5e2435a8b9b73ddf624caed6d24c3b33e6b7cfa52795d402a6->leave($__internal_1a2654cd4b2d5d5e2435a8b9b73ddf624caed6d24c3b33e6b7cfa52795d402a6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f0920dd0d7b3409f4ff3850628fd1358a6cbafa38e33b2b4d9660d6878f849c6 = $this->env->getExtension("native_profiler");
        $__internal_f0920dd0d7b3409f4ff3850628fd1358a6cbafa38e33b2b4d9660d6878f849c6->enter($__internal_f0920dd0d7b3409f4ff3850628fd1358a6cbafa38e33b2b4d9660d6878f849c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f0920dd0d7b3409f4ff3850628fd1358a6cbafa38e33b2b4d9660d6878f849c6->leave($__internal_f0920dd0d7b3409f4ff3850628fd1358a6cbafa38e33b2b4d9660d6878f849c6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7ef1c3d900c8c4d3196cf2fc3e90db17227e2177e153a192672ec160cb258e95 = $this->env->getExtension("native_profiler");
        $__internal_7ef1c3d900c8c4d3196cf2fc3e90db17227e2177e153a192672ec160cb258e95->enter($__internal_7ef1c3d900c8c4d3196cf2fc3e90db17227e2177e153a192672ec160cb258e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7ef1c3d900c8c4d3196cf2fc3e90db17227e2177e153a192672ec160cb258e95->leave($__internal_7ef1c3d900c8c4d3196cf2fc3e90db17227e2177e153a192672ec160cb258e95_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
