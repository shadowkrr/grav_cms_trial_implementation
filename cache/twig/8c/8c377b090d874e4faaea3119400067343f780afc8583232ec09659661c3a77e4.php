<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/navigation.html.twig */
class __TwigTemplate_3a6640815f87ad28c90ff5888a3e2bc21ee8ccc7e15a855aead8adc4695f7673 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["hide_home_menu_link"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("hidehomemenulink");
        // line 2
        echo "
";
        // line 34
        echo "
<ul ";
        // line 35
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 36
        $context["macros"] = $this;
        // line 37
        echo "    ";
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null), ($context["hide_home_menu_link"] ?? null), ($context["home_alias"] ?? null));
        echo "
    ";
        // line 39
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("displaycustommenus.enabled")) {
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("menu"));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 41
                echo "            <li>
                <a href=\"";
                // line 42
                echo $this->getAttribute($context["mitem"], "url", []);
                echo "\" target=\"";
                echo $this->getAttribute($context["mitem"], "target", []);
                echo "\">
                    ";
                // line 43
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    // line 44
                    echo "                        <i class=\"fa fa-";
                    echo $this->getAttribute($context["mitem"], "icon", []);
                    echo "\"></i>
                    ";
                }
                // line 46
                echo "                    ";
                echo $this->getAttribute($context["mitem"], "text", []);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    ";
        }
        // line 51
        echo "    ";
        // line 52
        echo "    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "menu") || ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == ($context["empty"] ?? null)))) {
            // line 53
            echo "        <li>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/navigation.html.twig", 53)->display($context);
            echo "</li>
    ";
        }
        // line 55
        echo "</ul>
";
    }

    // line 3
    public function getnav_loop($__page__ = null, $__hide_home_menu_link__ = null, $__home_alias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "hide_home_menu_link" => $__hide_home_menu_link__,
            "home_alias" => $__home_alias__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["macros"] = $this;
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 6
                echo "        ";
                // line 7
                echo "        ";
                if ( !(($context["hide_home_menu_link"] ?? null) && $this->getAttribute($context["p"], "home", []))) {
                    // line 8
                    echo "            ";
                    $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                    // line 9
                    echo "            ";
                    if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("dropdown.enabled") && ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0))) {
                        // line 10
                        echo "                <li>
                    <a href=\"";
                        // line 11
                        echo $this->getAttribute($context["p"], "url", []);
                        echo "\" class=\"";
                        echo ($context["active_page"] ?? null);
                        echo "\">
                        ";
                        // line 12
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                            // line 13
                            echo "                            <i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                            echo "\"></i>
                        ";
                        }
                        // line 15
                        echo "                        ";
                        echo $this->getAttribute($context["p"], "menu", []);
                        echo "
                    </a>
                    <ul>
                        ";
                        // line 18
                        echo $context["macros"]->getnav_loop($context["p"]);
                        echo "
                    </ul>
                </li>
            ";
                    } else {
                        // line 22
                        echo "                <li>
                    <a href=\"";
                        // line 23
                        echo $this->getAttribute($context["p"], "url", []);
                        echo "\" class=\"";
                        echo ($context["active_page"] ?? null);
                        echo "\">
                        ";
                        // line 24
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                            // line 25
                            echo "                            <i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                            echo "\"></i>
                        ";
                        }
                        // line 27
                        echo "                        ";
                        echo $this->getAttribute($context["p"], "menu", []);
                        echo "
                    </a>
                </li>
            ";
                    }
                    // line 31
                    echo "        ";
                }
                // line 32
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 32,  193 => 31,  185 => 27,  179 => 25,  177 => 24,  171 => 23,  168 => 22,  161 => 18,  154 => 15,  148 => 13,  146 => 12,  140 => 11,  137 => 10,  134 => 9,  131 => 8,  128 => 7,  126 => 6,  121 => 5,  118 => 4,  104 => 3,  99 => 55,  93 => 53,  90 => 52,  88 => 51,  85 => 50,  74 => 46,  68 => 44,  66 => 43,  60 => 42,  57 => 41,  52 => 40,  49 => 39,  44 => 37,  42 => 36,  38 => 35,  35 => 34,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set hide_home_menu_link = theme_var('hidehomemenulink') %}

{% macro nav_loop(page, hide_home_menu_link, home_alias) %}
    {% import _self as macros %}
    {% for p in page.children.visible %}
        {# Supress home menu link - hibbittsdesign.org #}
        {% if not((hide_home_menu_link) and p.home) %}
            {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
            {% if theme_var('dropdown.enabled') and p.children.visible.count > 0 %}
                <li>
                    <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                        {% if p.header.icon %}
                            <i class=\"fa fa-{{ p.header.icon }}\"></i>
                        {% endif %}
                        {{ p.menu }}
                    </a>
                    <ul>
                        {{ macros.nav_loop(p) }}
                    </ul>
                </li>
            {% else %}
                <li>
                    <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                        {% if p.header.icon %}
                            <i class=\"fa fa-{{ p.header.icon }}\"></i>
                        {% endif %}
                        {{ p.menu }}
                    </a>
                </li>
            {% endif %}
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {% import _self as macros %}
    {{ macros.nav_loop(pages, hide_home_menu_link, home_alias ) }}
    {# custom menu items check and display - hibbittsdesign.org #}
    {% if theme_var('displaycustommenus.enabled') %}
        {% for mitem in theme_var('menu') %}
            <li>
                <a href=\"{{ mitem.url }}\" target=\"{{ mitem.target }}\">
                    {% if mitem.icon %}
                        <i class=\"fa fa-{{ mitem.icon }}\"></i>
                    {% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {# check to display git sync link in menu - hibbittsdesign.org #}
    {% if theme_var('display_of_git_sync_repo_link') == 'menu' or theme_var('display_of_git_sync_repo_link') == empty %}
        <li>{% include 'partials/git_sync_repo_link.html.twig' %}</li>
    {% endif %}
</ul>
", "partials/navigation.html.twig", "/var/www/grav-admin/user/themes/quark-open-publishing/templates/partials/navigation.html.twig");
    }
}
