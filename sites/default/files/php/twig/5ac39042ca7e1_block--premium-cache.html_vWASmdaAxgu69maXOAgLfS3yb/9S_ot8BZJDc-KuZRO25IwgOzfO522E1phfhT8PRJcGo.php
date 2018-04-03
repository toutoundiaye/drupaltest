<?php

/* themes/custom/premiumTheme/templates/block/block--premium-cache.html.twig */
class __TwigTemplate_a7341be7cb9393b6ef74fa187ef2aadb00634aca125c2b858d81436d49a8bbb2 extends Twig_Template
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
        $__internal_a98c3a2daac9cd101da94c1c9752f213e8920065b92b02ef836aad45e79265bd = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98c3a2daac9cd101da94c1c9752f213e8920065b92b02ef836aad45e79265bd->enter($__internal_a98c3a2daac9cd101da94c1c9752f213e8920065b92b02ef836aad45e79265bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/premiumTheme/templates/block/block--premium-cache.html.twig"));

        $tags = array("set" => 49, "if" => 58, "block" => 65);
        $filters = array("clean_class" => 51);
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

        // line 49
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 51
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["plugin_id"] ?? null))), 3 => "clearfix");
        // line 56
        echo "<section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 58
        if (($context["label"] ?? null)) {
            // line 59
            echo "
     <h1";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "block-title"), "method"), "html", null, true));
            echo "><strong>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</strong></h1>

  ";
        }
        // line 63
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "</section>

";
        
        $__internal_a98c3a2daac9cd101da94c1c9752f213e8920065b92b02ef836aad45e79265bd->leave($__internal_a98c3a2daac9cd101da94c1c9752f213e8920065b92b02ef836aad45e79265bd_prof);

    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        $__internal_6adbb3bf4f054ce984c9ac36f6d8d3358125c3d44df04945e02edce6797a951a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adbb3bf4f054ce984c9ac36f6d8d3358125c3d44df04945e02edce6797a951a->enter($__internal_6adbb3bf4f054ce984c9ac36f6d8d3358125c3d44df04945e02edce6797a951a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 66
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    <div>
      <p style=\"color:red\">";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["message"] ?? null), "html", null, true));
        echo "</p>
      <img src=\"";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["urlImage"] ?? null), "html", null, true));
        echo "\">
  </div>
  ";
        
        $__internal_6adbb3bf4f054ce984c9ac36f6d8d3358125c3d44df04945e02edce6797a951a->leave($__internal_6adbb3bf4f054ce984c9ac36f6d8d3358125c3d44df04945e02edce6797a951a_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/premiumTheme/templates/block/block--premium-cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 69,  102 => 68,  96 => 66,  90 => 65,  81 => 72,  79 => 65,  73 => 63,  65 => 60,  62 => 59,  60 => 58,  56 => 57,  51 => 56,  49 => 52,  48 => 51,  47 => 49,);
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
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - \$block->subject: Block title.
 * - \$content: Block content.
 * - \$block->module: Module that generated the block.
 * - \$block->delta: An ID for the block, unique within each module.
 * - \$block->region: The block region embedding the current block.
 * - \$classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable \$classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., \"theming hook\".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - \$title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - \$title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - \$classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable \$classes.
 * - \$block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - \$zebra: Same output as \$block_zebra but independent of any block region.
 * - \$block_id: Counter dependent on each block region.
 * - \$id: Same output as \$block_id but independent of any block region.
 * - \$is_front: Flags true when presented in the front page.
 * - \$logged_in: Flags true when the current user is a logged-in member.
 * - \$is_admin: Flags true when the current user is an administrator.
 * - \$block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @ingroup templates
 *
 * @see bootstrap_preprocess_block()
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see bootstrap_process_block()
 * @see template_process()
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    'clearfix',
  ]
%}
<section{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}

     <h1{{ title_attributes.addClass('block-title') }}><strong>{{ label }}</strong></h1>

  {% endif %}
  {{ title_suffix }}

  {% block content %}
    {{ content }}
    <div>
      <p style=\"color:red\">{{ message }}</p>
      <img src=\"{{ urlImage }}\">
  </div>
  {% endblock %}
</section>

", "themes/custom/premiumTheme/templates/block/block--premium-cache.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/themes/custom/premiumTheme/templates/block/block--premium-cache.html.twig");
    }
}
