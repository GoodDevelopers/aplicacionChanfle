<?php

/* UsuariosBundle:empleado:show.html.twig */
class __TwigTemplate_37d64fa3fac8b6a252e8ac2cd4e5e8098b5df3c041139f8dc65a9d85b3fdf06c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:empleado:show.html.twig", 1);
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
        $__internal_0c4de1a969298983e09af9db3783d1ae7da611c4276ea12a79023a7500be613b = $this->env->getExtension("native_profiler");
        $__internal_0c4de1a969298983e09af9db3783d1ae7da611c4276ea12a79023a7500be613b->enter($__internal_0c4de1a969298983e09af9db3783d1ae7da611c4276ea12a79023a7500be613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:empleado:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c4de1a969298983e09af9db3783d1ae7da611c4276ea12a79023a7500be613b->leave($__internal_0c4de1a969298983e09af9db3783d1ae7da611c4276ea12a79023a7500be613b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7de6357be92dafb6fa5e771e3e6302177b3024c254eeb1d6efbdc38ea74e3d0a = $this->env->getExtension("native_profiler");
        $__internal_7de6357be92dafb6fa5e771e3e6302177b3024c254eeb1d6efbdc38ea74e3d0a->enter($__internal_7de6357be92dafb6fa5e771e3e6302177b3024c254eeb1d6efbdc38ea74e3d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7de6357be92dafb6fa5e771e3e6302177b3024c254eeb1d6efbdc38ea74e3d0a->leave($__internal_7de6357be92dafb6fa5e771e3e6302177b3024c254eeb1d6efbdc38ea74e3d0a_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:empleado:show.html.twig";
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
