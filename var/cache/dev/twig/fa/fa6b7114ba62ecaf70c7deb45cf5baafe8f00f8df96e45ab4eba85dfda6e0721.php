<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a77b599c69e94f57f5cb7268ac2e7fb0d3dfbf90f87e20aab6eb6eebaf6572aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0e2a76fef834fc04c90bd4972e054bb9d38ae9a2f65262621eb47976a7d81a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2a76fef834fc04c90bd4972e054bb9d38ae9a2f65262621eb47976a7d81a16->enter($__internal_0e2a76fef834fc04c90bd4972e054bb9d38ae9a2f65262621eb47976a7d81a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_747b4f175e24b1e39c9783c1c0dd3b4436e4516f0fddbdc4e92e7af74c098e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747b4f175e24b1e39c9783c1c0dd3b4436e4516f0fddbdc4e92e7af74c098e95->enter($__internal_747b4f175e24b1e39c9783c1c0dd3b4436e4516f0fddbdc4e92e7af74c098e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2a76fef834fc04c90bd4972e054bb9d38ae9a2f65262621eb47976a7d81a16->leave($__internal_0e2a76fef834fc04c90bd4972e054bb9d38ae9a2f65262621eb47976a7d81a16_prof);

        
        $__internal_747b4f175e24b1e39c9783c1c0dd3b4436e4516f0fddbdc4e92e7af74c098e95->leave($__internal_747b4f175e24b1e39c9783c1c0dd3b4436e4516f0fddbdc4e92e7af74c098e95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55b6144c9e532400bfbb60a85829b836d59a8510427930ecfb03b5153ed8272a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b6144c9e532400bfbb60a85829b836d59a8510427930ecfb03b5153ed8272a->enter($__internal_55b6144c9e532400bfbb60a85829b836d59a8510427930ecfb03b5153ed8272a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_149f7934561ce3141daed92df1fc9a1ebc6a1dd1200bfa489d91df89dfd8c2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149f7934561ce3141daed92df1fc9a1ebc6a1dd1200bfa489d91df89dfd8c2dd->enter($__internal_149f7934561ce3141daed92df1fc9a1ebc6a1dd1200bfa489d91df89dfd8c2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_149f7934561ce3141daed92df1fc9a1ebc6a1dd1200bfa489d91df89dfd8c2dd->leave($__internal_149f7934561ce3141daed92df1fc9a1ebc6a1dd1200bfa489d91df89dfd8c2dd_prof);

        
        $__internal_55b6144c9e532400bfbb60a85829b836d59a8510427930ecfb03b5153ed8272a->leave($__internal_55b6144c9e532400bfbb60a85829b836d59a8510427930ecfb03b5153ed8272a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6703dd2e98b9d2eb2795b88a6495baa6c9486e0bd4e54f16aa8f5571f47168eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6703dd2e98b9d2eb2795b88a6495baa6c9486e0bd4e54f16aa8f5571f47168eb->enter($__internal_6703dd2e98b9d2eb2795b88a6495baa6c9486e0bd4e54f16aa8f5571f47168eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ba677e53763cba816c18cdd103893ddc446d6348033185b9e29dbbabc65f4e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba677e53763cba816c18cdd103893ddc446d6348033185b9e29dbbabc65f4e9a->enter($__internal_ba677e53763cba816c18cdd103893ddc446d6348033185b9e29dbbabc65f4e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba677e53763cba816c18cdd103893ddc446d6348033185b9e29dbbabc65f4e9a->leave($__internal_ba677e53763cba816c18cdd103893ddc446d6348033185b9e29dbbabc65f4e9a_prof);

        
        $__internal_6703dd2e98b9d2eb2795b88a6495baa6c9486e0bd4e54f16aa8f5571f47168eb->leave($__internal_6703dd2e98b9d2eb2795b88a6495baa6c9486e0bd4e54f16aa8f5571f47168eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c0f455516238484397a5232c72951910b641a82d99acba2e2a9118c98b149ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0f455516238484397a5232c72951910b641a82d99acba2e2a9118c98b149ef->enter($__internal_8c0f455516238484397a5232c72951910b641a82d99acba2e2a9118c98b149ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9fc41d76ac835f6698968a32011a10f95eb279d0d7b79ecbb90b63cd4d6445e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc41d76ac835f6698968a32011a10f95eb279d0d7b79ecbb90b63cd4d6445e2->enter($__internal_9fc41d76ac835f6698968a32011a10f95eb279d0d7b79ecbb90b63cd4d6445e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9fc41d76ac835f6698968a32011a10f95eb279d0d7b79ecbb90b63cd4d6445e2->leave($__internal_9fc41d76ac835f6698968a32011a10f95eb279d0d7b79ecbb90b63cd4d6445e2_prof);

        
        $__internal_8c0f455516238484397a5232c72951910b641a82d99acba2e2a9118c98b149ef->leave($__internal_8c0f455516238484397a5232c72951910b641a82d99acba2e2a9118c98b149ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/PIDEVS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
