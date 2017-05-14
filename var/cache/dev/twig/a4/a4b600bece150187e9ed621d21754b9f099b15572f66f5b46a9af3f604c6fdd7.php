<?php

/* NomayaSocialBundle:Buttons:googleplusButton.html.twig */
class __TwigTemplate_ad2bfb0eb51960edfcc7eda73668be1f2304d15ce15e0de80bd6800e8511bcf3 extends Twig_Template
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
        $__internal_72ecc96de711504865c5f3d15e19d2a7433288e9364db95451dbda20509f2a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ecc96de711504865c5f3d15e19d2a7433288e9364db95451dbda20509f2a89->enter($__internal_72ecc96de711504865c5f3d15e19d2a7433288e9364db95451dbda20509f2a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:googleplusButton.html.twig"));

        $__internal_f32d9cdc5cecd86358ea86baf72400822a8c2125855c2ddcc4ea554f16443f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32d9cdc5cecd86358ea86baf72400822a8c2125855c2ddcc4ea554f16443f05->enter($__internal_f32d9cdc5cecd86358ea86baf72400822a8c2125855c2ddcc4ea554f16443f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:googleplusButton.html.twig"));

        // line 1
        if (( !array_key_exists("url", $context) || ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == null))) {
            // line 2
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array());
        }
        // line 4
        echo "
";
        // line 5
        ob_start();
        // line 6
        echo " <div class=\"g-plusone\" data-size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo "\" data-annotation=\"";
        echo twig_escape_filter($this->env, (isset($context["annotation"]) ? $context["annotation"] : $this->getContext($context, "annotation")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\"></div>

 <script type=\"text/javascript\">
   window.___gcfg = {lang: '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "'};

   (function() {
     var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
     po.src = 'https://apis.google.com/js/plusone.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
   })();
 </script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_72ecc96de711504865c5f3d15e19d2a7433288e9364db95451dbda20509f2a89->leave($__internal_72ecc96de711504865c5f3d15e19d2a7433288e9364db95451dbda20509f2a89_prof);

        
        $__internal_f32d9cdc5cecd86358ea86baf72400822a8c2125855c2ddcc4ea554f16443f05->leave($__internal_f32d9cdc5cecd86358ea86baf72400822a8c2125855c2ddcc4ea554f16443f05_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:googleplusButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if url is not defined or url == null %}
    {% set url = app.request.uri %}
{% endif %}

{% spaceless %}
 <div class=\"g-plusone\" data-size=\"{{size}}\" data-annotation=\"{{annotation}}\" data-width=\"{{width}}\" data-href=\"{{url}}\"></div>

 <script type=\"text/javascript\">
   window.___gcfg = {lang: '{{locale}}'};

   (function() {
     var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
     po.src = 'https://apis.google.com/js/plusone.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
   })();
 </script>

{% endspaceless %}", "NomayaSocialBundle:Buttons:googleplusButton.html.twig", "/var/www/html/PIDEVS/vendor/nomaya/social-bundle/Nomaya/SocialBundle/Resources/views/Buttons/googleplusButton.html.twig");
    }
}
