<?php

/* InventarioBundle:ingresomateriaprima:new.html.twig */
class __TwigTemplate_6d0e5ab7b05bff3b132b23732bc8a650deebd84d8e09480f8cd5bcbfcfe9c9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:ingresomateriaprima:new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c405c24349031712f8c19bb325f8214a3b5ab0b516077075529f00b44560ab4 = $this->env->getExtension("native_profiler");
        $__internal_2c405c24349031712f8c19bb325f8214a3b5ab0b516077075529f00b44560ab4->enter($__internal_2c405c24349031712f8c19bb325f8214a3b5ab0b516077075529f00b44560ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:ingresomateriaprima:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c405c24349031712f8c19bb325f8214a3b5ab0b516077075529f00b44560ab4->leave($__internal_2c405c24349031712f8c19bb325f8214a3b5ab0b516077075529f00b44560ab4_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12873502c42f3b1963de33a39dcbc45e5868c7d7924a0f4ce8fb1cd426329722 = $this->env->getExtension("native_profiler");
        $__internal_12873502c42f3b1963de33a39dcbc45e5868c7d7924a0f4ce8fb1cd426329722->enter($__internal_12873502c42f3b1963de33a39dcbc45e5868c7d7924a0f4ce8fb1cd426329722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
";
        
        $__internal_12873502c42f3b1963de33a39dcbc45e5868c7d7924a0f4ce8fb1cd426329722->leave($__internal_12873502c42f3b1963de33a39dcbc45e5868c7d7924a0f4ce8fb1cd426329722_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_330d11e94c3659b6e861584a886b11d184a72bc2e489e795f5ec3ccd4d2cbbed = $this->env->getExtension("native_profiler");
        $__internal_330d11e94c3659b6e861584a886b11d184a72bc2e489e795f5ec3ccd4d2cbbed->enter($__internal_330d11e94c3659b6e861584a886b11d184a72bc2e489e795f5ec3ccd4d2cbbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 marginTitulo text-center\">Registrar Ingreso Materia Prima <span class=\"icon-listaIngresosMateria\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">
                ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 20
        echo "                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiaPrima", array()), 'label', array("label" => "Materia prima:"));
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiaPrima", array()), 'widget', array("id" => "materiaPrima", "attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'label', array("label" => "Cantidad:"));
        echo " <span id=\"cargando\"></span>
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("id" => "cantidad", "disabled" => "true", "attr" => array("class" => "form-control", "placeholder" => "Cantidad ingresada")));
        echo "
                    <p class=\"help-block\" id=\"msjUnidad\"></p>
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valor", array()), 'label', array("label" => "Valor:"));
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valor", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Valor total")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedor", array()), 'label', array("label" => "Proveedor:"));
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proveedor", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>


                <div class=\"form-group text-center\">
                    ";
        // line 41
        echo "                    <button type=\"submit\" class=\"btn btn-lg btn-success\">Registrar <span class=\"glyphicon glyphicon-floppy-saved\"></span></button>
                </div>
                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                <div>
                    <ul class=\"list-inline text-center\">
                        <li>
                            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("ingresomateriaprima_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_330d11e94c3659b6e861584a886b11d184a72bc2e489e795f5ec3ccd4d2cbbed->leave($__internal_330d11e94c3659b6e861584a886b11d184a72bc2e489e795f5ec3ccd4d2cbbed_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5afbe8377ef02d3a6cfd61752ab5a5ace638a9567e7a0a116fd04a37123c3f9d = $this->env->getExtension("native_profiler");
        $__internal_5afbe8377ef02d3a6cfd61752ab5a5ace638a9567e7a0a116fd04a37123c3f9d->enter($__internal_5afbe8377ef02d3a6cfd61752ab5a5ace638a9567e7a0a116fd04a37123c3f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).on('ready', function () {
            \$('#materiaPrima').change(function () {
                var idMateria = \$(this).val();
                console.log(idMateria);
                \$.ajax({
                    url: \"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("buscarMateria");
        echo "\",
                    data: ({id: idMateria}),
                    method: 'POST',
                    dataType: \"json\",
                    beforeSend: function () {
                        \$('#cargando').addClass('fa fa-spinner fa-pulse');
                    },
                    success: function (data) {
                        console.log('DATA:');
                        console.log(data);
                        console.log('------');
                        if (data === -1) {
                            \$('#cargando').removeClass('fa fa-spinner fa-pulse');
                            \$('#cantidad').prop('disabled', true);
                            \$('#msjUnidad').text('');
                            console.log('No encontro nada');
                        } else {
                            \$('#cargando').removeClass('fa fa-spinner fa-pulse');
                            \$('#cantidad').prop('disabled', false);
                            \$('#msjUnidad').text('La cantidad debe ser en ' + data['unidadDeMedida']);
                        }
                    }
                });
            });
        });
    </script>
";
        
        $__internal_5afbe8377ef02d3a6cfd61752ab5a5ace638a9567e7a0a116fd04a37123c3f9d->leave($__internal_5afbe8377ef02d3a6cfd61752ab5a5ace638a9567e7a0a116fd04a37123c3f9d_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:ingresomateriaprima:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 65,  156 => 58,  150 => 57,  135 => 48,  127 => 43,  123 => 41,  115 => 35,  111 => 34,  105 => 31,  101 => 30,  94 => 26,  90 => 25,  84 => 22,  80 => 21,  77 => 20,  73 => 18,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/otrosIconos.css')}}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 marginTitulo text-center">Registrar Ingreso Materia Prima <span class="icon-listaIngresosMateria"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-4 col-sm-offset-4">*/
/*                 {{ form_start(form) }}*/
/*                 {#                {{ form_widget(form) }}#}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.materiaPrima, "Materia prima:") }}*/
/*                     {{ form_widget(form.materiaPrima, {'id' : 'materiaPrima', 'attr':{'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.cantidad, "Cantidad:") }} <span id="cargando"></span>*/
/*                     {{ form_widget(form.cantidad, {'id' : 'cantidad', 'disabled' : 'true', 'attr':{'class' : 'form-control', 'placeholder' : 'Cantidad ingresada'}}) }}*/
/*                     <p class="help-block" id="msjUnidad"></p>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.valor, "Valor:") }}*/
/*                     {{ form_widget(form.valor, {'attr':{'class' : 'form-control', 'placeholder' : 'Valor total'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.proveedor, "Proveedor:") }}*/
/*                     {{ form_widget(form.proveedor, {'attr':{'class' : 'form-control'}}) }}*/
/*                 </div>*/
/* */
/* */
/*                 <div class="form-group text-center">*/
/*                     {#                    <input type="submit" value="Registrar" />#}*/
/*                     <button type="submit" class="btn btn-lg btn-success">Registrar <span class="glyphicon glyphicon-floppy-saved"></span></button>*/
/*                 </div>*/
/*                 {{ form_end(form) }}*/
/* */
/*                 <div>*/
/*                     <ul class="list-inline text-center">*/
/*                         <li>*/
/*                             <a href="{{ path('ingresomateriaprima_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*         $(document).on('ready', function () {*/
/*             $('#materiaPrima').change(function () {*/
/*                 var idMateria = $(this).val();*/
/*                 console.log(idMateria);*/
/*                 $.ajax({*/
/*                     url: "{{ path('buscarMateria') }}",*/
/*                     data: ({id: idMateria}),*/
/*                     method: 'POST',*/
/*                     dataType: "json",*/
/*                     beforeSend: function () {*/
/*                         $('#cargando').addClass('fa fa-spinner fa-pulse');*/
/*                     },*/
/*                     success: function (data) {*/
/*                         console.log('DATA:');*/
/*                         console.log(data);*/
/*                         console.log('------');*/
/*                         if (data === -1) {*/
/*                             $('#cargando').removeClass('fa fa-spinner fa-pulse');*/
/*                             $('#cantidad').prop('disabled', true);*/
/*                             $('#msjUnidad').text('');*/
/*                             console.log('No encontro nada');*/
/*                         } else {*/
/*                             $('#cargando').removeClass('fa fa-spinner fa-pulse');*/
/*                             $('#cantidad').prop('disabled', false);*/
/*                             $('#msjUnidad').text('La cantidad debe ser en ' + data['unidadDeMedida']);*/
/*                         }*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
