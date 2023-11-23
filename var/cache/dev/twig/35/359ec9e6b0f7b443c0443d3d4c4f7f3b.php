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

/* post/show.html.twig */
class __TwigTemplate_1ceb49ae6d6293e44bbf8811488a337d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
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

        echo "Post - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "-> Post
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
        echo "    <div class=\"flex items-center mb-4\">
        <div>
            ";
        // line 12
        echo twig_include($this->env, $context, "shared/_avatar.html.twig", ["profile" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "author", [], "any", false, false, false, 12), "userProfile", [], "any", false, false, false, 12), "size" => 70]);
        echo "
            <div class=\"ml-4\">
                <div class=\"text-xl\">
                    ";
        // line 15
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, true, false, 15), "userProfile", [], "any", false, true, false, 15), "name", [], "any", true, true, false, 15) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, true, false, 15), "userProfile", [], "any", false, true, false, 15), "name", [], "any", false, false, false, 15)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, true, false, 15), "userProfile", [], "any", false, true, false, 15), "name", [], "any", false, false, false, 15)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "author", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15))), "html", null, true);
        echo "

                </div>
                <div class=\"text-sm text-gray-500\">
                    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 19, $this->source); })()), "author", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">
                        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "author", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 27
        echo twig_include($this->env, $context, "post/_post_tabs.html.twig");
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "post/_post.html.twig", ["post" => (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 28, $this->source); })())]);
        echo "

    <div class=\"mt-4\">
        <div class=\"text-center text-2xl text-indigo-800 font-bold mt-4\">Comments</div>
        <div class=\"flex border-b border-indigo-500 w-full mb-8 mt-8\"></div>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 33, $this->source); })()), "comments", [], "any", false, false, false, 33));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 34
            echo "            <div class=\"bg-indigo-100 mb-4 p-4 shadow-lg rounded-lg overflow-hidden\">
                <div class=\"flex items-center\">
                    <div class=\"mr-2\">
                        ";
            // line 37
            echo twig_include($this->env, $context, "shared/_avatar.html.twig", ["profile" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 37), "userProfile", [], "any", false, false, false, 37), "size" => 36]);
            echo "
                    </div>
                    <div>
                        <div class=\"font-medium text-indigo-800\">
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">
                                ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
            echo "
                            </a>
                        </div>
                        <div class=\"font-light text-gray-500\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", [], "any", false, false, false, 45), "M j, Y"), "html", null, true);
            echo "</div>
                    </div>
                </div>
                <div class=\"flex mt-2\">
                    <div class=\"border ml-4 mr-7 pb-12\"></div>
                    ";
            // line 50
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["comment"], "image", [], "any", false, false, false, 50))) {
                // line 51
                echo "                        <div class=\"mr-5\">";
                echo twig_include($this->env, $context, "shared/_comment_image.html.twig", ["comment" => $context["comment"], "size" => 70]);
                echo "</div>
                    ";
            }
            // line 53
            echo "                    <div class=\"mt-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 53), "html", null, true);
            echo "</div>
                    <div class=\"flex mt-3 mb-2 space-x-2\">
                        ";
            // line 55
            if (((twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 55) == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 56
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_edit", ["comment" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" class=\"text-indigo-600 hover:underline\">Edit</a>
                            <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_comment", ["comment" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\" class=\"text-red-500 hover:underline delete-comment\" data-confirm=\"Are you sure you want to delete this comment?\">Delete</a>
                        ";
            }
            // line 59
            echo "                    </div>
                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var deleteLinks = document.querySelectorAll('.delete-comment');

            deleteLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();

                    var confirmationMessage = link.getAttribute('data-confirm');
                    if (confirm(confirmationMessage)) {
                        window.location.href = link.href;
                    }
                });
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 63,  227 => 59,  222 => 57,  217 => 56,  215 => 55,  209 => 53,  203 => 51,  201 => 50,  193 => 45,  187 => 42,  183 => 41,  176 => 37,  171 => 34,  154 => 33,  146 => 28,  142 => 27,  132 => 20,  128 => 19,  121 => 15,  115 => 12,  111 => 10,  101 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Post - {{ post.title }}{% endblock %}

{% block bread %}
-> Post
{% endblock %}

{% block body %}
    <div class=\"flex items-center mb-4\">
        <div>
            {{ include('shared/_avatar.html.twig', {profile: post.author.userProfile, size: 70}) }}
            <div class=\"ml-4\">
                <div class=\"text-xl\">
                    {{ post.author.userProfile.name ?? post.author.email }}

                </div>
                <div class=\"text-sm text-gray-500\">
                    <a href=\"{{ path('app_profile', {id: post.author.id}) }}\">
                        {{ post.author.email }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{ include('post/_post_tabs.html.twig') }}
    {{ include('post/_post.html.twig', {post: post}) }}

    <div class=\"mt-4\">
        <div class=\"text-center text-2xl text-indigo-800 font-bold mt-4\">Comments</div>
        <div class=\"flex border-b border-indigo-500 w-full mb-8 mt-8\"></div>
        {% for comment in post.comments %}
            <div class=\"bg-indigo-100 mb-4 p-4 shadow-lg rounded-lg overflow-hidden\">
                <div class=\"flex items-center\">
                    <div class=\"mr-2\">
                        {{ include('shared/_avatar.html.twig', {profile: comment.author.userProfile, size: 36}) }}
                    </div>
                    <div>
                        <div class=\"font-medium text-indigo-800\">
                            <a href=\"{{ path('app_profile', {id: comment.author.id}) }}\">
                                {{ comment.author.email }}
                            </a>
                        </div>
                        <div class=\"font-light text-gray-500\">{{ comment.created | date('M j, Y') }}</div>
                    </div>
                </div>
                <div class=\"flex mt-2\">
                    <div class=\"border ml-4 mr-7 pb-12\"></div>
                    {% if comment.image is not null %}
                        <div class=\"mr-5\">{{ include('shared/_comment_image.html.twig', {comment: comment, size: 70}) }}</div>
                    {% endif %}
                    <div class=\"mt-2\">{{ comment.text }}</div>
                    <div class=\"flex mt-3 mb-2 space-x-2\">
                        {% if comment.author == app.user or is_granted('ROLE_ADMIN')%}
                            <a href=\"{{ path('app_comment_edit', {comment: comment.id}) }}\" class=\"text-indigo-600 hover:underline\">Edit</a>
                            <a href=\"{{ path('app_delete_comment', {comment: comment.id}) }}\" class=\"text-red-500 hover:underline delete-comment\" data-confirm=\"Are you sure you want to delete this comment?\">Delete</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var deleteLinks = document.querySelectorAll('.delete-comment');

            deleteLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();

                    var confirmationMessage = link.getAttribute('data-confirm');
                    if (confirm(confirmationMessage)) {
                        window.location.href = link.href;
                    }
                });
            });
        });
    </script>
{% endblock %}

", "post/show.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/post/show.html.twig");
    }
}
