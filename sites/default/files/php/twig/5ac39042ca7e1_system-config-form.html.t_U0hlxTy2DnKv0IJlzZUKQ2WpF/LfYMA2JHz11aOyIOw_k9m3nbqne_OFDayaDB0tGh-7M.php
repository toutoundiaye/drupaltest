<?php

/* core/modules/system/templates/system-config-form.html.twig */
class __TwigTemplate_c81f277f4be523dd2f1a9bb6690847c1507e92fd50cb91a62133bf54903fee7f extends Twig_Template
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
        $__internal_cedcf4e2bb7470ebe8d1ba57afda6b07a9a2f5d2f8e331005332105e509f8140 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedcf4e2bb7470ebe8d1ba57afda6b07a9a2f5d2f8e331005332105e509f8140->enter($__internal_cedcf4e2bb7470ebe8d1ba57afda6b07a9a2f5d2f8e331005332105e509f8140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/system-config-form.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["form"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_cedcf4e2bb7470ebe8d1ba57afda6b07a9a2f5d2f8e331005332105e509f8140->leave($__internal_cedcf4e2bb7470ebe8d1ba57afda6b07a9a2f5d2f8e331005332105e509f8140_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/system-config-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,);
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
 * Default theme implementation for a system settings form.
 *
 * This template will be used when a system config form specifies 'config_form'
 * as its #theme callback.  Otherwise, by default, system config forms will be
 * themed by form.html.twig. This does not alter the appearance of a form at
 * all, but is provided as a convenience for themers.
 *
 * Available variables:
 * - form: The confirm form.
 *
 * @ingroup themeable
 */
#}
{{ form }}
", "core/modules/system/templates/system-config-form.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/core/modules/system/templates/system-config-form.html.twig");
    }
}
