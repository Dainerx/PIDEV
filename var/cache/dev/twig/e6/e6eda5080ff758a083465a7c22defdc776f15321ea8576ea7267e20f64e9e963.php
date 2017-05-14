<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9b0827aa786bf4dbd5677cb1692cd08befd7b571108685a89f138bc563570eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec855367d3527ea9aa35fd98749aea5afafa89848e8e0e2296bb064756979ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec855367d3527ea9aa35fd98749aea5afafa89848e8e0e2296bb064756979ef3->enter($__internal_ec855367d3527ea9aa35fd98749aea5afafa89848e8e0e2296bb064756979ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0e1afa1adc4bbd682a3db071ccdb9f5207412d3b4df583f10a1b0d2d76baf4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1afa1adc4bbd682a3db071ccdb9f5207412d3b4df583f10a1b0d2d76baf4c5->enter($__internal_0e1afa1adc4bbd682a3db071ccdb9f5207412d3b4df583f10a1b0d2d76baf4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec855367d3527ea9aa35fd98749aea5afafa89848e8e0e2296bb064756979ef3->leave($__internal_ec855367d3527ea9aa35fd98749aea5afafa89848e8e0e2296bb064756979ef3_prof);

        
        $__internal_0e1afa1adc4bbd682a3db071ccdb9f5207412d3b4df583f10a1b0d2d76baf4c5->leave($__internal_0e1afa1adc4bbd682a3db071ccdb9f5207412d3b4df583f10a1b0d2d76baf4c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e9bddf1ba7b44ce4fbfe5c892e9d2a4cf7a4f8373a21f5b46ce37c4e2749258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9bddf1ba7b44ce4fbfe5c892e9d2a4cf7a4f8373a21f5b46ce37c4e2749258->enter($__internal_4e9bddf1ba7b44ce4fbfe5c892e9d2a4cf7a4f8373a21f5b46ce37c4e2749258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d33cbe9bb0397ba185a8f214c698e33550319d1d6bda8c69c37cdac5b6a46ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33cbe9bb0397ba185a8f214c698e33550319d1d6bda8c69c37cdac5b6a46ed0->enter($__internal_d33cbe9bb0397ba185a8f214c698e33550319d1d6bda8c69c37cdac5b6a46ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d33cbe9bb0397ba185a8f214c698e33550319d1d6bda8c69c37cdac5b6a46ed0->leave($__internal_d33cbe9bb0397ba185a8f214c698e33550319d1d6bda8c69c37cdac5b6a46ed0_prof);

        
        $__internal_4e9bddf1ba7b44ce4fbfe5c892e9d2a4cf7a4f8373a21f5b46ce37c4e2749258->leave($__internal_4e9bddf1ba7b44ce4fbfe5c892e9d2a4cf7a4f8373a21f5b46ce37c4e2749258_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62cdcdfb8b9edb32e75c20c00b5c1705eca6994dfe1305ae088982d5ed2a29f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62cdcdfb8b9edb32e75c20c00b5c1705eca6994dfe1305ae088982d5ed2a29f8->enter($__internal_62cdcdfb8b9edb32e75c20c00b5c1705eca6994dfe1305ae088982d5ed2a29f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8bcdbaaf24e3be0bd282ddf7e59f8da641da63ae20b2a26eaadacf9ade28971d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcdbaaf24e3be0bd282ddf7e59f8da641da63ae20b2a26eaadacf9ade28971d->enter($__internal_8bcdbaaf24e3be0bd282ddf7e59f8da641da63ae20b2a26eaadacf9ade28971d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8bcdbaaf24e3be0bd282ddf7e59f8da641da63ae20b2a26eaadacf9ade28971d->leave($__internal_8bcdbaaf24e3be0bd282ddf7e59f8da641da63ae20b2a26eaadacf9ade28971d_prof);

        
        $__internal_62cdcdfb8b9edb32e75c20c00b5c1705eca6994dfe1305ae088982d5ed2a29f8->leave($__internal_62cdcdfb8b9edb32e75c20c00b5c1705eca6994dfe1305ae088982d5ed2a29f8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cee52fa3ecf6687a85fa1677d950cc63e2664c6ed6a552381ac7f4f2aed6b84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee52fa3ecf6687a85fa1677d950cc63e2664c6ed6a552381ac7f4f2aed6b84c->enter($__internal_cee52fa3ecf6687a85fa1677d950cc63e2664c6ed6a552381ac7f4f2aed6b84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2102f5553223802041691cb9f0af9d353dafd38394df818d029e120ce639d5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2102f5553223802041691cb9f0af9d353dafd38394df818d029e120ce639d5ae->enter($__internal_2102f5553223802041691cb9f0af9d353dafd38394df818d029e120ce639d5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2102f5553223802041691cb9f0af9d353dafd38394df818d029e120ce639d5ae->leave($__internal_2102f5553223802041691cb9f0af9d353dafd38394df818d029e120ce639d5ae_prof);

        
        $__internal_cee52fa3ecf6687a85fa1677d950cc63e2664c6ed6a552381ac7f4f2aed6b84c->leave($__internal_cee52fa3ecf6687a85fa1677d950cc63e2664c6ed6a552381ac7f4f2aed6b84c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/PIDEVS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
