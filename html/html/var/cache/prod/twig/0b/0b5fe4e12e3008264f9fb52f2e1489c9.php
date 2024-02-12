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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig */
class __TwigTemplate_1a1b035869d41905a9abac1adcd3b32a extends Template
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
<div class=\"card\" data-role=\"customer-information\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)) {
            // line 33
            echo "        <div class=\"col\">
          <h2>
            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_view", ["customerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">
              ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 36), "gender", [], "any", false, false, false, 36)) {
                // line 37
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 37), "gender", [], "any", false, false, false, 37), "html", null, true);
                echo "
              ";
            }
            // line 39
            echo "              ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 39), "first_name", [], "any", false, false, false, 39), "html", null, true);
            echo "
              ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 40), "last_name", [], "any", false, false, false, 40), "html", null, true);
            echo "
            </a>
          </h2>

          <p class=\"mb-0\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account registration date:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 46), "registration_date", [], "any", false, false, false, 46), "html", null, true);
            echo "
          </p>

          <p class=\"mb-0\">
            ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valid orders placed:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 51), "valid_orders_count", [], "any", false, false, false, 51), "html", null, true);
            echo "
          </p>

          <p class=\"mb-0\">
            ";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total spent since registration:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 56), "total_spent_since_registration", [], "any", false, false, false, 56), "html", null, true);
            echo "
          </p>
        </div>

        <div class=\"col text-right\">
          <a href=\"mailto:";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 61), "email", [], "any", false, false, false, 61), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
            ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cartView"] ?? null), "customerInformation", [], "any", false, false, false, 62), "email", [], "any", false, false, false, 62), "html", null, true);
            echo "
          </a>
        </div>
      ";
        } else {
            // line 66
            echo "        <div class=\"col\">
          <h2 class=\"mb-0\">";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Guest not registered", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</h2>
        </div>
      ";
        }
        // line 70
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 70,  128 => 67,  125 => 66,  118 => 62,  114 => 61,  106 => 56,  102 => 55,  95 => 51,  91 => 50,  84 => 46,  80 => 45,  72 => 40,  67 => 39,  61 => 37,  59 => 36,  55 => 35,  51 => 33,  49 => 32,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig");
    }
}
