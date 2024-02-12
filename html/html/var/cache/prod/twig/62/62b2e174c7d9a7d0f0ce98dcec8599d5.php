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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig */
class __TwigTemplate_325ed85377ebfcba9f8e02341da09089 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'backup_creation_form' => [$this, 'block_backup_creation_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('backup_creation_form', $context, $blocks);
    }

    public function block_backup_creation_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_backups_create");
        echo "\" method=\"post\">
  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("backup"), "html", null, true);
        echo "\">

  <button type=\"submit\" class=\"btn btn-outline-primary\" data-role=\"create-backup-btn\">
    <i class=\"material-icons\">save</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I have read the disclaimer. Please create a new backup.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
  </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 32,  53 => 28,  48 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig");
    }
}
