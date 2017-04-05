<?php

/* base.html.twig */
class __TwigTemplate_a7115034b7fc2430f826eac1310d510361710cf7afd52deb1c20093b467f98f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da0e54b6f912d439a63298207797578aec50e91f5df5074489c539a028eb7165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0e54b6f912d439a63298207797578aec50e91f5df5074489c539a028eb7165->enter($__internal_da0e54b6f912d439a63298207797578aec50e91f5df5074489c539a028eb7165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6ede99ba6be0861be556671b9fabcdd78a9a926ad82caf6b2bed65d506d7bdf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ede99ba6be0861be556671b9fabcdd78a9a926ad82caf6b2bed65d506d7bdf9->enter($__internal_6ede99ba6be0861be556671b9fabcdd78a9a926ad82caf6b2bed65d506d7bdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_da0e54b6f912d439a63298207797578aec50e91f5df5074489c539a028eb7165->leave($__internal_da0e54b6f912d439a63298207797578aec50e91f5df5074489c539a028eb7165_prof);

        
        $__internal_6ede99ba6be0861be556671b9fabcdd78a9a926ad82caf6b2bed65d506d7bdf9->leave($__internal_6ede99ba6be0861be556671b9fabcdd78a9a926ad82caf6b2bed65d506d7bdf9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1d0bf7bf39d2514d795c95b91bb15b3624d6d0ac96fefcc1b5ee4205f347921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d0bf7bf39d2514d795c95b91bb15b3624d6d0ac96fefcc1b5ee4205f347921->enter($__internal_a1d0bf7bf39d2514d795c95b91bb15b3624d6d0ac96fefcc1b5ee4205f347921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3a4d3d64f40482fe709ffba66c9bc37ee2c30421ff3393c17b80c83249568bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a4d3d64f40482fe709ffba66c9bc37ee2c30421ff3393c17b80c83249568bf->enter($__internal_a3a4d3d64f40482fe709ffba66c9bc37ee2c30421ff3393c17b80c83249568bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3a4d3d64f40482fe709ffba66c9bc37ee2c30421ff3393c17b80c83249568bf->leave($__internal_a3a4d3d64f40482fe709ffba66c9bc37ee2c30421ff3393c17b80c83249568bf_prof);

        
        $__internal_a1d0bf7bf39d2514d795c95b91bb15b3624d6d0ac96fefcc1b5ee4205f347921->leave($__internal_a1d0bf7bf39d2514d795c95b91bb15b3624d6d0ac96fefcc1b5ee4205f347921_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_000712b1a6671509a8456b9b4348095441a71a4147ac977cfff889412dde97c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000712b1a6671509a8456b9b4348095441a71a4147ac977cfff889412dde97c5->enter($__internal_000712b1a6671509a8456b9b4348095441a71a4147ac977cfff889412dde97c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e908bf021cda0625829599625a19347ada312afee4b42e8fe9665f99ba99208a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e908bf021cda0625829599625a19347ada312afee4b42e8fe9665f99ba99208a->enter($__internal_e908bf021cda0625829599625a19347ada312afee4b42e8fe9665f99ba99208a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e908bf021cda0625829599625a19347ada312afee4b42e8fe9665f99ba99208a->leave($__internal_e908bf021cda0625829599625a19347ada312afee4b42e8fe9665f99ba99208a_prof);

        
        $__internal_000712b1a6671509a8456b9b4348095441a71a4147ac977cfff889412dde97c5->leave($__internal_000712b1a6671509a8456b9b4348095441a71a4147ac977cfff889412dde97c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff40310ac9bb5a6a3d68ac885b4b21823ec2c92ddfcda9f4f60c7d2687461f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff40310ac9bb5a6a3d68ac885b4b21823ec2c92ddfcda9f4f60c7d2687461f05->enter($__internal_ff40310ac9bb5a6a3d68ac885b4b21823ec2c92ddfcda9f4f60c7d2687461f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dae9a80abf473a87b0ce39221ccef5aa69a3a1215a4f6bae6346d819af37c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dae9a80abf473a87b0ce39221ccef5aa69a3a1215a4f6bae6346d819af37c6f->enter($__internal_4dae9a80abf473a87b0ce39221ccef5aa69a3a1215a4f6bae6346d819af37c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4dae9a80abf473a87b0ce39221ccef5aa69a3a1215a4f6bae6346d819af37c6f->leave($__internal_4dae9a80abf473a87b0ce39221ccef5aa69a3a1215a4f6bae6346d819af37c6f_prof);

        
        $__internal_ff40310ac9bb5a6a3d68ac885b4b21823ec2c92ddfcda9f4f60c7d2687461f05->leave($__internal_ff40310ac9bb5a6a3d68ac885b4b21823ec2c92ddfcda9f4f60c7d2687461f05_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2407b3a3e9ec08faedb0ca00a6684d52fc01fd8c1b45ed32d754493f7acfaef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2407b3a3e9ec08faedb0ca00a6684d52fc01fd8c1b45ed32d754493f7acfaef4->enter($__internal_2407b3a3e9ec08faedb0ca00a6684d52fc01fd8c1b45ed32d754493f7acfaef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_42f6ce4de98681c68888831866cf2c1050531ee5b0ce071966ad5e55a563d925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f6ce4de98681c68888831866cf2c1050531ee5b0ce071966ad5e55a563d925->enter($__internal_42f6ce4de98681c68888831866cf2c1050531ee5b0ce071966ad5e55a563d925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42f6ce4de98681c68888831866cf2c1050531ee5b0ce071966ad5e55a563d925->leave($__internal_42f6ce4de98681c68888831866cf2c1050531ee5b0ce071966ad5e55a563d925_prof);

        
        $__internal_2407b3a3e9ec08faedb0ca00a6684d52fc01fd8c1b45ed32d754493f7acfaef4->leave($__internal_2407b3a3e9ec08faedb0ca00a6684d52fc01fd8c1b45ed32d754493f7acfaef4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/PIDEVS/app/Resources/views/base.html.twig");
    }
}
