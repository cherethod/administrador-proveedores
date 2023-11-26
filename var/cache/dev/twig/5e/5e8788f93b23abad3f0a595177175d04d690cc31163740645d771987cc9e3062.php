<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* administrator/administrator.html.twig */
class __TwigTemplate_2f01f59fca8d75bf4eb34cce9f249d7565d360f9d927a854af1b64bd59c4f5d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administrator/administrator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administrator/administrator.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "administrator/administrator.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administrador de proveedores";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <div class=\"admin__container\">
            <div class=\"header__container\">
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"link__item\">Ir al inicio</a>
            </div>
            <div class=\"main__container\">
                <div class=\"results__container\">
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agregar");
        echo "\" class=\"btn__primary btn__primary--link\">Agregar</a>

                    <div class=\"results\">
                        <div class=\"result result__title\">
                            <span class=\"result__data\">Nombre</span>
                            <span class=\"result__data\">Correo</span>
                            <span class=\"result__data\">Teléfono</span>
                            <span class=\"result__data\">Tipo de proveedor</span>
                            <span class=\"result__data\">Activo</span>
                            <span class=\"result__data\">Acciones</span>
                        </div>


                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listaProveedores"]) || array_key_exists("listaProveedores", $context) ? $context["listaProveedores"] : (function () { throw new RuntimeError('Variable "listaProveedores" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 28
            echo "                        <div class=\"result\">
                            <span class=\"result__data\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "nombre", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
                            <span class=\"result__data\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</span>
                            <span class=\"result__data\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "telefono", [], "any", false, false, false, 31), "html", null, true);
            echo "</span>
                            <span class=\"result__data\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proveedor"], "tipoProveedor", [], "any", false, false, false, 32), "nombre", [], "any", false, false, false, 32), "html", null, true);
            echo "</span>
                            <span class=\"result__data\">";
            // line 33
            echo ((twig_get_attribute($this->env, $this->source, $context["proveedor"], "activo", [], "any", false, false, false, 33)) ? ("Si") : ("No"));
            echo "</span>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar", ["idProveedor" => twig_get_attribute($this->env, $this->source, $context["proveedor"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn__small btn--green\">
                                <i class=\"fa-solid fa-pen-to-square\"></i>
                            </a>
                            <a href=\"#\" class=\"btn__small btn--red delete__provider\" data-providername=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "nombre", [], "any", false, false, false, 37), "html", null, true);
            echo "\" data-providerid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
                                <i class=\"fa-solid fa-trash\"></i>
                            </a>

                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        const providers = document.querySelectorAll('.delete__provider');
        providers.forEach(provider => {
            provider.addEventListener('click', e => {
                const elem = e.target.closest('.delete__provider');
                e.preventDefault();
                if (confirm(`¿Seguro que desea eliminar el proveedor: \${elem.getAttribute('data-providername')}?`)) {
                 window.location = `./eliminar/\${elem.getAttribute('data-providerid')}`;
                }

            })
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administrator/administrator.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  207 => 43,  193 => 37,  187 => 34,  183 => 33,  179 => 32,  175 => 31,  171 => 30,  167 => 29,  164 => 28,  160 => 27,  144 => 14,  137 => 10,  132 => 7,  122 => 6,  101 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administrador de proveedores{% endblock %}
{% block stylesheets %} {{ parent() }} {% endblock %}
    {% block javascripts %} {{ parent() }} {% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"admin__container\">
            <div class=\"header__container\">
                <a href=\"{{ path('index') }}\" class=\"link__item\">Ir al inicio</a>
            </div>
            <div class=\"main__container\">
                <div class=\"results__container\">
                    <a href=\"{{ path('agregar') }}\" class=\"btn__primary btn__primary--link\">Agregar</a>

                    <div class=\"results\">
                        <div class=\"result result__title\">
                            <span class=\"result__data\">Nombre</span>
                            <span class=\"result__data\">Correo</span>
                            <span class=\"result__data\">Teléfono</span>
                            <span class=\"result__data\">Tipo de proveedor</span>
                            <span class=\"result__data\">Activo</span>
                            <span class=\"result__data\">Acciones</span>
                        </div>


                        {% for proveedor in listaProveedores %}
                        <div class=\"result\">
                            <span class=\"result__data\">{{ proveedor.nombre }}</span>
                            <span class=\"result__data\">{{ proveedor.email }}</span>
                            <span class=\"result__data\">{{ proveedor.telefono }}</span>
                            <span class=\"result__data\">{{ proveedor.tipoProveedor.nombre }}</span>
                            <span class=\"result__data\">{{ proveedor.activo ? 'Si' : 'No' }}</span>
                            <a href=\"{{ path('editar', {'idProveedor': proveedor.id}) }}\" class=\"btn__small btn--green\">
                                <i class=\"fa-solid fa-pen-to-square\"></i>
                            </a>
                            <a href=\"#\" class=\"btn__small btn--red delete__provider\" data-providername=\"{{ proveedor.nombre }}\" data-providerid=\"{{ proveedor.id }}\">
                                <i class=\"fa-solid fa-trash\"></i>
                            </a>

                        </div>
                        {% endfor %}

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        const providers = document.querySelectorAll('.delete__provider');
        providers.forEach(provider => {
            provider.addEventListener('click', e => {
                const elem = e.target.closest('.delete__provider');
                e.preventDefault();
                if (confirm(`¿Seguro que desea eliminar el proveedor: \${elem.getAttribute('data-providername')}?`)) {
                 window.location = `./eliminar/\${elem.getAttribute('data-providerid')}`;
                }

            })
        })
    </script>
{% endblock %}", "administrator/administrator.html.twig", "C:\\xampp\\htdocs\\administrador-proveedores\\templates\\administrator\\administrator.html.twig");
    }
}
