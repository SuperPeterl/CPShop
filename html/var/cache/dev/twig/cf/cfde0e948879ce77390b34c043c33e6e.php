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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig */
class __TwigTemplate_4dcb17be11e6dfa3b7a7dfa230b704da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'category_tags_collection_row' => [$this, 'block_category_tags_collection_row'],
            'product_category_row' => [$this, 'block_product_category_row'],
            'category_tree_selector_row' => [$this, 'block_category_tree_selector_row'],
            'category_tree_entry_row' => [$this, 'block_category_tree_entry_row'],
            'category_tree_collection_row' => [$this, 'block_category_tree_collection_row'],
            'category_filter_row' => [$this, 'block_category_filter_row'],
            'category_filter_widget' => [$this, 'block_category_filter_widget'],
            'category_filter_item_widget' => [$this, 'block_category_filter_item_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_category_tags_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tags_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tags_collection_row"));

        // line 28
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 28), "")) : ("")) . " pstaggerTagsWrapper form-group d-block"))]);
        // line 29
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 29, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 29, $this->source); })()), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29)]);
        // line 30
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 31
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_product_category_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_category_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_category_row"));

        // line 36
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 36, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : ("")) . " pstaggerTag tag-item"))]);
        // line 38
        echo "<span ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "display_name", [], "any", false, false, false, 39), 'widget');
        echo "
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'widget');
        echo "
    ";
        // line 41
        $context["isRemovable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 41), "data", [], "any", false, true, false, 41), "removable", [], "any", true, true, false, 41) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "vars", [], "any", false, false, false, 41), "data", [], "any", false, false, false, 41), "removable", [], "any", false, false, false, 41));
        // line 42
        echo "    <a class=\"pstaggerClosingCross ";
        if ( !(isset($context["isRemovable"]) || array_key_exists("isRemovable", $context) ? $context["isRemovable"] : (function () { throw new RuntimeError('Variable "isRemovable" does not exist.', 42, $this->source); })())) {
            echo "d-none";
        }
        echo "\" href=\"#\">x</a>
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "category-id-input"]]);
        echo "
  </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_category_tree_selector_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_selector_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_selector_row"));

        // line 48
        echo "  <template id=\"categories-modal-template\">
    <div id=\"categories-modal-content\">
      ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "product_categories", [], "any", false, false, false, 50), 'row');
        echo "

      <fieldset class=\"form-group tree-fieldset d-none\">
        <div class=\"ui-widget\">
          <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1 ui-autocomplete-input\" placeholder=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search categories", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" autocomplete=\"off\">
          </div>

          <label class=\"form-control-label text-uppercase\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated categories", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
          ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "category_tree", [], "any", false, false, false, 59), 'row');
        echo "
        </div>
      </fieldset>

      <div class=\"categories-tree-loader\">
        <div class=\"spinner m-auto d-block\"></div>
      </div>

      <div class=\"category-tree-footer text-center text-md-left\">
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "cancel_btn", [], "any", false, false, false, 68), 'widget');
        echo "
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "apply_btn", [], "any", false, false, false, 69), 'widget');
        echo "
      </div>
    </div>
  </template>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_category_tree_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_entry_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_entry_row"));

        // line 76
        echo "  <li class=\"category-tree-element\">
    <div class=\"checkbox category-tree-inputs\">
      ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'widget');
        echo "
    </div>
    <ul class=\"children-list\"></ul>
  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_category_tree_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_collection_row"));

        // line 85
        echo "<div class=\"category-tree-container\">
  <div class=\"category-tree-overflow js-category-tree-overflow\">";
        // line 87
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 87, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 87, $this->source); })()), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 87, $this->source); })()), "vars", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87)]);
        // line 88
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 88, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 88), "")) : ("")) . " js-category-tree-list category-tree"))]);
        // line 89
        echo "<ul ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 90
        $this->displayBlock("form_rows", $context, $blocks);
        // line 91
        echo "</ul>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 96
    public function block_category_filter_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_row"));

        // line 97
        echo "  <div class=\"d-inline-block dropdown dropdown-clickable product_list_category_filter\">
    <button
      class=\"btn btn-outline-secondary dropdown-toggle\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
    >
      ";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter by categories", [], "Admin.Actions"), "html", null, true);
        echo "
      ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 108
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "data", [], "any", false, false, false, 108) && (twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 108) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "data", [], "any", false, false, false, 108)))) {
                // line 109
                echo "          (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 109), "html", null, true);
                echo ")
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "</button>
    <div class=\"dropdown-menu category-filter-menu\">
      <div class=\"categories-tree-actions\">
        <button type=\"button\" class=\"category_tree_filter_expand btn\">
          <i class=\"material-icons\">expand_more</i>
          ";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
        <button type=\"button\" class=\"category_tree_filter_collapse btn\">
          <i class=\"material-icons\">expand_less</i>
          ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
        <button type=\"button\" class=\"category_tree_filter_reset btn\">
          <i class=\"material-icons\">radio_button_unchecked</i>
          ";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unselect", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
      ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'widget');
        echo "
    </div>
  </div>
  ";
        // line 131
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "vars", [], "any", false, false, false, 131), "data", [], "any", false, false, false, 131))) {
            // line 132
            echo "  <button class=\"btn btn-link category_tree_filter_reset\" type=\"button\">
    <i class=\"material-icons\">clear</i> Clear filter
  </button>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 138
    public function block_category_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_widget"));

        // line 139
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <ul class=\"category-tree\">";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nested_tree"]) || array_key_exists("nested_tree", $context) ? $context["nested_tree"] : (function () { throw new RuntimeError('Variable "nested_tree" does not exist.', 141, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 142
            echo "        ";
            $this->displayBlock("category_filter_item_widget", $context, $blocks);
            echo "
      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "</ul>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 148
    public function block_category_filter_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_item_widget"));

        // line 149
        echo "<li class=\"category-node";
        if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 149) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 149, $this->source); })()), "children", [], "any", false, false, false, 149)))) {
            echo " more";
        }
        echo "\">
    <div class=\"form-check form-check-radio form-radio radio category-label\">
      ";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 151, $this->source); })()), "name", [], "any", false, false, false, 151), "html", null, true);
        echo "
      <label class=\"form-check-label\">
        <input type=\"radio\" name=\"";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "vars", [], "any", false, false, false, 153), "id", [], "any", false, false, false, 153), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 153, $this->source); })()), "id_category", [], "any", false, false, false, 153), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 153, $this->source); })()), "id_category", [], "any", false, false, false, 153) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "vars", [], "any", false, false, false, 153), "data", [], "any", false, false, false, 153))) {
            echo "checked=\"checked\"";
        }
        echo ">
        <i class=\"form-check-round\"></i>
      </label>
    </div>

    ";
        // line 158
        if (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 158)) {
            // line 159
            echo "      <ul class=\"category-children d-none\">
        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 160, $this->source); })()), "children", [], "any", false, false, false, 160));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 161
                echo "          ";
                $context["child"] = $context["item"];
                // line 162
                echo "          ";
                $this->displayBlock("category_filter_item_widget", $context, $blocks);
                echo "
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "</ul>
    ";
        }
        // line 166
        echo "  </li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 166,  500 => 164,  483 => 162,  480 => 161,  463 => 160,  460 => 159,  458 => 158,  444 => 153,  439 => 151,  431 => 149,  421 => 148,  410 => 144,  393 => 142,  376 => 141,  371 => 139,  361 => 138,  347 => 132,  345 => 131,  339 => 128,  333 => 125,  326 => 121,  319 => 117,  312 => 112,  302 => 109,  300 => 108,  296 => 107,  292 => 105,  282 => 97,  272 => 96,  259 => 91,  257 => 90,  253 => 89,  251 => 88,  249 => 87,  246 => 85,  236 => 84,  221 => 78,  217 => 76,  207 => 75,  192 => 69,  188 => 68,  176 => 59,  172 => 58,  166 => 55,  158 => 50,  154 => 48,  144 => 47,  131 => 43,  124 => 42,  122 => 41,  118 => 40,  114 => 39,  109 => 38,  107 => 36,  97 => 35,  84 => 31,  79 => 30,  77 => 29,  75 => 28,  65 => 27,  42 => 25,);
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
{% extends '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig' %}

