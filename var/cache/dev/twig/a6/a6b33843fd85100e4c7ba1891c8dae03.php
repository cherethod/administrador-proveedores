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

/* administrator/agregar.html.twig */
class __TwigTemplate_8cb7a64d432038897df4c61382f97b30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administrator/agregar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administrator/agregar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "administrator/agregar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administrador de proveedores";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"admin__container\">
            <div class=\"header__container\">
                <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"link__item\">Ir al inicio</a>
            </div>
            <div class=\"main__container add__provider\">
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agregar_proveedor"]) || array_key_exists("agregar_proveedor", $context) ? $context["agregar_proveedor"] : (function () { throw new RuntimeError('Variable "agregar_proveedor" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agregar_proveedor"]) || array_key_exists("agregar_proveedor", $context) ? $context["agregar_proveedor"] : (function () { throw new RuntimeError('Variable "agregar_proveedor" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), 'row');
        echo "
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agregar_proveedor"]) || array_key_exists("agregar_proveedor", $context) ? $context["agregar_proveedor"] : (function () { throw new RuntimeError('Variable "agregar_proveedor" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'row');
        echo "
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agregar_proveedor"]) || array_key_exists("agregar_proveedor", $context) ? $context["agregar_proveedor"] : (function () { throw new RuntimeError('Variable "agregar_proveedor" does not exist.', 15, $this->source); })()), "telefono", [], "any", false, false, false, 15), 'row');
        echo "
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agregar_proveedor"]) || array_key_exists("agregar_proveedor", $context) ? $context["agregar_proveedor"] : (function () { throw new RuntimeError('Variable "agregar_proveedor" does not exist.', 16, $this->source); })()), "activo", [], "any", false, false, false, 16), 'row');
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agregar_proveedor"]) || array_key_exists("agregar_proveedor", $context) ? $context["agregar_proveedor"] : (function () { throw new RuntimeError('Variable "agregar_proveedor" does not exist.', 17, $this->source); })()), "tipoProveedor", [], "any", false, false, false, 17), 'row');
        echo "
                    <div class=\"btns__container\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agregar_proveedor"]) || array_key_exists("agregar_proveedor", $context) ? $context["agregar_proveedor"] : (function () { throw new RuntimeError('Variable "agregar_proveedor" does not exist.', 19, $this->source); })()), "submit", [], "any", false, false, false, 19), 'row');
        echo "
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agregar_proveedor"]) || array_key_exists("agregar_proveedor", $context) ? $context["agregar_proveedor"] : (function () { throw new RuntimeError('Variable "agregar_proveedor" does not exist.', 20, $this->source); })()), "cancelar", [], "any", false, false, false, 20), 'row');
        echo "
                    </div>
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agregar_proveedor"]) || array_key_exists("agregar_proveedor", $context) ? $context["agregar_proveedor"] : (function () { throw new RuntimeError('Variable "agregar_proveedor" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administrator/agregar.html.twig";
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
        return array (  155 => 22,  150 => 20,  146 => 19,  141 => 17,  137 => 16,  133 => 15,  129 => 14,  125 => 13,  121 => 12,  115 => 9,  110 => 6,  100 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administrador de proveedores{% endblock %}
{% block stylesheets %} {{ parent() }} {% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"admin__container\">
            <div class=\"header__container\">
                <a href=\"{{ path('index') }}\" class=\"link__item\">Ir al inicio</a>
            </div>
            <div class=\"main__container add__provider\">
                {{ form_start(agregar_proveedor) }}
                        {{ form_row(agregar_proveedor.nombre) }}
                        {{ form_row(agregar_proveedor.email) }}
                        {{ form_row(agregar_proveedor.telefono) }}
                        {{ form_row(agregar_proveedor.activo) }}
                        {{ form_row(agregar_proveedor.tipoProveedor) }}
                    <div class=\"btns__container\">
                        {{ form_row(agregar_proveedor.submit) }}
                        {{ form_row(agregar_proveedor.cancelar) }}
                    </div>
                {{ form_end(agregar_proveedor) }}
            </div>
        </div>
    </div>

{% endblock %}", "administrator/agregar.html.twig", "C:\\xampp\\htdocs\\administrador-proveedores\\templates\\administrator\\agregar.html.twig");
    }
}
