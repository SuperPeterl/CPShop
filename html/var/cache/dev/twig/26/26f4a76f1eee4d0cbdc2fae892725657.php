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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig */
class __TwigTemplate_7d3f5229eaf557baa3471ac1360931bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig"));

        // line 25
        echo "
";
        // line 27
        $context["route_params"] = [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "route_param_name", [], "any", false, false, false, 27) => twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "primary_field", [], "any", false, false, false, 27), [], "array", false, false, false, 27)];
        // line 28
        $context["extra_route_params"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 28, $this->source); })()), "options", [], "any", false, false, false, 28), "extra_route_params", [], "any", false, false, false, 28);
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extra_route_params"]) || array_key_exists("extra_route_params", $context) ? $context["extra_route_params"] : (function () { throw new RuntimeError('Variable "extra_route_params" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 30
            echo "  ";
            $context["route_params"] = twig_array_merge((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 30, $this->source); })()), [$context["name"] => (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", false, false, false, 30)))) ? (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", false, false, false, 30)) : ($context["field"]))]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        // line 34
        $context["id_primary_key"] = twig_join_filter((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 34, $this->source); })()), "-");
        // line 35
        echo "
";
        // line 36
        $context["isValid"] = (twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 36, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), [], "array", false, false, false, 36) == 1);
        // line 37
        echo "
<div class=\"text-center\">
  <div
    class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center ps-togglable-row\"
    data-toggle-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 41, $this->source); })()), "options", [], "any", false, false, false, 41), "route", [], "any", false, false, false, 41), (isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 41, $this->source); })())), "html", null, true);
        echo "\"
  >
  <input type=\"radio\" name=\"input-";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 43, $this->source); })()), "options", [], "any", false, false, false, 43), "route", [], "any", false, false, false, 43), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\"
         id=\"input-false-";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 44, $this->source); })()), "options", [], "any", false, false, false, 44), "route", [], "any", false, false, false, 44), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\"
         value=\"0\" ";
        // line 45
        if ( !(isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 45, $this->source); })())) {
            echo "checked";
        }
        echo ">
      <label for=\"input-false-";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 46, $this->source); })()), "options", [], "any", false, false, false, 46), "route", [], "any", false, false, false, 46), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\">Off</label>
      <input type=\"radio\" name=\"input-";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "options", [], "any", false, false, false, 47), "route", [], "any", false, false, false, 47), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "\"
             id=\"input-true-";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 48, $this->source); })()), "options", [], "any", false, false, false, 48), "route", [], "any", false, false, false, 48), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\"
             value=\"1\" ";
        // line 49
        if ((isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 49, $this->source); })())) {
            echo "checked";
        }
        echo ">
      <label for=\"input-true-";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 50, $this->source); })()), "options", [], "any", false, false, false, 50), "route", [], "any", false, false, false, 50), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\">On</label>
      <span class=\"slide-button\"></span>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  118 => 49,  112 => 48,  106 => 47,  100 => 46,  94 => 45,  88 => 44,  82 => 43,  77 => 41,  71 => 37,  69 => 36,  66 => 35,  64 => 34,  61 => 32,  54 => 30,  50 => 29,  48 => 28,  46 => 27,  43 => 25,);
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

{# Prepare route params #}
{% set route_params = { (column.options.route_param_name) : (record[column.options.primary_field]) } %}
{% set extra_route_params = column.options.extra_route_params %}
{% for name, field in extra_route_params %}
  {% set route_params = route_params|merge({ (name) : (record[field] ?? field) }) %}
{% endfor %}

{# Primary key is composed of all route parameters #}
{% set id_primary_key = route_params|join('-') %}

{% set isValid = record[column.id] == 1 %}

<div class=\"text-center\">
  <div
    class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center ps-togglable-row\"
    data-toggle-url=\"{{ path(column.options.route, route_params) }}\"
  >
  <input type=\"radio\" name=\"input-{{ column.options.route }}-{{ id_primary_key }}\"
         id=\"input-false-{{ column.options.route }}-{{ id_primary_key }}\"
         value=\"0\" {% if not isValid %}checked{% endif %}>
      <label for=\"input-false-{{ column.options.route }}-{{ id_primary_key }}\">Off</label>
      <input type=\"radio\" name=\"input-{{ column.options.route }}-{{ id_primary_key }}\"
             id=\"input-true-{{ column.options.route }}-{{ id_primary_key }}\"
             value=\"1\" {% if isValid %}checked{% endif %}>
      <label for=\"input-true-{{ column.options.route }}-{{ id_primary_key }}\">On</label>
      <span class=\"slide-button\"></span>
  </div>
</div>
", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/toggle.html.twig");
    }
}
