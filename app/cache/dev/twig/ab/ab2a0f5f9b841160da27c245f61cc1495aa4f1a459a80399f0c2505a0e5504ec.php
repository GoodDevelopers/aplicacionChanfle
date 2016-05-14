<?php

/* InventarioBundle:proveedor:show.html.twig */
class __TwigTemplate_330d43b7d50544687952a4c338b7afa23e950efc35a23881996d4ee42f7da225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:proveedor:show.html.twig", 1);
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
        $__internal_6fde65a5437eb533142a1ce4f27585a62f1a104517b581caee7660c5999b4b70 = $this->env->getExtension("native_profiler");
        $__internal_6fde65a5437eb533142a1ce4f27585a62f1a104517b581caee7660c5999b4b70->enter($__internal_6fde65a5437eb533142a1ce4f27585a62f1a104517b581caee7660c5999b4b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:proveedor:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fde65a5437eb533142a1ce4f27585a62f1a104517b581caee7660c5999b4b70->leave($__internal_6fde65a5437eb533142a1ce4f27585a62f1a104517b581caee7660c5999b4b70_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ac20e53b12d046bf342265aacc5d61871d5aab70041d9a0ab21af83239f8dbf = $this->env->getExtension("native_profiler");
        $__internal_4ac20e53b12d046bf342265aacc5d61871d5aab70041d9a0ab21af83239f8dbf->enter($__internal_4ac20e53b12d046bf342265aacc5d61871d5aab70041d9a0ab21af83239f8dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ac20e53b12d046bf342265aacc5d61871d5aab70041d9a0ab21af83239f8dbf->leave($__internal_4ac20e53b12d046bf342265aacc5d61871d5aab70041d9a0ab21af83239f8dbf_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:proveedor:show.html.twig";
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
