<?php

/* core/modules/toolbar/templates/menu--toolbar.html.twig */
class __TwigTemplate_ad44d14741f71f19d09aed454b5b4f480218b010a496154b92a0c9b776380a3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a20f0d4b6d2c386f8b11e7a01b337d78db25cb3e79957ad3a03ac63e948c008a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20f0d4b6d2c386f8b11e7a01b337d78db25cb3e79957ad3a03ac63e948c008a->enter($__internal_a20f0d4b6d2c386f8b11e7a01b337d78db25cb3e79957ad3a03ac63e948c008a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/toolbar/templates/menu--toolbar.html.twig"));

        $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 39, "set" => 41);
        $filters = array();
        $functions = array("link" => 49);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "

";
        
        $__internal_a20f0d4b6d2c386f8b11e7a01b337d78db25cb3e79957ad3a03ac63e948c008a->leave($__internal_a20f0d4b6d2c386f8b11e7a01b337d78db25cb3e79957ad3a03ac63e948c008a_prof);

    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_008ae14c5ea9652aa83e3ceb1f45fc09e6544eecd97b773eab989c118504928e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
            $__internal_008ae14c5ea9652aa83e3ceb1f45fc09e6544eecd97b773eab989c118504928e->enter($__internal_008ae14c5ea9652aa83e3ceb1f45fc09e6544eecd97b773eab989c118504928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "toolbar-menu"), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"toolbar-menu\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    // line 41
                    $context["classes"] = array(0 => "menu-item", 1 => (($this->getAttribute(                    // line 43
$context["item"], "is_expanded", array())) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 44
$context["item"], "is_collapsed", array())) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 45
$context["item"], "in_active_trail", array())) ? ("menu-item--active-trail") : ("")));
                    // line 48
                    echo "      <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                    echo ">
        ";
                    // line 49
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
        ";
                    // line 50
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 51
                        echo "          ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                        echo "
        ";
                    }
                    // line 53
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "    </ul>
  ";
            }
            
            $__internal_008ae14c5ea9652aa83e3ceb1f45fc09e6544eecd97b773eab989c118504928e->leave($__internal_008ae14c5ea9652aa83e3ceb1f45fc09e6544eecd97b773eab989c118504928e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "core/modules/toolbar/templates/menu--toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 55,  126 => 53,  120 => 51,  118 => 50,  114 => 49,  109 => 48,  107 => 45,  106 => 44,  105 => 43,  104 => 41,  102 => 40,  97 => 39,  93 => 37,  87 => 35,  84 => 34,  81 => 33,  78 => 32,  61 => 31,  51 => 29,  48 => 24,  46 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a toolbar menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass('toolbar-menu') }}>
    {% else %}
      <ul class=\"toolbar-menu\">
    {% endif %}
    {% for item in items %}
      {%
        set classes = [
          'menu-item',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
        ]
      %}
      <li{{ item.attributes.addClass(classes) }}>
        {{ link(item.title, item.url) }}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "core/modules/toolbar/templates/menu--toolbar.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/core/modules/toolbar/templates/menu--toolbar.html.twig");
    }
}
