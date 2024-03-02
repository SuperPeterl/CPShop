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

/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_716fdefee7fca6ded717e620b49c3e19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        // line 28
        $context["layoutTitle"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Theme & Logo", [], "Admin.Navigation.Menu") . " > ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Theme", [], "Admin.Design.Feature"));
        // line 29
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_import"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new theme", [], "Admin.Design.Feature"), "icon" => "add"], "export" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_export_current"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export current theme", [], "Admin.Design.Feature"), "icon" => "cloud_download"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "  <div id=\"themes-logo-page\">


    ";
        // line 46
        if ( !(isset($context["isSingleShopContext"]) || array_key_exists("isSingleShopContext", $context) ? $context["isSingleShopContext"] : (function () { throw new RuntimeError('Variable "isSingleShopContext" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must select a shop from the above list if you wish to choose a theme.", [], "Admin.Design.Help"), "html", null, true);
            echo "
        </p>
      </div>
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        if ((isset($context["isInstalledRtlLanguage"]) || array_key_exists("isInstalledRtlLanguage", $context) ? $context["isInstalledRtlLanguage"] : (function () { throw new RuntimeError('Variable "isInstalledRtlLanguage" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 55)->display($context);
            // line 56
            echo "    ";
        }
        // line 57
        echo "
    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 58, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_upload_logos")]);
        echo "
    ";
        // line 59
        if ((( !(isset($context["isInstalledRtlLanguage"]) || array_key_exists("isInstalledRtlLanguage", $context) ? $context["isInstalledRtlLanguage"] : (function () { throw new RuntimeError('Variable "isInstalledRtlLanguage" does not exist.', 59, $this->source); })()) && (isset($context["isSingleShopContext"]) || array_key_exists("isSingleShopContext", $context) ? $context["isSingleShopContext"] : (function () { throw new RuntimeError('Variable "isSingleShopContext" does not exist.', 59, $this->source); })())) && (isset($context["isMultiShopFeatureUsed"]) || array_key_exists("isMultiShopFeatureUsed", $context) ? $context["isMultiShopFeatureUsed"] : (function () { throw new RuntimeError('Variable "isMultiShopFeatureUsed" does not exist.', 59, $this->source); })()))) {
            // line 60
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 60)->display($context);
            // line 61
            echo "    ";
        }
        // line 62
        echo "    <div class=\"card\">
      <div class=\"card-header\">
        ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        ";
        // line 67
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 67)->display($context);
        // line 68
        echo "      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          ";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 76, $this->source); })()), 'rest');
        echo "
    ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 77, $this->source); })()), 'form_end');
        echo "

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        ";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My theme for %name% shop", ["%name%" => (isset($context["shopName"]) || array_key_exists("shopName", $context) ? $context["shopName"] : (function () { throw new RuntimeError('Variable "shopName" does not exist.', 81, $this->source); })())], "Admin.Design.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          ";
        // line 85
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 85, "1350649352")->display(twig_array_merge($context, ["themeName" => twig_get_attribute($this->env, $this->source,         // line 86
(isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 86, $this->source); })()), "get", [0 => "name"], "method", false, false, false, 86), "themeDisplayName" => twig_get_attribute($this->env, $this->source,         // line 87
(isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 87, $this->source); })()), "get", [0 => "display_name"], "method", false, false, false, 87), "themeVersion" => twig_get_attribute($this->env, $this->source,         // line 88
(isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 88, $this->source); })()), "get", [0 => "version"], "method", false, false, false, 88), "themeAuthor" => twig_get_attribute($this->env, $this->source,         // line 89
(isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 89, $this->source); })()), "get", [0 => "author.name"], "method", false, false, false, 89), "themeAuthorUrl" => twig_get_attribute($this->env, $this->source,         // line 90
(isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 90, $this->source); })()), "get", [0 => "author.url"], "method", false, false, false, 90), "isActive" => true]));
        // line 103
        echo "
          ";
        // line 104
        if ( !twig_test_empty((isset($context["notUsedThemes"]) || array_key_exists("notUsedThemes", $context) ? $context["notUsedThemes"] : (function () { throw new RuntimeError('Variable "notUsedThemes" does not exist.', 104, $this->source); })()))) {
            // line 105
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notUsedThemes"]) || array_key_exists("notUsedThemes", $context) ? $context["notUsedThemes"] : (function () { throw new RuntimeError('Variable "notUsedThemes" does not exist.', 105, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 106
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 106, "538932056")->display(twig_array_merge($context, ["themeName" => twig_get_attribute($this->env, $this->source,                 // line 107
$context["theme"], "get", [0 => "name"], "method", false, false, false, 107), "themeDisplayName" => twig_get_attribute($this->env, $this->source,                 // line 108
$context["theme"], "get", [0 => "display_name"], "method", false, false, false, 108), "themeVersion" => twig_get_attribute($this->env, $this->source,                 // line 109
$context["theme"], "get", [0 => "version"], "method", false, false, false, 109), "themeAuthor" => twig_get_attribute($this->env, $this->source,                 // line 110
$context["theme"], "get", [0 => "author.name"], "method", false, false, false, 110), "themeAuthorUrl" => twig_get_attribute($this->env, $this->source,                 // line 111
$context["theme"], "get", [0 => "author.url"], "method", false, false, false, 111), "isActive" => false]));
                // line 137
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "          </div>

          ";
            // line 140
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 140)->display($context);
            // line 141
            echo "          ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 141)->display($context);
            // line 142
            echo "        ";
        }
        // line 143
        echo "
        ";
        // line 144
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminThemesListAfter", ["current_theme_name" => twig_get_attribute($this->env, $this->source, (isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 144, $this->source); })()), "get", [0 => "name"], "method", false, false, false, 144)]);
        echo "

        ";
        // line 146
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 146)->display($context);
        // line 147
        echo "      </div>
    </div>

  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/themes.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 156,  259 => 154,  249 => 153,  235 => 147,  233 => 146,  228 => 144,  225 => 143,  222 => 142,  219 => 141,  217 => 140,  213 => 138,  199 => 137,  197 => 111,  196 => 110,  195 => 109,  194 => 108,  193 => 107,  191 => 106,  173 => 105,  171 => 104,  168 => 103,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  154 => 81,  147 => 77,  143 => 76,  135 => 71,  130 => 68,  128 => 67,  122 => 64,  118 => 62,  115 => 61,  112 => 60,  110 => 59,  106 => 58,  103 => 57,  100 => 56,  97 => 55,  95 => 54,  92 => 53,  85 => 49,  81 => 47,  79 => 46,  74 => 43,  64 => 42,  53 => 26,  51 => 29,  49 => 28,  36 => 26,);
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

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% set layoutTitle = 'Theme & Logo'|trans({}, 'Admin.Navigation.Menu') ~ ' > ' ~ 'Theme'|trans({}, 'Admin.Design.Feature') %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_themes_import'),
    'desc': 'Add new theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'add'
  },
  'export': {
    'href': path('admin_themes_export_current'),
    'desc': 'Export current theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'cloud_download'
  }
  } %}

