<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_88b0f6519e785b1e2d98107845150183c099cd9363e962fe5b83889db5851354 extends Twig_Template
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
        $__internal_714c6a72d1ef2efd732e1ebf33bbadaf14101a46526ca3635d5745b7cd70fe39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714c6a72d1ef2efd732e1ebf33bbadaf14101a46526ca3635d5745b7cd70fe39->enter($__internal_714c6a72d1ef2efd732e1ebf33bbadaf14101a46526ca3635d5745b7cd70fe39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_8eee98c6f89adba692c663a58c3eccf76dc151da8ff16cbd4f263a478f9d6e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eee98c6f89adba692c663a58c3eccf76dc151da8ff16cbd4f263a478f9d6e4a->enter($__internal_8eee98c6f89adba692c663a58c3eccf76dc151da8ff16cbd4f263a478f9d6e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_714c6a72d1ef2efd732e1ebf33bbadaf14101a46526ca3635d5745b7cd70fe39->leave($__internal_714c6a72d1ef2efd732e1ebf33bbadaf14101a46526ca3635d5745b7cd70fe39_prof);

        
        $__internal_8eee98c6f89adba692c663a58c3eccf76dc151da8ff16cbd4f263a478f9d6e4a->leave($__internal_8eee98c6f89adba692c663a58c3eccf76dc151da8ff16cbd4f263a478f9d6e4a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/PIDEVS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
