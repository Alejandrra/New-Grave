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

/* login.html.twig */
class __TwigTemplate_4d2934f6c97fbe1c134cacba1eff7f002399052bd09327e0951e766aefe85cfe extends \Twig\Template
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
        $this->loadTemplate("login.html.twig", "login.html.twig", 1, "1198625158")->display(twig_array_merge($context, ["title" => "Grav Admin Login"]));
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title:'Grav Admin Login'} %}

    {% block form %}

        {% if grav.user.username and grav.user.authenticated %}

            <div class=\"form-actions primary-accent\">
                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
            </div>

        {% else %}
            {% for field in form.fields %}
                {% if field.type %}
                    <div>
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                    </div>
                {% endif %}
            {% endfor %}

            <div class=\"form-actions primary-accent\">
                {% if notAuthorized %}
                    <a class=\"button secondary\" onclick=\"window.history.back()\"><i class=\"fa fa-reply\"></i> {{ 'PLUGIN_ADMIN.BACK'|tu }}</a>
                    <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
                {% else %}
                    {% if not authenticated %}
                        <a class=\"button secondary\" href=\"{{ base_url_relative }}/forgot\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_FORGOT'|tu }}</a>
                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN'|tu }}</button>
                    {% else %}
                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
                    {% endif %}
                {% endif %}
            </div>

            <script>
                \$(document).ready( function() {
                    \$('#messages').delay(5000).animate({ height: 'toggle', opacity: 'toggle' }, 'slow');
                });
            </script>

        {% endif %}

    {% endblock %}

{% endembed %}
", "login.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/login.html.twig");
    }
}


/* login.html.twig */
class __TwigTemplate_4d2934f6c97fbe1c134cacba1eff7f002399052bd09327e0951e766aefe85cfe___1198625158 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/login.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form($context, array $blocks = [])
    {
        // line 4
        echo "
        ";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "authenticated", []))) {
            // line 6
            echo "
            <div class=\"form-actions primary-accent\">
                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT"), "html", null, true);
            echo "</button>
            </div>

        ";
        } else {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
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
                // line 13
                echo "                ";
                if ($this->getAttribute($context["field"], "type", [])) {
                    // line 14
                    echo "                    <div>
                        ";
                    // line 15
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "login.html.twig", 15)->display($context);
                    // line 16
                    echo "                    </div>
                ";
                }
                // line 18
                echo "            ";
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
            // line 19
            echo "
            <div class=\"form-actions primary-accent\">
                ";
            // line 21
            if (($context["notAuthorized"] ?? null)) {
                // line 22
                echo "                    <a class=\"button secondary\" onclick=\"window.history.back()\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
                    <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT"), "html", null, true);
                echo "</button>
                ";
            } else {
                // line 25
                echo "                    ";
                if ( !($context["authenticated"] ?? null)) {
                    // line 26
                    echo "                        <a class=\"button secondary\" href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                    echo "/forgot\"><i class=\"fa fa-exclamation-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN_FORGOT"), "html", null, true);
                    echo "</a>
                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> ";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN"), "html", null, true);
                    echo "</button>
                    ";
                } else {
                    // line 29
                    echo "                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT"), "html", null, true);
                    echo "</button>
                    ";
                }
                // line 31
                echo "                ";
            }
            // line 32
            echo "            </div>

            <script>
                \$(document).ready( function() {
                    \$('#messages').delay(5000).animate({ height: 'toggle', opacity: 'toggle' }, 'slow');
                });
            </script>

        ";
        }
        // line 41
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 41,  234 => 32,  231 => 31,  225 => 29,  220 => 27,  213 => 26,  210 => 25,  205 => 23,  200 => 22,  198 => 21,  194 => 19,  180 => 18,  176 => 16,  174 => 15,  171 => 14,  168 => 13,  150 => 12,  143 => 8,  139 => 6,  137 => 5,  134 => 4,  131 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title:'Grav Admin Login'} %}

    {% block form %}

        {% if grav.user.username and grav.user.authenticated %}

            <div class=\"form-actions primary-accent\">
                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
            </div>

        {% else %}
            {% for field in form.fields %}
                {% if field.type %}
                    <div>
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                    </div>
                {% endif %}
            {% endfor %}

            <div class=\"form-actions primary-accent\">
                {% if notAuthorized %}
                    <a class=\"button secondary\" onclick=\"window.history.back()\"><i class=\"fa fa-reply\"></i> {{ 'PLUGIN_ADMIN.BACK'|tu }}</a>
                    <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
                {% else %}
                    {% if not authenticated %}
                        <a class=\"button secondary\" href=\"{{ base_url_relative }}/forgot\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_FORGOT'|tu }}</a>
                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN'|tu }}</button>
                    {% else %}
                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
                    {% endif %}
                {% endif %}
            </div>

            <script>
                \$(document).ready( function() {
                    \$('#messages').delay(5000).animate({ height: 'toggle', opacity: 'toggle' }, 'slow');
                });
            </script>

        {% endif %}

    {% endblock %}

{% endembed %}
", "login.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/login.html.twig");
    }
}
