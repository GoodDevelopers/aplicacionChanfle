<?php

/* UsuariosBundle:Empleado:index.html.twig */
class __TwigTemplate_1ccd92b4b530ce2906a20668a2c99ebd19f7159a10a2e2703ae5e2c8eb490cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:Empleado:index.html.twig", 1);
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
        $__internal_6a3241b0f4be2b1c7562719a41f35d6d98530737d1457c3a87b6b93405428540 = $this->env->getExtension("native_profiler");
        $__internal_6a3241b0f4be2b1c7562719a41f35d6d98530737d1457c3a87b6b93405428540->enter($__internal_6a3241b0f4be2b1c7562719a41f35d6d98530737d1457c3a87b6b93405428540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:Empleado:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a3241b0f4be2b1c7562719a41f35d6d98530737d1457c3a87b6b93405428540->leave($__internal_6a3241b0f4be2b1c7562719a41f35d6d98530737d1457c3a87b6b93405428540_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20a6a93b6a8dca5f29a635717e2b6205f2c18ddbbd1b9bd46a35310094d2b1c8 = $this->env->getExtension("native_profiler");
        $__internal_20a6a93b6a8dca5f29a635717e2b6205f2c18ddbbd1b9bd46a35310094d2b1c8->enter($__internal_20a6a93b6a8dca5f29a635717e2b6205f2c18ddbbd1b9bd46a35310094d2b1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empleado list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nuip</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Esusuario</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empleados"]) ? $context["empleados"] : $this->getContext($context, "empleados")));
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_show", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "nuip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["empleado"], "esUsuario", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_show", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_edit", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_20a6a93b6a8dca5f29a635717e2b6205f2c18ddbbd1b9bd46a35310094d2b1c8->leave($__internal_20a6a93b6a8dca5f29a635717e2b6205f2c18ddbbd1b9bd46a35310094d2b1c8_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:Empleado:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  115 => 39,  103 => 33,  97 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Empleado list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nuip</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Apellido</th>*/
/*                 <th>Telefono</th>*/
/*                 <th>Esusuario</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for empleado in empleados %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('UsuariosBundle_empleado_show', { 'id': empleado.id }) }}">{{ empleado.id }}</a></td>*/
/*                 <td>{{ empleado.nuip }}</td>*/
/*                 <td>{{ empleado.nombre }}</td>*/
/*                 <td>{{ empleado.apellido }}</td>*/
/*                 <td>{{ empleado.telefono }}</td>*/
/*                 <td>{% if empleado.esUsuario %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('UsuariosBundle_empleado_show', { 'id': empleado.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('UsuariosBundle_empleado_edit', { 'id': empleado.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('UsuariosBundle_empleado_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