{% block content %}
  <div id=\"themes-logo-page\">


    {% if not isSingleShopContext %}
      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          {{ 'You must select a shop from the above list if you wish to choose a theme.'|trans({}, 'Admin.Design.Help') }}
        </p>
      </div>
    {% endif %}

    {% if isInstalledRtlLanguage %}
      {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig' %}
    {% endif %}

    {{ form_start(shopLogosForm, {'action': path('admin_themes_upload_logos')}) }}
    {% if not isInstalledRtlLanguage and isSingleShopContext and isMultiShopFeatureUsed %}
      {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig' %}
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\">
        {{ 'Logo'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig' %}
      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    {{ form_rest(shopLogosForm) }}
    {{ form_end(shopLogosForm) }}

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        {{ 'My theme for %name% shop'|trans({'%name%': shopName}, 'Admin.Design.Feature') }}
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
            'themeName': theme.get('name'),
            'themeDisplayName': theme.get('display_name'),
            'themeVersion': currentlyUsedTheme.get('version'),
            'themeAuthor': currentlyUsedTheme.get('author.name'),
            'themeAuthorUrl': theme.get('author.url'),
            'isActive': true
          } %}
            {% block image %}
              <img src=\"{{ baseShopUrl }}{{ currentlyUsedTheme.get('preview') }}\" alt=\"{{ currentlyUsedTheme.get('display_name') }}\">
            {% endblock %}
            {% block button_container %}
              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                {{ 'My current theme'|trans({}, 'Admin.Design.Feature') }}
              </button>
            {% endblock %}
          {% endembed %}

          {% if notUsedThemes is not empty %}
            {% for theme in notUsedThemes %}
              {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
                'themeName': theme.get('name'),
                'themeDisplayName': theme.get('display_name'),
                'themeVersion': theme.get('version'),
                'themeAuthor': theme.get('author.name'),
                'themeAuthorUrl': theme.get('author.url'),
                'isActive': false
              }  %}
                {% block image %}
                  <img src=\"{{ baseShopUrl }}{{ theme.get('preview') }}\" alt=\"{{ theme.get('display_name') }}\">
                {% endblock %}
                {% block button_container %}
                  <form action=\"{{ path('admin_themes_enable', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('enable-theme') }}\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" {{ (not isSingleShopContext) ? 'disabled' : '' }}>
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>{{ 'Use this theme'|trans({}, 'Admin.Design.Feature') }}</span>
                    </button>
                  </form>
                  <form action=\"{{ path('admin_themes_delete', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-theme') }}\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
                {% endblock %}
              {% endembed %}
            {% endfor %}
          </div>

          {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig' %}
          {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig' %}
        {% endif %}

        {{ renderhook('displayAdminThemesListAfter', { 'current_theme_name': currentlyUsedTheme.get('name') }) }}

        {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig' %}
      </div>
    </div>

  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/themes.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_716fdefee7fca6ded717e620b49c3e19___1350649352 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 85
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 85);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 93
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 94
        echo "              <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseShopUrl"]) || array_key_exists("baseShopUrl", $context) ? $context["baseShopUrl"] : (function () { throw new RuntimeError('Variable "baseShopUrl" does not exist.', 94, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 94, $this->source); })()), "get", [0 => "preview"], "method", false, false, false, 94), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 94, $this->source); })()), "get", [0 => "display_name"], "method", false, false, false, 94), "html", null, true);
        echo "\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 96
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        // line 97
        echo "              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                ";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My current theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "
              </button>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 99,  535 => 97,  525 => 96,  509 => 94,  499 => 93,  476 => 85,  265 => 156,  259 => 154,  249 => 153,  235 => 147,  233 => 146,  228 => 144,  225 => 143,  222 => 142,  219 => 141,  217 => 140,  213 => 138,  199 => 137,  197 => 111,  196 => 110,  195 => 109,  194 => 108,  193 => 107,  191 => 106,  173 => 105,  171 => 104,  168 => 103,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  154 => 81,  147 => 77,  143 => 76,  135 => 71,  130 => 68,  128 => 67,  122 => 64,  118 => 62,  115 => 61,  112 => 60,  110 => 59,  106 => 58,  103 => 57,  100 => 56,  97 => 55,  95 => 54,  92 => 53,  85 => 49,  81 => 47,  79 => 46,  74 => 43,  64 => 42,  53 => 26,  51 => 29,  49 => 28,  36 => 26,);
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

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% set layoutTitle = 'Theme & Logo'|trans({}, 'Admin.Navigation.Menu') ~ ' > ' ~ 'Theme'|trans({}, 'Admin.Design.Feature') %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_themes_import'),
    'desc': 'Add new theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'add'
  },
  'export': {
    'href': path('admin_themes_export_current'),
    'desc': 'Export current theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'cloud_download'
  }
  } %}

