<?php

/* @Inventario/proveedor/show.html.twig */
class __TwigTemplate_a699fc77dfa042c42824d7f01d8d324bbec69b143b71f8bee5d178079561a0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/proveedor/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4cf6a634256eb88b8a5152fb08aa50279f0c662df1132d28ff7eda185c9fd6a = $this->env->getExtension("native_profiler");
        $__internal_b4cf6a634256eb88b8a5152fb08aa50279f0c662df1132d28ff7eda185c9fd6a->enter($__internal_b4cf6a634256eb88b8a5152fb08aa50279f0c662df1132d28ff7eda185c9fd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/proveedor/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4cf6a634256eb88b8a5152fb08aa50279f0c662df1132d28ff7eda185c9fd6a->leave($__internal_b4cf6a634256eb88b8a5152fb08aa50279f0c662df1132d28ff7eda185c9fd6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c22aadb2b4160253af505877d519d757dbb300c0faf16d6b97fcdef8e4e867e = $this->env->getExtension("native_profiler");
        $__internal_2c22aadb2b4160253af505877d519d757dbb300c0faf16d6b97fcdef8e4e867e->enter($__internal_2c22aadb2b4160253af505877d519d757dbb300c0faf16d6b97fcdef8e4e867e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proveedor</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nit</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "nit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "correo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_edit", array("id" => $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2c22aadb2b4160253af505877d519d757dbb300c0faf16d6b97fcdef8e4e867e->leave($__internal_2c22aadb2b4160253af505877d519d757dbb300c0faf16d6b97fcdef8e4e867e_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/proveedor/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Proveedor</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ proveedor.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nit</th>*/
/*                 <td>{{ proveedor.nit }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ proveedor.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefono</th>*/
/*                 <td>{{ proveedor.telefono }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Correo</th>*/
/*                 <td>{{ proveedor.correo }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('yes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('yes_edit', { 'id': proveedor.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
