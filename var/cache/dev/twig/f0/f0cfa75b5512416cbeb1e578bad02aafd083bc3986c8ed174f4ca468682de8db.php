<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_64bae478fa38c18e8a645709de2ce1fbd5dd8078390584399b384acae991dcef extends Twig_Template
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
        $__internal_55d6fe662cbe639a412ad502d390efa1cdbc19b5c92b3842fb9ba04fecdd123f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d6fe662cbe639a412ad502d390efa1cdbc19b5c92b3842fb9ba04fecdd123f->enter($__internal_55d6fe662cbe639a412ad502d390efa1cdbc19b5c92b3842fb9ba04fecdd123f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eeb93f2e24754772a79167153ea0e523dbaed1e38665c19e0164699d53764c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb93f2e24754772a79167153ea0e523dbaed1e38665c19e0164699d53764c5d->enter($__internal_eeb93f2e24754772a79167153ea0e523dbaed1e38665c19e0164699d53764c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d6fe662cbe639a412ad502d390efa1cdbc19b5c92b3842fb9ba04fecdd123f->leave($__internal_55d6fe662cbe639a412ad502d390efa1cdbc19b5c92b3842fb9ba04fecdd123f_prof);

        
        $__internal_eeb93f2e24754772a79167153ea0e523dbaed1e38665c19e0164699d53764c5d->leave($__internal_eeb93f2e24754772a79167153ea0e523dbaed1e38665c19e0164699d53764c5d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef64d6e0418847ed84752ff3aad3af88edfa2b89f7e89ff48255542e22c03a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef64d6e0418847ed84752ff3aad3af88edfa2b89f7e89ff48255542e22c03a0e->enter($__internal_ef64d6e0418847ed84752ff3aad3af88edfa2b89f7e89ff48255542e22c03a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffad357a9a63dbd525d76cbd181ae8a703e138fd8d98b8c89922f4e77d2eddb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffad357a9a63dbd525d76cbd181ae8a703e138fd8d98b8c89922f4e77d2eddb6->enter($__internal_ffad357a9a63dbd525d76cbd181ae8a703e138fd8d98b8c89922f4e77d2eddb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ffad357a9a63dbd525d76cbd181ae8a703e138fd8d98b8c89922f4e77d2eddb6->leave($__internal_ffad357a9a63dbd525d76cbd181ae8a703e138fd8d98b8c89922f4e77d2eddb6_prof);

        
        $__internal_ef64d6e0418847ed84752ff3aad3af88edfa2b89f7e89ff48255542e22c03a0e->leave($__internal_ef64d6e0418847ed84752ff3aad3af88edfa2b89f7e89ff48255542e22c03a0e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f55c9ae06bbaa0abc58663f7a557532f8e0e8ff96e3a8e23e09d0631e00ec3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f55c9ae06bbaa0abc58663f7a557532f8e0e8ff96e3a8e23e09d0631e00ec3f->enter($__internal_6f55c9ae06bbaa0abc58663f7a557532f8e0e8ff96e3a8e23e09d0631e00ec3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3098148c9c662771b50f89e9425c1bf3df01e4adea03e02020e0e85cde8fa811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3098148c9c662771b50f89e9425c1bf3df01e4adea03e02020e0e85cde8fa811->enter($__internal_3098148c9c662771b50f89e9425c1bf3df01e4adea03e02020e0e85cde8fa811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3098148c9c662771b50f89e9425c1bf3df01e4adea03e02020e0e85cde8fa811->leave($__internal_3098148c9c662771b50f89e9425c1bf3df01e4adea03e02020e0e85cde8fa811_prof);

        
        $__internal_6f55c9ae06bbaa0abc58663f7a557532f8e0e8ff96e3a8e23e09d0631e00ec3f->leave($__internal_6f55c9ae06bbaa0abc58663f7a557532f8e0e8ff96e3a8e23e09d0631e00ec3f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19b408ac85fea71cd1dac8d9e19b63396a75b476eaf390dad98291bde14e60e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b408ac85fea71cd1dac8d9e19b63396a75b476eaf390dad98291bde14e60e1->enter($__internal_19b408ac85fea71cd1dac8d9e19b63396a75b476eaf390dad98291bde14e60e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ebca40d2df95a998d4bcdf03abf84d968cc25228c1f1e92f1210df038fe62da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebca40d2df95a998d4bcdf03abf84d968cc25228c1f1e92f1210df038fe62da->enter($__internal_8ebca40d2df95a998d4bcdf03abf84d968cc25228c1f1e92f1210df038fe62da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8ebca40d2df95a998d4bcdf03abf84d968cc25228c1f1e92f1210df038fe62da->leave($__internal_8ebca40d2df95a998d4bcdf03abf84d968cc25228c1f1e92f1210df038fe62da_prof);

        
        $__internal_19b408ac85fea71cd1dac8d9e19b63396a75b476eaf390dad98291bde14e60e1->leave($__internal_19b408ac85fea71cd1dac8d9e19b63396a75b476eaf390dad98291bde14e60e1_prof);

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
