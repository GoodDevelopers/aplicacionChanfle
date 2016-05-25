<?php

/* @Usuarios/cliente/pdf.html.twig */
class __TwigTemplate_b9792ca310d9a1d6fb3410b6dca8e87625edb23e772d06b8baf56900862e574c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef01078f2cb2935cab49e2813937783d9cf28e877f35b8a1b526dcfa87273436 = $this->env->getExtension("native_profiler");
        $__internal_ef01078f2cb2935cab49e2813937783d9cf28e877f35b8a1b526dcfa87273436->enter($__internal_ef01078f2cb2935cab49e2813937783d9cf28e877f35b8a1b526dcfa87273436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/cliente/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" page-size=\"letter\" />
        <title>Holis</title>
        <link type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "httpHost", array())) . $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    </head>
    <body>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover table-condensed text-center\">
                            <thead>
                                <tr class=\"active info\">
                                    <th>NUIP</th>
                                    <th>NOMBRE</th>
                                    <th>FECHA DE NACIMIENTO</th>
                                    <th>PUNTOS ACUMULADOS</th>
                                    <th>EMAIL</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody id=\"cuerpoTabla\">
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 26
            echo "                                    <tr>
                                        <td><a href=\"#\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nuip", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 29
            if ($this->getAttribute($context["cliente"], "fechaDeNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "fechaDeNacimiento", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "puntosAcumulados", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <ul class=\"list-inline text-center\">
                                                <li>
                                                    <a href=\"#\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" class=\"btn btn-danger\" role=\"button\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>";
        
        $__internal_ef01078f2cb2935cab49e2813937783d9cf28e877f35b8a1b526dcfa87273436->leave($__internal_ef01078f2cb2935cab49e2813937783d9cf28e877f35b8a1b526dcfa87273436_prof);

    }

    public function getTemplateName()
    {
        return "@Usuarios/cliente/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 44,  76 => 31,  72 => 30,  66 => 29,  62 => 28,  58 => 27,  55 => 26,  51 => 25,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" page-size="letter" />*/
/*         <title>Holis</title>*/
/*         <link type="text/css" href="{{app.request.scheme ~'://' ~ app.request.httpHost ~ asset ('bundles/app/css/bootstrap.css')}}" rel="stylesheet" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered table-hover table-condensed text-center">*/
/*                             <thead>*/
/*                                 <tr class="active info">*/
/*                                     <th>NUIP</th>*/
/*                                     <th>NOMBRE</th>*/
/*                                     <th>FECHA DE NACIMIENTO</th>*/
/*                                     <th>PUNTOS ACUMULADOS</th>*/
/*                                     <th>EMAIL</th>*/
/*                                     <th>ACCIONES</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody id="cuerpoTabla">*/
/*                                 {% for cliente in clientes %}*/
/*                                     <tr>*/
/*                                         <td><a href="#">{{ cliente.nuip }}</a></td>*/
/*                                         <td>{{ cliente.nombre }}</td>*/
/*                                         <td>{% if cliente.fechaDeNacimiento %}{{ cliente.fechaDeNacimiento|date('d-m-Y') }}{% endif %}</td>*/
/*                                         <td>{{ cliente.puntosAcumulados }}</td>*/
/*                                         <td>{{ cliente.email }}</td>*/
/*                                         <td>*/
/*                                             <ul class="list-inline text-center">*/
/*                                                 <li>*/
/*                                                     <a href="#" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="#" class="btn btn-danger" role="button">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