{% block category_tags_collection_row %}
  {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' pstaggerTagsWrapper form-group d-block')|trim }) -%}
  {%- set attr = attr|merge({'data-prototype': form_row(prototype), 'data-prototype-name': prototype.vars.name }) -%}
  <div {{ block('widget_attributes') }}>
    {{ block('form_rows') }}
  </div>
{% endblock %}

{% block product_category_row %}
  {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' pstaggerTag tag-item')|trim }) -%}

  <span {{ block('widget_attributes') }}>
    {{ form_widget(form.display_name) }}
    {{ form_widget(form.name) }}
    {% set isRemovable = (form.vars.data.removable is defined and form.vars.data.removable) %}
    <a class=\"pstaggerClosingCross {% if not isRemovable %}d-none{% endif %}\" href=\"#\">x</a>
    {{ form_widget(form.id, {'attr': {'class': 'category-id-input'}}) }}
  </span>
{% endblock %}

{% block category_tree_selector_row %}
  <template id=\"categories-modal-template\">
    <div id=\"categories-modal-content\">
      {{ form_row(form.product_categories) }}

      <fieldset class=\"form-group tree-fieldset d-none\">
        <div class=\"ui-widget\">
          <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1 ui-autocomplete-input\" placeholder=\"{{ 'Search categories'|trans({}, 'Admin.Catalog.Help') }}\" autocomplete=\"off\">
          </div>

          <label class=\"form-control-label text-uppercase\">{{ 'Associated categories'|trans({}, 'Admin.Catalog.Feature') }}</label>
          {{ form_row(form.category_tree) }}
        </div>
      </fieldset>

      <div class=\"categories-tree-loader\">
        <div class=\"spinner m-auto d-block\"></div>
      </div>

      <div class=\"category-tree-footer text-center text-md-left\">
        {{ form_widget(form.cancel_btn) }}
        {{ form_widget(form.apply_btn) }}
      </div>
    </div>
  </template>
{% endblock %}

