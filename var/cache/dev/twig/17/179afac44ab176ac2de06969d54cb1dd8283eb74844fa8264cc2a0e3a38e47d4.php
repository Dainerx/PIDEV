<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9e6fab0f70ed653c5acd77efda23ddbf4fbdef57d0191cab764b71012b2e2c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb0e60848e6fdd8bae43781cd731e24568dd8a5252b2d2542194e230a15cfa71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0e60848e6fdd8bae43781cd731e24568dd8a5252b2d2542194e230a15cfa71->enter($__internal_bb0e60848e6fdd8bae43781cd731e24568dd8a5252b2d2542194e230a15cfa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4a7fa182df661edd4329ce2556e71fda2c7c84f780db6dc5b556fe33cc07035c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7fa182df661edd4329ce2556e71fda2c7c84f780db6dc5b556fe33cc07035c->enter($__internal_4a7fa182df661edd4329ce2556e71fda2c7c84f780db6dc5b556fe33cc07035c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb0e60848e6fdd8bae43781cd731e24568dd8a5252b2d2542194e230a15cfa71->leave($__internal_bb0e60848e6fdd8bae43781cd731e24568dd8a5252b2d2542194e230a15cfa71_prof);

        
        $__internal_4a7fa182df661edd4329ce2556e71fda2c7c84f780db6dc5b556fe33cc07035c->leave($__internal_4a7fa182df661edd4329ce2556e71fda2c7c84f780db6dc5b556fe33cc07035c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a720cb960f84da7a2d7e833d85c6b8bdce987a04628c85e17f5620779dca5403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a720cb960f84da7a2d7e833d85c6b8bdce987a04628c85e17f5620779dca5403->enter($__internal_a720cb960f84da7a2d7e833d85c6b8bdce987a04628c85e17f5620779dca5403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f393471e61aea4c1fc3fa7f68dab65a9f3457797bf8cc5738232cbb3185dfb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f393471e61aea4c1fc3fa7f68dab65a9f3457797bf8cc5738232cbb3185dfb64->enter($__internal_f393471e61aea4c1fc3fa7f68dab65a9f3457797bf8cc5738232cbb3185dfb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f393471e61aea4c1fc3fa7f68dab65a9f3457797bf8cc5738232cbb3185dfb64->leave($__internal_f393471e61aea4c1fc3fa7f68dab65a9f3457797bf8cc5738232cbb3185dfb64_prof);

        
        $__internal_a720cb960f84da7a2d7e833d85c6b8bdce987a04628c85e17f5620779dca5403->leave($__internal_a720cb960f84da7a2d7e833d85c6b8bdce987a04628c85e17f5620779dca5403_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_38d54b7923ae5c237aac45fea6bdc2f07379bdbdc28b8e2c1a70f9d29d410f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d54b7923ae5c237aac45fea6bdc2f07379bdbdc28b8e2c1a70f9d29d410f40->enter($__internal_38d54b7923ae5c237aac45fea6bdc2f07379bdbdc28b8e2c1a70f9d29d410f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d965e3200f2554fc01d55652f8a6c0698849721fb9dafe3ea631fdc6b5bda936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d965e3200f2554fc01d55652f8a6c0698849721fb9dafe3ea631fdc6b5bda936->enter($__internal_d965e3200f2554fc01d55652f8a6c0698849721fb9dafe3ea631fdc6b5bda936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d965e3200f2554fc01d55652f8a6c0698849721fb9dafe3ea631fdc6b5bda936->leave($__internal_d965e3200f2554fc01d55652f8a6c0698849721fb9dafe3ea631fdc6b5bda936_prof);

        
        $__internal_38d54b7923ae5c237aac45fea6bdc2f07379bdbdc28b8e2c1a70f9d29d410f40->leave($__internal_38d54b7923ae5c237aac45fea6bdc2f07379bdbdc28b8e2c1a70f9d29d410f40_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_17753c95cb2d2493d5b6a61cf8a16cdab2830b614e63422a2a9c76bb46ba91fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17753c95cb2d2493d5b6a61cf8a16cdab2830b614e63422a2a9c76bb46ba91fa->enter($__internal_17753c95cb2d2493d5b6a61cf8a16cdab2830b614e63422a2a9c76bb46ba91fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0eadeee1b029920bd76bb9d352fcb352d34a5d5a118af9dd5e3d350e6f1d9584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eadeee1b029920bd76bb9d352fcb352d34a5d5a118af9dd5e3d350e6f1d9584->enter($__internal_0eadeee1b029920bd76bb9d352fcb352d34a5d5a118af9dd5e3d350e6f1d9584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0eadeee1b029920bd76bb9d352fcb352d34a5d5a118af9dd5e3d350e6f1d9584->leave($__internal_0eadeee1b029920bd76bb9d352fcb352d34a5d5a118af9dd5e3d350e6f1d9584_prof);

        
        $__internal_17753c95cb2d2493d5b6a61cf8a16cdab2830b614e63422a2a9c76bb46ba91fa->leave($__internal_17753c95cb2d2493d5b6a61cf8a16cdab2830b614e63422a2a9c76bb46ba91fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/PIDEVS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
