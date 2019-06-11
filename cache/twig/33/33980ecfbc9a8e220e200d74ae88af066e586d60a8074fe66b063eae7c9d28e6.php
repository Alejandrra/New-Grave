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

/* forms/fields/array/array.html.twig */
class __TwigTemplate_07040627eabfce624ba7d991da85662bccfc0c96d86d8a1963cbe1d28b56536e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/array/array.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 4
        echo "    data-grav-array-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
    data-grav-array-keyname=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_key", []))), "html", null, true);
        echo "\"
    data-grav-array-valuename=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", []))), "html", null, true);
        echo "\"
    ";
        // line 7
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 42
    public function block_input($context, array $blocks = [])
    {
        // line 43
        echo "    ";
        $context["array_field"] = $this;
        // line 44
        echo "    <div data-grav-array-type=\"container\"";
        if ($this->getAttribute(($context["field"] ?? null), "value_only", [])) {
            echo " data-grav-array-mode=\"value_only\"";
        }
        echo (((twig_length_filter($this->env, ($context["value"] ?? null)) <= 1)) ? (" class=\"one-child\"") : (""));
        echo ">
        ";
        // line 45
        if (twig_length_filter($this->env, ($context["value"] ?? null))) {
            // line 46
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 47
                if ( !twig_test_iterable($context["text"])) {
                    // line 48
                    echo "                    ";
                    echo $context["array_field"]->getrenderer($context["key"], $context["text"], ($context["field"] ?? null), ($context["scope"] ?? null));
                    echo "
                ";
                } else {
                    // line 50
                    echo "                    ";
                    // line 51
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["text"]);
                    foreach ($context['_seq'] as $context["subkey"] => $context["subtext"]) {
                        // line 52
                        echo $context["array_field"]->getrenderer(((($context["key"] . "[") . $context["subkey"]) . "]"), $context["subtext"], ($context["field"] ?? null), ($context["scope"] ?? null));
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['subtext'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                ";
                }
                // line 55
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 58
            echo "            <div class=\"form-row\" data-grav-array-type=\"row\">
                <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
                ";
            // line 60
            if (($this->getAttribute(($context["field"] ?? null), "value_only", []) != true)) {
                // line 61
                echo "                <input
                    data-grav-array-type=\"key\"
                    type=\"text\"
                    ";
                // line 64
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                // line 65
                echo "                    placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_key", []))), "html", null, true);
                echo "\" />
                ";
            }
            // line 67
            echo "                <input
                    data-grav-array-type=\"value\"
                    type=\"text\"
                    name=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                    ";
            // line 71
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 72
            echo "                    placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", []))), "html", null, true);
            echo "\" />
                <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
            </div>";
        }
        // line 77
        echo "    </div>
