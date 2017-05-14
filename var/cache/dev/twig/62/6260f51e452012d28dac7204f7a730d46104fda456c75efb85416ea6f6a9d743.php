<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_74ef53c403bc7c7a4524f7a958de7208c32e7bf203539ceea477585fbe045281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_359adfd47e9eb93d5a4874bf35b75e29bf6e8a9101e49da17a5128758f213b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359adfd47e9eb93d5a4874bf35b75e29bf6e8a9101e49da17a5128758f213b4c->enter($__internal_359adfd47e9eb93d5a4874bf35b75e29bf6e8a9101e49da17a5128758f213b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_1a5d94fce342c0164b5cf978352f1141bfd4a171601033fbd67b634245c78d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5d94fce342c0164b5cf978352f1141bfd4a171601033fbd67b634245c78d40->enter($__internal_1a5d94fce342c0164b5cf978352f1141bfd4a171601033fbd67b634245c78d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_359adfd47e9eb93d5a4874bf35b75e29bf6e8a9101e49da17a5128758f213b4c->leave($__internal_359adfd47e9eb93d5a4874bf35b75e29bf6e8a9101e49da17a5128758f213b4c_prof);

        
        $__internal_1a5d94fce342c0164b5cf978352f1141bfd4a171601033fbd67b634245c78d40->leave($__internal_1a5d94fce342c0164b5cf978352f1141bfd4a171601033fbd67b634245c78d40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e85ba47a117bdf0c23a3ee124faab0952b3f8390adc337f557d1c83c66456b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85ba47a117bdf0c23a3ee124faab0952b3f8390adc337f557d1c83c66456b25->enter($__internal_e85ba47a117bdf0c23a3ee124faab0952b3f8390adc337f557d1c83c66456b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_22c622b988ce5297edf12597842b9ff529b4b9800d934c823f4b9140c96158ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c622b988ce5297edf12597842b9ff529b4b9800d934c823f4b9140c96158ee->enter($__internal_22c622b988ce5297edf12597842b9ff529b4b9800d934c823f4b9140c96158ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_22c622b988ce5297edf12597842b9ff529b4b9800d934c823f4b9140c96158ee->leave($__internal_22c622b988ce5297edf12597842b9ff529b4b9800d934c823f4b9140c96158ee_prof);

        
        $__internal_e85ba47a117bdf0c23a3ee124faab0952b3f8390adc337f557d1c83c66456b25->leave($__internal_e85ba47a117bdf0c23a3ee124faab0952b3f8390adc337f557d1c83c66456b25_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/PIDEVS/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
