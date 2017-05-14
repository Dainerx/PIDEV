<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_65fe4186550299517c129c7ebdd18e1bfb1ae5db03b83c3b1c4771333ab9eb11 extends Twig_Template
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
        $__internal_0e0d9cbe39f6f11c9a7cf80262504135245c5f07a800aba5d81d49c6d343c463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e0d9cbe39f6f11c9a7cf80262504135245c5f07a800aba5d81d49c6d343c463->enter($__internal_0e0d9cbe39f6f11c9a7cf80262504135245c5f07a800aba5d81d49c6d343c463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_01c98ddb025c2a8066a53ac422791fc6b98714f6da88ff456f2341f05e4be130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c98ddb025c2a8066a53ac422791fc6b98714f6da88ff456f2341f05e4be130->enter($__internal_01c98ddb025c2a8066a53ac422791fc6b98714f6da88ff456f2341f05e4be130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e0d9cbe39f6f11c9a7cf80262504135245c5f07a800aba5d81d49c6d343c463->leave($__internal_0e0d9cbe39f6f11c9a7cf80262504135245c5f07a800aba5d81d49c6d343c463_prof);

        
        $__internal_01c98ddb025c2a8066a53ac422791fc6b98714f6da88ff456f2341f05e4be130->leave($__internal_01c98ddb025c2a8066a53ac422791fc6b98714f6da88ff456f2341f05e4be130_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e52b24b7e26d0e2f1ca15c4fe30001d7ec2f90a6cdc6a40e8d46e6d1db8c77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e52b24b7e26d0e2f1ca15c4fe30001d7ec2f90a6cdc6a40e8d46e6d1db8c77d->enter($__internal_2e52b24b7e26d0e2f1ca15c4fe30001d7ec2f90a6cdc6a40e8d46e6d1db8c77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_23273f23744ba692f997c27256e61c58bde145ac48ac78e5cdfacc156acd948f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23273f23744ba692f997c27256e61c58bde145ac48ac78e5cdfacc156acd948f->enter($__internal_23273f23744ba692f997c27256e61c58bde145ac48ac78e5cdfacc156acd948f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_23273f23744ba692f997c27256e61c58bde145ac48ac78e5cdfacc156acd948f->leave($__internal_23273f23744ba692f997c27256e61c58bde145ac48ac78e5cdfacc156acd948f_prof);

        
        $__internal_2e52b24b7e26d0e2f1ca15c4fe30001d7ec2f90a6cdc6a40e8d46e6d1db8c77d->leave($__internal_2e52b24b7e26d0e2f1ca15c4fe30001d7ec2f90a6cdc6a40e8d46e6d1db8c77d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36ae6f54674520912394fd7e1d1866555465e63fabf13612fe2902e3a053fbfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ae6f54674520912394fd7e1d1866555465e63fabf13612fe2902e3a053fbfd->enter($__internal_36ae6f54674520912394fd7e1d1866555465e63fabf13612fe2902e3a053fbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc2cabc09de3d6b7f9799f84e06cbb1822313b7c8070736ba7eb8aea7e88f209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2cabc09de3d6b7f9799f84e06cbb1822313b7c8070736ba7eb8aea7e88f209->enter($__internal_fc2cabc09de3d6b7f9799f84e06cbb1822313b7c8070736ba7eb8aea7e88f209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc2cabc09de3d6b7f9799f84e06cbb1822313b7c8070736ba7eb8aea7e88f209->leave($__internal_fc2cabc09de3d6b7f9799f84e06cbb1822313b7c8070736ba7eb8aea7e88f209_prof);

        
        $__internal_36ae6f54674520912394fd7e1d1866555465e63fabf13612fe2902e3a053fbfd->leave($__internal_36ae6f54674520912394fd7e1d1866555465e63fabf13612fe2902e3a053fbfd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bb595bbe28684aba1083cdbfabee37c987ee157474c2f4e797002229a61845c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb595bbe28684aba1083cdbfabee37c987ee157474c2f4e797002229a61845c->enter($__internal_3bb595bbe28684aba1083cdbfabee37c987ee157474c2f4e797002229a61845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_46bf2176abcc6f9bfd2456151ec012fe1b917aa60d9157e0757a8d1dc3e81faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bf2176abcc6f9bfd2456151ec012fe1b917aa60d9157e0757a8d1dc3e81faa->enter($__internal_46bf2176abcc6f9bfd2456151ec012fe1b917aa60d9157e0757a8d1dc3e81faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_46bf2176abcc6f9bfd2456151ec012fe1b917aa60d9157e0757a8d1dc3e81faa->leave($__internal_46bf2176abcc6f9bfd2456151ec012fe1b917aa60d9157e0757a8d1dc3e81faa_prof);

        
        $__internal_3bb595bbe28684aba1083cdbfabee37c987ee157474c2f4e797002229a61845c->leave($__internal_3bb595bbe28684aba1083cdbfabee37c987ee157474c2f4e797002229a61845c_prof);

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
