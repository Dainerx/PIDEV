<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a4242ac9b1ed38aa881e258163e3f90382f1d0df636e49290b69e2a399365788 extends Twig_Template
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
        $__internal_a2d48b74e9b2aa8903e7e33ad70b126177154c9bcca23ba3f1884a0e2e144b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d48b74e9b2aa8903e7e33ad70b126177154c9bcca23ba3f1884a0e2e144b4b->enter($__internal_a2d48b74e9b2aa8903e7e33ad70b126177154c9bcca23ba3f1884a0e2e144b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_83c125202b2e00de24b5aa7dc3f54f9f3c176f5a785b118f2405802e2d049575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c125202b2e00de24b5aa7dc3f54f9f3c176f5a785b118f2405802e2d049575->enter($__internal_83c125202b2e00de24b5aa7dc3f54f9f3c176f5a785b118f2405802e2d049575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d48b74e9b2aa8903e7e33ad70b126177154c9bcca23ba3f1884a0e2e144b4b->leave($__internal_a2d48b74e9b2aa8903e7e33ad70b126177154c9bcca23ba3f1884a0e2e144b4b_prof);

        
        $__internal_83c125202b2e00de24b5aa7dc3f54f9f3c176f5a785b118f2405802e2d049575->leave($__internal_83c125202b2e00de24b5aa7dc3f54f9f3c176f5a785b118f2405802e2d049575_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95f52b393c29e6a3588fd2ffec954b838d5bfc65e8d7f71f00cf7a26ff4a32c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f52b393c29e6a3588fd2ffec954b838d5bfc65e8d7f71f00cf7a26ff4a32c6->enter($__internal_95f52b393c29e6a3588fd2ffec954b838d5bfc65e8d7f71f00cf7a26ff4a32c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_420257fd861963f5107ca670d3f0d9866c1636b0425281c48d7e19138b42a06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420257fd861963f5107ca670d3f0d9866c1636b0425281c48d7e19138b42a06b->enter($__internal_420257fd861963f5107ca670d3f0d9866c1636b0425281c48d7e19138b42a06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_420257fd861963f5107ca670d3f0d9866c1636b0425281c48d7e19138b42a06b->leave($__internal_420257fd861963f5107ca670d3f0d9866c1636b0425281c48d7e19138b42a06b_prof);

        
        $__internal_95f52b393c29e6a3588fd2ffec954b838d5bfc65e8d7f71f00cf7a26ff4a32c6->leave($__internal_95f52b393c29e6a3588fd2ffec954b838d5bfc65e8d7f71f00cf7a26ff4a32c6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_51b1d00168311be13cd50685d81784d179fcdb477501697f7276f9b82384a3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b1d00168311be13cd50685d81784d179fcdb477501697f7276f9b82384a3a5->enter($__internal_51b1d00168311be13cd50685d81784d179fcdb477501697f7276f9b82384a3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d97ecf022003fe768563c85b0ff8ffb2ee7d1722d883935a768c779425f14b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d97ecf022003fe768563c85b0ff8ffb2ee7d1722d883935a768c779425f14b0->enter($__internal_3d97ecf022003fe768563c85b0ff8ffb2ee7d1722d883935a768c779425f14b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d97ecf022003fe768563c85b0ff8ffb2ee7d1722d883935a768c779425f14b0->leave($__internal_3d97ecf022003fe768563c85b0ff8ffb2ee7d1722d883935a768c779425f14b0_prof);

        
        $__internal_51b1d00168311be13cd50685d81784d179fcdb477501697f7276f9b82384a3a5->leave($__internal_51b1d00168311be13cd50685d81784d179fcdb477501697f7276f9b82384a3a5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bae1b277dc74bcf119390c5d64ed7a6d348ee16cc54eaffc4e812ca9a48b378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bae1b277dc74bcf119390c5d64ed7a6d348ee16cc54eaffc4e812ca9a48b378->enter($__internal_8bae1b277dc74bcf119390c5d64ed7a6d348ee16cc54eaffc4e812ca9a48b378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4cd2dc6e8df151331a1764ce493b6c310d77629235e60e5d0e3adfd83547662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cd2dc6e8df151331a1764ce493b6c310d77629235e60e5d0e3adfd83547662->enter($__internal_a4cd2dc6e8df151331a1764ce493b6c310d77629235e60e5d0e3adfd83547662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a4cd2dc6e8df151331a1764ce493b6c310d77629235e60e5d0e3adfd83547662->leave($__internal_a4cd2dc6e8df151331a1764ce493b6c310d77629235e60e5d0e3adfd83547662_prof);

        
        $__internal_8bae1b277dc74bcf119390c5d64ed7a6d348ee16cc54eaffc4e812ca9a48b378->leave($__internal_8bae1b277dc74bcf119390c5d64ed7a6d348ee16cc54eaffc4e812ca9a48b378_prof);

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
