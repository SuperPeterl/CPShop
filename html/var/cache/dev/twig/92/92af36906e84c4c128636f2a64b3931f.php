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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_76c19be77189393cfa675f602f2d5086 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 45
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 45, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError('Block "radio_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]);

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError('Block "checkbox_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]);

        // line 48
        $_trait_1 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 48);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 48, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        // line 49
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 49);
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 49, $this->source);
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        // line 50
        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 50);
        if (!$_trait_3->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig".'" cannot be used as a trait.', 50, $this->source);
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        // line 51
        $_trait_4 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 51);
        if (!$_trait_4->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 51, $this->source);
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        // line 52
        $_trait_5 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 52);
        if (!$_trait_5->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig".'" cannot be used as a trait.', 52, $this->source);
        }
        $_trait_5_blocks = $_trait_5->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks,
            $_trait_5_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'password_widget' => [$this, 'block_password_widget'],
                'form_row' => [$this, 'block_form_row'],
                'form_modify_all_shops' => [$this, 'block_form_modify_all_shops'],
                'form_disabling_switch' => [$this, 'block_form_disabling_switch'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'row_attributes' => [$this, 'block_row_attributes'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'form_help' => [$this, 'block_form_help'],
                'form_prepend_external_link' => [$this, 'block_form_prepend_external_link'],
                'form_append_external_link' => [$this, 'block_form_append_external_link'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
                'text_preview_widget' => [$this, 'block_text_preview_widget'],
                'link_preview_widget' => [$this, 'block_link_preview_widget'],
                'image_preview_widget' => [$this, 'block_image_preview_widget'],
                'delta_quantity_widget' => [$this, 'block_delta_quantity_widget'],
                'delta_quantity_quantity_widget' => [$this, 'block_delta_quantity_quantity_widget'],
                'delta_quantity_delta_row' => [$this, 'block_delta_quantity_delta_row'],
                'delta_quantity_delta_widget' => [$this, 'block_delta_quantity_delta_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
                'submittable_input_button_widget' => [$this, 'block_submittable_input_button_widget'],
                'submittable_delta_quantity_delta_widget' => [$this, 'block_submittable_delta_quantity_delta_widget'],
                'navigation_tab_widget' => [$this, 'block_navigation_tab_widget'],
                'accordion_widget' => [$this, 'block_accordion_widget'],
                'button_collection_widget' => [$this, 'block_button_collection_widget'],
                'avatar_url_row' => [$this, 'block_avatar_url_row'],
                'change_password_row' => [$this, 'block_change_password_row'],
                'price_reduction_widget' => [$this, 'block_price_reduction_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig"));

        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 46
        echo "
";
        // line 53
        echo "
";
        // line 55
        echo "
";
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('form_start', $context, $blocks);
        // line 68
        $this->displayBlock('form_widget', $context, $blocks);
        // line 76
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 81
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 91
        $this->displayBlock('password_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('form_row', $context, $blocks);
        // line 117
        echo "
";
        // line 122
        $this->displayBlock('form_modify_all_shops', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('form_disabling_switch', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('widget_type_class', $context, $blocks);
        // line 157
        echo "
";
        // line 160
        $this->displayBlock('form_label', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('money_widget', $context, $blocks);
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 255
        $this->displayBlock('url_widget', $context, $blocks);
        // line 261
        $this->displayBlock('date_widget', $context, $blocks);
        // line 279
        echo "
";
        // line 280
        $this->displayBlock('time_widget', $context, $blocks);
        // line 295
        $this->displayBlock('email_widget', $context, $blocks);
        // line 301
        $this->displayBlock('button_widget', $context, $blocks);
        // line 305
        echo "
";
        // line 306
        $this->displayBlock('icon_button_widget', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 358
        echo "
";
        // line 359
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 408
        echo "
";
        // line 409
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 434
        echo "
";
        // line 435
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 441
        echo "
";
        // line 442
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 478
        echo "
";
        // line 479
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 520
        echo "
";
        // line 521
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 535
        echo "
";
        // line 536
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 552
        echo "
";
        // line 553
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 578
        echo "
";
        // line 579
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 603
        $this->displayBlock('row_attributes', $context, $blocks);
        // line 611
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 640
        echo "
";
        // line 642
        echo "
";
        // line 643
        $this->displayBlock('choice_label', $context, $blocks);
        // line 648
        echo "
";
        // line 649
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 652
        echo "
";
        // line 653
        $this->displayBlock('radio_label', $context, $blocks);
        // line 656
        echo "
";
        // line 657
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 689
        echo "
";
        // line 690
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 704
        echo "
";
        // line 705
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 712
        echo "
";
        // line 714
        echo "
";
        // line 715
        $this->displayBlock('form_errors', $context, $blocks);
        // line 722
        echo "
";
        // line 723
        $this->displayBlock('form_errors_field', $context, $blocks);
        // line 789
        echo "
";
        // line 790
        $this->displayBlock('form_errors_other', $context, $blocks);
        // line 809
        echo "
";
        // line 811
        echo "
";
        // line 812
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 848
        echo "
";
        // line 849
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 901
        echo "
";
        // line 903
        $this->displayBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 926
        echo "
";
        // line 927
        $this->displayBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 963
        echo "
";
        // line 964
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 972
        echo "
";
        // line 973
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 997
        echo "
";
        // line 998
        $this->displayBlock('file_widget', $context, $blocks);
        // line 1030
        echo "
";
        // line 1031
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 1047
        echo "
";
        // line 1048
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 1067
        echo "
";
        // line 1068
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1093
        echo "
";
        // line 1094
        $this->displayBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1122
        echo "
";
        // line 1123
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1127
        echo "
";
        // line 1128
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 1143
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 1153
        $this->displayBlock('form_unit', $context, $blocks);
        // line 1160
        echo "
";
        // line 1161
        $this->displayBlock('form_unit_prepend', $context, $blocks);
        // line 1168
        echo "
";
        // line 1169
        $this->displayBlock('form_help', $context, $blocks);
        // line 1178
        echo "
";
        // line 1179
        $this->displayBlock('form_prepend_external_link', $context, $blocks);
        // line 1184
        echo "
";
        // line 1185
        $this->displayBlock('form_append_external_link', $context, $blocks);
        // line 1190
        echo "
";
        // line 1191
        $this->displayBlock('form_external_link', $context, $blocks);
        // line 1204
        $this->displayBlock('form_external_link_attributes', $context, $blocks);
        // line 1218
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 1221
        echo "
";
        // line 1222
        $this->displayBlock('text_widget', $context, $blocks);
        // line 1239
        $this->displayBlock('form_prepend_alert', $context, $blocks);
        // line 1245
        $this->displayBlock('form_append_alert', $context, $blocks);
        // line 1251
        $this->displayBlock('form_alert', $context, $blocks);
        // line 1292
        $this->displayBlock('unavailable_widget', $context, $blocks);
        // line 1299
        echo "
";
        // line 1300
        $this->displayBlock('text_preview_widget', $context, $blocks);
        // line 1329
        echo "
";
        // line 1330
        $this->displayBlock('link_preview_widget', $context, $blocks);
        // line 1337
        echo "
";
        // line 1338
        $this->displayBlock('image_preview_widget', $context, $blocks);
        // line 1343
        echo "
";
        // line 1344
        $this->displayBlock('delta_quantity_widget', $context, $blocks);
        // line 1357
        echo "
";
        // line 1358
        $this->displayBlock('delta_quantity_quantity_widget', $context, $blocks);
        // line 1370
        echo "
";
        // line 1371
        $this->displayBlock('delta_quantity_delta_row', $context, $blocks);
        // line 1387
        echo "
";
        // line 1388
        $this->displayBlock('delta_quantity_delta_widget', $context, $blocks);
        // line 1393
        echo "
";
        // line 1394
        $this->displayBlock('submittable_input_widget', $context, $blocks);
        // line 1407
        echo "
";
        // line 1408
        $this->displayBlock('submittable_input_button_widget', $context, $blocks);
        // line 1413
        echo "
";
        // line 1414
        $this->displayBlock('submittable_delta_quantity_delta_widget', $context, $blocks);
        // line 1428
        $this->displayBlock('navigation_tab_widget', $context, $blocks);
        // line 1479
        $this->displayBlock('accordion_widget', $context, $blocks);
        // line 1519
        $this->displayBlock('button_collection_widget', $context, $blocks);
        // line 1562
        echo "
";
        // line 1563
        $this->displayBlock('avatar_url_row', $context, $blocks);
        // line 1573
        echo "
";
        // line 1574
        $this->displayBlock('change_password_row', $context, $blocks);
        // line 1614
        $this->displayBlock('price_reduction_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 58
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 59
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 59, $this->source); })()), ["data-alerts-success" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "success", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "success", [], "any", false, false, false, 59), [])) : ([])))]);
        // line 60
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 60, $this->source); })()), ["data-alerts-info" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "info", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "info", [], "any", false, false, false, 60), [])) : ([])))]);
        // line 61
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 61, $this->source); })()), ["data-alerts-warning" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "warning", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "warning", [], "any", false, false, false, 61), [])) : ([])))]);
        // line 62
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 62, $this->source); })()), ["data-alerts-error" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 62), "alerts", [], "any", false, true, false, 62), "error", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 62), "alerts", [], "any", false, true, false, 62), "error", [], "any", false, false, false, 62), [])) : ([])))]);
        // line 63
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 63, $this->source); })()), ["data-form-submitted" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "submitted", [], "any", false, false, false, 63)) ? (1) : (0))]);
        // line 64
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 64, $this->source); })()), ["data-form-valid" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "vars", [], "any", false, false, false, 64), "valid", [], "any", false, false, false, 64)) ? (1) : (0))]);
        // line 65
        echo "  ";
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        // line 69
        if (array_key_exists("columns_number", $context)) {
            // line 70
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 70, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 70), "")) : ("")) . " form-columns-") . (isset($context["columns_number"]) || array_key_exists("columns_number", $context) ? $context["columns_number"] : (function () { throw new RuntimeError('Variable "columns_number" does not exist.', 70, $this->source); })())))]);
            // line 71
            echo "  ";
        }
        // line 72
        echo "  ";
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 73
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 77
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 78
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 78)->display(twig_array_merge($context, ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 78, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_ip_address_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        // line 82
        echo "  <div class=\"input-group\">";
        // line 83
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 84
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, (isset($context["currentIp"]) || array_key_exists("currentIp", $context) ? $context["currentIp"] : (function () { throw new RuntimeError('Variable "currentIp" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
  ";
        // line 88
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        // line 92
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 92, $this->source); })()), "password")) : ("password"));
        // line 93
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 94
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 100
        echo "<div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 100, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 100, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 100, $this->source); })()))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 100)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 100, $this->source); })()), "class", [], "any", false, false, false, 100), "html", null, true);
        }
        echo "\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'label');
        // line 102
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 103
        $this->displayBlock("form_prepend_external_link", $context, $blocks);
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'widget');
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'errors');
        // line 107
        $this->displayBlock("form_modify_all_shops", $context, $blocks);
        // line 109
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 110
        $this->displayBlock("form_append_external_link", $context, $blocks);
        // line 111
        echo "</div>

  ";
        // line 113
        if ((isset($context["column_breaker"]) || array_key_exists("column_breaker", $context) ? $context["column_breaker"] : (function () { throw new RuntimeError('Variable "column_breaker" does not exist.', 113, $this->source); })())) {
            // line 114
            echo "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_form_modify_all_shops($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_modify_all_shops"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_modify_all_shops"));

        // line 123
        echo "  ";
        $context["overrideCheckboxName"] = ((isset($context["modify_all_shops_prefix"]) || array_key_exists("modify_all_shops_prefix", $context) ? $context["modify_all_shops_prefix"] : (function () { throw new RuntimeError('Variable "modify_all_shops_prefix" does not exist.', 123, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "vars", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123));
        // line 124
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 124), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 124, $this->source); })()), [], "any", true, true, false, 124)) {
            // line 125
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "parent", [], "any", false, false, false, 125), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 125, $this->source); })()), [], "any", false, false, false, 125), 'errors');
            echo "
    ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "parent", [], "any", false, false, false, 126), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 126, $this->source); })()), [], "any", false, false, false, 126), 'widget');
            echo "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 130
    public function block_form_disabling_switch($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_disabling_switch"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_disabling_switch"));

        // line 131
        echo "  ";
        $context["disablingSwitchName"] = ((isset($context["disabling_switch_prefix"]) || array_key_exists("disabling_switch_prefix", $context) ? $context["disabling_switch_prefix"] : (function () { throw new RuntimeError('Variable "disabling_switch_prefix" does not exist.', 131, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "vars", [], "any", false, false, false, 131), "name", [], "any", false, false, false, 131));
        // line 132
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 132), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 132, $this->source); })()), [], "any", true, true, false, 132)) {
            // line 133
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "parent", [], "any", false, false, false, 133), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 133, $this->source); })()), [], "any", false, false, false, 133), 'errors');
            echo "
    ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "parent", [], "any", false, false, false, 134), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 134, $this->source); })()), [], "any", false, false, false, 134), 'widget');
            echo "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 138
    public function block_widget_type_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_type_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_type_class"));

        // line 139
        if (( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 139, $this->source); })()) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "vars", [], "any", false, false, false, 139), "block_prefixes", [], "any", false, false, false, 139)) > 2))) {
            // line 140
            echo " ";
            ob_start();
            // line 141
            echo "
    ";
            // line 142
            $context["index"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "block_prefixes", [], "any", false, false, false, 142)) - 2);
            // line 143
            echo "    ";
            $context["widgetType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "vars", [], "any", false, false, false, 143), "block_prefixes", [], "any", false, false, false, 143), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 143, $this->source); })()), [], "array", false, false, false, 143);
            // line 144
            echo "    ";
            if (((isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 144, $this->source); })()) == "choice")) {
                // line 145
                echo "      ";
                if ( !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 145, $this->source); })())) {
                    // line 146
                    echo "        ";
                    $context["widgetType"] = "select";
                    // line 147
                    echo "      ";
                } elseif ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 147, $this->source); })())) {
                    // line 148
                    echo "        ";
                    $context["widgetType"] = "checboxes";
                    // line 149
                    echo "      ";
                } else {
                    // line 150
                    echo "        ";
                    $context["widgetType"] = "radio";
                    // line 151
                    echo "      ";
                }
                // line 152
                echo "    ";
            }
            // line 153
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 153, $this->source); })()), "html", null, true);
            echo "-widget
