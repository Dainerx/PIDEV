<?php

/* @PidevGestionTrajets/GestionTrajets/trajets.html.twig */
class __TwigTemplate_f546bee13f80b8230f65055d6fe887e655a0de1f2af9f767ed9ddab4197541f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PidevGestionTrajets/GestionTrajets/trajets.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_f568b3aaa6ba15ec99c055ccbf4c9153371bc897c679b60c2147d0505a1f6b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f568b3aaa6ba15ec99c055ccbf4c9153371bc897c679b60c2147d0505a1f6b32->enter($__internal_f568b3aaa6ba15ec99c055ccbf4c9153371bc897c679b60c2147d0505a1f6b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/trajets.html.twig"));

        $__internal_9ecf18446148e0dd52f67c03aac5a70f0418c11c0f1fc9587a92eeadf7c444af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecf18446148e0dd52f67c03aac5a70f0418c11c0f1fc9587a92eeadf7c444af->enter($__internal_9ecf18446148e0dd52f67c03aac5a70f0418c11c0f1fc9587a92eeadf7c444af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/trajets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f568b3aaa6ba15ec99c055ccbf4c9153371bc897c679b60c2147d0505a1f6b32->leave($__internal_f568b3aaa6ba15ec99c055ccbf4c9153371bc897c679b60c2147d0505a1f6b32_prof);

        
        $__internal_9ecf18446148e0dd52f67c03aac5a70f0418c11c0f1fc9587a92eeadf7c444af->leave($__internal_9ecf18446148e0dd52f67c03aac5a70f0418c11c0f1fc9587a92eeadf7c444af_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dca5f9950690b40ad8c9fdd95a47d76b0efeda3b40d1deba338a3c4dfc70ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dca5f9950690b40ad8c9fdd95a47d76b0efeda3b40d1deba338a3c4dfc70ea7->enter($__internal_2dca5f9950690b40ad8c9fdd95a47d76b0efeda3b40d1deba338a3c4dfc70ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6815b138c07933ead19a7d944435fef333b562bee6afb4d8a5c012d901f89cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6815b138c07933ead19a7d944435fef333b562bee6afb4d8a5c012d901f89cd2->enter($__internal_6815b138c07933ead19a7d944435fef333b562bee6afb4d8a5c012d901f89cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Share my Ride";
        
        $__internal_6815b138c07933ead19a7d944435fef333b562bee6afb4d8a5c012d901f89cd2->leave($__internal_6815b138c07933ead19a7d944435fef333b562bee6afb4d8a5c012d901f89cd2_prof);

        
        $__internal_2dca5f9950690b40ad8c9fdd95a47d76b0efeda3b40d1deba338a3c4dfc70ea7->leave($__internal_2dca5f9950690b40ad8c9fdd95a47d76b0efeda3b40d1deba338a3c4dfc70ea7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94cb8163427e19bbd646603a7e5a35c19ff4cd25f7df304f49526b05f043bfa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cb8163427e19bbd646603a7e5a35c19ff4cd25f7df304f49526b05f043bfa8->enter($__internal_94cb8163427e19bbd646603a7e5a35c19ff4cd25f7df304f49526b05f043bfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c7e243e47e377565dfb12133460a8a73fc9fa89fc0ae1e890ea1d5985fba22ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e243e47e377565dfb12133460a8a73fc9fa89fc0ae1e890ea1d5985fba22ab->enter($__internal_c7e243e47e377565dfb12133460a8a73fc9fa89fc0ae1e890ea1d5985fba22ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_c7e243e47e377565dfb12133460a8a73fc9fa89fc0ae1e890ea1d5985fba22ab->leave($__internal_c7e243e47e377565dfb12133460a8a73fc9fa89fc0ae1e890ea1d5985fba22ab_prof);

        
        $__internal_94cb8163427e19bbd646603a7e5a35c19ff4cd25f7df304f49526b05f043bfa8->leave($__internal_94cb8163427e19bbd646603a7e5a35c19ff4cd25f7df304f49526b05f043bfa8_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_23355a7517bd68cb53f4b9edb63387452c2a38a413dcabc3aa7f881a4170e4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23355a7517bd68cb53f4b9edb63387452c2a38a413dcabc3aa7f881a4170e4ac->enter($__internal_23355a7517bd68cb53f4b9edb63387452c2a38a413dcabc3aa7f881a4170e4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a7433a064d59af49ae150f6ce961e19708851a11b41bf28702159aee63b02fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7433a064d59af49ae150f6ce961e19708851a11b41bf28702159aee63b02fe4->enter($__internal_a7433a064d59af49ae150f6ce961e19708851a11b41bf28702159aee63b02fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->displayBlock('topbody', $context, $blocks);
        // line 11
        echo "
<!-- Search
================================================== -->
<section class=\"search margin-bottom-50\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <!-- Title -->
                <h3 class=\"search-title\">Search</h3>
                <!-- Box -->
                <form method=\"POST\" action=";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("trajetsSearch");
        echo ">
                <div class=\"main-search-box\">

                    <!-- Row With Forms -->
                    <div class=\"row with-forms\">

                        <!-- Status -->
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"select-input\">
                                <input type=\"text\" name=\"depart\" placeholder=\"Departure\" data-unit=\"\" required>
                                <select >
                                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 34
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "city", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "city", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                </select>
                            </div>
                        </div>

                        <!-- Property Type -->
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"select-input\">
                                <input type=\"text\" name=\"destination\" placeholder=\"Destination\" data-unit=\"\" value=\"\" required>
                                <select>
                                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 46
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "city", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "city", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                </select>
                            </div>
                        </div>

                        <!-- Main Search Input -->
                        <div class=\"col-md-6\">
                            <div class=\"main-search-input\">
                                <input type=\"text\" placeholder=\"Enter address e.g. street, city or state\" value=\"\" disabled>
                                <button class=\"button\" type=\"submit\">Search</button>
                            </div>
                        </div>

                    </div>
                    <!-- Row With Forms / End -->


                    <!-- Row With Forms -->
                    <div class=\"row with-forms\">

                        <!-- Min Price -->
                        <div class=\"col-md-3 col-sm-6\">

                            <!-- Select Input -->
                            <div class=\"select-input\">
                                <input type=\"text\" name=\"nbrplace\" placeholder=\"Seats\" data-unit=\"Person\" >

                                <select>
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                </select>
                            </div>
                            <!-- Select Input / End -->

                        </div>

                        <!-- Max Price -->
                        <div class=\"col-md-3 col-sm-6\">

                            <!-- Select Input -->
                            <div class=\"select-input\">
                                <input type=\"text\" name=\"gamme\" placeholder=\"Vehicule Type\" data-unit=\"\" >

                                <select>
                                    <option>Economical
                                    <option>Medium
                                    <option>Luxurious
                                </select>

                            </div>
                            <!-- Select Input / End -->

                        </div>


                        <!-- Min Price -->
                        <div class=\"col-md-3 col-sm-6\">

                            <!-- Select Input -->
                            <div class=\"select-input disabled-first-option\">
                                <input type=\"text\" placeholder=\"Min Price Per Person\" name=\"low\" data-unit=\"Dt\">
                                <select>
                                    <option>Min Price
                                    <option>5
                                    <option>10
                                    <option>20
                                    <option>30
                                    <option>40
                                    <option>50
                                    <option>60
                                    <option>70
                                    <option>80
                                    <option>90
                                    <option>100
                                </select>
                            </div>
                            <!-- Select Input / End -->

                        </div>


                        <!-- Max Price -->
                        <div class=\"col-md-3 col-sm-6\">

                            <!-- Select Input -->
                            <div class=\"select-input disabled-first-option\">
                                <input type=\"text\" placeholder=\"Max Price Per Person\" name=\"high\" data-unit=\"Dt\">
                                <select>
                                    <option>Max Price
                                    <option>10
                                    <option>20
                                    <option>30
                                    <option>40
                                    <option>50
                                    <option>60
                                    <option>70
                                    <option>80
                                    <option>90
                                    <option>100
                                    <option>200
                                </select>
                            </div>
                            <!-- Select Input / End -->

                        </div>

                    </div>
                    <!-- Row With Forms / End -->

                </div>
                    </form>
                <!-- Box / End -->
            </div>
        </div>
    </div>
</section>



<!-- Content
================================================== -->
<div class=\"container\">
    <div class=\"row fullwidth-layout\">

        <div class=\"col-md-12\">

            <!-- Sorting / Layout Switcher -->
            <div class=\"row margin-bottom-15\">

                <div class=\"col-md-6\">
                    <!-- Sort by -->
                    <div class=\"sort-by\">
                        <label>Sort by:</label>

                        <div class=\"sort-by-select\">
                            <select data-placeholder=\"Default order\" class=\"chosen-select-no-single\">
                                <option>Default Order
                                <option>Price Low to High
                                <option>Price High to Low
                                <option>Newest Properties
                                <option>Oldest Properties
                            </select>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <!-- Layout Switcher -->
                    <div class=\"layout-switcher\">
                        <a href=\"#\" class=\"list\"><i class=\"fa fa-th-list\"></i></a>
                        <a href=\"#\" class=\"grid\"><i class=\"fa fa-th-large\"></i></a>
                    </div>
                </div>
            </div>


            <!-- Listings -->
            <div class=\"listings-container list-layout\">

                <!-- Listing Item -->
                ";
        // line 209
        $context["counter"] = 0;
        // line 210
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajets"]) ? $context["trajets"] : $this->getContext($context, "trajets")));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 211
            echo "                <div class=\"listing-item\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "\">
                    <a href=\"https://www.google.com/maps/dir/";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"listing-img-container\">

                        <div class=\"listing-badges\">
                            <span class=\"featured\">Featured</span>
                        </div>

                        <div class=\"listing-img-content\">
                            <span class=\"listing-price\"><i>";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "cout", array()), "html", null, true);
            echo " Dt/ seat</i></span>
                            <span class=\"like-icon tooltip\"></span>
                        </div>

                        <div class=\"listing-carousel\">
                            <div><img src=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                            <div><img src=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                            <div><img src=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                        </div>
                    </a>

                    <div class=\"listing-content\">

                        <div class=\"listing-title\">
                            <h4><i class=\"fa fa-map-pin\"></i><a href=\"https://www.google.com/maps/dir/";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "\" id=\"start";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\" target=\"_blank\" ";
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "</a>
                                <br>
                                <i class=\"fa fa-map-marker\"></i><a href=\"https://www.google.com/maps/dir/";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "\" id=\"end";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\" target=\"_blank\" ";
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "</a>
                            </h4>
                            <p>";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "description", array()), "html", null, true);
            echo "</p>
                            <h5><i class=\"fa fa-calendar\"> ";
            // line 238
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "datedepart", array()), "d-m-Y"), "html", null, true);
            echo "</i></h5>
                            <div id=\"booking";
            // line 239
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\">
                            ";
            // line 240
            if (((isset($context["currentuser"]) ? $context["currentuser"] : $this->getContext($context, "currentuser")) == $this->getAttribute($this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "idMembre", array()), "username", array()))) {
                // line 241
                echo "                            <a href=\"#\" id=\"booked\" class=\"details button border\">Booked <i class=\"fa fa-check\"></i></a>
                            ";
            } else {
                // line 243
                echo "                            <a href=\"#\" id=\"book";
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "\" onclick=\"book(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "idMembre", array()), "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "nbrplacedispo", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "); return false\" class=\"details button border\">Book</a>
                            ";
            }
            // line 245
            echo "                            </div>
                        </div>


                    <ul class=\"listing-features\">
                        <li>Cost <span>";
            // line 250
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "cout", array()) . " Dt"), "html", null, true);
            echo "</span></li>
                        <li>Seats <span>";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "nbrplacedispo", array()), "html", null, true);
            echo "</span></li>
                        <li>Car <span>";
            // line 252
            echo twig_escape_filter($this->env, (($this->getAttribute($context["trajet"], "modele", array(), "array") . " | ") . $this->getAttribute($context["trajet"], "gamme", array(), "array")), "html", null, true);
            echo "</span></li>
                        </ul>

                        <div class=\"listing-footer\">
                            <a href=\"#\"><i class=\"fa fa-user\"></i> ";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($context["trajet"], "nom", array(), "array"), "html", null, true);
            echo "</a>
                            ";
            // line 257
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env), "diff", array(0 => twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "datepub", array()))), "method");
            // line 258
            echo "                            ";
            $context["leftDays"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
            // line 259
            echo "                            ";
            if (((isset($context["leftDays"]) ? $context["leftDays"] : $this->getContext($context, "leftDays")) == 1)) {
                // line 260
                echo "                                <span><i class=\"fa fa-calendar-o\"></i> 1 day ago</span>
                            ";
            } else {
                // line 262
                echo "                                <span><i class=\"fa fa-calendar-o\"></i>";
                echo twig_escape_filter($this->env, (isset($context["leftDays"]) ? $context["leftDays"] : $this->getContext($context, "leftDays")), "html", null, true);
                echo " days ago</span>
                            ";
            }
            // line 264
            echo "                            ";
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getFacebookLikeButton();
            echo "
                        </div>

                    </div>
                </div>
                <script>
                function book(idTrajet,idMembre,places,counter){
                    var result = confirm(\"Are you sure you wanna book a seat in this ride?\");
                    if (result == false)
                        return;
                    else if (places==0)
                    {
                        alert ('This ride is full you cannot book a seat on it.');
                        return;
                    }
                    else
                        bookAction(idTrajet,idMembre,counter);
                }

                function bookAction(idTrajet,idMembre,counter) {
                    \$.ajax({
                        url: Routing.generate('bookSeat'),
                        data: 'idTrajet=' + idTrajet +'&idMembre='+idMembre,
                        type: 'POST',
                        success: function (data) {
                            alert('You have successfully booked a seat in this ride.');
                            \$(\"#book\"+counter).remove();
                            \$(\"#booking\"+counter).append(\"<a href='#' id='booked' class='details button border'>Booked <i class='fa fa-check'></i></a>\");
                            setCookie('ride";
            // line 292
            echo twig_escape_filter($this->env, (isset($context["currentuser"]) ? $context["currentuser"] : $this->getContext($context, "currentuser")), "html", null, true);
            echo "',\$(\"#start\"+counter).text()+'|'+\$(\"#end\"+counter).text(),7);
                        },
                        error:function (data) {
                            alert('Something went wrong!');
                        }
                    });
                }

                function setCookie(cname, cvalue, exdays) {
                    var d = new Date();
                    d.setTime(d.getTime() + (exdays*24*60*60*1000));
                    var expires = \"expires=\"+ d.toUTCString();
                    document.cookie = cname + \"=\" + cvalue + \";\" + expires;
                }
                </script>
                ";
            // line 307
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 308
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trajet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "                <!-- Listing Item / End -->
            </div>
            <!-- Listings Container / End -->

            <div class=\"clearfix\"></div>
            <!-- Pagination -->
            <div class=\"pagination-container margin-top-20\">
                <nav class=\"pagination\">
                    <ul>
                        <li><a href=\"#\" class=\"current-page\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li class=\"blank\">...</li>
                        <li><a href=\"#\">22</a></li>
                    </ul>
                </nav>

                <nav class=\"pagination-next-prev\">
                    <ul>
                        <li><a href=\"#\" class=\"prev\">Previous</a></li>
                        <li><a href=\"#\" class=\"next\">Next</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination / End -->

        </div>

    </div>
</div>

    ";
        // line 340
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_a7433a064d59af49ae150f6ce961e19708851a11b41bf28702159aee63b02fe4->leave($__internal_a7433a064d59af49ae150f6ce961e19708851a11b41bf28702159aee63b02fe4_prof);

        
        $__internal_23355a7517bd68cb53f4b9edb63387452c2a38a413dcabc3aa7f881a4170e4ac->leave($__internal_23355a7517bd68cb53f4b9edb63387452c2a38a413dcabc3aa7f881a4170e4ac_prof);

    }

    // line 8
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_4ae288a62901532318c720bdbb6b16ac7b15675bbbad60fb86e0dcb6632828c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae288a62901532318c720bdbb6b16ac7b15675bbbad60fb86e0dcb6632828c4->enter($__internal_4ae288a62901532318c720bdbb6b16ac7b15675bbbad60fb86e0dcb6632828c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_4b31997adab2bf220410208201003df5f24a33d816ebe4775f23424843e5e63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b31997adab2bf220410208201003df5f24a33d816ebe4775f23424843e5e63e->enter($__internal_4b31997adab2bf220410208201003df5f24a33d816ebe4775f23424843e5e63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 9
        echo "        ";
        $this->displayParentBlock("topbody", $context, $blocks);
        echo "
    ";
        
        $__internal_4b31997adab2bf220410208201003df5f24a33d816ebe4775f23424843e5e63e->leave($__internal_4b31997adab2bf220410208201003df5f24a33d816ebe4775f23424843e5e63e_prof);

        
        $__internal_4ae288a62901532318c720bdbb6b16ac7b15675bbbad60fb86e0dcb6632828c4->leave($__internal_4ae288a62901532318c720bdbb6b16ac7b15675bbbad60fb86e0dcb6632828c4_prof);

    }

    // line 340
    public function block_footer($context, array $blocks = array())
    {
        $__internal_019f39ab4b243b9dd78e16469ee01dbdb54a22afb332dc66838df69639fce7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019f39ab4b243b9dd78e16469ee01dbdb54a22afb332dc66838df69639fce7c1->enter($__internal_019f39ab4b243b9dd78e16469ee01dbdb54a22afb332dc66838df69639fce7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_22a8842df349cab339cfe3d119b7c3108fe9b0251b2524673ad1d3b5e028c52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a8842df349cab339cfe3d119b7c3108fe9b0251b2524673ad1d3b5e028c52d->enter($__internal_22a8842df349cab339cfe3d119b7c3108fe9b0251b2524673ad1d3b5e028c52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 341
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <!-- Scripts
================================================== -->
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/chosen.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/rangeSlider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/masonry.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery.jpanelmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/tooltips.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 356
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <!-- Style Switcher
    ================================================== -->
    <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/switcher.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_22a8842df349cab339cfe3d119b7c3108fe9b0251b2524673ad1d3b5e028c52d->leave($__internal_22a8842df349cab339cfe3d119b7c3108fe9b0251b2524673ad1d3b5e028c52d_prof);

        
        $__internal_019f39ab4b243b9dd78e16469ee01dbdb54a22afb332dc66838df69639fce7c1->leave($__internal_019f39ab4b243b9dd78e16469ee01dbdb54a22afb332dc66838df69639fce7c1_prof);

    }

    public function getTemplateName()
    {
        return "@PidevGestionTrajets/GestionTrajets/trajets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 363,  664 => 356,  660 => 355,  656 => 354,  652 => 353,  648 => 352,  644 => 351,  640 => 350,  636 => 349,  632 => 348,  628 => 347,  624 => 346,  620 => 345,  616 => 344,  609 => 341,  600 => 340,  587 => 9,  578 => 8,  568 => 340,  535 => 309,  529 => 308,  527 => 307,  509 => 292,  477 => 264,  471 => 262,  467 => 260,  464 => 259,  461 => 258,  459 => 257,  455 => 256,  448 => 252,  444 => 251,  440 => 250,  433 => 245,  419 => 243,  415 => 241,  413 => 240,  409 => 239,  405 => 238,  401 => 237,  389 => 235,  377 => 233,  367 => 226,  363 => 225,  359 => 224,  351 => 219,  339 => 212,  334 => 211,  329 => 210,  327 => 209,  164 => 48,  153 => 46,  149 => 45,  138 => 36,  127 => 34,  123 => 33,  109 => 22,  96 => 11,  93 => 8,  84 => 7,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Share my Ride{% endblock %}
    {% block stylesheets %}
        {{ parent() }}
    {% endblock %}

{% block content %}
    {% block topbody %}
        {{ parent() }}
    {% endblock %}

<!-- Search
================================================== -->
<section class=\"search margin-bottom-50\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <!-- Title -->
                <h3 class=\"search-title\">Search</h3>
                <!-- Box -->
                <form method=\"POST\" action={{ path('trajetsSearch') }}>
                <div class=\"main-search-box\">

                    <!-- Row With Forms -->
                    <div class=\"row with-forms\">

                        <!-- Status -->
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"select-input\">
                                <input type=\"text\" name=\"depart\" placeholder=\"Departure\" data-unit=\"\" required>
                                <select >
                                    {% for c in cities %}
                                        <option value=\"{{ c.city }}\">{{ c.city }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>

                        <!-- Property Type -->
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"select-input\">
                                <input type=\"text\" name=\"destination\" placeholder=\"Destination\" data-unit=\"\" value=\"\" required>
                                <select>
                                    {% for c in cities %}
                                        <option value=\"{{ c.city }}\">{{ c.city }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>

                        <!-- Main Search Input -->
                        <div class=\"col-md-6\">
                            <div class=\"main-search-input\">
                                <input type=\"text\" placeholder=\"Enter address e.g. street, city or state\" value=\"\" disabled>
                                <button class=\"button\" type=\"submit\">Search</button>
                            </div>
                        </div>

                    </div>
                    <!-- Row With Forms / End -->


                    <!-- Row With Forms -->
                    <div class=\"row with-forms\">

                        <!-- Min Price -->
                        <div class=\"col-md-3 col-sm-6\">

                            <!-- Select Input -->
                            <div class=\"select-input\">
                                <input type=\"text\" name=\"nbrplace\" placeholder=\"Seats\" data-unit=\"Person\" >

                                <select>
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                </select>
                            </div>
                            <!-- Select Input / End -->

                        </div>

                        <!-- Max Price -->
                        <div class=\"col-md-3 col-sm-6\">

                            <!-- Select Input -->
                            <div class=\"select-input\">
                                <input type=\"text\" name=\"gamme\" placeholder=\"Vehicule Type\" data-unit=\"\" >

                                <select>
                                    <option>Economical
                                    <option>Medium
                                    <option>Luxurious
                                </select>

                            </div>
                            <!-- Select Input / End -->

                        </div>


                        <!-- Min Price -->
                        <div class=\"col-md-3 col-sm-6\">

                            <!-- Select Input -->
                            <div class=\"select-input disabled-first-option\">
                                <input type=\"text\" placeholder=\"Min Price Per Person\" name=\"low\" data-unit=\"Dt\">
                                <select>
                                    <option>Min Price
                                    <option>5
                                    <option>10
                                    <option>20
                                    <option>30
                                    <option>40
                                    <option>50
                                    <option>60
                                    <option>70
                                    <option>80
                                    <option>90
                                    <option>100
                                </select>
                            </div>
                            <!-- Select Input / End -->

                        </div>


                        <!-- Max Price -->
                        <div class=\"col-md-3 col-sm-6\">

                            <!-- Select Input -->
                            <div class=\"select-input disabled-first-option\">
                                <input type=\"text\" placeholder=\"Max Price Per Person\" name=\"high\" data-unit=\"Dt\">
                                <select>
                                    <option>Max Price
                                    <option>10
                                    <option>20
                                    <option>30
                                    <option>40
                                    <option>50
                                    <option>60
                                    <option>70
                                    <option>80
                                    <option>90
                                    <option>100
                                    <option>200
                                </select>
                            </div>
                            <!-- Select Input / End -->

                        </div>

                    </div>
                    <!-- Row With Forms / End -->

                </div>
                    </form>
                <!-- Box / End -->
            </div>
        </div>
    </div>
</section>



<!-- Content
================================================== -->
<div class=\"container\">
    <div class=\"row fullwidth-layout\">

        <div class=\"col-md-12\">

            <!-- Sorting / Layout Switcher -->
            <div class=\"row margin-bottom-15\">

                <div class=\"col-md-6\">
                    <!-- Sort by -->
                    <div class=\"sort-by\">
                        <label>Sort by:</label>

                        <div class=\"sort-by-select\">
                            <select data-placeholder=\"Default order\" class=\"chosen-select-no-single\">
                                <option>Default Order
                                <option>Price Low to High
                                <option>Price High to Low
                                <option>Newest Properties
                                <option>Oldest Properties
                            </select>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <!-- Layout Switcher -->
                    <div class=\"layout-switcher\">
                        <a href=\"#\" class=\"list\"><i class=\"fa fa-th-list\"></i></a>
                        <a href=\"#\" class=\"grid\"><i class=\"fa fa-th-large\"></i></a>
                    </div>
                </div>
            </div>


            <!-- Listings -->
            <div class=\"listings-container list-layout\">

                <!-- Listing Item -->
                {% set counter=0 %}
                {% for trajet in trajets %}
                <div class=\"listing-item\" id=\"{{ trajet[0].id }}\">
                    <a href=\"https://www.google.com/maps/dir/{{ trajet[0].depart }}/{{ trajet[0].destination }}\" target=\"_blank\" class=\"listing-img-container\">

                        <div class=\"listing-badges\">
                            <span class=\"featured\">Featured</span>
                        </div>

                        <div class=\"listing-img-content\">
                            <span class=\"listing-price\"><i>{{ trajet[0].cout }} Dt/ seat</i></span>
                            <span class=\"like-icon tooltip\"></span>
                        </div>

                        <div class=\"listing-carousel\">
                            <div><img src=\"{{ asset('bundles/views/images/car-pooling.jpg') }}\" alt=\"\"></div>
                            <div><img src=\"{{ asset('bundles/views/images/car-pooling.jpg') }}\" alt=\"\"></div>
                            <div><img src=\"{{ asset('bundles/views/images/car-pooling.jpg') }}\" alt=\"\"></div>
                        </div>
                    </a>

                    <div class=\"listing-content\">

                        <div class=\"listing-title\">
                            <h4><i class=\"fa fa-map-pin\"></i><a href=\"https://www.google.com/maps/dir/{{ trajet[0].depart }}/{{ trajet[0].destination }}\" id=\"start{{ counter }}\" target=\"_blank\" {#class=\"listing-address popup-gmaps\"#}> {{ trajet[0].depart }}</a>
                                <br>
                                <i class=\"fa fa-map-marker\"></i><a href=\"https://www.google.com/maps/dir/{{ trajet[0].depart }}/{{ trajet[0].destination }}\" id=\"end{{ counter }}\" target=\"_blank\" {#class=\"listing-address popup-gmaps\"#}> {{ trajet[0].destination }}</a>
                            </h4>
                            <p>{{ trajet[0].description }}</p>
                            <h5><i class=\"fa fa-calendar\"> {{ trajet[0].datedepart|date('d-m-Y') }}</i></h5>
                            <div id=\"booking{{ counter }}\">
                            {%  if currentuser == trajet[0].idMembre.username %}
                            <a href=\"#\" id=\"booked\" class=\"details button border\">Booked <i class=\"fa fa-check\"></i></a>
                            {% else %}
                            <a href=\"#\" id=\"book{{ counter }}\" onclick=\"book({{ trajet[0].id }},{{ trajet[0].idMembre.id }},{{ trajet[0].nbrplacedispo }},{{ counter }}); return false\" class=\"details button border\">Book</a>
                            {% endif %}
                            </div>
                        </div>


                    <ul class=\"listing-features\">
                        <li>Cost <span>{{ trajet[0].cout ~ ' Dt' }}</span></li>
                        <li>Seats <span>{{ trajet[0].nbrplacedispo }}</span></li>
                        <li>Car <span>{{ trajet['modele'] ~ ' | ' ~ trajet['gamme'] }}</span></li>
                        </ul>

                        <div class=\"listing-footer\">
                            <a href=\"#\"><i class=\"fa fa-user\"></i> {{ trajet['nom'] }}</a>
                            {% set difference = date().diff(date(trajet[0].datepub)) %}
                            {% set leftDays = difference.days %}
                            {% if leftDays == 1 %}
                                <span><i class=\"fa fa-calendar-o\"></i> 1 day ago</span>
                            {% else %}
                                <span><i class=\"fa fa-calendar-o\"></i>{{ leftDays }} days ago</span>
                            {% endif %}
                            {{ facebookButton() }}
                        </div>

                    </div>
                </div>
                <script>
                function book(idTrajet,idMembre,places,counter){
                    var result = confirm(\"Are you sure you wanna book a seat in this ride?\");
                    if (result == false)
                        return;
                    else if (places==0)
                    {
                        alert ('This ride is full you cannot book a seat on it.');
                        return;
                    }
                    else
                        bookAction(idTrajet,idMembre,counter);
                }

                function bookAction(idTrajet,idMembre,counter) {
                    \$.ajax({
                        url: Routing.generate('bookSeat'),
                        data: 'idTrajet=' + idTrajet +'&idMembre='+idMembre,
                        type: 'POST',
                        success: function (data) {
                            alert('You have successfully booked a seat in this ride.');
                            \$(\"#book\"+counter).remove();
                            \$(\"#booking\"+counter).append(\"<a href='#' id='booked' class='details button border'>Booked <i class='fa fa-check'></i></a>\");
                            setCookie('ride{{ currentuser }}',\$(\"#start\"+counter).text()+'|'+\$(\"#end\"+counter).text(),7);
                        },
                        error:function (data) {
                            alert('Something went wrong!');
                        }
                    });
                }

                function setCookie(cname, cvalue, exdays) {
                    var d = new Date();
                    d.setTime(d.getTime() + (exdays*24*60*60*1000));
                    var expires = \"expires=\"+ d.toUTCString();
                    document.cookie = cname + \"=\" + cvalue + \";\" + expires;
                }
                </script>
                {% set counter=counter+1 %}
                {% endfor %}
                <!-- Listing Item / End -->
            </div>
            <!-- Listings Container / End -->

            <div class=\"clearfix\"></div>
            <!-- Pagination -->
            <div class=\"pagination-container margin-top-20\">
                <nav class=\"pagination\">
                    <ul>
                        <li><a href=\"#\" class=\"current-page\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li class=\"blank\">...</li>
                        <li><a href=\"#\">22</a></li>
                    </ul>
                </nav>

                <nav class=\"pagination-next-prev\">
                    <ul>
                        <li><a href=\"#\" class=\"prev\">Previous</a></li>
                        <li><a href=\"#\" class=\"next\">Next</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination / End -->

        </div>

    </div>
</div>

    {% block footer %}
    {{ parent() }}
    <!-- Scripts
================================================== -->
    <script src=\"{{ asset('bundles/views/scripts/jquery-2.2.0.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/chosen.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/rangeSlider.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/sticky-kit.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/slick.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/masonry.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/jquery.jpanelmenu.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/tooltips.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/views/scripts/custom.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <!-- Style Switcher
    ================================================== -->
    <script src=\"{{ asset('bundles/views/scripts/switcher.js') }}\"></script>

{% endblock %}
{% endblock %}
", "@PidevGestionTrajets/GestionTrajets/trajets.html.twig", "/var/www/html/PIDEVS/src/Pidev/GestionTrajetsBundle/Resources/views/GestionTrajets/trajets.html.twig");
    }
}
