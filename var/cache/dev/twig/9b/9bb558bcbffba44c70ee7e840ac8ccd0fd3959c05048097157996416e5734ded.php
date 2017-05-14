<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_494470e93b8be4f4bb72d88392f823e1a9fa9dd137dcd124707efd00d9640a89 extends Twig_Template
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
        $__internal_b858f94ac25c5822b159860e63101c47e069836e418732a6692f3fb9651cd3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b858f94ac25c5822b159860e63101c47e069836e418732a6692f3fb9651cd3a5->enter($__internal_b858f94ac25c5822b159860e63101c47e069836e418732a6692f3fb9651cd3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_219f2302b20d84b4389fab72c8b4debfbf2f6d1aea7fc78c64fa93cc2b8e1810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219f2302b20d84b4389fab72c8b4debfbf2f6d1aea7fc78c64fa93cc2b8e1810->enter($__internal_219f2302b20d84b4389fab72c8b4debfbf2f6d1aea7fc78c64fa93cc2b8e1810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_b858f94ac25c5822b159860e63101c47e069836e418732a6692f3fb9651cd3a5->leave($__internal_b858f94ac25c5822b159860e63101c47e069836e418732a6692f3fb9651cd3a5_prof);

        
        $__internal_219f2302b20d84b4389fab72c8b4debfbf2f6d1aea7fc78c64fa93cc2b8e1810->leave($__internal_219f2302b20d84b4389fab72c8b4debfbf2f6d1aea7fc78c64fa93cc2b8e1810_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/PIDEVS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
