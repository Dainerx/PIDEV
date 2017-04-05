<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_49f11fb7cc00e17e7868b6d15ac145b91d6b872638052077f0e54a9f717a8845 extends Twig_Template
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
        $__internal_c975b7583fecb32b9e43af770d97f06a14957d200167da32dcee5b1f89c15272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c975b7583fecb32b9e43af770d97f06a14957d200167da32dcee5b1f89c15272->enter($__internal_c975b7583fecb32b9e43af770d97f06a14957d200167da32dcee5b1f89c15272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_1a871ed5a3a23ffaa7a19096421575d6e3d9343d80fa17b4b15d7b7a548950f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a871ed5a3a23ffaa7a19096421575d6e3d9343d80fa17b4b15d7b7a548950f8->enter($__internal_1a871ed5a3a23ffaa7a19096421575d6e3d9343d80fa17b4b15d7b7a548950f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c975b7583fecb32b9e43af770d97f06a14957d200167da32dcee5b1f89c15272->leave($__internal_c975b7583fecb32b9e43af770d97f06a14957d200167da32dcee5b1f89c15272_prof);

        
        $__internal_1a871ed5a3a23ffaa7a19096421575d6e3d9343d80fa17b4b15d7b7a548950f8->leave($__internal_1a871ed5a3a23ffaa7a19096421575d6e3d9343d80fa17b4b15d7b7a548950f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3304200a012e05232a238020ba5143e76e3e47000eec94de9b921f93699011d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3304200a012e05232a238020ba5143e76e3e47000eec94de9b921f93699011d1->enter($__internal_3304200a012e05232a238020ba5143e76e3e47000eec94de9b921f93699011d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4a39dd24dc4411be81c134ed2ddb1cfeebaa2ab96f07e4a88810dd2e3599755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a39dd24dc4411be81c134ed2ddb1cfeebaa2ab96f07e4a88810dd2e3599755->enter($__internal_b4a39dd24dc4411be81c134ed2ddb1cfeebaa2ab96f07e4a88810dd2e3599755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b4a39dd24dc4411be81c134ed2ddb1cfeebaa2ab96f07e4a88810dd2e3599755->leave($__internal_b4a39dd24dc4411be81c134ed2ddb1cfeebaa2ab96f07e4a88810dd2e3599755_prof);

        
        $__internal_3304200a012e05232a238020ba5143e76e3e47000eec94de9b921f93699011d1->leave($__internal_3304200a012e05232a238020ba5143e76e3e47000eec94de9b921f93699011d1_prof);

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
