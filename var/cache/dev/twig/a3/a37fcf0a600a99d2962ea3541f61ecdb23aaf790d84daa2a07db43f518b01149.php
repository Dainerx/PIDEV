<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_f76d95ed91938c92a37f30d950bc453f06703076d8fda29d59d3094fedad74c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'topbody' => array($this, 'block_topbody'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2305ee2d4d5dabc97b7579a78eddd9f6603a6116c27e36876b9327f8176a8a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2305ee2d4d5dabc97b7579a78eddd9f6603a6116c27e36876b9327f8176a8a44->enter($__internal_2305ee2d4d5dabc97b7579a78eddd9f6603a6116c27e36876b9327f8176a8a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_301d10b10f8162c3d847bbb2f2d7f4ef220995900949a3a1f71565663ca531df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301d10b10f8162c3d847bbb2f2d7f4ef220995900949a3a1f71565663ca531df->enter($__internal_301d10b10f8162c3d847bbb2f2d7f4ef220995900949a3a1f71565663ca531df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Needs
 ================================================== -->
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <!-- CSS
    ================================================== -->
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>
<body>
";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 354
        echo "</body>
</html>
";
        
        $__internal_2305ee2d4d5dabc97b7579a78eddd9f6603a6116c27e36876b9327f8176a8a44->leave($__internal_2305ee2d4d5dabc97b7579a78eddd9f6603a6116c27e36876b9327f8176a8a44_prof);

        
        $__internal_301d10b10f8162c3d847bbb2f2d7f4ef220995900949a3a1f71565663ca531df->leave($__internal_301d10b10f8162c3d847bbb2f2d7f4ef220995900949a3a1f71565663ca531df_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_85047d44d29ac74fd59b1875a0afe974625ee445d00efaaca80cb706ce327453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85047d44d29ac74fd59b1875a0afe974625ee445d00efaaca80cb706ce327453->enter($__internal_85047d44d29ac74fd59b1875a0afe974625ee445d00efaaca80cb706ce327453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f6964c5a833d24f26ba6d6049b0bf85ea99312f688335a15f630dc372630132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6964c5a833d24f26ba6d6049b0bf85ea99312f688335a15f630dc372630132->enter($__internal_0f6964c5a833d24f26ba6d6049b0bf85ea99312f688335a15f630dc372630132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Join My Ride";
        
        $__internal_0f6964c5a833d24f26ba6d6049b0bf85ea99312f688335a15f630dc372630132->leave($__internal_0f6964c5a833d24f26ba6d6049b0bf85ea99312f688335a15f630dc372630132_prof);

        
        $__internal_85047d44d29ac74fd59b1875a0afe974625ee445d00efaaca80cb706ce327453->leave($__internal_85047d44d29ac74fd59b1875a0afe974625ee445d00efaaca80cb706ce327453_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c61171a16f90b5d153c2a1897b43417a5c3caddc551c78b6d07feaa3afe41fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61171a16f90b5d153c2a1897b43417a5c3caddc551c78b6d07feaa3afe41fe1->enter($__internal_c61171a16f90b5d153c2a1897b43417a5c3caddc551c78b6d07feaa3afe41fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6201510069039e4f421f4493fb0b7ea4f9414dd15da194372115e8a8ba434ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6201510069039e4f421f4493fb0b7ea4f9414dd15da194372115e8a8ba434ba7->enter($__internal_6201510069039e4f421f4493fb0b7ea4f9414dd15da194372115e8a8ba434ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/css/colors/main.css"), "html", null, true);
        echo "\" id=\"colors\">
    ";
        
        $__internal_6201510069039e4f421f4493fb0b7ea4f9414dd15da194372115e8a8ba434ba7->leave($__internal_6201510069039e4f421f4493fb0b7ea4f9414dd15da194372115e8a8ba434ba7_prof);

        
        $__internal_c61171a16f90b5d153c2a1897b43417a5c3caddc551c78b6d07feaa3afe41fe1->leave($__internal_c61171a16f90b5d153c2a1897b43417a5c3caddc551c78b6d07feaa3afe41fe1_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_b74cb1ad7374f0254486dce70709e9d6f0633cd36b12ce2db5b525999d5be9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74cb1ad7374f0254486dce70709e9d6f0633cd36b12ce2db5b525999d5be9ec->enter($__internal_b74cb1ad7374f0254486dce70709e9d6f0633cd36b12ce2db5b525999d5be9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4cce475b4a41ef1eda91a6502f2d9fcdde0bee30e041c8bf8400360deda17d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cce475b4a41ef1eda91a6502f2d9fcdde0bee30e041c8bf8400360deda17d4c->enter($__internal_4cce475b4a41ef1eda91a6502f2d9fcdde0bee30e041c8bf8400360deda17d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "
 <div>
    ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "        ";
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        ";
            // line 28
            echo "    ";
        }
        // line 29
        echo "</div>

";
        // line 31
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 32
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 33
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 34
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 35
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 40
        echo "
<div id=\"wrapper\">


    <!-- Header Container
    ================================================== -->
    ";
        // line 46
        $this->displayBlock('topbody', $context, $blocks);
        // line 195
        echo "


    <!-- Titlebar
    ================================================== -->

    <div id=\"titlebar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">

                    <h2>Log In & Register</h2>

                    <!-- Breadcrumbs -->
                    <nav id=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homeuser");
        echo "\">Home</a></li>
                            <li>Log In & Register</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <!-- Contact
    ================================================== -->

    <!-- Container -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"my-account style-1 margin-top-5 margin-bottom-40\">
                    ";
        // line 230
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 232
        echo "                </div>
            </div>
        </div>

    </div>




";
        // line 241
        $this->displayBlock('footer', $context, $blocks);
        // line 316
        echo "
    <!-- Scripts
    ================================================== -->
    ";
        // line 319
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ec9911f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_chosen.min_1.js");
            // line 320
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_custom_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_dropzone_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_infobox.min_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_jquery-2.2.0.min_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_jquery.counterup.min_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_jquery.jpanelmenu_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_magnific-popup.min_8.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_maps_9.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_markerclusterer_10.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_masonry.min_11.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_owl.carousel.min_12.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_plugins_13.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_plugins.min_14.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_pratham_15.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_pratham.min_16.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_rangeSlider_17.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_17") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_slick.min_18.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_18") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_sticky-kit.min_19.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_19") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_switcher_20.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_20") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_tooltips.min_21.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_21") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_vendor_22.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_22") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_vendor.min_23.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "ec9911f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 322
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/switcher.js"), "html", null, true);
        echo "\" />

    <div id=\"style-switcher\">
        <h2>Color Switcher <a href=\"#\"><i class=\"sl sl-icon-settings\"></i></a></h2>

        <div>
            <ul class=\"colors\" id=\"color1\">
                <li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
                <li><a href=\"#\" class=\"green\" title=\"Green\"></a></li>
                <li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
                <li><a href=\"#\" class=\"navy\" title=\"Navy\"></a></li>
                <li><a href=\"#\" class=\"yellow\" title=\"Yellow\"></a></li>
                <li><a href=\"#\" class=\"peach\" title=\"Peach\"></a></li>
                <li><a href=\"#\" class=\"beige\" title=\"Beige\"></a></li>
                <li><a href=\"#\" class=\"purple\" title=\"Purple\"></a></li>
                <li><a href=\"#\" class=\"celadon\" title=\"Celadon\"></a></li>
                <li><a href=\"#\" class=\"pink\" title=\"Pink\"></a></li>
                <li><a href=\"#\" class=\"red\" title=\"Red\"></a></li>
                <li><a href=\"#\" class=\"brown\" title=\"Brown\"></a></li>
                <li><a href=\"#\" class=\"cherry\" title=\"Cherry\"></a></li>
                <li><a href=\"#\" class=\"cyan\" title=\"Cyan\"></a></li>
                <li><a href=\"#\" class=\"gray\" title=\"Gray\"></a></li>
                <li><a href=\"#\" class=\"olive\" title=\"Olive\"></a></li>
            </ul>
        </div>

    </div>
    <!-- Style Switcher / End -->


</div>
";
        
        $__internal_4cce475b4a41ef1eda91a6502f2d9fcdde0bee30e041c8bf8400360deda17d4c->leave($__internal_4cce475b4a41ef1eda91a6502f2d9fcdde0bee30e041c8bf8400360deda17d4c_prof);

        
        $__internal_b74cb1ad7374f0254486dce70709e9d6f0633cd36b12ce2db5b525999d5be9ec->leave($__internal_b74cb1ad7374f0254486dce70709e9d6f0633cd36b12ce2db5b525999d5be9ec_prof);

    }

    // line 46
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_d77a47ceeb641e0bb734bd60a7bb601c2b4cfd0c1d092cc7a317d2abafe31d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77a47ceeb641e0bb734bd60a7bb601c2b4cfd0c1d092cc7a317d2abafe31d5f->enter($__internal_d77a47ceeb641e0bb734bd60a7bb601c2b4cfd0c1d092cc7a317d2abafe31d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_0f4f509e19e40cbac439f4eb5a274940cd88a21c1f336ad7b000e0d6dae873af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4f509e19e40cbac439f4eb5a274940cd88a21c1f336ad7b000e0d6dae873af->enter($__internal_0f4f509e19e40cbac439f4eb5a274940cd88a21c1f336ad7b000e0d6dae873af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 47
        echo "    <header id=\"header-container\">

        <!-- Topbar -->
        <div id=\"top-bar\">
            <div class=\"container\">

                <!-- Left Side Content -->
                <div class=\"left-side\">

                    <!-- Top bar -->
                    <ul class=\"top-bar-menu\">
                        <li><i class=\"fa fa-phone\"></i> +216 20 795 937 </li>
                        <li><i class=\"fa fa-envelope\"></i><a href=\"mailto:support@joinmyride.tn\">support@joinmyride.tn</a></li>

                    </ul>

                </div>
                <!-- Left Side Content / End -->


                <!-- Left Side Content -->
                <div class=\"right-side\">

                    <!-- Social Icons -->
                    <ul class=\"social-icons\">
                        <li><a class=\"facebook\" href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a class=\"twitter\" href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a class=\"gplus\" href=\"#\"><i class=\"icon-gplus\"></i></a></li>
                        <li><a class=\"pinterest\" href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
                    </ul>

                </div>
                <!-- Left Side Content / End -->

            </div>
        </div>
        <div class=\"clearfix\"></div>
        <!-- Topbar / End -->


        <!-- Header -->
        <div id=\"header\">
            <div class=\"container\">

                <!-- Left Side Content -->
                <div class=\"left-side\">

                    <!-- Logo -->
                    <div id=\"logo\">

                        ";
        // line 97
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "311886d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_311886d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/311886d_logo_1.png");
            // line 98
            echo "
";
            // line 102
            echo "                        ";
        } else {
            // asset "311886d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_311886d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/311886d.png");
            // line 98
            echo "
";
            // line 102
            echo "                        ";
        }
        unset($context["asset_url"]);
        // line 103
        echo "                    </div>


                    <!-- Mobile Navigation -->
                    <div class=\"menu-responsive\">
                        <i class=\"fa fa-reorder menu-trigger\"></i>
                    </div>


                    <!-- Main Navigation -->
                    <nav id=\"navigation\" class=\"style-1\">
                        <ul id=\"responsive\">

                            <li><a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homeuser");
        echo "\">Home</a>

                            </li>

                            <li><a href=\"#\">Rides</a>
                                <ul>
                                    <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("trajets");
        echo "\">Rides shared</a>

                                    </li>
                                    <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rideoffer");
        echo "\">Offer ride!</a>

                                    </li>
                                </ul>
                            </li>

";
        // line 150
        echo "
                            <li><a class=\"current\" href=\"#\">Links</a>
                                <ul>
                                    <li><a href=\"#\">My Account</a>
                                    </li>
                                    <li><a href=\"#\">Events</a>
                                    </li>
                                    <li><a href=\"#\">Forum</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <div class=\"clearfix\"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->
                <div class=\"right-side\">
                    <!-- Header Widget -->

                    <div class=\"header-widget\">
                        ";
        // line 176
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 177
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"sign-in\"><i class=\"fa fa-user\"></i> Log In / Register</a>
                        ";
        } else {
            // line 179
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"sign-in\"><i class=\"fa fa-user\"></i> Logout</a>
                            <a href=\"";
            // line 180
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rideoffer");
            echo "\" class=\"button border\">Offer a ride</a>
                        ";
        }
        // line 182
        echo "                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class=\"clearfix\"></div>
    <!-- Header Container / End -->
    ";
        
        $__internal_0f4f509e19e40cbac439f4eb5a274940cd88a21c1f336ad7b000e0d6dae873af->leave($__internal_0f4f509e19e40cbac439f4eb5a274940cd88a21c1f336ad7b000e0d6dae873af_prof);

        
        $__internal_d77a47ceeb641e0bb734bd60a7bb601c2b4cfd0c1d092cc7a317d2abafe31d5f->leave($__internal_d77a47ceeb641e0bb734bd60a7bb601c2b4cfd0c1d092cc7a317d2abafe31d5f_prof);

    }

    // line 230
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f2e306aabb2fc278fb8949fd99882041c3ce854c0d5e6ad4798033e8a68bebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2e306aabb2fc278fb8949fd99882041c3ce854c0d5e6ad4798033e8a68bebe->enter($__internal_3f2e306aabb2fc278fb8949fd99882041c3ce854c0d5e6ad4798033e8a68bebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f006b190aef976dfbb3d472e7e1e1155e573126134e77758ee9fa9811ace8555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f006b190aef976dfbb3d472e7e1e1155e573126134e77758ee9fa9811ace8555->enter($__internal_f006b190aef976dfbb3d472e7e1e1155e573126134e77758ee9fa9811ace8555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 231
        echo "                    ";
        
        $__internal_f006b190aef976dfbb3d472e7e1e1155e573126134e77758ee9fa9811ace8555->leave($__internal_f006b190aef976dfbb3d472e7e1e1155e573126134e77758ee9fa9811ace8555_prof);

        
        $__internal_3f2e306aabb2fc278fb8949fd99882041c3ce854c0d5e6ad4798033e8a68bebe->leave($__internal_3f2e306aabb2fc278fb8949fd99882041c3ce854c0d5e6ad4798033e8a68bebe_prof);

    }

    // line 241
    public function block_footer($context, array $blocks = array())
    {
        $__internal_909272789c0516639ecbf261535d2f2ce187a2d57bcc1f6f8c67ddfe401edbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909272789c0516639ecbf261535d2f2ce187a2d57bcc1f6f8c67ddfe401edbb6->enter($__internal_909272789c0516639ecbf261535d2f2ce187a2d57bcc1f6f8c67ddfe401edbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_958c9c6372986b55b13676379a0a0c4b29ed9891a114223c54b2dad42d8adc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958c9c6372986b55b13676379a0a0c4b29ed9891a114223c54b2dad42d8adc65->enter($__internal_958c9c6372986b55b13676379a0a0c4b29ed9891a114223c54b2dad42d8adc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 242
        echo "    <!-- Footer
================================================== -->
    <div class=\"margin-top-55\"></div>

    <div id=\"footer\">
        <!-- Main -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5 col-sm-6\">
                    ";
        // line 251
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "311886d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_311886d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/311886d_logo_1.png");
            // line 252
            echo "
                    <img src=\"";
            // line 253
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" href=\"index-1.html\"  class=\"footer-logo\" alt=\"Example\"/>
                    ";
        } else {
            // asset "311886d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_311886d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/311886d.png");
            // line 252
            echo "
                    <img src=\"";
            // line 253
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" href=\"index-1.html\"  class=\"footer-logo\" alt=\"Example\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 255
        echo "
                    <br><br>
                    <p>Join My Ride is a crossplatform application developed by Tunisians to help the community embrace the sharing economy mentality.</p>
                </div>

                <div class=\"col-md-4 col-sm-6 \">
                    <h4>Helpful Links</h4>
                    <ul class=\"footer-links\">
                        <li><a href=\"#\">Login</a></li>
                        <li><a href=\"#\">Sign Up</a></li>
                        <li><a href=\"#\">My Account</a></li>
                        <li><a href=\"#\">Add Property</a></li>
                        <li><a href=\"#\">Pricing</a></li>
                        <li><a href=\"#\">Privacy Policy</a></li>
                    </ul>

                    <ul class=\"footer-links\">
                        <li><a href=\"#\">FAQ</a></li>
                        <li><a href=\"#\">Blog</a></li>
                        <li><a href=\"#\">Our Agents</a></li>
                        <li><a href=\"#\">How It Works</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"col-md-3  col-sm-12\">
                    <h4>Contact Us</h4>
                    <div class=\"text-widget\">
                        <span>Arianna, El Ghazela, Esprit</span> <br>
                        Phone: <span> +216 20 795 937 </span><br>
                        E-Mail: <span><a href=\"mailto:support@joinmyride.tn\">support@joinmyride.tn</a></span><br>
                    </div>

                    <ul class=\"social-icons margin-top-20\">
                        <li><a class=\"facebook\" href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a class=\"twitter\" href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a class=\"gplus\" href=\"#\"><i class=\"icon-gplus\"></i></a></li>
                        <li><a class=\"vimeo\" href=\"#\"><i class=\"icon-vimeo\"></i></a></li>
                    </ul>

                </div>

            </div>

            <!-- Copyright -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"copyrights\">© 2016 Join My Ride. All Rights Reserved.</div>
                </div>
            </div>

        </div>

    </div>
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id=\"backtotop\"><a href=\"#\"></a></div>
    ";
        
        $__internal_958c9c6372986b55b13676379a0a0c4b29ed9891a114223c54b2dad42d8adc65->leave($__internal_958c9c6372986b55b13676379a0a0c4b29ed9891a114223c54b2dad42d8adc65_prof);

        
        $__internal_909272789c0516639ecbf261535d2f2ce187a2d57bcc1f6f8c67ddfe401edbb6->leave($__internal_909272789c0516639ecbf261535d2f2ce187a2d57bcc1f6f8c67ddfe401edbb6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  685 => 255,  679 => 253,  676 => 252,  669 => 253,  666 => 252,  662 => 251,  651 => 242,  642 => 241,  632 => 231,  623 => 230,  601 => 182,  596 => 180,  591 => 179,  585 => 177,  583 => 176,  555 => 150,  546 => 125,  540 => 122,  531 => 116,  516 => 103,  512 => 102,  509 => 98,  504 => 102,  501 => 98,  497 => 97,  445 => 47,  436 => 46,  393 => 322,  247 => 320,  243 => 319,  238 => 316,  236 => 241,  225 => 232,  223 => 230,  201 => 211,  183 => 195,  181 => 46,  173 => 40,  166 => 38,  157 => 35,  152 => 34,  147 => 33,  142 => 32,  140 => 31,  136 => 29,  133 => 28,  131 => 27,  128 => 26,  126 => 22,  124 => 21,  120 => 19,  111 => 18,  99 => 14,  94 => 13,  85 => 12,  67 => 6,  55 => 354,  53 => 18,  49 => 16,  47 => 12,  38 => 6,  31 => 1,);
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
    <!-- Basic Page Needs
 ================================================== -->
    <title>{% block title %}Join My Ride{% endblock title %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <!-- CSS
    ================================================== -->
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/views/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/views/css/colors/main.css') }}\" id=\"colors\">
    {% endblock %}
</head>
<body>
{% block content %}

 <div>
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {# {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
         <a href=\"{{ path('fos_user_security_logout') }}\">
             {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
         </a>#}
    {% else %}
        {#<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
    {% endif %}
</div>

{% if app.request.hasPreviousSession %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"flash-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}

<div id=\"wrapper\">


    <!-- Header Container
    ================================================== -->
    {% block topbody %}
    <header id=\"header-container\">

        <!-- Topbar -->
        <div id=\"top-bar\">
            <div class=\"container\">

                <!-- Left Side Content -->
                <div class=\"left-side\">

                    <!-- Top bar -->
                    <ul class=\"top-bar-menu\">
                        <li><i class=\"fa fa-phone\"></i> +216 20 795 937 </li>
                        <li><i class=\"fa fa-envelope\"></i><a href=\"mailto:support@joinmyride.tn\">support@joinmyride.tn</a></li>

                    </ul>

                </div>
                <!-- Left Side Content / End -->


                <!-- Left Side Content -->
                <div class=\"right-side\">

                    <!-- Social Icons -->
                    <ul class=\"social-icons\">
                        <li><a class=\"facebook\" href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a class=\"twitter\" href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a class=\"gplus\" href=\"#\"><i class=\"icon-gplus\"></i></a></li>
                        <li><a class=\"pinterest\" href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
                    </ul>

                </div>
                <!-- Left Side Content / End -->

            </div>
        </div>
        <div class=\"clearfix\"></div>
        <!-- Topbar / End -->


        <!-- Header -->
        <div id=\"header\">
            <div class=\"container\">

                <!-- Left Side Content -->
                <div class=\"left-side\">

                    <!-- Logo -->
                    <div id=\"logo\">

                        {% image 'bundles/views/images/logo.png' %}

{#
                        <img src=\"{{ asset_url }}\" href=\"index-1.html\" alt=\"Example\"/>
#}
                        {% endimage %}
                    </div>


                    <!-- Mobile Navigation -->
                    <div class=\"menu-responsive\">
                        <i class=\"fa fa-reorder menu-trigger\"></i>
                    </div>


                    <!-- Main Navigation -->
                    <nav id=\"navigation\" class=\"style-1\">
                        <ul id=\"responsive\">

                            <li><a href=\"{{ path('homeuser') }}\">Home</a>

                            </li>

                            <li><a href=\"#\">Rides</a>
                                <ul>
                                    <li><a href=\"{{ path('trajets') }}\">Rides shared</a>

                                    </li>
                                    <li><a href=\"{{ path('rideoffer') }}\">Offer ride!</a>

                                    </li>
                                </ul>
                            </li>

{#
                            <li><a href=\"#\">Features</a>
                                <ul>
                                    <li><a href=\"#\">Single Properties</a>

                                    </li>
                                    <li><a href=\"#\">Search Styles</a>

                                    </li>
                                    <li
                                    </li>
                                    <li><a href=\"#\">Agents</a>

                                    </li>

                                    <li><a href=\"submit-property.htm\">Submit Property</a></li>
                                </ul>
                            </li>
#}

                            <li><a class=\"current\" href=\"#\">Links</a>
                                <ul>
                                    <li><a href=\"#\">My Account</a>
                                    </li>
                                    <li><a href=\"#\">Events</a>
                                    </li>
                                    <li><a href=\"#\">Forum</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <div class=\"clearfix\"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->
                <div class=\"right-side\">
                    <!-- Header Widget -->

                    <div class=\"header-widget\">
                        {% if not is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <a href=\"{{ path('fos_user_security_login') }}\" class=\"sign-in\"><i class=\"fa fa-user\"></i> Log In / Register</a>
                        {% else %}
                            <a href=\"{{ path('fos_user_security_logout') }}\" class=\"sign-in\"><i class=\"fa fa-user\"></i> Logout</a>
                            <a href=\"{{ path('rideoffer') }}\" class=\"button border\">Offer a ride</a>
                        {% endif %}
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class=\"clearfix\"></div>
    <!-- Header Container / End -->
    {% endblock %}



    <!-- Titlebar
    ================================================== -->

    <div id=\"titlebar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">

                    <h2>Log In & Register</h2>

                    <!-- Breadcrumbs -->
                    <nav id=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"{{ path('homeuser') }}\">Home</a></li>
                            <li>Log In & Register</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <!-- Contact
    ================================================== -->

    <!-- Container -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"my-account style-1 margin-top-5 margin-bottom-40\">
                    {% block fos_user_content %}
                    {% endblock fos_user_content %}
                </div>
            </div>
        </div>

    </div>




{% block footer %}
    <!-- Footer
================================================== -->
    <div class=\"margin-top-55\"></div>

    <div id=\"footer\">
        <!-- Main -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5 col-sm-6\">
                    {% image 'bundles/views/images/logo.png' %}

                    <img src=\"{{ asset_url }}\" href=\"index-1.html\"  class=\"footer-logo\" alt=\"Example\"/>
                    {% endimage %}

                    <br><br>
                    <p>Join My Ride is a crossplatform application developed by Tunisians to help the community embrace the sharing economy mentality.</p>
                </div>

                <div class=\"col-md-4 col-sm-6 \">
                    <h4>Helpful Links</h4>
                    <ul class=\"footer-links\">
                        <li><a href=\"#\">Login</a></li>
                        <li><a href=\"#\">Sign Up</a></li>
                        <li><a href=\"#\">My Account</a></li>
                        <li><a href=\"#\">Add Property</a></li>
                        <li><a href=\"#\">Pricing</a></li>
                        <li><a href=\"#\">Privacy Policy</a></li>
                    </ul>

                    <ul class=\"footer-links\">
                        <li><a href=\"#\">FAQ</a></li>
                        <li><a href=\"#\">Blog</a></li>
                        <li><a href=\"#\">Our Agents</a></li>
                        <li><a href=\"#\">How It Works</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"col-md-3  col-sm-12\">
                    <h4>Contact Us</h4>
                    <div class=\"text-widget\">
                        <span>Arianna, El Ghazela, Esprit</span> <br>
                        Phone: <span> +216 20 795 937 </span><br>
                        E-Mail: <span><a href=\"mailto:support@joinmyride.tn\">support@joinmyride.tn</a></span><br>
                    </div>

                    <ul class=\"social-icons margin-top-20\">
                        <li><a class=\"facebook\" href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a class=\"twitter\" href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a class=\"gplus\" href=\"#\"><i class=\"icon-gplus\"></i></a></li>
                        <li><a class=\"vimeo\" href=\"#\"><i class=\"icon-vimeo\"></i></a></li>
                    </ul>

                </div>

            </div>

            <!-- Copyright -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"copyrights\">© 2016 Join My Ride. All Rights Reserved.</div>
                </div>
            </div>

        </div>

    </div>
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id=\"backtotop\"><a href=\"#\"></a></div>
    {% endblock %}

    <!-- Scripts
    ================================================== -->
    {% javascripts 'bundles/views/scripts/*' %}
    <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
    <script src=\"{{ asset('bundles/views/scripts/switcher.js') }}\" />

    <div id=\"style-switcher\">
        <h2>Color Switcher <a href=\"#\"><i class=\"sl sl-icon-settings\"></i></a></h2>

        <div>
            <ul class=\"colors\" id=\"color1\">
                <li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
                <li><a href=\"#\" class=\"green\" title=\"Green\"></a></li>
                <li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
                <li><a href=\"#\" class=\"navy\" title=\"Navy\"></a></li>
                <li><a href=\"#\" class=\"yellow\" title=\"Yellow\"></a></li>
                <li><a href=\"#\" class=\"peach\" title=\"Peach\"></a></li>
                <li><a href=\"#\" class=\"beige\" title=\"Beige\"></a></li>
                <li><a href=\"#\" class=\"purple\" title=\"Purple\"></a></li>
                <li><a href=\"#\" class=\"celadon\" title=\"Celadon\"></a></li>
                <li><a href=\"#\" class=\"pink\" title=\"Pink\"></a></li>
                <li><a href=\"#\" class=\"red\" title=\"Red\"></a></li>
                <li><a href=\"#\" class=\"brown\" title=\"Brown\"></a></li>
                <li><a href=\"#\" class=\"cherry\" title=\"Cherry\"></a></li>
                <li><a href=\"#\" class=\"cyan\" title=\"Cyan\"></a></li>
                <li><a href=\"#\" class=\"gray\" title=\"Gray\"></a></li>
                <li><a href=\"#\" class=\"olive\" title=\"Olive\"></a></li>
            </ul>
        </div>

    </div>
    <!-- Style Switcher / End -->


</div>
{% endblock %}
</body>
</html>
", "@FOSUser/layout.html.twig", "/var/www/html/PIDEVS/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
