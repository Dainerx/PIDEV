<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_aae37e46f925a2508c10ab9022ab4c51caa8b56c20cb91d5b2669084f981ad40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df0a96bdde23960e66e080e7fc06e9d8a785052d2e6f7a851bab1268fece353f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0a96bdde23960e66e080e7fc06e9d8a785052d2e6f7a851bab1268fece353f->enter($__internal_df0a96bdde23960e66e080e7fc06e9d8a785052d2e6f7a851bab1268fece353f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_65da297b77b8a56b975e7032c56a841086bc6748e57eb7dfddc6321878bda187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65da297b77b8a56b975e7032c56a841086bc6748e57eb7dfddc6321878bda187->enter($__internal_65da297b77b8a56b975e7032c56a841086bc6748e57eb7dfddc6321878bda187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df0a96bdde23960e66e080e7fc06e9d8a785052d2e6f7a851bab1268fece353f->leave($__internal_df0a96bdde23960e66e080e7fc06e9d8a785052d2e6f7a851bab1268fece353f_prof);

        
        $__internal_65da297b77b8a56b975e7032c56a841086bc6748e57eb7dfddc6321878bda187->leave($__internal_65da297b77b8a56b975e7032c56a841086bc6748e57eb7dfddc6321878bda187_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a313753be8923cf32966b06041b3a5646fa04422226309529d54cba163eccd88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a313753be8923cf32966b06041b3a5646fa04422226309529d54cba163eccd88->enter($__internal_a313753be8923cf32966b06041b3a5646fa04422226309529d54cba163eccd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5b860daa0682172e3d1df5d342aecc04612a103886c8f06f869d6af0efb440f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b860daa0682172e3d1df5d342aecc04612a103886c8f06f869d6af0efb440f5->enter($__internal_5b860daa0682172e3d1df5d342aecc04612a103886c8f06f869d6af0efb440f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5b860daa0682172e3d1df5d342aecc04612a103886c8f06f869d6af0efb440f5->leave($__internal_5b860daa0682172e3d1df5d342aecc04612a103886c8f06f869d6af0efb440f5_prof);

        
        $__internal_a313753be8923cf32966b06041b3a5646fa04422226309529d54cba163eccd88->leave($__internal_a313753be8923cf32966b06041b3a5646fa04422226309529d54cba163eccd88_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/PIDEVS/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
