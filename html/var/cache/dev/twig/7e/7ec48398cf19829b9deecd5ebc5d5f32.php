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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig */
class __TwigTemplate_5994918efddcb197c220adb330b9d0d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 27
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig", 27);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 27, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'image_dropzone_widget' => [$this, 'block_image_dropzone_widget'],
                'related_product_row' => [$this, 'block_related_product_row'],
                'packed_product_row' => [$this, 'block_packed_product_row'],
                'product_type_row' => [$this, 'block_product_type_row'],
                'price_summary_widget' => [$this, 'block_price_summary_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig"));

        // line 25
        echo "
";
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('image_dropzone_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('related_product_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('packed_product_row', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('product_type_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('price_summary_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_image_dropzone_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_dropzone_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_dropzone_widget"));

        // line 30
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 30, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 31
($context["attr"] ?? null), "class", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 31), "")) : ("")) . " image-dropzone")), "data-translations" => json_encode(        // line 32
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 32, $this->source); })())), "data-locales" => json_encode(        // line 33
(isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 33, $this->source); })())), "data-product-id" =>         // line 34
(isset($context["product_id"]) || array_key_exists("product_id", $context) ? $context["product_id"] : (function () { throw new RuntimeError('Variable "product_id" does not exist.', 34, $this->source); })()), "data-shop-id" =>         // line 35
(isset($context["shop_id"]) || array_key_exists("shop_id", $context) ? $context["shop_id"] : (function () { throw new RuntimeError('Variable "shop_id" does not exist.', 35, $this->source); })()), "data-is-multi-store-active" =>         // line 36
(isset($context["is_multi_store_active"]) || array_key_exists("is_multi_store_active", $context) ? $context["is_multi_store_active"] : (function () { throw new RuntimeError('Variable "is_multi_store_active" does not exist.', 36, $this->source); })()), "data-form-name" =>         // line 37
(isset($context["update_form_name"]) || array_key_exists("update_form_name", $context) ? $context["update_form_name"] : (function () { throw new RuntimeError('Variable "update_form_name" does not exist.', 37, $this->source); })()), "data-token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(        // line 38
(isset($context["update_form_name"]) || array_key_exists("update_form_name", $context) ? $context["update_form_name"] : (function () { throw new RuntimeError('Variable "update_form_name" does not exist.', 38, $this->source); })()))]);
        // line 40
        echo "
  ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shop_images", [], "any", true, true, false, 41)) {
            // line 42
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "shop_images", [], "any", false, false, false, 42), 'row');
            echo "
  ";
        }
        // line 44
        echo "  <div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_related_product_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "related_product_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "related_product_row"));

        // line 48
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 48, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 48), "")) : ("")) . " related-product entity-item"))]);
        // line 49
        echo "  <li ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <div class=\"related-product-image\">
      ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "image", [], "any", false, false, false, 51), 'widget');
        echo "
    </div>
    <div class=\"related-product-legend\">
      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), 'widget', ["prefix" => "<i class=\"material-icons entity-item-delete\">delete</i>"]);
        echo "
    </div>
    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), 'widget');
        echo "
  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_packed_product_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "packed_product_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "packed_product_row"));

        // line 61
        echo "  <li class=\"packed-product entity-item\">
    <div class=\"packed-product-image\">
      ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63), 'widget');
        echo "
    </div>
    <div class=\"packed-product-legend\">
      ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66), 'widget', ["prefix" => "<i class=\"material-icons entity-item-delete\">delete</i>"]);
        echo "
      ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "reference", [], "any", false, false, false, 67), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
      <div class=\"packed-product-quantity\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "quantity", [], "any", false, false, false, 71), 'widget');
        echo "
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "quantity", [], "any", false, false, false, 72), 'errors');
        echo "
      </div>
    </div>
    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "product_id", [], "any", false, false, false, 75), 'widget');
        echo "
    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "unique_identifier", [], "any", false, false, false, 76), 'widget');
        echo "
    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "combination_id", [], "any", false, false, false, 77), 'widget');
        echo "
  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_product_type_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_type_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_type_row"));

        // line 82
        echo "  <div class=\"product-type-selector form-group\">
    <div class=\"product-type-choices\">
      ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "choices", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 85
            echo "        <button type=\"button\" class=\"product-type-choice btn btn-outline-secondary\" data-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 85), "html", null, true);
            echo "\" data-description=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, true, false, 85), "data-description", [], "array", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, true, false, 85), "data-description", [], "array", false, false, false, 85), twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 85))) : (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 85))), "html", null, true);
            echo "\">
          ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 86), "html", null, true);
            echo "
          ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, true, false, 87), "icon", [], "array", true, true, false, 87)) {
                echo "<i class=\"material-icons\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 87), "icon", [], "array", false, false, false, 87), "html", null, true);
                echo "</i>";
            }
            // line 88
            echo "        </button>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    </div>
    <div class=\"product-type-description\">
      <i class=\"material-icons\">arrow_forward</i>
      <span class=\"product-type-description-content\"></span>
    </div>
    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'widget');
        echo "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_price_summary_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_summary_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_summary_widget"));

        // line 100
        echo "  <div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value price-tax-excluded-value\"></div>
      <div class=\"price-summary-value price-tax-included-value\"></div>
      <div class=\"price-summary-value unit-price-value\"></div>
    </div>
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value margin-value\"></div>
      <div class=\"price-summary-value margin-rate-value\"></div>
      <div class=\"price-summary-value wholesale-price-value\"></div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  318 => 100,  308 => 99,  295 => 95,  288 => 90,  281 => 88,  275 => 87,  271 => 86,  264 => 85,  260 => 84,  256 => 82,  246 => 81,  233 => 77,  229 => 76,  225 => 75,  219 => 72,  215 => 71,  208 => 67,  204 => 66,  198 => 63,  194 => 61,  184 => 60,  171 => 56,  166 => 54,  160 => 51,  154 => 49,  151 => 48,  141 => 47,  128 => 44,  122 => 42,  120 => 41,  117 => 40,  115 => 38,  114 => 37,  113 => 36,  112 => 35,  111 => 34,  110 => 33,  109 => 32,  108 => 31,  106 => 30,  96 => 29,  86 => 99,  83 => 98,  81 => 81,  78 => 80,  76 => 60,  73 => 59,  71 => 47,  68 => 46,  66 => 29,  63 => 28,  60 => 25,  30 => 27,);
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

