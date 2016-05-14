<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bfded0e91125bfecadb913d2e816492c6388dc87e2ea3408f4606517ecffa0ce extends Twig_Template
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
        $__internal_50a8b2672455d64b9864b9d7fbbcaa79638514245a92eb51b390dad1fe2d4bdd = $this->env->getExtension("native_profiler");
        $__internal_50a8b2672455d64b9864b9d7fbbcaa79638514245a92eb51b390dad1fe2d4bdd->enter($__internal_50a8b2672455d64b9864b9d7fbbcaa79638514245a92eb51b390dad1fe2d4bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_50a8b2672455d64b9864b9d7fbbcaa79638514245a92eb51b390dad1fe2d4bdd->leave($__internal_50a8b2672455d64b9864b9d7fbbcaa79638514245a92eb51b390dad1fe2d4bdd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_852c5559b9a858b54212ec734401b87313c4fbf54763d54316c75f34cf08449e = $this->env->getExtension("native_profiler");
        $__internal_852c5559b9a858b54212ec734401b87313c4fbf54763d54316c75f34cf08449e->enter($__internal_852c5559b9a858b54212ec734401b87313c4fbf54763d54316c75f34cf08449e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_852c5559b9a858b54212ec734401b87313c4fbf54763d54316c75f34cf08449e->leave($__internal_852c5559b9a858b54212ec734401b87313c4fbf54763d54316c75f34cf08449e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8fbf9e7082cfea292beb7d09f9727959d22be151d9f0854a0a1c8905a5e146ec = $this->env->getExtension("native_profiler");
        $__internal_8fbf9e7082cfea292beb7d09f9727959d22be151d9f0854a0a1c8905a5e146ec->enter($__internal_8fbf9e7082cfea292beb7d09f9727959d22be151d9f0854a0a1c8905a5e146ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8fbf9e7082cfea292beb7d09f9727959d22be151d9f0854a0a1c8905a5e146ec->leave($__internal_8fbf9e7082cfea292beb7d09f9727959d22be151d9f0854a0a1c8905a5e146ec_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_71e208eb604f2998822d51635ee02a6321cd831954102a4c4b806e1796a93e57 = $this->env->getExtension("native_profiler");
        $__internal_71e208eb604f2998822d51635ee02a6321cd831954102a4c4b806e1796a93e57->enter($__internal_71e208eb604f2998822d51635ee02a6321cd831954102a4c4b806e1796a93e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_71e208eb604f2998822d51635ee02a6321cd831954102a4c4b806e1796a93e57->leave($__internal_71e208eb604f2998822d51635ee02a6321cd831954102a4c4b806e1796a93e57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
