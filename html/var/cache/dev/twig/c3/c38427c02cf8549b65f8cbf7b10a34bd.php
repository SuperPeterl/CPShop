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

/* @PrestaShop/Admin/Common/javascript_pagination.html.twig */
class __TwigTemplate_071ae75b539b107e730a24a1f32fa5f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/javascript_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/javascript_pagination.html.twig"));

        // line 25
        echo "
";
        // line 30
        echo "<ul class=\"pagination mb-0\">
  <li class=\"page-item first disabled\">
    <button type=\"button\" class=\"page-link first\" data-page=\"1\">1</button>
  </li>
  <li class=\"page-item previous disabled\">
    <button type=\"button\" class=\"page-link previous\" aria-label=\"Previous\"><span class=\"sr-only\">Previous</span></button>
  </li>
  <li class=\"page-item current active\">
    <label>
      <input
        name=\"paginator-jump-page\"
        class=\"jump-to-page\"
        type=\"text\"
        value=\"1\"
      />
    </label>
  </li>
  <li class=\"page-item next\">
    <button
      type=\"button\"
      class=\"page-link next\"
      aria-label=\"Next\"
      data-page=\"2\">
      <span class=\"sr-only\">Next</span>
    </button>
  </li>
  <li class=\"page-item last\">
    <button type=\"button\" class=\"page-link last\"></button>
  </li>
</ul>
<div class=\"mx-3\">
  <label class=\"col-form-label\" id=\"pagination-info\"
         data-pagination-info=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => "%from%", "%to%" => "%to%", "%total%" => "%total%", "%current_page%" => "%current_page%", "%page_count%" => "%page_count%"], "Admin.Catalog.Feature"), "html", null, true);
        // line 68
        echo "\"
  >
  </label>
</div>
<div class=\"mx-3\">
  <div class=\"form-group row mb-0\">
    <label for=\"paginator-limit\" class=\"col-form-label mr-2\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
    <div>
      <select name=\"paginator-limit\" id=\"paginator-limit\" class=\"pagination-link custom-select\">
        ";
        // line 77
        if (!twig_in_filter((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 77, $this->source); })()), (isset($context["limitChoices"]) || array_key_exists("limitChoices", $context) ? $context["limitChoices"] : (function () { throw new RuntimeError('Variable "limitChoices" does not exist.', 77, $this->source); })()))) {
            // line 78
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "</option>
        ";
        }
        // line 80
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limitChoices"]) || array_key_exists("limitChoices", $context) ? $context["limitChoices"] : (function () { throw new RuntimeError('Variable "limitChoices" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["limitChoice"]) {
            // line 81
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["limitChoice"], "html", null, true);
            echo "\" ";
            if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 81, $this->source); })()) == $context["limitChoice"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["limitChoice"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limitChoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "      </select>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/javascript_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 83,  111 => 81,  106 => 80,  98 => 78,  96 => 77,  90 => 74,  82 => 68,  80 => 62,  46 => 30,  43 => 25,);
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

{#
  Wrap this template in div and pass its id to paginator component in js side.
  Related js component: /admin-dev/themes/new-theme/js/components/pagination/dynamic-paginator.js
#}
<ul class=\"pagination mb-0\">
  <li class=\"page-item first disabled\">
    <button type=\"button\" class=\"page-link first\" data-page=\"1\">1</button>
  </li>
  <li class=\"page-item previous disabled\">
    <button type=\"button\" class=\"page-link previous\" aria-label=\"Previous\"><span class=\"sr-only\">Previous</span></button>
  </li>
  <li class=\"page-item current active\">
    <label>
      <input
        name=\"paginator-jump-page\"
        class=\"jump-to-page\"
        type=\"text\"
        value=\"1\"
      />
    </label>
  </li>
  <li class=\"page-item next\">
    <button
      type=\"button\"
      class=\"page-link next\"
      aria-label=\"Next\"
      data-page=\"2\">
      <span class=\"sr-only\">Next</span>
    </button>
  </li>
  <li class=\"page-item last\">
    <button type=\"button\" class=\"page-link last\"></button>
  </li>
</ul>
<div class=\"mx-3\">
  <label class=\"col-form-label\" id=\"pagination-info\"
         data-pagination-info=\"{{ \"Viewing %from%-%to% on %total% (page %current_page% / %page_count%)\"|trans({
           '%from%': '%from%',
           '%to%': '%to%',
           '%total%': '%total%',
           '%current_page%': '%current_page%',
           '%page_count%': '%page_count%'
         }, 'Admin.Catalog.Feature') }}\"
  >
  </label>
</div>
<div class=\"mx-3\">
  <div class=\"form-group row mb-0\">
    <label for=\"paginator-limit\" class=\"col-form-label mr-2\">{{ 'Items per page:'|trans({}, 'Admin.Catalog.Feature') }}</label>
    <div>
      <select name=\"paginator-limit\" id=\"paginator-limit\" class=\"pagination-link custom-select\">
        {% if limit not in limitChoices %}
          <option value=\"{{ limit }}\" selected=\"selected\">{{ limit }}</option>
        {% endif %}
        {% for limitChoice in limitChoices %}
          <option value=\"{{ limitChoice }}\" {% if limit==limitChoice %}selected=\"selected\"{% endif %}>{{ limitChoice }}</option>
        {% endfor %}
      </select>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Common/javascript_pagination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/javascript_pagination.html.twig");
    }
}