";
    }

    // line 10
    public function getrenderer($__key__ = null, $__text__ = null, $__field__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "text" => $__text__,
            "field" => $__field__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 11
            echo "
    ";
            // line 12
            if ( !twig_test_iterable(($context["text"] ?? null))) {
                // line 13
                echo "    <div class=\"form-row";
                if ($this->getAttribute(($context["field"] ?? null), "value_only", [])) {
                    echo " array-field-value_only";
                }
                echo "\"
         data-grav-array-type=\"row\">
        <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
        ";
                // line 16
                if (($this->getAttribute(($context["field"] ?? null), "value_only", []) != true)) {
                    // line 17
                    echo "            ";
                    if (((($context["key"] ?? null) == "0") && (($context["text"] ?? null) == ""))) {
                        // line 18
                        echo "                ";
                        $context["key"] = "";
                        // line 19
                        echo "            ";
                    }
                    // line 20
                    echo "
            <input
                data-grav-array-type=\"key\"
                type=\"text\" value=\"";
                    // line 23
                    echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                    echo "\"
                ";
                    // line 24
                    if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                        echo "disabled=\"disabled\"";
                    }
                    // line 25
                    echo "                placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_key", []))), "html", null, true);
                    echo "\" />
        ";
                }
                // line 27
                echo "
        <input
            data-grav-array-type=\"value\"
            type=\"text\"
            name=\"";
                // line 31
                echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . "[") . ($context["key"] ?? null)) . "]"), "html", null, true);
                echo "\"
            placeholder=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", []))), "html", null, true);
                echo "\"
            ";
                // line 33
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                // line 34
                echo "            value=";
                if ((($context["text"] ?? null) == "true")) {
                    echo "true";
                } elseif ((($context["text"] ?? null) == "false")) {
                    echo "false";
                } else {
                    echo "\"";
                    echo twig_escape_filter($this->env, twig_join_filter(($context["text"] ?? null), ", "));
                    echo "\"";
                }
                echo " />

        <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
        <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
    </div>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/array/array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 34,  236 => 33,  232 => 32,  228 => 31,  222 => 27,  216 => 25,  212 => 24,  208 => 23,  203 => 20,  200 => 19,  197 => 18,  194 => 17,  192 => 16,  183 => 13,  181 => 12,  178 => 11,  163 => 10,  158 => 77,  150 => 72,  146 => 71,  142 => 70,  137 => 67,  131 => 65,  127 => 64,  122 => 61,  120 => 60,  116 => 58,  109 => 55,  106 => 54,  98 => 52,  93 => 51,  91 => 50,  85 => 48,  83 => 47,  78 => 46,  76 => 45,  68 => 44,  65 => 43,  62 => 42,  56 => 7,  52 => 6,  48 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block global_attributes %}
    data-grav-array-name=\"{{ (scope ~ field.name)|fieldName }}\"
    data-grav-array-keyname=\"{{ field.placeholder_key|e|tu }}\"
    data-grav-array-valuename=\"{{ field.placeholder_value|e|tu }}\"
    {{ parent() }}
{% endblock %}

{% macro renderer(key, text, field, scope) %}

    {% if text is not iterable %}
    <div class=\"form-row{% if field.value_only %} array-field-value_only{% endif %}\"
         data-grav-array-type=\"row\">
        <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
        {% if field.value_only != true %}
            {% if key == '0' and text == '' %}
                {% set key = '' %}
            {% endif %}

            <input
                data-grav-array-type=\"key\"
                type=\"text\" value=\"{{ key }}\"
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                placeholder=\"{{ field.placeholder_key|e|tu }}\" />
        {% endif %}

        <input
            data-grav-array-type=\"value\"
            type=\"text\"
            name=\"{{ ((scope ~ field.name)|fieldName) ~ '[' ~ key ~ ']' }}\"
            placeholder=\"{{ field.placeholder_value|e|tu }}\"
            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
            value={% if text == 'true' %}true{% elseif text == 'false' %}false{% else %}\"{{ text|join(', ')|e }}\"{% endif %} />

        <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
        <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
    </div>
    {% endif %}
{% endmacro %}

{% block input %}
    {% import _self as array_field %}
    <div data-grav-array-type=\"container\"{% if field.value_only %} data-grav-array-mode=\"value_only\"{% endif %}{{ value|length <= 1 ? ' class=\"one-child\"' : '' }}>
        {% if value|length %}
            {% for key, text in value -%}
                {% if text is not iterable %}
                    {{ array_field.renderer(key, text, field, scope) }}
                {% else %}
                    {# Backward compatibility for nested arrays (metas) which are not supported anymore #}
                    {% for subkey, subtext in text -%}
                        {{ array_field.renderer(key ~ '[' ~ subkey ~ ']', subtext, field, scope) }}
                    {% endfor %}
                {% endif %}
            {% endfor %}
        {%- else -%}
            {# Empty value, mock the entry field#}
            <div class=\"form-row\" data-grav-array-type=\"row\">
                <span data-grav-array-action=\"sort\" class=\"fa fa-bars\"></span>
                {% if field.value_only != true %}
                <input
                    data-grav-array-type=\"key\"
                    type=\"text\"
                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                    placeholder=\"{{ field.placeholder_key|e|tu }}\" />
                {% endif %}
                <input
                    data-grav-array-type=\"value\"
                    type=\"text\"
                    name=\"{{ (scope ~ field.name)|fieldName }}\"
                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                    placeholder=\"{{ field.placeholder_value|e|tu }}\" />
                <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
            </div>
        {%- endif %}
    </div>
{% endblock %}
", "forms/fields/array/array.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/forms/fields/array/array.html.twig");
    }
}
