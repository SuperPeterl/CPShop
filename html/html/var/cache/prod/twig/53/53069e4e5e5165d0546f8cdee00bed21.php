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

/* @PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig */
class __TwigTemplate_00434a5fa7ef25c6204ec2e69d14d0a5 extends Template
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
        // line 26
        echo "<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">warning</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Severity levels", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meaning of severity levels:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
    <ol>
      <li>
        <span class=\"badge badge-pill badge-success\">
          ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informative only", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </span>
      </li>
      <li>
        <span class=\"badge badge-pill badge-warning\">
          ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </span>
      </li>
      <li>
        <span class=\"badge badge-pill badge-danger\">
          ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </span>
      </li>
      <li>
        <span class=\"badge badge-pill badge-dark\">
          ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Major issue (crash)!", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </span>
      </li>
    </ol>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 51,  71 => 46,  63 => 41,  55 => 36,  48 => 32,  42 => 29,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig");
    }
}
