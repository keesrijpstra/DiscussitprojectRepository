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

/* post/boards_with_their_posts.html.twig */
class __TwigTemplate_8278f19bdf925c0838302d241aeda820 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/boards_with_their_posts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/boards_with_their_posts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/boards_with_their_posts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"flex w-full justify-center items-center font-bold text-indigo-600 text-4xl mb-4 border-b-2 border-gray-300\">";
        echo twig_escape_filter($this->env, (isset($context["boardName"]) || array_key_exists("boardName", $context) ? $context["boardName"] : (function () { throw new RuntimeError('Variable "boardName" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</div>
    <div class=\"grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4\">
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 5, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "
    <div class=\"bg-gray-100 mb-4\">
        <div class=\"bg-indigo-100 text-indigo-800 shadow-lg rounded-lg overflow-hidden\">
            <div class=\"p-4\">
                <div class=\"text-2xl font-bold mb-2\">
                    <a class=\"text-indigo-600 hover:underline\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_one", ["post" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo "
                    </a>
                </div>
                <div class=\"text-xl text-gray-700 mb-4\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 16), "html", null, true);
            echo "
                </div>
                <div class=\"text-gray-500 text-sm mb-2\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "creationDate", [], "any", false, false, false, 19), "M j, Y"), "html", null, true);
            echo "
                </div>
                <div class=\"mb-2\">
                    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "likedBy", [], "any", false, false, false, 22), "contains", [twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)], "method", false, false, false, 22)) {
                // line 23
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unlike", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" class=\"text-red-500 hover:underline\">
                            DisLike <span class=\"px-2 rounded-md bg-indigo-200\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "likedBy", [], "any", false, false, false, 24), "count", [], "any", false, false, false, 24), "html", null, true);
                echo "</span>
                        </a>
                    ";
            } else {
                // line 27
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_like", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\" class=\"text-green-500 hover:underline\">
                            Like <span class=\"px-2 rounded-md bg-indigo-200\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "likedBy", [], "any", false, false, false, 28), "count", [], "any", false, false, false, 28), "html", null, true);
                echo "</span>
                        </a>
                    ";
            }
            // line 31
            echo "                </div>
                <div class=\"text-sm text-gray-500 mb-2\">
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"hover:underline\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 33), "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</a>
                </div>
                <div class=\"flex space-x-2 mb-2\">
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_edit", ["post" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"text-indigo-600 hover:underline\">Edit</a>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_comment", ["post" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"text-indigo-600 hover:underline\">
                        Comment <span class=\"px-2 rounded-md bg-indigo-200\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38), "html", null, true);
            echo "</span>
                    </a>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_post", ["post" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"text-red-500 hover:underline delete-post\" data-confirm=\"Are you sure you want to delete this post?\">
                        Delete
                    </a>
                </div>
                <div>
                    ";
            // line 45
            echo twig_include($this->env, $context, "shared/_post_image.html.twig", ["size" => 100, "post" => $context["post"]]);
            echo "
                </div>
            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/boards_with_their_posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 51,  178 => 45,  170 => 40,  165 => 38,  161 => 37,  157 => 36,  149 => 33,  145 => 31,  139 => 28,  134 => 27,  128 => 24,  123 => 23,  121 => 22,  115 => 19,  109 => 16,  102 => 12,  98 => 11,  91 => 6,  74 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"flex w-full justify-center items-center font-bold text-indigo-600 text-4xl mb-4 border-b-2 border-gray-300\">{{ boardName }}</div>
    <div class=\"grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4\">
{% for post in posts %}

    <div class=\"bg-gray-100 mb-4\">
        <div class=\"bg-indigo-100 text-indigo-800 shadow-lg rounded-lg overflow-hidden\">
            <div class=\"p-4\">
                <div class=\"text-2xl font-bold mb-2\">
                    <a class=\"text-indigo-600 hover:underline\" href=\"{{ path('app_show_one', { post: post.id}) }}\">
                        {{ post.title }}
                    </a>
                </div>
                <div class=\"text-xl text-gray-700 mb-4\">
                    {{ post.content }}
                </div>
                <div class=\"text-gray-500 text-sm mb-2\">
                    {{ post.creationDate | date(\"M j, Y\")}}
                </div>
                <div class=\"mb-2\">
                    {% if post.likedBy.contains(app.user) %}
                        <a href=\"{{ path('app_unlike', {id: post.id}) }}\" class=\"text-red-500 hover:underline\">
                            DisLike <span class=\"px-2 rounded-md bg-indigo-200\">{{ post.likedBy.count }}</span>
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_like', {id: post.id}) }}\" class=\"text-green-500 hover:underline\">
                            Like <span class=\"px-2 rounded-md bg-indigo-200\">{{ post.likedBy.count }}</span>
                        </a>
                    {% endif %}
                </div>
                <div class=\"text-sm text-gray-500 mb-2\">
                    <a href=\"{{ path('app_profile', {id: post.author.id} ) }}\" class=\"hover:underline\">{{ post.author.email }}</a>
                </div>
                <div class=\"flex space-x-2 mb-2\">
                    <a href=\"{{ path('app_show_edit', {post: post.id}) }}\" class=\"text-indigo-600 hover:underline\">Edit</a>
                    <a href=\"{{ path('app_add_comment', {post: post.id}) }}\" class=\"text-indigo-600 hover:underline\">
                        Comment <span class=\"px-2 rounded-md bg-indigo-200\">{{ post.comments.count }}</span>
                    </a>
                    <a href=\"{{ path('app_delete_post', {post: post.id}) }}\" class=\"text-red-500 hover:underline delete-post\" data-confirm=\"Are you sure you want to delete this post?\">
                        Delete
                    </a>
                </div>
                <div>
                    {{ include('shared/_post_image.html.twig', {size: 100, post: post}) }}
                </div>
            </div>
        </div>
    </div>
{% endfor %}
    </div>
{% endblock %}", "post/boards_with_their_posts.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/post/boards_with_their_posts.html.twig");
    }
}
