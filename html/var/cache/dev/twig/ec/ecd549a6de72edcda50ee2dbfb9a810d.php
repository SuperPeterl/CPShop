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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig */
class __TwigTemplate_3e061705d20e4fb9fd74c4b9e511e620 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["actions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 26, $this->source); })()), "options", [], "any", false, false, false, 26), "actions", [], "any", false, false, false, 26);
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "    ";
            $context["inlineActions"] = [];
            // line 30
            echo "    ";
            $context["regularActions"] = [];
            // line 31
            echo "
    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 33
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["action"], "isApplicable", [0 => (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 33, $this->source); })())], "method", false, false, false, 33)) {
                    // line 34
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "options", [], "any", false, false, false, 34), "use_inline_display", [], "array", false, false, false, 34) == true)) {
                        // line 35
                        echo "            ";
                        $context["inlineActions"] = twig_array_merge((isset($context["inlineActions"]) || array_key_exists("inlineActions", $context) ? $context["inlineActions"] : (function () { throw new RuntimeError('Variable "inlineActions" does not exist.', 35, $this->source); })()), [0 => $context["action"]]);
                        // line 36
                        echo "          ";
                    } else {
                        // line 37
                        echo "            ";
                        $context["regularActions"] = twig_array_merge((isset($context["regularActions"]) || array_key_exists("regularActions", $context) ? $context["regularActions"] : (function () { throw new RuntimeError('Variable "regularActions" does not exist.', 37, $this->source); })()), [0 => $context["action"]]);
                        // line 38
                        echo "        ";
                    }
                    // line 39
                    echo "      ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    <div class=\"btn-group-action text-right\">
      ";
            // line 43
            if ( !twig_test_empty((isset($context["inlineActions"]) || array_key_exists("inlineActions", $context) ? $context["inlineActions"] : (function () { throw new RuntimeError('Variable "inlineActions" does not exist.', 43, $this->source); })()))) {
                // line 44
                echo "        <div class=\"btn-group d-flex justify-content-between text-right\">
          ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["inlineActions"]) || array_key_exists("inlineActions", $context) ? $context["inlineActions"] : (function () { throw new RuntimeError('Variable "inlineActions" does not exist.', 45, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["inlineAction"]) {
                    // line 46
                    $context["class"] = ("dropdown-item inline-dropdown-item " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inlineAction"], "options", [], "any", false, true, false, 46), "attr", [], "any", false, true, false, 46), "class", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inlineAction"], "options", [], "any", false, true, false, 46), "attr", [], "any", false, true, false, 46), "class", [], "any", false, false, false, 46), "")) : ("")));
                    // line 47
                    echo "
              ";
                    // line 48
                    echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . twig_get_attribute($this->env, $this->source, $context["inlineAction"], "type", [], "any", false, false, false, 48)) . ".html.twig"), ["grid" =>                     // line 49
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 49, $this->source); })()), "column" =>                     // line 50
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 50, $this->source); })()), "attributes" => ["class" => twig_trim_filter(                    // line 51
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 51, $this->source); })())), "tooltip_name" => true], "record" =>                     // line 52
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 52, $this->source); })()), "action" =>                     // line 53
$context["inlineAction"]]);
                    // line 54
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inlineAction'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        </div>
      ";
            }
            // line 58
            echo "
      ";
            // line 59
            if ( !twig_test_empty((isset($context["regularActions"]) || array_key_exists("regularActions", $context) ? $context["regularActions"] : (function () { throw new RuntimeError('Variable "regularActions" does not exist.', 59, $this->source); })()))) {
                // line 60
                echo "        <div class=\"btn-group\">
          ";
                // line 61
                list($context["skippedActions"], $context["isFirstRendered"]) =                 [0, false];
                // line 62
                echo "
          ";
                // line 64
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["regularActions"]) || array_key_exists("regularActions", $context) ? $context["regularActions"] : (function () { throw new RuntimeError('Variable "regularActions" does not exist.', 64, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 65
                    echo "            ";
                    if ( !(isset($context["isFirstRendered"]) || array_key_exists("isFirstRendered", $context) ? $context["isFirstRendered"] : (function () { throw new RuntimeError('Variable "isFirstRendered" does not exist.', 65, $this->source); })())) {
                        // line 66
                        echo "              ";
                        $context["skippedActions"] = ((isset($context["skippedActions"]) || array_key_exists("skippedActions", $context) ? $context["skippedActions"] : (function () { throw new RuntimeError('Variable "skippedActions" does not exist.', 66, $this->source); })()) + 1);
                        // line 67
                        echo "            ";
                    }
                    // line 68
                    echo "
            ";
                    // line 69
                    if ( !(isset($context["isFirstRendered"]) || array_key_exists("isFirstRendered", $context) ? $context["isFirstRendered"] : (function () { throw new RuntimeError('Variable "isFirstRendered" does not exist.', 69, $this->source); })())) {
                        // line 70
                        echo "              ";
                        $context["class"] = ("dropdown-item " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "options", [], "any", false, true, false, 70), "attr", [], "any", false, true, false, 70), "class", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "options", [], "any", false, true, false, 70), "attr", [], "any", false, true, false, 70), "class", [], "any", false, false, false, 70), "")) : ("")));
                        // line 71
                        echo "
              ";
                        // line 72
                        echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 72)) . ".html.twig"), ["grid" =>                         // line 73
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 73, $this->source); })()), "column" =>                         // line 74
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 74, $this->source); })()), "attributes" => ["class" => twig_trim_filter(                        // line 75
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 75, $this->source); })())), "tooltip_name" => true], "record" =>                         // line 76
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 76, $this->source); })()), "action" =>                         // line 77
$context["action"]]);
                        // line 78
                        echo "

              ";
                        // line 80
                        $context["isFirstRendered"] = true;
                        // line 81
                        echo "            ";
                    }
                    // line 82
                    echo "          ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "
          ";
                // line 85
                echo "          ";
                if ((twig_length_filter($this->env, (isset($context["regularActions"]) || array_key_exists("regularActions", $context) ? $context["regularActions"] : (function () { throw new RuntimeError('Variable "regularActions" does not exist.', 85, $this->source); })())) > (isset($context["skippedActions"]) || array_key_exists("skippedActions", $context) ? $context["skippedActions"] : (function () { throw new RuntimeError('Variable "skippedActions" does not exist.', 85, $this->source); })()))) {
                    // line 86
                    echo "            <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
               data-toggle=\"dropdown\"
               aria-haspopup=\"true\"
               aria-expanded=\"false\"
            >
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["regularActions"]) || array_key_exists("regularActions", $context) ? $context["regularActions"] : (function () { throw new RuntimeError('Variable "regularActions" does not exist.', 94, $this->source); })()), (isset($context["skippedActions"]) || array_key_exists("skippedActions", $context) ? $context["skippedActions"] : (function () { throw new RuntimeError('Variable "skippedActions" does not exist.', 94, $this->source); })())));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 95
                        echo "                ";
                        echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 95)) . ".html.twig"), ["grid" =>                         // line 96
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 96, $this->source); })()), "column" =>                         // line 97
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 97, $this->source); })()), "attributes" => ["class" => "dropdown-item", "tooltip_name" => false], "record" =>                         // line 99
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 99, $this->source); })()), "action" =>                         // line 100
$context["action"]]);
                        // line 101
                        echo "
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "            </div>
          ";
                }
                // line 105
                echo "        </div>
      ";
            }
            // line 107
            echo "    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 107,  290 => 105,  286 => 103,  271 => 101,  269 => 100,  268 => 99,  267 => 97,  266 => 96,  264 => 95,  247 => 94,  237 => 86,  234 => 85,  231 => 83,  217 => 82,  214 => 81,  212 => 80,  208 => 78,  206 => 77,  205 => 76,  204 => 75,  203 => 74,  202 => 73,  201 => 72,  198 => 71,  195 => 70,  193 => 69,  190 => 68,  187 => 67,  184 => 66,  181 => 65,  163 => 64,  160 => 62,  158 => 61,  155 => 60,  153 => 59,  150 => 58,  146 => 56,  131 => 54,  129 => 53,  128 => 52,  127 => 51,  126 => 50,  125 => 49,  124 => 48,  121 => 47,  119 => 46,  102 => 45,  99 => 44,  97 => 43,  93 => 41,  87 => 40,  84 => 39,  81 => 38,  78 => 37,  75 => 36,  72 => 35,  69 => 34,  66 => 33,  62 => 32,  59 => 31,  56 => 30,  53 => 29,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% set actions = column.options.actions %}

