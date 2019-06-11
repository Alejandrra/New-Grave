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

/* partials/blog_item.html.twig */
class __TwigTemplate_059602060bfec9fa74fff2add03d08660ed208050362f3b851e4ceec9f75982b extends \Twig\Template
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
        echo "<div class=\"list-item h-entry\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_width", []), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_height", []), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_file", []);
        // line 7
        echo "
    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "c");
        echo "\">
                <span>";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d");
        echo "</span>
                <em>";
        // line 12
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M");
        echo "</em>
            </time>
        </span>
        ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 16
            echo "            <h4 class=\"p-name\">
                ";
            // line 17
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 18
                echo "                <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                ";
            }
            // line 20
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a>
            </h4>
        ";
        } else {
            // line 23
            echo "            <h4 class=\"p-name\"><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a></h4>
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 27
            echo "        <span class=\"tags\">
            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 29
                echo "            <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["blog"] ?? null), "url", []), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\" class=\"p-category\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </span>
        ";
        }
        // line 33
        echo "        ";
        if (($context["header_image"] ?? null)) {
            // line 34
            echo "            ";
            if (($context["header_image_file"] ?? null)) {
                // line 35
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["header_image_file"] ?? null), [], "array");
                // line 36
                echo "            ";
            } else {
                // line 37
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
                // line 38
                echo "            ";
            }
            // line 39
            echo "            ";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "html", []);
            echo "
        ";
        }
        // line 41
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 46
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 47
            echo "        <div class=\"e-content\">        
            ";
            // line 48
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
        </div>
        ";
            // line 50
            if ( !($context["truncate"] ?? null)) {
                // line 51
                echo "        ";
                $context["show_prev_next"] = true;
                // line 52
                echo "        ";
            }
            // line 53
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 54
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 55
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
            <p><a href=\"";
            // line 56
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } elseif (        // line 58
($context["truncate"] ?? null)) {
            // line 59
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 60
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
            <p><a href=\"";
            // line 61
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } else {
            // line 64
            echo "        <div class=\"e-content\">
            ";
            // line 65
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
        </div>

        ";
            // line 68
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", [])) {
                // line 69
                echo "            ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 69)->display($context);
                // line 70
                echo "        ";
            }
            // line 71
            echo "
        ";
            // line 72
            $context["show_prev_next"] = true;
            // line 73
            echo "    ";
        }
        // line 74
        echo "
    ";
        // line 75
        if (($context["show_prev_next"] ?? null)) {
            // line 76
            echo "
        <p class=\"prev-next\">
            ";
            // line 78
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 79
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\"><i class=\"fa fa-chevron-left\"></i> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.NEXT_POST");
                echo "</a>
            ";
            }
            // line 81
            echo "
            ";
            // line 82
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 83
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.PREV_POST");
                echo " <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 85
            echo "        </p>
    ";
        }
        // line 87
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 87,  264 => 85,  256 => 83,  254 => 82,  251 => 81,  243 => 79,  241 => 78,  237 => 76,  235 => 75,  232 => 74,  229 => 73,  227 => 72,  224 => 71,  221 => 70,  218 => 69,  216 => 68,  210 => 65,  207 => 64,  199 => 61,  195 => 60,  192 => 59,  190 => 58,  183 => 56,  179 => 55,  176 => 54,  173 => 53,  170 => 52,  167 => 51,  165 => 50,  160 => 48,  157 => 47,  155 => 46,  148 => 41,  142 => 39,  139 => 38,  136 => 37,  133 => 36,  130 => 35,  127 => 34,  124 => 33,  120 => 31,  106 => 29,  102 => 28,  99 => 27,  97 => 26,  94 => 25,  86 => 23,  77 => 20,  71 => 18,  69 => 17,  66 => 16,  64 => 15,  58 => 12,  54 => 11,  50 => 10,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-item h-entry\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                <span>{{ page.date|date(\"d\") }}</span>
                <em>{{ page.date|date(\"M\") }}</em>
            </time>
        </span>
        {% if page.header.link %}
            <h4 class=\"p-name\">
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
            </h4>
        {% else %}
            <h4 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h4>
        {% endif %}

        {% if page.taxonomy.tag %}
        <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}
        {% if header_image %}
            {% if header_image_file %}
                {% set header_image_media = page.media.images[header_image_file] %}
            {% else %}
                {% set header_image_media = page.media.images|first %}
            {% endif %}
            {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}
        {% endif %}

    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <div class=\"e-content\">        
            {{ page.content }}
        </div>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <div class=\"p-summary e-content\">
            {{ page.summary }}
            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
        </div>
    {% elseif truncate %}
        <div class=\"p-summary e-content\">
            {{ page.content }}
            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
        </div>
    {% else %}
        <div class=\"e-content\">
            {{ page.content }}
        </div>

        {% if config.plugins.comments.enabled %}
            {% include 'partials/comments.html.twig' %}
        {% endif %}

        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> {{ 'BLOG.ITEM.NEXT_POST'|t }}</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">{{ 'BLOG.ITEM.PREV_POST'|t }} <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/var/www/html/grav/user/themes/antimatter/templates/partials/blog_item.html.twig");
    }
}
