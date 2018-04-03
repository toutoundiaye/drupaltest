<?php

/* themes/bootstrap/templates/input/datetime-form.html.twig */
class __TwigTemplate_8fc88353f021522eb2dd18cb621f1744c5799af781af1fbda71a0479c45b4435 extends Twig_Template
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
        $__internal_29b5acb0b83e5c3f327fa458c8cddd77327b1e0344f46503f79f17e6b6e50c04 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b5acb0b83e5c3f327fa458c8cddd77327b1e0344f46503f79f17e6b6e50c04->enter($__internal_29b5acb0b83e5c3f327fa458c8cddd77327b1e0344f46503f79f17e6b6e50c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/datetime-form.html.twig"));

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

        // line 15
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "container-inline", 1 => "form-inline"), "method"), "html", null, true));
        echo ">
  ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
</div>
";
        
        $__internal_29b5acb0b83e5c3f327fa458c8cddd77327b1e0344f46503f79f17e6b6e50c04->leave($__internal_29b5acb0b83e5c3f327fa458c8cddd77327b1e0344f46503f79f17e6b6e50c04_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/datetime-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  46 => 15,);
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
 * Default theme implementation of a datetime form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the datetime form element.
 * - content: The datelist form element to be output.
 *
 * @see template_preprocess_datetime_form()
 *
 * @ingroup templates
 */
#}
<div{{ attributes.addClass('container-inline', 'form-inline') }}>
  {{ content }}
</div>
", "themes/bootstrap/templates/input/datetime-form.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/themes/bootstrap/templates/input/datetime-form.html.twig");
    }
}