{# This form theme is the root one for all the product form so we define here which base theme is used for all the children #}
{% use '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig' %}

{% block image_dropzone_widget %}
  {% set attr = attr|merge({
    'class': (attr.class|default('') ~ ' image-dropzone')|trim,
    'data-translations': translations|json_encode,
    'data-locales': locales|json_encode,
    'data-product-id': product_id,
    'data-shop-id': shop_id,
    'data-is-multi-store-active': is_multi_store_active,
    'data-form-name': update_form_name,
    'data-token': csrf_token(update_form_name)
  }) %}

  {% if form.shop_images is defined %}
    {{ form_row(form.shop_images) }}
  {% endif %}
  <div {{ block('widget_attributes') }}></div>
{% endblock %}

{% block related_product_row %}
  {% set attr = attr|merge({'class': (attr.class|default('') ~ ' related-product entity-item')|trim}) %}
  <li {{ block('widget_container_attributes') }}>
    <div class=\"related-product-image\">
      {{ form_widget(form.image) }}
    </div>
    <div class=\"related-product-legend\">
      {{ form_widget(form.name, {prefix: '<i class=\"material-icons entity-item-delete\">delete</i>'}) }}
    </div>
    {{ form_widget(form.id) }}
  </li>
{% endblock %}

{% block packed_product_row %}
  <li class=\"packed-product entity-item\">
    <div class=\"packed-product-image\">
      {{ form_widget(form.image) }}
    </div>
    <div class=\"packed-product-legend\">
      {{ form_widget(form.name, {prefix: '<i class=\"material-icons entity-item-delete\">delete</i>'}) }}
      {{ form_widget(form.reference)}}
    </div>
    <div class=\"form-group\">
      <div class=\"packed-product-quantity\">
        {{ form_widget(form.quantity) }}
        {{ form_errors(form.quantity) }}
      </div>
    </div>
    {{ form_widget(form.product_id) }}
    {{ form_widget(form.unique_identifier) }}
    {{ form_widget(form.combination_id) }}
  </li>
{% endblock %}

{% block product_type_row %}
  <div class=\"product-type-selector form-group\">
    <div class=\"product-type-choices\">
      {% for choice in form.vars.choices %}
        <button type=\"button\" class=\"product-type-choice btn btn-outline-secondary\" data-value=\"{{ choice.value }}\" data-description=\"{{ choice.attr['data-description']|default(choice.label) }}\">
          {{ choice.label }}
          {% if choice.attr['icon'] is defined %}<i class=\"material-icons\">{{ choice.attr['icon'] }}</i>{% endif %}
        </button>
      {% endfor %}
    </div>
    <div class=\"product-type-description\">
      <i class=\"material-icons\">arrow_forward</i>
      <span class=\"product-type-description-content\"></span>
    </div>
    {{ form_widget(form) }}
  </div>
{% endblock %}

{% block price_summary_widget %}
  <div {{ block('widget_attributes') }}>
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value price-tax-excluded-value\"></div>
      <div class=\"price-summary-value price-tax-included-value\"></div>
      <div class=\"price-summary-value unit-price-value\"></div>
    </div>
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value margin-value\"></div>
      <div class=\"price-summary-value margin-rate-value\"></div>
      <div class=\"price-summary-value wholesale-price-value\"></div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/product.html.twig");
    }
}
