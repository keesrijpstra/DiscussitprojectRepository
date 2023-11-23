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

/* post/_post_tabs.html.twig */
class __TwigTemplate_8c41a23b114e9751cd63d05ba6cc1df8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        // line 1
        $this->loadTemplate("post/_post_tabs.html.twig", "post/_post_tabs.html.twig", 1, "636943217")->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "post/_post_tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_show_all', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                All Posts
            {% endblock %}
            {% block path %}
                {{ path('app_show_all') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_top_liked', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                Top Liked
            {% endblock %}
            {% block path %}
                {{ path('app_post_top_liked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_follows', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                From People You Follow
            {% endblock %}
            {% block path %}
                {{ path('app_post_follows') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_show_post_boards', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'}%}
            {% block content %}
                Boards
            {% endblock %}
            {% block path %}
                {{ path('app_show_post_boards') }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "post/_post_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/post/_post_tabs.html.twig");
    }
}


/* post/_post_tabs.html.twig */
class __TwigTemplate_8c41a23b114e9751cd63d05ba6cc1df8___636943217 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tabs.html.twig", "post/_post_tabs.html.twig", 1);
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
        $this->loadTemplate("post/_post_tabs.html.twig", "post/_post_tabs.html.twig", 3, "138686880")->display(twig_array_merge($context, ["route" => "app_show_all", "classes" => "hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"]));
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("post/_post_tabs.html.twig", "post/_post_tabs.html.twig", 12, "1650479235")->display(twig_array_merge($context, ["route" => "app_post_top_liked", "classes" => "hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"]));
        // line 20
        echo "
        ";
        // line 21
        $this->loadTemplate("post/_post_tabs.html.twig", "post/_post_tabs.html.twig", 21, "2014121106")->display(twig_array_merge($context, ["route" => "app_post_follows", "classes" => "ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"]));
        // line 29
        echo "
        ";
        // line 30
        $this->loadTemplate("post/_post_tabs.html.twig", "post/_post_tabs.html.twig", 30, "1414166163")->display(twig_array_merge($context, ["route" => "app_show_post_boards", "classes" => "ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"]));
        // line 38
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/_post_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 38,  175 => 30,  172 => 29,  170 => 21,  167 => 20,  165 => 12,  162 => 11,  159 => 3,  149 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_show_all', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                All Posts
            {% endblock %}
            {% block path %}
                {{ path('app_show_all') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_top_liked', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                Top Liked
            {% endblock %}
            {% block path %}
                {{ path('app_post_top_liked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_follows', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                From People You Follow
            {% endblock %}
            {% block path %}
                {{ path('app_post_follows') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_show_post_boards', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'}%}
            {% block content %}
                Boards
            {% endblock %}
            {% block path %}
                {{ path('app_show_post_boards') }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "post/_post_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/post/_post_tabs.html.twig");
    }
}


/* post/_post_tabs.html.twig */
class __TwigTemplate_8c41a23b114e9751cd63d05ba6cc1df8___138686880 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "post/_post_tabs.html.twig", 3);
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
        echo "                All Posts
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_all");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/_post_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 8,  311 => 7,  300 => 5,  290 => 4,  267 => 3,  177 => 38,  175 => 30,  172 => 29,  170 => 21,  167 => 20,  165 => 12,  162 => 11,  159 => 3,  149 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_show_all', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                All Posts
            {% endblock %}
            {% block path %}
                {{ path('app_show_all') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_top_liked', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                Top Liked
            {% endblock %}
            {% block path %}
                {{ path('app_post_top_liked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_follows', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                From People You Follow
            {% endblock %}
            {% block path %}
                {{ path('app_post_follows') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_show_post_boards', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'}%}
            {% block content %}
                Boards
            {% endblock %}
            {% block path %}
                {{ path('app_show_post_boards') }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "post/_post_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/post/_post_tabs.html.twig");
    }
}


/* post/_post_tabs.html.twig */
class __TwigTemplate_8c41a23b114e9751cd63d05ba6cc1df8___1650479235 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "post/_post_tabs.html.twig", 12);
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
        echo "                Top Liked
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_top_liked");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/_post_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 17,  458 => 16,  447 => 14,  437 => 13,  414 => 12,  321 => 8,  311 => 7,  300 => 5,  290 => 4,  267 => 3,  177 => 38,  175 => 30,  172 => 29,  170 => 21,  167 => 20,  165 => 12,  162 => 11,  159 => 3,  149 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_show_all', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                All Posts
            {% endblock %}
            {% block path %}
                {{ path('app_show_all') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_top_liked', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                Top Liked
            {% endblock %}
            {% block path %}
                {{ path('app_post_top_liked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_follows', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                From People You Follow
            {% endblock %}
            {% block path %}
                {{ path('app_post_follows') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_show_post_boards', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'}%}
            {% block content %}
                Boards
            {% endblock %}
            {% block path %}
                {{ path('app_show_post_boards') }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "post/_post_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/post/_post_tabs.html.twig");
    }
}


/* post/_post_tabs.html.twig */
class __TwigTemplate_8c41a23b114e9751cd63d05ba6cc1df8___2014121106 extends Template
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
        // line 21
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "post/_post_tabs.html.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "                From People You Follow
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 26
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_follows");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/_post_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 26,  605 => 25,  594 => 23,  584 => 22,  561 => 21,  468 => 17,  458 => 16,  447 => 14,  437 => 13,  414 => 12,  321 => 8,  311 => 7,  300 => 5,  290 => 4,  267 => 3,  177 => 38,  175 => 30,  172 => 29,  170 => 21,  167 => 20,  165 => 12,  162 => 11,  159 => 3,  149 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_show_all', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                All Posts
            {% endblock %}
            {% block path %}
                {{ path('app_show_all') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_top_liked', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                Top Liked
            {% endblock %}
            {% block path %}
                {{ path('app_post_top_liked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_follows', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                From People You Follow
            {% endblock %}
            {% block path %}
                {{ path('app_post_follows') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_show_post_boards', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'}%}
            {% block content %}
                Boards
            {% endblock %}
            {% block path %}
                {{ path('app_show_post_boards') }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "post/_post_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/post/_post_tabs.html.twig");
    }
}


/* post/_post_tabs.html.twig */
class __TwigTemplate_8c41a23b114e9751cd63d05ba6cc1df8___1414166163 extends Template
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
        // line 30
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "post/_post_tabs.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "                Boards
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 35
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_post_boards");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/_post_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  762 => 35,  752 => 34,  741 => 32,  731 => 31,  708 => 30,  615 => 26,  605 => 25,  594 => 23,  584 => 22,  561 => 21,  468 => 17,  458 => 16,  447 => 14,  437 => 13,  414 => 12,  321 => 8,  311 => 7,  300 => 5,  290 => 4,  267 => 3,  177 => 38,  175 => 30,  172 => 29,  170 => 21,  167 => 20,  165 => 12,  162 => 11,  159 => 3,  149 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_show_all', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                All Posts
            {% endblock %}
            {% block path %}
                {{ path('app_show_all') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_top_liked', classes: 'hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                Top Liked
            {% endblock %}
            {% block path %}
                {{ path('app_post_top_liked') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_post_follows', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' } %}
            {% block content %}
                From People You Follow
            {% endblock %}
            {% block path %}
                {{ path('app_post_follows') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_show_post_boards', classes: 'ml-2 hover:bg-indigo-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'}%}
            {% block content %}
                Boards
            {% endblock %}
            {% block path %}
                {{ path('app_show_post_boards') }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "post/_post_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/post/_post_tabs.html.twig");
    }
}
