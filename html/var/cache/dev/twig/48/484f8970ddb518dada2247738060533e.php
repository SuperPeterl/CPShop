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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig */
class __TwigTemplate_335d232e84f9e4edcf91160009e15578 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'link' => [$this, 'block_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig"));

        // line 25
        echo "
";
        // line 26
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 26, $this->source); })()), "options", [], "any", false, false, false, 26), "color_template_field", [], "any", false, false, false, 26)) && twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 26, $this->source); })()), "options", [], "any", false, false, false, 26), "color_template_field", [], "any", false, false, false, 26), [], "array", true, true, false, 26))) {
            // line 27
            echo "  ";
            $context["color"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "color_template_field", [], "any", false, false, false, 27), [], "array", false, false, false, 27);
        } else {
            // line 29
            echo "  ";
            $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 29, $this->source); })()), "options", [], "any", false, false, false, 29), "color_template", [], "any", false, false, false, 29);
        }
        // line 31
        $context["class"] = ("text-" . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 31, $this->source); })()));
        // line 32
        echo "
";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 33, $this->source); })()), "options", [], "any", false, false, false, 33), "button_template", [], "any", false, false, false, 33)) {
            // line 34
            echo "  ";
            $context["style"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })()), "options", [], "any", false, false, false, 34), "button_template", [], "any", false, false, false, 34);
            // line 35
            echo "  ";
            if (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 35, $this->source); })()) == "normal")) {
                // line 36
                echo "    ";
                $context["class"] = ("btn btn-" . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 36, $this->source); })()));
                // line 37
                echo "  ";
            } elseif (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 37, $this->source); })()) == "outline")) {
                // line 38
                echo "    ";
                $context["class"] = ("btn btn-outline-" . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 38, $this->source); })()));
                // line 39
                echo "  ";
            }
        }
        // line 41
        echo "
";
        // line 42
        $context["class"] = twig_trim_filter((((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 42, $this->source); })()) . " ") . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 42), "attr", [], "any", false, true, false, 42), "class", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 42), "attr", [], "any", false, true, false, 42), "class", [], "any", false, false, false, 42), "")) : (""))));
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('link', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        // line 45
        echo "<a
  class=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " text-nowrap\"
  href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "options", [], "any", false, false, false, 47), "route", [], "any", false, false, false, 47), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "options", [], "any", false, false, false, 47), "route_param_name", [], "any", false, false, false, 47) => twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 47, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "options", [], "any", false, false, false, 47), "route_param_field", [], "any", false, false, false, 47), [], "array", false, false, false, 47), "_fragment" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "options", [], "any", false, false, false, 47), "route_fragment", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\"
  ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 48), "target", [], "any", true, true, false, 48)) {
            // line 49
            echo "    target=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 49, $this->source); })()), "options", [], "any", false, false, false, 49), "target", [], "any", false, false, false, 49), "html", null, true);
            echo "\"
  ";
        }
        // line 51
        echo "  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 52, $this->source); })()), "options", [], "any", false, false, false, 52), "attr", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 53
            if (($context["attrname"] != "class")) {
                // line 54
                echo " ";
                // line 55
                if ($this->env->getTest('formview')->getCallable()($context["attrvalue"])) {
                    // line 56
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["attrvalue"], 'row'), "html_attr");
                    echo "\"
      ";
                } elseif ($this->env->getTest('form')->getCallable()(                // line 57
$context["attrvalue"])) {
                    // line 58
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["attrvalue"], "createView", [], "method", false, false, false, 58), 'row'), "html_attr");
                    echo "\"
      ";
                } else {
                    // line 60
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"
      ";
                }
                // line 62
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo ">
  ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 65), "icon", [], "any", true, true, false, 65) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 65, $this->source); })()), "options", [], "any", false, false, false, 65), "icon", [], "any", false, false, false, 65)))) {
            // line 66
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 66, $this->source); })()), "options", [], "any", false, false, false, 66), "icon", [], "any", false, false, false, 66), "html", null, true);
            echo "</i>
  ";
        }
        // line 68
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 68, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 68, $this->source); })()), "options", [], "any", false, false, false, 68), "field", [], "any", false, false, false, 68), [], "array", false, false, false, 68), "html", null, true);
        echo "
</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 68,  175 => 66,  173 => 65,  170 => 64,  163 => 62,  156 => 60,  149 => 58,  147 => 57,  141 => 56,  139 => 55,  137 => 54,  135 => 53,  131 => 52,  129 => 51,  123 => 49,  121 => 48,  117 => 47,  113 => 46,  110 => 45,  91 => 44,  88 => 43,  86 => 42,  83 => 41,  79 => 39,  76 => 38,  73 => 37,  70 => 36,  67 => 35,  64 => 34,  62 => 33,  59 => 32,  57 => 31,  53 => 29,  49 => 27,  47 => 26,  44 => 25,);
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

{% if column.options.color_template_field is not empty and record[column.options.color_template_field] is defined %}
  {% set color = record[column.options.color_template_field] %}
{% else %}
  {% set color = column.options.color_template %}
{% endif %}
{% set class = \"text-\" ~ color %}

{% if column.options.button_template %}
  {% set style = column.options.button_template %}
  {% if style == 'normal' %}
    {% set class = \"btn btn-\" ~ color %}
  {% elseif style == 'outline' %}
    {% set class = \"btn btn-outline-\" ~ color %}
  {% endif %}
{% endif %}

{% set class = (class ~ ' ' ~ column.options.attr.class|default(''))|trim %}

{% block link %}
<a
  class=\"{{ class }} text-nowrap\"
  href=\"{{ path(column.options.route, { (column.options.route_param_name) : record[column.options.route_param_field], _fragment : column.options.route_fragment }) }}\"
  {% if column.options.target is defined %}
    target=\"{{ column.options.target }}\"
  {% endif %}
  {# Add all attributes which are not class #}
  {%- for attrname, attrvalue in column.options.attr -%}
    {% if attrname != 'class' %}
      {{- \" \" -}}
      {% if attrvalue is formview %}
        {{- attrname }}=\"{{ form_row(attrvalue)|e('html_attr') }}\"
      {% elseif attrvalue is form %}
      {{- attrname }}=\"{{ form_row(attrvalue.createView())|e('html_attr') }}\"
      {% else %}
        {{- attrname }}=\"{{ attrvalue }}\"
      {% endif %}
    {% endif %}
  {%- endfor -%}
>
  {% if column.options.icon is defined and column.options.icon is not empty %}
    <i class=\"material-icons\">{{ column.options.icon }}</i>
  {% endif %}
  {{ record[column.options.field] }}
</a>
{% endblock %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/link.html.twig");
    }
}
