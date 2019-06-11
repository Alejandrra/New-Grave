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

/* forms/fields/tabs/tabs.html.twig */
class __TwigTemplate_0439d1012fc67c51d547bb9de592f2a6be946d69bb69983f022d64717817a10c extends \Twig\Template
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
        echo "<div class=\"form-tabs ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "class", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\">

";
        // line 3
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 4
            echo "
    ";
            // line 5
            $context["tabsKey"] = twig_join_filter(twig_get_array_keys_filter($this->getAttribute(($context["field"] ?? null), "fields", [])), ".");
            // line 6
            echo "    ";
            $context["storedValue"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->jsonDecodeFilter(_twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie("grav-tabs-state"), "{}"));
            // line 7
            echo "    ";
            $context["storedTab"] = $this->getAttribute(($context["storedValue"] ?? null), ("tab-" . ($context["tabsKey"] ?? null)));
            // line 8
            echo "
    ";
            // line 9
            if (twig_test_empty(($context["storedTab"] ?? null))) {
                // line 10
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["uri"] ?? null), "params", []), "tab", [])) {
                    // line 11
                    echo "            ";
                    $context["active"] = $this->getAttribute($this->getAttribute(($context["uri"] ?? null), "params", []), "tab", []);
                    // line 12
                    echo "        ";
                } elseif ($this->getAttribute(($context["field"] ?? null), "active", [])) {
                    // line 13
                    echo "            ";
                    $context["active"] = $this->getAttribute(($context["field"] ?? null), "active", []);
                    // line 14
                    echo "        ";
                } else {
                    // line 15
                    echo "            ";
                    $context["active"] = 1;
                    // line 16
                    echo "        ";
                }
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    <div class=\"tabs-nav\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 21
                echo "        ";
                if ((($this->getAttribute($context["tab"], "type", []) == "tab") && (twig_test_empty($this->getAttribute($context["tab"], "security", [])) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFilter($this->getAttribute($context["tab"], "security", [])))))) {
                    // line 22
                    echo "            <a class=\"tab__link ";
                    echo ((((($context["storedTab"] ?? null) == (($context["scope"] ?? null) . $this->getAttribute($context["tab"], "name", []))) || (($context["active"] ?? null) == $this->getAttribute($context["loop"], "index", [])))) ? ("active") : (""));
                    echo "\" href=\"#\" data-tabid=\"tab-";
                    echo twig_escape_filter($this->env, (($context["tabsKey"] ?? null) . $this->getAttribute($context["loop"], "index", [])), "html", null, true);
                    echo "\" data-tabkey=\"tab-";
                    echo twig_escape_filter($this->env, ($context["tabsKey"] ?? null), "html", null, true);
                    echo "\" data-scope=\"";
                    echo twig_escape_filter($this->env, (($context["scope"] ?? null) . $this->getAttribute($context["tab"], "name", [])), "html", null, true);
                    echo "\">
                <span>
                ";
                    // line 24
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute($context["tab"], "title", [])), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($context["tab"], "title", [])), "html", null, true);
                    }
                    // line 25
                    echo "                </span>
            </a>
        ";
                }
                // line 28
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </div>
    <div class=\"tabs-content\">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                echo "            ";
                if (($this->getAttribute($context["field"], "type", []) == "tab")) {
                    // line 33
                    echo "                ";
                    if ((twig_test_empty($this->getAttribute($context["field"], "security", [])) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFilter($this->getAttribute($context["field"], "security", []))))) {
                        // line 34
                        echo "                    ";
                        $context["value"] = (($this->getAttribute($context["field"], "name", [])) ? ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "toArray", [])));
                        // line 35
                        echo "                    <div id=\"tab-";
                        echo twig_escape_filter($this->env, (($context["tabsKey"] ?? null) . $this->getAttribute($context["loop"], "index", [])), "html", null, true);
                        echo "\" class=\"tab__content ";
                        echo ((((($context["storedTab"] ?? null) == (($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", []))) || (($context["active"] ?? null) == $this->getAttribute($context["loop"], "index", [])))) ? ("active") : (""));
                        echo "\">
                        ";
                        // line 36
                        $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/tabs/tabs.html.twig", 36)->display($context);
                        // line 37
                        echo "                    </div>
                ";
                    }
                    // line 39
                    echo "            ";
                }
                // line 40
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    </div>
";
        }
        // line 43
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/tabs/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 43,  201 => 41,  187 => 40,  184 => 39,  180 => 37,  178 => 36,  171 => 35,  168 => 34,  165 => 33,  162 => 32,  145 => 31,  141 => 29,  127 => 28,  122 => 25,  116 => 24,  104 => 22,  101 => 21,  84 => 20,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  38 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-tabs {{ field.class }} {{ field.classes }}\">

{% if field.fields %}

    {% set tabsKey = field.fields|keys|join('.') %}
    {% set storedValue = get_cookie('grav-tabs-state')|default('{}')|json_decode %}
    {% set storedTab = attribute(storedValue, 'tab-' ~ tabsKey) %}

    {% if storedTab is empty %}
        {% if uri.params.tab %}
            {% set active = uri.params.tab %}
        {% elseif field.active %}
            {% set active = field.active %}
        {% else %}
            {% set active = 1 %}
        {% endif %}
    {% endif %}

    <div class=\"tabs-nav\">
    {% for tab in field.fields %}
        {% if tab.type == 'tab' and (tab.security is empty or authorize(array(tab.security))) %}
            <a class=\"tab__link {{ (storedTab == scope ~ tab.name) or active == loop.index ? 'active' : '' }}\" href=\"#\" data-tabid=\"tab-{{ tabsKey ~ loop.index }}\" data-tabkey=\"tab-{{ tabsKey }}\" data-scope=\"{{ scope ~ tab.name }}\">
                <span>
                {% if grav.twig.twig.filters['tu'] is defined %}{{ tab.title|tu }}{% else %}{{ tab.title|t }}{% endif %}
                </span>
            </a>
        {% endif %}
    {% endfor %}
    </div>
    <div class=\"tabs-content\">
        {% for field in field.fields %}
            {% if field.type == 'tab' %}
                {% if field.security is empty or authorize(array(field.security)) %}
                    {% set value = field.name ? data.value(field.name) : data.toArray %}
                    <div id=\"tab-{{ tabsKey ~ loop.index }}\" class=\"tab__content {{ (storedTab == scope ~ field.name) or active == loop.index ? 'active' : '' }}\">
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                    </div>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
{% endif %}
</div>

", "forms/fields/tabs/tabs.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/forms/fields/tabs/tabs.html.twig");
    }
}
