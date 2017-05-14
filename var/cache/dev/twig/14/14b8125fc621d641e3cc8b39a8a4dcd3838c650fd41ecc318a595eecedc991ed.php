<?php

/* @PidevGestionTrajets/BackOffice/trajets.html.twig */
class __TwigTemplate_6690527d32a771dd7d37b19f6af852ad4d73727733ccdcd3af3d6bbbc25143f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutbackoffice.html.twig", "@PidevGestionTrajets/BackOffice/trajets.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'topbody' => array($this, 'block_topbody'),
            'mainpage' => array($this, 'block_mainpage'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layoutbackoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6958e15c09d3eb7c904be0eae51b91bd925935c4025b108924658d08cdce7e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6958e15c09d3eb7c904be0eae51b91bd925935c4025b108924658d08cdce7e62->enter($__internal_6958e15c09d3eb7c904be0eae51b91bd925935c4025b108924658d08cdce7e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/BackOffice/trajets.html.twig"));

        $__internal_645728885b5395204f2e648835b8d448a9c5772ff0e07727400bf29b7552b172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645728885b5395204f2e648835b8d448a9c5772ff0e07727400bf29b7552b172->enter($__internal_645728885b5395204f2e648835b8d448a9c5772ff0e07727400bf29b7552b172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/BackOffice/trajets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6958e15c09d3eb7c904be0eae51b91bd925935c4025b108924658d08cdce7e62->leave($__internal_6958e15c09d3eb7c904be0eae51b91bd925935c4025b108924658d08cdce7e62_prof);

        
        $__internal_645728885b5395204f2e648835b8d448a9c5772ff0e07727400bf29b7552b172->leave($__internal_645728885b5395204f2e648835b8d448a9c5772ff0e07727400bf29b7552b172_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f00c7a72e5c40d862faac48f244645f2f0c899422001255e76160eee53e2da19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00c7a72e5c40d862faac48f244645f2f0c899422001255e76160eee53e2da19->enter($__internal_f00c7a72e5c40d862faac48f244645f2f0c899422001255e76160eee53e2da19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_86a6130f8615650e21226dcbbb78ce80cbd0550c5f79e8858684025838044b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a6130f8615650e21226dcbbb78ce80cbd0550c5f79e8858684025838044b7b->enter($__internal_86a6130f8615650e21226dcbbb78ce80cbd0550c5f79e8858684025838044b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 10
        echo "    ";
        
        $__internal_86a6130f8615650e21226dcbbb78ce80cbd0550c5f79e8858684025838044b7b->leave($__internal_86a6130f8615650e21226dcbbb78ce80cbd0550c5f79e8858684025838044b7b_prof);

        
        $__internal_f00c7a72e5c40d862faac48f244645f2f0c899422001255e76160eee53e2da19->leave($__internal_f00c7a72e5c40d862faac48f244645f2f0c899422001255e76160eee53e2da19_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_10c3711650f07e26d7182c66cefc20b2d71d90e1e0118a92abb658f0eb8079ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c3711650f07e26d7182c66cefc20b2d71d90e1e0118a92abb658f0eb8079ec->enter($__internal_10c3711650f07e26d7182c66cefc20b2d71d90e1e0118a92abb658f0eb8079ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a9d032acd708ef3ddeb357e31f582004c5c558c8ba3c4c3cd5eaf2f8a4cbe230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d032acd708ef3ddeb357e31f582004c5c558c8ba3c4c3cd5eaf2f8a4cbe230->enter($__internal_a9d032acd708ef3ddeb357e31f582004c5c558c8ba3c4c3cd5eaf2f8a4cbe230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('topbody', $context, $blocks);
        // line 17
        echo "
";
        // line 23
        echo "
                ";
        // line 24
        $this->displayBlock('mainpage', $context, $blocks);
        // line 106
        echo "
            ";
        // line 107
        $this->displayBlock('footer', $context, $blocks);
        // line 142
        echo "
    <script>
     function confirmDelete(id)
     {
         if (confirm(\"Are you sure you wanna delete this ride?\"))
             deleteRide(id);
     }

     function deleteRide(id) {
         \$.ajax({
             url: Routing.generate('deleteTrajet'),
             data: 'idTrajet='+id,
             type: 'POST',
             success: function (data) {
                 alert('You have successfully deleted this ride from the database.');

             },
             error: function (data) {
                 alert('Something went wrong!');
             }
         });
     }
    </script>
";
        
        $__internal_a9d032acd708ef3ddeb357e31f582004c5c558c8ba3c4c3cd5eaf2f8a4cbe230->leave($__internal_a9d032acd708ef3ddeb357e31f582004c5c558c8ba3c4c3cd5eaf2f8a4cbe230_prof);

        
        $__internal_10c3711650f07e26d7182c66cefc20b2d71d90e1e0118a92abb658f0eb8079ec->leave($__internal_10c3711650f07e26d7182c66cefc20b2d71d90e1e0118a92abb658f0eb8079ec_prof);

    }

    // line 14
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_fcd830567e986192fb7e1de54dcba9a9443104b1da799c4203f52c44cd7e7603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd830567e986192fb7e1de54dcba9a9443104b1da799c4203f52c44cd7e7603->enter($__internal_fcd830567e986192fb7e1de54dcba9a9443104b1da799c4203f52c44cd7e7603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_db4f832734f3a0e0f82c8f61c8b4e0e1ef91858465d8282715b6f21d1f5cabe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4f832734f3a0e0f82c8f61c8b4e0e1ef91858465d8282715b6f21d1f5cabe7->enter($__internal_db4f832734f3a0e0f82c8f61c8b4e0e1ef91858465d8282715b6f21d1f5cabe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 15
        echo "    ";
        $this->displayParentBlock("topbody", $context, $blocks);
        echo "
    ";
        
        $__internal_db4f832734f3a0e0f82c8f61c8b4e0e1ef91858465d8282715b6f21d1f5cabe7->leave($__internal_db4f832734f3a0e0f82c8f61c8b4e0e1ef91858465d8282715b6f21d1f5cabe7_prof);

        
        $__internal_fcd830567e986192fb7e1de54dcba9a9443104b1da799c4203f52c44cd7e7603->leave($__internal_fcd830567e986192fb7e1de54dcba9a9443104b1da799c4203f52c44cd7e7603_prof);

    }

    // line 24
    public function block_mainpage($context, array $blocks = array())
    {
        $__internal_21b9931e0368a042e9dcd297ac09d36fdbc4e474f0a68229542c87793338915a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b9931e0368a042e9dcd297ac09d36fdbc4e474f0a68229542c87793338915a->enter($__internal_21b9931e0368a042e9dcd297ac09d36fdbc4e474f0a68229542c87793338915a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainpage"));

        $__internal_5b018d1be5b4f20c932cdfacb682b7e98fd5ef15d0ceee70614f0643bd7bc99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b018d1be5b4f20c932cdfacb682b7e98fd5ef15d0ceee70614f0643bd7bc99f->enter($__internal_5b018d1be5b4f20c932cdfacb682b7e98fd5ef15d0ceee70614f0643bd7bc99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainpage"));

        // line 25
        echo "                <div class=\"prtm-page-bar\">
                    <ul class=\"breadcrumb\">
                        <li class=\"breadcrumb-item text-capitalize\">
                            <h3>Data tables</h3>
                        </li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Table</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"#\">Data table</a></li>
                    </ul>
                </div>
                <div class=\"data-table-style\">
                    <div class=\"prtm-block pos-relative\">
                        <div class=\"prtm-block-title mrgn-b-lg\">
                            <div class=\"caption\">
                                <h3 class=\"text-capitalize\">Rides by our community</h3>
                            </div>
                            <div class=\"contextual-link\">
                                <div class=\"dropdown display-ib\">
                                    <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
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
                            <div class=\"dataTables_wrapper\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover dataTable\" id=\"rides\" data-table=\"table-button\" data-buttons=\"['copy', 'csv', 'excel', 'pdf', 'print']\">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Departure</th>
                                            <th>Destination</th>
                                            <th>Date</th>
                                            <th>Driver</th>
                                            <th>Car</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajets"]) ? $context["trajets"] : $this->getContext($context, "trajets")));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 75
            echo "                                        <tr>
                                            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "datedepart", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["trajet"], "nom", array(), "array"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute($context["trajet"], "modele", array(), "array") . " | ") . $this->getAttribute($context["trajet"], "matricule", array(), "array")), "html", null, true);
            echo "</td>
                                            <td> <a href=\"https://www.google.com/maps/dir/";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-cog fa-lg fa-map-marker\" aria-hidden=\"true\"></i></a> <a href=\"#\" onclick=\"confirmDelete(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "id", array()), "html", null, true);
            echo ")\" class=\"mrgn-l-sm\"><i class=\"fa fa-times fa-lg text-danger\" aria-hidden=\"true\"></i></a> </td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trajet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"prtm-block\">
                    <div class=\"prtm-block-title mrgn-b-lg\">
                        <h3 class=\"text-capitalize\">Statistics</h3> </div>
                    <div class=\"prtm-block-content\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-6\">
                                <div class=\"prtm-block\">
                                    <div id=\"line-chart-1\" class=\"overflow-wrapper\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        
        $__internal_5b018d1be5b4f20c932cdfacb682b7e98fd5ef15d0ceee70614f0643bd7bc99f->leave($__internal_5b018d1be5b4f20c932cdfacb682b7e98fd5ef15d0ceee70614f0643bd7bc99f_prof);

        
        $__internal_21b9931e0368a042e9dcd297ac09d36fdbc4e474f0a68229542c87793338915a->leave($__internal_21b9931e0368a042e9dcd297ac09d36fdbc4e474f0a68229542c87793338915a_prof);

    }

    // line 107
    public function block_footer($context, array $blocks = array())
    {
        $__internal_59efe4c4cb60db8e1f42f124f383b39c291d59f8548098654fb4e3ae609039db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59efe4c4cb60db8e1f42f124f383b39c291d59f8548098654fb4e3ae609039db->enter($__internal_59efe4c4cb60db8e1f42f124f383b39c291d59f8548098654fb4e3ae609039db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a1801b410b2a33bd036cb4d18d3216d6b81c2f8e3c8b6035ab33c24b0a80c503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1801b410b2a33bd036cb4d18d3216d6b81c2f8e3c8b6035ab33c24b0a80c503->enter($__internal_a1801b410b2a33bd036cb4d18d3216d6b81c2f8e3c8b6035ab33c24b0a80c503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 108
        echo "                ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

                ";
        // line 110
        $context["counter"] = 0;
        // line 111
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statBooked"]) ? $context["statBooked"] : $this->getContext($context, "statBooked")));
        foreach ($context['_seq'] as $context["_key"] => $context["datx"]) {
            // line 112
            echo "                    ";
            $context["counter"] = $this->getAttribute($context["datx"], "totalRide", array(), "array");
            // line 113
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statShared"]) ? $context["statShared"] : $this->getContext($context, "statShared")));
        foreach ($context['_seq'] as $context["_key"] => $context["dat"]) {
            // line 115
            echo "                    <script>
                    var data15 = ";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["dat"], "total", array(), "array"), "html", null, true);
            echo " - 3 ;
                    var data16 = ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["dat"], "total", array(), "array"), "html", null, true);
            echo ";
                    var data17 = ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["dat"], "total", array(), "array"), "html", null, true);
            echo " - 3;
                    var data15Booked= ";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "-1;
                    var data16Booked = ";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo ";
                    var data17Booked = ";
            // line 121
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "+1;
                    var toData=new Array(new Array('Year','Rides shared','Rides booked'), new Array(16,data15,data15Booked), new Array(17,data16,data16Booked), new Array(18,data17,data17Booked));
                    google.charts.setOnLoadCallback(drawTheNewChart);
                    function drawTheNewChart() {
                        var data = google.visualization.arrayToDataTable(
                        toData);
                        var options = {
                            title: 'Company Performance',
                            subtitle: 'Sales and Expenses: 2015-2018',
                            curveType: 'function',
                            height: 400,
                            colors: ['#00ca95', '#f17316'],
                            legend: {position: 'bottom'},
                            backgroundColor: {fill: 'transparent'}
                        };
                        var chart = new google.visualization.LineChart(document.getElementById('line-chart-1'));
                        chart.draw(data, options);
                    }
                </script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            ";
        
        $__internal_a1801b410b2a33bd036cb4d18d3216d6b81c2f8e3c8b6035ab33c24b0a80c503->leave($__internal_a1801b410b2a33bd036cb4d18d3216d6b81c2f8e3c8b6035ab33c24b0a80c503_prof);

        
        $__internal_59efe4c4cb60db8e1f42f124f383b39c291d59f8548098654fb4e3ae609039db->leave($__internal_59efe4c4cb60db8e1f42f124f383b39c291d59f8548098654fb4e3ae609039db_prof);

    }

    public function getTemplateName()
    {
        return "@PidevGestionTrajets/BackOffice/trajets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 141,  343 => 121,  339 => 120,  335 => 119,  331 => 118,  327 => 117,  323 => 116,  320 => 115,  315 => 114,  309 => 113,  306 => 112,  301 => 111,  299 => 110,  293 => 108,  284 => 107,  254 => 85,  241 => 82,  237 => 81,  233 => 80,  229 => 79,  225 => 78,  221 => 77,  217 => 76,  214 => 75,  210 => 74,  159 => 25,  150 => 24,  137 => 15,  128 => 14,  95 => 142,  93 => 107,  90 => 106,  88 => 24,  85 => 23,  82 => 17,  80 => 14,  77 => 13,  68 => 12,  58 => 10,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends (\"@FOSUser/layoutbackoffice.html.twig\") %}

    {% block stylesheets %}
    {{ parent() }}
{#
    <link rel=\"stylesheet\" href=\"assets/plugins/datatables/css/datatables.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"assets/plugins/datatables/css/dataTables.bootstrap.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"assets/plugins/datatables/Buttons/css/buttons.dataTables.min.css\" type=\"text/css\">
#}
    {% endblock %}

{% block content %}

    {% block topbody %}
    {{ parent() }}
    {% endblock %}

{#
    {% block sidemenu %}
    {{ parent() }}
    {% endblock %}
#}

                {% block mainpage %}
                <div class=\"prtm-page-bar\">
                    <ul class=\"breadcrumb\">
                        <li class=\"breadcrumb-item text-capitalize\">
                            <h3>Data tables</h3>
                        </li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Table</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"#\">Data table</a></li>
                    </ul>
                </div>
                <div class=\"data-table-style\">
                    <div class=\"prtm-block pos-relative\">
                        <div class=\"prtm-block-title mrgn-b-lg\">
                            <div class=\"caption\">
                                <h3 class=\"text-capitalize\">Rides by our community</h3>
                            </div>
                            <div class=\"contextual-link\">
                                <div class=\"dropdown display-ib\">
                                    <a href=\"javascript:;\" class=\"mrgn-l-xs\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"><i class=\"fa fa-cog fa-lg base-dark\"></i></a>
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
                            <div class=\"dataTables_wrapper\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover dataTable\" id=\"rides\" data-table=\"table-button\" data-buttons=\"['copy', 'csv', 'excel', 'pdf', 'print']\">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Departure</th>
                                            <th>Destination</th>
                                            <th>Date</th>
                                            <th>Driver</th>
                                            <th>Car</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for trajet in trajets %}
                                        <tr>
                                            <td>{{ trajet[0].id }}</td>
                                            <td>{{ trajet[0].depart }}</td>
                                            <td>{{ trajet[0].destination }}</td>
                                            <td>{{ trajet[0].datedepart|date('d-m-Y') }}</td>
                                            <td>{{ trajet['nom'] }}</td>
                                            <td>{{ trajet['modele'] ~ ' | ' ~ trajet['matricule'] }}</td>
                                            <td> <a href=\"https://www.google.com/maps/dir/{{ trajet[0].depart }}/{{ trajet[0].destination }}\" target=\"_blank\"><i class=\"fa fa-cog fa-lg fa-map-marker\" aria-hidden=\"true\"></i></a> <a href=\"#\" onclick=\"confirmDelete({{ trajet[0].id }})\" class=\"mrgn-l-sm\"><i class=\"fa fa-times fa-lg text-danger\" aria-hidden=\"true\"></i></a> </td>
                                        </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"prtm-block\">
                    <div class=\"prtm-block-title mrgn-b-lg\">
                        <h3 class=\"text-capitalize\">Statistics</h3> </div>
                    <div class=\"prtm-block-content\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-6\">
                                <div class=\"prtm-block\">
                                    <div id=\"line-chart-1\" class=\"overflow-wrapper\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endblock mainpage %}

            {% block footer %}
                {{ parent() }}

                {% set counter=0 %}
                {% for datx in statBooked %}
                    {% set counter=datx['totalRide'] %}
                {% endfor %}
                {% for dat in statShared %}
                    <script>
                    var data15 = {{ dat['total'] }} - 3 ;
                    var data16 = {{ dat['total'] }};
                    var data17 = {{ dat['total'] }} - 3;
                    var data15Booked= {{ counter }}-1;
                    var data16Booked = {{ counter }};
                    var data17Booked = {{ counter }}+1;
                    var toData=new Array(new Array('Year','Rides shared','Rides booked'), new Array(16,data15,data15Booked), new Array(17,data16,data16Booked), new Array(18,data17,data17Booked));
                    google.charts.setOnLoadCallback(drawTheNewChart);
                    function drawTheNewChart() {
                        var data = google.visualization.arrayToDataTable(
                        toData);
                        var options = {
                            title: 'Company Performance',
                            subtitle: 'Sales and Expenses: 2015-2018',
                            curveType: 'function',
                            height: 400,
                            colors: ['#00ca95', '#f17316'],
                            legend: {position: 'bottom'},
                            backgroundColor: {fill: 'transparent'}
                        };
                        var chart = new google.visualization.LineChart(document.getElementById('line-chart-1'));
                        chart.draw(data, options);
                    }
                </script>
                {% endfor %}
            {% endblock %}

    <script>
     function confirmDelete(id)
     {
         if (confirm(\"Are you sure you wanna delete this ride?\"))
             deleteRide(id);
     }

     function deleteRide(id) {
         \$.ajax({
             url: Routing.generate('deleteTrajet'),
             data: 'idTrajet='+id,
             type: 'POST',
             success: function (data) {
                 alert('You have successfully deleted this ride from the database.');

             },
             error: function (data) {
                 alert('Something went wrong!');
             }
         });
     }
    </script>
{% endblock %}", "@PidevGestionTrajets/BackOffice/trajets.html.twig", "/var/www/html/PIDEVS/src/Pidev/GestionTrajetsBundle/Resources/views/BackOffice/trajets.html.twig");
    }
}
