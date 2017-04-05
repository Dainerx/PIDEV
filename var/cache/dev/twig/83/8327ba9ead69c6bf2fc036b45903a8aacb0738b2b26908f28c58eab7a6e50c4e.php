<?php

/* @PidevGestionTrajets/GestionTrajets/shareride.html.twig */
class __TwigTemplate_ba9988b6f3e396ab7e4e915327da73cd0cf9bf22a14457070eaf11234529a574 extends Twig_Template
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
        $__internal_714c4ca9b2965d38635d4f3938147c3855d29e7cb79dd3e8b47f7b89d3126e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714c4ca9b2965d38635d4f3938147c3855d29e7cb79dd3e8b47f7b89d3126e51->enter($__internal_714c4ca9b2965d38635d4f3938147c3855d29e7cb79dd3e8b47f7b89d3126e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/shareride.html.twig"));

        $__internal_2397c54ed918c8a62c590aa27ff845652fa92ac9db684137cd9b4ee16055493c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2397c54ed918c8a62c590aa27ff845652fa92ac9db684137cd9b4ee16055493c->enter($__internal_2397c54ed918c8a62c590aa27ff845652fa92ac9db684137cd9b4ee16055493c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/shareride.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_714c4ca9b2965d38635d4f3938147c3855d29e7cb79dd3e8b47f7b89d3126e51->leave($__internal_714c4ca9b2965d38635d4f3938147c3855d29e7cb79dd3e8b47f7b89d3126e51_prof);

        
        $__internal_2397c54ed918c8a62c590aa27ff845652fa92ac9db684137cd9b4ee16055493c->leave($__internal_2397c54ed918c8a62c590aa27ff845652fa92ac9db684137cd9b4ee16055493c_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da1d4cad35a103e2063a4cc574c02a139ca8330af60c423ba7db095bd90f19de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1d4cad35a103e2063a4cc574c02a139ca8330af60c423ba7db095bd90f19de->enter($__internal_da1d4cad35a103e2063a4cc574c02a139ca8330af60c423ba7db095bd90f19de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c1dbbe663dd48211ff3b47c7698694e8c8530c03354c8f520046b0dafdaca21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1dbbe663dd48211ff3b47c7698694e8c8530c03354c8f520046b0dafdaca21e->enter($__internal_c1dbbe663dd48211ff3b47c7698694e8c8530c03354c8f520046b0dafdaca21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_c1dbbe663dd48211ff3b47c7698694e8c8530c03354c8f520046b0dafdaca21e->leave($__internal_c1dbbe663dd48211ff3b47c7698694e8c8530c03354c8f520046b0dafdaca21e_prof);

        
        $__internal_da1d4cad35a103e2063a4cc574c02a139ca8330af60c423ba7db095bd90f19de->leave($__internal_da1d4cad35a103e2063a4cc574c02a139ca8330af60c423ba7db095bd90f19de_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_c2e2f3efb2d85e0023557dee6e2f9b24b391a27160f2d6c4b3ad08a36e360942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e2f3efb2d85e0023557dee6e2f9b24b391a27160f2d6c4b3ad08a36e360942->enter($__internal_c2e2f3efb2d85e0023557dee6e2f9b24b391a27160f2d6c4b3ad08a36e360942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7caefb0fced174e81babb732d6fd847635397647447185fd82a86d1ed19e90bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7caefb0fced174e81babb732d6fd847635397647447185fd82a86d1ed19e90bc->enter($__internal_7caefb0fced174e81babb732d6fd847635397647447185fd82a86d1ed19e90bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                        document.getElementById('fromC').addEventListener('change', onChangeHandler);
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
";
        // line 165
        echo "                                <!-- Map Navigation -->
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

                                <!-- Address -->
                                <div class=\"col-md-6\">
                                    <h5>Company</h5>
                                    <input type=\"text\" name=\"company\" required>
                                </div>

                                <!-- City -->
                                <div class=\"col-md-6\">
                                    <h5>Serial</h5>
                                    <input type=\"text\" name=\"serial\" required>
                                </div>

                                <!-- City -->
                                <div class=\"col-md-6\">
                                    <h5>Brand</h5>
                                    <input type=\"text\" name=\"brand\" required>
                                </div>

                                <!-- Zip-Code -->
                                <div class=\"col-md-6\">
                                    <h5>Type</h5>
                                    <select name=\"gamme\">
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
        // line 267
        echo "
                    </div>
                </div>

            </div>
            </form>
        </div>


\t";
        // line 276
        $this->displayBlock('footer', $context, $blocks);
        // line 356
        echo "
";
        
        $__internal_7caefb0fced174e81babb732d6fd847635397647447185fd82a86d1ed19e90bc->leave($__internal_7caefb0fced174e81babb732d6fd847635397647447185fd82a86d1ed19e90bc_prof);

        
        $__internal_c2e2f3efb2d85e0023557dee6e2f9b24b391a27160f2d6c4b3ad08a36e360942->leave($__internal_c2e2f3efb2d85e0023557dee6e2f9b24b391a27160f2d6c4b3ad08a36e360942_prof);

    }

    // line 7
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_21e8f8336dbb6374308408ddca4045db4e173b693e93517c22ec935e52685fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e8f8336dbb6374308408ddca4045db4e173b693e93517c22ec935e52685fec->enter($__internal_21e8f8336dbb6374308408ddca4045db4e173b693e93517c22ec935e52685fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_5e59501d91b633b98df7f71077e79becd77269ab81040dceb35a0684c27c3db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e59501d91b633b98df7f71077e79becd77269ab81040dceb35a0684c27c3db9->enter($__internal_5e59501d91b633b98df7f71077e79becd77269ab81040dceb35a0684c27c3db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 8
        echo "            ";
        $this->displayParentBlock("topbody", $context, $blocks);
        echo "
        ";
        
        $__internal_5e59501d91b633b98df7f71077e79becd77269ab81040dceb35a0684c27c3db9->leave($__internal_5e59501d91b633b98df7f71077e79becd77269ab81040dceb35a0684c27c3db9_prof);

        
        $__internal_21e8f8336dbb6374308408ddca4045db4e173b693e93517c22ec935e52685fec->leave($__internal_21e8f8336dbb6374308408ddca4045db4e173b693e93517c22ec935e52685fec_prof);

    }

    // line 276
    public function block_footer($context, array $blocks = array())
    {
        $__internal_15f1220b242229939f33059595d207e876b354d989616ab9f270831212fc4cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f1220b242229939f33059595d207e876b354d989616ab9f270831212fc4cdb->enter($__internal_15f1220b242229939f33059595d207e876b354d989616ab9f270831212fc4cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_bd068e578c8f2440eba1f40d675a4761df7919eb98be9b3e41cbe02f362db5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd068e578c8f2440eba1f40d675a4761df7919eb98be9b3e41cbe02f362db5cb->enter($__internal_bd068e578c8f2440eba1f40d675a4761df7919eb98be9b3e41cbe02f362db5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 277
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <!-- Scripts
================================================== -->
\t<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 282
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        // line 288
        echo "
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

        </script>

    ";
        
        $__internal_bd068e578c8f2440eba1f40d675a4761df7919eb98be9b3e41cbe02f362db5cb->leave($__internal_bd068e578c8f2440eba1f40d675a4761df7919eb98be9b3e41cbe02f362db5cb_prof);

        
        $__internal_15f1220b242229939f33059595d207e876b354d989616ab9f270831212fc4cdb->leave($__internal_15f1220b242229939f33059595d207e876b354d989616ab9f270831212fc4cdb_prof);

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
        return array (  409 => 288,  405 => 282,  401 => 281,  397 => 280,  390 => 277,  381 => 276,  368 => 8,  359 => 7,  348 => 356,  346 => 276,  335 => 267,  234 => 165,  145 => 50,  134 => 48,  130 => 47,  120 => 39,  109 => 37,  105 => 36,  77 => 10,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
                                        document.getElementById('fromC').addEventListener('change', onChangeHandler);
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
{#
                                <script>
                                    function transformMap() {
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 12,
                                            center: {lat: 36.8188, lng: 10.166},
                                            mapTypeControl: true,
                                            mapTypeControlOptions: {
                                                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                                                position: google.maps.ControlPosition.TOP_CENTER
                                            },
                                            zoomControl: true,
                                            zoomControlOptions: {
                                                position: google.maps.ControlPosition.LEFT_CENTER
                                            },
                                            scaleControl: true,
                                            streetViewControl: true,
                                            streetViewControlOptions: {
                                                position: google.maps.ControlPosition.LEFT_TOP
                                            },
                                            fullscreenControl: true
                                        });
                                    }
                                </script>
                                <script async defer
                                        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBKXNneTVr8yaKCVD_sCEFj9CNCtcU85V8&callback=transformMap\">
                                </script>
#}
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

                                <!-- Address -->
                                <div class=\"col-md-6\">
                                    <h5>Company</h5>
                                    <input type=\"text\" name=\"company\" required>
                                </div>

                                <!-- City -->
                                <div class=\"col-md-6\">
                                    <h5>Serial</h5>
                                    <input type=\"text\" name=\"serial\" required>
                                </div>

                                <!-- City -->
                                <div class=\"col-md-6\">
                                    <h5>Brand</h5>
                                    <input type=\"text\" name=\"brand\" required>
                                </div>

                                <!-- Zip-Code -->
                                <div class=\"col-md-6\">
                                    <h5>Type</h5>
                                    <select name=\"gamme\">
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
{#
    <script src=\"{{ asset('bundles/views/scripts/infobox.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/markerclusterer.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/maps.js') }}\"></script>
#}

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

        </script>

    {% endblock %}

{% endblock %}", "@PidevGestionTrajets/GestionTrajets/shareride.html.twig", "/var/www/html/PIDEVS/src/Pidev/GestionTrajetsBundle/Resources/views/GestionTrajets/shareride.html.twig");
    }
}
