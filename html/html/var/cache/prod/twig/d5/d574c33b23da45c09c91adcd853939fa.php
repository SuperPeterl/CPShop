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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig */
class __TwigTemplate_9f5f34bfa07f89cd428a69c28611407e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'backup_info' => [$this, 'block_backup_info'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('backup_info', $context, $blocks);
    }

    public function block_backup_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  <div class=\"alert alert-info\" role=\"alert\">
    <h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How to restore a database backup in 10 easy steps", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</h4>
    <ol class=\"mb-0\">
      <li>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Set \"Enable Shop\" to \"No\" in the \"Maintenance\" page under the \"Preferences\" menu.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download the backup from the list below or from your FTP server (in the folder \"admin/backups\").", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check the backup integrity: Look for errors, incomplete file, etc... Be sure to verify all of your data.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please ask your hosting provider for \"phpMyAdmin\" access to your database.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connect to \"phpMyAdmin\" and select your current database.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unless you enabled the \"Drop existing tables\" option, you must delete all tables from your current database.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("At the top of the screen, please select the \"Import\" tab", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click on the \"%phpmyadmin_browse_label%\" button and select the backup file from your hard drive.", ["%phpmyadmin_browse_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions")], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check the maximum filesize allowed (e.g. Max: 16MB)", [], "Admin.Advparameters.Help"), "html", null, true);
        echo " <br>
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If your backup file exceeds this limit, contact your hosting provider for assistance. ", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
      </li>
      <li>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click on the \"%phpmyadmin_go_label%\" button and please wait patiently for the import process to conclude. This may take several minutes.", ["%phpmyadmin_go_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go", [], "Admin.Actions")], "Admin.Advparameters.Help"), "html", null, true);
        echo " <br></li>
    </ol>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  93 => 40,  89 => 39,  84 => 37,  80 => 36,  76 => 35,  72 => 34,  68 => 33,  64 => 32,  60 => 31,  56 => 30,  51 => 28,  48 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig");
    }
}
