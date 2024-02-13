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

/* @AdvancedParameters/memcache_servers.html.twig */
class __TwigTemplate_99b85a5265743326b9338fe890b9218e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'perfs_memcache_servers' => [$this, 'block_perfs_memcache_servers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdvancedParameters/memcache_servers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdvancedParameters/memcache_servers.html.twig"));

        // line 26
        echo "
";
        // line 27
        $this->displayBlock('perfs_memcache_servers', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_perfs_memcache_servers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_memcache_servers"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_memcache_servers"));

        // line 28
        echo "<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add server", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'widget');
        echo "

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Test Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</span></th>
                <th><span class=\"title_box\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IP Address", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Port", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Weight", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 63
            echo "                <tr id=\"row_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "weight", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 69
            $context["removeMsg"] = json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Do you really want to remove the server %serverIp%:%serverPort% ?", ["%serverIp%" => twig_get_attribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 69), "%serverPort%" => twig_get_attribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 69)], "Admin.Advparameters.Notification"));
            // line 70
            echo "                        <a class=\"btn btn-default\" href=\"\" 
                           onclick=\"app.removeServer(";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 71), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["removeMsg"]) || array_key_exists("removeMsg", $context) ? $context["removeMsg"] : (function () { throw new RuntimeError('Variable "removeMsg" does not exist.', 71, $this->source); })()), "html", null, true);
            echo ");\">
                          <i class=\"material-icons\">remove_circle</i> ";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove", [], "Admin.Actions"), "html", null, true);
            echo "
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@AdvancedParameters/memcache_servers.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 77,  163 => 72,  157 => 71,  154 => 70,  152 => 69,  147 => 67,  143 => 66,  139 => 65,  135 => 64,  130 => 63,  126 => 62,  118 => 57,  114 => 56,  110 => 55,  106 => 54,  93 => 44,  89 => 43,  82 => 39,  75 => 35,  66 => 28,  47 => 27,  44 => 26,);
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
{% trans_default_domain \"Admin.Advparameters.Feature\" %}

{% block perfs_memcache_servers %}
<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> {{ 'Add server'|trans }}</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    {{ form_widget(form) }}

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">{{ 'Add Server'|trans }}</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">{{ 'Test Server'|trans }}</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'ID'|trans({}, 'Admin.Global') }}</span></th>
                <th><span class=\"title_box\">{{ 'IP Address'|trans }}</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'Port'|trans }}</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'Weight'|trans }}</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            {% for server in servers %}
                <tr id=\"row_{{ server.id_memcached_server }}\">
                    <td>{{ server.id_memcached_server }}</td>
                    <td>{{ server.ip }}</td>
                    <td>{{ server.port }}</td>
                    <td>{{ server.weight }}</td>
                    <td>
                        {% set removeMsg = 'Do you really want to remove the server %serverIp%:%serverPort% ?'|trans({'%serverIp%': server.ip, '%serverPort%': server.port}, 'Admin.Advparameters.Notification')|json_encode|raw  %}
                        <a class=\"btn btn-default\" href=\"\" 
                           onclick=\"app.removeServer({{ server.id_memcached_server }}, {{ removeMsg }});\">
                          <i class=\"material-icons\">remove_circle</i> {{ 'Remove'|trans({}, 'Admin.Actions') }}
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "@AdvancedParameters/memcache_servers.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/memcache_servers.html.twig");
    }
}
