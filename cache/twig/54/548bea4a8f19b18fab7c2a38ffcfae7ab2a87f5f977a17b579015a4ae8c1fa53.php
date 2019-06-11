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

/* forms/fields/order/order.html.twig */
class __TwigTemplate_0d62752e1d35f18db82c795137ff953c7ea4e7b06263460c7377526caed4aa5d extends \Twig\Template
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
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 2
        $context["siblings"] = $this->getAttribute($this->getAttribute(($context["data"] ?? null), "parent", []), "children", []);
        // line 3
        $context["canOrder"] = $this->getAttribute(($context["data"] ?? null), "order", []);
        // line 4
        $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
        // line 5
        echo "
<div class=\"form-field grid pure-g";
        // line 6
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        echo "\">
    <div class=\"form-label";
        // line 7
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3 pure-u-1-3";
        }
        echo "\">
        <label>
            ";
        // line 9
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 10
            echo "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", []))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "
            ";
        }
        // line 14
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data";
        // line 17
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3 pure-u-2-3";
        }
        echo "\">
        <div class=\"form-order-wrapper ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\">

            <input
                type=\"hidden\"
                data-order
                ";
        // line 23
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 24
        echo "                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
                value=\"\" />
            ";
        // line 26
        if ( !($context["canOrder"] ?? null)) {
            // line 27
            echo "                <div class=\"notice\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX");
            echo "</div>
            ";
        }
        // line 29
        echo "
            ";
        // line 30
        if ((twig_length_filter($this->env, ($context["siblings"] ?? null)) < 200)) {
            // line 31
            echo "                ";
            $context["sortable_count"] = 0;
            // line 32
            echo "\t\t\t\t<ul id=\"ordering\" class=\"orderable ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\">
\t\t\t    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                if ($this->getAttribute($context["page"], "order", [])) {
                    // line 34
                    echo "\t\t\t\t\t<li class=\"drag-handle\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "slug", []), "html", null, true);
                    echo "\" ";
                    echo ((($this->getAttribute($context["page"], "slug", []) == $this->getAttribute(($context["data"] ?? null), "slug", []))) ? ("data-active-id") : (""));
                    echo "><span class=\"page-order\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "order", []), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", []));
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["page"]), "html", null, true);
                    echo "\"><i class=\"fa fa-external-link\"></i></a></li>
                    ";
                    // line 35
                    $context["sortable_count"] = $this->getAttribute($context["loop"], "index", []);
                    // line 36
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t</ul>
                ";
            // line 38
            if ((($context["sortable_count"] ?? null) < twig_length_filter($this->env, ($context["siblings"] ?? null)))) {
                // line 39
                echo "                <label>Unsortable Pages</label>
                <ul class=\"orderable disabled\">
                    ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    if ( !$this->getAttribute($context["page"], "order", [])) {
                        // line 42
                        echo "                        <li ";
                        echo ((($this->getAttribute($context["page"], "slug", []) == $this->getAttribute(($context["data"] ?? null), "slug", []))) ? ("data-active-id") : (""));
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", []));
                        echo " <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["page"]), "html", null, true);
                        echo "\"><i class=\"fa fa-external-link\"></i></a></li>
                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                </ul>
                ";
            }
            // line 46
            echo "\t\t\t";
        } else {
            // line 47
            echo "                <div class=\"notice\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 49
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/order/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 49,  193 => 47,  190 => 46,  186 => 44,  172 => 42,  167 => 41,  163 => 39,  161 => 38,  158 => 37,  148 => 36,  146 => 35,  133 => 34,  122 => 33,  117 => 32,  114 => 31,  112 => 30,  109 => 29,  103 => 27,  101 => 26,  95 => 24,  91 => 23,  83 => 18,  77 => 17,  70 => 14,  64 => 12,  56 => 10,  54 => 9,  47 => 7,  41 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set value = (value is null ? field.default : value) %}
{% set siblings = data.parent.children %}
{% set canOrder = data.order %}
{% set vertical = field.style == 'vertical' %}

<div class=\"form-field grid pure-g{% if vertical %} vertical{% endif %}\">
    <div class=\"form-label{% if not vertical %} block size-1-3 pure-u-1-3{% endif %}\">
        <label>
            {% if field.help %}
            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|e|tu }}\">{{ field.label|tu }}</span>
            {% else %}
            {{ field.label|tu }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
    </div>
    <div class=\"form-data{% if not vertical %} block size-2-3 pure-u-2-3{% endif %}\">
        <div class=\"form-order-wrapper {{ field.size }}\">

            <input
                type=\"hidden\"
                data-order
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                name=\"{{ (scope ~ field.name)|fieldName }}\"
                value=\"\" />
            {% if not canOrder %}
                <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX\"|tu|raw }}</div>
            {% endif %}

            {% if siblings|length < 200 %}
                {% set sortable_count = 0 %}
\t\t\t\t<ul id=\"ordering\" class=\"orderable {{ field.classes }}\">
\t\t\t    {% for page in siblings if page.order %}
\t\t\t\t\t<li class=\"drag-handle\" data-id=\"{{ page.slug }}\" {{ page.slug == data.slug ? 'data-active-id' : ''}}><span class=\"page-order\">{{ page.order }}</span> {{ page.title|e }} <a href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a></li>
                    {% set sortable_count = loop.index %}
                {% endfor %}
\t\t\t\t</ul>
                {% if sortable_count < siblings|length %}
                <label>Unsortable Pages</label>
                <ul class=\"orderable disabled\">
                    {% for page in siblings if not page.order %}
                        <li {{ page.slug == data.slug ? 'data-active-id' : ''}}>{{ page.title|e }} <a href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a></li>
                    {% endfor %}
                </ul>
                {% endif %}
\t\t\t{% else %}
                <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS\"|tu }}</div>
\t\t\t{% endif %}
        </div>
    </div>
</div>
", "forms/fields/order/order.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/forms/fields/order/order.html.twig");
    }
}
