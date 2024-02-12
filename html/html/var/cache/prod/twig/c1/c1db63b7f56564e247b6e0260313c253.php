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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig */
class __TwigTemplate_e045b0bd72afadca2dbb690c7c142529 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'backup_download_file' => [$this, 'block_backup_download_file'],
            'backup_alerts' => [$this, 'block_backup_alerts'],
            'backup_listing' => [$this, 'block_backup_listing'],
            'backup_options' => [$this, 'block_backup_options'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        $this->displayBlock('backup_download_file', $context, $blocks);
        // line 35
        echo "
  ";
        // line 36
        $this->displayBlock('backup_alerts', $context, $blocks);
        // line 41
        echo "
  ";
        // line 42
        $this->displayBlock('backup_listing', $context, $blocks);
        // line 45
        echo "
  ";
        // line 46
        $this->displayBlock('backup_options', $context, $blocks);
    }

    // line 30
    public function block_backup_download_file($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        if (($context["hasDownloadFile"] ?? null)) {
            // line 32
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 32)->display($context);
            // line 33
            echo "    ";
        }
        // line 34
        echo "  ";
    }

    // line 36
    public function block_backup_alerts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 37)->display($context);
        // line 38
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 38)->display($context);
        // line 39
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 39)->display($context);
        // line 40
        echo "  ";
    }

    // line 42
    public function block_backup_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 43)->display(twig_array_merge($context, ["grid" => ($context["backupGrid"] ?? null)]));
        // line 44
        echo "  ";
    }

    // line 46
    public function block_backup_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 47)->display($context);
        // line 48
        echo "  ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/backup.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 55,  141 => 54,  135 => 52,  131 => 51,  127 => 48,  124 => 47,  120 => 46,  116 => 44,  113 => 43,  109 => 42,  105 => 40,  102 => 39,  99 => 38,  96 => 37,  92 => 36,  88 => 34,  85 => 33,  82 => 32,  79 => 31,  75 => 30,  71 => 46,  68 => 45,  66 => 42,  63 => 41,  61 => 36,  58 => 35,  55 => 30,  51 => 29,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/index.html.twig");
    }
}