{% block category_tree_entry_row %}
  <li class=\"category-tree-element\">
    <div class=\"checkbox category-tree-inputs\">
      {{ form_widget(form) }}
    </div>
    <ul class=\"children-list\"></ul>
  </li>
{% endblock %}

{% block category_tree_collection_row %}
<div class=\"category-tree-container\">
  <div class=\"category-tree-overflow js-category-tree-overflow\">
    {%- set attr = attr|merge({'data-prototype': form_row(prototype), 'data-prototype-name': prototype.vars.name }) -%}
    {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' js-category-tree-list category-tree')|trim }) -%}
    <ul {{ block('widget_attributes') }}>
      {{- block('form_rows') -}}
    </ul>
  </div>
</div>
{% endblock %}

{% block category_filter_row %}
  <div class=\"d-inline-block dropdown dropdown-clickable product_list_category_filter\">
    <button
      class=\"btn btn-outline-secondary dropdown-toggle\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
    >
      {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
      {# Display selected category if present #}
      {%- for choice in choices -%}
        {% if form.vars.data and choice.value == form.vars.data %}
          ({{ choice.label }})
        {% endif %}
      {%- endfor -%}
    </button>
    <div class=\"dropdown-menu category-filter-menu\">
      <div class=\"categories-tree-actions\">
        <button type=\"button\" class=\"category_tree_filter_expand btn\">
          <i class=\"material-icons\">expand_more</i>
          {{ 'Expand'|trans({}, 'Admin.Actions') }}
        </button>
        <button type=\"button\" class=\"category_tree_filter_collapse btn\">
          <i class=\"material-icons\">expand_less</i>
          {{ 'Collapse'|trans({}, 'Admin.Actions') }}
        </button>
        <button type=\"button\" class=\"category_tree_filter_reset btn\">
          <i class=\"material-icons\">radio_button_unchecked</i>
          {{ 'Unselect'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
      {{ form_widget(form) }}
    </div>
  </div>
  {% if form.vars.data is not empty %}
  <button class=\"btn btn-link category_tree_filter_reset\" type=\"button\">
    <i class=\"material-icons\">clear</i> Clear filter
  </button>
  {% endif %}
{% endblock %}

{% block category_filter_widget -%}
  <div {{ block('widget_container_attributes') }}>
    <ul class=\"category-tree\">
      {%- for child in nested_tree %}
        {{ block('category_filter_item_widget') }}
      {% endfor -%}
    </ul>
  </div>
{%- endblock %}

{% block category_filter_item_widget -%}
  <li class=\"category-node{% if child.children is defined and child.children|length %} more{% endif %}\">
    <div class=\"form-check form-check-radio form-radio radio category-label\">
      {{ child.name }}
      <label class=\"form-check-label\">
        <input type=\"radio\" name=\"{{ form.vars.id }}\" value=\"{{ child.id_category }}\" {% if child.id_category == form.vars.data %}checked=\"checked\"{% endif %}>
        <i class=\"form-check-round\"></i>
      </label>
    </div>

    {% if child.children is defined %}
      <ul class=\"category-children d-none\">
        {% for item in child.children %}
          {% set child = item %}
          {{ block('category_filter_item_widget') }}
        {% endfor -%}
      </ul>
    {% endif %}
  </li>
{%- endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig");
    }
}
