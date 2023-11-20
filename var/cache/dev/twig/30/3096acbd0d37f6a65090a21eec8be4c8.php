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

/* follower/_follower_list.html.twig */
class __TwigTemplate_215857ee49b113b2d21af0bf866cd608 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "follower/_follower_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "follower/_follower_list.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            echo "    <div class=\"grid grid-cols-1 xl:grid-cols-2 gap-4\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 3, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["otherUser"]) {
                // line 4
                echo "            <div class=\"flex justify-between items-center\">
                <div>
                    <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["otherUser"], "id", [], "any", false, false, false, 6)]), "html", null, true);
                echo "\">
                        <div class=\"text-lg\">
                            ";
                // line 8
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["otherUser"], "userProfile", [], "any", false, true, false, 8), "name", [], "any", true, true, false, 8) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["otherUser"], "userProfile", [], "any", false, true, false, 8), "name", [], "any", false, false, false, 8)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["otherUser"], "userProfile", [], "any", false, true, false, 8), "name", [], "any", false, false, false, 8)) : (twig_get_attribute($this->env, $this->source, $context["otherUser"], "email", [], "any", false, false, false, 8))), "html", null, true);
                echo "
                        </div>
                        <div class=\"text-gray-500\">
                            ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["otherUser"], "email", [], "any", false, false, false, 11), "html", null, true);
                echo "
                        </div>
                    </a>
                </div>
                <div>
                    ";
                // line 16
                echo twig_include($this->env, $context, "follower/_follow_button.html.twig", ["userToFollow" => $context["otherUser"]]);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otherUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    </div>
";
        } else {
            // line 22
            echo "    <div class=\"w-full text-center\">
        <div class=\"font-bold text-gray-600\">
            Nothing to Show
        </div>
        <div class=\"text-gray-400\">
            The list is currently empty
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "follower/_follower_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  106 => 20,  88 => 16,  80 => 11,  74 => 8,  69 => 6,  65 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if users|length > 0 %}
    <div class=\"grid grid-cols-1 xl:grid-cols-2 gap-4\">
        {% for otherUser in users %}
            <div class=\"flex justify-between items-center\">
                <div>
                    <a href=\"{{ path('app_profile', {id: otherUser.id} ) }}\">
                        <div class=\"text-lg\">
                            {{ otherUser.userProfile.name ?? otherUser.email}}
                        </div>
                        <div class=\"text-gray-500\">
                            {{ otherUser.email }}
                        </div>
                    </a>
                </div>
                <div>
                    {{ include('follower/_follow_button.html.twig', {userToFollow: otherUser}) }}
                </div>
            </div>
        {% endfor %}
    </div>
{% else %}
    <div class=\"w-full text-center\">
        <div class=\"font-bold text-gray-600\">
            Nothing to Show
        </div>
        <div class=\"text-gray-400\">
            The list is currently empty
        </div>
    </div>
{% endif %}", "follower/_follower_list.html.twig", "/home/kees/PhpstormProjects/chrisvbeem/templates/follower/_follower_list.html.twig");
    }
}
