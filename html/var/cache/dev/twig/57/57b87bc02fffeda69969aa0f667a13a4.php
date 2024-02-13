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

/* @PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig */
class __TwigTemplate_6f120205131806576c4a979f95c4f04d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'payment_preferences_form' => [$this, 'block_payment_preferences_form'],
            'payment_modules_currency_restrictions' => [$this, 'block_payment_modules_currency_restrictions'],
            'payment_modules_group_restrictions' => [$this, 'block_payment_modules_group_restrictions'],
            'payment_modules_country_restrictions' => [$this, 'block_payment_modules_country_restrictions'],
            'payment_modules_carrier_restrictions' => [$this, 'block_payment_modules_carrier_restrictions'],
            'payment_preferences_block_rest' => [$this, 'block_payment_preferences_block_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig"));

        // line 26
        echo "
";
        // line 27
        $this->displayBlock('payment_preferences_form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_payment_preferences_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_preferences_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_preferences_form"));

        // line 28
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["paymentPreferencesForm"]) || array_key_exists("paymentPreferencesForm", $context) ? $context["paymentPreferencesForm"] : (function () { throw new RuntimeError('Variable "paymentPreferencesForm" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
  ";
        // line 29
        $this->displayBlock('payment_modules_currency_restrictions', $context, $blocks);
        // line 55
        echo "
  ";
        // line 56
        $this->displayBlock('payment_modules_group_restrictions', $context, $blocks);
        // line 82
        echo "
  ";
        // line 83
        $this->displayBlock('payment_modules_country_restrictions', $context, $blocks);
        // line 109
        echo "
  ";
        // line 110
        $this->displayBlock('payment_modules_carrier_restrictions', $context, $blocks);
        // line 135
        echo "
  ";
        // line 136
        $this->displayBlock('payment_preferences_block_rest', $context, $blocks);
        // line 139
        echo "
  ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["paymentPreferencesForm"]) || array_key_exists("paymentPreferencesForm", $context) ? $context["paymentPreferencesForm"] : (function () { throw new RuntimeError('Variable "paymentPreferencesForm" does not exist.', 140, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_payment_modules_currency_restrictions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_currency_restrictions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_currency_restrictions"));

        // line 30
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">euro_symbol</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please mark each checkbox for the currency, or currencies, for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["paymentPreferencesForm"]) || array_key_exists("paymentPreferencesForm", $context) ? $context["paymentPreferencesForm"] : (function () { throw new RuntimeError('Variable "paymentPreferencesForm" does not exist.', 43, $this->source); })()), "currency_restrictions", [], "any", false, false, false, 43), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-currency-restrictions-save-button\">
            ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_payment_modules_group_restrictions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_group_restrictions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_group_restrictions"));

        // line 57
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">group</i>
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please mark each checkbox for the customer group(s), for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["paymentPreferencesForm"]) || array_key_exists("paymentPreferencesForm", $context) ? $context["paymentPreferencesForm"] : (function () { throw new RuntimeError('Variable "paymentPreferencesForm" does not exist.', 70, $this->source); })()), "group_restrictions", [], "any", false, false, false, 70), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-group-restrictions-save-button\">
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_payment_modules_country_restrictions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_country_restrictions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_country_restrictions"));

        // line 84
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">public</i>
        ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please mark each checkbox for the country, or countries, in which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["paymentPreferencesForm"]) || array_key_exists("paymentPreferencesForm", $context) ? $context["paymentPreferencesForm"] : (function () { throw new RuntimeError('Variable "paymentPreferencesForm" does not exist.', 97, $this->source); })()), "country_restrictions", [], "any", false, false, false, 97), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-country-restrictions-save-button\">
            ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 110
    public function block_payment_modules_carrier_restrictions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_carrier_restrictions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_carrier_restrictions"));

        // line 111
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">local_shipping</i>
        ";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please mark each checkbox for the carrier, or carrier, for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>
        <div class=\"form-group\">
          ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["paymentPreferencesForm"]) || array_key_exists("paymentPreferencesForm", $context) ? $context["paymentPreferencesForm"] : (function () { throw new RuntimeError('Variable "paymentPreferencesForm" does not exist.', 123, $this->source); })()), "carrier_restrictions", [], "any", false, false, false, 123), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-carrier-restrictions-save-button\">
            ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 136
    public function block_payment_preferences_block_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_preferences_block_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_preferences_block_rest"));

        // line 137
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["paymentPreferencesForm"]) || array_key_exists("paymentPreferencesForm", $context) ? $context["paymentPreferencesForm"] : (function () { throw new RuntimeError('Variable "paymentPreferencesForm" does not exist.', 137, $this->source); })()), 'rest');
        echo "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  346 => 137,  336 => 136,  320 => 129,  311 => 123,  304 => 119,  296 => 114,  291 => 111,  281 => 110,  265 => 103,  256 => 97,  248 => 92,  240 => 87,  235 => 84,  225 => 83,  209 => 76,  200 => 70,  192 => 65,  184 => 60,  179 => 57,  169 => 56,  153 => 49,  144 => 43,  136 => 38,  128 => 33,  123 => 30,  113 => 29,  101 => 140,  98 => 139,  96 => 136,  93 => 135,  91 => 110,  88 => 109,  86 => 83,  83 => 82,  81 => 56,  78 => 55,  76 => 29,  71 => 28,  52 => 27,  49 => 26,);
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
{% trans_default_domain 'Admin.Payment.Feature' %}

