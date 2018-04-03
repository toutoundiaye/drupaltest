<?php

/* themes/bootstrap/templates/input/datetime-wrapper.html.twig */
class __TwigTemplate_4d8b23c1807be5ae009513e1b8343a869d91dbc026aab324fcce95da2cfa46dd extends Twig_Template
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
        $__internal_c32365bc73b97b35a5f719b25e0e8e318ee3339a054890518e7602dcfd0cefb5 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32365bc73b97b35a5f719b25e0e8e318ee3339a054890518e7602dcfd0cefb5->enter($__internal_c32365bc73b97b35a5f719b25e0e8e318ee3339a054890518e7602dcfd0cefb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/datetime-wrapper.html.twig"));

        $tags = array("set" => 19, "if" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 19
        $context["title_classes"] = array(0 => "control-label", 1 => ((        // line 21
($context["required"] ?? null)) ? ("form-required") : ("")));
        // line 24
        if (($context["title"] ?? null)) {
            // line 25
            echo "  <label";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</label>
";
        }
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
";
        // line 28
        if (($context["description"] ?? null)) {
            // line 29
            echo "  <p class=\"help-block\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
            echo "</p>
";
        }
        
        $__internal_c32365bc73b97b35a5f719b25e0e8e318ee3339a054890518e7602dcfd0cefb5->leave($__internal_c32365bc73b97b35a5f719b25e0e8e318ee3339a054890518e7602dcfd0cefb5_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  63 => 28,  59 => 27,  51 => 25,  49 => 24,  47 => 21,  46 => 19,);
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
 * Default theme implementation of a datetime form wrapper.
 *
 * Available variables:
 * - content: The form element to be output, usually a datelist, or datetime.
 * - title: The title of the form element.
 * - title_attributes: HTML attributes for the title wrapper.
 * - description: Description text for the form element.
 * - required: An indicator for whether the associated form element is required.
 *
 * @ingroup templates
 *
 * @see template_preprocess_datetime_wrapper()
 */
#}
{%
  set title_classes = [
    'control-label',
    required ? 'form-required',
  ]
%}
{% if title %}
  <label{{ title_attributes.addClass(title_classes) }}>{{ title }}</label>
{% endif %}
{{ content }}
{% if description %}
  <p class=\"help-block\">{{ description }}</p>
{% endif %}
", "themes/bootstrap/templates/input/datetime-wrapper.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/themes/bootstrap/templates/input/datetime-wrapper.html.twig");
    }
}