";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 140
            echo twig_spaceless($___internal_parse_2_);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 160
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 161
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 161, $this->source); })()) === false)) {
            // line 162
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 162, $this->source); })())) {
                // line 163
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 163, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 163, $this->source); })())]);
            }
            // line 165
            echo "    ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 165, $this->source); })())) {
                // line 166
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 166, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 166), "")) : ("")) . " required"))]);
            }
            // line 168
            echo "    ";
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 168, $this->source); })()))) {
                // line 169
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 169, $this->source); })()))) {
                    // line 170
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 170, $this->source); })()), ["%name%" =>                     // line 171
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 171, $this->source); })()), "%id%" =>                     // line 172
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 172, $this->source); })())]);
                } else {
                    // line 175
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 175, $this->source); })()));
                }
            }
            // line 179
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (_twig_default_filter((isset($context["label_tag_name"]) || array_key_exists("label_tag_name", $context) ? $context["label_tag_name"] : (function () { throw new RuntimeError('Variable "label_tag_name" does not exist.', 179, $this->source); })()), "label")) : ("label"));
            // line 180
            echo "    <";
            echo twig_escape_filter($this->env, (isset($context["labelTag"]) || array_key_exists("labelTag", $context) ? $context["labelTag"] : (function () { throw new RuntimeError('Variable "labelTag" does not exist.', 180, $this->source); })()), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 180, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 181
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 181, $this->source); })())) {
                // line 182
                echo "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 184
            echo "    ";
            echo ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 184, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 184, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 184, $this->source); })())));
            echo "
    ";
            // line 185
            if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 185)) {
                // line 186
                echo "      ";
                $context["placement"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 186)) ? (twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 186, $this->source); })()), "tooltip_placement", [], "array", false, false, false, 186)) : ("top"));
                // line 187
                echo "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 187, $this->source); })()), "html", null, true);
                echo "\"
         title=\"";
                // line 188
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 188, $this->source); })()), "tooltip", [], "array", false, false, false, 188), "html", null, true);
                echo "\"></i>
    ";
            }
            // line 190
            echo "
    ";
            // line 191
            if ((array_key_exists("label_help_box", $context) || twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 191))) {
                // line 192
                echo "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? ((isset($context["label_help_box"]) || array_key_exists("label_help_box", $context) ? $context["label_help_box"] : (function () { throw new RuntimeError('Variable "label_help_box" does not exist.', 192, $this->source); })())) : (twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 192, $this->source); })()), "popover", [], "array", false, false, false, 192)));
                // line 193
                echo "      ";
                $context["placement"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 193)) ? (twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 193, $this->source); })()), "popover_placement", [], "array", false, false, false, 193)) : ("top"));
                // line 194
                echo "      ";
                $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 194)->display(twig_array_merge($context, ["placement" => (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 194, $this->source); })()), "content" => (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 194, $this->source); })())]));
                // line 195
                echo "    ";
            }
            // line 196
            $this->displayBlock("form_disabling_switch", $context, $blocks);
            // line 197
            echo "</";
            echo twig_escape_filter($this->env, (isset($context["labelTag"]) || array_key_exists("labelTag", $context) ? $context["labelTag"] : (function () { throw new RuntimeError('Variable "labelTag" does not exist.', 197, $this->source); })()), "html", null, true);
            echo ">";
        }
        // line 199
        if (array_key_exists("label_subtitle", $context)) {
            // line 200
            echo "    <p class=\"subtitle\">";
            echo (isset($context["label_subtitle"]) || array_key_exists("label_subtitle", $context) ? $context["label_subtitle"] : (function () { throw new RuntimeError('Variable "label_subtitle" does not exist.', 200, $this->source); })());
            echo "</p>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 206
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 207
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 207, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 207)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 207), "")) : ("")) . " form-control"))]);
        // line 208
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        // line 209
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 209)->display(twig_array_merge($context, ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 209, $this->source); })())]));
        // line 210
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 213
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 214
        echo "<div class=\"input-group money-type\">
    ";
        // line 215
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 215, $this->source); })()), 0, 2));
        // line 216
        echo "    ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 216, $this->source); })())) {
            // line 217
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 218
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 218, $this->source); })()), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 221
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 222
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 222, $this->source); })())) {
            // line 223
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 224
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 224, $this->source); })()), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 227
        echo "  </div>

  ";
        // line 229
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 232
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 233
        echo "<div class=\"input-group\">";
        // line 234
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 235
        echo "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 241
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 242
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 242, $this->source); })()) == "single_text")) {
            // line 243
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 245
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 245, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 245)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 245), "")) : ("")) . " form-inline"))]);
            // line 246
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 247
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "date", [], "any", false, false, false, 247), 'errors');
            // line 248
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "time", [], "any", false, false, false, 248), 'errors');
            // line 249
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "date", [], "any", false, false, false, 249), 'widget', ["datetime" => true]);
            // line 250
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "time", [], "any", false, false, false, 250), 'widget', ["datetime" => true]);
            // line 251
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 255
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_widget"));

        // line 256
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 256, $this->source); })()), "url")) : ("url"));
        // line 257
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 258
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 261
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 262
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 262, $this->source); })()) == "single_text")) {
            // line 263
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 265
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 265, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 265)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 265), "")) : ("")) . " form-inline"))]);
            // line 266
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 266, $this->source); })()))) {
                // line 267
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 269
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 269, $this->source); })()), ["{{ year }}" =>             // line 270
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "year", [], "any", false, false, false, 270), 'widget'), "{{ month }}" =>             // line 271
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "month", [], "any", false, false, false, 271), 'widget'), "{{ day }}" =>             // line 272
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "day", [], "any", false, false, false, 272), 'widget')]);
            // line 274
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 274, $this->source); })()))) {
                // line 275
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 280
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 281
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 281, $this->source); })()) == "single_text")) {
            // line 282
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 284
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 284, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 284)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 284), "")) : ("")) . " form-inline"))]);
            // line 285
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 285, $this->source); })())))) {
                // line 286
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 288
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "hour", [], "any", false, false, false, 288), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "minute", [], "any", false, false, false, 288), 'widget');
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 288, $this->source); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "second", [], "any", false, false, false, 288), 'widget');
            }
            // line 289
            echo "    ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 289, $this->source); })())))) {
                // line 290
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 295
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_widget"));

        // line 296
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 296, $this->source); })()), "email")) : ("email"));
        // line 297
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 298
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 301
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 302
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 302, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 302)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 302), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 303
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 306
    public function block_icon_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon_button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon_button_widget"));

        // line 307
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 307, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 307)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 307), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 308
        echo "  ";
        if (((isset($context["button_type"]) || array_key_exists("button_type", $context) ? $context["button_type"] : (function () { throw new RuntimeError('Variable "button_type" does not exist.', 308, $this->source); })()) == "link")) {
            // line 309
            echo "    ";
            $context["buttonTag"] = "a";
            // line 310
            echo "    ";
            // line 311
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 311)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 311), false)) : (false))) {
                // line 312
                echo "      ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 312, $this->source); })()), ["class" => twig_trim_filter((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 312, $this->source); })()), "class", [], "any", false, false, false, 312) . " disabled"))]);
                // line 313
                echo "    ";
            }
            // line 314
            echo "  ";
        } else {
            // line 315
            echo "    ";
            $context["buttonTag"] = "button";
            // line 316
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 316, $this->source); })()), ["type" => "button"]);
            // line 317
            echo "  ";
        }
        // line 318
        echo "
  <";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["buttonTag"]) || array_key_exists("buttonTag", $context) ? $context["buttonTag"] : (function () { throw new RuntimeError('Variable "buttonTag" does not exist.', 319, $this->source); })()), "html", null, true);
        echo " ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    <i class=\"material-icons\">";
        // line 320
        echo twig_escape_filter($this->env, (isset($context["button_icon"]) || array_key_exists("button_icon", $context) ? $context["button_icon"] : (function () { throw new RuntimeError('Variable "button_icon" does not exist.', 320, $this->source); })()), "html", null, true);
        echo "</i>
    <span class=\"btn-label\">";
        // line 321
        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 321, $this->source); })()), "html", null, true);
        echo "</span>
  </";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["buttonTag"]) || array_key_exists("buttonTag", $context) ? $context["buttonTag"] : (function () { throw new RuntimeError('Variable "buttonTag" does not exist.', 322, $this->source); })()), "html", null, true);
        echo ">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 325
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 326
        $this->displayParentBlock("choice_widget", $context, $blocks);
        // line 327
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 330
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 331
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 331, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 331)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 331), "")) : ("")) . " custom-select"))]);
        // line 332
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 335
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 336
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 336)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 336), "")) : ("")))) {
            // line 337
            echo "<div class=\"control-group\">";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 338, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 339
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 340
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 340)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 340), "")) : ("")), "translation_domain" =>                 // line 341
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 341, $this->source); })()), "valid" =>                 // line 342
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 342, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            echo "</div>";
        } else {
            // line 347
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 348
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 349
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 350
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 350)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 350), "")) : ("")), "translation_domain" =>                 // line 351
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 351, $this->source); })()), "valid" =>                 // line 352
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 352, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 355
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 359
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 360
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 363, $this->source); })()));
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
            // line 364
            echo "        ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
        // line 366
        echo "</ul>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 370
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 371
        echo "<li>
    ";
        // line 372
        $context["checked"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 372), "submitted_values", [], "any", true, true, false, 372) && twig_get_attribute($this->env, $this->source, ($context["submitted_values"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 372, $this->source); })()), "id_category", [], "any", false, false, false, 372), [], "array", true, true, false, 372))) ? ("checked=\"checked\"") : (""));
        // line 373
        echo "    ";
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 373, $this->source); })())) {
            // line 374
            echo "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "vars", [], "any", false, false, false, 376), "full_name", [], "any", false, false, false, 376), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 376, $this->source); })()), "id_category", [], "any", false, false, false, 376), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 376, $this->source); })()), "html", null, true);
            echo ">
          ";
            // line 377
            if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 377) && (twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 377, $this->source); })()), "active", [], "any", false, false, false, 377) == 0))) {
                // line 378
                echo "            <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 378, $this->source); })()), "name", [], "any", false, false, false, 378), "html", null, true);
                echo "</i>";
            } else {
                // line 380
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 380, $this->source); })()), "name", [], "any", false, false, false, 380), "html", null, true);
                echo "
          ";
            }
            // line 382
            echo "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 383
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 383, $this->source); })()), "id_category", [], "any", false, false, false, 383), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 385
            echo "        </label>
      </div>";
        } else {
            // line 388
            echo "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 390
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "vars", [], "any", false, false, false, 390), "id", [], "any", false, false, false, 390), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 390, $this->source); })()), "id_category", [], "any", false, false, false, 390), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 390, $this->source); })()), "html", null, true);
            echo " class=\"category\">
          ";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 391, $this->source); })()), "name", [], "any", false, false, false, 391), "html", null, true);
            echo "
          ";
            // line 392
            if (array_key_exists("defaultCategory", $context)) {
                // line 393
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 393, $this->source); })()), "id_category", [], "any", false, false, false, 393), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 395
            echo "        </label>
      </div>";
        }
        // line 398
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 398)) {
            // line 399
            echo "      <ul>
        ";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 400, $this->source); })()), "children", [], "any", false, false, false, 400));
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
                // line 401
                echo "          ";
                $context["child"] = $context["item"];
                // line 402
                echo "          ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
            // line 404
            echo "</ul>
    ";
        }
        // line 406
        echo "  </li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 409
    public function block_translatefields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatefields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 410
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), 'errors');
        echo "
  <div class=\"translations tabbable\" id=\"";
        // line 411
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "vars", [], "any", false, false, false, 411), "id", [], "any", false, false, false, 411), "html", null, true);
        echo "\" tabindex=\"1\">
    ";
        // line 412
        if ((((isset($context["hideTabs"]) || array_key_exists("hideTabs", $context) ? $context["hideTabs"] : (function () { throw new RuntimeError('Variable "hideTabs" does not exist.', 412, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })())) > 1))) {
            // line 413
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 414, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 415
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 416
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "label", [], "any", false, false, false, 416), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 416, $this->source); })()), "id_lang", [], "any", false, false, false, 416) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "name", [], "any", false, false, false, 416))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "id", [], "any", false, false, false, 416), "html", null, true);
                echo "\">
              ";
                // line 417
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 417), "label", [], "any", false, false, false, 417)), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 421
            echo "      </ul>
    ";
        }
        // line 423
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 426
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "label", [], "any", false, false, false, 426), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "id", [], "any", false, false, false, 426), "html", null, true);
            echo " tab-pane translation-field ";
            if ((((isset($context["hideTabs"]) || array_key_exists("hideTabs", $context) ? $context["hideTabs"] : (function () { throw new RuntimeError('Variable "hideTabs" does not exist.', 426, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })())) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 426, $this->source); })()), "id_lang", [], "any", false, false, false, 426) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "name", [], "any", false, false, false, 426))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })()), "vars", [], "any", false, false, false, 426), "valid", [], "any", false, false, false, 426)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 426), "label", [], "any", false, false, false, 426), "html", null, true);
            echo "\">
          ";
            // line 427
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
          ";
            // line 428
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 435
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 436
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 436, $this->source); })())))) {
            // line 437
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 437, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 437)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 437), "")) : ("")) . " form-control"))]);
        }
        // line 439
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 442
    public function block_translate_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_text_widget"));

        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 443, $this->source); })()), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 445, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 446
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 446), "attr", [], "any", false, true, false, 446), "class", [], "any", true, true, false, 446)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 446), "attr", [], "any", false, true, false, 446), "class", [], "any", false, false, false, 446), "")) : ("")) . " js-locale-input");
            // line 447
            echo "      ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 447, $this->source); })()) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 447), "label", [], "any", false, false, false, 447));
            // line 448
            echo "
      ";
            // line 449
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 449, $this->source); })()), "id_lang", [], "any", false, false, false, 449) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 449), "name", [], "any", false, false, false, 449))) {
                // line 450
                echo "        ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 450, $this->source); })()) . " d-none");
                // line 451
                echo "      ";
            }
            // line 453
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 453, $this->source); })()), ["class" => twig_trim_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 453, $this->source); })()))]);
            // line 454
            $this->displayBlock("form_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "
    ";
        // line 457
        if ( !(isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 457, $this->source); })())) {
            // line 458
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 464
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 464, $this->source); })()), "vars", [], "any", false, false, false, 464), "id", [], "any", false, false, false, 464), "html", null, true);
            echo "\"
        >
          ";
            // line 466
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 466, $this->source); })()), "vars", [], "any", false, false, false, 466), "default_locale", [], "any", false, false, false, 466), "iso_code", [], "any", false, false, false, 466)), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 469
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 469, $this->source); })()), "vars", [], "any", false, false, false, 469), "id", [], "any", false, false, false, 469), "html", null, true);
            echo "\">
          ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 470, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 471
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 471), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 471), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 473
            echo "        </div>
      </div>
    ";
        }
        // line 476
        echo "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 479
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_textarea_widget"));

        // line 480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 480, $this->source); })()), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 482
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 483
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 483), "attr", [], "any", false, true, false, 483), "class", [], "any", true, true, false, 483)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 483), "attr", [], "any", false, true, false, 483), "class", [], "any", false, false, false, 483), "")) : ("")) . " js-locale-input");
            // line 484
            echo "      ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 484, $this->source); })()) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 484), "label", [], "any", false, false, false, 484));
            // line 485
            echo "
      ";
            // line 486
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 486, $this->source); })()), "id_lang", [], "any", false, false, false, 486) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 486), "name", [], "any", false, false, false, 486))) {
                // line 487
                echo "        ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 487, $this->source); })()) . " d-none");
                // line 488
                echo "      ";
            }
            // line 489
            echo "
      <div class=\"";
            // line 490
            echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 490, $this->source); })()), "html", null, true);
            echo "\">
        ";
            // line 491
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 491, $this->source); })()))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        echo "
    ";
        // line 495
        if ((isset($context["show_locale_select"]) || array_key_exists("show_locale_select", $context) ? $context["show_locale_select"] : (function () { throw new RuntimeError('Variable "show_locale_select" does not exist.', 495, $this->source); })())) {
            // line 496
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 502
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 502, $this->source); })()), "vars", [], "any", false, false, false, 502), "id", [], "any", false, false, false, 502), "html", null, true);
            echo "\"
        >
          ";
            // line 504
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 504, $this->source); })()), "vars", [], "any", false, false, false, 504), "default_locale", [], "any", false, false, false, 504), "iso_code", [], "any", false, false, false, 504)), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 507
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 507, $this->source); })()), "vars", [], "any", false, false, false, 507), "id", [], "any", false, false, false, 507), "html", null, true);
            echo "\">
          ";
            // line 508
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 508, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 509
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 510
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 510), "html", null, true);
                echo "\"
            >
              ";
                // line 512
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 512), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            echo "        </div>
      </div>
    ";
        }
        // line 518
        echo "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 521
    public function block_date_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 522
        echo "  ";
        ob_start();
        // line 523
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 523, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 523)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 523), "")) : ("")) . " form-control datepicker"))]);
        // line 524
        echo "    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
        // line 525
        echo twig_escape_filter($this->env, (isset($context["date_format"]) || array_key_exists("date_format", $context) ? $context["date_format"] : (function () { throw new RuntimeError('Variable "date_format" does not exist.', 525, $this->source); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 525, $this->source); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 525, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    ";
        // line 532
        $this->displayBlock("form_help", $context, $blocks);
        echo "
  ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 522
        echo twig_spaceless($___internal_parse_3_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 536
    public function block_date_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_widget"));

        // line 537
        echo "  ";
        ob_start();
        // line 538
        echo "    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        ";
        // line 540
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 540, $this->source); })()), "from", [], "any", false, false, false, 540), 'row');
        echo "
      </div>
      <div class=\"col col-md-4\">
        ";
        // line 543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 543, $this->source); })()), "to", [], "any", false, false, false, 543), 'row');
        echo "
        ";
        // line 544
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", true, true, false, 544)) {
            // line 545
            echo "          ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 545, $this->source); })()), "unlimited", [], "any", false, false, false, 545), 'widget');
            echo "
          ";
            // line 546
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 546, $this->source); })()), "unlimited", [], "any", false, false, false, 546), 'errors');
            echo "
        ";
        }
        // line 548
        echo "      </div>
    </div>
  ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 537
        echo twig_spaceless($___internal_parse_4_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 553
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        // line 554
        echo "  ";
        ob_start();
        // line 555
        echo "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button d-block\"
            title=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            name=\"";
        // line 558
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 558, $this->source); })()), "html", null, true);
        echo "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
    ";
        // line 563
        if ((isset($context["show_reset_button"]) || array_key_exists("show_reset_button", $context) ? $context["show_reset_button"] : (function () { throw new RuntimeError('Variable "show_reset_button" does not exist.', 563, $this->source); })())) {
            // line 564
            echo "      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"";
            // line 566
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 566, $this->source); })()), "html", null, true);
            echo "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"";
            // line 568
            echo twig_escape_filter($this->env, (isset($context["reset_url"]) || array_key_exists("reset_url", $context) ? $context["reset_url"] : (function () { throw new RuntimeError('Variable "reset_url" does not exist.', 568, $this->source); })()), "html", null, true);
            echo "\"
                data-redirect=\"";
            // line 569
            echo twig_escape_filter($this->env, (isset($context["redirect_url"]) || array_key_exists("redirect_url", $context) ? $context["redirect_url"] : (function () { throw new RuntimeError('Variable "redirect_url" does not exist.', 569, $this->source); })()), "html", null, true);
            echo "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
            // line 572
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      </div>
    ";
        }
        // line 576
        echo "  ";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 554
        echo twig_spaceless($___internal_parse_5_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 579
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 580
        echo "  ";
        ob_start();
        // line 581
        echo "  ";
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (_twig_default_filter((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 581, $this->source); })()), [])) : ([]));
        // line 582
        echo "  <div class=\"input-group ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", true, true, false, 582)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", false, false, false, 582), "")) : ("")), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 582, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            echo " ";
            if (($context["key"] != "class")) {
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["rowAttr"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rowAttr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"ps-switch\" id=\"";
        // line 583
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 583, $this->source); })()), "vars", [], "any", false, false, false, 583), "id", [], "any", false, false, false, 583), "html", null, true);
        echo "\">
        ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 584, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 585
            echo "          ";
            $context["inputId"] = (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 585, $this->source); })()) . "_") . twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 585));
            // line 586
            echo "          <input id=\"";
            echo twig_escape_filter($this->env, (isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 586, $this->source); })()), "html", null, true);
            echo "\"
            ";
            // line 587
            $this->displayBlock("attributes", $context, $blocks);
            echo "
            name=\"";
            // line 588
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 588, $this->source); })()), "html", null, true);
            echo "\"
            value=\"";
            // line 589
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 589), "html", null, true);
            echo "\"
            ";
            // line 590
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 590, $this->source); })()))) {
                echo "checked=\"\"";
            }
            // line 591
            echo "            ";
            if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 591, $this->source); })())) {
                echo "disabled=\"\"";
            }
            // line 592
            echo "            type=\"radio\"
          >
          ";
            // line 594
            if ((isset($context["show_choices"]) || array_key_exists("show_choices", $context) ? $context["show_choices"] : (function () { throw new RuntimeError('Variable "show_choices" does not exist.', 594, $this->source); })())) {
                echo "<label for=\"";
                echo twig_escape_filter($this->env, (isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 594, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 594), [], (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 594, $this->source); })())), "html", null, true);
                echo "</label>";
            }
            // line 595
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 596
        echo "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 580
        echo twig_spaceless($___internal_parse_6_);
        // line 600
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 603
    public function block_row_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row_attributes"));

        // line 604
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (_twig_default_filter((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 604, $this->source); })()), [])) : ([]));
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 605, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 606
            echo " ";
            // line 607
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 611
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 612
        echo "  <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 612, $this->source); })())) > 0)) ? ("hide") : (""));
        echo "\">
    <small>";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 616
        echo (((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 616, $this->source); })())) == 0)) ? ("hide") : (""));
        echo "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-6\">";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-2\">";
        // line 623
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
          </thead>
          <tbody>";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 627, $this->source); })()));
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
            // line 628
            echo "            <tr>
              <td class=\"col-md-3\">";
            // line 629
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 630
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 630, $this->source); })()), "vars", [], "any", false, false, false, 630), "attr", [], "any", false, false, false, 630), "data", [], "any", false, false, false, 630), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 630), [], "array", false, false, false, 630), "file_name", [], "array", false, false, false, 630), "html", null, true);
            echo "</span></td>
              <td class=\"col-md-2\">";
            // line 631
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 631, $this->source); })()), "vars", [], "any", false, false, false, 631), "attr", [], "any", false, false, false, 631), "data", [], "any", false, false, false, 631), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 631), [], "array", false, false, false, 631), "mime", [], "array", false, false, false, 631), "html", null, true);
            echo "</td>
            </tr>
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
        // line 634
        echo "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 643
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        // line 645
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 645, $this->source); })()), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 645)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 645), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 646
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 649
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 650
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 653
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        // line 654
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 657
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 658
        echo "  ";
        // line 659
        echo "  ";
        if (array_key_exists("widget", $context)) {
            // line 660
            echo "    ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 660, $this->source); })())) {
                // line 661
                echo "      ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 661, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 661)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 661), "")) : ("")) . " required"))]);
                // line 662
                echo "    ";
            }
            // line 663
            echo "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 664
                echo "      ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 664, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 664)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 664), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 664, $this->source); })())))]);
                // line 665
                echo "    ";
            }
            // line 666
            echo "    ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 666, $this->source); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 666, $this->source); })())))) {
                // line 667
                echo "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 667, $this->source); })()));
                // line 668
                echo "    ";
            }
            // line 669
            echo "
    ";
            // line 670
            if ((twig_get_attribute($this->env, $this->source, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 670, $this->source); })()), 2, [], "array", false, false, false, 670) == "radio")) {
                // line 671
                echo "      <label class=\"form-check-label\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 671, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 672
                echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 672, $this->source); })());
                // line 674
                echo "<i class=\"form-check-round\"></i>";
                // line 676
                echo (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 676, $this->source); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 676, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 676, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 676, $this->source); })())))) : (""));
                // line 677
                echo "</label>
    ";
            } else {
                // line 679
                echo "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 680
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 680, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 681
                echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 681, $this->source); })());
                // line 682
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 683
                echo (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 683, $this->source); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 683, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 683, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 683, $this->source); })())))) : (""));
                // line 684
                echo "</label>
      </div>
    ";
            }
            // line 687
            echo "  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 690
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 691
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 691, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 691)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 691), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 691)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 691), "")) : (""))));
        // line 692
        if (twig_in_filter("radio-custom", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 692, $this->source); })()))) {
            // line 693
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 693, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 693)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 693), "")) : ("")) . " custom-control-input"))]);
            // line 694
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 694, $this->source); })()))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 695
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 695, $this->source); })()), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 696
            echo "</div>";
        } else {
            // line 698
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 698, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 698)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 698), "")) : ("")) . " form-check-input"))]);
            // line 699
            echo "<div class=\"form-check form-check-radio form-radio";
            echo ((twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 699, $this->source); })()))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 700
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 700, $this->source); })()), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 701
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 705
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 706
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 706, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 706), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 706), "")) : (""))));
        // line 707
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 707, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 707)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 707), "")) : ("")) . " form-check-input"))]);
        // line 708
        echo "<div class=\"form-check form-check-radio form-checkbox";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", true, true, false, 708)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 708, $this->source); })()), "container_class", [], "any", false, false, false, 708), "html", null, true);
        }
        echo "\">";
        // line 709
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 709, $this->source); })()), 'label', ["widget" =>         $this->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 710
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 715
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 716
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "fieldError", [], "array", true, true, false, 716) && (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 716, $this->source); })()), "fieldError", [], "array", false, false, false, 716) == true))) {
            // line 717
            echo "    ";
            $this->displayBlock("form_errors_field", $context, $blocks);
            echo "
  ";
        } else {
            // line 719
            echo "    ";
            $this->displayBlock("form_errors_other", $context, $blocks);
            echo "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 723
    public function block_form_errors_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_field"));

        // line 724
        echo "  ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 724, $this->source); })())) > 0)) {
            // line 726
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 726, $this->source); })())) > 1)) {
                // line 728
                $context["popoverContainer"] = ("popover-error-container-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 728, $this->source); })()), "vars", [], "any", false, false, false, 728), "id", [], "any", false, false, false, 728));
                // line 729
                echo "      <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 729, $this->source); })()), "html", null, true);
                echo "\"></div>

      ";
                // line 731
                ob_start();
                // line 732
                echo "        <div class=\"popover-error-list\">
          <ul>";
                // line 734
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 734, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 735
                    echo "<li class=\"text-danger\"> ";
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 736
$context["error"], "messagePluralization", [], "any", false, false, false, 736))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 737
$context["error"], "messageTemplate", [], "any", false, false, false, 737), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 737), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 738
$context["error"], "messageTemplate", [], "any", false, false, false, 738), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 738), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 738), "form_error"))), "html", null, true);
                    // line 739
                    echo "
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 742
                echo "          </ul>
        </div>
      ";
                $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 745
                echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 746
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 746, $this->source); })()), "vars", [], "any", false, false, false, 746), "id", [], "any", false, false, false, 746), "html", null, true);
                echo "\">
        ";
                // line 747
                echo twig_escape_filter($this->env, (isset($context["popoverErrorContent"]) || array_key_exists("popoverErrorContent", $context) ? $context["popoverErrorContent"] : (function () { throw new RuntimeError('Variable "popoverErrorContent" does not exist.', 747, $this->source); })()), "html", null, true);
                echo "
      </template>

      ";
                // line 750
                ob_start();
                // line 751
                echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                // line 753
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 753, $this->source); })()), "vars", [], "any", false, false, false, 753), "id", [], "any", false, false, false, 753), "html", null, true);
                echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                // line 757
                echo twig_escape_filter($this->env, (isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 757, $this->source); })()), "html", null, true);
                echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                // line 759
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("%count% errors", twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 759, $this->source); })())), [], "Admin.Global"), "html", null, true);
                echo "</u>
        </span>
      ";
                $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 762
                echo "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 765
                echo twig_escape_filter($this->env, (isset($context["errorPopover"]) || array_key_exists("errorPopover", $context) ? $context["errorPopover"] : (function () { throw new RuntimeError('Variable "errorPopover" does not exist.', 765, $this->source); })()), "html", null, true);
                echo "
        </div>
      </div>

      ";
            } else {
                // line 771
                echo "<div class=\"d-inline-block text-danger align-top\">
        <i class=\"material-icons form-error-icon\">error_outline</i>
      </div>
      <div class=\"d-inline-block\">
        ";
                // line 775
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 775, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 776
                    echo "          <div class=\"text-danger\">
            <p> ";
                    // line 777
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 778
$context["error"], "messagePluralization", [], "any", false, false, false, 778))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 779
$context["error"], "messageTemplate", [], "any", false, false, false, 779), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 779), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 780
$context["error"], "messageTemplate", [], "any", false, false, false, 780), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 780), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 780), "form_error"))), "html", null, true);
                    // line 781
                    echo "
            </p>
          </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 785
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 790
    public function block_form_errors_other($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_other"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_other"));

        // line 791
        echo "  ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 791, $this->source); })())) > 0)) {
            // line 792
            echo "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 797
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 797, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 798
                echo "            <p> ";
                echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                 // line 799
