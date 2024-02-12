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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig */
class __TwigTemplate_63959105c06593f993cee4848fb72e6a extends Template
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
        // line 25
        echo "
<div class=\"card\" data-role=\"cart-summary\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart summary", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <table class=\"table\">
      <thead>
        <tr>
          <th>&nbsp;</th>
          <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unit price", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stock", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 43), "products", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "          ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "customization", [], "any", false, false, false, 44))) {
                // line 45
                echo "            <tr>
              <td>";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 46);
                echo "</td>
              <td>
                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">
                  ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49), "html", null, true);
                echo "

                  ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["product"], "attributes", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                    <br> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "attributes", [], "any", false, false, false, 52), "html", null, true);
                    echo "
                  ";
                }
                // line 54
                echo "                  <br>

                  ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ref:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
                    ";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 58), "html", null, true);
                    echo "
                  ";
                }
                // line 60
                echo "
                  ";
                // line 61
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 61) && twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", false, false, false, 61))) {
                    // line 62
                    echo "                    / ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", false, false, false, 62), "html", null, true);
                    echo "
                  ";
                }
                // line 64
                echo "                </a>
              </td>
              <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "unit_price_formatted", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
              <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
              <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stock_quantity", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
              <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "total_price_formatted", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
            </tr>

            <tr>
              <td colspan=\"2\">
                ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "customization", [], "any", false, false, false, 74), "fields", [], "any", false, false, false, 74));
                foreach ($context['_seq'] as $context["_key"] => $context["customizationField"]) {
                    // line 75
                    echo "                  <div class=\"row\">
                    <div class=\"col-6 text-right\">
                      ";
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["customizationField"], "name", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customizationField"], "name", [], "any", false, false, false, 78), "html", null, true);
                        echo "</strong>
                      ";
                    } else {
                        // line 80
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text #", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "</strong>
                      ";
                    }
                    // line 82
                    echo "                    </div>
                    <div class=\"col-6\">
                      ";
                    // line 84
                    if ((twig_get_attribute($this->env, $this->source, $context["customizationField"], "type", [], "any", false, false, false, 84) == "customizable_file")) {
                        // line 85
                        echo "                        <img src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customizationField"], "image", [], "any", false, false, false, 85), "html", null, true);
                        echo "\">
                      ";
                    } else {
                        // line 87
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customizationField"], "value", [], "any", false, false, false, 87), "html", null, true);
                        echo "
                      ";
                    }
                    // line 89
                    echo "                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customizationField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "              </td>

              <td></td>
              <td>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "customization", [], "any", false, false, false, 95), "quantity", [], "any", false, false, false, 95), "html", null, true);
                echo "</td>
              <td></td>
              <td></td>
            </tr>
          ";
            }
            // line 100
            echo "
          ";
            // line 101
            if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "customization", [], "any", false, false, false, 101)) || (twig_get_attribute($this->env, $this->source, $context["product"], "cart_quantity", [], "any", false, false, false, 101) > twig_get_attribute($this->env, $this->source, $context["product"], "customization_quantity", [], "any", false, false, false, 101)))) {
                // line 102
                echo "            <tr>
              <td>";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 103);
                echo "</td>
              <td>
                <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\">
                  ";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106), "html", null, true);
                echo "

                  ";
                // line 108
                if (twig_get_attribute($this->env, $this->source, $context["product"], "attributes", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "                    <br> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "attributes", [], "any", false, false, false, 109), "html", null, true);
                    echo "
                  ";
                }
                // line 111
                echo "                  <br>

                  ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ref:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
                    ";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 115), "html", null, true);
                    echo "
                  ";
                }
                // line 117
                echo "
                  ";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 118) && twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", false, false, false, 118))) {
                    // line 119
                    echo "                    / ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", false, false, false, 119), "html", null, true);
                    echo "
                  ";
                }
                // line 121
                echo "                </a>
              </td>
              <td>";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "unit_price_formatted", [], "any", false, false, false, 123), "html", null, true);
                echo "</td>
              <td>";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cart_quantity", [], "any", false, false, false, 124), "html", null, true);
                echo "</td>
              <td>";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stock_quantity", [], "any", false, false, false, 125), "html", null, true);
                echo "</td>
              <td>";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "total_price_formatted", [], "any", false, false, false, 126), "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            // line 129
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
        <tr>
          <td colspan=\"5\">";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total cost of products:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
          <td class=\"text-right\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 133), "total_products_formatted", [], "any", false, false, false, 133), "html", null, true);
        echo "</td>
        </tr>

        ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 136), "total_discounts", [], "any", false, false, false, 136)) {
            // line 137
            echo "          <tr>
            <td colspan=\"5\">";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total value of vouchers:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 139), "total_discounts_formatted", [], "any", false, false, false, 139), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 142
        echo "
        ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 143), "total_wrapping", [], "any", false, false, false, 143)) {
            // line 144
            echo "          <tr>
            <td colspan=\"5\">";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total cost of gift wrapping:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 146), "total_wrapping_formatted", [], "any", false, false, false, 146), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 149
        echo "
        ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 150), "total_shipping", [], "any", false, false, false, 150)) {
            // line 151
            echo "          <tr>
            <td colspan=\"5\">";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total shipping costs:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 153), "total_shipping_formatted", [], "any", false, false, false, 153), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 156
        echo "
        <tr>
          <td colspan=\"5\">
            <strong>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</strong>
          </td>
          <td class=\"text-right\">
            <strong>";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 162), "total_formatted", [], "any", false, false, false, 162), "html", null, true);
        echo "</strong>
          </td>
        </tr>
      </tbody>
    </table>

    ";
        // line 168
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 168), "cart_rules", [], "any", false, false, false, 168))) {
            // line 169
            echo "      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discount name", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th class=\"text-right\">";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value", [], "Admin.Global"), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
          ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 178), "cart_rules", [], "any", false, false, false, 178));
            foreach ($context['_seq'] as $context["_key"] => $context["cartRule"]) {
                // line 179
                echo "            <tr>
              <td>";
                // line 180
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartRule"], "id", [], "any", false, false, false, 180), "html", null, true);
                echo "</td>
              <td>
                <a href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCartRules", true, ["id_cart_rule" => twig_get_attribute($this->env, $this->source,                 // line 183
$context["cartRule"], "id", [], "any", false, false, false, 183), "updatecart_rule" => 1]), "html", null, true);
                // line 185
                echo "\">
                  ";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartRule"], "name", [], "any", false, false, false, 186), "html", null, true);
                echo "
                </a>
              </td>
              <td class=\"text-right\">
                ";
                // line 190
                if (twig_get_attribute($this->env, $this->source, $context["cartRule"], "is_free_shipping", [], "any", false, false, false, 190)) {
                    // line 191
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free shipping", [], "Admin.Shipping.Feature"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 193
                    echo "                  - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartRule"], "formatted_value", [], "any", false, false, false, 193), "html", null, true);
                    echo "
                ";
                }
                // line 195
                echo "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartRule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "        </tbody>
      </table>
    ";
        }
        // line 201
        echo "
    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For this particular customer group, prices are displayed as:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
        <strong>
          ";
        // line 206
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "cartSummary", [], "any", false, false, false, 206), "is_tax_included", [], "any", false, false, false, 206)) {
            // line 207
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax included", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        } else {
            // line 209
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax excluded", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        }
        // line 211
        echo "        </strong>
      </p>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 211,  481 => 209,  475 => 207,  473 => 206,  468 => 204,  463 => 201,  458 => 198,  450 => 195,  444 => 193,  438 => 191,  436 => 190,  429 => 186,  426 => 185,  424 => 183,  423 => 182,  418 => 180,  415 => 179,  411 => 178,  404 => 174,  400 => 173,  396 => 172,  391 => 169,  389 => 168,  380 => 162,  374 => 159,  369 => 156,  363 => 153,  359 => 152,  356 => 151,  354 => 150,  351 => 149,  345 => 146,  341 => 145,  338 => 144,  336 => 143,  333 => 142,  327 => 139,  323 => 138,  320 => 137,  318 => 136,  312 => 133,  308 => 132,  304 => 130,  298 => 129,  292 => 126,  288 => 125,  284 => 124,  280 => 123,  276 => 121,  270 => 119,  268 => 118,  265 => 117,  260 => 115,  255 => 114,  253 => 113,  249 => 111,  243 => 109,  241 => 108,  236 => 106,  232 => 105,  227 => 103,  224 => 102,  222 => 101,  219 => 100,  211 => 95,  206 => 92,  198 => 89,  192 => 87,  186 => 85,  184 => 84,  180 => 82,  174 => 80,  168 => 78,  166 => 77,  162 => 75,  158 => 74,  150 => 69,  146 => 68,  142 => 67,  138 => 66,  134 => 64,  128 => 62,  126 => 61,  123 => 60,  118 => 58,  113 => 57,  111 => 56,  107 => 54,  101 => 52,  99 => 51,  94 => 49,  90 => 48,  85 => 46,  82 => 45,  79 => 44,  75 => 43,  68 => 39,  64 => 38,  60 => 37,  56 => 36,  52 => 35,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig");
    }
}