{% block content %}
  <div id=\"themes-logo-page\">


    {% if not isSingleShopContext %}
      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          {{ 'You must select a shop from the above list if you wish to choose a theme.'|trans({}, 'Admin.Design.Help') }}
        </p>
      </div>
    {% endif %}

    {% if isInstalledRtlLanguage %}
      {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig' %}
    {% endif %}

    {{ form_start(shopLogosForm, {'action': path('admin_themes_upload_logos')}) }}
    {% if not isInstalledRtlLanguage and isSingleShopContext and isMultiShopFeatureUsed %}
      {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig' %}
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\">
        {{ 'Logo'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig' %}
      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    {{ form_rest(shopLogosForm) }}
    {{ form_end(shopLogosForm) }}

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        {{ 'My theme for %name% shop'|trans({'%name%': shopName}, 'Admin.Design.Feature') }}
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
            'themeName': theme.get('name'),
            'themeDisplayName': theme.get('display_name'),
            'themeVersion': currentlyUsedTheme.get('version'),
            'themeAuthor': currentlyUsedTheme.get('author.name'),
            'themeAuthorUrl': theme.get('author.url'),
            'isActive': true
          } %}
            {% block image %}
              <img src=\"{{ baseShopUrl }}{{ currentlyUsedTheme.get('preview') }}\" alt=\"{{ currentlyUsedTheme.get('display_name') }}\">
            {% endblock %}
            {% block button_container %}
              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                {{ 'My current theme'|trans({}, 'Admin.Design.Feature') }}
              </button>
            {% endblock %}
          {% endembed %}

          {% if notUsedThemes is not empty %}
            {% for theme in notUsedThemes %}
              {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
                'themeName': theme.get('name'),
                'themeDisplayName': theme.get('display_name'),
                'themeVersion': theme.get('version'),
                'themeAuthor': theme.get('author.name'),
                'themeAuthorUrl': theme.get('author.url'),
                'isActive': false
              }  %}
                {% block image %}
                  <img src=\"{{ baseShopUrl }}{{ theme.get('preview') }}\" alt=\"{{ theme.get('display_name') }}\">
                {% endblock %}
                {% block button_container %}
                  <form action=\"{{ path('admin_themes_enable', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('enable-theme') }}\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" {{ (not isSingleShopContext) ? 'disabled' : '' }}>
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>{{ 'Use this theme'|trans({}, 'Admin.Design.Feature') }}</span>
                    </button>
                  </form>
                  <form action=\"{{ path('admin_themes_delete', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-theme') }}\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
                {% endblock %}
              {% endembed %}
            {% endfor %}
          </div>

          {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig' %}
          {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig' %}
        {% endif %}

        {{ renderhook('displayAdminThemesListAfter', { 'current_theme_name': currentlyUsedTheme.get('name') }) }}

        {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig' %}
      </div>
    </div>

  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/themes.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_716fdefee7fca6ded717e620b49c3e19___538932056 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 106
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 106);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 114
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 115
        echo "                  <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseShopUrl"]) || array_key_exists("baseShopUrl", $context) ? $context["baseShopUrl"] : (function () { throw new RuntimeError('Variable "baseShopUrl" does not exist.', 115, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 115, $this->source); })()), "get", [0 => "preview"], "method", false, false, false, 115), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 115, $this->source); })()), "get", [0 => "display_name"], "method", false, false, false, 115), "html", null, true);
        echo "\">
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        // line 118
        echo "                  <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_enable", ["themeName" => twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 118, $this->source); })()), "name", [], "any", false, false, false, 118)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("enable-theme"), "html", null, true);
        echo "\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" ";
        // line 120
        echo (( !(isset($context["isSingleShopContext"]) || array_key_exists("isSingleShopContext", $context) ? $context["isSingleShopContext"] : (function () { throw new RuntimeError('Variable "isSingleShopContext" does not exist.', 120, $this->source); })())) ? ("disabled") : (""));
        echo ">
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use this theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "</span>
                    </button>
                  </form>
                  <form action=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_delete", ["themeName" => twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 127, $this->source); })()), "name", [], "any", false, false, false, 127)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-theme"), "html", null, true);
        echo "\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 128,  832 => 127,  826 => 124,  819 => 120,  815 => 119,  810 => 118,  800 => 117,  784 => 115,  774 => 114,  751 => 106,  539 => 99,  535 => 97,  525 => 96,  509 => 94,  499 => 93,  476 => 85,  265 => 156,  259 => 154,  249 => 153,  235 => 147,  233 => 146,  228 => 144,  225 => 143,  222 => 142,  219 => 141,  217 => 140,  213 => 138,  199 => 137,  197 => 111,  196 => 110,  195 => 109,  194 => 108,  193 => 107,  191 => 106,  173 => 105,  171 => 104,  168 => 103,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  154 => 81,  147 => 77,  143 => 76,  135 => 71,  130 => 68,  128 => 67,  122 => 64,  118 => 62,  115 => 61,  112 => 60,  110 => 59,  106 => 58,  103 => 57,  100 => 56,  97 => 55,  95 => 54,  92 => 53,  85 => 49,  81 => 47,  79 => 46,  74 => 43,  64 => 42,  53 => 26,  51 => 29,  49 => 28,  36 => 26,);
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

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% set layoutTitle = 'Theme & Logo'|trans({}, 'Admin.Navigation.Menu') ~ ' > ' ~ 'Theme'|trans({}, 'Admin.Design.Feature') %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_themes_import'),
    'desc': 'Add new theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'add'
  },
  'export': {
    'href': path('admin_themes_export_current'),
    'desc': 'Export current theme'|trans({}, 'Admin.Design.Feature'),
    'icon': 'cloud_download'
  }
  } %}

