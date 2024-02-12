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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig */
class __TwigTemplate_a7e592172dc5210db07f51e956410e93 extends Template
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
<div class=\"card\" data-role=\"order-information\">
  <h3 class=\"card-header\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</h3>
  <div class=\"card-body\">
    ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "orderInformation", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)) {
            // line 30
            echo "      <h2>
        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminOrders", true, ["id_order" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "orderInformation", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "vieworder" => 1]), "html", null, true);
            echo "\">
          ";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order #%d", ["%d" => twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["cartView"] ?? null), "orderInformation", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "\"%06d")], "Admin.Orderscustomers.Feature"), "html", null, true);
            // line 34
            echo "
        </a>
      </h2>
      <p class=\"mb-0\">
        ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Made on:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "orderInformation", [], "any", false, false, false, 39), "placed_date", [], "any", false, false, false, 39), "html", null, true);
            echo "
      </p>
    ";
        } else {
            // line 42
            echo "      <h2>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No order was created from this cart.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</h2>
      ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)) {
                // line 44
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, ($context["createOrderFromCartLink"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-outline-secondary\" id=\"create-order-from-cart\">
          ";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create an order from this cart.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
        </a>
      ";
            }
            // line 48
            echo "    ";
        }
        // line 49
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 49,  92 => 48,  86 => 45,  81 => 44,  79 => 43,  74 => 42,  68 => 39,  64 => 38,  58 => 34,  56 => 33,  55 => 32,  51 => 31,  48 => 30,  46 => 29,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig");
    }
}
