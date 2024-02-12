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

/* @PrestaShop/Admin/Sell/Order/Cart/view.html.twig */
class __TwigTemplate_2d2adca41505fecb5dcadb869d008305 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'cart_kpis' => [$this, 'block_cart_kpis'],
            'cart_customer_information' => [$this, 'block_cart_customer_information'],
            'cart_order_information' => [$this, 'block_cart_order_information'],
            'cart_summary' => [$this, 'block_cart_summary'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->displayBlock('cart_kpis', $context, $blocks);
        // line 35
        echo "
  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 38
        $this->displayBlock('cart_customer_information', $context, $blocks);
        // line 41
        echo "    </div>
    <div class=\"col\">
      ";
        // line 43
        $this->displayBlock('cart_order_information', $context, $blocks);
        // line 46
        echo "    </div>
  </div>

  ";
        // line 49
        $this->displayBlock('cart_summary', $context, $blocks);
    }

    // line 29
    public function block_cart_kpis($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:renderKpiRow", ["kpiRow" =>         // line 32
($context["cartKpi"] ?? null)]));
        // line 33
        echo "
  ";
    }

    // line 38
    public function block_cart_customer_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 39)->display($context);
        // line 40
        echo "      ";
    }

    // line 43
    public function block_cart_order_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 44)->display($context);
        // line 45
        echo "      ";
    }

    // line 49
    public function block_cart_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 50)->display($context);
        // line 51
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  118 => 50,  114 => 49,  110 => 45,  107 => 44,  103 => 43,  99 => 40,  96 => 39,  92 => 38,  87 => 33,  85 => 32,  83 => 30,  79 => 29,  75 => 49,  70 => 46,  68 => 43,  64 => 41,  62 => 38,  57 => 35,  54 => 29,  50 => 28,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/view.html.twig");
    }
}
