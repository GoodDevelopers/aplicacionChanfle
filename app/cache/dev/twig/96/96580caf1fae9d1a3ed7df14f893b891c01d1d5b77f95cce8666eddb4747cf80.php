<?php

/* UsuariosBundle:empleado:show.html.twig */
class __TwigTemplate_29cc5dd750100248d9c6262d3031e0471be85424953fa8e4f53f392c01627727 extends Twig_Template
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
        $__internal_c33e2efa27a0f75acce2f81cfbfe7ff97ca768598fc2e8910f9111cf8932fa5e = $this->env->getExtension("native_profiler");
        $__internal_c33e2efa27a0f75acce2f81cfbfe7ff97ca768598fc2e8910f9111cf8932fa5e->enter($__internal_c33e2efa27a0f75acce2f81cfbfe7ff97ca768598fc2e8910f9111cf8932fa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:empleado:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33e2efa27a0f75acce2f81cfbfe7ff97ca768598fc2e8910f9111cf8932fa5e->leave($__internal_c33e2efa27a0f75acce2f81cfbfe7ff97ca768598fc2e8910f9111cf8932fa5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26e9de6ad4c971ca25f60bad7c3bc2785ca94ddf84842173ce87b2b3d2fdfa4a = $this->env->getExtension("native_profiler");
        $__internal_26e9de6ad4c971ca25f60bad7c3bc2785ca94ddf84842173ce87b2b3d2fdfa4a->enter($__internal_26e9de6ad4c971ca25f60bad7c3bc2785ca94ddf84842173ce87b2b3d2fdfa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26e9de6ad4c971ca25f60bad7c3bc2785ca94ddf84842173ce87b2b3d2fdfa4a->leave($__internal_26e9de6ad4c971ca25f60bad7c3bc2785ca94ddf84842173ce87b2b3d2fdfa4a_prof);

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
