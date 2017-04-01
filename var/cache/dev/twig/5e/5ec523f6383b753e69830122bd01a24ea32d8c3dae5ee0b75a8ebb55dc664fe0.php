<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_309d7c33956e95c452f82893e98bbe4760180807cb063b513a6dd3fdad285436 extends Twig_Template
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
        $__internal_3d45f19e2efba612824ea4373cd73ceb8f3e359261bc4b22a1ddf386a4522a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d45f19e2efba612824ea4373cd73ceb8f3e359261bc4b22a1ddf386a4522a4a->enter($__internal_3d45f19e2efba612824ea4373cd73ceb8f3e359261bc4b22a1ddf386a4522a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e6855597509899796e34e329f302751a34247152907b319353caf9f8ae983c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6855597509899796e34e329f302751a34247152907b319353caf9f8ae983c0a->enter($__internal_e6855597509899796e34e329f302751a34247152907b319353caf9f8ae983c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d45f19e2efba612824ea4373cd73ceb8f3e359261bc4b22a1ddf386a4522a4a->leave($__internal_3d45f19e2efba612824ea4373cd73ceb8f3e359261bc4b22a1ddf386a4522a4a_prof);

        
        $__internal_e6855597509899796e34e329f302751a34247152907b319353caf9f8ae983c0a->leave($__internal_e6855597509899796e34e329f302751a34247152907b319353caf9f8ae983c0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8c496f30ff489553dc3186d7c82ee4f1185d01354ceed6e338e7c1f7f538129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c496f30ff489553dc3186d7c82ee4f1185d01354ceed6e338e7c1f7f538129->enter($__internal_f8c496f30ff489553dc3186d7c82ee4f1185d01354ceed6e338e7c1f7f538129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5232aefd78bb3384bf576b1ddf3dff63aeb51789a856c3d100a401edb3e3919a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5232aefd78bb3384bf576b1ddf3dff63aeb51789a856c3d100a401edb3e3919a->enter($__internal_5232aefd78bb3384bf576b1ddf3dff63aeb51789a856c3d100a401edb3e3919a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5232aefd78bb3384bf576b1ddf3dff63aeb51789a856c3d100a401edb3e3919a->leave($__internal_5232aefd78bb3384bf576b1ddf3dff63aeb51789a856c3d100a401edb3e3919a_prof);

        
        $__internal_f8c496f30ff489553dc3186d7c82ee4f1185d01354ceed6e338e7c1f7f538129->leave($__internal_f8c496f30ff489553dc3186d7c82ee4f1185d01354ceed6e338e7c1f7f538129_prof);

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
