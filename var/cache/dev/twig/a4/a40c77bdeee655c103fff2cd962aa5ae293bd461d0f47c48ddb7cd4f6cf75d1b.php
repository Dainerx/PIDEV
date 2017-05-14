<?php

/* @FOSUser/layoutbackoffice.html.twig */
class __TwigTemplate_0621e7869e739c89b74f4f12f9db49ba94794a9977b2978dbdc1a7973ea13728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'topbody' => array($this, 'block_topbody'),
            'sidemenu' => array($this, 'block_sidemenu'),
            'mainpage' => array($this, 'block_mainpage'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75365c44064b99b41b9e28cda74a4b30098b11e135ee6a3aa13c3708b9b98eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75365c44064b99b41b9e28cda74a4b30098b11e135ee6a3aa13c3708b9b98eb1->enter($__internal_75365c44064b99b41b9e28cda74a4b30098b11e135ee6a3aa13c3708b9b98eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layoutbackoffice.html.twig"));

        $__internal_6c9077cf49994403335d27fe4131eb4bc8bc8570e05d8d0d95e1d6ebb1589ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9077cf49994403335d27fe4131eb4bc8bc8570e05d8d0d95e1d6ebb1589ca5->enter($__internal_6c9077cf49994403335d27fe4131eb4bc8bc8570e05d8d0d95e1d6ebb1589ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layoutbackoffice.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html>
<head>
    <title>Share my ride</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes\">
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"author\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/favicon.png"), "html", null, true);
        echo "\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>

<body>
<div class=\"prtm-wrapper\">
";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 1240
        echo "</div>
</body>

</html>";
        
        $__internal_75365c44064b99b41b9e28cda74a4b30098b11e135ee6a3aa13c3708b9b98eb1->leave($__internal_75365c44064b99b41b9e28cda74a4b30098b11e135ee6a3aa13c3708b9b98eb1_prof);

        
        $__internal_6c9077cf49994403335d27fe4131eb4bc8bc8570e05d8d0d95e1d6ebb1589ca5->leave($__internal_6c9077cf49994403335d27fe4131eb4bc8bc8570e05d8d0d95e1d6ebb1589ca5_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eab55c1dda6c9f018db97a479b4b2896b0f05ebcef16720f81e6d39a09042564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab55c1dda6c9f018db97a479b4b2896b0f05ebcef16720f81e6d39a09042564->enter($__internal_eab55c1dda6c9f018db97a479b4b2896b0f05ebcef16720f81e6d39a09042564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f078e3acf84a53d1099f340c0fb9258b2e76ba0712b7a54ca00b866519868dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f078e3acf84a53d1099f340c0fb9258b2e76ba0712b7a54ca00b866519868dbf->enter($__internal_f078e3acf84a53d1099f340c0fb9258b2e76ba0712b7a54ca00b866519868dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/css/vendor.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/css/plugins.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/css/pratham.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_f078e3acf84a53d1099f340c0fb9258b2e76ba0712b7a54ca00b866519868dbf->leave($__internal_f078e3acf84a53d1099f340c0fb9258b2e76ba0712b7a54ca00b866519868dbf_prof);

        
        $__internal_eab55c1dda6c9f018db97a479b4b2896b0f05ebcef16720f81e6d39a09042564->leave($__internal_eab55c1dda6c9f018db97a479b4b2896b0f05ebcef16720f81e6d39a09042564_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_2919802ee63f591336a0e3b28e1413c13a5ce45941583b0983dd309223016be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2919802ee63f591336a0e3b28e1413c13a5ce45941583b0983dd309223016be9->enter($__internal_2919802ee63f591336a0e3b28e1413c13a5ce45941583b0983dd309223016be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f24c79900f1cf65a1af0b1f8bd601a6bd9c499aac17d8b6a974ba9bf300cf482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24c79900f1cf65a1af0b1f8bd601a6bd9c499aac17d8b6a974ba9bf300cf482->enter($__internal_f24c79900f1cf65a1af0b1f8bd601a6bd9c499aac17d8b6a974ba9bf300cf482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    ";
        $this->displayBlock('topbody', $context, $blocks);
        // line 224
        echo "    <div class=\"prtm-main\">
        ";
        // line 225
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 400
        echo "        <div class=\"prtm-content-wrapper\">
            <div class=\"prtm-content\">
                ";
        // line 402
        $this->displayBlock('mainpage', $context, $blocks);
        // line 1222
        echo "            </div>
            ";
        // line 1223
        $this->displayBlock('footer', $context, $blocks);
        // line 1237
        echo "        </div>
    </div>
";
        
        $__internal_f24c79900f1cf65a1af0b1f8bd601a6bd9c499aac17d8b6a974ba9bf300cf482->leave($__internal_f24c79900f1cf65a1af0b1f8bd601a6bd9c499aac17d8b6a974ba9bf300cf482_prof);

        
        $__internal_2919802ee63f591336a0e3b28e1413c13a5ce45941583b0983dd309223016be9->leave($__internal_2919802ee63f591336a0e3b28e1413c13a5ce45941583b0983dd309223016be9_prof);

    }

    // line 22
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_ff7036d4fb9745be7457f75e24797dc5eec99c6d202c3a97b28cd72c41ac700b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7036d4fb9745be7457f75e24797dc5eec99c6d202c3a97b28cd72c41ac700b->enter($__internal_ff7036d4fb9745be7457f75e24797dc5eec99c6d202c3a97b28cd72c41ac700b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_207efe28abfe93bb7ec776f578eedde8eb08471d69b3039b1b4ac14f3ef22057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207efe28abfe93bb7ec776f578eedde8eb08471d69b3039b1b4ac14f3ef22057->enter($__internal_207efe28abfe93bb7ec776f578eedde8eb08471d69b3039b1b4ac14f3ef22057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 23
        echo "    <header class=\"prtm-header\">
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                    <button class=\"c-hamburger c-hamburger--htra prtm-bars pull-right\"> <span>toggle menu</span> </button>
                    <div class=\"prtm-logo\">
                        <a class=\"navbar-brand\" href=\"index-1.htm\"><img class=\"img-responsive display-ib\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/pratham-logo.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"226\" height=\"31\"></a>
                    </div>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\" data-hover=\"dropdown\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\">
                            <div class=\"prtm-search-icon\"> <a href=\"javascript:;\" class=\"prtm-menu-search\"><i class=\"fa fa-search overlay-1\"></i></a>
                                <div class=\"prtm-navbar-search\">
                                    <div class=\"prtm-search-area\"></div>
                                    <form class=\"prtm-search-form\" method=\"post\" role=\"search\" action=\"javascript:;\"> <span class=\"prtm-search-form-title fa fa-search\"></span>
                                        <input placeholder=\"Type and hit enter\" value=\"\" name=\"s\" type=\"text\"> </form>
                                </div>
                            </div>
                        </li>
                        <li class=\"dropdown hidden-xs hidden-sm hidden-md\"> <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mega <span class=\"caret\"></span></a>
                            <div class=\"dropdown-menu prtm-mega-menu\">
                                <div class=\"prtm-mega-menu-wrap pad-all-lg\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-2\">
                                            <h4 class=\"sidenav-heading text-uppercase mrgn-b-md\">Dashboards</h4>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"index-1.htm\">Dashboard 1</a></li>
                                                <li><a href=\"dashboard-v2.htm\">Dashboard 2</a></li>
                                                <li><a href=\"dashboard-v3.htm\">Dashboard 3</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-2\">
                                            <h4 class=\"sidenav-heading text-uppercase mrgn-b-md\">Features</h4>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"ui-buttons.htm\">UI Elements</a></li>
                                                <li><a href=\"notification.htm\">Components</a></li>
                                                <li><a href=\"google-chart.htm\">Graph and Charts</a></li>
                                                <li><a href=\"googlemap.htm\">Maps</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-2\">
                                            <h4 class=\"sidenav-heading text-uppercase mrgn-b-md\">Layouts</h4>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"index-1.htm\">Sidebar At left</a></li>
                                                <li><a href=\"right-sidebar.htm\">Sidebar At right</a></li>
                                                <li><a href=\"fixed-header.htm\">Fixed Header</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-2\">
                                            <h4 class=\"sidenav-heading text-uppercase mrgn-b-md\">Pages</h4>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"users-list.htm\">Users</a></li>
                                                <li><a href=\"ecommerce-product.htm\">Ecommerce</a></li>
                                                <li><a href=\"email.htm\">Mailbox</a></li>
                                                <li><a href=\"login.htm\">Extra Pages</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">
                                            <div class=\"prtm-sparkline\">
                                                <div class=\"prtm-sparkline-list bg-success clearfix prtm-card-box\">
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"5000\">0</span> <span>New visitors</span> </div>
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                                        <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[9, 8, 9, 7, 6, 8, 7, 8]\"> </div>
                                                    </div>
                                                </div>
                                                <div class=\"prtm-sparkline-list clearfix bg-info prtm-card-box\">
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"3000\">0</span> <span>New Users</span> </div>
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                                        <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[5, 6, 8, 9, 5, 8, 4, 6]\"> </div>
                                                    </div>
                                                </div>
                                                <div class=\"prtm-sparkline-list clearfix bg-secondary prtm-card-box\">
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"7000\">0</span> <span>Active Users</span> </div>
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                                        <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[9, 8, 9, 7, 6, 8, 7, 8]\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"dropdown hidden-xs hidden-sm hidden-md\"> <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Links<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu \">
                                <li><a href=\"javascript:;\">Members</a></li>
                                <li><a href=\"javascript:;\">Forum</a></li>
                                <li><a href=\"javascript:;\">Car agencies</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\"><a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-bell-o\"> </i><span class=\"badge badge-danger\">2</span></a>
                            <ul class=\"dropdown-menu dropdown-custom dropdown-notifi\">
                                <li> <strong class=\"drop-title\"><span><i class=\"fa fa-bell-o\" aria-hidden=\"true\"></i></span>Notifications</strong><a href=\"javascript:;\" class=\"pull-right bg-primary base-reverse\">Marks As Read</a></li>
                                <li>
                                    <a href=\"javascript:;\" class=\"pos-relative\">
                                        <div class=\"mrgn-b-xs\"> <span class=\"notification-icon\"><i class=\"fa fa-database text-danger\"></i></span> <span class=\"notification-title\">Database overload</span> <span class=\"notification-ago\">3 min ago</span> </div>
                                        <p class=\"mrgn-all-none\">Database overload due to incorrect queries</p>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\" class=\"pos-relative\">
                                        <div class=\"mrgn-b-xs\"> <span class=\"notification-icon\"><i class=\"fa fa-circle-o-notch fa-spin text-success\" aria-hidden=\"true\"></i></span> <span class=\"notification-title\">Installing App v1.2.1</span> <span class=\"notification-ago \">60 % Done</span> </div>
                                        <div class=\"progress progress-sm-height mrgn-all-none\">
                                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%\"> </div>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\" class=\"pos-relative\">
                                        <div class=\"mrgn-b-xs\"> <span class=\"notification-icon\"><i class=\"fa fa-exclamation-triangle text-warning\"></i></span> <span class=\"notification-title\">Application Error</span> <span class=\"notification-ago \">10 min ago</span> </div>
                                        <p class=\"mrgn-all-none\">failed to initialize the application due to error weblogic.application.moduleexception</p>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"mrgn-b-xs\"> <span class=\"notification-icon\"><i class=\"fa fa-server text-info\"></i></span> <span class=\"notification-title\">Server Status</span> <span class=\"notification-ago \">30GB Free Space</span> </div>
                                        <div class=\"progress progress-sm-height mrgn-all-none\">
                                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" style=\"width:40%\"></div>
                                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width:10%\"></div>
                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" style=\"width:20%\"></div>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"mrgn-b-xs\"> <span class=\"notification-icon\"><i class=\"fa fa-cogs text-success\"></i></span> <span class=\"notification-title\">Application Configured</span> <span class=\"notification-ago \">30 min ago</span> </div>
                                        <p class=\"mrgn-all-none\">Your setting is updated on server Sav3060</p>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li> <a class=\"text-center\" href=\"javascript:;\"> See all notifications <i class=\"fa fa-angle-right mrgn-l-xs\"></i> </a> </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\"><a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-envelope-o\"></i><span class=\"badge badge-danger\">5</span></a>
                            <ul class=\"dropdown-menu dropdown-custom\">
                                <li> <strong class=\"drop-title\">You have 5 new messages</strong> </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"user-thumb pull-left\"><img class=\"img-responsive img-circle\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-2.jpg"), "html", null, true);
        echo "\" alt=\"User-image\" width=\"64\" height=\"64\"> <span class=\"profile-status online pull-right\"></span> </div>
                                        <div class=\"user-content pull-left\">
                                            <h6 class=\"mrgn-all-none\">Marya Kale</h6>
                                            <p class=\"mrgn-b-xs\">Just see the my admin!</p> <span>9:30 AM</span> <span class=\"notification-ago\">30 min ago</span> </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"user-thumb pull-left\"><img class=\"img-responsive img-circle\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/histroy-user-1.png"), "html", null, true);
        echo "\" alt=\"User-image\" width=\"64\" height=\"64\"> <span class=\"profile-status online pull-right\"></span> </div>
                                        <div class=\"user-content pull-left\">
                                            <h6 class=\"mrgn-all-none\">Jim Gray</h6>
                                            <p class=\"mrgn-b-xs\">Just see the my admin!</p> <span>9:30 AM</span> <span class=\"notification-ago \">10 min ago</span> </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"user-thumb pull-left\"><img class=\"img-responsive img-circle\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-2.jpg"), "html", null, true);
        echo "\" alt=\"User-image\" width=\"64\" height=\"64\"> <span class=\"profile-status online pull-right\"></span> </div>
                                        <div class=\"user-content pull-left\">
                                            <h6 class=\"mrgn-all-none\">Marya Kale</h6>
                                            <p class=\"mrgn-b-xs\">Just see the my admin!</p> <span>9:30 AM</span> <span class=\"notification-ago \">20 min ago</span> </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"user-thumb pull-left\"><img class=\"img-responsive img-circle\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/histroy-user-1.png"), "html", null, true);
        echo "\" alt=\"User-image\" width=\"64\" height=\"64\"> <span class=\"profile-status online pull-right\"></span> </div>
                                        <div class=\"user-content pull-left\">
                                            <h6 class=\"mrgn-all-none\">Jim Gray</h6>
                                            <p class=\"mrgn-b-xs\">Just see the my admin!</p> <span>9:30 AM</span> <span class=\"notification-ago \">5 min ago</span> </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li> <a class=\"text-center\" href=\"javascript:;\">See all notifications<i class=\"fa fa-angle-right mrgn-l-xs\"></i> </a> </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\"> <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin Rides<span class=\"caret\"></span><img class=\"img-responsive display-ib mrgn-l-sm img-circle\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/user-1.jpg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User-image\"></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"user-profile.htm\"><i class=\"fa fa-user\"></i> My Profile</a></li>
                                <li><a href=\"users-list.htm\"><i class=\"fa fa-money\"></i> My Contact</a></li>
                                <li><a href=\"email.htm\" class=\"pos-relative\"><i class=\"fa fa-inbox\"></i> My Inbox <span class=\"badge badge-danger pull-right profile-badge\">2</span></a></li>
                                <li><a href=\"user-profile.htm\" class=\"pos-relative\"><i class=\"fa fa-tasks\"></i> My task <span class=\"badge badge-success pull-right profile-badge\">5</span></a></li>
                                <li><a href=\"user-settings.htm\"><i class=\"fa fa-cog\"></i> Account Setting</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-power-off\"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>
    ";
        
        $__internal_207efe28abfe93bb7ec776f578eedde8eb08471d69b3039b1b4ac14f3ef22057->leave($__internal_207efe28abfe93bb7ec776f578eedde8eb08471d69b3039b1b4ac14f3ef22057_prof);

        
        $__internal_ff7036d4fb9745be7457f75e24797dc5eec99c6d202c3a97b28cd72c41ac700b->leave($__internal_ff7036d4fb9745be7457f75e24797dc5eec99c6d202c3a97b28cd72c41ac700b_prof);

    }

    // line 225
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_a23adbf422a67ddbee7f3696b214cba15d4a1ef333808d7edc29a44e517cd7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23adbf422a67ddbee7f3696b214cba15d4a1ef333808d7edc29a44e517cd7bc->enter($__internal_a23adbf422a67ddbee7f3696b214cba15d4a1ef333808d7edc29a44e517cd7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        $__internal_18fc7632824b6fef16e03dfec55e23e7d3799c45c2f36d11a35d1b49e302e1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fc7632824b6fef16e03dfec55e23e7d3799c45c2f36d11a35d1b49e302e1ad->enter($__internal_18fc7632824b6fef16e03dfec55e23e7d3799c45c2f36d11a35d1b49e302e1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        // line 226
        echo "            <div class=\"prtm-sidebar\">
            <div class=\"prtm-sidebar-back\"> </div>
            <div class=\"prtm-sidebar-nav-wrapper\">
                <div class=\"prtm-sidebar-menu\">
                    <nav class=\"sidebar-nav collapse\">
                        <ul class=\"list-unstyled sidebar-menu\">
                            <li class=\"sidenav-heading text-uppercase\">Dashboards</li>
                            <li class=\"has-children active opened\"><a href=\"\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i><span>Dashboard</span></a>
                                <ul class=\"list-unstyled sub-menu\">
                                    <li><a href=\"index-1.htm\" class=\"active\"><span>Dashboard 1</span></a></li>
                                    <li><a href=\"dashboard-v2.htm\"><span>Dashboard 2</span></a></li>
                                    <li><a href=\"dashboard-v3.htm\"><span>Dashboard 3</span><span class=\"badge badge-primary\">2</span></a></li>
                                </ul>
                            </li>
                            <li class=\"sidenav-heading text-uppercase\">Features</li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-sliders\" aria-hidden=\"true\"></i><span>UI Elements</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"ui-buttons.htm\"><span>Buttons</span></a></li>
                                    <li><a href=\"progress-bar.htm\"><span>Progress bar </span></a></li>
                                    <li><a href=\"tabs-accordions.htm\"><span>Tabs &amp; accordians</span></a></li>
                                    <li><a href=\"form-elements.htm\"><span>Form elements</span></a></li>
                                    <li><a href=\"no-uislider.htm\"><span>UI sliders</span></a></li>
                                    <li><a href=\"input-mask.htm\"><span>Form input mask</span></a></li>
                                    <li><a href=\"pagination-tooltip.htm\"><span>Pagination &amp; Tooltip</span></a></li>
                                    <li><a href=\"panels.htm\"><span>Panels</span></a></li>
                                    <li><a href=\"social-icon.htm\"><span>Social icons</span></a></li>
                                    <li><a href=\"typography.htm\"><span>Typography</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-inbox\" aria-hidden=\"true\"></i><span>Components</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"notification.htm\"><span>Notification &amp; Alerts</span></a></li>
                                    <li><a href=\"date-time-picker.htm\"><span>Date &amp; Time picker</span></a></li>
                                    <li><a href=\"color-picker.htm\"><span>Color picker</span></a></li>
                                    <li><a href=\"bootstrap-multiselect-dropdown.htm\"><span>Bootstrap Multiselect</span></a></li>
                                    <li><a href=\"cropper.htm\"><span>Image Cropper</span></a></li>
                                    <li><a href=\"fileupload.htm\"><span>File Upload</span></a></li>
                                    <li><a href=\"modals.htm\"><span>Modal </span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-area-chart\" aria-hidden=\"true\"></i><span>Graphs and Charts</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"google-chart.htm\"><span>Google chart</span></a></li>
                                    <li><a href=\"high-chart.htm\"><span>High Chart</span></a></li>
                                    <li><a href=\"morris.htm\"><span>Morris Chart</span></a></li>
                                    <li><a href=\"chartlist.htm\"><span>Chartlist</span></a></li>
                                    <li><a href=\"flow-chart.htm\"><span>Flow Chart</span></a></li>
                                    <li><a href=\"easypie.htm\"><span>Easypie chart</span></a></li>
                                    <li><a href=\"flot-chart.htm\"><span>Flot chart</span></a></li>
                                    <li><a href=\"chartjs.htm\"><span>js charts</span></a></li>
                                    <li><a href=\"chart-peity.htm\"><span>Peity chart</span></a></li>
                                    <li><a href=\"sparkline-chart.htm\"><span>Sparkline chart</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-map\" aria-hidden=\"true\"></i><span>Maps</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"googlemap.htm\"><span>Google map</span></a></li>
                                    <li><a href=\"vectormap.htm\"><span>Vector map</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i><span>Tables</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"basic-table.htm\"><span>Basic tables</span></a></li>
                                    <li><a href=\"responsive-table.htm\"><span>Responsive table</span></a></li>
                                    <li><a href=\"bootstrap-table.htm\"><span>Bootstrap table</span></a></li>
                                    <li class=\"has-children\"><a href=\"\"><span>Data tables</span></a>
                                        <ul class=\"list-unstyled sub-menu collapse\">
                                            <li><a href=\"data-table-buttons.htm\"><span>Buttons Extension</span></a></li>
                                            <li><a href=\"data-table-autofill.htm\"><span>Autofill Extension</span></a></li>
                                            <li><a href=\"data-table-col-reorder.htm\"><span>Colreorder Extension</span></a></li>
                                            <li><a href=\"data-table-row-reorder.htm\"><span>Rowreorder Extension</span></a></li>
                                            <li><a href=\"data-table-fixed-column.htm\"><span>Fixed column Extension</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"sidenav-heading text-uppercase\">Data visualization</li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i>
                                    <span>Dimple library</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li class=\"has-children\"><a href=\"\"><span>Line charts</span></a>
                                        <ul class=\"list-unstyled sub-menu collapse\">
                                            <li><a href=\"dimple-line-horizontal.htm\"><span>Horizontal orientation</span></a></li>
                                            <li><a href=\"dimple-line-vertical.htm\"><span>Vertical orientation</span></a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has-children\"><a href=\"\"><span>Bar charts</span></a>
                                        <ul class=\"list-unstyled sub-menu collapse\">
                                            <li><a href=\"dimple-bar-horizontal.htm\"><span>Horizontal orientation</span></a></li>
                                            <li><a href=\"dimple-bar-vertical.htm\"><span>Vertical orientation</span></a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has-children\"><a href=\"\"><span>Area charts</span></a>
                                        <ul class=\"list-unstyled sub-menu collapse\">
                                            <li><a href=\"dimple-area-chart-horizontal.htm\"><span>Horizontal orientation</span></a></li>
                                            <li><a href=\"dimple-area-chart-vertical.htm\"><span>Vertical orientation</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"dimple-pie-chart.htm\"><span>Pie charts</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i><span>D3 library</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"d3-line.htm\"><span>Lines Charts</span></a></li>
                                    <li><a href=\"d3-area.htm\"><span>Area charts</span></a></li>
                                    <li><a href=\"d3-bar.htm\"><span>Bars charts</span></a></li>
                                </ul>
                            </li>
                            <li class=\"sidenav-heading text-uppercase\">Layouts</li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-columns\" aria-hidden=\"true\"></i><span>Page layouts</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"right-sidebar.htm\"><span>Right Sidebar</span></a></li>
                                    <li><a href=\"collapse-sidebar.htm\"><span>Collapse Sidebar</span></a></li>
                                    <li><a href=\"fixed-header.htm\"><span>Fixed Header</span></a></li>
                                </ul>
                            </li>
                            <li class=\"sidenav-heading text-uppercase\">Pages</li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>Users</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"users-list.htm\"><span>Users list</span></a></li>
                                    <li><a href=\"user-profile.htm\"><span>Users profile</span></a></li>
                                    <li><a href=\"user-settings.htm\"><span>User settings</span></a></li>
                                    <li><a href=\"chat.htm\"><span>User chat</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i><span>Ecommerce</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"ecommerce-product.htm\"><span>Ecommerce Product</span></a></li>
                                    <li><a href=\"ecommerce-product-detail.htm\"><span>Ecommerce Product detail</span></a></li>
                                    <li><a href=\"ecommerce-order.htm\"><span>Ecommerce order</span></a></li>
                                    <li><a href=\"ecommerce-order-detail.htm\"><span>Ecommerce order detail</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i><span>Mailbox</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"email.htm\"><span>Emails</span></a></li>
                                    <li><a href=\"email-compose.htm\"><span>Email compose</span></a></li>
                                </ul>
                            </li>
                            <li><a href=\"tickets.htm\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i><span>Tickets</span></a></li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-magic\" aria-hidden=\"true\"></i><span>Extra</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"login.htm\"><span>Login</span></a></li>
                                    <li><a href=\"coming-soon.htm\"><span>Coming Soon</span></a></li>
                                    <li><a href=\"404.htm\"><span>404</span></a></li>
                                    <li><a href=\"pricing.htm\"><span>Pricing</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"prtm-sparkline pad-lr-lg\">
                        <div class=\"prtm-sparkline-list bg-success clearfix prtm-card-box\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"5000\">5,000</span> <span>New visitors</span> </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[9, 8, 9, 7, 6, 8, 7, 8]\"> </div>
                            </div>
                        </div>
                        <div class=\"prtm-sparkline-list clearfix bg-info prtm-card-box\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"3000\">3,000</span> <span>New Users</span> </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[5, 6, 8, 9, 5, 8, 4, 6]\"> </div>
                            </div>
                        </div>
                        <div class=\"prtm-sparkline-list clearfix bg-secondary prtm-card-box\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"7000\">7,000</span> <span>Active users</span> </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[9, 8, 9, 7, 6, 8, 7, 8]\"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_18fc7632824b6fef16e03dfec55e23e7d3799c45c2f36d11a35d1b49e302e1ad->leave($__internal_18fc7632824b6fef16e03dfec55e23e7d3799c45c2f36d11a35d1b49e302e1ad_prof);

        
        $__internal_a23adbf422a67ddbee7f3696b214cba15d4a1ef333808d7edc29a44e517cd7bc->leave($__internal_a23adbf422a67ddbee7f3696b214cba15d4a1ef333808d7edc29a44e517cd7bc_prof);

    }

    // line 402
    public function block_mainpage($context, array $blocks = array())
    {
        $__internal_8e3c70ef58c8c54b8b09e58cf57a44a019c366219424abaa4e86e5ca9bf05f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3c70ef58c8c54b8b09e58cf57a44a019c366219424abaa4e86e5ca9bf05f46->enter($__internal_8e3c70ef58c8c54b8b09e58cf57a44a019c366219424abaa4e86e5ca9bf05f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainpage"));

        $__internal_c91f766d073127c8d68a844c1cb5292c8a56401b099346003ff2ab39d79910e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91f766d073127c8d68a844c1cb5292c8a56401b099346003ff2ab39d79910e9->enter($__internal_c91f766d073127c8d68a844c1cb5292c8a56401b099346003ff2ab39d79910e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainpage"));

        // line 403
        echo "                <div class=\"row prtm-card-wrapper\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-card prtm-card-box graph bg-primary pad-all-md mrgn-b-lg\">
                            <div class=\"prtm-card-info\">
                                <div class=\"mrgn-b-lg clearfix\">
                                    <div class=\"pull-left\"> <span class=\"show\">Today's Sales</span> <span>85% Of Target</span> </div>
                                    <div class=\"pull-right text-right\"> <span class=\"font-counter\">\$<span class=\"count-item\" data-count=\"12000\">0</span></span>
                                    </div>
                                </div>
                                <div class=\"prtm-card-progress\">
                                    <div class=\"progress progress-xs-height\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"85%\"> <span class=\"sr-only\">50% Complete (secondary)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--prtm-card closed-->
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-card prtm-card-box order bg-success pad-all-md mrgn-b-lg\">
                            <div class=\"prtm-card-info\">
                                <div class=\"mrgn-b-lg clearfix\">
                                    <div class=\"pull-left\"> <span class=\"show\">New Orders</span> <span>90% Of Target</span> </div>
                                    <div class=\"pull-right text-right\"> <span class=\"font-counter\"><span class=\"count-item\" data-count=\"350\">0</span></span>
                                    </div>
                                </div>
                                <div class=\"prtm-card-progress\">
                                    <div class=\"progress progress-xs-height\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"90%\"> <span class=\"sr-only\">50% Complete (secondary)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--prtm-card closed-->
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-card prtm-card-box invoices bg-info pad-all-md mrgn-b-lg\">
                            <div class=\"prtm-card-info\">
                                <div class=\"mrgn-b-lg clearfix\">
                                    <div class=\"pull-left\"> <span class=\"show\">New Customers</span> <span>70% Of Yesterday</span> </div>
                                    <div class=\"pull-right text-right\"> <span class=\"font-counter\"><span class=\"count-item\" data-count=\"700\">0</span></span>
                                    </div>
                                </div>
                                <div class=\"prtm-card-progress\">
                                    <div class=\"progress progress-xs-height\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"70%\"> <span class=\"sr-only\">8% Complete (secondary)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--prtm-card closed-->
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-card prtm-card-box tickets bg-secondary pad-all-md mrgn-b-lg\">
                            <div class=\"prtm-card-info\">
                                <div class=\"mrgn-b-lg clearfix\">
                                    <div class=\"pull-left\"> <span class=\"show\">Open Tickets</span> <span>4% From the Yesterday</span> </div>
                                    <div class=\"pull-right text-right\"> <span class=\"font-counter\"><span class=\"count-item\" data-count=\"35\">0</span></span>
                                    </div>
                                </div>
                                <div class=\"prtm-card-progress\">
                                    <div class=\"progress progress-xs-height\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"10%\"> <span class=\"sr-only\">80% Complete (secondary)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--prtm-card closed-->
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-7\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>Site Visits</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown\"> <a href=\"javascript:;\" class=\"mrgn-l-xs more-btn\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\">more<i class=\"fa fa-angle-down\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-icon pull-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"d-area-chart chart\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-5\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>Revenue</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown\"> <a href=\"javascript:;\" class=\"mrgn-l-xs more-btn\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\">more<i class=\"fa fa-angle-down\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-icon pull-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"d-area-points-chart chart\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>Chat History</h3></div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"prtm-chat-wrap\">
                                    <div class=\"slimscrollbar\" style=\"height: 428px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                        <div class=\"chat-wrap-list\">
                                            <div class=\"clearfix\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/blog-post-author.jpg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Devy Finn</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p>Wow! This is something exactly I needed. You guys did a great work.</p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>3 Min ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix right-side\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-3.jpg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Harry Snooka</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p>Thankyou :) We are always here to help you. Our customer care service is 24X7. You may reach us anytime.</p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>45 min ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-3.jpg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Jaime Garner</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p>I am impressed with your immediate help. I got my work done efficiently. </p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>1 hours ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix right-side\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-4.jpg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Vic Gannis</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p> You can find the date time picker and notification & alerts under \"Components\" menu. It is really very easy to use them. </p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>7 hours ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-2.jpg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Eally Punto</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p>Hey please tell me where can I find date time picker and notifications & alerts in it.</p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>13 min ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix right-side\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/histroy-user-2.png"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Gonny Duke</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p>I love the charts and animations. This theme has super cool stuff to use.</p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>3 hours ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"send-msg-wrapper\">
                                        <form class=\"send-msg-form\" action=\"javascript:;\" method=\"post\">
                                            <div class=\"clearfix\">
                                                <textarea class=\"form-control msg-box\" placeholder=\"Enter your text\"></textarea>
                                                <input class=\"send-msg-btn btn btn-primary\" type=\"submit\" value=\"submit\"> </div>
                                        </form>
                                    </div>
                                </div>
                                <!--prtm-chat-wrap closed-->
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>New Users</h3> </div>
                                <div class=\"contextual-link\"> <span class=\"badge badge-primary\">16 New Users</span>
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"row prtm-new-user-list mrgn-b-md\">
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-1.jpg"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Gavy</span> <span>Usa</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-2.jpg"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Nethi</span> <span>Japan</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-3.jpg"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Ruby</span> <span>Rome</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-4.jpg"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">John</span> <span>UK</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/user-1.jpg"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Nancy</span> <span>USA</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/user-2.jpg"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Phill</span> <span>Canada</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/dami-user.png"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Garry</span> <span>Rome</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/user-4.jpg"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Hema</span> <span>India</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/user-5.jpg"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Brook</span> <span>London</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/user-9.jpg"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Harby</span> <span>USA</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/user-7.jpg"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Grick</span> <span>USA</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/dami-user.png"), "html", null, true);
        echo "\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Nathaniel</span> <span>India</span> </div>
                                    </div>
                                </div>
                                <div><a href=\"javascript:;\" class=\"text-center btn-block\">View all</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>weather</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"prtm-wheather-widget text-center\">
                                    <h2 class=\"fw-normal base-dark fw-light\" id=\"date\">&nbsp;</h2>
                                    <div class=\"bg-inverse city-active\">
                                        <h3 class=\"fw-light\" id=\"city\">&nbsp;</h3> </div>
                                    <h3 id=\"today-temp\" class=\"fw-normal base-dark mrgn-b-md text-capitalize\">&nbsp;</h3>
                                    <div class=\"wheather-view\">
                                        <div class=\"wheather-view\" id=\"today-icon\">
                                            <canvas class=\"weather-icon pad-t-md\" width=\"150\" height=\"150\" data-color=\"#758494\"></canvas>
                                        </div>
                                    </div>
                                    <div class=\"clearfix mrgn-b-xs\">
                                        <div class=\"pull-left temp-status\"> <img class=\"img-responsive display-ib\" src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/bottom-down.png"), "html", null, true);
        echo "\" width=\"26\" height=\"49\" alt=\"arrow down\"> <span id=\"min-temp\" class=\"temp-value base-dark\"><i class=\"fa fa-circle text-success pull-right\" aria-hidden=\"true\"></i></span> </div>
                                        <div class=\"pull-right temp-status\"> <img class=\"img-responsive display-ib\" src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/bottom-up.png"), "html", null, true);
        echo "\" width=\"26\" height=\"49\" alt=\"arrow down\"> <span id=\"max-temp\" class=\"temp-value base-dark\"><i class=\"fa fa-circle base-secondary pull-right\" aria-hidden=\"true\"></i></span> </div>
                                    </div>
                                    <div class=\"bg-inverse wheather-list-wrap clearfix\">
                                        <div class=\"feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none\">
                                            <div class=\"square-50\">
                                                <canvas class=\"weather-icon pad-t-xs\" width=\"40\" height=\"40\"></canvas>
                                            </div> <span class=\"show gray\">Now</span> </div>
                                        <div class=\"feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none\">
                                            <div class=\"square-50\">
                                                <canvas class=\"weather-icon pad-t-xs\" width=\"40\" height=\"40\"></canvas>
                                            </div> <span class=\"show gray\">Morning</span> </div>
                                        <div class=\"feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none\">
                                            <div class=\"square-50\">
                                                <canvas class=\"weather-icon pad-t-xs\" width=\"40\" height=\"40\"></canvas>
                                            </div> <span class=\"show gray\">Evening</span> </div>
                                        <div class=\"feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none\">
                                            <div class=\"square-50\">
                                                <canvas class=\"weather-icon\" width=\"40\" height=\"40\"> </canvas>
                                            </div> <span class=\"show gray\">Night</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6 full-col-lg-md\">
                        <div class=\"prtm-block overflow-wrapper\">
                            <div class=\"prtm-block-title mrgn-b-sm\">
                                <div class=\"caption\">
                                    <h3>Visitor Origin</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content overflow-pad\">
                                <div class=\"row\">
                                    <div class=\"col-md-8 pad-all-none\">
                                        <div class=\"embed-responsive-item\">
                                            <div class=\"world-map-markers vector\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 pad-all-none\">
                                        <div class=\"visitor-map-content\">
                                            <h6 class=\"text-uppercase\">Continent</h6>
                                            <ul class=\"list-unstyled progress-list\">
                                                <li>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-6 col-md-6\"> <span>Asia</span> </div>
                                                        <div class=\"col-sm-6 col-md-6\"> <span class=\"pull-right\">60%</span> </div>
                                                    </div>
                                                    <div class=\"progress progress-sm-height progress-rounded\">
                                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"60%\"> <span class=\"sr-only\">90% Complete</span> </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-6 col-md-6\"> <span>Europe</span> </div>
                                                        <div class=\"col-sm-6 col-md-6\"> <span class=\"pull-right\">25%</span> </div>
                                                    </div>
                                                    <div class=\"progress progress-sm-height progress-rounded\">
                                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"25%\"> <span class=\"sr-only\">80% Complete</span> </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-6 col-md-6\"> <span>Africa</span> </div>
                                                        <div class=\"col-sm-6 col-md-6\"> <span class=\"pull-right\">5%</span> </div>
                                                    </div>
                                                    <div class=\"progress progress-sm-height progress-rounded\">
                                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"5\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"5%\"> <span class=\"sr-only\">5% Complete</span> </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-6 col-md-6\"> <span>South America</span> </div>
                                                        <div class=\"col-sm-6 col-md-6\"> <span class=\"pull-right\">10%</span> </div>
                                                    </div>
                                                    <div class=\"progress progress-sm-height progress-rounded\">
                                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"10%\"> <span class=\"sr-only\">10% Complete</span> </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-card-box bg-inverse pad-all-lg mrgn-b-lg\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3 class=\"text-capitalize base-reverse\">Email statistics</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-reverse\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div id=\"dashboard3-email\" class=\"email-map\" style=\"height:325px;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-block mrgn-b-lg\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3 class=\"text-capitalize\">User Agent</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"user-agent\">
                                    <div class=\"agent-list\">
                                        <ul class=\"list-unstyled\">
                                            <li class=\"mrgn-b-lg clearfix\">
                                                <div class=\"pull-left\"><i class=\"fa fa-safari fa-lg\" aria-hidden=\"true\"></i> <span>safari</span></div>
                                                <div class=\"pull-right\"><span>40%</span></div>
                                            </li>
                                            <li class=\"mrgn-b-lg clearfix\">
                                                <div class=\"pull-left\"><i class=\"fa fa-chrome fa-lg\" aria-hidden=\"true\"></i> <span>chrome</span></div>
                                                <div class=\"pull-right\">50%</div>
                                            </li>
                                            <li class=\"mrgn-b-lg clearfix\">
                                                <div class=\"pull-left\"><i class=\"fa fa-internet-explorer fa-lg\" aria-hidden=\"true\"></i> <span>IE</span></div>
                                                <div class=\"pull-right\">75%</div>
                                            </li>
                                            <li class=\"mrgn-b-lg clearfix\">
                                                <div class=\"pull-left\"><i class=\"fa fa-firefox fa-lg\" aria-hidden=\"true\"></i> <span>firefox</span></div>
                                                <div class=\"pull-right\">80%</div>
                                            </li>
                                            <li class=\"mrgn-b-lg clearfix\">
                                                <div class=\"pull-left\"><i class=\"fa fa-opera fa-lg\" aria-hidden=\"true\"></i> <span class=\"bws-name\">opera</span></div>
                                                <div class=\"pull-right\">30%</div>
                                            </li>
                                        </ul>
                                        <div class=\"bg-info pad-all-sm base-reverse-all\">
                                            <ul class=\"list-inline list-summery\">
                                                <li class=\"\"> <span><i class=\"fa fa-apple fa-lg\" aria-hidden=\"true\"></i></span> <span>40%</span> </li>
                                                <li class=\"\"> <span><i class=\"fa fa-android fa-lg\" aria-hidden=\"true\"></i></span> <span>80%</span> </li>
                                                <li class=\"\"> <span><i class=\"fa fa-windows fa-lg\" aria-hidden=\"true\"></i></span> <span>90%</span> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title\">
                                <div class=\"caption\">
                                    <h3>Customer Support</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"slimscrollbar\" style=\"height: 520px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                    <div class=\"prtm-customer-support\">
                                        <div class=\"prtm-customer-list\">
                                            <div class=\"row mrgn-b-xs\">
                                                <div class=\"col-xs-12 col-sm-3 col-md-6 col-lg-8\">
                                                    <div class=\"pull-left mrgn-r-sm\"> <img class=\"img-responsive display-ib img-circle\" src=\"";
        // line 951
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-1.jpg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User Photo\"> </div>
                                                    <div class=\"pull-left\">
                                                        <h6 class=\"text-primary\">Tina Denver</h6>
                                                        <div class=\"post-meta\"> <span>3 hours ago</span> </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-12 col-sm-9 col-md-6 col-lg-4\"> <span class=\"text-right text-warning show\"><i class=\"fa fa-dot-circle-o\"></i> Pending</span> </div>
                                            </div>
                                            <p>Thanks for the chartlist. There are awesome designs and very user friendly.</p>
                                        </div>
                                        <div class=\"prtm-customer-list\">
                                            <div class=\"row mrgn-b-xs\">
                                                <div class=\"col-xs-12 col-sm-3 col-md-6 col-lg-8\">
                                                    <div class=\"pull-left mrgn-r-sm\"> <img class=\"img-responsive display-ib img-circle\" src=\"";
        // line 964
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/register-user-2.jpg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User Photo\"> </div>
                                                    <div class=\"pull-left\">
                                                        <h6 class=\"text-primary\">Gera Pattinson</h6>
                                                        <div class=\"post-meta\"> <span>3 hours ago</span> </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-12 col-sm-9 col-md-6 col-lg-4\"> <span class=\"text-right text-success show\"><i class=\"fa fa-dot-circle-o\"></i> Open</span> </div>
                                            </div>
                                            <p>User profile that you are providing is great. </p>
                                        </div>
                                        <div class=\"prtm-customer-list\">
                                            <div class=\"row mrgn-b-xs\">
                                                <div class=\"col-xs-12 col-sm-3 col-md-6 col-lg-8\">
                                                    <div class=\"pull-left mrgn-r-sm\"> <img class=\"img-responsive display-ib img-circle\" src=\"";
        // line 977
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/blog-post-author.jpg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User Photo\"> </div>
                                                    <div class=\"pull-left\">
                                                        <h6 class=\"text-primary\">Susan Wood</h6>
                                                        <div class=\"post-meta\"> <span>56 Min ago</span> </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-12 col-sm-9 col-md-6 col-lg-4\"> <span class=\"text-right text-warning show\"><i class=\"fa fa-dot-circle-o\"></i> Pending</span> </div>
                                            </div>
                                            <p>Having plenty of options is really cool. I can choose what suits to my work.</p>
                                        </div>
                                        <div class=\"prtm-customer-list\">
                                            <div class=\"row mrgn-b-xs\">
                                                <div class=\"col-xs-12 col-sm-3 col-md-6 col-lg-8\">
                                                    <div class=\"pull-left mrgn-r-sm\"> <img class=\"img-responsive display-ib img-circle\" src=\"";
        // line 990
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/user-10.jpg"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" alt=\"User Photo\"> </div>
                                                    <div class=\"pull-left\">
                                                        <h6 class=\"text-primary\">Shady Hugh</h6>
                                                        <div class=\"post-meta\"> <span>1 hours ago</span> </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-12 col-sm-9 col-md-6 col-lg-4\"> <span class=\"text-right text-success show\"><i class=\"fa fa-dot-circle-o\"></i> Open</span> </div>
                                            </div>
                                            <p>Doing work with such a tool is really fun.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>To Do List</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"slimscrollbar\" style=\"height: 500px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                    <div class=\"prtm-to-do\">
                                        <ul class=\"list-unstyled border-list-xs\">
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">Be strategic about your energy to do things.</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">Most important task completed before moving on to anything else.</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\"><del>Send agreement to Stephen.</del></span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">Finalize monthly earnings report.</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">Create QR code for every user on website.</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">Research new tools and softwares to do things faster.</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">What can be pushed off till tonight?</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-full-block overflow-wrapper\">
                            <div id=\"full-clndr\" class=\"clearfix\">
                                <script type=\"text/template\" id=\"full-clndr-template\">
                                    <div class=\"clndr-controls\">
                                        <div class=\"clndr-previous-button\"><span><i class=\"fa fa-angle-double-left fa-2x\" aria-hidden=\"true\"></i></span></div>
                                        <div class=\"clndr-next-button\"><span><i class=\"fa fa-angle-double-right fa-2x\" aria-hidden=\"true\"></i></span></div>
                                        <div class=\"current-month\">
                                            <%= month %>
                                            <%= year %>
                                        </div>
                                    </div>
                                    <div class=\"clndr-grid\">
                                        <div class=\"days-of-the-week clearfix\">
                                            <% _.each(daysOfTheWeek, function(day) { %>
                                            <div class=\"header-day\">
                                                <%= day %>
                                            </div>
                                            <% }); %>
                                        </div>
                                        <div class=\"days\">
                                            <% _.each(days, function(day) { %>
                                            <div class=\"<%= day.classes %>\" id=\"<%= day.id %>\"><span class=\"day-number\"><%= day.day %></span></div>
                                            <% }); %>
                                        </div>
                                    </div>
                                    <div class=\"event-listing\">
                                        <% _.each(eventsThisMonth, function(event) { %>
                                        <div class=\"event-item\">
                                            <div class=\"event-item-name\">
                                                <%= event.title %>
                                            </div>
                                            <div class=\"event-item-location\">
                                                <%= event.location %>
                                            </div>
                                        </div>
                                        <% }); %>
                                    </div>
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"prtm-social-widgets\">
                    <h6 class=\"text-uppercase\">Marketing Campaign</h6>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"stock-list prtm-card-box bg-primary mrgn-b-lg\">
                                <div class=\"clearfix\">
                                    <div class=\"stk-icon\"> <span class=\"show stock-main\"><i class=\"fa fa-facebook\"></i></span> <span><i class=\"fa fa-long-arrow-up\"></i> 2.43%</span> </div>
                                    <div class=\"prtm-stk-des\">
                                        <div class=\"brand-info clearfix\">
                                            <h6 class=\"prtm-brand-name text-uppercase\">Facebook</h6> </div>
                                        <div class=\"clearfix\">
                                            <div class=\"prtm-brand-min\"> <span class=\"show stock-sub-head\">client</span> <span>Min.time</span> </div>
                                            <div class=\"prtm-brand-budget\"> <span class=\"show stock-sub-head\">budget</span> <span>\$4650</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"stock-list prtm-card-box bg-danger mrgn-b-lg\">
                                <div class=\"clearfix\">
                                    <div class=\"stk-icon\"> <span class=\"show stock-main\"><i class=\"fa fa-youtube\"></i></span> <span><i class=\"fa fa-long-arrow-up\"></i> 5.66%</span> </div>
                                    <div class=\"prtm-stk-des\">
                                        <div class=\"brand-info clearfix\">
                                            <h6 class=\"prtm-brand-name text-uppercase\">youtube</h6> </div>
                                        <div class=\"clearfix\">
                                            <div class=\"prtm-brand-min\"> <span class=\"show stock-sub-head\">client</span> <span>Min.time</span> </div>
                                            <div class=\"prtm-brand-budget\"> <span class=\"show stock-sub-head\">budget</span> <span>\$6796</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"stock-list prtm-card-box bg-info mrgn-b-lg\">
                                <div class=\"clearfix\">
                                    <div class=\"stk-icon\"> <span class=\"show stock-main\"><i class=\"fa fa-twitter\"></i></span> <span><i class=\"fa fa-long-arrow-up\"></i> 1.87%</span> </div>
                                    <div class=\"prtm-stk-des\">
                                        <div class=\"brand-info clearfix\">
                                            <h6 class=\"prtm-brand-name text-uppercase\">Twitter</h6> </div>
                                        <div class=\"clearfix\">
                                            <div class=\"prtm-brand-min\"> <span class=\"show stock-sub-head\">client</span> <span>Min.time</span> </div>
                                            <div class=\"prtm-brand-budget\"> <span class=\"show stock-sub-head\">budget</span> <span>\$4779</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"stock-list prtm-card-box bg-success mrgn-b-lg\">
                                <div class=\"clearfix\">
                                    <div class=\"stk-icon\"> <span class=\"show stock-main\"><i class=\"fa fa-google\"></i></span> <span><i class=\"fa fa-long-arrow-up\"></i> 4.78%</span> </div>
                                    <div class=\"prtm-stk-des\">
                                        <div class=\"brand-info clearfix\">
                                            <h6 class=\"prtm-brand-name text-uppercase\">Google Ads</h6> </div>
                                        <div class=\"clearfix\">
                                            <div class=\"prtm-brand-min\"> <span class=\"show stock-sub-head\">client</span> <span>Min.time</span> </div>
                                            <div class=\"prtm-brand-budget\"> <span class=\"show stock-sub-head\">budget</span> <span>\$1247</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        
        $__internal_c91f766d073127c8d68a844c1cb5292c8a56401b099346003ff2ab39d79910e9->leave($__internal_c91f766d073127c8d68a844c1cb5292c8a56401b099346003ff2ab39d79910e9_prof);

        
        $__internal_8e3c70ef58c8c54b8b09e58cf57a44a019c366219424abaa4e86e5ca9bf05f46->leave($__internal_8e3c70ef58c8c54b8b09e58cf57a44a019c366219424abaa4e86e5ca9bf05f46_prof);

    }

    // line 1223
    public function block_footer($context, array $blocks = array())
    {
        $__internal_20a15ae6cd7fc653c20b69dc86f8acb05fb3d673c23961d49f57a175c15907e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a15ae6cd7fc653c20b69dc86f8acb05fb3d673c23961d49f57a175c15907e6->enter($__internal_20a15ae6cd7fc653c20b69dc86f8acb05fb3d673c23961d49f57a175c15907e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_9c881f4f0f6f7b62a8445bb38809d6d4a09f872fcbe151a593c23ffbf543bd36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c881f4f0f6f7b62a8445bb38809d6d4a09f872fcbe151a593c23ffbf543bd36->enter($__internal_9c881f4f0f6f7b62a8445bb38809d6d4a09f872fcbe151a593c23ffbf543bd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 1224
        echo "            <footer class=\"footer-wrapper\">
                <div class=\"prtm-footer clearfix\">
                    <div class=\"row footer-area pad-lr-md\">
                    </div>
                </div>
                <a href=\"#\" id=\"back-top\" class=\"to-top scrolled\"> <span class=\"to-top-icon\"></span> </a>
                <script type=\"text/javascript\" src=\"";
        // line 1230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/vendor.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 1231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/plugins.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 1232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/pratham.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 1233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 1234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            </footer>
            ";
        
        $__internal_9c881f4f0f6f7b62a8445bb38809d6d4a09f872fcbe151a593c23ffbf543bd36->leave($__internal_9c881f4f0f6f7b62a8445bb38809d6d4a09f872fcbe151a593c23ffbf543bd36_prof);

        
        $__internal_20a15ae6cd7fc653c20b69dc86f8acb05fb3d673c23961d49f57a175c15907e6->leave($__internal_20a15ae6cd7fc653c20b69dc86f8acb05fb3d673c23961d49f57a175c15907e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layoutbackoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1515 => 1234,  1511 => 1233,  1507 => 1232,  1503 => 1231,  1499 => 1230,  1491 => 1224,  1482 => 1223,  1240 => 990,  1224 => 977,  1208 => 964,  1192 => 951,  975 => 737,  971 => 736,  927 => 695,  920 => 691,  913 => 687,  906 => 683,  899 => 679,  892 => 675,  885 => 671,  878 => 667,  871 => 663,  864 => 659,  857 => 655,  850 => 651,  800 => 604,  787 => 594,  774 => 584,  761 => 574,  748 => 564,  735 => 554,  582 => 403,  573 => 402,  390 => 226,  381 => 225,  361 => 214,  350 => 206,  337 => 196,  325 => 187,  313 => 178,  301 => 169,  159 => 30,  150 => 23,  141 => 22,  129 => 1237,  127 => 1223,  124 => 1222,  122 => 402,  118 => 400,  116 => 225,  113 => 224,  110 => 22,  101 => 21,  89 => 15,  85 => 14,  81 => 13,  78 => 12,  69 => 11,  56 => 1240,  54 => 21,  48 => 17,  46 => 11,  42 => 10,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("﻿<!DOCTYPE html>
<html>
<head>
    <title>Share my ride</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes\">
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"author\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ asset('bundles/views/images/favicon.png') }}\">
    {% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/views/css/vendor.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/views/css/plugins.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/views/css/pratham.min.css') }}\">
    {% endblock %}
</head>

<body>
<div class=\"prtm-wrapper\">
{% block content %}
    {% block topbody %}
    <header class=\"prtm-header\">
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                    <button class=\"c-hamburger c-hamburger--htra prtm-bars pull-right\"> <span>toggle menu</span> </button>
                    <div class=\"prtm-logo\">
                        <a class=\"navbar-brand\" href=\"index-1.htm\"><img class=\"img-responsive display-ib\" src=\"{{ asset('bundles/views/images/pratham-logo.png') }}\" alt=\"logo\" width=\"226\" height=\"31\"></a>
                    </div>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\" data-hover=\"dropdown\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\">
                            <div class=\"prtm-search-icon\"> <a href=\"javascript:;\" class=\"prtm-menu-search\"><i class=\"fa fa-search overlay-1\"></i></a>
                                <div class=\"prtm-navbar-search\">
                                    <div class=\"prtm-search-area\"></div>
                                    <form class=\"prtm-search-form\" method=\"post\" role=\"search\" action=\"javascript:;\"> <span class=\"prtm-search-form-title fa fa-search\"></span>
                                        <input placeholder=\"Type and hit enter\" value=\"\" name=\"s\" type=\"text\"> </form>
                                </div>
                            </div>
                        </li>
                        <li class=\"dropdown hidden-xs hidden-sm hidden-md\"> <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mega <span class=\"caret\"></span></a>
                            <div class=\"dropdown-menu prtm-mega-menu\">
                                <div class=\"prtm-mega-menu-wrap pad-all-lg\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-2\">
                                            <h4 class=\"sidenav-heading text-uppercase mrgn-b-md\">Dashboards</h4>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"index-1.htm\">Dashboard 1</a></li>
                                                <li><a href=\"dashboard-v2.htm\">Dashboard 2</a></li>
                                                <li><a href=\"dashboard-v3.htm\">Dashboard 3</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-2\">
                                            <h4 class=\"sidenav-heading text-uppercase mrgn-b-md\">Features</h4>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"ui-buttons.htm\">UI Elements</a></li>
                                                <li><a href=\"notification.htm\">Components</a></li>
                                                <li><a href=\"google-chart.htm\">Graph and Charts</a></li>
                                                <li><a href=\"googlemap.htm\">Maps</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-2\">
                                            <h4 class=\"sidenav-heading text-uppercase mrgn-b-md\">Layouts</h4>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"index-1.htm\">Sidebar At left</a></li>
                                                <li><a href=\"right-sidebar.htm\">Sidebar At right</a></li>
                                                <li><a href=\"fixed-header.htm\">Fixed Header</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-2\">
                                            <h4 class=\"sidenav-heading text-uppercase mrgn-b-md\">Pages</h4>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"users-list.htm\">Users</a></li>
                                                <li><a href=\"ecommerce-product.htm\">Ecommerce</a></li>
                                                <li><a href=\"email.htm\">Mailbox</a></li>
                                                <li><a href=\"login.htm\">Extra Pages</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">
                                            <div class=\"prtm-sparkline\">
                                                <div class=\"prtm-sparkline-list bg-success clearfix prtm-card-box\">
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"5000\">0</span> <span>New visitors</span> </div>
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                                        <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[9, 8, 9, 7, 6, 8, 7, 8]\"> </div>
                                                    </div>
                                                </div>
                                                <div class=\"prtm-sparkline-list clearfix bg-info prtm-card-box\">
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"3000\">0</span> <span>New Users</span> </div>
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                                        <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[5, 6, 8, 9, 5, 8, 4, 6]\"> </div>
                                                    </div>
                                                </div>
                                                <div class=\"prtm-sparkline-list clearfix bg-secondary prtm-card-box\">
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"7000\">0</span> <span>Active Users</span> </div>
                                                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                                        <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[9, 8, 9, 7, 6, 8, 7, 8]\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"dropdown hidden-xs hidden-sm hidden-md\"> <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Links<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu \">
                                <li><a href=\"javascript:;\">Members</a></li>
                                <li><a href=\"javascript:;\">Forum</a></li>
                                <li><a href=\"javascript:;\">Car agencies</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\"><a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-bell-o\"> </i><span class=\"badge badge-danger\">2</span></a>
                            <ul class=\"dropdown-menu dropdown-custom dropdown-notifi\">
                                <li> <strong class=\"drop-title\"><span><i class=\"fa fa-bell-o\" aria-hidden=\"true\"></i></span>Notifications</strong><a href=\"javascript:;\" class=\"pull-right bg-primary base-reverse\">Marks As Read</a></li>
                                <li>
                                    <a href=\"javascript:;\" class=\"pos-relative\">
                                        <div class=\"mrgn-b-xs\"> <span class=\"notification-icon\"><i class=\"fa fa-database text-danger\"></i></span> <span class=\"notification-title\">Database overload</span> <span class=\"notification-ago\">3 min ago</span> </div>
                                        <p class=\"mrgn-all-none\">Database overload due to incorrect queries</p>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\" class=\"pos-relative\">
                                        <div class=\"mrgn-b-xs\"> <span class=\"notification-icon\"><i class=\"fa fa-circle-o-notch fa-spin text-success\" aria-hidden=\"true\"></i></span> <span class=\"notification-title\">Installing App v1.2.1</span> <span class=\"notification-ago \">60 % Done</span> </div>
                                        <div class=\"progress progress-sm-height mrgn-all-none\">
                                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%\"> </div>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\" class=\"pos-relative\">
                                        <div class=\"mrgn-b-xs\"> <span class=\"notification-icon\"><i class=\"fa fa-exclamation-triangle text-warning\"></i></span> <span class=\"notification-title\">Application Error</span> <span class=\"notification-ago \">10 min ago</span> </div>
                                        <p class=\"mrgn-all-none\">failed to initialize the application due to error weblogic.application.moduleexception</p>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"mrgn-b-xs\"> <span class=\"notification-icon\"><i class=\"fa fa-server text-info\"></i></span> <span class=\"notification-title\">Server Status</span> <span class=\"notification-ago \">30GB Free Space</span> </div>
                                        <div class=\"progress progress-sm-height mrgn-all-none\">
                                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" style=\"width:40%\"></div>
                                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width:10%\"></div>
                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" style=\"width:20%\"></div>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"mrgn-b-xs\"> <span class=\"notification-icon\"><i class=\"fa fa-cogs text-success\"></i></span> <span class=\"notification-title\">Application Configured</span> <span class=\"notification-ago \">30 min ago</span> </div>
                                        <p class=\"mrgn-all-none\">Your setting is updated on server Sav3060</p>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li> <a class=\"text-center\" href=\"javascript:;\"> See all notifications <i class=\"fa fa-angle-right mrgn-l-xs\"></i> </a> </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\"><a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-envelope-o\"></i><span class=\"badge badge-danger\">5</span></a>
                            <ul class=\"dropdown-menu dropdown-custom\">
                                <li> <strong class=\"drop-title\">You have 5 new messages</strong> </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"user-thumb pull-left\"><img class=\"img-responsive img-circle\" src=\"{{ asset('bundles/views/images/register-user-2.jpg') }}\" alt=\"User-image\" width=\"64\" height=\"64\"> <span class=\"profile-status online pull-right\"></span> </div>
                                        <div class=\"user-content pull-left\">
                                            <h6 class=\"mrgn-all-none\">Marya Kale</h6>
                                            <p class=\"mrgn-b-xs\">Just see the my admin!</p> <span>9:30 AM</span> <span class=\"notification-ago\">30 min ago</span> </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"user-thumb pull-left\"><img class=\"img-responsive img-circle\" src=\"{{ asset('bundles/views/images/histroy-user-1.png') }}\" alt=\"User-image\" width=\"64\" height=\"64\"> <span class=\"profile-status online pull-right\"></span> </div>
                                        <div class=\"user-content pull-left\">
                                            <h6 class=\"mrgn-all-none\">Jim Gray</h6>
                                            <p class=\"mrgn-b-xs\">Just see the my admin!</p> <span>9:30 AM</span> <span class=\"notification-ago \">10 min ago</span> </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"user-thumb pull-left\"><img class=\"img-responsive img-circle\" src=\"{{ asset('bundles/views/images/register-user-2.jpg') }}\" alt=\"User-image\" width=\"64\" height=\"64\"> <span class=\"profile-status online pull-right\"></span> </div>
                                        <div class=\"user-content pull-left\">
                                            <h6 class=\"mrgn-all-none\">Marya Kale</h6>
                                            <p class=\"mrgn-b-xs\">Just see the my admin!</p> <span>9:30 AM</span> <span class=\"notification-ago \">20 min ago</span> </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"user-thumb pull-left\"><img class=\"img-responsive img-circle\" src=\"{{ asset('bundles/views/images/histroy-user-1.png') }}\" alt=\"User-image\" width=\"64\" height=\"64\"> <span class=\"profile-status online pull-right\"></span> </div>
                                        <div class=\"user-content pull-left\">
                                            <h6 class=\"mrgn-all-none\">Jim Gray</h6>
                                            <p class=\"mrgn-b-xs\">Just see the my admin!</p> <span>9:30 AM</span> <span class=\"notification-ago \">5 min ago</span> </div>
                                        <div class=\"clearfix\"></div>
                                    </a>
                                </li>
                                <li> <a class=\"text-center\" href=\"javascript:;\">See all notifications<i class=\"fa fa-angle-right mrgn-l-xs\"></i> </a> </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\"> <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin Rides<span class=\"caret\"></span><img class=\"img-responsive display-ib mrgn-l-sm img-circle\" src=\"{{ asset('bundles/views/images/user-1.jpg') }}\" width=\"64\" height=\"64\" alt=\"User-image\"></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"user-profile.htm\"><i class=\"fa fa-user\"></i> My Profile</a></li>
                                <li><a href=\"users-list.htm\"><i class=\"fa fa-money\"></i> My Contact</a></li>
                                <li><a href=\"email.htm\" class=\"pos-relative\"><i class=\"fa fa-inbox\"></i> My Inbox <span class=\"badge badge-danger pull-right profile-badge\">2</span></a></li>
                                <li><a href=\"user-profile.htm\" class=\"pos-relative\"><i class=\"fa fa-tasks\"></i> My task <span class=\"badge badge-success pull-right profile-badge\">5</span></a></li>
                                <li><a href=\"user-settings.htm\"><i class=\"fa fa-cog\"></i> Account Setting</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-power-off\"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>
    {% endblock %}
    <div class=\"prtm-main\">
        {% block sidemenu %}
            <div class=\"prtm-sidebar\">
            <div class=\"prtm-sidebar-back\"> </div>
            <div class=\"prtm-sidebar-nav-wrapper\">
                <div class=\"prtm-sidebar-menu\">
                    <nav class=\"sidebar-nav collapse\">
                        <ul class=\"list-unstyled sidebar-menu\">
                            <li class=\"sidenav-heading text-uppercase\">Dashboards</li>
                            <li class=\"has-children active opened\"><a href=\"\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i><span>Dashboard</span></a>
                                <ul class=\"list-unstyled sub-menu\">
                                    <li><a href=\"index-1.htm\" class=\"active\"><span>Dashboard 1</span></a></li>
                                    <li><a href=\"dashboard-v2.htm\"><span>Dashboard 2</span></a></li>
                                    <li><a href=\"dashboard-v3.htm\"><span>Dashboard 3</span><span class=\"badge badge-primary\">2</span></a></li>
                                </ul>
                            </li>
                            <li class=\"sidenav-heading text-uppercase\">Features</li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-sliders\" aria-hidden=\"true\"></i><span>UI Elements</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"ui-buttons.htm\"><span>Buttons</span></a></li>
                                    <li><a href=\"progress-bar.htm\"><span>Progress bar </span></a></li>
                                    <li><a href=\"tabs-accordions.htm\"><span>Tabs &amp; accordians</span></a></li>
                                    <li><a href=\"form-elements.htm\"><span>Form elements</span></a></li>
                                    <li><a href=\"no-uislider.htm\"><span>UI sliders</span></a></li>
                                    <li><a href=\"input-mask.htm\"><span>Form input mask</span></a></li>
                                    <li><a href=\"pagination-tooltip.htm\"><span>Pagination &amp; Tooltip</span></a></li>
                                    <li><a href=\"panels.htm\"><span>Panels</span></a></li>
                                    <li><a href=\"social-icon.htm\"><span>Social icons</span></a></li>
                                    <li><a href=\"typography.htm\"><span>Typography</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-inbox\" aria-hidden=\"true\"></i><span>Components</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"notification.htm\"><span>Notification &amp; Alerts</span></a></li>
                                    <li><a href=\"date-time-picker.htm\"><span>Date &amp; Time picker</span></a></li>
                                    <li><a href=\"color-picker.htm\"><span>Color picker</span></a></li>
                                    <li><a href=\"bootstrap-multiselect-dropdown.htm\"><span>Bootstrap Multiselect</span></a></li>
                                    <li><a href=\"cropper.htm\"><span>Image Cropper</span></a></li>
                                    <li><a href=\"fileupload.htm\"><span>File Upload</span></a></li>
                                    <li><a href=\"modals.htm\"><span>Modal </span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-area-chart\" aria-hidden=\"true\"></i><span>Graphs and Charts</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"google-chart.htm\"><span>Google chart</span></a></li>
                                    <li><a href=\"high-chart.htm\"><span>High Chart</span></a></li>
                                    <li><a href=\"morris.htm\"><span>Morris Chart</span></a></li>
                                    <li><a href=\"chartlist.htm\"><span>Chartlist</span></a></li>
                                    <li><a href=\"flow-chart.htm\"><span>Flow Chart</span></a></li>
                                    <li><a href=\"easypie.htm\"><span>Easypie chart</span></a></li>
                                    <li><a href=\"flot-chart.htm\"><span>Flot chart</span></a></li>
                                    <li><a href=\"chartjs.htm\"><span>js charts</span></a></li>
                                    <li><a href=\"chart-peity.htm\"><span>Peity chart</span></a></li>
                                    <li><a href=\"sparkline-chart.htm\"><span>Sparkline chart</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-map\" aria-hidden=\"true\"></i><span>Maps</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"googlemap.htm\"><span>Google map</span></a></li>
                                    <li><a href=\"vectormap.htm\"><span>Vector map</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i><span>Tables</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"basic-table.htm\"><span>Basic tables</span></a></li>
                                    <li><a href=\"responsive-table.htm\"><span>Responsive table</span></a></li>
                                    <li><a href=\"bootstrap-table.htm\"><span>Bootstrap table</span></a></li>
                                    <li class=\"has-children\"><a href=\"\"><span>Data tables</span></a>
                                        <ul class=\"list-unstyled sub-menu collapse\">
                                            <li><a href=\"data-table-buttons.htm\"><span>Buttons Extension</span></a></li>
                                            <li><a href=\"data-table-autofill.htm\"><span>Autofill Extension</span></a></li>
                                            <li><a href=\"data-table-col-reorder.htm\"><span>Colreorder Extension</span></a></li>
                                            <li><a href=\"data-table-row-reorder.htm\"><span>Rowreorder Extension</span></a></li>
                                            <li><a href=\"data-table-fixed-column.htm\"><span>Fixed column Extension</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"sidenav-heading text-uppercase\">Data visualization</li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i>
                                    <span>Dimple library</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li class=\"has-children\"><a href=\"\"><span>Line charts</span></a>
                                        <ul class=\"list-unstyled sub-menu collapse\">
                                            <li><a href=\"dimple-line-horizontal.htm\"><span>Horizontal orientation</span></a></li>
                                            <li><a href=\"dimple-line-vertical.htm\"><span>Vertical orientation</span></a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has-children\"><a href=\"\"><span>Bar charts</span></a>
                                        <ul class=\"list-unstyled sub-menu collapse\">
                                            <li><a href=\"dimple-bar-horizontal.htm\"><span>Horizontal orientation</span></a></li>
                                            <li><a href=\"dimple-bar-vertical.htm\"><span>Vertical orientation</span></a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has-children\"><a href=\"\"><span>Area charts</span></a>
                                        <ul class=\"list-unstyled sub-menu collapse\">
                                            <li><a href=\"dimple-area-chart-horizontal.htm\"><span>Horizontal orientation</span></a></li>
                                            <li><a href=\"dimple-area-chart-vertical.htm\"><span>Vertical orientation</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"dimple-pie-chart.htm\"><span>Pie charts</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i><span>D3 library</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"d3-line.htm\"><span>Lines Charts</span></a></li>
                                    <li><a href=\"d3-area.htm\"><span>Area charts</span></a></li>
                                    <li><a href=\"d3-bar.htm\"><span>Bars charts</span></a></li>
                                </ul>
                            </li>
                            <li class=\"sidenav-heading text-uppercase\">Layouts</li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-columns\" aria-hidden=\"true\"></i><span>Page layouts</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"right-sidebar.htm\"><span>Right Sidebar</span></a></li>
                                    <li><a href=\"collapse-sidebar.htm\"><span>Collapse Sidebar</span></a></li>
                                    <li><a href=\"fixed-header.htm\"><span>Fixed Header</span></a></li>
                                </ul>
                            </li>
                            <li class=\"sidenav-heading text-uppercase\">Pages</li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>Users</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"users-list.htm\"><span>Users list</span></a></li>
                                    <li><a href=\"user-profile.htm\"><span>Users profile</span></a></li>
                                    <li><a href=\"user-settings.htm\"><span>User settings</span></a></li>
                                    <li><a href=\"chat.htm\"><span>User chat</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i><span>Ecommerce</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"ecommerce-product.htm\"><span>Ecommerce Product</span></a></li>
                                    <li><a href=\"ecommerce-product-detail.htm\"><span>Ecommerce Product detail</span></a></li>
                                    <li><a href=\"ecommerce-order.htm\"><span>Ecommerce order</span></a></li>
                                    <li><a href=\"ecommerce-order-detail.htm\"><span>Ecommerce order detail</span></a></li>
                                </ul>
                            </li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i><span>Mailbox</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"email.htm\"><span>Emails</span></a></li>
                                    <li><a href=\"email-compose.htm\"><span>Email compose</span></a></li>
                                </ul>
                            </li>
                            <li><a href=\"tickets.htm\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i><span>Tickets</span></a></li>
                            <li class=\"has-children\"><a href=\"\"><i class=\"fa fa-magic\" aria-hidden=\"true\"></i><span>Extra</span></a>
                                <ul class=\"list-unstyled sub-menu collapse\">
                                    <li><a href=\"login.htm\"><span>Login</span></a></li>
                                    <li><a href=\"coming-soon.htm\"><span>Coming Soon</span></a></li>
                                    <li><a href=\"404.htm\"><span>404</span></a></li>
                                    <li><a href=\"pricing.htm\"><span>Pricing</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"prtm-sparkline pad-lr-lg\">
                        <div class=\"prtm-sparkline-list bg-success clearfix prtm-card-box\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"5000\">5,000</span> <span>New visitors</span> </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[9, 8, 9, 7, 6, 8, 7, 8]\"> </div>
                            </div>
                        </div>
                        <div class=\"prtm-sparkline-list clearfix bg-info prtm-card-box\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"3000\">3,000</span> <span>New Users</span> </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[5, 6, 8, 9, 5, 8, 4, 6]\"> </div>
                            </div>
                        </div>
                        <div class=\"prtm-sparkline-list clearfix bg-secondary prtm-card-box\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <span class=\"show count-item\" data-count=\"7000\">7,000</span> <span>Active users</span> </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"chart sparkline text-center\" data-chart=\"sparkline\" data-type=\"bar\" data-height=\"50px\" data-barwidth=\"6\" data-width=\"100%\" data-barspacing=\"2\" data-barcolor=\"#ffffff\" data-values=\"[9, 8, 9, 7, 6, 8, 7, 8]\"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        <div class=\"prtm-content-wrapper\">
            <div class=\"prtm-content\">
                {% block mainpage %}
                <div class=\"row prtm-card-wrapper\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-card prtm-card-box graph bg-primary pad-all-md mrgn-b-lg\">
                            <div class=\"prtm-card-info\">
                                <div class=\"mrgn-b-lg clearfix\">
                                    <div class=\"pull-left\"> <span class=\"show\">Today's Sales</span> <span>85% Of Target</span> </div>
                                    <div class=\"pull-right text-right\"> <span class=\"font-counter\">\$<span class=\"count-item\" data-count=\"12000\">0</span></span>
                                    </div>
                                </div>
                                <div class=\"prtm-card-progress\">
                                    <div class=\"progress progress-xs-height\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"85%\"> <span class=\"sr-only\">50% Complete (secondary)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--prtm-card closed-->
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-card prtm-card-box order bg-success pad-all-md mrgn-b-lg\">
                            <div class=\"prtm-card-info\">
                                <div class=\"mrgn-b-lg clearfix\">
                                    <div class=\"pull-left\"> <span class=\"show\">New Orders</span> <span>90% Of Target</span> </div>
                                    <div class=\"pull-right text-right\"> <span class=\"font-counter\"><span class=\"count-item\" data-count=\"350\">0</span></span>
                                    </div>
                                </div>
                                <div class=\"prtm-card-progress\">
                                    <div class=\"progress progress-xs-height\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"90%\"> <span class=\"sr-only\">50% Complete (secondary)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--prtm-card closed-->
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-card prtm-card-box invoices bg-info pad-all-md mrgn-b-lg\">
                            <div class=\"prtm-card-info\">
                                <div class=\"mrgn-b-lg clearfix\">
                                    <div class=\"pull-left\"> <span class=\"show\">New Customers</span> <span>70% Of Yesterday</span> </div>
                                    <div class=\"pull-right text-right\"> <span class=\"font-counter\"><span class=\"count-item\" data-count=\"700\">0</span></span>
                                    </div>
                                </div>
                                <div class=\"prtm-card-progress\">
                                    <div class=\"progress progress-xs-height\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"70%\"> <span class=\"sr-only\">8% Complete (secondary)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--prtm-card closed-->
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-card prtm-card-box tickets bg-secondary pad-all-md mrgn-b-lg\">
                            <div class=\"prtm-card-info\">
                                <div class=\"mrgn-b-lg clearfix\">
                                    <div class=\"pull-left\"> <span class=\"show\">Open Tickets</span> <span>4% From the Yesterday</span> </div>
                                    <div class=\"pull-right text-right\"> <span class=\"font-counter\"><span class=\"count-item\" data-count=\"35\">0</span></span>
                                    </div>
                                </div>
                                <div class=\"prtm-card-progress\">
                                    <div class=\"progress progress-xs-height\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"10%\"> <span class=\"sr-only\">80% Complete (secondary)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--prtm-card closed-->
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-7\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>Site Visits</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown\"> <a href=\"javascript:;\" class=\"mrgn-l-xs more-btn\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\">more<i class=\"fa fa-angle-down\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-icon pull-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"d-area-chart chart\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-5\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>Revenue</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown\"> <a href=\"javascript:;\" class=\"mrgn-l-xs more-btn\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\">more<i class=\"fa fa-angle-down\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-icon pull-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"d-area-points-chart chart\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>Chat History</h3></div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"prtm-chat-wrap\">
                                    <div class=\"slimscrollbar\" style=\"height: 428px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                        <div class=\"chat-wrap-list\">
                                            <div class=\"clearfix\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"{{ asset('bundles/views/images/blog-post-author.jpg') }}\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Devy Finn</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p>Wow! This is something exactly I needed. You guys did a great work.</p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>3 Min ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix right-side\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"{{ asset('bundles/views/images/register-user-3.jpg') }}\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Harry Snooka</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p>Thankyou :) We are always here to help you. Our customer care service is 24X7. You may reach us anytime.</p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>45 min ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"{{ asset('bundles/views/images/register-user-3.jpg') }}\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Jaime Garner</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p>I am impressed with your immediate help. I got my work done efficiently. </p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>1 hours ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix right-side\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"{{ asset('bundles/views/images/register-user-4.jpg') }}\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Vic Gannis</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p> You can find the date time picker and notification & alerts under \"Components\" menu. It is really very easy to use them. </p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>7 hours ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"{{ asset('bundles/views/images/register-user-2.jpg') }}\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Eally Punto</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p>Hey please tell me where can I find date time picker and notifications & alerts in it.</p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>13 min ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix right-side\">
                                                <div class=\"col-lg-custom-3\"> <img class=\"img-responsive img-circle\" src=\"{{ asset('bundles/views/images/histroy-user-2.png') }}\" width=\"64\" height=\"64\" alt=\"User Image\"> </div>
                                                <div class=\"col-lg-custom-9\">
                                                    <h6 class=\"text-primary\">Gonny Duke</h6>
                                                    <div class=\"prtm-chat-content prtm-msg-block\">
                                                        <p>I love the charts and animations. This theme has super cool stuff to use.</p>
                                                    </div>
                                                    <div class=\"post-meta\"> <span>3 hours ago</span> <a href=\"javascript:;\"><i class=\"fa fa-reply text-success mrgn-l-xs\" aria-hidden=\"true\"></i></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"send-msg-wrapper\">
                                        <form class=\"send-msg-form\" action=\"javascript:;\" method=\"post\">
                                            <div class=\"clearfix\">
                                                <textarea class=\"form-control msg-box\" placeholder=\"Enter your text\"></textarea>
                                                <input class=\"send-msg-btn btn btn-primary\" type=\"submit\" value=\"submit\"> </div>
                                        </form>
                                    </div>
                                </div>
                                <!--prtm-chat-wrap closed-->
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>New Users</h3> </div>
                                <div class=\"contextual-link\"> <span class=\"badge badge-primary\">16 New Users</span>
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"row prtm-new-user-list mrgn-b-md\">
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/register-user-1.jpg') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Gavy</span> <span>Usa</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/register-user-2.jpg') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Nethi</span> <span>Japan</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/register-user-3.jpg') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Ruby</span> <span>Rome</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/register-user-4.jpg') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">John</span> <span>UK</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/user-1.jpg') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Nancy</span> <span>USA</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/user-2.jpg') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Phill</span> <span>Canada</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/dami-user.png') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Garry</span> <span>Rome</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/user-4.jpg') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Hema</span> <span>India</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/user-5.jpg') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Brook</span> <span>London</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/user-9.jpg') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Harby</span> <span>USA</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/user-7.jpg') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Grick</span> <span>USA</span> </div>
                                    </div>
                                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">
                                        <div class=\"feature-box-thumb\"> <img src=\"{{ asset('bundles/views/images/dami-user.png') }}\" alt=\"user's avtar\" class=\"img-responsive width-full\" width=\"100\" height=\"100\"> </div>
                                        <div class=\"feature-box-info\"> <span class=\"base-dark show fw-normal\">Nathaniel</span> <span>India</span> </div>
                                    </div>
                                </div>
                                <div><a href=\"javascript:;\" class=\"text-center btn-block\">View all</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>weather</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"prtm-wheather-widget text-center\">
                                    <h2 class=\"fw-normal base-dark fw-light\" id=\"date\">&nbsp;</h2>
                                    <div class=\"bg-inverse city-active\">
                                        <h3 class=\"fw-light\" id=\"city\">&nbsp;</h3> </div>
                                    <h3 id=\"today-temp\" class=\"fw-normal base-dark mrgn-b-md text-capitalize\">&nbsp;</h3>
                                    <div class=\"wheather-view\">
                                        <div class=\"wheather-view\" id=\"today-icon\">
                                            <canvas class=\"weather-icon pad-t-md\" width=\"150\" height=\"150\" data-color=\"#758494\"></canvas>
                                        </div>
                                    </div>
                                    <div class=\"clearfix mrgn-b-xs\">
                                        <div class=\"pull-left temp-status\"> <img class=\"img-responsive display-ib\" src=\"{{ asset('bundles/views/images/bottom-down.png') }}\" width=\"26\" height=\"49\" alt=\"arrow down\"> <span id=\"min-temp\" class=\"temp-value base-dark\"><i class=\"fa fa-circle text-success pull-right\" aria-hidden=\"true\"></i></span> </div>
                                        <div class=\"pull-right temp-status\"> <img class=\"img-responsive display-ib\" src=\"{{ asset('bundles/views/images/bottom-up.png') }}\" width=\"26\" height=\"49\" alt=\"arrow down\"> <span id=\"max-temp\" class=\"temp-value base-dark\"><i class=\"fa fa-circle base-secondary pull-right\" aria-hidden=\"true\"></i></span> </div>
                                    </div>
                                    <div class=\"bg-inverse wheather-list-wrap clearfix\">
                                        <div class=\"feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none\">
                                            <div class=\"square-50\">
                                                <canvas class=\"weather-icon pad-t-xs\" width=\"40\" height=\"40\"></canvas>
                                            </div> <span class=\"show gray\">Now</span> </div>
                                        <div class=\"feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none\">
                                            <div class=\"square-50\">
                                                <canvas class=\"weather-icon pad-t-xs\" width=\"40\" height=\"40\"></canvas>
                                            </div> <span class=\"show gray\">Morning</span> </div>
                                        <div class=\"feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none\">
                                            <div class=\"square-50\">
                                                <canvas class=\"weather-icon pad-t-xs\" width=\"40\" height=\"40\"></canvas>
                                            </div> <span class=\"show gray\">Evening</span> </div>
                                        <div class=\"feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none\">
                                            <div class=\"square-50\">
                                                <canvas class=\"weather-icon\" width=\"40\" height=\"40\"> </canvas>
                                            </div> <span class=\"show gray\">Night</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6 full-col-lg-md\">
                        <div class=\"prtm-block overflow-wrapper\">
                            <div class=\"prtm-block-title mrgn-b-sm\">
                                <div class=\"caption\">
                                    <h3>Visitor Origin</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content overflow-pad\">
                                <div class=\"row\">
                                    <div class=\"col-md-8 pad-all-none\">
                                        <div class=\"embed-responsive-item\">
                                            <div class=\"world-map-markers vector\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 pad-all-none\">
                                        <div class=\"visitor-map-content\">
                                            <h6 class=\"text-uppercase\">Continent</h6>
                                            <ul class=\"list-unstyled progress-list\">
                                                <li>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-6 col-md-6\"> <span>Asia</span> </div>
                                                        <div class=\"col-sm-6 col-md-6\"> <span class=\"pull-right\">60%</span> </div>
                                                    </div>
                                                    <div class=\"progress progress-sm-height progress-rounded\">
                                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"60%\"> <span class=\"sr-only\">90% Complete</span> </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-6 col-md-6\"> <span>Europe</span> </div>
                                                        <div class=\"col-sm-6 col-md-6\"> <span class=\"pull-right\">25%</span> </div>
                                                    </div>
                                                    <div class=\"progress progress-sm-height progress-rounded\">
                                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"25%\"> <span class=\"sr-only\">80% Complete</span> </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-6 col-md-6\"> <span>Africa</span> </div>
                                                        <div class=\"col-sm-6 col-md-6\"> <span class=\"pull-right\">5%</span> </div>
                                                    </div>
                                                    <div class=\"progress progress-sm-height progress-rounded\">
                                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"5\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"5%\"> <span class=\"sr-only\">5% Complete</span> </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-6 col-md-6\"> <span>South America</span> </div>
                                                        <div class=\"col-sm-6 col-md-6\"> <span class=\"pull-right\">10%</span> </div>
                                                    </div>
                                                    <div class=\"progress progress-sm-height progress-rounded\">
                                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-width=\"10%\"> <span class=\"sr-only\">10% Complete</span> </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-card-box bg-inverse pad-all-lg mrgn-b-lg\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3 class=\"text-capitalize base-reverse\">Email statistics</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-reverse\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div id=\"dashboard3-email\" class=\"email-map\" style=\"height:325px;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-3 half-col-lg-md\">
                        <div class=\"prtm-block mrgn-b-lg\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3 class=\"text-capitalize\">User Agent</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"user-agent\">
                                    <div class=\"agent-list\">
                                        <ul class=\"list-unstyled\">
                                            <li class=\"mrgn-b-lg clearfix\">
                                                <div class=\"pull-left\"><i class=\"fa fa-safari fa-lg\" aria-hidden=\"true\"></i> <span>safari</span></div>
                                                <div class=\"pull-right\"><span>40%</span></div>
                                            </li>
                                            <li class=\"mrgn-b-lg clearfix\">
                                                <div class=\"pull-left\"><i class=\"fa fa-chrome fa-lg\" aria-hidden=\"true\"></i> <span>chrome</span></div>
                                                <div class=\"pull-right\">50%</div>
                                            </li>
                                            <li class=\"mrgn-b-lg clearfix\">
                                                <div class=\"pull-left\"><i class=\"fa fa-internet-explorer fa-lg\" aria-hidden=\"true\"></i> <span>IE</span></div>
                                                <div class=\"pull-right\">75%</div>
                                            </li>
                                            <li class=\"mrgn-b-lg clearfix\">
                                                <div class=\"pull-left\"><i class=\"fa fa-firefox fa-lg\" aria-hidden=\"true\"></i> <span>firefox</span></div>
                                                <div class=\"pull-right\">80%</div>
                                            </li>
                                            <li class=\"mrgn-b-lg clearfix\">
                                                <div class=\"pull-left\"><i class=\"fa fa-opera fa-lg\" aria-hidden=\"true\"></i> <span class=\"bws-name\">opera</span></div>
                                                <div class=\"pull-right\">30%</div>
                                            </li>
                                        </ul>
                                        <div class=\"bg-info pad-all-sm base-reverse-all\">
                                            <ul class=\"list-inline list-summery\">
                                                <li class=\"\"> <span><i class=\"fa fa-apple fa-lg\" aria-hidden=\"true\"></i></span> <span>40%</span> </li>
                                                <li class=\"\"> <span><i class=\"fa fa-android fa-lg\" aria-hidden=\"true\"></i></span> <span>80%</span> </li>
                                                <li class=\"\"> <span><i class=\"fa fa-windows fa-lg\" aria-hidden=\"true\"></i></span> <span>90%</span> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title\">
                                <div class=\"caption\">
                                    <h3>Customer Support</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"slimscrollbar\" style=\"height: 520px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                    <div class=\"prtm-customer-support\">
                                        <div class=\"prtm-customer-list\">
                                            <div class=\"row mrgn-b-xs\">
                                                <div class=\"col-xs-12 col-sm-3 col-md-6 col-lg-8\">
                                                    <div class=\"pull-left mrgn-r-sm\"> <img class=\"img-responsive display-ib img-circle\" src=\"{{ asset('bundles/views/images/register-user-1.jpg') }}\" width=\"64\" height=\"64\" alt=\"User Photo\"> </div>
                                                    <div class=\"pull-left\">
                                                        <h6 class=\"text-primary\">Tina Denver</h6>
                                                        <div class=\"post-meta\"> <span>3 hours ago</span> </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-12 col-sm-9 col-md-6 col-lg-4\"> <span class=\"text-right text-warning show\"><i class=\"fa fa-dot-circle-o\"></i> Pending</span> </div>
                                            </div>
                                            <p>Thanks for the chartlist. There are awesome designs and very user friendly.</p>
                                        </div>
                                        <div class=\"prtm-customer-list\">
                                            <div class=\"row mrgn-b-xs\">
                                                <div class=\"col-xs-12 col-sm-3 col-md-6 col-lg-8\">
                                                    <div class=\"pull-left mrgn-r-sm\"> <img class=\"img-responsive display-ib img-circle\" src=\"{{ asset('bundles/views/images/register-user-2.jpg') }}\" width=\"64\" height=\"64\" alt=\"User Photo\"> </div>
                                                    <div class=\"pull-left\">
                                                        <h6 class=\"text-primary\">Gera Pattinson</h6>
                                                        <div class=\"post-meta\"> <span>3 hours ago</span> </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-12 col-sm-9 col-md-6 col-lg-4\"> <span class=\"text-right text-success show\"><i class=\"fa fa-dot-circle-o\"></i> Open</span> </div>
                                            </div>
                                            <p>User profile that you are providing is great. </p>
                                        </div>
                                        <div class=\"prtm-customer-list\">
                                            <div class=\"row mrgn-b-xs\">
                                                <div class=\"col-xs-12 col-sm-3 col-md-6 col-lg-8\">
                                                    <div class=\"pull-left mrgn-r-sm\"> <img class=\"img-responsive display-ib img-circle\" src=\"{{ asset('bundles/views/images/blog-post-author.jpg') }}\" width=\"64\" height=\"64\" alt=\"User Photo\"> </div>
                                                    <div class=\"pull-left\">
                                                        <h6 class=\"text-primary\">Susan Wood</h6>
                                                        <div class=\"post-meta\"> <span>56 Min ago</span> </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-12 col-sm-9 col-md-6 col-lg-4\"> <span class=\"text-right text-warning show\"><i class=\"fa fa-dot-circle-o\"></i> Pending</span> </div>
                                            </div>
                                            <p>Having plenty of options is really cool. I can choose what suits to my work.</p>
                                        </div>
                                        <div class=\"prtm-customer-list\">
                                            <div class=\"row mrgn-b-xs\">
                                                <div class=\"col-xs-12 col-sm-3 col-md-6 col-lg-8\">
                                                    <div class=\"pull-left mrgn-r-sm\"> <img class=\"img-responsive display-ib img-circle\" src=\"{{ asset('bundles/views/images/user-10.jpg') }}\" width=\"64\" height=\"64\" alt=\"User Photo\"> </div>
                                                    <div class=\"pull-left\">
                                                        <h6 class=\"text-primary\">Shady Hugh</h6>
                                                        <div class=\"post-meta\"> <span>1 hours ago</span> </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-12 col-sm-9 col-md-6 col-lg-4\"> <span class=\"text-right text-success show\"><i class=\"fa fa-dot-circle-o\"></i> Open</span> </div>
                                            </div>
                                            <p>Doing work with such a tool is really fun.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-block\">
                            <div class=\"prtm-block-title mrgn-b-lg\">
                                <div class=\"caption\">
                                    <h3>To Do List</h3> </div>
                                <div class=\"contextual-link\">
                                    <div class=\"dropdown display-ib\"> <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
                                        <ul class=\"dropdown-menu dropdown-arrow dropdown-menu-right\">
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-eye\"></i> <span class=\"mrgn-l-sm\">View</span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-pencil\"></i> <span class=\"mrgn-l-sm\">Edit </span> </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\"> <i class=\"fa fa-trash-o\"></i> <span class=\"mrgn-l-sm\">Delete</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"prtm-block-content\">
                                <div class=\"slimscrollbar\" style=\"height: 500px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                    <div class=\"prtm-to-do\">
                                        <ul class=\"list-unstyled border-list-xs\">
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">Be strategic about your energy to do things.</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">Most important task completed before moving on to anything else.</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\"><del>Send agreement to Stephen.</del></span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">Finalize monthly earnings report.</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">Create QR code for every user on website.</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">Research new tools and softwares to do things faster.</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\"> <span class=\"to-do-icon pull-left\">
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                    </span> <span class=\"list-description pull-left\">What can be pushed off till tonight?</span> </div>
                                                    <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box\"> <a href=\"javascript:;\" class=\"text-success mrgn-r-xs\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                                        <a href=\"javascript:;\" class=\"text-danger\"> <i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-4\">
                        <div class=\"prtm-full-block overflow-wrapper\">
                            <div id=\"full-clndr\" class=\"clearfix\">
                                <script type=\"text/template\" id=\"full-clndr-template\">
                                    <div class=\"clndr-controls\">
                                        <div class=\"clndr-previous-button\"><span><i class=\"fa fa-angle-double-left fa-2x\" aria-hidden=\"true\"></i></span></div>
                                        <div class=\"clndr-next-button\"><span><i class=\"fa fa-angle-double-right fa-2x\" aria-hidden=\"true\"></i></span></div>
                                        <div class=\"current-month\">
                                            <%= month %>
                                            <%= year %>
                                        </div>
                                    </div>
                                    <div class=\"clndr-grid\">
                                        <div class=\"days-of-the-week clearfix\">
                                            <% _.each(daysOfTheWeek, function(day) { %>
                                            <div class=\"header-day\">
                                                <%= day %>
                                            </div>
                                            <% }); %>
                                        </div>
                                        <div class=\"days\">
                                            <% _.each(days, function(day) { %>
                                            <div class=\"<%= day.classes %>\" id=\"<%= day.id %>\"><span class=\"day-number\"><%= day.day %></span></div>
                                            <% }); %>
                                        </div>
                                    </div>
                                    <div class=\"event-listing\">
                                        <% _.each(eventsThisMonth, function(event) { %>
                                        <div class=\"event-item\">
                                            <div class=\"event-item-name\">
                                                <%= event.title %>
                                            </div>
                                            <div class=\"event-item-location\">
                                                <%= event.location %>
                                            </div>
                                        </div>
                                        <% }); %>
                                    </div>
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"prtm-social-widgets\">
                    <h6 class=\"text-uppercase\">Marketing Campaign</h6>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"stock-list prtm-card-box bg-primary mrgn-b-lg\">
                                <div class=\"clearfix\">
                                    <div class=\"stk-icon\"> <span class=\"show stock-main\"><i class=\"fa fa-facebook\"></i></span> <span><i class=\"fa fa-long-arrow-up\"></i> 2.43%</span> </div>
                                    <div class=\"prtm-stk-des\">
                                        <div class=\"brand-info clearfix\">
                                            <h6 class=\"prtm-brand-name text-uppercase\">Facebook</h6> </div>
                                        <div class=\"clearfix\">
                                            <div class=\"prtm-brand-min\"> <span class=\"show stock-sub-head\">client</span> <span>Min.time</span> </div>
                                            <div class=\"prtm-brand-budget\"> <span class=\"show stock-sub-head\">budget</span> <span>\$4650</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"stock-list prtm-card-box bg-danger mrgn-b-lg\">
                                <div class=\"clearfix\">
                                    <div class=\"stk-icon\"> <span class=\"show stock-main\"><i class=\"fa fa-youtube\"></i></span> <span><i class=\"fa fa-long-arrow-up\"></i> 5.66%</span> </div>
                                    <div class=\"prtm-stk-des\">
                                        <div class=\"brand-info clearfix\">
                                            <h6 class=\"prtm-brand-name text-uppercase\">youtube</h6> </div>
                                        <div class=\"clearfix\">
                                            <div class=\"prtm-brand-min\"> <span class=\"show stock-sub-head\">client</span> <span>Min.time</span> </div>
                                            <div class=\"prtm-brand-budget\"> <span class=\"show stock-sub-head\">budget</span> <span>\$6796</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"stock-list prtm-card-box bg-info mrgn-b-lg\">
                                <div class=\"clearfix\">
                                    <div class=\"stk-icon\"> <span class=\"show stock-main\"><i class=\"fa fa-twitter\"></i></span> <span><i class=\"fa fa-long-arrow-up\"></i> 1.87%</span> </div>
                                    <div class=\"prtm-stk-des\">
                                        <div class=\"brand-info clearfix\">
                                            <h6 class=\"prtm-brand-name text-uppercase\">Twitter</h6> </div>
                                        <div class=\"clearfix\">
                                            <div class=\"prtm-brand-min\"> <span class=\"show stock-sub-head\">client</span> <span>Min.time</span> </div>
                                            <div class=\"prtm-brand-budget\"> <span class=\"show stock-sub-head\">budget</span> <span>\$4779</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"stock-list prtm-card-box bg-success mrgn-b-lg\">
                                <div class=\"clearfix\">
                                    <div class=\"stk-icon\"> <span class=\"show stock-main\"><i class=\"fa fa-google\"></i></span> <span><i class=\"fa fa-long-arrow-up\"></i> 4.78%</span> </div>
                                    <div class=\"prtm-stk-des\">
                                        <div class=\"brand-info clearfix\">
                                            <h6 class=\"prtm-brand-name text-uppercase\">Google Ads</h6> </div>
                                        <div class=\"clearfix\">
                                            <div class=\"prtm-brand-min\"> <span class=\"show stock-sub-head\">client</span> <span>Min.time</span> </div>
                                            <div class=\"prtm-brand-budget\"> <span class=\"show stock-sub-head\">budget</span> <span>\$1247</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endblock %}
            </div>
            {% block footer %}
            <footer class=\"footer-wrapper\">
                <div class=\"prtm-footer clearfix\">
                    <div class=\"row footer-area pad-lr-md\">
                    </div>
                </div>
                <a href=\"#\" id=\"back-top\" class=\"to-top scrolled\"> <span class=\"to-top-icon\"></span> </a>
                <script type=\"text/javascript\" src=\"{{ asset('bundles/views/scripts/vendor.min.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('bundles/views/scripts/plugins.min.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('bundles/views/scripts/pratham.min.js') }}\"></script>
                <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
                <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
            </footer>
            {% endblock %}
        </div>
    </div>
{% endblock %}
</div>
</body>

</html>", "@FOSUser/layoutbackoffice.html.twig", "/var/www/html/PIDEVS/app/Resources/FOSUserBundle/views/layoutbackoffice.html.twig");
    }
}
