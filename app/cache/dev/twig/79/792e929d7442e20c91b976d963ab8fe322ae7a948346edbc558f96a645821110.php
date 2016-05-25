<?php

/* @Usuarios/empleado/show.html.twig */
class __TwigTemplate_0f7bcd0344952813852306c6e1d91ff887033d66bff69011ed9dd35f58b11b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Usuarios/empleado/show.html.twig", 1);
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
        $__internal_5f29e88ba0c95551c5cd1baf998b0f199a5a3aaa6edda97a8541cfa88098d9a1 = $this->env->getExtension("native_profiler");
        $__internal_5f29e88ba0c95551c5cd1baf998b0f199a5a3aaa6edda97a8541cfa88098d9a1->enter($__internal_5f29e88ba0c95551c5cd1baf998b0f199a5a3aaa6edda97a8541cfa88098d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/empleado/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f29e88ba0c95551c5cd1baf998b0f199a5a3aaa6edda97a8541cfa88098d9a1->leave($__internal_5f29e88ba0c95551c5cd1baf998b0f199a5a3aaa6edda97a8541cfa88098d9a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e01fc841bcbcc4f9e41dc47ea719e1dd0d4efd16b18f245b5e8109d6a1a9ca8 = $this->env->getExtension("native_profiler");
        $__internal_4e01fc841bcbcc4f9e41dc47ea719e1dd0d4efd16b18f245b5e8109d6a1a9ca8->enter($__internal_4e01fc841bcbcc4f9e41dc47ea719e1dd0d4efd16b18f245b5e8109d6a1a9ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e01fc841bcbcc4f9e41dc47ea719e1dd0d4efd16b18f245b5e8109d6a1a9ca8->leave($__internal_4e01fc841bcbcc4f9e41dc47ea719e1dd0d4efd16b18f245b5e8109d6a1a9ca8_prof);

    }

    public function getTemplateName()
    {
        return "@Usuarios/empleado/show.html.twig";
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
