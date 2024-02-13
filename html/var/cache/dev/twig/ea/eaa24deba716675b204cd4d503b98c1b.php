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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig */
class __TwigTemplate_a47fad6c40120e68ef8ce700b481ea1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'catalog_price_rules_widget' => [$this, 'block_catalog_price_rules_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_catalog_price_rules_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_price_rules_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_price_rules_widget"));

        // line 29
        echo "  <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <div id=\"catalog-price-rule-list-container\" class=\"d-none\">
      <div id=\"catalog-price-rules-loading\">
        <div class=\"loading-label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading catalog price rules", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</div>
        <div class=\"spinner spinner-primary\"></div>
      </div>
      <table class=\"table\" id=\"catalog-price-rules-list-table\">
        <thead class=\"thead-default\">
        <tr>
          <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discount", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Units", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 53
        echo "        </tbody>
      </table>
      <div class=\"row justify-content-center\" id=\"catalog-price-rules-pagination\">
        ";
        // line 56
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" => 10, "limitChoices" => [0 => 10, 1 => 20, 2 => 50, 3 => 100]]);
        // line 59
        echo "
      </div>
      <script type=\"text/html\" id=\"catalog-price-rule-tr-template\">
        <tr>
          <td class=\"catalog-price-rule-id\"></td>
          <td class=\"name\"></td>
          <td class=\"currency\"></td>
          <td class=\"country\"></td>
          <td class=\"group\"></td>
          <td class=\"shop\"></td>
          <td class=\"impact\"></td>
          <td class=\"from-qty\"></td>
          <td class=\"from\"></td>
          <td class=\"to\"></td>
          <td>
            <a
              href=\"\"
              type=\"button\"
              title=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
              class=\"js-edit-catalog-price-rule-btn btn tooltip-link\"><i class=\"material-icons\">edit</i>
            </a>
          </td>
        </tr>
      </script>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 77,  135 => 59,  133 => 56,  128 => 53,  120 => 47,  116 => 46,  112 => 45,  108 => 44,  104 => 43,  100 => 42,  96 => 41,  92 => 40,  88 => 39,  84 => 38,  75 => 32,  68 => 29,  58 => 28,  35 => 26,);
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

{% extends '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig' %}

{% block catalog_price_rules_widget %}
  <div {{ block('widget_container_attributes') }}>
    <div id=\"catalog-price-rule-list-container\" class=\"d-none\">
      <div id=\"catalog-price-rules-loading\">
        <div class=\"loading-label\">{{ 'Loading catalog price rules'|trans({}, 'Admin.Catalog.Feature') }}</div>
        <div class=\"spinner spinner-primary\"></div>
      </div>
      <table class=\"table\" id=\"catalog-price-rules-list-table\">
        <thead class=\"thead-default\">
        <tr>
          <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Country'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Group'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Store'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Discount'|trans({}, 'Admin.Catalog.Feature') }}</th>
          <th>{{ 'Units'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'From'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'To'|trans({}, 'Admin.Global') }}</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        {# template rows dynamically generated using javascript #}
        </tbody>
      </table>
      <div class=\"row justify-content-center\" id=\"catalog-price-rules-pagination\">
        {{ include('@PrestaShop/Admin/Common/javascript_pagination.html.twig', {
          'limit': 10,
          'limitChoices': [10, 20, 50, 100],
        }) }}
      </div>
      <script type=\"text/html\" id=\"catalog-price-rule-tr-template\">
        <tr>
          <td class=\"catalog-price-rule-id\"></td>
          <td class=\"name\"></td>
          <td class=\"currency\"></td>
          <td class=\"country\"></td>
          <td class=\"group\"></td>
          <td class=\"shop\"></td>
          <td class=\"impact\"></td>
          <td class=\"from-qty\"></td>
          <td class=\"from\"></td>
          <td class=\"to\"></td>
          <td>
            <a
              href=\"\"
              type=\"button\"
              title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
              class=\"js-edit-catalog-price-rule-btn btn tooltip-link\"><i class=\"material-icons\">edit</i>
            </a>
          </td>
        </tr>
      </script>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig");
    }
}
