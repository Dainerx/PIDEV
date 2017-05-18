<?php

/* @PidevGestionTrajets/GestionTrajets/home.html.twig */
class __TwigTemplate_19445d094293dfffcc723c91fb2d22b3d8524ecd9241a57ff68de2b497f3b5ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PidevGestionTrajets/GestionTrajets/home.html.twig", 1);
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
        $__internal_184c9d639e85deeb489a61c2964b522039ed4f0de717c0bc8d7d6b9776212ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184c9d639e85deeb489a61c2964b522039ed4f0de717c0bc8d7d6b9776212ce2->enter($__internal_184c9d639e85deeb489a61c2964b522039ed4f0de717c0bc8d7d6b9776212ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/home.html.twig"));

        $__internal_5c1ec85cb3a0768d389a50bac6d723418c58636f0d44224b42953de73ea445d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1ec85cb3a0768d389a50bac6d723418c58636f0d44224b42953de73ea445d0->enter($__internal_5c1ec85cb3a0768d389a50bac6d723418c58636f0d44224b42953de73ea445d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_184c9d639e85deeb489a61c2964b522039ed4f0de717c0bc8d7d6b9776212ce2->leave($__internal_184c9d639e85deeb489a61c2964b522039ed4f0de717c0bc8d7d6b9776212ce2_prof);

        
        $__internal_5c1ec85cb3a0768d389a50bac6d723418c58636f0d44224b42953de73ea445d0->leave($__internal_5c1ec85cb3a0768d389a50bac6d723418c58636f0d44224b42953de73ea445d0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cda2be6090f23896b5f7e8d9cb5a884127a6807cc0c830204409c7b4efbd912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cda2be6090f23896b5f7e8d9cb5a884127a6807cc0c830204409c7b4efbd912->enter($__internal_9cda2be6090f23896b5f7e8d9cb5a884127a6807cc0c830204409c7b4efbd912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c92c7ad13871938e90e3bc754bbf372af735d5423329c6d59cf481102882853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c92c7ad13871938e90e3bc754bbf372af735d5423329c6d59cf481102882853->enter($__internal_6c92c7ad13871938e90e3bc754bbf372af735d5423329c6d59cf481102882853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Share my Ride";
        
        $__internal_6c92c7ad13871938e90e3bc754bbf372af735d5423329c6d59cf481102882853->leave($__internal_6c92c7ad13871938e90e3bc754bbf372af735d5423329c6d59cf481102882853_prof);

        
        $__internal_9cda2be6090f23896b5f7e8d9cb5a884127a6807cc0c830204409c7b4efbd912->leave($__internal_9cda2be6090f23896b5f7e8d9cb5a884127a6807cc0c830204409c7b4efbd912_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c634e3f842d63d21cf224f16a5fb105d033fc51e58931c56b67925153874ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c634e3f842d63d21cf224f16a5fb105d033fc51e58931c56b67925153874ccb->enter($__internal_0c634e3f842d63d21cf224f16a5fb105d033fc51e58931c56b67925153874ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_92f54a0c02695e5f6ee81aa4d5224562d2ce4fa65fdddf6dbd17fe438af3e6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f54a0c02695e5f6ee81aa4d5224562d2ce4fa65fdddf6dbd17fe438af3e6ee->enter($__internal_92f54a0c02695e5f6ee81aa4d5224562d2ce4fa65fdddf6dbd17fe438af3e6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_92f54a0c02695e5f6ee81aa4d5224562d2ce4fa65fdddf6dbd17fe438af3e6ee->leave($__internal_92f54a0c02695e5f6ee81aa4d5224562d2ce4fa65fdddf6dbd17fe438af3e6ee_prof);

        
        $__internal_0c634e3f842d63d21cf224f16a5fb105d033fc51e58931c56b67925153874ccb->leave($__internal_0c634e3f842d63d21cf224f16a5fb105d033fc51e58931c56b67925153874ccb_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_74a1be8f8df56041dfd14c546aec491bfb20211ecfb2b7cc3cfd20cb33bdb124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a1be8f8df56041dfd14c546aec491bfb20211ecfb2b7cc3cfd20cb33bdb124->enter($__internal_74a1be8f8df56041dfd14c546aec491bfb20211ecfb2b7cc3cfd20cb33bdb124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d1d28b22c8f59922e8262b533c3b8ab4885588bdc8e789ccc048c95d1b22da12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d28b22c8f59922e8262b533c3b8ab4885588bdc8e789ccc048c95d1b22da12->enter($__internal_d1d28b22c8f59922e8262b533c3b8ab4885588bdc8e789ccc048c95d1b22da12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->displayBlock('topbody', $context, $blocks);
        // line 11
        echo "    <!-- Map
    ================================================== -->
    <div id=\"map-container\" class=\"homepage-map margin-bottom-0\">

        <div id=\"map\">
            <!-- map goes here -->
        </div>

        <script>
            function initMap() {
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
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBKXNneTVr8yaKCVD_sCEFj9CNCtcU85V8&callback=initMap\">
        </script>



        <!-- Map Navigation -->
        <a href=\"#\" id=\"scrollEnabling\" title=\"Enable or disable scrolling on map\">Enable Scrolling</a>
        <ul id=\"mapnav-buttons\">
            <li><a href=\"#\" id=\"prevpoint\" title=\"Previous point on map\">Prev</a></li>
            <li><a href=\"#\" id=\"nextpoint\" title=\"Next point on mp\">Next</a></li>
        </ul>


        <!-- Main Search Container -->
        <div class=\"main-search-container\">

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">

                        <!-- Trigger Button -->
                        <a href=\"#\" class=\"adv-search-btn button\">Advanced Search <i class=\"fa fa-caret-up\"></i></a>

                        <!-- Main Search -->

                            <!-- Type -->
                            <div class=\"search-type\" style=\"display: none;\">
                                <label class=\"active\"><input class=\"first-tab\" name=\"tab\" checked=\"checked\" type=\"radio\">Any Status</label>
                                <label><input name=\"tab\" type=\"radio\">For Sale</label>
                                <label><input name=\"tab\" type=\"radio\">For Rent</label>
                                <div class=\"search-type-arrow\"></div>
                            </div>

                            <form method=\"POST\" action=";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("trajetsSearch");
        echo ">
                            <!-- Box -->
                            <div class=\"main-search-box\">

                                <!-- Row With Forms -->
                                <div class=\"row with-forms\">

                                    <!-- Status -->
                                    <div class=\"col-md-3 col-sm-6\">
                                        <div class=\"select-input\">
                                            <input type=\"text\" name=\"depart\" placeholder=\"Departure\" data-unit=\"\" required>
                                            <select >
                                                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 90
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "city", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "city", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                            </select>
                                        </div>
                                    </div>

                                    <!-- Property Type -->
                                    <div class=\"col-md-3 col -sm-6\">
                                        <div class=\"select-input\">
                                            <input type=\"text\" name=\"destination\" placeholder=\"Destination\" data-unit=\"\" value=\"\" required>
                                            <select>
                                                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 102
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "city", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "city", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                                            </select>
                                        </div>
                                    </div>

                                    <!-- Main Search Input -->
                                    <div class=\"col-md-6\">
                                        <div class=\"main-search-input\">
                                            <input type=\"text\" placeholder=\"Enter address e.g. street, city or state\" value=\"\" disabled>
                                            <button class=\"button\">Search</button>
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
                                            <input type=\"text\" name=\"nbrplace\" placeholder=\"Seats\" data-unit=\"Person\">

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
                                            <input type=\"text\" name=\"gamme\" placeholder=\"Vehicule Type\" data-unit=\"Sq Ft\">

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
                                            <input type=\"text\" placeholder=\"Min Price Per Person\" data-unit=\"Dt\" name=\"low\">
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
                                            <input type=\"text\" placeholder=\"Max Price Per Person\" data-unit=\"Dt\" name=\"high\">
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
                            <!-- Box / End -->

                        </form>
                        <!-- Main Search -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Main Search Container / End -->

    </div>


    <!-- Content
    ================================================== -->
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12\">
                <h3 class=\"headline margin-bottom-25 margin-top-60\">Latest rides shared</h3>
                <h4><a href=\"";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("trajets");
        echo "\">See All!</h4>
            </div>

            <!-- Carousel -->
            <div class=\"col-md-12\">
                <div class=\"carousel\">
                ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajets"]) ? $context["trajets"] : $this->getContext($context, "trajets")));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 243
            echo "                    <!-- Listing Item -->
                    <div class=\"carousel-item\">
                        <div class=\"listing-item\">

                            <a href=\"trajets#";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "\" class=\"listing-img-container\">

                                <div class=\"listing-badges\">
                                    <span class=\"featured\">Featured</span>
                                </div>

                                <div class=\"listing-img-content\">
                                    <span class=\"listing-price\"><i>";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "cout", array()), "html", null, true);
            echo " Dt/ seat</i></span>
                                    <span class=\"like-icon tooltip\"></span>
                                </div>

                                <div class=\"listing-carousel\">
                                    <div><img src=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                                    <div><img src=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                                    <div><img src=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                                </div>

                            </a>

                            <div class=\"listing-content\">

                                <div class=\"listing-title\">
                                    <h4><a href=\"https://www.google.com/maps/dir/";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "\" class=\"listing-address popup-gmaps\">
                                        <i class=\"fa fa-map-pin\"></i>
                                        ";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "
                                    </a>
                                        <br>
                                        <a href=\"https://www.google.com/maps/dir/";
            // line 274
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "\" class=\"listing-address popup-gmaps\">
                                            <i class=\"fa fa-map-marker\"></i>
                                            ";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "
                                        </a>
                                    </h4>
                                    <p>";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "description", array()), "html", null, true);
            echo "</p>
                                    <h5><i class=\"fa fa-calendar\"> ";
            // line 280
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "datedepart", array()), "d-m-Y"), "html", null, true);
            echo "</i></h5>
                                </div>

                                <ul class=\"listing-features\">
                                    <li>Cost <span>";
            // line 284
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "cout", array()) . " Dt"), "html", null, true);
            echo "</span></li>
                                    <li>Seats <span>";
            // line 285
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "nbrplacedispo", array()), "html", null, true);
            echo "</span></li>
                                    <li>Car <span>";
            // line 286
            echo twig_escape_filter($this->env, (($this->getAttribute($context["trajet"], "modele", array(), "array") . " | ") . $this->getAttribute($context["trajet"], "gamme", array(), "array")), "html", null, true);
            echo "</span></li>
                                </ul>

                                <div class=\"listing-footer\">
                                    <a href=\"#\"><i class=\"fa fa-user\"></i> ";
            // line 290
            echo twig_escape_filter($this->env, $this->getAttribute($context["trajet"], "nom", array(), "array"), "html", null, true);
            echo "</a>
                                    ";
            // line 291
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env), "diff", array(0 => twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "datepub", array()))), "method");
            // line 292
            echo "                                    ";
            $context["leftDays"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
            // line 293
            echo "                                    ";
            if (((isset($context["leftDays"]) ? $context["leftDays"] : $this->getContext($context, "leftDays")) == 1)) {
                // line 294
                echo "                                        <span><i class=\"fa fa-calendar-o\"></i> 1 day ago</span>
                                    ";
            } else {
                // line 296
                echo "                                    <span><i class=\"fa fa-calendar-o\"></i>";
                echo twig_escape_filter($this->env, (isset($context["leftDays"]) ? $context["leftDays"] : $this->getContext($context, "leftDays")), "html", null, true);
                echo " days ago</span>
                                    ";
            }
            // line 298
            echo "                                </div>

                            </div>

                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trajet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "                    <!-- Listing Item / End -->
                </div>
            </div>
            <!-- Carousel / End -->

        </div>
    </div>



    <section class=\"fullwidth border-top margin-top-55 margin-bottom-0 padding-top-60 padding-bottom-65\" data-background-color=\"#ffffff\">
        <!-- Logo Carousel -->
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-12\">
                    <h3 class=\"headline centered margin-bottom-40 margin-top-10\">Join my ride's Partners <span>We all work together to make your Tunisian carpooling experience better!</span></h3>
                </div>

                <!-- Carousel -->
                <div class=\"col-md-12\">
                    <div class=\"logo-carousel dot-navigation\">

                        <div class=\"item\">
                            <img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-01.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-02.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-03.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-04.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-05.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-06.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-07.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>


                    </div>
                </div>
                <!-- Carousel / End -->

            </div>
        </div>
        <!-- Logo Carousel / End -->
    </section>

";
        // line 366
        $this->displayBlock('footer', $context, $blocks);
        // line 466
        echo "
";
        
        $__internal_d1d28b22c8f59922e8262b533c3b8ab4885588bdc8e789ccc048c95d1b22da12->leave($__internal_d1d28b22c8f59922e8262b533c3b8ab4885588bdc8e789ccc048c95d1b22da12_prof);

        
        $__internal_74a1be8f8df56041dfd14c546aec491bfb20211ecfb2b7cc3cfd20cb33bdb124->leave($__internal_74a1be8f8df56041dfd14c546aec491bfb20211ecfb2b7cc3cfd20cb33bdb124_prof);

    }

    // line 8
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_f8f4e659986451b82f2f8e408f06464845141fabc8739f432e9bbe59eb7acc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f4e659986451b82f2f8e408f06464845141fabc8739f432e9bbe59eb7acc07->enter($__internal_f8f4e659986451b82f2f8e408f06464845141fabc8739f432e9bbe59eb7acc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_2d54fa23db11a7d7665513329b271922e2f7ca9edfcbcbb3521a489db796e6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d54fa23db11a7d7665513329b271922e2f7ca9edfcbcbb3521a489db796e6a2->enter($__internal_2d54fa23db11a7d7665513329b271922e2f7ca9edfcbcbb3521a489db796e6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 9
        echo "        ";
        $this->displayParentBlock("topbody", $context, $blocks);
        echo "
        ";
        
        $__internal_2d54fa23db11a7d7665513329b271922e2f7ca9edfcbcbb3521a489db796e6a2->leave($__internal_2d54fa23db11a7d7665513329b271922e2f7ca9edfcbcbb3521a489db796e6a2_prof);

        
        $__internal_f8f4e659986451b82f2f8e408f06464845141fabc8739f432e9bbe59eb7acc07->leave($__internal_f8f4e659986451b82f2f8e408f06464845141fabc8739f432e9bbe59eb7acc07_prof);

    }

    // line 366
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fd9c1a4da15f5b54d55f022230833753d3a856926b1883b91ae69fa490954e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9c1a4da15f5b54d55f022230833753d3a856926b1883b91ae69fa490954e96->enter($__internal_fd9c1a4da15f5b54d55f022230833753d3a856926b1883b91ae69fa490954e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b201f209a1537657b9ccce6259393a72e4976ea5be6a3d9eec9fd544d03d99d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b201f209a1537657b9ccce6259393a72e4976ea5be6a3d9eec9fd544d03d99d3->enter($__internal_b201f209a1537657b9ccce6259393a72e4976ea5be6a3d9eec9fd544d03d99d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 367
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <!-- Scripts
================================================== -->
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/chosen.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/rangeSlider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/masonry.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery.jpanelmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/tooltips.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 382
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>


    <script>
        \$( document ).ready(function() {
            function getCookie(cname) {
                var name = cname + \"=\";
                        var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for(var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return \"\";
            }

            var cookieValue=getCookie('ride";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["currentuser"]) ? $context["currentuser"] : $this->getContext($context, "currentuser")), "html", null, true);
        echo "');
            var n = cookieValue.indexOf('|');
            var start = cookieValue.substr(0, n);
            var endx = cookieValue.substr(n+1, cookieValue.length);
            var end = endx.substr(1,endx.length);
            //now control cookie with backend
            console.log(start);
            console.log(end);
            function cookieRedirect() {
                \$.ajax({
                    url: Routing.generate('cookieRedirect'),
                    data: 'start=' + start +'&end='+end,
                    type: 'POST',
                    success: function (data) {
                        console.log(data[0].results);
                        if (Number(data[0].results)!=0)
                        {
                            \$(\"#cookieInvoke\").click();
                            \$(\"#modal-body\").append(\"<p>We have detected that one of the members of our community have shared a ride that can take you back from your current location.<br>\" +
                                \"Are you interested? <a href=";
        // line 425
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("trajets");
        echo ">YES!</a></p>\");
                        }

                    },
                    error:function (data) {
                        alert('Something went wrong! COOKIE WISE');
                    }
                });
            }
            cookieRedirect();
        });
    </script>

    <a href=\"#\" id=\"cookieInvoke\" data-toggle=\"modal\" data-target=\"#myModal\" hidden></a>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Map of this ride</h4>
                </div>
                <div id=\"modal-body\" class=\"modal-body\">

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- Style Switcher
    ================================================== -->
    <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/switcher.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_b201f209a1537657b9ccce6259393a72e4976ea5be6a3d9eec9fd544d03d99d3->leave($__internal_b201f209a1537657b9ccce6259393a72e4976ea5be6a3d9eec9fd544d03d99d3_prof);

        
        $__internal_fd9c1a4da15f5b54d55f022230833753d3a856926b1883b91ae69fa490954e96->leave($__internal_fd9c1a4da15f5b54d55f022230833753d3a856926b1883b91ae69fa490954e96_prof);

    }

    public function getTemplateName()
    {
        return "@PidevGestionTrajets/GestionTrajets/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  768 => 463,  727 => 425,  705 => 406,  678 => 382,  674 => 381,  670 => 380,  666 => 379,  662 => 378,  658 => 377,  654 => 376,  650 => 375,  646 => 374,  642 => 373,  638 => 372,  634 => 371,  630 => 370,  624 => 367,  615 => 366,  602 => 9,  593 => 8,  582 => 466,  580 => 366,  564 => 353,  557 => 349,  550 => 345,  543 => 341,  536 => 337,  529 => 333,  522 => 329,  496 => 305,  484 => 298,  478 => 296,  474 => 294,  471 => 293,  468 => 292,  466 => 291,  462 => 290,  455 => 286,  451 => 285,  447 => 284,  440 => 280,  436 => 279,  430 => 276,  423 => 274,  417 => 271,  410 => 269,  399 => 261,  395 => 260,  391 => 259,  383 => 254,  373 => 247,  367 => 243,  363 => 242,  354 => 236,  220 => 104,  209 => 102,  205 => 101,  194 => 92,  183 => 90,  179 => 89,  164 => 77,  96 => 11,  93 => 8,  84 => 7,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
    <!-- Map
    ================================================== -->
    <div id=\"map-container\" class=\"homepage-map margin-bottom-0\">

        <div id=\"map\">
            <!-- map goes here -->
        </div>

        <script>
            function initMap() {
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
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBKXNneTVr8yaKCVD_sCEFj9CNCtcU85V8&callback=initMap\">
        </script>



        <!-- Map Navigation -->
        <a href=\"#\" id=\"scrollEnabling\" title=\"Enable or disable scrolling on map\">Enable Scrolling</a>
        <ul id=\"mapnav-buttons\">
            <li><a href=\"#\" id=\"prevpoint\" title=\"Previous point on map\">Prev</a></li>
            <li><a href=\"#\" id=\"nextpoint\" title=\"Next point on mp\">Next</a></li>
        </ul>


        <!-- Main Search Container -->
        <div class=\"main-search-container\">

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">

                        <!-- Trigger Button -->
                        <a href=\"#\" class=\"adv-search-btn button\">Advanced Search <i class=\"fa fa-caret-up\"></i></a>

                        <!-- Main Search -->

                            <!-- Type -->
                            <div class=\"search-type\" style=\"display: none;\">
                                <label class=\"active\"><input class=\"first-tab\" name=\"tab\" checked=\"checked\" type=\"radio\">Any Status</label>
                                <label><input name=\"tab\" type=\"radio\">For Sale</label>
                                <label><input name=\"tab\" type=\"radio\">For Rent</label>
                                <div class=\"search-type-arrow\"></div>
                            </div>

                            <form method=\"POST\" action={{ path('trajetsSearch') }}>
                            <!-- Box -->
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
                                    <div class=\"col-md-3 col -sm-6\">
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
                                            <button class=\"button\">Search</button>
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
                                            <input type=\"text\" name=\"nbrplace\" placeholder=\"Seats\" data-unit=\"Person\">

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
                                            <input type=\"text\" name=\"gamme\" placeholder=\"Vehicule Type\" data-unit=\"Sq Ft\">

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
                                            <input type=\"text\" placeholder=\"Min Price Per Person\" data-unit=\"Dt\" name=\"low\">
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
                                            <input type=\"text\" placeholder=\"Max Price Per Person\" data-unit=\"Dt\" name=\"high\">
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
                            <!-- Box / End -->

                        </form>
                        <!-- Main Search -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Main Search Container / End -->

    </div>


    <!-- Content
    ================================================== -->
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12\">
                <h3 class=\"headline margin-bottom-25 margin-top-60\">Latest rides shared</h3>
                <h4><a href=\"{{ path('trajets') }}\">See All!</h4>
            </div>

            <!-- Carousel -->
            <div class=\"col-md-12\">
                <div class=\"carousel\">
                {% for trajet in trajets %}
                    <!-- Listing Item -->
                    <div class=\"carousel-item\">
                        <div class=\"listing-item\">

                            <a href=\"trajets#{{ trajet[0].id }}\" class=\"listing-img-container\">

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
                                    <h4><a href=\"https://www.google.com/maps/dir/{{ trajet[0].depart }}/{{ trajet[0].destination }}\" class=\"listing-address popup-gmaps\">
                                        <i class=\"fa fa-map-pin\"></i>
                                        {{ trajet[0].depart }}
                                    </a>
                                        <br>
                                        <a href=\"https://www.google.com/maps/dir/{{ trajet[0].depart }}/{{ trajet[0].destination }}\" class=\"listing-address popup-gmaps\">
                                            <i class=\"fa fa-map-marker\"></i>
                                            {{ trajet[0].destination }}
                                        </a>
                                    </h4>
                                    <p>{{ trajet[0].description }}</p>
                                    <h5><i class=\"fa fa-calendar\"> {{ trajet[0].datedepart|date('d-m-Y') }}</i></h5>
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
                                </div>

                            </div>

                        </div>
                    </div>
                    {% endfor %}
                    <!-- Listing Item / End -->
                </div>
            </div>
            <!-- Carousel / End -->

        </div>
    </div>



    <section class=\"fullwidth border-top margin-top-55 margin-bottom-0 padding-top-60 padding-bottom-65\" data-background-color=\"#ffffff\">
        <!-- Logo Carousel -->
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-12\">
                    <h3 class=\"headline centered margin-bottom-40 margin-top-10\">Join my ride's Partners <span>We all work together to make your Tunisian carpooling experience better!</span></h3>
                </div>

                <!-- Carousel -->
                <div class=\"col-md-12\">
                    <div class=\"logo-carousel dot-navigation\">

                        <div class=\"item\">
                            <img src=\"{{ asset('bundles/views/images/logo-01.png') }}\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"{{ asset('bundles/views/images/logo-02.png') }}\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"{{ asset('bundles/views/images/logo-03.png') }}\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"{{ asset('bundles/views/images/logo-04.png') }}\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"{{ asset('bundles/views/images/logo-05.png') }}\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"{{ asset('bundles/views/images/logo-06.png') }}\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"{{ asset('bundles/views/images/logo-07.png') }}\" alt=\"\">
                        </div>


                    </div>
                </div>
                <!-- Carousel / End -->

            </div>
        </div>
        <!-- Logo Carousel / End -->
    </section>

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


    <script>
        \$( document ).ready(function() {
            function getCookie(cname) {
                var name = cname + \"=\";
                        var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for(var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return \"\";
            }

            var cookieValue=getCookie('ride{{ currentuser }}');
            var n = cookieValue.indexOf('|');
            var start = cookieValue.substr(0, n);
            var endx = cookieValue.substr(n+1, cookieValue.length);
            var end = endx.substr(1,endx.length);
            //now control cookie with backend
            console.log(start);
            console.log(end);
            function cookieRedirect() {
                \$.ajax({
                    url: Routing.generate('cookieRedirect'),
                    data: 'start=' + start +'&end='+end,
                    type: 'POST',
                    success: function (data) {
                        console.log(data[0].results);
                        if (Number(data[0].results)!=0)
                        {
                            \$(\"#cookieInvoke\").click();
                            \$(\"#modal-body\").append(\"<p>We have detected that one of the members of our community have shared a ride that can take you back from your current location.<br>\" +
                                \"Are you interested? <a href={{ path('trajets') }}>YES!</a></p>\");
                        }

                    },
                    error:function (data) {
                        alert('Something went wrong! COOKIE WISE');
                    }
                });
            }
            cookieRedirect();
        });
    </script>

    <a href=\"#\" id=\"cookieInvoke\" data-toggle=\"modal\" data-target=\"#myModal\" hidden></a>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Map of this ride</h4>
                </div>
                <div id=\"modal-body\" class=\"modal-body\">

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- Style Switcher
    ================================================== -->
    <script src=\"{{ asset('bundles/views/scripts/switcher.js') }}\"></script>

{% endblock %}

{% endblock %}


", "@PidevGestionTrajets/GestionTrajets/home.html.twig", "/var/www/html/PIDEVS/src/Pidev/GestionTrajetsBundle/Resources/views/GestionTrajets/home.html.twig");
    }
}
