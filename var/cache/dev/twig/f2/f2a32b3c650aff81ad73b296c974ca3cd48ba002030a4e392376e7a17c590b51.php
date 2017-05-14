<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_97527d11f9d381f3f964df353093f88b961bd44f3750bdf15e1a8a0ac9560b51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b9180cc83a6545feebd65d5301f0e7d151b167620520a45b92668438a65493f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9180cc83a6545feebd65d5301f0e7d151b167620520a45b92668438a65493f->enter($__internal_3b9180cc83a6545feebd65d5301f0e7d151b167620520a45b92668438a65493f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_dcd4d1a3a939e89e9d4e67fb2e0494e9290ea547518b521978e100d65e35ff51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd4d1a3a939e89e9d4e67fb2e0494e9290ea547518b521978e100d65e35ff51->enter($__internal_dcd4d1a3a939e89e9d4e67fb2e0494e9290ea547518b521978e100d65e35ff51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3b9180cc83a6545feebd65d5301f0e7d151b167620520a45b92668438a65493f->leave($__internal_3b9180cc83a6545feebd65d5301f0e7d151b167620520a45b92668438a65493f_prof);

        
        $__internal_dcd4d1a3a939e89e9d4e67fb2e0494e9290ea547518b521978e100d65e35ff51->leave($__internal_dcd4d1a3a939e89e9d4e67fb2e0494e9290ea547518b521978e100d65e35ff51_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/var/www/html/PIDEVS/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
