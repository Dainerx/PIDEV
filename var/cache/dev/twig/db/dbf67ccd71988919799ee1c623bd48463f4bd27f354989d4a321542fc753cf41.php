<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_e4e293f956a47dcb29dce1611f13eff90dfad127a180bee4cb9c44d3bae9b4eb extends Twig_Template
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
        $__internal_e2e9a1ea3176070e0786849ee41752d8e98537d1c1b810b85a251079c3bd0595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e9a1ea3176070e0786849ee41752d8e98537d1c1b810b85a251079c3bd0595->enter($__internal_e2e9a1ea3176070e0786849ee41752d8e98537d1c1b810b85a251079c3bd0595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_2cd0fe9900fbd4fd1b9d61ac9c8e0df46da8563debc222a8d7e17335bf373bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd0fe9900fbd4fd1b9d61ac9c8e0df46da8563debc222a8d7e17335bf373bca->enter($__internal_2cd0fe9900fbd4fd1b9d61ac9c8e0df46da8563debc222a8d7e17335bf373bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "

<form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 9
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 10
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "
    <p class=\"form-row form-row-wide\">
        <label for=\"username\">Username:
            <i class=\"im im-icon-Male\"></i>
            <input type=\"text\" class=\"input-text\" name=\"_username\" id=\"username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" >
        </label>
    </p>

    <p class=\"form-row form-row-wide\">
        <label for=\"password\">Password:
            <i class=\"im im-icon-Lock-2\"></i>
            <input class=\"input-text\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
        </label>
    </p>

    <p class=\"form-row\">
        <input type=\"submit\" class=\"button border margin-top-10\" id=\"_submit\" name=\"_submit\" value=\"Login\">

        <label for=\"rememberme\" class=\"rememberme\">
            <input name=\"_remember_me\" type=\"checkbox\" id=\"rememberme\" value=\"forever\"> Remember Me</label>
    </p>
</form>
";
        
        $__internal_e2e9a1ea3176070e0786849ee41752d8e98537d1c1b810b85a251079c3bd0595->leave($__internal_e2e9a1ea3176070e0786849ee41752d8e98537d1c1b810b85a251079c3bd0595_prof);

        
        $__internal_2cd0fe9900fbd4fd1b9d61ac9c8e0df46da8563debc222a8d7e17335bf373bca->leave($__internal_2cd0fe9900fbd4fd1b9d61ac9c8e0df46da8563debc222a8d7e17335bf373bca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  52 => 12,  46 => 10,  44 => 9,  40 => 8,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <p class=\"form-row form-row-wide\">
        <label for=\"username\">Username:
            <i class=\"im im-icon-Male\"></i>
            <input type=\"text\" class=\"input-text\" name=\"_username\" id=\"username\" value=\"{{ last_username }}\" >
        </label>
    </p>

    <p class=\"form-row form-row-wide\">
        <label for=\"password\">Password:
            <i class=\"im im-icon-Lock-2\"></i>
            <input class=\"input-text\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
        </label>
    </p>

    <p class=\"form-row\">
        <input type=\"submit\" class=\"button border margin-top-10\" id=\"_submit\" name=\"_submit\" value=\"Login\">

        <label for=\"rememberme\" class=\"rememberme\">
            <input name=\"_remember_me\" type=\"checkbox\" id=\"rememberme\" value=\"forever\"> Remember Me</label>
    </p>
</form>
", "@FOSUser/Security/login_content.html.twig", "/var/www/html/PIDEVS/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
