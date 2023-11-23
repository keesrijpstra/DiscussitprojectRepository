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

/* settings_profile/_settings_profile_tabs.html.twig */
class __TwigTemplate_4b27ea138a9f8d50aafe3ee54b36e4c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_settings_profile_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_settings_profile_tabs.html.twig"));

        // line 1
        $this->loadTemplate("settings_profile/_settings_profile_tabs.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 1, "998352565")->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "settings_profile/_settings_profile_tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed'shared/_tab.html.twig' with { route: 'app_settings_profile'} %}
            {% block content %}
                Your Profile Settings
            {% endblock %}
            {% block path %}
                {{ path('app_settings_profile') }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_settings_profile_image', classes: 'ml-2'} %}
            {% block content %}
                Your Profile Image
            {% endblock %}
            {% block path %}
                {{ path('app_settings_profile_image') }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "settings_profile/_settings_profile_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/settings_profile/_settings_profile_tabs.html.twig");
    }
}


/* settings_profile/_settings_profile_tabs.html.twig */
class __TwigTemplate_4b27ea138a9f8d50aafe3ee54b36e4c5___998352565 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tabs' => [$this, 'block_tabs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "shared/_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_settings_profile_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_settings_profile_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tabs.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        // line 3
        echo "        ";
        $this->loadTemplate("settings_profile/_settings_profile_tabs.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 3, "2131491420")->display(twig_array_merge($context, ["route" => "app_settings_profile"]));
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("settings_profile/_settings_profile_tabs.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 12, "1663534708")->display(twig_array_merge($context, ["route" => "app_settings_profile_image", "classes" => "ml-2"]));
        // line 20
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "settings_profile/_settings_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 20,  147 => 12,  144 => 11,  141 => 3,  131 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed'shared/_tab.html.twig' with { route: 'app_settings_profile'} %}
            {% block content %}
                Your Profile Settings
            {% endblock %}
            {% block path %}
                {{ path('app_settings_profile') }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_settings_profile_image', classes: 'ml-2'} %}
            {% block content %}
                Your Profile Image
            {% endblock %}
            {% block path %}
                {{ path('app_settings_profile_image') }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "settings_profile/_settings_profile_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/settings_profile/_settings_profile_tabs.html.twig");
    }
}


/* settings_profile/_settings_profile_tabs.html.twig */
class __TwigTemplate_4b27ea138a9f8d50aafe3ee54b36e4c5___2131491420 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_settings_profile_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_settings_profile_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "                Your Profile Settings
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 8
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_profile");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "settings_profile/_settings_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 8,  265 => 7,  254 => 5,  244 => 4,  221 => 3,  149 => 20,  147 => 12,  144 => 11,  141 => 3,  131 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed'shared/_tab.html.twig' with { route: 'app_settings_profile'} %}
            {% block content %}
                Your Profile Settings
            {% endblock %}
            {% block path %}
                {{ path('app_settings_profile') }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_settings_profile_image', classes: 'ml-2'} %}
            {% block content %}
                Your Profile Image
            {% endblock %}
            {% block path %}
                {{ path('app_settings_profile_image') }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "settings_profile/_settings_profile_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/settings_profile/_settings_profile_tabs.html.twig");
    }
}


/* settings_profile/_settings_profile_tabs.html.twig */
class __TwigTemplate_4b27ea138a9f8d50aafe3ee54b36e4c5___1663534708 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_settings_profile_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_settings_profile_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "settings_profile/_settings_profile_tabs.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "                Your Profile Image
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 17
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_profile_image");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "settings_profile/_settings_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 17,  394 => 16,  383 => 14,  373 => 13,  350 => 12,  275 => 8,  265 => 7,  254 => 5,  244 => 4,  221 => 3,  149 => 20,  147 => 12,  144 => 11,  141 => 3,  131 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed'shared/_tab.html.twig' with { route: 'app_settings_profile'} %}
            {% block content %}
                Your Profile Settings
            {% endblock %}
            {% block path %}
                {{ path('app_settings_profile') }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_settings_profile_image', classes: 'ml-2'} %}
            {% block content %}
                Your Profile Image
            {% endblock %}
            {% block path %}
                {{ path('app_settings_profile_image') }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "settings_profile/_settings_profile_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/settings_profile/_settings_profile_tabs.html.twig");
    }
}
