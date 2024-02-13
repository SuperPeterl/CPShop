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

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig */
class __TwigTemplate_9d9a065e1b87819e33591d94f362bf05 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header_summary' => [$this, 'block_header_summary'],
            'header_references' => [$this, 'block_header_references'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig"));

        // line 25
        echo "
<div class=\"product-header-details\">
";
        // line 27
        $this->displayBlock('header_summary', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('header_references', $context, $blocks);
        // line 126
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_header_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_summary"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_summary"));

        // line 28
        echo "  ";
        // line 31
        echo "  ";
        $context["productData"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "data", [], "any", false, false, false, 31);
        // line 32
        echo "  <div class=\"product-header-summary\">
    <div class=\"product-field-preview\" data-role=\"price-tax-excluded\">
      <div class=\"product-field-value\">
        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, true, false, 35), "retail_price", [], "any", false, true, false, 35), "ecotax_tax_excluded", [], "any", true, true, false, 35)) {
            // line 36
            echo "          ";
            $context["final_price_tax_excluded"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 36, $this->source); })()), "pricing", [], "any", false, false, false, 36), "retail_price", [], "any", false, false, false, 36), "price_tax_excluded", [], "any", false, false, false, 36) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 36, $this->source); })()), "pricing", [], "any", false, false, false, 36), "retail_price", [], "any", false, false, false, 36), "ecotax_tax_excluded", [], "any", false, false, false, 36));
            // line 37
            echo "          ";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat((isset($context["final_price_tax_excluded"]) || array_key_exists("final_price_tax_excluded", $context) ? $context["final_price_tax_excluded"] : (function () { throw new RuntimeError('Variable "final_price_tax_excluded" does not exist.', 37, $this->source); })())), "html", null, true);
            echo "
        ";
        } else {
            // line 39
            echo "          ";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 39, $this->source); })()), "pricing", [], "any", false, false, false, 39), "retail_price", [], "any", false, false, false, 39), "price_tax_excluded", [], "any", false, false, false, 39)), "html", null, true);
            echo "
        ";
        }
        // line 41
        echo "      </div>
      <div class=\"product-field-label\">
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax excl.", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"product-field-preview\" data-role=\"price-tax-included\">
      <div class=\"product-field-value\">
        ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 49, $this->source); })()), "pricing", [], "any", false, false, false, 49), "retail_price", [], "any", false, false, false, 49), "price_tax_included", [], "any", false, false, false, 49)), "html", null, true);
        echo "
      </div>
      <div class=\"product-field-label\">
        ";
        // line 53
        echo "        ";
        if ((isset($context["taxEnabled"]) || array_key_exists("taxEnabled", $context) ? $context["taxEnabled"] : (function () { throw new RuntimeError('Variable "taxEnabled" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "          ";
            // line 55
            echo "          ";
            $context["taxRate"] = 0;
            // line 56
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 56, $this->source); })()), "pricing", [], "any", false, false, false, 56), "retail_price", [], "any", false, false, false, 56), "tax_rules_group_id", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "choices", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
                // line 57
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 57) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 57, $this->source); })()), "pricing", [], "any", false, false, false, 57), "retail_price", [], "any", false, false, false, 57), "tax_rules_group_id", [], "any", false, false, false, 57))) {
                    // line 58
                    echo "              ";
                    $context["taxRate"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 58), "data-tax-rate", [], "array", false, false, false, 58);
                    // line 59
                    echo "            ";
                }
                // line 60
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
          ";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax incl. (tax rule: %taxRate%%)", ["%taxRate%" => twig_round((isset($context["taxRate"]) || array_key_exists("taxRate", $context) ? $context["taxRate"] : (function () { throw new RuntimeError('Variable "taxRate" does not exist.', 62, $this->source); })()), 2)], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        ";
        } else {
            // line 64
            echo "          ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax incl.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        ";
        }
        // line 66
        echo "      </div>
    </div>

    ";
        // line 70
        echo "    ";
        if ((isset($context["stockEnabled"]) || array_key_exists("stockEnabled", $context) ? $context["stockEnabled"] : (function () { throw new RuntimeError('Variable "stockEnabled" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "      ";
            $context["quantityData"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 71, $this->source); })()), "stock", [], "any", false, false, false, 71), "quantities", [], "any", false, false, false, 71), "delta_quantity", [], "any", false, false, false, 71), "quantity", [], "any", false, false, false, 71);
            // line 72
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 72, $this->source); })()), "header", [], "any", false, false, false, 72), "type", [], "any", false, false, false, 72) != "combinations")) {
                // line 73
                echo "        ";
                $context["lowStock"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 73, $this->source); })()), "stock", [], "any", false, false, false, 73), "options", [], "any", false, false, false, 73), "low_stock_threshold", [], "any", false, false, false, 73);
                // line 74
                echo "      ";
            } else {
                // line 75
                echo "        ";
                $context["lowStock"] = 0;
                // line 76
                echo "      ";
            }
            // line 77
            echo "
      ";
            // line 78
            $context["outOfStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("out of stock", [], "Admin.Catalog.Feature");
            // line 79
            echo "      ";
            $context["lowStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("low stock", [], "Admin.Catalog.Feature");
            // line 80
            echo "      ";
            $context["inStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("in stock", [], "Admin.Catalog.Feature");
            // line 81
            echo "
      ";
            // line 82
            if (((isset($context["quantityData"]) || array_key_exists("quantityData", $context) ? $context["quantityData"] : (function () { throw new RuntimeError('Variable "quantityData" does not exist.', 82, $this->source); })()) <= 0)) {
                // line 83
                echo "        ";
                $context["stockClass"] = "danger";
                // line 84
                echo "        ";
                $context["stockLabel"] = (isset($context["outOfStockLabel"]) || array_key_exists("outOfStockLabel", $context) ? $context["outOfStockLabel"] : (function () { throw new RuntimeError('Variable "outOfStockLabel" does not exist.', 84, $this->source); })());
                // line 85
                echo "      ";
            } elseif ((((isset($context["lowStock"]) || array_key_exists("lowStock", $context) ? $context["lowStock"] : (function () { throw new RuntimeError('Variable "lowStock" does not exist.', 85, $this->source); })()) > 0) && ((isset($context["quantityData"]) || array_key_exists("quantityData", $context) ? $context["quantityData"] : (function () { throw new RuntimeError('Variable "quantityData" does not exist.', 85, $this->source); })()) <= (isset($context["lowStock"]) || array_key_exists("lowStock", $context) ? $context["lowStock"] : (function () { throw new RuntimeError('Variable "lowStock" does not exist.', 85, $this->source); })())))) {
                // line 86
                echo "        ";
                $context["stockClass"] = "warning";
                // line 87
                echo "        ";
                $context["stockLabel"] = (isset($context["lowStockLabel"]) || array_key_exists("lowStockLabel", $context) ? $context["lowStockLabel"] : (function () { throw new RuntimeError('Variable "lowStockLabel" does not exist.', 87, $this->source); })());
                // line 88
                echo "      ";
            } else {
                // line 89
                echo "        ";
                $context["stockClass"] = "success";
                // line 90
                echo "        ";
                $context["stockLabel"] = (isset($context["inStockLabel"]) || array_key_exists("inStockLabel", $context) ? $context["inStockLabel"] : (function () { throw new RuntimeError('Variable "inStockLabel" does not exist.', 90, $this->source); })());
                // line 91
                echo "      ";
            }
            // line 92
            echo "
      <div
        class=\"product-field-preview\"
        data-role=\"quantity\"
        ";
            // line 97
            echo "        data-low-stock-threshold=\"";
            echo twig_escape_filter($this->env, (isset($context["lowStock"]) || array_key_exists("lowStock", $context) ? $context["lowStock"] : (function () { throw new RuntimeError('Variable "lowStock" does not exist.', 97, $this->source); })()), "html", null, true);
            echo "\"
        data-out-of-stock-label=\"";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["outOfStockLabel"]) || array_key_exists("outOfStockLabel", $context) ? $context["outOfStockLabel"] : (function () { throw new RuntimeError('Variable "outOfStockLabel" does not exist.', 98, $this->source); })()), "html", null, true);
            echo "\"
        data-low-stock-label=\"";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["lowStockLabel"]) || array_key_exists("lowStockLabel", $context) ? $context["lowStockLabel"] : (function () { throw new RuntimeError('Variable "lowStockLabel" does not exist.', 99, $this->source); })()), "html", null, true);
            echo "\"
        data-in-stock-label=\"";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["inStockLabel"]) || array_key_exists("inStockLabel", $context) ? $context["inStockLabel"] : (function () { throw new RuntimeError('Variable "inStockLabel" does not exist.', 100, $this->source); })()), "html", null, true);
            echo "\"
      >
        <div class=\"product-total-quantity product-field-value ";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["stockClass"]) || array_key_exists("stockClass", $context) ? $context["stockClass"] : (function () { throw new RuntimeError('Variable "stockClass" does not exist.', 102, $this->source); })()), "html", null, true);
            echo "\">
          ";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["quantityData"]) || array_key_exists("quantityData", $context) ? $context["quantityData"] : (function () { throw new RuntimeError('Variable "quantityData" does not exist.', 103, $this->source); })()), "html", null, true);
            echo "
        </div>
        <div class=\"product-field-label product-total-quantity-label\">
          ";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["stockLabel"]) || array_key_exists("stockLabel", $context) ? $context["stockLabel"] : (function () { throw new RuntimeError('Variable "stockLabel" does not exist.', 106, $this->source); })()), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 110
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_header_references($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_references"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_references"));

        // line 114
        echo "  ";
        $context["referencesForm"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 114, $this->source); })()), "details", [], "any", false, false, false, 114), "references", [], "any", false, false, false, 114);
        // line 115
        echo "  <div class=\"product-header-references\">
    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["referencesForm"]) || array_key_exists("referencesForm", $context) ? $context["referencesForm"] : (function () { throw new RuntimeError('Variable "referencesForm" does not exist.', 116, $this->source); })()), "children", [], "any", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 117
            echo "      ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 117), "value", [], "any", false, false, false, 117))) {
                // line 118
                echo "        <div class=\"product-reference\">
          <label>";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 119), "label", [], "any", false, false, false, 119), "html", null, true);
                echo "</label>
          <span>";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120), "html", null, true);
                echo "</span>
        </div>
      ";
            }
            // line 123
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 124,  322 => 123,  316 => 120,  312 => 119,  309 => 118,  306 => 117,  302 => 116,  299 => 115,  296 => 114,  286 => 113,  275 => 110,  268 => 106,  262 => 103,  258 => 102,  253 => 100,  249 => 99,  245 => 98,  240 => 97,  234 => 92,  231 => 91,  228 => 90,  225 => 89,  222 => 88,  219 => 87,  216 => 86,  213 => 85,  210 => 84,  207 => 83,  205 => 82,  202 => 81,  199 => 80,  196 => 79,  194 => 78,  191 => 77,  188 => 76,  185 => 75,  182 => 74,  179 => 73,  176 => 72,  173 => 71,  170 => 70,  165 => 66,  159 => 64,  154 => 62,  151 => 61,  145 => 60,  142 => 59,  139 => 58,  136 => 57,  131 => 56,  128 => 55,  126 => 54,  123 => 53,  117 => 49,  108 => 43,  104 => 41,  98 => 39,  92 => 37,  89 => 36,  87 => 35,  82 => 32,  79 => 31,  77 => 28,  67 => 27,  56 => 126,  54 => 113,  51 => 112,  49 => 27,  45 => 25,);
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

