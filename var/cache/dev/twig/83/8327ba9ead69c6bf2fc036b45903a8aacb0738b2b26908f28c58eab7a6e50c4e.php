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
        $__internal_1d019eeb94eec4e4791a8f42cb453699a15f42fddc70e12d5355c1b689300005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d019eeb94eec4e4791a8f42cb453699a15f42fddc70e12d5355c1b689300005->enter($__internal_1d019eeb94eec4e4791a8f42cb453699a15f42fddc70e12d5355c1b689300005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/shareride.html.twig"));

        $__internal_3df8d3ed959f31ff3a12ec92ad67bdff40d694523ee8b98dac107010e4c8a2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df8d3ed959f31ff3a12ec92ad67bdff40d694523ee8b98dac107010e4c8a2cd->enter($__internal_3df8d3ed959f31ff3a12ec92ad67bdff40d694523ee8b98dac107010e4c8a2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/shareride.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d019eeb94eec4e4791a8f42cb453699a15f42fddc70e12d5355c1b689300005->leave($__internal_1d019eeb94eec4e4791a8f42cb453699a15f42fddc70e12d5355c1b689300005_prof);

        
        $__internal_3df8d3ed959f31ff3a12ec92ad67bdff40d694523ee8b98dac107010e4c8a2cd->leave($__internal_3df8d3ed959f31ff3a12ec92ad67bdff40d694523ee8b98dac107010e4c8a2cd_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ac59f9f3f2200749ef18e30f41c92605cba232d764da19f3c57358163ac1649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac59f9f3f2200749ef18e30f41c92605cba232d764da19f3c57358163ac1649->enter($__internal_4ac59f9f3f2200749ef18e30f41c92605cba232d764da19f3c57358163ac1649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd8c044a566cedf48442e120a5124351f1bc8a898e66fdb5d5fdb8589898a7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8c044a566cedf48442e120a5124351f1bc8a898e66fdb5d5fdb8589898a7f7->enter($__internal_fd8c044a566cedf48442e120a5124351f1bc8a898e66fdb5d5fdb8589898a7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_fd8c044a566cedf48442e120a5124351f1bc8a898e66fdb5d5fdb8589898a7f7->leave($__internal_fd8c044a566cedf48442e120a5124351f1bc8a898e66fdb5d5fdb8589898a7f7_prof);

        
        $__internal_4ac59f9f3f2200749ef18e30f41c92605cba232d764da19f3c57358163ac1649->leave($__internal_4ac59f9f3f2200749ef18e30f41c92605cba232d764da19f3c57358163ac1649_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_aa31f5f7017d615c5097cef61bcac1dee130fb187671798db3025ab2bed38150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa31f5f7017d615c5097cef61bcac1dee130fb187671798db3025ab2bed38150->enter($__internal_aa31f5f7017d615c5097cef61bcac1dee130fb187671798db3025ab2bed38150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8df62b0688b53055e356abcbdcf40a6f2b09c6f2dc997267d2d0a285da5ee97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df62b0688b53055e356abcbdcf40a6f2b09c6f2dc997267d2d0a285da5ee97d->enter($__internal_8df62b0688b53055e356abcbdcf40a6f2b09c6f2dc997267d2d0a285da5ee97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "        ";
        $this->displayBlock('topbody', $context, $blocks);
        // line 10
        echo "        
        <script type=\"text/javascript\">
            function updateCitiesFrom() {
                alert ('fuck off');
                jQuery.ajax({
                    url: ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateCities");
        echo ",
                    data:'from='+\$(\"#from\").val(),
                    type: \"POST\",
                    success:function(data){
                        \$(\"#fromC\").html(data);
                    },
                    error:function (){}
                });
            }
        </script>



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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 53
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
        // line 55
        echo "                                    </select>
                                </div>

                                <!-- Type -->
                                <div class=\"col-md-6\">
                                    <h5>State (Destination)</h5>
                                    <select onchange=\"updateCitiesTo()\" id=\"to\" name=\"to\" class=\"chosen-select-no-single\" required>
                                        <option label=\"blank\">
                                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 64
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
        // line 66
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
                                        <option value=\"aze\">aze</option>
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
                        <h3>Gallery</h3>
                        <div class=\"submit-section\">
                            <form action=\"/file-upload\" class=\"dropzone\"></form>
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
        // line 209
        echo "
                    </div>
                </div>

            </div>
            </form>
        </div>











\t";
        // line 227
        $this->displayBlock('footer', $context, $blocks);
        // line 235
        echo "
";
        
        $__internal_8df62b0688b53055e356abcbdcf40a6f2b09c6f2dc997267d2d0a285da5ee97d->leave($__internal_8df62b0688b53055e356abcbdcf40a6f2b09c6f2dc997267d2d0a285da5ee97d_prof);

        
        $__internal_aa31f5f7017d615c5097cef61bcac1dee130fb187671798db3025ab2bed38150->leave($__internal_aa31f5f7017d615c5097cef61bcac1dee130fb187671798db3025ab2bed38150_prof);

    }

    // line 7
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_2fe7dad360bbf8d95b01a59a02078adcad7c2ca96e87806b9438170babf86b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe7dad360bbf8d95b01a59a02078adcad7c2ca96e87806b9438170babf86b09->enter($__internal_2fe7dad360bbf8d95b01a59a02078adcad7c2ca96e87806b9438170babf86b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_9796fe949d5f4e0e25a7f640be29ae1d3090b4769b6c17b0fcc5f36c31c10366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9796fe949d5f4e0e25a7f640be29ae1d3090b4769b6c17b0fcc5f36c31c10366->enter($__internal_9796fe949d5f4e0e25a7f640be29ae1d3090b4769b6c17b0fcc5f36c31c10366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 8
        echo "            ";
        $this->displayParentBlock("topbody", $context, $blocks);
        echo "
        ";
        
        $__internal_9796fe949d5f4e0e25a7f640be29ae1d3090b4769b6c17b0fcc5f36c31c10366->leave($__internal_9796fe949d5f4e0e25a7f640be29ae1d3090b4769b6c17b0fcc5f36c31c10366_prof);

        
        $__internal_2fe7dad360bbf8d95b01a59a02078adcad7c2ca96e87806b9438170babf86b09->leave($__internal_2fe7dad360bbf8d95b01a59a02078adcad7c2ca96e87806b9438170babf86b09_prof);

    }

    // line 227
    public function block_footer($context, array $blocks = array())
    {
        $__internal_69d0d2366583597d76db761c3781eb64388edc9eae0ca11e34310050adf51171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d0d2366583597d76db761c3781eb64388edc9eae0ca11e34310050adf51171->enter($__internal_69d0d2366583597d76db761c3781eb64388edc9eae0ca11e34310050adf51171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_9aacf9614c91e3f6364aba9b00fc2c5d1e96fd2b8c24e827bc25639ebaebc7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aacf9614c91e3f6364aba9b00fc2c5d1e96fd2b8c24e827bc25639ebaebc7b9->enter($__internal_9aacf9614c91e3f6364aba9b00fc2c5d1e96fd2b8c24e827bc25639ebaebc7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 228
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <!-- Scripts
================================================== -->
\t<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
\t";
        
        $__internal_9aacf9614c91e3f6364aba9b00fc2c5d1e96fd2b8c24e827bc25639ebaebc7b9->leave($__internal_9aacf9614c91e3f6364aba9b00fc2c5d1e96fd2b8c24e827bc25639ebaebc7b9_prof);

        
        $__internal_69d0d2366583597d76db761c3781eb64388edc9eae0ca11e34310050adf51171->leave($__internal_69d0d2366583597d76db761c3781eb64388edc9eae0ca11e34310050adf51171_prof);

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
        return array (  385 => 233,  381 => 232,  377 => 231,  370 => 228,  361 => 227,  348 => 8,  339 => 7,  328 => 235,  326 => 227,  306 => 209,  164 => 66,  153 => 64,  149 => 63,  139 => 55,  128 => 53,  124 => 52,  84 => 15,  77 => 10,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
        
        <script type=\"text/javascript\">
            function updateCitiesFrom() {
                alert ('fuck off');
                jQuery.ajax({
                    url: {{ path('updateCities') }},
                    data:'from='+\$(\"#from\").val(),
                    type: \"POST\",
                    success:function(data){
                        \$(\"#fromC\").html(data);
                    },
                    error:function (){}
                });
            }
        </script>



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
                                        <option value=\"aze\">aze</option>
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
                        <h3>Gallery</h3>
                        <div class=\"submit-section\">
                            <form action=\"/file-upload\" class=\"dropzone\"></form>
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
    <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
\t{% endblock %}

{% endblock %}", "@PidevGestionTrajets/GestionTrajets/shareride.html.twig", "/var/www/html/PIDEVS/src/Pidev/GestionTrajetsBundle/Resources/views/GestionTrajets/shareride.html.twig");
    }
}