$context["error"], "messagePluralization", [], "any", false, false, false, 799))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                 // line 800
$context["error"], "messageTemplate", [], "any", false, false, false, 800), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 800), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                 // line 801
$context["error"], "messageTemplate", [], "any", false, false, false, 801), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 801), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 801), "form_error"))), "html", null, true);
                // line 802
                echo "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 805
            echo "</div>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 812
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        // line 813
        echo "  ";
        ob_start();
        // line 814
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  ";
        // line 824
        if ((isset($context["isCheckSelectAll"]) || array_key_exists("isCheckSelectAll", $context) ? $context["isCheckSelectAll"] : (function () { throw new RuntimeError('Variable "isCheckSelectAll" does not exist.', 824, $this->source); })())) {
            // line 825
            echo "                    checked
                  ";
        }
        // line 827
        echo "                >
                <i class=\"md-checkbox-control\"></i>
                ";
        // line 829
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 836
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 836, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 837
            echo "          <tr>
            <td>
              ";
            // line 839
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 843
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 813
        echo twig_spaceless($___internal_parse_7_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 849
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        // line 850
        echo "  ";
        ob_start();
        // line 851
        echo "    <div class=\"choice-table";
        if ((isset($context["headers_fixed"]) || array_key_exists("headers_fixed", $context) ? $context["headers_fixed"] : (function () { throw new RuntimeError('Variable "headers_fixed" does not exist.', 851, $this->source); })())) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
        // line 855
        echo twig_escape_filter($this->env, (isset($context["table_label"]) || array_key_exists("table_label", $context) ? $context["table_label"] : (function () { throw new RuntimeError('Variable "table_label" does not exist.', 855, $this->source); })()), "html", null, true);
        echo "</th>
          ";
        // line 856
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 856, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 857
            echo "            <th class=\"text-center\">
              ";
            // line 858
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 858), "multiple", [], "any", false, false, false, 858) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 858), "name", [], "any", false, false, false, 858), (isset($context["headers_to_disable"]) || array_key_exists("headers_to_disable", $context) ? $context["headers_to_disable"] : (function () { throw new RuntimeError('Variable "headers_to_disable" does not exist.', 858, $this->source); })())))) {
                // line 859
                echo "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                // line 861
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 861) + 1), "html", null, true);
                echo "\"
                   data-column-checked=\"false\"
                >
                  ";
                // line 864
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 864), "label", [], "any", false, false, false, 864), "html", null, true);
                echo "
                </a>
              ";
            } else {
                // line 867
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 867), "label", [], "any", false, false, false, 867), "html", null, true);
                echo "
              ";
            }
            // line 869
            echo "            </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 871
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 874
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 874, $this->source); })()));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 875
            echo "          <tr>
            <td>
              ";
            // line 877
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 879
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 879, $this->source); })()));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 880
                echo "              <td class=\"text-center\">
                ";
                // line 881
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 881), $context["child_choice_name"], [], "array", true, true, false, 881)) {
                    // line 882
                    echo "                  ";
                    $context["entry_index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["child_choice_entry_index_mapping"]) || array_key_exists("child_choice_entry_index_mapping", $context) ? $context["child_choice_entry_index_mapping"] : (function () { throw new RuntimeError('Variable "child_choice_entry_index_mapping" does not exist.', 882, $this->source); })()), $context["choice_value"], [], "array", false, false, false, 882), $context["child_choice_name"], [], "array", false, false, false, 882);
                    // line 883
                    echo "
                  ";
                    // line 884
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 884), "multiple", [], "any", false, false, false, 884)) {
                        // line 885
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child_choice"], (isset($context["entry_index"]) || array_key_exists("entry_index", $context) ? $context["entry_index"] : (function () { throw new RuntimeError('Variable "entry_index" does not exist.', 885, $this->source); })()), [], "array", false, false, false, 885), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 887
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child_choice"], (isset($context["entry_index"]) || array_key_exists("entry_index", $context) ? $context["entry_index"] : (function () { throw new RuntimeError('Variable "entry_index" does not exist.', 887, $this->source); })()), [], "array", false, false, false, 887), 'widget');
                        echo "
                  ";
                    }
                    // line 889
                    echo "                ";
                } else {
                    // line 890
                    echo "                  --
                ";
                }
                // line 892
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 894
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 896
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 850
        echo twig_spaceless($___internal_parse_8_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 903
    public function block_translatable_fields_with_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_tabs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_tabs"));

        // line 904
        echo "  <div class=\"translations tabbable\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 904, $this->source); })()), "vars", [], "any", false, false, false, 904), "id", [], "any", false, false, false, 904), "html", null, true);
        echo "\" tabindex=\"1\">
    ";
        // line 905
        if ((((isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 905, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 905, $this->source); })())) > 1))) {
            // line 906
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 907
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 907, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 908
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 909
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 909), "label", [], "any", false, false, false, 909), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 909, $this->source); })()), "id_lang", [], "any", false, false, false, 909) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 909), "name", [], "any", false, false, false, 909))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 909), "id", [], "any", false, false, false, 909), "html", null, true);
                echo "\">
              ";
                // line 910
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 910), "label", [], "any", false, false, false, 910)), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 914
            echo "      </ul>
    ";
        }
        // line 916
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 918
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 918, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 919
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "label", [], "any", false, false, false, 919), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "id", [], "any", false, false, false, 919), "html", null, true);
            echo " tab-pane translation-field ";
            if ((((isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 919, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 919, $this->source); })())) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 919, $this->source); })()), "id_lang", [], "any", false, false, false, 919) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "name", [], "any", false, false, false, 919))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 919, $this->source); })()), "vars", [], "any", false, false, false, 919), "valid", [], "any", false, false, false, 919)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 919), "label", [], "any", false, false, false, 919), "html", null, true);
            echo "\">
          ";
            // line 920
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 923
        echo "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 927
    public function block_translatable_fields_with_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_dropdown"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_dropdown"));

        // line 928
        $context["formClass"] = twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 928), "attr", [], "any", false, true, false, 928), "class", [], "any", true, true, false, 928)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 928), "attr", [], "any", false, true, false, 928), "class", [], "any", false, false, false, 928), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 929
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["formClass"]) || array_key_exists("formClass", $context) ? $context["formClass"] : (function () { throw new RuntimeError('Variable "formClass" does not exist.', 929, $this->source); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 929, $this->source); })()), "vars", [], "any", false, false, false, 929), "id", [], "any", false, false, false, 929), "html", null, true);
        echo "\" tabindex=\"1\">
      ";
        // line 930
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 930, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 931
            echo "        ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 931), "attr", [], "any", false, true, false, 931), "class", [], "any", true, true, false, 931)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 931), "attr", [], "any", false, true, false, 931), "class", [], "any", false, false, false, 931), "")) : ("")) . " js-locale-input");
            // line 932
            echo "        ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 932, $this->source); })()) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 932), "label", [], "any", false, false, false, 932));
            // line 933
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 933, $this->source); })()), "id_lang", [], "any", false, false, false, 933) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 933), "name", [], "any", false, false, false, 933))) {
                // line 934
                echo "          ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 934, $this->source); })()) . " d-none");
                // line 935
                echo "        ";
            }
            // line 936
            echo "        <div data-lang-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 936), "name", [], "any", false, false, false, 936), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 936, $this->source); })()), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
          ";
            // line 937
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 940
        echo "      ";
        if ( !(isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 940, $this->source); })())) {
            // line 941
            echo "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 945
            if (array_key_exists("change_form_language_url", $context)) {
                // line 946
                echo "              data-change-language-url=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 946, $this->source); })()), "vars", [], "any", false, false, false, 946), "change_form_language_url", [], "any", false, false, false, 946), "html", null, true);
                echo "\"
            ";
            }
            // line 948
            echo "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 950
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 950, $this->source); })()), "vars", [], "any", false, false, false, 950), "id", [], "any", false, false, false, 950), "html", null, true);
            echo "_dropdown\"
          >
            ";
            // line 952
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 952, $this->source); })()), "vars", [], "any", false, false, false, 952), "default_locale", [], "any", false, false, false, 952), "iso_code", [], "any", false, false, false, 952)), "html", null, true);
            echo "
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 954
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 954, $this->source); })()), "vars", [], "any", false, false, false, 954), "id", [], "any", false, false, false, 954), "html", null, true);
            echo "_dropdown\">
            ";
            // line 955
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 955, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 956
                echo "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 956), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 956), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 958
            echo "          </div>
        </div>
      ";
        }
        // line 961
        echo "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 964
    public function block_translatable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_widget"));

        // line 965
        if ((isset($context["use_tabs"]) || array_key_exists("use_tabs", $context) ? $context["use_tabs"] : (function () { throw new RuntimeError('Variable "use_tabs" does not exist.', 965, $this->source); })())) {
            // line 966
            echo "    ";
            $this->displayBlock("translatable_fields_with_tabs", $context, $blocks);
            echo "
  ";
        } else {
            // line 968
            echo "    ";
            $this->displayBlock("translatable_fields_with_dropdown", $context, $blocks);
            echo "
  ";
        }
        // line 970
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 973
    public function block_birthday_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday_widget"));

        // line 974
        echo "  ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 974, $this->source); })()) == "single_text")) {
            // line 975
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 977
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 977, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 977)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 977), "")) : ("")) . " form-inline"))]);
            // line 978
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 978, $this->source); })()))) {
                // line 979
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 981
            echo "
    ";
            // line 982
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 982, $this->source); })()), "year", [], "any", false, false, false, 982), 'widget')) . "</div>");
            // line 983
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 983, $this->source); })()), "month", [], "any", false, false, false, 983), 'widget')) . "</div>");
            // line 984
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 984, $this->source); })()), "day", [], "any", false, false, false, 984), 'widget')) . "</div>");
            // line 986
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 986, $this->source); })()), ["{{ year }}" =>             // line 987
(isset($context["yearWidget"]) || array_key_exists("yearWidget", $context) ? $context["yearWidget"] : (function () { throw new RuntimeError('Variable "yearWidget" does not exist.', 987, $this->source); })()), "{{ month }}" =>             // line 988
(isset($context["monthWidget"]) || array_key_exists("monthWidget", $context) ? $context["monthWidget"] : (function () { throw new RuntimeError('Variable "monthWidget" does not exist.', 988, $this->source); })()), "{{ day }}" =>             // line 989
(isset($context["dayWidget"]) || array_key_exists("dayWidget", $context) ? $context["dayWidget"] : (function () { throw new RuntimeError('Variable "dayWidget" does not exist.', 989, $this->source); })())]);
            // line 992
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 992, $this->source); })()))) {
                // line 993
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 998
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 999
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 1001
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 1005
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1005, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 1006
($context["attr"] ?? null), "class", [], "any", true, true, false, 1006)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1006), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 1011
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 1011) && twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1011, $this->source); })()), "disabled", [], "any", false, false, false, 1011))) {
            // line 1012
            echo "      ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1012, $this->source); })()), ["class" => (twig_get_attribute($this->env, $this->source,             // line 1013
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1013, $this->source); })()), "class", [], "any", false, false, false, 1013) . " disabled")]);
            // line 1015
            echo "    ";
        }
        // line 1016
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1018
        echo "<label class=\"custom-file-label\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1018, $this->source); })()), "vars", [], "any", false, false, false, 1018), "id", [], "any", false, false, false, 1018), "html", null, true);
        echo "\">
      ";
        // line 1019
        $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1019, $this->source); })()), "vars", [], "any", false, false, false, 1019), "attr", [], "any", false, false, false, 1019);
        // line 1020
        echo "      ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 1020)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1020, $this->source); })()), "placeholder", [], "any", false, false, false, 1020)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>";
        // line 1023
        $this->displayBlock("form_help", $context, $blocks);
        // line 1024
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1024, $this->source); })()), "vars", [], "any", false, false, false, 1024), "download_url", [], "any", false, false, false, 1024)) {
            // line 1025
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1025, $this->source); })()), "vars", [], "any", false, false, false, 1025), "download_url", [], "any", false, false, false, 1025), "html", null, true);
            echo "\">
      ";
            // line 1026
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1031
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_restriction_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_restriction_checkbox_widget"));

        // line 1032
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1032, $this->source); })()), "vars", [], "any", false, false, false, 1032), "attr", [], "any", false, false, false, 1032), "is_allowed_to_display", [], "any", false, false, false, 1032)) {
            // line 1033
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 1035
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1035, $this->source); })()), "checkbox")) : ("checkbox"));
            // line 1036
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 1038
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1038, $this->source); })()), "html", null, true);
            echo "\"
          ";
            // line 1039
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 1040
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1040, $this->source); })()), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1048
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generatable_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generatable_text_widget"));

        // line 1049
        echo "  <div class=\"input-group\">
    ";
        // line 1050
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 1050, $this->source); })())) {
            // line 1051
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 1053
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1055
        echo "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 1058
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1058, $this->source); })()), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 1059
        echo twig_escape_filter($this->env, (isset($context["generated_value_length"]) || array_key_exists("generated_value_length", $context) ? $context["generated_value_length"] : (function () { throw new RuntimeError('Variable "generated_value_length" does not exist.', 1059, $this->source); })()), "html", null, true);
        echo "\"
      >
        ";
        // line 1061
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
  ";
        // line 1065
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1068
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_recommended_length_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_recommended_length_widget"));

        // line 1069
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1069, $this->source); })()), ["data-recommended-length-counter" => (("#" .         // line 1070
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1070, $this->source); })())) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1074
        if (((isset($context["input_type"]) || array_key_exists("input_type", $context) ? $context["input_type"] : (function () { throw new RuntimeError('Variable "input_type" does not exist.', 1074, $this->source); })()) == "textarea")) {
            // line 1075
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1077
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1079
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1081
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1081, $this->source); })()), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1084
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 1085
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1085, $this->source); })()))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1087
(isset($context["recommended_length"]) || array_key_exists("recommended_length", $context) ? $context["recommended_length"] : (function () { throw new RuntimeError('Variable "recommended_length" does not exist.', 1087, $this->source); })())), "[/2]" => "</span>"]);
        // line 1089
        echo "
    </em>
  </small>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1094
    public function block_text_with_length_counter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_length_counter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_length_counter_widget"));

        // line 1095
        echo "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1096
        $context["current_length"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1096, $this->source); })()), "vars", [], "any", false, false, false, 1096), "max_length", [], "any", false, false, false, 1096) - twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1096, $this->source); })())));
        // line 1097
        echo "
    ";
        // line 1098
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1098, $this->source); })()), "vars", [], "any", false, false, false, 1098), "position", [], "any", false, false, false, 1098) == "before")) {
            // line 1099
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1100
            echo twig_escape_filter($this->env, (isset($context["current_length"]) || array_key_exists("current_length", $context) ? $context["current_length"] : (function () { throw new RuntimeError('Variable "current_length" does not exist.', 1100, $this->source); })()), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1103
        echo "
    ";
        // line 1104
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1104, $this->source); })()), ["data-max-length" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1104, $this->source); })()), "vars", [], "any", false, false, false, 1104), "max_length", [], "any", false, false, false, 1104), "maxlength" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1104, $this->source); })()), "vars", [], "any", false, false, false, 1104), "max_length", [], "any", false, false, false, 1104), "class" => "js-countable-input"]);
        // line 1105
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1105, $this->source); })()), (isset($context["input_attr"]) || array_key_exists("input_attr", $context) ? $context["input_attr"] : (function () { throw new RuntimeError('Variable "input_attr" does not exist.', 1105, $this->source); })()));
        // line 1107
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1107, $this->source); })()), "vars", [], "any", false, false, false, 1107), "input", [], "any", false, false, false, 1107) == "input")) {
            // line 1108
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1109
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1109, $this->source); })()), "vars", [], "any", false, false, false, 1109), "input", [], "any", false, false, false, 1109) == "textarea")) {
            // line 1110
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1112
            $this->displayBlock("form_widget", $context, $blocks);
        }
        // line 1114
        echo "
    ";
        // line 1115
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1115, $this->source); })()), "vars", [], "any", false, false, false, 1115), "position", [], "any", false, false, false, 1115) == "after")) {
            // line 1116
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1117
            echo twig_escape_filter($this->env, (isset($context["current_length"]) || array_key_exists("current_length", $context) ? $context["current_length"] : (function () { throw new RuntimeError('Variable "current_length" does not exist.', 1117, $this->source); })()), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1120
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1123
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_min_max_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_min_max_filter_widget"));

        // line 1124
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1124, $this->source); })()), "min_field", [], "array", false, false, false, 1124), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1125, $this->source); })()), "max_field", [], "array", false, false, false, 1125), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1128
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_min_max_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_min_max_filter_widget"));

        // line 1129
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1129, $this->source); })()), "min_field", [], "array", false, false, false, 1129), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1130, $this->source); })()), "max_field", [], "array", false, false, false, 1130), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1133
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_widget"));

        // line 1134
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1134, $this->source); })()), "text")) : ("text"));
        // line 1135
        echo "<div class=\"input-group\">";
        // line 1136
        $this->displayBlock("form_unit_prepend", $context, $blocks);
        // line 1137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1138
        $this->displayBlock("form_unit", $context, $blocks);
        // line 1139
        echo "</div>
  ";
        // line 1140
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1143
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 1144
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1144, $this->source); })()), "number")) : ("number"));
        // line 1145
        echo "<div class=\"input-group\">";
        // line 1146
        $this->displayBlock("form_unit_prepend", $context, $blocks);
        // line 1147
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1148
        $this->displayBlock("form_unit", $context, $blocks);
        // line 1149
        echo "</div>
  ";
        // line 1150
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1153
    public function block_form_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit"));

        // line 1154
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1154), "unit", [], "any", true, true, false, 1154) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1154, $this->source); })()), "vars", [], "any", false, false, false, 1154), "prepend_unit", [], "any", false, false, false, 1154))) {
            // line 1155
            echo "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 1156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1156, $this->source); })()), "vars", [], "any", false, false, false, 1156), "unit", [], "any", false, false, false, 1156), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1161
    public function block_form_unit_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit_prepend"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit_prepend"));

        // line 1162
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1162), "unit", [], "any", true, true, false, 1162) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1162, $this->source); })()), "vars", [], "any", false, false, false, 1162), "prepend_unit", [], "any", false, false, false, 1162))) {
            // line 1163
            echo "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 1164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1164, $this->source); })()), "vars", [], "any", false, false, false, 1164), "unit", [], "any", false, false, false, 1164), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1169
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 1170
        echo "  ";
        if ( !(null === (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 1170, $this->source); })()))) {
            // line 1171
            $context["help_attr"] = twig_array_merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 1171, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 1171)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 1171), "")) : ("")) . " form-text"))]);
            // line 1172
            echo "<small id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1172, $this->source); })()), "html", null, true);
            echo "_help\"";
            $__internal_compile_0 = $context;
            $__internal_compile_1 = ["attr" => (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 1172, $this->source); })())];
            if (!twig_test_iterable($__internal_compile_1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1172, $this->getSourceContext());
            }
            $__internal_compile_1 = twig_to_array($__internal_compile_1);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_0;
            echo ">";
            echo (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 1172, $this->source); })());
            echo "</small>
  ";
        }
        // line 1174
        echo "  ";
        if (array_key_exists("warning", $context)) {
            // line 1175
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new RuntimeError('Variable "warning" does not exist.', 1175, $this->source); })()), "html", null, true);
            echo "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1179
    public function block_form_prepend_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_external_link"));

        // line 1180
        echo "  ";
        if ((array_key_exists("external_link", $context) && (twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1180, $this->source); })()), "position", [], "any", false, false, false, 1180) == "prepend"))) {
            // line 1181
            $this->displayBlock("form_external_link", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1185
    public function block_form_append_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_external_link"));

        // line 1186
        echo "  ";
        if ((array_key_exists("external_link", $context) && (twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1186, $this->source); })()), "position", [], "any", false, false, false, 1186) == "append"))) {
            // line 1187
            $this->displayBlock("form_external_link", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1191
    public function block_form_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link"));

        // line 1192
        echo "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1193
            ob_start();
            // line 1194
            echo "<a ";
            $this->displayBlock("form_external_link_attributes", $context, $blocks);
            echo ">
        <i class=\"material-icons\">open_in_new</i>";
            $context["openingTag"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1198
            echo "<div class=\"small font-secondary";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1198, $this->source); })()), "align", [], "any", false, false, false, 1198) === "right")) {
                echo " text-right";
            }
            echo "\">
      ";
            // line 1199
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1199, $this->source); })()), "text", [], "any", false, false, false, 1199), ["[1]" => (isset($context["openingTag"]) || array_key_exists("openingTag", $context) ? $context["openingTag"] : (function () { throw new RuntimeError('Variable "openingTag" does not exist.', 1199, $this->source); })()), "[/1]" => "</a>"]);
            echo "
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1204
    public function block_form_external_link_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link_attributes"));

        // line 1205
        $context["external_link_attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1205, $this->source); })()), "attr", [], "any", false, false, false, 1205), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1205), "class", [], "any", true, true, false, 1205)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1205), "class", [], "any", false, false, false, 1205), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1206
        echo "
  ";
        // line 1207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["external_link_attr"]) || array_key_exists("external_link_attr", $context) ? $context["external_link_attr"] : (function () { throw new RuntimeError('Variable "external_link_attr" does not exist.', 1207, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1208
            echo "    ";
            if (!twig_in_filter($context["attrname"], [0 => "href", 1 => "class"])) {
                // line 1209
                echo "      ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"
    ";
            }
            // line 1211
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1212
        echo "
  target=\"_blank\"
  href=\"";
        // line 1214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1214, $this->source); })()), "href", [], "any", false, false, false, 1214), "html", null, true);
        echo "\"
  class=\"";
        // line 1215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["external_link_attr"]) || array_key_exists("external_link_attr", $context) ? $context["external_link_attr"] : (function () { throw new RuntimeError('Variable "external_link_attr" does not exist.', 1215, $this->source); })()), "class", [], "any", false, false, false, 1215), "html", null, true);
        echo "\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1218
    public function block_custom_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_content_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_content_widget"));

        // line 1219
        echo "  ";
        $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1219, $this->source); })()), "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 1219)->display(twig_array_merge($context, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1219, $this->source); })())));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1222
    public function block_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        // line 1223
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1223, $this->source); })()), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1223, $this->source); })()), "vars", [], "any", false, false, false, 1223), "id", [], "any", false, false, false, 1223)], "Admin.Global")]);
        // line 1224
        if ( !(null === (isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1224, $this->source); })()))) {
            // line 1225
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1225, $this->source); })()), ["list" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1225, $this->source); })()) . "_datalist")]);
        }
        // line 1227
        echo "
  ";
        // line 1228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1228, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1228, $this->source); })())]);
        echo "

  ";
        // line 1230
        if ( !(null === (isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1230, $this->source); })()))) {
            // line 1231
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1231, $this->source); })()) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 1232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1232, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1233
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1235
            echo "    </datalist>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1239
    public function block_form_prepend_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_alert"));

        // line 1240
        if ((array_key_exists("alert_position", $context) && ((isset($context["alert_position"]) || array_key_exists("alert_position", $context) ? $context["alert_position"] : (function () { throw new RuntimeError('Variable "alert_position" does not exist.', 1240, $this->source); })()) == "prepend"))) {
            // line 1241
            $this->displayBlock("form_alert", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1245
    public function block_form_append_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_alert"));

        // line 1246
        if ((array_key_exists("alert_position", $context) && ((isset($context["alert_position"]) || array_key_exists("alert_position", $context) ? $context["alert_position"] : (function () { throw new RuntimeError('Variable "alert_position" does not exist.', 1246, $this->source); })()) == "append"))) {
            // line 1247
            $this->displayBlock("form_alert", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1251
    public function block_form_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_alert"));

        // line 1252
        if (array_key_exists("alert_message", $context)) {
            // line 1253
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["alert_type"]) || array_key_exists("alert_type", $context) ? $context["alert_type"] : (function () { throw new RuntimeError('Variable "alert_type" does not exist.', 1253, $this->source); })()), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                echo " expandable-alert";
            }
            echo "\" role=\"alert\">
    ";
            // line 1254
            if (array_key_exists("alert_title", $context)) {
                // line 1255
                echo "      <p class=\"alert-text\">
        ";
                // line 1256
                echo (isset($context["alert_title"]) || array_key_exists("alert_title", $context) ? $context["alert_title"] : (function () { throw new RuntimeError('Variable "alert_title" does not exist.', 1256, $this->source); })());
                echo "
      </p>
    ";
            } else {
                // line 1259
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1259, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1260
                    echo "        <p class=\"alert-text\">
          ";
                    // line 1261
                    echo $context["message"];
                    echo "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1264
                echo "    ";
            }
            // line 1265
            echo "
    ";
            // line 1266
            if (array_key_exists("alert_title", $context)) {
                // line 1267
                echo "      <div class=\"alert-more collapse\" id=\"expandable_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1267, $this->source); })()), "vars", [], "any", false, false, false, 1267), "id", [], "any", false, false, false, 1267), "html", null, true);
                echo "\" style=\"\">
        ";
                // line 1268
                if ((twig_length_filter($this->env, (isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1268, $this->source); })())) > 1)) {
                    // line 1269
                    echo "          <ul class=\"p-0\">
            ";
                    // line 1270
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1270, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1271
                        echo "              <li>";
                        echo $context["message"];
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1273
                    echo "          </ul>
        ";
                } else {
                    // line 1275
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1275, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1276
                        echo "            <p>
              ";
                        // line 1277
                        echo $context["message"];
                        echo "
            </p>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1280
                    echo "        ";
                }
                // line 1281
                echo "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1283
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1283, $this->source); })()), "vars", [], "any", false, false, false, 1283), "id", [], "any", false, false, false, 1283), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1284
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                echo "
          </button>
       </div>
    ";
            }
            // line 1288
            echo "  </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1292
    public function block_unavailable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "unavailable_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "unavailable_widget"));

        // line 1293
        echo "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </p>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1300
    public function block_text_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_preview_widget"));

        // line 1301
        echo "  ";
        // line 1302
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1303
        echo "<span class=\"label text-preview ";
        echo twig_escape_filter($this->env, (isset($context["preview_class"]) || array_key_exists("preview_class", $context) ? $context["preview_class"] : (function () { throw new RuntimeError('Variable "preview_class" does not exist.', 1303, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 1305
        echo "    ";
        if (array_key_exists("prefix", $context)) {
            // line 1306
            echo "    <span class=\"text-preview-prefix\">
      ";
            // line 1307
            echo (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 1307, $this->source); })());
            echo "
    </span>
    ";
        }
        // line 1310
        echo "
    <span class=\"text-preview-value\">
      ";
        // line 1312
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1312, $this->source); })()), "vars", [], "any", false, false, false, 1312), "allow_html", [], "any", false, false, false, 1312)) {
            // line 1313
            echo "        ";
            // line 1314
            echo "        ";
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1314, $this->source); })());
            echo "
      ";
        } else {
            // line 1316
            echo "        ";
            // line 1317
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1317, $this->source); })()), "html");
            echo "
      ";
        }
        // line 1319
        echo "    </span>

    ";
        // line 1322
        echo "    ";
        if (array_key_exists("suffix", $context)) {
            // line 1323
            echo "    <span class=\"text-preview-suffix\">
      ";
            // line 1324
            echo (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 1324, $this->source); })());
            echo "
    </span>
    ";
        }
        // line 1327
        echo "  </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1330
    public function block_link_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_preview_widget"));

        // line 1331
        echo "  ";
        // line 1332
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1333
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1333, $this->source); })()), "vars", [], "any", false, false, false, 1333), "value", [], "any", false, false, false, 1333), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1333)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1333), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 1334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1334, $this->source); })()), "vars", [], "any", false, false, false, 1334), "button_label", [], "any", false, false, false, 1334), "html", null, true);
        echo "
  </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1338
    public function block_image_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_preview_widget"));

        // line 1339
        echo "  ";
        // line 1340
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1341
        echo "<img src=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1341, $this->source); })()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_trim_filter(("Image preview for " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1341, $this->source); })()), "vars", [], "any", false, false, false, 1341), "name", [], "any", false, false, false, 1341))), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1341, $this->source); })()), "vars", [], "any", false, false, false, 1341), "image_class", [], "any", false, false, false, 1341), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1344
    public function block_delta_quantity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_widget"));

        // line 1345
        echo "  ";
        $context["quantity"] = ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", true, true, false, 1345)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", false, false, false, 1345), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1345, $this->source); })()), "quantity", [], "any", false, false, false, 1345), "vars", [], "any", false, false, false, 1345), "value", [], "any", false, false, false, 1345))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1345, $this->source); })()), "quantity", [], "any", false, false, false, 1345), "vars", [], "any", false, false, false, 1345), "value", [], "any", false, false, false, 1345)));
        // line 1346
        echo "  ";
        // line 1347
        echo "  ";
        if ((null === (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1347, $this->source); })()))) {
            // line 1348
            echo "    ";
            $context["initialQuantity"] = (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 1348, $this->source); })());
            // line 1349
            echo "  ";
        }
        // line 1350
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1350, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1350)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1350), "")) : ("")) . " delta-quantity")), "data-initial-quantity" => (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1350, $this->source); })())]);
        // line 1351
        echo "  <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 1352
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1352, $this->source); })()), "initial_quantity", [], "any", false, false, false, 1352), 'widget', ["value" => (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1352, $this->source); })())]);
        echo "
    ";
        // line 1353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1353, $this->source); })()), "quantity", [], "any", false, false, false, 1353), 'widget', ["initialQuantity" => (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1353, $this->source); })()), "deltaQuantity" => (isset($context["deltaQuantity"]) || array_key_exists("deltaQuantity", $context) ? $context["deltaQuantity"] : (function () { throw new RuntimeError('Variable "deltaQuantity" does not exist.', 1353, $this->source); })()), "value" => (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 1353, $this->source); })())]);
        echo "
    ";
        // line 1354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1354, $this->source); })()), "delta", [], "any", false, false, false, 1354), 'row');
        echo "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1358
    public function block_delta_quantity_quantity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_quantity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_quantity_widget"));

        // line 1359
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1359, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1359)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1359), "")) : ("")) . " delta-quantity-quantity"))]);
        // line 1360
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 1361
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1362
        echo "<span class=\"initial-quantity\">";
        echo twig_escape_filter($this->env, (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1362, $this->source); })()), "html", null, true);
        echo "</span>
    <span class=\"quantity-update";
        // line 1363
        if (((isset($context["deltaQuantity"]) || array_key_exists("deltaQuantity", $context) ? $context["deltaQuantity"] : (function () { throw new RuntimeError('Variable "deltaQuantity" does not exist.', 1363, $this->source); })()) != 0)) {
            echo " quantity-modified";
        }
        echo "\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">";
        // line 1365
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1365, $this->source); })()), "html", null, true);
        echo "</span>
    </span>
    ";
        // line 1367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1367, $this->source); })()), 'errors');
        echo "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1371
    public function block_delta_quantity_delta_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_row"));

        // line 1372
        echo "  <div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 1372, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 1372, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 1372, $this->source); })()))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 1372)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 1372, $this->source); })()), "class", [], "any", false, false, false, 1372), "html", null, true);
        }
        echo "\">
    <div class=\"delta-quantity-delta-container\">";
        // line 1374
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1374, $this->source); })()), 'label');
        // line 1375
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 1376
        $this->displayBlock("form_prepend_external_link", $context, $blocks);
        // line 1378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1378, $this->source); })()), 'widget');
        // line 1380
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 1381
        $this->displayBlock("form_append_external_link", $context, $blocks);
        // line 1382
        echo "</div>";
        // line 1383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1383, $this->source); })()), 'errors');
        // line 1384
        $this->displayBlock("form_modify_all_shops", $context, $blocks);
        // line 1385
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1388
    public function block_delta_quantity_delta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_widget"));

        // line 1389
        $context["type"] = "number";
        // line 1390
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1390, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1390)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1390), "")) : ("")) . " delta-quantity-delta"))]);
        // line 1391
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1394
    public function block_submittable_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_widget"));

        // line 1395
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1395, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1395)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1395), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 1396
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 1397
        $context["typeAttr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1397, $this->source); })()), "vars", [], "any", false, false, false, 1397), "type_attr", [], "any", false, false, false, 1397), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1398
($context["form"] ?? null), "vars", [], "any", false, true, false, 1398), "type_attr", [], "any", false, true, false, 1398), "class", [], "any", true, true, false, 1398)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1398), "type_attr", [], "any", false, true, false, 1398), "class", [], "any", false, false, false, 1398), "")) : ("")) . " submittable-input")), "data-initial-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1399
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1399, $this->source); })()), "value", [], "any", false, false, false, 1399), "vars", [], "any", false, false, false, 1399), "value", [], "any", false, false, false, 1399), "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1400
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1400, $this->source); })()), "value", [], "any", false, false, false, 1400), "vars", [], "any", false, false, false, 1400), "value", [], "any", false, false, false, 1400)]);
        // line 1403
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1403, $this->source); })()), "value", [], "any", false, false, false, 1403), 'widget', ["attr" => (isset($context["typeAttr"]) || array_key_exists("typeAttr", $context) ? $context["typeAttr"] : (function () { throw new RuntimeError('Variable "typeAttr" does not exist.', 1403, $this->source); })())]);
        // line 1404
        $this->displayBlock("submittable_input_button_widget", $context, $blocks);
        // line 1405
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1408
    public function block_submittable_input_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_button_widget"));

        // line 1409
        echo "  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1414
    public function block_submittable_delta_quantity_delta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_delta_quantity_delta_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_delta_quantity_delta_widget"));

        // line 1415
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1415, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1415)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1415), "")) : ("")) . " delta-quantity-delta ps-submittable-input-wrapper"))]);
        // line 1416
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 1417
        $context["attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1417, $this->source); })()), "vars", [], "any", false, false, false, 1417), "attr", [], "any", false, false, false, 1417), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1418
($context["form"] ?? null), "vars", [], "any", false, true, false, 1418), "attr", [], "any", false, true, false, 1418), "class", [], "any", true, true, false, 1418)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1418), "attr", [], "any", false, true, false, 1418), "class", [], "any", false, false, false, 1418), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 1419
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1419, $this->source); })()), "value" =>         // line 1420
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1420, $this->source); })())]);
        // line 1423
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1423, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1423, $this->source); })())]);
        // line 1424
        $this->displayBlock("submittable_input_button_widget", $context, $blocks);
        // line 1425
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1428
    public function block_navigation_tab_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation_tab_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation_tab_widget"));

        // line 1429
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1429, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1429)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1429), "")) : ("")) . " navigation-tab-widget"))]);
        // line 1430
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
  <div id=\"";
        // line 1431
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1431, $this->source); })()), "vars", [], "any", false, false, false, 1431), "id", [], "any", false, false, false, 1431), "html", null, true);
        echo "-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    ";
        // line 1437
        $context["firstRenderedChild"] = true;
        // line 1438
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1438, $this->source); })()), "children", [], "any", false, false, false, 1438));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1439
            echo "      ";
            if ((( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1439) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1439), "name", [], "any", false, false, false, 1439) != "_toolbar_buttons")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1439), "name", [], "any", false, false, false, 1439) != "_token"))) {
                // line 1440
                echo "      <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1440), "id", [], "any", false, false, false, 1440), "html", null, true);
                echo "-tab-nav\" class=\"nav-item";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1440), "valid", [], "any", false, false, false, 1440)) {
                    echo " has-error";
                }
                echo "\">
        <a href=\"#";
                // line 1441
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1441), "id", [], "any", false, false, false, 1441), "html", null, true);
                echo "-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link";
                if ((isset($context["firstRenderedChild"]) || array_key_exists("firstRenderedChild", $context) ? $context["firstRenderedChild"] : (function () { throw new RuntimeError('Variable "firstRenderedChild" does not exist.', 1441, $this->source); })())) {
                    echo " active";
                }
                echo "\">
          ";
                // line 1442
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1442), "label", [], "any", false, false, false, 1442), "html", null, true);
                echo "
        </a>
      </li>
      ";
                // line 1445
                $context["firstRenderedChild"] = false;
                // line 1446
                echo "      ";
            }
            // line 1447
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1448
        echo "    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    ";
        // line 1454
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1454, $this->source); })()), "offsetExists", [0 => "_toolbar_buttons"], "method", false, false, false, 1454)) {
            // line 1455
            echo "    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      ";
            // line 1456
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1456, $this->source); })()), "_toolbar_buttons", [], "any", false, false, false, 1456), 'widget');
            echo "
    </div>
    ";
        }
        // line 1459
        echo "  </div>

  <div id=\"";
        // line 1461
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1461, $this->source); })()), "vars", [], "any", false, false, false, 1461), "id", [], "any", false, false, false, 1461), "html", null, true);
        echo "-tabs-content\" class=\"tab-content\">
    ";
        // line 1462
        $context["firstRenderedChild"] = true;
        // line 1463
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1463, $this->source); })()), "children", [], "any", false, false, false, 1463));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1464
            echo "      ";
            if (( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1464) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1464), "name", [], "any", false, false, false, 1464) != "_token"))) {
                // line 1465
                echo "      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid";
                if ((isset($context["firstRenderedChild"]) || array_key_exists("firstRenderedChild", $context) ? $context["firstRenderedChild"] : (function () { throw new RuntimeError('Variable "firstRenderedChild" does not exist.', 1465, $this->source); })())) {
                    echo " active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1465), "id", [], "any", false, false, false, 1465), "html", null, true);
                echo "-tab\">
        ";
                // line 1466
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1466), "label_tab", [], "any", true, true, false, 1466)) {
                    // line 1467
                    echo "          ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1467), "label_tab", [], "any", false, false, false, 1467)) ? [] : ["label" => $_label_]));
                    echo "
        ";
                }
                // line 1469
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
                // line 1470
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
      </div>
      ";
                // line 1472
                $context["firstRenderedChild"] = false;
                // line 1473
                echo "      ";
            }
            // line 1474
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1475
        echo "  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1479
    public function block_accordion_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_widget"));

        // line 1480
        echo "<div class=\"accordion accordion-form\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1480, $this->source); })()), "vars", [], "any", false, false, false, 1480), "id", [], "any", false, false, false, 1480), "html", null, true);
        echo "\">
    ";
        // line 1481
        $context["firstChild"] = true;
        // line 1482
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1482, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1483
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1483), "compound", [], "any", false, false, false, 1483)) {
                // line 1484
                echo "      ";
                $context["hasError"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1484), "valid", [], "any", false, false, false, 1484) != true);
                // line 1485
                echo "      ";
                $context["isExpanded"] = (((isset($context["firstChild"]) || array_key_exists("firstChild", $context) ? $context["firstChild"] : (function () { throw new RuntimeError('Variable "firstChild" does not exist.', 1485, $this->source); })()) && (isset($context["expand_first"]) || array_key_exists("expand_first", $context) ? $context["expand_first"] : (function () { throw new RuntimeError('Variable "expand_first" does not exist.', 1485, $this->source); })())) || ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 1485, $this->source); })()) && (isset($context["expand_on_error"]) || array_key_exists("expand_on_error", $context) ? $context["expand_on_error"] : (function () { throw new RuntimeError('Variable "expand_on_error" does not exist.', 1485, $this->source); })())));
                // line 1486
                echo "      <div class=\"card\">
        <div class=\"card-header\" id=\"";
                // line 1487
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1487), "id", [], "any", false, false, false, 1487), "html", null, true);
                echo "_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button ";
                // line 1490
                if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 1490, $this->source); })())) {
                    echo " has-error ";
                }
                echo " btn btn-block text-left";
                if ( !(isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1490, $this->source); })())) {
                    echo " collapsed";
                }
                echo "\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#";
                // line 1493
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1493), "id", [], "any", false, false, false, 1493), "html", null, true);
                echo "_accordion\"
              aria-expanded=\"";
                // line 1494
                if ((isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1494, $this->source); })())) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\"
              aria-controls=\"";
                // line 1495
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1495), "id", [], "any", false, false, false, 1495), "html", null, true);
                echo "_accordion\">
              ";
                // line 1496
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1496), "label", [], "any", false, false, false, 1496), "html", null, true);
                echo "
              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"";
                // line 1502
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1502), "id", [], "any", false, false, false, 1502), "html", null, true);
                echo "_accordion\" class=\"collapse";
                if ((isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1502, $this->source); })())) {
                    echo " show";
                }
                echo "\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1502), "id", [], "any", false, false, false, 1502), "html", null, true);
                echo "_accordion_header\" ";
                if ((isset($context["display_one"]) || array_key_exists("display_one", $context) ? $context["display_one"] : (function () { throw new RuntimeError('Variable "display_one" does not exist.', 1502, $this->source); })())) {
                    echo "data-parent=\"#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1502, $this->source); })()), "vars", [], "any", false, false, false, 1502), "id", [], "any", false, false, false, 1502), "html", null, true);
                    echo "\"";
                }
                echo ">
          <div class=\"card-body\">
            ";
                // line 1504
                $context["childAttr"] = ["class" => "accordion-sub-form"];
                // line 1505
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["childAttr"]) || array_key_exists("childAttr", $context) ? $context["childAttr"] : (function () { throw new RuntimeError('Variable "childAttr" does not exist.', 1505, $this->source); })())]);
                echo "
            ";
                // line 1506
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
          </div>
        </div>
      </div>
      ";
                // line 1510
                $context["firstChild"] = false;
                // line 1511
                echo "      ";
            }
            // line 1512
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1513
        echo "
    ";
        // line 1515
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1515, $this->source); })()), 'rest');
        echo "
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1519
    public function block_button_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_collection_widget"));

        // line 1520
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1520, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 1521
($context["attr"] ?? null), "class", [], "any", true, true, false, 1521)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1521), "")) : ("")) . " form-group btn-collection btn-toolbar")), "role" => "group", "style" => ("justify-content: " .         // line 1523
(isset($context["justify_content"]) || array_key_exists("justify_content", $context) ? $context["justify_content"] : (function () { throw new RuntimeError('Variable "justify_content" does not exist.', 1523, $this->source); })()))]);
        // line 1525
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1526
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["button_groups"]) || array_key_exists("button_groups", $context) ? $context["button_groups"] : (function () { throw new RuntimeError('Variable "button_groups" does not exist.', 1526, $this->source); })()));
        foreach ($context['_seq'] as $context["group"] => $context["buttons"]) {
            // line 1527
            echo "      <div class=\"";
            if ((isset($context["use_button_groups"]) || array_key_exists("use_button_groups", $context) ? $context["use_button_groups"] : (function () { throw new RuntimeError('Variable "use_button_groups" does not exist.', 1527, $this->source); })())) {
                echo "btn-group ";
            }
            echo "group-";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "\">
        ";
            // line 1529
            echo "        ";
            $context["inlineButtonsLimit"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1529, $this->source); })()), "vars", [], "any", false, false, false, 1529), "inline_buttons_limit", [], "any", false, false, false, 1529);
            // line 1530
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1530, $this->source); })()), "children", [], "any", false, false, false, 1530));
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
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 1531
                echo "          ";
                if ((((isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1531, $this->source); })()) === null) || (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1531) <= (isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1531, $this->source); })())))) {
                    // line 1532
                    echo "            ";
                    // line 1533
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1533, $this->source); })()), "vars", [], "any", false, false, false, 1533), "use_inline_labels", [], "any", false, false, false, 1533)) {
                        // line 1534
                        echo "              ";
                        $context["actionLabel"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "vars", [], "any", false, false, false, 1534), "label", [], "any", false, false, false, 1534);
                        // line 1535
                        echo "            ";
                    } else {
                        // line 1536
                        echo "              ";
                        $context["actionLabel"] = "";
                        // line 1537
                        echo "            ";
                    }
                    // line 1538
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["action"], 'widget', ["label" => (isset($context["actionLabel"]) || array_key_exists("actionLabel", $context) ? $context["actionLabel"] : (function () { throw new RuntimeError('Variable "actionLabel" does not exist.', 1538, $this->source); })())]);
                    echo "
          ";
                }
                // line 1540
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1541
            echo "
        ";
            // line 1543
            echo "        ";
            if (( !((isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1543, $this->source); })()) === null) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1543, $this->source); })()), "children", [], "any", false, false, false, 1543)) > (isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1543, $this->source); })())))) {
                // line 1544
                echo "          <a id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1544, $this->source); })()), "vars", [], "any", false, false, false, 1544), "id", [], "any", false, false, false, 1544), "html", null, true);
                echo "_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            ";
                // line 1551
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1551, $this->source); })()), "children", [], "any", false, false, false, 1551), (isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1551, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 1552
                    echo "              ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["action"], 'widget', ["attr" => ["class" => ("dropdown-item " . twig_trim_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 1553
$context["action"], "vars", [], "any", false, true, false, 1553), "attr", [], "any", false, true, false, 1553), "class", [], "any", true, true, false, 1553)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "vars", [], "any", false, true, false, 1553), "attr", [], "any", false, true, false, 1553), "class", [], "any", false, false, false, 1553), "")) : (""))))]]);
                    // line 1554
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1556
                echo "          </div>
        ";
            }
            // line 1558
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['buttons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1560
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1563
    public function block_avatar_url_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "avatar_url_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "avatar_url_row"));

        // line 1564
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1564, $this->source); })()), 'row', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1564, $this->source); })())]);
        echo "

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 1569
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1569, $this->source); })()), "parent", [], "any", false, false, false, 1569), "vars", [], "any", false, false, false, 1569), "value", [], "any", false, false, false, 1569), "avatar_url", [], "any", false, false, false, 1569), "html", null, true);
        echo "\" alt=\"\">
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1574
    public function block_change_password_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "change_password_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "change_password_row"));

        // line 1575
        echo "  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      ";
        // line 1577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
        echo "
    </label>
    <div class=\"col-sm\">
      ";
        // line 1581
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1581, $this->source); })()), "children", [], "any", false, false, false, 1581), "change_password_button", [], "any", false, false, false, 1581), 'row');
        echo "

      <div class=\"card card-body js-change-password-block d-none\">
        ";
        // line 1585
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1585, $this->source); })()), "children", [], "any", false, false, false, 1585), "old_password", [], "any", false, false, false, 1585), 'row');
        echo "

        ";
        // line 1588
        echo "        ";
        // line 1589
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1589, $this->source); })()), "children", [], "any", false, false, false, 1589), "new_password", [], "any", false, false, false, 1589), 'row');
        echo "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
        // line 1594
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1594, $this->source); })()), "children", [], "any", false, false, false, 1594), "generated_password", [], "any", false, false, false, 1594), 'widget');
        echo "
          </div>
          <div class=\"col-sm\">
            ";
        // line 1597
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1597, $this->source); })()), "children", [], "any", false, false, false, 1597), "generate_password_button", [], "any", false, false, false, 1597), 'widget');
        echo "
          </div>
        </div>
        ";
        // line 1600
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1600, $this->source); })()), "children", [], "any", false, false, false, 1600), "cancel_button", [], "any", false, false, false, 1600), 'row');
        echo "

        ";
        // line 1603
        echo "        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">";
        // line 1604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-medium\">";
        // line 1605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Okay", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-high\">";
        // line 1606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Good", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-extreme\">";
        // line 1607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fabulous", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1614
    public function block_price_reduction_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_reduction_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_reduction_widget"));

        // line 1615
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1615, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1615)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1615), "")) : ("")) . " reduction-widget row"))]);
        // line 1616
        echo "  <div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1617
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1617, $this->source); })()), "children", [], "any", false, false, false, 1617));
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
            // line 1618
            echo "      ";
            $__internal_compile_2 = $context;
            $__internal_compile_3 = ["row_attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1618), "row_attr", [], "any", false, false, false, 1618), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1618), "row_attr", [], "any", false, true, false, 1618), "class", [], "any", true, true, false, 1618)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1618), "row_attr", [], "any", false, true, false, 1618), "class", [], "any", false, false, false, 1618), "")) : ("")) . " col col-md-3"))])];
            if (!twig_test_iterable($__internal_compile_3)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1618, $this->getSourceContext());
            }
            $__internal_compile_3 = twig_to_array($__internal_compile_3);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
            // line 1619
            echo "      <div ";
            $this->displayBlock("row_attributes", $context, $blocks);
            echo ">
      ";
            $context = $__internal_compile_2;
            // line 1621
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
            // line 1622
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            echo "
      </div>
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
        // line 1625
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  5615 => 1625,  5598 => 1622,  5593 => 1621,  5587 => 1619,  5578 => 1618,  5561 => 1617,  5556 => 1616,  5554 => 1615,  5544 => 1614,  5528 => 1607,  5524 => 1606,  5520 => 1605,  5516 => 1604,  5513 => 1603,  5508 => 1600,  5502 => 1597,  5496 => 1594,  5487 => 1589,  5485 => 1588,  5479 => 1585,  5472 => 1581,  5466 => 1577,  5462 => 1575,  5452 => 1574,  5438 => 1569,  5429 => 1564,  5419 => 1563,  5408 => 1560,  5401 => 1558,  5397 => 1556,  5390 => 1554,  5388 => 1553,  5386 => 1552,  5382 => 1551,  5371 => 1544,  5368 => 1543,  5365 => 1541,  5351 => 1540,  5345 => 1538,  5342 => 1537,  5339 => 1536,  5336 => 1535,  5333 => 1534,  5330 => 1533,  5328 => 1532,  5325 => 1531,  5307 => 1530,  5304 => 1529,  5295 => 1527,  5291 => 1526,  5286 => 1525,  5284 => 1523,  5283 => 1521,  5282 => 1520,  5272 => 1519,  5259 => 1515,  5256 => 1513,  5250 => 1512,  5247 => 1511,  5245 => 1510,  5238 => 1506,  5233 => 1505,  5231 => 1504,  5214 => 1502,  5205 => 1496,  5201 => 1495,  5193 => 1494,  5189 => 1493,  5177 => 1490,  5171 => 1487,  5168 => 1486,  5165 => 1485,  5162 => 1484,  5159 => 1483,  5154 => 1482,  5152 => 1481,  5147 => 1480,  5137 => 1479,  5125 => 1475,  5119 => 1474,  5116 => 1473,  5114 => 1472,  5109 => 1470,  5104 => 1469,  5098 => 1467,  5096 => 1466,  5087 => 1465,  5084 => 1464,  5079 => 1463,  5077 => 1462,  5073 => 1461,  5069 => 1459,  5063 => 1456,  5060 => 1455,  5058 => 1454,  5050 => 1448,  5044 => 1447,  5041 => 1446,  5039 => 1445,  5033 => 1442,  5025 => 1441,  5016 => 1440,  5013 => 1439,  5008 => 1438,  5006 => 1437,  4997 => 1431,  4992 => 1430,  4990 => 1429,  4980 => 1428,  4969 => 1425,  4967 => 1424,  4965 => 1423,  4963 => 1420,  4962 => 1419,  4961 => 1418,  4960 => 1417,  4956 => 1416,  4954 => 1415,  4944 => 1414,  4931 => 1409,  4921 => 1408,  4910 => 1405,  4908 => 1404,  4906 => 1403,  4904 => 1400,  4903 => 1399,  4902 => 1398,  4901 => 1397,  4897 => 1396,  4895 => 1395,  4885 => 1394,  4875 => 1391,  4873 => 1390,  4871 => 1389,  4861 => 1388,  4850 => 1385,  4848 => 1384,  4846 => 1383,  4844 => 1382,  4842 => 1381,  4840 => 1380,  4838 => 1378,  4836 => 1376,  4834 => 1375,  4832 => 1374,  4820 => 1372,  4810 => 1371,  4797 => 1367,  4792 => 1365,  4785 => 1363,  4780 => 1362,  4778 => 1361,  4774 => 1360,  4772 => 1359,  4762 => 1358,  4749 => 1354,  4745 => 1353,  4741 => 1352,  4736 => 1351,  4733 => 1350,  4730 => 1349,  4727 => 1348,  4724 => 1347,  4722 => 1346,  4719 => 1345,  4709 => 1344,  4692 => 1341,  4690 => 1340,  4688 => 1339,  4678 => 1338,  4665 => 1334,  4658 => 1333,  4656 => 1332,  4654 => 1331,  4644 => 1330,  4633 => 1327,  4627 => 1324,  4624 => 1323,  4621 => 1322,  4617 => 1319,  4611 => 1317,  4609 => 1316,  4603 => 1314,  4601 => 1313,  4599 => 1312,  4595 => 1310,  4589 => 1307,  4586 => 1306,  4583 => 1305,  4578 => 1303,  4576 => 1302,  4574 => 1301,  4564 => 1300,  4550 => 1295,  4546 => 1293,  4536 => 1292,  4524 => 1288,  4517 => 1284,  4513 => 1283,  4509 => 1281,  4506 => 1280,  4497 => 1277,  4494 => 1276,  4489 => 1275,  4485 => 1273,  4476 => 1271,  4472 => 1270,  4469 => 1269,  4467 => 1268,  4462 => 1267,  4460 => 1266,  4457 => 1265,  4454 => 1264,  4445 => 1261,  4442 => 1260,  4437 => 1259,  4431 => 1256,  4428 => 1255,  4426 => 1254,  4418 => 1253,  4416 => 1252,  4406 => 1251,  4395 => 1247,  4393 => 1246,  4383 => 1245,  4372 => 1241,  4370 => 1240,  4360 => 1239,  4348 => 1235,  4339 => 1233,  4335 => 1232,  4330 => 1231,  4328 => 1230,  4323 => 1228,  4320 => 1227,  4317 => 1225,  4315 => 1224,  4313 => 1223,  4303 => 1222,  4292 => 1219,  4282 => 1218,  4271 => 1215,  4267 => 1214,  4263 => 1212,  4257 => 1211,  4249 => 1209,  4246 => 1208,  4242 => 1207,  4239 => 1206,  4237 => 1205,  4227 => 1204,  4213 => 1199,  4206 => 1198,  4200 => 1194,  4198 => 1193,  4195 => 1192,  4185 => 1191,  4174 => 1187,  4171 => 1186,  4161 => 1185,  4150 => 1181,  4147 => 1180,  4137 => 1179,  4123 => 1175,  4120 => 1174,  4102 => 1172,  4100 => 1171,  4097 => 1170,  4087 => 1169,  4073 => 1164,  4070 => 1163,  4067 => 1162,  4057 => 1161,  4043 => 1156,  4040 => 1155,  4037 => 1154,  4027 => 1153,  4017 => 1150,  4014 => 1149,  4012 => 1148,  4010 => 1147,  4008 => 1146,  4006 => 1145,  4004 => 1144,  3994 => 1143,  3984 => 1140,  3981 => 1139,  3979 => 1138,  3977 => 1137,  3975 => 1136,  3973 => 1135,  3971 => 1134,  3961 => 1133,  3949 => 1130,  3944 => 1129,  3934 => 1128,  3922 => 1125,  3917 => 1124,  3907 => 1123,  3896 => 1120,  3890 => 1117,  3887 => 1116,  3885 => 1115,  3882 => 1114,  3879 => 1112,  3876 => 1110,  3874 => 1109,  3872 => 1108,  3870 => 1107,  3868 => 1105,  3866 => 1104,  3863 => 1103,  3857 => 1100,  3854 => 1099,  3852 => 1098,  3849 => 1097,  3847 => 1096,  3844 => 1095,  3834 => 1094,  3821 => 1089,  3819 => 1087,  3818 => 1085,  3817 => 1084,  3811 => 1081,  3807 => 1079,  3804 => 1077,  3801 => 1075,  3799 => 1074,  3797 => 1070,  3795 => 1069,  3785 => 1068,  3773 => 1065,  3766 => 1061,  3761 => 1059,  3757 => 1058,  3752 => 1055,  3749 => 1053,  3746 => 1051,  3744 => 1050,  3741 => 1049,  3731 => 1048,  3714 => 1040,  3710 => 1039,  3706 => 1038,  3702 => 1036,  3700 => 1035,  3696 => 1033,  3693 => 1032,  3683 => 1031,  3669 => 1026,  3664 => 1025,  3662 => 1024,  3660 => 1023,  3654 => 1020,  3652 => 1019,  3647 => 1018,  3645 => 1016,  3642 => 1015,  3640 => 1013,  3638 => 1012,  3636 => 1011,  3634 => 1006,  3633 => 1005,  3626 => 1001,  3622 => 999,  3612 => 998,  3600 => 993,  3598 => 992,  3596 => 989,  3595 => 988,  3594 => 987,  3593 => 986,  3590 => 984,  3587 => 983,  3585 => 982,  3582 => 981,  3577 => 979,  3575 => 978,  3573 => 977,  3570 => 975,  3567 => 974,  3557 => 973,  3546 => 970,  3540 => 968,  3534 => 966,  3532 => 965,  3522 => 964,  3512 => 961,  3507 => 958,  3496 => 956,  3492 => 955,  3488 => 954,  3483 => 952,  3478 => 950,  3474 => 948,  3468 => 946,  3466 => 945,  3460 => 941,  3457 => 940,  3448 => 937,  3441 => 936,  3438 => 935,  3435 => 934,  3432 => 933,  3429 => 932,  3426 => 931,  3422 => 930,  3415 => 929,  3413 => 928,  3403 => 927,  3391 => 923,  3382 => 920,  3361 => 919,  3357 => 918,  3353 => 916,  3349 => 914,  3339 => 910,  3329 => 909,  3326 => 908,  3322 => 907,  3319 => 906,  3317 => 905,  3312 => 904,  3302 => 903,  3292 => 850,  3286 => 896,  3279 => 894,  3272 => 892,  3268 => 890,  3265 => 889,  3259 => 887,  3253 => 885,  3251 => 884,  3248 => 883,  3245 => 882,  3243 => 881,  3240 => 880,  3236 => 879,  3231 => 877,  3227 => 875,  3223 => 874,  3218 => 871,  3203 => 869,  3197 => 867,  3191 => 864,  3185 => 861,  3181 => 859,  3179 => 858,  3176 => 857,  3159 => 856,  3155 => 855,  3145 => 851,  3142 => 850,  3132 => 849,  3122 => 813,  3116 => 843,  3106 => 839,  3102 => 837,  3098 => 836,  3088 => 829,  3084 => 827,  3080 => 825,  3078 => 824,  3066 => 814,  3063 => 813,  3053 => 812,  3040 => 805,  3033 => 802,  3031 => 801,  3030 => 800,  3029 => 799,  3027 => 798,  3023 => 797,  3016 => 792,  3013 => 791,  3003 => 790,  2991 => 785,  2983 => 781,  2981 => 780,  2980 => 779,  2979 => 778,  2978 => 777,  2975 => 776,  2971 => 775,  2965 => 771,  2957 => 765,  2952 => 762,  2946 => 759,  2941 => 757,  2934 => 753,  2930 => 751,  2928 => 750,  2922 => 747,  2918 => 746,  2915 => 745,  2910 => 742,  2902 => 739,  2900 => 738,  2899 => 737,  2898 => 736,  2896 => 735,  2892 => 734,  2889 => 732,  2887 => 731,  2881 => 729,  2879 => 728,  2877 => 726,  2874 => 724,  2864 => 723,  2850 => 719,  2844 => 717,  2842 => 716,  2832 => 715,  2822 => 710,  2820 => 709,  2813 => 708,  2811 => 707,  2809 => 706,  2799 => 705,  2788 => 701,  2786 => 700,  2782 => 699,  2780 => 698,  2777 => 696,  2775 => 695,  2771 => 694,  2769 => 693,  2767 => 692,  2765 => 691,  2755 => 690,  2744 => 687,  2739 => 684,  2737 => 683,  2735 => 682,  2733 => 681,  2719 => 680,  2716 => 679,  2712 => 677,  2710 => 676,  2708 => 674,  2706 => 672,  2691 => 671,  2689 => 670,  2686 => 669,  2683 => 668,  2680 => 667,  2677 => 666,  2674 => 665,  2671 => 664,  2668 => 663,  2665 => 662,  2662 => 661,  2659 => 660,  2656 => 659,  2654 => 658,  2644 => 657,  2634 => 654,  2624 => 653,  2614 => 650,  2604 => 649,  2594 => 646,  2592 => 645,  2582 => 643,  2567 => 634,  2550 => 631,  2546 => 630,  2542 => 629,  2539 => 628,  2522 => 627,  2516 => 623,  2512 => 622,  2508 => 621,  2500 => 616,  2494 => 613,  2489 => 612,  2479 => 611,  2462 => 607,  2460 => 606,  2456 => 605,  2454 => 604,  2444 => 603,  2434 => 600,  2432 => 580,  2426 => 596,  2412 => 595,  2404 => 594,  2400 => 592,  2395 => 591,  2391 => 590,  2387 => 589,  2383 => 588,  2379 => 587,  2374 => 586,  2371 => 585,  2354 => 584,  2350 => 583,  2330 => 582,  2327 => 581,  2324 => 580,  2314 => 579,  2304 => 554,  2301 => 576,  2294 => 572,  2288 => 569,  2284 => 568,  2279 => 566,  2275 => 564,  2273 => 563,  2268 => 561,  2262 => 558,  2258 => 557,  2254 => 555,  2251 => 554,  2241 => 553,  2231 => 537,  2226 => 548,  2221 => 546,  2216 => 545,  2214 => 544,  2210 => 543,  2204 => 540,  2200 => 538,  2197 => 537,  2187 => 536,  2177 => 522,  2172 => 532,  2154 => 525,  2151 => 524,  2148 => 523,  2145 => 522,  2135 => 521,  2125 => 518,  2120 => 515,  2111 => 512,  2106 => 510,  2103 => 509,  2099 => 508,  2095 => 507,  2089 => 504,  2084 => 502,  2076 => 496,  2074 => 495,  2071 => 494,  2062 => 491,  2058 => 490,  2055 => 489,  2052 => 488,  2049 => 487,  2047 => 486,  2044 => 485,  2041 => 484,  2038 => 483,  2034 => 482,  2029 => 480,  2019 => 479,  2009 => 476,  2004 => 473,  1993 => 471,  1989 => 470,  1985 => 469,  1979 => 466,  1974 => 464,  1966 => 458,  1964 => 457,  1961 => 456,  1945 => 454,  1943 => 453,  1940 => 451,  1937 => 450,  1935 => 449,  1932 => 448,  1929 => 447,  1926 => 446,  1909 => 445,  1904 => 443,  1894 => 442,  1884 => 439,  1881 => 437,  1879 => 436,  1869 => 435,  1857 => 431,  1848 => 428,  1844 => 427,  1823 => 426,  1819 => 425,  1815 => 423,  1811 => 421,  1801 => 417,  1791 => 416,  1788 => 415,  1784 => 414,  1781 => 413,  1779 => 412,  1775 => 411,  1770 => 410,  1760 => 409,  1750 => 406,  1746 => 404,  1729 => 402,  1726 => 401,  1709 => 400,  1706 => 399,  1703 => 398,  1699 => 395,  1693 => 393,  1691 => 392,  1687 => 391,  1679 => 390,  1675 => 388,  1671 => 385,  1665 => 383,  1662 => 382,  1657 => 380,  1652 => 378,  1650 => 377,  1642 => 376,  1638 => 374,  1635 => 373,  1633 => 372,  1630 => 371,  1620 => 370,  1609 => 366,  1592 => 364,  1575 => 363,  1572 => 362,  1566 => 360,  1556 => 359,  1545 => 355,  1539 => 352,  1538 => 351,  1537 => 350,  1536 => 349,  1532 => 348,  1528 => 347,  1525 => 345,  1519 => 342,  1518 => 341,  1517 => 340,  1516 => 339,  1512 => 338,  1510 => 337,  1508 => 336,  1498 => 335,  1488 => 332,  1486 => 331,  1476 => 330,  1464 => 327,  1462 => 326,  1452 => 325,  1441 => 322,  1437 => 321,  1433 => 320,  1427 => 319,  1424 => 318,  1421 => 317,  1418 => 316,  1415 => 315,  1412 => 314,  1409 => 313,  1406 => 312,  1403 => 311,  1401 => 310,  1398 => 309,  1395 => 308,  1393 => 307,  1383 => 306,  1373 => 303,  1371 => 302,  1361 => 301,  1351 => 298,  1347 => 297,  1345 => 296,  1335 => 295,  1323 => 290,  1320 => 289,  1312 => 288,  1307 => 286,  1305 => 285,  1303 => 284,  1300 => 282,  1298 => 281,  1288 => 280,  1276 => 275,  1274 => 274,  1272 => 272,  1271 => 271,  1270 => 270,  1269 => 269,  1264 => 267,  1262 => 266,  1260 => 265,  1257 => 263,  1255 => 262,  1245 => 261,  1235 => 258,  1231 => 257,  1229 => 256,  1219 => 255,  1208 => 251,  1206 => 250,  1204 => 249,  1202 => 248,  1200 => 247,  1196 => 246,  1194 => 245,  1191 => 243,  1189 => 242,  1179 => 241,  1166 => 235,  1164 => 234,  1162 => 233,  1152 => 232,  1142 => 229,  1138 => 227,  1132 => 224,  1129 => 223,  1127 => 222,  1125 => 221,  1119 => 218,  1116 => 217,  1113 => 216,  1111 => 215,  1108 => 214,  1098 => 213,  1087 => 210,  1085 => 209,  1083 => 208,  1081 => 207,  1071 => 206,  1057 => 200,  1055 => 199,  1050 => 197,  1048 => 196,  1045 => 195,  1042 => 194,  1039 => 193,  1036 => 192,  1034 => 191,  1031 => 190,  1026 => 188,  1021 => 187,  1018 => 186,  1016 => 185,  1011 => 184,  1007 => 182,  1005 => 181,  988 => 180,  986 => 179,  982 => 175,  979 => 172,  978 => 171,  977 => 170,  975 => 169,  972 => 168,  969 => 166,  966 => 165,  963 => 163,  961 => 162,  959 => 161,  949 => 160,  938 => 140,  932 => 153,  929 => 152,  926 => 151,  923 => 150,  920 => 149,  917 => 148,  914 => 147,  911 => 146,  908 => 145,  905 => 144,  902 => 143,  900 => 142,  897 => 141,  894 => 140,  892 => 139,  882 => 138,  869 => 134,  864 => 133,  861 => 132,  858 => 131,  848 => 130,  835 => 126,  830 => 125,  827 => 124,  824 => 123,  814 => 122,  802 => 114,  800 => 113,  796 => 111,  794 => 110,  792 => 109,  790 => 107,  788 => 106,  786 => 105,  784 => 103,  782 => 102,  780 => 101,  769 => 100,  759 => 99,  749 => 94,  745 => 93,  743 => 92,  733 => 91,  721 => 88,  715 => 85,  710 => 84,  708 => 83,  706 => 82,  696 => 81,  686 => 78,  682 => 77,  672 => 76,  662 => 73,  659 => 72,  656 => 71,  653 => 70,  651 => 69,  641 => 68,  628 => 65,  625 => 64,  622 => 63,  619 => 62,  616 => 61,  613 => 60,  610 => 59,  600 => 58,  590 => 1614,  588 => 1574,  585 => 1573,  583 => 1563,  580 => 1562,  578 => 1519,  576 => 1479,  574 => 1428,  572 => 1414,  569 => 1413,  567 => 1408,  564 => 1407,  562 => 1394,  559 => 1393,  557 => 1388,  554 => 1387,  552 => 1371,  549 => 1370,  547 => 1358,  544 => 1357,  542 => 1344,  539 => 1343,  537 => 1338,  534 => 1337,  532 => 1330,  529 => 1329,  527 => 1300,  524 => 1299,  522 => 1292,  520 => 1251,  518 => 1245,  516 => 1239,  514 => 1222,  511 => 1221,  509 => 1218,  507 => 1204,  505 => 1191,  502 => 1190,  500 => 1185,  497 => 1184,  495 => 1179,  492 => 1178,  490 => 1169,  487 => 1168,  485 => 1161,  482 => 1160,  480 => 1153,  478 => 1143,  476 => 1133,  474 => 1128,  471 => 1127,  469 => 1123,  466 => 1122,  464 => 1094,  461 => 1093,  459 => 1068,  456 => 1067,  454 => 1048,  451 => 1047,  449 => 1031,  446 => 1030,  444 => 998,  441 => 997,  439 => 973,  436 => 972,  434 => 964,  431 => 963,  429 => 927,  426 => 926,  424 => 903,  421 => 901,  419 => 849,  416 => 848,  414 => 812,  411 => 811,  408 => 809,  406 => 790,  403 => 789,  401 => 723,  398 => 722,  396 => 715,  393 => 714,  390 => 712,  388 => 705,  385 => 704,  383 => 690,  380 => 689,  378 => 657,  375 => 656,  373 => 653,  370 => 652,  368 => 649,  365 => 648,  363 => 643,  360 => 642,  357 => 640,  355 => 611,  353 => 603,  351 => 579,  348 => 578,  346 => 553,  343 => 552,  341 => 536,  338 => 535,  336 => 521,  333 => 520,  331 => 479,  328 => 478,  326 => 442,  323 => 441,  321 => 435,  318 => 434,  316 => 409,  313 => 408,  311 => 370,  308 => 369,  306 => 359,  303 => 358,  301 => 335,  298 => 334,  296 => 330,  293 => 329,  291 => 325,  288 => 324,  286 => 306,  283 => 305,  281 => 301,  279 => 295,  277 => 280,  274 => 279,  272 => 261,  270 => 255,  268 => 241,  265 => 240,  263 => 232,  260 => 231,  258 => 213,  255 => 212,  253 => 206,  250 => 205,  248 => 160,  245 => 157,  243 => 138,  240 => 137,  238 => 130,  235 => 129,  233 => 122,  230 => 117,  228 => 99,  225 => 98,  223 => 91,  221 => 81,  219 => 76,  217 => 68,  215 => 58,  212 => 57,  209 => 55,  206 => 53,  203 => 46,  200 => 34,  197 => 25,  77 => 52,  70 => 51,  63 => 50,  56 => 49,  49 => 48,  30 => 45,);
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
# This form theme is an implementation of PrestaShop UI kit, it based on the bootstrap4 layout and overrides a few
# blocks to match our expected integration of the UI kit.
#
# This theme uses/extends the basic bootstrap_4_layout meaning the form labels/inputs are displayed one under the other.
# Unlike our prestashop_ui_kit.html.twig theme which extends this base kit but uses bootstrap_4_horizontal_layout as a
# base, where labels/inputs are displayed horizontally in a column way.
#}