{% block content %}
  <div id=\"themes-logo-page\">


    {% if not isSingleShopContext %}
      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          {{ 'You must select a shop from the above list if you wish to choose a theme.'|trans({}, 'Admin.Design.Help') }}
        </p>
      </div>
    {% endif %}

    {% if isInstalledRtlLanguage %}
      {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig' %}
    {% endif %}

    {{ form_start(shopLogosForm, {'action': path('admin_themes_upload_logos')}) }}
    {% if not isInstalledRtlLanguage and isSingleShopContext and isMultiShopFeatureUsed %}
      {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig' %}
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\">
        {{ 'Logo'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig' %}
      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    {{ form_rest(shopLogosForm) }}
    {{ form_end(shopLogosForm) }}

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        {{ 'My theme for %name% shop'|trans({'%name%': shopName}, 'Admin.Design.Feature') }}
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
            'themeName': theme.get('name'),
            'themeDisplayName': theme.get('display_name'),
            'themeVersion': currentlyUsedTheme.get('version'),
            'themeAuthor': currentlyUsedTheme.get('author.name'),
            'themeAuthorUrl': theme.get('author.url'),
            'isActive': true
          } %}
            {% block image %}
              <img src=\"{{ baseShopUrl }}{{ currentlyUsedTheme.get('preview') }}\" alt=\"{{ currentlyUsedTheme.get('display_name') }}\">
            {% endblock %}
            {% block button_container %}
              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                {{ 'My current theme'|trans({}, 'Admin.Design.Feature') }}
              </button>
            {% endblock %}
          {% endembed %}

          {% if notUsedThemes is not empty %}
            {% for theme in notUsedThemes %}
              {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
                'themeName': theme.get('name'),
                'themeDisplayName': theme.get('display_name'),
                'themeVersion': theme.get('version'),
                'themeAuthor': theme.get('author.name'),
                'themeAuthorUrl': theme.get('author.url'),
                'isActive': false
              }  %}
                {% block image %}
                  <img src=\"{{ baseShopUrl }}{{ theme.get('preview') }}\" alt=\"{{ theme.get('display_name') }}\">
                {% endblock %}
                {% block button_container %}
                  <form action=\"{{ path('admin_themes_enable', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('enable-theme') }}\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" {{ (not isSingleShopContext) ? 'disabled' : '' }}>
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>{{ 'Use this theme'|trans({}, 'Admin.Design.Feature') }}</span>
                    </button>
                  </form>
                  <form action=\"{{ path('admin_themes_delete', {'themeName': theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-theme') }}\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
                {% endblock %}
              {% endembed %}
            {% endfor %}
          </div>

          {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig' %}
          {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig' %}
        {% endif %}

        {{ renderhook('displayAdminThemesListAfter', { 'current_theme_name': currentlyUsedTheme.get('name') }) }}

        {% include '@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig' %}
      </div>
    </div>

  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/themes.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}
