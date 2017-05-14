<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d3106c9094f9f3b880cddd3907ff745381150be5d086140ec48e4f312951d448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ec153b035fd13e9eb500d488fa8e139a420417ef7d0ac851c3da8abc23f25d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec153b035fd13e9eb500d488fa8e139a420417ef7d0ac851c3da8abc23f25d5->enter($__internal_1ec153b035fd13e9eb500d488fa8e139a420417ef7d0ac851c3da8abc23f25d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1a521a43c7bf1ba7f8313a3d14e8d8c9e76dd7600ec6327c47fa859343dac35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a521a43c7bf1ba7f8313a3d14e8d8c9e76dd7600ec6327c47fa859343dac35f->enter($__internal_1a521a43c7bf1ba7f8313a3d14e8d8c9e76dd7600ec6327c47fa859343dac35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec153b035fd13e9eb500d488fa8e139a420417ef7d0ac851c3da8abc23f25d5->leave($__internal_1ec153b035fd13e9eb500d488fa8e139a420417ef7d0ac851c3da8abc23f25d5_prof);

        
        $__internal_1a521a43c7bf1ba7f8313a3d14e8d8c9e76dd7600ec6327c47fa859343dac35f->leave($__internal_1a521a43c7bf1ba7f8313a3d14e8d8c9e76dd7600ec6327c47fa859343dac35f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff7e5e25a3669ecfed864c3b8e553b9a0ddc4fb30d6b26a873ba4e37618d5c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7e5e25a3669ecfed864c3b8e553b9a0ddc4fb30d6b26a873ba4e37618d5c08->enter($__internal_ff7e5e25a3669ecfed864c3b8e553b9a0ddc4fb30d6b26a873ba4e37618d5c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c06741c09ed4b1365ead6fe10fb57858962038dfef578cc6f4d782f13a5e1cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06741c09ed4b1365ead6fe10fb57858962038dfef578cc6f4d782f13a5e1cd9->enter($__internal_c06741c09ed4b1365ead6fe10fb57858962038dfef578cc6f4d782f13a5e1cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c06741c09ed4b1365ead6fe10fb57858962038dfef578cc6f4d782f13a5e1cd9->leave($__internal_c06741c09ed4b1365ead6fe10fb57858962038dfef578cc6f4d782f13a5e1cd9_prof);

        
        $__internal_ff7e5e25a3669ecfed864c3b8e553b9a0ddc4fb30d6b26a873ba4e37618d5c08->leave($__internal_ff7e5e25a3669ecfed864c3b8e553b9a0ddc4fb30d6b26a873ba4e37618d5c08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/PIDEVS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
