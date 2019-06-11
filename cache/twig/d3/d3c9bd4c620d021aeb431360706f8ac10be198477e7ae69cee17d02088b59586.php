<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/login.html.twig */
class __TwigTemplate_2cace779ef1ba1ed10bbbe48d3a0d1217ad13889fb259a603afad2d21dbcb073 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
            'instructions' => [$this, 'block_instructions'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_messages($context, array $blocks = [])
    {
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"default-box-shadow ";
        // line 7
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo "\">
        <h1>
            ";
        // line 9
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
        </h1>

        ";
        // line 12
        $this->loadTemplate("partials/messages.html.twig", "partials/login.html.twig", 12)->display($context);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('instructions', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $context["redirect"] = ((($context["redirect"] ?? null)) ? (($context["redirect"] ?? null)) : ($this->getAttribute(($context["uri"] ?? null), "route", [0 => false], "method")));
        // line 17
        echo "
        <form method=\"post\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "\">
            <div class=\"padding\">
                ";
        // line 20
        $this->displayBlock('form', $context, $blocks);
        // line 21
        echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" />
                ";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
            </div>
        </form>
    </section>
</body>
";
    }

    // line 14
    public function block_instructions($context, array $blocks = [])
    {
    }

    // line 20
    public function block_form($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 20,  104 => 14,  94 => 22,  89 => 21,  87 => 20,  82 => 18,  79 => 17,  77 => 16,  74 => 15,  72 => 14,  69 => 13,  67 => 12,  61 => 9,  56 => 7,  53 => 6,  50 => 5,  45 => 3,  40 => 1,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set scope = scope ?: 'data.' %}
{% block messages %}{% endblock %}

{% block body %}
<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"default-box-shadow {{ classes }}\">
        <h1>
            {{ title }}
        </h1>

        {% include 'partials/messages.html.twig' %}

        {% block instructions %}{% endblock %}

        {% set redirect = redirect ?: uri.route(false) %}

        <form method=\"post\" action=\"{{ base_url_relative }}\">
            <div class=\"padding\">
                {% block form %}{% endblock %}
                <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
                {{ nonce_field('admin-form', 'admin-nonce')|raw }}
            </div>
        </form>
    </section>
</body>
{% endblock %}
", "partials/login.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/partials/login.html.twig");
    }
}
