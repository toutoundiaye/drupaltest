<?php

/* themes/bootstrap/templates/input/textarea.html.twig */
class __TwigTemplate_333a6ea3c29603dda636f5df8682ef120bee5491e95bb32ad5d511057e15cb22 extends Twig_Template
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
        $__internal_67426e08f183380c0916779f070018ff40f7ce62fda5514cd2dd5955a4fec2e6 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_67426e08f183380c0916779f070018ff40f7ce62fda5514cd2dd5955a4fec2e6->enter($__internal_67426e08f183380c0916779f070018ff40f7ce62fda5514cd2dd5955a4fec2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/textarea.html.twig"));

        $tags = array("set" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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
        $context["classes"] = array(0 => "form-textarea", 1 => "form-control", 2 => ((        // line 22
($context["resizable"] ?? null)) ? (("resize-" . ($context["resizable"] ?? null))) : ("")), 3 => ((        // line 23
($context["required"] ?? null)) ? ("required") : ("")));
        // line 26
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", array(0 => "form-textarea-wrapper"), "method"), "html", null, true));
        echo ">
  <textarea";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true));
        echo "</textarea>
</div>
";
        
        $__internal_67426e08f183380c0916779f070018ff40f7ce62fda5514cd2dd5955a4fec2e6->leave($__internal_67426e08f183380c0916779f070018ff40f7ce62fda5514cd2dd5955a4fec2e6_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 27,  50 => 26,  48 => 23,  47 => 22,  46 => 19,);
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
 * Bootstrap theme implementation for a 'textarea' #type form element.
 *
 * Available variables
 * - wrapper_attributes: A list of HTML attributes for the wrapper element.
 * - attributes: A list of HTML attributes for the textarea element.
 * - resizable: An indicator for whether the textarea is resizable.
 * - required: An indicator for whether the textarea is required.
 * - value: The textarea content.
 *
 * @ingroup templates
 *
 * @see template_preprocess_textarea()
 */
#}
{%
  set classes = [
    'form-textarea',
    'form-control',
    resizable ? 'resize-' ~ resizable,
    required ? 'required',
  ]
%}
<div{{ wrapper_attributes.addClass('form-textarea-wrapper') }}>
  <textarea{{ attributes.addClass(classes) }}>{{ value }}</textarea>
</div>
", "themes/bootstrap/templates/input/textarea.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/themes/bootstrap/templates/input/textarea.html.twig");
    }
}