<div class=\"product-header-details\">
{% block header_summary %}
  {# It is important to use vars.data and not vars.value because value contains the localized value which may
   # not be written with numeric characters anymore depending on the language but data is the initial float data.
   #}
  {% set productData = productForm.vars.data %}
  <div class=\"product-header-summary\">
    <div class=\"product-field-preview\" data-role=\"price-tax-excluded\">
      <div class=\"product-field-value\">
        {% if productData.pricing.retail_price.ecotax_tax_excluded is defined %}
          {% set final_price_tax_excluded = productData.pricing.retail_price.price_tax_excluded + productData.pricing.retail_price.ecotax_tax_excluded %}
          {{ final_price_tax_excluded|price_format }}
        {% else %}
          {{ productData.pricing.retail_price.price_tax_excluded|price_format }}
        {% endif %}
      </div>
      <div class=\"product-field-label\">
        {{ 'tax excl.'|trans({}, 'Admin.Global') }}
      </div>
    </div>

    <div class=\"product-field-preview\" data-role=\"price-tax-included\">
      <div class=\"product-field-value\">
        {{ productData.pricing.retail_price.price_tax_included|price_format }}
      </div>
      <div class=\"product-field-label\">
        {# If tax feature is enabled display it in the label #}
        {% if taxEnabled %}
          {# First find the selected tax rate #}
          {% set taxRate = 0 %}
          {% for group_label, choice in productForm.pricing.retail_price.tax_rules_group_id.vars.choices %}
            {% if choice.data == productData.pricing.retail_price.tax_rules_group_id %}
              {% set taxRate = choice.attr['data-tax-rate'] %}
            {% endif %}
          {% endfor %}

          {{ 'tax incl. (tax rule: %taxRate%%)'|trans({'%taxRate%': taxRate|round(2)}, 'Admin.Catalog.Feature') }}
        {% else %}
          {{ 'tax incl.'|trans({}, 'Admin.Catalog.Feature') }}
        {% endif %}
      </div>
    </div>

    {# Only display stock when Stock management is enabled #}
    {% if stockEnabled %}
      {% set quantityData = productData.stock.quantities.delta_quantity.quantity %}
      {% if productData.header.type != 'combinations' %}
        {% set lowStock = productData.stock.options.low_stock_threshold %}
      {% else %}
        {% set lowStock = 0 %}
      {% endif %}

      {% set outOfStockLabel = 'out of stock'|trans({}, 'Admin.Catalog.Feature') %}
      {% set lowStockLabel = 'low stock'|trans({}, 'Admin.Catalog.Feature') %}
      {% set inStockLabel = 'in stock'|trans({}, 'Admin.Catalog.Feature') %}

      {% if quantityData <= 0 %}
        {% set stockClass = 'danger' %}
        {% set stockLabel = outOfStockLabel %}
      {% elseif lowStock > 0 and quantityData <= lowStock %}
        {% set stockClass = 'warning' %}
        {% set stockLabel = lowStockLabel %}
      {% else %}
        {% set stockClass = 'success' %}
        {% set stockLabel = inStockLabel %}
      {% endif %}

      <div
        class=\"product-field-preview\"
        data-role=\"quantity\"
        {# these data attributes are needed for dynamic quantity update in javascript side #}
        data-low-stock-threshold=\"{{ lowStock }}\"
        data-out-of-stock-label=\"{{ outOfStockLabel }}\"
        data-low-stock-label=\"{{ lowStockLabel }}\"
        data-in-stock-label=\"{{ inStockLabel }}\"
      >
        <div class=\"product-total-quantity product-field-value {{ stockClass }}\">
          {{ quantityData }}
        </div>
        <div class=\"product-field-label product-total-quantity-label\">
          {{ stockLabel }}
        </div>
      </div>
    {% endif %}
  </div>
{% endblock %}

{% block header_references %}
  {% set referencesForm = productForm.details.references %}
  <div class=\"product-header-references\">
    {% for child in referencesForm.children %}
      {% if child.vars.value is not empty %}
        <div class=\"product-reference\">
          <label>{{ child.vars.label }}</label>
          <span>{{ child.vars.value }}</span>
        </div>
      {% endif %}
    {% endfor %}
  </div>
{% endblock %}
</div>
", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig");
    }
}
