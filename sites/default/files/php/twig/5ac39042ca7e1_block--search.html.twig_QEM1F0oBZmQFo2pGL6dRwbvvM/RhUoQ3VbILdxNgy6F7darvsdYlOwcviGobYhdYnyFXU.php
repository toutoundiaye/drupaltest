<?php

/* themes/bootstrap/templates/block/block--search.html.twig */
class __TwigTemplate_d5b8bdec8abe4079f5397488da5cbe4c72815c87d8a4b0bc49315653bc4a61e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a68bac592ffe41a93bc649ad18ffe4e9abfb5b8753f03b8ec9fd917827e4f87c = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68bac592ffe41a93bc649ad18ffe4e9abfb5b8753f03b8ec9fd917827e4f87c->enter($__internal_a68bac592ffe41a93bc649ad18ffe4e9abfb5b8753f03b8ec9fd917827e4f87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--search.html.twig"));

        $tags = array("set" => 38, "if" => 46, "block" => 50);
        $filters = array("clean_class" => 40);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 38
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 40
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 41
($context["plugin_id"] ?? null))));
        // line 44
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 46
        if (($context["label"] ?? null)) {
            // line 47
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "visually-hidden"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 49
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "</div>
";
        
        $__internal_a68bac592ffe41a93bc649ad18ffe4e9abfb5b8753f03b8ec9fd917827e4f87c->leave($__internal_a68bac592ffe41a93bc649ad18ffe4e9abfb5b8753f03b8ec9fd917827e4f87c_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_f314ce23131d55fe326fd80975106c28a394b3715e846ed12cf38757b67a4f95 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f314ce23131d55fe326fd80975106c28a394b3715e846ed12cf38757b67a4f95->enter($__internal_f314ce23131d55fe326fd80975106c28a394b3715e846ed12cf38757b67a4f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
        
        $__internal_f314ce23131d55fe326fd80975106c28a394b3715e846ed12cf38757b67a4f95->leave($__internal_f314ce23131d55fe326fd80975106c28a394b3715e846ed12cf38757b67a4f95_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 51,  85 => 50,  77 => 53,  75 => 50,  70 => 49,  62 => 47,  60 => 46,  56 => 45,  51 => 44,  49 => 41,  48 => 40,  47 => 38,);
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
 * Default theme implementation to display a search block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - module: The module that provided this block plugin.
 *   - cache: The cache settings.
 *   - Block plugin specific settings will also be stored here.
 * - block - The full block entity.
 *   - label_hidden: The hidden block title value if the block was
 *     configured to hide the title ('label' is empty in this case).
 *   - module: The module that generated the block.
 *   - delta: An ID for the block, unique within each module.
 *   - region: The block region embedding the current block.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @ingroup templates
 *
 * @see template_preprocess_block()
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes.addClass('visually-hidden') }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    {{ content }}
  {% endblock %}
</div>
", "themes/bootstrap/templates/block/block--search.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/themes/bootstrap/templates/block/block--search.html.twig");
    }
}
