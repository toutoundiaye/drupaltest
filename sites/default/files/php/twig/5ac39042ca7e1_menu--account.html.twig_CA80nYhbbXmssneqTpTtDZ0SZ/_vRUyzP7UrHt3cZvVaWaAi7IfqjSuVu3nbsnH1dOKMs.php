<?php

/* themes/bootstrap/templates/menu/menu--account.html.twig */
class __TwigTemplate_6b265fdc8b1938a1bdcbeb98b8c02ec6bc98a6ac5b9c5f0d0f95a463e57aea66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("menu.html.twig", "themes/bootstrap/templates/menu/menu--account.html.twig", 18);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df387e62f5b606f6f451dd2b39f0dcd520409d0990cc9fa913843b10a8632716 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_df387e62f5b606f6f451dd2b39f0dcd520409d0990cc9fa913843b10a8632716->enter($__internal_df387e62f5b606f6f451dd2b39f0dcd520409d0990cc9fa913843b10a8632716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/menu/menu--account.html.twig"));

        $tags = array("set" => 20);
        $filters = array("clean_class" => 22);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
                array()
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

        // line 20
        $context["classes"] = array(0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 22
($context["menu_name"] ?? null))), 2 => "nav", 3 => "navbar-nav", 4 => "navbar-right");
        // line 18
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df387e62f5b606f6f451dd2b39f0dcd520409d0990cc9fa913843b10a8632716->leave($__internal_df387e62f5b606f6f451dd2b39f0dcd520409d0990cc9fa913843b10a8632716_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/menu/menu--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  52 => 22,  51 => 20,  11 => 18,);
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
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 */
#}
{% extends \"menu.html.twig\" %}
{%
  set classes = [
    'menu',
    'menu--' ~ menu_name|clean_class,
    'nav',
    'navbar-nav',
    'navbar-right',
  ]
%}
", "themes/bootstrap/templates/menu/menu--account.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/themes/bootstrap/templates/menu/menu--account.html.twig");
    }
}