{% if actions is not empty %}
    {% set inlineActions = [] %}
    {% set regularActions = [] %}

    {% for action in actions %}
      {% if action.isApplicable(record) %}
        {% if action.options['use_inline_display'] == true %}
            {% set inlineActions = inlineActions|merge([action]) %}
          {% else %}
            {% set regularActions = regularActions|merge([action]) %}
        {% endif %}
      {% endif %}
    {% endfor %}

    <div class=\"btn-group-action text-right\">
      {% if inlineActions is not empty %}
        <div class=\"btn-group d-flex justify-content-between text-right\">
          {% for inlineAction in inlineActions -%}
              {% set class = 'dropdown-item inline-dropdown-item ' ~ inlineAction.options.attr.class|default('') %}

              {{ include('@PrestaShop/Admin/Common/Grid/Actions/Row/'~inlineAction.type~'.html.twig', {
                'grid': grid,
                'column': column,
                'attributes': {'class': class|trim, 'tooltip_name': true},
                'record': record,
                'action': inlineAction
              }) }}
          {% endfor %}
        </div>
      {% endif %}

      {% if regularActions is not empty %}
        <div class=\"btn-group\">
          {% set skippedActions, isFirstRendered = 0, false %}

          {# Render first item that is not in dropwdown #}
          {% for action in regularActions  %}
            {% if not isFirstRendered %}
              {% set skippedActions = skippedActions + 1 %}
            {% endif %}

            {% if not isFirstRendered %}
              {% set class = 'dropdown-item ' ~ action.options.attr.class|default('') %}

              {{ include('@PrestaShop/Admin/Common/Grid/Actions/Row/'~action.type~'.html.twig', {
                'grid': grid,
                'column': column,
                'attributes': {'class': class|trim, 'tooltip_name': true},
                'record': record,
                'action': action
              }) }}

              {% set isFirstRendered = true %}
            {% endif %}
          {% endfor %}

          {# Render remaining items in dropdown #}
          {% if regularActions|length > skippedActions %}
            <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
               data-toggle=\"dropdown\"
               aria-haspopup=\"true\"
               aria-expanded=\"false\"
            >
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              {% for action in regularActions|slice(skippedActions) %}
                {{ include('@PrestaShop/Admin/Common/Grid/Actions/Row/'~action.type~'.html.twig', {
                  'grid': grid,
                  'column': column,
                  'attributes': {'class': 'dropdown-item', 'tooltip_name': false},
                  'record': record,
                  'action': action
                }) }}
              {% endfor %}
            </div>
          {% endif %}
        </div>
      {% endif %}
    </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/action.html.twig");
    }
}
