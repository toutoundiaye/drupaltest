<?php

/* themes/bootstrap/templates/input/input--form-control.html.twig */
class __TwigTemplate_53523b8a12da8fe5377fb0af1da010b96addba1a1f342a880c364919729b6329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/bootstrap/templates/input/input--form-control.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67577d69f2ba331d74c5d2c8c4ba2f00ef9b4db91783cadcdaf355ba12596c80 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_67577d69f2ba331d74c5d2c8c4ba2f00ef9b4db91783cadcdaf355ba12596c80->enter($__internal_67577d69f2ba331d74c5d2c8c4ba2f00ef9b4db91783cadcdaf355ba12596c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/input--form-control.html.twig"));

        $tags = array("spaceless" => 23, "set" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'set'),
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

        // line 23
        ob_start();
        // line 25
        $context["classes"] = array(0 => "form-control");
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67577d69f2ba331d74c5d2c8c4ba2f00ef9b4db91783cadcdaf355ba12596c80->leave($__internal_67577d69f2ba331d74c5d2c8c4ba2f00ef9b4db91783cadcdaf355ba12596c80_prof);

    }

    // line 29
    public function block_input($context, array $blocks = array())
    {
        $__internal_1593aaa8f9c9d634d17a67645260164cbbd8246a55c9bb58580c666a51ae5bc4 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1593aaa8f9c9d634d17a67645260164cbbd8246a55c9bb58580c666a51ae5bc4->enter($__internal_1593aaa8f9c9d634d17a67645260164cbbd8246a55c9bb58580c666a51ae5bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        // line 30
        echo "    <input";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " />
  ";
        
        $__internal_1593aaa8f9c9d634d17a67645260164cbbd8246a55c9bb58580c666a51ae5bc4->leave($__internal_1593aaa8f9c9d634d17a67645260164cbbd8246a55c9bb58580c666a51ae5bc4_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/input--form-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 30,  64 => 29,  57 => 1,  54 => 25,  52 => 23,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"input.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for an 'input__textfield' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 * - icon: An icon.
 * - input_group: Flag to display as an input group.
 * - icon_position: Where an icon should be displayed.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 * - type: The type of input.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\Input
 * @see template_preprocess_input()
 */
#}
{% spaceless %}
  {%
    set classes = [
      'form-control',
    ]
  %}
  {% block input %}
    <input{{ attributes.addClass(classes) }} />
  {% endblock %}
{% endspaceless %}
", "themes/bootstrap/templates/input/input--form-control.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/themes/bootstrap/templates/input/input--form-control.html.twig");
    }
}