{#
# We need to radio_widget and checkbox_widget from the original bootstrap 4 layout because we need to add form-check-radio
# on the last wrapping div which is not possible with the attributes, so we basically copied the content, but then we cannot
# use parent() to render the internal widget because it would reuse the one from bootstrap_4_layout and duplicate content.
#
# So we extract the initial widget from the bootstrap_base_layout to inject them as the internal widget, it is important
# to do it before we use bootstrap_4_layout or the base layout will override the blocks from bootstrap_4_layout.
#
# See https://symfony.com/doc/3.4/form/form_customization.html#referencing-blocks-from-inside-the-same-template-as-the-form
#}
{% use 'bootstrap_base_layout.html.twig' with radio_widget as base_radio_widget, checkbox_widget as base_checkbox_widget %}

{# Use bootstrap4 theme (from the Symfony framework) as default base #}
{% use 'bootstrap_4_layout.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/material.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig' %}

{# overrides from bootstrap_4_layout #}

{# Widgets #}

{% block form_start %}
  {% set attr = attr|merge({'data-alerts-success': form.vars.alerts.success|default([])|length()}) %}
  {% set attr = attr|merge({'data-alerts-info': form.vars.alerts.info|default([])|length()}) %}
  {% set attr = attr|merge({'data-alerts-warning': form.vars.alerts.warning|default([])|length()}) %}
  {% set attr = attr|merge({'data-alerts-error': form.vars.alerts.error|default([])|length()}) %}
  {% set attr = attr|merge({'data-form-submitted': form.vars.submitted ? 1 : 0}) %}
  {% set attr = attr|merge({'data-form-valid': form.vars.valid ? 1 : 0}) %}
  {{ parent() }}
{% endblock form_start %}

{%- block form_widget -%}
  {% if columns_number is defined %}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-columns-' ~ columns_number)|trim}) %}
  {% endif %}
  {{ parent() }}
  {{- block('form_help') -}}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
  {{ parent() }}
  {% include '@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig' with {'attr': attr} %}
{%- endblock form_widget_simple -%}

{% block ip_address_text_widget %}
  <div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    <button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"{{ currentIp }}\">
      <i class=\"material-icons\">add_circle</i> {{ 'Add my IP'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
  {{ block('form_help') }}
{% endblock ip_address_text_widget %}

{%- block password_widget -%}
  {%- set type = type|default('password') -%}
  {{ block('form_widget_simple') }}
  {{ block('form_help') }}
{%- endblock password_widget -%}

{# Rows #}

{% block form_row -%}
  <div class=\"form-group{{ block('widget_type_class') }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}\">
    {{- form_label(form) -}}
    {{- block('form_prepend_alert') -}}
    {{- block('form_prepend_external_link') -}}

    {{- form_widget(form) -}}
    {{- form_errors(form) -}}
    {{- block('form_modify_all_shops') -}}

    {{- block('form_append_alert') -}}
    {{- block('form_append_external_link') -}}
  </div>

  {% if column_breaker %}
  <div class=\"form-group form-column-breaker\"></div>
  {% endif %}
{%- endblock form_row %}

{#
# This block is integrated into each form row, its purpose is to display a \"Modify all stores\" checkbox when present,
# the checkbox form field is added by the ModifyAllShopsExtension when the config modify_all_shops
#}
{% block form_modify_all_shops %}
  {% set overrideCheckboxName = modify_all_shops_prefix ~ form.vars.name %}
  {% if attribute(form.parent, overrideCheckboxName) is defined %}
    {{ form_errors(attribute(form.parent, overrideCheckboxName)) }}
    {{ form_widget(attribute(form.parent, overrideCheckboxName)) }}
  {% endif %}
{% endblock %}

{% block form_disabling_switch %}
  {% set disablingSwitchName = disabling_switch_prefix ~ form.vars.name %}
  {% if attribute(form.parent, disablingSwitchName) is defined %}
    {{ form_errors(attribute(form.parent, disablingSwitchName)) }}
    {{ form_widget(attribute(form.parent, disablingSwitchName)) }}
  {% endif %}
{% endblock %}

{% block widget_type_class %}
{% if not compound and form.vars.block_prefixes|length > 2 %}
 {% apply spaceless %}

    {% set index = form.vars.block_prefixes|length - 2 %}
    {% set widgetType = form.vars.block_prefixes[index] %}
    {% if widgetType == 'choice' %}
      {% if not expanded %}
        {% set widgetType = 'select' %}
      {% elseif multiple %}
        {% set widgetType = 'checboxes' %}
      {% else %}
        {% set widgetType = 'radio' %}
      {% endif %}
    {% endif %}
    {{ widgetType }}-widget
{% endapply %}
{% endif %}
{% endblock %}

{# Labels #}

{%- block form_label -%}
  {% if label is not same as(false) -%}
    {% if not compound -%}
      {% set label_attr = label_attr|merge({'for': id}) %}
    {%- endif %}
    {% if required -%}
      {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {%- endif %}
    {% if label is empty -%}
      {%- if label_format is not empty -%}
        {% set label = label_format|replace({
          '%name%': name,
          '%id%': id,
        }) %}
      {%- else -%}
        {% set label = name|humanize %}
      {%- endif -%}
    {%- endif -%}

    {% set labelTag = label_tag_name|default('label') %}
    <{{ labelTag }}{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
    {% if required %}
      <span class=\"text-danger\">*</span>
    {% endif %}
    {{ translation_domain is same as(false) ? label|raw : label|raw }}
    {% if label_attr['tooltip'] is defined %}
      {% set placement = label_attr['tooltip_placement'] is defined ? label_attr['tooltip_placement'] : 'top' %}
      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"{{ placement }}\"
         title=\"{{ label_attr['tooltip'] }}\"></i>
    {% endif %}

    {% if label_help_box is defined or label_attr['popover'] is defined %}
      {% set content = label_help_box is defined ? label_help_box : label_attr['popover'] %}
      {% set placement = label_attr['popover_placement'] is defined ? label_attr['popover_placement'] : 'top' %}
      {% include '@Common/HelpBox/helpbox.html.twig' with { \"placement\" : placement, \"content\": content } %}
    {% endif %}
    {{- block('form_disabling_switch') -}}
    </{{ labelTag }}>
  {%- endif -%}
  {% if label_subtitle is defined %}
    <p class=\"subtitle\">{{ label_subtitle|raw('html') }}</p>
  {% endif %}
{%- endblock form_label -%}

{# Widgets #}

{% block textarea_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
  {{- parent() -}}
  {% include '@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig' with {'attr': attr} %}
  {{ block('form_help') }}
{%- endblock textarea_widget %}

{% block money_widget -%}
  <div class=\"input-group money-type\">
    {% set prepend = '{{' == money_pattern[0:2] %}
    {% if not prepend %}
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
      </div>
    {% endif %}
    {{- block('form_widget_simple') -}}
    {% if prepend %}
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
      </div>
    {% endif %}
  </div>

  {{ block('form_help') }}
{%- endblock money_widget %}

{% block percent_widget -%}
  <div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    <div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    <div {{ block('widget_container_attributes') }}>
      {{- form_errors(form.date) -}}
      {{- form_errors(form.time) -}}
      {{- form_widget(form.date, { datetime: true } ) -}}
      {{- form_widget(form.time, { datetime: true } ) -}}
    </div>
  {%- endif %}
{%- endblock datetime_widget %}

{%- block url_widget -%}
  {%- set type = type|default('url') -%}
  {{ block('form_widget_simple') }}
  {{ block('form_help') }}
{%- endblock url_widget -%}

{% block date_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {% if datetime is not defined or not datetime -%}
      <div {{ block('widget_container_attributes') -}}>
    {%- endif %}
    {{- date_pattern|replace({
      '{{ year }}': form_widget(form.year),
      '{{ month }}': form_widget(form.month),
      '{{ day }}': form_widget(form.day),
    })|raw -}}
    {% if datetime is not defined or not datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {% if datetime is not defined or false == datetime -%}
      <div {{ block('widget_container_attributes') -}}>
    {%- endif -%}
    {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
    {% if datetime is not defined or false == datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{%- endblock time_widget %}

{%- block email_widget -%}
  {%- set type = type|default('email') -%}
  {{ block('form_widget_simple') }}
  {{ block('form_help') }}
{%- endblock email_widget -%}

{% block button_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
  {{- parent() -}}
{%- endblock %}

{% block icon_button_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
  {% if button_type == 'link' %}
    {% set buttonTag = 'a' %}
    {# Link tags need extra class for disabled, the attribute itself is not enough #}
    {% if attr.disabled|default(false) %}
      {% set attr = attr|merge({class: (attr.class ~ ' disabled')|trim}) %}
    {% endif %}
  {% else %}
    {% set buttonTag = 'button' %}
    {% set attr = attr|merge({type: 'button'}) %}
  {% endif %}

  <{{ buttonTag }} {{ block('button_attributes') }}>
    <i class=\"material-icons\">{{ button_icon }}</i>
    <span class=\"btn-label\">{{ label }}</span>
  </{{ buttonTag }}>
{%- endblock %}

{% block choice_widget %}
  {{- parent() -}}
  {{ block('form_help') }}
{% endblock choice_widget %}

{% block choice_widget_collapsed -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' custom-select')|trim}) %}
  {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
  {% if '-inline' in label_attr.class|default('') -%}
    <div class=\"control-group\">
      {%- for child in form %}
        {{- form_widget(child, {
          parent_label_class: label_attr.class|default(''),
          translation_domain: choice_translation_domain,
          valid: valid,
        }) -}}
      {% endfor -%}
    </div>
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {%- for child in form %}
        {{- form_widget(child, {
          parent_label_class: label_attr.class|default(''),
          translation_domain: choice_translation_domain,
          valid: valid,
        }) -}}
      {% endfor -%}
    </div>
  {%- endif %}
{%- endblock choice_widget_expanded %}

{% block choice_tree_widget -%}
  <div {{ block('widget_container_attributes') }} class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">{{ \"Main category\"|trans({}, 'Admin.Catalog.Feature') }}</li>
      {%- for child in choices %}
        {{ block('choice_tree_item_widget') }}
      {% endfor -%}
    </ul>
  </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
  <li>
    {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}
    {% if multiple -%}
      <div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\" class=\"category\" {{ checked }}>
          {% if child.active is defined and child.active == 0 %}
            <i>{{ child.name }}</i>
          {%- else -%}
            {{ child.name }}
          {% endif %}
          {% if defaultCategory is defined %}
            <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
          {% endif %}
        </label>
      </div>
    {%- else -%}
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\" {{ checked }} class=\"category\">
          {{ child.name }}
          {% if defaultCategory is defined %}
            <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
          {% endif %}
        </label>
      </div>
    {%- endif %}
    {% if child.children is defined %}
      <ul>
        {% for item in child.children %}
          {% set child = item %}
          {{ block('choice_tree_item_widget') }}
        {% endfor -%}
      </ul>
    {% endif %}
  </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
  {{ form_errors(form) }}
  <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
    {% if hideTabs == false and form|length > 1 %}
      <ul class=\"translationsLocales nav nav-pills\">
        {% for translationsFields in form %}
          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"{{ translationsFields.vars.label }}\" class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
              {{ translationsFields.vars.label|upper }}
            </a>
          </li>
        {% endfor %}
      </ul>
    {% endif %}

    <div class=\"translationsFields tab-content\">
      {% for translationsFields in form %}
        <div data-locale=\"{{ translationsFields.vars.label }}\" class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
          {{ form_errors(translationsFields) }}
          {{ form_widget(translationsFields) }}
        </div>
      {% endfor %}
    </div>
  </div>
{% endblock %}

{% block translate_fields_widget -%}
  {% if type is not defined or 'file' != type %}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
  {% endif %}
  {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block translate_text_widget -%}
  {{ form_errors(form) }}
  <div class=\"input-group locale-input-group js-locale-input-group\">
    {% for translateField in form %}
      {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input'%}
      {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}

      {% if default_locale.id_lang != translateField.vars.name %}
        {% set classes = classes ~ ' d-none' %}
      {% endif %}

      {%- set attr = attr|merge({class: classes|trim}) -%}
      {{ block('form_widget') }}
    {% endfor %}

    {% if not hide_locales %}
      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"{{ form.vars.id }}\"
        >
          {{ form.vars.default_locale.iso_code|upper }}
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
          {% for locale in locales %}
            <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>
{%- endblock translate_text_widget %}

{% block translate_textarea_widget -%}
  {{ form_errors(form) }}
  <div class=\"input-group locale-input-group js-locale-input-group\">
    {% for textarea in form %}
      {% set classes = textarea.vars.attr.class|default('') ~ ' js-locale-input'%}
      {% set classes = classes ~ ' js-locale-' ~ textarea.vars.label %}

      {% if default_locale.id_lang != textarea.vars.name %}
        {% set classes = classes ~ ' d-none' %}
      {% endif %}

      <div class=\"{{ classes }}\">
        {{ form_widget(textarea, {attr: {'class': classes|trim}}) }}
      </div>
    {% endfor %}

    {% if show_locale_select %}
      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"{{ form.vars.id }}\"
        >
          {{ form.vars.default_locale.iso_code|upper }}
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
          {% for locale in locales %}
            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"{{ locale.iso_code }}\"
            >
              {{ locale.name }}
            </span>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>
{%- endblock translate_textarea_widget %}

{% block date_picker_widget %}
  {% apply spaceless %}
    {%  set attr = attr|merge({'class': ((attr.class|default('') ~ ' form-control datepicker')|trim)}) %}
    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"{{ date_format }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    {{ block('form_help') }}
  {% endapply %}
{% endblock date_picker_widget %}

{% block date_range_widget %}
  {% apply spaceless %}
    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        {{ form_row(form.from) }}
      </div>
      <div class=\"col col-md-4\">
        {{ form_row(form.to) }}
        {% if form.unlimited is defined %}
          {{ form_widget(form.unlimited) }}
          {{ form_errors(form.unlimited) }}
        {% endif %}
      </div>
    </div>
  {% endapply %}
{% endblock date_range_widget %}

{% block search_and_reset_widget %}
  {% apply spaceless %}
    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button d-block\"
            title=\"{{ 'Search'|trans({}, 'Admin.Actions') }}\"
            name=\"{{ full_name }}[search]\"
    >
      <i class=\"material-icons\">search</i>
      {{ 'Search'|trans({}, 'Admin.Actions') }}
    </button>
    {% if show_reset_button %}
      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"{{ full_name }}[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"{{ reset_url }}\"
                data-redirect=\"{{ redirect_url }}\"
        >
          <i class=\"material-icons\">clear</i>
          {{ 'Reset'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    {% endif %}
  {% endapply %}
{% endblock search_and_reset_widget %}

{% block switch_widget %}
  {% apply spaceless %}
  {% set rowAttributes  = row_attr|default({})%}
  <div class=\"input-group {{ rowAttributes.class|default('') }}\" {% for key, rowAttr in rowAttributes %} {% if key != 'class' %}{{ key }}=\"{{ rowAttr }}\"{% endif %}{% endfor %}>
    <span class=\"ps-switch\" id=\"{{ form.vars.id }}\">
        {% for choice in choices %}
          {% set inputId = id ~'_' ~ choice.value %}
          <input id=\"{{inputId}}\"
            {{ block('attributes') }}
            name=\"{{ full_name }}\"
            value=\"{{ choice.value }}\"
            {% if choice is selectedchoice(value) %}checked=\"\"{% endif %}
            {% if disabled %}disabled=\"\"{% endif %}
            type=\"radio\"
          >
          {% if show_choices %}<label for=\"{{inputId}}\">{{ choice.label|trans({}, choice_translation_domain) }}</label>{% endif %}
        {% endfor %}
        <span class=\"slide-button\"></span>
    </span>
  </div>
  {% endapply %}
  {{- block('form_help') -}}
{% endblock switch_widget %}

{%- block row_attributes -%}
  {% set rowAttributes  = row_attr|default({})%}
  {%- for attrname, attrvalue in rowAttributes -%}
    {{- \" \" -}}
    {{- attrname }}=\"{{ attrvalue }}\"
  {%- endfor -%}
{%- endblock -%}

{% block _form_step6_attachments_widget %}
  <div class=\"js-options-no-attachments {{ form|length > 0 ? 'hide' : '' }}\">
    <small>{{ 'There is no attachment yet.'|trans({}, 'Admin.Catalog.Notification') }}</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? 'hide' : '' }}\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">{{ 'Title'|trans({}, 'Admin.Global') }}</th>
            <th class=\"col-md-6\">{{ 'File name'|trans({}, 'Admin.Global') }}</th>
            <th class=\"col-md-2\">{{ 'Type'|trans({}, 'Admin.Catalog.Feature') }}</th>
          </tr>
          </thead>
          <tbody>
          {%- for child in form %}
            <tr>
              <td class=\"col-md-3\">{{ form_widget(child) }}</td>
              <td class=\"col-md-6 file-name\"><span>{{ form.vars.attr.data[loop.index0]['file_name'] }}</span></td>
              <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0]['mime'] }}</td>
            </tr>
          {% endfor -%}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}

{# Labels #}

{% block choice_label -%}
  {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
  {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
  {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
  {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
  {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
  {# Do not display the label if widget is not defined in order to prevent double label rendering #}
  {% if widget is defined %}
    {% if required %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is not same as(false) and label is empty %}
      {% set label = name|humanize %}
    {% endif %}

    {% if block_prefixes[2] == 'radio' %}
      <label class=\"form-check-label\"{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw -}}

        <i class=\"form-check-round\"></i>

        {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
      </label>
    {% else %}
      <div class=\"md-checkbox md-checkbox-inline\">
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw -}}
        <i class=\"md-checkbox-control\"></i>
        {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
        </label>
      </div>
    {% endif %}
  {% endif %}
{% endblock checkbox_radio_label %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-custom' in parent_label_class -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' custom-control-input')|trim}) -%}
        <div class=\"custom-control custom-radio{{ 'radio-inline' in parent_label_class ? ' custom-control-inline' }}\">
            {{- form_label(form, null, { widget: block('base_radio_widget') }) -}}
        </div>
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
        <div class=\"form-check form-check-radio form-radio{{ 'radio-inline' in parent_label_class ? ' form-check-inline' }}\">
            {{- form_label(form, null, { widget: block('base_radio_widget') }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    <div class=\"form-check form-check-radio form-checkbox{% if attr.container_class is defined %} {{ attr.container_class }}{% endif %}\">
        {{- form_label(form, null, { widget: block('base_checkbox_widget') }) -}}
    </div>
{%- endblock checkbox_widget %}

{# Errors #}

{% block form_errors -%}
  {% if attr['fieldError'] is defined and attr['fieldError'] == true %}
    {{ block('form_errors_field') }}
  {% else %}
    {{ block('form_errors_other') }}
  {% endif %}
{%- endblock form_errors %}

{% block form_errors_field %}
  {% if errors|length > 0 -%}
    {# If we got more then one error then we need to display popover instead of errors list #}
    {%- if errors|length > 1 -%}

      {% set popoverContainer = 'popover-error-container-'~form.vars.id %}
      <div class=\"{{ popoverContainer }}\"></div>

      {% set popoverErrorContent %}
        <div class=\"popover-error-list\">
          <ul>
            {%- for error in errors -%}
              <li class=\"text-danger\"> {{
                error.messagePluralization is null
                ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                }}
              </li>
            {% endfor %}
          </ul>
        </div>
      {% endset %}

      <template class=\"js-popover-error-content\" data-id=\"{{ form.vars.id }}\">
        {{ popoverErrorContent }}
      </template>

      {% set errorPopover %}
        <span
          data-toggle=\"form-popover-error\"
          data-id=\"{{ form.vars.id }}\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".{{ popoverContainer }}\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> {{ '%count% errors'|transchoice(errors|length, {}, 'Admin.Global') }}</u>
        </span>
      {% endset %}

      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          {{ errorPopover }}
        </div>
      </div>

      {# If there is only one error then display it without popover #}
    {%- else -%}
      <div class=\"d-inline-block text-danger align-top\">
        <i class=\"material-icons form-error-icon\">error_outline</i>
      </div>
      <div class=\"d-inline-block\">
        {% for error in errors %}
          <div class=\"text-danger\">
            <p> {{
              error.messagePluralization is null
              ? error.messageTemplate|trans(error.messageParameters, 'form_error')
              : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
              }}
            </p>
          </div>
        {%- endfor -%}
      </div>
    {%- endif -%}
  {%- endif %}
{% endblock %}

{% block form_errors_other %}
  {% if errors|length > 0 -%}
    <div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        {% for error in errors %}
            <p> {{
              error.messagePluralization is null
              ? error.messageTemplate|trans(error.messageParameters, 'form_error')
              : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
              }}
            </p>
        {%- endfor -%}
      </div>
    </div>
  {% endif %}
{% endblock %}

{# Material design widgets #}

{% block material_choice_table_widget %}
  {% apply spaceless %}
    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  {% if isCheckSelectAll %}
                    checked
                  {% endif %}
                >
                <i class=\"md-checkbox-control\"></i>
                {{ 'Select all'|trans({}, 'Admin.Actions') }}
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        {% for child in form %}
          <tr>
            <td>
              {{ form_widget(child, {'material_design': true}) }}
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endapply %}
{% endblock material_choice_table_widget %}

{% block material_multiple_choice_table_widget %}
  {% apply spaceless %}
    <div class=\"choice-table{% if headers_fixed %}-headers-fixed{% endif %} table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>{{ table_label }}</th>
          {% for child_choice in form %}
            <th class=\"text-center\">
              {% if child_choice.vars.multiple and child_choice.vars.name not in headers_to_disable %}
                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"{{ loop.index + 1 }}\"
                   data-column-checked=\"false\"
                >
                  {{ child_choice.vars.label }}
                </a>
              {% else %}
                {{ child_choice.vars.label }}
              {% endif %}
            </th>
          {% endfor %}
        </tr>
        </thead>
        <tbody>
        {% for choice_name, choice_value in choices %}
          <tr>
            <td>
              {{ choice_name }}
            </td>
            {% for child_choice_name, child_choice in form %}
              <td class=\"text-center\">
                {% if child_choice_entry_index_mapping[choice_value][child_choice_name] is defined %}
                  {% set entry_index = child_choice_entry_index_mapping[choice_value][child_choice_name] %}

                  {% if child_choice.vars.multiple %}
                    {{ form_widget(child_choice[entry_index], {'material_design': true}) }}
                  {% else %}
                    {{ form_widget(child_choice[entry_index]) }}
                  {% endif %}
                {% else %}
                  --
                {% endif %}
              </td>
            {% endfor %}
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endapply %}
{% endblock material_multiple_choice_table_widget %}

{# Copied translatablefields_widget made to be compatible with TranslatableType.php and to be used in translatable widget#}
{% block translatable_fields_with_tabs %}
  <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
    {% if hide_locales == false and form|length > 1 %}
      <ul class=\"translationsLocales nav nav-pills\">
        {% for translationsFields in form %}
          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"{{ translationsFields.vars.label }}\" class=\"{% if default_locale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
              {{ translationsFields.vars.label|upper }}
            </a>
          </li>
        {% endfor %}
      </ul>
    {% endif %}

    <div class=\"translationsFields tab-content\">
      {% for translationsFields in form %}
        <div data-locale=\"{{ translationsFields.vars.label }}\" class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hide_locales == false and form|length > 1 %}panel panel-default{% endif %} {% if default_locale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
          {{ form_widget(translationsFields) }}
        </div>
      {% endfor %}
    </div>
  </div>
{% endblock %}

{% block translatable_fields_with_dropdown -%}
    {% set formClass = (form.vars.attr.class|default('') ~ ' input-group locale-input-group js-locale-input-group d-flex')|trim %}
    <div class=\"{{ formClass }}\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
      {% for translateField in form %}
        {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input'%}
        {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}
        {% if default_locale.id_lang != translateField.vars.name %}
          {% set classes = classes ~ ' d-none' %}
        {% endif %}
        <div data-lang-id=\"{{ translateField.vars.name }}\" class=\"{{ classes }}\" style=\"flex-grow: 1;\">
          {{ form_widget(translateField) }}
        </div>
      {% endfor %}
      {% if not hide_locales %}
        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            {% if change_form_language_url is defined %}
              data-change-language-url=\"{{ form.vars.change_form_language_url }}\"
            {% endif %}
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"{{ form.vars.id }}_dropdown\"
          >
            {{ form.vars.default_locale.iso_code|upper }}
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}_dropdown\">
            {% for locale in locales %}
              <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
            {% endfor %}
          </div>
        </div>
      {% endif %}
    </div>
{%- endblock %}

{% block translatable_widget -%}
  {% if use_tabs %}
    {{ block('translatable_fields_with_tabs') }}
  {% else %}
    {{ block('translatable_fields_with_dropdown') }}
  {% endif %}
  {{ block('form_help') }}
{%- endblock translatable_widget %}

{% block birthday_widget %}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {% if datetime is not defined or not datetime -%}
      <div {{ block('widget_container_attributes') -}}>
    {%- endif %}

    {% set yearWidget = '<div class=\"col pl-0 birthday-select-container\">' ~ form_widget(form.year) ~ '</div>'|raw %}
    {% set monthWidget = '<div class=\"col birthday-select-container\">' ~ form_widget(form.month) ~ '</div>'|raw %}
    {% set dayWidget = '<div class=\"col pr-0 birthday-select-container\">' ~ form_widget(form.day) ~ '</div>'|raw %}

    {{- date_pattern|replace({
      '{{ year }}': yearWidget,
      '{{ month }}': monthWidget,
      '{{ day }}': dayWidget,
    })|raw -}}

    {% if datetime is not defined or not datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{% endblock birthday_widget %}

{% block file_widget %}
  <style>
    .custom-file-label:after {
      content: \"{{ \"Browse\"|trans({}, 'Admin.Actions')  }}\";
    }
  </style>
  <div class=\"custom-file\">
    {% set attr = attr|merge({
      class: (attr.class|default('') ~ ' custom-file-input')|trim,
      'data-multiple-files-text': '%count% file(s)'|trans({}, 'Admin.Global'),
      'data-locale': get_context_iso_code()
    }) -%}

    {% if attr.disabled is defined and attr.disabled %}
      {% set attr = attr|merge({
        class: attr.class ~ ' disabled'
      }) %}
    {% endif %}
    {{- block('form_widget_simple') -}}

    <label class=\"custom-file-label\" for=\"{{ form.vars.id }}\">
      {% set attributes = form.vars.attr %}
      {{ attributes.placeholder is defined ?  attributes.placeholder : 'Choose file(s)'|trans({}, 'Admin.Actions') }}
    </label>
  </div>
  {{- block('form_help') -}}
  {% if form.vars.download_url %}
    <a target=\"_blank\" href=\"{{ form.vars.download_url }}\">
      {{ 'Download file'|trans({}, 'Admin.Actions') }}
    </a>
  {% endif %}
{% endblock file_widget %}

{% block shop_restriction_checkbox_widget %}
  {% if form.vars.attr.is_allowed_to_display %}
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        {% set type = type|default('checkbox') %}
        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"{{ type }}\"
          {{ block('widget_attributes') }}
          value=\"{{ value }}\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  {% endif %}
{% endblock %}

{% block generatable_text_widget %}
  <div class=\"input-group\">
    {% if compound %}
      {{- block('form_widget_compound') -}}
    {% else %}
      {{- block('form_widget_simple') -}}
    {% endif %}
    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"{{ id }}\"
              data-generated-value-length=\"{{ generated_value_length }}\"
      >
        {{ 'Generate'|trans({}, 'Admin.Actions') }}
      </button>
   </span>
  </div>
  {{ block('form_help') }}
{% endblock generatable_text_widget %}

{% block text_with_recommended_length_widget %}
  {% set attr = attr|merge({
    'data-recommended-length-counter': '#' ~ id ~ '_recommended_length_counter',
    'class': 'js-recommended-length-input'
  }) -%}

  {% if input_type == 'textarea' %}
    {{- block('textarea_widget') -}}
  {% else %}
    {{- block('form_widget_simple') -}}
  {% endif %}

  <small class=\"form-text text-muted text-right\"
         id=\"{{ id }}_recommended_length_counter\"
  >
    <em>
      {{ '[1][/1] of [2][/2] characters used (recommended)'|trans({}, 'Admin.Catalog.Feature')|replace({
        '[1]': '<span class=\"js-current-length\">' ~ value|length,
        '[/1]': '</span>',
        '[2]': '<span>' ~ recommended_length,
        '[/2]': '</span>',
      })|raw }}
    </em>
  </small>
{% endblock %}

{% block text_with_length_counter_widget %}
  <div class=\"input-group js-text-with-length-counter\">
    {% set current_length = form.vars.max_length - value|length %}

    {% if form.vars.position == 'before' %}
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">{{ current_length }}</span>
      </div>
    {% endif %}

    {% set attr = attr|merge({'data-max-length': form.vars.max_length, 'maxlength': form.vars.max_length, 'class': 'js-countable-input'}) -%}
    {% set attr = attr|merge(input_attr) -%}

    {% if form.vars.input == 'input' %}
      {{- block('form_widget_simple') -}}
    {% elseif form.vars.input == 'textarea' %}
      {{- block('textarea_widget') -}}
    {% else %}
      {{- block('form_widget') -}}
    {% endif %}

    {% if form.vars.position == 'after' %}
      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">{{ current_length }}</span>
      </div>
    {% endif %}
  </div>
{% endblock %}

{% block integer_min_max_filter_widget %}
  {{ form_widget(form['min_field'], { attr: {class: 'min-field'}}) }}
  {{ form_widget(form['max_field'], { attr: {class: 'max-field'}}) }}
{% endblock %}

{% block number_min_max_filter_widget %}
  {{ form_widget(form['min_field'], { attr: {class: 'min-field'}}) }}
  {{ form_widget(form['max_field'], { attr: {class: 'max-field'}}) }}
{% endblock %}

{%- block number_widget -%}
  {%- set type = type|default('text') -%}
  <div class=\"input-group\">
    {{- block('form_unit_prepend') -}}
    {{- block('form_widget_simple') -}}
    {{- block('form_unit') -}}
  </div>
  {{ block('form_help') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
  {%- set type = type|default('number') -%}
  <div class=\"input-group\">
    {{- block('form_unit_prepend') -}}
    {{- block('form_widget_simple') -}}
    {{- block('form_unit') -}}
  </div>
  {{ block('form_help') }}
{%- endblock integer_widget -%}

{% block form_unit %}
  {% if form.vars.unit is defined and not form.vars.prepend_unit %}
    <div class=\"input-group-append\">
      <span class=\"input-group-text\">{{ form.vars.unit }}</span>
    </div>
  {% endif %}
{% endblock form_unit %}

{% block form_unit_prepend %}
  {% if form.vars.unit is defined and form.vars.prepend_unit %}
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">{{ form.vars.unit }}</span>
    </div>
  {% endif %}
{% endblock form_unit_prepend %}

{% block form_help %}
  {% if help is not null %}
    {%- set help_attr = help_attr|merge({class: (help_attr.class|default('') ~ ' form-text')|trim}) -%}
      <small id=\"{{ id }}_help\"{% with { attr: help_attr } %}{{ block('attributes') }}{% endwith %}>{{ help|raw }}</small>
  {% endif %}
  {% if warning is defined %}
    {{ warning }}
  {% endif %}
{% endblock form_help %}

{% block form_prepend_external_link %}
  {% if external_link is defined and external_link.position == 'prepend' %}
    {{- block('form_external_link') -}}
  {% endif %}
{% endblock %}

{% block form_append_external_link %}
  {% if external_link is defined and external_link.position == 'append' %}
    {{- block('form_external_link') -}}
  {% endif %}
{% endblock %}

{% block form_external_link %}
  {% if external_link is defined %}
    {%- set openingTag -%}
      <a {{ block('form_external_link_attributes') }}>
        <i class=\"material-icons\">open_in_new</i>
    {%- endset -%}

    <div class=\"small font-secondary{% if external_link.align is same as('right') %} text-right{% endif %}\">
      {{ external_link.text|replace({'[1]': openingTag, '[/1]': '</a>'})|raw }}
    </div>
  {% endif %}
{% endblock form_external_link %}

{%- block form_external_link_attributes -%}
  {% set external_link_attr = external_link.attr|merge({class: (external_link.attr.class|default('') ~ ' btn btn-link px-0 align-right')|trim}) %}

  {% for attrname, attrvalue in external_link_attr %}
    {% if attrname not in ['href', 'class'] %}
      {{ attrname }}=\"{{ attrvalue }}\"
    {% endif %}
  {% endfor %}

  target=\"_blank\"
  href=\"{{ external_link.href }}\"
  class=\"{{ external_link_attr.class }}\"
{%- endblock -%}

{% block custom_content_widget %}
  {% include template with data %}
{% endblock %}

{% block text_widget %}
  {%- set attr = attr|merge({'aria-label': '%inputId% input'|trans({'%inputId%': form.vars.id}, 'Admin.Global')}) -%}
  {% if data_list is not null %}
    {%- set attr = attr|merge({'list': id ~ '_datalist'}) -%}
  {% endif %}

  {{ form_widget(form, {'attr': attr}) }}

  {% if data_list is not null %}
    <datalist id=\"{{ id ~ '_datalist' }}\">
      {% for item in data_list %}
        <option value=\"{{ item }}\"></option>
      {% endfor%}
    </datalist>
  {% endif %}
{% endblock text_widget %}

{%- block form_prepend_alert -%}
  {% if alert_position is defined and alert_position == 'prepend' %}
  {{- block('form_alert') -}}
  {% endif %}
{% endblock %}

{%- block form_append_alert -%}
  {% if alert_position is defined and alert_position == 'append' %}
  {{- block('form_alert') -}}
  {% endif %}
{% endblock %}

{%- block form_alert -%}
  {% if alert_message is defined %}
    <div class=\"alert alert-{{ alert_type }}{% if alert_title is defined %} expandable-alert{% endif %}\" role=\"alert\">
    {% if alert_title is defined %}
      <p class=\"alert-text\">
        {{ alert_title|raw }}
      </p>
    {% else %}
      {% for message in alert_message %}
        <p class=\"alert-text\">
          {{ message|raw }}
        </p>
      {% endfor %}
    {% endif %}

    {% if alert_title is defined %}
      <div class=\"alert-more collapse\" id=\"expandable_{{form.vars.id}}\" style=\"\">
        {% if alert_message|length > 1 %}
          <ul class=\"p-0\">
            {% for message in alert_message %}
              <li>{{ message|raw }}</li>
            {% endfor %}
          </ul>
        {% else %}
          {% for message in alert_message %}
            <p>
              {{ message|raw }}
            </p>
          {% endfor %}
        {% endif %}
      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_{{form.vars.id}}\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            {{ 'Read more'|trans({}, 'Admin.Actions') }}
          </button>
       </div>
    {% endif %}
  </div>
  {% endif %}
{%- endblock -%}

{% block unavailable_widget %}
  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      {{ 'Not available yet.'|trans({}, 'Admin.Catalog.Feature') }}
    </p>
  </div>
{% endblock %}

{% block text_preview_widget %}
  {# This is the hidden input #}
  {{- block('form_widget_simple') -}}
  <span class=\"label text-preview {{ preview_class }}\">
    {# Allows to insert content as prefix, like an icon #}
    {% if prefix is defined %}
    <span class=\"text-preview-prefix\">
      {{ prefix|raw }}
    </span>
    {% endif %}

    <span class=\"text-preview-value\">
      {% if  form.vars.allow_html %}
        {# This outputs raw value #}
        {{ value|raw }}
      {% else %}
        {# This just outputs the value #}
        {{ value|e('html') }}
      {% endif %}
    </span>

    {# Allows to insert content as suffix, like an icon #}
    {% if suffix is defined %}
    <span class=\"text-preview-suffix\">
      {{ suffix|raw }}
    </span>
    {% endif %}
  </span>
{% endblock %}

{% block link_preview_widget %}
  {# This is the hidden input #}
  {{- block('form_widget_simple') -}}
  <a href=\"{{ form.vars.value }}\" class=\"{{ attr.class|default('') }}\">
    {{ form.vars.button_label }}
  </a>
{% endblock %}

{% block image_preview_widget %}
  {# This is the hidden input #}
  {{- block('form_widget_simple') -}}
  <img src=\"{{ value }}\" alt=\"{{ ('Image preview for ' ~ form.vars.name)|trim }}\" class=\"{{ form.vars.image_class }}\" />
{% endblock %}

{% block delta_quantity_widget %}
  {% set quantity = value.quantity|default(form.quantity.vars.value) %}
  {# If initial quantity has not been computed we use value which may be containing a placeholder useful for collection rendering #}
  {% if initialQuantity is null %}
    {% set initialQuantity = quantity %}
  {% endif %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity')|trim, 'data-initial-quantity': initialQuantity}) %}
  <div {{ block('widget_container_attributes') }}>
    {{ form_widget(form.initial_quantity, {value: initialQuantity}) }}
    {{ form_widget(form.quantity, {initialQuantity: initialQuantity, deltaQuantity: deltaQuantity, value: quantity}) }}
    {{ form_row(form.delta) }}
  </div>
{% endblock %}

{% block delta_quantity_quantity_widget %}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity-quantity')|trim}) -%}
  <div {{ block('widget_container_attributes') }}>
    {{- block('form_widget_simple') -}}
    <span class=\"initial-quantity\">{{ initialQuantity }}</span>
    <span class=\"quantity-update{% if deltaQuantity != 0 %} quantity-modified{% endif %}\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">{{ value }}</span>
    </span>
    {{ form_errors(form) }}
  </div>
{% endblock %}

{% block delta_quantity_delta_row %}
  <div class=\"form-group{{ block('widget_type_class') }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}\">
    <div class=\"delta-quantity-delta-container\">
      {{- form_label(form) -}}
      {{- block('form_prepend_alert') -}}
      {{- block('form_prepend_external_link') -}}

      {{- form_widget(form) -}}

      {{- block('form_append_alert') -}}
      {{- block('form_append_external_link') -}}
    </div>
    {{- form_errors(form) -}}
    {{- block('form_modify_all_shops') -}}
  </div>
{% endblock %}

{% block delta_quantity_delta_widget %}
  {%- set type = 'number' -%}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity-delta')|trim}) -%}
  {{- block('form_widget_simple') -}}
{% endblock %}

{% block submittable_input_widget %}
  {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' ps-submittable-input-wrapper')|trim}) -%}
  <div {{ block('widget_attributes') }}>
    {%- set typeAttr = form.vars.type_attr|merge({
      'class': (form.vars.type_attr.class|default('') ~ ' submittable-input')|trim,
      'data-initial-value': form.value.vars.value,
      'value': form.value.vars.value,
    }) -%}

    {{ form_widget(form.value, {'attr': typeAttr}) }}
    {{- block('submittable_input_button_widget') -}}
  </div>
{% endblock submittable_input_widget %}

{% block submittable_input_button_widget %}
  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
{% endblock submittable_input_button_widget %}

{% block submittable_delta_quantity_delta_widget %}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity-delta ps-submittable-input-wrapper')|trim}) -%}
  <div {{ block('widget_attributes') }}>
    {%- set attr = form.vars.attr|merge({
      'class': (form.vars.attr.class|default('') ~ ' submittable-input')|trim,
      'data-initial-value': value,
      'value': value,
    }) -%}

    {{ form_widget(form, {'attr': attr}) }}
    {{- block('submittable_input_button_widget') -}}
  </div>
{% endblock %}

{%- block navigation_tab_widget -%}
{% set attr = attr|merge({class: (attr.class|default('') ~ ' navigation-tab-widget')|trim}) %}
<div {{ block('widget_container_attributes') }}>
  <div id=\"{{ form.vars.id }}-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    {% set firstRenderedChild = true %}
    {% for child in form.children %}
      {% if not child.rendered and child.vars.name != '_toolbar_buttons' and child.vars.name != '_token' %}
      <li id=\"{{ child.vars.id }}-tab-nav\" class=\"nav-item{% if not child.vars.valid %} has-error{% endif %}\">
        <a href=\"#{{ child.vars.id }}-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link{% if firstRenderedChild %} active{% endif %}\">
          {{ child.vars.label }}
        </a>
      </li>
      {% set firstRenderedChild = false %}
      {% endif %}
    {% endfor %}
    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    {% if form.offsetExists('_toolbar_buttons') %}
    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      {{ form_widget(form._toolbar_buttons) }}
    </div>
    {% endif %}
  </div>

  <div id=\"{{ form.vars.id }}-tabs-content\" class=\"tab-content\">
    {% set firstRenderedChild = true %}
    {% for child in form.children %}
      {% if not child.rendered and child.vars.name != '_token' %}
      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid{% if firstRenderedChild %} active{% endif %}\" id=\"{{ child.vars.id }}-tab\">
        {% if child.vars.label_tab is defined %}
          {{ form_label(child, child.vars.label_tab) }}
        {% endif %}
        {{ form_widget(child) }}
        {{ form_errors(child) }}
      </div>
      {% set firstRenderedChild = false %}
      {% endif %}
    {% endfor %}
  </div>
</div>
{% endblock %}

{%- block accordion_widget -%}
  <div class=\"accordion accordion-form\" id=\"{{ form.vars.id }}\">
    {% set firstChild = true %}
    {% for child in form %}
      {% if child.vars.compound %}
      {% set hasError = child.vars.valid != true %}
      {% set isExpanded = firstChild and expand_first or (hasError and expand_on_error) %}
      <div class=\"card\">
        <div class=\"card-header\" id=\"{{ child.vars.id }}_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button {% if hasError %} has-error {% endif %} btn btn-block text-left{% if not isExpanded %} collapsed{% endif %}\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#{{ child.vars.id }}_accordion\"
              aria-expanded=\"{% if isExpanded %}true{% else %}false{% endif %}\"
              aria-controls=\"{{ child.vars.id }}_accordion\">
              {{ child.vars.label }}
              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"{{ child.vars.id }}_accordion\" class=\"collapse{% if isExpanded %} show{% endif %}\" aria-labelledby=\"{{ child.vars.id }}_accordion_header\" {% if display_one %}data-parent=\"#{{ form.vars.id }}\"{% endif %}>
          <div class=\"card-body\">
            {% set childAttr = {'class': 'accordion-sub-form'} %}
            {{ form_widget(child, {attr: childAttr}) }}
            {{ form_errors(child) }}
          </div>
        </div>
      </div>
      {% set firstChild = false %}
      {% endif %}
    {% endfor %}

    {# Display rest of children that may have not been rendered because they were not compound forms, like token hidden field for example #}
    {{ form_rest(form) }}
  </div>
{%- endblock -%}

{% block button_collection_widget %}
  {%- set attr = attr|merge({
    class: (attr.class|default('') ~ ' form-group btn-collection btn-toolbar')|trim,
    role: 'group',
    style: 'justify-content: ' ~ justify_content
  }) -%}
  <div {{ block('widget_attributes') }}>
    {% for group, buttons in button_groups %}
      <div class=\"{% if use_button_groups %}btn-group {% endif %}group-{{ group }}\">
        {# Render inline actions #}
        {% set inlineButtonsLimit = form.vars.inline_buttons_limit %}
        {% for action in form.children %}
          {% if inlineButtonsLimit is same as(null) or loop.index <= inlineButtonsLimit %}
            {# Remove labels from inline elements if they are not forced #}
            {% if form.vars.use_inline_labels %}
              {% set actionLabel = action.vars.label %}
            {% else %}
              {% set actionLabel = '' %}
            {% endif %}
            {{ form_widget(action, {'label': actionLabel}) }}
          {% endif %}
        {% endfor %}

        {# Render remaining actions in dropdown #}
        {% if inlineButtonsLimit is not same as(null) and form.children|length > inlineButtonsLimit %}
          <a id=\"{{ form.vars.id }}_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            {% for action in form.children|slice(inlineButtonsLimit) %}
              {{ form_widget(action, {'attr': {
                'class': 'dropdown-item ' ~ action.vars.attr.class|default('')|trim
              }}) }}
            {% endfor %}
          </div>
        {% endif %}
      </div>
    {% endfor %}
  </div>
{% endblock %}

{% block avatar_url_row %}
  {{ form_row(form, {'attr': attr}) }}

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"{{ form.parent.vars.value.avatar_url }}\" alt=\"\">
    </div>
  </div>
{% endblock %}

{% block change_password_row %}
  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      {{ 'Password'|trans({}, 'Admin.Global') }}
    </label>
    <div class=\"col-sm\">
      {# \"Change password\" button #}
      {{ form_row(form.children.change_password_button) }}

      <div class=\"card card-body js-change-password-block d-none\">
        {# Current password input #}
        {{ form_row(form.children.old_password) }}

        {# New password first input #}
        {# New password second input (confirmation) #}
        {{ form_row(form.children.new_password) }}

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            {{ form_widget(form.children.generated_password) }}
          </div>
          <div class=\"col-sm\">
            {{ form_widget(form.children.generate_password_button) }}
          </div>
        </div>
        {{ form_row(form.children.cancel_button) }}

        {# Password strength feedback messages - used in JS #}
        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">{{ 'Invalid'|trans({}, 'Admin.Advparameters.Help') }}</span>
          <span class=\"strength-medium\">{{ 'Okay'|trans({}, 'Admin.Advparameters.Help') }}</span>
          <span class=\"strength-high\">{{ 'Good'|trans({}, 'Admin.Advparameters.Help') }}</span>
          <span class=\"strength-extreme\">{{ 'Fabulous'|trans({}, 'Admin.Advparameters.Help') }}</span>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{%- block price_reduction_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' reduction-widget row')|trim}) %}
  <div {{ block('widget_attributes') }}>
    {% for child in form.children %}
      {% with {row_attr: child.vars.row_attr|merge({class: (child.vars.row_attr.class|default('') ~ ' col col-md-3')|trim})} %}
      <div {{ block('row_attributes') }}>
      {% endwith %}
        {{ form_widget(child) }}
        {{ form_errors(child) }}
      </div>
    {% endfor -%}
  </div>
{%- endblock -%}
", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig");
    }
}
