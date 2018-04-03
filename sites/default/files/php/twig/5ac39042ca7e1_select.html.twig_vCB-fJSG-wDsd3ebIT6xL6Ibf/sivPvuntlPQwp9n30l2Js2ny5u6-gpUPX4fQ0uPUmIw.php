<?php

/* themes/bootstrap/templates/input/select.html.twig */
class __TwigTemplate_6c165f958b6e7adb62a6d2c999807fcc0b8c23dfbf514a4e72883db39e8fd2cc extends Twig_Template
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
        $__internal_61c7df1d627bdae180d22a02412a3aa0060e99a0be70133caa2b4f2028bbba6e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c7df1d627bdae180d22a02412a3aa0060e99a0be70133caa2b4f2028bbba6e->enter($__internal_61c7df1d627bdae180d22a02412a3aa0060e99a0be70133caa2b4f2028bbba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/select.html.twig"));

        $tags = array("spaceless" => 18, "if" => 19, "set" => 34, "for" => 36);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'if', 'set', 'for'),
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

        // line 18
        ob_start();
        // line 19
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 20
            echo "    <div class=\"input-group\">
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if (($context["prefix"] ?? null)) {
            // line 24
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 26
        echo "
  ";
        // line 31
        echo "  ";
        if ( !$this->getAttribute(($context["attributes"] ?? null), "offsetExists", array(0 => "multiple"), "method")) {
            // line 32
            echo "    <div class=\"select-wrapper\">
  ";
        }
        // line 34
        echo "    ";
        $context["classes"] = array(0 => "form-control");
        // line 35
        echo "    <select";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 37
            echo "        ";
            if (($this->getAttribute($context["option"], "type", array()) == "optgroup")) {
                // line 38
                echo "          <optgroup label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["option"], "label", array()), "html", null, true));
                echo "\">
            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 40
                    echo "              <option
                value=\"";
                    // line 41
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["sub_option"], "value", array()), "html", null, true));
                    echo "\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["sub_option"], "selected", array())) ? (" selected=\"selected\"") : (""))));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["sub_option"], "label", array()), "html", null, true));
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "          </optgroup>
        ";
            } elseif (($this->getAttribute(            // line 44
$context["option"], "type", array()) == "option")) {
                // line 45
                echo "          <option
            value=\"";
                // line 46
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["option"], "selected", array())) ? (" selected=\"selected\"") : (""))));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["option"], "label", array()), "html", null, true));
                echo "</option>
        ";
            }
            // line 48
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </select>
  ";
        // line 50
        if ( !$this->getAttribute(($context["attributes"] ?? null), "offsetExists", array(0 => "multiple"), "method")) {
            // line 51
            echo "    </div>
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if (($context["suffix"] ?? null)) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 58
        if (($context["input_group"] ?? null)) {
            // line 59
            echo "    </div>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_61c7df1d627bdae180d22a02412a3aa0060e99a0be70133caa2b4f2028bbba6e->leave($__internal_61c7df1d627bdae180d22a02412a3aa0060e99a0be70133caa2b4f2028bbba6e_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 59,  161 => 58,  158 => 57,  152 => 55,  150 => 54,  147 => 53,  143 => 51,  141 => 50,  138 => 49,  132 => 48,  123 => 46,  120 => 45,  118 => 44,  115 => 43,  103 => 41,  100 => 40,  96 => 39,  91 => 38,  88 => 37,  84 => 36,  79 => 35,  76 => 34,  72 => 32,  69 => 31,  66 => 26,  60 => 24,  58 => 23,  55 => 22,  51 => 20,  48 => 19,  46 => 18,);
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
 * Theme override for a select element.
 *
 * Available variables:
 * - attributes: HTML attributes for the select tag.
 * - input_group: Flag to display as an input group.
 * - options: The option element children.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 *
 * @ingroup templates
 *
 * @see template_preprocess_select()
 */
#}
{% spaceless %}
  {% if input_group %}
    <div class=\"input-group\">
  {% endif %}

  {% if prefix %}
    {{ prefix }}
  {% endif %}

  {# Browsers do not recognize pseudo :after selectors, we must create a wrapper
   # around the select element to style it properly.
   # @see http://stackoverflow.com/q/21103542
   #}
  {% if not attributes.offsetExists('multiple') %}
    <div class=\"select-wrapper\">
  {% endif %}
    {% set classes = ['form-control'] %}
    <select{{ attributes.addClass(classes) }}>
      {% for option in options %}
        {% if option.type == 'optgroup' %}
          <optgroup label=\"{{ option.label }}\">
            {% for sub_option in option.options %}
              <option
                value=\"{{ sub_option.value }}\"{{ sub_option.selected ? ' selected=\"selected\"' }}>{{ sub_option.label }}</option>
            {% endfor %}
          </optgroup>
        {% elseif option.type == 'option' %}
          <option
            value=\"{{ option.value }}\"{{ option.selected ? ' selected=\"selected\"' }}>{{ option.label }}</option>
        {% endif %}
      {% endfor %}
    </select>
  {% if not attributes.offsetExists('multiple') %}
    </div>
  {% endif %}

  {% if suffix %}
    {{ suffix }}
  {% endif %}

  {% if input_group %}
    </div>
  {% endif %}
{% endspaceless %}
", "themes/bootstrap/templates/input/select.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/themes/bootstrap/templates/input/select.html.twig");
    }
}
