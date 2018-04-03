<?php

/* themes/custom/premiumTheme/templates/field/field--node--field-promotion.html.twig */
class __TwigTemplate_ffe04dde49fdf88d4a08c23261b1f88929e1baebea8acbecad57fe30e4883c66 extends Twig_Template
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
        $__internal_6f1c32b015d8f8bb53f982a2f4543bc26bfa8956bc11696a2e23f9162077b570 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1c32b015d8f8bb53f982a2f4543bc26bfa8956bc11696a2e23f9162077b570->enter($__internal_6f1c32b015d8f8bb53f982a2f4543bc26bfa8956bc11696a2e23f9162077b570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/premiumTheme/templates/field/field--node--field-promotion.html.twig"));

        $tags = array("set" => 2, "if" => 19, "for" => 25);
        $filters = array("clean_class" => 4, "raw" => 21);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'raw'),
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

        // line 2
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 4
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 5
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 6
($context["label_display"] ?? null)));
        // line 10
        $context["title_classes"] = array(0 => "field--label", 1 => (((        // line 12
($context["label_display"] ?? null) == "visually_hidden")) ? ("sr-only") : ("")));
        // line 15
        echo "
  <div";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <div";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</div>
    ";
        // line 19
        echo "    ";
        if (($context["promotion"] ?? null)) {
            // line 20
            echo "     ";
            // line 21
            echo "     ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["promotion"] ?? null)));
            echo "
    ";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "      ";
            // line 25
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "        <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field--item"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        // line 29
        echo "  </div>

";
        
        $__internal_6f1c32b015d8f8bb53f982a2f4543bc26bfa8956bc11696a2e23f9162077b570->leave($__internal_6f1c32b015d8f8bb53f982a2f4543bc26bfa8956bc11696a2e23f9162077b570_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/premiumTheme/templates/field/field--node--field-promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  98 => 28,  87 => 26,  82 => 25,  80 => 24,  77 => 23,  72 => 21,  70 => 20,  67 => 19,  61 => 17,  57 => 16,  54 => 15,  52 => 12,  51 => 10,  49 => 6,  48 => 5,  47 => 4,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
  ]
%}
{%
  set title_classes = [
    'field--label',
    label_display == 'visually_hidden' ? 'sr-only',
  ]
%}

  <div{{ attributes.addClass(classes) }}>
    <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
    {# On vérifie qu'on a une promo #}
    {% if (promotion) %}
     {# Affiche la promo #}
     {{ promotion | raw }}
    {# On a pas de promo #}
    {% else %}
      {# Affiche le contenu du champ #}
      {% for item in items %}
        <div{{ item.attributes.addClass('field--item') }}>{{ item.content }}</div>
      {% endfor %}
    {% endif %}
  </div>

", "themes/custom/premiumTheme/templates/field/field--node--field-promotion.html.twig", "/home/ndiaye/Desktop/formationDawan/drupaltest/themes/custom/premiumTheme/templates/field/field--node--field-promotion.html.twig");
    }
}
