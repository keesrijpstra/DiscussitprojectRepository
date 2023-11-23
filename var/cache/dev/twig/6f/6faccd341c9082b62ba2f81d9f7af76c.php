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

/* profile/_profile_tabs.html.twig */
class __TwigTemplate_e839e962a71eb2542d0e95ff4c0450ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_tabs.html.twig"));

        // line 1
        $this->loadTemplate("profile/_profile_tabs.html.twig", "profile/_profile_tabs.html.twig", 1, "1280018479")->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "profile/_profile_tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed'shared/_tab.html.twig' with { route: 'app_profile'} %}
            {% block content %}
                Posts <span class=\"px-2 rounded-md bg-gray-200\">{{ user.posts.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile', {id: user.id}) }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_profile_follows', classes: 'ml-2'} %}
            {% block content %}
                Follows <span class=\"px-2 rounded-md bg-gray-200\">{{ user.follows.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile_follows', {id: user.id}) }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_profile_followers', classes: 'ml-2'} %}
            {% block content %}
                Followers <span class=\"px-2 rounded-md bg-gray-200\">{{ user.followers.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile_followers', {id: user.id}) }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "profile/_profile_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/profile/_profile_tabs.html.twig");
    }
}


/* profile/_profile_tabs.html.twig */
class __TwigTemplate_e839e962a71eb2542d0e95ff4c0450ec___1280018479 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tabs.html.twig", "profile/_profile_tabs.html.twig", 1);
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
        $this->loadTemplate("profile/_profile_tabs.html.twig", "profile/_profile_tabs.html.twig", 3, "1785405358")->display(twig_array_merge($context, ["route" => "app_profile"]));
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("profile/_profile_tabs.html.twig", "profile/_profile_tabs.html.twig", 12, "71338022")->display(twig_array_merge($context, ["route" => "app_profile_follows", "classes" => "ml-2"]));
        // line 20
        echo "
        ";
        // line 21
        $this->loadTemplate("profile/_profile_tabs.html.twig", "profile/_profile_tabs.html.twig", 21, "1359337203")->display(twig_array_merge($context, ["route" => "app_profile_followers", "classes" => "ml-2"]));
        // line 29
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 29,  161 => 21,  158 => 20,  156 => 12,  153 => 11,  150 => 3,  140 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed'shared/_tab.html.twig' with { route: 'app_profile'} %}
            {% block content %}
                Posts <span class=\"px-2 rounded-md bg-gray-200\">{{ user.posts.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile', {id: user.id}) }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_profile_follows', classes: 'ml-2'} %}
            {% block content %}
                Follows <span class=\"px-2 rounded-md bg-gray-200\">{{ user.follows.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile_follows', {id: user.id}) }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_profile_followers', classes: 'ml-2'} %}
            {% block content %}
                Followers <span class=\"px-2 rounded-md bg-gray-200\">{{ user.followers.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile_followers', {id: user.id}) }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "profile/_profile_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/profile/_profile_tabs.html.twig");
    }
}


/* profile/_profile_tabs.html.twig */
class __TwigTemplate_e839e962a71eb2542d0e95ff4c0450ec___1785405358 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "profile/_profile_tabs.html.twig", 3);
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
        echo "                Posts <span class=\"px-2 rounded-md bg-gray-200\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "posts", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5), "html", null, true);
        echo "</span>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 8,  290 => 7,  277 => 5,  267 => 4,  244 => 3,  163 => 29,  161 => 21,  158 => 20,  156 => 12,  153 => 11,  150 => 3,  140 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed'shared/_tab.html.twig' with { route: 'app_profile'} %}
            {% block content %}
                Posts <span class=\"px-2 rounded-md bg-gray-200\">{{ user.posts.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile', {id: user.id}) }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_profile_follows', classes: 'ml-2'} %}
            {% block content %}
                Follows <span class=\"px-2 rounded-md bg-gray-200\">{{ user.follows.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile_follows', {id: user.id}) }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_profile_followers', classes: 'ml-2'} %}
            {% block content %}
                Followers <span class=\"px-2 rounded-md bg-gray-200\">{{ user.followers.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile_followers', {id: user.id}) }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "profile/_profile_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/profile/_profile_tabs.html.twig");
    }
}


/* profile/_profile_tabs.html.twig */
class __TwigTemplate_e839e962a71eb2542d0e95ff4c0450ec___71338022 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "profile/_profile_tabs.html.twig", 12);
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
        echo "                Follows <span class=\"px-2 rounded-md bg-gray-200\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "follows", [], "any", false, false, false, 14), "count", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_follows", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 17,  430 => 16,  417 => 14,  407 => 13,  384 => 12,  300 => 8,  290 => 7,  277 => 5,  267 => 4,  244 => 3,  163 => 29,  161 => 21,  158 => 20,  156 => 12,  153 => 11,  150 => 3,  140 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed'shared/_tab.html.twig' with { route: 'app_profile'} %}
            {% block content %}
                Posts <span class=\"px-2 rounded-md bg-gray-200\">{{ user.posts.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile', {id: user.id}) }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_profile_follows', classes: 'ml-2'} %}
            {% block content %}
                Follows <span class=\"px-2 rounded-md bg-gray-200\">{{ user.follows.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile_follows', {id: user.id}) }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_profile_followers', classes: 'ml-2'} %}
            {% block content %}
                Followers <span class=\"px-2 rounded-md bg-gray-200\">{{ user.followers.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile_followers', {id: user.id}) }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "profile/_profile_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/profile/_profile_tabs.html.twig");
    }
}


/* profile/_profile_tabs.html.twig */
class __TwigTemplate_e839e962a71eb2542d0e95ff4c0450ec___1359337203 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "profile/_profile_tabs.html.twig", 21);
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
        echo "                Followers <span class=\"px-2 rounded-md bg-gray-200\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "followers", [], "any", false, false, false, 23), "count", [], "any", false, false, false, 23), "html", null, true);
        echo "</span>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_followers", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/_profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 26,  570 => 25,  557 => 23,  547 => 22,  524 => 21,  440 => 17,  430 => 16,  417 => 14,  407 => 13,  384 => 12,  300 => 8,  290 => 7,  277 => 5,  267 => 4,  244 => 3,  163 => 29,  161 => 21,  158 => 20,  156 => 12,  153 => 11,  150 => 3,  140 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed'shared/_tab.html.twig' with { route: 'app_profile'} %}
            {% block content %}
                Posts <span class=\"px-2 rounded-md bg-gray-200\">{{ user.posts.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile', {id: user.id}) }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_profile_follows', classes: 'ml-2'} %}
            {% block content %}
                Follows <span class=\"px-2 rounded-md bg-gray-200\">{{ user.follows.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile_follows', {id: user.id}) }}
            {% endblock %}
        {% endembed %}

        {% embed'shared/_tab.html.twig' with { route: 'app_profile_followers', classes: 'ml-2'} %}
            {% block content %}
                Followers <span class=\"px-2 rounded-md bg-gray-200\">{{ user.followers.count }}</span>
            {% endblock %}
            {% block path %}
                {{ path('app_profile_followers', {id: user.id}) }}
            {% endblock %}
        {% endembed %}
    {% endblock %}
{% endembed %}", "profile/_profile_tabs.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/profile/_profile_tabs.html.twig");
    }
}
