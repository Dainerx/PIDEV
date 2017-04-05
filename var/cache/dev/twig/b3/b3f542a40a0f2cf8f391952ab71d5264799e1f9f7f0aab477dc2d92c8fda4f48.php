<?php

/* @PidevGestionTrajets/GestionTrajets/trajets.html.twig */
class __TwigTemplate_49a8abeb8368d4d6af7da860a4b30ef3646d44395587f39ed3d6e50e308deb18 extends Twig_Template
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
        $__internal_eafcd37dd1001673e9c4f919b24f10f6aeb2757b1a53840c2b107f71d191cf3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafcd37dd1001673e9c4f919b24f10f6aeb2757b1a53840c2b107f71d191cf3b->enter($__internal_eafcd37dd1001673e9c4f919b24f10f6aeb2757b1a53840c2b107f71d191cf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/trajets.html.twig"));

        $__internal_1f2d8fb991c5ccb6d7c3d27119d0b24902b8f35890defaa29526e987bc6ef0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2d8fb991c5ccb6d7c3d27119d0b24902b8f35890defaa29526e987bc6ef0fd->enter($__internal_1f2d8fb991c5ccb6d7c3d27119d0b24902b8f35890defaa29526e987bc6ef0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PidevGestionTrajets/GestionTrajets/trajets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eafcd37dd1001673e9c4f919b24f10f6aeb2757b1a53840c2b107f71d191cf3b->leave($__internal_eafcd37dd1001673e9c4f919b24f10f6aeb2757b1a53840c2b107f71d191cf3b_prof);

        
        $__internal_1f2d8fb991c5ccb6d7c3d27119d0b24902b8f35890defaa29526e987bc6ef0fd->leave($__internal_1f2d8fb991c5ccb6d7c3d27119d0b24902b8f35890defaa29526e987bc6ef0fd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e6fd1f6da1b1efb07d4c7afcbba9489415cd88185d04229669b63bdc5ac2f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6fd1f6da1b1efb07d4c7afcbba9489415cd88185d04229669b63bdc5ac2f0d->enter($__internal_4e6fd1f6da1b1efb07d4c7afcbba9489415cd88185d04229669b63bdc5ac2f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cd3441798491bdbcec9bc5304ff8ddde8bd964cfba22c227d6401b215d22dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd3441798491bdbcec9bc5304ff8ddde8bd964cfba22c227d6401b215d22dc1->enter($__internal_7cd3441798491bdbcec9bc5304ff8ddde8bd964cfba22c227d6401b215d22dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_7cd3441798491bdbcec9bc5304ff8ddde8bd964cfba22c227d6401b215d22dc1->leave($__internal_7cd3441798491bdbcec9bc5304ff8ddde8bd964cfba22c227d6401b215d22dc1_prof);

        
        $__internal_4e6fd1f6da1b1efb07d4c7afcbba9489415cd88185d04229669b63bdc5ac2f0d->leave($__internal_4e6fd1f6da1b1efb07d4c7afcbba9489415cd88185d04229669b63bdc5ac2f0d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_340b1cfee672201ab09d91738c473667623458241c3984312969964c38d60d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340b1cfee672201ab09d91738c473667623458241c3984312969964c38d60d84->enter($__internal_340b1cfee672201ab09d91738c473667623458241c3984312969964c38d60d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c1d9fbef89c458d71baae6a8464f5bb44d22b04cfc1cc61dbbfe350138346e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d9fbef89c458d71baae6a8464f5bb44d22b04cfc1cc61dbbfe350138346e78->enter($__internal_c1d9fbef89c458d71baae6a8464f5bb44d22b04cfc1cc61dbbfe350138346e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_c1d9fbef89c458d71baae6a8464f5bb44d22b04cfc1cc61dbbfe350138346e78->leave($__internal_c1d9fbef89c458d71baae6a8464f5bb44d22b04cfc1cc61dbbfe350138346e78_prof);

        
        $__internal_340b1cfee672201ab09d91738c473667623458241c3984312969964c38d60d84->leave($__internal_340b1cfee672201ab09d91738c473667623458241c3984312969964c38d60d84_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc1812a1b4581dcb56b8829897387d2af915423866f401bc2ca8ffaac881bb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1812a1b4581dcb56b8829897387d2af915423866f401bc2ca8ffaac881bb47->enter($__internal_bc1812a1b4581dcb56b8829897387d2af915423866f401bc2ca8ffaac881bb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5642af0155821b686cf60679b1bd34445ba760c275007a45b5f92880a118fdfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5642af0155821b686cf60679b1bd34445ba760c275007a45b5f92880a118fdfd->enter($__internal_5642af0155821b686cf60679b1bd34445ba760c275007a45b5f92880a118fdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 23
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
                                    <option>Tunis
                                    <option>Arianna
                                    <option>Ben Arous
                                </select>
                            </div>
                        </div>

                        <!-- Property Type -->
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"select-input\">
                                <input type=\"text\" name=\"destination\" placeholder=\"Destination\" data-unit=\"\" value=\"\" required>
                                <select>
                                <option>Tunis
                                <option>Arianna
                                <option>Ben Arous
                                </select>
                            </div>
                        </div>

                        <!-- Main Search Input -->
                        <div class=\"col-md-6\">
                            <div class=\"main-search-input\">
                                <input type=\"text\" placeholder=\"Enter address e.g. street, city or state\" value=\"\">
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
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajets"]) ? $context["trajets"] : $this->getContext($context, "trajets")));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 231
            echo "                <div class=\"listing-item\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "\">

                    <a href=\"#\" onclick=\"\" class=\"listing-img-container\">

                        <div class=\"listing-badges\">
                            <span class=\"featured\">Featured</span>
                        </div>

                        <div class=\"listing-img-content\">
                            <span class=\"listing-price\"><i>";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "cout", array()), "html", null, true);
            echo " Dt/ seat</i></span>
                            <span class=\"like-icon tooltip\"></span>
                        </div>

                        <div class=\"listing-carousel\">
                            <div><img src=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                            <div><img src=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                            <div><img src=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/images/car-pooling.jpg"), "html", null, true);
            echo "\" alt=\"\"></div>
                        </div>
                    </a>

                    <div class=\"listing-content\">

                        <div class=\"listing-title\">
                            <h4><a href=\"https://www.google.com/maps/dir/";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "\" class=\"listing-address popup-gmaps\">
                                    <i class=\"fa fa-map-pin\"></i>
                                    ";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "
                                </a>
                                <br>
                                <a href=\"https://www.google.com/maps/dir/";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "depart", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "\" class=\"listing-address popup-gmaps\">
                                    <i class=\"fa fa-map-marker\"></i>
                            ";
            // line 261
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "destination", array()), "html", null, true);
            echo "
                            </a>
                            </h4>
                            <p>";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "description", array()), "html", null, true);
            echo "</p>
                            <h5><i class=\"fa fa-calendar\"> ";
            // line 265
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "datedepart", array()), "d-m-Y"), "html", null, true);
            echo "</i></h5>
                            <a href=\"#\" onclick=\"book(";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "id", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "idMembre", array()), "id", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "nbrplacedispo", array()), "html", null, true);
            echo ")\" class=\"details button border\">Book</a>
                        </div>


                    <ul class=\"listing-features\">
                        <li>Cost <span>";
            // line 271
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "cout", array()) . " Dt"), "html", null, true);
            echo "</span></li>
                        <li>Seats <span>";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "nbrplacedispo", array()), "html", null, true);
            echo "</span></li>
                        <li>Car <span>";
            // line 273
            echo twig_escape_filter($this->env, (($this->getAttribute($context["trajet"], "modele", array(), "array") . " | ") . $this->getAttribute($context["trajet"], "gamme", array(), "array")), "html", null, true);
            echo "</span></li>
                        </ul>

                        <div class=\"listing-footer\">
                            <a href=\"#\"><i class=\"fa fa-user\"></i> ";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($context["trajet"], "nom", array(), "array"), "html", null, true);
            echo "</a>
                            ";
            // line 278
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env), "diff", array(0 => twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], 0, array(), "array"), "datepub", array()))), "method");
            // line 279
            echo "                            ";
            $context["leftDays"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
            // line 280
            echo "                            ";
            if (((isset($context["leftDays"]) ? $context["leftDays"] : $this->getContext($context, "leftDays")) == 1)) {
                // line 281
                echo "                                <span><i class=\"fa fa-calendar-o\"></i> 1 day ago</span>
                            ";
            } else {
                // line 283
                echo "                                <span><i class=\"fa fa-calendar-o\"></i>";
                echo twig_escape_filter($this->env, (isset($context["leftDays"]) ? $context["leftDays"] : $this->getContext($context, "leftDays")), "html", null, true);
                echo " days ago</span>
                            ";
            }
            // line 285
            echo "                        </div>

                    </div>

                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trajet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
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
        // line 322
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_5642af0155821b686cf60679b1bd34445ba760c275007a45b5f92880a118fdfd->leave($__internal_5642af0155821b686cf60679b1bd34445ba760c275007a45b5f92880a118fdfd_prof);

        
        $__internal_bc1812a1b4581dcb56b8829897387d2af915423866f401bc2ca8ffaac881bb47->leave($__internal_bc1812a1b4581dcb56b8829897387d2af915423866f401bc2ca8ffaac881bb47_prof);

    }

    // line 8
    public function block_topbody($context, array $blocks = array())
    {
        $__internal_147dc06e81646c734b8afe65c3f41933c46da377b55525cbc94a495b7a5c5243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147dc06e81646c734b8afe65c3f41933c46da377b55525cbc94a495b7a5c5243->enter($__internal_147dc06e81646c734b8afe65c3f41933c46da377b55525cbc94a495b7a5c5243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        $__internal_fb08d02d05dfdac81331d8451ebc6f1c6937c40dba5ff81e98578ba0f55aba5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb08d02d05dfdac81331d8451ebc6f1c6937c40dba5ff81e98578ba0f55aba5e->enter($__internal_fb08d02d05dfdac81331d8451ebc6f1c6937c40dba5ff81e98578ba0f55aba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbody"));

        // line 9
        echo "        ";
        $this->displayParentBlock("topbody", $context, $blocks);
        echo "
    ";
        
        $__internal_fb08d02d05dfdac81331d8451ebc6f1c6937c40dba5ff81e98578ba0f55aba5e->leave($__internal_fb08d02d05dfdac81331d8451ebc6f1c6937c40dba5ff81e98578ba0f55aba5e_prof);

        
        $__internal_147dc06e81646c734b8afe65c3f41933c46da377b55525cbc94a495b7a5c5243->leave($__internal_147dc06e81646c734b8afe65c3f41933c46da377b55525cbc94a495b7a5c5243_prof);

    }

    // line 322
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1e6498060947641d4ca74da7f2d7c12019c4dc8dac238cffdc43f3a0415ebb07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6498060947641d4ca74da7f2d7c12019c4dc8dac238cffdc43f3a0415ebb07->enter($__internal_1e6498060947641d4ca74da7f2d7c12019c4dc8dac238cffdc43f3a0415ebb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_91c33800c2b7350e40dd5fa384133bd469ac1e2af866c43eda294b16575fd732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c33800c2b7350e40dd5fa384133bd469ac1e2af866c43eda294b16575fd732->enter($__internal_91c33800c2b7350e40dd5fa384133bd469ac1e2af866c43eda294b16575fd732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 323
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <!-- Scripts
================================================== -->
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/chosen.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/rangeSlider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/masonry.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/jquery.jpanelmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/tooltips.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 338
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>



        <script>
            function book(idTrajet,idMembre,places){
                var result = confirm(\"Are you sure you wanna book a seat in this ride?\");
                if (result == false)
                    return;
                else if (places==0)
                {
                    alert ('This ride is full you cannot book a seat on it.');
                    return;
                }
                else
                    bookAction(idTrajet,idMembre);
            }


            function bookAction(idTrajet,idMembre) {
                \$.ajax({
                    url: Routing.generate('bookSeat'),
                    data: 'idTrajet=' + idTrajet +'&idMembre='+idMembre,
                    type: 'POST',
                    success: function () {
                        alert('You have successfully booked a seat in this ride.');
                    },
                    error:function (){
                        alert ('we are fucked');
                    }
                });
            }
        </script>


        <!-- Modal -->
        <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Modal Header</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>Some text in the modal.</p>
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
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/views/scripts/switcher.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_91c33800c2b7350e40dd5fa384133bd469ac1e2af866c43eda294b16575fd732->leave($__internal_91c33800c2b7350e40dd5fa384133bd469ac1e2af866c43eda294b16575fd732_prof);

        
        $__internal_1e6498060947641d4ca74da7f2d7c12019c4dc8dac238cffdc43f3a0415ebb07->leave($__internal_1e6498060947641d4ca74da7f2d7c12019c4dc8dac238cffdc43f3a0415ebb07_prof);

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
        return array (  648 => 397,  586 => 338,  582 => 337,  578 => 336,  574 => 335,  570 => 334,  566 => 333,  562 => 332,  558 => 331,  554 => 330,  550 => 329,  546 => 328,  542 => 327,  538 => 326,  531 => 323,  522 => 322,  509 => 9,  500 => 8,  490 => 322,  457 => 291,  446 => 285,  440 => 283,  436 => 281,  433 => 280,  430 => 279,  428 => 278,  424 => 277,  417 => 273,  413 => 272,  409 => 271,  397 => 266,  393 => 265,  389 => 264,  383 => 261,  376 => 259,  370 => 256,  363 => 254,  353 => 247,  349 => 246,  345 => 245,  337 => 240,  324 => 231,  320 => 230,  110 => 23,  96 => 11,  93 => 8,  84 => 7,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
                                    <option>Tunis
                                    <option>Arianna
                                    <option>Ben Arous
                                </select>
                            </div>
                        </div>

                        <!-- Property Type -->
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"select-input\">
                                <input type=\"text\" name=\"destination\" placeholder=\"Destination\" data-unit=\"\" value=\"\" required>
                                <select>
                                <option>Tunis
                                <option>Arianna
                                <option>Ben Arous
                                </select>
                            </div>
                        </div>

                        <!-- Main Search Input -->
                        <div class=\"col-md-6\">
                            <div class=\"main-search-input\">
                                <input type=\"text\" placeholder=\"Enter address e.g. street, city or state\" value=\"\">
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
                {% for trajet in trajets %}
                <div class=\"listing-item\" id=\"{{ trajet[0].id }}\">

                    <a href=\"#\" onclick=\"\" class=\"listing-img-container\">

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
                            <a href=\"#\" onclick=\"book({{ trajet[0].id }},{{ trajet[0].idMembre.id }},{{ trajet[0].nbrplacedispo }})\" class=\"details button border\">Book</a>
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



        <script>
            function book(idTrajet,idMembre,places){
                var result = confirm(\"Are you sure you wanna book a seat in this ride?\");
                if (result == false)
                    return;
                else if (places==0)
                {
                    alert ('This ride is full you cannot book a seat on it.');
                    return;
                }
                else
                    bookAction(idTrajet,idMembre);
            }


            function bookAction(idTrajet,idMembre) {
                \$.ajax({
                    url: Routing.generate('bookSeat'),
                    data: 'idTrajet=' + idTrajet +'&idMembre='+idMembre,
                    type: 'POST',
                    success: function () {
                        alert('You have successfully booked a seat in this ride.');
                    },
                    error:function (){
                        alert ('we are fucked');
                    }
                });
            }
        </script>


        <!-- Modal -->
        <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Modal Header</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>Some text in the modal.</p>
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
", "@PidevGestionTrajets/GestionTrajets/trajets.html.twig", "/var/www/html/PIDEVS/src/Pidev/GestionTrajetsBundle/Resources/views/GestionTrajets/trajets.html.twig");
    }
}
