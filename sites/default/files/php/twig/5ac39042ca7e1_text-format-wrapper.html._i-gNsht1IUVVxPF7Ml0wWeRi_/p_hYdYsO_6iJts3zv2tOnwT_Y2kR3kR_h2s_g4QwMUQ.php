<?php

/* themes/bootstrap/templates/filter/text-format-wrapper.html.twig */
class __TwigTemplate_011fab834004e919e7686813cb773a4870cfed09702f8df5701a29fce78d80b7 extends Twig_Template
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
        $__internal_4a23a0a7f3c5fca35643fe20e123450ccfba3fc0380c6498005c866c84c8bd4e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a23a0a7f3c5fca35643fe20e123450ccfba3fc0380c6498005c866c84c8bd4e->enter($__internal_4a23a0a7f3c5fca35643fe20e123450ccfba3fc0380c6498005c866c84c8bd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/filter/text-format-wrapper.html.twig"));

        $tags = array("if" => 18, "set" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
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

        // line 16
        echo "<div class=\"js-text-format-wrapper text-format-wrapper js-form-item form-item\">
  ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
  ";
        // line 18
        if (($context["description"] ?? null)) {
            // line 19
            echo "    ";
            // line 20
            $context["classes"] = array(0 => "help-block", 1 => ((            // line 22
($context["aria_description"] ?? null)) ? ("description") : ("")));
            // line 25
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
            echo "</div>
  ";
        }
        // line 27
        echo "</div>
";
        
        $__internal_4a23a0a7f3c5fca35643fe20e123450ccfba3fc0380c6498005c866c84c8bd4e->leave($__internal_4a23a0a7f3c5fca35643fe20e123450ccfba3fc0380c6498005c866c84c8bd4e_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/filter/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  60 => 25,  58 => 22,  57 => 20,  55 => 19,  53 => 18,  49 => 17,  46 => 16,);
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
 * Theme override for a text format-enabled form element.
 *
 * Available variables:
 * - children: Text format element children.
 * - description: Text format element description.
 * - attributes: HTML attributes for the containing element.
 * - aria_description: Flag for whether or not an ARIA description has been
 *   added to the description container.
 *
 * @see template_preprocess_text_format_wrapper()
 */
#}
<div class=\"js-text-format-wrapper text-format-wrapper js-form-item form-item\">
  {{ children }}
  {% if description %}
    {%
      set classes = [
        'help-block',
        aria_description ? 'description',
      ]
    %}
    <div{{ attributes.addClass(classes) }}>{{ description }}</div>
  {% endif %}
</div>
", "themes/bootstrap/templates/filter/text-format-wrapper.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/themes/bootstrap/templates/filter/text-format-wrapper.html.twig");
    }
}
