<?php

/* UsuariosBundle:Empleado:show.html.twig */
class __TwigTemplate_6e1cfec35f4e3b92b44d6cda4adaea6d2c1ad5e694a3d1a4a9e44638d605b881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:Empleado:show.html.twig", 1);
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
        $__internal_531da99807c5dc7f2f9b9bb8f38a8db38fbc9f034d1dbb3f687cfac21e47ce5b = $this->env->getExtension("native_profiler");
        $__internal_531da99807c5dc7f2f9b9bb8f38a8db38fbc9f034d1dbb3f687cfac21e47ce5b->enter($__internal_531da99807c5dc7f2f9b9bb8f38a8db38fbc9f034d1dbb3f687cfac21e47ce5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:Empleado:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_531da99807c5dc7f2f9b9bb8f38a8db38fbc9f034d1dbb3f687cfac21e47ce5b->leave($__internal_531da99807c5dc7f2f9b9bb8f38a8db38fbc9f034d1dbb3f687cfac21e47ce5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e04f54801f39eec9e84d36352ed65c2697856d71d2f6250762ab4b4d019e70f4 = $this->env->getExtension("native_profiler");
        $__internal_e04f54801f39eec9e84d36352ed65c2697856d71d2f6250762ab4b4d019e70f4->enter($__internal_e04f54801f39eec9e84d36352ed65c2697856d71d2f6250762ab4b4d019e70f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empleado</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nuip</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "nuip", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Esusuario</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "esUsuario", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_edit", array("id" => $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "id", array()))), "html", null, true);
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
        
        $__internal_e04f54801f39eec9e84d36352ed65c2697856d71d2f6250762ab4b4d019e70f4->leave($__internal_e04f54801f39eec9e84d36352ed65c2697856d71d2f6250762ab4b4d019e70f4_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:Empleado:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  102 => 39,  96 => 36,  90 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Empleado</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ empleado.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nuip</th>*/
/*                 <td>{{ empleado.nuip }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ empleado.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefono</th>*/
/*                 <td>{{ empleado.telefono }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Esusuario</th>*/
/*                 <td>{% if empleado.esUsuario %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('UsuariosBundle_empleado_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('UsuariosBundle_empleado_edit', { 'id': empleado.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
