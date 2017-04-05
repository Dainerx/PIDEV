<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_ac25640c47f0c1062d2b7d1e429bf22af191749c76785aa0564589026e0ff654 extends Twig_Template
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
        $__internal_2fdc8778f57e83e0f789af30b34aeebd26a5f6c3d52117999be610c43460203b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdc8778f57e83e0f789af30b34aeebd26a5f6c3d52117999be610c43460203b->enter($__internal_2fdc8778f57e83e0f789af30b34aeebd26a5f6c3d52117999be610c43460203b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_206da2851ae3efd622b631446415c4eb42241d9042bba4e54e886a47005dccce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206da2851ae3efd622b631446415c4eb42241d9042bba4e54e886a47005dccce->enter($__internal_206da2851ae3efd622b631446415c4eb42241d9042bba4e54e886a47005dccce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

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
        // line 345
        echo "</body>
</html>
";
        
        $__internal_2fdc8778f57e83e0f789af30b34aeebd26a5f6c3d52117999be610c43460203b->leave($__internal_2fdc8778f57e83e0f789af30b34aeebd26a5f6c3d52117999be610c43460203b_prof);

        
        $__internal_206da2851ae3efd622b631446415c4eb42241d9042bba4e54e886a47005dccce->leave($__internal_206da2851ae3efd622b631446415c4eb42241d9042bba4e54e886a47005dccce_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_769a405be897661e21f3168d3eed22550def84950bcaec5d27dcea841d526810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769a405be897661e21f3168d3eed22550def84950bcaec5d27dcea841d526810->enter($__internal_769a405be897661e21f3168d3eed22550def84950bcaec5d27dcea841d526810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56b861e2c6567ab604845e4e74fe0a67a8e69092bfdfb6ef53cceb78b704dfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b861e2c6567ab604845e4e74fe0a67a8e69092bfdfb6ef53cceb78b704dfd6->enter($__internal_56b861e2c6567ab604845e4e74fe0a67a8e69092bfdfb6ef53cceb78b704dfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Join My Ride";
        
        $__internal_56b861e2c6567ab604845e4e74fe0a67a8e69092bfdfb6ef53cceb78b704dfd6->leave($__internal_56b861e2c6567ab604845e4e74fe0a67a8e69092bfdfb6ef53cceb78b704dfd6_prof);

        
        $__internal_769a405be897661e21f3168d3eed22550def84950bcaec5d27dcea841d526810->leave($__internal_769a405be897661e21f3168d3eed22550def84950bcaec5d27dcea841d526810_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba23f4a630c365e3e97b2ea3a03d572302c2ac4a24b63d18ae8eacc4ae503e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba23f4a630c365e3e97b2ea3a03d572302c2ac4a24b63d18ae8eacc4ae503e99->enter($__internal_ba23f4a630c365e3e97b2ea3a03d572302c2ac4a24b63d18ae8eacc4ae503e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_74ee2df8809b7fed2b4361de1ed77646d2976b1c9644fb591906398ef1b373b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ee2df8809b7fed2b4361de1ed77646d2976b1c9644fb591906398ef1b373b9->enter($__internal_74ee2df8809b7fed2b4361de1ed77646d2976b1c9644fb591906398ef1b373b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/css/colors/main.css"), "html", null, true);
        echo "\" id=\"colors\">
    ";
        
        $__internal_74ee2df8809b7fed2b4361de1ed77646d2976b1c9644fb591906398ef1b373b9->leave($__internal_74ee2df8809b7fed2b4361de1ed77646d2976b1c9644fb591906398ef1b373b9_prof);

        
        $__internal_ba23f4a630c365e3e97b2ea3a03d572302c2ac4a24b63d18ae8eacc4ae503e99->leave($__internal_ba23f4a630c365e3e97b2ea3a03d572302c2ac4a24b63d18ae8eacc4ae503e99_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b8e3875376a0442119277b9724b11d8b7edc4f1d0817865521f6f376520d678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8e3875376a0442119277b9724b11d8b7edc4f1d0817865521f6f376520d678->enter($__internal_8b8e3875376a0442119277b9724b11d8b7edc4f1d0817865521f6f376520d678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a8056c514e6413944f5f3cd67b27fd4ee2df745d95e30fb62ed5a5cbcc8540e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8056c514e6413944f5f3cd67b27fd4ee2df745d95e30fb62ed5a5cbcc8540e9->enter($__internal_a8056c514e6413944f5f3cd67b27fd4ee2df745d95e30fb62ed5a5cbcc8540e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('topbody', $context, $blocks);
        // line 186
        echo "


    <!-- Titlebar
    ================================================== -->1

    <div id=\"titlebar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">

                    <h2>Log In & Register</h2>

                    <!-- Breadcrumbs -->
                    <nav id=\"breadcrumbs\">
                        <ul>
                            <li><a href=\"";
        // line 202
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
        // line 221
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 223
        echo "                </div>
            </div>
        </div>

    </div>




";
        // line 232
        $this->displayBlock('footer', $context, $blocks);
        // line 307
        echo "
    <!-- Scripts
    ================================================== -->
    ";
        // line 310
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ec9911f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_chosen.min_1.js");
            // line 311
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_offerride_12.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_owl.carousel.min_13.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_rangeSlider_14.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_slick.min_15.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_sticky-kit.min_16.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_switcher_17.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ec9911f_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ec9911f_17") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ec9911f_part_1_tooltips.min_18.js");
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
        // line 313
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
        
        $__internal_a8056c514e6413944f5f3cd67b27fd4ee2df745d95e30fb62ed5a5cbcc8540e9->leave($__internal_a8056c514e6413944f5f3cd67b27fd4ee2df745d95e30fb62ed5a5cbcc8540e9_prof);

        
        $__internal_8b8e3875376a0442119277b9724b11d8b7edc4f1d0817865521f6f376520d678->leave($__internal_8b8e3875376a0442119277b9724b11d8b7edc4f1d0817865521f6f376520d678_prof);

    }

    // line 20
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_17be9cf1029f92e146c01b33f9053821c4e7ca1480de697a3e592807c41c8600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17be9cf1029f92e146c01b33f9053821c4e7ca1480de697a3e592807c41c8600->enter($__internal_17be9cf1029f92e146c01b33f9053821c4e7ca1480de697a3e592807c41c8600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_a975e35a83e543b4e764e8c4b0bbc12ca867ca7b5a38b05987285a1e5b2acf86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a975e35a83e543b4e764e8c4b0bbc12ca867ca7b5a38b05987285a1e5b2acf86->enter($__internal_a975e35a83e543b4e764e8c4b0bbc12ca867ca7b5a38b05987285a1e5b2acf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 21
        echo "<div>
    ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "        ";
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "        ";
            // line 29
            echo "    ";
        }
        // line 30
        echo "</div>

";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 33
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 34
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 35
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 36
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 41
        echo "
<div id=\"wrapper\">


    <!-- Header Container
    ================================================== -->
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

                        ";
        // line 97
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "311886d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_311886d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/311886d_logo_1.png");
            // line 98
            echo "
                        <img src=\"";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" href=\"index-1.html\" alt=\"Example\"/>
                        ";
        } else {
            // asset "311886d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_311886d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/311886d.png");
            // line 98
            echo "
                        <img src=\"";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" href=\"index-1.html\" alt=\"Example\"/>
                        ";
        }
        unset($context["asset_url"]);
        // line 101
        echo "                    </div>


                    <!-- Mobile Navigation -->
                    <div class=\"menu-responsive\">
                        <i class=\"fa fa-reorder menu-trigger\"></i>
                    </div>


                    <!-- Main Navigation -->
                    <nav id=\"navigation\" class=\"style-1\">
                        <ul id=\"responsive\">

                            <li><a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homeuser");
        echo "\">Home</a>

                            </li>

                            <li><a href=\"#\">Listings</a>
                                <ul>
                                    <li><a href=\"#\">List Layout</a>

                                    </li>
                                    <li><a href=\"#\">Grid Layout</a>

                                    </li>
                                    <li><a href=\"#\">Half Map</a>

                                    </li>
                                </ul>
                            </li>

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

                            <li><a class=\"current\" href=\"#\">Pages</a>
                                <ul>
                                    <li><a href=\"blog.htm\">Blog</a>

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
                        <a href=\"login-register.htm\" class=\"sign-in\"><i class=\"fa fa-user\"></i> Log In / Register</a>
                        <a href=\"";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rideoffer");
        echo "\" class=\"button border\">Offer a ride</a>
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
    ";
        
        $__internal_a975e35a83e543b4e764e8c4b0bbc12ca867ca7b5a38b05987285a1e5b2acf86->leave($__internal_a975e35a83e543b4e764e8c4b0bbc12ca867ca7b5a38b05987285a1e5b2acf86_prof);

        
        $__internal_17be9cf1029f92e146c01b33f9053821c4e7ca1480de697a3e592807c41c8600->leave($__internal_17be9cf1029f92e146c01b33f9053821c4e7ca1480de697a3e592807c41c8600_prof);

    }

    // line 221
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3622ced1a04c711d260e00c188bf62b3fc272301552f2d36d610499d7d78a05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3622ced1a04c711d260e00c188bf62b3fc272301552f2d36d610499d7d78a05a->enter($__internal_3622ced1a04c711d260e00c188bf62b3fc272301552f2d36d610499d7d78a05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9566ba5d2a47730e2ad2a7d97cf598a990b3ca99b21243cc6a157b5fde3e2d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9566ba5d2a47730e2ad2a7d97cf598a990b3ca99b21243cc6a157b5fde3e2d50->enter($__internal_9566ba5d2a47730e2ad2a7d97cf598a990b3ca99b21243cc6a157b5fde3e2d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 222
        echo "                    ";
        
        $__internal_9566ba5d2a47730e2ad2a7d97cf598a990b3ca99b21243cc6a157b5fde3e2d50->leave($__internal_9566ba5d2a47730e2ad2a7d97cf598a990b3ca99b21243cc6a157b5fde3e2d50_prof);

        
        $__internal_3622ced1a04c711d260e00c188bf62b3fc272301552f2d36d610499d7d78a05a->leave($__internal_3622ced1a04c711d260e00c188bf62b3fc272301552f2d36d610499d7d78a05a_prof);

    }

    // line 232
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8eb8f3a0a1fac2c3ac6adbfd8325a3c78cb5975fc94c7ceeb9f4632ebd9bc2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb8f3a0a1fac2c3ac6adbfd8325a3c78cb5975fc94c7ceeb9f4632ebd9bc2dc->enter($__internal_8eb8f3a0a1fac2c3ac6adbfd8325a3c78cb5975fc94c7ceeb9f4632ebd9bc2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c16519159693e83dccb2dd132bcb5a326504250df55af9dfa6fe5b6775477d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16519159693e83dccb2dd132bcb5a326504250df55af9dfa6fe5b6775477d10->enter($__internal_c16519159693e83dccb2dd132bcb5a326504250df55af9dfa6fe5b6775477d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 233
        echo "    <!-- Footer
================================================== -->
    <div class=\"margin-top-55\"></div>

    <div id=\"footer\">
        <!-- Main -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5 col-sm-6\">
                    ";
        // line 242
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "311886d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_311886d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/311886d_logo_1.png");
            // line 243
            echo "
                    <img src=\"";
            // line 244
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" href=\"index-1.html\"  class=\"footer-logo\" alt=\"Example\"/>
                    ";
        } else {
            // asset "311886d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_311886d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/311886d.png");
            // line 243
            echo "
                    <img src=\"";
            // line 244
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" href=\"index-1.html\"  class=\"footer-logo\" alt=\"Example\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 246
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
        
        $__internal_c16519159693e83dccb2dd132bcb5a326504250df55af9dfa6fe5b6775477d10->leave($__internal_c16519159693e83dccb2dd132bcb5a326504250df55af9dfa6fe5b6775477d10_prof);

        
        $__internal_8eb8f3a0a1fac2c3ac6adbfd8325a3c78cb5975fc94c7ceeb9f4632ebd9bc2dc->leave($__internal_8eb8f3a0a1fac2c3ac6adbfd8325a3c78cb5975fc94c7ceeb9f4632ebd9bc2dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  652 => 246,  646 => 244,  643 => 243,  636 => 244,  633 => 243,  629 => 242,  618 => 233,  609 => 232,  599 => 222,  590 => 221,  566 => 172,  505 => 114,  490 => 101,  484 => 99,  481 => 98,  474 => 99,  471 => 98,  467 => 97,  409 => 41,  402 => 39,  393 => 36,  388 => 35,  383 => 34,  378 => 33,  376 => 32,  372 => 30,  369 => 29,  367 => 28,  364 => 27,  362 => 23,  360 => 22,  357 => 21,  348 => 20,  305 => 313,  189 => 311,  185 => 310,  180 => 307,  178 => 232,  167 => 223,  165 => 221,  143 => 202,  125 => 186,  123 => 20,  120 => 19,  111 => 18,  99 => 14,  94 => 13,  85 => 12,  67 => 6,  55 => 345,  53 => 18,  49 => 16,  47 => 12,  38 => 6,  31 => 1,);
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

    {% block topbody %}
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

                        <img src=\"{{ asset_url }}\" href=\"index-1.html\" alt=\"Example\"/>
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

                            <li><a href=\"#\">Listings</a>
                                <ul>
                                    <li><a href=\"#\">List Layout</a>

                                    </li>
                                    <li><a href=\"#\">Grid Layout</a>

                                    </li>
                                    <li><a href=\"#\">Half Map</a>

                                    </li>
                                </ul>
                            </li>

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

                            <li><a class=\"current\" href=\"#\">Pages</a>
                                <ul>
                                    <li><a href=\"blog.htm\">Blog</a>

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
                        <a href=\"login-register.htm\" class=\"sign-in\"><i class=\"fa fa-user\"></i> Log In / Register</a>
                        <a href=\"{{ path('rideoffer') }}\" class=\"button border\">Offer a ride</a>
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
    ================================================== -->1

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
