<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_3291fd8322decf5705686ab0df025e144b6d71407a2d05ca7b651dfd0905b0ab extends Twig_Template
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
        $__internal_0039a2eb58f0dd4c48cebac7fc58f687637c2e011aa2349480d4d299dd46c428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0039a2eb58f0dd4c48cebac7fc58f687637c2e011aa2349480d4d299dd46c428->enter($__internal_0039a2eb58f0dd4c48cebac7fc58f687637c2e011aa2349480d4d299dd46c428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ea16ecb805b3c3648a566aa17db246bf32e6fa7a8c9a9700acffce0d19187cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea16ecb805b3c3648a566aa17db246bf32e6fa7a8c9a9700acffce0d19187cf9->enter($__internal_ea16ecb805b3c3648a566aa17db246bf32e6fa7a8c9a9700acffce0d19187cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_0039a2eb58f0dd4c48cebac7fc58f687637c2e011aa2349480d4d299dd46c428->leave($__internal_0039a2eb58f0dd4c48cebac7fc58f687637c2e011aa2349480d4d299dd46c428_prof);

        
        $__internal_ea16ecb805b3c3648a566aa17db246bf32e6fa7a8c9a9700acffce0d19187cf9->leave($__internal_ea16ecb805b3c3648a566aa17db246bf32e6fa7a8c9a9700acffce0d19187cf9_prof);

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
