<?php

/* {# inline_template_start #}{{ value|nl2br }} */
class __TwigTemplate_d3e79bd6029fd1ab1d50dd676e1f6555a2880e7bdc0733b6b806b540b4a45fd4 extends Twig_Template
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
        $__internal_f2cdb5ecb9c8d02c08ce0178932dba82ff1db81b5e608ea1f2f9be64ca4bc01e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cdb5ecb9c8d02c08ce0178932dba82ff1db81b5e608ea1f2f9be64ca4bc01e->enter($__internal_f2cdb5ecb9c8d02c08ce0178932dba82ff1db81b5e608ea1f2f9be64ca4bc01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{{ value|nl2br }}"));

        $tags = array();
        $filters = array("nl2br" => 1);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('nl2br'),
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

        // line 1
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(nl2br($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true)));
        
        $__internal_f2cdb5ecb9c8d02c08ce0178932dba82ff1db81b5e608ea1f2f9be64ca4bc01e->leave($__internal_f2cdb5ecb9c8d02c08ce0178932dba82ff1db81b5e608ea1f2f9be64ca4bc01e_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ value|nl2br }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}{{ value|nl2br }}", "{# inline_template_start #}{{ value|nl2br }}", "");
    }
}
