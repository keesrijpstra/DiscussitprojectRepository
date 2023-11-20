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

/* post/_post.html.twig */
class __TwigTemplate_c7ba486b39cffd9cb3382bce10398753 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_post.html.twig"));

        // line 1
        echo "<div class=\"bg-gray-100 mb-4\">
    <div class=\"bg-indigo-100 text-indigo-800 shadow-lg rounded-lg overflow-hidden\">
        <div class=\"p-4\">
            <div class=\"text-2xl font-bold mb-2\">
                <a class=\"text-indigo-600 hover:underline\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_one", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)]), "html", null, true);
        echo "\">
                    ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "
                </a>
            </div>
            <div class=\"text-xl text-gray-700 mb-4\">
                ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "content", [], "any", false, false, false, 10), "html", null, true);
        echo "
            </div>
            <div class=\"text-gray-500 text-sm mb-2\">
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "creationDate", [], "any", false, false, false, 13), "M j, Y"), "html", null, true);
        echo "
            </div>
            <div class=\"mb-2\">
                ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "likedBy", [], "any", false, false, false, 16), "contains", [twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)], "method", false, false, false, 16)) {
            // line 17
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unlike", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" class=\"text-red-500 hover:underline\">
                        Unlike <span class=\"px-2 rounded-md bg-indigo-200\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "likedBy", [], "any", false, false, false, 18), "count", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
                    </a>
                ";
        } else {
            // line 21
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"text-green-500 hover:underline\">
                        Like <span class=\"px-2 rounded-md bg-indigo-200\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "likedBy", [], "any", false, false, false, 22), "count", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                    </a>
                ";
        }
        // line 25
        echo "            </div>
            <div class=\"text-sm text-gray-500 mb-2\">
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "author", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\" class=\"hover:underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "author", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), "html", null, true);
        echo "</a>
            </div>
            <div class=\"flex space-x-2 mb-2\">
                ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "author", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30))) {
            // line 31
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_edit", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"text-indigo-600 hover:underline\">Edit</a>
                ";
        }
        // line 33
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_comment", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\" class=\"text-indigo-600 hover:underline\">
                    Comment <span class=\"px-2 rounded-md bg-indigo-200\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 34, $this->source); })()), "comments", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34), "html", null, true);
        echo "</span>
                </a>
                ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 36, $this->source); })()), "author", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36))) {
            // line 37
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_post", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"text-red-500 hover:underline\" onclick=\"return confirm('Are you sure you want to delete this post?');\">
                    Delete
                </a>
                ";
        }
        // line 41
        echo "            </div>
            <div>
                ";
        // line 43
        echo twig_include($this->env, $context, "shared/_post_image.html.twig", ["size" => 100, "post" => (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 43, $this->source); })())]);
        echo "
            </div>
        </div>
    </div>
</div>

";
        // line 50
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "post/_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 50,  140 => 43,  136 => 41,  128 => 37,  126 => 36,  121 => 34,  116 => 33,  110 => 31,  108 => 30,  100 => 27,  96 => 25,  90 => 22,  85 => 21,  79 => 18,  74 => 17,  72 => 16,  66 => 13,  60 => 10,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-gray-100 mb-4\">
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
                        Unlike <span class=\"px-2 rounded-md bg-indigo-200\">{{ post.likedBy.count }}</span>
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
                {% if post.author.id == app.user.id %}
                <a href=\"{{ path('app_show_edit', {post: post.id}) }}\" class=\"text-indigo-600 hover:underline\">Edit</a>
                {% endif %}
                <a href=\"{{ path('app_add_comment', {post: post.id}) }}\" class=\"text-indigo-600 hover:underline\">
                    Comment <span class=\"px-2 rounded-md bg-indigo-200\">{{ post.comments.count }}</span>
                </a>
                {% if post.author.id == app.user.id %}
                <a href=\"{{ path('app_delete_post', {post: post.id}) }}\" class=\"text-red-500 hover:underline\" onclick=\"return confirm('Are you sure you want to delete this post?');\">
                    Delete
                </a>
                {% endif %}
            </div>
            <div>
                {{ include('shared/_post_image.html.twig', {size: 100, post: post}) }}
            </div>
        </div>
    </div>
</div>

{#Gives the user a prompt if they are sure they want to delete.#}

", "post/_post.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/post/_post.html.twig");
    }
}
