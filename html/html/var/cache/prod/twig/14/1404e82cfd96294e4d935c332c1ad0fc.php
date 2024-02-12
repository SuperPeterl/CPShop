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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig */
class __TwigTemplate_6e0fdacfdb8e3ad3858ebb675b65f057 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'backup_warning' => [$this, 'block_backup_warning'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('backup_warning', $context, $blocks);
    }

    public function block_backup_warning($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  <div class=\"alert alert-warning\" role=\"alert\">
    <h4>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disclaimer before creating a new backup", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</h4>
    <ol>
      <li>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop is not responsible for your database, its backups and/or recovery.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop is open-source software. You are using it at your own risk under the license agreement.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You should back up your data on a regular basis (both files and database).", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This function only backs up your database, not your files.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By default, your existing database tables will be dropped during the backup recovery (see \"Backup options\" below).", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Always verify the quality and integrity of your backup files!", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Always verify that your backup files are complete, up-to-date and valid, even if you had a success message appear during the backup process.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Always check your data.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Never restore a backup on a live site.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
    </ol>

    ";
        // line 42
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig", 42)->display($context);
        // line 43
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  94 => 42,  88 => 39,  84 => 38,  80 => 37,  76 => 36,  72 => 35,  68 => 34,  64 => 33,  60 => 32,  56 => 31,  51 => 29,  48 => 28,  41 => 27,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig");
    }
}
