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

/* settings_profile/_profile_form.html.twig */
class __TwigTemplate_ba0a084900a19d774be4a1c9dee3342a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_profile_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_profile_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Your Name"]);
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        echo "

";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "bio", [], "any", false, false, false, 4), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Bio"]);
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "bio", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        echo "

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "discussitUsername", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "DiscussIt username"]);
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "discussitUsername", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        echo "
    </div>

    <div>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "location", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Location"]);
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "location", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        echo "
    </div>
</div>

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">

</div>

";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Date of birth"]);
        echo "
";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 bg-white rounded-md border p-2 mt-1 mb-2"]]);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "settings_profile/_profile_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  89 => 23,  78 => 15,  74 => 14,  67 => 10,  63 => 9,  56 => 5,  52 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_label(form.name, 'Your Name', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
{{ form_widget(form.name, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}

{{ form_label(form.bio, 'Bio', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
{{ form_widget(form.bio, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        {{ form_label(form.discussitUsername, 'DiscussIt username', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        {{ form_widget(form.discussitUsername, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
    </div>

    <div>
        {{ form_label(form.location, 'Location', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        {{ form_widget(form.location, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
    </div>
</div>

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">

</div>

{{ form_label(form.dateOfBirth, 'Date of birth', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
{{ form_widget(form.dateOfBirth, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 bg-white rounded-md border p-2 mt-1 mb-2'}}) }}", "settings_profile/_profile_form.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/settings_profile/_profile_form.html.twig");
    }
}
