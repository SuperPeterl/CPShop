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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig */
class __TwigTemplate_d2bd9029f8650daf2dcd1f054c899b87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig"));

        // line 25
        echo "
";
        // line 26
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 26, $this->source); })()), "options", [], "any", false, false, false, 26), "max_displayed_characters", [], "any", false, false, false, 26) > 0) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 26, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 26, $this->source); })()), "options", [], "any", false, false, false, 26), "field", [], "any", false, false, false, 26), [], "array", false, false, false, 26)) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 26, $this->source); })()), "options", [], "any", false, false, false, 26), "max_displayed_characters", [], "any", false, false, false, 26)))) {
            // line 27
            echo "  ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "field", [], "any", false, false, false, 27), [], "array", false, false, false, 27), 0, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "max_displayed_characters", [], "any", false, false, false, 27)), "html", null, true);
            echo "&mldr;
";
        } else {
            // line 29
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 29, $this->source); })()), "options", [], "any", false, false, false, 29), "field", [], "any", false, false, false, 29), [], "array", false, false, false, 29), "html", null, true);
            echo "
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 29,  48 => 27,  46 => 26,  43 => 25,);
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

{% if column.options.max_displayed_characters > 0 and record[column.options.field]|length > column.options.max_displayed_characters %}
  {{ record[column.options.field]|slice(0, column.options.max_displayed_characters) }}&mldr;
{% else %}
  {{ record[column.options.field] }}
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/data.html.twig");
    }
}
