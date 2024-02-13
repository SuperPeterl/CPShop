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

/* @PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig */
class __TwigTemplate_9208a66ccafe9b9562fa83332490c6c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig"));

        // line 25
        echo "
<div id=\"specific-price-list-container\" class=\"d-none\">
  <div id=\"specific-prices-loading\">
    <div class=\"loading-label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading specific prices", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</div>
    <div class=\"spinner spinner-primary\"></div>
  </div>
  <table class=\"table\" id=\"specific-prices-list-table\">
    <thead class=\"thead-default\">
    <tr>
      <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
      <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
      <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discount (tax incl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
      <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duration", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Units", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 51
        echo "    </tbody>
  </table>
  <div class=\"row justify-content-center\" id=\"specific-prices-pagination\">
    ";
        // line 54
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" => 10, "limitChoices" => [0 => 10, 1 => 20, 2 => 50, 3 => 100]]);
        // line 57
        echo "
  </div>
  <script type=\"text/html\" id=\"specific-price-tr-template\">
    <tr>
      <td class=\"specific-price-id\"></td>
      <td class=\"combination\"></td>
      <td class=\"currency\"></td>
      <td class=\"country\"></td>
      <td class=\"group\"></td>
      <td class=\"shop\"></td>
      <td class=\"customer\"></td>
      <td class=\"price\"></td>
      <td class=\"impact\"></td>
      <td class=\"period\" data-unlimited-text=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unlimited", [], "Admin.Global"), "html", null, true);
        echo "\">
        <label>
          ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Global"), "html", null, true);
        echo "
          <span class=\"from\"></span>
        </label>
        <br>
        <label>
          ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To", [], "Admin.Global"), "html", null, true);
        echo "
          <span class=\"to\"></span>
        </label>
      </td>
      <td class=\"from-qty\"></td>
      <td>
        <button
          type=\"button\"
          title=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "\"
          class=\"js-delete-specific-price-btn btn tooltip-link\"
          data-confirm-title=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific price deletion", [], "Admin.Global"), "html", null, true);
        echo "\"
          data-confirm-message=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this specific price?", [], "Admin.Global"), "html", null, true);
        echo "\"
          data-confirm-btn-label=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-cancel-btn-label=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-confirm-btn-class=\"btn-danger\"
        ><i class=\"material-icons\">delete</i>
        </button>
      </td>
      <td>
        <button
          type=\"button\"
          title=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
          class=\"js-edit-specific-price-btn btn tooltip-link\"
          data-modal-title=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit specific price", [], "Admin.Global"), "html", null, true);
        echo "\"
          data-confirm-button-label=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and publish", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-cancel-button-label=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "\"
        >
          <i class=\"material-icons\">edit</i>
        </button>
      </td>
    </tr>
  </script>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 102,  189 => 101,  185 => 100,  180 => 98,  169 => 90,  165 => 89,  161 => 88,  157 => 87,  152 => 85,  141 => 77,  133 => 72,  128 => 70,  113 => 57,  111 => 54,  106 => 51,  97 => 44,  93 => 43,  89 => 42,  85 => 41,  81 => 40,  77 => 39,  73 => 38,  69 => 37,  65 => 36,  61 => 35,  57 => 34,  48 => 28,  43 => 25,);
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

<div id=\"specific-price-list-container\" class=\"d-none\">
  <div id=\"specific-prices-loading\">
    <div class=\"loading-label\">{{ 'Loading specific prices'|trans({}, 'Admin.Catalog.Feature') }}</div>
    <div class=\"spinner spinner-primary\"></div>
  </div>
  <table class=\"table\" id=\"specific-prices-list-table\">
    <thead class=\"thead-default\">
    <tr>
      <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
      <th>{{ 'Combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
      <th>{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
      <th>{{ 'Country'|trans({}, 'Admin.Global') }}</th>
      <th>{{ 'Group'|trans({}, 'Admin.Global') }}</th>
      <th>{{ 'Store'|trans({}, 'Admin.Global') }}</th>
      <th>{{ 'Customer'|trans({}, 'Admin.Global') }}</th>
      <th>{{ 'Specific price (tax excl.)'|trans({}, 'Admin.Catalog.Feature') }}</th>
      <th>{{ 'Discount (tax incl.)'|trans({}, 'Admin.Catalog.Feature') }}</th>
      <th>{{ 'Duration'|trans({}, 'Admin.Global') }}</th>
      <th>{{ 'Units'|trans({}, 'Admin.Catalog.Feature') }}</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    {# template rows dynamically generated using javascript #}
    </tbody>
  </table>
  <div class=\"row justify-content-center\" id=\"specific-prices-pagination\">
    {{ include('@PrestaShop/Admin/Common/javascript_pagination.html.twig', {
      'limit': 10,
      'limitChoices': [10, 20, 50, 100],
    }) }}
  </div>
  <script type=\"text/html\" id=\"specific-price-tr-template\">
    <tr>
      <td class=\"specific-price-id\"></td>
      <td class=\"combination\"></td>
      <td class=\"currency\"></td>
      <td class=\"country\"></td>
      <td class=\"group\"></td>
      <td class=\"shop\"></td>
      <td class=\"customer\"></td>
      <td class=\"price\"></td>
      <td class=\"impact\"></td>
      <td class=\"period\" data-unlimited-text=\"{{ 'Unlimited'| trans({}, 'Admin.Global') }}\">
        <label>
          {{ 'From'|trans({}, 'Admin.Global') }}
          <span class=\"from\"></span>
        </label>
        <br>
        <label>
          {{ 'To'|trans({}, 'Admin.Global') }}
          <span class=\"to\"></span>
        </label>
      </td>
      <td class=\"from-qty\"></td>
      <td>
        <button
          type=\"button\"
          title=\"{{ 'Delete'|trans({}, 'Admin.Actions') }}\"
          class=\"js-delete-specific-price-btn btn tooltip-link\"
          data-confirm-title=\"{{ 'Specific price deletion'| trans({}, 'Admin.Global') }}\"
          data-confirm-message=\"{{ 'Are you sure you want to delete this specific price?'| trans({}, 'Admin.Global') }}\"
          data-confirm-btn-label=\"{{ 'Delete'| trans({}, 'Admin.Actions') }}\"
          data-cancel-btn-label=\"{{ 'Cancel'| trans({}, 'Admin.Actions') }}\"
          data-confirm-btn-class=\"btn-danger\"
        ><i class=\"material-icons\">delete</i>
        </button>
      </td>
      <td>
        <button
          type=\"button\"
          title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
          class=\"js-edit-specific-price-btn btn tooltip-link\"
          data-modal-title=\"{{ 'Edit specific price'| trans({}, 'Admin.Global') }}\"
          data-confirm-button-label=\"{{ 'Save and publish'| trans({}, 'Admin.Actions') }}\"
          data-cancel-button-label=\"{{ 'Cancel'| trans({}, 'Admin.Actions') }}\"
        >
          <i class=\"material-icons\">edit</i>
        </button>
      </td>
    </tr>
  </script>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig");
    }
}
