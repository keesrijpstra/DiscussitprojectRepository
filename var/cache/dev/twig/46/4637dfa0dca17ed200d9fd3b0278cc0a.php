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

/* registration/register.html.twig */
class __TwigTemplate_fa907b0c3befdd6f015d88c42587575b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bread' => [$this, 'block_bread'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        // line 6
        echo "    -> Register
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 11
            echo "        <div class=\"text-black bg-red-500 border-red-300 rounded-md\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "

    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
    <div class=\"text-xl\">
        Basic Information
    </div>
    <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
        Enter your credentials
    </div>
    <div>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700"], "label" => "Username (email)"]);
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300"]]);
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'errors');
        echo "
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <div>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "plainPassword", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700"], "label" => "Password"]);
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "plainPassword", [], "any", false, false, false, 31), "first", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300"]]);
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "plainPassword", [], "any", false, false, false, 32), "first", [], "any", false, false, false, 32), 'errors');
        echo "
        </div>
        <div>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "plainPassword", [], "any", false, false, false, 35), "second", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700"], "label" => "Repeated Password"]);
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "plainPassword", [], "any", false, false, false, 36), "second", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300"]]);
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), "second", [], "any", false, false, false, 37), 'errors');
        echo "
        </div>
    </div>

    <div class=\"flex items-center mt-4 mb-4\">
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "agreeTerms", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray border text-indigo-300 mr-2"]]);
        echo "
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "agreeTerms", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "text-sm text-gray-700 font-medium"], "label" => "Agree to terms"]);
        echo "
    </div>
    <div class=\"border-b border-gray-300\">

    </div>
    <div class=\"text-xl mt-4\">
        Your Profile
    </div>
    <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
        Enter more (optional) details about yourself. You can do it later.
    </div>

    ";
        // line 55
        echo twig_include($this->env, $context, "/settings_profile/_profile_form.html.twig", ["form" => twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "userProfile", [], "any", false, false, false, 55)]);
        echo "

    <div>
        <button type=\"submit\" class=\"bock w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-400 rounded-md border p-2 mt-4 mb-2\">Register</button>
    </div>
    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), 'form_end');
        echo "

    <div class=\"mt-2 text-center text-gray-600\">
        <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Already have an account?</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 63,  212 => 60,  204 => 55,  189 => 43,  185 => 42,  177 => 37,  173 => 36,  169 => 35,  163 => 32,  159 => 31,  155 => 30,  147 => 25,  143 => 24,  139 => 23,  128 => 15,  124 => 13,  115 => 11,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block bread %}
    -> Register
{% endblock %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"text-black bg-red-500 border-red-300 rounded-md\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}


    {{ form_start(registrationForm) }}
    <div class=\"text-xl\">
        Basic Information
    </div>
    <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
        Enter your credentials
    </div>
    <div>
        {{ form_label(registrationForm.email, 'Username (email)', {'label_attr': {'class': 'block text-sm text-gray-700'}}) }}
        {{ form_widget(registrationForm.email, {'attr': {'class': 'block w-full shadow-sm border-gray-300'}}) }}
        {{ form_errors(registrationForm.email) }}
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <div>
            {{ form_label(registrationForm.plainPassword.first, 'Password', {'label_attr': {'class': 'block text-sm text-gray-700'}}) }}
            {{ form_widget(registrationForm.plainPassword.first, {'attr': {'class': 'block w-full shadow-sm border-gray-300'}}) }}
            {{ form_errors(registrationForm.plainPassword.first) }}
        </div>
        <div>
            {{ form_label(registrationForm.plainPassword.second, 'Repeated Password', {'label_attr': {'class': 'block text-sm text-gray-700'}}) }}
            {{ form_widget(registrationForm.plainPassword.second, {'attr': {'class': 'block w-full shadow-sm border-gray-300'}}) }}
            {{ form_errors(registrationForm.plainPassword.second) }}
        </div>
    </div>

    <div class=\"flex items-center mt-4 mb-4\">
        {{ form_widget(registrationForm.agreeTerms, {'attr':  {'class': 'h-4 w-4 rounded border-gray border text-indigo-300 mr-2'}}) }}
        {{ form_label(registrationForm.agreeTerms, 'Agree to terms', {'label_attr': {'class': 'text-sm text-gray-700 font-medium'}}) }}
    </div>
    <div class=\"border-b border-gray-300\">

    </div>
    <div class=\"text-xl mt-4\">
        Your Profile
    </div>
    <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
        Enter more (optional) details about yourself. You can do it later.
    </div>

    {{ include('/settings_profile/_profile_form.html.twig', {form: registrationForm.userProfile }) }}

    <div>
        <button type=\"submit\" class=\"bock w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-400 rounded-md border p-2 mt-4 mb-2\">Register</button>
    </div>
    {{ form_end(registrationForm) }}

    <div class=\"mt-2 text-center text-gray-600\">
        <a href=\"{{ path('app_login') }}\">Already have an account?</a>
    </div>
{% endblock %}
", "registration/register.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/registration/register.html.twig");
    }
}
