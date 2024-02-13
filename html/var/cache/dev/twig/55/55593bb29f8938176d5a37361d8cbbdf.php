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

/* @PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig */
class __TwigTemplate_b5d197eac14b5f11075662fcc10caeb9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig"));

        // line 25
        echo "
<button id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_sprintf("%s_grid_bulk_action_%s", twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)), "html", null, true);
        echo "\"
        class=\"dropdown-item js-bulk-action-ajax-btn ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "class", [], "any", false, false, false, 27), "html", null, true);
        echo "\"
        type=\"button\"
        data-bulk-action=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "\"
        data-ajax-url=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 30, $this->source); })()), "options", [], "any", false, false, false, 30), "ajax_route", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
        data-route-params=\"";
        // line 31
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 31, $this->source); })()), "options", [], "any", false, false, false, 31), "route_params", [], "any", false, false, false, 31)), "html", null, true);
        echo "\"
        data-request-param-name=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 32, $this->source); })()), "options", [], "any", false, false, false, 32), "request_param_name", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
        data-request-bulk-chunk-size=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 33, $this->source); })()), "options", [], "any", false, false, false, 33), "bulk_chunk_size", [], "any", false, false, false, 33), "html", null, true);
        echo "\"
        data-request-reload-after-bulk=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 34, $this->source); })()), "options", [], "any", false, false, false, 34), "reload_after_bulk", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
        data-confirm-bulk-action=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 35, $this->source); })()), "options", [], "any", false, false, false, 35), "confirm_bulk_action", [], "any", false, false, false, 35), "html", null, true);
        echo "\"
        data-confirm-title=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 36, $this->source); })()), "options", [], "any", false, false, false, 36), "modal_confirm_title", [], "any", false, false, false, 36), "html", null, true);
        echo "\"
        data-cancel-label=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 37, $this->source); })()), "options", [], "any", false, false, false, 37), "modal_cancel", [], "any", false, false, false, 37), "html", null, true);
        echo "\"
        data-progress-title=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 38, $this->source); })()), "options", [], "any", false, false, false, 38), "modal_progress_title", [], "any", false, false, false, 38), "html", null, true);
        echo "\"
        data-progress-message=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 39, $this->source); })()), "options", [], "any", false, false, false, 39), "modal_progress_message", [], "any", false, false, false, 39), "html", null, true);
        echo "\"
        data-close-label=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 40, $this->source); })()), "options", [], "any", false, false, false, 40), "modal_close", [], "any", false, false, false, 40), "html", null, true);
        echo "\"
        data-stop-processing=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 41, $this->source); })()), "options", [], "any", false, false, false, 41), "modal_stop_processing", [], "any", false, false, false, 41), "html", null, true);
        echo "\"
        data-errors-message=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 42, $this->source); })()), "options", [], "any", false, false, false, 42), "modal_errors_message", [], "any", false, false, false, 42), "html", null, true);
        echo "\"
        data-back-to-processing=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 43, $this->source); })()), "options", [], "any", false, false, false, 43), "modal_back_to_processing", [], "any", false, false, false, 43), "html", null, true);
        echo "\"
        data-download-error-log=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 44, $this->source); })()), "options", [], "any", false, false, false, 44), "modal_download_error_log", [], "any", false, false, false, 44), "html", null, true);
        echo "\"
        data-view-error-log=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 45, $this->source); })()), "options", [], "any", false, false, false, 45), "modal_view_error_log", [], "any", false, false, false, 45), "html", null, true);
        echo "\"
        data-view-error-title=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 46, $this->source); })()), "options", [], "any", false, false, false, 46), "modal_error_title", [], "any", false, false, false, 46), "html", null, true);
        echo "\"
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 47, $this->source); })()), "options", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo ">
  ";
        // line 51
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 51, $this->source); })()), "icon", [], "any", false, false, false, 51))) {
            // line 52
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 52, $this->source); })()), "icon", [], "any", false, false, false, 52), "html", null, true);
            echo "</i>
  ";
        }
        // line 54
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "
</button>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 54,  147 => 52,  145 => 51,  142 => 50,  131 => 48,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  111 => 43,  107 => 42,  103 => 41,  99 => 40,  95 => 39,  91 => 38,  87 => 37,  83 => 36,  79 => 35,  75 => 34,  71 => 33,  67 => 32,  63 => 31,  59 => 30,  55 => 29,  50 => 27,  46 => 26,  43 => 25,);
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

<button id=\"{{ '%s_grid_bulk_action_%s'|format(grid.id, action.id) }}\"
        class=\"dropdown-item js-bulk-action-ajax-btn {{ action.options.class }}\"
        type=\"button\"
        data-bulk-action=\"{{ action.id }}\"
        data-ajax-url=\"{{ action.options.ajax_route }}\"
        data-route-params=\"{{ action.options.route_params|json_encode }}\"
        data-request-param-name=\"{{ action.options.request_param_name }}\"
        data-request-bulk-chunk-size=\"{{ action.options.bulk_chunk_size }}\"
        data-request-reload-after-bulk=\"{{ action.options.reload_after_bulk }}\"
        data-confirm-bulk-action=\"{{ action.options.confirm_bulk_action }}\"
        data-confirm-title=\"{{ action.options.modal_confirm_title }}\"
        data-cancel-label=\"{{ action.options.modal_cancel }}\"
        data-progress-title=\"{{ action.options.modal_progress_title }}\"
        data-progress-message=\"{{ action.options.modal_progress_message }}\"
        data-close-label=\"{{ action.options.modal_close }}\"
        data-stop-processing=\"{{ action.options.modal_stop_processing }}\"
        data-errors-message=\"{{ action.options.modal_errors_message }}\"
        data-back-to-processing=\"{{ action.options.modal_back_to_processing }}\"
        data-download-error-log=\"{{ action.options.modal_download_error_log }}\"
        data-view-error-log=\"{{ action.options.modal_view_error_log }}\"
        data-view-error-title=\"{{ action.options.modal_error_title }}\"
        {% for attribute, value in action.options.attributes %}
        {{ attribute }}=\"{{ value }}\"
        {% endfor %}
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {{ action.name }}
</button>
", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Bulk/ajax.html.twig");
    }
}
