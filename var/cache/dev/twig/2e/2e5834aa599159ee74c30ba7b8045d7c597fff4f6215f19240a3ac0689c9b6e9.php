<?php

/* @PidevGestionTrajets/GestionTrajets/home.html.twig */
class __TwigTemplate_2eb653411a6dae4f7af7c1c44c61035262300fc525688cb37ac9b11263902697 extends Twig_Template
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
        $__internal_e654f32766b011e1de8bcb95dd69485b1a6074d80895fcaff06ab80fa47080c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e654f32766b011e1de8bcb95dd69485b1a6074d80895fcaff06ab80fa47080c9->enter($__internal_e654f32766b011e1de8bcb95dd69485b1a6074d80895fcaff06ab80fa47080c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/home.html.twig"));

        $__internal_05c039030d7e29860df442f5ed6ed185364560869f98360357feb8cb47db5629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c039030d7e29860df442f5ed6ed185364560869f98360357feb8cb47db5629->enter($__internal_05c039030d7e29860df442f5ed6ed185364560869f98360357feb8cb47db5629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e654f32766b011e1de8bcb95dd69485b1a6074d80895fcaff06ab80fa47080c9->leave($__internal_e654f32766b011e1de8bcb95dd69485b1a6074d80895fcaff06ab80fa47080c9_prof);

        
        $__internal_05c039030d7e29860df442f5ed6ed185364560869f98360357feb8cb47db5629->leave($__internal_05c039030d7e29860df442f5ed6ed185364560869f98360357feb8cb47db5629_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_40d19b11825b7bf887508b021810e240905a345959ce9513cd198e15c0413fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d19b11825b7bf887508b021810e240905a345959ce9513cd198e15c0413fb0->enter($__internal_40d19b11825b7bf887508b021810e240905a345959ce9513cd198e15c0413fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6090f05bc9844db41557c106d4f8782a57693d469c58476858cc40f1bba9dbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6090f05bc9844db41557c106d4f8782a57693d469c58476858cc40f1bba9dbe1->enter($__internal_6090f05bc9844db41557c106d4f8782a57693d469c58476858cc40f1bba9dbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_6090f05bc9844db41557c106d4f8782a57693d469c58476858cc40f1bba9dbe1->leave($__internal_6090f05bc9844db41557c106d4f8782a57693d469c58476858cc40f1bba9dbe1_prof);

        
        $__internal_40d19b11825b7bf887508b021810e240905a345959ce9513cd198e15c0413fb0->leave($__internal_40d19b11825b7bf887508b021810e240905a345959ce9513cd198e15c0413fb0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_147fc233be3b97a9d83e4c8e355394d32fd9df7e5e76f32d6808eb81e9cddf3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147fc233be3b97a9d83e4c8e355394d32fd9df7e5e76f32d6808eb81e9cddf3d->enter($__internal_147fc233be3b97a9d83e4c8e355394d32fd9df7e5e76f32d6808eb81e9cddf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_786adf53272914c3963d04c22bce1fed4848758a9ecfcf5f80572052b76e096a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786adf53272914c3963d04c22bce1fed4848758a9ecfcf5f80572052b76e096a->enter($__internal_786adf53272914c3963d04c22bce1fed4848758a9ecfcf5f80572052b76e096a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_786adf53272914c3963d04c22bce1fed4848758a9ecfcf5f80572052b76e096a->leave($__internal_786adf53272914c3963d04c22bce1fed4848758a9ecfcf5f80572052b76e096a_prof);

        
        $__internal_147fc233be3b97a9d83e4c8e355394d32fd9df7e5e76f32d6808eb81e9cddf3d->leave($__internal_147fc233be3b97a9d83e4c8e355394d32fd9df7e5e76f32d6808eb81e9cddf3d_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_c05ad633ecffe8ba525e22851db1ba0ab7acfb6e18d95828040d27459ed5c18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05ad633ecffe8ba525e22851db1ba0ab7acfb6e18d95828040d27459ed5c18c->enter($__internal_c05ad633ecffe8ba525e22851db1ba0ab7acfb6e18d95828040d27459ed5c18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_495f3e2151a49b4f281750026e7ae5dce0cb5dd21f5d244edf128dde40792ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495f3e2151a49b4f281750026e7ae5dce0cb5dd21f5d244edf128dde40792ed7->enter($__internal_495f3e2151a49b4f281750026e7ae5dce0cb5dd21f5d244edf128dde40792ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                        <select name=\"depart\" data-placeholder=\"Departure\" class=\"chosen-select-no-single\">
                                            <option>Tunis
                                            <option>Arianna
                                            <option>Ben Arous
                                        </select>
                                    </div>

                                    <!-- Property Type -->
                                    <div class=\"col-md-3 col -sm-6\">
                                        <select name=\"destination\" data-placeholder=\"Destination\" class=\"chosen-select-no-single\">
                                            <option>Tunis
                                            <option>Arianna
                                        </select>
                                    </div>

                                    <!-- Main Search Input -->
                                    <div class=\"col-md-6\">
                                        <div class=\"main-search-input\">
                                            <input type=\"text\" placeholder=\"Enter address e.g. street, city or state\" value=\"\">
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
                                            <input type=\"text\" placeholder=\"Min Price Per Person\" data-unit=\"Dt\">
                                            <select>
                                                <option>Min Price
                                                <option>1 000
                                                <option>2 000
                                                <option>3 000
                                                <option>4 000
                                                <option>5 000
                                                <option>10 000
                                                <option>15 000
                                                <option>20 000
                                                <option>30 000
                                                <option>40 000
                                                <option>50 000
                                                <option>60 000
                                                <option>70 000
                                                <option>80 000
                                                <option>90 000
                                                <option>100 000
                                                <option>110 000
                                                <option>120 000
                                                <option>130 000
                                                <option>140 000
                                                <option>150 000
                                            </select>
                                        </div>
                                        <!-- Select Input / End -->

                                    </div>


                                    <!-- Max Price -->
                                    <div class=\"col-md-3 col-sm-6\">

                                        <!-- Select Input -->
                                        <div class=\"select-input disabled-first-option\">
                                            <input type=\"text\" placeholder=\"Max Price Per Person\" data-unit=\"Dt\">
                                            <select>
                                                <option>Max Price
                                                <option>1 000
                                                <option>2 000
                                                <option>3 000
                                                <option>4 000
                                                <option>5 000
                                                <option>10 000
                                                <option>15 000
                                                <option>20 000
                                                <option>30 000
                                                <option>40 000
                                                <option>50 000
                                                <option>60 000
                                                <option>70 000
                                                <option>80 000
                                                <option>90 000
                                                <option>100 000
                                                <option>110 000
                                                <option>120 000
                                                <option>130 000
                                                <option>140 000
                                                <option>150 000
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
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("trajets");
        echo "\">See All!</h4>
            </div>

            <!-- Carousel -->
            <div class=\"col-md-12\">
                <div class=\"carousel\">
                ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajets"]) ? $context["trajets"] : $this->getContext($context, "trajets")));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 256
            echo "                    <!-- Listing Item -->
                    <div class=\"carousel-item\">
                        <div class=\"listing-item\">

                            <a href=\"trajets#";
            // line 260
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "\" class=\"listing-img-container\">

                                <div class=\"listing-badges\">
                                    <span class=\"featured\">Featured</span>
                                </div>

                                <div class=\"listing-img-content\">
                                    <span class=\"listing-price\"><i>";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "cout", array()), "html", null, true);
            echo " Dt/ seat</i></span>
                                    <span class=\"like-icon tooltip\"></span>
                                </div>

                                <div class=\"listing-carousel\">
                                    <div><img src=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                                    <div><img src=\"";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                                    <div><img src=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                                </div>

                            </a>

                            <div class=\"listing-content\">

                                <div class=\"listing-title\">
                                    <h4><a href=\"https://www.google.com/maps/dir/";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "\" class=\"listing-address popup-gmaps\">
                                        <i class=\"fa fa-map-pin\"></i>
                                        ";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "
                                    </a>
                                        <br>
                                        <a href=\"https://www.google.com/maps/dir/";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "\" class=\"listing-address popup-gmaps\">
                                            <i class=\"fa fa-map-marker\"></i>
                                            ";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "
                                        </a>
                                    </h4>
                                    <p>";
            // line 292
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "description", array()), "html", null, true);
            echo "</p>
                                    <h5><i class=\"fa fa-calendar\"> ";
            // line 293
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "datedepart", array()), "d-m-Y"), "html", null, true);
            echo "</i></h5>
                                </div>

                                <ul class=\"listing-features\">
                                    <li>Cost <span>";
            // line 297
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "cout", array()) . " Dt"), "html", null, true);
            echo "</span></li>
                                    <li>Seats <span>";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "nbrplacedispo", array()), "html", null, true);
            echo "</span></li>
                                    <li>Car <span>";
            // line 299
            echo twig_escape_filter($this->env, (($this->getAttribute($context["trajet"], "modele", array(), "array") . " | ") . $this->getAttribute($context["trajet"], "gamme", array(), "array")), "html", null, true);
            echo "</span></li>
                                </ul>

                                <div class=\"listing-footer\">
                                    <a href=\"#\"><i class=\"fa fa-user\"></i> ";
            // line 303
            echo twig_escape_filter($this->env, $this->getAttribute($context["trajet"], "nom", array(), "array"), "html", null, true);
            echo "</a>
                                    ";
            // line 304
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env), "diff", array(0 => twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "datepub", array()))), "method");
            // line 305
            echo "                                    ";
            $context["leftDays"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
            // line 306
            echo "                                    ";
            if (((isset($context["leftDays"]) ? $context["leftDays"] : $this->getContext($context, "leftDays")) == 1)) {
                // line 307
                echo "                                        <span><i class=\"fa fa-calendar-o\"></i> 1 day ago</span>
                                    ";
            } else {
                // line 309
                echo "                                    <span><i class=\"fa fa-calendar-o\"></i>";
                echo twig_escape_filter($this->env, (isset($context["leftDays"]) ? $context["leftDays"] : $this->getContext($context, "leftDays")), "html", null, true);
                echo " days ago</span>
                                    ";
            }
            // line 311
            echo "                                </div>

                            </div>

                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trajet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
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
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-01.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-02.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-03.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-04.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-05.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/logo-06.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 366
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
        // line 379
        $this->displayBlock('footer', $context, $blocks);
        // line 401
        echo "
";
        
        $__internal_495f3e2151a49b4f281750026e7ae5dce0cb5dd21f5d244edf128dde40792ed7->leave($__internal_495f3e2151a49b4f281750026e7ae5dce0cb5dd21f5d244edf128dde40792ed7_prof);

        
        $__internal_c05ad633ecffe8ba525e22851db1ba0ab7acfb6e18d95828040d27459ed5c18c->leave($__internal_c05ad633ecffe8ba525e22851db1ba0ab7acfb6e18d95828040d27459ed5c18c_prof);

    }

    // line 8
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_2d37e68d57cb39e1d22c568359614ca06ca83c29c83dabbc9f19ec2fe5874923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d37e68d57cb39e1d22c568359614ca06ca83c29c83dabbc9f19ec2fe5874923->enter($__internal_2d37e68d57cb39e1d22c568359614ca06ca83c29c83dabbc9f19ec2fe5874923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_91103b0638d2d2821f26afb5d99fe8913e1bb0ef9be3789b46b032772bc211a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91103b0638d2d2821f26afb5d99fe8913e1bb0ef9be3789b46b032772bc211a0->enter($__internal_91103b0638d2d2821f26afb5d99fe8913e1bb0ef9be3789b46b032772bc211a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 9
        echo "        ";
        $this->displayParentBlock("topbody", $context, $blocks);
        echo "
        ";
        
        $__internal_91103b0638d2d2821f26afb5d99fe8913e1bb0ef9be3789b46b032772bc211a0->leave($__internal_91103b0638d2d2821f26afb5d99fe8913e1bb0ef9be3789b46b032772bc211a0_prof);

        
        $__internal_2d37e68d57cb39e1d22c568359614ca06ca83c29c83dabbc9f19ec2fe5874923->leave($__internal_2d37e68d57cb39e1d22c568359614ca06ca83c29c83dabbc9f19ec2fe5874923_prof);

    }

    // line 379
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e962b4b2022277e6b86c25e0ea352810b8c7287fdaeb94243bfeaab16c525c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e962b4b2022277e6b86c25e0ea352810b8c7287fdaeb94243bfeaab16c525c77->enter($__internal_e962b4b2022277e6b86c25e0ea352810b8c7287fdaeb94243bfeaab16c525c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8b1a1e06c32b0c38d2c389ea74072c6ae23bd1d2000242c1c0aec5ca3d528f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1a1e06c32b0c38d2c389ea74072c6ae23bd1d2000242c1c0aec5ca3d528f0a->enter($__internal_8b1a1e06c32b0c38d2c389ea74072c6ae23bd1d2000242c1c0aec5ca3d528f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 380
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <!-- Scripts
================================================== -->
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/chosen.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/rangeSlider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/masonry.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery.jpanelmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/tooltips.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/custom.js"), "html", null, true);
        echo "\"></script>


    <!-- Style Switcher
    ================================================== -->
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/switcher.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_8b1a1e06c32b0c38d2c389ea74072c6ae23bd1d2000242c1c0aec5ca3d528f0a->leave($__internal_8b1a1e06c32b0c38d2c389ea74072c6ae23bd1d2000242c1c0aec5ca3d528f0a_prof);

        
        $__internal_e962b4b2022277e6b86c25e0ea352810b8c7287fdaeb94243bfeaab16c525c77->leave($__internal_e962b4b2022277e6b86c25e0ea352810b8c7287fdaeb94243bfeaab16c525c77_prof);

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
        return array (  663 => 398,  655 => 393,  651 => 392,  647 => 391,  643 => 390,  639 => 389,  635 => 388,  631 => 387,  627 => 386,  623 => 385,  619 => 384,  615 => 383,  609 => 380,  600 => 379,  587 => 9,  578 => 8,  567 => 401,  565 => 379,  549 => 366,  542 => 362,  535 => 358,  528 => 354,  521 => 350,  514 => 346,  507 => 342,  481 => 318,  469 => 311,  463 => 309,  459 => 307,  456 => 306,  453 => 305,  451 => 304,  447 => 303,  440 => 299,  436 => 298,  432 => 297,  425 => 293,  421 => 292,  415 => 289,  408 => 287,  402 => 284,  395 => 282,  384 => 274,  380 => 273,  376 => 272,  368 => 267,  358 => 260,  352 => 256,  348 => 255,  339 => 249,  164 => 77,  96 => 11,  93 => 8,  84 => 7,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Index{% endblock %}
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
                                        <select name=\"depart\" data-placeholder=\"Departure\" class=\"chosen-select-no-single\">
                                            <option>Tunis
                                            <option>Arianna
                                            <option>Ben Arous
                                        </select>
                                    </div>

                                    <!-- Property Type -->
                                    <div class=\"col-md-3 col -sm-6\">
                                        <select name=\"destination\" data-placeholder=\"Destination\" class=\"chosen-select-no-single\">
                                            <option>Tunis
                                            <option>Arianna
                                        </select>
                                    </div>

                                    <!-- Main Search Input -->
                                    <div class=\"col-md-6\">
                                        <div class=\"main-search-input\">
                                            <input type=\"text\" placeholder=\"Enter address e.g. street, city or state\" value=\"\">
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
                                            <input type=\"text\" placeholder=\"Min Price Per Person\" data-unit=\"Dt\">
                                            <select>
                                                <option>Min Price
                                                <option>1 000
                                                <option>2 000
                                                <option>3 000
                                                <option>4 000
                                                <option>5 000
                                                <option>10 000
                                                <option>15 000
                                                <option>20 000
                                                <option>30 000
                                                <option>40 000
                                                <option>50 000
                                                <option>60 000
                                                <option>70 000
                                                <option>80 000
                                                <option>90 000
                                                <option>100 000
                                                <option>110 000
                                                <option>120 000
                                                <option>130 000
                                                <option>140 000
                                                <option>150 000
                                            </select>
                                        </div>
                                        <!-- Select Input / End -->

                                    </div>


                                    <!-- Max Price -->
                                    <div class=\"col-md-3 col-sm-6\">

                                        <!-- Select Input -->
                                        <div class=\"select-input disabled-first-option\">
                                            <input type=\"text\" placeholder=\"Max Price Per Person\" data-unit=\"Dt\">
                                            <select>
                                                <option>Max Price
                                                <option>1 000
                                                <option>2 000
                                                <option>3 000
                                                <option>4 000
                                                <option>5 000
                                                <option>10 000
                                                <option>15 000
                                                <option>20 000
                                                <option>30 000
                                                <option>40 000
                                                <option>50 000
                                                <option>60 000
                                                <option>70 000
                                                <option>80 000
                                                <option>90 000
                                                <option>100 000
                                                <option>110 000
                                                <option>120 000
                                                <option>130 000
                                                <option>140 000
                                                <option>150 000
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


    <!-- Style Switcher
    ================================================== -->
    <script src=\"{{ asset('bundles/views/scripts/switcher.js') }}\"></script>

{% endblock %}

{% endblock %}


", "@PidevGestionTrajets/GestionTrajets/home.html.twig", "/var/www/html/PIDEVS/src/Pidev/GestionTrajetsBundle/Resources/views/GestionTrajets/home.html.twig");
    }
}