{% block payment_preferences_form %}
  {{ form_start(paymentPreferencesForm) }}
  {% block payment_modules_currency_restrictions %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">euro_symbol</i>
        {{ 'Currency restrictions'|trans({}, 'Admin.Payment.Feature') }}
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            {{ 'Please mark each checkbox for the currency, or currencies, for which you want the payment module(s) to be available.'|trans({}, 'Admin.Payment.Help') }}
          </small>
        </p>

        <div class=\"form-group\">
          {{ form_widget(paymentPreferencesForm.currency_restrictions) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-currency-restrictions-save-button\">
            {{ 'Save'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    </div>
  {% endblock %}

  {% block payment_modules_group_restrictions %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">group</i>
        {{ 'Group restrictions'|trans({}, 'Admin.Payment.Feature') }}
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            {{ 'Please mark each checkbox for the customer group(s), for which you want the payment module(s) to be available.'|trans({}, 'Admin.Payment.Help') }}
          </small>
        </p>

        <div class=\"form-group\">
          {{ form_widget(paymentPreferencesForm.group_restrictions) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-group-restrictions-save-button\">
            {{ 'Save'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    </div>
  {% endblock %}

  {% block payment_modules_country_restrictions %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">public</i>
        {{ 'Country restrictions'|trans({}, 'Admin.Payment.Feature') }}
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            {{ 'Please mark each checkbox for the country, or countries, in which you want the payment module(s) to be available.'|trans({}, 'Admin.Payment.Help') }}
          </small>
        </p>

        <div class=\"form-group\">
          {{ form_widget(paymentPreferencesForm.country_restrictions) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-country-restrictions-save-button\">
            {{ 'Save'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    </div>
  {% endblock %}

  {% block payment_modules_carrier_restrictions %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">local_shipping</i>
        {{ 'Carrier restrictions'|trans({}, 'Admin.Payment.Feature') }}
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            {{ 'Please mark each checkbox for the carrier, or carrier, for which you want the payment module(s) to be available.'|trans({}, 'Admin.Payment.Help') }}
          </small>
        </p>
        <div class=\"form-group\">
          {{ form_widget(paymentPreferencesForm.carrier_restrictions) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-carrier-restrictions-save-button\">
            {{ 'Save'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    </div>
  {% endblock %}

  {% block payment_preferences_block_rest %}
    {{ form_rest(paymentPreferencesForm) }}
  {% endblock %}

  {{ form_end(paymentPreferencesForm) }}
{% endblock %}
", "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig");
    }
}
