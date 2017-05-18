<?php

/* NomayaSocialBundle:Buttons:pinterestButton.html.twig */
class __TwigTemplate_9c87bff21b83342f52e0fd64f0cbb7959bc6e86b58e06887f2b9cc1ec5f4e184 extends Twig_Template
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
        $__internal_4c1049a51c9a6d690cacaa622bc87a76287573ece5c2ee723ad3d8347d093d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1049a51c9a6d690cacaa622bc87a76287573ece5c2ee723ad3d8347d093d5c->enter($__internal_4c1049a51c9a6d690cacaa622bc87a76287573ece5c2ee723ad3d8347d093d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        $__internal_025a2a4b79de9bc932d924dac8c91b063996fc21a8403a35527dac5886fc5900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025a2a4b79de9bc932d924dac8c91b063996fc21a8403a35527dac5886fc5900->enter($__internal_025a2a4b79de9bc932d924dac8c91b063996fc21a8403a35527dac5886fc5900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4c1049a51c9a6d690cacaa622bc87a76287573ece5c2ee723ad3d8347d093d5c->leave($__internal_4c1049a51c9a6d690cacaa622bc87a76287573ece5c2ee723ad3d8347d093d5c_prof);

        
        $__internal_025a2a4b79de9bc932d924dac8c91b063996fc21a8403a35527dac5886fc5900->leave($__internal_025a2a4b79de9bc932d924dac8c91b063996fc21a8403a35527dac5886fc5900_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:pinterestButton.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
{% endspaceless %}", "NomayaSocialBundle:Buttons:pinterestButton.html.twig", "/var/www/html/PIDEVS/vendor/nomaya/social-bundle/Nomaya/SocialBundle/Resources/views/Buttons/pinterestButton.html.twig");
    }
}
