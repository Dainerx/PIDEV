<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_068b7a80114a9da511182767f6e5fb4e596df5f1e7434decf99d0f7f5195c9e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_644269053453a266e6eb3d381824eb1dd3e8d75032726ac20c94ead323e474b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644269053453a266e6eb3d381824eb1dd3e8d75032726ac20c94ead323e474b9->enter($__internal_644269053453a266e6eb3d381824eb1dd3e8d75032726ac20c94ead323e474b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_fb03d2b67e6a78149fbb933ca2e75fe980d74e9de15095b28dbe1746632a3a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb03d2b67e6a78149fbb933ca2e75fe980d74e9de15095b28dbe1746632a3a41->enter($__internal_fb03d2b67e6a78149fbb933ca2e75fe980d74e9de15095b28dbe1746632a3a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644269053453a266e6eb3d381824eb1dd3e8d75032726ac20c94ead323e474b9->leave($__internal_644269053453a266e6eb3d381824eb1dd3e8d75032726ac20c94ead323e474b9_prof);

        
        $__internal_fb03d2b67e6a78149fbb933ca2e75fe980d74e9de15095b28dbe1746632a3a41->leave($__internal_fb03d2b67e6a78149fbb933ca2e75fe980d74e9de15095b28dbe1746632a3a41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bb878d7c0c29bcdba3e2be8f818ca78fe11600a0ed177d43d95a52a7a68993b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb878d7c0c29bcdba3e2be8f818ca78fe11600a0ed177d43d95a52a7a68993b->enter($__internal_0bb878d7c0c29bcdba3e2be8f818ca78fe11600a0ed177d43d95a52a7a68993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43cc9426dd88cae74d639b44d0dafe2d44d4987c87b7407b549b85684e916913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cc9426dd88cae74d639b44d0dafe2d44d4987c87b7407b549b85684e916913->enter($__internal_43cc9426dd88cae74d639b44d0dafe2d44d4987c87b7407b549b85684e916913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_43cc9426dd88cae74d639b44d0dafe2d44d4987c87b7407b549b85684e916913->leave($__internal_43cc9426dd88cae74d639b44d0dafe2d44d4987c87b7407b549b85684e916913_prof);

        
        $__internal_0bb878d7c0c29bcdba3e2be8f818ca78fe11600a0ed177d43d95a52a7a68993b->leave($__internal_0bb878d7c0c29bcdba3e2be8f818ca78fe11600a0ed177d43d95a52a7a68993b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa7a5dc0ce663c6f5c6c2ce63438cea628b5be87aad69dea94f4725b35697c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7a5dc0ce663c6f5c6c2ce63438cea628b5be87aad69dea94f4725b35697c8f->enter($__internal_fa7a5dc0ce663c6f5c6c2ce63438cea628b5be87aad69dea94f4725b35697c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_157b49ff0a482c62250fa153218450fa3e1d2dfb99021a4248b9f380554895a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157b49ff0a482c62250fa153218450fa3e1d2dfb99021a4248b9f380554895a9->enter($__internal_157b49ff0a482c62250fa153218450fa3e1d2dfb99021a4248b9f380554895a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_157b49ff0a482c62250fa153218450fa3e1d2dfb99021a4248b9f380554895a9->leave($__internal_157b49ff0a482c62250fa153218450fa3e1d2dfb99021a4248b9f380554895a9_prof);

        
        $__internal_fa7a5dc0ce663c6f5c6c2ce63438cea628b5be87aad69dea94f4725b35697c8f->leave($__internal_fa7a5dc0ce663c6f5c6c2ce63438cea628b5be87aad69dea94f4725b35697c8f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/html/PIDEVS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
