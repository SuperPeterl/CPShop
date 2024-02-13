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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig */
class __TwigTemplate_fa4459e54da5e24f70f66a344b7378bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_supplier_row' => [$this, 'block_product_supplier_row'],
            'product_supplier_collection_row' => [$this, 'block_product_supplier_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig"));

        // line 26
        $this->displayBlock('product_supplier_row', $context, $blocks);
        // line 51
        $this->displayBlock('product_supplier_collection_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_product_supplier_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_supplier_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_supplier_row"));

        // line 27
        echo "<tr class=\"product_supplier_row\" id=\"product_supplier_row_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\" data-supplier-index=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "children", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 29
            echo "    ";
            $context["childType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 29), "block_prefixes", [], "any", false, false, false, 29), 1, [], "any", false, false, false, 29);
            // line 30
            echo "    ";
            if (((isset($context["childType"]) || array_key_exists("childType", $context) ? $context["childType"] : (function () { throw new RuntimeError('Variable "childType" does not exist.', 30, $this->source); })()) != "hidden")) {
                // line 31
                echo "      ";
                // line 32
                echo "      <td>
        ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
                // line 34
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
      </td>
    ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
$context["child"], "vars", [], "any", false, false, false, 36), "label", [], "any", false, false, false, 36))) {
                // line 37
                echo "      ";
                // line 38
                echo "      <td class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
        ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "supplier_name", [], "any", false, false, false, 39), 'widget');
                echo "
        <span class=\"preview\">";
                // line 40
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40), "html", null, true);
                }
                echo "</span>
      </td>
    ";
            } else {
                // line 43
                echo "      ";
                // line 44
                echo "      ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
    ";
            }
            // line 46
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </tr>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_product_supplier_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_supplier_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_supplier_collection_row"));

        // line 52
        echo "<div class=\"form-group product-suppliers-collection-row\">
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'label');
        // line 54
        $this->displayBlock("form_alert", $context, $blocks);
        // line 57
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 57, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 57, $this->source); })()), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 57, $this->source); })()), "vars", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57)]);
        // line 58
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
      <div class=\"row\">
        <div class=\"col-sm\">
          <table class=\"table\">
            <thead class=\"thead-default\">
            <tr>
              ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 64, $this->source); })()), "children", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 65
            echo "                ";
            // line 66
            echo "                ";
            $context["childType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 66), "block_prefixes", [], "any", false, false, false, 66), 1, [], "any", false, false, false, 66);
            // line 67
            echo "                ";
            if ((((isset($context["childType"]) || array_key_exists("childType", $context) ? $context["childType"] : (function () { throw new RuntimeError('Variable "childType" does not exist.', 67, $this->source); })()) != "hidden") ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 67), "label", [], "any", false, false, false, 67)))) {
                // line 68
                echo "                  <th>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 68), "label", [], "any", false, false, false, 68), "html", null, true);
                echo "</th>
                ";
            }
            // line 70
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tr>
            </thead>
            <tbody>";
        // line 74
        $this->displayBlock("form_rows", $context, $blocks);
        // line 75
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  202 => 75,  200 => 74,  196 => 71,  190 => 70,  184 => 68,  181 => 67,  178 => 66,  176 => 65,  172 => 64,  162 => 58,  160 => 57,  158 => 54,  156 => 53,  153 => 52,  143 => 51,  133 => 47,  127 => 46,  121 => 44,  119 => 43,  111 => 40,  107 => 39,  102 => 38,  100 => 37,  98 => 36,  93 => 34,  89 => 33,  86 => 32,  84 => 31,  81 => 30,  78 => 29,  74 => 28,  67 => 27,  57 => 26,  47 => 51,  45 => 26,);
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

{%- block product_supplier_row -%}
  <tr class=\"product_supplier_row\" id=\"product_supplier_row_{{ form.vars.name }}\" data-supplier-index=\"{{ form.vars.name }}\">
  {% for child in form.children %}
    {% set childType = child.vars.block_prefixes.1 %}
    {% if childType != 'hidden' %}
      {# Regular chidlren are displayed thanks to their widget #}
      <td>
        {{ form_widget(child) }}
        {{ form_errors(child) }}
      </td>
    {% elseif child.vars.label is not empty %}
      {# Hidden input with label is displayed, at least its value, with a class allowing to target them #}
      <td class=\"{{ child.vars.name }}\">
        {{ form_widget(form.supplier_name) }}
        <span class=\"preview\">{% if child.vars.value %}{{ child.vars.value }}{% endif %}</span>
      </td>
    {% else %}
      {# Other hidden types are simply added and will be invisible #}
      {{ form_widget(child) }}
    {% endif %}
  {% endfor %}
  </tr>
{%- endblock product_supplier_row -%}

{# Override suppliers collection template to remove the label and init the table #}
{%- block product_supplier_collection_row -%}
  <div class=\"form-group product-suppliers-collection-row\">
    {{ form_label(form) }}
    {{- block('form_alert') -}}

    {# We put prototype name in a data attribute, so the JS code can get it dynamically #}
    {%- set attr = attr|merge({'data-prototype': form_row(prototype), 'data-prototype-name': prototype.vars.name }) -%}
    <div {{ block('widget_attributes') }}>
      <div class=\"row\">
        <div class=\"col-sm\">
          <table class=\"table\">
            <thead class=\"thead-default\">
            <tr>
              {% for child in prototype.children %}
                {# We add column for children that are not hidden type, unless their label is not empty (like supplier_name) #}
                {% set childType = child.vars.block_prefixes.1 %}
                {% if childType != 'hidden' or (child.vars.label is not empty) %}
                  <th>{{ child.vars.label }}</th>
                {% endif %}
              {% endfor %}
            </tr>
            </thead>
            <tbody>
            {{- block('form_rows') -}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
{%- endblock -%}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig");
    }
}
