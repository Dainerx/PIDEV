<?php

/* @PidevGestionTrajets/GestionTrajets/shareride.html.twig */
class __TwigTemplate_66437857d8999f34b7e0d3840774a10c0e15eb08a5209d89b57190904d668bb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PidevGestionTrajets/GestionTrajets/shareride.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'topbody' => array($this, 'block_topbody'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d3aea177f1c4e619ba1b915198a6fc93de98d100b06dfdbbff7e2c7ec2dc904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3aea177f1c4e619ba1b915198a6fc93de98d100b06dfdbbff7e2c7ec2dc904->enter($__internal_3d3aea177f1c4e619ba1b915198a6fc93de98d100b06dfdbbff7e2c7ec2dc904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/shareride.html.twig"));

        $__internal_7fb2983ebbf7c74f20948e3293c67b1e32284bfe2fe3dabfdd840a40115ec793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb2983ebbf7c74f20948e3293c67b1e32284bfe2fe3dabfdd840a40115ec793->enter($__internal_7fb2983ebbf7c74f20948e3293c67b1e32284bfe2fe3dabfdd840a40115ec793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/shareride.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3aea177f1c4e619ba1b915198a6fc93de98d100b06dfdbbff7e2c7ec2dc904->leave($__internal_3d3aea177f1c4e619ba1b915198a6fc93de98d100b06dfdbbff7e2c7ec2dc904_prof);

        
        $__internal_7fb2983ebbf7c74f20948e3293c67b1e32284bfe2fe3dabfdd840a40115ec793->leave($__internal_7fb2983ebbf7c74f20948e3293c67b1e32284bfe2fe3dabfdd840a40115ec793_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b775d099a8cdafdbad6e27568151bde7e03c7ceaef05c3522bbb7a26da7067c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b775d099a8cdafdbad6e27568151bde7e03c7ceaef05c3522bbb7a26da7067c->enter($__internal_9b775d099a8cdafdbad6e27568151bde7e03c7ceaef05c3522bbb7a26da7067c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a838525e8d4ce27d2218f6b0ad9f855eecb62739298dad9305499d655adca5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a838525e8d4ce27d2218f6b0ad9f855eecb62739298dad9305499d655adca5a->enter($__internal_6a838525e8d4ce27d2218f6b0ad9f855eecb62739298dad9305499d655adca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_6a838525e8d4ce27d2218f6b0ad9f855eecb62739298dad9305499d655adca5a->leave($__internal_6a838525e8d4ce27d2218f6b0ad9f855eecb62739298dad9305499d655adca5a_prof);

        
        $__internal_9b775d099a8cdafdbad6e27568151bde7e03c7ceaef05c3522bbb7a26da7067c->leave($__internal_9b775d099a8cdafdbad6e27568151bde7e03c7ceaef05c3522bbb7a26da7067c_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2584e9b51708f20308f5280e400ee272aaa8cdb98a59e46523d922bfc7a92a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2584e9b51708f20308f5280e400ee272aaa8cdb98a59e46523d922bfc7a92a6->enter($__internal_f2584e9b51708f20308f5280e400ee272aaa8cdb98a59e46523d922bfc7a92a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6669d9d53403cab5ec7fb77550d280918bcb194d744ae38d9a23201552d5f68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6669d9d53403cab5ec7fb77550d280918bcb194d744ae38d9a23201552d5f68e->enter($__internal_6669d9d53403cab5ec7fb77550d280918bcb194d744ae38d9a23201552d5f68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "        ";
        $this->displayBlock('topbody', $context, $blocks);
        // line 10
        echo "

        <!-- Content
        ================================================== -->
        <div class=\"container\">
            <form method=\"POST\">
            <div class=\"row\">

                <!-- Submit Page -->
                <div class=\"col-md-12\">
                    <div class=\"submit-page\">


                        <!-- Section -->
                        <h3>Ride</h3>
                        <div class=\"submit-section\">


                            <!-- Row -->
                            <div class=\"row with-forms\">

                                <!-- Status -->
                                <div class=\"col-md-6\">
                                    <h5>State (Departure)</h5>
                                    <select onchange=\"updateCitiesFrom()\" id=\"from\" name=\"from\" class=\"chosen-select-no-single\" required>
                                        <option label=\"blank\">
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 37
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "state", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                    </select>
                                </div>

                                <!-- Type -->
                                <div class=\"col-md-6\">
                                    <h5>State (Destination)</h5>
                                    <select onchange=\"updateCitiesTo()\" id=\"to\" name=\"to\" class=\"chosen-select-no-single\" required>
                                        <option label=\"blank\">
                                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 48
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "state", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                    </select>
                                </div>

                            </div>
                            <!-- Row / End -->
                            <div class=\"row with-forms\">

                                <!-- Status -->
                                <div class=\"col-md-6\">
                                    <h5>City (Departure)</h5>
                                    <select class=\"chosen-select-no-single\" name=\"fromC\" id=\"fromC\" required>
                                        <option label=\"blank\"></option>
                                    </select>
                                </div>

                                <!-- Type -->
                                <div class=\"col-md-6\">
                                    <h5>City (Destination)</h5>
                                    <select class=\"chosen-select-no-single\" name=\"toC\" id=\"toC\" required>
                                        <option label=\"blank\"></option>
                                        
                                        <option value=\"aze\">aze</option>
                                    </select>
                                </div>

                            </div>
                            <!-- Row -->
                            <div class=\"row with-forms\">

                                <!-- Rooms -->
                                <div class=\"col-md-4\">


                                </div>

                            </div>
                            <!-- Row / End -->

                        </div>
                        <!-- Section / End -->


                        <!-- Section -->
                        <h3>Map</h3>
                            <div id=\"map-container\" class=\"homepage-map margin-bottom-0\">

                                <div id=\"map\">
                                    <!-- map goes here -->
                                </div>
                                <script>
                                    function initMap() {
                                        var directionsDisplay = new google.maps.DirectionsRenderer;
                                        var directionsService = new google.maps.DirectionsService;
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 10,
                                            center: {lat: 36.8188, lng: 10.166}
                                        });
                                        directionsDisplay.setMap(map);

                                        var control = document.getElementById('toC');

                                        var onChangeHandler = function() {
                                            calculateAndDisplayRoute(directionsService, directionsDisplay);
                                        };
                                        //document.getElementById('fromC').addEventListener('change', onChangeHandler);
                                        document.getElementById('toC').addEventListener('change', onChangeHandler);
                                    }

                                    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                                        var start = document.getElementById('fromC').value;
                                        var end = document.getElementById('toC').value;
                                        directionsService.route({
                                            origin: start,
                                            destination: end,
                                            travelMode: 'DRIVING'
                                        }, function(response, status) {
                                            if (status === 'OK') {
                                                directionsDisplay.setDirections(response);
                                            } else {
                                                window.alert('Directions request failed due to ' + status);
                                            }
                                        });
                                    }
                                </script>
                                <script async defer
                                        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBKXNneTVr8yaKCVD_sCEFj9CNCtcU85V8&callback=initMap\">
                                </script>
                                <!-- Map Navigation -->
                                <a href=\"#\" id=\"scrollEnabling\" title=\"Enable or disable scrolling on map\">Enable Scrolling</a>
                                <ul id=\"mapnav-buttons\">
                                    <li><a href=\"#\" id=\"prevpoint\" title=\"Previous point on map\">Prev</a></li>
                                    <li><a href=\"#\" id=\"nextpoint\" title=\"Next point on mp\">Next</a></li>
                                </ul>
                            </div>
                        <!-- Section / End -->


                        <!-- Section -->
                        <h3>Vehicule</h3>
                        <div class=\"submit-section\">

                            <!-- Row -->
                            <div class=\"row with-forms\">
                                <h5>Vehicules you previosuly used</h5>
                                    <select id=\"vehicule\" onchange=\"fillVehicule()\">
                                        <option value=\"\">Select a Vehicule</option>
                                        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) ? $context["vehicules"] : $this->getContext($context, "vehicules")));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 157
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehicule"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["vehicule"], "modele", array()) . " | ") . $this->getAttribute($context["vehicule"], "matricule", array())), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                                    </select>

                                <!-- Address -->
                                <div class=\"col-md-6\">
                                    <h5>Company</h5>
                                    <input type=\"text\" name=\"company\" id=\"company\" required>
                                </div>

                                <!-- City -->
                                <div class=\"col-md-6\">
                                    <h5>Serial</h5>
                                    <input type=\"text\" name=\"serial\" id=\"serial\" required>
                                </div>

                                <!-- City -->
                                <div class=\"col-md-6\">
                                    <h5>Brand</h5>
                                    <input type=\"text\" name=\"brand\" id=\"brand\" required>
                                </div>

                                <!-- Zip-Code -->
                                <div class=\"col-md-6\">
                                    <h5>Type</h5>
                                    <select name=\"gamme\" id=\"gamme\">
                                        <option>Economical</option>
                                        <option>Medium</option>
                                        <option>Luxurious</option>
                                    </select>
                                </div>

                            </div>
                            <!-- Row / End -->

                        </div>
                        <!-- Section / End -->


                        <!-- Section -->
                        <h3>Detailed Information</h3>
                        <div class=\"submit-section\">

                            <!-- Description -->
                            <div class=\"form\">
                                <h5>Description</h5>
                                <textarea class=\"WYSIWYG\" name=\"details\" cols=\"40\" rows=\"3\" id=\"summary\" spellcheck=\"true\"></textarea>
                            </div>

                            <!-- Row -->
                            <div class=\"row with-forms\">

                                <div class=\"col-md-4\">
                                    <h5>Date of departure</h5>
                                    <input type=\"date\"  name=\"date_departure\" required />
                                </div>

                                <div class=\"col-md-4\">
                                    <h5>Seats</h5>
                                    <input type=\"number\" name=\"seats\" required />
                                </div>

                                <!-- Beds -->
                                <div class=\"col-md-4\">
                                    <h5>Cost</h5>
                                    <input type=\"number\" name=\"price\" data-unit=\"Person\" required/>
                                <!-- cost go here -->
                                </div>

                            </div>
                            <!-- Row / End -->


                            <!-- Checkboxes -->
                            <h5 class=\"margin-top-30\">Other Features <span>(optional)</span></h5>
                            <div class=\"checkboxes in-row margin-bottom-20\">

                                <input id=\"check-2\" type=\"checkbox\" name=\"security\">
                                <label for=\"check-2\">Security enhancement</label>
                            </div>
                            <!-- Checkboxes / End -->
                        </div>
                        <!-- Section / End -->

                        <div class=\"divider\"></div>
                        <button type=\"submit\" class=\"button preview margin-top-5\">Share this ride <i class=\"fa fa-car\"></i></button>
";
        // line 246
        echo "
                    </div>
                </div>

            </div>
            </form>
        </div>


\t";
        // line 255
        $this->displayBlock('footer', $context, $blocks);
        // line 356
        echo "
";
        
        $__internal_6669d9d53403cab5ec7fb77550d280918bcb194d744ae38d9a23201552d5f68e->leave($__internal_6669d9d53403cab5ec7fb77550d280918bcb194d744ae38d9a23201552d5f68e_prof);

        
        $__internal_f2584e9b51708f20308f5280e400ee272aaa8cdb98a59e46523d922bfc7a92a6->leave($__internal_f2584e9b51708f20308f5280e400ee272aaa8cdb98a59e46523d922bfc7a92a6_prof);

    }

    // line 7
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_e0d6a4c21d186d37036fb9e424e198d2af938e6c1ec4e07a4e3bc55b2c9f3afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d6a4c21d186d37036fb9e424e198d2af938e6c1ec4e07a4e3bc55b2c9f3afe->enter($__internal_e0d6a4c21d186d37036fb9e424e198d2af938e6c1ec4e07a4e3bc55b2c9f3afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_a2c8831a925bb98be14b0b3ad77466df4ebdcfe4bdba9f5c43c233c219d245b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c8831a925bb98be14b0b3ad77466df4ebdcfe4bdba9f5c43c233c219d245b6->enter($__internal_a2c8831a925bb98be14b0b3ad77466df4ebdcfe4bdba9f5c43c233c219d245b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 8
        echo "            ";
        $this->displayParentBlock("topbody", $context, $blocks);
        echo "
        ";
        
        $__internal_a2c8831a925bb98be14b0b3ad77466df4ebdcfe4bdba9f5c43c233c219d245b6->leave($__internal_a2c8831a925bb98be14b0b3ad77466df4ebdcfe4bdba9f5c43c233c219d245b6_prof);

        
        $__internal_e0d6a4c21d186d37036fb9e424e198d2af938e6c1ec4e07a4e3bc55b2c9f3afe->leave($__internal_e0d6a4c21d186d37036fb9e424e198d2af938e6c1ec4e07a4e3bc55b2c9f3afe_prof);

    }

    // line 255
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f4ba0043737c9aa7ce83897fae6d9cea8110b802df0b5baec9c88d9cdaa47d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ba0043737c9aa7ce83897fae6d9cea8110b802df0b5baec9c88d9cdaa47d7d->enter($__internal_f4ba0043737c9aa7ce83897fae6d9cea8110b802df0b5baec9c88d9cdaa47d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_80470f60761ac376f42d845e7fb822ebf0d178141798024843f698742cd5e9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80470f60761ac376f42d845e7fb822ebf0d178141798024843f698742cd5e9ff->enter($__internal_80470f60761ac376f42d845e7fb822ebf0d178141798024843f698742cd5e9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 256
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <!-- Scripts
================================================== -->
\t<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

        <script>
            \$(document).ready(function() {
                    \$(\"#fromC\").prop('disabled',true);
                    \$(\"#toC\").prop('disabled',true);
            });
            function updateCitiesFrom() {
                jQuery.ajax({
                    url: Routing.generate('updateCities'),
                    data: 'state=' + \$(\"#from\").val(),
                    type: 'POST',
                    success: function (data) {
                        \$(\"#fromC\").prop('disabled',false);
                        var select = document.getElementById('fromC');
                        var length = select.options.length;
                        var j;

                        for (j = 0; j < length; j++) {
                            select.remove(select.j);
                        }

                        var _len = data.length;
                        var i, post;
                        for (i = 0; i < _len; i++) {
                            console.log(data[i]);
                            post = data[i];
                            var option = document.createElement('option');
                            option.text = option.value = post.city;
                            select.appendChild(option);
                        }
                    },
                    error: function () {
                    }
                });
            }

            function updateCitiesTo() {
                jQuery.ajax({
                    url: Routing.generate('updateCities'),
                    data: 'state=' + \$(\"#to\").val(),
                    type: 'POST',
                    success: function (data) {
                        \$(\"#toC\").prop('disabled',false);
                        var select = document.getElementById('toC');
                        var length = select.options.length;
                        var j;

                        for (j = 0; j < length; j++) {
                            select.remove(select.j);
                        }

                        var _len = data.length;
                        var i, post;
                        for (i = 0; i < _len; i++) {
                            post = data[i];
                            var option = document.createElement('option');
                            option.text = option.value = post.city;
                            select.appendChild(option);
                        }
                    },
                    error: function () {
                    }
                });
            }
            
            function fillVehicule() {
                jQuery.ajax({
                    url: Routing.generate('fillCar'),
                    data: 'vehicule=' + \$(\"#vehicule\").val(),
                    type: 'POST',
                    success: function (data) {
                        _leng = data.length;
                        for (var i=0; i<_leng; i++)
                        {
                            \$(\"#company\").val(data[i].marque);
                            \$(\"#brand\").val(data[i].modele);
                            \$(\"#serial\").val(data[i].matricule);
                            if (data[i].gamme==\"Economical\")
                                document.getElementById(\"gamme\").selectedIndex=0
                            else if (data[i].gamme=\"Medium\")
                                document.getElementById(\"gamme\").selectedIndex=1
                            else
                                document.getElementById(\"gamme\").selectedIndex=2
                        }
                    },
                    error: function (data) {
                        alert('error');
                    }
                });
            }

        </script>

    ";
        
        $__internal_80470f60761ac376f42d845e7fb822ebf0d178141798024843f698742cd5e9ff->leave($__internal_80470f60761ac376f42d845e7fb822ebf0d178141798024843f698742cd5e9ff_prof);

        
        $__internal_f4ba0043737c9aa7ce83897fae6d9cea8110b802df0b5baec9c88d9cdaa47d7d->leave($__internal_f4ba0043737c9aa7ce83897fae6d9cea8110b802df0b5baec9c88d9cdaa47d7d_prof);

    }

    public function getTemplateName()
    {
        return "@PidevGestionTrajets/GestionTrajets/shareride.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 261,  420 => 260,  416 => 259,  409 => 256,  400 => 255,  387 => 8,  378 => 7,  367 => 356,  365 => 255,  354 => 246,  268 => 159,  257 => 157,  253 => 156,  145 => 50,  134 => 48,  130 => 47,  120 => 39,  109 => 37,  105 => 36,  77 => 10,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends (\"@FOSUser/layout.html.twig\") %}
    {% block stylesheets %}
\t\t{{ parent() }}
    {% endblock %}

    {% block content %}
        {% block topbody %}
            {{ parent() }}
        {% endblock %}


        <!-- Content
        ================================================== -->
        <div class=\"container\">
            <form method=\"POST\">
            <div class=\"row\">

                <!-- Submit Page -->
                <div class=\"col-md-12\">
                    <div class=\"submit-page\">


                        <!-- Section -->
                        <h3>Ride</h3>
                        <div class=\"submit-section\">


                            <!-- Row -->
                            <div class=\"row with-forms\">

                                <!-- Status -->
                                <div class=\"col-md-6\">
                                    <h5>State (Departure)</h5>
                                    <select onchange=\"updateCitiesFrom()\" id=\"from\" name=\"from\" class=\"chosen-select-no-single\" required>
                                        <option label=\"blank\">
                                        {% for state in states %}
                                        <option value=\"{{ state.id }}\">{{ state.state }}</option>
                                        {% endfor %}
                                    </select>
                                </div>

                                <!-- Type -->
                                <div class=\"col-md-6\">
                                    <h5>State (Destination)</h5>
                                    <select onchange=\"updateCitiesTo()\" id=\"to\" name=\"to\" class=\"chosen-select-no-single\" required>
                                        <option label=\"blank\">
                                            {% for state in states %}
                                        <option value=\"{{ state.id }}\">{{ state.state }}</option>
                                        {% endfor %}
                                    </select>
                                </div>

                            </div>
                            <!-- Row / End -->
                            <div class=\"row with-forms\">

                                <!-- Status -->
                                <div class=\"col-md-6\">
                                    <h5>City (Departure)</h5>
                                    <select class=\"chosen-select-no-single\" name=\"fromC\" id=\"fromC\" required>
                                        <option label=\"blank\"></option>
                                    </select>
                                </div>

                                <!-- Type -->
                                <div class=\"col-md-6\">
                                    <h5>City (Destination)</h5>
                                    <select class=\"chosen-select-no-single\" name=\"toC\" id=\"toC\" required>
                                        <option label=\"blank\"></option>
                                        
                                        <option value=\"aze\">aze</option>
                                    </select>
                                </div>

                            </div>
                            <!-- Row -->
                            <div class=\"row with-forms\">

                                <!-- Rooms -->
                                <div class=\"col-md-4\">


                                </div>

                            </div>
                            <!-- Row / End -->

                        </div>
                        <!-- Section / End -->


                        <!-- Section -->
                        <h3>Map</h3>
                            <div id=\"map-container\" class=\"homepage-map margin-bottom-0\">

                                <div id=\"map\">
                                    <!-- map goes here -->
                                </div>
                                <script>
                                    function initMap() {
                                        var directionsDisplay = new google.maps.DirectionsRenderer;
                                        var directionsService = new google.maps.DirectionsService;
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 10,
                                            center: {lat: 36.8188, lng: 10.166}
                                        });
                                        directionsDisplay.setMap(map);

                                        var control = document.getElementById('toC');

                                        var onChangeHandler = function() {
                                            calculateAndDisplayRoute(directionsService, directionsDisplay);
                                        };
                                        //document.getElementById('fromC').addEventListener('change', onChangeHandler);
                                        document.getElementById('toC').addEventListener('change', onChangeHandler);
                                    }

                                    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                                        var start = document.getElementById('fromC').value;
                                        var end = document.getElementById('toC').value;
                                        directionsService.route({
                                            origin: start,
                                            destination: end,
                                            travelMode: 'DRIVING'
                                        }, function(response, status) {
                                            if (status === 'OK') {
                                                directionsDisplay.setDirections(response);
                                            } else {
                                                window.alert('Directions request failed due to ' + status);
                                            }
                                        });
                                    }
                                </script>
                                <script async defer
                                        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBKXNneTVr8yaKCVD_sCEFj9CNCtcU85V8&callback=initMap\">
                                </script>
                                <!-- Map Navigation -->
                                <a href=\"#\" id=\"scrollEnabling\" title=\"Enable or disable scrolling on map\">Enable Scrolling</a>
                                <ul id=\"mapnav-buttons\">
                                    <li><a href=\"#\" id=\"prevpoint\" title=\"Previous point on map\">Prev</a></li>
                                    <li><a href=\"#\" id=\"nextpoint\" title=\"Next point on mp\">Next</a></li>
                                </ul>
                            </div>
                        <!-- Section / End -->


                        <!-- Section -->
                        <h3>Vehicule</h3>
                        <div class=\"submit-section\">

                            <!-- Row -->
                            <div class=\"row with-forms\">
                                <h5>Vehicules you previosuly used</h5>
                                    <select id=\"vehicule\" onchange=\"fillVehicule()\">
                                        <option value=\"\">Select a Vehicule</option>
                                        {% for vehicule in vehicules %}
                                            <option value=\"{{ vehicule.id }}\">{{ vehicule.modele ~ ' | ' ~ vehicule.matricule }}</option>
                                        {% endfor %}
                                    </select>

                                <!-- Address -->
                                <div class=\"col-md-6\">
                                    <h5>Company</h5>
                                    <input type=\"text\" name=\"company\" id=\"company\" required>
                                </div>

                                <!-- City -->
                                <div class=\"col-md-6\">
                                    <h5>Serial</h5>
                                    <input type=\"text\" name=\"serial\" id=\"serial\" required>
                                </div>

                                <!-- City -->
                                <div class=\"col-md-6\">
                                    <h5>Brand</h5>
                                    <input type=\"text\" name=\"brand\" id=\"brand\" required>
                                </div>

                                <!-- Zip-Code -->
                                <div class=\"col-md-6\">
                                    <h5>Type</h5>
                                    <select name=\"gamme\" id=\"gamme\">
                                        <option>Economical</option>
                                        <option>Medium</option>
                                        <option>Luxurious</option>
                                    </select>
                                </div>

                            </div>
                            <!-- Row / End -->

                        </div>
                        <!-- Section / End -->


                        <!-- Section -->
                        <h3>Detailed Information</h3>
                        <div class=\"submit-section\">

                            <!-- Description -->
                            <div class=\"form\">
                                <h5>Description</h5>
                                <textarea class=\"WYSIWYG\" name=\"details\" cols=\"40\" rows=\"3\" id=\"summary\" spellcheck=\"true\"></textarea>
                            </div>

                            <!-- Row -->
                            <div class=\"row with-forms\">

                                <div class=\"col-md-4\">
                                    <h5>Date of departure</h5>
                                    <input type=\"date\"  name=\"date_departure\" required />
                                </div>

                                <div class=\"col-md-4\">
                                    <h5>Seats</h5>
                                    <input type=\"number\" name=\"seats\" required />
                                </div>

                                <!-- Beds -->
                                <div class=\"col-md-4\">
                                    <h5>Cost</h5>
                                    <input type=\"number\" name=\"price\" data-unit=\"Person\" required/>
                                <!-- cost go here -->
                                </div>

                            </div>
                            <!-- Row / End -->


                            <!-- Checkboxes -->
                            <h5 class=\"margin-top-30\">Other Features <span>(optional)</span></h5>
                            <div class=\"checkboxes in-row margin-bottom-20\">

                                <input id=\"check-2\" type=\"checkbox\" name=\"security\">
                                <label for=\"check-2\">Security enhancement</label>
                            </div>
                            <!-- Checkboxes / End -->
                        </div>
                        <!-- Section / End -->

                        <div class=\"divider\"></div>
                        <button type=\"submit\" class=\"button preview margin-top-5\">Share this ride <i class=\"fa fa-car\"></i></button>
{#
                        <a href=\"#\" class=\"button preview margin-top-5\">Share ride! <i class=\"fa fa-arrow-circle-right\"></i></a>
#}

                    </div>
                </div>

            </div>
            </form>
        </div>


\t{% block footer %}
\t{{ parent() }}
    <!-- Scripts
================================================== -->
\t<script src=\"{{ asset('bundles/views/scripts/jquery-2.2.0.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>

        <script>
            \$(document).ready(function() {
                    \$(\"#fromC\").prop('disabled',true);
                    \$(\"#toC\").prop('disabled',true);
            });
            function updateCitiesFrom() {
                jQuery.ajax({
                    url: Routing.generate('updateCities'),
                    data: 'state=' + \$(\"#from\").val(),
                    type: 'POST',
                    success: function (data) {
                        \$(\"#fromC\").prop('disabled',false);
                        var select = document.getElementById('fromC');
                        var length = select.options.length;
                        var j;

                        for (j = 0; j < length; j++) {
                            select.remove(select.j);
                        }

                        var _len = data.length;
                        var i, post;
                        for (i = 0; i < _len; i++) {
                            console.log(data[i]);
                            post = data[i];
                            var option = document.createElement('option');
                            option.text = option.value = post.city;
                            select.appendChild(option);
                        }
                    },
                    error: function () {
                    }
                });
            }

            function updateCitiesTo() {
                jQuery.ajax({
                    url: Routing.generate('updateCities'),
                    data: 'state=' + \$(\"#to\").val(),
                    type: 'POST',
                    success: function (data) {
                        \$(\"#toC\").prop('disabled',false);
                        var select = document.getElementById('toC');
                        var length = select.options.length;
                        var j;

                        for (j = 0; j < length; j++) {
                            select.remove(select.j);
                        }

                        var _len = data.length;
                        var i, post;
                        for (i = 0; i < _len; i++) {
                            post = data[i];
                            var option = document.createElement('option');
                            option.text = option.value = post.city;
                            select.appendChild(option);
                        }
                    },
                    error: function () {
                    }
                });
            }
            
            function fillVehicule() {
                jQuery.ajax({
                    url: Routing.generate('fillCar'),
                    data: 'vehicule=' + \$(\"#vehicule\").val(),
                    type: 'POST',
                    success: function (data) {
                        _leng = data.length;
                        for (var i=0; i<_leng; i++)
                        {
                            \$(\"#company\").val(data[i].marque);
                            \$(\"#brand\").val(data[i].modele);
                            \$(\"#serial\").val(data[i].matricule);
                            if (data[i].gamme==\"Economical\")
                                document.getElementById(\"gamme\").selectedIndex=0
                            else if (data[i].gamme=\"Medium\")
                                document.getElementById(\"gamme\").selectedIndex=1
                            else
                                document.getElementById(\"gamme\").selectedIndex=2
                        }
                    },
                    error: function (data) {
                        alert('error');
                    }
                });
            }

        </script>

    {% endblock %}

{% endblock %}", "@PidevGestionTrajets/GestionTrajets/shareride.html.twig", "/var/www/html/PIDEVS/src/Pidev/GestionTrajetsBundle/Resources/views/GestionTrajets/shareride.html.twig");
    }
}
