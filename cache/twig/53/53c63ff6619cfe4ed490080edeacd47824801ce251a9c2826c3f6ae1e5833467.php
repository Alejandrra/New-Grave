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

/* partials/sidebar.html.twig */
class __TwigTemplate_499b6b3f78c484fc7efe731f73b21d3da5c8453852154961e022a253dffe912a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 5
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 6
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SIDEBAR.SIMPLE_SEARCH.HEADLINE");
            echo "</h4>
    ";
            // line 7
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 7)->display($context);
            // line 8
            echo "</div>
";
        }
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 11
            echo "    <h4>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SIDEBAR.RELATED_POSTS.HEADLINE");
            echo "</h4>
    ";
            // line 12
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 12)->display($context);
        }
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 15
            echo "<div class=\"sidebar-content\">
\t<h4>";
            // line 16
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SIDEBAR.RANDOM_ARTICLE.HEADLINE");
            echo "</h4>
\t<a class=\"button\" href=\"";
            // line 17
            echo ($context["base_url"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY");
            echo "</a>
</div>
";
        }
        // line 20
        echo "<div class=\"sidebar-content\">
\t<h4>";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SIDEBAR.SOME_TEXT_WIDGET.HEADLINE");
        echo "</h4>
\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>
";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 25
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 26
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
    ";
            // line 27
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 27)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 28
            echo "</div>
";
        }
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 31
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 32
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h4>
\t";
            // line 33
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 33)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 34
            echo "</div>
";
        }
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 37
            echo "<div class=\"sidebar-content syndicate\">
    <h4>";
            // line 38
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SIDEBAR.SYNDICATE.HEADLINE");
            echo "</h4>
    <a class=\"button\" href=\"";
            // line 39
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 40
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 40,  127 => 39,  123 => 38,  120 => 37,  118 => 36,  114 => 34,  112 => 33,  108 => 32,  105 => 31,  103 => 30,  99 => 28,  97 => 27,  93 => 26,  90 => 25,  88 => 24,  82 => 21,  79 => 20,  71 => 17,  67 => 16,  64 => 15,  62 => 14,  59 => 12,  54 => 11,  52 => 10,  48 => 8,  46 => 7,  42 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.SIMPLE_SEARCH.HEADLINE'|t }}</h4>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <h4>{{ 'SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}
{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
\t<h4>{{ 'SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>
\t<a class=\"button\" href=\"{{ base_url }}/random\"><i class=\"fa fa-retweet\"></i> {{ 'SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>
</div>
{% endif %}
<div class=\"sidebar-content\">
\t<h4>{{ 'SIDEBAR.SOME_TEXT_WIDGET.HEADLINE'|t }}</h4>
\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>
{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
</div>
{% endif %}
{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
\t{% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
</div>
{% endif %}
{% if config.plugins.feed.enabled %}
<div class=\"sidebar-content syndicate\">
    <h4>{{ 'SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
    <a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
{% endif %}", "partials/sidebar.html.twig", "/var/www/html/grav/user/themes/antimatter/templates/partials/sidebar.html.twig");
    }
}
